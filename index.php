<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF File Upload</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />
</head>

<body style="background-color: pink;">
<div class="u-fixed-width">
  <div class="p-logo-section">
    <div class="p-logo-section__items">
      <div class="p-logo-section__item">
        <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
      </div>
    </div>
  </div>
</div>

<div class="row--50-50 grid-demo">
  <div class="col">
    <h4>File Upload</h4>

    <form action="uploaded.php" method="post" enctype="multipart/form-data">
        <div class="p-card">
            <h3>PDF File</h3>
            <p class="p-card__content">
            <input type="file" name="pdfFile" accept=".pdf" required />
            </p>
        </div>

        <div>
            <button>
                Upload
            </button>
        </div>
    </form>
  </div>
  
  <div class="col">
    <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/mascot/CCS.png" alt="College of Computing Studies">
  </div>
</div>

<?php
if (isset($_GET['file'])) {
    $uploadedFile = htmlspecialchars($_GET['file']);
    echo "<h3>Uploaded PDF:</h3>";
    echo "<embed src='$uploadedFile' type='application/pdf' width='100%' height='600px' />";
}
?>

</body>
</html>
