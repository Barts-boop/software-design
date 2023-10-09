<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Information</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/emp_info_save.js?v.3"></script>
    <link rel="stylesheet" href="css/barts_employee_registration.css?v.3">
</head>
<body>

<style>
        /* Global styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image file */
            background-size: cover; /* This property ensures the background image covers the whole body */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            height: 150vh;
        }

        /* Header styles */
        header {
            background-color:  ;
            color: #333;
            padding: 20px;
            text-align: center;
        }

        /* Sidebar styles */
        aside {
            background-color: #333;
            color: #fff;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside li {
            padding: 20px;
        }

        aside a {
            color: #fff;
            text-decoration: none;
        }

        /* Main content styles */
        main {
            margin-left: 250px;
            padding: 20px;
            background-color: #f2f2f2; /* Background color for the content area */
        }

        /* Footer styles */
        footer {
            background-color: ;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

<aside>
        <ul>
            <li><a href="barts admin page.php">Home</a></li>
            <li><a href="barts employee registration.php">Employee Registration</a></li>
            <li><a href="#">Employee Report</li>
            <li><a href="barts payroll.php">Payroll</a></li>
            <li><a href="#">Payroll Report</a></li>
            <li><a href="barts glasses.php">POS</a></li>
            <li><a href="#">POS Sales Report</a></li>
            <li><a href="barts user info.php">User Account</a></li>
            <li><a href="barts login form.php">Logout</a></li>

            <!-- Add more menu items as needed -->
        </ul>
    </aside>

<div class="container">
<div class="page_border">
<form id="pic-upload" class="a-form" enctype="multipart/form-data"method="post" width='840'>
<h1 style="text-align:center; margin-bottom:30px; font-size:47px;
font-family:Algerian; color:black"><b>User Account Information</b></h1>
<div class="a-form-group mt-3" style="float:left; clear:block; width:20%;" >
<div id="pic-box" style='width:170px; height:150px; overflow:hidden; margin-top:7px; margin-left:5px; background:none; border:thin solid #d3d3d3'></div>
<input type="file" style="margin-top:10px; textalign:center;" id="uploadfile" name="uploadfile" value=""/>
</div>
</form>
<form id="form_employee_registration_save" class="a-form" action="" method="post" width='840'>
<div class="a-form-group mt-3" width='480'>
<div class="a-fields-group mt-0">
<div class="form-row">
<div class="form-group col">
<label for="fname" class="mb-0 controllabel">First Name</label>
<input type="text" class="form-control mt-0" name="fname" id="fname" value="">
</div>
<div class="form-group col-3">
<label for="mname" class="mb-0">Middle Name</label>
<input type="text" class="form-control mt-0" name="mname" id="mname">
</div>
<div class="form-group col">
<label for="lname" class="mb-0 controllabel">Last Name</label>
<input type="text" class="form-control mt-0" name="lname" id="lname" value="">
</div>
<div class="form-group col-2">
<label for="suffix" class="mb-0">Suffix</label>
<input type="text" class="form-control mt-0" name="suffix" id="suffix">
</div>
</div>
<div class="form-row">
<div class="form-group col-4">
<label for="bday" class="mb-0 control-label">Date of Birth</label>
<input type="date" class="form-control mt-0" name="birth_date" id="birth_date">
</div>
<div class="form-group col-3">
<label for="gender" class="mb-0 controllabel">Gender</label>
<select class="form-control" name="gender" id="gender">
<option value=''>-- select one --</option>
<option value="M">Male</option>
<option value="F">Female</option>
</select>
</div>
<div class="form-group col">
<label for="nationality" class="mb-0 controllabel">Nationality</label>
<select class="form-control mt-0" name="nationality" id="nationality">
<option value="">-- select one --</option>
<option value="Afghan">Afghan</option>
<option value="Albanian">Albanian</option>
<option value="Algerian">Algerian</option>
<option value="American">American</option>
<option value="Andorran">Andorran</option>
<option value="Angolan">Angolan</option>
<option value="Antiguans">Antiguans</option>
<option value="Argentinean">Argentinean</option>
<option value="Armenian">Armenian</option>
<option value="Australian">Australian</option>
<option value="Austrian">Austrian</option>
<option value="Azerbaijani">Azerbaijani</option>
<option value="Bahamian">Bahamian</option>
<option value="Bahraini">Bahraini</option>
<option value="Bangladeshi">Bangladeshi</option>
<option value="Barbadian">Barbadian</option>
<option value="Barbudans">Barbudans</option>
<option value="Batswana">Batswana</option>
<option value="Belarusian">Belarusian</option>
<option value="Belgian">Belgian</option>
<option value="Belizean">Belizean</option>
<option value="Beninese">Beninese</option>
<option value="Bhutanese">Bhutanese</option>
<option value="Bolivian">Bolivian</option>
<option value="Bosnian">Bosnian</option>
<option value="Brazilian">Brazilian</option>
<option value="British">British</option>
<option value="Bruneian">Bruneian</option>
<option value="Bulgarian">Bulgarian</option>
<option value="Burkinabe">Burkinabe</option>
<option value="Burmese">Burmese</option>
<option value="Burundian">Burundian</option>
<option value="Cambodian">Cambodian</option>
<option value="Cameroonian">Cameroonian</option>
<option value="Canadian">Canadian</option>
<option value="Cape verdean">Cape Verdean</option>
<option value="Central african">Central African</option>
<option value="Chadian">Chadian</option>
<option value="Chilean">Chilean</option>
<option value="Chinese">Chinese</option>
<option value="Colombian">Colombian</option>
<option value="Comoran">Comoran</option>
<option value="Congolese">Congolese</option>
<option value="Costa rican">Costa Rican</option>
<option value="Croatian">Croatian</option>
<option value="Cuban">Cuban</option>
<option value="Cypriot">Cypriot</option>
<option value="Czech">Czech</option>
<option value="Danish">Danish</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominican">Dominican</option>
<option value="Dutch">Dutch</option>
<option value="East timorese">East Timorese</option>
<option value="Ecuadorean">Ecuadorean</option>
<option value="Egyptian">Egyptian</option>
<option value="Emirian">Emirian</option>
<option value="Equatorial guinean">Equatorial Guinean</option>
<option value="Eritrean">Eritrean</option>
<option value="Estonian">Estonian</option>
<option value="Ethiopian">Ethiopian</option>
<option value="Fijian">Fijian</option>
<option selected value="Filipino">Filipino</option>
<option value="Finnish">Finnish</option>
<option value="French">French</option>
<option value="Gabonese">Gabonese</option>
<option value="Gambian">Gambian</option>
<option value="Georgian">Georgian</option>
<option value="German">German</option>
<option value="Ghanaian">Ghanaian</option>
<option value="Greek">Greek</option>
<option value="Grenadian">Grenadian</option>
<option value="Guatemalan">Guatemalan</option>
<option value="Guinea-Bissauan">GuineaBissauan</option>
<option value="Guinean">Guinean</option>
<option value="Guyanese">Guyanese</option>
<option value="Haitian">Haitian</option>
<option value="Herzegovinian">Herzegovinian</option>
<option value="Honduran">Honduran</option>
<option value="Hungarian">Hungarian</option>
<option value="Icelander">Icelander</option>
<option value="Indian">Indian</option>
<option value="Indonesian">Indonesian</option>
<option value="Iranian">Iranian</option>
<option value="Iraqi">Iraqi</option>
<option value="Irish">Irish</option>
<option value="Israeli">Israeli</option>
<option value="Italian">Italian</option>
<option value="Ivorian">Ivorian</option>
<option value="Jamaican">Jamaican</option>
<option value="Japanese">Japanese</option>
<option value="Jordanian">Jordanian</option>
<option value="Kazakhstani">Kazakhstani</option>
<option value="Kenyan">Kenyan</option>
<option value="Kittian and Nevisian">Kittian and Nevisian</option>
<option value="Kuwaiti">Kuwaiti</option>
<option value="Kyrgyz">Kyrgyz</option>
<option value="Laotian">Laotian</option>
<option value="Latvian">Latvian</option>
<option value="Lebanese">Lebanese</option>
<option value="Liberian">Liberian</option>
<option value="Libyan">Libyan</option>
<option value="Liechtensteiner">Liechtensteiner</option>
<option value="Lithuanian">Lithuanian</option>
<option value="Luxembourger">Luxembourger</option>
<option value="Macedonian">Macedonian</option>
<option value="Malagasy">Malagasy</option>
<option value="Malawian">Malawian</option>
<option value="Malaysian">Malaysian</option>
<option value="Maldivan">Maldivan</option>
<option value="Malian">Malian</option>
<option value="Maltese">Maltese</option>
<option value="Marshallese">Marshallese</option>
<option value="Mauritanian">Mauritanian</option>
<option value="Mauritian">Mauritian</option>
<option value="Mexican">Mexican</option>
<option value="Micronesian">Micronesian</option>
<option value="Moldovan">Moldovan</option>
<option value="Monacan">Monacan</option>
<option value="Mongolian">Mongolian</option>
<option value="Moroccan">Moroccan</option>
<option value="Mosotho">Mosotho</option>
<option value="Motswana">Motswana</option>
<option value="Mozambican">Mozambican</option>
<option value="Namibian">Namibian</option>
<option value="Nauruan">Nauruan</option>
<option value="Nepalese">Nepalese</option>
<option value="New zealander">New Zealander</option>
<option value="Ni-Vanuatu">Ni-Vanuatu</option>
<option value="Nicaraguan">Nicaraguan</option>
<option value="Nigerien">Nigerien</option>
<option value="North Korean">North Korean</option>
<option value="Northern Irish">Northern Irish</option>
<option value="Norwegian">Norwegian</option>
<option value="Omani">Omani</option>
<option value="Pakistani">Pakistani</option>
<option value="Palauan">Palauan</option>
<option value="Panamanian">Panamanian</option>
<option value="Papua New Guinean">Papua New Guinean</option>
<option value="Paraguayan">Paraguayan</option>
<option value="Peruvian">Peruvian</option>
<option value="Polish">Polish</option>
<option value="Portuguese">Portuguese</option>
<option value="Qatari">Qatari</option>
<option value="Romanian">Romanian</option>
<option value="Russian">Russian</option>
<option value="Rwandan">Rwandan</option>
<option value="Saint Lucian">Saint Lucian</option>
<option value="Salvadoran">Salvadoran</option>
<option value="Samoan">Samoan</option>
<option value="San Marinese">San Marinese</option>
<option value="Sao Tomean">Sao Tomean</option>
<option value="Saudi">Saudi</option>
<option value="Scottish">Scottish</option>
<option value="Senegalese">Senegalese</option>
<option value="Serbian">Serbian</option>
<option value="Seychellois">Seychellois</option>
<option value="Sierra Leonean">Sierra Leonean</option>
<option value="Singaporean">Singaporean</option>
<option value="Slovakian">Slovakian</option>
<option value="Slovenian">Slovenian</option>
<option value="Solomon Islander">Solomon Islander</option>
<option value="Somali">Somali</option>
<option value="South African">South African</option>
<option value="South Korean">South Korean</option>
<option value="Spanish">Spanish</option>
<option value="Sri Lankan">Sri Lankan</option>
<option value="Sudanese">Sudanese</option>
<option value="Surinamer">Surinamer</option>
<option value="Swazi">Swazi</option>
<option value="Swedish">Swedish</option>
<option value="Swiss">Swiss</option>
<option value="Syrian">Syrian</option>
<option value="Taiwanese">Taiwanese</option>
<option value="Tajik">Tajik</option>
<option value="Tanzanian">Tanzanian</option>
<option value="Thai">Thai</option>
<option value="Togolese">Togolese</option>
<option value="Tongan">Tongan</option>
<option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
<option value="Tunisian">Tunisian</option>
<option value="Turkish">Turkish</option>
<option value="Tuvaluan">Tuvaluan</option>
<option value="Ugandan">Ugandan</option>
<option value="Ukrainian">Ukrainian</option>
<option value="Uruguayan">Uruguayan</option>
<option value="Uzbekistani">Uzbekistani</option>
<option value="Venezuelan">Venezuelan</option>
<option value="Vietnamese">Vietnamese</option>
<option value="Welsh">Welsh</option>
<option value="Yemenite">Yemenite</option>
<option value="Zambian">Zambian</option>
<option value="Zimbabwean">Zimbabwean</option>
</select>
</div>
<div class="form-group col-3">
<label for="civil_status" class="mb-0 controllabel">Civil Status</label>
<select class="form-control" name="civil_status" id="civil_status">
<option value=''>-- select one --</option>
<option value="M">Married</option>
<option value="S">Single</option>
<option value="LS">Separated</option>
<option value="W">Widow</option>
</select>
</div>
</div>
</div>
<div class="a-fields-group mt-0">
<div class="form-row">
<div class="form-group col">
<label for="fname" class="mb-0 controllabel">Department</label>
<input type="text" class="form-control mt-0" name="department" id="department" value="">
</div>
<div class="form-group col-3">
<label for="mname" class="mb-0">Designation</label>
<input type="text" class="form-control mt-0" name="designation" id="designation">
</div>
<div class="form-group col-3">
<label for="qualified_dependent_status" class="mb-0 control-label">Qualified Dep. Status</label>
<select class="form-control" name="qualified_dependent_status" id="qualified_dependent_status">
<option value=''>-- select one --</option>
<option value="Z">Z or Single</option>
<option value="S or ME">S or ME</option>
<option value="S1 or ME1">S1 or ME1</option>
<option value="S2 or ME2">S2 or ME2</option>
<option value="S3 or ME3">S3 or ME3</option>
<option value="S4 or ME4">S4 or ME4</option>
</select>
</div>
</div>
<div class="form-row">
<div class="form-group col">
<label for="fname" class="mb-0 control-label">Employee Status</label>
<input type="text" class="form-control mt-0" name="employee_status" id="employee_status" value="">
</div>
<div class="form-row">
<div class="form-group col-4">
<label for="pay_day" class="mb-0 controllabel">Paydate</label>
<input type="date" class="form-control mt-0" name="pay_date" id="pay_date">
</div>
<div class="form-group col">
<label for="employee_number" class="mb-0 controllabel">Employee Number</label>
<input type="text" class="form-control mt-0" name="employee_number" id="employee_number" value="">
</div>
</div>
</div>
</div>