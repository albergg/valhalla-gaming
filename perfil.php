<?php $tituloPagina = 'Perfil | Valhalla Gaming'; ?>
<?php require_once 'partials/head.php'?>
<?php require_once 'partials/nav-bar.php'?>

<body>
    <h3>Perfil de usuario</h3>
    <!-- imagen de perfil con datos del usuario -->
    <div class="card mx-auto" style="width: 18rem;">
      <img class="card-img-top" src="images/cara-vikingo.jpg">
      <div class="card-body">
        <p class="card-text misLetrasRojas text-center">Nombre de usuario</p>
      </div>
  </div>

    <br>
  

<div class="row">
  <div class="col-4">
    <div class="list-group text-center" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action bg-dark miBoton " id="list-home-list" data-toggle="list" href="#list-home" role="tab">Perfil</a>
      <a class="list-group-item list-group-item-action bg-dark miBoton " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">Tu tienda</a>
      <a class="list-group-item list-group-item-action bg-dark miBoton " id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Posteos</a>
      <a class="list-group-item list-group-item-action bg-dark miBoton " id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" >Amigos</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>

<?php require_once 'partials/footer.php' ?>
</body>