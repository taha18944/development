<?php /* Template Name: Live Subscription */
    get_header();
    header('Access-Control-Allow-Origin: *');
    global $wpdb;
    if (apply_filters('blocksy:single:has-default-hero', true)) {
        echo blocksy_output_hero_section([
            'type' => 'type-2'
        ]);
    }  
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    #main{
        background: #fff;
    }
    .bg-gig{
        background: #f8f9fb;
    }
    .top_heading h4{
        font-size: 15px!important;
        font-family: 'Raleway', sans-serif!important;
        font-weight: 800!important;
    }
    .custom_input input {
        border-radius: 5px!important;
        padding-left: 10px!important;
        box-shadow: none;
        border: 1px solid #ffb600;
    }
    
    .sign_up_btn button{
        min-width: 120px;
        height: 35px!important;
        padding-bottom: 30px!important;
        margin-top: 10px;
        background-color:#fac147!important;
        text-align:center!important; 
        font-weight: 600;
        color: #fff!important;
        padding-top: 5px!important;
    }

    .custom_dropdown{
        height: 28px!important;
        width: 180px!important;
    }
    
    .select2-container--default .select2-selection--single{
        border-style: solid;
        border-color: #ffb600 !important;
    }

    input:focus{
        outline: none;
    }  
    /*input[type="checkbox"] {
        border: 1px solid #ffb600 !important;
        appearance: none !important;
        border-radius: 5px !important;
        padding: 7px 7px 7px 7px !important;
        display: inline-block !important;
    }*/
    /* Base for label styling */
    /* checked mark aspect */
   
    /*input[type=checkbox] {
        -moz-appearance:none;
        -o-appearance:none;
        outline: none;
        content: none;  
    }*/

    /*input[type=checkbox]:before {
        font-family: "FontAwesome";
        content: "\f00c";
        font-size: 15px;
        color: transparent !important;
        background: #fef2e0;
        display: block;
        width: 15px;
        height: 15px;
        border-radius: 0px !important;
        border: 1px solid #ffb600 !important;
        margin-right: 7px;
    }*/

    /*input[type=checkbox]:checked:before {
        color: #ffb600 !important;
        line-height: normal;
        font-size: 12px;
    }*/
    .abc123 {
        -webkit-appearance: none;
        width: 15px !important;
        height: 14px !important;
        line-height: 10px;
        display: inline-block !important;
        background: #FFFFFF;
        border: 1px solid #ffb600;
    }
    .abc123:after {
        content: "";
        display: inline-block;
        position: relative;
        top: -2px;
        left: 5px;
        width: 4px;
        height: 10px;
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff;
        -webkit-transform: rotate(45deg);
    }
    .checkeorp {
        -webkit-appearance: none;
        width: 15px !important;
        height: 14px !important;
        line-height: 10px;
        display: inline-block !important;
        background: #FFFFFF;
        border: 1px solid #ffb600;
    }
    .checkeorp:after {
        content: "";
        display: inline-block;
        position: relative;
        top: -2px;
        left: -5px;
        width: 4px;
        height: 9px;
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff;
        -webkit-transform: rotate(45deg);
    }
    .form-control:focus{
        border-color: #ffb600;
    }
    input[type=checkbox]:checked   {
        background: #ffb600;
        outline: none;
        border: 1px solid #ffb600;
    }
    input:hover {
       border: 1px solid #ffb600;
    }
    .select_metal_section{
        padding-left: 36px!important;
    }
    [data-vertical-spacing*='bottom'] {
        padding-bottom: 0px !important;
    }
    label{
        font-size: 21px!important;
    }
    .select2-container--default .select2-selection--single {
        border-style: solid;
        border-color: #ffb600 !important;
        border-radius: 5px!important;
        padding-left: 10px!important;
        box-shadow: none;
        border: 1px solid #ffb600;
    }
    .select2-container .select2-selection--single {
        height: 28px;
        user-select: none;
        -webkit-appearance: none;
        appearance: none;
        width: var(--form-field-width, 100%);
        height: var(--form-field-height, 40px);
        font-family: inherit;
        font-size: var(--form-font-size, 16px);
        color: var(--form-text-initial-color, var(--color));
        padding: var(--has-classic-forms, var(--form-field-padding, 0 12px));
        border-width: var(--form-field-border-width, 1px);
        border-style: var(--form-field-border-style, solid);
        border-color: var(--form-field-border-initial-color);
        border-radius: var(--has-classic-forms, var(--form-field-border-radius, 3px));
        background-color: var(--has-classic-forms, var(--form-field-initial-background));
        transition: all 0.12s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }
    .select2-container {
        display: initial !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 35px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 5px !important;
    }
    .form-control {
        width: auto;
        height: auto;
        display: inline;
    }
    .form-control:focus {
        box-shadow: none !important;
    }
    .ct-footer a {
        color: #ffbd18 !important;
        text-decoration: initial !important;
    }
    .cookies-accept strong{
        font-family: Roboto, sans-serif;
    }
    .cookies-accept a {
        text-decoration: none;
    }
    .form-check-inline{display: inline;}
    @media only screen and (max-width: 426px) {
        .form-check-inline {
            display: block;
        }
        .col-lg-3.custom_input {
            margin-top: 10px;
        }
        input[type="checkbox"], input[type="radio"] {
            border: 1px solid #ccc;
            border: 1px solid #ffb600 !important;
        }
    }
</style>
    <div class="container-fluid bg-white">
        <div class="ct-container" data-content="normal" data-vertical-spacing="top:bottom">
            <article id="post-17412" class="post-17412 page type-page status-publish hentry">
                <div class="hero-section" data-type="type-1">
                    <header class="entry-header">
                        <h2 class="page-title" title="Subscription" itemprop="headline">Subscription</h2><div class="ct-breadcrumbs"><span><span><a href="/" style="color:#ffbd19">Home</a> » <span class="breadcrumb_last" aria-current="page">Subscription</span></span></span></div> 
                    </header>
                </div>
            </article>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 top_heading mb-4">
                    <p class="text-center mt-5">To receive price updates by either email or SMS, please fill out the short form below. This service is 100% free.</p>
                </div>
            </div>
            <form class="needs-validation" novalidate>
                <div class="row justify-content-center">
                    <div class="shadow p-3 mb-5 rounded d-flex bg-gig">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 text-center custom_input">
                                    <input class="form-control" id="name" type="text" value="" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="col-lg-3 custom_input">
                                    <select id="duration" class="select2 custom_dropdown text-start form-control" name="type" required>
                                        <option value="">Choose Frequency...</option>
                                        <option value="Daily">Daily</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Every 3 Months">Every 3 Months</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 text-center custom_input">
                                    <label for="email_open" class="font-weight-bold">Notify by Email:</label>
                                    <input id="email_open" class="form-control my_cus_checkbox checkeorp" type="checkbox" value="email"  id="inlineCheckbox5" name="service[]" value="email" placeholder="EMAIL">
                                    <input id="getEmail" class="form-control" type="email" name="email" placeholder="Email" style="display: none">
                                </div>
                                <div class="col-lg-3 text-center custom_input">
                                    <label for="phone_open" class="font-weight-bold">Notify by SMS:</label>
                                    <input id="phone_open" class="form-control my_cus_checkbox checkeorp" type="checkbox" value="email"  id="inlineCheckbox5" name="service[]" value="sms" placeholder="SMS/TEXT">
                                    <input id="getPhone" class="form-control" style="display: none" type="text" placeholder="(000) 000-0000" name="phone" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-inline mt-3 select_metal_section">
                                    <label class="font-weight-bold">Select Metals/Crypto :</label>
                                    <div class="form-check form-check-inline form_checking">
                                        <input class="form-check-input form-control abc123 checkbox" id="gold_metal" name="metals_crypto" type="checkbox" value="Gold">
                                        <label class="form-check-label" for="gold_metal">Gold</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control abc123" id="silver_metal" name="metals_crypto" type="checkbox" value="Silver">
                                        <label class="form-check-label" for="silver_metal">Silver</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control abc123" id="platinum_metal" name="metals_crypto" type="checkbox" value="Platinum">
                                        <label class="form-check-label" for="platinum_metal">Platinum</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control abc123" id="palladium_metal" name="metals_crypto" type="checkbox" value="Palladium">
                                        <label class="form-check-label" for="palladium_metal">Palladium</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control abc123" id="bitcoin_crypto" name="metals_crypto" type="checkbox" value="Bitcoin">
                                        <label class="form-check-label" for="bitcoin_crypto">Bitcoin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control abc123" id="ethereum_crypto" name="metals_crypto" type="checkbox" value="Ethereum">
                                        <label class="form-check-label" for="ethereum_crypto">Ethereum</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 sign_up_btn text-center">
                                    <button type="button" id="submit_subscription" class="btn cus_btn_subscription  rounded-pill">Notify me!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script>
    jQuery(function($){
        $(".select2").select2();
        $('#email_open').click(()=>{
            ShowHideDiv('email_open','getEmail');
        });
        $('#phone_open').click(()=>{
            ShowHideDiv('phone_open','getPhone');
        });
        $('#submit_subscription').click(function(){
            $this = $(this);
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                if(form.checkValidity() === false) {
                    if ($("#name").val()=='') {
                        $("#name").addClass('is-invalid');
                        return false;
                    }else{
                        $("#name").removeClass('is-invalid');
                    }
                    if ($("#duration").val()=='') {
                        $("#duration").addClass('is-invalid');
                        swal({
                            title:"Error", 
                            text:'Please Select Frequency', 
                            icon:"error"
                        });
                        return false;
                    }else{
                        $("#duration").removeClass('is-invalid');
                    }
                    if($(`#email_open`).is(":checked")) {
                        if ($("#getEmail").val()=='') {
                            $("#getEmail").addClass('is-invalid');
                            return false;
                        }else{
                            $("#email_open").addClass('is-invalid');
                            $("#getEmail").removeClass('is-invalid');
                        }
                    }
                    if($(`#phone_open`).is(":checked")) {
                        if ($("#getPhone").val()=='') {
                            $("#getPhone").addClass('is-invalid');
                            return false;
                        }else{
                            $("#getPhone").removeClass('is-invalid');
                        }
                    }
                } else {
                    if ($("input[name=metals_crypto]:checked").length == 0) {
                        swal({
                            title:"Error", 
                            text:'Please Select any Metals/Crypto', 
                            icon:"error"
                        });
                        return false;
                    }
                    $('.needs-validation input, .needs-validation textarea').removeClass('is-invalid'); 
                    name = $("#name").val();
                    metalsdata = [];
                    if($("#gold_metal").is(":checked")){
                        metalsdata.push($("#gold_metal").val());
                    }
                    if($("#silver_metal").is(":checked")){
                        metalsdata.push($("#silver_metal").val());
                    }
                    if($("#platinum_metal").is(":checked")){
                        metalsdata.push($("#platinum_metal").val());
                    }
                    if($("#palladium_metal").is(":checked")){
                        metalsdata.push($("#palladium_metal").val());
                    }
                    if($("#bitcoin_crypto").is(":checked")){
                        metalsdata.push($("#bitcoin_crypto").val());
                    }
                    if($("#ethereum_crypto").is(":checked")){
                        metalsdata.push($("#ethereum_crypto").val());
                    }
                    duration = $("#duration").val();
                    is_email = ($("#email_open").is(":checked"))? 'YES':'NO';
                    getEmail = (($("#getEmail").val()!='')&&(is_email!='NO'))? $("#getEmail").val() : '-' ;
                    is_phone = ($("#phone_open").is(":checked"))? 'YES':'NO';
                    getPhone = (($("#getPhone").val()!='')&&(is_phone!='NO'))? $("#getPhone").val() : '-' ;
                    $this.attr('disabled',true);
                    $this.html('Please wait...');
                    $.ajax({
                        url: "<?= get_stylesheet_directory_uri() ?>/datafiles.php",
                        method: "POST",
                        data:{
                            name:name,
                            metals:metalsdata,
                            is_phone:is_phone,
                            phone:getPhone,
                            is_email:is_email,
                            email:getEmail,
                            duration:duration,
                            requestType:'FormSubmit'
                        },
                        success:function(response){
                            let result = JSON.parse(response);
                            $this.attr('disabled',false);
                            $this.html('SIGN ME UP'); 
                            if (result.status==404) {
                                swal({
                                    title:"Error", 
                                    text:result.message, 
                                    icon:"error"
                                });
                            }else{
                                $("input[type=text],input[type=email]").val('');
                                $("input[type=checkbox]").prop('checked',false);
                                $("#getEmail").hide();
                                $("#getPhone").hide();
                                swal({
                                    title:"Success", 
                                    text:result.message, 
                                    icon:"success"
                                });
                            }
                        }
                    });
                }
            });
        });
    });
    let ShowHideDiv = (id,ref)=>{
        if(jQuery(`#${id}`).is(":checked")) {
            jQuery(`#${ref}`).show();
            jQuery(`#${ref}`).attr('required','required');
        }else{
            jQuery(`#${ref}`).hide();
            jQuery(`#${ref}`).removeAttr('required','required');
        }
    };
    document.getElementById('getPhone').addEventListener('input', function (e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
</script>