<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reseller $reseller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reseller'), ['action' => 'edit', $reseller->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reseller'), ['action' => 'delete', $reseller->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reseller->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resellers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reseller'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resellers view large-9 medium-8 columns content">
    <h3><?= h($reseller->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($reseller->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($reseller->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nimbuzzid') ?></th>
            <td><?= h($reseller->nimbuzzid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($reseller->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($reseller->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($reseller->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distribution Network') ?></th>
            <td><?= h($reseller->distribution_network) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voip Service Providers') ?></th>
            <td><?= h($reseller->voip_service_providers) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nimbuzzout Vouchers') ?></th>
            <td><?= h($reseller->nimbuzzout_vouchers) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reseller->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($reseller->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $this->Number->format($reseller->plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reseller->created) ?></td>
        </tr>
    </table>
</div>
