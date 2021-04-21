<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Moriarty Public Library</title>
        <meta name="description" content="a library app">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/jpg" href="dummybook.jpg"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <?php include("scripts/config.php");
            // Check if the user is already logged in, if yes then redirect him to welcome page
            if((isset($_SESSION["loggedin"])) && ($_SESSION["name"] == 'lib')){ //change this to account type
                header("location: admin-page.php");
                exit;
            }
        ?>
    </head>
    <body>
        
            <form onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" action="search.php">
                <input type="text" placeholder="Search for a book..." id='search' name='query'>
            </form>
            <button onClick = loginMenu() id='login-button'>
                <i class="fas fa-user-circle"></i>
            </button>
            <h1>Moriarty Library</h1>
            <h2>Serving readers since 1994</h2>
            <div id='border'><h2 id='black-h2'>Newest Additions</h2>
                <div id='book-list'>
                    <?php 
                    $sql = "SELECT title, author FROM books";
                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<article>
                                <img src='dummybook.jpg' alt='book cover'>
                                <span>
                                    <p>{$row["title"]}</p>
                                    <p>{$row["author"]}</p>
                                </span>
                            </article>";
                    }
                    } else {
                    echo "0 results";
                    }
                    $link->close();
                    ?>
                  
                </div>
            </div>
            <span id='overlay'></span>  
            <div class="form" id='login-menu'>
                <!-- <?php 
                    if(!empty($login_err)){
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }        
                ?> -->
                <form action="login.php" method="post" class='modal'>
                    <input type="text" name="username" placeholder="username = lib" id="username" required/>
                    <input type="password" name="password" placeholder="password = 123" id="password" required/>
                    <button type="submit">login</button>
                </form>
            </div>
    
        <script src="scripts/script.js" async defer></script>
    </body>
</html>