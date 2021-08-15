// Payment Number Load
function peymentGetway()
{
    var getwayLoad = document.getElementById("payment_method").value;
    document.getElementById("paymentGetwayLabelLoad").innerHTML = "Type your " + getwayLoad + " Number";
    document.getElementById("paymentGetwayBoxlLoad").innerHTML = ": <input type='text' name='phone_number' id='phone_number'><span id='phone_numberErr' class='error'> *</span>";
    document.getElementById("privacyPolicyLoad").innerHTML = "<input type='checkbox' name='privacyPolicy' id='privacyPolicy'><label for='privacyPolicy'> I have read <a href='../aboutus/privacy_policy.php' target='_blank' class='link-hvr'>Privacy Policy</a></label><span id='privacyPolicyErr' class='error'> *</span>";
}
function peymentGetwayErrRemove()
{
    var payment_method = document.getElementById("payment_method").value;
    
    if (payment_method == "") 
    {
        document.getElementById("payment_methodErr").innerHTML = "";
    }
}

// Login Validation 
function createPaymentValidation() 
{
    var phone_number = document.getElementById("phone_number").value;
    var privacyPolicy = document.getElementById("privacyPolicy").value;

    if (phone_number == "") 
    {
        document.getElementById("phone_numberErr").innerHTML =
        " ⚠ Please fill the Phone Number field";
        return false;
    }
    else{
        document.getElementById("phone_numberErr").innerHTML = "";
    }
    if (privacyPolicy == "") 
    {
        document.getElementById("privacyPolicyErr").innerHTML =
        " ⚠ Please check our Privacy Policy!";
        return false;
    }
    else{
        document.getElementById("privacyPolicyErr").innerHTML = "";
    }
}

//Back Function
function goBack()
{
    window.history.back()
}

function Reload()
{
    location.reload();
}

// Login Validation 
function LoginValidation() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Username lenght must be between 2 and 20";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ only characters are allowed";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
}

//User Registration Validation by JS
function RegistrationValidation() 
{
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var cPassword = document.getElementById("cpass").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var dob = document.getElementById("dob").value;
    var usertype = document.getElementById("usertype").value;
    var genderM = document.getElementById("Male");
    var genderF = document.getElementById("Female");
    var genderO = document.getElementById("Other");
    var image = document.getElementById("image").value;
    
    if (name == "") 
    {
        document.getElementById("nameErr").innerHTML =
        " ⚠ Please fill the name field";
        return false;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }
    if (email == "") 
    {
        document.getElementById("emailErr").innerHTML =
        " ⚠ Please fill the email field";
        return false;
    }
    else{
        document.getElementById("emailErr").innerHTML = "";
    }
    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML ="";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Username lenght must be between 2 and 20";
        return false;
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ only characters are allowed";
        return false;
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
    if (password.length <= 5 || password.length > 20) 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Passwords lenght must be between  5 and 20";
        return false;
    }
    if (cPassword == "") 
    {
        document.getElementById("cpassErr").innerHTML =
        " ⚠ Please fill the Confirm Password field";
        return false;
    }
    else{
        document.getElementById("cpassErr").innerHTML = "";
    }
    if (password !== cPassword) 
    {
        document.getElementById("cpassErr").innerHTML =
        " ⚠ Password does not match the confirm password";
        return false;
    }
    if (phone == "") 
    {
        document.getElementById("phoneErr").innerHTML =
        " ⚠ Please input a Phone Number";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    if (isNaN(phone)) 
    {
        document.getElementById("phoneErr").innerHTML =
        " ⚠ Please input a valid Phone Number";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    if (address == "") 
    {
        document.getElementById("addressErr").innerHTML =
        " ⚠ Please fill the address field";
        return false;
    }
    else{
        document.getElementById("addressErr").innerHTML = "";
    }
    if (dob == "") 
    {
        document.getElementById("dobErr").innerHTML =
        " ⚠ Please select your Date of Birth";
        return false;
    }
    else{
        document.getElementById("dobErr").innerHTML = "";
    }
    if (usertype == "") 
    {
        document.getElementById("usertypeErr").innerHTML =
        " ⚠ Please a usertype";
        return false;
    }
    else{
        document.getElementById("usertypeErr").innerHTML = "";
    }
    if (genderM.checked == false && genderF.checked == false && genderO.checked == false ) 
    {
        document.getElementById("genderErr").innerHTML =
        " ⚠ Please select your gender";
        return false;
    }
    else{
        document.getElementById("genderErr").innerHTML = "";
    }
    if (image == "") 
    {
        document.getElementById("imageErr").innerHTML =
        " ⚠ Please your profile Image";
        return false;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }
}

//Product add cvalidation by javascript
function ipackAddValidation() 
{
    var name = document.getElementById("name").value;
    var speed = document.getElementById("speed").value;
    var userTypeHome = document.getElementById("Home");
    var userTypeCorporate = document.getElementById("Corporate");
    var userTypeStudent = document.getElementById("Student");
    var userTypeIPTelephony = document.getElementById("IPTelephony");
    var userTypeHost_Develope = document.getElementById("Host&Develope");
    var connTypeFiberOptics = document.getElementById("FiberOptics");
    var connTypeCat6Cable = document.getElementById("Cat6Cable");
    var connTypeWireless = document.getElementById("Wireless");
    var connTypeOther = document.getElementById("connTypeOther");
    var anyTime = document.getElementById("any");
    var dayTime = document.getElementById("day");
    var nightTime = document.getElementById("night");
    var OtherTime = document.getElementById("OtherTime");
    var support = document.getElementById("support").value;
    var included = document.getElementById("included").value;
    var price = document.getElementById("price").value;
    var displayYes = document.getElementById("yes");
    var displayNo = document.getElementById("no");
    var image = document.getElementById("image").value;

    if (name == "") 
    {
        document.getElementById("nameErr").innerHTML =
        " ⚠ Please fill the name field";
        return false;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }

    if (speed == "") 
    {
        document.getElementById("speedErr").innerHTML =
        " ⚠ Please fill the speed field";
        return false;
    }
    else{
        document.getElementById("speedErr").innerHTML = "";
    }
    if (userTypeHome.checked == false && userTypeCorporate.checked == false && 
        userTypeStudent.checked == false && userTypeIPTelephony.checked == false && 
        userTypeHost_Develope.checked == false) 
    {
        document.getElementById("usertypeErr").innerHTML =
        " ⚠ Please select a User Type";
        return false;
    }
    else{
        document.getElementById("usertypeErr").innerHTML = "";
    }
    if (connTypeFiberOptics.checked == false && connTypeCat6Cable.checked == false && 
        connTypeWireless.checked == false && connTypeOther.checked == false) 
    {
        document.getElementById("conntypeErr").innerHTML =
        " ⚠ Please select a Connection Type";
        return false;
    }
    else{
        document.getElementById("conntypeErr").innerHTML = "";
    }
    if (anyTime.checked == false && dayTime.checked == false && 
        nightTime.checked == false && OtherTime.checked == false) 
    {
        document.getElementById("timeErr").innerHTML =
        " ⚠ Please select a Using Time Period";
        return false;
    }
    else{
        document.getElementById("timeErr").innerHTML = "";
    }
    if (support == "") 
    {
        document.getElementById("supportErr").innerHTML =
        " ⚠ Please fill the support field";
        return false;
    }
    else{
        document.getElementById("supportErr").innerHTML = "";
    }
    if (included == "") 
    {
        document.getElementById("includedErr").innerHTML =
        " ⚠ Please fill the included field";
        return false;
    }
    else{
        document.getElementById("includedErr").innerHTML = "";
    }
    if (price == "") 
    {
        document.getElementById("priceErr").innerHTML =
        " ⚠ Please add a valid Price";
        return false;
    }
    else{
        document.getElementById("priceErr").innerHTML = "";
    }
    if (displayYes.checked == false && displayNo.checked == false) 
    {
        document.getElementById("displayErr").innerHTML =
        " ⚠ Want to display instantly? Select 'Y'";
        return false;
    }
    else{
        document.getElementById("displayErr").innerHTML = "";
    }
    if (image == "") 
    {
        document.getElementById("imageErr").innerHTML =
        " ⚠ Please your profile Image";
        return false;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }
}

function createPayment() 
{
    var phone = document.getElementById("phonenumber").value;
    
    // var genderM = document.getElementById("Male");
    // var genderF = document.getElementById("Female");
    // var genderO = document.getElementById("Other");

    if (phone == "") 
    {
        document.getElementById("phoneErr").innerHTML =
        " ⚠ Please fill the username field";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    // if (genderM.checked == false && genderF.checked == false && genderO.checked == false ) 
    // {
    //     document.getElementById("genderErr").innerHTML =
    //     " ⚠ Please select your gender";
    //     return false;
    // }
    // else{
    //     document.getElementById("genderErr").innerHTML = "";
    // }
}