<!doctype html>

<?php 
    
    function write_logo(){
        echo '<img src="img/logo.png" alt="Logo" />';
    }

    function write_copyright_notice(){
        $year = date('M');
        echo '&copy; '. $year;
    }

?>
<html>
<head>
<meta charset="utf-8">
<title>Basic Functions</title>
<style>
    header img{
        width: 15px;
    }    
    </style>
</head>

<body>
    <header>
        <h1><?php write_logo(); ?> The Book Store</h1>
    </header>
    
    
    <footer><?php write_copyright_notice(); ?></footer>
</body>
</html>