<?php require 'header.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $qry = "select * from users where email='" . $email . "' and password ='" . $password . "'";
    $res = mysqli_query($conn, $qry);
    if (mysqli_num_rows($res) > 0) {
         $row = $res->fetch_object();
         $_SESSION['aUser'] = $row;
         header('location:' . $base_url);
    } else {
        header('location:' . $base_url . 'login.php?msg=Invalid login details');
    }
}
?>
<div class="col-md-12 content">    
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-info login-box">
            <div class="panel-heading">Login Here</div>
            <div class="panel-body">
                <div>
                    <?php
                    if (isset($_GET['msg'])) {
                        echo '<p class="required">' . $_GET['msg'] . '</p>';
                    }
                    ?>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email<span class="required">*</span>:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password<span class="required">*</span>:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>       
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="panel-footer">
                New user? <a href="<?php echo $base_url; ?>register.php">Create an Account</a>
            </div>
        </div>

    </div>
</div>
<?php require 'footer.php'; ?>