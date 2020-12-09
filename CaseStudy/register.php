<?php require 'header.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);
    $datetime = date('Y-m-d h:i:s');
    $qry = "select * from users where email='" . $email . "' ";
    $res = mysqli_query($conn, $qry);
    if (mysqli_num_rows($res) > 0) {
        header('location:' . $base_url . 'register.php?error=This email id is already exists.');
    } else {
        $qry = "insert into users(name,mobile,email,password,datetime) values ";
        $qry .= "('" . $name . "','" . $mobile . "','" . $email . "','" . $password . "','" . $datetime . "')";
        //debug($qry);
        $res = mysqli_query($conn, $qry);
        header('location:' . $base_url . 'register.php?success=Account created successfully');
    }
}
?>
<div class="col-md-12 content">    
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-info login-box">
            <div class="panel-heading">Create New Account</div>
            <div class="panel-body">
                <div>
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error">' . $_GET['error'] . '</p>';
                    }else if (isset($_GET['success'])) {
                        echo '<p class="success">' . $_GET['success'] . '</p>';
                    }
                    ?>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Name<span class="required">*</span>:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Mobile<span class="required">*</span>:</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email<span class="required">*</span>:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password<span class="required">*</span>:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>         
                    <button type="submit" name="submit" id="submit" class="btn btn-success">Register</button>
                </form>
            </div>
            <div class="panel-footer">
                Already Registered? <a href="<?php echo $base_url; ?>login.php">Login</a>
            </div>
        </div>

    </div>
</div>
<?php require 'footer.php'; ?>