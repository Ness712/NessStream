<?php 

    require_once 'checkimg.class.php';

    // La ou l'image va être 
    $dir = "../assets/img";
    $target_file = $dir.basename($_FILES['avatar_file']['name']);
    $imgTypeFile = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $fileMime = $_FILES['avatar_file']['type'];
    


    if (CheckIMG::check_mime($_FILES['avatar_file']['tmp_name'])) {
        if (CheckIMG::check_size($_FILES['avatar_file']['size'])) {
            if (CheckIMG::check_type($imgTypeFile)) {
                if (CheckIMG::check_double_extension($_FILES['avatar_file']['name'])) {
                    if(CheckIMG::check_type_mime($fileMime)) {
                        if(CheckIMG::check_null_byte($_FILES['avatar_file']['name'])){
                            if(move_uploaded_file($_FILES['avatar_file']['tmp_name'], $target_file)){
                                    echo "Fichier ". basename($_FILES['avatar_file']['name']) . " a bien été uploadé";
                            }else{
                                echo "Erreur lors de l'upload ";
                            }
                        }else {
                            echo "Erreur null byte";
                        }
                    }else {
                        echo "Erreur mime";
                    }
                } else {
                    echo "Erreur extension";
                }
            } else {
                echo "Erreur type ";
            }
        } else {
            echo "Trop gros";
        }
    } else {
        echo "Erreur image";
    }



