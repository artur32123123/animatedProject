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

    <div class="show container">
        <div class="anime-card">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($figure->images as $image)
                        @if ($image->src != null)
                            <div class="swiper-slide">
                                <img src="{{ asset($image->src) }}"
                                    alt="">
                            </div>
                        @else
                        @endif
                    @endforeach
                </div>

            </div>
            <div class="anime-card__info">
                <h3>{{ $figure->name }}</h3>
                <ul>
                    <li>Материал: {{ $figure->material }}</li>
                    <li>Размер: {{ $figure->size }}</li>
                    <li>Категория: {{ $figure->figureCategory->name }}</li>
                    <li>Описание: {{ $figure->description }}</li>
                </ul>

            </div>

        </div>
    </div>


    @vite('resources/js/app.js')
</body>

</html>
