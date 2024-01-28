<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $names = ["Hakim", "Tijani", "Badr", "Siham"];
    ?>

    <h1>Names</h1>
    
    <ul>
        <?php 
            foreach($names as $name) {
                echo "<li>". $name ."</li>";
            }
        ?>
    </ul>
    
    <ul>
        <?php 
            foreach($names as $name) {
                echo "<li> $name </li>";
            }
            ?>
    </ul>

    <ul>
        <?php foreach($names as $name) {?>
           <li> <?= $name ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach($names as $name) : ?>
           <li> <?= $name ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- loop with condition -->

    <ul>
        <?php foreach($names as $name) : ?>
            <?php if($name == "Hakim") : ?>
                <li> <?= $name ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>