<?php

namespace App\Http\Controllers;

use App\Mail\PembelianEmail;
use App\Models\Game;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PembelianController extends Controller
{
    public function proses(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'qty' => 'required|numeric|min:1',
        ]);

        $game = Game::find($id);

        $nama = $game->name;
        $code = $game->id_game;
        $asli = $game->price;
        $harga = $game->discount ?? $game->price;
        $total = $harga * $request->qty;

        $redeemCode = $this->generateRedeemCode();

        $data = [
            'email' => $request->email,
            'game' => $nama,
            'code' => $code,
            'price' => $asli,
            'qty' => $request->qty,
            'total' => $total,
            'redeem_code' => $redeemCode,
        ];

        Pembelian::create($data);

        try {
            Mail::to($request->email)->send(new PembelianEmail($data));
        } catch (\Exception $e) {
            return back()->with('error', 'Email gagal dikirim: ' . $e->getMessage());
        }

        return redirect()->route('struk', $id);
    }

    /**
     * Generate a random redeem code with format X923Q-Q45HT-QCWI9
     *
     * @return string
     */
    private function generateRedeemCode()
    {
        $segments = [];

        for ($i = 0; $i < 3; $i++) {
            $segments[] = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5));
        }

        return implode('-', $segments);
    }

    public function struk($id)
    {
        $data = Pembelian::where('code', $id)->first();
        return view('struk', compact('data'));
    }
}
