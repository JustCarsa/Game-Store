@extends('app', [
    'title' => 'Home',
])

@section('content')
    <!-- Header -->
    <div class="container-fluid shadow-sm mb-xl-4">
        <div class="row align-items-center justify-content-between py-lg-3 px-lg-3 px-xl-5">
            <div class="d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <img src="assets/image/banner/header.jpg" style="border-radius: 10px;" alt="logo" class="src"
                        width="400" height="100" />
                </a>
            </div>
        </div>
    </div>
    <!-- Header -->

    <!-- Carousel -->
    <div class="container-fluid mb-4">
        <div class="row px-xl-5">
            <div class="w-100">
                <nav class="flex navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none ml-3">
                        <img src="assets/image/banner/header.jpg" style="border-radius: 10px;" alt="logo" class="src"
                            width="230" height="50" />
                    </a>
                </nav>

                <div id="header-carousel" class="carousel slide pointer-event" data-ride="carousel">
                    <div class="carousel-inner">
                        <style>
                            @media (min-width: 992px) {
                                .carousel-item {
                                    height: 400px !important;
                                }
                            }

                            @media (max-width: 991.98px) {
                                .carousel-item {
                                    height: 200px !important;
                                }
                            }
                        </style>
                        <div class="carousel-item">
                            <img class="img-fluid" src="assets/image/slider/slide-3.png" alt="simple-banner" />
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="assets/image/slider/slide-1.jpg" alt="simple-banner" />
                        </div>
                        <div class="carousel-item active">
                            <img class="img-fluid" src="assets/image/slider/slide-2.jpg" alt="simple-banner" />
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon mb-n2"
                            style="width: 30px; height: 30px; filter: invert(29%) sepia(85%) saturate(1441%) hue-rotate(299deg) brightness(95%) contrast(95%) drop-shadow(0px 0px 10px black); ">
                        </span>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <span class="carousel-control-next-icon mb-n2"
                            style="width: 30px; height: 30px; filter: invert(29%) sepia(85%) saturate(1441%) hue-rotate(299deg) brightness(95%) contrast(95%) drop-shadow(0px 0px 10px black); ">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel -->

    <div class="container-fluid offer pt-2"></div>

    <!-- Game Mobile Legends -->
    <div class="container-fluid pt-2">
        <div class="mb-4 px-xl-5">
            <h2 class="section-title">
                <span>
                    SEDANG DISKON
                </span>
            </h2>
            <p>
                <strong class="geser">Geser untuk list lengkapnya</strong>
            </p>
        </div>

        <div class="px-xl-5">
            <div class="owl-carousel owl-mlbb owl-theme">
                @foreach ($games as $game)
                    @if ($game->discount != null)
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <!-- Badge diskon -->
                                <div
                                    class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 fz-small font-weight-bold">
                                    {{ round(($game->discount / $game->price) * 100, 0) }}% OFF
                                </div>

                                <a href="{{ route('game', $game->id_game) }}">
                                    <img class="img-fluid w-100"
                                        src="https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/{{ $game->id_game }}/header.jpg"
                                        alt="" />
                                </a>
                            </div>

                            <div class="card-body border-left border-right text-center p-0 py-3">
                                <p class="text-truncate fz-small font-weight-bold mb-1">
                                    {{ $game->name }}
                                </p>
                                <div class="d-flex justify-content-center">
                                    <p class="fz-small">
                                        @if ($game->type == 'steam')
                                            <i class="fa-brands fa-steam"></i> Steam
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-center bg-light border">
                                <a href="{{ route('game', $game->id_game) }}" class="btn btn-sm text-primary p-0 fz-small">
                                    <span class="text-beli">
                                        <i class="fas fa-shopping-cart text-primary mr-1"></i>Beli sekarang
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Game Mobile Legends -->

    <!-- Game Lainnya -->
    <div class="container-fluid pt-2">
        <div class="mb-4 px-xl-5">
            <h2 class="section-title">
                <span>GAME LAINNYA</span>
            </h2>
            <p>
                <strong class="geser">Geser untuk list lengkapnya</strong>
            </p>
        </div>
        <div class="px-xl-5">
            <div class="owl-carousel owl-other owl-theme">

                @foreach ($games as $game)
                    @if ($game->discount == null)
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="{{ route('game', $game->id_game) }}">
                                    <img class="img-fluid w-100"
                                        src="https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/{{ $game->id_game }}/header.jpg"
                                        alt="" />
                                </a>
                            </div>

                            <div class="card-body border-left border-right text-center p-0 py-3">
                                <p class="text-truncate fz-small font-weight-bold mb-1">
                                    {{ $game->name }}
                                </p>
                                <div class="d-flex justify-content-center">
                                    <p class="fz-small">
                                        @if ($game->type == 'steam')
                                            <i class="fa-brands fa-steam"></i> Steam
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-center bg-light border">
                                <a href="{{ route('game', $game->id_game) }}" class="btn btn-sm text-primary p-0 fz-small">
                                    <span class="text-beli">
                                        <i class="fas fa-shopping-cart text-primary mr-1"></i>Beli
                                        sekarang
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- Game Lainnya -->

    <div class="container-fluid px-xl-5 mt-3">
        {{-- <a href="https://chat.whatsapp.com/D4WrtUmraPW8VlmuF8jOOW" target="_blank" style="text-decoration: none;">
            <div class="card"
                style="background-color: #000080; border-radius: 10px; margin-bottom: 30px; border: 4px solid #4D4DFF;">
                <div class="p-2 text-center">
                    <h1 class="text-white">KLIK DISINI, JOIN!</h1>
                    <h6 style="color: #DCDCDC;">GRUP WA INFO PROMO TOKOSEBELAH</h6>
                </div>
            </div>
        </a> --}}
    </div>
@endsection

@push('custom.javascript')
    <script>
        // Saat halaman dimuat
        function initOwl(className = '.owl-carousel') {
            const owl = $(className).owlCarousel({
                loop: true,
                margin: 10,
                center: true,
                autoplay: true,
                autoplayTimeout: 5000, // Mengubah interval menjadi 5 detik
                autoplayHoverPause: true,
                dots: false,
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 2,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 5,
                    },
                },
            });

            owl.on('mousewheel', '.owl-stage', function(e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
        }

        initOwl('.owl-mlbb');
        initOwl('.owl-other');
    </script>
@endpush
