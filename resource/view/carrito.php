<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo empty($pageTitle) ? 'TBD' : 'TBD | ' . htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/carrito.css">
</head>
<body class="carrito">
<div class="top-bar">
        <div class="logo">Logo</div>
        <div class="icons">
            <i class="bi bi-person-fill"></i>
            <a href="./carrito.php" class="btn btn-primary"> <i class="bi bi-cart4"></i> Ir a la compra</a>
        </div>
    </div>

    <div class="nav-bar">
        <a href="index.php">Inicio</a>
        <a href="#">Corporativo</a>
        <a href="carrito.php">Carrito</a>
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

<div class="container">
    <div class="cart-items">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cart-item">
                    <td><img src="../../public/img/dunlop direzza-dz102 sedan.png" alt="Dunlop Direzza-DZ102">Dunlop Direzza-DZ102<br>Sedan</td>
                    <td>$89.99</td>
                    <td class="quantity">
                        <input type="button" value="-" onclick="decreaseQuantity(0)">
                        <input type="text" id="quantity-0" value="1" readonly>
                        <input type="button" value="+" onclick="increaseQuantity(0)">
                    </td>
                    <td>$89.99</td>
                </tr>
                <tr class="cart-item">
                    <td><img src="../../public/img/dunlop direzza-ziii sedan.png" alt="Dunlop Direzza-ZIII">Dunlop Direzza-ZIII<br>Sedan</td>
                    <td>$79.99</td>
                    <td class="quantity">
                        <input type="button" value="-" onclick="decreaseQuantity(1)">
                        <input type="text" id="quantity-1" value="1" readonly>
                        <input type="button" value="+" onclick="increaseQuantity(1)">
                    </td>
                    <td>$79.99</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="cart-totals">
        <h3>Totales</h3>
        <p>Subtotal: <span id="subtotal">$169.98</span></p>
        <p>Envío: <span id="shipping">$5.00</span></p>
        <p class="total">Total: <span id="total">$174.98</span></p>
        <a href="#" class="checkout-button">Procesar Pago</a>
    </div>
</div>

<script>
    function decreaseQuantity(index) {
        let quantityInput = document.getElementById('quantity-' + index);
        let quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantityInput.value = quantity - 1;
            updateTotals();
        }
    }

    function increaseQuantity(index) {
        let quantityInput = document.getElementById('quantity-' + index);
        quantityInput.value = parseInt(quantityInput.value) + 1;
        updateTotals();
    }

    function updateTotals() {
        let subtotal = 0;
        let prices = [89.99, 79.99];
        let shipping = 5.00;

        for (let i = 0; i < prices.length; i++) {
            let quantity = parseInt(document.getElementById('quantity-' + i).value);
            subtotal += prices[i] * quantity;
        }

        document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
        let total = subtotal + shipping;
        document.getElementById('total').textContent = `$${total.toFixed(2)}`;
    }
</script>

</body>
</html>
