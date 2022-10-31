<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
    <!-- <link rel="stylesheet" href="main.css"> -->
</head>

<body>
    <?php
    $read = true;
    $message = "";
    $book = "Dark Matter";
    $books = ["Desert Salamanders", "7 Little Johnsons", "Cook with Bobby Flay"];

    // Conditionals
    if ($read) {
        $message = "You've read $book";
    } else {
        $message = "You've NOT read $book";
    }
    ?>
    <h1><?= $message ?></h1>

    <?php
    // Loop over arrays
    foreach ($books as $value) {
        echo "<li>{$value}<sup>TM</sup></li>";
    }
    ?>

    <p></p>

    <!-- Alternative foreach syntax when you have lotsa HTML Markup -->
    <?php foreach ($books as $value) : ?>
        <?= "<li>{$value}<sup>TM</sup></li>" ?>
    <?php endforeach ?>
</body>

</html>
