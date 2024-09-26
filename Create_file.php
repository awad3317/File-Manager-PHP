<?php 
if(isset($_POST['create_file'])){
    $dir=$_POST['dir'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_create_file.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="parent">
            <div><h1>Create New File</h1></div>
            <div>
                <form action="index.php" method="post">
                    <br>
                    <input type="text" name="FileName" placeholder="FileName" required> 
                    <br>
                    <br>
                    <br>
                    <textarea name="content" id="" placeholder="content"></textarea>
                    <br>
                    <br>
                    <input type="hidden" name="dir" value="<?=$dir?>">
                    <input name="create_file" class="Create" type="submit" value="Create">
                </form>
            </div>
        </div>
       </center> 
</body>
</html>