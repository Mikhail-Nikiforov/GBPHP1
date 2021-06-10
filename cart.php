<?php
    declare(strict_types=1);

    ini_set('error_reporting', (string)E_ALL);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');

    include_once('function.php');

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
    <div class="cart">
        <?php
            if (isset($_SESSION['login'])) {
                show_cart();
            } else {
                echo 'Авторизуйтесь для просмотра корзины';
            }
            

        ?>
    </div>
</body>
</html>