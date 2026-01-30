<?php
require "Config/Connection.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password == $row["password"]) {

            if ($row['role'] == "Administrator") {
                header("Location: Admin/Dasboard.php");
                exit;
            }

            if ($row['role'] == "User") {
                header("Location: Index.php");
                exit;
            }
        }
    }
    $error = true;
}

if (isset($error)) {
    echo "<script>
        alert('Username atau Password salah!');
    </script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <h1>Login</h1>

    <div class="container">
        <form action="login.php" method="POST">
            <div class="form-frame">
                <div class="form-input">
                    <label for="">Username</label>
                    <input type="text" name="username">
                </div>

                <div class="form-input">
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>

                <button class="btn btn-primary" name="submit">Login</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>