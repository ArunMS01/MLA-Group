<?php require_once "../database.php";
session_start();

if (!isset($_SESSION['user_id']) ) {
    // If user is not logged in, redirect to login page
    header("Location: admin-login.php");
    exit();
}

?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from axilthemes.com/demo/template/keystroke/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:44:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All posts</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/plugins/slick.css"> -->
    <link rel="stylesheet" href="../assets/css/plugins/font-awesome.css">
    <!-- <link rel="stylesheet" href="../assets/css/plugins/plugins.css"> -->
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="main-content">
        <div class="wrapper">
            <!-- Sidebar  -->
            <?php include "sidebar.php" ?>

            <!-- Page Content  -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span></span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul> -->
                        </div>
                    </div>
                </nav>
                <?php
                $query = "SELECT * FROM article ORDER BY id DESC";
                $result = mysqli_query($conn, $query);


                ?>

                <div class="card" id="load-category">
                    <?php
                    if (isset($_SESSION['status'])) {
                    ?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION['status']; ?>
                        </div>
                    <?php
                    }

                    unset($_SESSION['status']);

                    ?>
                    <table class="table" id="myTable">
                        <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Post Name</th>
                                <th scope="col">Published Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = '1';
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $count ?></th>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td>
                                        <div class="icons">
                                            <form class="form-gap" method="POST" action="edit-post.php">
                                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                                <button class="badge badge-info" type="submit" name="editpost"> <i class="fa fa-pencil"></i> </button>
                                            </form>
                                            <form class="form-gap" method="POST" action="delete-post.php" onsubmit="return confirmDelete()">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                                <button class="badge badge-danger" type="submit" name="deletepost"> <i class="fa fa-trash"></i> </button>
                                            </form>
                                    </td>
                </div>
                </tr>
            <?php
                                $count++;
                            }
            ?>
            </tbody>
            </table>
            </div>

        </div>

    </div>

    </div>


    <style>
        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #702FFF;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #ffffff;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }

        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #sidebarCollapse span {
                display: none;
            }
        }
    </style>


    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

            // $("#create-category").submit(function(e) {
            //     e.preventDefault();
            //     $.ajax( {
            //         <!--insert.php calls the PHP file-->
            //         url: "admin_action.php",
            //         method: "post",
            //         cache:false,
            //         contentType:false,
            //         processData:false,
            //         data: new FormData(this),
            //         dataType: "text",

            //         success: function(strMessage) {
            //             location.reload();
            //             $("#create-category").reset();


            //         }
            //     });
            // });
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 100
            });
        });

        function confirmDelete() {

            var r = confirm("Are you sure want to delete?");

            if (r == true) {
                return true;
            } else {
                return false;
            }
        }
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <!-- <script src="../assets/js/vendor/modernizr.min.js"></script> -->
    <!-- jQuery JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/counterup.js"></script>
    <script src="../assets/js/imagesloaded.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/tilt.js"></script>
    <script src="../assets/js/anime.js"></script>
    <script src="../assets/js/tweenmax.js"></script>
    <script src="../assets/js/slipting.js"></script>
    <script src="../assets/js/scrollmagic.js"></script>
    <script src="../assets/js/addindicators.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/youtube.js"></script>
    <script src="../assets/js/countdown.js"></script>
    <script src="../assets/js/scrollup.js"></script>
    <script src="../assets/js/stickysidebar.js"></script>
    <!-- <script src="../assets/js/contactform.js"></script> -->
    <!-- Plugins JS -->
    <script src="../assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

</body>


<!-- Mirrored from axilthemes.com/demo/template/keystroke/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 15:44:26 GMT -->

</html>