<?php
	session_start();
	require_once(__DIR__."/../config/config.php");
	require_once(__DIR__."/../user/CustomerController.php");
	$customerController = new CustomerController();
	$page = 0;
	if (isset($_GET["page"])) {
			$page = $_GET["page"];
	}
	$totalCustomers = $customerController->getTotalCustomerByType(0);
	$totalPage = floor($totalCustomers/LIMIT_ON_PAGE) + 1;
	if ($page >= $totalPage || $page < 0) {
			header("location: userManagement.php");
	}

	$normalCustomers = $customerController->getCustomerByType($page, 0);

?>


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Danh sách tài khoản</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<link rel="stylesheet" href="./styles/usersManagement.css">
    <script src="https://kit.fontawesome.com/461cf0a7ef.js" crossorigin="anonymous"></script>

	</head>
	<body>
	<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
        <div class="mainBody"> 
        <div class="infor">
            <div class="title">DANH SÁCH  KHÁCH HÀNG</div>
            <table border="0" style="border-collapse: collapse; margin: auto">
                <tr class="header">
                    <td>Tên</td>
                    <td>Email</td>
                    <td>Ngày sinh</td>
                    <td>Giới tính</td>
                    <td>Chức năng</td>
                </tr>
                <?php
                    foreach ($normalCustomers as $key => $customer) {
                        echo '
                            <tr class="item">
                                <td>'.$customer['user_name'].'</td>
                                <td>'.$customer['email'].'</td>
                                <td>'.$customer['dob'].'</td>
                                <td>'.$customer['gender'].'</td>
                                <td>
                                    <a href="lock.php?lock_id='.$customer["id"].'"><i id="lock" class="fa-solid fa-lock"></i></a> |
                                    <a href="lock.php?delete_id='.$customer["id"].'"><i id="delete" class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        ';
                    }
                ?>
                <tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
                    <td colspan="7">
                        <p>Tổng: <?php echo count($normalCustomers); ?></p>
                    </td>
                </tr>
                <tr class="page">
                    <?php
                        $nextPage = $page + 1;
                        $prevPage = $page - 1;
                        $prevEnabled = true;
                        $nextEnabled = true;
                        
                        if ($prevPage < 0) {
                            $prevEnabled = false;
                        }

                        if ($nextPage >= $totalPage) {
                            $nextEnabled = false;
                        }

                        echo '<td colspan="6">';
                        if ($prevEnabled) {
                            echo '<a href="?page='.$prevPage.'">
                                    <i id="left" class="fa-solid fa-left-long"  "></i>
                                </a>';
                        }
                        
                        echo " &#160 &#160 &#160 ";

                        if ($nextEnabled) {
                            echo '<a href="?page='.$nextPage.'">
                                    <i id="left" class="fa-solid fa-right-long"  "></i>
                                </a>';
                        }

                        echo '</td>';
                    ?>
                </tr>
            </table>
        </div>
    </div>
		</div>
	</body>
</html>
