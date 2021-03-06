<?php
$path_project = 'selling-computer';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

// check session
ob_start();
session_start();

$username = $_SESSION['username'];
$name = $_POST['name'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
$service = new GuestServices();
$person = $service->get($username);
$new_person = new Guest($username, $person->getPassword(), $name, $address, $telephone);

$service->update($new_person);
header("Location: ../login");
