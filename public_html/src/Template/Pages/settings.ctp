Recalculation Period - Interval on Which Positions are Recalculated.
Hedge Amount - Amount to Be Hedged
Cover Ratio - The Ratio of Collateral Left Explosed vs. Unexposed.
Position Bias - Direction Hedge Leans (long or short).
Slippage Stop Percentage - The amount of slippage before forcing early recalculation.
Leverage - 20x Leverage: 5% market movement || 50x Leverage: 2% market movement.

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
    <dd></dd>
    
    <dt>Leverage </dt></dd>
</dl>
    

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
    echo $this->Form->input('slippage_stop_percentant');
    echo $this->Form->label('Select Your Leverage');
    echo $this->Form->select('leverage', $leverages, ['default' => '20']);
    echo $this->Form->button('Save');
    echo $this->Form->end();  
?>