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

    <div class="anime-card container">
        @foreach ($figure as $item)
        <div class="anime-card__item">
                <h3>{{ $item->name }}</h3>
                @if ($item->images->isEmpty())
                    <img src="{{ asset('images/Figure/notResult.png') }}" alt="">
                @else
                    <img src="{{ asset($item->images->first()->src) }}" alt="">
                @endif
            </div>
                @endforeach
    </div>
    @vite('resources/js/app.js')
</body>

</html>
