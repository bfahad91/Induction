<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>



</html>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

</style>

<body>

    <form id="regForm" method="POST" action="{{ route('personal.submit') }}" enctype="multipart/form-data">
        @csrf
        <h1>OGRA Registration Form</h1>
        <div class="form-group">
            <label>Name of Position applied for:</label>
            <span class="form-control"><b>{{ $advertisement->title }} </b></span> <br>
            {{-- <input type="text" class="form-control" data-error="You must have a name." name="fullName" placeholder="fullName" required> --}}

            <!-- Error -->
            <div class="help-block with-errors"></div>
        </div>
        <!-- One "tab" for each step in the form: -->
        <div class="tab row" style="display: flex">
            <h1>Personal Information:</h1>
            <input style="width:150px" name="advertisement_id" value="{{ $advertisement->id }}" type="hidden">

            <div class="form-group col-md-12 row">
                <div class="form-group col-md-3">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" data-error="You must have a name." name="fullName" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-4">
                    <label>picture:</label>
                <input type="file" class="form-control" data-error="You must have a name." name="image" placeholder="" required>
                </div>
                <div class="form-group col-md-4">
                    <label>picture:</label>
                    <img src="" alt="">
                </div>

                <div class="form-group col-md-3">
                    <label>Father Name:</label>
                    <input type="text" class="form-control" data-error="You must have a name." name="fatherName" id="fatherName" placeholder="" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Date of Birth:</label>
                    <input type="date" class="form-control" name="dob" data-error="You must have a name." id="dob" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Age:</label>
                    <input type="text" class="form-control" name="age" data-error="You must have a name." id="age" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Birth Place:</label>
                    <input type="text" class="form-control" name="birthPlace" data-error="You must have a name." id="birthPlace" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Marital Status:</label>
                    <select class="form-control" name="maritalStatus" id="">
                        <option value="" selected disabled>-- select maritial status --</option>
                        <option value="single">single</option>
                        <option value="married">Married</option>
                    </select>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Religion:</label>
                    <input type="text" class="form-control" name="religion" data-error="You must have a name." id="religion" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Nationality:</label>
                    <input type="text" class="form-control" name="nationality" data-error="You must have a name." id="nationality" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>CNIC:</label>
                    <input type="number" class="form-control" name="cnic" data-error="You must have a name." id="cnic" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>phone Number:</label>
                    <input type="number" class="form-control" name="number" data-error="You must have a name." id="number" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Domicile:</label>
                    <input type="text" class="form-control" name="domicile" data-error="You must have a name." id="domicile" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Permanent Address:</label>
                    <input type="text" class="form-control" name="permanentAddress" data-error="You must have a name." id="permanentAddress" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Present Address:</label>
                    <input type="text" class="form-control" name="presentAddress" data-error="You must have a name." id="presentAddress" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>PEC Number:</label>
                    <input type="text" class="form-control" name="pec_No" data-error="You must have a name." id="pec_No" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Office phone No:</label>
                    <input type="text" class="form-control" name="office" data-error="You must have a name." id="office" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Residence No:</label>
                    <input type="text" class="form-control" name="residence" data-error="You must have a name." id="residence" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Cell No:</label>
                    <input type="number" class="form-control" name="cell" data-error="You must have a name." id="cell" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" data-error="You must have a name." id="email" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>postQualificationExperience:</label>
                    <input type="postQualificationExperience" class="form-control" name="postQualificationExperience" data-error="You must have a name." id="postQualificationExperience" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>grossMonthlySalary:</label>
                    <input type="text" class="form-control" name="grossMonthlySalary" data-error="You must have a name." id="grossMonthlySalary" placeholder="" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-3">
                    <label>professionalAchievements:</label>
                    <input type="number" class="form-control" name="professionalAchievements" data-error="You must have a name." id="professionalAchievements" placeholder="Professional Achievements" required>

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="tab">
            <h1>Academic Information</h1>
            <p>Educational, Technical & Professional Qualifications(Please start with most recent qualifications)</p>
            <p class="form-group" id="dataTableID" style="margin-right: 5px;">
                <label>Degree</label>
            <div class="form-group">

                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>


                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                </div>

                <?php $c = 1; ?>
                <div class="table-responsive col-md-2-offset col-md-8">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <td class="custom-tbl"><input type="text" name="courseName[]" placeholder="Course Name"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="instituteName[]"
                                    placeholder="Institute Name" class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="to_prof_inst[]" placeholder="To"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="from_prof_inst[]" placeholder="From"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="description[]" placeholder="Description"
                                    class="form-control name_list" /></td>

                            <td><button type="button" name="add" id="add"
                                    class="btn btn-success"><b>+</b></span></button></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>

        <div class="tab">
            <h1>Professional Development:</h1>
            <p class="form-group" id="dataTableID" style="margin-right: 5px;">
            <div class="form-group">

                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>


                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                </div>

                <?php $c = 1; ?>
                <div class="table-responsive col-md-2-offset col-md-8">
                    <table class="table table-bordered" id="dynamic_field_prof">
                        <tr>
                            <td class="custom-tbl"><input type="text" name="degreeName[]" placeholder="Degree Name"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="institute[]"
                                    placeholder="Institute Name" class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="to_institute[]" placeholder="To"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="from_institute[]" placeholder="From"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="passingYear[]" placeholder="PassingYear"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="marksObtained[]"
                                    placeholder="Marks Obtained" class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="totalMarks[]" placeholder="Total Marks"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="GPA_or_grade[]" placeholder="GPA/Grade"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="remarks[]" placeholder="Remarks"
                                    class="form-control name_list" /></td>

                            <td><button type="button" name="add" id="add_prof"
                                    class="btn btn-success"><b>+</b></span></button></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>


        <div class="tab">
            <h1>Employment Record:</h1>
            <br>

            <div class="form-group">

                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>


                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                </div>

                <?php $c = 1; ?>
                <div class="table-responsive col-md-2-offset col-md-8">
                    <table class="table table-bordered" id="dynamic_field_emp">
                        <tr>
                            <td class="custom-tbl"><input type="text" name="employerName[]"
                                    placeholder="Degree Name" class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="to_employer[]" placeholder="To"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="from_employer[]" placeholder="From"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="position[]" placeholder="Position"
                                    class="form-control name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="responsibilities[]"
                                    placeholder="Responsibilities" class="form-control name_list" /></td>

                            <td><button type="button" name="add" id="add_emp"
                                    class="btn btn-success"><b>+</b></span></button></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
        {{-- <div class="tab">
            <h1>Additional Info:</h1>
            <br>
            <input style="width:150px" name="postQualificationExperience" value="">
            <input style="width:150px" name="grossMonthlySalary" value="">
            <input style="width:150px" name="professionalAchievements" value="">

        </div> --}}


        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $url = '{{ route('personal.submit') }}';
            var i = 1;


            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '" class="dynamic-added"><td class="custom-tbl"><input type="text" name="courseName[]" placeholder="Course Name" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="instituteName[]" placeholder="Institute Name" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="to_prof_inst[]" placeholder="To" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="from_prof_inst[]" placeholder="From" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="description[]" placeholder="Description" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });


            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            //   Add Professional Dynamic rows
            $('#add_prof').click(function() {
                i++;
                $('#dynamic_field_prof').append('<tr id="row' + i +
                    '" class="dynamic-added"><td class="custom-tbl"><input type="text" name="degreeName[]" placeholder="Degree Name" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="institute[]" placeholder="Institute Name" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="to_institute[]" placeholder="To" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="from_institute[]" placeholder="From" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="passingYear[]" placeholder="PassingYear" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="marksObtained[]" placeholder="Marks Obtained" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="totalMarks[]" placeholder="Total Marks" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="GPA_or_grade[]" placeholder="GPA/Grade" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="remarks[]" placeholder="Remarks" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-danger btn_remove_prof">X</button></td></tr>');
            });


            $(document).on('click', '.btn_remove_prof', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            //   Add Employment Dynamic rows

            $('#add_emp').click(function() {
                i++;
                $('#dynamic_field_emp').append('<tr id="row' + i +
                    '" class="dynamic-added"><td class="custom-tbl"><input type="text" name="employerName[]" placeholder="Degree Name" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="to_employer[]" placeholder="To" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="from_employer[]" placeholder="From" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="position[]" placeholder="Position" class="form-control name_list" /></td><td class="custom-tbl"><input type="text" name="responsibilities[]" placeholder="Responsibilities" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-danger btn_remove_emp">X</button></td></tr>');
            });


            $(document).on('click', '.btn_remove_emp', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });


        });
    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


</body>

</html>
