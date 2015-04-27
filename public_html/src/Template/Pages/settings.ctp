Settings:: 


Recalculation Period - Interval on Which Positions are Recalculated.
Hedge Amount - Amount to Be Hedged
Cover Ratio - The Ratio of Collateral Left Explosed vs. Unexposed.
Position Bias - Direction Hedge Leans (long or short).
Slippage Stop Percentage - The amount of slippage before forcing early recalculation.
Leverage - 20x Leverage: 5% market movement || 50x Leverage: 2% market movement.


<?php 
    echo $this->Form->create();
    echo $this->Form->create('recalculation_spot_price', TRUE);
    echo $this->Form->input('hedge_amount');
    echo $this->Form->input('cover_ratio');
    echo $this->Form->input('position_bias');
    echo $this->Form->input('slippage_stop_percentant');
    echo $this->Form->input('leverage');
    echo $this->Form->end();
    
?>