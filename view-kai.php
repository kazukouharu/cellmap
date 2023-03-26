<?php
#$con = mysqli_connect("p-postgres","postgres","postgres");
$con = pg_connect("host=172.18.0.2 dbname=postgres user=postgres password=postgres");
if (!$con)
  {
  #die('Could not connect: ' . mysqli_error());
  die('Could not connect: ' . pg_last_error());
  }

#mysqli_select_db($con,"measurements");
#mysqli_select_db($con,"measurements");

#$result = mysqli_query($con, "SELECT * FROM measurements order by ctime desc, timestamp desc");
$result = pg_query($con, "SELECT * FROM measurements order by ctime desc, timestamp desc");


echo "<table border='1'>
<tr>
<th>timestamp </th>
<th>lon</th>
<th>lat</th>
<th>level</th>
<th>speed</th>
<th>operatorname</th>
<th>mcc</th>
<th>mnc</th>
<th>node</th>
<th>cellid</th>
<th>lac</th>
<th>network_type</th>
<th>qual</th>
<th>snr</th>
<th>cqi</th>
<th>lterssi</th>
<th>psc</th>
<th>arfcn</th>
<th>ta</th>
<th>ip</th>
<th>dl_bitrate</th>
<th>ul_bitrate</th>
<th>nlac1</th>
<th>ncellid1</th>
<th>nrxlev1</th>
<th>nqual1</th>
<th>narfcn1</th>
<th>nlac2</th>
<th>ncellid2</th>
<th>nrxlev2</th>
<th>nqual2</th>
<th>narfcn2</th>
<th>nlac3</th>
<th>ncellid3</th>
<th>nrxlev3</th>
<th>nqual3</th>
<th>narfcn3</th>
<th>nlac4</th>
<th>ncellid4</th>
<th>nrxlev4</th>
<th>nqual4</th>
<th>narfcn4</th>
<th>nlac5</th>
<th>ncellid5</th>
<th>nrxlev5</th>
<th>nqual5</th>
<th>narfcn5</th>
<th>nlac6</th>
<th>ncellid6</th>
<th>nrxlev6</th>
<th>nqual6</th>
<th>narfcn6</th>
<th>event</th>
<th>eventdetails</th>
<th>accuracy</th>
<th>locationsource</th>
<th>altitude</th>
<th>conntype</th>
<th>conninfo</th>
<th>avgping</th>
<th>minping</th>
<th>maxping</th>
<th>stdevping</th>
<th>pingloss</th>
<th>testdlbitrate</th>
<th>testulbitrate</th>
<th>testdlmaxbitrate</th>
<th>testulmaxbitrate</th>
<th>network_typenum</th>
<th>msisdn</th>
<th>imsi</th>
<th>imei</th>
<th>phone_type</th>
<th>band</th>
<th>bandwidth</th>
<th>ca</th>
<th>comment</th>
<th>username</th>
<th>password</th>
<th>teststate</th>
<th>battery</th>
<th>charging</th>
<th>credits</th>
<th>buffer</th>
<th>ctime</th>
<th>imported</th>
<th>versionname</th>


</tr>";

while($row = pg_fetch_array($result))
  {
  echo "<tr>";
  
echo  "<td>".$row['timestamp']."</td>";
echo  "<td>".$row['lon']."</td>";
echo  "<td>".$row['lat']."</td>";
echo  "<td>".$row['level']."</td>";
echo  "<td>".$row['speed']."</td>";
echo  "<td>".$row['operatorname']."</td>";
echo  "<td>".$row['mcc']."</td>";
echo  "<td>".$row['mnc']."</td>";
echo  "<td>".$row['node']."</td>";
echo  "<td>".$row['cellid']."</td>";
echo  "<td>".$row['lac']."</td>";
echo  "<td>".$row['network_type']."</td>";
echo  "<td>".$row['qual']."</td>";
echo  "<td>".$row['snr']."</td>";
echo  "<td>".$row['cqi']."</td>";
echo  "<td>".$row['lterssi']."</td>";
echo  "<td>".$row['psc']."</td>";
echo  "<td>".$row['arfcn']."</td>";
echo  "<td>".$row['ta']."</td>";
echo  "<td>".$row['ip']."</td>";
echo  "<td>".$row['dl_bitrate']."</td>";
echo  "<td>".$row['ul_bitrate']."</td>";
echo  "<td>".$row['nlac1']."</td>";
echo  "<td>".$row['ncellid1']."</td>";
echo  "<td>".$row['nrxlev1']."</td>";
echo  "<td>".$row['nqual1']."</td>";
echo  "<td>".$row['narfcn1']."</td>";
echo  "<td>".$row['nlac2']."</td>";
echo  "<td>".$row['ncellid2']."</td>";
echo  "<td>".$row['nrxlev2']."</td>";
echo  "<td>".$row['nqual2']."</td>";
echo  "<td>".$row['narfcn2']."</td>";
echo  "<td>".$row['nlac3']."</td>";
echo  "<td>".$row['ncellid3']."</td>";
echo  "<td>".$row['nrxlev3']."</td>";
echo  "<td>".$row['nqual3']."</td>";
echo  "<td>".$row['narfcn3']."</td>";
echo  "<td>".$row['nlac4']."</td>";
echo  "<td>".$row['ncellid4']."</td>";
echo  "<td>".$row['nrxlev4']."</td>";
echo  "<td>".$row['nqual4']."</td>";
echo  "<td>".$row['narfcn4']."</td>";
echo  "<td>".$row['nlac5']."</td>";
echo  "<td>".$row['ncellid5']."</td>";
echo  "<td>".$row['nrxlev5']."</td>";
echo  "<td>".$row['nqual5']."</td>";
echo  "<td>".$row['narfcn5']."</td>";
echo  "<td>".$row['nlac6']."</td>";
echo  "<td>".$row['ncellid6']."</td>";
echo  "<td>".$row['nrxlev6']."</td>";
echo  "<td>".$row['nqual6']."</td>";
echo  "<td>".$row['narfcn6']."</td>";
echo  "<td>".$row['event']."</td>";
echo  "<td>".$row['eventdetails']."</td>";
echo  "<td>".$row['accuracy']."</td>";
echo  "<td>".$row['locationsource']."</td>";
echo  "<td>".$row['altitude']."</td>";
echo  "<td>".$row['conntype']."</td>";
echo  "<td>".$row['conninfo']."</td>";
echo  "<td>".$row['avgping']."</td>";
echo  "<td>".$row['minping']."</td>";
echo  "<td>".$row['maxping']."</td>";
echo  "<td>".$row['stdevping']."</td>";
echo  "<td>".$row['pingloss']."</td>";
echo  "<td>".$row['testdlbitrate']."</td>";
echo  "<td>".$row['testulbitrate']."</td>";
echo  "<td>".$row['testdlmaxbitrate']."</td>";
echo  "<td>".$row['testulmaxbitrate']."</td>";
echo  "<td>".$row['network_typenum']."</td>";
echo  "<td>".$row['msisdn']."</td>";
echo  "<td>".$row['imsi']."</td>";
echo  "<td>".$row['imei']."</td>";
echo  "<td>".$row['phone_type']."</td>";
echo  "<td>".$row['band']."</td>";
echo  "<td>".$row['bandwidth']."</td>";
echo  "<td>".$row['ca']."</td>";
echo  "<td>".$row['comment']."</td>";
echo  "<td>".$row['username']."</td>";
echo  "<td>".$row['password']."</td>";
echo  "<td>".$row['teststate']."</td>";
echo  "<td>".$row['battery']."</td>";
echo  "<td>".$row['charging']."</td>";
echo  "<td>".$row['credits']."</td>";
echo  "<td>".$row['buffer']."</td>";
echo  "<td>".$row['ctime']."</td>";
echo  "<td>".$row['imported']."</td>";
echo  "<td>".$row['versionname']."</td>";





  echo "</tr>";
  }
echo "</table>";
pg_close($con);
?> 