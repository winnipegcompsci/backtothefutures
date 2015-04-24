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
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min'); ?>
    <?= $this->Html->css('datepicker3'); ?>
    <?= $this->Html->css('styles.css'); ?>
    
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
				<a class="navbar-brand" href="#"><span>Back</span>To<span>The</span>Futures</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="index.html"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'tickers']); ?>"><span class="glyphicon glyphicon-th"></span> Tickers</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'depths']); ?>"><span class="glyphicon glyphicon-list-alt"></span> Market Depth</a></li>
            
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'trades']); ?>"><span class="glyphicon glyphicon-stats"></span> Trades</a></li>
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'settlements']); ?>"><span class="glyphicon glyphicon-list-alt"></span> Settlements</a></li>
            
			<li role="presentation" class="divider"></li>
			<li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'settings']); ?>"><span class="glyphicon glyphicon-pencil"></span> Settings</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">   <!-- Breadcrum Row -->
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?= isset(ucwords($this->request->params['pass'][0])) ? ucwords($this->request->params['pass'][0]) : $this->fetch('title') ?></li>
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
    <?= $this->Html->script('chart-data'); ?>
    <?= $this->Html->script('easypiechart'); ?>
    <?= $this->Html->script('easypiechart-data'); ?>
    <?= $this->Html->script('bootstrap-datepicker'); ?>
    
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>
</html>
