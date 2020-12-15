@extends('layout.app')

@section('styles')

@endsection

<style>
    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    /* Style the input fields */
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

    /* Mark the active step: */
    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }

</style>
@section('body')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Request A Tutor</h2>
                        {{-- <p>Home<span>/<span>Contact us</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part start-->
<section class="learning_part">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('request.mail')}}" method="post" id="regForm" novalidate="novalidate">
                    @csrf
                    <div class="tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="firstname" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your firstname'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="lastname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your lastname'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your address'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="phone" type="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Phone Number'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>Date Of Birth</label>
                                <div class="form-group">
                                    <input class="form-control" name="age" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Phone Number'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="row">
                            <div class="col-6">
                                <label> Preferred Tutor Gender</label>
                                <select class="form-control" name="tutorGender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label> Days</label>
                                <div class="form-group">
                                    <select name="schedule[]" id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
                                        <option value="monday">Monday</option>
                                        <option value="teusday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> When do You want to start?</label>
                                <div class="form-group">
                                    
                                    <input type='date' name='start' class='form-control'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> For How long?</label>
                                <div class="form-group">
                                    <select name="duration"  class="form-control">
                                        <option value="mathematics">1 week</option>
                                        <option value="2 weeks">2 weeks</option>
                                        <option value="3 weeks">3 weeks</option>
                                        <option value="1 month">1 month</option>
                                        <option value="2 month">2 month</option>
                                        <option value="3 month">3 month</option>
                                        <option value="4 month">4 month</option>
                                        <option value="4 month">others</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> How many Hours per day?</label>
                                <div class="form-group">
                                    
                                    <input type='number' name='hours' class='form-control'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> Time of the day</label>
                                <div class="form-group">
                                    
                                    <input type='time' name='time' class='form-control'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> Select Subjects</label>
                                <div class="form-group">
                                    <select name="subjects[]" id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
                                        <option value="mathematics">Mathematics</option>
                                        <option value="english">English</option>
                                        <option value="physics">Physics</option>
                                        <option value="chemistry">Chemistry</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> Educational Level</label>
                                <div class="form-group">
                                    <select name="educationLevel"  class="form-control" >
                                        <option value="nursery">Nursery</option>
                                        <option value="primary 1">Primary 1</option>
                                        <option value="primary 2">Primary 2</option>
                                        <option value="primary 3">Primary 3</option>
                                        <option value="primary 4">Primary 4</option>
                                        <option value="primary 5">Primary 5</option>
                                        <option value="primary 6">Primary 6</option>
                                        <option value="JSS 1">JSS 1</option>
                                        <option value="JSS 2">JSS 2</option>
                                        <option value="JSS 3">JSS 3</option>
                                        <option value="SSS 1">SSS 1</option>
                                        <option value="SSS 2">SSS 2</option>
                                        <option value="SSS 3">SSS 3</option>
                                        <option value="undergraduate">undergraduate</option>
                                        <option value="adult education">Adult Education</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> What's Your Goal For This Lesson?</label>
                                <div class="form-group">
                                    <select name="goals"  class="form-control" >
                                        <option value="IGCSE Preparation">IGCSE Preparation</option>
                                        <option value="UTME/JAMB Preparation">UTME/JAMB Preparation</option>
                                        <option value="SSCE/NECO/GCE Preparation">SSCE/NECO/GCE Preparation</option>
                                        <option value="SAT exam Preparation">SAT exam Preparation</option>
                                        <option value="Improve grades">Improve grades</option>
                                        <option value="Prepare for school test and exam">Prepare for school test and exam</option>
                                        <option value="Help with assignments and school work">Help with assignments and school work</option>
                                        <option value="Home schooling">Home schooling</option>
                                        <option value="Special needs support">Special needs support</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label> Number of Kids</label>
                                <div class="form-group">
                                    
                                    <input type='number' name='numberOfKids' class='form-control'>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="button button-contactForm btn_1">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="button button-contactForm btn_1">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    {{-- <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->

<!-- learning part end-->
<!-- learning part start-->

<!-- learning part end-->

@endsection

@section('scripts')
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
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
        // ... and run a function that displays the correct step indicator:
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
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
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
                // and set the current valid status to false:
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
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }

</script>
@endsection
