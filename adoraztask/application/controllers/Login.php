<?php
require_once(APPPATH.'vendor/autoload.php');
class Login extends CI_Controller{

	

	
	public function fblogin(){
		
		 $fb = new Facebook\Facebook([
          'app_id' => '1932073653782898',
          'app_secret' => '4371b8f40e2105441daec1a202021498',
          'default_graph_version' => 'v2.10',
        ]);

   $helper = $fb->getRedirectLoginHelper();

   $permissions = ['email','user_location','user_birthday','publish_actions']; 
// For more permissions like user location etc you need to send your application for review

   $loginUrl = $helper->getLoginUrl(base_url().'/Login/fbcallback', $permissions);

   header("location: ".$loginUrl);
	}

	public function fbcallback(){
		 $fb = new Facebook\Facebook([
        'app_id' => '1932073653782898',
        'app_secret' => '4371b8f40e2105441daec1a202021498',
        'default_graph_version' => 'v2.10',
        ]);
        
        $helper = $fb->getRedirectLoginHelper();  
  	
        try {  
            
            $accessToken = $helper->getAccessToken();  
            
        }catch(Facebook\Exceptions\FacebookResponseException $e) {  
          // When Graph returns an error  
          echo 'Graph returned an error: ' . $e->getMessage();  
          exit;  
        } catch(Facebook\Exceptions\FacebookSDKException $e) {  
          // When validation fails or other local issues  
          echo 'Facebook SDK returned an error: ' . $e->getMessage();  
          exit;  
        }  
 
 
        try {
          // Get the Facebook\GraphNodes\GraphUser object for the current user.
          // If you provided a 'default_access_token', the '{access-token}' is optional.
          $response = $fb->get('/me?fields=id,name,email,first_name,last_name,birthday,location,gender', $accessToken);
         // print_r($response);
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'ERROR: Graph ' . $e->getMessage();
          exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'ERROR: validation fails ' . $e->getMessage();
          exit;
        }
    
        // User Information Retrival begins................................................
        $me = $response->getGraphUser();
        
        $location = $me->getProperty('location');
        echo "Full Name: ".$me->getProperty('name')."<br>";
        echo "First Name: ".$me->getProperty('first_name')."<br>";
        echo "Last Name: ".$me->getProperty('last_name')."<br>";
        echo "Gender: ".$me->getProperty('gender')."<br>";
        echo "Email: ".$me->getProperty('email')."<br>";
        echo "location: ".$location['name']."<br>";
        echo "Birthday: ".$me->getProperty('birthday')->format('d/m/Y')."<br>";
        echo "Facebook ID: <a href='https://www.facebook.com/".$me->getProperty('id')."' target='_blank'>".$me->getProperty('id')."</a>"."<br>";
        $profileid = $me->getProperty('id');
        echo "</br><img src='//graph.facebook.com/$profileid/picture?type=large'> ";
        echo "</br></br>Access Token : </br>".$accessToken; 
	}
}