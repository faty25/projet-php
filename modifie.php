<?php
$id=$_GET['id'];
$username="root";
$password="";
$database="resto";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Désolé la base de données ne peut pas être sélectionnée");
$query=" SELECT * FROM menu WHERE id='$id'";
$resultat=mysql_query($query);
$num=mysql_num_rows($resultat) or die(mysql_error());
mysql_close();
$i=0;
while ($i < $num) {
$plat=mysql_result($resultat,$i,"plat");
$prix=mysql_result($resultat,$i,"prix");
$photo=mysql_result($resultat,$i,"photo");
?>

Veuillez modifier les champs qui vous interesse

<?php
++$i;
}
?>
<form action="mise_a_jour.php" method="post">
<input type="hidden" name="co_id" value="<?php echo $id; ?>">
plat: <input type="text" name="co_plat" value="<?php echo $plat; ?>"><br>
prix: <input type="text" name="co_prix" value="<?php echo $prix; ?>"><br>
photo: <input type="text" name="co_photo" value="<?php echo $photo; ?>"><br>

<input type="Submit" value="Modifier">
</form>