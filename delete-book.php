<?php
    include("config.php");
    $key = $_GET["key"];
    $sql = "DELETE FROM books WHERE ISBN = '$key'";
    if ($link->query($sql) === TRUE) {
        echo "Record deleted successfully";
        echo '<a href="/library-app/admin-books.php">back</a>';
        //header("location:admin-books.php");
      } else {
        echo "Error deleting record: " . $link->error;
      }
?>

