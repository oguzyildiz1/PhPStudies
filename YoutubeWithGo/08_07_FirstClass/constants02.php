<?php
$paid = 'PAID';

define('STATUS_' . $paid, 5);

if (defined('STATUS_PAID')) {
    echo 'status is created';
} else {
    echo 'status is not created';
}
