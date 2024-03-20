<?php
$uname = "Kamil";
$password = "2003";
$entered_uname = "Kamil";
$entered_password = "2003";
$bnum = 1;
do {
	if ($bnum < 4) {
		if ($entered_uname == $uname && $entered_password == $password)
		{
			echo "Sisteme daxil olundu";
			break;
		} else
		{
			echo "$bnum";
			echo ". Sifr? veya istifadeçi adi sehvdir!";
			echo "<br>";
			$bnum++;
		}
	} 
	else 
	{
		echo "Hesab bloklandi!";
		break;
	}
}
while ($bnum <= 4);
?>