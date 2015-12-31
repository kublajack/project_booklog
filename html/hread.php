<html>
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
</head>

<body>
<div>
    <table class="table">
        <tr>
            <td>Title: <?php echo htmlspecialchars($data['title']);?></td>
        </tr>
        <tr>
            <td>Author: <?php echo htmlspecialchars($data['author']);?></td>
        </tr>
        <tr>
            <td>Year: <?php echo htmlspecialchars($data['year']);?></td>
        </tr>
        <tr>
            <td>Description: <?php echo htmlspecialchars($data['description']);?></td>
        </tr>
        <tr>
            <td><a href="../php/journal.php" class="b">Back</a></td>
        </tr>
    </table><br>


</div>
</body>
</html>