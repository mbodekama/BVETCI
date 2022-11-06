    
    <!-- subscribe area end -->
    <footer class="footer-area">
        <div class="footer-top-area gray-bg-5 pt-105 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-2">Ezone Boos</h3>
                            <div class="footer-info-wrapper">
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p>77 Seventh Streeth, Banasree.
                                            <br>USA -215568</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p>+880 1124 22365 2223
                                            <br>+880 1124 22365 5455</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p><a href="#">domain@company.com</a>
                                            <br><a href="#">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40 pl-70">
                            <h3 class="footer-widget-title-2">USeful Links</h3>
                            <div class="footer-widget-content-2">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#">Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-2">Shopping</h3>
                            <div class="footer-widget-content-2">
                                <ul>
                                    <li><a href="#">How to buy</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Shipment</a></li>
                                    <li><a href="#">Tracking</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-40 pl-30">
                            <h3 class="footer-widget-title-2">Find US</h3>
                            <div id="footer-map" class="footer-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom  gray-bg-6 ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-2">
                            <p>
                                Copyright ©
                                <a href="hastech.company/">HasTech</a> 2021 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-img">
                            <img src="assets/img/icon-img/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>










    <!-- all js here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- google map api
    ============================================ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qDiT4MyM7IxaGPbQyLnMjVUsJck02N0"></script>
    <script>
        var myCenter=new google.maps.LatLng(30.249796, -97.754667);
        function initialize()
        {
            var mapProp = {
              center:myCenter,
              scrollwheel: false,
              zoom:15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };
            var map=new google.maps.Map(document.getElementById("footer-map"),mapProp);
            var marker=new google.maps.Marker({
              position:myCenter,
                animation:google.maps.Animation.BOUNCE,
              icon:'assets/img/icon-img/46.png',
                map: map,
              });
            var styles = [
              {
                stylers: [
                  { hue: "#c5c5c5" },
                  { saturation: -100 }
                ]
              },
            ];
            map.setOptions({styles: styles});

            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="assets/js/main.js"></script>

    @yield("customFoot")
</body>

</html>