<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asd</title>
</head>

<body>
    <x-header></x-header>
  
<section class="anime-collection">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Волшебный мир <span>аниме-фигурок</span></h1>
            <p class="hero-subtitle">Эксклюзивные коллекционные издания из Японии</p>
            <div class="hero-cta">
                <a href="#" class="cta-button">Начать путешествие</a>
                <div class="hero-discount">
                    <span class="discount-badge">-30%</span>
                    <p>На первую покупку</p>
                </div>
            </div>
        </div>

        <div class="hero-showcase">
            <div class="showcase-item" style="--delay:0.1s">
                <img src="https://i.ibb.co/F7d0j4W/figure1.png" alt="Фигурка Наруто">
                <div class="shine"></div>
            </div>
            <div class="showcase-item" style="--delay:0.3s">
                <img src="https://i.ibb.co/6nLb3dN/figure2.png" alt="Фигурка Сакуры">
                <div class="shine"></div>
            </div>
            <div class="showcase-item" style="--delay:0.5s">
                <img src="https://i.ibb.co/9c8BQ9s/figure3.png" alt="Фигурка Лелуш">
                <div class="shine"></div>
            </div>
        </div>
    </div>

    <div class="featured-banner">
        <div class="banner-content">
            <div class="banner-text">
                <h2>Ограниченный выпуск</h2>
                <p>Эксклюзивная фигурка Леви из "Атаки Титанов"</p>
                <div class="banner-countdown">
                    <span>До конца акции:</span>
                    <div class="countdown-timer">72:15:33</div>
                </div>
            </div>
            <div class="banner-figure">
                <img src="https://i.ibb.co/4Kv0d9Q/levi.png" alt="Фигурка Леви">
                <div class="price-tag">
                    <span class="old-price">₽14 990</span>
                    <span class="new-price">₽11 490</span>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="anime-card container">

        @foreach ($figure as $item)
            <div class="anime-card__item">
                <h3>{{ $item->name }}</h3>
                @if ($item->images->isEmpty())
                    <img src="{{ asset('images/Figure/notResult.png') }}" alt="">
                @else
                    <img src="{{ asset($item->images->first()->src) }}" alt="">
                    @if ($item->discount > 0)
                        <div class="discount">
                            <span>-{{ $item->discount }}%</span>
                        </div>
                    @endif
                @endif


                <div class="anime-card__action">
                    <a href="{{ route('show', ['id' => $item->id]) }}">
                    </a>
                    <a class="glow-on-hover" type="button">Купить</a>
                    {{-- {{ route('cart.add' , ['id' => $figure->id]) }}  --}}
                    <a class="anime-card__btn" href="">В корзину</a>
                </div>
            </div>
        @endforeach
    </div>
    {{ $figure->links() }}


    @vite('resources/js/app.js')
</body>

</html>
