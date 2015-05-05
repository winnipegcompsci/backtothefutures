<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

?>

<div class="row">
<!-- Buy/Sell New Orders, Calculator, Trades -->
    <div class="columns col-lg-4">
        <div class="panel panel-blue">
            <!-- Quik Calculator -->
            <div class="panel-heading">Quick Calculator</div>
            <div class="panel-body">
                <!-- <?= $this->element('calculator');  ?> -->
            </div>
        </div>
    </div>
    
    <div class="columns col-lg-4">
        <div class="panel panel-blue">
            <!-- Buy/Sell Orders --> 
            <div class="panel-heading">Buy/Sell</div>
            <div class="panel-body">
                <!-- <?= /* $this->element('buy/sell'); */ ?> -->
            </div>
        </div>
    </div>
    
    <div class="columns col-lg-4">
        <div class="panel panel-blue">
            <div class="panel-heading">List of Recent Trades</div>
            <div class="panel-body">
                 <!-- <?= /* $this->element('calculator'); */ ?>  -->
            </div>
            
        </div>
    </div>
</div>

<div class="row">
<!-- Contracts -->
    <div class="columns col-lg-8">
        <div class="panel panel-blue">
            <div class="panel-heading">Contracts</div>
            <div class="panel-body">
                <!-- <?= /* $this->element('contracts'); */ ?> -->
            </div>
        </div>
    </div>
</div>

<div class="row">
<!-- Active Positions -->
    <div class="columns col-lg-8">
        <div class="panel panel-blue">
            <div class="panel-heading">Active Positions</div>
            <div class="panel-body">
                 <!-- <?= /* $this->element('positions'); */ ?> -->
            </div>        
        </div>
    </div>
</div>

<div class="row">
<!-- Orders -->
    <div class="columns col-lg-8">
        <div class="panel panel-blue">
            <div class="panel-heading">Orders</div>
            <div class="panel-body">
                 <!-- <?= /* $this->element('orders'); */ ?> -->
            </div>        
        </div>
    </div>
</div>
