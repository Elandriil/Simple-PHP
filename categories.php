<div class="card p-3">
        <div class="card-title"><h2>Categories</h2></div>
        <div class="card-body">
          <ul class="navbar-nav">
          <?php
            $result=queryMysql('SELECT * from zanr');
            if($result->num_rows){
            $row=$result->fetch_array(MYSQLI_ASSOC);
            foreach($result as $row){
              echo '<li class="nav-item">
                <a href="movies.php?id='.$row['id_zanr'].'" class="nav-link">'.$row['nimetus'].'</a>
          </li>';
            }
          }else{
            echo '0 results';
          }
          ?>

            
          </ul>
        </div>
      </div>