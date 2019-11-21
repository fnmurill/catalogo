
@extends('app')
@section('title', 'All-in-One Service | Principal')

@section('content')
    <main>
        <section id="cabecera">
            <div class="container">
                <h1>Expertos en Tecnologías Web </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla
                    nec
                    magna sit amet sem interdum condimentum.</p>
            </div>
        </section>

        <section id="cajas">
            <div class="container">
                <div class="caja">
                    <img src="{{URL::asset('img/logo_html.png')}}">
                    <h3>HTML5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
                </div>
                <div class="caja">
                    <img src="./img/logo_css.png">
                    <h3>CSS3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
                </div>
                <div class="caja">
                    <img src="./img/logo_brush.png">
                    <h3>Diseño Gráfico</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
                </div>
            </div>
        </section>
    </main>
@endsection