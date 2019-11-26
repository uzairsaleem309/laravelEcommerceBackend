<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Models\Core\Setting;
use App\Models\Core\Images;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminControllers\SiteSettingController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;


class NotificationController extends Controller
{
    //
    public function __construct(Setting $setting)
    {
        $this->myVarSetting = new SiteSettingController($setting);
    }

    public function devices(Request $request){

          $title = array('pageTitle' => Lang::get("labels.ListingDevices"));
          $result = array();
          $message = array();
          $errorMessage = array();
          //get function from other controller
          $setting = $this->myVarSetting->getSetting();
          if(!empty($request->id)){
              if($request->active=='no'){
                  $status = '0';
              }elseif($request->active=='yes'){
                  $status = '1';
              }
              DB::table('devices')->where('id', '=', $request->id)->update([
                  'status'		 =>	  $status
              ]);
          }
          if(isset($request->filter) and !empty($request->filter)){
              $devices = DB::table('devices')
                  ->LeftJoin('users', 'users.id','=', 'devices.user_id')
                  ->select('users.*', 'users.id as user_id', 'devices.*')
                  ->where('device_type','=', $request->filter)
                  ->where('devices.is_notify','=', '1')
                  ->orderBy('devices.id','DESC')
                  ->paginate(100);
          }else{
              $devices = DB::table('devices')
                  ->LeftJoin('users', 'users.id','=', 'devices.user_id')
                  ->select('users.*', 'users.id as user_id', 'devices.*')
                  ->orderBy('devices.id','DESC')
                  ->where('devices.is_notify','=', '1')
                  ->paginate(100);
          }
          $result['message'] = $message;
          $result['devices'] = $devices;
          return view("admin.Notifications.devices",$title)->with('result', $result);
    }


    //viewDevices
    public function viewdevices(Request $request){

        $images = new Images;
        $allimage = $images->getimages();

        $title = array('pageTitle' => Lang::get("labels.ViewDevice"));
        $result = array();
        $result['message'] = array();

        $devices = DB::table('devices')
            ->LeftJoin('users', 'users.id','=', 'devices.user_id')
            ->select('users.*', 'users.id as user_id', 'devices.*')
            ->where('devices.id', $request->id)
            ->get();

        $result['devices'] = $devices;
        return view("admin.Notifications.viewdevices",$title)->with('result', $result)->with('allimage',$allimage);
    }



    //notifyUser
    public function notifyUser(Request $request){


        $device_type 	= 	$request->device_type;
        $device_id 		= 	$request->device_id;
        $message 		= 	$request->message;
        $title 			= 	$request->title;
        $pageResponse   =   0;
        //get function from other controller

        $extensions = $this->myVarSetting->imageType();
        $setting = $this->myVarSetting->getSetting();

        if($request->image_id !== null){
            $images = DB::table('image_categories')->where('image_id', $request->image_id)->where('image_type', 'ACTUAL')->first();
            //dd($images);
            $websiteURL =  "https://" . $_SERVER['SERVER_NAME'] .'/demos/website/'. $images->path;
        }else{
            $websiteURL = '';
        }

        $sendData = array
        (
            'body' 	=> $message,
            'title'	=> $title ,
            'icon'	=> 'myicon', /*Default Icon*/
            'sound' => 'mySound', /*Default sound*/
            'image' => $websiteURL,
        );

        $response = $this->onesignalNotification($device_id, $sendData, $pageResponse);
        return $response;
    }



    //notifications
    public function notifications(Request $request){

        $images = new Images;
        $allimage = $images->getimages();
            $title = array('pageTitle' => Lang::get("labels.SendNotifications"));
            $result = array();
            $result['message'] = array();

            return view("admin.Notifications.notifications", $title)->with('result', $result)->with('allimage',$allimage);
        }



    //sendNotification
    public function sendNotifications(Request $request){


            $device_type 		= 	$request->device_type;
            $devices_status 	= 	$request->devices_status;
            $message 			= 	$request->message;
            $title 				= 	$request->title;
            $pageResponse		=	1;

            //get function from other controller

            $extensions = $this->myVarSetting->imageType();
            $setting = $this->myVarSetting->getSetting();


            if($request->image_id !== null){

                $websiteURL =  "https://" . $_SERVER['SERVER_NAME'] .'/demos/website/'. $request->image_id;
            }else{
                $websiteURL = '';
            }

            $sendData = array
            (
                'body' 	=> $message,
                'title'	=> $title ,
                'icon'	=> 'myicon',/*Default Icon*/
                'sound' => 'mySound',/*Default sound*/
                'image' => $websiteURL,
            );

            //get function from other controller

            $setting = $this->myVarSetting->getSetting();

            if($device_type =='all'){ 	/* to all users notification */

                $devices = DB::table('devices')
                    ->where('status','=', $devices_status)
                    ->where('devices.'.$setting[54]->value,'=', '1')
                    ->where('devices.is_notify','=', '1')
                    ->get();

                if(count($devices)>0){
                    foreach($devices as $devices_data){
                        $response[] = $this->onesignalNotification($devices_data->device_id, $sendData, $pageResponse);
                    }
                }else{
                    $response[] = '2';
                }


            }else if($device_type =='1'){    /* apple notification */

                $devices = DB::table('devices')
                    ->select('devices.device_id')
                    ->where('status','=', $devices_status)
                    ->where('devices.is_notify','=', '1')
                    ->where('devices.'.$setting[54]->value,'=', '1')
                    ->where('device_type','=', $device_type)
                    ->get();

                if(count($devices)>0){
                    foreach($devices as $devices_data){
                        $response[] = $this->onesignalNotification($devices_data->device_id, $sendData, $pageResponse);
                    }
                }else{
                    $response[] = '2';
                }

            }else if($device_type =='2'){ 	/* android notification */

                $devices = DB::table('devices')
                    ->select('devices.device_id')
                    ->where('status','=', $devices_status)
                    ->where('devices.is_notify','=', '1')
                    ->where('devices.'.$setting[54]->value,'=', '1')
                    ->where('device_type','=', $device_type)
                    ->get();


                if(count($devices)>0){
                    foreach($devices as $devices_data){
                        $response[] = $this->onesignalNotification($devices_data->device_id, $sendData, $pageResponse);
                    }
                }else{
                    $response[] = '2';
                }

            }else if($device_type =='3'){ 	/* android notification */

                $devices = DB::table('devices')
                    ->select('devices.device_id')
                    ->where('status','=', $devices_status)
                    ->where('devices.is_notify','=', '1')
                    ->where('devices.'.$setting[54]->value,'=', '1')
                    ->where('device_type','=', $device_type)
                    ->get();


                if(count($devices)>0){
                    foreach($devices as $devices_data){
                        $response[] = $this->onesignalNotification($devices_data->device_id, $sendData, $pageResponse);
                    }
                }else{
                    $response[] = '2';
                }

            }

            if(in_array('1', $response)){
                $message = 'sent';
            }elseif(in_array('2', $response)){
                $message = 'empty';
            }else{
                $message = 'error';
            }

            if ($message == 'sent'){
                return redirect()->back()->withErrors([Lang::get("labels.notificationSendMessage")]);
            }elseif ($message == 'error'){
                return redirect()->back()->withErrors([Lang::get("labels.notificationSendMessageError")]);
            }elseif ($message == 'empty'){
                return redirect()->back()->withErrors([Lang::get("labels.notificationSendMessageErrorEmpty")]);
            }
        }


    //customerNotification
    public function customerNotification(Request $request){

        $devices = DB::table('devices')
            ->leftJoin('users','users.id','=','devices.users')
            ->select('devices.*','users.first_name','users.last_name')
            ->where('devices.users','=', $request->user_id)
            ->where('devices.is_notify','=', '1')
            ->orderBy('register_date','DESC')->take(1)->get();

        return view("admin/devices/customerNotificationForm")->with('devices', $devices);
    }


    //deleteTaxRate
    public function deletedevice(Request $request){
        DB::table('devices')->where('device_id', $request->id)->delete();
        return redirect()->back()->withErrors([Lang::get("labels.DeviceDeletedMessage")]);
    }

    public function fcmNotification($device_id, $sendData, $pageResponse){

        //get function from other controller

        $setting = $this->myVarSetting->getSetting();

        #API access key from Google API's Console
        if (!defined('API_ACCESS_KEY')){
            define('API_ACCESS_KEY', $setting[12]->value);
        }

        $fields = array
        (
            'to'		=> $device_id,
            'data'	=> $sendData
        );


        $headers = array
        (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        #Send Reponse To FireBase Server
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, true );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch);
        $data = json_decode($result);
        if($result === false)
            die('Curl failed ' . curl_error());

        curl_close($ch);

        if(!empty($data->success) and $data->success >= 1){
            $response = '1';
        }else{
            $response = '0';
        }

        if($pageResponse==1){
            return $response;
        }else{
            print $response;
        }

    }

    public function onesignalNotification($device_id, $sendData, $pageResponse){

        //get function from other controller
        $setting = $this->myVarSetting->getSetting();

        $content = array(
            "en" => $sendData['body']
        );

        $headings = array(
            "en" => $sendData['title']
        );

        $big_picture = array(
            "id1" => $sendData['image']
        );
        $fields = array(
            'app_id' => $setting[55]->value,
            'include_player_ids' => array($device_id),
            'contents' => $content,
            'headings'=>$headings,
            'chrome_web_image'=>$sendData['image'],
            'big_picture'=>$sendData['image'],
            'ios_attachments'=>$sendData['image'],
            'firefox_icon'=>$sendData['image'],
        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ZTJhZTcwNzItODQ4Ni00Y2FiLWFjZjEtMGY4ODZhZGZlMGZl'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $result = curl_exec($ch);
        $data = json_decode($result);
        curl_close($ch);

        if(!empty($data->recipients) and $data->recipients >= 1){
            $response = '1';
        }else{
            $response = '0';
        }

        if($pageResponse==1){
            return $response;
        }else{
            print $response;
        }
    }


}
