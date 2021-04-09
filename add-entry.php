<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include("config.php")?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            $title = $_GET['title'];
            $author = $_GET['author'];
            $isbn = $_GET['isbn'];
            $copies = $_GET['copies'];
            $sql = "INSERT INTO books (Title, Author, ISBN, Copies) VALUES ('{$title}', '{$author}', '{$isbn}', '{$copies}')";

            if ($link->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $link->error;
              }
              
              $link->close();
        ?>
       <a href="add-book.php">add another book</a>
       <a href="admin-books.php">return to book admin page</a>
    </body>
</html>