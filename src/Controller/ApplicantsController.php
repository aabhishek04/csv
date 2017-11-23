<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Controller\Component\CookieComponent;
use Cake\View\Helper;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\View\View;
use Setasign\Fpdf;
class ApplicantsController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->User = TableRegistry::get('User');
//        $this->loadComponent('Auth');
        $this->Cookie= $this->loadComponent('Cookie');
        $this->loadComponent('Auth', ['loginAction' =>
            ['controller' => 'Applicants',
                'action' => 'import']
        ]);
    }

//     public function import(){
//         $this->Applicants= TableRegistry::get('Post');
//        if ($this->request->is('post')) {
////            if (!empty($this->request->data['csv_file']['tmp_name']) && is_uploaded_file($this->request->data['csv_file']['tmp_name'])) {
////                $path_info = pathinfo($this->request->data['csv_file']['name']);
////                if (strtolower($path_info['extension']) == 'csv') {
////                    chmod($this->request->data['csv_file']['tmp_name'], 0644);
////                    $filename = time() . "." . $path_info['extension'];
////                    $fullpath = WWW_ROOT . "files" . DS . "csv_user";
////                    if (!is_dir($fullpath)) {
////                        mkdir($fullpath, 0777, true);
////                    }
////                    move_uploaded_file($this->request->data['csv_file']['tmp_name'], $fullpath . DS . $filename);
//////                    $this->redirect(['action' => 'addMultipleData', $filename]);
////                } else {
////                    $this->Flash->warning(__('Please upload CSV file only'));
////                }
////            } else {
////                $this->Flash->error(__('Please upload CSV file'));
////            }
////        }
//                             $i=0;
//                             $j=0;
//                                  $data = $this->request->data['csv_file'];
//                                  $userId= $this->request->data['userId'];
//                                   $file = $data['tmp_name'];
//                                   $handle = fopen($file, "r");
//                                   while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
//                                    $fileRow = count(file($file, FILE_SKIP_EMPTY_LINES))-1;
//                                       if($row[0] == 'userid') {
//                                           continue;
//                                       }
//                                       $j=$row[0];
//                                       $rowUserCount=$this->Applicants->find()->select('userid')->count();
//                                       $Applicants=  $this->Applicants->newEntity();
//                                       if($rowUserCount!=$fileRow){
//                                       if($rowUserCount==$i){
//                                          $columns = [
//                                            'userid' => $row[0],
//                                            'email' => $row[1],
//                                              'injoin'=>''
//                                       ];
//                                       $Applicant = $this->Applicants->patchEntity($Applicants, $columns);
//                                       $this->Applicants->save($Applicant);
//                                       }
//                                       }
//                                       else{
//                                        $Applicants=[];
//                                        $Applicants = $this->Applicants->find()
//                                                ->select('email')
//                                                ->where(['userid'=>$j])
//                                                ->toArray();
//                                       $columns = [
//                                            'userid' => $row[0],
//                                            'email' => $row[1],
//                                       ];
//                                       foreach ($Applicants as $Applicants){
////                                        pr($j);
////                                        pr('database=='.$Applicants['email']);
////                                        pr('file=='.$columns['email']);
//                                       if($Applicants['email'] ==''){
//                                       $Applicant = $this->Applicants->patchEntity($Applicants, $columns);
//                                       $this->Applicants->save($Applicant);
//                                       }
//                                       else if($Applicants['email']!= $row[1]){
//                                         $query= $this->Applicants->query();
//                                            $result=$query->update()
//                                                    ->set(['email' => $row[1]])
//                                                    ->where(['userid'=>$userId])
//                                                    ->execute();
//                                            
//                                       }
//                                      }
//                                    }
//                                    $j++;
//                                    $i++;
//                                   
//                                   }
//                                   fclose($handle);
////                                   exit;
//                                   return $this->redirect($this->referer(false));
//     
//         }
//     }
//    
    public function login() {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $username = $data['username'];
            $password = $data['password'];
            $rememberMe = $data['remember_me'];
            if (!empty($data['g-recaptcha-response']||true)) {
                $userData = $this->getUser($password);
//                pr($userData);exit;
                if (!empty($userData)) {
                    if ($userData['response'] == 1) {
                        $this->request->session()->write(
                                [
                                    'Auth.User.username' => $username,
                                    'Auth.User.password' => $password
                                ]
                        );
                        if ($this->Auth->user()) {
                            if ($rememberMe == 1) {
                                $cookie = [];
                                $cookie['name'] = $username;
                                $cookie['password'] = $password;
                                $this->Cookie->write('remember_me_cookie', $cookie);
//                                debug($flag);die;
                                unset($rememberMe);
                                return $this->redirect(['controller' => 'Applicants', 'action' => 'autoSuggest','?'=>['u'=>$username]]);

                            }
                        }
                      return $this->redirect(['controller' => 'Applicants', 'action' => 'autoSuggest','?'=>['u'=>$username]]);
                    } else {
                        $this->Flash->error(__('Enter valid username and password'));
                        return $this->redirect(['controller' => 'Applicants', 'action' => 'import']);
                    }
                } else {
                    $this->Flash->error(__('Enter valid username and password'));
                    return $this->redirect(['controller' => 'Applicants', 'action' => 'import']);
                }
            } 
//            else {
//                $this->Flash->error(__('Select Capcha'));
//                return $this->redirect(['controller' => 'Applicants', 'action' => 'import']);
//            }

        }
        
   }

    public function autoSuggest() {
    }
     public function logout() {
//                $this->Cookie->delete('remember_me_cookie');
                $this->Auth->logout();
                $this->request->session()->destroy();
                
               return $this->redirect(['controller' => 'Applicants', 'action' => 'import']);
    }

    public function autoSuggestResult() {

        $this->Applicants = TableRegistry::get('Post');

        $result = [];
        if ($this->request->is('post')) {
            $searchInput = $this->request->data['search'];
//           pr($searchInput);exit;
            $searchResult = $this->Applicants->find()
                    ->select(['id', 'name'])
                    ->where(['name LIKE' => $searchInput . '%'])
                    ->toArray();
            pr($searchResult);
            exit;
            if ($searchResult != Null) {
                $response = 'fail';
            } else {
                foreach ($searchResult as $suggestresult) {
                    $result = $suggestresult;
                }
                $response = 'success';
            }

            echo $response;
            pr($searchResult);
            exit;
        }
        $this->set(compact(['result']));
    }
    
    public function beforeRender(Event $event) {

        parent::beforeFilter($event);

        $this->viewBuilder()->theme('Demo');
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['import','logout','login']);
        $this->Cookie->config([
                'expires' => '1 days',
                'httpOnly' => true,
                'key'=>'9d4baf51b7c917e5f530b54fdda9c3faddb63fb97232d3c291cd4b0b4ff9ebdc9d4baf51b7c917e5f530b54fdda9c3faddb63fb97232d3c291cd4b0b4ff9ebdc'
            ]);
    }
    public function import(){
        
        $this->User = TableRegistry::get('User');
        $uname ='';
        if(isset($this->request->query['u'])){
            $this->username     = $this->request->query['u'];
        $uname     = $this->request->query['u'];}
        $cookies = $this->Cookie->read('remember_me_cookie');
//        debug($cookies);die;
                if ($cookies!=null && $cookies['name']== $uname ) {
                    $user = $this->getUser($cookies['password']);
                    $paswd = $cookies['password'];
                    $uname= $cookies['name'];
//                    if (!empty($user)) {
                     if ($user['response'] == 1) { 
                        $this->request->session()->write(
                                [
                                    'Auth.User.username1' => $cookies['name'],
                                    'Auth.User.password1' => $cookies['password']
                                ]
                        );
                    }
//                    }  
                }
                
                
    if( $this->request->session()->check('Auth.User.username1') &&  $this->request->session()->check('Auth.User.password1') ){
                     $userName = $this->request->session()->read('Auth.User.username');
                     $userPass = $this->request->session()->read('Auth.User.password');
                            return $this->redirect(['controller' => 'Applicants', 'action' => 'autoSuggest','?'=>['u'=>$uname]]);

                    } 
        }
        
        public function imageUpload(){
            
            $this->image= TableRegistry::get('Users');
            if ($this->request->is('post')) {
                pr($this->request->data);
            }
        }
}


