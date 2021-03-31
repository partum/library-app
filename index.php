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
        <meta name="description" content="a library app">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        
            <input type="text" placeholder="Search for a book..." id='search'>
            <button onClick = loginMenu() id='login-button'>
                <i class="fas fa-user-circle"></i>
            </button>
            <h1>Moriarty Library</h1>
            <h2>Serving readers since 1994</h2>
            <div id='border'><h2 id='black-h2'>Newest Additions</h2>
                <div id='book-list'>
                    <article>
                        <img src="dummybook.jpg" alt="book cover">
                        <span>
                            <p>Test Title</p>
                            <p>Author Name</p>
                        </span>
                    </article>
                    <article>
                        <img src="dummybook.jpg" alt="book cover">
                        <span>
                            <p>Test Title</p>
                            <p>Author Name</p>
                        </span>
                    </article>
                    <article>
                        <img src="dummybook.jpg" alt="book cover">
                        <span>
                            <p>Test Title</p>
                            <p>Author Name</p>
                        </span>
                    </article>
                    <article>
                        <img src="dummybook.jpg" alt="book cover">
                        <span>
                            <p>Test Title</p>
                            <p>Author Name</p>
                        </span>
                    </article>
                    <article>
                        <img src="dummybook.jpg" alt="book cover">
                        <span>
                            <p>Test Title</p>
                            <p>Author Name</p>
                        </span>
                    </article>
                  
                </div>
            </div>
            <span id='overlay'></span>  
            <div class="form" id='login-menu'>
                <form class="login-form">
                    <input type="text" placeholder="pat OR lib"/>
                    <input type="password" placeholder="123"/>
                    <button>login</button>
                </form>
  </div>
<?php
echo "Hello World!";
?>
        
        
        <script src="script.js" async defer></script>
    </body>
</html>