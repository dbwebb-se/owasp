<?php
$global = $_GET["global"] ?? "_GET";
$command = "var_dump(\$$global);";

?><!doctype html>
<meta charset="utf-8">
<body>
<h1>This is open for remote code execution</h1>

<form>
    <p>
        <label>Globals:<br>
            <input type="radio" name="global" value="_GET" checked>_GET<br>
            <input type="radio" name="global" value="_SERVER">_SERVER<br>
        </label>
    </p>
    <p><input type="submit" name="doit" value="Show content"></p>
</form>


<p>This is the content of the global '<?= $global ?>'.</p>

<pre>
<?= eval($command) ?>
</pre>

</body>
