    <!-- ====== start jump to selections ======   -->
    <a class="skip-link" href="/fs/accessibility.html" target="_blank">Accessibility Help</a> <a class="skip-link" href="/fs/#jmenu">Jump to Menu</a> <a class="skip-link" href="/fs/#contents">Jump to Content</a> <a class="skip-link" href="/fs/#search">Jump to Search</a> <a class="skip-link" href="/fs/#btnLang">Jump to Language</a> <!-- ====== End jump to selections ======   -->
    <style>
    #domain-selector-panel {
       height: auto;
       min-height: 30px;
       padding: 10px 0;
    }

    .domain-selector {
       width: 250px;
       margin: 0 auto;
    }

    .slide-panel {
       top: 0;
       left: 0;
       z-index: 1000;
       width: 5px;
       position: absolute;
    }

    .content {
       z-index: 1000;
       overflow: hidden;
       text-align: left;
       background-color: #343434;
       height: 0;
       width: 100%;
       color: #fff;
    }

    .slide-panel-button {
       position: relative;
       width: 190px;
       z-index: 20;
       cursor: pointer;
       height: auto;
       padding: 0 5px;
       text-align: left;
    }

    .slide-panel-button:hover {
       color: #9f9d8e;
    }

    .slide-panel-button {
       cursor: pointer;
       color: #fff;
       background-color: #333;
    }

    .slide-panel-button:hover {
       color: #9f9d8e;
    }

    .slide-panel-btns {
       width: 960px;
       margin: 0 auto;
    }

    .cabinet-portal-gov-bd .mainwrapper .box img {
       width: 100px
    }

    @media only screen and (min-width:320px ) and (max-width:979px) {
       #jmenu .mzr-responsive {
           display: none;
       }
       #jmenu li.mzr-drop a.mzr-content {
           top: 0
       }
    }
    </style>
    <script>
       /*
        $(document).ready(function () {
        $(".slide-panel-button").click(function () {
        $('#domain-selector-panel').toggle()//animate({height: "toggle"}, 200);
        if ($('#domain-selector-panel').is(":visible")) {
        $('#div-lang').css('z-index', '200');
        } else {
        $('#div-lang').css('z-index', '1001');
        }
        $(".slide-panel-button").toggle();
        });

        });
        */

    </script> <!--<div class="slide-panel top" style="width: 100%;">
            <div class="content" id="domain-selector-panel" style="display: none;">
                <div id="selection_div">
        
                </div>
            </div>
            <div class="slide-panel-btns">
                            <div class="slide-panel-button" style="display: block;"><i class="flaticon-menu10"></i> বাংলাদেশ জাতীয় তথ্য
                        বাতায়ন
                    </div>
                    <div class="slide-panel-button" id="close-button" style="display: none;"><i class="flaticon-cross5"></i>বাংলাদেশ
                        জাতীয় তথ্য বাতায়ন
                    </div>
                            <div class="slide-panel-button" style="display: block;"><i class="flaticon-menu10"></i> Bangladesh National
                        Portal
                    </div>
                    <div class="slide-panel-button" id="close-button" style="display: none;"><i class="flaticon-cross5"></i>
                        Bangladesh National Portal
                    </div>

                    </div>
        </div>-->

         <script>
          /* Responsive Design*/
          $(document).ready(function () {
              var wi = $(window).width();
              if (wi < 980) {
                  $('.show-menu').click(function () {
                      //$('.mzr-responsive').show();
                      $(".mzr-responsive").slideToggle(700, "linear", function () {
                      });
                  });

                  $(".mzr-drop> a").click(function () {

                      $(this).parent().siblings('li').find('div.mzr-content').removeClass('sibling-toggle slide-visible').addClass('sibling-toggle');
                      $(this).siblings('div').removeClass('sibling-toggle').slideToggle(700, "linear");


                      return false;
                  });
              }

          });

        </script>
        

  <style>
    #selection_div {
       margin: 0 auto;
       width: 250px;
    }

    #selection_div div {
       margin: 0 5px;
    }

    #selection_div select {
       width: 80%;
       float: left;
       margin: 5px 0 0 0;
       padding: 0;
       position: relative;
       clear: both;
       display: block;
       overflow: hidden;
    }

    #selection_div a {
       float: left;
       color: #fff;
       margin: 5px;
    }

    .button_go {
       border: 1px solid #34740e;
       -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
       border-radius: 3px;
       font-size: 12px;
       font-family: arial, helvetica, sans-serif;
       padding: 0 5px;
       text-decoration: none;
       display: inline-block;
       text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.3);
       font-weight: bold;
       color: #FFFFFF;
       background-color: #4ba614;
       background-image: -webkit-gradient(linear, left top, left bottom, from(#4ba614),
           to(#008c00));
       background-image: -webkit-linear-gradient(top, #4ba614, #008c00);
       background-image: -moz-linear-gradient(top, #4ba614, #008c00);
       background-image: -ms-linear-gradient(top, #4ba614, #008c00);
       background-image: -o-linear-gradient(top, #4ba614, #008c00);
       background-image: linear-gradient(to bottom, #4ba614, #008c00);
       filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,
           startColorstr=#4ba614, endColorstr=#008c00);
    }

    .button_go:hover {
       border: 1px solid #224b09;
       background-color: #36780f;
       background-image: -webkit-gradient(linear, left top, left bottom, from(#36780f),
           to(#005900));
       background-image: -webkit-linear-gradient(top, #36780f, #005900);
       background-image: -moz-linear-gradient(top, #36780f, #005900);
       background-image: -ms-linear-gradient(top, #36780f, #005900);
       background-image: -o-linear-gradient(top, #36780f, #005900);
       background-image: linear-gradient(to bottom, #36780f, #005900);
       filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,
           startColorstr=#36780f, endColorstr=#005900);
    }

    .search-btn {
       border: 1px solid #34740e;
       -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
       border-radius: 3px;
       font-size: 12px;
       font-family: arial, helvetica, sans-serif;
       padding: 0 5px;
       text-decoration: none;
       display: inline-block;
       margin: 0 15px 0 5px;
       color: #FFFFFF !important;
       background-color: #4ba614;
       background-image: -webkit-gradient(linear, left top, left bottom, from(#4ba614),
           to(#008c00));
       background-image: -webkit-linear-gradient(top, #4ba614, #008c00);
       background-image: -moz-linear-gradient(top, #4ba614, #008c00);
       background-image: -ms-linear-gradient(top, #4ba614, #008c00);
       background-image: -o-linear-gradient(top, #4ba614, #008c00);
       background-image: linear-gradient(to bottom, #4ba614, #008c00);
       filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,
           startColorstr=#4ba614, endColorstr=#008c00);
    }

    .search-btn:hover {
       border: 1px solid #224b09;
       background-color: #36780f;
       background-image: -webkit-gradient(linear, left top, left bottom, from(#36780f),
           to(#005900));
       background-image: -webkit-linear-gradient(top, #36780f, #005900);
       background-image: -moz-linear-gradient(top, #36780f, #005900);
       background-image: -ms-linear-gradient(top, #36780f, #005900);
       background-image: -o-linear-gradient(top, #36780f, #005900);
       background-image: linear-gradient(to bottom, #36780f, #005900);
       filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,
           startColorstr=#36780f, endColorstr=#005900);
    }
    </style>
    <style>
    .footer-credit {
       float: right;
       font-size: .8em;
       margin: 40px 20px 0 0;
       text-align: right;
    }

    .footer-credit ul li {
       margin: 0;
       padding: 0;
    }

    .footer-credit ul li, a, a:visited {
       color: #666;
       text-decoration: none;
    }

    .footer-credit ul li a:hover {
       text-decoration: underline;
    }

    #footer-menu {
       float: left;
       margin: 40px 0 0 20px;
    }

    #footer-menu ul li {
       float: left;
       border-left: solid 1px #ccc;
    }

    #footer-menu ul li:first-child {
       border-left: solid 1px #eee;
    }

    #footer-menu ul li a {
       padding: 5px;
       color: #000;
    }

    #footer-menu ul li a:hover {
       color: #fff;
       background: #000;
    }

    /*//media query*/

    /** Mobile **/
    @media only screen and (max-width: 767px) , only screen and
       (max-device-width: 767px) {
       #div-lang>form {
           display: none
       }
       .meganizr li.col3 {
           display: none
       }
       .slide-panel-button .flaticon-menu10 {
           display: none;
       }
       .slide-panel-button, .slide-panel-button:hover {
           cursor: default;
           color: #fff;
       }
       .slide-panel-button {
           margin-top: 2px;
           font-size: 14px;
       }
    }

    .slide-panel-button {
       width: 250px !important;
    }

    .cabinet-portal-gov-bd .meganizr>li>a {
       font-size: 20px
    }

    .ad-next, .ad-prev {
       z-index: 10 !important
    }

    .service-box {
       z-index: 10;
       cursor: inherit !important;
    }
    </style>               