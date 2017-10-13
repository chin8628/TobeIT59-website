
    <script src="asset/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.countdown.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/config-clock.js"></script>
    <script type="text/javascript" src="asset/js/script.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel();
        $('.center-page img').click(function() {
            $('.center-page img').each(function() {
                $(this).css("border", "0");
            });
            $(this).css("border", "solid 2px white");
        });
        $('.navbar-nav li a').click(function() {
            $('.navbar-nav li a').each(function() {
                $(this).css("color", "#9d9d9d");
            });
            $(this).css("color", "white");
        });
        $(document).scroll(function() {
            if( $(document).scrollTop() > 60 ){
                $(".navbar").css("background", "rgba(0, 0, 0, 0.9)");
            }
            else{
                $(".navbar").css("background", "rgba(0, 0, 0, 0.4)");
            }

        });
        $(function() {
            $('nav li a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 70
                    }, 800);
                    return false;
                  }
                }
            });
        });
    </script>

</html>
