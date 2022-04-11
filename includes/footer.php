<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ftr_logo">
                    <a href="./index.php"><img src="assets/img/ftrlogo.svg" alt="footer-logo"></a>
                    <p>Validate your leads</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ftr_icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/sait-blockchain-solutions/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ftr_ul">
                    <ul>
                        <li><a href="./about.php">About Us</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <!-- <li><a href="./platform.php">QC Platform</a></li> -->
                        <li><a href="./testimonials.php">Testimonials </a></li>
                        <!-- <li><a href="./news_events.php">News </a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ftr_copy">
                    <p> &copy; <strong> 2022 SAIT & Blockchain Solutions. All Rights Reserved.</strong></p>
                </div>
            </div>
        </div>
    </div>
</footer>




<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="./assets/js/wow.min.js"></script>


<script>
    !(function(a) {
        "use strict";
        a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                    var e = a(this.hash);
                    if ((e = e.length ? e : a("[name=" + this.hash.slice(1) + "]")).length) return a("html, body").animate({
                        scrollTop: e.offset().top - 48
                    }, 1e3, "easeInOutExpo"), !1;
                }
            }),
            a(".js-scroll-trigger").click(function() {
                a(".navbar-collapse").collapse("hide");
            }),
            a("body").scrollspy({
                target: "#mainNav",
                offset: 54
            });
        var e = function() {
            a("#mainNav").offset().top > 100 ? a("#mainNav").addClass("navbar-shrink") : a("#mainNav").removeClass("navbar-shrink");
        };
        e(), a(window).scroll(e);
    })(jQuery);
    wow = new WOW({
        mobile: false, // default
        live: true // default
    })
    wow.init();
</script>