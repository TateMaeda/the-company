<!-- edit-user.php/views -->

<?php
session_start();

require '../classes/User.php';

$user_obj = new User;
$user = $user_obj->getUser();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Bootstrap Online via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
            <div class="navbar-nav">
                <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log Out</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="row justify-content-center gx-0">
        <div class="col-4">
            <h2 class="text-center mb-4">EDIT USER</h2>
            <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">

                <div class="row justify-content-center mb-3">
                    <div class="col-6">
                        <?php
                        if ($user['photo']) {
                        ?>
                            <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto edit-photo">
                        <?php
                        }
                        ?>
                        <input type="file" name="photo" class="form-control mt-2" accept="image/*">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="first-name" class="gorm-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $user['first_name'] ?>" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="gorm-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user['last_name'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="username" class="form-label fw-bold">UserName</label>
                    <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" value="<?= $user['user_name'] ?>" required>
                </div>
                <div class="text-end">
                    <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                </div>
            </form>
        </div>
    </main>


    <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>