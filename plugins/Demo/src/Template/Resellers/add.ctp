<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reseller $reseller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resellers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="resellers form large-9 medium-8 columns content">
    <?= $this->Form->create($reseller) ?>
    <fieldset>
        <legend><?= __('Add Reseller') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender');
            echo $this->Form->control('mobile');
            echo $this->Form->control('nimbuzzid');
            echo $this->Form->control('email');
            echo $this->Form->control('country');
            echo $this->Form->control('city');
            echo $this->Form->control('plan');
            echo $this->Form->control('distribution_network');
            echo $this->Form->control('voip_service_providers');
            echo $this->Form->control('nimbuzzout_vouchers');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
