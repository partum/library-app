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
<?php
    include("scripts/config.php");
    $key = $_GET["key"];
    $sql = "DELETE FROM books WHERE ISBN = '$key'";
    if ($link->query($sql) === TRUE) {
        echo "<p>Record deleted successfully.</p>";
        echo '<a href="/library-app/admin-books.php">back</a>';
        //header("location:admin-books.php");
      } else {
        echo "Error deleting record: " . $link->error;
      }
?>

