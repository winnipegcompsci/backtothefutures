<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');
$okcoin_apikey = Configure::read('okcoin.apikey');
$okcoin_secretkey = Configure::read('okcoin.secretkey');
?>

<ul class="nav nav-pills">
    <li><a href="#userinfo_okcoin" data-toggle="tab">OKCoin</a></li>
    <li><a href="#userinfo_796" data-toggle="tab">796</a></li>
    <li><a href="#userinfo_bitvc" data-toggle="tab">BitVC</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade in active" id="userinfo_okcoin">
        <h4>OKCoin</h4>
        <?php 
            $data = $okcoin_client->fixUserinfoFutureApi(['api_key' => $okcoin_apikey]);
            echo "<pre>" . print_r($data, TRUE) . "</pre>";
       ?>
    </div>
    <div class="tab-pane fade" id="userinfo_796">
        <h4>796</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
    <div class="tab-pane fade" id="userinfo_bitvc">
        <h4>BitVC</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
</div>