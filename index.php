<?php include('header.php'); ?>

    <h1>Order</h1>
    <h2><?php echo date('n');?>月優惠</h2>

    <?php

    // display items
    $gemQ = mysqli_query($dbConnection, "SELECT * FROM `gem`");
    while ($gem = mysqli_fetch_assoc($gemQ)) {
        echo '<div>
        <img src="./images/'.$gem['image'].'" />
        <p>
        Name: '.$gem['name'].'<br>
        Price: $'.$gem['price'].'<br>
        <a href="./order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">Order'.$gem['name'].'</a><br>
        </div>';
    }

    // foreach($items as $key => $item) {
    //     echo '<img src="./images/'
    //     .$item['image'].
    //     '" /><p>'
    //     .$item['name'].
    //     '<br>$'
    //     .$item['price'].
    //     '<br> <a href="./order.php?item_id='
    //     .$item['item_id'].
    //     '"class="buyBtn">Buy</a><br></p>';
    // }

    ?>

</html>

<?php include('footer.php'); ?>