<?php
$pageTitle = 'Checkout | Rosemary';
include_once 'includes/header.inc.php';
include_once 'includes/functions.inc.php';
?>

<div class="h-[--dont-overflow] flex justify-center items-center border border-pink-300 rounded-lg shadow">
    <div class="bg-pink-100 w-[400px] p-[30px] rounded-[12px] shadow-lg font-comfortaa">
        <h2 class="text-center text-[30px] mb-[30px] text-[#AA336A]">Checkout</h2>

        <form action="payment_handler.php" method="post" class="max-w-sm mx-auto space-y-5">
            <div>
                <label class="block mb-2 text-sm font-medium text-pink-600">Product</label>
                <select name="product" class="w-full p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded-lg focus:ring-pink-700 focus:border-pink-700" id="product_select">
                    <?php (isset($_GET['cakeID'])) ? $cakes = fetchCakes(htmlspecialchars($_GET['cakeID'])) : $cakes = fetchCakes() ?>
                    <?php foreach ($cakes as $cake): ?>
                        <option value="<?= $cake['Price'] ?>"><?= $cake['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-pink-600">Name</label>
                <input type="text" class="w-full p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded-lg focus:ring-pink-700 focus:border-pink-700" placeholder="Sanadee Dinayana" name="name" required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-pink-600">Address</label>
                <input type="text" class="w-full p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded-lg focus:ring-pink-700 focus:border-pink-700" placeholder="Rukmale" name="address" required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-pink-600">Contact Number</label>
                <input type="text" class="w-full p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded-lg focus:ring-pink-700 focus:border-pink-700" placeholder="07xxxxxxxx" name="contact_number" required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-pink-600">Price</label>
                <input type="text" class="w-full p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded-lg focus:ring-pink-700 focus:border-pink-700" placeholder="$$$$" name="price" id="price_display" readonly>
            </div>
            <center>
                <div class="d-grid gap-2 font-comfortaa">
                    <button type="submit" class="p-[12px] rounded-[8px] font-bold transition-colors duration-300 text-pink-100 flex items-center px-4 py-2 bg-pink-700 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300">
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
