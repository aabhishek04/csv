
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <!--<li><?= $this->Html->link(__('New Reseller'), ['action' => 'add']) ?></li>-->
        <li><?= $this->Html->link(__('New PDF'), ['action' => 'pdf']) ?></li>
        <li>-------</li>
        <li><?= $this->Html->link(__('Mail'), ['action' => 'mail']) ?></li>
    </ul>
</nav>
<!--<div class="resellers index large-9 medium-8 columns content">
    <h3><?= __('Resellers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nimbuzzid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distribution_network') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voip_service_providers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nimbuzzout_vouchers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resellers as $reseller): ?>
            <tr>
                <td><?= $this->Number->format($reseller->id) ?></td>
                <td><?= h($reseller->name) ?></td>
                <td><?= h($reseller->gender) ?></td>
                <td><?= $this->Number->format($reseller->mobile) ?></td>
                <td><?= h($reseller->nimbuzzid) ?></td>
                <td><?= h($reseller->email) ?></td>
                <td><?= h($reseller->country) ?></td>
                <td><?= h($reseller->city) ?></td>
                <td><?= $this->Number->format($reseller->plan) ?></td>
                <td><?= h($reseller->distribution_network) ?></td>
                <td><?= h($reseller->voip_service_providers) ?></td>
                <td><?= h($reseller->nimbuzzout_vouchers) ?></td>
                <td><?= h($reseller->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reseller->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reseller->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reseller->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reseller->id)]) ?>
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
</div>-->
