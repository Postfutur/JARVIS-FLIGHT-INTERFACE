<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>
<html>

<head>
    <title>LOGIN TO FLIGHT MODE</title>
    <meta charset="UTF-8">
    <link href="./Css/Index.css" rel="stylesheet">
</head>

<body onload="max()">
    <div>
        <div id="logo">
            <h1><i> Login to Flight Mode</i></h1>
        </div>
        <div class="container form-signin"><?php $msg = '';
                                            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                                                if (
                                                    $_POST['username'] == 'MissPepperPotts' && $_POST['password'] == 'XXOLIVES'
                                                ) {
                                                    $_SESSION['valid'] = true;
                                                    $_SESSION['timeout'] = time();
                                                    $_SESSION['username'] = 'MissPepperPotts';
                                                    /*    echo 'You have entered valid use name and password'; */
                                                } else {
                                                    '<div class="logo">' . $msg = 'Sory Mr access denied, wrong password' . '/div>';
                                                }
                                            } ?></div> <!-- /container -->
        <section class="stark-login">
            <!-- <form action="" role="form" action="<?php /* echo htmlspecialchars($_SERVER['PHP_SELF']); */ ?>" method="post"> -->
            <form role="form" action="Flight_Mode.php" method="post">
                <div id="fade-box">
                    <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
                    <input type="text" name="username" placeholder="username = MissPepperPotts" required autofocus>
                    <!-- <input type="password" placeholder="Password" required> -->
                    <input type="password" name="password" placeholder="password = XXOLIVES" required>
                    <button type="submit" name="login">Login</button>
                </div>
            </form>
            <!--  Click here to clean <a href="logout.php" tite="Logout">Session. -->
            <div class="hexagons">
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>

                <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
            </div>
        </section>
        <div id="circle1">
            <div id="inner-cirlce1">
                <h2> </h2>
            </div>
        </div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
</body>

</html>