
<?php
include 'conexion1.php';
?>
<<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <!----------------------------------------------------------------------------------->
    <seccion class="section">
        <div class="container">
            <h1 class="title">productos</h1>
            <a class="button is-primary" href="formulario.php">Nuevo producto</a>
            <table class="table is-is-fullwidth is-striped is-hoverable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM productos";
                    $resultado = $conexion->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $fila['id'] . "</td>";
                            echo "<td>" . $fila['nombre'] . "</td>";
                            echo "<td>" . $fila['precio'] . "</td>";
                            echo "<td>" . $fila['cantidad'] . "</td>";
                            echo "<td>
                                    <a class='button is-info' href='editar.php?id=" . $fila['id'] . "'>Editar</a>
                                    <a class='button is-danger' href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No hay productos disponibles</td></tr>";
                    }

                    $conexion->close();
                    ?>
                </tbody>
            </table>
        </div>
    </seccion>
  <!----------------------------------------------------------------------------------->
    <footer class="footer">
        <div class="content has-text-centered">
        <p>
            <strong>Hecho</strong> por <a href="https://jgthms.com">Kevin Mazariegos</a>. codigo abireto bajo la licencia
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
        </div>
    </footer>  

</body>
  
</html>