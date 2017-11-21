<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reseller Entity
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property float $mobile
 * @property string $nimbuzzid
 * @property string $email
 * @property string $country
 * @property string $city
 * @property int $plan
 * @property string $distribution_network
 * @property string $voip_service_providers
 * @property string $nimbuzzout_vouchers
 * @property \Cake\I18n\FrozenTime $created
 */
class Reseller extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'gender' => true,
        'mobile' => true,
        'nimbuzzid' => true,
        'email' => true,
        'country' => true,
        'city' => true,
        'plan' => true,
        'distribution_network' => true,
        'voip_service_providers' => true,
        'nimbuzzout_vouchers' => true,
        'created' => true
    ];
}
