<?php

require '../config/db_conn.php';

$_SESSION = [];
session_unset();
session_destroy();
header("Location: ../pages/mainMenu.php");
