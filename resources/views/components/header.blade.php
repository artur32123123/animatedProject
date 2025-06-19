<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeFigShop - Магазин аниме фигурок</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            color: white;
        }

        .container {
            max-width: 1200px;
            width: 100%;
        }

        /* Стили шапки */
        header {
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 20px;
            z-index: 100;
            transition: all 0.4s ease;
            margin-bottom: 40px;
            border: 1px solid #4e4e7e;
        }

        header.scrolled {
            padding: 10px 20px;
            top: 10px;
            background: rgba(15, 23, 42, 0.98);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo-icon {
            font-size: 32px;
            color: #ff6b6b;
            animation: pulse 2s infinite;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(90deg, #ff6b6b, #ffa5a5, #e94584);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 10px rgba(255, 107, 107, 0.3);
        }

        .nav-links {
            display: flex;
            gap: 25px;
            transition: all 0.4s ease;
        }

        .nav-links a {
            color: #e0e0e0;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #ff6b6b, #e94584);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: #fff;
        }

        .nav-links a:hover::before {
            width: 100%;
        }

        .nav-links a.active {
            color: #fff;
            background: rgba(255, 107, 107, 0.15);
        }

        .nav-links a.active::before {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .auth-btn {
            background: transparent;
            color: white;
            border: 2px solid #ff6b6b;
            padding: 10px 22px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .auth-btn.login {
            background: linear-gradient(90deg, #ff6b6b, #e94584);
            border: none;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        .auth-btn.register:hover {
            background: rgba(255, 107, 107, 0.2);
        }

        .auth-btn.login:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
        }

        .auth-btn:active {
            transform: translateY(1px);
        }

        .user-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b6b, #e94584);
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .user-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 107, 107, 0.5);
        }

        .cart-icon {
            position: relative;
            font-size: 22px;
            color: #e0e0e0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cart-icon:hover {
            color: #ff6b6b;
            transform: scale(1.1);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -10px;
            background: #ff6b6b;
            color: white;
            font-size: 12px;
            font-weight: bold;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
            background: transparent;
            border: none;
        }

        .menu-toggle span {
            display: block;
            height: 3px;
            width: 100%;
            background: linear-gradient(90deg, #ff6b6b, #e94584);
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        /* Мобильное меню */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.98);
            z-index: 1000;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 30px;
            opacity: 0;
            transform: translateY(-100%);
            transition: all 0.5s ease;
        }

        .mobile-menu.active {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-menu a {
            color: #e0e0e0;
            text-decoration: none;
            font-size: 24px;
            font-weight: 500;
            padding: 10px 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .mobile-menu a::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 20px;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #ff6b6b, #e94584);
            transition: width 0.3s ease;
        }

        .mobile-menu a:hover {
            color: #fff;
        }

        .mobile-menu a:hover::after {
            width: calc(100% - 40px);
        }

        .mobile-auth {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .mobile-auth .auth-btn {
            padding: 12px 25px;
        }

        .close-menu {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 30px;
            color: #e0e0e0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .close-menu:hover {
            color: #ff6b6b;
            transform: rotate(90deg);
        }

        /* Контент для демонстрации */
        .content {
            text-align: center;
            max-width: 800px;
            padding: 40px 20px;
            margin: 0 auto;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #ff6b6b, #ffa5a5);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .content p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #e0e0ff;
        }

        /* Анимации */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Медиа-запросы */
        @media (max-width: 992px) {
            .nav-links {
                gap: 15px;
            }
            
            .nav-links a {
                font-size: 16px;
                padding: 6px 12px;
            }
            
            .auth-btn {
                padding: 8px 18px;
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            .nav-links, .auth-buttons {
                display: none;
            }
            
            .menu-toggle {
                display: flex;
            }
            
            .logo-text {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 12px 20px;
            }
            
            .logo-icon {
                font-size: 26px;
            }
            
            .logo-text {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Шапка сайта -->
        <header id="header">
            <a href="#" class="logo">
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
                <button class="auth-btn register">Регистрация</button>
                <button class="auth-btn login">Войти</button>
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
            <a href="#" class="active">Главная</a>
            <a href="#">Фигурки</a>
            <a href="#">Новинки</a>
            <a href="#">Предзаказ</a>
            <a href="#">Распродажа</a>
            <a href="#">Контакты</a>
            
            <div class="mobile-auth">
                <button class="auth-btn register">Регистрация</button>
                <button class="auth-btn login">Войти</button>
            </div>
            
            <div class="cart-icon" style="margin-top: 20px; font-size: 28px;">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">3</span>
            </div>
            
            <div class="close-menu" id="closeMenu">
                <i class="fas fa-times"></i>
            </div>
        </div>
        
        <!-- Контент страницы (для демонстрации) -->
       
    </div>

  <script>
        // Обработчик для меню на мобильных устройствах
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        // Закрытие меню при клике на ссылку
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });
        
        // Эффект изменения шапки при прокрутке
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Анимация пунктов меню при загрузке
        window.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-links a');
            navLinks.forEach((link, index) => {
                setTimeout(() => {
                    link.style.opacity = '1';
                    link.style.transform = 'translateY(0)';
                }, 200 * index);
            });
        });
        
        // Обработчики для кнопок авторизации
        document.querySelectorAll('.auth-btn').forEach(button => {
            button.addEventListener('click', () => {
                if (button.classList.contains('login')) {
                    alert('Форма входа');
                } else {
                    alert('Форма регистрации');
                }
            });
        });
    </script>
</body>
</html>