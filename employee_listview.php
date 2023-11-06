<?php
include 'process/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM `personal_infotbl`;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM `personal_infotbl` WHERE employee_no = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if (!$item_name) {
        $sql = "SELECT * FROM `personal_infotbl`;";
        $result = $conn->query($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex">
        <aside>
            <ul>
                <li><a href="barts admin page.php">Home</a></li>
                <li><a href="barts employee registration.php">Employee Registration</a></li>
                <li><a href="employee_listview.php">Employee Report</li>
                <li><a href="barts payroll.php">Payroll</a></li>
                <li><a href="#">Payroll Report</a></li>
                <li><a href="barts glasses.php">POS</a></li>
                <li><a href="#">POS Sales Report</a></li>
                <li><a href="barts user info.php">User Account</a></li>
                <li><a href="barts login form.php">Logout</a></li>

                <!-- Add more menu items as needed -->
            </ul>
        </aside>

        <div class="px-5">
            <h1 class="d-flex justify-content-center m-2" style="font-size:30px;">Company Employee List</h1>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">employee_no</th>
                        <th scope="col">first name</th>
                        <th scope="col">middle name</th>
                        <th scope="col">last name</th>
                        <th scope="col">address_line1</th>
                        <th scope="col">address_line2</th>
                        <th scope="col">birth_date</th>
                        <th scope="col">civil_status</th>
                        <th scope="col">contact_no</th>
                        <th scope="col">country</th>
                        <th scope="col">department</th>
                        <th scope="col">designation</th>
                        <th scope="col">email_address</th>
                        <th scope="col">employee_status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result) {
                        while ($item = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <th scope='row'>$item[id]</th>
                                    <td>$item[employee_no]</td>
                                    <td>$item[fname]</td>
                                    <td>$item[mname]</td>
                                    <td>$item[lname]</td>
                                    <td>$item[address_line1]</td>
                                    <td>$item[address_line2]</td>
                                    <td>$item[birth_date]</td>
                                    <td>$item[civil_status]</td>
                                    <td>$item[contact_no]</td>
                                    <td>$item[country]</td>
                                    <td>$item[department]</td>
                                    <td>$item[designation]</td>
                                    <td>$item[email_address]</td>
                                    <td>$item[employee_status]</td>
                                </tr>
                                ";
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>


</body>

</html>