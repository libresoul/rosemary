<?php
function fetchCakes($id = 1)
{
    include_once 'includes/db.inc.php';

    $sql = 'SELECT * FROM cakes ORDER BY CASE WHEN cakeID = :CakeID THEN 0 ELSE 1 END;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':CakeID', $id, SQLITE3_INTEGER);

    if (!$stmt) {
        header('Location:../signup.php?error=stmtfailed');
        exit();
    }

    $result = $stmt->execute();

    $cakes = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        array_push($cakes, $row);
    }
    return $cakes;
}

function groupCakes()
{
    $cakes = fetchCakes();

    foreach ($cakes as $card) {
        $groupedCards[$card['type']][] = $card;
    }
    return $groupedCards;
}
