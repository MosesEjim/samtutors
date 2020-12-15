@extends('layout.app')

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
<section class="learning_part"  >
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7" >
                <div class="learning_img1">
                    <img src="{{URL::asset('assets/img/about.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>WELCOME TO GLOBAL SAM TUTOR REQUEST PORTAL</h5>

                    <p>Welcome to our Home Tutor Application Form. With this form you would be able to apply for a personal home tutor to teach your kid/ward in your home. Please feel free to call 08163405391,
                        0814 321 6891,
                        0703 836 9526,
                        0906 455 0632,
                        0816 979 4866 if you have any questions or IF YOU don’t hear from us 2 hours after filling the form. NB: All questions are compulsory and you wont be able to submit the form till all entries are filled.

                        PLEASE DO NOT FILL THIS FORM MORE THAN ONCE.</p>
                        <a class="btn_1" href="{{route('request.form')}}">Request</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->

<!-- learning part end-->
<!-- learning part start-->

<!-- learning part end-->

@endsection
