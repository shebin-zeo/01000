 <?php
 $conn=new mysqli('localhost','root','');
if($conn->connect_error)
{
    die('Data base not connected');
}
 else {
    $sql='create database if not exists basic';
    if($conn->query($sql))
    {
        $conn= new mysqli('localhost','root','','basic');
       $sql="CREATE TABLE if not exists `basic`.`data` (`Number` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Price` INT NOT NULL , PRIMARY KEY (`Number`))";
       if($conn->query($sql))
       {
          if(isset($_GET['s1']))
          {
              $name=$_GET['t1'];
              $number=$_GET['t2'];
                      
            $sql="INSERT INTO `data`( `Name`, `Price`) VALUES ('[$name]','[$number]')";
            $k="ALTER TABLE `data` CHANGE `Price` `Price` DECIMAL(11) NOT NULL;";
            if($conn->query($k))
            {
                echo 'table altered';
            }
            if($conn->query($sql))
            {
                echo 'Data successfully inserted into the table <br>';
                echo "To view the table <a href='Disp.php'>Click me</a>";
            }
          }
       }
       
    }
    else
    {
        echo 'Not created';
    }
}