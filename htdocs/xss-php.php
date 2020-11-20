<?php

$date = $_GET["date"] ?? "now";
$day = date("l", strtotime($date));



?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This is a web page open for injection</h1>

<form>
    <label>Enter a date:
        <input type="text" name="date" value="<?= $date ?>">
    </label>
</form>

<p>It was a <?= $day ?> on the date <?= $date ?>.</p>

</body>
