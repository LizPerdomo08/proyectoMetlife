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
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

echo "<h2>Tabla Usuarios</h2>";
echo "<table>
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Perfil</th>
<th>Acciones</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['username']}</td>
    <td>{$row['password']}</td>
    <td>{$row['status']}</td>
    <td>{$row['perfil']}</td>
    <td class='actions'>
        <a class='edit-btn' href='editar_usuario.php?id={$row['id']}'>Editar</a>
        |
        <form method='post' action='borrar_usuario.php' style='display:inline;'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <input class='delete-btn' type='submit' value='Borrar' onclick='return confirm(\"¿Estás seguro de borrar este usuario?\")'>
        </form>
    </td>
    </tr>";
}

echo "</table>";

$conn->close();
?>

</body>
</html>
