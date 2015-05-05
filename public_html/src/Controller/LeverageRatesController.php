<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LeverageRates Controller
 *
 * @property \App\Model\Table\LeverageRatesTable $LeverageRates
 */
class LeverageRatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['LeverageRates']
        ];
        $this->set('leverageRates', $this->paginate($this->LeverageRates));
        $this->set('_serialize', ['leverageRates']);
    }

    /**
     * View method
     *
     * @param string|null $id Leverage Rate id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leverageRate = $this->LeverageRates->get($id, [
            'contain' => ['LeverageRates']
        ]);
        $this->set('leverageRate', $leverageRate);
        $this->set('_serialize', ['leverageRate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leverageRate = $this->LeverageRates->newEntity();
        if ($this->request->is('post')) {
            $leverageRate = $this->LeverageRates->patchEntity($leverageRate, $this->request->data);
            if ($this->LeverageRates->save($leverageRate)) {
                $this->Flash->success('The leverage rate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The leverage rate could not be saved. Please, try again.');
            }
        }
        $leverageRates = $this->LeverageRates->LeverageRates->find('list', ['limit' => 200]);
        $this->set(compact('leverageRate', 'leverageRates'));
        $this->set('_serialize', ['leverageRate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Leverage Rate id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leverageRate = $this->LeverageRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leverageRate = $this->LeverageRates->patchEntity($leverageRate, $this->request->data);
            if ($this->LeverageRates->save($leverageRate)) {
                $this->Flash->success('The leverage rate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The leverage rate could not be saved. Please, try again.');
            }
        }
        $leverageRates = $this->LeverageRates->LeverageRates->find('list', ['limit' => 200]);
        $this->set(compact('leverageRate', 'leverageRates'));
        $this->set('_serialize', ['leverageRate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Leverage Rate id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leverageRate = $this->LeverageRates->get($id);
        if ($this->LeverageRates->delete($leverageRate)) {
            $this->Flash->success('The leverage rate has been deleted.');
        } else {
            $this->Flash->error('The leverage rate could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
