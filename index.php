<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfas</title>
    <link rel="Stylesheet" href="style.css">
</head>
<body>
<form action="validacion.php" method="post">
      <h2>Hola</h2>
      <p>Iniciar tu Registro</p>

      <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
        

        <div class="input-wrapper">
        <input type="text" name="apellido" placeholder="Apellido">
        

        <div class="input-wrapper">
        <input type="number" name="edad" placeholder="Edad">
        

        <div class="input-wrapper">
    <label for="sexo"></label>
    <select id="sexo" name="sexo" required>
        <option value="">SEXO</option>
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>
    </select>

    <div class="input-wrapper">
        <input type="tel" name="telefono" placeholder="Telefono">
       

        <div class="input-wrapper">
        <input type="text" name="direccion" placeholder="Direccion">
      
      </div>
      <input class="btn" type="submit" name="register" value="Registrar">
    </form>
</body>
</html>