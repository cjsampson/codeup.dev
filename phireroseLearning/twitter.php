<?php
require('vendor/autoload.php');
/**
 * Barebones example of using UserstreamPhirehose.
 */
class MyUserConsumer extends UserstreamPhirehose 
{ 
  private $stream;
  public function __construct($key, $secret, $stream) 
  {
    parent::__construct($key, $secret);
    $this->stream = $stream;
  }
  /**
   * First response looks like this:
   *    $data=array('friends'=>array(123,2334,9876));
   *
   * Each tweet of your friends looks like:
   *   [id] => 1011234124121
   *   [text] =>  (the tweet)
   *   [user] => array( the user who tweeted )
   *   [entities] => array ( urls, etc. )
   *
   * Every 30 seconds we get the keep-alive message, where $status is empty.
   *
   * When the user adds a friend we get one of these:
   *    [event] => follow
   *    [source] => Array(   my user   )
   *    [created_at] => Tue May 24 13:02:25 +0000 2011
   *    [target] => Array  (the user now being followed)
   *
   * @param string $status
   */
  public function enqueueStatus($status)
  {
    /*
     * In this simple example, we will just display to STDOUT rather than enqueue.
     * NOTE: You should NOT be processing tweets at this point in a real application, instead they
     *  should be being enqueued and processed asyncronously from the collection process. 
     */
    $data = json_decode($status, true);
    // echo date("Y-m-d H:i:s (").strlen($status)."):".print_r($data,true)."\n";
    $this
        ->stream
          ->event()
              ->setData(json_encode($data))
          ->end()
        ->flush()
      ;
  }
}
//These are the application key and secret
//You can create an application, and then get this info, from https://dev.twitter.com/apps
//(They are under OAuth Settings, called "Consumer key" and "Consumer secret")
define('TWITTER_CONSUMER_KEY', 'xcQK1Me1cJkzfFs1hRWtDexwM');
define('TWITTER_CONSUMER_SECRET', 'YojwnUVpuQQAlP4IFEHFjl0ZW0BZXmXdqx2E8YW0YOJKSEefYU');
//These are the user's token and secret
//You can get this from https://dev.twitter.com/apps, under the "Your access token"
//section for your app.
define('OAUTH_TOKEN', '1058717184-VyQz2tjlt8kegThlEZdQqOXwmt9NkWoljQwa8Rx');
define('OAUTH_SECRET', 'FX3v5uHkntanSjWueMF41PAUkTTzMoMqdHlhp6HKAqhaV');

use Igorw\EventSource\Stream;

foreach (Stream::getHeaders() as $name => $value) {
    header("$name: $value");
}


// Start streaming
$sc = new MyUserConsumer(OAUTH_TOKEN, OAUTH_SECRET, new Stream() );
$sc->consume();
