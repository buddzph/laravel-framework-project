<?php

namespace App\Http\Controllers;

use App\Service as Service;
use App\DataBind as DataBind;
use App\RBTAlias as RBTAlias;
use App\GlobeVerification as GlobeVerification;
use App\RbtKey as RbtKey;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $request;

    public function __construct(Request $request){
      $this->request = $request;

    }

    public function index(){

      /*$data['services'] = Service::select('id', 'name')
                     ->where('active', 1)->get();*/

      $data['services'] = DataBind::select('services.id', 'services.name', 'data_bind.content', 'data_bind.bg_image', 'data_bind.type')
                    ->leftJoin('services', 'data_bind.id_ref', '=', 'services.id')
                    ->where([
                            'data_bind.table_name' => 'services',
                            'data_bind.status' => '1'
                        ])
                    ->orderBy('services.id', 'DESC')
                    ->get()->toArray();

                // for testing $data
                // dd($data);
      $data['alias'] = $this->rbtalias();
      
      //dd($data);               

      return view('pages.home', $data);
    }

    public function rbtalias(){
      /*$dataalias = DataBind::select('rbt_aliases.id', 'rbt_aliases.rbt_key_id', 'rbt_aliases.alias', 'rbt_keys.title', 'rbt_keys.tariff', 'rbt_keys.expiry', 'data_bind.content', 'data_bind.bg_image', 'data_bind.type')
                    ->leftJoin('rbt_aliases', 'data_bind.id_ref', '=', 'rbt_aliases.id')
                    ->leftJoin('rbt_keys', 'rbt_keys.id', '=', 'rbt_aliases.rbt_key_id')
                    ->where([
                            'data_bind.table_name' => 'rbt_aliases',
                            'data_bind.status' => '1'
                        ])
                    ->get()->toArray();*/

        $dataalias = DataBind::select('rbt_keys.id', 'rbt_keys.id', 'rbt_keys.keyword', 'rbt_keys.artist', 'rbt_keys.title', 'rbt_keys.tariff', 'rbt_keys.expiry', 'data_bind.content', 'data_bind.bg_image', 'data_bind.type')
                    ->leftJoin('rbt_keys', 'rbt_keys.id', '=', 'data_bind.id_ref')
                    ->where([
                            'data_bind.table_name' => 'rbt_aliases',
                            'data_bind.status' => '1'
                        ])
                    ->get()->toArray();

                    // dd($dataalias);

      return $dataalias;
    }

    public function verification(){
      $cellnum = $this->request->get('cellnum');
      $serviceid = $this->request->get('serviceid');
      $servicename = $this->request->get('servicename');
      $servicetype = $this->request->get('type');

      if($this->isGlobe($cellnum)){
          if(strlen($cellnum) == 11){

          	try {
          	//Verification Code Process
              $verificationcode = $this->generateVerificationCode($cellnum);

              $checkifexist = GlobeVerification::select('id', 'cellnum')
				                     ->where([
				                          'cellnum' => $cellnum,
				                          'verification_status' => 0,
				                          'request_type' => $servicetype,
				                          'request_ref_id' => $serviceid,
				                          'expired_at' => NULL
				                      ])->get()->toArray();

				      if(count($checkifexist) > 0){
				      	$update = [
	          		  'cellnum' => $cellnum,
	          		  'request_type' => $servicetype,
	          		  'request_ref_id' => $serviceid,
	          		  'verification_code' => $verificationcode
	          		];
	          		\Log::info('success UPDATE '. $cellnum. ' | service:' . $cellnum . ' | type:' . $servicetype);
	          		GlobeVerification::where(['cellnum' => $cellnum,
				                          'verification_status' => 0,
				                          'request_type' => $servicetype,
				                          'request_ref_id' => $serviceid,
				                          'expired_at' => NULL])
	          							->update($update);
				      }else{
	          		$insert = [
	          		  'cellnum' => $cellnum,
	          		  'request_type' => $servicetype,
	          		  'request_ref_id' => $serviceid,
	          		  'verification_code' => $verificationcode
	          		];
	          		\Log::info('success INSERT '. $cellnum. ' | service:' . $cellnum . ' | type:' . $servicetype);
	          		GlobeVerification::insert($insert);
				      }
				      
				      
				      
				      
				      ### SMS-sender!
						$globe_addr = "119.81.67.159:2370/direct_sms.php";

						// If verification_code = 0, already in database.
						$arr = array(
							'app_id' => "optin_website_verification",
							'cellnum' => $cellnum,
							'code' => $verificationcode
						);
										
						$json_encoded_payload = json_encode($arr);
						$this->curl($json_encoded_payload,$globe_addr); //TODO: add checker for return value
				      

          		

          	} catch (Exception $e) {
          		\Log::info('error on saving');
          	}
            return 'success';
          }else{
            return 'failed';
          }
      }else{
          return 'failed';
      }

      //return $serviceid;
    }

    public function confirmverification(){
      $cellnum = $this->request->get('cellnum');
      $serviceid = $this->request->get('serviceid');
      $servicename = $this->request->get('servicename');
      $servicetype = $this->request->get('type');
      $confirmverificationcode = $this->request->get('confirmverificationcode');

      $checkifexist = GlobeVerification::select('id', 'cellnum')
                     ->where([
                          'cellnum' => $cellnum,
                          'request_type' => $servicetype,
				                  'request_ref_id' => $serviceid,
                          'verification_code' => $confirmverificationcode,
                          'expired_at' => NULL
                      ])->get()->toArray();

      // dd($checkifexist);
      // return $checkifexist;

      if(count($checkifexist) > 0){
      
      
      
      ### Pass to receiver logic
      
        $globe_addr = "119.81.67.159:2370/receiver.php";
		
		$stype = strtoupper($servicetype);
		
		if($stype == 'SERVICE'){
			if($serviceid == 42){ // service id of featured rbt
				$msg = 'NAKAKAMIS'; // featured rbt name
			}
			else{
				$msg = 'ON ' . $servicename;
			}
		}
		else if($stype == 'RBT'){
			$msg = $servicename;
		}
		
		$arr = array(
			'source_addr' => $cellnum,
			'destination_addr' => '2370',
			'message_payload' => $msg
		);
                                
    $json_encoded_payload = json_encode($arr);
		$this->curl($json_encoded_payload,$globe_addr);
      
      
      
      
      
        $update = [
	          		  'cellnum' => $cellnum,
	          		  'request_type' => $servicetype,
	          		  'request_ref_id' => $serviceid,
	          		  'verification_status' => 1
	          		];
	          		\Log::info('success SUBSCRIBED '. $cellnum. ' | service:' . $cellnum . ' | type:' . $servicetype);
	          		GlobeVerification::where(['cellnum' => $cellnum,
				                          'verification_status' => 0,
				                          'request_type' => $servicetype,
				                          'request_ref_id' => $serviceid,
				                          'expired_at' => NULL])
	          							->update($update);
                          
	      return 'success';
      }else{
        return '';
      }
    }

    private $prefixGlobe = array('0817','0905','0906','0915','0916','0917','0926','0927','0935','0936','0937','0945','0955','0956','0975','0976','0977','0978','0979','0994','0995','0996','0997');

    public function isGlobe($cellnum) {
      $numberPrefix = substr($cellnum, -11, 4);
      if (in_array($numberPrefix, $this->prefixGlobe)) return true;
      return false;
    }

    public function generateVerificationCode($cellnum){
      $date = date('YmdHis');
      $string = $cellnum . $date;
      $sha = sha1($string);
      $code = substr($sha, 0, 6);

      return $code;
    }
    
    
    
    private function curl($payload,$url){
		$ch = curl_init($url);

		//Tell cURL that we want to send a POST request.
		curl_setopt($ch, CURLOPT_POST, 1);

		//Attach our encoded JSON string to the POST fields.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_VERBOSE, true);

		//Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		//Execute the request
		$result = curl_exec($ch);
		
		return $result;
		
		//TODO: ADD LOGGER

	}
    
    
    
}
