<?php
require 'db.php';

$id = isset ($_REQUEST['id']) ? $_REQUEST['id'] : 0;

//$variable = true ? 1 : 2;

if (!$id)
{
    header("Location: journal.php") or exit;
}




//if ( !empty($_REQUEST['id']))
//{
//    $id = $_REQUEST['id'];
//}
//
//if ( null==$id )
//{
//    header("Location: journal.php");
//}

/**
 * @param string|int $string
 * @return bool
 */
function is_number($string) {
    return (bool) preg_match('/[0-9]/', $string);
}

function is_alpha($string) {
    return (bool) preg_match('/[a-z]/', $string);
}

if ( !empty($_POST))
{
    // keep track validation errors
    $titleError = null;
    $authorError = null;
    $yearError = null;
    $descriptionError = null;

    // keep track post values
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $description = $_POST['description'];

    // validate input
    $valid = true;

    if (!is_alpha($title)) {
        $titleError = 'Please enter a valid Title';
        $valid = false;
    }

    if (!is_alpha($author)) {
        $authorError = 'Please enter an valid Author';
        $valid = false;
    }

    if (empty($year)) {
        $yearError = 'Please enter a valid Year';
        $valid = false;
    } else if (!is_number($year)) {
        $yearError = 'Please enter a valid Year asdsad';
        $valid = false;
    }

    if (!is_alpha($description)) {
        $descriptionError = 'Please enter a valid Description';
        $valid = false;
    }


    // update data
    if ($valid)
    {
        $sql = "UPDATE books  set title = ?, author = ?, year =?, description =? WHERE id = ?";
        $query = $db->prepare($sql);
        $query->execute(array($title,$author,$year,$description,$id));
        header("Location: journal.php");
    }
} else

{
    $sql = "SELECT * FROM books where id = ?";
    $query = $db->prepare($sql);
    $query->execute(array($id));
    $data = $query->fetch(PDO::FETCH_ASSOC);
    $title = $data['title'];
    $author = $data['author'];
    $year = $data['year'];
    $description = $data['description'];
}

require '../html/hupdate.php';