<div id="core">
	<br>
	<img src="<?=$img?>" alt="">
	<p><?=$name?></p>
	<p>Views: <?=$views?></p>
<!--	Форма ввода отзывов-->
	<form method="post">
		<input type="number" name="id" value="<?=$editRow['id']?>" hidden>
		<input type="text" name="name" value="<?=$editRow['name']?>"><br>
		<textarea name="text" cols="21" rows="3"><?=$editRow['text']?></textarea><br>
		<button formaction="?page=img_full&imgID=<?=$id?>&action=<?=$action?>" type="submit"><?=$actionButtonText?></button>
	</form>
	<h3>Отзывы</h3>
	<?=$message?><br><br>
	<?foreach ($feedback as $row):?>
		<b><?=$row['name']?></b>: <?=$row['text']?>
<!--		<button>Изм</button>-->
<!--		<button>X</button>-->
		<a href="/?page=img_full&imgID=<?=$id?>&feedbackID=<?=$row['id']?>&action=edit">[Изм]</a>
		<a href="/?page=img_full&imgID=<?=$id?>&feedbackID=<?=$row['id']?>&action=delete">[X]</a><br>
	<?endforeach;?>
</div>