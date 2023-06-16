<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" align="center">
        <?php
        $doc = new DOMDocument();
        $doc->load('books.xml');
        $catalog = $doc->documentElement;
        echo "<tr background:><th>author</th><th>title</th><th>genre</th><th>price</th><th>publish_date</th><th>description</th></tr>";
        foreach ($catalog->childNodes as $book)
        {
            if($book->nodeName != "#text"){
            $author = $book->getElementsByTagName("author")->item(0)->nodeValue;
            $title = $book->getElementsByTagName("title")->item(0)->nodeValue;
            $genre = $book->getElementsByTagName("genre")->item(0)->nodeValue;
            $price = $book->getElementsByTagName("price")->item(0)->nodeValue;
            $publish_date = $book->getElementsByTagName("publish_date")->item(0)->nodeValue;
            $description = $book->getElementsByTagName("description")->item(0)->nodeValue;
            echo "<tr><td>$author</td><td>$title</td><td>$genre</td><td>$price</td><td>$publish_date</td><td>$description</td></tr>";
            }
        } ?>
    </table>
    <div class="class-btn" align="center">
        <button class="button" type="submit">
            <a href="them.php">Them sach</a>
        </button>
        <button class="button" type="submit">
            <a href="xuat.php">xuat file JSON</a>
        </button>
    </div>
</body>
</html>