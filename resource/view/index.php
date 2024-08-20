<?php
$pageTitle = "Inicio"; // Título dinámico de la página

// Generar el contenido específico de la página
$pageContent = '
<div id="dynamicCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">';

// Array de imágenes (esto podría venir de una base de datos o una API)
$images = [
    "../../public/img/dunlop.png" => "Imagen 1",
    "../../public/img/img_55da462591e876d51666d98b03979bb5.jpg" => "Imagen 2",
    "../../public/img/img_b1a03789f05cd20d63e0c9daf87af0ba.jpg" => "Imagen 3",
    //Se pueden agregar más imágenes
];
$active = true; // Para marcar la primera imagen como activa
foreach ($images as $img => $alt) {
    // Escapamos la ruta de la imagen para evitar problemas con caracteres especiales
    $img_escaped = htmlspecialchars($img, ENT_QUOTES, "UTF-8");
    $alt_escaped = htmlspecialchars($alt, ENT_QUOTES, "UTF-8");
    $pageContent .= '<div class="carousel-item'.($active ? ' active' : '').'">';
    $pageContent .= '<img src="'.$img_escaped.'" class="d-block w-100" alt="'.$alt_escaped.'">';
    $pageContent .= '</div>';
    $active = false; // Las siguientes imágenes ya no son activas
}

$pageContent .= '
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#dynamicCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#dynamicCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<!-- Imagen principal debajo del carrusel -->
<div class="container">
    <div class="main-image">
        <img src="../../public/img/stock.jpg" alt="Banner Principal">
    </div>

    <!-- Contenedores de columnas para productos -->
    <div class="row">
        <div class="col">
            <div class="product-container">
                <img src="../../public/img/repuestos.png" alt="Repuestos">
                <h3>Repuestos</h3>
            </div>
        </div>
        <div class="col">
            <div class="product-container">
                <img src="../../public/img/llanta1.png" alt="Llantas">
                <h3>Llantas</h3>
            </div>
        </div>
        <div class="col">
            <div class="product-container">
                <img src="../../public/img/lubricantes.webp" alt="Lubricantes">
                <h3>Lubricantes</h3>
            </div>
        </div>
    </div>
</div>
';

include 'layout.php';
?>
<link rel="stylesheet" href="../css/index.css">
