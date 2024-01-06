<?php
session_start();
session_unset();
session_destroy();

header("location:http://127.0.1.1/php-procedural/ecommerce/dashboard/f_dashboard");
?>