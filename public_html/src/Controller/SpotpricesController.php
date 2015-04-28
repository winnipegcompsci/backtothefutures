<?php
namespace App\Controller;
require_once (WWW_ROOT . '../src/Vendor/okcoin/OKCoin.php');

use App\Controller\AppController;
use Cake\Core\Configure;
/**
 * Spotprices Controller
 *
 * @property \App\Model\Table\SpotpricesTable $Spotprices
 */
class SpotpricesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Currencies', 'Sources']
        ];
        $this->set('spotprices', $this->paginate($this->Spotprices));
        $this->set('_serialize', ['spotprices']);
    }

    /**
     * View method
     *
     * @param string|null $id Spotprice id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $spotprice = $this->Spotprices->get($id, [
            'contain' => ['Currencies', 'Sources']
        ]);
        $this->set('spotprice', $spotprice);
        $this->set('_serialize', ['spotprice']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $spotprice = $this->Spotprices->newEntity();
        if ($this->request->is('post')) {
            $spotprice = $this->Spotprices->patchEntity($spotprice, $this->request->data);
            if ($this->Spotprices->save($spotprice)) {
                $this->Flash->success('The spotprice has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The spotprice could not be saved. Please, try again.');
            }
        }
        $currencies = $this->Spotprices->Currencies->find('list', ['limit' => 200]);
        $sources = $this->Spotprices->Sources->find('list', ['limit' => 200]);
        $this->set(compact('spotprice', 'currencies', 'sources'));
        $this->set('_serialize', ['spotprice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Spotprice id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $spotprice = $this->Spotprices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $spotprice = $this->Spotprices->patchEntity($spotprice, $this->request->data);
            if ($this->Spotprices->save($spotprice)) {
                $this->Flash->success('The spotprice has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The spotprice could not be saved. Please, try again.');
            }
        }
        $currencies = $this->Spotprices->Currencies->find('list', ['limit' => 200]);
        $sources = $this->Spotprices->Sources->find('list', ['limit' => 200]);
        $this->set(compact('spotprice', 'currencies', 'sources'));
        $this->set('_serialize', ['spotprice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Spotprice id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $spotprice = $this->Spotprices->get($id);
        if ($this->Spotprices->delete($spotprice)) {
            $this->Flash->success('The spotprice has been deleted.');
        } else {
            $this->Flash->error('The spotprice could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function update() 
    {            
        $spotprice = $this->Spotprices->newEntity();
        echo "Spot Price:: <pre>" . print_r($spotprice, TRUE) . "</pre>";
        
        $ok_api_key = Configure::read('okcoin.apikey');
        $ok_secret_key = Configure::read('okcoin.secretkey');
        
        
        $okcoin_client = new OKCoin(
            new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
        );
                        
        $okc_btc_ticker = $okcoin_client->tickerFutureApi(array('symbol' => 'btc_usd'));
        $okc_ltc_ticker = $okcoin_client->tickerFutureApi(array('symbol' => 'ltc_usd'));

        echo "<pre>" . print_r($okc_btc_ticker, TRUE) . "</pre>";
        echo "<pre>" . print_r($okc_ltc_ticker, TRUE) . "</pre>";
        
        die('END OF PROCESSING');
    }
    
    public function cron() 
    {
        $client = new OKCoin(new OKCoin_ApiKeyAuthentication(API_KEY, SECRET_KEY));
        
        echo "<pre>" . print_r($client, TRUE) . "</pre>";
    }
    
}
