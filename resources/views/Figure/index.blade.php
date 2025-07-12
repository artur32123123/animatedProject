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
        <aside class="dark-filters">
            <div class="filter-header">
                <h2 class="filter-title">
                    <svg class="filter-icon" viewBox="0 0 24 24">
                        <path
                            d="M4.25 5.61C6.27 8.2 10 13 10 13v6c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-6s3.72-4.8 5.74-7.39c.51-.66.04-1.61-.8-1.61H5.04c-.83 0-1.3.95-.79 1.61z" />
                    </svg>
                    Фильтры
                </h2>
                <button class="clear-btn">Сбросить всё</button>
            </div>

            <!-- Поиск по названию -->
            <section class="filter-section">
                <div class="section-header">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                    </svg>
                    <h3>Поиск</h3>
                </div>
                <input type="text" placeholder="Название фигурки..." class="search-input">
            </section>

            <!-- Ценовой диапазон -->
            <section class="filter-section">
                <div class="section-header">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                    </svg>
                    <h3>Цена</h3>
                </div>
                <div class="price-slider-container">
                    <div class="price-labels">
                        <span id="min-price">500 ₽</span>
                        <span id="max-price">25 000 ₽</span>
                    </div>
                    <div class="slider-wrapper">
                        <input type="range" min="500" max="25000" value="500" class="price-slider"
                            id="lower">
                        <input type="range" min="500" max="25000" value="25000" class="price-slider"
                            id="upper">
                    </div>
                </div>
            </section>

            <!-- Категории -->
            <section class="filter-section">
                <div class="section-header">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M12 2l-5.5 9h11z" />
                        <circle cx="17.5" cy="17.5" r="4.5" />
                        <path d="M3 13.5h8v8H3z" />
                    </svg>
                    <h3>Категории</h3>
                </div>
                <div class="category-grid">
                    <label class="category-card">
                        <input type="checkbox" name="category" value="shonen">
                        <div class="card-content">
                            <span class="card-name">Сёнен</span>
                            <span class="card-count">142</span>
                        </div>
                    </label>
                    <label class="category-card">
                        <input type="checkbox" name="category" value="shojo">
                        <div class="card-content">
                            <span class="card-name">Сёдзё</span>
                            <span class="card-count">87</span>
                        </div>
                    </label>
                    <label class="category-card">
                        <input type="checkbox" name="category" value="seinen">
                        <div class="card-content">
                            <span class="card-name">Сэйнэн</span>
                            <span class="card-count">64</span>
                        </div>
                    </label>
                    <label class="category-card">
                        <input type="checkbox" name="category" value="isekai">
                        <div class="card-content">
                            <span class="card-name">Исэкай</span>
                            <span class="card-count">203</span>
                        </div>
                    </label>
                </div>
            </section>

            <!-- Бренды -->
            <section class="filter-section">
                <div class="section-header">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path
                            d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16z" />
                    </svg>
                    <h3>Бренды</h3>
                </div>
                <div class="brand-scroller">
                    <label class="brand-item">
                        <input type="checkbox" name="brand" value="bandai">
                        <span>Bandai</span>
                        <span class="item-count">120</span>
                    </label>
                    <label class="brand-item">
                        <input type="checkbox" name="brand" value="kotobukiya">
                        <span>Kotobukiya</span>
                        <span class="item-count">78</span>
                    </label>
                    <label class="brand-item">
                        <input type="checkbox" name="brand" value="goodsmile">
                        <span>Good Smile</span>
                        <span class="item-count">156</span>
                    </label>
                    <label class="brand-item">
                        <input type="checkbox" name="brand" value="maxfactory">
                        <span>Max Factory</span>
                        <span class="item-count">92</span>
                    </label>
                    <label class="brand-item">
                        <input type="checkbox" name="brand" value="alter">
                        <span>Alter</span>
                        <span class="item-count">65</span>
                    </label>
                </div>
            </section>

            <!-- Статус -->
            <section class="filter-section">
                <div class="section-header">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" />
                    </svg>
                    <h3>Статус</h3>
                </div>
                <div class="status-grid">
                    <label class="status-item in-stock">
                        <input type="radio" name="status" value="in_stock">
                        <span>В наличии</span>
                    </label>
                    <label class="status-item pre-order">
                        <input type="radio" name="status" value="preorder">
                        <span>Предзаказ</span>
                    </label>
                    <label class="status-item discounted">
                        <input type="radio" name="status" value="discount" checked>
                        <span>Со скидкой</span>
                    </label>
                </div>
            </section>

            <button class="apply-filters">
                Применить фильтры
                <svg class="apply-icon" viewBox="0 0 24 24">
                    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" />
                </svg>
            </button>
        </aside>

        <section class="characters-section container">


            <div class="characters-grid">
                <!-- Персонаж 1 -->
                @foreach ($figure as $item)
                    <div class="character-card">
             @if($item->label && $item->label !== 'none')
               <div class="character-popularity">
                        <i class="fas fa-bolt">{{ match($item->label ?? '') {
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
                            <img src="data:image/jpeg;base64,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"
                                alt="Гоку">
                            <div class="character-series">Dragon Ball Z</div>
                        </div>
                        <div class="character-info">
                            <h3 class="character-name"><i class="fas fa-fist-raised"></i> Сон Гоку</h3>
                            <p>Легендарный Саянин, защитник Земли с непревзойденной силой духа.</p>
                            <div class="character-stats">
                                <div class="stat">
                                    <i class="fas fa-ruler-combined"></i>
                                    <span>25 см</span>
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
                                <div class="price-tag">₽12 490</div>
                                <button class="cta-button">
                                    <i class="fas fa-shopping-cart"></i> В корзину
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach











                <!-- Персонаж 2 -->
                <div class="character-card">
                    <div class="character-popularity">
                        <i class="fas fa-crown"></i> ХИТ
                    </div>
                    <div class="character-image">
                        <img src="data:image/jpeg;base64,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"
                            alt="Леви">
                        <div class="character-series">Attack on Titan</div>
                    </div>
                    <div class="character-info">
                        <h3 class="character-name"><i class="fas fa-crosshairs"></i> Леви Аккерман</h3>
                        <p>Самый сильный боец Разведкорпуса с .
                        </p>
                        <div class="character-stats">
                            <div class="stat">
                                <i class="fas fa-ruler-combined"></i>
                                <span>22 см</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-palette"></i>
                                <span>Эксклюзивная раскраска</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-box-open"></i>
                                <span>Deluxe Edition</span>
                            </div>
                        </div>
                        <div class="character-price">
                            <div class="price-tag">₽14 990</div>
                            <button class="cta-button">
                                <i class="fas fa-shopping-cart"></i> В корзину
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Персонаж 3 -->
                <div class="character-card">
                    <div class="character-popularity">
                        <i class="fas fa-bolt"></i> НОВИНКА
                    </div>
                    <div class="character-image">
                        <img src="data:image/jpeg;base64,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"
                            alt="Луффи">
                        <div class="character-series">One Piece</div>
                    </div>
                    <div class="character-info">
                        <h3 class="character-name"><i class="fas fa-hat-cowboy"></i> Манки Д. Луффи</h3>
                        <p>Капитан Пиратов Соломенной Шляпы, обладатель силы Резинового Резинового Плода.</p>
                        <div class="character-stats">
                            <div class="stat">
                                <i class="fas fa-ruler-combined"></i>
                                <span>24 см</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-palette"></i>
                                <span>Флуоресцентные детали</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-box-open"></i>
                                <span>Wano Edition</span>
                            </div>
                        </div>
                        <div class="character-price">
                            <div class="price-tag">₽11 290</div>
                            <button class="cta-button">
                                <i class="fas fa-shopping-cart"></i> В корзину
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Персонаж 4 -->
                <div class="character-card">
                    <div class="character-popularity">
                        <i class="fas fa-gem"></i> ЭКСКЛЮЗИВ
                    </div>
                    <div class="character-image">
                        <img src="data:image/jpeg;base64,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"
                            alt="Наруто">
                        <div class="character-series">Naruto Shippuden</div>
                    </div>
                    <div class="character-info">
                        <h3 class="character-name"><i class="fas fa-wind"></i> Наруто Узумаки</h3>
                        <p>Седьмой Хокаге Деревни Скрытого Листа, джинчурики Девятихвостого.</p>
                        <div class="character-stats">
                            <div class="stat">
                                <i class="fas fa-ruler-combined"></i>
                                <span>26 см</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-palette"></i>
                                <span>Светящиеся элементы</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-box-open"></i>
                                <span>Collector's Edition</span>
                            </div>
                        </div>
                        <div class="character-price">
                            <div class="price-tag">₽13 790</div>
                            <button class="cta-button">
                                <i class="fas fa-shopping-cart"></i> В корзину
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Персонаж 5 -->
                <div class="character-card">
                    <div class="character-popularity">
                        <i class="fas fa-star"></i> ВЫБОР ПОКУПАТЕЛЕЙ
                    </div>
                    <div class="character-image">
                        <img src="data:image/jpeg;base64,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"
                            alt="Нэзуко">
                        <div class="character-series">Demon Slayer</div>
                    </div>
                    <div class="character-info">
                        <h3 class="character-name"><i class="fas fa-moon"></i> Камадо Нэзуко</h3>
                        <p>Младшая сестра Танджиро, превратившаяся в демона, но сохранившая человечность.</p>
                        <div class="character-stats">
                            <div class="stat">
                                <i class="fas fa-ruler-combined"></i>
                                <span>20 см</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-palette"></i>
                                <span>Ручная детализация</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-box-open"></i>
                                <span>Special Edition</span>
                            </div>
                        </div>
                        <div class="character-price">
                            <div class="price-tag">₽10 990</div>
                            <button class="cta-button">
                                <i class="fas fa-shopping-cart"></i> В корзину
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Персонаж 6 -->
                <div class="character-card">
                    <div class="character-popularity">
                        <i class="fas fa-rocket"></i> ПРЕДЗАКАЗ
                    </div>
                    <div class="character-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo4n7HAvYIJvgn4EVR9SHxEwi-TXtn5jUW1w&s"
                            alt="Сукуна">
                        <div class="character-series">Jujutsu Kaisen</div>
                    </div>
                    <div class="character-info">
                        <h3 class="character-name"><i class="fas fa-skull"></i> Рёмен Сукуна</h3>
                        <p>Король Проклятий, могущественное существо, живущее внутри Юдзи Итадори.</p>
                        <div class="character-stats">
                            <div class="stat">
                                <i class="fas fa-ruler-combined"></i>
                                <span>28 см</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-palette"></i>
                                <span>Эффекты проклятий</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-box-open"></i>
                                <span>Deluxe Version</span>
                            </div>
                        </div>
                        <div class="character-price">
                            <div class="price-tag">₽15 490</div>
                            <button class="cta-button">
                                <i class="fas fa-shopping-cart"></i> В корзину
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{ $figure->links() }}


    @vite('resources/js/app.js')
</body>

</html>
