<div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
<?php
foreach ($files as $file):?>
    <a style="margin: 10px" href="gallery/big/<?=$file?>">
        <img src="gallery/small/<?=$file?>" alt="">
    </a>
<?endforeach;?>
</div>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="myFile">
	<input type="submit" value="Загрузить файл" name="load">
</form>
<?php
if (isset($_POST["load"])) {
    $tmp_path = $_FILES["myFile"]["tmp_name"];
    $upload_path = "./gallery/big/" . $_FILES["myFile"]["name"];
    $ext = strtolower(pathinfo($upload_path, PATHINFO_EXTENSION));

    if (in_array($ext, ALLOWED_EXTENSIONS)) {
       $resize_path = "./gallery/small/" . $_FILES["myFile"]["name"];

       if (move_uploaded_file($tmp_path, $upload_path)) {
           header("Location: /");
       } else {
           echo "Что-то пошло не так!<br>";
       }
       include "resize.php";
   }
}

