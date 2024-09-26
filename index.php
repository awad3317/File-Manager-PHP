<?php 
include("function.php");
$dir='';
if(isset($_POST['delete'])){
    $dir=delete($_POST['file'],$_POST['dir']);
}
if(isset($_POST['create_Foledr'])){
    $dir=createFolder($_POST['FolderName'],$_POST['dir']);
}
if(isset($_POST['create_file'])){
    $dir=createFile($_POST['FileName'].'.txt',$_POST['content'],$_POST['dir']);
}
if(isset($_POST['Rename'])){
    $dir=RenameF($_POST['oldName'],$_POST['newName'],$_POST['dir']);
}
if(isset($_POST['back'])){
    $dir=dirname($_POST['dir'],1);
}
if(isset($_POST['open'])){
    $dir=$_POST['dir'].'\\'.$_POST['file'];
    $folders=scandir($dir);
}
if(empty($dir)){
    $dir=return_dir(); 
}
$folders=scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>
<body>
    
    <center>
        <div class="parent">
            <h1>File Management </h1>
        <div class="main">
            <h4><?=$dir?></h4>
            <div class="button-group2">
                <form action="Create_folder.php" method="post">
                <input type="hidden" name="dir" value="<?=$dir?>">
                <button type="submit" name="create_folder" class="btn btn-success btn-sm"><i class="fas fa-folder-plus"></i>Create Folder</button>
                </form>
                <form action="Create_file.php" method="post">
                <input type="hidden" name="dir" value="<?=$dir?>">
                <button type="submit" name="create_file" class="btn btn-primary btn-sm"><i class="fas fa-file-plus"></i>Create File</button>
                </form>
                <form action="" method="post">
                <input type="hidden" name="dir" value="<?=$dir?>">
                <button type="submit" name="back" class="btn btn-primary btn-sm"><i class="fas fa-file-plus"></i>Back</button>
                </form>
            </div>
           
    
        </div>
        <div>
            <table>
                <tr class="heder">
                    <th><i class="fas fa-file-alt"></i>  Name</th>
                    <th>Size</th>
                    <th><i class="fas fa-calendar-alt"></i>  Modified</th>
                    <th><i class="fas fa-cog"></i>  Actions</th>
                </tr>
                <?php 
                $count=0;
                foreach($folders as $folder){
                    if($count%2 == 0){
                        $color='color';
                    }
                    if($count%2 != 0){
                        $color='nocolor';
                    }
                    $count++;
                    if($folder == '.' or $folder=='..'){
                        continue;
                    }
                    else{
                         echo '<tr class="'.$color.'">';
                        
                        
                        if(is_dir($folder) or strpos($folder, '.')!= true){
                            echo '<td><i class="fas fa-folder"></i>   '.$folder.'</td>';
                            echo '<td> Forder </td>';
                        }
                        else{
                            echo '<td><i class="fas fa-file"></i>   '.$folder.'</td>';
                            echo '<td>'.fromat_size(filesize($dir.'\\'.$folder)).'</td>';
                        }
                        
                        echo '<td>'.date('Y-m-d',filemtime($dir.'\\'.$folder)).'</td>';
                        echo '<td>';
                       echo '<div class="button-group">';
                        echo '<form action="" method="post">';
                            echo '<input type="hidden" name="file" value="'.$folder.'">';
                            echo '<input type="hidden" name="dir" value="'.$dir.'">';
                            echo '<button  class="btn btn-danger btn-sm type="submit" name="delete" value="delete">  <i class="fas fa-trash"></i> Delete
        </button>';
                        echo '</form>';
                        echo '<form action="Rename.php" method="post">';
                            echo '<input type="hidden" name="file" value="'.$folder.'">';
                            echo '<input type="hidden" name="dir" value="'.$dir.'">';
                            echo '<button class="btn btn-warning btn-sm" type="submit" name="rename" value="rename"> <i class="fas fa-edit"></i> Rename
        </button>';
                        echo '</form>';
                        if(is_dir($folder) or strpos($folder, '.')!= true){
                            echo '<form action="" method="post">';
                        }
                        else{
                            echo '<form action="openfile.php" method="post">';
                        }
                        
                        echo '<input type="hidden" name="file" value="'.$folder.'">';
                        echo '<input type="hidden" name="dir" value="'.$dir.'">';
                        echo '<button  class="btn btn-primary btn-sm" type="submit" name="open" value="open">  <i class="fas fa-file-alt"></i> Open
        </button>';
                if(is_dir($folder) or strpos($folder,'.')!= true){
                        echo '</form>';
                        echo '<form action="" method="post">';
                        echo '<input type="hidden" name="file" value="'.$folder.'">';
                        echo '<input type="hidden" name="dir" value="'.$dir.'">';
                        echo '<button  class="btn btn-primary btn-sm" style="visibility:hidden;" type="submit" name="rename" value="open">  <i class="fas fa-download"></i> Download
                        </button>';
                         echo '</form>';
                    
                        }
                    else{
                        echo '</form>';
                        echo '<form action="" method="post">';
                        echo '<input type="hidden" name="file" value="'.$folder.'">';
                        echo '<input type="hidden" name="dir" value="'.$dir.'">';
                        echo '<button  class="btn btn-primary btn-sm" type="submit" name="rename" value="open">  <i class="fas fa-download"></i> Download
                            </button>';
                         echo '</form>';
                        }
                    echo '</div>';
                        echo '</td>';
                        echo '</tr>';
                    }
                   
                }
                ?>
                

                    
                   
                
                
            </table>


        </div>



    </div>
</center>
</body>
</html>