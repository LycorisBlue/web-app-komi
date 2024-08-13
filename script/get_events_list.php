<?php
// Fichier: get_events_list.php

require_once './config/database.php'; // Assurez-vous que ce fichier contient votre connexion PDO
 

function getEventsList() {
    global $pdo;

    try {
        $query = "
            SELECT e.*, 
                   COUNT(p.id_participants) as nombre_participants
            FROM evenements e
            LEFT JOIN participants p ON e.code_event = p.code_event
            GROUP BY e.id_event
            ORDER BY e.date_event DESC
        ";
        
        $stmt = $pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Gérer l'erreur (log, affichage, etc.)
        error_log("Erreur lors de la récupération de la liste des événements : " . $e->getMessage());
        return [];
    }
}
?>