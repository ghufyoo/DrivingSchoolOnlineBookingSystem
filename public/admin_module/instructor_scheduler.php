<?php
include '../config.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
}
error_reporting(0);
$resul = mysqli_query($conn, "SELECT * FROM booking;");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/mdb.min.css">
    <link rel="stylesheet" href="../../styles.css">
    <title>Admin Homepage</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="padding-left: 50px;" class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <div class="mx-auto order-0 ">
                        <a class="navbar-brand mx-auto" href="#">
                            <h1>Admin</h1>
                        </a>

                </li>
            </ul>
        </div>

        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="./home.php" class="nav-link">Homepage</a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php
                    " class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table">
        <thead class="black white-text">
            <tr>
                <th scope="col">




                </th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <th style="width: 200px;">

                    <div style="padding-bottom: 25px;">
                        <button onclick="goviewinstructor()" style="height: 100px; width: 200px;">
                            View Instructor
                        </button>
                    </div>
                    <div style="padding-bottom: 25px;">
                        <button onclick="goverifybooking()" style="height: 100px; width: 200px;">
                            Verify Booking
                        </button>
                    </div>
                    <div style="padding-bottom: 25px;">
                        <button onclick="goviewparent()" style="height: 100px; width: 200px; ">
                            View Parent
                        </button>
                    </div>
                    <div style="padding-bottom: 25px;">
                        <button onclick="gomanagepayment()" style="height: 100px; width: 200px; ">
                            Manage payment
                        </button>
                    </div>
                    <div style="padding-bottom: 25px;">
                        <button onclick="goinstructorscheduler()" style="height: 100px; width: 200px; ">
                            Instructor schedule
                        </button>
                    </div>
                </th>

                <td>
                    <div style="padding-top: 5%; padding-left: 20px;">
                        <h1 style="text-align: center;">Instructor Schedule</h1>

                    </div>
                    <div style="padding-left: 100px;">
                        <table style="width: 700px;" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Children Name</th>
                                    <th scope="col">Instructor name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Class time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($resul) > 0) {
                                ?>
                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($resul)) {
                                    ?>
                                        <tr>

                                            <td><?php echo $row['childname'] ?></td>
                                            <td><?php echo $row['instructorname'] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['time'] ?></td>



                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                <?php
                                } else {
                                    echo "No result found";
                                }
                                ?>


                            </tbody>
                        </table>


                    </div>


                </td>

            </tr>





        </tbody>
    </table>



    <script src="../../js/mdb.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>