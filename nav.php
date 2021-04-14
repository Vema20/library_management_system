<ul class="nav nav-tabs" style="background-color: #F9AA60 ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bookshelf.php">Bookshelf</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="borrowed.php">Borrowed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="records.php">Records</a>
  </li>
  
 <!--  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li> -->
  
  <?php
  ob_start();
  session_start();
  if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    echo '
    <li class="nav-item">
    <a class="nav-link" href="logout.php">Log Out</a>
  </li>
    ';
    echo'
  <li class="nav-item">
    <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true">Hi,'.$name.'</a>
  </li>
  ';
    # code...
  }else{
    echo '

    <li class="nav-item">
    <a class="nav-link" href="login.php">Log in</a>
     </li>
     ';

  } 
  ob_end_flush();   

  ?>
   
</ul>