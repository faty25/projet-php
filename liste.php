<?php
	// Initialiser la session
	session_start();
    ?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("resto") or die("erreur");

$req = mysql_query("SELECT * FROM menu");
$res = mysql_query($req);
?>
<table border='1'>
    <tr>
        <td>Id</td>
        <td>Plat</td>
        <td>Prix</td>
        <td>Photo</td>
</tr>
<?php
while($res = mysql_fetch_array($req)){
    ?>
    <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['plat'];?></td>
        <td><?php echo $res['prix'];?></td>
        <th><img width="80px" height="80px" src="A8.jpeg">
    </th><?php echo $res['photo'];?>
        
   <td>
        <form method="POST" enctype="multipart/form-data">
        <br>
        <button name="delete" type="submit"><a href="supprime.php?id=<?php echo $res['id']; ?>">Supprimer</a></button>
        <!--<button name="delete" type ="submit" value="<?php //echo $res['id'];?>">Supprimer</button>--> 
        <!--<button name="show" type ="submit" value="<?php //echo $res['id'];?>" >Modifier</button></td>-->
        <button name="update" type="submit"><a href="modifie.php?id=<?php echo $res['id']; ?>">modifier</a></button></td>
        </form>
</tr>

<?php
}
?>
</table>
<br>
<div id="navbar" class="navbar-collapse collapse">       
    <ul class="nav navbar-nav navbar-right">
    <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte']==1): ?>      
         <li><a href="" class="btn  btn-danger">Deconnexion</a></li>                           
     <?php else: ?>                          
         <li><a href="login.php" class=""><button style="color" red;>Se Deconnecter</button></a></li> 
        <style>
        button{
    padding: 1rem 1rem;
    background: orange;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    border: none;
}
        </style>
  <?php endif ?>
  </ul>
</div>