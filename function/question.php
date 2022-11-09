<?php
    include 'database.php';

    $query_select = $db->prepare("SELECT * FROM question WHERE status=:status");
    $query_select->execute(['status' => 1]); 
    $result_data = $query_select->fetchAll();