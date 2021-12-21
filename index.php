<?php
    include 'header.php';
?>

    <!-- SECTION MAIN -->
    <section id="main">
        <div class="container">
            <?php
                if(wizard_mode) {
                        include 'Includes/validators.inc.php';
                    ?>
                    <div class="container w-50 p-3 img-thumbnail mt-3">
                        <form action="Includes/index.inc.php" method="post">
                            <h1>Administrator account</h1>
                            <div class="mb-3">
                                <label for="nickname" class="form-label">Nickname</label>
                                <input type="text" class="form-control" name="nickname" placeholder="Write nickname..">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Write email..">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Write name..">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Write password..">
                            </div>
                            <div class="mb-3">
                                <label for="nickname" class="form-label">Password control</label>
                                <input type="password" class="form-control" name="passwordConfirm" placeholder="Write password again..">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>

            <?php
                }else {
                    //nothing
                }
            ?>
        </div>
    </section>
    <!-- !SECTION MAIN! -->

<?php
    include 'footer.php'
?>