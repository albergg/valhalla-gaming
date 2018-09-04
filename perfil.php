<?php $tituloPagina = 'Perfil | Valhalla Gaming'; ?>
<?php require_once 'partials/head.php'?>
<?php require_once 'partials/nav-bar.php'?>

<body>
    <h3>Perfil de usuario</h3>
    <!-- imagen de perfil con datos del usuario -->
    <div class="card mx-auto" style="width: 18rem;">
  <img class="card-img-top" src="images/cara-vikingo.jpg">
  <div class="card-body">
    <p class="card-text">Nombre de usuario</p>
  </div>
</div>
    <br>
    <div class="card text-center">
  <div class="card-header miContainer">
    <ul class="nav nav-pills card-header-pills my-list">
      <li class="nav-item ">
        <a class="nav-link miColor bg-dark" href="#">Mis Publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link miColor bg-dark" href="#">Mis Amigos</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link miColor bg-dark" href="#">Editar Perfil</a>
      </li>
    </ul>
  </div>
  <div class="card-body ">
    <h5 class="card-title">Actualizar Perfil</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-dark miColor">Actualizar</a>
  </div>
</div>

<?php require_once 'partials/footer.php' ?>
</body>