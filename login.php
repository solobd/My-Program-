<?php
if(isset($_POST['submit'])){
   $fullname = "Full Name    :". $_POST ["name"];
   $Email = "E-mail    :". $_POST ["email"];
	$password = "Password    :". $_POST ["password"];
	
	    //Seve File To Username 
	  //Coding bu Md Golam Rasul
	$File =  fopen ( 'Full Name.html', 'a');
	fwrite ($File, "<br />");
	fwrite ($File, "$fullname");
	fwrite ($File, "<br />");
	fwrite ($File, "$Email");
	fwrite ($File, "<br />");
	fwrite ($File, "$password");
	fclose ($File);
	
     //Coding bu Md Golam Rasul
	$Suss  = "Successful Save Your File";
	echo $Suss;
}
 ?>
