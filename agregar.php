<?php require_once 'header.php'; ?>

  <div class="container">
    <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">
    <h1 class="display-4">Agrega registro nuevo <i class="far fa-edit"></i> </h1>
    <p class="lead">
        <form action='procesos/agregar.php' method="POST">
            <label for="nombre"> <i class="far fa-user"></i> Nombre(s)</label>
            <input type="text" name='nombre' class="form-control" required>
            <label for="paterno"> <i class="far fa-user"></i> Apellido paterno</label>
            <input type="text" name='paterno' class="form-control" required>
            <label for="materno"> <i class="far fa-user"></i> Apellido materno</label>
            <input type="text" name='materno' class="form-control" required
            ><label for="fecha_nacimiento"> <i class="far fa-calendar-alt"></i> Fecha de nacimiento</label>
            <input type="date" name='fecha_nacimiento' class="form-control" required>
            <br>
            <a href="index.php" class="btn btn-info"> <i class="fas fa-undo"></i> Regresa </a>
            <button class="btn btn-primary"> Agrega <i class="far fa-edit"></i> </button>
        </form>
      </p>
  </div>
</div>

<?php require_once 'scripts.php'; ?>