<!DOCTYPE html>

<html lang="en">

<head>
    <title>Electricity</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <link rel="icon" href="assets/img/download.png" type="image/x-icon"/>


    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>

            <form action="#" method="POST">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="UserName" name="UserName" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="password" name="Password" required>
                    </div>
              
                    <button type="submit" name="login" value="login" class="btn btn-primary shadow-2 mb-4">Login</button>
                    <!-- <p class="mb-2 text-muted">Forgot password? <a href="reset-pass.php"> &nbsp; &nbsp; Reset</a></p> -->
                </div>
            </div>
            </form>

        </div>
    </div>

    <script src="js/alerts.js"></script>
    <script src="js/main.js"></script>  

<?php
$con=mysqli_connect("localhost", "root", "", "myproject");
?>

<?php
if(isset($_POST['login'])){
    $count=0;
    $sql=mysqli_query($con, "select * from `Admins` where UserName='$_POST[UserName]' && Password='$_POST[Password]';");
    $count=mysqli_num_rows($sql);
    if ($count==0)
    {

        ?>
        <script type="text/javascript">
        alert("User Name and Password doesn't match ");
        </script>
        <?php
    }
    else {

        ?>        
        <script type="text/javascript">
        window.location="index.php"
        // header('location:EmplooyeReg.php');
        // header('location: index.php');


        </script>

        <?php
    }
}
?>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
