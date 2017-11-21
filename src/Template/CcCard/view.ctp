<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CcCard $ccCard
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cc Card'), ['action' => 'edit', $ccCard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cc Card'), ['action' => 'delete', $ccCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ccCard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cc Card'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cc Card'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ccCard view large-9 medium-8 columns content">
    <h3><?= h($ccCard->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($ccCard->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Useralias') ?></th>
            <td><?= h($ccCard->useralias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uipass') ?></th>
            <td><?= h($ccCard->uipass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activated') ?></th>
            <td><?= h($ccCard->activated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($ccCard->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($ccCard->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($ccCard->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($ccCard->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($ccCard->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($ccCard->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= h($ccCard->zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($ccCard->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($ccCard->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($ccCard->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= h($ccCard->currency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($ccCard->language) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Redial') ?></th>
            <td><?= h($ccCard->redial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Loginkey') ?></th>
            <td><?= h($ccCard->loginkey) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mac Addr') ?></th>
            <td><?= h($ccCard->mac_addr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= h($ccCard->tag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Notification') ?></th>
            <td><?= h($ccCard->email_notification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($ccCard->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Website') ?></th>
            <td><?= h($ccCard->company_website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vat Rn') ?></th>
            <td><?= h($ccCard->vat_rn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Traffic Target') ?></th>
            <td><?= h($ccCard->traffic_target) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Msg') ?></th>
            <td><?= h($ccCard->status_msg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Status') ?></th>
            <td><?= h($ccCard->current_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($ccCard->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($ccCard->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ccCard->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enableexpire') ?></th>
            <td><?= $this->Number->format($ccCard->enableexpire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiredays') ?></th>
            <td><?= $this->Number->format($ccCard->expiredays) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit') ?></th>
            <td><?= $this->Number->format($ccCard->credit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tariff') ?></th>
            <td><?= $this->Number->format($ccCard->tariff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Didgroup') ?></th>
            <td><?= $this->Number->format($ccCard->id_didgroup) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($ccCard->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inuse') ?></th>
            <td><?= $this->Number->format($ccCard->inuse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Simultaccess') ?></th>
            <td><?= $this->Number->format($ccCard->simultaccess) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbused') ?></th>
            <td><?= $this->Number->format($ccCard->nbused) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typepaid') ?></th>
            <td><?= $this->Number->format($ccCard->typepaid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creditlimit') ?></th>
            <td><?= $this->Number->format($ccCard->creditlimit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voipcall') ?></th>
            <td><?= $this->Number->format($ccCard->voipcall) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sip Buddy') ?></th>
            <td><?= $this->Number->format($ccCard->sip_buddy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iax Buddy') ?></th>
            <td><?= $this->Number->format($ccCard->iax_buddy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Runservice') ?></th>
            <td><?= $this->Number->format($ccCard->runservice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbservice') ?></th>
            <td><?= $this->Number->format($ccCard->nbservice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Campaign') ?></th>
            <td><?= $this->Number->format($ccCard->id_campaign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Trials Done') ?></th>
            <td><?= $this->Number->format($ccCard->num_trials_done) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vat') ?></th>
            <td><?= $this->Number->format($ccCard->vat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Initialbalance') ?></th>
            <td><?= $this->Number->format($ccCard->initialbalance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoiceday') ?></th>
            <td><?= $this->Number->format($ccCard->invoiceday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autorefill') ?></th>
            <td><?= $this->Number->format($ccCard->autorefill) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Timezone') ?></th>
            <td><?= $this->Number->format($ccCard->id_timezone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voicemail Permitted') ?></th>
            <td><?= $this->Number->format($ccCard->voicemail_permitted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voicemail Activated') ?></th>
            <td><?= $this->Number->format($ccCard->voicemail_activated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notify Email') ?></th>
            <td><?= $this->Number->format($ccCard->notify_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit Notification') ?></th>
            <td><?= $this->Number->format($ccCard->credit_notification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Group') ?></th>
            <td><?= $this->Number->format($ccCard->id_group) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Traffic') ?></th>
            <td><?= $this->Number->format($ccCard->traffic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($ccCard->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restriction') ?></th>
            <td><?= $this->Number->format($ccCard->restriction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Seria') ?></th>
            <td><?= $this->Number->format($ccCard->id_seria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serial') ?></th>
            <td><?= $this->Number->format($ccCard->serial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creationdate') ?></th>
            <td><?= h($ccCard->creationdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstusedate') ?></th>
            <td><?= h($ccCard->firstusedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expirationdate') ?></th>
            <td><?= h($ccCard->expirationdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastuse') ?></th>
            <td><?= h($ccCard->lastuse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Servicelastrun') ?></th>
            <td><?= h($ccCard->servicelastrun) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Notification') ?></th>
            <td><?= h($ccCard->last_notification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($ccCard->birthday) ?></td>
        </tr>
    </table>
</div>
