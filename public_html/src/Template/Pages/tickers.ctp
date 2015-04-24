<div class="row>

</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= ucwords($this->request->params['pass'][0]); ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-5 col-lg-offset-1 columns">
        <h2 class="subheader"> OkCoin </h2>
        
        
        <table> 
            <tr>
                <th> Currency </th> <th> Item </th> <th> Value </th>
            </tr>
            
            <tr>
                <td> BTC </td> <td> High</td> <td> <?= $client->ticker(API) ?> </td>
            </tr>
            
            <tr>
                <td>  BTC </td> <td> </td> <td> <? $client->tickerApi($params) ?> </td>
            </tr>
            
        </table>
        
    </div>
    
    <div class="col-lg-5 columns">
        <h2 class="subheader"> 796 </h2>
    </div>

</div>