<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Registro Controller
 *
 * @property \App\Model\Table\RegistroTable $Registro
 */
class RegistroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Registro->find();
        $registro = $this->paginate($query);

        $this->set(compact('registro'));
    }

    /**
     * View method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registro = $this->Registro->get($id, contain: []);
        $this->set(compact('registro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registro = $this->Registro->newEmptyEntity();
        if ($this->request->is('post')) {
            $registro = $this->Registro->patchEntity($registro, $this->request->getData());
            if ($this->Registro->save($registro)) {
                $this->Flash->success(__('The registro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro could not be saved. Please, try again.'));
        }
        $this->set(compact('registro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registro = $this->Registro->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registro = $this->Registro->patchEntity($registro, $this->request->getData());
            if ($this->Registro->save($registro)) {
                $this->Flash->success(__('The registro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro could not be saved. Please, try again.'));
        }
        $this->set(compact('registro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registro = $this->Registro->get($id);
        if ($this->Registro->delete($registro)) {
            $this->Flash->success(__('The registro has been deleted.'));
        } else {
            $this->Flash->error(__('The registro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
