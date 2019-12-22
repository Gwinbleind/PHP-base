<?php
$result = mysqli_query($db,"SELECT `img`, `name`, `views` FROM `gallery` WHERE `id`={$imgID}");
$file = $result->fetch_assoc();
$views = $file['views'] + 1;
mysqli_query($db, "UPDATE `gallery` SET `views`={$views} WHERE `id`={$imgID}")
?>
<br>
<img src="<?=$file['img']?>" alt="">
<p><?=$file['name']?></p>
<p>Views: <?=$file['views']?></p>