<?php

move_uploaded_file($_FILES['uss']['tmp_name'], 'upload/1.txt');

if ($_FILES['uss']['tmp_name']){
    header("Location: form2.php");
}
