<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contracts Controller
 *
 * @property \App\Model\Table\ContractsTable $Contracts
 */
class ContractsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContractTypes']
        ];
        $this->set('contracts', $this->paginate($this->Contracts));
        $this->set('_serialize', ['contracts']);
    }

    /**
     * View method
     *
     * @param string|null $id Contract id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => ['ContractTypes', 'FixedLeveragePositions', 'Orders', 'Positions']
        ]);
        $this->set('contract', $contract);
        $this->set('_serialize', ['contract']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contract = $this->Contracts->newEntity();
        if ($this->request->is('post')) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->data);
            if ($this->Contracts->save($contract)) {
                $this->Flash->success('The contract has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The contract could not be saved. Please, try again.');
            }
        }
        $contractTypes = $this->Contracts->ContractTypes->find('list', ['limit' => 200]);
        $this->set(compact('contract', 'contractTypes'));
        $this->set('_serialize', ['contract']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contract id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->data);
            if ($this->Contracts->save($contract)) {
                $this->Flash->success('The contract has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The contract could not be saved. Please, try again.');
            }
        }
        $contractTypes = $this->Contracts->ContractTypes->find('list', ['limit' => 200]);
        $this->set(compact('contract', 'contractTypes'));
        $this->set('_serialize', ['contract']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contract id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contract = $this->Contracts->get($id);
        if ($this->Contracts->delete($contract)) {
            $this->Flash->success('The contract has been deleted.');
        } else {
            $this->Flash->error('The contract could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
