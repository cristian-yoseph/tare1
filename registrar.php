<?php
use Clases\Estudiante;
use Clases\Programa;

include_once "config/autoload.php";
include_once "menu.php";
?>
    <h1>Registrar Estudiantes</h1>
    <form method="post" action="#">
        <input type="text" name="codigo" placeholder="Codigo" required/><br>
        <input type="text" name="nombres" placeholder="Nombres" required/><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required/><br>
        <input type="text" name="telefono" placeholder="Telefono"/><br>
        <input type="email" name="correo" placeholder="Email"/><br>
        <select name="id_pa">
            <?php
            $programa = new Programa();
            $programas = $programa->verProgramas();
            foreach ($programas as $programa) {
                echo "<option value='" . $programa["id"] . "'>" . $programa["nombre"] . "</option>";
            }
            ?>
        </select><br/>
        <input type="submit" name="submit" value="Guardar">

    </form>

<?php
if (isset($_POST["submit"])) {
    $codigo = $_POST["codigo"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $id_pa = $_POST["id_pa"];

    $estudiante = new Estudiante($codigo, $nombres, $apellidos, $telefono, $correo, $id_pa);
    if ($estudiante->crearEstudiante()) {
        echo "Datos guardados";
    } else {
        echo "Error: Los datos no se guardaron";
    }

}