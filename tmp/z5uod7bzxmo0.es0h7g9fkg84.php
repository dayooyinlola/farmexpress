
<!DOCTYPE HTML>
<html>

<head>

    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
    />
    <script type="application/x-javascript">
        function myfunction(){
            var fname = document.getElementById("first_name").value;
            var last_name = document.getElementById("last_name").value;
            var gender = document.getElementById("gender").value;

            var number = document.getElementById("number").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var address = document.getElementById("address").value;
            var account_number = document.getElementById("account_number").value;
            var bank = document.getElementById("bank").value;
            var farm_name = document.getElementById("farm_name").value;
            var farm_address = document.getElementById("farm_address").value;
            var farm_number = document.getElementById("farm_number").value;
            var farm_image = document.getElementById("farm_image").value;


            if(fname=== "" || last_name==="" || gender==="" || number==="" || email==="" || password==="" || confirm_password==="" || address==="" || account_number===""
                || bank==="" || farm_name==="" || farm_address==="" || farm_number==="" || farm_image===""){
                alert("Please complete form!");
                return false;
            }
            else{
                if(password !== confirm_password){
                    alert("Passwords do not match");
                    return false;
                }
                else{
                    alert("Registration successful!");
                    return true;
                }
            }

        }
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tags -->
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/registration/css/jquery-ui.css" />
    <link href="assets/registration/css/style.css" rel='stylesheet' type='text/css' />
    <!-- //Stylesheet -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
<!--background-->
<h1>Farmer's Registration Form </h1>
<div class="register-form-w3layouts">
    <!-- Form starts here -->
    <form action="<?= ($BASE) ?>/farmers_signup" method="post">
        <h3 class="sub-heading-agileits">Personal Details</h3>
        <div class="main-flex-w3ls-sectns">
            <div class="field-agileinfo-spc form-w3-agile-text1">
                <label>First Name:</label>
                <input type="text" name="first_name" id="first_name" placeholder="" required="">
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text2">
                <label>Last Name:</label>
                <input type="text" name="last_name" id="last_name" placeholder="" required="">
            </div>
        </div>
        <div class="main-flex-w3ls-sectns">
            <div class="field-agileinfo-spc form-w3-agile-text1">
                <label>Email:</label>
                <input type="email" name="email" id="email" placeholder="" required="">
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text2">
                <label>Phone Number:</label>
                <input type="text" name="number" id="number" placeholder="" required="">
            </div>
        </div>
        <div class="main-flex-w3ls-sectns">
            <!--<div class="field-agileinfo-spc form-w3-agile-text1">-->
                <!--<label>DOB:</label>-->
                <!--<input id="datepicker" name="Text" type="text" placeholder="" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"-->
                       <!--required="">-->
            <!--</div>-->
            <div class="field-agileinfo-spc form-w3-agile-text2">
                <label>Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <!--<div class="main-flex-w3ls-sectns">-->
        <!--<div class="field-agileinfo-spc form-w3-agile-text1">-->
        <!--<input type="text" name="Height" placeholder="Height (Inches)" required="">-->
        <!--</div>-->
        <!--<div class="field-agileinfo-spc form-w3-agile-text2">-->
        <!--<input type="text" name="Weight" placeholder="Weight (Pounds)" required="">-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="main-flex-w3ls-sectns">-->
        <!--<div class="field-agileinfo-spc form-w3-agile-text1">-->
        <!--<select class="form-control">-->
        <!--<option>Marital Status</option>-->
        <!--<option value="Single">Single</option>-->
        <!--<option value="Married">Married</option>-->
        <!--<option value="Divorced">Divorced</option>-->
        <!--</select>-->
        <!--</div>-->
        <!--</div>-->
        <div class="field-agileinfo-spc form-w3-agile-text">
            <label>Address:</label>
            <textarea name="address" id="address" placeholder=""></textarea>
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>Password:</label>
            <input type="password" name="password" id="password" placeholder="" required="">
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="" required="">
        </div><br>
        <h3 class="sub-heading-agileits">Farm Details</h3>
        <div class="field-agileinfo-spc form-w3-agile-text1">
            <label>Farm registered name:</label>
            <input type="text" name="farm_name" id="farm_name" placeholder="" required="">
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text">
            <label>Farm Address:</label>
            <textarea name="farm_address" id="farm_address" placeholder=""></textarea>
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>Farm contact Number:</label>
            <input type="text" name="farm_number" id="farm_number" placeholder="" required="">
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>Farm Image:</label>
            <input type="file" name="farm_image" id="farm_image" placeholder="" required="">
        </div>

        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>Account Number:</label>
            <input type="text" name="account_number" id="account_number" placeholder="" required="">
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>BVN:</label>
            <input type="text" name="bvn" id="bvn" placeholder="" required="">
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text1">
            <label>Bank</label>
            <input type="text" name="bank" id="bank" placeholder="" required="">
        </div>
        <div class="field-agileinfo-spc form-w3-agile-text2">
            <label>Would you like to become an agent?</label>
            <select class="form-control" name="agency" id="agency">
                <option></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="clear"></div>

        <input type="submit" value="Submit" onClick="return myfunction()">
        <input type="reset" value="Clear Form">
        <div class="clear"></div>
    </form>
    <!--// Form starts here -->
</div>
<!--copyright-->
<div class="copyright">
    <p>Return to the <a href="<?= ($BASE) ?>/">Home</a> page
    </p>
</div>
<!--//copyright-->
<script type="text/javascript" src="assets/registration/js/jquery-2.2.3.min.js"></script>
<!-- Calendar Js -->
<script src="assets/registration/js/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar Js -->

</body>

</html>
