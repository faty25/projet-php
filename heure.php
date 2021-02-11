<marquee align="center" height="132" scrollamount="4">
<p>
<img border="0" src="A8.jpeg" width="128" height="128" alt="erreur d'image" hspace="0">
<img border="0" src="domo.jpg" width="128" height="128" alt="erreur d'image" hspace="0">
<img border="0" src="t.jpg" width="128" height="128" alt="erreur d'image" hspace="0">
<img border="0" src="f.jpg" width="128" height="128" alt="erreur d'image" hspace="0">
<img border="0" src="g.jpg" width="128" height="128" alt="erreur d'image" hspace="0">
</p></marquee>
<?php
mysql_connect("localhost","root","");
mysql_select_db("resto") or die("erreur");

$req = mysql_query("SELECT * FROM jour");
$res = mysql_query($req);
?>

<table border='1'>
    <tr>
        <td>Lundi</td>
        <td>Mardi</td>
        <td>Mercredi</td>
        <td>Jeudi</td>
        <td>Vendredi</td>
        <td>Samedi</td>
        <td>Dimanche</td>

</tr>
<?php
while($res = mysql_fetch_array($req)){
    ?>
    <tr>
        <td><?php echo $res['Lundi'];?></td>
        <td><?php echo $res['Mardi'];?></td>
        <td><?php echo $res['Mercredi'];?></td>
        <td><?php echo $res['Jeudi'];?></td>
        <td><?php echo $res['Vrendredi'];?></td>
        <td><?php echo $res['Samedi'];?></td>
        <td><?php echo $res['Dimanche'];?></td>
</tr>
<?php
}
?>
</table>
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