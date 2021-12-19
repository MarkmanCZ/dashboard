<!-- SECTION MAIN -->
<section id="main">
    <div class="container">
            <div class="container w-50 p-3 img-thumbnail mt-3">
                <form action="../Includes/update.inc.php" method="post">
                    <h1>Profil</h1>
                    <input type="text" name="id" hidden value="<?= $_SESSION['user_data']['id']?>">
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nickname</label>
                        <input type="text" class="form-control" name="nickname" placeholder="Write nickname.." value="<?= $_SESSION['user_data']['uNick']?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Write email.." value="<?= $_SESSION['user_data']['uEmail']?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Write name.."  value="<?= $_SESSION['user_data']['uName']?>">
                    </div>
                    <div class="mb-3">
                        <label for="group" class="form-label">Group</label>
                        <input type="text" class="form-control" name="group" placeholder="Write group.."  value="<?= $_SESSION['user_data']['uGroup']?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Write password..">
                    </div>
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Password control</label>
                        <input type="password" class="form-control" name="passwordConfirm" placeholder="Write password again..">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
    </div>
</section>
<!-- !SECTION MAIN! -->