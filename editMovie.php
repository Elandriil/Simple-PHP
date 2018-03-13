<?php
require_once("header.php");
	if (checkSession()===false) {
		header("Location:index.php");
		exit();
		# code...
	}
?>


<div class="container my-2">
  <div class="row">
    <div class="col-lg-12">
      <img src="image4.jpg" alt="" class="img-fluid">
    </div>
  </div>
</div>
<div class="container my-2 mt-5">
  <div class="row mt-4">
    <div class="col-lg-4 mt-5">
		<div class="card p-3">
        <div class="card-title"><h2>Admin</h2></div>
        <div class="card-body">
          <ul class="navbar-nav">
					<li class="nav-item">
                <a href="admin.php" class="nav-link">Movies</a>
					</li> 
					<li class="nav-item">
                <a href="users.php" class="nav-link">Users</a>
          </li>               
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-8 ">
    <div class="card p-3 mt-5">
			<div class="card-title"><h2>Edit movie</h2></div>
			<div class="card-body">
  <?php
      if(empty($_GET['idM'])){
    die('Sihtm2rk j2i valimata (no id)');
}else{
    $id=$_GET['idM'];
    $result=queryMysql('select * from film where id_film='.$id);
    $rida=$result->fetch_array(MYSQLI_ASSOC);

    //zanri p2ring
    $zanr=queryMysql('select * from zanr');
    $z_rida=$zanr->fetch_array(MYSQLI_ASSOC);

?>
<form action="" method="GET">
    <table>
        <tr><td>Aasta:</td><td><input type="text" name="aasta" value="<?php echo $rida['aasta']?>"></td></tr>
        <tr><td>Poster:</td><td><input type="text" name="poster" value="<?php echo $rida['poster_link']?>"></td></tr>
        <tr><td>Pealkiri:</td><td><input type="text" name="pealkiri" value="<?php echo $rida['pealkiri']?>"></td></tr>
        <tr><td>Riik:</td><td><input type="text" name="riik" value="<?php echo $rida['riik']?>"></td></tr>
        <tr><td>Rating:</td><td><input type="number" name="rating" value="<?php echo $rida['rating']?>"></td></tr>
        <tr><td>Trailer:</td><td><input type="text" name="trailer" value="<?php echo $rida['trailer_link']?>"></td></tr>
        <tr><td>Kestvus:</td><td><input type="number" name="pikkus" value="<?php echo $rida['pikkus']?>"></td></tr>
        <tr><td>Kirjeldus:</td><td><input type="text" name="kirjeldus" value="<?php echo $rida['kirjeldus']?>"></td></tr>
        <input type="hidden" name="idM" value="<?php echo $rida['id_film']?>">
        <tr><td>Zanr</td><td>
                <select name="zanr">
                    <?php
                    foreach($zanr as $z_rida){
                      echo '<option value="'.$z_rida['id_zanr'].'">'
                                .$z_rida['nimetus'].'</option>';
                    }
                   ?>                    
                </select></td></tr>
        <tr><td></td><td><input type="submit" name="submit" value="Muuda"></td></tr>
    </table>
</form>
<?php
if(isset($_GET['submit'])){
$aasta=  htmlspecialchars($_GET['aasta']);
$poster=  htmlspecialchars($_GET['poster']);
$pealkiri=  htmlspecialchars($_GET['pealkiri']);
$riik=  htmlspecialchars($_GET['riik']);
$rating=  htmlspecialchars($_GET['rating']);
$trailer=  htmlspecialchars($_GET['trailer']);
$pikkus=  htmlspecialchars($_GET['pikkus']);
$kirjeldus=  htmlspecialchars($_GET['kirjeldus']);
$zanr=  htmlspecialchars($_GET['zanr']);
$idf=$_GET['idM'];
$muuda='UPDATE film SET '
        . 'aasta='.$aasta.','
        . 'poster_link="'.$poster.'",'
        . 'pealkiri="'.$pealkiri.'",'
        . 'riik="'.$riik.'",'
        . 'rating='.$rating.','
        . 'trailer_link="'.$trailer.'",'
        . 'pikkus='.$pikkus.','
        . 'kirjeldus="'.$kirjeldus.'",'
        . 'zanr_id='.$zanr.''
        .' WHERE id_film='.$id;
        
        queryMysql($muuda);
        echo 'Edukalt muudetud, suunamine <a href=\"admin.php"\>tagasi</a>';
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin.php">';
        die();	
    
}
?>
      </div>
    </div>
  </div>
</div>

<?php
	
}
require_once("footer.php");
?>