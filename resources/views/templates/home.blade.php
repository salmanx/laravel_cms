<div class="twelve columns" id="left-content">
<div class="row mainwrapper">
    <div class="row" id="notice-board">
        <div class="notice-board-bg">
            <h2>নোটিশ বোর্ড</h2>
            <div id="notice-board-ticker">
                <ul>
                    @foreach($notices as $notice)
                        <li>
                            <a href="{{ route('notice.post', ['id' => $notice->id, 'slug' => $notice->slug]) }}">{{ $notice->title }}</a>
                        </li>
                    @endforeach 
                </ul><a class="btn right" href="/fs/site/view/notices">সকল</a>
            </div>
        </div>
    </div>
    <style>
    #notice-board-ticker ul li{
    list-style:none;
    }
    </style>
    <script>
    </script>
    <div class="row" id="news" style=" background-color: #EFEFEF;border: 1px solid #CCCCCC;margin: 20px 0;padding: 10px;">
        <h5 style="float:left;margin:-3px 5px 0 0; font-weight:bold;font-size:.9em">খবর:</h5>
        <div id="news-ticker" style="overflow: hidden; position: relative; height: 0px;">
            <ul style="font-size: 0.9em; position: absolute; margin: 0px; padding: 0px; width: 95%;">

            @foreach($news as $n)
                <li>
                    <a href="{{ route('news.details', ['id' => $n->id, 'slug' => $n->slug]) }}">{{ $n->title }}</a> <i>(&#x09E8;&#x09E6;&#x09E7;&#x09EC;-&#x09E6;&#x09ED;-&#x09E7;&#x09EE;)</i>
                </li>
            @endforeach    
            </ul>
            <div style="float:right">
                <a class="btn" href="/fs/site/view/news">সকল</a>
            </div>
        </div>
    </div>
    <style>
    </style>
    <script>
    </script>

    @foreach($categories as $category)
    <div class="row">
        <div class="six columns service-box box" id="box-1">
            <h4>{{ $category->title }}</h4>
            <img alt="" height="" src="http://fireservice.portal.gov.bd/sites/default/files/files/fireservice.portal.gov.bd/front_service_box/4f652ad4_3386_4592_b41f_a8e30f6f2ada/logo.jpg" width="110">
            <ul class="caption fade-caption" style="margin:0">
               @foreach($category->posts as $post)
                    <li>
                        <a href="{{ route('blog.post', ['id' => $post->id, 'slug' => $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </li>
               @endforeach
            </ul>
        </div>
    </div>
    @endforeach

    <style>
    </style>
    <script>
    </script>
</div>
</div>
<div class="four columns right-side-bar" id="right-content">
<div class="column block">
    <h5 class="bk-org title"></h5>
    <p>মহাপরিচালক</p><img alt="" height="" src="http://fireservice.portal.gov.bd/sites/default/files/files/fireservice.portal.gov.bd/office_head/5d0e733c_301e_410f_a42e_9021c62911d6/Dg%20Sir.jpg" width="100">
    <p><a href="/fs/site/office_head/c4edd28b-af4f-433c-84a3-e05441d63ee1/%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BF%E0%A6%A4">বিস্তারিত</a></p>
</div>
<div class="column block">
    <h5 class="bk-org title"></h5>
    <p>পরিচালক (প্রশাসন ও অর্থ)</p><img alt="" height="" src="http://fireservice.portal.gov.bd/sites/default/files/files/fireservice.portal.gov.bd/office_head/4994d135_1836_4753_985a_0905d746c77b/D.Admin.jpg" width="100">
    <p><a href="/fs/site/office_head/31888bf0-51d6-4a06-a6ee-069725692b37/%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BF%E0%A6%A4">বিস্তারিত</a></p>
</div>
<div class="column block">
    <h5 class="bk-org title"></h5>
    <p>পরিচালক (অপারেশন ও মেইনটেন্যান্স)</p><img alt="" height="" src="http://fireservice.portal.gov.bd/sites/default/files/files/fireservice.portal.gov.bd/office_head/baa495fe_b8d1_49ca_910e_cce44ffeb0a2/Director%20Operation.jpg" width="100">
    <p><a href="/fs/site/office_head/ffa9b96d-1c1e-4f1a-8245-06f049078bd0/%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BF%E0%A6%A4">বিস্তারিত</a></p>
</div>
<div class="column block">
    <h5 class="bk-org title"></h5>
    <p>পরিচালক (প্রশিক্ষণ, পরিকল্পনা ও উন্নয়ন)</p><img alt="" height="" src="http://fireservice.portal.gov.bd/sites/default/files/files/fireservice.portal.gov.bd/office_head/fafff6b4_6160_40df_8010_90c5a35fdae4/Mosharraf%20Sir.jpg" width="100">
    <p><a href="/fs/site/office_head/ebb74e45-f1c2-4294-bb35-d86442734c12/%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BF%E0%A6%A4">বিস্তারিত</a></p>
</div>
<style>
.column.block a{
text-decoration:underline;
}

#right-content img {
float: left;
margin-right: 20px;
}
</style>
<script>
</script>
<div class="column block">
    <h5 class="bk-org title">আভ্যন্তরীণ ই-সেবা</h5>
    <ul>
        <li>
            <a href="/fs/http://www.noc.fireservicebd.info/">বহুতল ভবনের অনাপত্তি সনদ</a>
        </li>
        <li>
            <a href="/fs/https://mail.fireservice.gov.bd/">ওয়েব মেইল</a>
        </li>
    </ul>
</div>
<style>
</style>
<script>
</script>
<div class="column block central-eservices">
    <h5 class="bk-org title eservice-title">কেন্দ্রীয় ই-সেবা</h5>
    <ul>
        <li class="item_1">
            <a href="/fs/http://online.forms.gov.bd/">অনলাইনে সেবার আবেদন</a>
        </li>
        <li class="item_2">
            <a href="/fs/http://www.nothi.gov.bd/users/login">নথি</a>
        </li>
        <li class="item_3">
            <a href="/fs/http://nothi.gov.bd/downloadApp">নথি মোবাইল অ্যাপ</a>
        </li>
        <li class="item_4">
            <a href="/fs/http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a">অনলাইনে পাসপোর্টের আবেদন</a>
        </li>
        <li class="item_5">
            <a href="/fs/http://xn--d5by7bap7cc3ici3m.xn--54b7fta0cc/">উত্তরাধিকার ক্যালকুলেটর</a>
        </li>
        <li class="item_6">
            <a href="/fs/http://www.cga.gov.bd/index.php?option=com_wrapper">অনলাইন চালান যাচাইকরণ</a>
        </li>
        <li class="item_7">
            <a href="/fs/http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction">ভিসা যাচাই</a>
        </li>
        <li class="item_8">
            <a href="/fs/http://bris.lgd.gov.bd/pub/?pg=application_form">জন্ম ও মৃত্যু নিবন্ধন</a>
        </li>
        <li class="item_9">
            <a href="/fs/http://www.nbrepayment.gov.bd/">অনলাইন আয়কর পরিশোধ</a>
        </li>
        <li class="item_10">
            <a href="/fs/https://services.nidw.gov.bd/">জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরণ</a>
        </li>
    </ul>
</div>
<style>
.eservice-title {
background-color: #609513 !important;
color: #fff;
font-size: 12px;
padding: 5px;
}
.block ul li {
background: rgba(0, 0, 0, 0) url("/themes/responsive_npf/images/bg_block_list.png") no-repeat scroll center bottom;
font-size: 120%;
height: auto;
list-style-type: none;
margin-bottom: 5px;
padding-bottom: 8px;
padding-left: 32px;
padding-top: 0;
}

</style>
<script>
</script>
<div class="column block">
    <h5 class="bk-org title">গুরুত্বপূর্ণ লিংক</h5>
    <ul>
        <li>
            <a href="/fs/http://www.bangladesh.gov.bd/">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a>
        </li>
        <li>
            <a href="/fs/http://ssd.gov.bd/">স্বরাষ্ট্র মন্ত্রণালয় (সুরক্ষা সেবা বিভাগ)</a>
        </li>
        <li>
            <a href="/fs/http://mha.gov.bd/">স্বরাষ্ট্র মন্ত্রণালয় (জননিরাপত্তা বিভাগ)</a>
        </li>
        <li>
            <a href="/fs/http://www.mopa.gov.bd/en">জনপ্রশাসন মন্ত্রণালয়</a>
        </li>
        <li>
            <a href="/fs/http://www.police.gov.bd/">বাংলাদেশ পুলিশ</a>
        </li>
        <li>
            <a href="/fs/http://www.bgb.gov.bd/">বিজিবি</a>
        </li>
        <li>
            <a href="/fs/http://www.urbanvolunteer-fscd.gov.bd/">কমিউনিটি ভলান্টিয়ার</a>
        </li>
    </ul><a class="btn" href="/fs/site/view/Important%20Links" style="display:block;text-align:center;">সকল লিংকসমূহ</a>
</div>
<style>
</style>
<script>
</script>
<div class="column block">
    <h5 class="bk-org title">ইনোভেশন কর্নার</h5>
</div>
<style>
</style>
<script>
</script>
<div class="column block">
    <h5 class="bk-org title">সামাজিক যোগাযোগ</h5>
</div>
<div class="clearfix"></div>
<style>
.share-buttons img {
    width: 30px;
    padding: 2px;
    border: 0;
    box-shadow: 0;
    display: inline;
}
</style>
<script>
</script> <!-- <div style="" class="column block">

        <h5 style="background-color: #eee;">
                                                                                            দর্শক সংখ্যাঃ
                                <span style="padding:5px; background-color: #609513; color: #fff; font-weight:bold;">
                                    <span>
        </h5>
    </div> -->
</div>