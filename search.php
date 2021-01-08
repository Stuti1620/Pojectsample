<?php
    include("db/connection.php");
    if(isset($_POST['search']))
    {
    if($connect)
    {
    $searchlist = $_GET['try'];
    $Select1 = "select * from employee where Mobile_no like '%".$searchlist."%'";
    $result1 = mysqli_query($connect,$Select1);
    if($result1)
    {
        if(mysqli_num_rows($result1) > 0)
        {
            
            while($rows = mysqli_fetch_assoc($result1))
            {
    
            echo "<tr><td><a href='tables.php'>Emp0".$rows['Id']."</a></td>";
            echo "<td>".$rows['Name']."</td>";
            echo "<td>".$rows['Mail']."</td>";
            echo "<td>".$rows['Mobile_no']."</td>";
            echo "<td>".$rows['City']."</td>";
            echo "<td><img src='upload/".$rows['Profile_img']."' alt='Image Description' class='rounded-circle' width = '50px' height = '50px'></td>";
            
            }
            echo "</tbody>";
            echo "</table>";
        }
    }
    } 
}   
?>