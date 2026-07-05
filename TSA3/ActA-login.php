<?php
session_start();
if (isset($_SESSION['active_user'])) {
    header("Location: ActA-home.php");
    exit();
}

$message = "";

$cookie_u = isset($_COOKIE['my_user']) ? $_COOKIE['my_user'] : "";
$cookie_p = isset($_COOKIE['my_pass']) ? $_COOKIE['my_pass'] : "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_user = $_POST['username'];
    $input_pass = $_POST['password'];

    if (isset($_SESSION['registered_user']) && isset($_SESSION['registered_pass'])) {
        if ($input_user === $_SESSION['registered_user'] && $input_pass === $_SESSION['registered_pass']) {
            $_SESSION['active_user'] = $input_user;
            if (isset($_POST['remember'])) {
                setcookie("my_user", $input_user, time() + (86400 * 30), "/");
                setcookie("my_pass", $input_pass, time() + (86400 * 30), "/");
            } 
            else {
                setcookie("my_user", "", time() - 3600, "/");
                setcookie("my_pass", "", time() - 3600, "/");
            }
            header("Location: ActA-home.php");
            exit();
        } 
        else {
            $message = "<div class='alert alert-danger'>Invalid credentials. Try again.</div>";
        }
    } 
    else {
        $message = "<div class='alert alert-warning'>No account found. Please register first.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Activity A - Login</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Login Form</h2>
            <?= $message; ?>
    </div>

    <div class="card shadow-sm">
                <div class="card-body">
                    <form method="post">
                        <div class="mb-2">
                            <label class="form-label mb-0">Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $cookie_u ?>" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label mb-0">Password</label>
                            <input type="password" name="password" class="form-control" value="<?= $cookie_p ?>" required>
                        </div>
                        <div class="d-flex justify-content-between">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="rem" <?= !empty($cookie_u) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="rem">Remember Me</label>
                                </div>
                            <button type="submit" class="btn btn-light border w-50">Login</button>
                            <a href="ActA.php" class="btn btn-secondary">Register</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>