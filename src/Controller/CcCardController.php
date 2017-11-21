<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CcCard Controller
 *
 * @property \App\Model\Table\CcCardTable $CcCard
 *
 * @method \App\Model\Entity\CcCard[] paginate($object = null, array $settings = [])
 */
class CcCardController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ccCard = $this->paginate($this->CcCard);

        $this->set(compact('ccCard'));
        $this->set('_serialize', ['ccCard']);
    }

    /**
     * View method
     *
     * @param string|null $id Cc Card id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ccCard = $this->CcCard->get($id, [
            'contain' => []
        ]);

        $this->set('ccCard', $ccCard);
        $this->set('_serialize', ['ccCard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ccCard = $this->CcCard->newEntity();
        if ($this->request->is('post')) {
            $ccCard = $this->CcCard->patchEntity($ccCard, $this->request->getData());
            if ($this->CcCard->save($ccCard)) {
                $this->Flash->success(__('The cc card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cc card could not be saved. Please, try again.'));
        }
        $this->set(compact('ccCard'));
        $this->set('_serialize', ['ccCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cc Card id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ccCard = $this->CcCard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ccCard = $this->CcCard->patchEntity($ccCard, $this->request->getData());
            if ($this->CcCard->save($ccCard)) {
                $this->Flash->success(__('The cc card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cc card could not be saved. Please, try again.'));
        }
        $this->set(compact('ccCard'));
        $this->set('_serialize', ['ccCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cc Card id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ccCard = $this->CcCard->get($id);
        if ($this->CcCard->delete($ccCard)) {
            $this->Flash->success(__('The cc card has been deleted.'));
        } else {
            $this->Flash->error(__('The cc card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
