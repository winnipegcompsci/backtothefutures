<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

?>

<div class="row">
<!-- Buy/Sell New Orders, Calculator, Trades -->
    <div class="columns col-lg-4">
        <div class="panel panel-info">
            <!-- Quik Calculator -->
            <div class="panel-heading">Quick Calculator</div>
            <div class="panel-body">
                <!-- Calculator Element -->
            </div>
        </div>
    </div>
    
    <div class="columns col-lg-4">
        <div class="panel panel-orange">
            <!-- Buy/Sell Orders --> 
            <div class="panel-heading">Buy/Sell</div>
            <div class="panel-body">
                <!-- Buy / Sell Element -->
            </div>
        </div>
    </div>
    
    <div class="columns col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">List of Recent Trades</div>
            <div class="panel-body">
                 <?= $this->element('recent_trades', array()); ?>
            </div> 
        </div>
    </div>
</div>

<div class="row">
    <div class="columns col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Contracts</div>
            <div class="panel-body">
                <!-- Contracts Element -->
            </div>
        </div>
    </div>
    
    <div class="columns col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading"> User Information </div>
            <div class="panel-body">
                <!-- User Information Element --->
                <?= $this->element('user_information', array()); ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
<!-- Active Positions -->
    <div class="columns col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">User Positions</div>
            <div class="panel-body">
                 <!-- Active Positions Element -->
                 <?= $this->element('user_positions', array()); ?>
            </div>        
        </div>
    </div>

    <div class="columns col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">Ticker</div>
            <div class="panel-body">
                <?= $this->element('tickers', array()); ?>
            </div>
        </div>
    </div>
    
    <!-- Orders -->
    <div class="columns col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Orders</div>
            <div class="panel-body">
                <?= $this->element('user_orders', array()); ?>
            </div>        
        </div>
    </div>
</div>
