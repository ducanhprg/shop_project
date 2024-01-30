<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/common.php";

unset($_SESSION['user']);
redirectToLogin();