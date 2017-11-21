<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CcCard Model
 *
 * @method \App\Model\Entity\CcCard get($primaryKey, $options = [])
 * @method \App\Model\Entity\CcCard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CcCard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CcCard|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CcCard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CcCard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CcCard findOrCreate($search, callable $callback = null, $options = [])
 */
class CcCardTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cc_card');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('creationdate')
            ->allowEmpty('creationdate');

        $validator
            ->dateTime('firstusedate')
            ->allowEmpty('firstusedate');

        $validator
            ->dateTime('expirationdate')
            ->allowEmpty('expirationdate');

        $validator
            ->integer('enableexpire')
            ->allowEmpty('enableexpire');

        $validator
            ->integer('expiredays')
            ->allowEmpty('expiredays');

        $validator
            ->scalar('username')
            ->allowEmpty('username');

        $validator
            ->scalar('useralias')
            ->allowEmpty('useralias');

        $validator
            ->scalar('uipass')
            ->allowEmpty('uipass');

        $validator
            ->decimal('credit')
            ->allowEmpty('credit');

        $validator
            ->integer('tariff')
            ->allowEmpty('tariff');

        $validator
            ->integer('id_didgroup')
            ->allowEmpty('id_didgroup');

        $validator
            ->scalar('activated')
            ->allowEmpty('activated');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->scalar('lastname')
            ->allowEmpty('lastname');

        $validator
            ->scalar('firstname')
            ->allowEmpty('firstname');

        $validator
            ->scalar('address')
            ->allowEmpty('address');

        $validator
            ->scalar('city')
            ->allowEmpty('city');

        $validator
            ->scalar('state')
            ->allowEmpty('state');

        $validator
            ->scalar('country')
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->scalar('zipcode')
            ->allowEmpty('zipcode');

        $validator
            ->scalar('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('fax')
            ->allowEmpty('fax');

        $validator
            ->integer('inuse')
            ->allowEmpty('inuse');

        $validator
            ->integer('simultaccess')
            ->allowEmpty('simultaccess');

        $validator
            ->scalar('currency')
            ->allowEmpty('currency');

        $validator
            ->dateTime('lastuse')
            ->allowEmpty('lastuse');

        $validator
            ->integer('nbused')
            ->allowEmpty('nbused');

        $validator
            ->integer('typepaid')
            ->allowEmpty('typepaid');

        $validator
            ->integer('creditlimit')
            ->allowEmpty('creditlimit');

        $validator
            ->integer('voipcall')
            ->allowEmpty('voipcall');

        $validator
            ->integer('sip_buddy')
            ->allowEmpty('sip_buddy');

        $validator
            ->integer('iax_buddy')
            ->allowEmpty('iax_buddy');

        $validator
            ->scalar('language')
            ->allowEmpty('language');

        $validator
            ->scalar('redial')
            ->allowEmpty('redial');

        $validator
            ->integer('runservice')
            ->allowEmpty('runservice');

        $validator
            ->integer('nbservice')
            ->allowEmpty('nbservice');

        $validator
            ->integer('id_campaign')
            ->allowEmpty('id_campaign');

        $validator
            ->allowEmpty('num_trials_done');

        $validator
            ->numeric('vat')
            ->allowEmpty('vat');

        $validator
            ->dateTime('servicelastrun')
            ->allowEmpty('servicelastrun');

        $validator
            ->decimal('initialbalance')
            ->allowEmpty('initialbalance');

        $validator
            ->integer('invoiceday')
            ->allowEmpty('invoiceday');

        $validator
            ->integer('autorefill')
            ->allowEmpty('autorefill');

        $validator
            ->scalar('loginkey')
            ->allowEmpty('loginkey');

        $validator
            ->scalar('mac_addr')
            ->allowEmpty('mac_addr');

        $validator
            ->integer('id_timezone')
            ->allowEmpty('id_timezone');

        $validator
            ->scalar('tag')
            ->allowEmpty('tag');

        $validator
            ->integer('voicemail_permitted')
            ->allowEmpty('voicemail_permitted');

        $validator
            ->allowEmpty('voicemail_activated');

        $validator
            ->dateTime('last_notification')
            ->allowEmpty('last_notification');

        $validator
            ->scalar('email_notification')
            ->allowEmpty('email_notification');

        $validator
            ->allowEmpty('notify_email');

        $validator
            ->integer('credit_notification')
            ->allowEmpty('credit_notification');

        $validator
            ->integer('id_group')
            ->allowEmpty('id_group');

        $validator
            ->scalar('company_name')
            ->allowEmpty('company_name');

        $validator
            ->scalar('company_website')
            ->allowEmpty('company_website');

        $validator
            ->scalar('vat_rn')
            ->allowEmpty('vat_rn');

        $validator
            ->allowEmpty('traffic');

        $validator
            ->scalar('traffic_target')
            ->allowEmpty('traffic_target');

        $validator
            ->decimal('discount')
            ->allowEmpty('discount');

        $validator
            ->allowEmpty('restriction');

        $validator
            ->integer('id_seria')
            ->allowEmpty('id_seria');

        $validator
            ->allowEmpty('serial');

        $validator
            ->scalar('status_msg')
            ->allowEmpty('status_msg');

        $validator
            ->scalar('current_status')
            ->allowEmpty('current_status');

        $validator
            ->scalar('photo')
            ->allowEmpty('photo');

        $validator
            ->scalar('gender')
            ->allowEmpty('gender');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
