<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            padding: 20px;
            background-color: #ADB1B2;
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 80px 20px; 
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: #fff;
        }

        li {
            width: 45%;
            margin: 50px 10px; 
            box-sizing: border-box;
            font-size: 20px;
            border: 5px solid #DDDFDF;
            background-color: #fff;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #6F9099;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Visualización de Datos</h1>
    <ul>
        <li><a href="perfiles.php">Perfiles</a></li>
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="userinfo.php">Informacion de usuarios</a></li>
        <li><a href="coberturas.php">Coberturas</a></li>
        <li><a href="cobertura_cliente.php">Coberturas de clientes</a></li>
        <li><a href="usuario_venta.php">Compras</a></li>
        <li><a href="descarga_metlife.php">Descargar base de datos</a></li>
    </ul>
</body>
</html>
