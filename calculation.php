 <?php
 $unit=0;
 $total=0;
 if(isset($_POST['s1']))
 {
     $item=$_POST['t1'];
     $quatity=$_POST['q1'];
 
 }
 echo "<table border=2>
     <tr>
     <th>ITEM</th>
     <th>UNIT PRICE</th>
     <th>QUANTITY</th>
     <th>TOTAL</th>
     </tr>";
     
     if($item=='Pen')
     {
         $unit=10;
         $total=$quatity*$unit;
     }
     elseif ($item=='Pencil')
     {
     $unit=3;
     $total=$quatity*$unit;
        }
 else {
    $unit=5;
    $total=$quatity*$unit;
}

echo "<tr>
    <td>  {$item}</td>
        <td> {$unit}</td>
            <td> {$quatity}</td>
                <td> {$total}</td>
                   </tr> ";
echo '</table>';

 ?>