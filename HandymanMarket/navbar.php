<?php
session_start();
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">HANDYMAN MARKET</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="plumberpage.php">Plumber </a></li>
              <li><a class="dropdown-item" href="electrician.php">Electrician</a></li>
              <li><a class="dropdown-item" href="mechanic.php">Mechanic </a></li>
              <li><a class="dropdown-item" href="beautician.php">Beautician </a></li>
              <li><a class="dropdown-item" href="tailor.php">Tailor </a></li>
              <li><a class="dropdown-item" href="barber.php">Barber </a></li>
              <li><a class="dropdown-item" href="tutor.php">Tutor </a></li>
              <li><a class="dropdown-item" href="painter.php">Painter </a></li>
              <li><a class="dropdown-item" href="driver.php">Driver </a></li>
              <li><a class="dropdown-item" href="clothes.php">Cloth Seller </a></li>
              <li><a class="dropdown-item" href="cook.php">Cook </a></li>
              <li><a class="dropdown-item" href="cleaner.php">House Cleaner </a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                SignUp
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="abc.php">As Service Provider </a></li>
                <li><a class="dropdown-item" href="signupcustomer.php">As Customer</a></li>
                </ul>
            </li>
          
          
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Login
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="loginServiceProvider.php">As Service Provider </a></li>
                <li><a class="dropdown-item" href="logincustomer.php">As Customer</a></li>
                </ul>
            </li>  
            
          
          <li class="nav-item">
            <a class="nav-link active" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./contact.php">Contact Us</a>
          </li>
          
        </ul>
        

              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
                <?php 
                  if(isset($_SESSION['username']))
                  {
                    echo "<li class='nav-item dropdown' style='list-style: none;'>";
                    echo "<a class='nav-link dropdown-toggle active'href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' >";
  
                    echo htmlspecialchars($_SESSION["username"]);
                    
                    
                    echo" </a>";
                    echo "<ul class='dropdown-menu' >";
                    echo "<li><a class='dropdown-item' href='logout.php'>Logout </a></li>";

                  }
                ?>  

                          
              </form>
            </div>
          </div>
  </nav>