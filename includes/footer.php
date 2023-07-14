<footer>
    <div class="footer">

        <div class="container">
            <div class="footer-wrapper">
                <div class="row">
                    <!-- Footer Col. -->
                    <div class="col-md-3 col-sm-3 footer-col">
                        <div class="footer-content">
                            <div class="footer-content-logo">
                                <!-- <img src="images/logo.png" alt=""/>-->
                            </div>
                            <div class="footer-content-text">
                                <!--<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                                <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>-->
                            </div>
                        </div>
                    </div>
                    <!-- //Footer Col.// -->

                    <!-- Footer Col. -->
                    <div class="col-md-3 col-sm-3 footer-col">

                        &nbsp;&nbsp;&nbsp;&nbsp;

                    </div>
                    <!-- //Footer Col.// -->

                    <!-- Footer Col. -->
                    <div class="col-md-3 col-sm-3 footer-col">
                        <div class="footer-title">

                        </div>
                        <div class="footer-content">

                            <span class="ft-schema" itemscope itemtype="http://schema.org/Person">
                                <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">

                            <ul class="contact-info  list-unstyled">
                                <li class="social-icons">
                            		<a href="http://www.linkedin.com/in/garybking/" title="linkedin" target="_blank"
                                       class="social-media-icon linkedin-icon">linkedin</a>
                        			</li>
                                <li>
                                    <span class="contact-title">
                                        <i class="icon-phone"></i>phone:
                                    </span>
                                    <span class="contact-details">

                                        <span itemprop="telephone">
                                            206-447-5196
                                        </span>

                                        <span itemprop="addressLocality">
                                        Seattle, </span>
                                        <span itemprop="addressRegion">WA</span>
                                        </span>

                        </div>


                        <div class="contact-details">
                            <a class="email" rel="gary@garykingweb.com?subject=Web Inquiry"
                               title="Click here to email me">&nbsp;</a>
                        </div>
                        </li>

                        </ul>


                        <div class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="copyright-text">&copy;Gary B King</div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">

                                    </div>
                                </div>


                            </div>
                        </div>

                        </span><!-- end Postal Address -->
                        </span><!-- end schema -->

                    </div>

                    <!-- Footer Col. -->
                    <div class="col-md-3 col-sm-3 footer-col">
                        &nbsp;&nbsp;&nbsp;
                    </div>
                    <!-- //Footer Col.// -->

                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- start bottom -->


</footer>

<!--</div> wrapper end -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="assets/js/jquery.emailProt.js"></script>
<script type="text/javascript" src="assets/js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    $(document).ready(function () {

        /* obfuscate email */
        var $emailLinks = $('a.email');

        if ($emailLinks.length < 1) {
            return;
        } // skip this function if no objects found
        //alert($('a.email')).attr('href');
        // Insert empty <a> tag with the following attributes:
        // * class="email"
        // * rel="example|domain.com" where pipe char '|' replaces '@'
        // * title="Email Us", this is the text shown after the email link is created by js
        $emailLinks.addClass('addicon').emailProt();
    });
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-43688158-1', 'auto');
    ga('send', 'pageview');

</script>

<script>
    var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null,    // optional scroll container selector, otherwise use window,
            resetAnimation: true,     // reset animation on end (default is true)
        }
    );
    wow.init();
</script>