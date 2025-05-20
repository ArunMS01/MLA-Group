<?php include('header.php') ?>


<style>
    .page-heading-sec {
        background-image: url(https://finixpa-react.netlify.app/img/background/page_hd.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        padding-top: 130px;
        position: relative;
        background-size: cover
    }

    .images-overlay {
        background-color: #0f1919b3;
        height: 100%;
        position: absolute;
        width: 100%;
        top: 0;
    }

    .page-breadcrumb-inner {
        text-align: right
    }

    .page-breadcrumb {
        display: inline-block;
        background: #f55b14;
        padding: 12px 32px;
        position: relative
    }

    .page-breadcrumb:before {
        width: 40px;
        height: 40px;
        background: #f55b14;
        position: absolute;
        content: "";
        left: 0;
        right: 0;
        text-align: center;
        margin: 0 auto;
        transform: rotate(45deg);
        bottom: -10px;
        z-index: -1
    }

    .page-heading h1 {
        font-size: 40px;
        text-align: left;
        text-transform: capitalize;
        font-weight: 700;
        color: #fff;
        position: relative
    }

    .breadcrumb-list {
        text-align: left
    }

    .breadcrumb-list li {
        display: inline-block;
        position: relative;
        padding: 0 14px
    }

    .breadcrumb-list li:first-child {
        padding-left: 0
    }

    .breadcrumb-list li a {
        font-weight: 600;
        text-transform: capitalize;
        color: #fff
    }

    .breadcrumb-list li:last-child a {
        color: #0f1934
    }

    .breadcrumb-list li:before {
        content: "";
        position: absolute;
        right: -4px;
        font-size: 16px;
        font-weight: 600;
        background: #f4f4f4;
        height: 10px;
        width: 2px;
        top: 10px
    }

    .breadcrumb-list li:last-child:before {
        display: none
    }

    .content-innerbanner {
        padding-top: 40px;
        padding-bottom: 30px;
    }
</style>



<section class="content-innerbanner overflow-hidden " style="background-color:rgb(251 231 215);">
    <div class="container">
        <div class="row about-style1 align-items-center zoom-in-up visible">
            <div class="col-lg-12 text-center">
                <div class="position-relative">
                    <div class="about-thumb-1 ">

                        <div class="section-head">
                            <h2 class="title">404 </h2>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>




<style>
    .contact-info {
        display: inline-block;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .contact-info-icon {
        margin-bottom: 15px;
    }

    .contact-info-item {
        height: 289px;
        background: #071c34;
        padding: 30px 0px;
    }

    .contact-page-sec .contact-page-form h2 {
        color: #071c34;
        text-transform: capitalize;
        font-size: 22px;
        font-weight: 700;
    }

    .contact-page-form .col-md-6.col-sm-6.col-xs-12 {
        padding-left: 0;
    }

    .contact-page-form.contact-form input {
        margin-bottom: 5px;
    }

    .contact-page-form.contact-form textarea {
        height: 110px;
    }

    .contact-page-form.contact-form input[type="submit"] {
        background: #071c34;
        width: 150px;
        border-color: #071c34;
    }

    .contact-info-icon i {
        font-size: 48px;
        color: #fda40b;
    }

    .contact-info-text p {
        margin-bottom: 0px;
    }

    .contact-info-text h2 {
        color: #fff;
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .contact-info-text span {
        color: #999999;
        font-size: 16px;

        display: inline-block;
        width: 100%;
    }

    .contact-page-form input {
        background: #f9f9f9 none repeat scroll 0 0;
        border: 1px solid #f9f9f9;
        margin-bottom: 20px;
        padding: 12px 16px;
        width: 100%;
        border-radius: 4px;
    }

    .contact-page-form .message-input {
        display: inline-block;
        width: 100%;
        padding-left: 0;
    }

    .single-input-field textarea {
        background: #f9f9f9 none repeat scroll 0 0;
        border: 1px solid #f9f9f9;
        width: 100%;
        height: 120px;
        padding: 12px 16px;
        border-radius: 4px;
    }

    .single-input-fieldsbtn {
        padding: 0;
    }

    .single-input-fieldsbtn input[type="submit"] {
        background: #fda40b none repeat scroll 0 0;
        color: #fff;
        display: inline-block;
        font-weight: 600;
        padding: 10px 0;
        text-transform: capitalize;
        width: 150px;
        margin-top: 20px;
        font-size: 16px;
    }

    .single-input-fieldsbtn input[type="submit"]:hover {
        background: #071c34;
        transition: all 0.4s ease-in-out 0s;
        border-color: #071c34
    }

    .single-input-field h4 {
        color: #464646;
        text-transform: capitalize;
        font-size: 14px;
    }

    .contact-page-form {
        display: inline-block;
        width: 100%;
        /* margin-top: 30px; */
    }

    /* .contact-page-map {
        margin-top: 36px;
    } */



    .contact-page-form form {
        padding: 20px 15px 0;
    }
</style>
<section class="contact-page-sec content-inner">
    <div class="container">

        <div class="row">
            <!-- Add a div for the custom loading animation -->
            <div id="loadingOverlay" class="loading-overlay">
                <div class="loading-spinner"></div>
            </div>

            <div class="col-md-12 ">
                <div class="contact-page-form text-center">
                    <h2>Page Not Found</h2>
                    <a href="/" class="btn btn-secondary ">Go to home</a>

                </div>
            </div>

        </div>
</section>
<style>
    .contact-card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        background-color: #f3ae7a4d;
        margin-bottom: 20px;
    }

    .contact-section {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 15px;
        background-color: #f9f9f9;
    }

    .contact-section h4 {
        margin-top: 0;
    }

    .contact-section p {
        margin: 0;
    }

    .contact-section a {
        color: #007bff;
        text-decoration: none;
    }

    .contact-section a:hover {
        text-decoration: underline;
    }

    .mapsection {
        padding-bottom: 40px;
    }
</style>



<style>
    /* CSS for the loading overlay */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7);
        z-index: 9999;
        display: none;
        /* Initially hidden */
    }

    .loading-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        border: 3px solid #f3f3f3;
        border-radius: 50%;
        border-top: 3px solid #3498db;
        width: 30px;
        height: 30px;
        -webkit-animation: spin 1s linear infinite;
        /* Safari */
        animation: spin 1s linear infinite;
    }

    /* Spin animation */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<style>
    /* CSS for the success message */
    .success-message {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }
</style>
<script>
    // Function to validate email address
    function isValidEmail(email) {
        return /\S+@\S+\.\S+/.test(email);
    }

    // Function to validate phone number
    function isValidPhoneNumber(phone) {
        return /^\+?\d+$/.test(phone);
    }

    // Function to validate form fields
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var company = document.getElementById("company").value;
        var address = document.getElementById("address").value;
        var city = document.getElementById("city").value;
        var zip = document.getElementById("zip").value;
        var country = document.getElementById("country").value;
        var message = document.getElementById("message").value;

        var isValid = true;

        if (name.trim() === "") {
            document.getElementById("nameError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("nameError").style.display = "none";
        }

        if (email.trim() === "" || !isValidEmail(email)) {
            document.getElementById("emailError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("emailError").style.display = "none";
        }

        if (phone.trim() !== "" && !isValidPhoneNumber(phone)) {
            document.getElementById("phoneError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("phoneError").style.display = "none";
        }

        if (company.trim() === "") {
            document.getElementById("companyError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("companyError").style.display = "none";
        }

        if (address.trim() === "") {
            document.getElementById("addressError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("addressError").style.display = "none";
        }

        if (city.trim() === "") {
            document.getElementById("cityError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("cityError").style.display = "none";
        }

        if (zip.trim() === "") {
            document.getElementById("zipError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("zipError").style.display = "none";
        }

        if (country.trim() === "") {
            document.getElementById("countryError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("countryError").style.display = "none";
        }

        if (message.trim() === "") {
            document.getElementById("messageError").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("messageError").style.display = "none";
        }

        return isValid;
    }

    // Function to handle form submission
    function submitForm(event) {
        event.preventDefault();

        if (!validateForm()) {
            return;
        }

        // Disable the submit button
        var submitButton = document.querySelector("input[type='submit']");
        submitButton.value = "Submitting...";
        submitButton.disabled = true;

        // Show the loading overlay (if exists)
        var loadingOverlay = document.getElementById("loadingOverlay");
        if (loadingOverlay) {
            loadingOverlay.style.display = "block";
        }

        var formData = new FormData(document.getElementById("contactForm"));

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "contact-mail.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Form submitted successfully
                        showSuccessMessage(); // Call function to show success message
                        document.getElementById("contactForm").reset();
                    } else {
                        // Error submitting form
                        alert("Error submitting the form.");
                    }
                } else {
                    // Error in AJAX request
                    alert("Error in AJAX request.");
                }

                // Re-enable the submit button
                submitButton.value = "Send Now";
                submitButton.disabled = false;

                // Hide the loading overlay
                if (loadingOverlay) {
                    loadingOverlay.style.display = "none";
                }
            }
        };
        xhr.send(formData);
    }

    document.getElementById("contactForm").addEventListener("submit", submitForm);
</script>

<script>
    // Function to show success message
    function showSuccessMessage() {
        var successMessage = document.createElement("div");
        successMessage.classList.add("success-message");
        successMessage.textContent = "Form submitted successfully!";
        document.body.appendChild(successMessage);

        // Automatically remove the success message after 5 seconds
        setTimeout(function() {
            successMessage.parentNode.removeChild(successMessage);
        }, 5000);
    }


    // Add event listener for form submission
    document.getElementById("contactForm").addEventListener("submit", submitForm);
</script>
<?php include('footer.php') ?>