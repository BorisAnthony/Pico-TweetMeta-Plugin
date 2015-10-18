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