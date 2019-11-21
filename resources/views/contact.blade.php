@extends('app')
@section('title', 'All-in-One Service | Contacto')

@section('content')
<!-- Contact -->

<section id="main">
    <div class="container">
        <article id="main-col">
            <h1>Contacto</h1>
            <form>
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Ingresa tu nombre">
                <br>
                <label>Email</label>
                <input type="text" name="email" placeholder="Ingresa tu email">
                <br>
                <label>Teléfono</label>
                <input type="text" name="telefono" placeholder="Ingresa tu teléfono">
                <br>
                <label>Celular</label>
                <input type="text" name="nombre" placeholder="Ingresa tu celular">
                <br>
                <label>Nombre</label>
                <textarea></textarea>
                <br>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </article>

        <aside id="lateral">
            <div class="oscuro">
                <h3>Que hacemos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna</p>
            </div>
        </aside>
    </div>
</section>

<div class="contact_info">
    <ul>
        <li class="contact_info_item">
            <div class="contact_info_icon">
                <img src="img/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
            </div>
            Club de Campo L
        </li>
        <li class="contact_info_item">
            <div class="contact_info_icon">
                <img src="img/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
            </div>
            57 2 5
        </li>
        <li class="contact_info_item">
            <div class="contact_info_icon">
                <img src="img/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
            </div>hello@company.com
        </li>
    </ul>
</div>
@endsection