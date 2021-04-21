<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit a Book</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="\library-app\style.css">
        <?php include("scripts/config.php")?>
        <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            $key = $_GET["key"];
            $sql = "SELECT title, author, ISBN, copies FROM books WHERE ISBN = '$key'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $title = $row["title"];
                    $author = $row["author"];
                    $isbn = $row["ISBN"];
                    $copies = $row["copies"];
                }
            }
            // $title = $sql['title'];
            // $author = $sql['author'];
            // $isbn = $sql['ISBN'];
            // $copies = $sql['copies'];
            
            if(isset($_POST['update'])) // when click on Update button
            {
                $title = $_POST["title"];
                $author = $_POST["author"];
                $isbn = intval($_POST["isbn"]);
                $copies = intval($_POST["copies"]);

                // $edit = "UPDATE books SET title = '$title', author = '$author', isbn = '$isbn', copies = '$copies' WHERE isbn ='$key'";
                $edit = mysqli_query($link,"update books set title = '$title', author = '$author', isbn = '$isbn', copies = '$copies' where isbn = '$key'");
                
                if($edit)
                {
                    $link->close(); // Close connection
                    echo '<p>Update Successful</p>';
                    echo '<a href="/library-app/admin-books.php">Return to book admin page.</a>';
                    exit;
                }
                else
                {
                    echo mysqli_error($link);
                }    	
            }   
        ?>

        <form method="POST" class='admin'>
            <label for="">Title</label>
            <input type="text" name='title' value=<?php echo $title ?>>
            <label for="">Author</label>
            <input type="text" name='author' value=<?php echo $author ?>>
            <label for="">ISBN</label>
            <input type="text" name='isbn' maxlength='9' value=<?php echo $isbn ?>>
            <label for="">Copies</label>
            <input type="text" name='copies' maxlength='2' value=<?php echo $copies ?>>
            <button type="submit" name='update' value='update' class='small-button'>Edit</button>
        </form>

        
    </body>
</html>

