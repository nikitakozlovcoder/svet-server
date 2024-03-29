<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="icon.png">
    <style>
        .product_img{
            height: 100%;
            display: flex;
            padding-top: 100%;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }
        .product_img img {
            transition: transform 0.7s ease;
            margin: auto;
            top: 0;
            left: 0;
            object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .product_bg_title {
            position: absolute;
            bottom: 0;
            padding: 10px;
            width: 100%;
            background-color: rgba(81, 85, 98, 0.51);
            color: white;
            min-height: 64px;
        }
        .product_img:hover img {
            transform: scale(1.2);

        }

        .product_img:hover .work-img-reverse{
            transform: scale(-1.2) !important;

        }


    </style>

</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">
<header>
    <nav class="nav" style="background: white !important">
        <div class="wrap">
            <div class="logo" style="color: #515562 !important;display: flex;"><div><a href='/'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
            <div class="toggle">
                <div class="toggle_nav">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="links" style="color: #2c3e50 !important">
                <div class="links_wrap">
                    <hr><a class=" link" href="/#home" style="color: #515562;" >Главная</a>
                    <a class=" link" href="/#about" style="color: #515562;">О нас</a>
                    <a class=" link" href="/#products" style="color: #515562;">Продукция</a>
                    <a class=" link" href="/#work" style="color: #515562;">Работы</a>
                    <a class=" link" href="/#service" style="color: #515562;">Возможности</a>
                    <a class=" link" href="/#contact" style="color: #515562;">Связаться</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="wrap main-wrap" style="margin-top: 0;">
    <div class="products-items-grid">
        <div class="product_col products-items-grid_col">
            <a href="photos/1">
            <div class="product_img">
                <img src="./img/products-work/4.jpg" class="work-img" >
                <div class="product_bg_title">
                   Инициативная 54А. Освещение придомовой территории.
                </div>
            </div>
            </a>
        </div>

        <div class="product_col products-items-grid_col">
            <a href="photos/2">
            <div class="product_img">
                <img src="./img/products-work/8.jpg" class="work-img" >
                <div class="product_bg_title">
                    Светильник 50 Ватт у частного дома.
                </div>
            </div>
            </a>
        </div>

        <div class="product_col products-items-grid_col">
            <a href="photos/6">
            <div class="product_img">
                <img src="./img/products-work/7.jpg" class="work-img" >
                <div class="product_bg_title">
                   Монтаж светильника 50 Ватт для ТСЖ.
                </div>
            </div>
            </a>
        </div>

        <div class="product_col products-items-grid_col">
            <a href="photos/3">
                <div class="product_img">
                    <img src="./img/products-work/AM/2spec.jpg" class="work-img" >
                    <div class="product_bg_title">
                        Освещение центральной площади Андреево-Мелентьево.
                    </div>
                </div>
            </a>
        </div>

        <div class="product_col products-items-grid_col">
            <a href="photos/5">
                <div class="product_img">
                    <img src="./img/products-work/16.jpg" class="work-img" >
                    <div class="product_bg_title">
                        Освещение придомовой территории Дзержинского 177.
                    </div>
                </div>
            </a>
        </div>

        <div class="product_col products-items-grid_col">
            <a href="photos/4">
                <div class="product_img">
                    <img src="./img/products-work/AM/10.jpg" class="work-img" >
                    <div class="product_bg_title">
                        Освещение улиц Победы и Магистральной.
                    </div>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="photos/7">
                <div class="product_img">
                    <img src="./img/products-work/21.jpg" class="work-img" >
                    <div class="product_bg_title">
                        Придомовая территория Шило 212/1.
                    </div>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="photos/8">
                <div class="product_img">
                    <img src="./img/products-work/18.jpg" class="work-img" >
                    <div class="product_bg_title">
                        Придомовая территория Урицкого 20.
                    </div>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="photos/9">
                <div class="product_img">
                    <img src="./img/products-work/22.jpg" class="work-img" >
                    <div class="product_bg_title">
                       Ростовская область. Замена освещения в сельских поселениях.
                    </div>
                </div>
            </a>
        </div>

</div>


    <footer style="margin-top: auto">
        <div class="wrap">
            <hr>
        </div>
        <div class="wrap footer">
            <img src="./img/logo2.png" alt="alt" style="height: 70px; width: 70px; order: 2;">
            <div class="logo logo-footer" style="color: #2c3e50 !important; order: 1;"><span>SVE</span>T-SKG</div>
            <div style="order: 3;">Разработано командой <a href="http://nek-web.ru" style="color: #00bfd3; ">NekWeb</a>.</div>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/fullimg.js"></script>
</body>
</html>
