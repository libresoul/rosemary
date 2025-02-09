<?php
include_once 'includes/header.inc.php';
include_once 'includes/functions.inc.php';

$groupedCards = groupCakes();
?>

<div id="card-container" class="mb-10">
    <?php foreach ($groupedCards as $type => $cards): ?>
        <section id="<?= htmlspecialchars($type) ?>">
            <div class="flex items-center justify-center">
                <h2 class="w-96 p-6 text-pink-50 bg-pink-600/50 hover:bg-pink-600 hover:scale-125 transition-all duration-500 text-center text-5xl font-bold uppercase m-10 rounded">
                    <?= htmlspecialchars($type) ?>
                </h2>
            </div>
        </section>

        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
            <?php foreach ($cards as $card): ?>
                <a href="checkout.php?cakeID=<?= $card['cakeID'] ?>">
                    <div class="cursor-pointer group overflow-hidden relative text-pink-50
                    max-w-[300px] min-w-[250px] mx-auto transition-all duration-500 hover:scale-125 hover:z-10 rounded">
                        <div class="flex items-center justify-center w-full bg-pink-400/50">
                            <img src="<?= 'images/' . strtolower($type) . 's/' . htmlspecialchars($card['Image']) ?>"
                                alt="<?= htmlspecialchars($card['Name']) ?>"
                                class="object-cover transition-transform duration-500 aspect-[4/3] group-hover:scale-125">
                        </div>
                        <div class="bg-pink-600/50 w-full p-3 text-center">
                            <span class="text-pink-50 text-2xl font-semibold whitespace-normal break-words">
                                <?= htmlspecialchars($card['Name']) ?>
                            </span>
                        </div>
                        <div class="absolute bg-pink-600 bottom-0 w-full p-4 text-center text-pink-50 text-1xl opacity-0
                        transition-opacity duration-500 group-hover:opacity-100">
                            <?= htmlspecialchars($card['Description']) ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    <?php endforeach; ?>
</div>
