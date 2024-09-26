<?php 
function return_dir() {
return dirname('./');

}
function delete($filename,$dir) {
    if(is_dir($dir.'\\'.$filename)){
        rmdir($dir.'\\'.$filename);
        return $dir;
    }
    elseif(file_exists($dir.'\\'.$filename)){
        unlink($dir.'\\'.$filename);
        return $dir;
    }
}
function createFolder($name,$dir)  {
    if(is_dir($dir.'\\'.$name)){

        return $dir;
    }
    else{
        mkdir($dir.'\\'.$name);
        return $dir;
    }
}
function createFile($name,$content,$dir) {
    if(file_exists($dir.'\\'.$name)){
        return $dir;
    }
    else{
        file_put_contents($dir.'\\'.$name,$content);
        return $dir;
    }
}
function RenameF($old,$new,$dir){
    Rename($dir.'\\'.$old,$dir.'\\'.$new);
    return $dir;
}
function fromat_size($size)  {
    $arr=array('GB','MB','KB','byte');
    if($size >= pow(1024,3)){
       return round($size/pow(1024,3),2).$arr[0];
    }
    elseif ($size >= pow(1024,2)) {
        return round($size/pow(1024,2),2).$arr[1];
    }
    elseif ($size >= 1024) {
        return round($size/1024,2).$arr[2];
    }
    else {
        return $size.$arr[3];
    }
    
}
?>