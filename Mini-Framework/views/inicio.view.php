<?php require 'partials/head.view.php'; ?>


<h1>Usuarios</h1>
<ul class="collection"> 
<?php foreach($usuarios as $usuario):?>
<li class="collection-item"><?= $usuario->nombre; ?></li>
<?php endforeach; ?>

</ul>

<div class="row">
	<form class="col s12" method="POST" action="/usuario">
		<div class="row">
        	<div class="input-field col s12">
        		<input id="nombre" name="nombre" type="text" class="validate">
        		<label for="nombre">Ingresa tu nombre</label>
        	</div>
      	</div>
      	<div class="row">
        	<div class="input-field col s12">
        		<input id="edad" name="edad" type="text" class="validate">
        		<label for="edad">Ingresa tu edad</label>
        	</div>
      	</div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
    </form>
</div>


<?php require 'partials/footer.view.php'; ?>