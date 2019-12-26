<div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
<?foreach ($gallery as $file):?>
    <a style="margin: 10px" href="/?page=img_full&imgID=<?=$file['id']?>">
        <img src="<?=$file['prev']?>" alt="">
    </a>
<?endforeach;?>
</div>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="myFile">
	<input type="submit" value="Загрузить файл" name="load">
</form>
