<?php

$dataCsv = array_map('str_getcsv', file('analytics.csv'));

$totalRecord = count($dataCsv);

$level5User = 0;
$finalArr = array();
$countryArr = array();
foreach($dataCsv as $index=>$dataArr) {
    if(in_array('LEVEL_5_COMPLETE',$dataArr)){
        $level5User++;
    }
    if(isset($finalArr[$dataArr[0]])){
        $finalArr[$dataArr[0]]['event_id'][] = $dataArr[3];
        $finalArr[$dataArr[0]]['time'][] = $dataArr[2];
        $finalArr[$dataArr[0]]['amount'][] = $dataArr[4];
        $finalArr[$dataArr[0]]['totalAmount'] = $finalArr[$dataArr[0]]['totalAmount'] + $dataArr[4];
    }
    else{
        $finalArr[$dataArr[0]]['country'] = $dataArr[1];
        $finalArr[$dataArr[0]]['totalAmount'] = $dataArr[4];
    }

}

//print_r($finalArr);
$totalUsers = count($finalArr);

$perLevel5 = ($level5User/$totalUsers)*100;
echo "1) ".$perLevel5. " percentage of users are completing LEVEL 5.\n";

echo "2) Per user Revenue report with their country.";
?>

<!--<table border="1">
    <tr>
        <th>UserID</th>
        <th>Country</th>
        <th>Revenue</th>
    </tr> -->


<?php
$cnt=0;

echo "UserID|Country|Revenue\n";
foreach($finalArr as $userid=>$valueArr) {
    if($cnt===0) {
        $cnt++;
        continue;
    }
    echo $userid."|".$valueArr['country']."|".$valueArr['totalAmount']."\n";
//    echo "<tr>";
//    echo "<td>$userid</td>";
//    echo "<td>".$valueArr['country']."</td>";
//    echo "<td>".$valueArr['totalAmount']."</td>";
//    echo "</tr>";

}
?>
<!--</table>-->
<?php
exit;
$totalRecord = count($dataCsv);
///////1) What percentage of users are completing LEVEL 5?

$eventArr = array();
foreach($dataCsv as $index=>$dataArr) {
    $strSplit = explode("_",$dataArr[3]);

    if(in_array('LEVEL_5_COMPLETE',$dataArr)){
        $level5User++;
    }

    if ($strSplit[1]>5) {
        if(isset($eventArr[$dataArr[3]])){
            $eventArr[$dataArr[3]]++;
        }
        else{
            $eventArr[$dataArr[3]] = 1;
        }
    }
}
echo $level5User."\n";

$perLevel5 = ($level5User/$totalRecord)*100;
echo $perLevel5. " percentage of users are completing LEVEL 5.\n";

////////2) What's the average revenue per user, split by country?
print_r($eventArr);
exit;
