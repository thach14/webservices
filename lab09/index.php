<?php

    include 'dbconnection.php';

    // createElement and appendChild()

    $result = mysqli_query($con, 'select * from books');

    // echo "<pre>";

    // print_r($result);

    // echo "</pre>";

    $xml = new DOMDocument("1.0");

    $xml -> formatOutput = true;

    $books = $xml -> createElement("books");

    $xml -> appendChild($books);

    while($row = mysqli_fetch_array($result)){

        $book = $xml -> createElement("book");

        $books -> appendChild($book);

        $name = $xml -> createElement("name", $row['name']);

        $book -> appendChild($name);

        $price = $xml -> createElement("price", $row['price']);

        $book -> appendChild($price);

    }

    // xuất tài liệu XML ra trình duyệt để kiểm tra, dùng Developer tool để xem

    echo "<xmp>" . $xml -> saveXML() . "</xmp>";

    // xuất ra tập tin kết quả

    $xml -> save("reports.xml");

?>