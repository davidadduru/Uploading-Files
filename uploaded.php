<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["audioFile"]["name"]);
    $uploadOk = 1;
    $audioFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($audioFileType != "mp3") {
        echo "Sorry, only MP3 files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["audioFile"]["tmp_name"], $targetFile)) {
            header("Location: index.php?file=" . urlencode($targetFile));
            exit();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
