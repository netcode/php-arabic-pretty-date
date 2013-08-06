<?php
header('Content-Type: text/html; charset=utf-8');
include 'arPrettyDate.php';
$now = date('Y-m-d H:i:s',time());
$last_minute = date('Y-m-d H:i:s',strtotime("-1 minute"));
$last_3_minute = date('Y-m-d H:i:s',strtotime("-3 minute"));
$last_2_hours = date('Y-m-d H:i:s',strtotime("-2 hours"));
echo $now.' == '.ArPrettyDate::pretty($now);
echo '<hr>';
echo $last_minute.' == '.ArPrettyDate::pretty($last_minute);
echo '<hr>';
echo $last_3_minute.' == '.ArPrettyDate::pretty($last_3_minute);
echo '<hr>';
echo $last_2_hours.' == '.ArPrettyDate::pretty($last_2_hours);

?>