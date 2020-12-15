<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content={{csrf_token()}}>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GlobalSamTutors</title>
    <link rel="icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    @yield('styles')
</head>

<body>
    @include('layout.navbar')

    @yield('body')

    @include('layout.footer')

    <!-- jquery plugins here-->
    <!-- jquery -->
    @yield('scripts')
    <script src="{{URL::asset('assets/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap-select.js')}}"></script>
    <!-- easing js -->
    <script src="{{URL::asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{URL::asset('assets/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{URL::asset('assets/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{URL::asset('assets/js/slick.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
    <script>
        $('.basicAutoComplete').autoComplete();

    </script>                                                                                                                                           
    <script type="text/javascript">
        $(function() {
            $('.multiselect-ui').multiselect({
                includeSelectAllOption: true
            });
        });

    </script>

    <script type="text/javascript">
        $(document).on('submit', '#comment-form', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST'
                , url: "{{route('comment.store')}}"
                , data: {
                    email: $('#email').val(),
                    name: $('#name').val(),
                    comment: $('#comment').val(),
                    blogId: {{$article->id ?? 0}} 
                }
                , success: function(response) {
                    alert("Thanks for contributing");
                    $("#comment-form")[0].reset();
                }
            });
        });

    </script>

</body>

</html>
