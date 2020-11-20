<?php
$path = $_GET["path"] ?? $_GET["dir"] ?? __DIR__;
$command = "ls -l $path";

?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This is open for remote code execution</h1>

<p>These are the files in this directory.</p>

<pre>
<?= exec($command) ?>
</pre>

</body>
