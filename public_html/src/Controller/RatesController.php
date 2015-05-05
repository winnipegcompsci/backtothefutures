<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rates Controller
 *
 * @property \App\Model\Table\RatesTable $Rates
 */
class RatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rates', 'Currencies', 'Sources']
        ];
        $this->set('rates', $this->paginate($this->Rates));
        $this->set('_serialize', ['rates']);
    }

    /**
     * View method
     *
     * @param string|null $id Rate id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rate = $this->Rates->get($id, [
            'contain' => ['Rates', 'Currencies', 'Sources']
        ]);
        $this->set('rate', $rate);
        $this->set('_serialize', ['rate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rate = $this->Rates->newEntity();
        if ($this->request->is('post')) {
            $rate = $this->Rates->patchEntity($rate, $this->request->data);
            if ($this->Rates->save($rate)) {
                $this->Flash->success('The rate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rate could not be saved. Please, try again.');
            }
        }
        $rates = $this->Rates->Rates->find('list', ['limit' => 200]);
        $currencies = $this->Rates->Currencies->find('list', ['limit' => 200]);
        $sources = $this->Rates->Sources->find('list', ['limit' => 200]);
        $this->set(compact('rate', 'rates', 'currencies', 'sources'));
        $this->set('_serialize', ['rate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rate id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rate = $this->Rates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rate = $this->Rates->patchEntity($rate, $this->request->data);
            if ($this->Rates->save($rate)) {
                $this->Flash->success('The rate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rate could not be saved. Please, try again.');
            }
        }
        $rates = $this->Rates->Rates->find('list', ['limit' => 200]);
        $currencies = $this->Rates->Currencies->find('list', ['limit' => 200]);
        $sources = $this->Rates->Sources->find('list', ['limit' => 200]);
        $this->set(compact('rate', 'rates', 'currencies', 'sources'));
        $this->set('_serialize', ['rate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rate id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rate = $this->Rates->get($id);
        if ($this->Rates->delete($rate)) {
            $this->Flash->success('The rate has been deleted.');
        } else {
            $this->Flash->error('The rate could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
