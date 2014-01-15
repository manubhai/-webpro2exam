<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>サンプル</title>
</head>
<body>
<ul>
    <?php foreach ($products as $product) { ?>
    <li><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?> </li>
    <?php } ?>
</ul>
</body>
</html>