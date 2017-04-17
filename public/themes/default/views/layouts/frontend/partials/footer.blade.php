    <div class="footer-artwork" id="footer-artwork">
        &nbsp;
    </div>
    <div class="footer-wrapper full-width" id="footer-wrapper">
        <div id="footer-menu">
            <ul>
                <li>
                    <span>জরুরী প্রয়োজনে- (০২) ৯৫৫৫৫৫৫, ৯৫৫৬৬৬৬, ৯৫৫৬৬৬৭</span>
                </li>
            </ul>
        </div>
        <div class="footer-credit" id="footer">
            <p>পরিকল্পনা ও বাস্তবায়নে:&nbsp;
            <a href="http://www.cabinet.gov.bd/" target="_blank">মন্ত্রিপরিষদ বিভাগ</a>,&nbsp;
            <a href="http://www.a2i.pmo.gov.bd/" target="_blank">এটুআই</a>,&nbsp;<a href="/fs/http://www.bcc.net.bd/" target="_blank">বিসিসি</a>&nbsp;ও&nbsp;
            <a href="http://www.basis.org.bd/" target="_blank">বেসিস</a>।</p>
            <p>কারিগরি সহায়তায়:<a href="http://www.a2i.pmo.gov.bd" target="_blank"><img alt="" src="http://www.a2i.pmo.gov.bd/wp-content/uploads/2016/09/pmologo.png" style="height: 45px; vertical-align: middle; width: 150px"></a></p>
        </div><!-- /footer -->
    </div>
    <script>
       $(function () {


           function initNewsTicker(id, options) {

               var $scroller = $(id);
               $scroller.vTicker('init', options);

               $("#news-ticker .next").click(function (event) {
                   event.preventDefault();
                   var checked = true;
                   $('#news-ticker').vTicker('next', {animate: checked});
               });
               $("#news-ticker .prev,#news-ticker .next").hover(function () {
                   $('#news-ticker').vTicker('next', {animate: checked});
                   $scroller.vTicker('pause', true);
               }, function () {
                   $('#news-ticker').vTicker('next', {animate: checked});
                   $scroller.vTicker('pause', false);
               });
               $("#news-ticker .prev").click(function (event) {
                   event.preventDefault();
                   var checked = true;
                   $('#news-ticker').vTicker('prev', {animate: checked});
               });
           }

           function initNoticeBoardTicker(id, options) {

               var $scroller = $(id);
               $scroller.vTicker('init', options);

               $("#notice-board-ticker .next").click(function (event) {
                   event.preventDefault();
                   var checked = true;
                   $('#notice-board-ticker').vTicker('next', {animate: false});
               });
               $("#notice-board-ticker .prev,#notice-board-ticker .next").hover(function () {
                   $scroller.vTicker('pause', true);
               }, function () {
                   $scroller.vTicker('pause', false);
               });
               $("#notice-board-ticker .prev").click(function (event) {
                   event.preventDefault();
                   var checked = true;
                   $('#notice-board-ticker').vTicker('prev', {animate: checked});
               });
           }

           initNewsTicker('#news-ticker', {});
           //initNoticeBoardTicker('#notice-board-ticker', {showItems:10, margin: 0, padding: 0,animate:false});


       });


       /* Responsive Menu*/


    </script> 
    <script>
       $(".meganizr .mzr-drop").keyup(function () {

           $(".mzr-content").attr("aria-hidden", "true");
           $(this).find(".mzr-content").attr("aria-hidden", "false");
       });
       // ============ start tile for <a> and alt for img ========
       $('a').each(function () {
           $(this).attr('title', $(this).text());
       });

       var lan = "bn";
       if (lan == 'en') {
           $('.mzr-drop a:first-child').each(function () {
               $(this).attr('title', "Enter to get more menu");
           });
       } else {
           $('.mzr-drop a:first-child').each(function () {
               $(this).attr('title', "সাবমেনুর জন্য ক্লিক করুন");
           });
       }
       $('img').each(function () {
           var str = $(this).attr("src");
           var arr = str.split('/');
           var strFine = arr[arr.length - 1];

           var str2 = strFine;
           var arr2 = str2.split('.');
           var strFine2 = arr2[arr2.length - 2];
           $(this).attr('alt', strFine2);
       });
       $('a2iLogo').attr('alt', 'Access to information');
       $('.service-box img').each(function () {
           var strTitle = $(this).parent().find('h4').text();
           $(this).attr('alt', strTitle);
       });
       $('.block img').each(function () {
           var strTitleRight = $(this).closest('.block').find('.title').text();
           $(this).attr('alt', strTitleRight);
       });
       $('#notice-board-ticker .btn').attr('title', 'সকল নোটিশ');
       $('#news-ticker .btn').attr('title', 'সকল খবর');
       $('#search').each(function () {
           $(this).attr('alt', 'Search');
       });
       $('.search-btn').each(function () {
           $(this).attr('alt', 'Enter to search');
       });
       $(".mzr-content").mouseout(function () {
           $(this).hide();
       });
       $(".submenu").mouseover(function () {
           $(this).siblings('.mzr-content').show();
       });
       $(".mzr-content").mouseover(function () {
           $(this).show();
       });
       // ============ end tile for <a> and alt for img ========
    </script>