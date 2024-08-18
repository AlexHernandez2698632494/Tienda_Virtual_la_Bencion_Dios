<?php
$pageTitle = "Llantas"; // Título dinámico de la página

// Generar el contenido específico de la página
$pageContent = '
<section class = "content">
    <br>
    <hr><h1>Llantas</h1><hr>
    <section class="grid-layout">
        <div class="card">
            <figure>
                    <img src="../../public/img/llanta1.png" alt="...">
            </figure>
            <div class="stats">
                <hr>
                <h3>Dunlop Direzza-DZ102 Sedan</h3>
                <p class="precio">Precio: $89.99</p>
                <p>El DIREZZA DZ102 posee un excelente desempeño en condiciones de lluvia. Desarrollado para usuarios de vehículos deportivos y sedanes, posee un atractivo diseño que combina estabilidad, maniobrabilidad y desempeño anti hidroplaneo</p>
                <a href="">Agregar al carrito</a>
            </div>
        </div>
        <div class="card">
            <figure>
                    <img src="../../public/img/llanta2.png" alt="...">
            </figure>
            <div class="stats">
                <hr>
                <h3>Dunlop Direzza-ZIII Sedán</h3>
                <p class="precio">Precio: $79.99</p>
                <p>Desempeño extremo en verano CARACTERÍSTICAS El DIREZZA ZIII es el neumático de rendimiento extremo de Dunlop, diseñado para los conductores de autos deportivos y sedanes de alto rendimiento que buscan niveles de tracción y manejo cercanos a los deportes de motor.</p>
                <a href="">Agregar al carrito</a>
            </div>
        </div>
        <div class="card">
            <figure>
                    <img src="../../public/img/llanta3.png" alt="...">
            </figure>
            <div class="stats">
                <hr>
                <h3>Dunlop Grandtrek-AT3G Pickup</h3>
                <p class="precio">Precio: $72.00</p>
                <p>El GRANDTREK AT3GM tiene cuatro surcos rectos principales otorgan muy buen desempeño en superficies húmedas y estabilidad en alta velocidad.</p>
                <a href="">Agregar al carrito</a>
            </div>
        </div>
        <div class="card">
            <figure>
                    <img src="../../public/img/llanta4.png" alt="...">
            </figure>
            <div class="stats">
                <hr>
                <h3>Dunlop Grandtrek-AT3GM Pickup</h3>
                <p class="precio">Precio: $109.99</p>
                <p>LLANTA DE ALTA TRACCIÓN DENTRO Y FUERA DE CARRETERA, CON RESISTENCIA GARANTIZADA Y DE GRAN VERSATILIDAD PARA AFRONTAR CAMINOS EN MAL ESTADO O TERRENOS DE DIFÍCIL ACCESO</p>
                <a href="">Agregar al carrito</a>
            </div>
        </div>
        <div class="card">
            <figure>
                    <img src="../../public/img/llanta5.png" alt="...">
            </figure>
            <div class="stats">
                <hr>
                <h3>Dunlop Grandtrek-MT1 Pickup</h3>
                <p class="precio">Precio: $119.99</p>
                <p>Este neumático fue desarrollado para conductores de 4WD que disfrutan de la conducción fuera de carretera en condiciones pesadas. Cuenta con una carcasa extra fuerte para mayor protección y está diseñada para tener una tracción superior en barro y terreno</p>
                <a href="">Agregar al carrito</a>
            </div>
        </div>
        <div class="card">
            <figure>
                    <img src="../../public/img/llanta6.png" alt="...">
            </figure>
            <div class="stats">
                <hr>
                <h3>Dunlop LM705 Sedan</h3>
                <p class="precio">Precio: $99.99</p>
                <p>El Dunlop SP SPORT LM705 ha sido diseñado para proporcionar una cómoda sensación de manejo desde que te pones en marcha.</p>
                <button src="">Agregar al carrito</button>
            </div>
        </div>
    </section>
    <br><br>
</section>
';

include 'layout.php';
?>
<link rel="stylesheet" href="../css/productos.css">