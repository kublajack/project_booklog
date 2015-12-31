<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Update Book Entry</h3>
        </div>

        <form class="form-horizontal" action="update.php?id=<?=$id?>" method="post">

            <!-- TITLE -->
            <div class="<?php echo !empty($titleError)?'error':'';?>">
                <label class="">Title</label>
                <div class="">
                    <input name="title" type="text" value="<?php echo !empty($title)?$title:'';?>">
                    <?php if (!empty($titleError)): ?>
                        <span class=""><?php echo $titleError;?></span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- AUTHOR -->
            <div>
                <label class="">Author</label>
                <div class="">
                    <input name="author" type="text" value="<?php echo !empty($author)?$author:'';?>">
                    <?php if (!empty($authorError)): ?>
                        <span class=""><?php echo $authorError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <!-- YEAR -->
            <div class="<?php echo !empty($yearError)?'error':'';?>">
                <label class="">Year</label>
                <div class="">
                    <input name="year" type="text" value="<?php echo !empty($year)?$year:'';?>">
                    <?php if (!empty($yearError)): ?>
                        <span class=""><?php echo $yearError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <!-- DESCRIPTION-->
            <div class="<?php echo !empty($descriptionError)?'error':'';?>">
                <label class="">description</label>
                <div class="">
                    <input name="description" type="text" value="<?php echo !empty($description)?$description:'';?>">
                    <?php if (!empty($descriptionError)): ?>
                        <span class=""><?php echo $descriptionError;?></span>
                    <?php endif;?>
                </div>
            </div><p>

            <!-- SUBMIT -->
            <div class="">
                <button type="submit" class="b">Update</button>
                <!--<a class="" href="journal.php">Back</a>-->
                <form action="../php/journal.php" method="post">
                <button type="submit" class="dsubmit">Back</button>
                </form>
             </div>
         </form>
     </div>

 </div> <!-- /container -->
</body>
</html>