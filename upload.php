<?php
session_start();

if(isset($_POST['submit'])){
    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    
    $allowed=array('jpg','jpeg','png');
    // $insert = mysqli_query($con, "INSERT INTO images(image_url) VALUES('$fileName')");
    
    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<1000000){
                // $fileNameNew =uniqid('',true).".".$fileActualExt;
                // $fileDestination = 'uploads/'.$fileNameNew;
                $fileDestination = 'uploads/'.$fileName;
                move_uploaded_file($fileTmpName,$fileDestination);
                
                // header("Location: add.php?uploadsuccess");
            }else{
                 echo"You cannot upload files because of bigger size";
            }
        }else{
            echo"You cannot upload files because of an error";
        }
    }else{
        echo"You cannot upload files of this type!";
    }
}
?>