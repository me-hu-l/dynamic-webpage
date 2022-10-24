<?php 

session_start();
$timestamp = $_POST['timestamp'];
$meterid = $_POST['meterid'];
echo 'the timestamp entered is : ' . $timestamp . "<br>";
echo 'the meter id entered is : ' . $meterid . "<br>";
$db = new mysqli('localhost','root','','MRSproject');
if($db->connect_errno){
    echo 'connection to MRSproject database failed '. $db->connect_error;
    exit();
}
$query1 = "SELECT * from MRS WHERE time_stamp = '$timestamp' and meterid = '$meterid'";


$result = $db ->query($query1);

if($db->errno){
    echo 'there was an error <br>';
}
$row = $result -> fetch_assoc();
echo 'timestamp: ' . $row['time_stamp'] .'<br>';
echo 'meterid: ' . $row['meterid'] .'<br>';
echo 'Total active power: ' . $row['total_active_power'] .'<br>';
echo 'R phase active power: ' . $row['R_active_power'] .'<br>';
echo 'Y phase active power: ' . $row['B_active_power'] .'<br>';
echo 'B phase active power: ' . $row['B_active_power'] .'<br>';
echo 'Total Reactive power: ' . $row['total_reactive_power'] .'<br>';
echo 'R phase Reactive power: ' . $row['R_reactive_power'] .'<br>';
echo 'Y phase Reactive power: ' . $row['Y_reactive_power'] .'<br>';
echo 'B phase Reactive power: ' . $row['B_reactive_power'] .'<br>';
echo 'Average power factor: ' . $row['average_power_factor'] .'<br>';
echo 'R phase power factor: ' . $row['R_power_factor'] .'<br>';
echo 'Y phase power factor: ' . $row['Y_power_factor'] .'<br>';
echo 'B phase power factor: ' . $row['B_power_factor'] .'<br>';
echo 'Total apparent power: ' . $row['total_apparent_power'] .'<br>';
echo 'R phase apparent power: ' . $row['R_apparent_power'] .'<br>';
echo 'Y phase apparent power: ' . $row['Y_apparent_power'] .'<br>';
echo 'B phase apparent power: ' . $row['B_apparent_power'] .'<br>';
echo 'average line voltage: ' . $row['average_line_voltage'] .'<br>';
echo 'line voltage average: ' . $row['line_voltage_average'] .'<br>';
echo 'line voltage ry: ' . $row['line_voltage_ry'] .'<br>';
echo 'line voltage yb: ' . $row['line_voltage_yb'] .'<br>';
echo 'line voltage br: ' . $row['line_voltage_br'] .'<br>';
echo 'phase voltage R: ' . $row['phase_voltage_R'] .'<br>';
echo 'phase voltage V: ' . $row['phase_voltage_V'] .'<br>';
echo 'phase voltage B: ' . $row['phase_voltage_B'] .'<br>';
echo 'Total current: ' . $row['total_current'] . '<br>';
echo 'R phase current: ' . $row['R_current'] . '<br>'; 
echo 'Y phase current: ' . $row['Y_current'] . '<br>'; 
 


?>
