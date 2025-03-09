<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    // Préparer la requête de mise à jour
    $sql = "UPDATE employees SET name = ?, email = ?, position = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $position, $id);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Employé mis à jour avec succès.";
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
