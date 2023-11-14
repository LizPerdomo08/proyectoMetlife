<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions {
            white-space: nowrap;
            width: 1%;
        }

        .edit-btn, .delete-btn {
            display: inline-block;
            padding: 6px 12px;
            margin: 2px;
            text-decoration: none;
            background-color: #3498db;
            color: #ffffff;
            border: 1px solid #3498db;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn {
            background-color: #e74c3c;
            border: 1px solid #e74c3c;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #2980b9;
            border: 1px solid #2980b9;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$sql = "SELECT * FROM userinfo";
$result = $conn->query($sql);

echo "<h2>Tabla UserInfo</h2>";
echo "<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Lastname</th>
<th>Birthday</th>
<th>Género</th>
<th>Edad</th>
<th>Celular</th>
<th>Status</th>
<th>Acciones</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['nombre']}</td>
    <td>{$row['lastname']}</td>
    <td>{$row['birthday']}</td>
    <td>{$row['genero']}</td>
    <td>{$row['edad']}</td>
    <td>{$row['celular']}</td>
    <td>{$row['status']}</td>
    <td class='actions'>
        <a class='edit-btn' href='editar_userinfo.php?id={$row['id']}'>Editar</a>
        |
        <form method='post' action='borrar_userinfo.php' style='display:inline;'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <input class='delete-btn' type='submit' value='Borrar' onclick='return confirm(\"¿Estás seguro de borrar este perfil?\")'>
        </form>
    </td>
    </tr>";
}

echo "</table>";

$conn->close();
?>

</body>
</html>
