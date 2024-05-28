<?php require_once "../database.php";
include_once('codes/users.php');
session_start();

if (!isset($_SESSION['user_id']) ) {
    // If user is not logged in, redirect to login page
    header("Location: admin-login.php");
    exit();
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All posts || Maiden Stride Admin</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/plugins/slick.css"> -->
    <link rel="stylesheet" href="../assets/css/plugins/font-awesome.css">
    <!-- <link rel="stylesheet" href="../assets/css/plugins/plugins.css"> -->
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->


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
                <div class="table-responsive">
                    <?php
                    if (isset($_SESSION['status'])) {
                    ?>
                        <h3><?php echo $_SESSION['status']; ?></h3>
                    <?php
                    }
                    unset($_SESSION['status']);
                    ?>
                    <button type="button" class="btn btn-primary float-right m-4" data-toggle="modal" data-target="#exampleModal">
                        Add User
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="codes/user-added.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <div class="form-group col">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="username" placeholder="Name">
                                            </div>
                                            <div class="form-group col">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" name="designation" placeholder="Designation">

                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <label>About</label>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>

                                        </div>

                                        <div class="form-group">
                                            <!-- Role Definition
                                            0=>User, 1=>Admin
                                            -->
                                            <label>Role</label>
                                            <select name="role_as" class="form-control" id="">
                                                <option value="0">User</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!-- Role Definition
                                            0=>User, 1=>Admin
                                            -->
                                            <label>Image</label>

                                            <input type="file" name="userimage">

                                        </div>
                                        <div class="form-group row">
                                            <!-- Role Definition
                                            0=>User, 1=>Admin
                                            -->
                                            <div class="col">
                                                <label>Social Link1 (Facebook)</label>
                                                <input name="facebook_link" type="text" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label>Social Link (Instagram)</label>
                                                <input name="instagram_link" type="text" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label>Social Link (Linkdin)</label>
                                                <input name="linkdin_link" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" name="add_user" class="btn btn-primary">Add</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $getuser = getUsers();
                            if ($getuser) {
                                $count = 1;
                                foreach ($getuser as $users) {


                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><?php echo $users['username'] ?></td>
                                        <?php if(!empty($users['userimg']))
                                        {
                                            ?>
                                        <td><img src="upload/userimg/<?php echo $users['userimg'] ?>" style="width:70px; height:70px;"></td>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <td>Not Uploaded</td>
                                            <?php
                                        }
                                        ?>
                                        <td>
                                            <form action="codes/user-added.php" method="POST">
                                                <input type="hidden" value="<?php echo $users['id'] ?>" name="userid">
                                                <button class="btn btn-danger" name="deleteuser" type="submit">Delete</button>
                                            </form>
                                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample<?php echo $users['id']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Edit
                                            </a>
                                            <div class="collapse" id="collapseExample<?php echo $users['id']?>">
                                                <div class="card card-body">
                                                <form action="codes/user-added.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <div class="form-group col">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="<?php echo $users['username'] ?>" name="username" placeholder="Name">
                                            </div>
                                            <div class="form-group col">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" value="<?php echo $users['designation'] ?>" name="designation" placeholder="Designation">

                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <label>About</label>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="5"><?php echo $users['description'] ?></textarea>

                                        </div>

                                        <div class="form-group">
                                            <!-- Role Definition
                                            0=>User, 1=>Admin
                                            -->
                                            <label>Role</label>
                                            <select name="role_as" class="form-control" id="">
                                                <option value="0">User</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!-- Role Definition
                                            0=>User, 1=>Admin
                                            -->
                                            <label>Image</label>

                                            <input type="file" name="userimage">
                                            <div>
                                            <?php if(!empty( $users['userimg'] ))
                                            {
                                                ?>
                                            <img style="width:70px; height:70px;" src="upload/userimg/<?php echo $users['userimg'] ?>">
                                            <?php
                                            }
                                            ?>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <!-- Role Definition
                                            0=>User, 1=>Admin
                                            -->
                                            <div class="col">
                                                <label>Social Link1 (Facebook)</label>
                                                <input name="facebook_link" type="text" value="<?php echo $users['facebook_link']?>" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label>Social Link (Instagram)</label>
                                                <input name="instagram_link" type="text" value="<?php echo $users['instagram_link']?>" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label>Social Link (Linkdin)</label>
                                                <input name="linkdin_link" type="text" value="<?php echo $users['linkdin_link']?>" class="form-control">
                                            </div>
                                        </div>
                                        <input type="hidden" value="<?php echo $users['id'] ?>" name="userid">
                                        <button type="submit" name="update_user" class="btn btn-primary">Update</button>
                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                    $count++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

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
    </script>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <!-- <script src="../assets/js/vendor/modernizr.min.js"></script> -->
    <!-- jQuery JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


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
    <script src="../assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

</body>

</html>