<?php
if (file_exists(__DIR__ . "/../autoload.php")) {
  require_once __DIR__ . "/../autoload.php";
}

/**
 * Log out system
 */
session_start();
?>
<?php if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
  /**
   * session destroy
   */

  session_destroy();

  /**
   *  cookie destroy
   */
  setcookie('user_login_id', '', time() - (60 * 60 * 365 * 10));


  header("location:login.php");
}

/**
 * Profile Page Access Security
 */

if (!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['email'])) {
  header("location:login.php");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icon -->
  <link rel="icon" href="images/fevicon.png" type="image/png" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- site css -->
  <link rel="stylesheet" href="style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- color css -->
  <link rel="stylesheet" href="css/colors.css" />
  <!-- select bootstrap -->
  <link rel="stylesheet" href="css/bootstrap-select.css" />
  <!-- scrollbar css -->
  <link rel="stylesheet" href="css/perfect-scrollbar.css" />
  <!-- data table css -->
  <!-- <link href="https://cdn.datatables.net/v/bs4/dt-2.1.8/datatables.min.css" rel="stylesheet"> -->
  <!-- custom css -->
  <link rel="stylesheet" href="css/custom.css" />

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>