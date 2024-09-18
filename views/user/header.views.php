<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">APP SINH VIÊN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?type=home">Home</a>
        </li>
        <?php
          if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
            echo'
            <li class="nav-item" >
            <a class="nav-link" href="" id="">'.$_SESSION['user']['tenND'].'</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="" id="">MSSV:'.$_SESSION['user']['id_nguoidung'].'</a>
          </li>
          <li class="nav-item" >
              <a class="nav-link" href="index.php?logout=1" id="">Đăng xuất</a>
            </li>
            ';
          }else{
            echo'
            <li class="nav-item">
            <a class="nav-link " href="index.php?type=login">Login</a>
          </li>
            ';
          }
        ?>
        
      </ul>
    </div>
  </div>
</nav>
  
  <!-- Navbar -->

  <!-- Background image -->
  <?php
  if(isset($_GET['type'])){
    if($_GET['type']!=='login' && $_GET['type']!=='search'){
      echo'
      <div
  class="p-5 text-center bg-image"
  style="
    background-image: url(\'https://nld.mediacdn.vn/2020/1/16/31-1579148455020718445159.jpg\');
    height: 400px;
    
  "
>
  
</div>
      ';
    }
  }else{
    echo'
    <div
  class="p-5 text-center bg-image"
  style="
    background-image: url(\'https://nld.mediacdn.vn/2020/1/16/31-1579148455020718445159.jpg\');
    height: 400px;
    
  "
>
  
</div>
    ';
  }
  ?>
  
  <!-- Background image -->
</header>
