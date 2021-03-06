<?php
    $biases = array('L' => 'Long', 'S' => 'Short');
    
    $leverages = array(
        '20' => '20x Leverage - 5% Market Movement',
        '50' => '50x Leverage - 2% Market Movement',
    );        
?>
<div class="row">
    <div class="columns col-md-6 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-question-sign"></span> Definitions / Terms </div>
            <div class="panel-body">
                <div class="columns col-md-6 col-lg-6">
                    <dl>
                        <dt>Recalculation Period</dt>
                        <dd>Interval on which positions get recalculated.</dd> <br />
                        <dt>Hedge Amount </dt>
                        <dd>Amount to be hedged.</dd> <br />
                        <dt>Cover Ratio</dt>
                        <dd>The Ratio of collateral left exposed to vs unexposed. </dd>
                    </dl>
                </div>
                
                <div class="columns col-md-6 col-lg-6">
                    <dl>
                        <dt>Position Bias </dt>
                        <dd>Direction Hedge Leans (Long or Short).</dd> <br />
                        <dt>Slippage Stop Percentage</td>
                        <dd>The amount of slippage before forcing early recalculation.</dd> <br />
                        <dt>Leverage </dt>
                        <dd>20x Leverage: 5% market movement || 50x Leverage: 2% market movement.</dd>
                    </dl>
                </div>                
            </div>
        </div>
    </div>
</div>


<div class="row">    
    <div class="columns col-md-6 col-lg-4">
        <div class="panel panel-blue">
            <div class="panel-heading"> OKCoin.com </div>
            <div class="panel-body">
            <?php
                echo $this->Form->create();
                echo $this->Form->input('recalc_period');
                echo $this->Form->input('hedge_amount');
                echo $this->Form->input('cover_ratio');
                echo $this->Form->label('Position Bias');
                echo $this->Form->select('position_bias', $biases, ['default' => 'L'] );
                echo $this->Form->input('slippage_stop_percentage');
                echo $this->Form->label('Select Your Leverage');
                echo $this->Form->select('leverage', $leverages, ['default' => '20']);
                echo $this->Form->button('Save');
                echo $this->Form->end(); 
            ?>
            </div>
        </div>  
    </div>

    <div class="columns col-md-6 col-lg-4">     
        <div class="panel panel-orange">
            <div class="panel-heading"> 796.com </div>
            <div class="panel-body">
            <?php
                echo $this->Form->create();
                echo $this->Form->input('recalc_period');
                echo $this->Form->input('hedge_amount');
                echo $this->Form->input('cover_ratio');
                echo $this->Form->label('Position Bias');
                echo $this->Form->select('position_bias', $biases, ['default' => 'L'] );
                echo $this->Form->input('slippage_stop_percentage');
                echo $this->Form->label('Select Your Leverage');
                echo $this->Form->select('leverage', $leverages, ['default' => '20']);
                echo $this->Form->button('Save');
                echo $this->Form->end(); 
            ?>
            </div>
        </div>
    </div>

    <div class="columns col-md-6 col-lg-4">
        <div class="panel panel-teal">
            <div class="panel-heading"> BitVC.com </div>
            <div class="panel-body">
            <?php
                echo $this->Form->create();
                echo $this->Form->input('recalc_period');
                echo $this->Form->input('hedge_amount');
                echo $this->Form->input('cover_ratio');
                echo $this->Form->label('Position Bias');
                echo $this->Form->select('position_bias', $biases, ['default' => 'L'] );
                echo $this->Form->input('slippage_stop_percentage');
                echo $this->Form->label('Select Your Leverage');
                echo $this->Form->select('leverage', $leverages, ['default' => '20']);
                echo $this->Form->button('Save');
                echo $this->Form->end(); 
            ?>
            </div>
        </div>
    </div>
</div>




