<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FixedLeveragePositions Controller
 *
 * @property \App\Model\Table\FixedLeveragePositionsTable $FixedLeveragePositions
 */
class FixedLeveragePositionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FixedLeveragePositions', 'Contracts', 'ContractTypes', 'LeverageRates']
        ];
        $this->set('fixedLeveragePositions', $this->paginate($this->FixedLeveragePositions));
        $this->set('_serialize', ['fixedLeveragePositions']);
    }

    /**
     * View method
     *
     * @param string|null $id Fixed Leverage Position id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fixedLeveragePosition = $this->FixedLeveragePositions->get($id, [
            'contain' => ['FixedLeveragePositions', 'Contracts', 'ContractTypes', 'LeverageRates']
        ]);
        $this->set('fixedLeveragePosition', $fixedLeveragePosition);
        $this->set('_serialize', ['fixedLeveragePosition']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fixedLeveragePosition = $this->FixedLeveragePositions->newEntity();
        if ($this->request->is('post')) {
            $fixedLeveragePosition = $this->FixedLeveragePositions->patchEntity($fixedLeveragePosition, $this->request->data);
            if ($this->FixedLeveragePositions->save($fixedLeveragePosition)) {
                $this->Flash->success('The fixed leverage position has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The fixed leverage position could not be saved. Please, try again.');
            }
        }
        $fixedLeveragePositions = $this->FixedLeveragePositions->FixedLeveragePositions->find('list', ['limit' => 200]);
        $contracts = $this->FixedLeveragePositions->Contracts->find('list', ['limit' => 200]);
        $contractTypes = $this->FixedLeveragePositions->ContractTypes->find('list', ['limit' => 200]);
        $leverageRates = $this->FixedLeveragePositions->LeverageRates->find('list', ['limit' => 200]);
        $this->set(compact('fixedLeveragePosition', 'fixedLeveragePositions', 'contracts', 'contractTypes', 'leverageRates'));
        $this->set('_serialize', ['fixedLeveragePosition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fixed Leverage Position id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fixedLeveragePosition = $this->FixedLeveragePositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fixedLeveragePosition = $this->FixedLeveragePositions->patchEntity($fixedLeveragePosition, $this->request->data);
            if ($this->FixedLeveragePositions->save($fixedLeveragePosition)) {
                $this->Flash->success('The fixed leverage position has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The fixed leverage position could not be saved. Please, try again.');
            }
        }
        $fixedLeveragePositions = $this->FixedLeveragePositions->FixedLeveragePositions->find('list', ['limit' => 200]);
        $contracts = $this->FixedLeveragePositions->Contracts->find('list', ['limit' => 200]);
        $contractTypes = $this->FixedLeveragePositions->ContractTypes->find('list', ['limit' => 200]);
        $leverageRates = $this->FixedLeveragePositions->LeverageRates->find('list', ['limit' => 200]);
        $this->set(compact('fixedLeveragePosition', 'fixedLeveragePositions', 'contracts', 'contractTypes', 'leverageRates'));
        $this->set('_serialize', ['fixedLeveragePosition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fixed Leverage Position id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fixedLeveragePosition = $this->FixedLeveragePositions->get($id);
        if ($this->FixedLeveragePositions->delete($fixedLeveragePosition)) {
            $this->Flash->success('The fixed leverage position has been deleted.');
        } else {
            $this->Flash->error('The fixed leverage position could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
