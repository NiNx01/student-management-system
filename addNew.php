<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['email']) {
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Management | Add</title>
        <link rel="stylesheet" href="css/style.css">

        <!-- icon link -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    </head>

    <body>

        <header>
            <div class="container">
                <nav>
                    <div class="welcome-user">
                        Welcome user
                    </div>
                    <a href="" class="logout-btn">Logout</a>
                </nav>
            </div>
        </header>

        <div class="container">
            <main>
                <h1 class="main-heading"><a class="homepage-link" href="/webguruz/">Student Management System</a></h1>
                <div class="addnew-wrapper">
                    <a href="index.php" class="btn go-back-btn"> <span><i class="ri-arrow-left-s-line"></i></span>
                        Cancel</a>

                </div>

                <div class="student-form-wrapper">
                    <h2 class="form-title">Add student</h2>
                    <form action="__php/__addStudent.php" method="post">

                        <div class="form-group-wrapper">
                            <div class="form-group student-name">
                                <label for="name" class="form-label">Student Name</label>
                                <input type="text" id="name" name="studentName" class="form-control"
                                    placeholder="Student name">
                            </div>

                            <div class="form-group student-class">
                                <label for="class" class="form-label">Class</label>
                                <input type="text" id="class" name="studentClass" class="form-control" placeholder="10th">
                            </div>
                        </div>

                        <div class="form-group-wrapper">
                            <div class="form-group student-rollno">
                                <label for="rollno" class="form-label">Roll No.</label>
                                <input type="text" id="rollno" name="studentRollno" class="form-control" placeholder="123">
                            </div>

                            <div class="form-group student-dob">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" id="dob" name="studentDob" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn new-student-btn" name="addStudentBtn"
                                value="addStudent"><span><i class="ri-add-circle-fill"></i></span>Add student</button>
                        </div>


                    </form>
                </div>

            </main>
        </div>
        <footer>
            Copyright © 2024 | Developed By <strong>Parampreet Singh</strong> | All Rights Reserved
        </footer>

    </body>

    </html>

    <?php
} else {

    header("location:/webguruz/loginPage.php");

}

?>