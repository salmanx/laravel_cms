    @foreach($adminstrations as $admin)
    <div class="column block">

        <h5 class="bk-org title">{{ $admin->position }}</h5>
        <img src="/upload/adminstrations/{{$admin->image}}" width="100">
        <p><a href="{{ route('adminstrations.details', ['id' => $admin->id, 'slug' => $admin->slug]) }}">বিস্তারিত</a></p>
    </div>
    @endforeach

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
            <a href="http://www.noc.fireservicebd.info/">বহুতল ভবনের অনাপত্তি সনদ</a>
        </li>
        <li>
            <a href="https://mail.fireservice.gov.bd/">ওয়েব মেইল</a>
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
            <a href="http://online.forms.gov.bd/" target="_blank">অনলাইনে সেবার আবেদন</a>
        </li>
        <li class="item_2">
            <a href="http://www.nothi.gov.bd/users/login" target="_blank">নথি</a>
        </li>
        <li class="item_3">
            <a href="http://nothi.gov.bd/downloadApp" target="_blank">নথি মোবাইল অ্যাপ</a>
        </li>
        <li class="item_4">
            <a href="http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a" target="_blank">অনলাইনে পাসপোর্টের আবেদন</a>
        </li>
        <li class="item_5">
            <a href="http://xn--d5by7bap7cc3ici3m.xn--54b7fta0cc/" target="_blank">উত্তরাধিকার ক্যালকুলেটর</a>
        </li>
        <li class="item_6">
            <a href="http://www.cga.gov.bd/index.php?option=com_wrapper" target="_blank">অনলাইন চালান যাচাইকরণ</a>
        </li>
        <li class="item_7">
            <a href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction" target="_blank">ভিসা যাচাই</a>
        </li>
        <li class="item_8">
            <a href="http://bris.lgd.gov.bd/pub/?pg=application_form" target="_blank">জন্ম ও মৃত্যু নিবন্ধন</a>
        </li>
        <li class="item_9">
            <a href="http://www.nbrepayment.gov.bd/" target="_blank">অনলাইন আয়কর পরিশোধ</a>
        </li>
        <li class="item_10">
            <a href="https://services.nidw.gov.bd/" target="_blank">জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরণ</a>
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
background: rgba(0, 0, 0, 0) url("/fs/themes/responsive_npf/images/bg_block_list.png") no-repeat scroll center bottom;
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
            <a href="http://www.bangladesh.gov.bd/" target="_blank">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a>
        </li>
        <li>
            <a href="http://ssd.gov.bd/" target="_blank">স্বরাষ্ট্র মন্ত্রণালয় (সুরক্ষা সেবা বিভাগ)</a>
        </li>
        <li>
            <a href="http://mha.gov.bd/" target="_blank">স্বরাষ্ট্র মন্ত্রণালয় (জননিরাপত্তা বিভাগ)</a>
        </li>
        <li>
            <a href="http://www.mopa.gov.bd/en" target="_blank">জনপ্রশাসন মন্ত্রণালয়</a>
        </li>
        <li>
            <a href="http://www.police.gov.bd/" target="_blank">বাংলাদেশ পুলিশ</a>
        </li>
        <li>
            <a href="http://www.bgb.gov.bd/" target="_blank">বিজিবি</a>
        </li>
        <li>
            <a href="fs/http://www.urbanvolunteer-fscd.gov.bd/" target="_blank">কমিউনিটি ভলান্টিয়ার</a>
        </li>
    </ul>
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