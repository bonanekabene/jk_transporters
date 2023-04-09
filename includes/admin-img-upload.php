<?php
    //files include
    include("../includes/db.php");

    $file_error = "";
    $file_success = "";

    if(isset($_POST["submit"])){
        $img_upload = $_FILES["upload"];

        //print_r($img_upload);

        if(isset($img_upload)){
            $f_name = $_FILES["upload"]["name"];
            $f_tmp = $_FILES["upload"]["tmp_name"];
            $f_size = $_FILES["upload"]["size"];
            $f_error = $_FILES["upload"]["error"];

            if($f_error == 0){
                if($f_size > 38215178){
                    
                    $file_error = "file is greater than 10MBS";
                }else{
                    $fileExt = explode(".", $f_name);
                    $actualExt = strtolower(end($fileExt));
                    $allowedExt = array("jpg", "png", "jpeg");

                    if(in_array($actualExt, $allowedExt)){
                        $newName = uniqid('', true).".". $actualExt;
                        $uploadDir = "../uploaded/". $newName;
                        $upload = move_uploaded_file($f_tmp, $uploadDir);
                        
                        if($upload){
                           // $image_name = $_POST["image-name"];
                            $sql = mysqli_query($conn, "UPDATE admin set image = '$newName' where id = '$admin_id'");
                            header("location: profile.php");
                        }

                    }else{
                        $file_error = "Image must be jpg jpeg or png";
                    }
                }
            }else{
                $f_error = "There was an error ";
            }
        }
    }

?>