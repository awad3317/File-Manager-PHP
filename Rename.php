<?php
if(isset($_POST['rename'])){
    $old=$_POST['file'];
    $dir=$_POST['dir'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_Rename.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="parent">
            <div><h1>Rename</h1></div>
            <div>
                <form action="index.php" method="post">
                    <br>
                    <label for="">the old name </label>
                    <input type="hidden" name="oldName" value="<?=$old?>">
                    <input type="hidden" name="dir" value="<?=$dir?>">
                    <input type="text" name="newName" value="<?=$old?>" required> 
                    <br>
                    <br>
                    <button  name="Rename" class="btn btn-warning btn-sm" type="submit" value="Create">
                    <i class="fas fa-edit"></i> Rename </button>
                </form>
            </div>
        </div>
       </center> 
</body>
</html>