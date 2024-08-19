<?php
$pageTitle = "Corporativo"; // Título dinámico de la página

// Generar el contenido específico de la página
$pageContent = '

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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

';

include 'layout.php';
?>

<link rel="stylesheet" href="../css/Corporativo.css">
