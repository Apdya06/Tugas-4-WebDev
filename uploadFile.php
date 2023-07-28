<h1>Form Upload</h1>
<form action="./uploadFile.php" method="post" enctype="multipart/form-data">
    <label>
        File:
        <input type="file" name="upload_file">
    </label>
    <input type="submit" value="Upload">
</form>

<?php
    $file_name = $_FILES['upload_file']['name'] ?? '';
    $file_type = $_FILES['upload_file']['type'] ?? '';
    $file_size = $_FILES['upload_file']['size'] ?? '';
    $file_tmp_name = $_FILES['upload_file']['tmp_name'] ?? '';
    $file_error = $_FILES['upload_file']['error'] ?? '';
    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
