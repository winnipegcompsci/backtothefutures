<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Back To The Futures:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min'); ?>
    <?= $this->Html->css('datepicker3'); ?>
    <?= $this->Html->css('styles.css'); ?>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span> Back<span>To</span>The<span>Futures</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'profile']); ?>"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'settings']); ?>"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'dashboard']); ?>"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
            
            <li role="presentation" class="divider"></li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'tickers']); ?>"><span class="glyphicon glyphicon-stats"></span> Market Tickers</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'depths']); ?>"><span class="glyphicon glyphicon-signal"></span> Market Depth</a></li>
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'lending']); ?>"><span class="glyphicon glyphicon-list-alt"></span> Lending Depth</a></li>
  			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'trades']); ?>"><span class="glyphicon glyphicon-eye-open"></span> Market Trades</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'decisions']); ?>"><span class="glyphicon glyphicon-retweet"></span> Market Decisions </a></li>
            
            <li role="presentation" class="divider"></li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'contracts']); ?>"><span class="glyphicon glyphicon-file"></span> My Futures and Assets <span style="background-color: #30a5ff" class="pull-right badge">0</span> </a> </li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'profitandloss']); ?>"><span class="glyphicon glyphicon-usd"></span> My Profits & Losses <span style="background-color: #30a5ff" class="pull-right badge">0</span> </a> </li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'positions']); ?>"><span class="glyphicon glyphicon-sort-by-order"></span> My Positions Held <span style="background-color: #30a5ff" class="pull-right badge">0</span> </a> </li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'transactions']); ?>"><span class="glyphicon glyphicon-transfer"></span> My Transactions <span style="background-color: #30a5ff" class="pull-right badge">0</span> </a> </li>
             
			<li role="presentation" class="divider"></li>
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'settings']); ?>"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">   <!-- Breadcrum Row -->
			<ol class="breadcrumb">
				<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'dashboard']); ?>"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?= isset($this->request->params['pass'][0]) ? ucwords($this->request->params['pass'][0]) : $this->fetch('title') ?></li>
			</ol>
		</div><!--/.row-->
        <!-- 
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?= ucwords($this->request->params['pass'][0]); ?></h1>
			</div>
		</div><!--/.row-->
        
        
        <div class="row">
            <?= $this->Flash->render() ?>
        </div>
        
		<div class="row">
            <?= $this->fetch('content'); ?>    
        </div>
	</div>	<!--/.main-->

    <?= $this->Html->script('jquery-1.11.1.min'); ?>
    <?= $this->Html->script('bootstrap.min'); ?>
    <?= $this->Html->script('chart.min'); ?>
    <?= $this->Html->script('easypiechart'); ?>
    <?= $this->Html->script('bootstrap-datepicker'); ?>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
</body>
</html>
