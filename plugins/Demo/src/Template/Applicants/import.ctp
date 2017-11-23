<?php if(isset($paswd)&& $paswd!=''){
     $paswd=$paswd;
     }else
         $paswd='';
     if(isset($uname)&& $uname!=''){
     $uname=$uname;
     }else
         $uname='';
     ?> 
<div class="col-md-8">
     <?=$this->Flash->render()?>
      <?= $this->Form->create(NULL, ['url' => ['controller' => 'Applicants', 'action' => 'login'],'id' => 'csvForm', 'novalidate' => 'novalidate','enctype'=>'multipart/form-data']) ?> 
    <?php echo $this->Form->input('Username',['name'=>'username','value'=>$uname]); ?>
    <?php echo $this->Form->input('Password',['name'=>'password','value'=>$paswd]); ?>
    <div class="form-group">
        <div class="g-recaptcha" name="captcha" data-sitekey="6LenpDUUAAAAAFzctySG_syYFPHiSAlEijg0y8SZ"></div>
                        
     </div>
    <?php echo $this->Form->checkbox('remember_me'); ?> Remember Me
        <button type="submit" class="btn btn-default " id="csvBtn"> login </button>
    <?= $this->Form->end() ?>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>