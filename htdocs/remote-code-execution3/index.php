<?php
$userAgent = $_SERVER["HTTP_USER_AGENT"] ?? "No user agent";



?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This is open for remote code execution</h1>

<p>I have checked your user agent string.</p>

<pre>
<?= $userAgent ?>
</pre>

</body>
