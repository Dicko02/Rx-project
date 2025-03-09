<?php
include '../config.php';

// Récupérer la liste des employés
$result = $conn->query("SELECT * FROM employees");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['position'] . "</td>
            <td>
                <a href='../updateEmploye/updateEmploye.html?id=" . $row['id'] . "'>Modifier</a> |
                <a href='../deleteEmploye/deleteEmploye.html?id=" . $row['id'] . "'>Supprimer</a>
            </td>
          </tr>";
}

$conn->close();
?>