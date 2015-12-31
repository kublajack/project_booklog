<html>

<head>
    <title>Book Journal</title>
    <link href='https://fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
    <link rel="stylesheet" type="text/css" href="../css/rud_button.css">
</head>

<body>
<div class='container'>
    <div class='header'>
        <?php include '../html/nav.html'; ?>
    </div>



    <div class='body'>
        <table class='table'>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th></th>
            </tr>

        <?php
        include 'db.php';

        $sql = 'SELECT * FROM books ORDER BY year DESC LIMIT 10';
        foreach ($db->query($sql) as $row)

        {
            echo '<tr>';
            echo '<td>'. $row['title'] . '</td>';
            echo '<td>'. $row['author'] . '</td>';
            echo '<td>'. $row['year'] . '</td>';
            echo '<td>';
            echo '<a class="b" href="delete.php?id='.$row['id'].'">Delete</a>';
            echo '<a class="b" href="update.php?id='.$row['id'].'">Update</a>';
            echo '<a class="b" href="read.php?id='.$row['id'].'">Entry</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </table>
        <br>
        <hr>
    </div>
    <div class='footer'>

    </div>
</div> <!--end of container -->
</body>
</html>