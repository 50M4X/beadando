<div id="kapcsolat">
<h3>Küldjön üzenetet a tulajdonosnak!</h2>
    <form name="form1" action = "?oldal=kapcsolat" method = "post" onsubmit="return checkemail(this)">
     
        
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" pattern="[A-Za-z]{1,20}" required><br><br>
        <input type="text" name="keresztnev" placeholder="keresztnév" pattern="[A-Za-z]{1,20}" required><br><br>
        <input type="email" name="email" placeholder="e-mail cím" required><br><br>
		<textarea style="width:300px; resize:none;"  name="uzenet" cols="20" rows="5" placeholder="ide írja az üzenetet" required></textarea><br><br>
        <input type="submit" name="kuldes" value="Küldés">
        <br>&nbsp;
      
    </form>
	
	<script type="text/javascript">
	function checkemail(myForm){
		if(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/.test(myForm.email.value)){
			return (true)			
	}
	alert("Helytelen e-mail cím!")
	return (false)
	}
	
	</script>
	</div>
	<div id="messagesent">
		<?php
	if($valid==4){
		echo '<h3> Sikeres küldés! </h3>';
		echo '<p> <strong> Név: </strong>'.$_POST['vezeteknev'] .' '. 
		 $_POST['keresztnev'].'</p>'.'<br>';
		echo '<p> <strong> E-mail cím: </strong>'.$_POST['email'].'</p>'.'<br>';
		echo '<p> <strong> Üzenet: </strong>'.$_POST['uzenet'].'</p>';
	}
	?>
	</div>
	
