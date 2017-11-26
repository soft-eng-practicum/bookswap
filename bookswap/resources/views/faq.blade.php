@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Profile</title>
<script src="/js/app.js"></script>

@section('content')
<script type="text/javascript">
jQuery(document).ready(function($){

    var MqM= 768,
    MqL = 1024;

    var faqsSections = $('.faq-group'),
    faqTrigger = $('.trigger'),
    faqsContainer = $('.faq-items'),
    faqsCategoriesContainer = $('.categories'),
    faqsCategories = faqsCategoriesContainer.find('a'),
    closeFaqsContainer = $('.cd-close-panel');

    //select a faq section
    faqsCategories.on('click', function(event){
        event.preventDefault();
        var selectedHref = $(this).attr('href'),
        target= $(selectedHref);
        if( $(window).width() < MqM) {
            faqsContainer.scrollTop(0).addClass('slide-in').children('ul').removeClass('selected').end().children(selectedHref).addClass('selected');
            closeFaqsContainer.addClass('move-left');
            $('body').addClass('cd-overlay');
        } else {
            $('body,html').animate({ 'scrollTop': target.offset().top - 19}, 200);
        }
    });

    //close faq lateral panel - mobile only
    $('body').bind('click touchstart', function(event){
        if( $(event.target).is('body.cd-overlay') || $(event.target).is('.cd-close-panel')) {
            closePanel(event);
        }
    });
    /*
    NOT USING, does not match uniformity of site, moved .faq-group below .categories
    faqsContainer.on('swiperight', function(event){
        closePanel(event);
    });
    */

    faqTrigger.on('click', function(event){
        event.preventDefault();
        $(this).next('.faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
    });

    $(window).on('scroll', function(){
        if ( $(window).width() > MqM ) {
            (!window.requestAnimationFrame) ? updateCategory() : window.requestAnimationFrame(updateCategory);
        }
    });

    function closePanel(e){
        e.preventDefault();
        faqsContainer.removeClass('slide-in').find('li').show();
        closeFaqsContainer.removeClass('move-left');
        $('body').removeClass('cd-overlay');
    }

    function updateCategory(){
        updateCategoryPosition();
        updateSelectedCategory();
    }

    function updateCategoryPosition(){
        if( $(window).width() > MqM) {
            var top = $('.faq').offset().top,
            height = jQuery('.faq').height() - jQuery('.categories').height(),
            margin = 20;
            if( top - margin <= $(window).scrollTop() && top - margin + height > $(window).scrollTop() ) {
                var leftValue = faqsCategoriesContainer.offset().left,
                widthValue = faqsCategoriesContainer.width();
                faqsCategoriesContainer.addClass('is-fixed').css({
                    'left': leftValue,
                    'top': margin,
                    'max-width': '250px',
                    '-moz-transform': 'translateZ(0)',
                    '-webkit-transform': 'translateZ(0)',
                    '-ms-transform': 'translateZ(0)',
                    '-o-transform': 'translateZ(0)',
                    'transform': 'translateZ(0)',
                });
            } else if( top - margin + height <= $(window).scrollTop()) {
                var delta = top - margin + height - $(window).scrollTop();
                faqsCategoriesContainer.css({
                    '-moz-transform': 'translateZ(0) translateY('+delta+'px)',
                    '-webkit-transform': 'translateZ(0) translateY('+delta+'px)',
                    '-ms-transform': 'translateZ(0) translateY('+delta+'px)',
                    '-o-transform': 'translateZ(0) translateY('+delta+'px)',
                    'transform': 'translateZ(0) translateY('+delta+'px)',
                });
            } else {
                faqsCategoriesContainer.removeClass('is-fixed').css({
                    'left': 0,
                    'top': 0,
                });
            }
        }
    }

    function updateSelectedCategory() {
        faqsSections.each(function(){
            var actual = $(this),
            margin = parseInt($('.faq-title').eq(1).css('marginTop').replace('px', '')),
            activeCategory = $('.categories a[href="#'+actual.attr('id')+'"]'),
            topSection = (activeCategory.parent('li').is(':first-child')) ? 0 : Math.round(actual.offset().top);

            if ( ( topSection - 20 <= $(window).scrollTop() ) && ( Math.round(actual.offset().top) + actual.height() + margin - 20 > $(window).scrollTop() ) ) {
                activeCategory.addClass('selected');
            }else {
                activeCategory.removeClass('selected');
            }
        });
    }
});
</script>

<div class="panel">
    <div class="panel-heading"><h1>FAQ</h1></div>
</div>

<section class="faq">
    <ul class="bgimg-talkbox bgimg-talkbox-gray categories">
        <li><a class="selected" href="#basics">Basics</a></li>
        <li><a href="#account">Account</a></li>
        <li><a href="#payments">Payments</a></li>
        <li><a href="#privacy">Privacy</a></li>
        <li><a href="#delivery">Delivery</a></li>
    </ul> <!-- categories -->

    <div class="faq-items">
        <ul id="basics" class="faq-group">
            <li class="faq-title"><h3>Basics</h3></li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>How do I sell a book?</h4></a>
                <div class="faq-content">
                    <p>After creating an account, click on the sell tab. In the selling form,
                        start typing the title of the book you want to sell. Don't worry about
                        knowing all the information, our autocomplete will help you! Describe
                        the book you have and what you're willing to sell it for--it doesn't
                        just have to be for money!
                        (i.e. calculus II book, computer mouse, 20 pencils...)
                    </p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-light">
                <a class="trigger" href="#0"><h4>How do I buy a book?</h4></a>
                <div class="faq-content">
                    <p>Go to our home page and begin searching our database. If you find
                        book you like, contact the seller by clicking on their email which will
                        send you to ClawMail. You can also just browse books by going to our
                        explore page.
                    </p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>How do I sign up?</h4></a>
                <div class="faq-content">
                    <p>Signing up is easy! Click on register to get started.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-light">
                <a class="trigger" href="#0"><h4>How do I change my password?</h4></a>
                <div class="faq-content">
                    <p>Login and click on reset password in settings.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>Can I remove a post?</h4></a>
                <div class="faq-content">
                    <p>In your profile, click on a post, then click the delete button to delete post.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-light">
                <a class="trigger" href="#0"><h4>How do reviews work?</h4></a>
                <div class="faq-content">
                    <p>Reviews in process.</p>
                </div> <!-- faq-content -->
            </li>
        </ul> <!-- faq-group -->

        <ul id="account" class="faq-group">
            <li class="faq-title"><h3>Account</h3></li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>How do I change my password?</h4></a>
                <div class="faq-content">
                    <p>Login into your account, under settings, click on reset password and follow prompt.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-light">
                <a class="trigger" href="#0"><h4>How do I delete my post?</h4></a>
                <div class="faq-content">
                    <p>In your account, click on delete post.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>I forgot my password. How do I reset it?</h4></a>
                <div class="faq-content">
                    <p>At login, click on "Forgot password" and follow the prompts.</p>
                </div> <!-- faq-content -->
            </li>
        </ul> <!-- faq-group -->

        <ul id="payments" class="faq-group">
            <li class="faq-title"><h3>Payments</h3></li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>Can I have an invoice for my purchase?</h4></a>
                <div class="faq-content">
                    <p>Invoices are handled by the seller.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-light">
                <a class="trigger" href="#0"><h4>How do I pay for my purchase?</h4></a>
                <div class="faq-content">
                    <p>This is up to you and the seller! However, we suggest customers to pay in the form of cash.</p>
                </div> <!-- faq-content -->
            </li>
        </ul> <!-- faq-group -->

        <ul id="privacy" class="faq-group">
            <li class="faq-title"><h3>Privacy</h3></li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>Who can access my account?</h4></a>
                <div class="faq-content">
                    <p>Only users have access to their own account.</p>
                </div> <!-- faq-content -->
            </li>
        </ul> <!-- faq-group -->

        <ul id="delivery" class="faq-group">
            <li class="faq-title"><h3>Delivery</h3></li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>Can I have my order shipped?</h4></a>
                <div class="faq-content">
                    <p>Currently, there is no shipping options. All transaction are face-to-face on campus.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-light">
                <a class="trigger" href="#0"><h4>How do returns or refunds work?</h4></a>
                <div class="faq-content">
                    <p>All transactions are handled between the seller and buyer. It advised that you meet up with the seller on campus to handle transactions.</p>
                </div> <!-- faq-content -->
            </li>
            <li class="bgimg-openbook bgimg-openbook-gray-dark">
                <a class="trigger" href="#0"><h4>The seller wants to ship the order to me. Should I send my address information?</h4></a>
                <div class="faq-content">
                    <p>We advise that you not exchange address info, instead meet on campus for a more secure transaction.</p>
                </div> <!-- faq-content -->
            </li>

        </ul> <!-- faq-group -->
    </div> <!-- faq-items -->
    <a href="#0" class="cd-close-panel">Close</a>
</section> <!-- faq -->

@endsection
