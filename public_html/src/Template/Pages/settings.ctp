<div class="columns col-lg-5 col-lg-offset-1">

<h2> Terms </h2>
<dl>
    <dt>Recalculation Period</dt>
    <dd>Interval on which positions get recalculated.</dd>
    
    <dt>Hedge Amount </dt>
    <dd>Amount to be hedged.</dd>
    
    <dt>Cover Ratio</dt>
    <dd>The Ratio of collateral left exposed to vs unexposed. </dd>
    
    <dt>Position Bias </dt>
    <dd>Direction Hedge Leans (Long or Short).</dd>
    
    <dt>Slippage Stop Percentage</td>
    <dd>The amount of slippage before forcing early recalculation.</dd>
    
    <dt>Leverage </dt>
    <dd>20x Leverage: 5% market movement || 50x Leverage: 2% market movement.</dd>
</dl>
    
</div>

<div class="columns col-lg-5"> 

<?php
    $biases = array('L' => 'Long', 'S' => 'Short');
    
    $leverages = array(
        '20' => '20x Leverage - 5% Market Movement',
        '50' => '50x Leverage - 2% Market Movement',
    );
    
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