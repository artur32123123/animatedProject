
    <div class="container">
        <header id="header">
            <a href="" class="logo">
                <i class="fas fa-dragon logo-icon"></i>
                <span class="logo-text">AnimeFigShop</span>
            </a>

            <nav class="nav-links">
                <a href="#" class="active">Главная</a>
                <a href="#">Фигурки</a>
                <a href="#">Новинки</a>
                <a href="#">Предзаказ</a>
                <a href="#">Распродажа</a>
                <a href="#">Контакты</a>
            </nav>

            <div class="auth-buttons">
                <div class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </div>
                <a href="{{ route('register') }}" class="auth-btn register">Регистрация</a>
                <a href="{{ route('login') }}" class="auth-btn login">Войти</a>
                <div class="user-icon">
                    <i class="fas fa-user"></i>
                </div>
            </div>

            <button class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>

        <!-- Мобильное меню -->
        <div class="mobile-menu" id="mobileMenu">
            <a style="margin-top: 11px;" href="#" class="active">Главная</a>
            <a href="#">Фигурки</a>
            <a href="#">Новинки</a>
            <a href="#">Предзаказ</a>
            <a href="#">Распродажа</a>
            <a href="#">Контакты</a>

            <div class="mobile-auth">
                <button class="auth-btn register">Регистрация</button>
                <button class="auth-btn login">Войти</button>
            </div>

            <div class="cart-icon" style="margin: 0 auto; font-size: 28px;">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">3</span>
            </div>

            <div class="close-menu" id="closeMenu">
                <i class="fas fa-times"></i>
            </div>
        </div>


    </div>

