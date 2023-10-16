<?php
    require_once('barts payroll process.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Payroll</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap
.min.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript --> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 <script src="js/seripayroll_save,js?v.1"></script>

 <style>
 .payrol_form_group1 div span {
 float:left;
 width:180px;
 margin-top:5px;
 margin-left:20px;
 }
 .payrol_form_group1 div {
 float:left;
 margin-bottom:10px;
 }
 .input_box1 {
 clear:none;
 width:230px;
 }
 .payrol_form_group div span {
 float:left;
 width:180px;
 margin-top:5px;
 margin-left:20px;
 }
 .payrol_form_group div {
 float:left;
 clear:both;
 margin-bottom:10px;
 }
 .input_box {
 clear:none;
 width:230px;
 }
 .deduction_form_group div {
 float:left;
 clear:both;
 margin-bottom:10px;
 }
 .deduction_form_group div span {
 float:left;
 width:180px;
 margin-top:5px;
 margin-left:20px;
 }
 .deduction_box {
 clear:none;
 width:230px;
 }
 .page_border {
 width:100%;
 float:left;
 margin-top:40px;
 padding:40px;
 box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
 }
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
 </style>
</head>

<aside>
        <ul>
            <li><a href="barts admin page.php">Home</a></li>
            <li><a href="barts employee registration.php">Employee Registration</a></li>
            <li><a href="#">Employee Report</li>
            <li><a href="barts payroll.php">Payroll</a></li>
            <li><a href="#">Payroll Report</a></li>
            <li><a href="barts shoes.php">POS</a></li>
            <li><a href="#">POS Sales Report</a></li>
            <li><a href="barts user info.php">User Account</a></li>
            <li><a href="barts login form.php">Logout</a></li>

            <!-- Add more menu items as needed -->
        </ul>
    </aside>

<body>
<div class="container ">
<div class="page_border">
 <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; fontweight:bold;">Barts's Payroll Application</h1>
<h5 style="padding-top:10px; font-weight:bold;">EMPLOYEE BASIC INFO:</h5>
<form action="barts%20payroll.php" method="POST">
 <div class="payrol_form_group1">
     <div style="float:left; width:50%;">
         <div style="margin-left:100px; margin-top:10px;">
             <img src="login pic.png" class="imgthumbnail" style="width:250px;" alt="user profile">
             <input type="file" style="margintop:10px; text:center;" name="file">
         </div>

         <div>
             <span style="margin-top:20px;">Employee Number:</span>
             <input type="text" class="form-control input_box1" style="margintop:20px;" id="employee_no" name="employee_no" value="<?php echo $employee_no;?>" disabled>
         </div>
         <div>

             <span>Department:</span>
             <input type="text" class="formcontrol input_box1" id="department" name="department" value="<?php echo $department;?>" disabled>
             <button type="submit" name="search" class="btn btn-danger" style="padding:5px; width:100px;">SEARCH</button>                        
         </div>
     </div>
     <div class="payrol_form_group1" style="width:50%; margin:right; margintop:36px;">
         <div>
             <span>Firstname:</span>
             <input type="text" class="formcontrol input_box1" id="firstname" name="firstname" value="<?php echo $firstname;?>" disabled>
         </div>
         <div>
             <span>Middle Name:</span>
             <input type="text" class="formcontrol input_box1" id="mname" name="mname" value="<?php echo $mname;?>" disabled>
         </div>
         <div>
             <span>Surname:</span>
             <input type="text" class="formcontrol input_box1" id="surname" name="surname" value="<?php echo $surname;?>" disabled>
         </div>
         <div>
             <span>Civil Status:</span>
             <input type="text" class="formcontrol input_box1" id="civil_status" name="civil_status" value="<?php echo $civil_status;?>"disabled>
         </div>
         <div>
             <span>Designation:</span>
             <input type="text" class="formcontrol input_box1" id="designation" name="designation" value="<?php echo $designation;?>" disabled>
         </div>
         <div>
             <span>Qualified Dependents Status:</span>
             <input type="text" class="formcontrol input_box1" id="qualified_dependents" name="qualified_dependents" value="<?php echo $qualified_dependents;?>">
         </div>
         <div>
             <span>Paydate:</span>
             <input type="text" class="formcontrol input_box1" id="paydate" name="paydate" value="<?php echo $paydate;?>" disabled>
         </div>
         <div>
             <span>Employee Status:</span>
             <input type="text" class="formcontrol input_box1" id="emp_status" name="emp_status" value="<?php echo $emp_status;?>" disabled>
         </div>
     </div>

 </div>
 <div>
     <div class="payrol_form_group">
         <div style="float:left; width:50%;">
             <div>
                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">BASIC INCOME:</h5>
             </div>
             <div>
                 <span>Rate / Hour:</span>
                 <input type="text" class="formcontrol input_box" id="basic_rate_hour" name="basic_rate_hour" value="<?php echo $basic_rate_hour;?>" required>
             </div>
             <div>
                 <span>No. of Hours / Cut Off:</span>
                 <input type="text" class="formcontrol input_box" id="basic_num_hours_cutoff" name="basic_num_hours_cutoff" value="<?php echo $basic_num_hours_cutoff;?>" required>
             </div>
             <div>
                 <span>Income / Cut Off:</span>
                 <input type="text" class="formcontrol input_box" id="basic_income_cutoff" name="basic_income_cutoff" value="<?php echo $basic_income_cutoff;?>" disabled>
             </div>
             <div>

                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">HONORARIUM INCOME:</h5>
             </div>
             <div>
                 <span>Rate / Hour:</span>
                 <input type="text" class="formcontrol input_box" id="hono_rate_hour" name="hono_rate_hour" value="<?php echo $hono_rate_hour;?>" required>
             </div>
             <div>
                 <span>No. of Hours / Cut Off:</span>
                 <input type="text" class="formcontrol input_box" id="hono_num_hours_cutoff" name="hono_num_hours_cutoff" value="<?php echo $hono_num_hours_cutoff;?>" required>
             </div>
             <div>
                 <span>Income / Cut Off:</span>
                 <input type="text" class="formcontrol input_box" id="hono_income_cutoff" name="hono_income_cutoff" value="<?php echo $hono_income_cutoff;?>" disabled>
             </div>
             <div>
                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">OTHER INCOME:</h5>
             </div>
             <div>
                 <span>Rate / Hour:</span>
                 <input type="text" class="formcontrol input_box" id="other_rate_hour" name="other_rate_hour" value="<?php echo $other_rate_hour;?>" required>
             </div>
             <div>
                 <span>No. of Hours / Cut Off:</span>
                 <input type="text" class="formcontrol input_box" id="other_num_hours_cutoff" name="other_num_hours_cutoff" value="<?php echo $other_num_hours_cutoff;?>" required>
             </div>
             <div>
                 <span>Income / Cut Off:</span>
                 <input type="text" class="formcontrol input_box" id="other_income_cutoff" name="other_income_cutoff" value="<?php echo $other_income_cutoff;?>" disabled>
             </div>
             <div>

                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">SUMMARY INCOME:</h5>
             </div>
             <div>
                 <span>GROSS INCOME:</span>
                 <input type="text" class="formcontrol input_box" id="gross_income" name="gross_income" value="<?php echo $gross_income;?>" disabled>
             </div>
             <div>
                 <span>NET INCOME:</span>
                 <input type="text" class="formcontrol input_box" id="net_income" name="net_income" value="<?php echo $net_income;?>" disabled>
             </div>
         </div>
     </div>
     <div class="deduction_form_group" style="width:50%; margin:right; float:right;">
         <div>
             <div>
                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">REGULAR DEDUCTIONS:</h5>
             </div>
             <div>
                 <span>SSS Contribution:</span>
                 <input type="text" class="formcontrol deduction_box" id="sss_contri" name="sss_contri" value="<?php echo $sss_contri;?>" disabled>
             </div>
             <div>
                 <span>PhilHealth Contribution:</span>
                 <input type="text" class="formcontrol deduction_box" id="philH_contri" name="philH_contri" value="<?php echo $philH_contri;?>" disabled>
             </div>
             <div>
                 <span>Pagibig Contribution:</span>
                 <input type="text" class="formcontrol deduction_box" id="pagibig_contri" name="pagibig_contri" value="<?php echo $pagibig_contri;?>" disabled>
             </div>
             <div>
                 <span>Income Tax Contribution:</span>
                 <input type="text" class="formcontrol deduction_box" id="tax_contri" name="tax_contri" value="<?php echo $tax_contri;?>" disabled>
             </div>
             <div>
                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">OTHER DEDUCTIONS:</h5>
             </div>
             <div>
                 <span>SSS Loan:</span>
                 <input type="text" class="formcontrol deduction_box" id="sss_loan" name="sss_loan" value="<?php echo $sss_loan;?>" required>
             </div>
             <div>
                 <span>Pagibig Loan:</span>
                 <input type="text" class="formcontrol deduction_box" id="pagibig_loan" name="pagibig_loan" value="<?php echo $pagibig_loan;?>" required>
             </div>
             <div>
                 <span>Faculty Savings Deposit:</span>
                 <input type="text" class="formcontrol deduction_box" id="fs_deposit" name="fs_deposit" value="<?php echo $fs_deposit;?>" required>
             </div>
             <div>
                 <span>Faculty Savings Loan:</span>
                 <input type="text" class="formcontrol deduction_box" id="fs_loan" name="fs_loan" value="<?php echo $fs_loan;?>" required>
             </div>
             <div>
                 <span>Salary Loan:</span>
                 <input type="text" class="formcontrol deduction_box" id="salary_loan" name="salary_loan" value="<?php echo $salary_loan;?>" required>
             </div>
             <div>
                 <span>Other Loans:</span>
                 <input type="text" class="formcontrol deduction_box" id="other_loans" name="other_loans" value="<?php echo $other_loans;?>" required>
             </div>
             <div>
                 <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">DEDUCTION SUMMARY:</h5>
             </div>
             <div>
                 <span>Total Deductions:</span>
                 <input type="text" class="formcontrol deduction_box" id="total_deduct" name="total_deduct" value="<?php echo $total_deduct?>" disabled>
             </div>
             <div>
                 <div>
                     <button type="submit" name="calculate_gross_income" class="btn btn-primary" style="padding:5px; margin-bottom:5px;">CALCULATE GROSS INCOME</button>
                     <button type="submit" name="calculate_net_income" class="btn btn-primary" style="padding:5px; margin-bottom:5px;">CALCULATE NET INCOME</button>
                     <button type="submit" name="new" class="btn btn-warning" style="padding:5px; margin-bottom:5px; width:100px;">NEW</button>
                     <button type="submit" name="save" class="btn btn-info" style="padding:5px;">SAVE</button>
                     <button type="submit" name="print_payslip" class="btn btn-info" style="padding:5px; width:117px;">PRINT PAYSLIP</button>
                     <button type="submit" name="cancel" class="btn btn-danger" style="padding:5px; width:100px;">CANCEL</button>
                     <button type="submit" name="close" class="btn btn-dark" style="padding:5px; width:100px;">CLOSE</button>
                 </div>
             </div>
         </div>
     </div>
 </div>
</form>
</div>
</div>
</body>
</html>