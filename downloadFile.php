<h1>Form Download</h1>
<form action="downloadFile.php" method="get">
    <label> 
        Key:
        <input type="text" name="key">
    </label>
    <input type="submit" value="Download">
</form>

<?php
if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Type: text/php');
    header('Content-Disposition: attachment; filename="info.php"'); 
    readfile(__DIR__ . '/file/info.php');
    exit();
}else{
      echo "Invalid Key! <br /> <a href='uploadFile.php'>Back</a>";
}