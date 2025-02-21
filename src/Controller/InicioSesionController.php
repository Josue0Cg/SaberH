<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * InicioSesion Controller
 *
 * @property \App\Model\Table\InicioSesionTable $InicioSesion
 */
class InicioSesionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->InicioSesion->find();
        $inicioSesion = $this->paginate($query);

        $this->set(compact('inicioSesion'));
    }

    /**
     * View method
     *
     * @param string|null $id Inicio Sesion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inicioSesion = $this->InicioSesion->get($id, contain: []);
        $this->set(compact('inicioSesion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inicioSesion = $this->InicioSesion->newEmptyEntity();
        if ($this->request->is('post')) {
            $inicioSesion = $this->InicioSesion->patchEntity($inicioSesion, $this->request->getData());
            if ($this->InicioSesion->save($inicioSesion)) {
                $this->Flash->success(__('The inicio sesion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inicio sesion could not be saved. Please, try again.'));
        }
        $this->set(compact('inicioSesion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inicio Sesion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inicioSesion = $this->InicioSesion->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inicioSesion = $this->InicioSesion->patchEntity($inicioSesion, $this->request->getData());
            if ($this->InicioSesion->save($inicioSesion)) {
                $this->Flash->success(__('The inicio sesion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inicio sesion could not be saved. Please, try again.'));
        }
        $this->set(compact('inicioSesion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inicio Sesion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inicioSesion = $this->InicioSesion->get($id);
        if ($this->InicioSesion->delete($inicioSesion)) {
            $this->Flash->success(__('The inicio sesion has been deleted.'));
        } else {
            $this->Flash->error(__('The inicio sesion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
