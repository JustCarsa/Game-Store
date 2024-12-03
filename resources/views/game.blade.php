@extends('app', [
    'title' => $game->name,
])

@section('content')
    <section>
        <div class="container-fluid mb-5"
            style="background-image: url('https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/{{ $game->id_game }}/header.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="d-flex flex-column align-items-center justify-content-center gambar">
                <div class="text-center py-4 px-5" style="background-color: rgba(0, 0, 0, 0.73); border-radius: 10px;">
                    <h1 class="font-weight-semi-bold text-uppercase mb-1 text-white">
                        {{ $game->name }}
                    </h1>
                    <div class="d-inline-flex">
                        <p class="m-0">
                            <a href="{{ route('home') }}" style="text-decoration: none;">Home</a>
                        </p>
                        <p class="m-0 px-2">-</p>
                        <p class="m-0 text-primary">Pembelian</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="px-3 col-12">
                    <div class="row pb-3">
                        <form class="w-100" action="{{ route('beli', $game->id_game) }}" method="POST">
                            @csrf
                            <div class="col-12 pb-1">
                                <h6 class="text-primary">﹒via user id server.</h6>
                                <h6 class="text-primary">﹒proses 5-30 menit.</h6>
                                <h6 class="mb-4 text-primary">
                                    ﹒pilih nominal top up sesuai kebutuhan kamu
                                </h6>
                                <div class="mb-3 title">
                                    <span class="circle-title">1</span> Detail Pembelian
                                </div>

                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <div class="col-sm-12 col-md-6 mb-2 px-0 pr-md-2">
                                                <input type="text" name="email" class="form-control shadow-sm"
                                                    placeholder="Alamat Email" style="height: 50px;">
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-2 px-0 pr-md-2">
                                                <input type="number" name="qty" class="form-control shadow-sm"
                                                    placeholder="Jumlah" style="height: 50px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 title">
                                    <span class="circle-title">2</span> Metode Pembayaran
                                </div>
                                @if ($game->discount != null)
                                    <div>
                                        <div class="d-flex flex-wrap mb-5">
                                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1 px-2">
                                                <div class="h-100 card product-item" style="cursor: pointer;">
                                                    <div class="check">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="card-body text-center p-0 pb-3">
                                                        <h6 class="text-truncate mb-3 pt-4">
                                                            DANA
                                                        </h6>
                                                        <div class="d-flex justify-content-center">
                                                            <h6>
                                                                Rp {{ number_format($game->discount, 0, ',', '.') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1 px-2">
                                                <div class="h-100 card product-item" style="cursor: pointer;">
                                                    <div class="check"><i class="fa fa-check"></i></div>
                                                    <div class="card-body text-center p-0 pb-3">
                                                        <h6 class="text-truncate mb-3 pt-4">
                                                            GOPAY
                                                        </h6>
                                                        <div class="d-flex justify-content-center">
                                                            <h6>
                                                                Rp {{ number_format($game->discount, 0, ',', '.') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1 px-2">
                                                <div class="h-100 card product-item" style="cursor: pointer;">
                                                    <div class="check">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="card-body text-center p-0 pb-3">
                                                        <h6 class="text-truncate mb-3 pt-4">
                                                            OVO
                                                        </h6>
                                                        <div class="d-flex justify-content-center">
                                                            <h6>
                                                                Rp {{ number_format($game->discount, 0, ',', '.') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="d-flex flex-wrap mb-5">
                                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1 px-2">
                                                <div class="h-100 card product-item" style="cursor: pointer;">
                                                    <div class="check">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="card-body text-center p-0 pb-3">
                                                        <h6 class="text-truncate mb-3 pt-4">
                                                            DANA
                                                        </h6>
                                                        <div class="d-flex justify-content-center">
                                                            <h6>
                                                                Rp {{ number_format($game->price, 0, ',', '.') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1 px-2">
                                                <div class="h-100 card product-item" style="cursor: pointer;">
                                                    <div class="check"><i class="fa fa-check"></i></div>
                                                    <div class="card-body text-center p-0 pb-3">
                                                        <h6 class="text-truncate mb-3 pt-4">
                                                            GOPAY
                                                        </h6>
                                                        <div class="d-flex justify-content-center">
                                                            <h6>
                                                                Rp {{ number_format($game->price, 0, ',', '.') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1 px-2">
                                                <div class="h-100 card product-item" style="cursor: pointer;">
                                                    <div class="check">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="card-body text-center p-0 pb-3">
                                                        <h6 class="text-truncate mb-3 pt-4">
                                                            OVO
                                                        </h6>
                                                        <div class="d-flex justify-content-center">
                                                            <h6>
                                                                Rp {{ number_format($game->price, 0, ',', '.') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <button type="submit" class="submit-button btn">Beli sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom.javascript')
    <script>
        $(".product-item").on("click", function(e) {
            $(".product-item").removeClass("active");
            $(this).addClass("active");
        });
    </script>

    {{-- <script>
        // Memperoleh nilai dari input dan elemen lainnya
        $(".submit-button").on("click", function() {
            var userID = $("input#user-id").val();
            var zoneID = $("input#zone-id").val();
            var itemName = $(".product-item.active").find("h6#item").text().trim();
            var itemPrice = $(".product-item.active").find("h6#harga").text().trim();

            // Membuat pesan WhatsApp dengan format yang diinginkan
            var whatsappMessage = "Hallo saya ingin order item berikut \n" +
                "Nama Game: Valorant\n" +
                "Item: " + itemName + "\n" +
                "Harga: " + itemPrice + "\n" +
                "User ID: " + userID;

            // Membuka aplikasi WhatsApp dengan pesan yang telah dibuat
            var whatsappLink = "https://api.whatsapp.com/send?phone=6289530695776&text=" + encodeURIComponent(
                whatsappMessage);
            window.open(whatsappLink);
        });
    </script> --}}
@endpush
