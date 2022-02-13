<!DOCTYPE html>
<html lang="en">
<?php include_once('header.php') ?>

<body>
    <form action="index.php?controller=animales&action=crear" method="POST">
        <input name="nombre" placeholder="Nombre" />
        <input name="edad" placeholder="Edad" />
        <input name="especie" placeholder="Especie" />
        <input name="direccion" placeholder="Direccion" />
        <button type="submit">Guardar</button>
    </form>
</body>

</html>