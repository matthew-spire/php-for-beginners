<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $recommendedBooks = [
            [
                "bookName" => "Do Androids Dream of Electric Sheep?",
                "author" => "Philip K. Dick",
                "purchaseURL" => "https://www.amazon.com/Blade-Runner-Philip-K-Dick/dp/1524796972/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=&sr=",
                "yearPublished" => "1968"
            ],
            [
                "bookName" => "The Langoliers",
                "author" => "Stephen King",
                "purchaseURL" => "https://www.amazon.com/Langoliers-Stephen-King/dp/1982136057/ref=sr_1_1?crid=215TY6YCSB49Y&keywords=The+Langoliers&qid=1699126346&s=books&sprefix=the+langoliers%2Cstripbooks%2C100&sr=1-1",
                "yearPublished" => "1990"
            ],
            [
                "bookName" => "Project Hail Mary",
                "author" => "Andy Weir",
                "purchaseURL" => "https://www.amazon.com/Project-Hail-Mary-Andy-Weir/dp/0593135229/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1699126388&sr=1-1",
                "yearPublished" => "2021"
            ]
        ];
    ?>

    <ul>
        <?php
            $bookCount = count($recommendedBooks);
            $currentBook = 0;
            foreach ($recommendedBooks as $recommendedBook) : $currentBook++;
        ?>
            <li>
                Name of the Book:
                <a href="<?= $recommendedBook["purchaseURL"]; ?>" target="_blank">
                    <?= $recommendedBook["bookName"]; ?>
                </a>
            </li>
            <li>Year Published: <?= $recommendedBook["yearPublished"]; ?></li>
            <li>Author: <?= $recommendedBook["author"]; ?></li>
            <?php if ($currentBook !== $bookCount): ?>
                <br>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>