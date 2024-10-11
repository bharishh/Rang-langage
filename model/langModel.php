<?php
    # fonction pour la config
    require_once 'config.php';
    
    function getLangs($conn) {
        $query = "SELECT * FROM top10"; # le corps de la requete SQL
        $statement = $conn->prepare($query);
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    ?>