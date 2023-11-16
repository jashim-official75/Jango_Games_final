@extends('layouts.frontend.app')
@section('header')
    <meta name="title" content="Jango Games: Play Games Online | Contact Us" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Jango Games: Play Games Online | Contact Us</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- CONTACT  PART START -->
    <!-- ===================================== -->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="our_company_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2515.655279101906!2d-1.4330055!3d50.9115943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4874769af0c7c493%3A0xc1aee424dc35c0a!2s143-145%20Paynes%20Rd%2C%20Southampton%20SO15%203BW%2C%20UK!5e0!3m2!1sen!2sbd!4v1654209366218!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="askfreely_form">
                            <div class="our_address">
                                
                                    <div class="address_part">
                                        <h2><i class="uil uil-location-point"></i> Location</h2>
                                        <div class="location">
                                            <address>
                                                <span>FLAT 6,  RIVENDALE COURT, 143-145 PAYNES ROAD, SOUTHAMPTON,  HAMPSHIRE, UNITED KINGDOM, SO15 3BW</span>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="address_part">
                                        <h2><i class="uil uil-globe"></i> Website</h2>
                           <span><a href="https://naptechlabs.co.uk/" target="_blank">https://naptechlabs.co.uk/</a></span>

                                    </div>
                                    <div class="address_part">
                                        <h2><i class="uil uil-phone"></i> Phone</h2>
                                        <span> <a href="tel:+447407113033">+447407113033</a>  <a href="tel:+447448187151">+447448187151</a> </span>
                                    </div>
                               
                            </div>
                            <h1 class="pb-5">Feel Free to Ask</h1>
                            <form action="#">
                                <div class="askfreely_form_Input">
                                    <input type="email" name="email" id="email" placeholder="Your Email">
                                </div>
                                <div class="askfreely_form_Input">
                                    <input type="text" name="shubject" id="shubject" placeholder="Subject">
                                </div>
                                <div class="askfreely_form_Input">
                                    <textarea name="message" id="message" placeholder="Type message"></textarea>
                                </div>
                                <div class="askfreely_form_Submit">
                                    <button type="submit" id="sumbit" name="submit" value="submit" class="primary_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- CONTACT PART END -->
    <!-- ===================================== -->
@endsection
