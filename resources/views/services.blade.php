@extends('app')
@section('title', 'All-in-One Service | Principal')

@section('content')
    <header>
        <div class="container">
            <div id="marca">
                <h1><span class="resaltado">All-in-One Service</span> </h1>
                <h2>Diseño, Desarrollo Web y Más!</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/about_us">Nosotros</a></li>
                    <li class="actual"><a href="/services">Servicios</a></li>
                    <li><a href="/contact">Contacto</a></li>
                    <!-- <li><a href="login.html">Login</a></li> -->
                </ul>
            </nav>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1>Servicios</h1>
                <ul id="servicios">
                    <li>
                        <h3>Diseño Web</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at,
                            vulputate id lorem. Nulla facilisi.</p>
                        <p>Precio: $300000 - $1000000</p>
                    </li>
                    <li>
                        <h3>Desarrollo Web</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at,
                            vulputate id lorem. Nulla facilisi.</p>
                        <p>Precio desde: $1000000</p>
                    </li>
                    <li>
                        <h3>Hosting Web</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at,
                            vulputate id lorem. Nulla facilisi.</p>
                        <p>Precio: $300000</p>
                    </li>
                </ul>
            </article>

            <aside id="lateral">
                <div class="oscuro">
                    <h3>Que hacemos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus
                        sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et
                        magna</p>
                </div>
            </aside>
        </div>
    </section>

    @endsection