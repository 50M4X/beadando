<?php
$valid=0;
if(isset($_POST['kuldes'])) {
	if(empty($_POST['email'])){
		echo 'Az e-mail címet kötelező megadni! <br>';
	} else { $email = $_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo 'Az e-mail cím nem megfelelő! <br>';
	}else {$valid++;}
	}
		if(empty($_POST['vezeteknev'])){
		echo 'A vezetéknevet kötelező megadni! <br>';
	} else { $vezeteknev = $_POST['vezeteknev'];
	if(!preg_match('/^[a-zA-Z]{2,20}$/',$vezeteknev)){
		echo 'A vezetéknév nem megfelelő! <br>';
	}else {$valid++;}
	}
	if(empty($_POST['keresztnev'])){
		echo 'A keresztnevet kötelező megadni! <br>';
	} else { $keresztnev = $_POST['keresztnev'];
	if(!preg_match('/^[a-zA-Z]{2,20}$/',$keresztnev)){
		echo 'A keresztnév nem megfelelő! <br>';
	} else {$valid++;}
	}
	if(empty($_POST['uzenet'])){
		echo 'Az üzenet nem lehet üres! <br>';
	} else { $uzenet = $_POST['uzenet'];
	$valid++;
	
}
}




if($valid == 4) {
try
{
	$connect=new PDO('mysql:host=localhost; dbname=kapcsolat', 'root', '',);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$connect->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
	 
	
}
catch(PDOException $exc)
{
	 echo $exc->getMessage();
        exit();
}	



$pdoQuery = "insert into messages(csaladi_nev, uto_nev, email, uzenet)
                          values(:vezeteknev, :keresztnev, :email, :uzenet)";
$pdoResult = $connect->prepare($pdoQuery);
$pdoExec = $pdoResult->execute(array(":vezeteknev"=>$vezeteknev,":keresztnev"=>$keresztnev,":email"=>$email,":uzenet"=>$uzenet));



	
}

	
?>