<?php include("../partials/header.php") ?>

<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
            <div class="pe-4 fs-5 ">Add Staff</div>
            <div class="ms-auto">
                <a href="./staff.php" class="btn gc_btn">Go Back</a>
            </div>
        </div>
    </div>
    <div class="card mb-md-0 mb-3">
        <div class="card-body">
            <form id="staffForm" class=" row g-md-4 g-sm-3 g-2" >
                <div class="col-md-6 form-floating">
                    <input type="text" class=" form-control" id="name" placeholder="">
                    <label>Name</label>
                    <div class="error-message text-danger" id="name-error"></div>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="email" class="form-control"  id="email" placeholder="" />
                    <label >User Email Address</label>
                    <div class="error-message text-danger" id="email-error"></div>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="" />
                    <label for="Phone" class="form-label">User Phone Number</label>
                    <div class="error-message text-danger" id="phone-error"></div>
                </div>
                <div class="col-md-6 ">
                    <select name="agent" id="agent" class="form-control select">
                        <option value="0">Select Agent</option>
                        <option value="1">Agent 1</option>
                        <option value="2">Agent 2</option>
                        <option value="3">Gocinico</option>
                    </select>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="gst_number" id="gst_number" placeholder="" />
                    <label for="GST" class="form-label">Gst Number (optional) </label>
                </div>
                <div class="col-md-6 ">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="" />
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div>
                        <input type="checkbox" onclick="showpw()" class="mx-2 my-3">Show Password
                        <div class="error-message text-danger" id="password-error"></div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <label for="Status" class="">Status <span class="text-danger">*</span></label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                    </div>
                </div>
                <div class="col-12 form-floating">
                    <button type="submit" class="btn gc_btn mt-3" onclick="validateForm1()">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validateForm1() {
        event.preventDefault();

        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;

        var nameError = document.getElementById("name-error");
        var passwordError = document.getElementById("password-error");
        var emailError = document.getElementById("email-error");
        var phoneError = document.getElementById("phone-error");

        nameError.innerText = "";
        passwordError.innerText = "";
        emailError.innerText = "";
        phoneError.innerText = "";

        if (name.trim() === "") {
            nameError.innerText = "Please enter a name.";
            return false;
        } else if (name.length <= 3) {
            nameError.innerText = 'Enter a valid name';
            return false;
        }
        if (email.trim() === "") {
            emailError.innerText = "Please enter an email.";
            return false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            emailError.innerText = 'Enter a valid email';
            return false;
        }
        if (phone.trim() === "") {
            phoneError.innerText = "Please enter an contact number.";
            return false;
        } else if (!/^[0-9]{10}$/.test(phone)) {
            phoneError.innerText = 'Enter a valid contact number';
            return false;
        }
        
        if (password.trim() === "") {
            passwordError.innerText = "Please enter a password.";
            return false;
        } else if (password.length <= 6) {
            passwordError.innerText = 'Enter a valid password';
            return false;
        }
        
        document.getElementById("staffForm").submit();
    }
    function showpw() {
        var passwordField = document.getElementById('password');
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>


<?php include("../partials/footer.php") ?>