<?php
  require_once(__DIR__."/../config/config.php");
  require_once(__DIR__."/../user/CustomerController.php");
  $customerController = new CustomerController();
  $unlock = 0;
  $lock = 1;
  $delete = 2;

  if (isset($_GET['lock_id'])) {
    $id = $_GET['lock_id'];
    $state = $customerController->changeStateAccount($id, $lock);
    if ($state) {
      header("location: account-list.php"); 
    }
  }

  
  if (isset($_GET['unlock_id'])) {
    $id = $_GET['unlock_id'];
    $state = $customerController->changeStateAccount($id, $unlock);

    if ($state) {
      header("location: locked-users.php"); 
    }
  }

    
  if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $state = $customerController->changeStateAccount($id, $delete);

    if ($state) {
      header("location: ".$_SERVER['HTTP_REFERER']); 
    }
  }
?>