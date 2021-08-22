
<?php session_start() ?>
<nav class="navbar navbar-expand-lg navbar-danger bg-dark">
  <!-- <a class="navbar-brand" >TOS TV</a> -->
  <div class="navbar-brand">
    <img src="./assets/images/logo.png" alt="" width="100px",height="90px">
  </div> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <?php if(isset($_SESSION['username'])): ?>
          <li class="nav-item">
            <a class="nav-link active" href="?page=home">Home</a>
          </li>
          <?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin'): ?>
            <li class="nav-item">
              <a class="nav-link " href="?page=places">Places</a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link " href="?page=about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="?page=contact">Contact</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=logout">Logout</a>
        </li>
      <?php else: ?>
          <li class="nav-item active">
            <a class="nav-link" href="?page=login_html">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?page=register_html">Register</a>
          </li>
    <?php endif; ?>
    </ul>
    <?php if(isset($_SESSION['username'])): ?>
      <strong class="navbar-text" id="nameuser">
          <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
            <?= $_SESSION['username'] ?>
              </strong>
    <?php endif; ?>
  </div>
</nav>


