<?php
use Drupal\node\Entity\Node;

/**
 * @file Contains the code to generate the custom drush commands.
 */

/**
 * Implements hook_drush_command().
 */
function custom_drush_command_drush_command() {
  $items = array();
  $items['say-hello'] = [
    'description' => 'Say hello.',
    'arguments' => [
      'my_custom_type' => 'The name for my custom type',
    ],
    'drupal dependencies' => ['custom_drush_command'],
    'aliases' => ['say:hello'],
  ];
  return $items;
}

/**
 * Call back function drush_custom_drush_command_say_hello()
 * The call back function name in the  following format
 *   drush_{module_name}_{item_id_for_command}()
 */
function drush_custom_drush_command_say_hello($my_custom_type = '') {
  $nids = \Drupal::entityQuery('node')->condition('type',$my_custom_type)->execute();
  $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
  foreach ($nids as $nid) {
   $node = \Drupal\node\Entity\Node::load($nid); 
   $body = $node->body->value;
   $title = $node->title->value;
   
   $string = $body;
   $regex='|<a\s*href="([^"]+)"[^>]+>([^<]+)</a>|';
    //checking if the body contains any achor tag
	$howmany = preg_match_all($regex,$string,$res,PREG_SET_ORDER);

	//get drupal host
	$host = \Drupal::request()->getHost();
    
	//this will take out all anchor links reference https://ideone.com/A59IpP
	for($i=0;$i<count($res);$i++) {
		//these are anchor links
		$link = $res[$i][0]; 
		
		//checking does has a external link
		if (strpos($link, 'http:') !== false) {
			
		  // making sure its not internal url by checking with Drupal host
		  if (strpos($link, $host) === false) {
			//calling function to update with rel='nofollow'
			$updated_link = makeNoFollow($link, "nofollow");
			
			// replacing that particular link with updated nofollow link
			$updated_body = str_replace($link,$updated_link,$body);

			//saving the node with updated body
			$node = Node::load($nid);
			//set value for field
			$node->body->value = $updated_body;
			$node->body->format = 'full_html';
			//save to update node
			$node->save();
		  } 	
		}
	}
   //...
  } 
  drush_print('Working on Content Type : ' . $my_custom_type . ' !');
}


//This function will make any anchor link no follow
function makeNoFollow(&$str, $nofollow){
  //See if there is already a "rel" attribute
  if(strpos($str, "rel")){
    $pattern = "/rel=([\"'])([^\\1]+?)\\1/";
    $replace = "rel=\\1\\2 $nofollow\\1";
  } 
  else{
    $pattern = "/<a /";
    $replace = "<a rel=\"$nofollow\" ";
  }
    $str = preg_replace($pattern, $replace, $str);
}