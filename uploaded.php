<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is a PDF
    if ($pdfFileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            header("Location: index.php?file=" . urlencode($targetFile));
            exit();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
