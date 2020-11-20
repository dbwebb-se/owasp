<?php
$access = $_POST["access"] ?? "Guest";
$doit = $_POST["doit"] ?? null;

switch ($access) {
    case "Student":
        $grade = "Fx";
        break;
    case "Teacher":
        $grade = "A";
        break;
    default:
        $grade = "NOT VISIBLE";
}


?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This is open for CSRF</h1>

<form method="post">
    <p>
        <label>Authorities:<br>
            <input type="radio" name="access" value="Student" checked>Student<br>
            <input type="radio" name="access" value="Teacher" disabled>Teacher<br>
        </label>
    </p>
    <p><input type="submit" name="doit" value="Show grades"></p>
</form>

<p>Thank you '<?= $access ?>'.</p>

<p>Your grade is '<?= $grade ?>'.</p>

</body>
