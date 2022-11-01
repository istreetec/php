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

    // Simple Arrays
    $books = ["Desert Salamanders", "7 Little Johnsons", "Cook with Bobby Flay"];


    // Associative Arrays to store Detailed Key value pairs
    $authors = [
        ['name' => "Mobi K. Dick", 'eyeColour' => 'brown', 'dob' => 1914],
        ['name' => "Peter Z. Weir", 'eyeColour' => 'black', 'dob' => 1940],
        ['name' => "Liam D. McCTasney", 'eyeColour' => 'blue', 'dob' => 1992]
    ];

    // Conditionals
    if ($read) {
        $message = "You've read $book";
    } else {
        $message = "You've NOT read $book";
    }


    // Functions
    function filterByAuthor($authors, $journalist)
    {
        $filteredAuthors = [];
        foreach ($authors as $author) {
            if ($author['name'] === $journalist) {
                // Push into the array
                $filteredAuthors[] = $author;
            }
        }
        return $filteredAuthors;
    }
    ?>
    <h1>
        <?= $message ?>
    </h1>

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
    <?php endforeach; ?>

    <p>Authors</p>

    <?php foreach (filterByAuthor($authors, 'Peter Z. Weir') as $author) : ?>
        <?= "<li>{$author['name']}<sup>TM</sup> Born {$author['dob']}</li>" ?>
    <?php endforeach; ?>
</body>

</html>
