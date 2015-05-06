<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderTypes Controller
 *
 * @property \App\Model\Table\OrderTypesTable $OrderTypes
 */
class OrderTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('orderTypes', $this->paginate($this->OrderTypes));
        $this->set('_serialize', ['orderTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderType = $this->OrderTypes->get($id, [
            'contain' => ['Orders']
        ]);
        $this->set('orderType', $orderType);
        $this->set('_serialize', ['orderType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderType = $this->OrderTypes->newEntity();
        if ($this->request->is('post')) {
            $orderType = $this->OrderTypes->patchEntity($orderType, $this->request->data);
            if ($this->OrderTypes->save($orderType)) {
                $this->Flash->success('The order type has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order type could not be saved. Please, try again.');
            }
        }
        $this->set(compact('orderType'));
        $this->set('_serialize', ['orderType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderType = $this->OrderTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderType = $this->OrderTypes->patchEntity($orderType, $this->request->data);
            if ($this->OrderTypes->save($orderType)) {
                $this->Flash->success('The order type has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order type could not be saved. Please, try again.');
            }
        }
        $this->set(compact('orderType'));
        $this->set('_serialize', ['orderType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderType = $this->OrderTypes->get($id);
        if ($this->OrderTypes->delete($orderType)) {
            $this->Flash->success('The order type has been deleted.');
        } else {
            $this->Flash->error('The order type could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
