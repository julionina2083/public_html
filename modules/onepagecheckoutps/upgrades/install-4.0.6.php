<?php
/**
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * We are experts and professionals in PrestaShop
 *
 * @author    PresTeamShop.com <support@presteamshop.com>
 * @copyright 2011-2020 PresTeamShop
 * @license   see file: LICENSE.txt
 * @category  PrestaShop
 * @category  Module
 */

function upgrade_module_4_0_6($object)
{
    $db = Db::getInstance();

    $sql = 'ALTER TABLE `'._DB_PREFIX_.'opc_customer_address` ADD `default` TINYINT(1) NOT NULL AFTER `object`';
    $db->execute($sql);

    $db->insert('opc_field', array(
        'object'       => 'customer',
        'name'         => 'company',
        'type'         => 'isGenericName',
        'size'         => 64,
        'type_control' => 'textbox',
        'is_custom'    => 0,
        'capitalize'   => 1
    ));
    $id_field = $db->Insert_ID();

    if (!empty($id_field)) {
        $shops = Shop::getShops();
        
        foreach ($shops as $shop) {
            $db->insert('opc_field_shop', array(
                'id_field'      => $id_field,
                'id_shop'       => $shop['id_shop'],
                'default_value' => '',
                'group'         => 'customer',
                'row'           => 9,
                'col'           => 1,
                'required'      => 0,
                'active'        => 1
            ));

            $languages      = Language::getLanguages(true, $shop['id_shop']);
            $description    = array();
            foreach ($languages as $language) {
                switch ($language['iso_code']) {
                    case 'cs':
                            $description = 'Společnost';
                        break;
                    case 'da':
                            $description = 'Firma';
                        break;
                    case 'de':
                            $description = 'Firma';
                        break;
                    case 'el':
                            $description = 'Επωνυμία Εταιρίας';
                        break;
                    case 'en':
                            $description = 'Company';
                        break;
                    case 'eu':
                            $description = 'Enpresa';
                        break;
                    case 'fr':
                            $description = 'Société';
                        break;
                    case 'gb':
                            $description = 'Company';
                        break;
                    case 'he':
                            $description = 'חברה';
                        break;
                    case 'it':
                            $description = 'Azienda';
                        break;
                    case 'ka':
                            $description = 'კომპანია';
                        break;
                    case 'mx':
                            $description = 'Empresa';
                        break;
                    case 'nl':
                            $description = 'Bedrijf';
                        break;
                    case 'pl':
                            $description = 'Firma';
                        break;
                    case 'ru':
                            $description = 'Название организации';
                        break;
                    case 'sv':
                            $description = 'Företag';
                        break;
                    case 'tr':
                            $description = 'Company';
                        break;
                    default:
                            $description = 'Empresa';
                        break;
                }

                $db->insert('opc_field_lang', array(
                    'id_field'    => $id_field,
                    'id_lang'     => $language['id_lang'],
                    'id_shop'     => $shop['id_shop'],
                    'description' => $description
                ));
            }
        }
    }

    $object->registerHook('actionAuthentication');
    
    Configuration::updateValue('OPC_PRESEL_CREATE_ACCOUNT', 0);
    Configuration::updateValue('OPC_MARK_CHECKBOX_CHANGE_PASSWD', '0');

    $db->execute('
        CREATE TRIGGER after_delete_module
            AFTER DELETE ON '._DB_PREFIX_.'module
            FOR EACH ROW
            BEGIN
                DECLARE module_id_removed INT(11);
                SELECT id_payment INTO module_id_removed FROM '._DB_PREFIX_.'opc_payment WHERE id_module = OLD.id_module;
                DELETE FROM '._DB_PREFIX_.'opc_payment WHERE id_payment = module_id_removed;
                DELETE FROM '._DB_PREFIX_.'opc_payment_lang WHERE id_payment = module_id_removed;
                DELETE FROM '._DB_PREFIX_.'opc_payment_shop WHERE id_payment = module_id_removed;
            END
    ');

    return true;
}
