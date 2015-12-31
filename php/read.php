<?php

require 'db.php';

//$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;


    if ( !empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }

    if ( null == $id)
    {
        header("Location: journal.php");
    } else
    {
        $sql = "SELECT * FROM books WHERE id = ?";
        $query = $db->prepare($sql);
        $query->execute(array($id));
        $data = $query->fetch(PDO::FETCH_ASSOC);
    }
require '../html/hread.php';
?>
