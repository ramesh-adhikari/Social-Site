<?php 

include('inc/header.inc.php');
 ?>
 <?php 



$check_for_pokes=mysql_query("SELECT * FROM pokes WHERE user_to='$user' ");
$poke=mysql_fetch_assoc($check_for_pokes);
$poke_num=mysql_num_rows($check_for_pokes);
$user_to=$poke['user_to'];
$user_from=$poke['user_from'];




 if(@$_POST['poke_'.$user_from.'']){
 	$delete_poke=mysql_query("DELETE FROM pokes WHERE user_form='$user_from' && user_to='$user_to' ");
 	$create_new_poke=mysql_query("INSERT INTO pokes VALUES('','$user','$user_from')");
 	header("location:my_pokes.php");
 	echo "you just poke $user_from";
 }

 if($poke_num==0){
 	echo "you have no poke yet";
 }
 else{
echo "

<form action='my_pokes.php' method='POST'>
You have been poke by $user_from&nbsp;

<input type='submit' name='poke_$user_from' value=\"Poke Back\">
</form>
"."</br>";



}







  ?>