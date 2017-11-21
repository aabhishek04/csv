
<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Controller\Component\CookieComponent;

use Cake\ORM\TableRegistry;


class InvoicesController extends AppController
    {
        // In your Invoices controller you could set additional configs,
        // or override the global ones:
    
        public function view($id = null)
        {
            
                Configure::write('CakePdf.download', true);
                Configure::write('CakePdf.filename', "invoice.pdf");
                
            $invoice = $this->Invoice->get($id);
            $this->viewBuilder()->options([
                'pdfConfig' => [
                    'orientation' => 'portrait',
                    'filename' => 'Invoice_' . $id
                ]
            ]);
            $this->set('invoice', $invoice);
        }
    }