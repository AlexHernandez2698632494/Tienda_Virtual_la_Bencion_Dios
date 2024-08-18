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
    <div class="dropdown">
    <div class="logo"><a href="#">logo</a></div>
        <nav class="nav">
            <ul class="menu-horizontal">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Corporativo</a></li>
                <li><a href="#">Contacto</a></li>
                <li>
                    <a class="menu">Productos</a>
                    <ul class="menu-vertical">
                        <li><a href="llantas.php">Llantas</a></li>
                        <li><a href="">Lubricantes</a></li>
                        <li><a href="">Accesorios</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="icons">
            <i class="bi bi-person-fill"></i>
            <i class="bi bi-cart4"></i>
        </div>
    </div>
    <!-- Aquí se insertará el contenido específico de la página -->
    <div class="page-content">
        <?php if (isset($pageContent)) echo $pageContent; ?>
    </div>

    <div class="footer">
        Footer
    </div>

    <!-- Scripts de Bootstrap y JavaScript necesarios -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
