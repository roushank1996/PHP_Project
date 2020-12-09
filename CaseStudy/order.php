<?php require 'header.php'; ?>
<div class="col-md-12 content">
    <?php
    $res = $conn->query("SELECT * FROM product");

    while ($row = $res->fetch_object()) {
        $item_name = $row->name;
        $type = $row->type;
        $price = @number_format($row->price, 2);
        ?>
        <div class="col-md-6 item">
            <div class="col-md-2">
                <div><h4><b><?php echo $item_name; ?></b></h4></div>
                <div class="<?php echo $type; ?>">&nbsp;</div><br>
                <div class="price">Rs.<?php echo $price; ?></div>
            </div>
            <div class="col-md-7">
                <p><?php echo $row->details; ?></p>
                <div>
                    <p><b>Ingredients : </b><?php echo $row->ingredients; ?></p>
                </div>
                <div>
                    <p><b>Toppings : </b><?php echo $row->toppings; ?></p>
                </div>
            </div>
            <div class="col-md-2">
                <img class="item-image" src="assets/images/products/<?php echo $row->image; ?>"/>
            </div>
        </div>
        <?php
    }
    ?>   
</div>
<?php require 'footer.php'; ?>