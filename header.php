<?php
echo '<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/codefactory.in">codefactory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/codefactory.in">home</a>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">java</a></li>
                    <li><a class="dropdown-item" href="#">python</a></li>
                    <li><a class="dropdown-item" href="#">mysql</a></li>
                    <li><a class="dropdown-item" href="#">HTML</a></li>
                    <li><a class="dropdown-item" href="#">CSS</a></li>
                    <li><a class="dropdown-item" href="#">javascript</a></li>
                    <li><a class="dropdown-item" href="#">php</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">settings</a></li>
                </ul>
            </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success mx-2" type="submit">Search</button>
      
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">
        Login
      </button>
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signup">
        SignUp
      </button>
      </form>
    </div>
  </div>
</nav>';
include "_login.php";
include "_signup.php";
?>