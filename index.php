<?php include('header.php'); ?>

    <h1>Order</h1>
    <h2><?php echo date('n');?>月優惠</h2>

    <?php

    foreach($items as $key => $item) {
        echo '<img src="./images/'
        .$item['image'].
        '" /><p>'
        .$item['name'].
        '<br>$'
        .$item['price'].
        '<br> <a href="./order.php?item_id='
        .$item['item_id'].
        '"class="buyBtn">Buy</a><br></p>';
    }

    ?>

</html>

<?php include('footer.php'); ?>