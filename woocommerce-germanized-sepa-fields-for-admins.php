<?php
/**
 * WooCommerce Germanized SEPA Profile Fields for Admins
 *
 * Plugin Name:       WooCommerce Germanized SEPA Profile Fields for Admins
 * Plugin URI:        https://github.com/holzhannes/woocommerce-germanized-sepa-fields-for-admins
 * GitHub Plugin URI: https://github.com/holzhannes/woocommerce-germanized-sepa-fields-for-admins
 * Description:       SEPA Profile Fields for Admins
 * Version:           0.1
 * Author:            holzhannes
 * Author URI:        https://github.com/holzhannes/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-gzd-sepa-fields-for-admins
 * Domain Path:       /languages
 */

/**
 * The field on the editing screens.
 *
 * @param $user WP_User user object
 */

function sepagw_usermeta_form_fields($user){
    ?>
    <h3><?= __( 'Users SEPA-Mandate data', 'wc-gzd-sepa-fields-for-admins' ); ?></h3>
    <table class="form-table">
        <tr>
            <th>
                <label for="direct_debit_mandate_id"><?= __( 'Full mandate value', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_mandate_id"
                       name="direct_debit_mandate_id"
                       value="<?= esc_attr(get_user_meta($user->ID, 'direct_debit_mandate_id', true)); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'Only edit this if you have another valid SEPA-Mandate with a different mandate reference value.', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_mandate_DtOfSgntr"><?= __( 'Date', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_mandate_DtOfSgntr"
                       name="direct_debit_mandate_DtOfSgntr"
                       value="<?= esc_attr(get_user_meta($user->ID, 'direct_debit_mandate_DtOfSgntr', true)); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'Date of the mandate', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_mandate_seqType"><?= __( 'Sequence type', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_mandate_seqType"
                       name="direct_debit_mandate_seqType"
                       value="<?= esc_attr(get_user_meta($user->ID, 'direct_debit_mandate_seqType', true)); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'Sequence type within the export file (FRST -> RCUR -> FNAL)', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_mandate_valid"><?= __( 'Validity', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_mandate_valid"
                       name="direct_debit_mandate_valid"
                       value="<?= esc_attr(get_user_meta($user->ID, 'direct_debit_mandate_valid', true)); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'Value if the mandate is valid. 1 = Valid', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_mandate_Sgn_mail"><?= __( 'Signature mail', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_mandate_Sgn_mail"
                       name="direct_debit_mandate_Sgn_mail"
                       value="<?= esc_attr(get_user_meta($user->ID, 'direct_debit_mandate_Sgn_mail', true)); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'Mail at the time of signing the mandate', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_holder"><?= __( 'Holder', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_holder"
                       name="direct_debit_holder"
                       value="<?= esc_attr(WC_GZD_Gateway_Direct_Debit_Encryption_Helper::instance()->decrypt(get_user_meta($user->ID, 'direct_debit_holder', true))); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'Fullname of the direct debit mandate holder', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_iban"><?= __( 'IBAN', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_iban"
                       name="direct_debit_iban"
                       value="<?= esc_attr(WC_GZD_Gateway_Direct_Debit_Encryption_Helper::instance()->decrypt(get_user_meta($user->ID, 'direct_debit_iban', true))); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'IBAN of the direct debit mandate holder', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="direct_debit_bic"><?= __( 'BIC', 'wc-gzd-sepa-fields-for-admins' ); ?></label>
            </th>
            <td>
                <input type="text"
                       class="regular-text ltr"
                       id="direct_debit_bic"
                       name="direct_debit_bic"
                       value="<?= esc_attr(WC_GZD_Gateway_Direct_Debit_Encryption_Helper::instance()->decrypt(get_user_meta($user->ID, 'direct_debit_bic', true))); ?>"
                       title="Please use the right format">
                <p class="description">
                    <?= __( 'BIC of the direct debit mandate holder', 'wc-gzd-sepa-fields-for-admins' ); ?>
                </p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * The save action.
 *
 * @param $user_id int the ID of the current user.
 *
 * @return bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function sepagw_usermeta_form_fielddirect_debit_mandate_id_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_mandate_id',
        $_POST['direct_debit_mandate_id']
    );
}

function sepagw_usermeta_form_fielddirect_debit_mandate_DtOfSgntr_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_mandate_DtOfSgntr',
        $_POST['direct_debit_mandate_DtOfSgntr']
    );
}

function sepagw_usermeta_form_fielddirect_debit_mandate_seqType_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_mandate_seqType',
        $_POST['direct_debit_mandate_seqType']
    );
}

function sepagw_usermeta_form_fielddirect_debit_mandate_Sgn_mail_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_mandate_Sgn_mail',
        $_POST['direct_debit_mandate_Sgn_mail']
    );
}

function sepagw_usermeta_form_fielddirect_debit_mandate_holder_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_holder',
        $_POST['direct_debit_holder']
    );
}

function sepagw_usermeta_form_fielddirect_debit_mandate_iban_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_iban',
        WC_GZD_Gateway_Direct_Debit_Encryption_Helper::instance()->encrypt($_POST['direct_debit_iban'])
    );
}

function sepagw_usermeta_form_fielddirect_debit_mandate_bic_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_bic',
        WC_GZD_Gateway_Direct_Debit_Encryption_Helper::instance()->encrypt($_POST['direct_debit_bic'])
    );
}



function sepagw_usermeta_form_fielddirect_debit_mandate_valid_update($user_id){
    // check that the current user have the capability to edit the $user_id
    if (!current_user_can('activate_plugins', $user_id)) {
        return false;
    }
 
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'direct_debit_mandate_valid',
        $_POST['direct_debit_mandate_valid']
    );
}
 
// add the field to user's own profile editing screen
add_action('edit_user_profile','sepagw_usermeta_form_fields');
 
// add the field to user profile editing screen
add_action('show_user_profile','sepagw_usermeta_form_fields');
 
// add the save action to user's own profile editing screen update
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_id_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_DtOfSgntr_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_seqType_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_valid_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_Sgn_mail_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_holder_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_iban_update');
// add_action('personal_options_update','sepagw_usermeta_form_fielddirect_debit_mandate_bic_update');
 
// add the save action to user profile editing screen update
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_id_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_DtOfSgntr_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_seqType_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_valid_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_Sgn_mail_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_holder_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_iban_update');
add_action('edit_user_profile_update','sepagw_usermeta_form_fielddirect_debit_mandate_bic_update');