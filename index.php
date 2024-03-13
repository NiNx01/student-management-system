<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['email']) {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Management | Home</title>
        <link rel="stylesheet" href="css/style.css">

        <!-- icon link -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    </head>

    <body>

        <header>
            <div class="container">
                <nav>
                    <div class="welcome-user">
                        Welcome
                        <?php echo $_SESSION['username']; ?>
                    </div>
                    <a href="__php/__logout.php" class="logout-btn">Logout</a>
                </nav>
            </div>
        </header>

        <div class="container">

            <?php

            if (isset($_GET['searchQuery'])) {

                $search_query = $_GET['searchQuery'];

            } else {
                $search_query = "";
            }
            ?>


            <main>
                <h1 class="main-heading"><a class="homepage-link" href="/webguruz/">Student Management System</a></h1>
                <div class="addnew-wrapper">
                    <?php

                    if (isset($_GET['searchQuery'])) {
                        echo '<a href="/webguruz/" class="btn new-student-btn"> <span><i class="ri-arrow-left-s-line"></i></span> Show all</a>';
                    } else {
                        echo '<a href="addNew.php" class="btn new-student-btn"> <span><i class="ri-add-circle-fill"></i></span> Add new student</a>';
                    }

                    ?>
                    <form action="index.php" class="search-form" method="get">
                        <input type="text" class="form-control" placeholder="Search by name" name="searchQuery"
                            value="<?php echo $search_query; ?>">
                        <button type="submit" class="btn search-btn">Search</button>
                    </form>
                </div>

                <?php

                if (isset($_GET['success'])) {
                    echo '
                    <div class="alert-wrapper">
                        <div class="alert alert-success">
                            Data inserted successfully.
                        </div>
                    </div>  
                ';
                }

                if (isset($_GET['updated'])) {
                    echo '
                    <div class="alert-wrapper">
                        <div class="alert alert-success">
                            Data updated successfully.
                        </div>
                    </div>  
                ';
                }

                if (isset($_GET['deleted'])) {
                    echo '
                    <div class="alert-wrapper">
                        <div class="alert alert-success">
                            Data deleted successfully.
                        </div>
                    </div>  
                ';
                }

                // echo $search_query ;
                ?>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Roll No.</th>
                                <th>Date of Birth</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php


                            require("__php/__connection.php");

                            if (isset($_GET['searchQuery'])) {

                                $search_query = $_GET['searchQuery'];

                                $select = "SELECT * FROM student_details WHERE match(student_name) against('{$search_query}')";

                                
                            } else {
                                
                                
                                $select = "SELECT * FROM student_details";
                            }
                            
                            $result = mysqli_query($conn, $select);

                            $numberOfResults = mysqli_num_rows($result);

                            if ($numberOfResults > 0) {

                                while ($output = mysqli_fetch_assoc($result)) {


                                    echo "
                                        <tr>
                                            <td>{$output['student_id']}</td>
                                            <td>{$output['student_name']}</td>
                                            <td>{$output['student_class']}</td>
                                            <td>{$output['student_rollno']}</td>
                                            <td>{$output['student_dob']}</td>
                                            <td><a href='editPage.php?id={$output['student_id']}'class='icon-btn edit-btn'><span><i class='ri-pencil-fill'></i></span></a></td>
                                            <td><a href='__php/__delete.php?id={$output['student_id']}' class='icon-btn delete-btn'><span><i class='ri-delete-bin-6-fill'></i></span></a></td>
                                        </tr>
                             
                                    ";

                                }

                            }


                            ?>


                        </tbody>

                    </table>
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