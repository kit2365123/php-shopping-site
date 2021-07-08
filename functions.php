<?php
switch ($_GET['op']) {
    case 'createOrder':
        createOrder();
        break;
    case 'logout':

        break;
}

function createOrder() {
    echo $_POST['item_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>";

    // change page
    header("Location: ./order-completed.php");
}
?>