<?php

  require_once "clases/Crud.php";
  $obj = new Crud();
  $datos = $obj->mostrar();
  $mensaje = @$obj->mensajeCrud($_SESSION['mensaje_crud']);
  unset($_SESSION['mensaje_crud']);

  // echo "<pre>";
  //   print_r($datos);
  // echo "</pre>";
?>
<?php require_once 'header.php'; ?>

  <div class="container">
    <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">
    <h1 class="display-4 text-center">CRUD con PHP y MongoDB <i class="fas fa-house-user"></i> </h1>
    <p class="lead">
      <a href='agregar.php' class="btn btn-primary"> Agrega persona <i class="fas fa-user-plus"></i> </a>
      <hr>
      <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered" id="datatableMongo">
          <thead>
            <th class="text-center">Nombre(s)</th>
            <th class="text-center">Apellido paterno</th>
            <th class="text-center">Apellido materno</th>
            <th class="text-center">Fecha de nacimiento</th>
            <th class="text-center">Editar</th>
            <th class="text-center">Eliminar</th>
          </thead>
          <tbody>
            <?php foreach ($datos as $key):
              $idMongo = new MongoDB\BSON\ObjectId($key->_id);
            ?>
            <tr>
              <td><?php echo $key->nombre; ?></td>
              <td><?php echo $key->paterno; ?></td>
              <td><?php echo $key->materno; ?></td>
              <td><?php echo $key->fecha_nacimiento; ?></td>
              <td>
                <form action="actualizar.php" method="POST">
                  <input type="text" name="idActualizar" hidden value="<?php echo $idMongo?>">
                  <button class="btn btn-warning">Edita <i class="fas fa-edit"></i> </button>
                </form>
              </td>
              <td>
                <form action="eliminar.php" method="POST">
                  <input type="text" name="_id" hidden value="<?php echo $idMongo?>">
                  <button class="btn btn-danger">Elimina <i class="far fa-trash-alt"></i> </button>
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </p>
  </div>
</div>

<?php require_once 'scripts.php'; ?>

<script>
  let mensaje =<?php echo $mensaje;?>;
  console.log(mensaje);
</script>