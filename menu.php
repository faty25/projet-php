<html>
    <body>
<h1>Vous etes dans le rubrique Menu et journee</h1>
<style>
body {
    min-height: 100vh;
    background:linear-gradient(rgb(0,0,0,0.5), transparent),url(A8.jpeg);
    background-size: cover;
    background-position: center;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

 {
 padding:0;
 margin:0;
 list-style-type:none;
 }

li {
 margin-left:2px;
 float:left; /*pour IE*/
 }
ul li a {
 display:block;
 float:left;   
 width:100px;
 background-color:#6495ED;
 color:black;
 text-decoration:none;
 text-align:center;
 padding:5px;
 border:2px solid;
 /*pour avoir un effet "outset" avec IE :*/
 border-color:#DCDCDC #696969 #696969 #DCDCDC;
 }
ul li a:hover {
 background-color:#D3D3D3;
 border-color:#696969 #DCDCDC #DCDCDC #696969;
 } 
</style>
<ul><li><a href="liste.php"><input type="submit" value="MENU " name="submit" class="box-button"></a></li></ul>
<ul><li><a href="heure.php"><input type="submit" value="Journee " name="submit" class="box-button"></a></li></ul>


</body>
</html>