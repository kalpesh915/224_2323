<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 100%;
        }
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Created AT</th>
                <th>Updated AT</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $conn = new mysqli("localhost", "root", "", "224mysql");
                if($conn->connect_error){
                    die("Connection Failed ".$conn->connect_error);
                }

            
                //$sqlQuery = "select * from students";
                //$sqlQuery = "select * from students limit 10";
                //$sqlQuery = "select * from students limit 15";
                //$sqlQuery = "select * from students limit 10 offset 10";
                //$sqlQuery = "select * from students limit 10 offset 50";
                //$sqlQuery = "select * from students limit 10, 10"; // limit offset, count
                $sqlQuery = "select * from students limit 50, 10";

                $result = $conn->query($sqlQuery);

                if($result->num_rows > 0){
                    while($row = $result->fetch_array()){
                        echo "<tr>
                            <td>$row[id]</td>
                            <td>$row[fname]</td>
                            <td>$row[lname]</td>
                            <td>$row[city]</td>
                            <td>$row[email]</td>
                            <td>$row[created_at]</td>
                            <td>$row[updated_at]</td>
                        </tr>";
                    }
                }else{
                    echo "<tr>
                        <th colspan='7'>No Data Found</th>
                    </tr>";
                }

                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>