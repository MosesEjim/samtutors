@extends('layout.app')

@section('body')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2 style='color:white'>Apply As A Tutor</h2>
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
            <div class="col-md-8">
                <form action="{{route('apply.mail')}}" method="POST" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="f_name">First Name</label>
                            <input type="text" class="form-control" id="f_name" name="firstname" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="l_name">Last name</label>
                            <input type="text" class="form-control" id="l_name" name="lastname" placeholder="Last name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="home">Home Address</label>
                            <input type="text" class="form-control" id="home" name="address" placeholder="Home address">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="phone">Phone number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="age">Age:</label>
                            <input type="date" class="form-control" id="birthday" name="age">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="courses">Courses you can take</label>
                            <div class="form-group">
                                <select name="subjects[]" id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
                                    <option value="monday">Mathematics</option>
                                    <option value="teusday">English</option>
                                    <option value="wednesday">Physics</option>
                                    <option value="friday">Chemistry</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="courses">Referee name</label>
                            <input type="text" class="form-control" id="courses" name="refereename" placeholder="Referee name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="courses">Phone number(Referee)</label>
                            <input type="text" class="form-control" id="courses" name="refereephone" placeholder="phone number(Referee)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">A short description about you and your teaching experience</label>
                        <textarea name="description" class="form-control" id="message" placeholder="Description" required=""></textarea>
                    </div>
                    <button type="submit" class="btn_1">Submit</button>
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
