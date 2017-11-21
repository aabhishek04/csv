<h1>Add Report</h1>
<?php
echo $this->Form->create('Report',['method'=>'post','enctype'=>'multipart/form-data']);
echo $this->Form->input('title');
echo $this->Form->input('description');
echo $this->Form->input('report', ['type' => 'file']);
echo $this->Form->button('Save Report',['type'=>'submit']);
echo $this->Form->end();
?>