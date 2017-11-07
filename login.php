<?php session_start(); ?>
<?php include("include/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1"><h1>Please login to enjoy our math game.</h1></div>
            <div class="col-sm-1"></div>
        </div>
        <form action="authenticate.php" method="post" role="form" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-4 text-right">Email:</div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="email" name="username" placeholder="Email" size="6">
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 text-right">Password:</div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" size="6">
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <button type="submit" class="btn btn-primary" name = "login">Login</button>
                </div>
            </div>
        </form>
        <div class="row">
            <?php 
            $msg=$_GET['message'];
            echo "<p class='col-sm-3 col-sm-offset-4 incorrect'>$msg</p>";
            ?>
        </div>
    </div>
<?php include("include/footer.php"); ?>