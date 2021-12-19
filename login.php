<?php
include 'header.php';
?>

<!-- SECTION MAIN -->
<section id="main">
    <div class="container">
        <div class="container w-50 p-3 img-thumbnail mt-3">
            <form action="Includes/login.inc.php" method="post">
                <h1>Login</h1>
                <div class="mb-3">
                    <label for="login_name" class="form-label">Nickname/Email</label>
                    <input type="text" class="form-control" name="login_name" placeholder="Write nickname/emial..">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Write password..">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</section>
<!-- !SECTION MAIN! -->

<?php
include 'footer.php'
?>
