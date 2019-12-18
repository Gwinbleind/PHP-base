<?php
include "classSimpleImage.php";
$image = new SimpleImage();
$image->load($upload_path);
$image->resizeToWidth(150);
$image->save($resize_path);