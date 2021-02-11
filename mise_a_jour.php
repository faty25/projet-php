<?php
$co_id=$_POST['co_id'];
$co_plat=$_POST['co_plat'];
$co_prix=$_POST['co_prix'];
$co_photo=$_POST['co_photo'];


$username="root";
$password="";
$database="resto";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Désolé la base de données ne peut pas être sélectionnée");

$query="UPDATE menu SET plat='$co_plat', prix='$co_prix', photo='$co_photo' WHERE id='$co_id'";
mysql_query($query);
mysql_close();
echo 'Le plat vient d\'être modifier voulez vous retourner a : <a href="liste.php">La liste des plats</a>';
?>

 