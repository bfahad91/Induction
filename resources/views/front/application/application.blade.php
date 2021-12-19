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
        margin: 20px auto;
        font-family: Raleway;
        padding: 40px;
        width: 90%;
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

    header {
        width: 100%;
        height: 225px;
        background: #fff url(/images/logo.png) center 5px no-repeat;
    }

    label {
        font-weight: bold;
    }

    .a {
        margin-bottom: 2rem;
    }

</style>

<body>
    <header>
        <div class="container">

        </div>
    </header>
    <form id="regForm" method="POST" action="{{ route('front.post.store') }}" enctype="multipart/form-data">
        @csrf
        <h1 style="font-weight:1000">ASFP Application Form</h1>
        <div class="form-group">
            <label>
                <h5 style="font-weight:bold">Name of Position applied for</h5>
            </label>
            <span class="form-control"><b>{{ $advertisement->title }} </b></span> <br>
            {{-- <input type="text" class="form-control validate" value="{{ old('start_date') }}" name="fullName" placeholder="fullName" required> --}}

            <!-- Error -->
            <div class="help-block with-errors"></div>
        </div>
        <!-- One "tab" for each step in the form: -->
        <div class="tab row" style="display: flex">
            <h1 style="font-weight:1000">BIO DATA</h1>
            <div class="form-group col-md-4">
                <label>CV:</label>
                <input type="file" class="form-control" name="cv_file" placeholder="" required>

                <!-- Error -->
                <div class="help-block with-errors"></div>
            </div>
            <input style="width:150px" name="advertisement_id" value="{{ $advertisement->id }}" type="hidden">

            <div class="form-group col-md-12 row">
                <div class="form-group a col-md-4">
                    <label>Name:</label>
                    <input type="text" class="form-control validate" value="{{ old('fullName') }}" name="fullName"
                        placeholder="Full Name" required>
                    @error('courseName')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Recent Photograph:</label>
                    <input type="file" class="form-control validate" value="{{ old('image') }}" name="image" required>
                    @error('image')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <img src="" alt="">
                </div>
                <div class="form-group a col-md-4">
                    <label>Father Name:</label>
                    <input type="text" class="form-control validate" value="{{ old('fatherName') }}" name="fatherName"
                        id="fatherName" placeholder="Father Name" required>
                    @error('fatherName')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>CNIC No:</label>
                    <input type="number" class="form-control validate" name="cnic" id="cnic"
                        value="{{ old('cnic') }}" placeholder="CNIC" required>
                    @error('cnic')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Gender:</label>
                    <select name="gender" class="form-control validate" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Date of Birth:</label>
                    <input type="date" class="form-control validate" name="dob" id="dob" value="{{ old('dob') }}"
                        placeholder="Date of Birth" required>
                    @error('dob')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Caste:</label>
                    <input type="text" class="form-control validate" name="caste" id="caste"
                        value="{{ old('cnic') }}" placeholder="Caste" required>
                    @error('cnic')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Age:</label>
                    <input type="number" class="form-control validate" value="{{ old('age') }}" name="age" id="age"
                        placeholder="Age" required>
                    @error('age')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Age Relaxation:</label>
                    <select name="age_relaxation" class="form-control validate" required>
                        <option disabled selected>Please select One (if applicable)</option>
                        <option value="Armed Forces">Armed Forces - (Army, Navy, PAF)</option>
                        <option value="Govt. Servant">Govt. Servant</option>
                        <option value="Widow/ward of Govt. Servant died during service">Widow/ward of Govt. Servant died during service</option>
                        <option value="Minority">Minority</option>
                        <option value="Provincial">Provincial</option>
                    </select>
                    @error('gender')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Religion:</label>
                    <select name="religion" class="form-control validate" required>
                        <option value="muslim">Muslim</option>
                        <option value="Non-muslim">Non-muslim</option>
                    </select>
                    @error('religion')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Sect:<span class="text-muted"> (if Non-Muslim)</span></label>
                    <input type="text" class="form-control validate" value="{{ old('age') }}" name="sect" id="sect"
                        placeholder="Sect" required>
                    @error('sect')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Domicile:</label>
                    <select name="domicile" class="form-control validate" required>
                        <option disabled selected>-- Please select One --</option>
                        <option value="ISLAMABAD">ISLAMABAD</option>
                        <option value="PUNJAB">PUNJAB</option>
                        <option value="SINDH">SINDH</option>
                        <option value="BALOCHISTAN">BALOCHISTAN</option>
                        <option value="KPK">KPK</option>
                        <option value="GILGIT BALTISTAN">GILGIT BALTISTAN</option>
                    </select>
                    @error('domicile')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>District of Domicile:</label>
                    <input type="text" class="form-control validate" value="{{ old('age') }}" name="domicile_district" id="domicile_district"
                        placeholder="Domicile District" required>
                    @error('domicile_district')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Mobile Number:</label>
                    <input type="number" class="form-control validate" name="number" id="number"
                        value="{{ old('number') }}" placeholder="Phone Number" required>
                    @error('number')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Cell No:</label>
                    <input type="number" class="form-control validate" name="cell" id="cell"
                        value="{{ old('cell') }}" placeholder="Cell No" required>
                    @error('cell')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Email:</label>
                    <input type="email" class="form-control validate" name="email" id="email"
                        value="{{ old('email') }}" placeholder="Email" required>
                    @error('email')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>







                <div class="form-group a col-md-4">
                    <label>Permanent Address:</label>
                    <input type="text" class="form-control validate" value="{{ old('permanentAddress') }}"
                        name="permanentAddress" id="permanentAddress" placeholder="Permanent Address" required>
                    @error('permanentAddress')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group a col-md-4">
                    <label>Present Address:</label>
                    <input type="text" class="form-control validate" value="{{ old('presentAddress') }}"
                        name="presentAddress" id="presentAddress" placeholder="Present Address" required>
                    @error('presentAddress')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror

                </div>



                {{-- <div class="form-group a col-md-4">
                    <label>PEC Number:</label>
                    <input type="text" class="form-control" value="{{ old('pec_No') }}" name="pec_No" id="pec_No"
                        placeholder="PEC Number" required>
                    @error('pec_No')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror

                </div> --}}

                <div class="form-group a col-md-4">
                    <label>Contact No:</label>
                    <input type="number" class="form-control" value="{{ old('contact_no') }}" name="contact_no"
                        id="residence" placeholder="Contact No" required>
                    @error('contact_no')
                        <div class="error alert text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </div>
        <div class="tab">
            <h1>Academic Information</h1>
            <p class="text-muted">Educational & Technical Qualifications (Please start with most recent
                qualifications)</p>
            <p class="form-group" id="dataTableID" style="margin-right: 5px;">

            <div class="form-group">

                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>


                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                </div>

                <?php $c = 1; ?>
                <div class="table-responsive col-md-2-offset col-md-12">
                    <table class="table table-bordered" id="dynamic_field_prof">
                        <thead>
                            <tr>
                                <th>Degree</th>
                                <th>Institute</th>
                                <th>To</th>
                                <th>From</th>
                                <th>Passing Year</th>
                                <th>Marks</th>
                                <th>Total</th>
                                <th>GPA/Grade</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="custom-tbl"><input type="text" name="degreeName[]" placeholder="Degree"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="institute[]" placeholder="Institute"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="date" name="to_institute[]" placeholder="To"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="date" name="from_institute[]" placeholder="From"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="passingYear[]" placeholder="PassingYear"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="number" name="marksObtained[]"
                                    placeholder="Marks Obtained" class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="number" name="totalMarks[]"
                                    placeholder="Total Marks" class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="GPA_or_grade[]" placeholder="GPA/Grade"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl">
                                {{-- <input type="text" name="remarks[]" placeholder="Remarks"
                                    class="form-control validate name_list" /> --}}
                                <textarea name="remarks[]" id="" cols="10" rows="2"></textarea>
                            </td>

                            <td><button type="button" name="add" id="add_prof"
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
                <div class="table-responsive col-md-2-offset col-md-12">
                    <table class="table table-bordered" id="dynamic_field">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Institute</th>
                                <th>To</th>
                                <th>From</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="custom-tbl"><input type="text" name="courseName[]" placeholder="Course Name"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="instituteName[]"
                                    placeholder="Institute Name" class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="date" name="to_prof_inst[]" placeholder="To"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="date" name="from_prof_inst[]" placeholder="From"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="description[]"
                                    placeholder="Description" class="form-control validate name_list" /></td>

                            <td><button type="button" name="add" id="add"
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
                <div class="table-responsive col-md-2-offset col-md-12">
                    <table class="table table-bordered" id="dynamic_field_emp">
                        <thead>
                            <tr>
                                <th>Employer</th>
                                <th>To</th>
                                <th>From</th>
                                <th>Position</th>
                                <th>Responsibilities</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="custom-tbl"><input type="text" name="employerName[]" placeholder="Employer"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="date" name="to_employer[]" placeholder="To"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="date" name="from_employer[]" placeholder="From"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="position[]" placeholder="Position"
                                    class="form-control validate name_list" /></td>
                            <td class="custom-tbl"><input type="text" name="responsibilities[]"
                                    placeholder="Responsibilities" class="form-control validate name_list" /></td>

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

            $url = '{{ route('front.post.store') }}';
            var i = 1;


            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '" class="dynamic-added"><td class="custom-tbl"><input type="text" name="courseName[]" placeholder="Course" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="instituteName[]" placeholder="Institute" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="date" name="to_prof_inst[]" placeholder="To" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="date" name="from_prof_inst[]" placeholder="From" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="description[]" placeholder="Description" class="form-control validate name_list" /></td><td><button type="button" name="remove" id="' +
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
                    '" class="dynamic-added"><td class="custom-tbl"><input type="text" name="degreeName[]" placeholder="Degree" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="institute[]" placeholder="Institute" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="date" name="to_institute[]" placeholder="To" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="date" name="from_institute[]" placeholder="From" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="passingYear[]" placeholder="PassingYear" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="number" name="marksObtained[]" placeholder="Marks Obtained" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="number" name="totalMarks[]" placeholder="Total Marks" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="GPA_or_grade[]" placeholder="GPA/Grade" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="remarks[]" placeholder="Remarks" class="form-control validate name_list" /></td><td><button type="button" name="remove" id="' +
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
                    '" class="dynamic-added"><td class="custom-tbl"><input type="text" name="employerName[]" placeholder="Employer" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="date" name="to_employer[]" placeholder="To" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="date" name="from_employer[]" placeholder="From" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="position[]" placeholder="Position" class="form-control validate name_list" /></td><td class="custom-tbl"><input type="text" name="responsibilities[]" placeholder="Responsibilities" class="form-control validate name_list" /></td><td><button type="button" name="remove" id="' +
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
            y = x[currentTab].getElementsByClassName("validate");
            // A loop that checks every input field in the current tab:
            for (i = 1; i < y.length; i++) {
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
