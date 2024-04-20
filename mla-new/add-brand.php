<?php
session_start();

// Check if session variables exist
if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
    // Session variables exist, user is logged in
    $user_id = $_SESSION['user_id'];
    $email = $_SESSION['email'];

    // You can use $user_id and $email in your code as needed
} else {
    // Session variables don't exist, user is not logged in
    // Redirect to login page or handle accordingly
    header("Location: login.php");
    exit; // Ensure script execution stops after redirection
}

include('inc/header.php') ?>




<div class="container-scroller">

    <?php include('inc/nav.php') ?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Categories</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basics">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="add-category.html">Add A Category</a></li>
                            <li class="nav-item"> <a class="nav-link" href="manage-categories.html">Manage Categories</a></li>

                        </ul>
                    </div>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Brands</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="add-brands.php">Add A Brand</a></li>
                            <li class="nav-item"> <a class="nav-link" href="manage-brands.php">Manage Brands</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="icon-columns menu-icon"></i>
                        <span class="menu-title">Products</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="add-products.php">Add A Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="manage-products.php">Manage Products</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Enqueries</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="enqueries.php">Manage Enqueries</a></li>
              </ul>
            </div>
          </li>

            </ul>
        </nav>
        <style>
            #image-preview {
                position: relative;
            }
            .img-fluid{
                height: 100px;
                width: 100px;
            }

            .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 20px;
                font-weight: bold;
                color: #fff;
                background-color: #dc3545;
                border-radius: 50%;
                width: 24px;
                height: 24px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }
        </style>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add A Brand</h4>
                                <p class="card-description">
                                    <!-- Basic form layout -->
                                </p>
                                <form id="brandForm" class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title</label>
                                        <input type="text" class="form-control" id="exampleInputTitle" oninput="generateUrlAndMetaTitle()" placeholder="Title" required>
                                        <div id="titleError" class="error-message"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputURL">URL</label>
                                        <input type="text" class="form-control" onchange="convertTourl()" id="exampleInputURL" placeholder="URL" required>
                                        <div id="urlError" class="error-message"></div>
                                    </div>
                                    <div class="form-group">
        <label for="exampleInputStatus">Status</label>
        <select class="form-control" id="exampleInputStatus" required>
            <option value="">Select Status</option>
            <option value="Published">Published</option>
            <option value="Draft">Draft</option>
            <option value="Archived">Archived</option>
        </select>
        <div id="statusError" class="error-message"></div>
    </div>


                                    <div class="form-group">
                                        <label for="exampleInputLongDescription">Description</label>
                                        <textarea class="form-control" id="editor1" placeholder="Description" required></textarea>
                                        <div id="descriptionError" class="error-message"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Brand Logo Upload</label>
                                        <input type="file" name="logo" id="logo" class="file-upload-default" accept=".png, .jpg, .jpeg, .webp">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                        <div id="image-preview" class="mt-2"></div>
                                    </div>



                                    <div>
                                        <button type="submit" class="btn btn-primary mr-2 mb-4">Submit</button>
                                        <button type="button" class="btn btn-light mb-4" id="cancelButton">Cancel</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>




                </div>
            </div>

            <script>
                function generateUrlAndMetaTitle() {
                    // Get the course name input field and its value
                    const courseNameInput = document.getElementById("exampleInputTitle");
                    const courseName = courseNameInput.value.trim();

                    // Remove special characters and convert spaces to hyphens
                    const formattedName = courseName
                        .toLowerCase() // Convert to lowercase
                        .replace(/[^a-zA-Z0-9\s-]/g, "") // Remove special characters except hyphen and spaces
                        .replace(/\s+/g, "-"); // Convert spaces to hyphens

                    // Replace consecutive hyphens with a single hyphen
                    const finalFormattedName = formattedName.replace(/-+/g, "-");

                    // Remove hyphens at the beginning and end
                    const trimmedName = finalFormattedName.replace(/^-+|-+$/g, "");

                    // Set the course URL input field
                    const courseUrlInput = document.getElementById("exampleInputURL");
                    courseUrlInput.value = trimmedName;
                }

                function convertTourl() {
                    var slugElement = document.getElementById("exampleInputURL");
                    var inputValue = slugElement.value;

                    // Remove leading and trailing spaces and hyphens
                    inputValue = inputValue.replace(/^[ -]+|[ -]+$/g, '');

                    // Replace consecutive spaces and hyphens with a single hyphen
                    inputValue = inputValue.replace(/[ -]+/g, '-');

                    // Replace underscores (_) with hyphens (-)
                    inputValue = inputValue.replace(/_/g, '-');

                    // Convert to lowercase, remove special characters except hyphens, and trim leading/trailing hyphens
                    var sanitizedValue = inputValue.toLowerCase().replace(/[^\w-]+/g, '').trim();

                    slugElement.value = sanitizedValue;
                }
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var brandForm = document.getElementById('brandForm');
                    var titleInput = document.getElementById('exampleInputTitle');
                    var urlInput = document.getElementById('exampleInputURL');
                    var descriptionInput = document.getElementById('editor1');
                    var cancelButton = document.getElementById('cancelButton');
                    var titleError = document.getElementById('titleError');
                    var urlError = document.getElementById('urlError');
                    var descriptionError = document.getElementById('descriptionError');
                    var fileInput = document.querySelector('input[type="file"]');
                    var fileUploadButton = document.querySelector('.file-upload-browse');
                    // Get the value of the status input field
                           
                                 
                                  
                    var status;

document.getElementById('exampleInputStatus').addEventListener('change', function() {
    // Get the selected value from the select element
    var statusInput = document.getElementById('exampleInputStatus');
    status = statusInput.value;
    console.log('Status:', status);
    // Append the status value to the form data
});
                    // Add event listener to the file upload button
                    fileUploadButton.addEventListener('click', function() {
                        fileInput.click(); // Trigger click event on file input field
                    });

                    brandForm.addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent default form submission

                        // Clear previous error messages
                        titleError.textContent = '';
                        urlError.textContent = '';
                        descriptionError.textContent = '';

                        // Validate form fields
                        if (!titleInput.value.trim()) {
                            titleError.textContent = 'Title is required';
                            return;
                        }

                        if (!urlInput.value.trim()) {
                            urlError.textContent = 'URL is required';
                            return;
                        }

                        if (!descriptionInput.value.trim()) {
                            descriptionError.textContent = 'Description is required';
                            return;
                        }

                        // Create a new FormData object
                        var formData = new FormData();
                        
                        // Append form fields to the FormData object
                        formData.append('title', titleInput.value);
                        formData.append('url', urlInput.value);
                        formData.append('description', descriptionInput.value);
                        formData.append('status', status);
                        formData.append('logo', fileInput.files[0]); // Append the file input
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', './codes/brand-process.php');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                // Handle successful response
                                var response = JSON.parse(xhr.responseText);
                                if (response.success) {
                                    // Show success message using SweetAlert
                                    Swal.fire({
                                        text: response.message,
                                        icon: 'success',
                                        confirmButtonText: 'Ok, got it!'
                                    }).then(function() {
                                        // Redirect or perform other actions as needed
                                        // window.location.href = 'index.php';
                                    });
                                } else {
                                    // Show error message using SweetAlert
                                    Swal.fire({
                                        text: response.message,
                                        icon: 'error',
                                        confirmButtonText: 'Ok, got it!'
                                    });
                                }
                            } else {
                                // Show error message using SweetAlert
                                Swal.fire({
                                    text: 'Error: ' + xhr.statusText,
                                    icon: 'error',
                                    confirmButtonText: 'Ok, got it!'
                                });
                            }
                        };
                        xhr.onerror = function() {
                            // Show error message using SweetAlert
                            Swal.fire({
                                text: 'Request failed',
                                icon: 'error',
                                confirmButtonText: 'Ok, got it!'
                            });
                        };
                        xhr.send(formData);
                    });

                    // Cancel button click event listener
                    cancelButton.addEventListener('click', function() {
                        // Redirect to a different page or perform other actions as needed
                    });
                });

                const fileInput = document.getElementById('logo');
                const previewContainer = document.getElementById('image-preview');

                fileInput.addEventListener('change', function() {
                    const file = this.files[0];

                    // Check if a file is selected
                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function() {
                            // Create a new image element
                            const img = document.createElement('img');
                            img.src = reader.result;
                            img.className = 'img-fluid';

                            // Create a close button
                            const closeBtn = document.createElement('span');
                            closeBtn.className = 'close-btn';
                            closeBtn.innerHTML = '&times;';
                            closeBtn.addEventListener('click', function() {
                                previewContainer.innerHTML = '';
                                fileInput.value = '';
                            });

                            // Append the image and close button to the preview container
                            previewContainer.innerHTML = '';
                            previewContainer.appendChild(img);
                            previewContainer.appendChild(closeBtn);
                        }

                        reader.readAsDataURL(file);
                    } else {
                        previewContainer.innerHTML = '';
                    }
                });
            </script>

            <?php include('inc/footer.php') ?>



            