<?php
//$result = mysqli_query($db,"SELECT `img`, `name`, `views` FROM `gallery` WHERE `id`={$imgID}");
//$file = $result->fetch_assoc();
if (isset($imgFull)) {
	extract($imgFull);
}
if (!viewsIncrement($db, $id)) {
	Die("Проблема с просмотрами");
}
?>
<br>
<img src="<?=$img?>" alt="">
<p><?=$name?></p>
<p>Views: <?=$views?></p>