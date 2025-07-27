<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config('app.name', 'Laravel') }} </title>
</head>

<body>
    <x-header></x-header>


    <div class="anime-card container">
        <aside class="w-72 p-6 bg-white rounded-lg shadow-md h-fit">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Фильтр товаров</h2>
            <form action="{{ route('main') }}" method="GET">

                <!-- Поиск по названию -->
                <div class="mb-5">
                    <label class="block mb-2 font-medium text-gray-700">Название</label>
                    <input type="text" name="name" value="{{ request('name') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Фильтр по категориям -->
                <div class="mb-5">
                    <label class="block mb-2 font-medium text-gray-700">Категория</label>
                    <select name="category" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Все категории</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Фильтр по меткам -->
                <div class="mb-5">
                    <label class="block mb-2 font-medium text-gray-700">Метка</label>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach (['top' => 'Топ', 'hit' => 'Хит', 'new' => 'Новинка', 'exclusive' => 'Эксклюзив', 'sale' => 'Скидка'] as $key => $label)
                            <label class="flex items-center">
                                <input type="checkbox" name="tag" value="{{ $key }}"
                                    {{ in_array($key, request('labels', [])) ? 'checked' : '' }}
                                    class="rounded text-blue-600">
                                <span class="ml-2 text-gray-700">{{ $label }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Фильтр по материалам -->
                <div class="mb-5">
                    <label class="block mb-2 font-medium text-gray-700">Материал</label>
                    <div class="flex flex-wrap gap-2">
                        {{-- @foreach ($materials as $material)
                <label class="flex items-center">
                    <input type="checkbox" name="materials[]" value="{{ $material }}"
                           {{ in_array($material, request('materials', [])) ? 'checked' : '' }}
                           class="rounded text-blue-600">
                    <span class="ml-1 text-gray-700">{{ $material }}</span>
                </label>
                @endforeach --}}
                    </div>
                </div>
                <!-- Фильтр по цене -->
                <div class="mb-5">
                    <label class="block mb-2 font-medium text-gray-700">Цена, руб</label>
                    <div class="flex space-x-2">
                        {{-- <input type="number" name="price" placeholder="От" value="{{ request('price_min') }}"
                            class="flex-1 px-3 py-2 border border-gray-300 rounded-md"> --}}
                        <input type="number" name="price" placeholder="До" value="{{ request('price_max') }}"
                            class="flex-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- Фильтр по скидке -->
                <div class="mb-5">
                    <label class="flex items-center">
                        <input type="checkbox" name="sale" value="1" class="rounded text-blue-600">
                        <span class="ml-2 font-medium text-gray-700">Только со скидкой</span>
                    </label>
                </div>

                <!-- Кнопки фильтрации -->
                <div class="flex space-x-3">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition w-full">
                        Применить
                    </button>
                    <a href=""
                        class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 transition text-center">
                        Сбросить
                    </a>
                </div>
            </form>
        </aside>
        <section class="characters-section container">


            <div class="characters-grid">
                <!-- Персонаж 1 -->
                @foreach ($figures as $item)
                    <div class="character-card">
                        @if ($item->label && $item->label !== 'none')
                            <div class="character-popularity">
                                <i
                                    class="fas fa-bolt">{{ match ($item->label ?? '') {
                                        'top' => 'ТОП ПРОДАЖ',
                                        'hit' => 'ХИТ',
                                        'new' => 'НОВИНКА',
                                        'exclusive' => 'ЭКСКЛЮЗИВ',
                                        'sale' => 'РАСПРОДАЖА',
                                        default => '',
                                    } }}</i>
                            </div>
                        @endif
                        <div class="character-image">
                            @if (isset($item->images[0]->src) && $item->images[0]->src != null)
                                <img src="{{ asset($item->images->first()->src) }}" alt="">
                            @else
                                <img src="{{ asset('./images/Figure/notResult.png') }}" alt="">
                            @endif
                            @if ($item->figureCategory->name != null)
                                <div class="character-series">{{ $item->figureCategory->name }}</div>
                            @endif
                        </div>
                        <div class="character-info">
                            <h3 class="character-name"><i class="fas fa-fist-raised"></i> {{ $item->name }}</h3>
                            <p>{{ $item->name }}</p>
                            <div class="character-stats">
                                <div class="stat">
                                    <i class="fas fa-ruler-combined"></i>
                                    <span>{{ $item->size . 'см' }} </span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-palette"></i>
                                    <span>Ручная роспись</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-box-open"></i>
                                    <span>Limited Edition</span>
                                </div>
                            </div>
                            <div class="character-price">
                                <div class="price-tag">₽ {{ $item->price }}</div>
                                <button class="cta-button">
                                    <i class="fas fa-shopping-cart"></i> В корзину
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </section>
    </div>
    {{-- {{ $figures->links() }} --}}


    @vite('resources/js/app.js')
</body>

</html>
