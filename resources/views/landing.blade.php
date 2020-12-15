@extends('layout.app')

@section('styles')
<style>


</style>
@endsection

@section('body')
{{-- <!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg" style="height:650px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h3>Find Your Perfect Home and Online Tutor</h3>
                        <p> book one-on-one lessons with verified instructors in your area
                            it's fast and reliable</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control basicAutoComplete" data-url="{{URL::asset('assets/subjects.json')}}" autocomplete="off" placeholder="What do You want to learn?" aria-label="" aria-describedby="basic-addon1">
<div class="input-group-apend">
    <button class="btn btn-outline-primary" type="button">search</button>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- breadcrumb start--> --}}

<section class="banner_part">

    <div class="container">
        <div class="overlay"></div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Find Your Perfect Home and Online Tutor</h5>
                        <h1>Making Your Childs
                            World Better</h1>
                        <p>
                            <h5 style="color:#0c2e60;">book one-on-one lessons with verified instructors in your area
                                it's fast and reliable</h5>
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control basicAutoComplete" data-url="{{URL::asset('assets/subjects.json')}}" autocomplete="off" placeholder="What do You want to learn?" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-apend">
                                <button class="btn btn-outline-primary" type="button">search</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- feature_part start-->
<section class="feature_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 align-self-center">
                <div class="single_feature_text ">
                    <b>
                        <h3>Welcome <br> Let's Walk you through</h3>
                    </b>
                    <p>GlobalSamTutors helps you connect with qualified tutors in your area
                        to master the subjects, skills and exams that matter to </p>

                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-layers"></i></span>
                        <h4>Trusted Professionals</h4>
                        <p>Every tutor is experienced, friendly, manually screened, and thoroughly vetted for highest quality.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                        <h4>Learn at Your Pace</h4>
                        <p>Book online in about 60 seconds and plan your private lessons according to your own schedule.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Safe and Secure</h4>
                        <p>Trusted by 100s of happy parents, professionals and students with more than 90% success rate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- learning part start-->
<section class="learning_part">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7">
                <div class="learning_img">
                    <img src="{{URL::asset('assets/img/student.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>About us</h5>
                    <h2>GLOBAL SAM TUTORS</h2>
                    <p>Global-Sam Tutors is a platform which helps to bridge the gap and provide on-demand services to users. We connect willing learners to vetted and trusted tutors with credit to knowledge and character. We train candidates in search of academic, vocational and entrepreneurship knowledge at our various coaching centers, we offer private tutoring services in cities where Global-Sam tutors are in operation. Our platform is used to request for a tutor. Identify your preferred need on our platform anywhere and anytime.

                        As global- Sam Tutors, we are not only a tutoring agency where thousands of parents and guardians locate highly skilled and trusted tutors for their children but also a training institute known as Global -Sam Training Institute [Center for Academic, Vocational and Entrepreneurship Studies (C.A.V.E.S) ] a subsidiary of Globalsam-Resources Nigeria Limited. </p>
                    {{-- <ul>
                            <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                                gathered wear</li>
                            <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                                night.</li>
                        </ul> --}}
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->


<!--::review_part start::-->
{{-- <section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <img src="/storage/photos/{{$course->photo}}" class="special_img" alt="">
<div class="special_cource_text">
    <a href="course-details.html" class="btn_4">{{$course->name}}</a>
    {{-- <h4>$130.00</h4>
                            <a href="course-details.html"><h3>Web Development</h3></a> --}}
    {{-- <p>{{$course->snippet()}}</p>
    <div class="author_info">
        <div class="author_img">
            <img src="/storage/photos/{{$course->tutor->photo}}" alt="">
            <div class="author_info_text">
                <p>Conduct by:</p>
                <h5><a href="#">{{$course->tutor->name}}</a></h5>
            </div>
        </div>
        <div class="author_rating">
            <div class="rating">
                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                <a href="#"><img src="img/icon/star.svg" alt=""></a>
            </div>
            <p>3.8 Ratings</p>
        </div>
    </div>
</div>

</div>
</div>
@endforeach



</div>
</div>
</section> --}}
<!--::blog_part end::-->
<!-- feature_part start-->
<section class="feature_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 align-self-center">
                <div class="single_feature_text ">
                    <b>
                        <h3>Our Services &mdash;<br> What We do</h3>
                    </b>

                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-layers"></i></span>
                        <h4>Home Tutoring</h4>
                        <p>Discover how Global- Sam Tutors helps to bridge the gap and provide on- demand services to users by connecting thousands of parents and guardians to highly skilled, trusted and vetted tutors.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                        <h4>Exam Preparation</h4>
                        <p>We prepare wards for entrance exams into schools and colleges; for SSCE, BECE, JAMB, etc. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Vacational Skill Aquisition</h4>
                        <p>Get a tutor for any vocational skill of your choice such as fashion designing, arts and crafts, bakery, music lessons etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>ICT Consultant (Private Computer Tutor)</h4>
                        <p>Become a computer literate with our private computer tutors. Programming, website development, software development, graphic design, Corel draw, Microsoft word, Excel, Power point.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Adult Education</h4>
                        <p>Irrespective of your busy schedules, getting an education as an adult is made easier with our well trained tutors who handle adult classes at your most preferred location or at our various adult coaching centers where global –Sam tutors are in operation. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Special Needs</h4>
                        <p>Get quality professional support for kids with disabilities such as Autism, speech impediment, auditory impediment, Dyslexia etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Professional Exams Private Tutor</h4>
                        <p>With our highly skilled tutor guides, get the best out of any professional exams. Out tutors are skilled and also grasp the technical know- how.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="member_counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-6">
                <div class="single_member_counter">
                    <span>Want to get a Tutor?</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter">
                    <a class="btn_1" href="{{route('request')}}"> Request Now</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--::review_part start::-->
<section class="testimonial_part" style="padding-top:20px;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>tesimonials</p>
                    <h2>Clients Feedback</h2>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- owl carousel not working --}}
            <div class="col-lg-12">


                @foreach($testimonies->chunk(2) as $dualTestimony)


                <div class="row" style="padding-top:20px">
                    @foreach($dualTestimony as $testimony)
                    <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                        <div class="testimonial_slider_text">
                            <p>{{$testimony->testimony}}</p>
                            <h4>{{$testimony->testifier}}</h4>
                            {{-- <h5> Sr. Web designer</h5> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-2 col-sm-4">
                        <div class="testimonial_slider_img">
                            <img src="/storage/photos/{{$testimony->photo}}" alt="#">
                        </div>
                    </div>
                    @endforeach


                </div>

                @endforeach



            </div>

        </div>
    </div>
</section>
<!--::blog_part end::-->
<section class="member_counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-6">
                <div class="single_member_counter">
                    <span>Want to Become a Tutor?</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter">
                    <a class="btn_1" href='{{route('apply')}}'> Register Now</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Our Blog</p>
                    <h2>Students Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="/storage/photos/{{$article->photo}}" class="card-img-top" alt="blog">
                        <div class="card-body">

                            <a href="{{route('blog.single', $article->slug)}}">
                                <h5 class="card-title">{{$article->title}}</h5>
                            </a>
                            <p>{{$article->snippet()}}</p>
                            <ul>
                                <li> <span class="ti-comments"></span>{{count($article->comments)}} Comments</li>
                                {{-- <li> <span class="ti-heart"></span>2k Like</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<section class="contact-section section_padding">
    <div class="container">



        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <p>Get in touch</p>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('contact.mail')}}" method="post" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!--::blog_part end::-->

@endsection
