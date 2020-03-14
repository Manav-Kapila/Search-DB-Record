
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>login page</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
	</head>
    <body>
        <form action="" method="POST">
        <div class="myForm">
            <label>Filter Condition</label>
            <input type="text" placeholder= " type a value to filter" name="condition">
            <br>
            <input type="submit" class="btn-button" name="search" value="apply filter">
        </div>
        <table style="margin: auto;">
            <tr>
                <th>Regd.No.</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Sem</th>
                <th>Marks</th>
            </tr>
            <?php
                include("connection.php");

                if(isset($_POST['search']))
                {
                    $condition=$_POST['condition'];
                    $query="SELECT * FROM students WHERE CONCAT (regdNo , fullName , course , sem , marks) LIKE '%".$condition."%' ";
                    $data=mysqli_query($conn,$query);
                    $total=mysqli_num_rows($data);

                    if($total !=0)
                    {
                        while($result=mysqli_fetch_assoc($data))
                        {
                            echo "<tr>
                                    <td>".$result['regdNo']."</td>
                                    <td>".$result['fullName']."</td>
                                    <td>".$result['course']."</td>
                                    <td>".$result['sem']."</td>
                                    <td>".$result['marks']."</td>
                                 </tr>";
                        }


                    }
                    else
                    {
                        echo "<h3 style='color:red;text-align: center;'>no record found</h3>";
                        echo "<tr>
                                    <td>Null</td>
                                    <td>Null</td>
                                    <td>Null</td>
                                    <td>Null</td>
                                    <td>Null</td>
                                 </tr>";
                    }
                }
            ?>
        </table>
        </form>
    </body>
    </html>