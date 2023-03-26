<?php
$dbConnection = pg_connect("host=172.18.0.2 dbname=postgres user=postgres password=postgres");
if (!$dbConnection )
  {
  #die('Could not connect: ' . mysqli_error());
  die('Could not connect: ' . pg_last_error());
  }

foreach($_POST as $key=>$value) {
$measurement = explode("\t", $value);

$timestamp= '';try {if(isset($measurement[0])) $timestamp = $measurement[0];} catch (Exception $e) {}
$lon= '';try {if(isset($measurement[1])) $lon = $measurement[1];} catch (Exception $e) {}
$lat= '';try {if(isset($measurement[2])) $lat= $measurement[2];} catch (Exception $e) {}
$level= '';try {if(isset($measurement[3])) $level= $measurement[3];} catch (Exception $e) {}
$operatorname= '';try {if(isset($measurement[4])) $operatorname= $measurement[4];} catch (Exception $e) {}
$mcc= '';try {if(isset($measurement[5])) $mcc= $measurement[5];} catch (Exception $e) {}
$mnc= '';try {if(isset($measurement[6])) $mnc= $measurement[6];} catch (Exception $e) {}
$node= '';try {if(isset($measurement[7])) $node= $measurement[7];} catch (Exception $e) {}
$cellid= '';try {if(isset($measurement[8])) $cellid= $measurement[8];} catch (Exception $e) {}
$lac= '';try {if(isset($measurement[9])) $lac= $measurement[9];} catch (Exception $e) {}
$network_type= '';try {if(isset($measurement[10])) $network_type= $measurement[10];} catch (Exception $e) {}
$qual= '';try {if(isset($measurement[11])) $qual= $measurement[11];} catch (Exception $e) {}
$snr= '';try {if(isset($measurement[12])) $snr= $measurement[12];} catch (Exception $e) {}
$cqi= '';try {if(isset($measurement[13])) $cqi= $measurement[13];} catch (Exception $e) {}
$lterssi= '';try {if(isset($measurement[14])) $lterssi= $measurement[14];} catch (Exception $e) {}
$versionname= '';try {if(isset($measurement[15])) $versionname= $measurement[15];} catch (Exception $e) {}
$psc= '';try {if(isset($measurement[16])) $psc=$measurement[16];} catch (Exception $e) {}


$testdlmaxbitrate= '';try {if(isset($measurement[17])) $testdlmaxbitrate=$measurement[17];} catch (Exception $e) {}
$testulmaxbitrate= '';try {if(isset($measurement[18])) $testulmaxbitrate=$measurement[18];} catch (Exception $e) {}
$comment= '';try {if(isset($measurement[19])) $comment=$measurement[19];} catch (Exception $e) {}
$battery= '';try {if(isset($measurement[20])) $battery=$measurement[20];} catch (Exception $e) {}
$charging= '';try {if(isset($measurement[21])) $charging=$measurement[21];} catch (Exception $e) {}
$phone_type= '';try {if(isset($measurement[22])) $phone_type=$measurement[22];} catch (Exception $e) {}
$credits= '';try {if(isset($measurement[23])) $credits=$measurement[23];} catch (Exception $e) {}
$buffer= '';try {if(isset($measurement[24])) $buffer=$measurement[24];} catch (Exception $e) {}


$dl_bitrate= '';try {if(isset($measurement[35])) $dl_bitrate=$measurement[35];} catch (Exception $e) {}
$ul_bitrate= '';try {if(isset($measurement[36])) $ul_bitrate=$measurement[36];} catch (Exception $e) {}

$speed= '';try {if(isset($measurement[37])) $speed=$measurement[37];} catch (Exception $e) {}

$event= '';try {if(isset($measurement[38])) $event=$measurement[38];} catch (Exception $e) {}
$accuracy= '';try {if(isset($measurement[39])) $accuracy=$measurement[39];} catch (Exception $e) {}
$locationsource= '';try {if(isset($measurement[40])) $locationsource=$measurement[40];} catch (Exception $e) {}
$altitude= '';try {if(isset($measurement[41])) $altitude=$measurement[41];} catch (Exception $e) {}
$conntype= '';try {if(isset($measurement[42])) $conntype=$measurement[42];} catch (Exception $e) {}
$conninfo= '';try {if(isset($measurement[43])) $conninfo=$measurement[43];} catch (Exception $e) {}
$avgping= '';try {if(isset($measurement[44])) $avgping=$measurement[44];} catch (Exception $e) {}
$minping= '';try {if(isset($measurement[45])) $minping=$measurement[45];} catch (Exception $e) {}
$maxping= '';try {if(isset($measurement[46])) $maxping=$measurement[46];} catch (Exception $e) {}
$stdevping= '';try {if(isset($measurement[47])) $stdevping=$measurement[47];} catch (Exception $e) {}
$pingloss= '';try {if(isset($measurement[48])) $pingloss=$measurement[48];} catch (Exception $e) {}
$testdlbitrate= '';try {if(isset($measurement[49])) $testdlbitrate=$measurement[49];} catch (Exception $e) {}
$testulbitrate= '';try {if(isset($measurement[50])) $testulbitrate=$measurement[50];} catch (Exception $e) {}
$network_typenum= '';try {if(isset($measurement[51])) $network_typenum=$measurement[51];} catch (Exception $e) {}

$msisdn= '';try {if(isset($measurement[52])) $msisdn=$measurement[52];} catch (Exception $e) {}
$imsi= '';try {if(isset($measurement[53])) $imsi=$measurement[53];} catch (Exception $e) {}
$imei= '';try {if(isset($measurement[54])) $imei=$measurement[54];} catch (Exception $e) {}
$arfcn= '';try {if(isset($measurement[55])) $arfcn=$measurement[55];} catch (Exception $e) {}
$ta= '';try {if(isset($measurement[56])) $ta=$measurement[56];} catch (Exception $e) {}
$eventdetails= '';try {$eventdetails=$measurement[58];} catch (Exception $e) {}
$band= '';try {if(isset($measurement[59])) $band=$measurement[59];} catch (Exception $e) {}
$bandwidth= '';try {if(isset($measurement[60])) $bandwidth=$measurement[60];} catch (Exception $e) {}

$username= '';try {if(isset($measurement[61])) $username=$measurement[61];} catch (Exception $e) {}    
$password= '';try {if(isset($measurement[62])) $password=$measurement[62];} catch (Exception $e) {}
$teststate= '';try {if(isset($measurement[63])) $teststate=$measurement[63];} catch (Exception $e) {}
$ip= '';try {if(isset($measurement[64])) $ip=$measurement[64];} catch (Exception $e) {}
$ca= '';try {if(isset($measurement[65])) $ip=$measurement[65];} catch (Exception $e) {}



$nlac1= '';try {if(isset($measurement[68])) $nlac1=$measurement[68];} catch (Exception $e) {}
$ncellid1= '';try {if(isset($measurement[69])) $ncellid1=$measurement[69];} catch (Exception $e) {}
$narfcn1= '';try {if(isset($measurement[70])) $narfcn1=$measurement[70];} catch (Exception $e) {}
$nrxlev1= '';try {if(isset($measurement[71])) $nrxlev1=$measurement[71];} catch (Exception $e) {}
$nqual1= '';try {if(isset($measurement[72])) $nqual1=$measurement[72];} catch (Exception $e) {}

$nlac2= '';try {if(isset($measurement[73])) $nlac2=$measurement[73];} catch (Exception $e) {}
$ncellid2= '';try {if(isset($measurement[74])) $ncellid2=$measurement[74];} catch (Exception $e) {}
$narfcn2= '';try {if(isset($measurement[75])) $narfcn2=$measurement[75];} catch (Exception $e) {}
$nrxlev2= '';try {if(isset($measurement[76])) $nrxlev2=$measurement[76];} catch (Exception $e) {}
$nqual2= '';try {if(isset($measurement[77])) $nqual2=$measurement[77];} catch (Exception $e) {}

$nlac3= '';try {if(isset($measurement[78])) $nlac3=$measurement[78];} catch (Exception $e) {}
$ncellid3= '';try {if(isset($measurement[79])) $ncellid3=$measurement[79];} catch (Exception $e) {}
$narfcn3= '';try {if(isset($measurement[80])) $narfcn3=$measurement[80];} catch (Exception $e) {}
$nrxlev3= '';try {if(isset($measurement[81])) $nrxlev3=$measurement[81];} catch (Exception $e) {}
$nqual3= '';try {if(isset($measurement[82])) $nqual3=$measurement[82];} catch (Exception $e) {}

$nlac4= '';try {if(isset($measurement[83])) $nlac4=$measurement[83];} catch (Exception $e) {}
$ncellid4= '';try {if(isset($measurement[84])) $ncellid4=$measurement[84];} catch (Exception $e) {}
$narfcn4= '';try {if(isset($measurement[85])) $narfcn4=$measurement[85];} catch (Exception $e) {}
$nrxlev4= '';try {if(isset($measurement[86])) $nrxlev4=$measurement[86];} catch (Exception $e) {}
$nqual4= '';try {if(isset($measurement[87])) $nqual4=$measurement[87];} catch (Exception $e) {}

$nlac5= '';try {if(isset($measurement[88])) $nlac5=$measurement[88];} catch (Exception $e) {}
$ncellid5= '';try {if(isset($measurement[89])) $ncellid5=$measurement[89];} catch (Exception $e) {}
$narfcn5= '';try {if(isset($measurement[90])) $narfcn5=$measurement[90];} catch (Exception $e) {}
$nrxlev5= '';try {if(isset($measurement[91])) $nrxlev5=$measurement[91];} catch (Exception $e) {}
$nqual5= '';try {if(isset($measurement[92])) $nqual5=$measurement[92];} catch (Exception $e) {}

$nlac6= '';try {if(isset($measurement[93])) $nlac6=$measurement[93];} catch (Exception $e) {}
$ncellid6= '';try {if(isset($measurement[94])) $ncellid6=$measurement[94];} catch (Exception $e) {}
$narfcn6= '';try {if(isset($measurement[95])) $narfcn6=$measurement[95];} catch (Exception $e) {}
$nrxlev6= '';try {if(isset($measurement[96])) $nrxlev6=$measurement[96];} catch (Exception $e) {}
$nqual6= '';try {if(isset($measurement[97])) $nqual6=$measurement[97];} catch (Exception $e) {}



$sql="INSERT INTO measurements (timestamp,lon, lat, level, operatorname, mcc, mnc, node, cellid, lac,network_type, qual, snr, cqi, lterssi, psc, arfcn, ta, nlac1, ncellid1, narfcn1, nrxlev1, nqual1, nlac2, ncellid2, narfcn2, nrxlev2, nqual2, nlac3, ncellid3, narfcn3, nrxlev3, nqual3, nlac4, ncellid4, narfcn4, nrxlev4, nqual4, nlac5, ncellid5, narfcn5, nrxlev5, nqual5, nlac6, ncellid6, narfcn6, nrxlev6, nqual6, dl_bitrate, ul_bitrate, speed, event, eventdetails, accuracy, locationsource, altitude, conntype, conninfo, avgping, minping, maxping, stdevping, pingloss, testdlbitrate, testulbitrate,testdlmaxbitrate, testulmaxbitrate, network_typenum, msisdn, imsi, imei, comment, battery, charging, phone_type, credits,buffer, band, bandwidth,username,password,teststate, ip, ca, versionname)
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
'$eventdetails',
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
'$buffer',
'$band',
'$bandwidth',
'$username',
'$password',
'$teststate',
'$ip',
'$ca',
'$versionname'
)";



if (!pg_query($dbConnection, $sql))
{
  die('Error: ' . pg_error($dbConnection));
  }
}
pg_close($dbConnection);

echo "1";

?> 