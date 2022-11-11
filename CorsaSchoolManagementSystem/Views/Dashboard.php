<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Responsive dashboard</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>/Views/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1 class="animate__animated animate__rotateIn">Brand</h1>
        </div>
        <ul>
            <li>
                <img src="./images/sharp_dashboard_black_24dp.png" alt="" style="height: 40px; width: 40px;"><span style="padding: 8px;"> Dashboard</span>
            </li>
            <li>
                <img src="./images/student.jpg" alt="" style="height: 40px; width: 40px; border-radius: 10px;"><span style="padding: 10px;">Student</span></li>
            <li><img src="./images/teacher.jpg " alt=" " style="height: 40px; width: 40px; border-radius: 10px; "><span style="padding: 10px; ">Teachers</span></li>
            <li><img src="./images/sharp_school_black_24dp.png " alt=" " style="height: 40px; width: 40px; "><span style="padding: 10px; "> Schools</span></li>
            <li><img src="./images/income.jpg " alt=" " style="height: 40px; width: 40px; border-radius: 10px; "><span style="padding: 10px; "> Income </span></li>
            <li><img src="./images/sharp_settings_black_24dp.png " alt=" " style="height: 40px; width: 40px; "><span style="padding: 10px; "> Settings</span></li>
            <li><img src="./images/sharp_help_black_24dp.png " alt=" " style="height: 40px; width: 40px; "><span style="padding: 10px; "> Help</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="search">
                    <button type="button"><img src="./images/search1.png" alt="" style="width: 27px; height: 25px;"></button>
                </div>
                <div class="user">
                    <a href="# " class="btn"> Add New Student</a>
                    <img src="./images/notification.png" alt="">
                    <div class="img-case ">
                        <img src="./images/user.png" alt="" style="border-radius: 50px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="content ">
            <div class="cards ">
                <div class="card " data-tilt>
                    <div class="box ">
                        <h1>2295</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case ">
                        <img src="./images/person.jpg " alt=" " style="height: 40px; width: 40px; ">
                    </div>
                </div>
                <div class="card " data-tilt>
                    <div class="box ">
                        <h1>60</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case ">
                        <img src="./images/teacher.jpg " alt=" " style="height: 40px; width: 40px; ">
                    </div>
                </div>
                <div class="card" data-tilt>
                    <div class="box">
                        <h1>7</h1>
                        <h3>Schools</h3>
                    </div>
                    <div class="icon-case ">
                        <img src="./images/schools.png " alt="" style="height: 40px; width: 40px; ">
                    </div>
                </div>
                <div class="card" data-tilt>
                    <div class="box">
                        <h1>60000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./images/income.jpg " alt="" style="height: 40px; width: 40px; ">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payment" data-tilt>
                    <div class="title" class="animate__animated animate__bounceInRight">
                        <h3 class="animate__animated animate__bounceInRight">PAYMENTS</h3>
                        <a href="# " class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>School</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>

                        <tr>
                            <td>Richmond Andoh</td>
                            <td>Prempeh College</td>
                            <td>$20</td>
                            <td><a href="# " class="btn ">View</a></td>
                        </tr>
                        <tr>
                            <td>Richmond Andoh</td>
                            <td>Prempeh College</td>
                            <td>$20</td>
                            <td><a href="# " class="btn ">View</a></td>
                        </tr>

                        <tr>
                            <td>Richmond Andoh</td>
                            <td>Prempeh College</td>
                            <td>$20</td>
                            <td><a href="# " class="btn ">View</a></td>
                        </tr>
                        <tr>
                            <td>Richmond Andoh</td>
                            <td>Prempeh College</td>
                            <td>$20</td>
                            <td><a href="# " class="btn ">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students " data-tilt>
                    <div class="title ">
                        <h3 class="animate__animated animate__bounceInRight">New Students</h3>
                        <a href="# " class="btn ">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td><img src="./images/user.png " alt=" " style="width: 30px; height: 30px; "></td>
                            <td>Richmond Andoh</td>
                            <td><img src="./images/outline_info_black_24dp.png " style="width: 30px; height: 30px; " alt=" "></td>
                        </tr>
                        <tr>
                            <td><img src="./images/user.png " alt=" " style="width: 30px; height: 30px; "></td>
                            <td>Richmond Andoh</td>
                            <td><img src="./images/outline_info_black_24dp.png " style="width: 30px; height: 30px; " alt=" "></td>
                        </tr>
                        <tr>
                            <td><img src="./images/user.png " alt=" " style="width: 30px; height: 30px; "></td>
                            <td>Richmond Andoh</td>
                            <td><img src="./images/outline_info_black_24dp.png " style="width: 30px; height: 30px; " alt=" "></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="vanilla-tilt.js "></script>
</body>

</html>