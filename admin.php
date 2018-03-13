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
			<div class="card-title"><h2>Lisa film</h2></div>
			
			



<?php
		//zanri p2ring
    $result=queryMysql('select * from zanr');
	
		if($result->num_rows){
			$row=$result->fetch_array(MYSQLI_ASSOC);

?>
<form method="POST" action="addMovie.php">
    <table>
        <tr><td>Aasta:</td><td><input type="text" name="aasta"></td></tr>
        <tr><td>Poster:</td><td><input type="text" name="poster"</td></tr>
        <tr><td>Pealkiri:</td><td><input type="text" name="pealkiri"</td></tr>
        <tr><td>Riik:</td><td><input type="text" name="riik"</td></tr>
        <tr><td>Rating:</td><td><input type="number" name="rating"</td></tr>
        <tr><td>Trailer:</td><td><input type="text" name="trailer"</td></tr>
        <tr><td>Kestvus:</td><td><input type="number" name="pikkus" </td></tr>
        <tr><td>Kirjeldus:</td><td><input type="text" name="kirjeldus"</td></tr>
        <tr><td>Zanr</td><td>
                <select name="zanr">
										<?php
										foreach($result as $row){
											echo '<option value="'.$row['id_zanr'].'">'
                                .$row['nimetus'].'</option>';
										}?>                    
                </select></td></tr>
        <tr><td></td><td><input type="submit" name="submit" value="Lisa"></td></tr>
    </table>
</form>
						
									<?php } ?>


<table class="table table-dark">
<?php
$result=queryMysql('SELECT * FROM film order by pealkiri');
  if($result->num_rows){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  //foreach($result->fetch_array(MYSQLI_ASSOC)->chunk(3) as $chunk){
      echo '<div class="card-deck my-2">';
    foreach($result as $row){
			echo '<tr><td>'.$row['pealkiri'].'</td>';
			echo '<td>'.$row['pikkus'].'</td>';
			echo '<td>'.$row['riik'].'</td>';
			echo '<td><a href="'.$_SERVER['PHP_SELF'].'?id='.$row["id_film"].'">kustuta</a></td>'
			. '<td><a href="editMovie.php?idM='.$row['id_film'].'">Muuda</a></td>'
							. '</tr>';
	}
}
	echo '</div>';
	if(!empty($_GET ['id'])){
		$id=$_GET['id'];
		queryMysql('DELETE FROM film where id_film='.$id);		
				echo 'Rida kustutatud';
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL='
				.$_SERVER['PHP_SELF'].'">';

}

?>
</table>
    </div>
  </div>
</div>

<?php
	
	
require_once("footer.php");
?>