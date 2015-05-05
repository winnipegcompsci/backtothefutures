<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Depths Controller
 *
 * @property \App\Model\Table\DepthsTable $Depths
 */
class DepthsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rates']
        ];
        $this->set('depths', $this->paginate($this->Depths));
        $this->set('_serialize', ['depths']);
    }

    /**
     * View method
     *
     * @param string|null $id Depth id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $depth = $this->Depths->get($id, [
            'contain' => ['Rates']
        ]);
        $this->set('depth', $depth);
        $this->set('_serialize', ['depth']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $depth = $this->Depths->newEntity();
        if ($this->request->is('post')) {
            $depth = $this->Depths->patchEntity($depth, $this->request->data);
            if ($this->Depths->save($depth)) {
                $this->Flash->success('The depth has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The depth could not be saved. Please, try again.');
            }
        }
        $depths = $this->Depths->Depths->find('list', ['limit' => 200]);
        $rates = $this->Depths->Rates->find('list', ['limit' => 200]);
        $this->set(compact('depth', 'depths', 'rates'));
        $this->set('_serialize', ['depth']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Depth id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $depth = $this->Depths->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $depth = $this->Depths->patchEntity($depth, $this->request->data);
            if ($this->Depths->save($depth)) {
                $this->Flash->success('The depth has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The depth could not be saved. Please, try again.');
            }
        }
        $depths = $this->Depths->Depths->find('list', ['limit' => 200]);
        $rates = $this->Depths->Rates->find('list', ['limit' => 200]);
        $this->set(compact('depth', 'depths', 'rates'));
        $this->set('_serialize', ['depth']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Depth id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $depth = $this->Depths->get($id);
        if ($this->Depths->delete($depth)) {
            $this->Flash->success('The depth has been deleted.');
        } else {
            $this->Flash->error('The depth could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
