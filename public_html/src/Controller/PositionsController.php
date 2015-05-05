<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Positions Controller
 *
 * @property \App\Model\Table\PositionsTable $Positions
 */
class PositionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Positions', 'Contracts', 'LeverageRates']
        ];
        $this->set('positions', $this->paginate($this->Positions));
        $this->set('_serialize', ['positions']);
    }

    /**
     * View method
     *
     * @param string|null $id Position id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $position = $this->Positions->get($id, [
            'contain' => ['Positions', 'Contracts', 'LeverageRates']
        ]);
        $this->set('position', $position);
        $this->set('_serialize', ['position']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $position = $this->Positions->newEntity();
        if ($this->request->is('post')) {
            $position = $this->Positions->patchEntity($position, $this->request->data);
            if ($this->Positions->save($position)) {
                $this->Flash->success('The position has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The position could not be saved. Please, try again.');
            }
        }
        $positions = $this->Positions->Positions->find('list', ['limit' => 200]);
        $contracts = $this->Positions->Contracts->find('list', ['limit' => 200]);
        $leverageRates = $this->Positions->LeverageRates->find('list', ['limit' => 200]);
        $this->set(compact('position', 'positions', 'contracts', 'leverageRates'));
        $this->set('_serialize', ['position']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Position id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $position = $this->Positions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $position = $this->Positions->patchEntity($position, $this->request->data);
            if ($this->Positions->save($position)) {
                $this->Flash->success('The position has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The position could not be saved. Please, try again.');
            }
        }
        $positions = $this->Positions->Positions->find('list', ['limit' => 200]);
        $contracts = $this->Positions->Contracts->find('list', ['limit' => 200]);
        $leverageRates = $this->Positions->LeverageRates->find('list', ['limit' => 200]);
        $this->set(compact('position', 'positions', 'contracts', 'leverageRates'));
        $this->set('_serialize', ['position']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Position id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $position = $this->Positions->get($id);
        if ($this->Positions->delete($position)) {
            $this->Flash->success('The position has been deleted.');
        } else {
            $this->Flash->error('The position could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
