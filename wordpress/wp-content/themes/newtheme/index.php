<?php get_header();?>


<!-- Slider -->


<?php get_template_part( 'slider' ); ?>
<!-- Featured Tours -->


<?php get_template_part( 'featuredTours' ); ?>
<!-- BEST TOURS -->
<div id="tours-section">
    <div class="container tours-content">
        <h3>We Provide Only the Best Tours</h3>
        <h4>With more than 230 trips to worldwide destinations, including Europe, North &amp; Central, South America,
            Asia,
            Australia &amp; New Zealand, we continue to offer new ways and the best tours for traveling every year.</h4>

        <div class="tour-btn">
            <a href="#" class="btn btn-transparent"><i class="fa fa-paper-plane-o"></i> &nbsp;GET IN TOUCH</a>
        </div>
    </div>
</div>

<!-- WHY US? -->

<div id="why-us-section">
    <div class="container why-us-content">
        <h3>Why Us?</h3>
        <div class="row services-3">

            <div class="col-md-4">
                <p><img src="<?php bloginfo('template_directory'); ?> /assets/icon-1.png" alt=""></p>
                <h5>The Best Service</h5>
                <p>Our aim is to provide you with the tour service of the top quality, and we'll do our best to find the
                    suitable tour for you.</p>
            </div>

            <div class="col-md-4">
                <p><img src="<?php bloginfo('template_directory'); ?> /assets/icon-2.png" alt=""></p>
                <h5>Everything Is Included</h5>
                <p>There are dozens of aspects to pay attention to, while organizing a trip, and we’ll make sure your
                    tour includes everything you need.</p>
            </div>

            <div class="col-md-4">
                <p><img src="<?php bloginfo('template_directory'); ?> /assets/icon-3.png" alt=""></p>
                <h5>Great Prices</h5>
                <p>All our tours and excursions are available at really affordable prices so you can always pick a great
                    destination.</p>
            </div>
        </div>
    </div>


</div>


<!-- PARTNERS -->

<div id="partners-section">
    <div class="container partners-content">
        <h3>Our Partners</h3>
        <div class="row images-content">
            <div class="col-md-2">
                <p><img src="<?php bloginfo('template_directory'); ?>  /assets/partner-1.png" alt=""></p>
            </div>

            <div class="col-md-2">
                <p><img src="<?php bloginfo('template_directory'); ?>  /assets/partner-2.png" alt=""></p>
            </div>

            <div class="col-md-2">
                <p><img src="<?php bloginfo('template_directory'); ?>  /assets/partner-3.png" alt=""></p>
            </div>

            <div class="col-md-2">
                <p><img src="<?php bloginfo('template_directory'); ?>  /assets/partner-4.png" alt=""></p>
            </div>

            <div class="col-md-2">
                <p><img src="<?php bloginfo('template_directory'); ?>  /assets/partner-5.png" alt=""></p>
            </div>

            <div class="col-md-2">
                <p><img src="<?php bloginfo('template_directory'); ?>  /assets/partner-6.png" alt=""></p>
            </div>
        </div>
    </div>


</div>

<!-- Clients Testimonials -->

<div id="clients-testimonials">

    <div class="container testimonials-content">
        <h3>What Our Clients Say</h3>

        <div class="row">

            <div class="col-sm-4">
                <div class="image-testimonial">
                    <p>
                        <img src="<?php bloginfo('template_directory'); ?> /assets/review-1.png" alt="">
                    </p>
                </div>
                <div class="text-testimonial">

                    <p>Disney in December was absolutely delightful! From our 1 day at Magic Kingdom &amp; 2 days at
                        Animal Kingdom, our family was filled with excitement and magical memories.</p>
                    <p class="authors-name">- Lisa Evants</p>

                </div>
            </div>


            <div class="col-sm-4">

                <div class="image-testimonial">
                    <p>
                        <img src="<?php bloginfo('template_directory'); ?> /assets/review-2.png" alt="">
                    </p>
                </div>
                <div class="text-testimonial">

                    <p>You were an excellent Travel Agency for us! You considered our unique needs while planning our
                        itinerary. Every suggestion you made was excellent!</p>
                    <p class="authors-name">- Nicholas Lane</p>
                </div>
            </div>

            <div class="col-sm-4">

                <div class="image-testimonial">
                    <p>
                        <img src="<?php bloginfo('template_directory'); ?> /assets/review-3.png" alt="">
                    </p>
                </div>
                <div class="text-testimonial">

                    <p>I’m sending you a sincere "thank you" for all of your assistance during my recent trip to
                        Colorado. It was invaluable to me and I realize and appreciate it greatly.</p>
                    <p class="authors-name">- Ethan Dean</p>
                </div>


            </div>
        </div>
        <div class="get-in-touch-btn">
            <a href="#" class="btn btn-pink" data-toggle="modal" data-target="#contactModal"><i
                    class="fa fa-paper-plane-o"></i> &nbsp;GET IN TOUCH</a>
        </div>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="contactModal">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Contact Us</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="">
                    <div class="input-container">
                        <i class="fa fa-user-o icon"></i>

                        <input class="input-field" type="text" placeholder="Name" name="usrnm">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-phone icon"></i>
                        <input class="input-field" type="text" placeholder="Phone" name="phone">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope-o icon"></i>
                        <input class="input-field" type="text" placeholder="Email" name="email">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-comments-o icon text-area"></i>
                        <textarea rows="5" size="50" value="" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <button type="button" class="btn btn-pink" data-dismiss="modal"><i class="fa fa-paper-plane-o"></i>
                    &nbsp;SEND MESSAGE</button> 
                </form>
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">

            </div> -->

        </div>
    </div>
</div>




<?php get_footer();?>