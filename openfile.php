<?php 
if(isset($_POST['open'])){
    $file=$_POST['dir'].'\\'.$_POST['file'];
    $filename=$_POST['file'];
    $file_info=pathinfo($file);
}
$content=file_get_contents($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Viewer</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style_openfile.css">
</head>
<body>
    <div class="container">
        <div class="file-info">
            <h1><?=$filename?></h1>
            <button>
                <i class="fas fa-download"></i> Download
            </button>
        </div>
        
        <div class="file-content">
            <?=$content?>
        </div>
        <div>
        <br>
        <br>
        <br>
        <br>
           <center> <h1> information about file </h1>
           <br>
           <br>
           <br>
           <br>
        <table>
                <tr>
                    <th>مسار الملف</th>
                    <th>اسم الملف</th>
                    <th>امتداد الملف</th>
                </tr>
                <tr>
                    
                    <th><?= $file_info['dirname']?></th>
                    <th><?= $file_info['filename']?></th>
                    <th><?= $file_info['extension']?></th>
                    
                </tr>

                
            </table>
        </center>
            
        
        </div>
    </div>
</body>
</html>
</html>