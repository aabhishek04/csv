<?php
namespace App\Controller;

use App\Controller\AppController;
use Mpdf;
use BrowscapPHP\Browscap;
;
use Cake\Mailer\Email;
/**
 * Resellers Controller
 *
 * @property \App\Model\Table\ResellersTable $Resellers
 *
 * @method \App\Model\Entity\Reseller[] paginate($object = null, array $settings = [])
 */
class ResellersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
//       
        
        $resellers = $this->paginate($this->Resellers);

        $this->set(compact('resellers'));
        $this->set('_serialize', ['resellers']);
    }

    /**
     * View method
     *
     * @param string|null $id Reseller id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reseller = $this->Resellers->get($id, [
            'contain' => []
        ]);

        $this->set('reseller', $reseller);
        $this->set('_serialize', ['reseller']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reseller = $this->Resellers->newEntity();
        if ($this->request->is('post')) {
            $reseller = $this->Resellers->patchEntity($reseller, $this->request->getData());
            if ($this->Resellers->save($reseller)) {
                $this->Flash->success(__('The reseller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reseller could not be saved. Please, try again.'));
        }
        $this->set(compact('reseller'));
        $this->set('_serialize', ['reseller']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reseller id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reseller = $this->Resellers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reseller = $this->Resellers->patchEntity($reseller, $this->request->getData());
            if ($this->Resellers->save($reseller)) {
                $this->Flash->success(__('The reseller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reseller could not be saved. Please, try again.'));
        }
        $this->set(compact('reseller'));
        $this->set('_serialize', ['reseller']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reseller id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reseller = $this->Resellers->get($id);
        if ($this->Resellers->delete($reseller)) {
            $this->Flash->success(__('The reseller has been deleted.'));
        } else {
            $this->Flash->error(__('The reseller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function pdf(){
        
           $pdfName = 'Sample.pdf';
           ob_start();
           $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
           $mpdf->SetDisplayMode('fullpage');
           $mpdf->WriteHTML('Hello Word!');  
           ob_get_clean();
           $mpdf->Output($pdfName,'D');
           ob_end_flush();
           
           $email = new Email();  
           $email->from('aabhishek04@gmail.com')
              ->to('abhisheks@maitkon.com')
              ->subject('About')
//              ->attachments($pdf)
//              ->attachments('/var/www/html/sampleCSV/src/Template/Resellers/index.ctp') 
              ->send();
           exit;
        
    }
    public function mail(){
        
        
        $email = new Email();  
        $email->from('aabhishek04@gmail.com')
              ->to('abhisheks@maitkon.com')
              ->subject('About')
              ->send();
        exit;

        
    }
    public function browsCap(){
        
        $browscap = new \BrowscapPHP\Browscap();
        $tt = $browscap->getBrowser();
//        $tt=$this->request->env('HTTP_USER_AGENT');
         $this->set(compact('tt'));
        
    }
    
}
