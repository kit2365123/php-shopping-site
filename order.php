<?php include 'header.php'; ?>

<form action="./functions.php?op=createOrder" method="post">

    <label for="gem_name">Product Name</label>
    <input type="hidden" id="item_id" name="item_id" value="<?php echo $_GET['item_id'];?>">
    <h2><?php echo $items[$_GET['item_id']-1]['name']; ?></h2>
    
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name"><br/>

    <label for="email">Your email:</label>
    <input type="email" id="email" name="email" require><br/>

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" min="1" max="5" value="1"><br/>

    <input class="buyBtn" type="submit" value="Confirm">
</form>

<?php include 'footer.php'; ?>