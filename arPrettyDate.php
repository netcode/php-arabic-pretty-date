<?php
	/*
	* created by Eslam Salem
	* eslam@netcode.me
	* @net_code
	*/
	class ArPrettyDate {
		static function pretty($date){
			$timestamp = @strtotime($date);
			//$timestamp = @strtotime("-13 hours");
			$diff = time() - $timestamp;
			$day_diff = floor($diff / 86400);		
			
			$res = ($diff < 60 )? "منذ ثوان":"0";		
			$res = ($diff < 120 && !$res)? "منذ دقيقة":$res;
			$res = ($diff < 180 && !$res)? "منذ دقيقتان":$res;
			$res = ($diff < 3600 &&  !$res)? ' منذ ' . ( ( ($diff / 60) <= 10 ) ? floor($diff / 60).' دقائق ' :  floor($diff / 60)." دقيقة" ):$res;
			$res = ($diff < 7200 &&  !$res)? "منذ ساعة":$res;
			$res = ($diff < 10800 &&  !$res)? "منذ ساعتان":$res;
			$res = ($diff < 86400 &&  !$res)? ' منذ '. ( ( ($diff / 3600) <= 10 ) ? floor($diff / 3600).' ساعات ' :  floor($diff / 3600)." ساعة " ):$res;
			$res = ($diff < 172800 &&  !$res)?'منذ أمس':$res;
			$res = ($diff < 259200 &&  !$res)?'منذ يومان':$res;
			$res = ($diff < 604800 && !$res)?'منذ'. (floor($diff / 86400 )) . 'ايام': $res;
			$res = (!$res)?$date:$res;
			return $res;		
		}
	}
?>