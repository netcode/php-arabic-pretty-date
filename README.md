php-arabic-pretty-date
======================

display date in simple way in arabic

it display date correctly in pretty way in arabic language

example : 
	$last_3_minute = date('Y-m-d H:i:s',strtotime("-3 minute"));
	ArPrettyDate::pretty($last_3_minute); //result : منذ 3 دقائق