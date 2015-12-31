<!DOCTYPE html>
<html>

<head>
    <title>Book Journal</title>
    <link href='https://fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
    <style>

        .dcontainer {
            width: 300px;
            height: 300px;
            margin: 300px auto;
                    }

        .dsubmit {
            display: block;
            height: 25px;
            width: 65px;
            background: #fff;
            border: 1px solid;
            border-radius: 6px;
            float: right;
            text-align: center;
            font: 1em 'Noticia Text', serif;
            margin-top: 10px;
            margin-left: 7px;
            line-height: 15px;
        }

        a.dsubmit {
            text-decoration: none;
        }

        .rud_body {
            width: 250px;

        }

        br {
            display: block;
            margin: 60px 0;
            content: " ";
        }


    </style>
</head>


<body>

<div class='dcontainer'>
    <div class='header'>
        <h1>Delete Book Entry</h1>
    </div>

    <div class='rud_body'>
        Are you sure you want to delete?<br>
        <form class="" action="../php/delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <button type="submit" class="dsubmit">Yes</button>
        </form>

        <form action="../php/journal.php" method="post">
            <button type="submit" class="dsubmit">No</button>
        </form>
    </div>

    <div class='footer'>
    </div>
</div>

</body>
</html>