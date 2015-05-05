<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FuturesIndexes Controller
 *
 * @property \App\Model\Table\FuturesIndexesTable $FuturesIndexes
 */
class FuturesIndexesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FuturesIndices', 'FromCurrencies', 'ToCurrencies', 'Sources']
        ];
        $this->set('futuresIndexes', $this->paginate($this->FuturesIndexes));
        $this->set('_serialize', ['futuresIndexes']);
    }

    /**
     * View method
     *
     * @param string|null $id Futures Index id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $futuresIndex = $this->FuturesIndexes->get($id, [
            'contain' => ['FuturesIndices', 'FromCurrencies', 'ToCurrencies', 'Sources']
        ]);
        $this->set('futuresIndex', $futuresIndex);
        $this->set('_serialize', ['futuresIndex']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $futuresIndex = $this->FuturesIndexes->newEntity();
        if ($this->request->is('post')) {
            $futuresIndex = $this->FuturesIndexes->patchEntity($futuresIndex, $this->request->data);
            if ($this->FuturesIndexes->save($futuresIndex)) {
                $this->Flash->success('The futures index has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The futures index could not be saved. Please, try again.');
            }
        }
        $futuresIndices = $this->FuturesIndexes->FuturesIndices->find('list', ['limit' => 200]);
        $fromCurrencies = $this->FuturesIndexes->FromCurrencies->find('list', ['limit' => 200]);
        $toCurrencies = $this->FuturesIndexes->ToCurrencies->find('list', ['limit' => 200]);
        $sources = $this->FuturesIndexes->Sources->find('list', ['limit' => 200]);
        $this->set(compact('futuresIndex', 'futuresIndices', 'fromCurrencies', 'toCurrencies', 'sources'));
        $this->set('_serialize', ['futuresIndex']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Futures Index id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $futuresIndex = $this->FuturesIndexes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $futuresIndex = $this->FuturesIndexes->patchEntity($futuresIndex, $this->request->data);
            if ($this->FuturesIndexes->save($futuresIndex)) {
                $this->Flash->success('The futures index has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The futures index could not be saved. Please, try again.');
            }
        }
        $futuresIndices = $this->FuturesIndexes->FuturesIndices->find('list', ['limit' => 200]);
        $fromCurrencies = $this->FuturesIndexes->FromCurrencies->find('list', ['limit' => 200]);
        $toCurrencies = $this->FuturesIndexes->ToCurrencies->find('list', ['limit' => 200]);
        $sources = $this->FuturesIndexes->Sources->find('list', ['limit' => 200]);
        $this->set(compact('futuresIndex', 'futuresIndices', 'fromCurrencies', 'toCurrencies', 'sources'));
        $this->set('_serialize', ['futuresIndex']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Futures Index id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $futuresIndex = $this->FuturesIndexes->get($id);
        if ($this->FuturesIndexes->delete($futuresIndex)) {
            $this->Flash->success('The futures index has been deleted.');
        } else {
            $this->Flash->error('The futures index could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
