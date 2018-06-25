<?php namespace Primitiveonline\Woocommerce;

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

use Primitiveonline\Woocommerce\Model\Order;
use JsonMapper;

class Base{

   private $url;
   private $consumer_key;
   private $consumer_secret;

   private $options = array(
       'ssl_verify'      => false,
       'wp_api' => true,
       'version' => 'wc/v2',
   );

    /**
     * Base constructor.
     * @param $url
     * @param $consumer_key
     * @param $consumer_secret
     * @param array $options
     */
    public function __construct($url, $consumer_key, $consumer_secret, $options = array())
    {
        $this->url = $url;
        $this->consumer_key = $consumer_key;
        $this->consumer_secret = $consumer_secret;
        if(!empty($options))
            $this->options = $options;
    }


    public function getOrders(){
        try {
            $mapper = new JsonMapper();
            $mapper->bStrictNullTypes = false;
            $woocommerce = new Client(
                $this->url,
                $this->consumer_key,
                $this->consumer_secret,
                $this->options
            );

            $result = $woocommerce->get('orders', ['status'=>'processing', 'after' => '2018-04-01T12:43:10']);
            $resp = [];
            foreach ($result as $order)
            {
                $resp[] = $mapper->map(
                    json_decode(json_encode($order)),
                    new Order()
                );
            }
            /*
            echo '<pre>';
            print_r($result);
            echo '</pre>';
            */
            return $resp;

        } catch (HttpClientException  $e) {
            $e->getMessage(); // Error message.
            $e->getRequest(); // Last request data.
            $e->getResponse(); // Last response data.
        }

   }
}