<x-app>
    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
        <form id="search_mini_form" class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Search entire store here...">
                <div class="action">
                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>
    <!-- End Search Popup -->
    <!-- Start breadcrumb area -->
    <div class="ht__breadcrumb__area bg-image--6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__inner text-center">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                        <nav class="breadcrumb-content">
                            <a class="breadcrumb_item" href="index.html">Home</a>
                            <span class="brd-separator">/</span>
                            <span class="breadcrumb_item active">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb area -->
    <!-- Start Contact Area -->
    <section class="wn_contact_area bg--white pt--80 pb--80">
        <div class="google__map pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                                <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="contact-form-wrap">
                        <h2 class="contact__title">Get in touch</h2>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                            mazim placerat facer possim assum. </p>
                        <form id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
                            <div class="single-contact-form space-between">
                                <input type="text" name="name" placeholder="Name*">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="single-contact-form">
                                <input type="text" name="subject" placeholder="Subject*">
                            </div>
                            <div class="single-contact-form message">
                                <textarea name="message" placeholder="Type your message here.."></textarea>
                            </div>
                            <div class="contact-btn">
                                <button type="submit">Send Email</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-output">
                        <p class="form-messege">
                    </div>
                </div>
                <div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__address">
                        <h2 class="contact__title">Get office info.</h2>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                            Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                            litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
                        <div class="wn__addres__wreapper">

                            <div class="single__address">
                                <i class="icon-location-pin icons"></i>
                                <div class="content">
                                    <span>address:</span>
                                    <p>666 5th Ave New York, NY, United</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-phone icons"></i>
                                <div class="content">
                                    <span>Phone Number:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-envelope icons"></i>
                                <div class="content">
                                    <span>Email address:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-globe icons"></i>
                                <div class="content">
                                    <span>website address:</span>
                                    <p>716-298-1822</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
</x-app>
