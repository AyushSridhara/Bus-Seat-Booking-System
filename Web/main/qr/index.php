<?php

require 'phpqrcode/qrlib.php';
$qr_drr = 'img/';
$qr_img = $qr_drr.time().'.png';

$qr_data = 'My QR'; //put your data here


QRcode :: png($qr_data, $qr_img, 'H', 6, 6);



echo '<img src="'.$qr_img.'">';