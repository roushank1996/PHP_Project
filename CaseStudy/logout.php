<?php
require 'db/conn.php';
require 'db/helper.php';
session_destroy();
header('location:' . $base_url . 'login.php');
