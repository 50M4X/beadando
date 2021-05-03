<div id="tablebox">
<?php

try{
	$connect=new PDO('mysql:host=localhost; dbname=kapcsolat', 'root', '',);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	echo 'Database connection success';

	$query = "SELECT * FROM messages ORDER BY id desc";
	
	$data = $connect->query($query);
	echo '<table cellpadding="5px" style="width:80%;  border: 2px solid #000000; border-collapse: collapse; text-align:left; table-layout: fixed;">
  <tr>
    <th style="border-right: 1px solid #000000; width:15%">Vezetéknév</th>
    <th style="border-right: 1px solid #000000; width:15%"">Keresztnév</th>
    <th style="border-right: 1px solid #000000; width:20%"">E-mail cím</th>
	<th>Üzenet</th>
  </tr>';
	
	foreach($data as $row)
	{
		echo '<tr style="border-top: 3px solid #000000;">
				<td style="border-right: 1px solid #000000; ">'.$row["csaladi_nev"].'</td>
				<td style="border-right: 1px solid #000000;">'.$row["uto_nev"].'</td>
				<td style="border-right: 1px solid #000000;">'.$row["email"].'</td>
				<td>'.$row["uzenet"].'</td>
				</tr>';
		
		
	}
	
	echo '</table>';
	
	
}
catch(PDOException $error)
{
	$error->getMessage();
}


?>
</div>