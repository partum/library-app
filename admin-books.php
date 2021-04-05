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
        <link rel="stylesheet" href="style.css">
        <?php include("config.php")?>
        <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <input type="text" placeholder="Search for a book..." id='search'> 
        <button>log out</button>
        <h1>Moriarty Library</h1>
        <h2>Serving readers since 1994</h2>
        <div id='border'>
            <span class='entry'>
                <h3 class='title'>Title</h3>
                <h3 class='author'>Author</h3>
                <h3 class='isbn'>ISBN</h3>
                <h3 class='copies'>Copies</h3>
            </span>
            <?php 
                $sql = "SELECT title, author, ISBN, copies FROM books";
                $result = $link->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<span class='entry'>
                            <p class='title'> {$row["title"]} </p>
                            <p class='author'> {$row["author"]} </p>
                            <p class='isbn'> {$row["ISBN"]} </p>
                            <p class='copies'> {$row["copies"]} </p>
                            <p class='icons'>
                                <i class='fas fa-edit'></i>
                                <i class='fas fa-trash-alt'></i>
                            </p>
                        </span>";
                }
                } else {
                echo "0 results";
                }
                $link->close();
            ?>
        </div>
    </body>
</html>