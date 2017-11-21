<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CcCard $ccCard
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cc Card'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ccCard form large-9 medium-8 columns content">
    <?= $this->Form->create($ccCard) ?>
    <fieldset>
        <legend><?= __('Add Cc Card') ?></legend>
        <?php
            echo $this->Form->control('creationdate');
            echo $this->Form->control('firstusedate');
            echo $this->Form->control('expirationdate');
            echo $this->Form->control('enableexpire');
            echo $this->Form->control('expiredays');
            echo $this->Form->control('username');
            echo $this->Form->control('useralias');
            echo $this->Form->control('uipass');
            echo $this->Form->control('credit');
            echo $this->Form->control('tariff');
            echo $this->Form->control('id_didgroup');
            echo $this->Form->control('activated');
            echo $this->Form->control('status');
            echo $this->Form->control('lastname');
            echo $this->Form->control('firstname');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('country');
            echo $this->Form->control('zipcode');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('fax');
            echo $this->Form->control('inuse');
            echo $this->Form->control('simultaccess');
            echo $this->Form->control('currency');
            echo $this->Form->control('lastuse');
            echo $this->Form->control('nbused');
            echo $this->Form->control('typepaid');
            echo $this->Form->control('creditlimit');
            echo $this->Form->control('voipcall');
            echo $this->Form->control('sip_buddy');
            echo $this->Form->control('iax_buddy');
            echo $this->Form->control('language');
            echo $this->Form->control('redial');
            echo $this->Form->control('runservice');
            echo $this->Form->control('nbservice');
            echo $this->Form->control('id_campaign');
            echo $this->Form->control('num_trials_done');
            echo $this->Form->control('vat');
            echo $this->Form->control('servicelastrun');
            echo $this->Form->control('initialbalance');
            echo $this->Form->control('invoiceday');
            echo $this->Form->control('autorefill');
            echo $this->Form->control('loginkey');
            echo $this->Form->control('mac_addr');
            echo $this->Form->control('id_timezone');
            echo $this->Form->control('tag');
            echo $this->Form->control('voicemail_permitted');
            echo $this->Form->control('voicemail_activated');
            echo $this->Form->control('last_notification');
            echo $this->Form->control('email_notification');
            echo $this->Form->control('notify_email');
            echo $this->Form->control('credit_notification');
            echo $this->Form->control('id_group');
            echo $this->Form->control('company_name');
            echo $this->Form->control('company_website');
            echo $this->Form->control('vat_rn');
            echo $this->Form->control('traffic');
            echo $this->Form->control('traffic_target');
            echo $this->Form->control('discount');
            echo $this->Form->control('restriction');
            echo $this->Form->control('id_seria');
            echo $this->Form->control('serial');
            echo $this->Form->control('status_msg');
            echo $this->Form->control('current_status');
            echo $this->Form->control('photo');
            echo $this->Form->control('gender');
            echo $this->Form->control('birthday', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
