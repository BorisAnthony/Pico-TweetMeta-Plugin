<?php

/**
 * "Tweet Meta" Twitter Post plugin for Pico
 *
 * @author Boris Anthony
 * @link http://borisanthony.net
 * @license http://opensource.org/licenses/MIT
 * @version 0.1
 */
 
 class Pico_Tweetmeta {
 /*
  private $is_tweetmeta;
  private $plugin_path;
 
  public function __construct()
  {
    $this->is_tweetmeta = false;
    $this->plugin_path = dirname(__FILE__);
  }
*/
  public function before_read_file_meta(&$headers)
  {
    $headers['tweetmeta'] = 'TweetMeta';
  }

  public function get_page_data(&$data, $page_meta)
  {
    $data['tweetmeta'] = $page_meta['tweetmeta'];
  } 
 
 }
 ?>