<link href="/fs/themes/responsive_npf/stylesheets/base.css" media="all" rel="stylesheet" type="text/css">
<link href="/fs/themes/responsive_npf/stylesheets/skeleton.css" media="all" rel="stylesheet" type="text/css">
<link href="/fs/themes/responsive_npf/stylesheets/style.css" media="all" rel="stylesheet" type="text/css">
<link href="/fs/themes/responsive_npf/stylesheets/meganizr.css" media="all" rel="stylesheet" type="text/css">
<link href="/fs/themes/responsive_npf/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css">
<link href="/fs/npfadmin/public/css/flaticon/flaticon.css" media="all" rel="stylesheet" type="text/css">
<link href="/fs/themes/responsive_npf/templates/ministry/style.css" media="all" rel="stylesheet" type="text/css"><!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>-->

<script src="http://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript">
</script><!-- include the jquery-accessibleMegaMenu plugin script -->

<script src="/fs/themes/responsive_npf/js/jquery-accessibleMegaMenu.js">
</script>
<script>
       //jq160 = jQuery.noConflict( true );
</script>
<link href="/fs/themes/responsive_npf/stylesheets/responsiveslides.css" rel="stylesheet">
<link href="/fs/themes/responsive_npf/templates/ministry/responsive.css" rel="stylesheet">
<link href="/fs/themes/responsive_npf/templates/ministry/accessibility.css" rel="stylesheet">
<script src="/fs/themes/responsive_npf/js/responsiveslides.min.js">
</script>
<script src="/fs/themes/responsive_npf/js/jquery.vticker.js" type="text/javascript">
</script>
<script src="/fs/themes/responsive_npf/js/domain_selector.js" type="text/javascript">
</script>
<script src="/fs/themes/responsive_npf/js/utils.js" type="text/javascript">
</script>
<script src="/fs/themes/responsive_npf/js/yoxview/yoxview-init.js" type="text/javascript">
</script>
<script>
       
       function setLanguageCookie(cookieValue) {
           var today = new Date();
           var expire = new Date();
           var cookieName = 'lang';
           //var cookieValue = "bn";
           var nDays = 5;
           expire.setTime(today.getTime() + 3600000 * 24 * nDays);
           document.cookie = cookieName + "=" + escape(cookieValue)
               + ";expires=" + expire.toGMTString();
       }

       function setLanguage() {
           $("#lang_form").submit();
           return false;
       }
       /*
        function setLanguage(lang){
        setLanguageCookie(lang);
        //location.reload(true);
        window.location.reload(true);
        return false;
        }
        */

       // You can also use "$(window).load(function() {"
       /*
        $(function () {

        setLanguageCookie('bn');
        $( "#domains" ).bind( "click", function() {
        alert( "User clicked on 'foo.'" );
        });
        });
        */

       // You can also use "$(window).load(function() {"
       $(function () {

           // Slideshow 4
           $("#front-image-slider").responsiveSlides({
               auto: true,
               pager: false,
               nav: true,
               speed: 2000,
               maxwidth: 960,
               namespace: "callbacks"
           });
           $("#right-content a").click(function () {
               var url = $(this).attr('href');
               if (isExternal(url) && url != 'javascript:;') {
                   openInNewTab(url);
                   return false;
               }
           });
       });
       function openInNewTab(url) {
           var win = window.open(url, '_blank');
           win.focus();
       }
       function isExternal(url) {
           var match = url.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
           if (typeof match[1] === "string" && match[1].length > 0 && match[1].toLowerCase() !== location.protocol)
               return true;
           if (typeof match[2] === "string" && match[2].length > 0 && match[2].replace(new RegExp(":(" + {
                       "http:": 80,
                       "https:": 443
                   }[location.protocol] + ")?$"), "") !== location.host)
               return true;
           return false;
       }
</script>
<script type="text/javascript">
</script>
<style>
.central-eservices .item_1 a {
   animation: blinker 1s linear infinite;
   color: red;
}

@
keyframes blinker { 50% {
   opacity: 0;
}

}
#domain-list {
   padding: 5px;
}

#inputs>select, #inputs>input {
   float: left;
   margin: 0 5px;
   padding: 0;
   width: 100px;
}

[class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after,
   [class*=" flaticon-"]:after {
   display: inline;
   font-size: 0.9em;
   font-weight: normal;
   margin-right: 5px;
}

.cabinet-portal-gov-bd .meganizr>li>a {
   font-size: 20px
}
</style>
<script>

       $(document).ready(function ($) {


           $("#dawgdrops").accessibleMegaMenu({
               /* prefix for generated unique id attributes, which are required
                to indicate aria-owns, aria-controls and aria-labelledby */
               uuidPrefix: "accessible-megamenu",

               /* css class used to define the megamenu styling */
               menuClass: "meganizr",

               /* css class for a top-level navigation item in the megamenu */
               topNavItemClass: "mzr-drop",

               /* css class for a megamenu panel */
               panelClass: "mzr-content",

               /* css class for a group of items within a megamenu panel */
               panelGroupClass: "mzr-links",

               /* css class for the hover state */
               hoverClass: "hover",

               /* css class for the focus state */
               focusClass: "focus-content",

               /* css class for the open state */
               openClass: "open hover-content"
           });

       });
</script>