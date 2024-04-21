<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asignación de variables y sanitización básica
    $name = htmlspecialchars(trim($_POST['name']));
    $apellido = htmlspecialchars(trim($_POST['apellido']));
    $edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);
    $sexo = $_POST['sexo'];
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $direccion = htmlspecialchars(trim($_POST['direccion']));

    // Validación de campos
    $errores = [];
    if (empty($name)) {
        $errores[] = "El nombre es obligatorio.";
    }
    if (empty($apellido)) {
        $errores[] = "El apellido es obligatorio.";
    }
    if ($edad === false || $edad < 0 || $edad > 150) {
        $errores[] = "La edad debe ser un número entre 0 y 150.";
    }
    if (empty($sexo)) {
        $errores[] = "Seleccionar el sexo es obligatorio.";
    }
    if (!preg_match("/^[0-9]{8}$/", $telefono)) {
        $errores[] = "El teléfono debe tener 10 dígitos.";
    }
    if (empty($direccion)) {
        $errores[] = "La dirección es obligatoria.";
    }

    // Mostrar errores o procesar los datos
    if (count($errores) > 0) {
        foreach ($errores as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<p>Registro completado con éxito.</p>";
        // Aquí podrías añadir código para insertar los datos en una base de datos
    }
}
?>
