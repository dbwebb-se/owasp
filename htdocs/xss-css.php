<?php

$color = $_GET["color"] ?? "white";



?><!doctype html>
<meta charset="utf-8">
<style>
body {
    background-color: <?= $color ?>
}
</style>
<body>
<h1>This is a web page open for injection</h1>

<p>You can change the background color of this web page to <a href="?color=green">green</a>, <a href="?color=yellow">yellow</a>
 or <a href="?color=white">white</a>.</p>
</body>
