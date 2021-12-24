<script src={{url("frontend/libraries/jquery/jquery-3.6.0.min.js")}}></script>
<script src={{url("frontend/libraries/bootstrap/js/bootstrap.js")}}></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
<script src={{url("frontend/libraries/slick/slick.min.js")}}></script>
<script src={{url("frontend/scripts/main.js")}}></script>
<script>
  $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
                    {
                      breakpoint: 1200,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }

                  ]
      });
      
</script>