<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Format des données à écrire
    $data = "Nom: $name, Email: $email, Mot de passe: $password\n";

    // Nom du fichier où les données seront enregistrées
    $file = 'volunteers.txt';

    // Écrire les données dans le fichier
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "Erreur d'écriture dans le fichier.";
    } else {
        // Rediriger vers une page de confirmation ou de remerciement
        header("Location: thankyou.html");
        exit();
    }
}
?>
