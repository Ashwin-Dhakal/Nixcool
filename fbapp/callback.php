<?php


if( !isset( $_SESSION ) ) {
    session_start();
}
set_time_limit(0);
if(isset($_SESSION['data'])){
  $data = $_SESSION['data'];
}else{
  die('at callback error please try again');
}
require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1884206581865651',
  'app_secret' => '448beb55b71a7aebb411beec63abf408',
  'default_graph_version' => 'v2.8',
  ]);


$helper = $fb->getJavaScriptHelper();

try {
  $accessToken = $helper->getAccessToken();
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

if (isset($accessToken)) {
   $fb->setDefaultAccessToken($accessToken);
   try{
     $requestProfile = $fb->get("/me?fields=first_name,id");
    $profile = $requestProfile->getGraphNode()->asArray();
     $_SESSION['user_name'] = $profile['first_name'];
    $_SESSION['user_id'] = $profile['id'];
    

       if($data == 1 || $data == 3 || $data == 4 || $data == 6 || $data == 9 || $data == 10 || $data == 13 || $data == 14){

    $posts_request = $fb->get('/me/posts?since=2016-01-01&fields=id');
    $total_posts = array();
    $total_react = array();
    $posts_response = $posts_request->getGraphEdge();
    if($fb->next($posts_response)) {
    $response_array = $posts_response->asArray();
    $total_posts = array_merge($total_posts, $response_array);
    while ($posts_response = $fb->next($posts_response)) {  
        $response_array = $posts_response->asArray();
        $total_posts = array_merge($total_posts, $response_array);  
      }
    foreach ($total_posts as $key) {
        $react_request = $fb->get('/'.$key['id'].'/reactions?fields=id');
        $react_response = $react_request->getGraphEdge();
        if($fb->next($react_response)){
            $react_array = $react_response->asArray();
            $total_react = array_merge($total_react, $react_array);
            while ($react_response = $fb->next($react_response)) {
                $react_array = $react_response->asArray();
                $total_react = array_merge($total_react, $react_array);
            }
            
        }
      
         else{
           $total_react = $react_request->getGraphEdge()->asArray();
         }
    }
       

      $id_sorted = array_count_values(array_column($total_react, 'id'));
      arsort($id_sorted);
      $no = 1;
      if($data == 14){
        $no = 4;
      }
       $top = array_slice(array_keys($id_sorted), 0, $no);
       $top_user_name_array = array();
       $top_user_id_array = array();
      foreach($top as $key=>$value){
         $top_request = $fb->get('/'.$value.'/?fields=first_name'); 
         $top_response = $top_request->getGraphNode()->asArray(); 
        $top_user_name_array[$key] = $top_response['first_name'];
        $top_user_id_array[$key] = $value;          
      }
      $_SESSION['friend_name'] = $top_user_name_array[0];
    $_SESSION['friend_id'] = $top_user_id_array[0];
       }
       else{
        //baki xa after review
       }

       }

       if($data == 14){
        $_SESSION['top_friends_name_array'] = $top_user_name_array;
        $_SESSION['top_friends_id_array'] = $top_user_id_array;
       }  


   } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
  }
    header('location: ../share.php');
 // exit;
} else {
    echo "Unauthorized access!!!";
    exit;
}



?>