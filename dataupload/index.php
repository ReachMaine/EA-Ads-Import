<?php /* select file to upload */ ?>
<!DOCTYPE html>
<html>
<head>
  <title>EA VD File Upload</title>
</head>
  <body>

    <?php /* <form action="uploadVD.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileupload" value="fileupload" id="fileupload">
      <label for="fileupload"> Select a file to upload</label>
      <input type="submit" value="submit">
    </form> */ ?>
    <div class="form-container">
      <div class="form_description">
          <h2>Upload VD Classified Export</h2>
          <p>some description here</p>
      </div>
      <form action="uploadVD.php" method="post" enctype="multipart/form-data" >
          <p>
            <input type="file" name="fileToUpload" id="fileToUpload">
          </p>
          <p>
            <input class="button" type="submit" value="Upload" name="submit">
          </p>
      </form>
    <div>
      <div class="form-container">
        <div class="form_description">
            <h2>Run the import</h2>
            <p>some description here</p>
        </div>
        <form action="get.php" method="get"  >
            <p>
              <input class="button" type="submit" value="Run Import" name="submit">
            </p>
        </form>
      <div>

  </body>
</html>
