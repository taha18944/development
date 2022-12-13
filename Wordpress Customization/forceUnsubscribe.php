<?php /* Template Name: forceUnsubscribe */
    require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
    global $wpdb;
    $unsubscriber = $_GET['unsubscriber'];
    $time = $_GET['time'];
    $subscriptionTable = $wpdb->prefix."dummy";
    if(isset($unsubscriber) && !empty($unsubscriber)){
        $subscriberId =  $unsubscriber;
        $currentTime = time();
        $getSubscriberbyID = $wpdb->get_row("SELECT count(*) as count,status FROM ".$subscriptionTable." WHERE id=$subscriberId");
        if ($getSubscriberbyID->count!=0) {
            $status = $getSubscriberbyID->status;
            if($status==1){
                $updated = $wpdb->update(
                    $subscriptionTable,
                    array( 
                        'status' => '0'
                    ),
                    array(
                        'id'   => $subscriberId
                    )
                );
                if ($updated) {
                    $payload = array(
                        'status'=>200,
                        'message'=>'Successfully Unsubscribed',
                    );
                }else{
                    $payload = array(
                        'status'=>404,
                        'message'=>'Something went wrong!',
                    );
                }
            }else{
                $payload = array(
                    'status'=>404,
                    'message'=>'Already Unsubscribed!',
                );
            }
        }else{
            $payload = array(
                'status'=>404,
                'message'=>'No Record Found!',
            );
        }
    }else{
        $payload = array(
            'status'=>404,
            'message'=>'Invalid Parameter!',
        );
    }
    
    function decryption($data){
       // Store the cipher method
       $ciphering = "AES-128-CTR";
       // Use OpenSSl Encryption method
       $iv_length = openssl_cipher_iv_length($ciphering);
       $options = 0;
       // Non-NULL Initialization Vector for decryption
       $decryption_iv = '1234567891011121';
       // Store the decryption key
       $decryption_key = "GeeksforGeeks";
        // Use openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt($data, $ciphering, $decryption_key, $options,         $decryption_iv);
        return $decryption;
    }

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
<style>
.footer-links a {
    color: #ffbd18!important;
}
</style>
<div class="container-fluid bg-white">
    <div class="ct-container" data-content="normal" data-vertical-spacing="top:bottom">
        <article id="post-17412" class="post-17412 page type-page status-publish hentry">
            <div class="hero-section" data-type="type-1">
                <header class="entry-header">
                    <h2 class="page-title" title="Unsubscribe" itemprop="headline">Unsubscribe</h2><div class="ct-breadcrumbs"><span><span><a href="/" style="color:#ffbd19">Home</a> » <span class="breadcrumb_last" aria-current="page">Unsubscribe</span></span></span></div> 
                </header>
            </div>
        </article>
    </div>
</div>
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 top_heading mb-4">
                <h4 class="text-center">
                    <?= $payload['message']; ?>
                </h4>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>