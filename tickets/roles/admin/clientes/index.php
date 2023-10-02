<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <header>
        <!-- place navbar here -->
        <?php include '../../../Includes/header_admin.php'; ?>
    </header>
    <main>
    <?php
            include'../../../Includes/db.php';

            $query = "SELECT * FROM cliente";
            $ejecutar = mysqli_query($connection, $query);
            $clientes = mysqli_fetch_all($ejecutar, MYSQLI_ASSOC);
          ?>

       <div class="container mt-5">
       <h2>Gestion de Usuarios</h2>
       <div class="table-responsive">
       <table class="table table-bordered ">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($clientes as $cliente): ?>
            <tr>
              <td><?php echo $cliente['id_cliente'] ?></td>
              <td><?php echo $cliente['nombre_cliente'] ?></td>
              <td><?php echo $cliente['email'] ?></td>
              <td scope="row"><a href="./View/editar.php?id=<?php echo $fila['id_cliente'];?>">Editar</a></td>
              <td scope="row"><a href="./function/delete.php?id=<?php echo $fila['id_cliente'];?>">Eliminar</a></td>

                </a>
              
            </tr>
        <?php endforeach; ?>
        </tbody>
 

       </table>
       </div>
       </div>
    </main>
    <footer>
    <?php include '../../../Includes/footer.php'; ?>
        <!-- place footer here 
        <?php
    include("../../../Includes/footer.php");
    ?>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
            </script>
</body>

</html>