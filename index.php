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
                "yearPublished" => 1968
            ],
            [
                "bookName" => "The Langoliers",
                "author" => "Stephen King",
                "purchaseURL" => "https://www.amazon.com/Langoliers-Stephen-King/dp/1982136057/ref=sr_1_1?crid=215TY6YCSB49Y&keywords=The+Langoliers&qid=1699126346&s=books&sprefix=the+langoliers%2Cstripbooks%2C100&sr=1-1",
                "yearPublished" => 1990
            ],
            [
                "bookName" => "Project Hail Mary",
                "author" => "Andy Weir",
                "purchaseURL" => "https://www.amazon.com/Project-Hail-Mary-Andy-Weir/dp/0593135229/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1699126388&sr=1-1",
                "yearPublished" => 2021
            ],
            [
                "bookName" => "The Martian",
                "author" => "Andy Weir",
                "purchaseURL" => "https://www.amazon.com/Martian-Novel-Andy-Weir/dp/0593357132/ref=asc_df_0593357132/?tag=hyprod-20&linkCode=df0&hvadid=509203545053&hvpos=&hvnetw=g&hvrand=2071329453527143578&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1019109&hvtargid=pla-960838411181&psc=1&gclid=CjwKCAjw15eqBhBZEiwAbDomEufErI44W-ZV8PIFwlfY57Iy8_1KazvnG7kzuqWfpq9yHAF4a6kvrhoC4G4QAvD_BwE",
                "yearPublished" => 2011
            ]
        ];

        function filterByAuthor($recommendedBooks) {

        }
    ?>

    <ul>
        <?php
            $bookCount = count($recommendedBooks);
            $currentBook = 0;
            foreach ($recommendedBooks as $recommendedBook) : $currentBook++;
        ?>
            <?php if ($recommendedBook["author"] === "Andy Weir") : ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>
        <?= filterByAuthor($recommendedBook); ?>
    </p>
</body>
</html>