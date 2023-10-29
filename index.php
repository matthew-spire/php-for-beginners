<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $bookName = "Dark Matter";
        $readBook = false;

        // Unnecessary conditional (for demo purposes)
        if ($readBook) {
            $message = "You have read \"$bookName\".";
        } else {
            $message = "You have NOT read \"$bookName\".";
        }
    ?>

    <h1>
        <?= $message; ?>
    </h1>
</body>
</html>