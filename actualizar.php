<?php 
  require_once "clases/Crud.php";
  $crud = new Crud();
  $id = $_POST['idActualizar'];
  $datos = $crud->obtenerDocumento($id);
  $idMongo = new MongoDB\BSON\ObjectId($datos->_id);
?>

<?php require_once 'header.php'; ?>

  <div class="container">
    <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">
      <h1 class="display-4">Actualiza un registro <i class="fas fa-edit"></i> </h1>
      <form action="procesos/actualizar.php" method="POST">
        <input type="text" name="idActualizar" value="<?php echo $idMongo;?>" hidden>
        <p class="lead">
          <label for="nombre"> <i class="far fa-user"></i> Nombre(s)</label>
          <input type="text" name='nombre' value="<?php echo $datos->nombre;?>" class="form-control" required>
          <label for="paterno"> <i class="far fa-user"></i> Apellido paterno</label>
          <input type="text" name='paterno' value="<?php echo $datos->paterno;?>" class="form-control" required>
          <label for="materno"> <i class="far fa-user"></i> Apellido materno</label>
          <input type="text" name='materno' value="<?php echo $datos->materno;?>" class="form-control" required>
          <label for="fecha_nacimiento"> <i class="far fa-calendar-alt"></i> Fecha de nacimiento</label>
          <input type="date" name='fecha_nacimiento' value="<?php echo $datos->fecha_nacimiento;?>" class="form-control" required>
          <br>
          <a href="index.php" class="btn btn-info"> <i class="fas fa-undo"></i> Regresa </a>
          <button class="btn btn-warning"> Actualiza <i class="fas fa-edit"></i> </button>
        </form>
        </p>
    </div>
  </div>

<?php require_once 'scripts.php'; ?>