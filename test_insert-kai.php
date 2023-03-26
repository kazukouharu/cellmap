<?php
$dbConnection = pg_connect("host=172.18.0.2 dbname=postgres user=postgres password=postgres");
if (!$dbConnection )
  {
  #die('Could not connect: ' . mysqli_error());
  die('Could not connect: ' . pg_last_error());
  }

$timestamp = '2018-05-07 18:57:10';
$lon = 0.11111;
$lat= 0.22222;
$level= -100;
$operatorname= 'operatorname';
$mcc= '284';
$mnc= '01';
$node= 1000;
$cellid= 1001;
$lac= 2000;
$network_type= '4G';
$qual= -10;
$snr= 8;
$cqi= 2;
$lterssi= -70;
$versionname= 'xx';
$psc=101;


$testdlmaxbitrate= 1000;
$testulmaxbitrate= 500;
$comment= 'comment';
$battery= 78;
$charging= 'true';
$phone_type= 'phone type';
$credits= 10000;


$dl_bitrate= 1234;
$ul_bitrate= 123;

$speed= 50;

$event= 'event';
$accuracy= 5;
$locationsource= 'G';
$altitude= 10;
$conntype= 'M';
$conninfo= 'Data';
$avgping= 23;
$minping= 11;
$maxping= 40;
$stdevping= 18;
$pingloss= 2;
$testdlbitrate= 1000;
$testulbitrate= 500;
$network_typenum= 10;

$msisdn= '3432143214123';
$imsi= '42343243243';
$imei= '3432432432';
$arfcn= 11;
$ta= 2;





$nlac1= 1000;
$ncellid1= 11;
$narfcn1= 1;
$nrxlev1= -101;
$nqual1= -11;

$nlac2= 2000;
$ncellid2= 12;
$narfcn2= 2;
$nrxlev2= -102;
$nqual2= -12;

$nlac3= 3000;
$ncellid3= 13;
$narfcn3= 3;
$nrxlev3= -103;
$nqual3= -13;

$nlac4= 4000;
$ncellid4= 14;
$narfcn4= 4;
$nrxlev4= -104;
$nqual4= -14;

$nlac5= 5000;
$ncellid5= 15;
$narfcn5= 5;
$nrxlev5= -105;
$nqual5= -15;

$nlac6= 6000;
$ncellid6= 16;
$narfcn6= 6;
$nrxlev6= -106;
$nqual6= -16;



$sql="INSERT INTO measurements (timestamp,lon, lat, level, operatorname, mcc, mnc, node, cellid, lac,network_type, qual, snr, cqi, lterssi, psc, arfcn, ta, nlac1, ncellid1, narfcn1, nrxlev1, nqual1, nlac2, ncellid2, narfcn2, nrxlev2, nqual2, nlac3, ncellid3, narfcn3, nrxlev3, nqual3, nlac4, ncellid4, narfcn4, nrxlev4, nqual4, nlac5, ncellid5, narfcn5, nrxlev5, nqual5, nlac6, ncellid6, narfcn6, nrxlev6, nqual6, dl_bitrate, ul_bitrate, speed, event, accuracy, locationsource, altitude, conntype, conninfo, avgping, minping, maxping, stdevping, pingloss, testdlbitrate, testulbitrate,testdlmaxbitrate, testulmaxbitrate, network_typenum, msisdn, imsi, imei, comment, battery, charging, phone_type, credits, versionname)
VALUES
(
'$timestamp',
".($lon!='--' ? "'$lon'" : "NULL").",
".($lat!='--' ? "'$lat'" : "NULL").",
'$level',
'$operatorname',
'$mcc',
'$mnc',
".($node!='' ? "'$node'" : "NULL").",
'$cellid',
'$lac',
'$network_type',
".($qual!='-' ? "'$qual'" : "NULL").",
".($snr!='-' ? "'$snr'" : "NULL").",
".($cqi!='-' ? "'$cqi'" : "NULL").",
".($lterssi!='-' ? "'$lterssi'" : "NULL").",
".($psc!='' ? "'$psc'" : "NULL").",
".($arfcn!='' ? "'$arfcn'" : "NULL").",
".($ta!='' ? "'$ta'" : "NULL").",

".($nlac1!='' ? "'$nlac1'" : "NULL").",
".($ncellid1!='' ? "'$ncellid1'" : "NULL").",
".($narfcn1!='' ? "'$narfcn1'" : "NULL").",
".($nrxlev1!='' ? "'$nrxlev1'" : "NULL").",
".($nqual1!='' ? "'$nqual1'" : "NULL").",

".($nlac2!='' ? "'$nlac2'" : "NULL").",
".($ncellid2!='' ? "'$ncellid2'" : "NULL").",
".($narfcn2!='' ? "'$narfcn2'" : "NULL").",
".($nrxlev2!='' ? "'$nrxlev2'" : "NULL").",
".($nqual2!='' ? "'$nqual2'" : "NULL").",

".($nlac3!='' ? "'$nlac3'" : "NULL").",
".($ncellid3!='' ? "'$ncellid3'" : "NULL").",
".($narfcn3!='' ? "'$narfcn3'" : "NULL").",
".($nrxlev3!='' ? "'$nrxlev3'" : "NULL").",
".($nqual3!='' ? "'$nqual3'" : "NULL").",

".($nlac4!='' ? "'$nlac4'" : "NULL").",
".($ncellid4!='' ? "'$ncellid4'" : "NULL").",
".($narfcn4!='' ? "'$narfcn4'" : "NULL").",
".($nrxlev4!='' ? "'$nrxlev4'" : "NULL").",
".($nqual4!='' ? "'$nqual4'" : "NULL").",

".($nlac5!='' ? "'$nlac5'" : "NULL").",
".($ncellid5!='' ? "'$ncellid5'" : "NULL").",
".($narfcn5!='' ? "'$narfcn5'" : "NULL").",
".($nrxlev5!='' ? "'$nrxlev5'" : "NULL").",
".($nqual5!='' ? "'$nqual5'" : "NULL").",

".($nlac6!='' ? "'$nlac6'" : "NULL").",
".($ncellid6!='' ? "'$ncellid6'" : "NULL").",
".($narfcn6!='' ? "'$narfcn6'" : "NULL").",
".($nrxlev6!='' ? "'$nrxlev6'" : "NULL").",
".($nqual6!='' ? "'$nqual6'" : "NULL").",




'$dl_bitrate',
'$ul_bitrate',
'$speed',
'$event',
'$accuracy',
'$locationsource',
'$altitude',
'$conntype',
'$conninfo',
".($avgping!='-1' ? "'$avgping'" : "NULL").",
".($minping!='-1' ? "'$minping'" : "NULL").",
".($maxping!='-1' ? "'$maxping'" : "NULL").",
".($stdevping!='-1' ? "'$stdevping'" : "NULL").",
".($pingloss!='-1' ? "'$pingloss'" : "NULL").",
".($testdlbitrate!='-1' ? "'$testdlbitrate'" : "NULL").",
".($testulbitrate!='-1' ? "'$testulbitrate'" : "NULL").",
".($testdlmaxbitrate!='-1' ? "'$testdlmaxbitrate'" : "NULL").",
".($testulmaxbitrate!='-1' ? "'$testulmaxbitrate'" : "NULL").",

'$network_typenum',
'$msisdn',
'$imsi',
'$imei',
'$comment',
'$battery',
'$charging',
'$phone_type',
'$credits',
'$versionname'
)";


if (!pg_query($dbConnection, $sql))
{
  die('Error: ' . pg_last_error($dbConnection));
  }

pg_close($dbConnection);

echo "1";

?>