<?php
include __DIR__ . "/config.php";

$user = $_POST["user"] ?? null;
$pwd = $_POST["pwd"] ?? null;
$doit = $_POST["doit"] ?? null;

if ($doit) {
    if ($user === $theUser && $pwd === $thePwd) {
        header("Location: success.php");
        exit;
    }
}


?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This has a configuration file on a shared server with a hashed password</h1>

<form method="post">
    <p>
        <label>User:
            <input type="text" name="user" value="<?= htmlentities($user) ?>">
        </label>
    </p>
    <p>
        <label>Password:
            <input type="password" name="pwd" value="<?= htmlentities($pwd) ?>">
        </label>
    </p>
    <p><input type="submit" name="doit" value="Login"></p>
</form>

</body>
