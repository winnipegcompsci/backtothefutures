<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tickers Controller
 *
 * @property \App\Model\Table\TickersTable $Tickers
 */
class TickersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FromCurrencies', 'ToCurrencies', 'Sources']
        ];
        $this->set('tickers', $this->paginate($this->Tickers));
        $this->set('_serialize', ['tickers']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticker id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticker = $this->Tickers->get($id, [
            'contain' => ['FromCurrencies', 'ToCurrencies', 'Sources']
        ]);
        $this->set('ticker', $ticker);
        $this->set('_serialize', ['ticker']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticker = $this->Tickers->newEntity();
        if ($this->request->is('post')) {
            $ticker = $this->Tickers->patchEntity($ticker, $this->request->data);
            if ($this->Tickers->save($ticker)) {
                $this->Flash->success('The ticker has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ticker could not be saved. Please, try again.');
            }
        }
        $fromCurrencies = $this->Tickers->FromCurrencies->find('list', ['limit' => 200]);
        $toCurrencies = $this->Tickers->ToCurrencies->find('list', ['limit' => 200]);
        $sources = $this->Tickers->Sources->find('list', ['limit' => 200]);
        $this->set(compact('ticker', 'fromCurrencies', 'toCurrencies', 'sources'));
        $this->set('_serialize', ['ticker']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticker id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticker = $this->Tickers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticker = $this->Tickers->patchEntity($ticker, $this->request->data);
            if ($this->Tickers->save($ticker)) {
                $this->Flash->success('The ticker has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ticker could not be saved. Please, try again.');
            }
        }
        $fromCurrencies = $this->Tickers->FromCurrencies->find('list', ['limit' => 200]);
        $toCurrencies = $this->Tickers->ToCurrencies->find('list', ['limit' => 200]);
        $sources = $this->Tickers->Sources->find('list', ['limit' => 200]);
        $this->set(compact('ticker', 'fromCurrencies', 'toCurrencies', 'sources'));
        $this->set('_serialize', ['ticker']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticker id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticker = $this->Tickers->get($id);
        if ($this->Tickers->delete($ticker)) {
            $this->Flash->success('The ticker has been deleted.');
        } else {
            $this->Flash->error('The ticker could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
