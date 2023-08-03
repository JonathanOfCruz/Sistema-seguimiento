<?php
    // Conectar a la base de datos MySQL de destino
    $conexion = new mysqli("localhost","root","","sis-seguimiento","3306");
    if (!$conexion) {
        die('Error al conectar a la base de datos: ' . mysqli_connect_error());
    }
    $tabla_origen = 'ordenes';
    $tabla_destino1 = 'ordenes_np_armado';
    $tabla_destino2 = 'ordenes_np_costura';
    $tabla_destino3 = 'ordenes_np_montado';
    $tabla_destino4 = 'ordenes_np_tapizado';

    // Obtener datos de la tabla origen
    $consulta = "SELECT id, op, producto, nombre, observaciones, cantidad, cliente, prioridad, orden, vigente, tapizado, costura, empacado, armado, fecha_hora FROM $tabla_origen;";
    $resultado = mysqli_query($conexion, $consulta);
    if (!$resultado) {
        die('Error al obtener datos de la tabla origen: ' . mysqli_error($conexion));
    }

    // Recorrer los resultados y realizar las inserciones en las tablas destino
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $fila = $resultado_origen->fetch_assoc();
        $op = $fila['op'];
        $producto = $fila['producto'];
        $nombre = $fila['nombre'];
        $observaciones = $fila['observaciones'];
        $cantidad = $fila['cantidad'];
        $cliente = $fila['cliente'];
        $prioridad = $fila['prioridad'];
        $orden = $fila['orden'];
        $vigente = $fila['vigente'];
        $tapizado = $fila['tapizado'];
        $costura = $fila['costura'];
        $empacado = $fila['empacado'];
        $armado = $fila['armado'];
        $fecha_hora = $fila["fecha_hora"];
        $fecha_hora_iniciadas = $fila["fecha_hora_iniciadas"];

        // Insertar en la tabla destino 1
        $query_insert1 = "INSERT INTO $tabla_destino1 (op,producto,nombre,observaciones,cantidad,cliente,prioridad,orden,vigente,tapizado,costura,empacado,armado,fecha_hora) VALUES ('$op', '$producto', '$nombre', '$observaciones', '$cantidad', '$cliente', '$prioridad', '$orden', '$vigente', '$tapizado', '$costura', '$empacado', '$armado', '$fecha_hora';)";
        mysqli_query($conexion, $query_insert1);

        // Insertar en la tabla destino 2
        $query_insert2 = "INSERT INTO $tabla_destino2 (op,producto,nombre,observaciones,cantidad,cliente,prioridad,orden,vigente,tapizado,costura,empacado,armado,fecha_hora) VALUES ('$op', '$producto', '$nombre', '$observaciones', '$cantidad', '$cliente', '$prioridad', '$orden', '$vigente', '$tapizado', '$costura', '$empacado', '$armado', '$fecha_hora';)"; mysqli_query($conexion, $query_insert2);

        // Insertar en la tabla destino 3
        $query_insert3 = "INSERT INTO $tabla_destino3 (op,producto,nombre,observaciones,cantidad,cliente,prioridad,orden,vigente,tapizado,costura,empacado,armado,fecha_hora) VALUES ('$op', '$producto', '$nombre', '$observaciones', '$cantidad', '$cliente', '$prioridad', '$orden', '$vigente', '$tapizado', '$costura', '$empacado', '$armado', '$fecha_hora';)"; mysqli_query($conexion, $query_insert3);

        // Insertar en la tabla destino 4
        $query_insert4 = "INSERT INTO $tabla_destino4 (op,producto,nombre,observaciones,cantidad,cliente,prioridad,orden,vigente,tapizado,costura,empacado,armado,fecha_hora) VALUES ('$op', '$producto', '$nombre', '$observaciones', '$cantidad', '$cliente', '$prioridad', '$orden', '$vigente', '$tapizado', '$costura', '$empacado', '$armado', '$fecha_hora';)"; mysqli_query($conexion, $query_insert4);

        // Insertar en la tabla destino 5
        $query_insert5 = "INSERT INTO $tabla_destino5 (op,producto,nombre,observaciones,cantidad,cliente,prioridad,orden,vigente,tapizado,costura,empacado,armado,fecha_hora) VALUES ('$op', '$producto', '$nombre', '$observaciones', '$cantidad', '$cliente', '$prioridad', '$orden', '$vigente', '$tapizado', '$costura', '$empacado', '$armado', '$fecha_hora';)"; mysqli_query($conexion, $query_insert5);
    }

    
?>