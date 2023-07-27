<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Royal Car Rental</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('public/css/styles.css') }}" rel="stylesheet" />
	<link href="{{ url('public/css/bootstrap.min.css') }}" rel="stylesheet" />
	<!-- <link href="{{ url('resources/css/intlTelInput.css') }}" rel="stylesheet" /> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('current_page_css')
    </head>
    <?php
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
          $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  $page_url = explode("/",$CurPageURL);
          
       ?>
    <body id="page-top" class="<?php echo $page_url[4]; ?>">
       @include('front.layout.header')
        @yield('content')
        @include('front.layout.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="j{{ url('public/js/scripts.js') }}"></script>
		<!-- <script src="{{ url('resources/js/intlTelInput.js') }}"></script> -->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>



 @yield('current_page_js')
 <script>
  
  $(function() {
    $("form[name='bookingForm']").validate({
      rules: {
        email_address: {
            email:true,
            required: true,
        },
        title: {
            required: true,
        },
        first_name: {
            required: true,
        },
        last_name: {
            required: true,
        },
        phone: {
            required: true,
        },
        country: {
            required: true,
        },
        flight_no: {
            required: true,
        },

      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
  
  $('#owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$( function() {
    $( "#pickup_date" ).datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function () {
            var dt2 = $('#drop_off_date');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            var dt2Date = dt2.datepicker('getDate');
            //difference in days. 86400 seconds in day, 1000 ms in second
            var dateDiff = (dt2Date - minDate)/(86400 * 1000);
            
            startDate.setDate(startDate.getDate() + 30);
            if (dt2Date == null || dateDiff < 0) {
                    dt2.datepicker('setDate', minDate);
            }
            else if (dateDiff > 30){
                    dt2.datepicker('setDate', startDate);
            }
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
        }
    });
    $( "#drop_off_date" ).datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0
    });
  } );
 $('.pickup_time').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    
    
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
  $('.drop_off_time').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
</script>
<!-- <script type="text/javascript">
    $( "#pickup_date" ).datetimepicker({
        dateFormat: "dd-M-yy",
        minDate: 0
    });
    $( "#drop_off_date" ).datetimepicker({
        dateFormat: "dd-M-yy",
        minDate: 0
    });
</script> -->
<script>
      $(function () {
            
            $('#phone').intlTelInput({
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "full_number",
                initialCountry: "US",
                nationalMode: true,
                placeholderNumberType: "MOBILE",
                preferredCountries: ['US'],
                separateDialCode: true,
                utilsScript: ""
            });
            $('#phone').on('keyup', function () {
                var code = $("#phone").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#phone').val();
                var name = $("#phone").intlTelInput("getSelectedCountryData").name;
                var contact_no = phoneNumber.replace("0","");
                sessionStorage.setItem("phoneNumber", "+"+code+contact_no);
            });
            $("#contact_no").val(sessionStorage.getItem("phoneNumber"));
            console.log("phoneNumber",sessionStorage.getItem("phoneNumber"));
        });
    </script>
<script>$('.category_slides').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:6
        },
        1000:{
            items:6
        }
    }
})

</script>

<script>
      // var input = document.querySelector("#phone");
      // window.intlTelInput(input, {
      //   // allowDropdown: false,
      //   // autoInsertDialCode: true,
      //   // autoPlaceholder: "off",
      //   // dropdownContainer: document.body,
      //   // excludeCountries: ["us"],
      //   // formatOnDisplay: false,
      //   // geoIpLookup: function(callback) {
      //   //   fetch("https://ipapi.co/json")
      //   //     .then(function(res) { return res.json(); })
      //   //     .then(function(data) { callback(data.country_code); })
      //   //     .catch(function() { callback("us"); });
      //   // },
      //   // hiddenInput: "full_number",
      //   // initialCountry: "auto",
      //   // localizedCountries: { 'de': 'Deutschland' },
      //   // nationalMode: false,
      //   // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      //   // placeholderNumberType: "MOBILE",
      //   // preferredCountries: ['cn', 'jp'],
      //   // separateDialCode: true,
      //   // showFlags: false,
      //   utilsScript: ""
      // });

      // // $("#Phone").change(function () {
      // //   alert("hello");
      // //           var code = $(this).intlTelInput("getSelectedCountryData").dialCode;
      // //           // var phoneNumber = $('#txtPhone').val();
      // //           // var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
      // //           console.log("getCode",code);
      // //       });
      // // $('#phone').on('keyup',function(){
      // //   //var getCode = $("#phone").intlTelInput('getSelectedCountryData').dialCode;
      // //   console.log("getCode",getCode);
      // // });
    </script>

<script type="text/javascript">
    $(document).ready (function () {  
    $('.car_data').after ('<div id="nav"></div>');  
    var rowsShown = 3;  
    var rowsTotal = $('.tab_con .tab_pan').length;  

    var numPages = rowsTotal/rowsShown;  
    //console.log("numPages",numPages);
    $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>');
    for (i = 0;i < numPages;i++) {  
        var pageNum = i + 1;  
        $('#nav').append ('<li class="page-item"><a href="#" rel="'+i+'" class="page-link">'+pageNum+'</a></li>');  
    }  
    $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>');
    $('.tab_con .tab_pan').css("display","none");  

    $('.tab_con .tab_pan').slice (0, rowsShown).show();  
    $('#nav a:first').addClass('active');  
    $('#nav a').bind('click', function() {  
    $('#nav a').removeClass('active');  
   $(this).addClass('active');  
        var currPage = $(this).attr('rel');  
        var startItem = currPage * rowsShown;  
        var endItem = startItem + rowsShown;  
        $('.tab_con .tab_pan').css('opacity','0.0').hide().slice(startItem, endItem).  
        css('display','block').animate({opacity:1}, 300);  
    });  
});  
</script>
    </body>
</html>
