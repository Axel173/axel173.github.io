<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>FindPlace</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
<ul id="nav-mobile" class="sidenav">
    <!--<li><div class="user-view">
            <div class="background">
                <img src="images/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>-->

    <div class="nav-wrapper">
        <form>
            <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>

    <li class="">
        <a href="#" class="dropdown-trigger" data-target="dropdown1"><i
                    class="material-icons left">account_box</i>Авторизация</a>

    </li>

    <li><a href="#" class=""><i class="material-icons left">shopping_cart</i>Корзина<span
                    class="new badge red" data-badge-caption="">5</span></a></li>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header"><i class="material-icons Small">arrow_drop_down</i>Телефоны</div>
            <div class="collapsible-body">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">Apple</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Sumsung</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Xiaomi</div>
                    </li>
                    <li class="divider" tabindex="-1"></li>
                </ul>
            </div>
        </li>
        <li class="divider" tabindex="-1"></li>
        <li>
            <div class="collapsible-header"><i class="material-icons Small">arrow_drop_down</i>Телефоны</div>
            <div class="collapsible-body">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">Смартфоны</div>
                        <!--<div class="collapsible-body">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header">Apple</div>
                                </li>
                                <li>
                                    <div class="collapsible-header">Sumsung</div>
                                </li>
                                <li>
                                    <div class="collapsible-header">Xiaomi</div>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                            </ul>

                        </div>-->
                    </li>
                    <li>
                        <div class="collapsible-header">Мобильные телефоны</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Смарт-часы</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Чехлы и бамперы</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Аксессуары для смартфонов</div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="divider" tabindex="-1"></li>
        <li>
            <div class="collapsible-header"><i class="material-icons Small">arrow_drop_down</i>ТВ и видеотехника</div>
            <div class="collapsible-body">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">Телевизоры</div>
                        <!--<div class="collapsible-body">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header">Apple</div>
                                </li>
                                <li>
                                    <div class="collapsible-header">Sumsung</div>
                                </li>
                                <li>
                                    <div class="collapsible-header">Xiaomi</div>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                            </ul>

                        </div>-->
                    </li>
                    <li>
                        <div class="collapsible-header">Медиаплееры</div>
                    </li>
                    <li>
                        <div class="collapsible-header">ТВ -ресиверы</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Проекторы</div>
                    </li>
                    <li>
                        <div class="collapsible-header">Домашние кинотеатры</div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</ul>

<div class="navbar-fixed" role="navigation">
    <nav class="navbar red darken-4" role="navigation">
        <ul id="dropdown1" class="dropdown-content  red darken-4">

        </ul>
        <div class="nav-wrapper">

            <a href="#" data-target="nav-mobile" class="sidenav-trigger show-on-large white-text"><i
                        class="material-icons">menu</i></a>
            <a id="logo-container" href="#" class="brand-logo white-text">El-Shop</a>

            <ul class="right hide-on-med-and-down center-align">
                <!--<li>
                    <form>
                        <div class="input-field nav-search">
                            <i class="material-icons prefix white-text left">search</i>
                            <input id="search" type="search" class="white-text autocomplete h-init" required>
                            <!--<label class="label-icon left" for="search"><i class="material-icons">search</i></label>-->
                <!--<i class="material-icons">close</i>
            </div>
        </form>
    </li>-->


                <li class="">
                    <a href="#" class="dropdown-trigger white-text" data-target="dropdown1"><i
                                class="material-icons left">account_box</i>Авторизация</a>

                </li>

                <li><a href="#" class="white-text"><i class="material-icons left">shopping_cart</i>Корзина<span
                                class="new badge red" data-badge-caption="">5</span></a></li>

            </ul>

        </div>
        <!--<a class="btn-floating btn-small halfway-fab waves-effect waves-light teal">
            <i class="material-icons">search</i>
        </a>-->

        <div class="nav-wrapper">
            <!--<form>
                <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>-->

        </div>

    </nav>


</div>

<div class="container">
    <div class="section">
        <div class="row center">&nbsp;</div>
    </div>
</div>
<div class="carousel carousel-slider center container">

    <div class="carousel-item red white-text" href="#one!">
        <img src="http://www.sunwire.co.uk/wp-content/uploads/2017/05/page2-parallax-img.jpg">
    </div>
    <!--<div class="carousel-item amber white-text" href="#two!">
        <img src="images/37S85V.jpg">
    </div>-->
    <div class="carousel-item green white-text" href="#three!">
        <img src="http://www.sunwire.co.uk/wp-content/uploads/2017/05/page2-parallax-img.jpg">
    </div>
    <div class="carousel-item green white-text" href="#three!">
        <img src="http://www.sunwire.co.uk/wp-content/uploads/2017/05/page2-parallax-img.jpg">
    </div>
    <div class="carousel-item green white-text" href="#three!">
        <img src="http://www.sunwire.co.uk/wp-content/uploads/2017/05/page2-parallax-img.jpg">
    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row center">&nbsp;</div>
    </div>
</div>

<div class="valign-wrapper container">
    <div class="row">
        <div class="col s12 xl3 l4 m6">
            <div class="card hoverable">
                <div class="card-image center-align valign-wrapper">
                    <img src="images/ecdfbfbd335512d486d5c3cc419ae0f7f1449d0e8794e7a5e3b774c7d7a965be.jpg">
                    <div class="fixed-action-btn horizontal direction-top direction-left btn-not-fixed">
                        <a class="btn-floating btn-large red waves-effect waves-light">
                            <i class="large material-icons">more_vert</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating red"><i class="material-icons waves-effect waves-light">add_shopping_cart</i></a>
                            </li>
                            <li><a class="btn-floating yellow darken-1"><i
                                            class="material-icons waves-effect waves-light">favorite</i></a></li>

                        </ul>
                    </div>
                    <!--<a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i
                                class="material-icons">add_shopping_cart</i></a>
                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i
                                class="material-icons">favorite</i></a>-->
                </div>
                <li class="divider" tabindex="-1"></li>
                <div class="card-content">
                    <h6>17.3" Ноутбук Lenovo Ideapad 330-17IKBR черный</h6>
                    <div class="chip red white-text">Новинка</div>
                    <div class="chip green white-text">Акция</div>
                    <p>21 000 Р</p>
                </div>
            </div>
        </div>
        <div class="col s12 xl3 l4 m6">
            <div class="card hoverable">
                <div class="card-image center-align valign-wrapper">
                    <img src="images/0dc9b2af17d9c12973e4c52fd41da32419f1736032d546f08823c8e1d6d6fc9a.jpg">
                    <div class="fixed-action-btn horizontal direction-top direction-left btn-not-fixed">
                        <a class="btn-floating btn-large red waves-effect waves-light">
                            <i class="large material-icons">more_vert</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating red"><i class="material-icons waves-effect waves-light">add_shopping_cart</i></a>
                            </li>
                            <li><a class="btn-floating yellow darken-1"><i
                                            class="material-icons waves-effect waves-light">favorite</i></a></li>

                        </ul>
                    </div>
                </div>
                <li class="divider" tabindex="-1"></li>
                <div class="card-content">
                    <h6>17.3" Ноутбук Lenovo Ideapad 330-17IKBR черный</h6>
                    <div class="chip red white-text">Новинка</div>
                    <div class="chip green white-text">Акция</div>
                    <p>21 000 Р</p>
                </div>
            </div>
        </div>
        <div class="col s12 xl3 l4 m6">
            <div class="card hoverable">
                <div class="card-image center-align valign-wrapper">
                    <img src="images/1d353d6dd1b08327d5d598c07ee1e7be58e6ea6bd3b406f1bb93b45188220751.jpg">
                    <div class="fixed-action-btn horizontal direction-top direction-left btn-not-fixed">
                        <a class="btn-floating btn-large red waves-effect waves-light">
                            <i class="large material-icons">more_vert</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating red"><i class="material-icons waves-effect waves-light">add_shopping_cart</i></a>
                            </li>
                            <li><a class="btn-floating yellow darken-1"><i
                                            class="material-icons waves-effect waves-light">favorite</i></a></li>

                        </ul>
                    </div>
                </div>
                <li class="divider" tabindex="-1"></li>
                <div class="card-content">
                    <h6>17.3" Ноутбук Lenovo Ideapad 330-17IKBR черный</h6>
                    <div class="chip red white-text">Новинка</div>
                    <div class="chip green white-text">Акция</div>
                    <p>21 000 Р</p>
                </div>
            </div>
        </div>
        <div class="col s12 xl3 l4 m6">
            <div class="card hoverable">
                <div class="card-image center-align valign-wrapper">
                    <img src="images/d3d37c739713da3e4af07dde87a70b005ed717cd2b5fbb8de81f36703f121cde.jpg">
                    <div class="fixed-action-btn horizontal direction-top direction-left btn-not-fixed">
                        <a class="btn-floating btn-large red waves-effect waves-light">
                            <i class="large material-icons">more_vert</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating red"><i class="material-icons waves-effect waves-light">add_shopping_cart</i></a>
                            </li>
                            <li><a class="btn-floating yellow darken-1"><i
                                            class="material-icons waves-effect waves-light">favorite</i></a></li>

                        </ul>
                    </div>
                </div>
                <li class="divider" tabindex="-1"></li>
                <div class="card-content">
                    <h6>17.3" Ноутбук Lenovo Ideapad 330-17IKBR черный</h6>
                    <div class="chip red white-text">Новинка</div>
                    <div class="chip green white-text">Акция</div>
                    <p>21 000 Р</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row center">&nbsp;</div>
    </div>
</div>



<footer class="page-footer red darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Find Place</h5>
                <p class="grey-text text-lighten-4">Считаешь себя знатоком своего города? Уверен что знаешь каждый
                    закоулок? Думаешь ты Владыка камменных джунглей? Мы даем возможность утвердить свой титул Джедая</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Меню</h5>
                <ul>
                    <li><a class="white-text" href="#">Добавить место</a></li>
                    <li><a class="white-text" href="#">Список мест</a></li>
                    <li><a class="white-text" href="#">Рейтинги</a></li>
                    <li><a class="white-text" href="#">О нас</a></li>
                    <li><a class="white-text" href="#">Пользовательское соглашение</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made for <a class="brown-text text-lighten-3" href="http://ff.com">FindPlace</a>
            </div>
        </div>
</footer>
<!-- Element Showed -->


<!-- Tap Target Structure -->

<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<!--  Scripts-->
<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="js/init.js"></script>



</body>
</html>
