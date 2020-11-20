<?php

$date = $_GET["date"] ?? "now";



?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This is a web page open for injection</h1>

<form>
    <label>Enter a date:
        <input type="text" name="date" value="<?= htmlentities($date) ?>">
    </label>
</form>

<script>
let date = new Date("<?= $date ?>")
let day = date.getDay()
console.log(date)
console.log(day)
</script>

<p>It was a <script>document.write(day)</script> on the date <?= htmlentities($date) ?>.</p>

</body>
