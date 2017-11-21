<div class="col-md-8">
        <?php // echo $this->Form->create('null',['url' => ['controller'=>'Applicants','action' => 'import'],'class'=>'form-inline','role'=>'form','method'=>'post','id'=>'csvForm', 'enctype'=>'multipart/form-data']) ?>
       <?= $this->Form->create(NULL,['url' => ['controller' => 'Applicants', 'action' => 'logout'],'id' => 'logout', 'novalidate' => 'novalidate']) ?> 
    <div class="form-group">
        
            <?php // echo $this->Form->input('', ['type' => 'search','name'=>'search','id'=>'search']); ?>
        </div>
        <button type="submit" class="btn btn-default " id="searchBtn"> back to login page </button>
    <?= $this->Form->end() ?>
</div>

