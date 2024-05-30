<!doctype html>

<?php 
#getting data out of a function.

    function write_logo(){
        echo '<img src="img/logo.png" alt="Logo" />';
    }

    function create_copyright_notice(){
        $year = date('Y');
        $message = '&copy; '. $year;
        return $message;
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
    
    
    <footer><?php echo create_copyright_notice(); ?></footer>
</body>
</html>