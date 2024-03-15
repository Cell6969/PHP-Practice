<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar</title>
</head>
<body>
<?php
$names = ['pratham', 'simon', 'amir', 'vitto', 'oliver']
?>
<h1>Names</h1>
<ul>
    <!-- Cara ke 1 -->
    <h2>Cara ke 1</h2>
    <?php foreach ($names as $name) { ?>
        <li>
            <?php echo $name; ?>
        </li>
    <?php } ?>

    <h2>Cara ke 2</h2>
    <!-- Cara ke 2 -->
    <?php foreach ($names as $name) : ?>
        <li>
            <?php echo $name ?>
        </li>
    <?php endforeach; ?>

    <h2>Cara ke make kondisi</h2>
    <!-- Cara kondisi -->
    <?php foreach ($names as $name) : ?>
        <?php if ($name == 'amir') : ?>
            <li>
                <?php echo $name ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
</body>

</html>