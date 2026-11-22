<?php
$siteName = "My PHP Site";
$greeting = "Hello, World! Shubham";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
  <h1><?= htmlspecialchars($greeting, ENT_QUOTES, 'UTF-8') ?></h1>
  <p>Server time: <?= date("Y-m-d H:i:s") ?></p>
</body>
</html>
