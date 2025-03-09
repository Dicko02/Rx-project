<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer l'ID de l'employé à supprimer
    $id = $_POST['id'];

    // Préparer la requête de suppression
    $sql = "DELETE FROM employees WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Employé supprimé avec succès.";
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
