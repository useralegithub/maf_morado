<?php

session_start();



if ($_SESSION['acceso']!='true'||!$_SESSION['acceso']||empty($_SESSION['acceso'])) {

	header('Location: '.home_url('/vip/login/'));

}



?>