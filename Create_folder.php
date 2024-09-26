<?php 

if(isset($_POST['create_folder'])){
    $dir=$_POST['dir'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_create_folder.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>
<body>
   <center>
    <div class="parent">
        <div><h1>Create New Folder</h1></div>
        <div>
            <form action="index.php" method="post"> 
                <br>
                <br>
                <input type="text" name="FolderName" placeholder="FolderName" required>
                <input type="hidden" name="dir" value="<?=$dir?>">
                <input name="create_Foledr" type="submit" value="Create">
            </form>


        </div>
    </div>
   </center> 
</body>
</html>