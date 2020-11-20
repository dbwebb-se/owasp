<?php
$page = $_GET["page"] ?? "main";


include __DIR__ . "/$page.php";
