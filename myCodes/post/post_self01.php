<?php
if (isset($_GET)) {
    $res_text = "get ile gelen veri var";
} else {
    $res_text = "gelen veri yok";
}

echo $res_text;
print_r($_GET);
