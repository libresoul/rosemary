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

function handlePost($turnstileResp)
{
    $data = [
        "secret" => getenv('TURNSTILE_SECRET'),
        "response" => $turnstileResp,
        "remoteip" => $_SERVER['REMOTE_ADDR'],
    ];

    $options = [
        "http" => [
            "header" => "Content-Type: application/x-www-form-urlencoded",
            "method" => "POST",
            "content" => http_build_query($data),
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents('https://challenges.cloudflare.com/turnstile/v0/siteverify', false, $context);
    $response = json_decode($result, true);

    return $response['success'];
}
