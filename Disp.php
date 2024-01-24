 <?php
 $conn=new mysqli('localhost','root','','basic');
 if($conn->connect_error)
 {
     die('Connection have error');
 }
 else {
    $sql="SELECT * FROM `data`";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        echo "<table border='2'
            <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Price</th>
            </tr>";
        while($row=$result->fetch_assoc())
        {
            echo "
                <tr>
                <td>{$row['Number']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Price']}</td></tr>"
                ;
        }
        echo '</table>';
            
    }
 else {
        echo 'Insert some values';    
    }
}
 