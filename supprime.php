<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title></title>
<style>
.rouge{color:red;}
</style>	
</head>
<body>
<?php
$id=$_GET['id'];
$username="root";
$password="";
$database="resto";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Désolé la base de données ne peut pas être sélectionnée");
if(isset($_POST["supprimer"])){
$query="DELETE FROM menu WHERE id = '$id'";
$resultat=mysql_query($query);
mysql_close();
echo 'La plat vient d\'être supprimé voulez vous retourner à : <a href="liste.php">La liste des plats</a>';
}else{
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
<b class="rouge">Voulez vous vraiment supprimer le plat:</b>
<form action="" method="post">
<input type="hidden" name="co_id" value="<?php echo $id; ?>">
plat: <?php echo $plat; ?><br>
prix: <?php echo $prix; ?><br>
photo: <?php echo $photo; ?><br>

<input name="supprimer" type="Submit" value="Oui supprimer définitivement">
</form> 
<?php
++$i;
}}
?>
</body>
</html>
