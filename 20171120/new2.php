
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
$users = array( array('Name' => '1', 'stock' => 'Amy', 'Sold' => 'Pond'), array('Name' => '2', 'stock' => 'Rory', 'Sold' => 'Williams'), array('Name' => '3', 'stock' => 'Luke', 'Sold' => 'Skywalker'));

    for($i=0;$i<count($users);$i++)
    {
        echo "<tr>";
        echo "<td>".$users[$i]['Name']."</td>";
        echo "<td>".$users[$i]['stock']."</td>";
        echo "<td>".$users[$i]['Sold']."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>