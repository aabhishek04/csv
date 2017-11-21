<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Controller\Component\CookieComponent;

use Cake\ORM\TableRegistry;
use App\Utility;
use Cake\View\ViewBuilder;
use Knp\Snappy\Pdf;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
//   public $helpers = ['AssetCompress.AssetCompress'];

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
        $this->Cookie= $this->loadComponent('Cookie');
        $this->loadComponent('Auth', ['loginAction' =>
            ['controller' => 'Applicants',
                'action' => 'import']
        ]);
       
        
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeFilter(Event $event)
    {
       
         $this->Auth->allow(['import','logout','login']);
         $this->Cookie->config([
                'expires' => '1 days',
                'httpOnly' => true
            ]);
         $uname='';
         if(isset($this->request->query['u'])){
         $this->username     = $this->request->query['u'];
         $uname     = $this->request->query['u'];}
//         $this->User = TableRegistry::get('User');
//         $cookies = $this->Cookie->read('remember_me_cookie');
//                if ($cookies!=null && $cookies['name']== $uname ) {
//                    $user = $this->getUser($cookies['password']);
//                    $paswd = $cookies['password'];
//                    $uname= $cookies['name'];
//                    if (!empty($user)) {
//                     if ($user['response'] == 1) { 
//                        $this->request->session()->write(
//                                [
//                                    'Auth.User.username' => $cookies['name'],
//                                    'Auth.User.password' => $cookies['password']
//                                ]
//                        );
//                    }
//                    } 
//                    
//            }
//            $this->set(compact('uname'));
                
         }

    public function getUser($password) {
        $response = 0;
        $resData = [];
        
        $user = $this->User->find()->select(['name','password'])->where([['password' => $password]])->first();
//        $user =$this->User->find()->select(['name','c'=>'name','password'])
//                        ->where([['password' => $password]])
//                        ->first();
//        $user['name']=$user['name'].' '.$user['c'];
//        
//        pr($user);exit;
        if (!empty($user)) {
            $response = 1;
        } else {
            $response = 0;
        }
        $resData['response'] = $response;
        $resData['userinfo'] = $user;
        return $resData;
    }
    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
            
            $this->viewBuilder()->theme('Demo');

            $this->set('theme', Configure::read('Theme'));
            
        }
    }
    
//    
}
