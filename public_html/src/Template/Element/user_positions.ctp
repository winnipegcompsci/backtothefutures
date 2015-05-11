<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');
$okcoin_apikey = Configure::read('okcoin.apikey');
$okcoin_secretkey = Configure::read('okcoin.secretkey');
?>

<ul class="nav nav-pills">
    <li><a href="#usercontracts_okcoin" data-toggle="tab">OKCoin</a></li>
    <li><a href="#usercontracts_796" data-toggle="tab">796</a></li>
    <li><a href="#usercontracts_bitvc" data-toggle="tab">BitVC</a></li>
</ul>

<div class="tab-content">
    <?php 
        $data = $okcoin_client->positionFutureApi(['api_key' => $okcoin_apikey]);
        echo "<pre>" . print_r($data, TRUE) . "</pre>";
    ?>
    <div class="tab-pane fade in active" id="usercontracts_okcoin">
        <h4>OKCoin</h4>
    </div>
    
    <div class="tab-pane fade" id="usercontracts_796">
        <h4>796</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
    <div class="tab-pane fade" id="usercontracts_bitvc">
        <h4>BitVC</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
</div>