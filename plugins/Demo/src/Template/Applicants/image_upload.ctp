<!--<div class="col-md-8">
       <?= $this->Form->create(NULL, ['url' => ['controller' => 'Applicants', 'action' => 'import', 'method' => 'post'],'id' => 'imageForm', 'novalidate' => 'novalidate','enctype'=>'multipart/form-data']) ?> 
    <div class="form-group">
        
            <label class="sr-only" for="image_file"> Image </label>
            <?php echo $this->Form->hidden('', ['type' => 'text','name'=>'userId','value'=>'1',]); ?>
            <?php echo $this->Form->input('', ['type'=>'file','class' => 'form-control','name'=>'image_file','id'=>'image_file','placeholder' => 'Image upload',]); ?>
        </div>
        <button type="submit" class="btn btn-default " id="imageBtn"> Upload </button>
    <?= $this->Form->end() ?>
</div>-->
<h1>Upload Image</h1>
<div class="content">
    <?= $this->Flash->render() ?>
    <div class="upload-frm">
         <?= $this->Form->create(NULL, ['url' => ['controller' => 'Applicants', 'action' => 'import', 'method' => 'post'],'id' => 'imageForm', 'novalidate' => 'novalidate','enctype'=>'multipart/form-data']) ?> 
            <?php echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control','name'=>'image_file']); ?>
            <?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'form-controlbtn btn-default']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>