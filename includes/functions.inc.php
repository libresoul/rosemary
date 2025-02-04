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

function isUnique($db, $uname, $email)
{
    $sql = "SELECT * FROM users WHERE uname = :uname OR email = :email;";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':uname', $uname, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);

    if (!$stmt) {
        header('Location:../signup.php?error=stmtfailed');
        exit();
    }

    $result = $stmt->execute();
    if ($result) {
        $row = $result->fetchArray(SQLITE3_ASSOC);
        if ($row) {
            return false;
        } else {
            return true;
        }
    } else {
        header('Location:../signup.php?error=executionfailed');
        exit();
    }
}

function addUser($uname, $email, $pw)
{
    include_once 'includes/db.inc.php';
    $unique = isUnique($db, $uname, $email);

    if (!$unique) {
        header('Location:../signup.php?error=alreadysignedup');
        exit();
    }

    $sql = 'INSERT INTO users(uname, email, password) VALUES(:uname, :email, :password);';
    $hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':uname', $uname, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':password', $hashedPassword, SQLITE3_TEXT);

    if (!$stmt) {
        header('Location:../signup.php?error=stmtfailed');
        exit();
    }

    $result = $stmt->execute();

    if (!$result) {
        return false;
    } else {
        return true;
    }
}

function loginUser($uname, $password)
{
    include_once 'db.inc.php';

    $sql = 'SELECT * FROM users WHERE uname = :uname;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':uname', $uname, SQLITE3_TEXT);

    if (!$stmt) {
        header('Location:../signin.php?error=stmtfailed');
        exit();
    }

    $result = $stmt->execute();
    $row = $result->fetchArray(SQLITE3_ASSOC);

    if (($row != null)  && password_verify($password, $row['password']) === true) {
        session_start();
        $_SESSION['username'] = $row['uname'];
        $_SESSION['email'] = $row['email'];
        header('Location:../index.php');
        exit();
    } else {
        header('Location:../signin.php?error=invalidlogins');
        exit();
    }
}

function handleSignErrors()
{
    if (!isset($_GET['error'])) {
        return;
    }
    $error = htmlspecialchars($_GET['error']);

    if ($error == 'none') {
        echo <<< DETAILS
        <div class="text-sm mt-4 text-green-700">Account created successfully!<br><a href="signin.php"><span>Sign in</span></a></div>
        DETAILS;
    } elseif ($error == 'alreadysignedup') {
        echo <<< DETAILS
        <div class="text-sm mt-4 text-red-700">There is an account with this username<br><a href="signin.php"><span class="hover:opacity-50">Sign in?</span></a></div>
        DETAILS;
    } elseif ($error == 'invalidlogins') {
        echo <<< DETAILS
        <div class="text-sm mt-4 text-red-700">Invalid username or password<br><a href="signup.php"><span class="hover:opacity-50">Sign up?</span></a></div>
        DETAILS;
    }
}
