BACK TO THE FUTURES:
-------------------------------------------------------------------------------
Host Entries:
207.161.146.213		whiskey.backtothefutures.com        #Work, Home, Wherever.
10.20.10.88		    dev.backtothefutures.com            #Work (Internal)

Settings (Inputs)::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Recalculation Period – Interval on Which Positions are Re-Calculated.
Hedge Amount – Amount to be Hedged.
Cover Ratio – The Ratio of Collateral Left Exposed vs. Unexposed
Position Bias – The direction the hedge leans (long or short)
Slippage Stop Percentage (SSP) – The amount of slippage we want to allow before 
                                 forcing re-calculation
Leverage – (20x Leverage – 5% market movement || 
            50x Leverage – 2% Market Movement Wipeout) 

Views / Displays (Outputs):::::::::::::::::::::::::::::::::::::::::::::::::::::
Margin Requirement – The actual Collateral That is At Risk.
Net Position – The Net sum of the Long and Short Positions
Reserve Collateral – The collateral not margined in a position but could be 
                    at risk. 
Insurance Cost – The amount we are spending to maintain a hedge. 

Example 1: Basic Straddle (Long Biased)
Using a spot price of $100.00 to demonstrate. Since this is a long biased 
straddle, we think the market will go up. The cost of insurance is 4BTC as 
shown by the 4 BTC short on 796.com. 

10 BTC long with 2% SSP @ 20X Leverage on OKCoin = 200 BTC (Market can move 
down 5% until a wipeout, or up 2% for a double)
4 BTC Short @ 50X Leverage on 796 = 200 BTC (Market can move up 2% until a 
wipeout, or down 2% for a double). 

This gives us a cover ratio of 1.0 and a Net Position of 0.

Scenario 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Within our target interval (recalculation period) if the price goes up to 
$101.00 (a 1% gain, OKCoin is at a 2 BTC profit and 796.com is at a 2 BTC 
loss, netting 0 BTC).

In this case, we should readjust our stops. OKCoin position is in the money 
and can stay where it is, but the current 796.com Position should be closed 
and reopened at $101. 
*Note* Need API Call to Move from Cash Account to Margin Account to 
Facilitate this.

Scenario 2:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Price goes up to $105.00. The OKCoin position would be up 10 BTC. 
The 796 Position would be wiped out.  Net gain is 6 BTC. 
The 796.com position needs to be re-opened at 105$

Scenario 3:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Price goes down to $98.00. 
The OKCoin Position would be down 4 BTC. 
But the 796.com Position would be up 4 BTC. 
Net 0. 
OKCoin Position gets closed and re-opened at 98$.
