<?php
require 'conf.php';
require 'header.php';

session_destroy();
echo '<script>location.href = "index.php";</script>';
