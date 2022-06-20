<?php

session_start();

session_destroy();
header('location: login.php?login-erro3');

?>