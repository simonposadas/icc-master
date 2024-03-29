@extends('layouts.nav')

@section('title','Credentials')

@section('content')
<head>
<style type="text/css">
ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, body, html, div.paragraph, blockquote, fieldset, input { margin: 0; padding: 0; }
 ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, body, html, p, blockquote, fieldset, input { margin: 0; padding: 0; }
 a img { border: 0; }
 a { color: #da7b00; text-decoration: none; }
 a:hover { color: #ffaa3d; }
 body { font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #827762; margin: 0; padding: 0; background: #880000; }
 #wrapper { background: url(images/body-bg.jpg); }
 h2 { font-size: 1.9em; margin: 0; padding: .3em 0; line-height: 1.2; font-family: "Rokkitt", Arial, Helvetica, sans-serif; font-weight: 700; -webkit-text-stroke-width: 0.2px; }
 #content h2 { color: #880000; }
 div.paragraph { font-size: 1em; line-height: 1.5; margin: 0; padding: .5em 0; }
 p { font-size: 1em; line-height: 1.5; margin: 0; padding: .5em 0; }
 blockquote { font-style:italic; border-left:4px solid #da7b00; margin:10px 0 10px 0; padding-left:20px; line-height:1.5; color:#888; }
 #content div.paragraph { color: #827762; }
 #content p { color: #827762; }
 #content abbr { border-bottom: 1px dotted #8f8f8f; }
 #header-wrap { background: url(images/header-bg-red.jpg) center bottom repeat-x; padding: 15px 0 150px; }
 #main-wrap { position: relative; margin-top: -140px; }
 #wrap-in { background: url(images/wrap-inner-bg-red.png) center bottom repeat-x; }
 #page { margin: 0 auto; width: 975px; z-index: 2; position: relative; }
 #header-wrap, #main-wrap, #footer-wrap { min-width: 960px; }
 #header { padding: 0 50px; margin: 0; }
 .wsite-logo, .wsite-logo a:hover { color: #ffffff; }
 #logo, #logo a { font-size: 42px; color: #fff; margin: 0; font-weight: 700; padding: 0; float: left; font-family: "Rokkitt", Arial, Helvetica, sans-serif; -webkit-text-stroke-width: 0.25px; }
 #header-right a { color: #da7b00; }
 #header-right a:hover { color: #ffc67d; }
 #header { width: 100%; height: 90px; }
 #header, #header table { border-collapse: collapse; border-spacing: 0; }
 #header td { vertical-align: middle; text-align: left; }
 #logo { padding: 25px 0 25px 20px; }
 #header-right { padding: 0 20px 0 10px; }
 #header-right table { float: right; width: 1px; }
 #header-right td { padding: 0; }
 #header-right .phone-number .wsite-text { color: #270505; font-size: 13px; font-weight: 700; font-family: "Lato", "Myriad Pro", Arial, Helvetica, sans-serif; text-decoration: none; margin: 2px 0 0 15px; display: block; white-space: nowrap; }
 #header-right .wsite-social { vertical-align: middle; margin: 0 0 0 12px; }
 .wsite-social-item { width: 23px; height: 23px; margin: 0 0 0 3px; background-image:url(images/social-red.png); }
 #footer .wsite-social-item { background-image:url(images/social-black.png); }
 .wsite-social-facebook {background-position:0 0;}
 .wsite-social-facebook:hover {background-position:0 -23px;}
 .wsite-social-facebook:active {background-position:0 -46px;}
 .wsite-social-pinterest {background-position:-23px 0;}
 .wsite-social-pinterest:hover {background-position:-23px -23px;}
 .wsite-social-pinterest:active {background-position:-23px -46px;}
 .wsite-social-twitter {background-position:-46px 0;}
 .wsite-social-twitter:hover {background-position:-46px -23px;}
 .wsite-social-twitter:active {background-position:-46px -46px;}
 .wsite-social-linkedin {background-position:-69px 0;}
 .wsite-social-linkedin:hover {background-position:-69px -23px;}
 .wsite-social-linkedin:active {background-position:-69px -46px;}
 .wsite-social-mail {background-position:-92px 0;}
 .wsite-social-mail:hover {background-position:-92px -23px;}
 .wsite-social-mail:active {background-position:-92px -46px;}
 .wsite-social-rss {background-position:-115px 0;}
 .wsite-social-rss:hover {background-position:-115px -23px;}
 .wsite-social-rss:active {background-position:-115px -46px;}
 .wsite-social-flickr {background-position:-138px 0;}
 .wsite-social-flickr:hover {background-position:-138px -23px;}
 .wsite-social-flickr:active {background-position:-138px -46px;}
 .wsite-social-plus {background-position:-161px 0;}
 .wsite-social-plus:hover {background-position:-161px -23px;}
 .wsite-social-plus:active {background-position:-161px -46px;}
 .wsite-social-vimeo {background-position:-184px 0;}
 .wsite-social-vimeo:hover {background-position:-184px -23px;}
 .wsite-social-vimeo:active {background-position:-184px -46px;}
 .wsite-social-yahoo {background-position:-207px 0;}
 .wsite-social-yahoo:hover {background-position:-207px -23px;}
 .wsite-social-yahoo:active {background-position:-207px -46px;}
 .wsite-social-youtube {background-position:-230px 0;}
 .wsite-social-youtube:hover {background-position:-230px -23px;}
 .wsite-social-youtube:active {background-position:-230px -46px;}
 #header-right .search { }
 #header-right .wsite-search { margin: 0 0 0 15px; vertical-align: middle; }
 #header-right .wsite-search-input { width: 132px; height: 15px; border: none; padding: 8px 10px !important; color: #fff; font-size: 12px; background: url(images/input-bg.png) no-repeat; }
 #header-right .wsite-search-button { position: relative; width: 28px; height: 31px; color: #010101; font-size: 12px; border: none; margin: 0; padding: 0; background: url(images/submit-bg-red.png) no-repeat; }
 #nav-wrap { }
 #topnav { clear: both; margin: 0 20px; padding: 0 10px; background: #771d1d url(images/nav-bg-red.png) repeat-x; border-bottom: 5px solid #771d1d; border-top: 5px solid #771d1d; }
 #topnav ul { list-style: none; float: left; }
 #topnav ul li { list-style: none; float: left; padding: 9px 15px 9px 0; background: url(images/nav-sep-red.png) right center no-repeat; margin-right: 10px; }
 #topnav a { float: left; display: block; color: #ffffff; text-decoration: none; font-family: 'Brawler', Arial, Helvetica, sans-serif; padding: 8px 20px; outline: 0; list-style-type: none; font-size: 16px; line-height: 1; border: 1px solid transparent; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; -webkit-text-stroke-width: 0.2px; }
 #topnav ul > li:last-child, #topnav ul > span:last-child li { background: none; padding-right: 0; }
 #topnav li#active a, #topnav a:hover { color: #fff; background: #da7b00 url(images/nav-active-red.png) no-repeat; border: 1px solid #da7b00; }
 #wsite-menus .wsite-menu li a { padding: 10px; color: #ffffff; background: #4c0000; border: 0; border-bottom: 1px solid #771d1d; }
 #wsite-menus .wsite-menu li:last-child a { border-bottom: none; }
 #wsite-menus .wsite-menu li:last-child a:hover { border-bottom: none; }
 #wsite-menus .wsite-menu li a:hover { color: #fff; background: #350000; }
 #main-bot { background: url(images/main-bot.png) left bottom no-repeat; padding-bottom: 25px; }
 #main-inner { background: url(images/main-inner.png) repeat-y; padding: 10px 30px 0; }
 #main { }
 #content { min-height: 400px; padding: 18px 18px 28px 18px; }
 #banner { position: relative; background: url(images/banner-bot.png) left bottom no-repeat; padding-bottom: 24px; overflow: hidden; }
 #banner-outer { background: #e9e1d3; padding: 9px; border: 1px solid #d4cbb9; }
 #banner-inner { border: 4px solid #f6f3ec; }
 .tall-header-page .wsite-header { width: 887px; height: 323px; background: url(images/banner-tall.jpg) no-repeat; }
 .short-header-page .wsite-header { width: 887px; height: 183px; background: url(images/banner-short.jpg) no-repeat; }
 .no-header-page #banner-outer { display: none; }
 .landing-page #banner { overflow: hidden; }
 .landing-page #banner-inner { background: #faf8f6; border-color: #f2eeea; }
 #bannerleft { float: right; padding: 0; position: relative; border-left: 5px solid #f2eeea; }
 .landing-page .wsite-header { width: 494px; height: 373px; background: url(images/banner-landing.jpg) no-repeat; }
 .landing-banner-outer { display: table; #position: relative; overflow: hidden; }
 .landing-banner-mid { #position: absolute; #top: 50%; display: table-cell; vertical-align: middle; }
 .landing-banner-inner { #position: relative; #top: -50%; }
 #bannerright { float: left; width: 323px; height: 373px; padding: 0 30px; }
 #bannerright h2 { color: #880000; font-size: 34px; font-family: "Rokkitt", "Myriad Pro", Arial, Helvetica, sans-serif; font-weight: 700; padding: 0px; line-height: 34px; }
 #bannerright div.paragraph { color: #827762; font-size: 1em; padding: 20px 0px; line-height: 140%; margin: 0; }
 #bannerright p { color: #827762; font-size: 1em; padding: 20px 0px; line-height: 140%; margin: 0; }
 #bannerright .wsite-button { margin: 0; }
 .splash-page #header { width: 532px; }
 .splash-page #banner { width: 527px; height: 161px; padding: 6px 4px 4px 6px; background: url(images/banner-splash-bg.png) no-repeat; }
 .splash-page .wsite-header { width: 515px; height: 149px; background: url(images/banner-splash.jpg) no-repeat; }
 .splash-page #content-container { width: 528px; }
 .splash-page #content { width: 528px; }
 .splash-page #footer { width: 524px; }
 #footer-wrap { background: #880000 url(images/footer-wrap-red.png) center top repeat; position: relative; z-index: 1; }
 #footer { padding: 20px 50px 50px; font-size: 12px; color: #953f3f; font-family: Arial, Helvetica, sans-serif; text-align: right; }
 #footer div.paragraph, #footer .wsite-form-label, #footer { color: #953f3f; }
 #footer p, #footer .wsite-form-label, #footer { color: #953f3f; }
 #footer a { color: #fff; }
 #footer a:hover { color: #c88c8c; }
 #footer h2 { font-size: 18px; margin: 0; color: #953f3f; padding: .3em 0; line-height: 1.5; font-family: "Rokkitt", "Myriad Pro", Arial, Helvetica, sans-serif; font-weight: 700; border-bottom:1px solid #662020; margin-bottom:5px; }
 #footer span { vertical-align: middle; }
 .wsite-footer { margin-bottom: 15px; }
 #footer blockquote { border-left:4px solid #953f3f; color:#953f3f; }
 #footer hr {background:#953f3f !important;}
 .wsite-form-label { display: inline-block; color: #827762; font-family: Arial, Helvetica, sans-serif; font-size: 1em; padding: 12px 0 5px 0; }
 .form-radio-container { color: #827762; font-size: 1em; font-family: Arial, Helvetica, sans-serif; }
 .wsite-form-input, .wsite-search-element-input { font-family: Arial, Helvetica, sans-serif; font-size: 1em; color: #827762; background: #fff url(images/field.png) repeat-x; border: 1px solid #d4cbb9; padding: 6px 4px 6px !important; line-height: 1; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
 .form-select { color: #827762; background: url#fff (field.png); border: 1px solid #d4cbb9; font-size: 1em; font-family: Arial, Helvetica, sans-serif; padding: 3px 4px; width: 320px; height: 27px; line-height: 27px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
 .wsite-form-container { margin-top:0px !important; text-align:left; }
 .wsite-footer .wsite-form-label { font-size: 1em; padding: 5px 0 2px 0; }
 .wsite-footer .wsite-form-field { width:300px !important; }
 .wsite-footer .form-radio-container { font-size:1em; color:#953f3f; }
 .wsite-footer .wsite-form-input { font-size: 1em; width: 100% !important; }
 .wsite-footer .form-select { width: 100%; }
 .wsite-button { color: #fff !important; font-family: Arial, Helvetica, sans-serif; height: 34px; display: inline-block; font-size: 12px; border: none; font-weight: bold; font-size: 13px; text-decoration: none; padding: 0 15px 0 0; background: url(images/button_red.png) no-repeat 100% -105px; text-shadow:0 -1px 0 rgba(0,0,0,0.9); }
 .wsite-button:hover { background-position: 100% -140px; }
 .wsite-button:active { background-position: 100% -175px; }
 .wsite-button-inner { height: 34px; line-height: 34px; display: block; font-size: 14px; font-weight: bold; border: none; text-decoration: none; padding: 0 10px 0 25px; background: url(images/button_red.png) no-repeat 0 0; }
 .wsite-button:hover .wsite-button-inner { background-position: 0 -35px; }
 .wsite-button:active .wsite-button-inner { background-position: 0 -70px; }
 .wsite-button-large { height: 41px; background: url(images/button_large_red.png) no-repeat 100% -126px; padding: 0 15px 0 0; }
 .wsite-button-large:hover { background-position: 100% -168px; }
 .wsite-button-large:active { background-position: 100% -210px; }
 .wsite-button-large .wsite-button-inner { height: 41px; line-height: 41px; padding: 0 10px 0 25px; background: url(images/button_large_red.png) no-repeat 0 0; }
 .wsite-button-large:hover .wsite-button-inner { background-position: 0 -42px; }
 .wsite-button-large:active .wsite-button-inner { background-position: 0 -84px; }
 .wsite-button-large.wsite-button-highlight { background-image: url(images/button_large_highlight_red.png); }
 .wsite-button-large.wsite-button-highlight .wsite-button-inner { background-image: url(images/button_large_highlight_red.png); }
 .wsite-button-highlight { background-image: url(images/button_highlight_red.png); }
 .wsite-button-highlight .wsite-button-inner { background-image: url(images/button_highlight_red.png); }

div.paragraph ul, div.paragraph ol { padding-left: 3em !important; margin: 5px 0 !important; }
div.paragraph li { padding-left: 5px !important; margin: 3px 0 0 !important; }
div.paragraph ul, div.paragraph ul li { list-style: disc outside !important; }
div.paragraph ol, div.paragraph ol li { list-style: decimal outside !important; }
    body{
        background-image: url('images/Orange.jpg');
    }
    #Details{
        background-color: #E6E6FA;
        padding: 50px;
        margin: auto;
    }
    div.next{
        position: absolute;
        right: 5%;
        bottom: 0%;
    }
</style>
</head>

<body class=" short-header-page wsite-theme-light  wsite-page-regular-event-packages"><div id="wrapper">
    <div id="wrap">
        <div id="wrap-in">
            <div id="header-wrap" class="wsite-background">
                <div id="page">
                    <div id="header-container">
                        <table id="header">
                            <tr>
                                <td id="logo"><span class="wsite-logo">

    <a href="/">
    
    <span id="wsite-title">Irmalyn's Catering Services</span>
    
    </a>

</span></td>
                                <td id="header-right">
                                    <table>
                                        <tr>
                                            <td class="phone-number"><span class="wsite-text wsite-phone">
    "Events Should Never Have Regrets, that's a Promise!"
</span></td>
                                            <td class="social"></td>
                                            <td class="search"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="main-wrap">
                <div id="nav-wrap">
                    <div id="page">
                        <div id="topnav">
                            <ul class="wsite-menu-default">
                                    <li id="pg960336322618870310" class="wsite-menu-item-wrap">
                                        <a
                                                    href="/"
                                            class="wsite-menu-item"
                                            >
                                            Home
                                        </a>
                                        </li>
                  
                  <li id="pg574716154110018332" class="wsite-menu-item-wrap">
                    <a
                          href="/Menu"
                      class="wsite-menu-item"
                      >
                      Packages
                    </a>
                    </li>
                  
                  <li id="pg841566409434329637" class="wsite-menu-item-wrap">
                    <a
                          href="/About"
                      class="wsite-menu-item"
                      >
                      About
                    </a>
                    </li>

                  <li id="pg919075164987641044" class="{{ Request::is('reservation') || Request::is('reservation/*') ? "active" : "" }}" class="wsite-menu-item-wrap">
                    <a
                          href="{{ route('r.index') }}"
                      class="wsite-menu-item"
                      >
                      Reservation
                    </a>
                    </li>

                  <li id="pg919075164987641044" class='{{ Request::is('credential') || Request::is('credential/*') }}}' class="wsite-menu-item-wrap">
                    <a
                          href="{{ route('credential') }}""
                      class="wsite-menu-item"
                      >
                      Check Credentials
                    </a>
                    </li>

                  <li id="pg919075164987641044" class="wsite-menu-item-wrap">
                    <a
                          href="/Contact"
                      class="wsite-menu-item"
                      >
                      Contacts
                    </a>
                    </li>
                            </ul>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                </div>
                <div id="page">
                    <div id="main-bot">
                        <div id="main-inner">
                            <div id="main">
                                <div id="banner">
                                <div id="content"><div id="wsite-content" class="wsite-elements wsite-not-footer">
    <h2 class="wsite-content-title" style="text-align:center;"><font size="7">Check Credentials</font></h2>

<div class="paragraph" style="text-align:center;"><strong><font size="6"></font></strong></div>

<div><div class="wsite-multicol"><div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
    <table class="wsite-multicol-table">
        <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
                
                                    <div id="banner-outer">
                                        <div id="banner-inner">
                                        
        <div class="col-md-6 col-md-offset-3">
            <div id='Details'>
                <center><h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Input Code </h2></center>
                {!! Form::text('reserv_id', '', ['class' => 'form-control', 'style' => 'text-align:center; font-size:30px;']) !!}
            </div>
        </div>

        
    
                                            <div class="wsite-header"></div>
                                        </div>
                                    </div>
                                </div>
                                
                
                    
    
    


<div><div class="wsite-multicol"><div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
    <table class="wsite-multicol-table">
        <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
                <td class="wsite-multicol-col" style="width:25%; padding:0 15px;">
                    
                        

<div class="wsite-spacer" style="height:50px;"></div>


                    
                </td>               
                    
                        

<div style="text-align:center;"><div style="height: 10px; overflow: hidden;"></div>
             <button class="wsite-button wsite-button-small wsite-button-normal" id='btn-check' type="button">
             <span class="wsite-button-inner">Check</span></button>
        </div>


                    
                                                <td class="wsite-multicol-col" style="width:25%; padding:0 15px;">
                    
                        

<div class="wsite-spacer" style="height:50px;"></div>


                    
                </td>           </tr>
        </tbody>
    </table>
</div></div></div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div class="wsite-adsense"> 

            <script type="text/javascript" src="//www.weebly.com/weebly/apps/serveAds.php?type=adsense&elementid=631373015468400789&ineditor=0&subdomain=www.febondicatering.com&pubid=pub-2651614666951878&adformat=468x60&adtype=text_image&bordercolor=FFFFFF&bgcolor=FFFFFF&linkcolor=0F53FF&textcolor=000000&urlcolor=008000"></script></div>
</div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer-wrap">
    <div id="page">
        <div id="footer"><div class='wsite-elements wsite-footer'>
<div style="text-align:center;"><div style="height:0px;overflow:hidden"></div>
<span class="wsite-social wsite-social-default"><a class='first-child wsite-social-item wsite-social-facebook' href='https://www.facebook.com/CakesCateringAndEventsSpecialist/' target='_blank'><span class='wsite-social-item-inner'></span></a><a class='last-child wsite-social-item wsite-social-mail' href='mailto:irmalynp@gmail.com' target='_blank'><span class='wsite-social-item-inner'></span></a></span>
<div style="height:0px;overflow:hidden"></div></div>

<div class="paragraph" style="text-align:center;">22 Lempira St. Meralco Village Taytay, Rizal&nbsp;<br />(T) (02) 661-0076<br /><span>Copyright &copy; 2008&nbsp;<a href="http://www..com">Irmalyn's Catering Services</a>. All rights reserved.</span></div></div>



<script>
    $('#btn-check').on('click', function (){
        window.location = '/credential/' + $('input[name="reserv_id"]').val() + '/check-code';
//       $('form').submit(); 
    });
    </script>

@endsection
