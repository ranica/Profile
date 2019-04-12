<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ asset("theme/img/favicon.ico") }}">
    <title>پروفایل دکتر حمید طاهری</title>

    <!-- Global stylesheets -->
    <link href="{{ asset("theme/css/bootstrap/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("theme/css/bootstrap/bootstrap-rtl.css") }}" rel="stylesheet">

    <link href="{{ asset("theme/css/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href= "{{ asset("theme/css/devicons/css/devicons.min.css") }}"  rel="stylesheet">
    <link href= "{{ asset("theme/css/simple-line-icons/css/simple-line-icons.css") }}" rel="stylesheet">
    <link href= "{{ asset("theme/css/style.css") }}" rel="stylesheet">
    <link href="{{ mix("css/app.css") }}" rel="stylesheet">
    <link href="{{ mix("css/fonts.css") }}" rel="stylesheet">
</head>

<body id="page-top">
  @include('layouts.sidebar')
    <div class="container-fluid p-0">
       <!--====================================================
                        ABOUT
      ======================================================-->
      @include('parts.about')

    <!--====================================================
                        EXPERIENCE
    ======================================================-->
      @include('parts.experience')

    <!--====================================================
                        PORTFOLIO
    ======================================================-->
      @include('parts.portfolio')

    <!--====================================================
                        SKILLS
    ======================================================-->
      <section class=" d-flex flex-column " id="skills">
         <div class="p-lg-5 p-3 skill-cover">
          <h3 class="text-center text-white">کارهای اجرایی</h3>
          <div class="row text-center my-auto ">
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-book fa-5x"></i>
                      <h2><span class="counter"> 7  </span><span>مورد</span></h2>
                      <p>ویراستاری کتاب</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-microphone fa-5x"></i>
                      <h2><span class="counter"> 17 </span><span>مورد</span></h2>
                      <p>سخنرانی های تخصصی</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-graduation-cap fa-5x"></i>
                      <h2><span class="counter"> 43 </span><span>مورد</span></h2>
                      <p>راهنمای پایان نامه</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-comments fa-5x"></i>
                      <h2><span class="counter"> 40 </span><span>مورد</span></h2>
                      <p>مشاوره پایان نامه</p>
                  </div>
              </div>
          </div>
         </div>
      </section>

    <!--====================================================
                           AWARDS
    ======================================================-->
    @include('parts.award')

    <!--====================================================
                          CONTACT
    ======================================================-->
    @include('parts.contact')

      <!-- <section class=" d-flex flex-column" id="maps">
        <div id="map">
          <div class="map-responsive">
             <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </section> -->


    </div>

<!--====================================================
                    PORTFOLIO MODALS
======================================================-->
    @include('books.cheshmeye_aftab')
    @include('books.golbang')
    @include('books.belaghat')
    @include('books.hadigheh')
    @include('books.farayand')

    @include('articals.tebyen')
    @include('articals.shere_sepid')
    @include('articals.ieham')
    @include('articals.jastar')
    @include('articals.dareeda')
    @include('articals.soal')
    @include('articals.tasvir_kheyal')
    @include('articals.naghde_sanaei')
    @include('articals.fele_pishvandi')
    @include('articals.khosro_shirin')

    
    

    <!-- Global javascript -->
    <script src="{{ asset("theme/js/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("theme/js/bootstrap/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("theme/js/jquery-easing/jquery.easing.min.js") }}"></script>
    <script src="{{ asset("theme/js/counter/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("theme/js/counter/jquery.counterup.min.js") }}"></script>
    <script src="{{ asset("theme/js/custom.js") }}"></script>
    <script>
        $(document).ready(function(){

        $(".filter-b").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            {
                $('.filter').show('1000');
            }
            else
            {
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
            }
        });

        if ($(".filter-b").removeClass("active")) {
          $(this).removeClass("active");
        }
        $(this).addClass("active");
        });

        // SKILLS
        $(function () {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });

        });
    </script>
</body>

</html>
