<?php

require 'db.php';

if ( !empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }

if ( !empty($_POST))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM books WHERE id = ?";
        $query = $db->prepare($sql);
        $query->execute(array($id));

        header("Location: journal.php");
    }

include '../html/hdelete.php';

?>