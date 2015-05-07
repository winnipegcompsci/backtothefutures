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
        <?php 
            $data = $okcoin_client->fixUserinfoFutureApi(['api_key' => $okcoin_apikey]);
        ?>
        <div class="columns col-lg-6 col-md-6">
            <h4>Bitcoin</h4>
            <ul>
                <li> Balance: <?= $data->info->btc->balance; ?></li>
                <li> Contracts: <?= $this->Html->link('View Here', '/contracts'); ?></li>
                <li> Rights: <?= $data->info->btc->rights; ?></li>
            </ul>
        </div>
        
        <div class="columns col-lg-6 col-md-6">
            <h4>Litecoin</h4>
            <ul>
                <li> Balance: <?= $data->info->ltc->balance; ?></li>
                <li> Contracts: <?= $this->Html->link('View Here', '/contracts'); ?></li>
                <li> Rights: <?= $data->info->ltc->rights; ?></li>
            </ul>
        </div>
        
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