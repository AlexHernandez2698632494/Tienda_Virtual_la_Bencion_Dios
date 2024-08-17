<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo empty($pageTitle) ? 'TBD' : 'TBD | ' . htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="top-bar">
        <div class="logo">Logo</div>
        <div class="icons">
            <i class="bi bi-person-fill"></i>
            <i class="bi bi-cart4"></i>
        </div>
    </div>

    <div class="nav-bar">
        <a href="#">Inicio</a>
        <a href="Corporativo.php">Corporativo</a>
        <a href="#">Contacto</a>
        <div class="dropdown">
            <a href="#" class="dropbtn">Productos ▼</a>
            <div class="dropdown-content">
                <a href="#">Producto 1</a>
                <a href="#">Producto 2</a>
                <a href="#">Producto 3</a>
            </div>
        </div>
    </div>

<body>
    <section class="about-section">
        <div class="container">
            <h1>Nosotros</h1>
            <div class="history-mission">
                <div class="history">
                    <h2>Historia</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue.</p>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="history-image">
                    <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822_1280.jpg" alt="Historia">
                </div>
            </div>
            <div class="history-mission">
                <div class="mission-image">
                    <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg" alt="Misión">
                </div>
                <div class="mission">
                    <h2>Nuestra Misión</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue.</p>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
            <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue.</p>
            </blockquote>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section categorias">
                <h2>Categorías</h2>
                <ul>
                    <li><a href="#">Dunlop</a></li>
                    <li><a href="#">Falken</a></li>
                    <li><a href="#">Sumitomo</a></li>
                </ul>
            </div>
            <div class="footer-section contacto">
                <h2>Contacto</h2>
                <p>Carretera Troncal del Norte, La Palma</p>
                <p>Tel: <a href="tel:+50379888963">+(503)7988-8963</a></p>
                <p>Email: <a href="mailto:jaimesalguero233@gmail.com">jaimesalguero233@gmail.com</a></p>
                <div class="socials">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <!-- Scripts de Bootstrap y JavaScript necesarios -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



