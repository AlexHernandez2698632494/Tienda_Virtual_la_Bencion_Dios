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
