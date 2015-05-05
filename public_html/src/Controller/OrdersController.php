<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [
                'Orders', 
                'Contracts', 
                'LeverageRates', 
                'SourceOrders', 
                'OrderTypes'
            ]
        ];
        $this->set('orders', $this->paginate($this->Orders));
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Orders', 'Contracts', 'LeverageRates', 'SourceOrders', 'OrderTypes']
        ]);
        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success('The order has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order could not be saved. Please, try again.');
            }
        }
        $orders = $this->Orders->Orders->find('list', ['limit' => 200]);
        $contracts = $this->Orders->Contracts->find('list', ['limit' => 200]);
        $leverageRates = $this->Orders->LeverageRates->find('list', ['limit' => 200]);
        $sourceOrders = $this->Orders->SourceOrders->find('list', ['limit' => 200]);
        $orderTypes = $this->Orders->OrderTypes->find('list', ['limit' => 200]);
        $this->set(compact('order', 'orders', 'contracts', 'leverageRates', 'sourceOrders', 'orderTypes'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success('The order has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order could not be saved. Please, try again.');
            }
        }
        $orders = $this->Orders->Orders->find('list', ['limit' => 200]);
        $contracts = $this->Orders->Contracts->find('list', ['limit' => 200]);
        $leverageRates = $this->Orders->LeverageRates->find('list', ['limit' => 200]);
        $sourceOrders = $this->Orders->SourceOrders->find('list', ['limit' => 200]);
        $orderTypes = $this->Orders->OrderTypes->find('list', ['limit' => 200]);
        $this->set(compact('order', 'orders', 'contracts', 'leverageRates', 'sourceOrders', 'orderTypes'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success('The order has been deleted.');
        } else {
            $this->Flash->error('The order could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
