<?php
    $controlador = new controladorEstudiantes();
    $controlador = $controlador->index();
?>
<h3>Inicio</h3>
<table>
    <thead>
        <th>id</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Promedio</th>
        <th>Accion</th>
</thead>
    <tbody>
        <?php while($row = mysql_fetch_array($resultado));?>
        <tr>
            <td><?php echo $row['id']; ?></td>
        </tr>
    </body>
</table>