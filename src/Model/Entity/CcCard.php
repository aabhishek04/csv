<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CcCard Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $creationdate
 * @property \Cake\I18n\FrozenTime $firstusedate
 * @property \Cake\I18n\FrozenTime $expirationdate
 * @property int $enableexpire
 * @property int $expiredays
 * @property string $username
 * @property string $useralias
 * @property string $uipass
 * @property float $credit
 * @property int $tariff
 * @property int $id_didgroup
 * @property string $activated
 * @property int $status
 * @property string $lastname
 * @property string $firstname
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zipcode
 * @property string $phone
 * @property string $email
 * @property string $fax
 * @property int $inuse
 * @property int $simultaccess
 * @property string $currency
 * @property \Cake\I18n\FrozenTime $lastuse
 * @property int $nbused
 * @property int $typepaid
 * @property int $creditlimit
 * @property int $voipcall
 * @property int $sip_buddy
 * @property int $iax_buddy
 * @property string $language
 * @property string $redial
 * @property int $runservice
 * @property int $nbservice
 * @property int $id_campaign
 * @property int $num_trials_done
 * @property float $vat
 * @property \Cake\I18n\FrozenTime $servicelastrun
 * @property float $initialbalance
 * @property int $invoiceday
 * @property int $autorefill
 * @property string $loginkey
 * @property string $mac_addr
 * @property int $id_timezone
 * @property string $tag
 * @property int $voicemail_permitted
 * @property int $voicemail_activated
 * @property \Cake\I18n\FrozenTime $last_notification
 * @property string $email_notification
 * @property int $notify_email
 * @property int $credit_notification
 * @property int $id_group
 * @property string $company_name
 * @property string $company_website
 * @property string $vat_rn
 * @property int $traffic
 * @property string $traffic_target
 * @property float $discount
 * @property int $restriction
 * @property int $id_seria
 * @property int $serial
 * @property string $status_msg
 * @property string $current_status
 * @property string $photo
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $birthday
 */
class CcCard extends Entity
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
        'creationdate' => true,
        'firstusedate' => true,
        'expirationdate' => true,
        'enableexpire' => true,
        'expiredays' => true,
        'username' => true,
        'useralias' => true,
        'uipass' => true,
        'credit' => true,
        'tariff' => true,
        'id_didgroup' => true,
        'activated' => true,
        'status' => true,
        'lastname' => true,
        'firstname' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'zipcode' => true,
        'phone' => true,
        'email' => true,
        'fax' => true,
        'inuse' => true,
        'simultaccess' => true,
        'currency' => true,
        'lastuse' => true,
        'nbused' => true,
        'typepaid' => true,
        'creditlimit' => true,
        'voipcall' => true,
        'sip_buddy' => true,
        'iax_buddy' => true,
        'language' => true,
        'redial' => true,
        'runservice' => true,
        'nbservice' => true,
        'id_campaign' => true,
        'num_trials_done' => true,
        'vat' => true,
        'servicelastrun' => true,
        'initialbalance' => true,
        'invoiceday' => true,
        'autorefill' => true,
        'loginkey' => true,
        'mac_addr' => true,
        'id_timezone' => true,
        'tag' => true,
        'voicemail_permitted' => true,
        'voicemail_activated' => true,
        'last_notification' => true,
        'email_notification' => true,
        'notify_email' => true,
        'credit_notification' => true,
        'id_group' => true,
        'company_name' => true,
        'company_website' => true,
        'vat_rn' => true,
        'traffic' => true,
        'traffic_target' => true,
        'discount' => true,
        'restriction' => true,
        'id_seria' => true,
        'serial' => true,
        'status_msg' => true,
        'current_status' => true,
        'photo' => true,
        'gender' => true,
        'birthday' => true
    ];
}
