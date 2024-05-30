<!doctype html>

<?php 
    function write_copyright_notice(){
        $year = date('M');
        echo '&copy; '. $year;
    }

?>
<html>
<head>
<meta charset="utf-8">
<title>Basic Functions</title>
</head>

<body>
    
    
    <footer><?php write_copyright_notice(); ?></footer>
</body>
</html>