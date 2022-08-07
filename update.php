<?php

	$versionName=$_GET['versionName'];
	$latestVersion='1.0.0';
	
	if($versionName!=$latestVersion)
		echo json_encode(array("update"=>true,"newVersion"=>$latestVersion,"apkFileUrl"=>"https://storage.devmeteor.cn/whs/package/WeiHaShi.apk","newMd5"=>"38ebb8c123d3c575be236196cd136ef8","updateLog"=>"Fixed some bug","targetSize"=>"13.3MB","constraint"=>false));
	else
		echo json_encode(array("update"=>false,"newVersion"=>"null","apkFileUrl"=>"null","newMd5"=>"null","updateLog"=>"null","targetSize"=>"null","constraint"=>false));
?>