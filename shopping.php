<?php
include_once 'includes/header.inc.php';
include_once 'includes/functions.inc.php';

$groupedCards = groupCakes();
?>

<div id="card-container" class="px-4 py-10" style="margin-top: 40px;">
    <?php foreach ($groupedCards as $type => $cards): ?>
        <h2 class="px-6 py-5 text-slate-700 bg-teal-100/40 hover:bg-teal-100/10 hover:scale-150 transition-all duration-500 text-center text-5xl font-bold uppercase mx-10 my-10 rounded">
            <?= htmlspecialchars($type) ?>
        </h2>

        <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 px-4 items-center">
            <?php foreach ($cards as $card): ?>
                <a href="checkout.php?cakeID=<?= $card['cakeID'] ?>">
                    <div class="cursor-pointer group overflow-hidden relative text-slate-700 
                            max-w-[300px] min-w-[250px] mx-auto transition-all duration-500 hover:scale-125 hover:z-10 rounded">
                        <div class="flex items-center justify-center w-full aspect-[4/3] p-4 bg-teal-100">
                            <img src="<?= 'images/' . strtolower($type) . 's/' . htmlspecialchars($card['Image']) ?>"
                                alt="<?= htmlspecialchars($card['Name']) ?>"
                                class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="bg-teal-200 w-full p-3 text-center">
                            <span class="text-slate-700 text-2xl font-semibold whitespace-normal break-words">
                                <?= htmlspecialchars($card['Name']) ?>
                            </span>
                        </div>
                        <div class="absolute bg-teal-200 bottom-0 w-full p-4 text-center text-slate-700 text-1xl opacity-0 
                                transition-opacity duration-500 group-hover:opacity-100">
                            <?= htmlspecialchars($card['Description']) ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
