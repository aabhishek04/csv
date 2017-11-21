<!DOCTYPE html>
<html>
<head>
    
 <?php // echo $this->AssetCompress->css('jquery-combined'); ?>

</head>
<body>
      <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    <?= $this->AssetCompress->script('jquery-combined'); ?>
    </footer>
</body>
</html>
