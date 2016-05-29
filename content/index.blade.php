@extends('_includes.base')

@section('body')
    <div class="welcome">
        <div class="container text-xs-center">
            <img class="logo" src="/assets/images/logo.svg" alt="Scalex Systems Pvt. Ltd."> <br>

            <h2 class="m-y-3">Building Scalable Experiences</h2>
        </div>
    </div>

    <div class="container text-xs-center m-y-3">
        <p>We strive for a great User Experience Design, which is reflected in our products.</p>

        <div class="row products m-y-3">
            <div class="col-xs-12 col-md-8 col-md-offset-2 product">
                <a href="https://zero.school/" class="img-link">
                    <img src="/assets/images/zero-logo.svg" alt="Zero.School" class="logo">
                </a> <br>

                <p class="m-y-2">With our product Zero&trade;, we aim to make seamless digital infrastructure accessible and affordable to every educational institution in the country.</p>

                <a href="https://zero.school/" class="btn btn-primary">Learn more about Zero</a>
            </div>
        </div>
    </div>

    <div class="container about">
        <div class="row">
            <div class="col-xs-12 col-md-6 fl">
                <div class="card contact-card fl-a">
                    <div class="card-block clearfix">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4">
                                <img src="/assets/images/mac.png" alt="Contact Us" class="pull-left">
                            </div>
                            <div class="col-xs-6 col-sm-8">
                                <h4>Contact Us</h4>
                                <p>
                                    To know more about our product, or business enquiry or to just have a chat, reach us here:
                                </p>
                                <p>
                                    <i class="fa fa-fw fa-phone-square"></i> <a href="tel:+91-847-399-4808">+91 (847) 399-4808</a>
                                </p>
                                <p>
                                    <i class="fa fa-fw fa-envelope"></i> <a href="mailto:hello@scalex.xyz">hello@scalex.xyz</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 fl">
                <div class="card join-card fl-a">
                    <div class="card-block clearfix">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4">
                                <img src="/assets/images/join.png" alt="Work with us" class="pull-left">
                            </div>
                            <div class="col-xs-6 col-sm-8">
                                <h4>Work with us!</h4>
                                <p>Want to be a part of a team who believes to deliver the best experiences to the customers, then drop us a mail and we will get in touch with you.</p>
                                <p>
                                    <a href="https://www.linkedin.com/company/scalex/jobs" class="btn btn-primary">View Openings</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="m-y-3 container text-xs-center">
        <div>
            <img src="/assets/images/logo.svg" alt="Scalex System Pvt. Ltd." class="logo">
        </div>

        <p class="m-y-2">
            <small>Copyright 2016 &copy; Scalex Systems Pvt. Ltd.</small>
        </p>

        <div>
            <a href="https://www.linkedin.com/complany/scalex" class="m-x-1 social"><i class="fa fa-fw fa-2x fa-linkedin-square"></i></a>
            <a href="https://twitter.com/scalexsystems" class="m-x-1 social"><i class="fa fa-fw fa-2x fa-twitter-square"></i></a>
            <a href="https://facebook.com/scalexsystems" class="m-x-1 social"><i class="fa fa-fw fa-2x fa-facebook-square"></i></a>
            <a href="https://instagram.com/zero.school" class="m-x-1 social"><i class="fa fa-fw fa-2x fa-instagram"></i></a>
        </div>
    </footer>
@stop
