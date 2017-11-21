<!--<div class="col-md-8">
        <?php // echo $this->Form->create('null',['url' => ['controller'=>'Applicants','action' => 'import'],'class'=>'form-inline','role'=>'form','method'=>'post','id'=>'csvForm', 'enctype'=>'multipart/form-data']) ?>
       <?= $this->Form->create(NULL, ['url' => ['controller' => 'Applicants', 'action' => 'import', 'method' => 'post'],'id' => 'csvForm', 'novalidate' => 'novalidate','enctype'=>'multipart/form-data']) ?> 
    <div class="form-group">
        
            <label class="sr-only" for="csv"> CSV </label>
            <?php echo $this->Form->hidden('', ['type' => 'text','name'=>'userId','value'=>'1',]); ?>
            <?php echo $this->Form->input('', ['type'=>'file','class' => 'form-control','name'=>'csv_file','id'=>'csv_file',  'label' => false,'placeholder' => 'csv upload',]); ?>
        </div>
        <button type="submit" class="btn btn-default " id="csvBtn"> Upload </button>
    <?= $this->Form->end() ?>
</div>-->
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