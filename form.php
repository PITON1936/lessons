<?php
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
$uploading_file = $upload_dir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploading_file)) {
    echo 'file successfully uploaded!';
} else {
    echo 'Error!!!';
}
?>