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
        <a href="#">Corporativo</a>
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
