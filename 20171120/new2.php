
<?php
$date = array
  (array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo "<table border=1><tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";
$arrlength = count($date);
  for($i = 0; $i < $arrlength; $i++) {
      echo '<tr>'
      . '<td>' . $date[$i][0]  . '</td>'
      . '<td>' . $date[$i][1]  . '</td>'
      . '<td>' . $date[$i][2]  . '</td>'
      . '</tr>';
  }
echo "</table>";
echo "<br>";
echo "<table border=1><tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";
foreach ($date as $f){

    echo "<tr>";
    foreach ($f as $date){
        echo "<td>" . $date . "</td>";
    }
    echo "</tr>";

}
echo "</table>";

echo "<table border=1><tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";
$a=array(array('1' => 'Volvo','2' => 'BMW', '3' => 'saab','4'=>'Land Rover'),array('1' => '22','2' => '15', '3' => '5','4'=>'17'),array('1' => '18','2' => '13', '3' => '2','4'=>'15'));

function get($item)
{
  return $item['1'];
}
function gt($item)
{
  return $item['2'];
}
function g($item)
{
  return $item['3'];
}
function t($item)
{
  return $item['4'];
}
echo '<td>'.join('</td><td>', array_map('get', $a)). '</td>'.'<tr>'.'<td>'.join('</td><td>', array_map('gt', $a)). '</td>'.'<tr>'.'<td>'.join('</td><td>', array_map('g', $a)). '</td>'.'<tr>'.'<td>'.join('</td><td>', array_map('t', $a)). '</td>';
    echo "</table>";
?>
