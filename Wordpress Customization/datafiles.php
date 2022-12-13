<?php
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    date_default_timezone_set('Dummy/Dummy');
    require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
    global $wpdb;
    $requestType = $_POST['requestType'];
    $subscriptionTable = $wpdb->prefix."Dummy";
    $subscriptionLogsTable = $wpdb->prefix."Dummy";
    switch ($requestType) {
        case 'FormSubmit':
            $metals = implode(',', $_POST['metals']);
            $name = $_POST['name'];
            $is_phone = $_POST['is_phone'];
            $phone = $_POST['phone'];
            $is_email = $_POST['is_email'];
            $email = $_POST['email'];
            $duration = $_POST['duration'];
            $currentDate = date('Y-m-d H:i:s');
            if (($metals=='') || ($is_phone=='') || ($is_email=='') || ($duration=='')) {
                $payload = array(
                    'status'=>404,
                    'message'=>'Missing Fields!',
                    'subscription_id'=>'',
                );
                echo json_encode($payload);
                exit();
            }
            if ($is_email=='NO' && $is_phone=='NO') {
                $payload = array(
                    'status'=>404,
                    'message'=>'Please select email or phone for Notification!',
                    'subscription_id'=>'',
                );
                echo json_encode($payload);
                exit();   
            }
            if ($is_email!='NO') {
                if (isset($email) && !empty($email)) {
                    $email_exists = $wpdb->get_row("SELECT count(*) as email_exists FROM ".$subscriptionTable." WHERE email = '$email'");
                    if ($email_exists->email_exists>0) {
                        $payload = array(
                            'status'=>404,
                            'message'=>'Email Already Exists!',
                            'subscription_id'=>'',
                        );
                        echo json_encode($payload);
                        exit();
                    }
                }else{
                    $payload = array(
                        'status'=>404,
                        'message'=>'Missing Email!',
                        'subscription_id'=>'',
                    );
                    echo json_encode($payload);
                    exit();
                }
            }
            if ($is_phone!='NO') {
                if (isset($phone) && !empty($phone)) {
                    $phone_exists = $wpdb->get_row("SELECT count(*) as phone_exists FROM ".$subscriptionTable." WHERE phone = '$phone'");
                    if ($phone_exists->phone_exists>0) {
                        $payload = array(
                            'status'=>404,
                            'message'=>'Phone Already Exists!',
                            'subscription_id'=>'',
                        );
                        echo json_encode($payload);
                        exit();
                    }
                }else{
                    $payload = array(
                        'status'=>404,
                        'message'=>'Missing Phone!',
                        'subscription_id'=>'',
                    );
                    echo json_encode($payload);
                    exit();
                }
            }
                
            $subscription_id = $wpdb->insert($subscriptionTable, array(
                'metal'         => $metals,
                'name'          => $name,
                'is_phone'      => $is_phone,
                'phone'         => $phone,
                'is_email'      => $is_email,
                'email'         => $email,
                'duration'      => $duration,
                'last_notify'   => $currentDate,
                'status'        => '1',
                'is_deleted'    => 'N',
                'created_at'    => $currentDate,
            ));
            $lastid = $wpdb->insert_id;
            // ============================ Confirmation Email ============================
            $messageBody = '';
            $host = 'https://'.$_SERVER['SERVER_NAME'];
            $subject = "Subscription Successfully!";
            $messageBody .= '
                <html>
                    <head>
                        <title>Subscription Successfully!</title>
                    </head>
                    <body style="font-family: Poppins, sans-serif; font-weight: 400; font-size: 15px; line-height: 1.8; color: #000;">
                        <div style="max-width: 600px;" class="email-container">
                          <div class="logo" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="">
                            <p><b><em>Dear '.ucfirst($name).',</em></b></p>
                            <p>We have received your request to receive <b>free pricing alerts</b> from Dummy. Your details are as below:</p>
                          </div>
                          <table class="custom_table" style="width:100%; border-collapse:collapse;">
                            <tr align="left">
                                <td style="padding-left: 10px; border:1px solid black;color:black;">Name</td>
                                <td style="padding-left: 10px; border:1px solid black;">'.$name.'</td>
                            </tr>
                            <tr align="left">
                                <td style="padding-left: 10px; border:1px solid black;color:black;">Email</td>
                                <td style="padding-left: 10px; border:1px solid black;"><a href="mailto:'.$email.'" target="_blank" style="color:black;">'.$email.'</a></td>
                            </tr>';
                            if ($is_phone=='YES') {
                                $messageBody .='<tr align="left">
                                    <td style="padding-left: 10px; border:1px solid black;color:black;">Phone</td>
                                    <td style="padding-left: 10px; border:1px solid black;">+1 '.$phone.'</td>
                                </tr>';
                            }
                            $messageBody .='<tr align="left">
                                <td style="padding-left: 10px; border:1px solid black;color:black;">Metals / Crypto</td>
                                <td style="padding-left: 10px; border:1px solid black;">'.str_replace(',', ', ', $metals).'</td>
                            </tr>
                            <tr align="left">
                                <td style="padding-left: 10px; border:1px solid black;color:black;">Duration</td>
                                <td style="padding-left: 10px; border:1px solid black;">'.$duration.'</td>
                            </tr>
                          </table>
                        </div>
                        <footer class="footer">
                          <div class="footer-text">
                            <p>If you would like to unsubscribe from these alerts,<a href="'.$host.'/force-unsubscribe?unsubscriber='.$lastid.'&time='.time().'" target="_blank" style="color:#000;text-transform:underline;"> <b>click here</b>.</a></p>
                          </div>
                          <div class="footer-text">
                            Copyright © '.date("Y").' | All Right Reserved | Powered by '.$host.'.
                          </div>
                        </footer>
                    </body>
                </html>
            ';
            // Always set content-type when sending HTML email
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $domain = $_SERVER['HTTP_HOST'];
            $headers .= 'From: <info@'.$domain.'>' . "\r\n";
            if ($is_email=='YES') {
                $sent = mail($email,$subject,$messageBody,$headers);
            }
            if ($is_phone=='YES') {
                $to = str_replace(['(',')','-',' '],'',$phone);
                $SMSbody = '';
                $SMSbody .= 'Dear '.ucfirst($name).',';
                $SMSbody .= "\n";
                $SMSbody .= "We have received your request to receive free pricing alerts from Dummy. Your details are as below:";
                $SMSbody .= "\n";
                $SMSbody .= 'Name : '.ucfirst($name);
                $SMSbody .= "\n";
                $SMSbody .= 'Email : '.$email;
                $SMSbody .= "\n";
                $SMSbody .= 'Phone : +1 '.$phone;
                $SMSbody .= "\n";
                $SMSbody .= 'Metals / Crypto : ';
                $SMSbody .= "\n";
                $SMSbody .= $metals;
                $SMSbody .= "\n";
                $SMSbody .= 'Duration : '.$duration;
                $SMSbody .= "\n";
                $SMSbody .= 'If you would like to unsubscribe from these alerts';
                $SMSbody .= "\n";
                $SMSbody .= 'click below link';
                $SMSbody .= "\n";
                $SMSbody .= $host.'/force-unsubscribe?unsubscriber='.$lastid.'&time='.time().' .';
                $SMSbody .= "\n";
                $payload = [
                    'To' => '+1'.$to,
                    'MessagingServiceSid' =>'DummyID',
                    'Body'   => $SMSbody
                ];
                $url = 'Twillio Acc Link';
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_USERPWD=>'Dummy' . ':' . 'Dummy',
                  CURLOPT_POST => 1,
                  CURLOPT_POSTFIELDS => http_build_query($payload),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
            }
            // ============================ Confirmation Email ============================
            if ($is_email!='NO' && $is_phone!='NO') {
                $returnMsg = "Subscription Added Successfully! Please check your mailbox and/or your phone's text messages for a confirmation message from Dummy. If you don't see it in your mailbox, please check your spam folder.";
            }elseif ($is_email!='NO' && $is_phone=='NO') {
                $returnMsg = "Subscription Added Successfully! Please check your mailbox for a confirmation message from Dummy. If you don't see it in your mailbox, please check your spam folder.";
            }else{
                $returnMsg = "Subscription Added Successfully! Please check your phone's text messages for a confirmation message from Dummy.";
            }
            $payload = array(
                'status'=>200,
                'message'=>$returnMsg,
                'subscription_id'=>$subscription_id,
            );
            echo json_encode($payload);
        break;

        case 'getSubscribersList':
            $i = 1;
            $aaData = [];
            $resultsCount = 0;
            $getSubscriber = $wpdb->get_results("SELECT * FROM ".$subscriptionTable." WHERE is_deleted='N'");
            foreach ($getSubscriber as $row) {
                $ID = $row->id;
                $METAL = $row->metal;
                $NAME = $row->name;
                $IS_PHONE = $row->is_phone;
                $PHONE = $row->phone;
                $IS_EMAIL = $row->is_email;
                $EMAIL = $row->email;
                $DURATION = $row->duration;
                $LAST_NOTIFY = $row->last_notify;
                $STATUS = $row->status;
                $CREATEDAT = $row->created_at;
                $aaData[] = array(
                    "ID" => $ID,
                    "METAL" => $METAL,
                    "NAME" => $NAME,
                    "IS_PHONE" => $IS_PHONE,
                    "PHONE" => ($IS_PHONE=='YES')?'+1 '.$PHONE:$PHONE,
                    "IS_EMAIL" => $IS_EMAIL,
                    "EMAIL" => $EMAIL,
                    "DURATION" => $DURATION,
                    "LAST_NOTIFY" => $LAST_NOTIFY,
                    "STATUS" => $STATUS,
                    "CREATEDAT" => $CREATEDAT
                );
                $i++;
                $resultsCount++;
            }
            $arraylist = array(
                'iTotalRecords' => $resultsCount,
                'iTotalDisplayRecords' => $resultsCount,
                'aaData' => $aaData
            );
            echo json_encode($arraylist);
        break;

        case 'UpdateSubscriberStatus':
            $id = $_POST['status_id'];
            $status = $_POST['status'];
            $newStatus = ($status == 1)?0:1;
            $updated = $wpdb->update(
                $subscriptionTable,
                array( 
                    'status' => $newStatus
                ),
                array(
                    'id'   => $id,
                    'status'   => $status
                )
            );
            if ($updated) {
                $status = true;
                $is_subscribe = ($newStatus==1)? 'Subscribe' : 'Unsubscribe' ;
                $message = 'Subscriber#'.$id.' Updated Successfully!';
            }else{
                $status = false;
                $is_subscribe= '';
                $newStatus= '';
                $message = 'Something went wrong!';
            }
            $payload = array(
                'status'=>$status,
                'is_subscribe'=>$is_subscribe,
                'newStatus'=>$newStatus,
                'message'=>$message
            );
            echo json_encode($payload);
        break;

        case 'DeleteSubscriber':
            $id = $_POST['delete_id'];
            $deleted = $wpdb->update(
                $subscriptionTable,
                array( 
                    'is_deleted' => 'Y'
                ),
                array(
                    'id'   => $id
                )
            );
            if ($deleted) {
                $status = true;
                $message = 'Subscriber#'.$id.' Deleted Successfully!';
            }else{
                $status = false;
                $message = 'Something went wrong!';
            }
            $payload = array(
                'status'=>$status,
                'message'=>$message
            );
            echo json_encode($payload);
        break;

        case 'getSubscriberbyId':
            $html = '';
            $id = $_POST['edit_id'];
            $getSubscriberbyId = $wpdb->get_row("SELECT * FROM ".$subscriptionTable." WHERE id='$id'");
            //================== Metals Array ==================
            $metalsArray = array('Gold','Silver','Platinum','Palladium','Bitcoin','Ethereum');
            $existingmetal = explode(',', $getSubscriberbyId->metal);
            $metalsoptions = '';
            foreach($metalsArray as $metal){
                $selected = '';
                if (!empty($metalsArray) && in_array($metal,$existingmetal)) {
                    $selected = 'selected';
                }
                $metalsoptions .= '<option value="'.$metal.'" '.$selected.'>'.$metal.'</option>';
            }
            //================== Duration Array ==================
            $durationArray = array('Daily','Weekly','Monthly','Every 3 Months');
            $durationoptions = '';
            foreach($durationArray as $duration){
                $selected =($getSubscriberbyId->duration==$duration)? 'selected' : '' ;
                $durationoptions .= '<option value="'.$duration.'" '.$selected.'>'.$duration.'</option>';
            }
            //================== Duration Array ==================
            $html .= '
                <form method="post" id="SubscriptionForm" class="pm_widget_form" name="pm_widget_form">
                    <input id="subscriber_id" type="hidden" value="'.$getSubscriberbyId->id.'" readonly disabled>
                    <div class="from-group col-lg-12">
                        <div class="from-group mb-3 col-lg-12">
                            <label>Name :</label>
                            <input id="subscriber_name" type="text" value="'.$getSubscriberbyId->name.'" readonly disabled name="name" placeholder="Name">
                        </div>';
                        if ((isset($getSubscriberbyId->email)) && (!empty($getSubscriberbyId->email)) && ($getSubscriberbyId->email!='-')) {
                            $html .= '<div class="from-group mb-3 col-lg-12">
                                <label>Email :</label>
                                <input id="getEmail" value="'.$getSubscriberbyId->email.'" readonly disabled type="email" name="email" placeholder="Email">
                            </div>';
                        }
                        if ((isset($getSubscriberbyId->phone)) && (!empty($getSubscriberbyId->phone)) && ($getSubscriberbyId->phone!='-')) {
                            $html .= '<div class="from-group mb-3 col-lg-12">
                                <label>Phone</label>
                                <input id="getPhone" value="+1 '.$getSubscriberbyId->phone.'" readonly disabled type="text" placeholder="Phone" name="phone">
                            </div>';
                        }
                        $html .= '<div class="from-group mb-3 col-lg-12">
                            <label>Select Metals / Crypto</label>
                            <select id="metalsdata" class="select2" name="metals[]" placeholder="Select Metals..." multiple required>';
                                $html .=$metalsoptions.'</select>
                        </div>
                        <div class="from-group mb-3 col-lg-12">
                            <label>Notification Duration</label>
                            <select id="duration" class="select2" name="type" required>';
                                $html .=$durationoptions.'</select>
                        </div>
                    </div>
                </form>
            ';
            $payload = array(
                'status' => true,
                'view' => $html
            );
            echo json_encode($payload);
        break;

        case 'UpdateSubscriber':
            $id = $_POST['subscriber_id'];
            $name = $_POST['subscriber_name'];
            $email = $_POST['getEmail'];
            $metals = implode(',', $_POST['metalsdata']);
            $duration = $_POST['duration'];
            $subscriberId = $wpdb->update(
                $subscriptionTable,
                array( 
                    'metal' => $metals,
                    'duration' => $duration
                ),
                array(
                    'id'   => $id,
                    'email' => $email,
                )
            );
            if ($subscriberId) {
                $status = true;
                $message = 'Subscriber#'.$id.' Updated Successfully!';
            }else{
                $status = false;
                $message = 'Something went wrong!';
            }
            $payload = array(
                'status'=>$status,
                'message'=>$message
            );
            echo json_encode($payload);
        break;

        case 'Notification':
            // Get Metal & Crypto Prices
            $currentDate = date('Y-m-d');
            $currentDay = date('D');
            $latestDate = date('Y-m-d H:i:s');
            $metalWhere = '';
            $coinWhere = '';
            if ($currentDay!='Sat' || $currentDay!='Sun') {
                $metalWhere = "WHERE DATE(date)='$currentDate'";
                $coinWhere = "AND DATE(closeTime)='$currentDate'";
            }
            // Get Metal Count
            $getMetalCount = $wpdb->get_row("SELECT count(*) as metal_count FROM ".$wpdb->prefix."Dummy $metalWhere order by date DESC limit 0, 1");
            if ($getMetalCount->metal_count>0) {
                $getMetalPrices = $wpdb->get_row("SELECT gold,silver,platinum,palladium FROM ".$wpdb->prefix."Dummy $metalWhere order by date DESC limit 0, 1");
            }else{
                $getMetalPrices = $wpdb->get_row("SELECT gold,silver,platinum,palladium FROM ".$wpdb->prefix."Dummy order by date DESC limit 0, 1");
            }
            // Get Bitcoin Count
            $getBitCount = $wpdb->get_row("SELECT count(*) as bitcoin_count FROM ".$wpdb->prefix."crypto_prices_v2 where symbol = 'BTCUSDT' $coinWhere order by closeTime DESC limit 0, 1");
            if ($getBitCount->bitcoin_count>0) {
                $getBitCoin = $wpdb->get_row("SELECT lastPrice as bitcoin_price FROM ".$wpdb->prefix."crypto_prices_v2 where symbol = 'BTCUSDT' $coinWhere order by closeTime DESC limit 0, 1");
            }else{
                $getBitCoin = $wpdb->get_row("SELECT lastPrice as bitcoin_price FROM ".$wpdb->prefix."crypto_prices_v2 where symbol = 'BTCUSDT' order by closeTime DESC limit 0, 1");
            }
            // Get Eth Count
            $getETHCount = $wpdb->get_row("SELECT count(*) as ethusdt_count FROM ".$wpdb->prefix."crypto_prices_v2 where symbol = 'ETHUSDT' $coinWhere order by closeTime DESC limit 0, 1"); 
            if ($getETHCount->ethusdt_count) {
                $getETHCoin = $wpdb->get_row("SELECT lastPrice as ethusdt_price FROM ".$wpdb->prefix."crypto_prices_v2 where symbol = 'ETHUSDT' $coinWhere order by closeTime DESC limit 0, 1"); 
            }else{
                $getETHCoin = $wpdb->get_row("SELECT lastPrice as ethusdt_price FROM ".$wpdb->prefix."crypto_prices_v2 where symbol = 'ETHUSDT' order by closeTime DESC limit 0, 1");
            }
            if ($getMetalPrices && $getBitCoin && $getETHCoin) {
                $prices_array = array(
                    'gold'=> getPricewithDecimals($getMetalPrices->gold),
                    'silver'=> getPricewithDecimals($getMetalPrices->silver),
                    'platinum'=> getPricewithDecimals($getMetalPrices->platinum),
                    'palladium'=> getPricewithDecimals($getMetalPrices->palladium),
                    'bitcoin_price'=> getPricewithDecimals($getBitCoin->bitcoin_price),
                    'ethusdt_price'=> getPricewithDecimals($getETHCoin->ethusdt_price),
                );
                $json_prices = json_encode($prices_array);
                // Get Subscription Customers
                $getSubscriber = $wpdb->get_results("SELECT * FROM ".$subscriptionTable." WHERE status='1'");
                foreach ($getSubscriber as $subscriber) {
                    $id = $subscriber->id;
                    $name = $subscriber->name;
                    $IsEmail = $subscriber->is_email;
                    $email = $subscriber->email;
                    $IsPhone = $subscriber->is_phone;
                    $phone = $subscriber->phone;
                    $metals = $subscriber->metal;
                    $duration = $subscriber->duration;
                    $last_notify = date('Y-m-d',strtotime($subscriber->last_notify));
                    $last_notify = strtotime($last_notify);
                    $now = time();
                    $datediff = $now - $last_notify;
                    $finalDuration =  round($datediff / (60 * 60 * 24));
                    $error_array = [];
                    $success_array = [];
                    $done = 0;
                    switch ($duration) {
                        case 'Daily':
                            if ($IsEmail=='YES') {
                                $mailSent = SendMail($email,$metals,$json_prices,$id);
                                if ($mailSent) {
                                    $done = 1;
                                }  
                            }
                            if ($IsPhone=='YES') {
                                $SMSSent = SendSMS($phone,$metals,$json_prices,$email,$id);
                                if ($SMSSent) {
                                    $done = 1;
                                }  
                            }
                            if ($done==1) {
                                $wpdb->update(
                                    $subscriptionTable,
                                    array( 
                                        'last_notify' => $latestDate
                                    ),
                                    array(
                                        'id'   => $id,
                                        'email' => $email,
                                    )
                                );
                                $success_array[]= array(
                                    'status' => 200, 
                                    'message' => 'Mail/SMS Sent Successfully!', 
                                );
                            }else{
                                $error_array[]= array(
                                    'status' => 400, 
                                    'message' => 'Mail/SMS aleady sent!', 
                                );
                            }
                        break;

                        case 'Weekly':
                            if ($finalDuration>=7) {
                                if ($IsEmail=='YES') {
                                    $mailSent = SendMail($email,$metals,$json_prices,$id);
                                    if ($mailSent) {
                                        $done = 1;
                                    }  
                                }
                                if ($IsPhone=='YES') {
                                    $SMSSent = SendSMS($phone,$metals,$json_prices,$email,$id);
                                    if ($SMSSent) {
                                        $done = 1;
                                    }  
                                }
                                if ($done==1) {
                                    $wpdb->update(
                                        $subscriptionTable,
                                        array( 
                                            'last_notify' => $latestDate
                                        ),
                                        array(
                                            'id'   => $id,
                                            'email' => $email,
                                        )
                                    );
                                    $success_array[]= array(
                                        'status' => 200, 
                                        'message' => 'Mail Sent Successfully!', 
                                    );
                                }
                            }else{
                                $error_array[]= array(
                                    'status' => 400, 
                                    'message' => 'Mail aleady sent!', 
                                );
                            }
                        break;

                        case 'Monthly':
                            if ($finalDuration>=30) {
                                if ($IsEmail=='YES') {
                                    $mailSent = SendMail($email,$metals,$json_prices,$id);
                                    if ($mailSent) {
                                        $done = 1;
                                    }  
                                }
                                if ($IsPhone=='YES') {
                                    $SMSSent = SendSMS($phone,$metals,$json_prices,$email,$id);
                                    if ($SMSSent) {
                                        $done = 1;
                                    }  
                                }
                                if ($done==1) {
                                    $wpdb->update(
                                        $subscriptionTable,
                                        array( 
                                            'last_notify' => $latestDate
                                        ),
                                        array(
                                            'id'   => $id,
                                            'email' => $email,
                                        )
                                    );
                                    $success_array[]= array(
                                        'status' => 200, 
                                        'message' => 'Mail Sent Successfully!', 
                                    );
                                }
                            }else{
                                $error_array[]= array(
                                    'status' => 400, 
                                    'message' => 'Mail aleady sent!', 
                                );
                            }
                        break;

                        case 'Every 3 Months':
                            if ($finalDuration>=90) {
                               if ($IsEmail=='YES') {
                                    $mailSent = SendMail($email,$metals,$json_prices,$id);
                                    if ($mailSent) {
                                        $done = 1;
                                    }  
                                }
                                if ($IsPhone=='YES') {
                                    $SMSSent = SendSMS($phone,$metals,$json_prices,$email,$id);
                                    if ($SMSSent) {
                                        $done = 1;
                                    }  
                                }
                                if ($done==1) {
                                    $wpdb->update(
                                        $subscriptionTable,
                                        array( 
                                            'last_notify' => $latestDate
                                        ),
                                        array(
                                            'id'   => $id,
                                            'email' => $email,
                                        )
                                    );
                                    $success_array[]= array(
                                        'status' => 200, 
                                        'message' => 'Mail Sent Successfully!', 
                                    );
                                }
                            }else{
                                $error_array[]= array(
                                    'status' => 400, 
                                    'message' => 'Mail aleady sent!', 
                                );
                            }
                        break;
                        
                        default:
                        # code... 
                        break;
                    }
                    $json_logs = array(
                        'name'=>$name,
                        'email'=>$email,
                        'metals'=>$metals,
                        'duration'=>$duration,
                        'success_array'=>$success_array,
                        'error_array'=>$error_array,
                    );
                    $logs_id = $wpdb->insert($subscriptionLogsTable, array(
                        'logs'          => json_encode($json_logs),
                        'last_notify'   => date('Y-m-d H:i:s'),
                        'created_at'    => date('Y-m-d H:i:s'),
                    ));
                }
                if (count($error_array)==0) {
                    $payload = array(
                        'status'=>200,
                        'message'=>'Mail/SMS Sent Successfully!',
                        'success'=>$success_array,
                        'errors'=>$error_array,
                    );
                }else{
                    $payload = array(
                        'status'=>404,
                        'message'=>'Error Found!',
                        'success'=>$success_array,
                        'errors'=>$error_array,
                    );
                }
            }else{
                $payload = array(
                    'status'=>404,
                    'message'=>'Error Found!',
                    'errors'=>array(
                        'getMetalPrices' => json_encode($getMetalPrices),
                        'getBitCoin' => json_encode($getBitCoin),
                        'getETHCoin' => json_encode($getETHCoin),
                    ),
                );
            }
            echo json_encode($payload);
        break;

        case 'getMetalDate':
            $currentDate = date('Y-m-d');
            $getMetalDate = $wpdb->get_row("SELECT date as curDate FROM wp_Dummy WHERE DATE(date)='$currentDate'");
            $LasteUpdatedDate = $getMetalDate->curDate;
            //============== Get IP ==============
            $ip = $_SERVER['REMOTE_ADDR']; 
            $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
            $ipInfo = json_decode($ipInfo);
            $timezone = $ipInfo->timezone;
            //============== Get IP ==============
            //============== Convert TimeZone ==============
            $datetime = new DateTime($LasteUpdatedDate);
            $la_time = new DateTimeZone($timezone);
            $datetime->setTimezone($la_time);
            $UserDate =  $datetime->format('F jS Y h:i:s A');
            //============== Convert TimeZone ==============
            //============== LMBA ==============
            $getDay = date('l',strtotime($LasteUpdatedDate));
            if($getDay=='Saturday'){
                $LMBADate = date('F jS Y h:i:s A',strtotime($LasteUpdatedDate.'-1 day'));
            }elseif($getDay=='Sunday'){
                $LMBADate = date('F jS Y h:i:s A',strtotime($LasteUpdatedDate.'-2 days'));
            }else{
                $LMBADate = date('F jS Y h:i:s A',strtotime($LasteUpdatedDate));
            }
            echo "<pre>";print_r($UserDate);echo "\n";
            echo "<pre>";print_r($LMBADate);die;
            //============== LMBA ==============
        break;
        
        default:
        # code...
        break;
    }
    function getPricewithDecimals($price){
        $price=explode('.', $price);
        $decimal = (strlen($price[1])=='1')?'0':(strlen($price[1])=='0')?'00':'';
        $finalPrice = '$'.number_format($price[0]).'.'.substr($price[1],0,2).$decimal . ' USD';
        return $finalPrice;
    }

    function SendMail($to,$metals,$prices,$subscriberId){
        $message = '';
        $host = 'https://'.$_SERVER['SERVER_NAME'];
        $metals = explode(',', $metals);
        $prices = json_decode($prices);
        $subject = "Latest Price of Metals & Crypto";
        $message .= '
            <html>
                <head>
                    <title>Latest Price of Metals & Crypto</title>
                </head>
                <body style="font-family: Poppins, sans-serif; font-weight: 400; font-size: 15px; line-height: 1.8; color: #000;">
                    <div style="max-width: 600px;" class="email-container">
                      <div class="logo" align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="">
                        <tr>
                          <td valign="top" class="bg_white">
                            <div role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tr>
                                <td class="logo">
                                    <img src="'.$host.'/wp-content/uploads/2021/06/GIG-Logo-400px.png" alt="GOLD IRA"/>
                                </td>
                              </tr>
                            </div>
                          </td>
                        </tr>
                      </div>
                      <table class="custom_table" style="width:100%; border-collapse:collapse;">
                        <tr align="left">
                          <th style="padding-left: 10px; border:1px solid black;color:#000;font-size: 18px;">Metals / Crypto</th>
                          <th style="padding-left: 10px; border:1px solid black;color:#000;font-size: 18px;">Prices</th>
                        </tr>';
                        if (in_array('Gold', $metals)) {
                            $message .='<tr align="left">
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;"><a href="'.$host.'/gold-price/" style="color:black;">Gold</a></td>
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;">'.$prices->gold.'</td>
                            </tr>';
                        }
                        if (in_array('Silver', $metals)) {
                            $message .='<tr align="left">
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;"><a href="'.$host.'/silver-price" style="color:black;">Silver</a></td>
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;">'.$prices->silver.'</td>
                            </tr>';
                        }
                        if (in_array('Platinum', $metals)) {
                            $message .='<tr align="left">
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;"><a href="'.$host.'/platinum-price" style="color:black;">Platinum</a></td>
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;">'.$prices->platinum.'</td>
                            </tr>';
                        }
                        if (in_array('Palladium', $metals)) {
                            $message .='<tr align="left">
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;"><a href="'.$host.'/palladium-price" style="color:black;">Palladium</a></td>
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;">'.$prices->palladium.'</td>
                            </tr>';
                        }
                        if (in_array('Bitcoin', $metals)) {
                            $message .='<tr align="left">
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;"><a href="'.$host.'/bitcoin-price" style="color:black;">Bitcoin</a></td>
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;">'.$prices->bitcoin_price.'</td>
                            </tr>';
                        }
                        if (in_array('Ethereum', $metals)) {
                            $message .='<tr align="left">
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;"><a href="'.$host.'/ethereum-price" style="color:black;">Ethereum</a></td>
                              <td style="padding-left: 10px; border:1px solid black;font-size: 18px;">'.$prices->ethusdt_price.'</td>
                            </tr>';
                        }
                      $message .='</table>
                        <footer class="footer">
                            <div class="footer-text">
                                <p style="font-size: 18px;">If you would like to unsubscribe from these alerts,<a href="'.$host.'/force-unsubscribe?unsubscriber='.$subscriberId.'&time='.time().'" target="_blank" style="color:#000;text-transform:underline;"> <b>click here</b>.</a></p>
                            </div>
                            <div class="footer-text" style="font-size: 18px;">
                                Copyright © '.date("Y").' | All Right Reserved | Powered by '.$host.'.
                            </div>
                        </footer>
                    </div>
                </body>
            </html>
        ';
        // Always set content-type when sending HTML email
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $domain = $_SERVER['HTTP_HOST'];
        $headers .= 'From: <info@'.$domain.'>' . "\r\n";
        $sent = mail($to,$subject,$message,$headers);
        return ($sent)?true:false;
    }

    function SendSMS($to,$metals,$prices,$email,$subscriberId){
        $body = '';
        $to = str_replace(['(',')','-',' '],'',$to);
        $host = 'https://'.$_SERVER['SERVER_NAME'];
        $metals = explode(',', $metals);
        $prices = json_decode($prices);
        $subject = "Latest Price of Metals & Crypto";
        $body .= $subject;
        $body .= "\n";
        if (in_array('Gold', $metals)) {
            $body .='Gold :'. $prices->gold;
            $body .= "\n";
        }
        if (in_array('Silver', $metals)) {
            $body .='Silver :'.$prices->silver;
            $body .= "\n";
        }
        if (in_array('Platinum', $metals)) {
            $body .='Platinum :'.$prices->platinum;
            $body .= "\n";
        }
        if (in_array('Palladium', $metals)) {
            $body .='Palladium :'.$prices->palladium;
            $body .= "\n";
        }
        if (in_array('Bitcoin', $metals)) {
            $body .='Bitcoin :'.$prices->bitcoin_price;
            $body .= "\n";
        }
        if (in_array('Ethereum', $metals)) {
            $body .='Ethereum :'.$prices->ethusdt_price;
            $body .= "\n";
        }
        $body .= 'If you would like to unsubscribe from these alerts';
        $body .= "\n";
        $body .= 'click below link';
        $body .= "\n";
        $body .= $host.'/force-unsubscribe?unsubscriber='.$subscriberId.'&time='.time().' .';
        $body .= "\n";
        $payload = [
            'To' => '+1'.$to,
            'MessagingServiceSid' =>'Dummy',
            'Body'   => $body
        ];
        $url = 'Dummy';
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_USERPWD=>'Dummy' . ':' . 'Dummy',
          CURLOPT_POST => 1,
          CURLOPT_POSTFIELDS => http_build_query($payload),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }

    function encryption($data){
        // Store the cipher method
        $ciphering = "AES-128-CTR";
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';
        // Store the encryption key
        $encryption_key = "GeeksforGeeks"; 
        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($data, $ciphering,
        $encryption_key, $options, $encryption_iv);
        return $encryption;
    }
?>