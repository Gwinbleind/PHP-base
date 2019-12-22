<div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
<?php
$result = mysqli_query($db,'SELECT * FROM gallery ORDER BY views DESC');
foreach ($result as $file):?>
    <a style="margin: 10px" href="/?page=img_full&imgID=<?=$file['id']?>">
        <img src="<?=$file['prev']?>" alt="">
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
    $upload_path = GALLERY_DIR . $_FILES["myFile"]["name"];
    $ext = strtolower(pathinfo($upload_path, PATHINFO_EXTENSION));

    if (in_array($ext, ALLOWED_EXTENSIONS)) {
    	  mysqli_query($db,"INSERT INTO gallery (`id`, `img`, `prev`, `name`, `views`) VALUES (NULL, 'gallery/big/{$_FILES["myFile"]["name"]}', 'gallery/small/{$_FILES["myFile"]["name"]}', '{$_FILES["myFile"]["name"]}', '0');");
	     $resize_path = MINIATURE_DIR . $_FILES["myFile"]["name"];

       if (move_uploaded_file($tmp_path, $upload_path)) {
           header("Location: /");
       } else {
           echo "Что-то пошло не так!<br>";
       }
       include "resize.php";
	 }
}