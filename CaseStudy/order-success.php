<?php require 'header.php'; ?>
<div class="col-md-12 content">
    <div class="col-md-8 col-md-offset-2 text-center">
        <?php if (isset($_SESSION['aUser']->name)) { ?>
            <h3>Order Successfully Placed <span class = "check">&#x2705;</span></h3>
            <p class = "text-center">Your pizza is ready to deliver to your place after 45 minutes.</p>
        <?php } else {
            ?>
            <h3>Login is required to order</h3>
            <p class="text-center"><a href="<?php echo $base_url; ?>login.php">Login Here</a></p>
            <?php
        }
        ?>    
    </div>
</div>
<?php require 'footer.php'; ?>