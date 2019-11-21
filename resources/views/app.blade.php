<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Diseño, Desarrollo web y ventas Online">
    <meta name="keywords" content="diseño web, desarrollo web, seo, posicionamiento web, ventas Online">
    <meta name="author" content="Render2Web">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>App Name - @yield('title')</title>
</head>

<body>
    <header>
        <div class="container">
            <div id="marca">
                <h1><span class="resaltado">All-in-One Service</span> </h1>
                <h2>Diseño, Desarrollo Web y Más!</h2>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/about_us">Nosotros</a></li>
                    <li><a href="/services">Servicios</a></li>
                    <li><a href="/contact">Contacto</a></li>
                    <li><a href="register">Login</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <!-- Footer -->

    <footer class="footer">
        <div class="container">

            <!-- Newsletter -->

            <div class="newsletter">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>Subscribe to newsletter</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_form_container mx-auto">
                            <form action="post">
                                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                    <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                    <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Content -->

            <div class="footer_content">
                <div class="row">

                    <!-- Footer Column - About -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                            <img src="{{URL::asset('img/logo.png')}}" alt="">

                            </div>
                        </div>

                        <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla,
                            vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum,
                            tempor lacus.</p>

                    </div>

                    <!-- Footer Column - Menu -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Menu</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="/">Inicio</a></li>
                                <li class="footer_list_item"><a href="/services">Servicios</a></li>
                                <li class="footer_list_item"><a href="/about_us">Nosotros</a></li>
                                <li class="footer_list_item"><a href="/contact">Contactanos</a></li>
                               <li class="footer_list_item"><a href="/register">Login</a></li>
                            </ul>
                        </div>
                    </div>



                    <!-- Footer Copyright -->

                    <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                        <div class="footer_copyright">
                            <span>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This site is made <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a href="" target="_blank">Fabio N. Murillo</a> & <a href="" target2="_blank">Leonardo D. Vasquez </a>
                            </span>
                        </div>
                        <div class="footer_social ml-sm-auto">
                            <ul class="menu_social">
                                <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
        </footer>
</body>

</html>