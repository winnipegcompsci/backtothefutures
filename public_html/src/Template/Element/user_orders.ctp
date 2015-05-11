<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');
$okcoin_apikey = Configure::read('okcoin.apikey');
$okcoin_secretkey = Configure::read('okcoin.secretkey');
?>

<ul class="nav nav-pills">
    <li><a href="#userorders_okcoin" data-toggle="tab">OKCoin</a></li>
    <li><a href="#userorders_796" data-toggle="tab">796</a></li>
    <li><a href="#userorders_bitvc" data-toggle="tab">BitVC</a></li>
</ul>                             

<div class="tab-content">
    <?php 
        $okc_data = $okcoin_client->getOrderFutureApi([
            'symbol' => 'btc_usd', 
            'contract_type' => 'quarter', 
            'api_key' => $okcoin_apikey, 
            'status' => '1',
            'order_id' => '-1',
            'current_page' => '1',
            'page_length' => '50',
        ]);       
    ?>
    <div class="tab-pane fade in active" id="userorders_okcoin">
        <h4>OKCoin</h4>
        <?= "<pre>" . print_r($okc_data, TRUE) . "</pre>"; ?>
    </div>
    
    <div class="tab-pane fade" id="userorders_796">
        <h4>796</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
    <div class="tab-pane fade" id="userorders_bitvc">
        <h4>BitVC</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
</div>