<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    // Préparer la requête d'insertion
    $sql = "INSERT INTO employees (name, email, position) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $position);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Employé ajouté avec succès.";
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
