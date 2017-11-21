<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CcCard[]|\Cake\Collection\CollectionInterface $ccCard
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cc Card'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ccCard index large-9 medium-8 columns content">
    <h3><?= __('Cc Card') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creationdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstusedate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expirationdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enableexpire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expiredays') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('useralias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uipass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tariff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_didgroup') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zipcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inuse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('simultaccess') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastuse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbused') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typepaid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creditlimit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voipcall') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sip_buddy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iax_buddy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language') ?></th>
                <th scope="col"><?= $this->Paginator->sort('redial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('runservice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbservice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_campaign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_trials_done') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servicelastrun') ?></th>
                <th scope="col"><?= $this->Paginator->sort('initialbalance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoiceday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autorefill') ?></th>
                <th scope="col"><?= $this->Paginator->sort('loginkey') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mac_addr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_timezone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voicemail_permitted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voicemail_activated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_notification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_notification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notify_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit_notification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_group') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vat_rn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('traffic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('traffic_target') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('restriction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_seria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_msg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ccCard as $ccCard): ?>
            <tr>
                <td><?= $this->Number->format($ccCard->id) ?></td>
                <td><?= h($ccCard->creationdate) ?></td>
                <td><?= h($ccCard->firstusedate) ?></td>
                <td><?= h($ccCard->expirationdate) ?></td>
                <td><?= $this->Number->format($ccCard->enableexpire) ?></td>
                <td><?= $this->Number->format($ccCard->expiredays) ?></td>
                <td><?= h($ccCard->username) ?></td>
                <td><?= h($ccCard->useralias) ?></td>
                <td><?= h($ccCard->uipass) ?></td>
                <td><?= $this->Number->format($ccCard->credit) ?></td>
                <td><?= $this->Number->format($ccCard->tariff) ?></td>
                <td><?= $this->Number->format($ccCard->id_didgroup) ?></td>
                <td><?= h($ccCard->activated) ?></td>
                <td><?= $this->Number->format($ccCard->status) ?></td>
                <td><?= h($ccCard->lastname) ?></td>
                <td><?= h($ccCard->firstname) ?></td>
                <td><?= h($ccCard->address) ?></td>
                <td><?= h($ccCard->city) ?></td>
                <td><?= h($ccCard->state) ?></td>
                <td><?= h($ccCard->country) ?></td>
                <td><?= h($ccCard->zipcode) ?></td>
                <td><?= h($ccCard->phone) ?></td>
                <td><?= h($ccCard->email) ?></td>
                <td><?= h($ccCard->fax) ?></td>
                <td><?= $this->Number->format($ccCard->inuse) ?></td>
                <td><?= $this->Number->format($ccCard->simultaccess) ?></td>
                <td><?= h($ccCard->currency) ?></td>
                <td><?= h($ccCard->lastuse) ?></td>
                <td><?= $this->Number->format($ccCard->nbused) ?></td>
                <td><?= $this->Number->format($ccCard->typepaid) ?></td>
                <td><?= $this->Number->format($ccCard->creditlimit) ?></td>
                <td><?= $this->Number->format($ccCard->voipcall) ?></td>
                <td><?= $this->Number->format($ccCard->sip_buddy) ?></td>
                <td><?= $this->Number->format($ccCard->iax_buddy) ?></td>
                <td><?= h($ccCard->language) ?></td>
                <td><?= h($ccCard->redial) ?></td>
                <td><?= $this->Number->format($ccCard->runservice) ?></td>
                <td><?= $this->Number->format($ccCard->nbservice) ?></td>
                <td><?= $this->Number->format($ccCard->id_campaign) ?></td>
                <td><?= $this->Number->format($ccCard->num_trials_done) ?></td>
                <td><?= $this->Number->format($ccCard->vat) ?></td>
                <td><?= h($ccCard->servicelastrun) ?></td>
                <td><?= $this->Number->format($ccCard->initialbalance) ?></td>
                <td><?= $this->Number->format($ccCard->invoiceday) ?></td>
                <td><?= $this->Number->format($ccCard->autorefill) ?></td>
                <td><?= h($ccCard->loginkey) ?></td>
                <td><?= h($ccCard->mac_addr) ?></td>
                <td><?= $this->Number->format($ccCard->id_timezone) ?></td>
                <td><?= h($ccCard->tag) ?></td>
                <td><?= $this->Number->format($ccCard->voicemail_permitted) ?></td>
                <td><?= $this->Number->format($ccCard->voicemail_activated) ?></td>
                <td><?= h($ccCard->last_notification) ?></td>
                <td><?= h($ccCard->email_notification) ?></td>
                <td><?= $this->Number->format($ccCard->notify_email) ?></td>
                <td><?= $this->Number->format($ccCard->credit_notification) ?></td>
                <td><?= $this->Number->format($ccCard->id_group) ?></td>
                <td><?= h($ccCard->company_name) ?></td>
                <td><?= h($ccCard->company_website) ?></td>
                <td><?= h($ccCard->vat_rn) ?></td>
                <td><?= $this->Number->format($ccCard->traffic) ?></td>
                <td><?= h($ccCard->traffic_target) ?></td>
                <td><?= $this->Number->format($ccCard->discount) ?></td>
                <td><?= $this->Number->format($ccCard->restriction) ?></td>
                <td><?= $this->Number->format($ccCard->id_seria) ?></td>
                <td><?= $this->Number->format($ccCard->serial) ?></td>
                <td><?= h($ccCard->status_msg) ?></td>
                <td><?= h($ccCard->current_status) ?></td>
                <td><?= h($ccCard->photo) ?></td>
                <td><?= h($ccCard->gender) ?></td>
                <td><?= h($ccCard->birthday) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ccCard->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ccCard->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ccCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ccCard->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
