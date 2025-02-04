<?php
$pageTitle = 'Checkout | Rosemary';
include_once 'includes/header.inc.php';
include_once 'includes/functions.inc.php';
?>

<div class="h-[--dont-overflow] flex items-center justify-center rounded">
    <div class="p-10 transition-transform w-xl text-center rounded">
        <h1 class="text-pink-600 text-5xl font-bold">Checkout</h1>
        <form action="payment_handler.php" method="post" class="m-10">
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Product</label>
                <select name="product" class="w-full p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded-lg focus:ring-pink-700 focus:border-pink-700" id="product_select">
                    <?php (isset($_GET['cakeID'])) ? $cakes = fetchCakes(htmlspecialchars($_GET['cakeID'])) : $cakes = fetchCakes() ?>
                    <?php foreach ($cakes as $cake): ?>
                        <option value="<?= $cake['Price'] ?>"><?= $cake['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Name</label>
                <input type="text" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="Sanadee Dinayana" name="name" required>
            </div>
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Address</label>
                <input type="text" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="Rukmale" name="address" required>
            </div>
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Contact Number</label>
                <input type="text" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="07xxxxxxxx" name="contact_number" required>
            </div>
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Price</label>
                <input type="text" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="$$$$" name="price" id="price_display" readonly>
            </div>
            <center>
                <div class="d-grid gap-2 font-comfortaa">
                    <button type="submit" class="p-10 font-bold text-pink-100 flex items-center px-4 py-2 bg-pink-700 hover:scale-125 transition-all duration-500 rounded m-2">
                        Order
                    </button>
                </div>
            </center>
        </form>
    </div>
</div>
<script>
    const selectedProduct = document.getElementById("product_select");
    const priceDisplay = document.getElementById("price_display");
    const updatePrice = () => {
        const selectedValue = selectedProduct.value;
        priceDisplay.value = selectedValue;

    }

    updatePrice();

    selectedProduct.addEventListener('change', updatePrice);
</script>
</body>

</html>
