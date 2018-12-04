
<?php
 include_once "db_login.php";

 

 if(isset($_POST["submit"])){
    // $image = mysqli_real_escape_string($con, $_POST['image']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        //Insert image content into database
        $insert = $con->query("INSERT into images (image, description) VALUES ('$imgContent', '$description')");

        if($insert){
            echo "File uploaded successfully.";
            header('Location: secret.php');
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>