<?php
use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1644428536.
 * Generated on 2022-02-09 17:42:16 by spryker 
 */
class PropelMigration_1644428536 
{
    public $comment = '';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        $connection_zed = <<< 'EOT'

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `pyz_example_state_machine_item`;

DROP TABLE IF EXISTS `spy_acl_entity_rule`;

DROP TABLE IF EXISTS `spy_acl_entity_segment`;

DROP TABLE IF EXISTS `spy_acl_entity_segment_merchant`;

DROP TABLE IF EXISTS `spy_acl_entity_segment_merchant_user`;

DROP TABLE IF EXISTS `spy_acl_group`;

DROP TABLE IF EXISTS `spy_acl_group_archive`;

DROP TABLE IF EXISTS `spy_acl_groups_has_roles`;

DROP TABLE IF EXISTS `spy_acl_role`;

DROP TABLE IF EXISTS `spy_acl_role_archive`;

DROP TABLE IF EXISTS `spy_acl_rule`;

DROP TABLE IF EXISTS `spy_acl_rule_archive`;

DROP TABLE IF EXISTS `spy_acl_user_has_group`;

DROP TABLE IF EXISTS `spy_auth_reset_password`;

DROP TABLE IF EXISTS `spy_auth_reset_password_archive`;

DROP TABLE IF EXISTS `spy_availability`;

DROP TABLE IF EXISTS `spy_availability_abstract`;

DROP TABLE IF EXISTS `spy_availability_notification_subscription`;

DROP TABLE IF EXISTS `spy_availability_storage`;

DROP TABLE IF EXISTS `spy_category`;

DROP TABLE IF EXISTS `spy_category_attribute`;

DROP TABLE IF EXISTS `spy_category_closure_table`;

DROP TABLE IF EXISTS `spy_category_image`;

DROP TABLE IF EXISTS `spy_category_image_set`;

DROP TABLE IF EXISTS `spy_category_image_set_to_category_image`;

DROP TABLE IF EXISTS `spy_category_image_storage`;

DROP TABLE IF EXISTS `spy_category_node`;

DROP TABLE IF EXISTS `spy_category_node_page_search`;

DROP TABLE IF EXISTS `spy_category_node_storage`;

DROP TABLE IF EXISTS `spy_category_store`;

DROP TABLE IF EXISTS `spy_category_template`;

DROP TABLE IF EXISTS `spy_category_tree_storage`;

DROP TABLE IF EXISTS `spy_cms_block`;

DROP TABLE IF EXISTS `spy_cms_block_category_connector`;

DROP TABLE IF EXISTS `spy_cms_block_category_position`;

DROP TABLE IF EXISTS `spy_cms_block_category_storage`;

DROP TABLE IF EXISTS `spy_cms_block_glossary_key_mapping`;

DROP TABLE IF EXISTS `spy_cms_block_product_connector`;

DROP TABLE IF EXISTS `spy_cms_block_product_storage`;

DROP TABLE IF EXISTS `spy_cms_block_storage`;

DROP TABLE IF EXISTS `spy_cms_block_store`;

DROP TABLE IF EXISTS `spy_cms_block_template`;

DROP TABLE IF EXISTS `spy_cms_glossary_key_mapping`;

DROP TABLE IF EXISTS `spy_cms_page`;

DROP TABLE IF EXISTS `spy_cms_page_localized_attributes`;

DROP TABLE IF EXISTS `spy_cms_page_search`;

DROP TABLE IF EXISTS `spy_cms_page_storage`;

DROP TABLE IF EXISTS `spy_cms_page_store`;

DROP TABLE IF EXISTS `spy_cms_slot`;

DROP TABLE IF EXISTS `spy_cms_slot_block`;

DROP TABLE IF EXISTS `spy_cms_slot_block_storage`;

DROP TABLE IF EXISTS `spy_cms_slot_storage`;

DROP TABLE IF EXISTS `spy_cms_slot_template`;

DROP TABLE IF EXISTS `spy_cms_slot_to_cms_slot_template`;

DROP TABLE IF EXISTS `spy_cms_template`;

DROP TABLE IF EXISTS `spy_cms_version`;

DROP TABLE IF EXISTS `spy_comment`;

DROP TABLE IF EXISTS `spy_comment_tag`;

DROP TABLE IF EXISTS `spy_comment_thread`;

DROP TABLE IF EXISTS `spy_comment_to_comment_tag`;

DROP TABLE IF EXISTS `spy_company`;

DROP TABLE IF EXISTS `spy_company_business_unit`;

DROP TABLE IF EXISTS `spy_company_role`;

DROP TABLE IF EXISTS `spy_company_role_to_company_user`;

DROP TABLE IF EXISTS `spy_company_role_to_permission`;

DROP TABLE IF EXISTS `spy_company_store`;

DROP TABLE IF EXISTS `spy_company_supplier_to_product`;

DROP TABLE IF EXISTS `spy_company_type`;

DROP TABLE IF EXISTS `spy_company_unit_address`;

DROP TABLE IF EXISTS `spy_company_unit_address_label`;

DROP TABLE IF EXISTS `spy_company_unit_address_label_to_company_unit_address`;

DROP TABLE IF EXISTS `spy_company_unit_address_to_company_business_unit`;

DROP TABLE IF EXISTS `spy_company_user`;

DROP TABLE IF EXISTS `spy_company_user_invitation`;

DROP TABLE IF EXISTS `spy_company_user_invitation_status`;

DROP TABLE IF EXISTS `spy_company_user_storage`;

DROP TABLE IF EXISTS `spy_configurable_bundle_template`;

DROP TABLE IF EXISTS `spy_configurable_bundle_template_image_storage`;

DROP TABLE IF EXISTS `spy_configurable_bundle_template_page_search`;

DROP TABLE IF EXISTS `spy_configurable_bundle_template_slot`;

DROP TABLE IF EXISTS `spy_configurable_bundle_template_storage`;

DROP TABLE IF EXISTS `spy_content`;

DROP TABLE IF EXISTS `spy_content_localized`;

DROP TABLE IF EXISTS `spy_content_storage`;

DROP TABLE IF EXISTS `spy_country`;

DROP TABLE IF EXISTS `spy_currency`;

DROP TABLE IF EXISTS `spy_customer`;

DROP TABLE IF EXISTS `spy_customer_address`;

DROP TABLE IF EXISTS `spy_customer_group`;

DROP TABLE IF EXISTS `spy_customer_group_to_customer`;

DROP TABLE IF EXISTS `spy_customer_note`;

DROP TABLE IF EXISTS `spy_dataset`;

DROP TABLE IF EXISTS `spy_dataset_column`;

DROP TABLE IF EXISTS `spy_dataset_localized_attributes`;

DROP TABLE IF EXISTS `spy_dataset_row`;

DROP TABLE IF EXISTS `spy_dataset_row_column_value`;

DROP TABLE IF EXISTS `spy_date_schedule`;

DROP TABLE IF EXISTS `spy_discount`;

DROP TABLE IF EXISTS `spy_discount_amount`;

DROP TABLE IF EXISTS `spy_discount_promotion`;

DROP TABLE IF EXISTS `spy_discount_store`;

DROP TABLE IF EXISTS `spy_discount_voucher`;

DROP TABLE IF EXISTS `spy_discount_voucher_pool`;

DROP TABLE IF EXISTS `spy_event_behavior_entity_change`;

DROP TABLE IF EXISTS `spy_file`;

DROP TABLE IF EXISTS `spy_file_directory`;

DROP TABLE IF EXISTS `spy_file_directory_localized_attributes`;

DROP TABLE IF EXISTS `spy_file_info`;

DROP TABLE IF EXISTS `spy_file_localized_attributes`;

DROP TABLE IF EXISTS `spy_file_storage`;

DROP TABLE IF EXISTS `spy_gift_card`;

DROP TABLE IF EXISTS `spy_gift_card_balance_log`;

DROP TABLE IF EXISTS `spy_gift_card_product_abstract_configuration`;

DROP TABLE IF EXISTS `spy_gift_card_product_abstract_configuration_link`;

DROP TABLE IF EXISTS `spy_gift_card_product_configuration`;

DROP TABLE IF EXISTS `spy_gift_card_product_configuration_link`;

DROP TABLE IF EXISTS `spy_glossary_key`;

DROP TABLE IF EXISTS `spy_glossary_storage`;

DROP TABLE IF EXISTS `spy_glossary_translation`;

DROP TABLE IF EXISTS `spy_locale`;

DROP TABLE IF EXISTS `spy_merchant`;

DROP TABLE IF EXISTS `spy_merchant_category`;

DROP TABLE IF EXISTS `spy_merchant_opening_hours_date_schedule`;

DROP TABLE IF EXISTS `spy_merchant_opening_hours_storage`;

DROP TABLE IF EXISTS `spy_merchant_opening_hours_weekday_schedule`;

DROP TABLE IF EXISTS `spy_merchant_product_abstract`;

DROP TABLE IF EXISTS `spy_merchant_product_option_group`;

DROP TABLE IF EXISTS `spy_merchant_profile`;

DROP TABLE IF EXISTS `spy_merchant_profile_address`;

DROP TABLE IF EXISTS `spy_merchant_relationship`;

DROP TABLE IF EXISTS `spy_merchant_relationship_sales_order_threshold`;

DROP TABLE IF EXISTS `spy_merchant_relationship_to_company_business_unit`;

DROP TABLE IF EXISTS `spy_merchant_sales_order`;

DROP TABLE IF EXISTS `spy_merchant_sales_order_item`;

DROP TABLE IF EXISTS `spy_merchant_sales_order_totals`;

DROP TABLE IF EXISTS `spy_merchant_search`;

DROP TABLE IF EXISTS `spy_merchant_stock`;

DROP TABLE IF EXISTS `spy_merchant_storage`;

DROP TABLE IF EXISTS `spy_merchant_store`;

DROP TABLE IF EXISTS `spy_merchant_user`;

DROP TABLE IF EXISTS `spy_mime_type`;

DROP TABLE IF EXISTS `spy_navigation`;

DROP TABLE IF EXISTS `spy_navigation_node`;

DROP TABLE IF EXISTS `spy_navigation_node_localized_attributes`;

DROP TABLE IF EXISTS `spy_navigation_storage`;

DROP TABLE IF EXISTS `spy_newsletter_subscriber`;

DROP TABLE IF EXISTS `spy_newsletter_subscription`;

DROP TABLE IF EXISTS `spy_newsletter_type`;

DROP TABLE IF EXISTS `spy_nopayment_paid`;

DROP TABLE IF EXISTS `spy_oauth_access_token`;

DROP TABLE IF EXISTS `spy_oauth_client`;

DROP TABLE IF EXISTS `spy_oauth_refresh_token`;

DROP TABLE IF EXISTS `spy_oauth_scope`;

DROP TABLE IF EXISTS `spy_offer`;

DROP TABLE IF EXISTS `spy_oms_event_timeout`;

DROP TABLE IF EXISTS `spy_oms_order_item_state`;

DROP TABLE IF EXISTS `spy_oms_order_item_state_history`;

DROP TABLE IF EXISTS `spy_oms_order_process`;

DROP TABLE IF EXISTS `spy_oms_product_offer_reservation`;

DROP TABLE IF EXISTS `spy_oms_product_reservation`;

DROP TABLE IF EXISTS `spy_oms_product_reservation_change_version`;

DROP TABLE IF EXISTS `spy_oms_product_reservation_last_exported_version`;

DROP TABLE IF EXISTS `spy_oms_product_reservation_store`;

DROP TABLE IF EXISTS `spy_oms_state_machine_lock`;

DROP TABLE IF EXISTS `spy_oms_transition_log`;

DROP TABLE IF EXISTS `spy_order_source`;

DROP TABLE IF EXISTS `spy_payment_gift_card`;

DROP TABLE IF EXISTS `spy_payment_method`;

DROP TABLE IF EXISTS `spy_payment_method_store`;

DROP TABLE IF EXISTS `spy_payment_payone`;

DROP TABLE IF EXISTS `spy_payment_payone_api_call_log`;

DROP TABLE IF EXISTS `spy_payment_payone_api_log`;

DROP TABLE IF EXISTS `spy_payment_payone_detail`;

DROP TABLE IF EXISTS `spy_payment_payone_order_item`;

DROP TABLE IF EXISTS `spy_payment_payone_transaction_status_log`;

DROP TABLE IF EXISTS `spy_payment_payone_transaction_status_log_order_item`;

DROP TABLE IF EXISTS `spy_payment_provider`;

DROP TABLE IF EXISTS `spy_permission`;

DROP TABLE IF EXISTS `spy_price_product`;

DROP TABLE IF EXISTS `spy_price_product_abstract_merchant_relationship_storage`;

DROP TABLE IF EXISTS `spy_price_product_abstract_storage`;

DROP TABLE IF EXISTS `spy_price_product_concrete_merchant_relationship_storage`;

DROP TABLE IF EXISTS `spy_price_product_concrete_storage`;

DROP TABLE IF EXISTS `spy_price_product_default`;

DROP TABLE IF EXISTS `spy_price_product_merchant_relationship`;

DROP TABLE IF EXISTS `spy_price_product_offer`;

DROP TABLE IF EXISTS `spy_price_product_schedule`;

DROP TABLE IF EXISTS `spy_price_product_schedule_list`;

DROP TABLE IF EXISTS `spy_price_product_store`;

DROP TABLE IF EXISTS `spy_price_type`;

DROP TABLE IF EXISTS `spy_product`;

DROP TABLE IF EXISTS `spy_product_abstract`;

DROP TABLE IF EXISTS `spy_product_abstract_category_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_group`;

DROP TABLE IF EXISTS `spy_product_abstract_group_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_image_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_label_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_localized_attributes`;

DROP TABLE IF EXISTS `spy_product_abstract_option_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_page_search`;

DROP TABLE IF EXISTS `spy_product_abstract_product_list_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_product_option_group`;

DROP TABLE IF EXISTS `spy_product_abstract_relation_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_review_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_set`;

DROP TABLE IF EXISTS `spy_product_abstract_storage`;

DROP TABLE IF EXISTS `spy_product_abstract_store`;

DROP TABLE IF EXISTS `spy_product_alternative`;

DROP TABLE IF EXISTS `spy_product_alternative_storage`;

DROP TABLE IF EXISTS `spy_product_attribute_key`;

DROP TABLE IF EXISTS `spy_product_bundle`;

DROP TABLE IF EXISTS `spy_product_bundle_storage`;

DROP TABLE IF EXISTS `spy_product_category`;

DROP TABLE IF EXISTS `spy_product_category_filter`;

DROP TABLE IF EXISTS `spy_product_category_filter_storage`;

DROP TABLE IF EXISTS `spy_product_concrete_image_storage`;

DROP TABLE IF EXISTS `spy_product_concrete_measurement_unit_storage`;

DROP TABLE IF EXISTS `spy_product_concrete_page_search`;

DROP TABLE IF EXISTS `spy_product_concrete_product_list_storage`;

DROP TABLE IF EXISTS `spy_product_concrete_product_offer_price_storage`;

DROP TABLE IF EXISTS `spy_product_concrete_product_offers_storage`;

DROP TABLE IF EXISTS `spy_product_concrete_storage`;

DROP TABLE IF EXISTS `spy_product_configuration`;

DROP TABLE IF EXISTS `spy_product_configuration_storage`;

DROP TABLE IF EXISTS `spy_product_customer_permission`;

DROP TABLE IF EXISTS `spy_product_discontinued`;

DROP TABLE IF EXISTS `spy_product_discontinued_note`;

DROP TABLE IF EXISTS `spy_product_discontinued_storage`;

DROP TABLE IF EXISTS `spy_product_group`;

DROP TABLE IF EXISTS `spy_product_image`;

DROP TABLE IF EXISTS `spy_product_image_set`;

DROP TABLE IF EXISTS `spy_product_image_set_to_product_image`;

DROP TABLE IF EXISTS `spy_product_label`;

DROP TABLE IF EXISTS `spy_product_label_dictionary_storage`;

DROP TABLE IF EXISTS `spy_product_label_localized_attributes`;

DROP TABLE IF EXISTS `spy_product_label_product_abstract`;

DROP TABLE IF EXISTS `spy_product_label_store`;

DROP TABLE IF EXISTS `spy_product_list`;

DROP TABLE IF EXISTS `spy_product_list_category`;

DROP TABLE IF EXISTS `spy_product_list_product_concrete`;

DROP TABLE IF EXISTS `spy_product_localized_attributes`;

DROP TABLE IF EXISTS `spy_product_management_attribute`;

DROP TABLE IF EXISTS `spy_product_management_attribute_value`;

DROP TABLE IF EXISTS `spy_product_management_attribute_value_translation`;

DROP TABLE IF EXISTS `spy_product_measurement_base_unit`;

DROP TABLE IF EXISTS `spy_product_measurement_sales_unit`;

DROP TABLE IF EXISTS `spy_product_measurement_sales_unit_store`;

DROP TABLE IF EXISTS `spy_product_measurement_unit`;

DROP TABLE IF EXISTS `spy_product_measurement_unit_storage`;

DROP TABLE IF EXISTS `spy_product_offer`;

DROP TABLE IF EXISTS `spy_product_offer_availability_storage`;

DROP TABLE IF EXISTS `spy_product_offer_stock`;

DROP TABLE IF EXISTS `spy_product_offer_storage`;

DROP TABLE IF EXISTS `spy_product_offer_store`;

DROP TABLE IF EXISTS `spy_product_offer_validity`;

DROP TABLE IF EXISTS `spy_product_option_group`;

DROP TABLE IF EXISTS `spy_product_option_value`;

DROP TABLE IF EXISTS `spy_product_option_value_price`;

DROP TABLE IF EXISTS `spy_product_packaging_unit`;

DROP TABLE IF EXISTS `spy_product_packaging_unit_storage`;

DROP TABLE IF EXISTS `spy_product_packaging_unit_type`;

DROP TABLE IF EXISTS `spy_product_quantity`;

DROP TABLE IF EXISTS `spy_product_quantity_storage`;

DROP TABLE IF EXISTS `spy_product_relation`;

DROP TABLE IF EXISTS `spy_product_relation_product_abstract`;

DROP TABLE IF EXISTS `spy_product_relation_store`;

DROP TABLE IF EXISTS `spy_product_relation_type`;

DROP TABLE IF EXISTS `spy_product_replacement_for_storage`;

DROP TABLE IF EXISTS `spy_product_review`;

DROP TABLE IF EXISTS `spy_product_review_search`;

DROP TABLE IF EXISTS `spy_product_search`;

DROP TABLE IF EXISTS `spy_product_search_attribute`;

DROP TABLE IF EXISTS `spy_product_search_attribute_archive`;

DROP TABLE IF EXISTS `spy_product_search_attribute_map`;

DROP TABLE IF EXISTS `spy_product_search_attribute_map_archive`;

DROP TABLE IF EXISTS `spy_product_search_config_storage`;

DROP TABLE IF EXISTS `spy_product_set`;

DROP TABLE IF EXISTS `spy_product_set_data`;

DROP TABLE IF EXISTS `spy_product_set_page_search`;

DROP TABLE IF EXISTS `spy_product_set_storage`;

DROP TABLE IF EXISTS `spy_product_validity`;

DROP TABLE IF EXISTS `spy_publish_and_synchronize_health_check`;

DROP TABLE IF EXISTS `spy_publish_and_synchronize_health_check_search`;

DROP TABLE IF EXISTS `spy_publish_and_synchronize_health_check_storage`;

DROP TABLE IF EXISTS `spy_queue_process`;

DROP TABLE IF EXISTS `spy_quote`;

DROP TABLE IF EXISTS `spy_quote_approval`;

DROP TABLE IF EXISTS `spy_quote_company_user`;

DROP TABLE IF EXISTS `spy_quote_permission_group`;

DROP TABLE IF EXISTS `spy_quote_permission_group_to_permission`;

DROP TABLE IF EXISTS `spy_quote_request`;

DROP TABLE IF EXISTS `spy_quote_request_version`;

DROP TABLE IF EXISTS `spy_refund`;

DROP TABLE IF EXISTS `spy_region`;

DROP TABLE IF EXISTS `spy_resource_share`;

DROP TABLE IF EXISTS `spy_sales_discount`;

DROP TABLE IF EXISTS `spy_sales_discount_code`;

DROP TABLE IF EXISTS `spy_sales_expense`;

DROP TABLE IF EXISTS `spy_sales_order`;

DROP TABLE IF EXISTS `spy_sales_order_address`;

DROP TABLE IF EXISTS `spy_sales_order_address_history`;

DROP TABLE IF EXISTS `spy_sales_order_comment`;

DROP TABLE IF EXISTS `spy_sales_order_configured_bundle`;

DROP TABLE IF EXISTS `spy_sales_order_configured_bundle_item`;

DROP TABLE IF EXISTS `spy_sales_order_invoice`;

DROP TABLE IF EXISTS `spy_sales_order_item`;

DROP TABLE IF EXISTS `spy_sales_order_item_bundle`;

DROP TABLE IF EXISTS `spy_sales_order_item_configuration`;

DROP TABLE IF EXISTS `spy_sales_order_item_gift_card`;

DROP TABLE IF EXISTS `spy_sales_order_item_metadata`;

DROP TABLE IF EXISTS `spy_sales_order_item_option`;

DROP TABLE IF EXISTS `spy_sales_order_note`;

DROP TABLE IF EXISTS `spy_sales_order_threshold`;

DROP TABLE IF EXISTS `spy_sales_order_threshold_tax_set`;

DROP TABLE IF EXISTS `spy_sales_order_threshold_type`;

DROP TABLE IF EXISTS `spy_sales_order_totals`;

DROP TABLE IF EXISTS `spy_sales_payment`;

DROP TABLE IF EXISTS `spy_sales_payment_method_type`;

DROP TABLE IF EXISTS `spy_sales_reclamation`;

DROP TABLE IF EXISTS `spy_sales_reclamation_item`;

DROP TABLE IF EXISTS `spy_sales_return`;

DROP TABLE IF EXISTS `spy_sales_return_item`;

DROP TABLE IF EXISTS `spy_sales_return_reason`;

DROP TABLE IF EXISTS `spy_sales_return_reason_search`;

DROP TABLE IF EXISTS `spy_sales_shipment`;

DROP TABLE IF EXISTS `spy_sequence_number`;

DROP TABLE IF EXISTS `spy_shipment_carrier`;

DROP TABLE IF EXISTS `spy_shipment_method`;

DROP TABLE IF EXISTS `spy_shipment_method_price`;

DROP TABLE IF EXISTS `spy_shipment_method_store`;

DROP TABLE IF EXISTS `spy_shopping_list`;

DROP TABLE IF EXISTS `spy_shopping_list_company_business_unit`;

DROP TABLE IF EXISTS `spy_shopping_list_company_business_unit_blacklist`;

DROP TABLE IF EXISTS `spy_shopping_list_company_user`;

DROP TABLE IF EXISTS `spy_shopping_list_customer_storage`;

DROP TABLE IF EXISTS `spy_shopping_list_item`;

DROP TABLE IF EXISTS `spy_shopping_list_item_note`;

DROP TABLE IF EXISTS `spy_shopping_list_permission_group`;

DROP TABLE IF EXISTS `spy_shopping_list_permission_group_to_permission`;

DROP TABLE IF EXISTS `spy_shopping_list_product_option`;

DROP TABLE IF EXISTS `spy_state_machine_event_timeout`;

DROP TABLE IF EXISTS `spy_state_machine_item_state`;

DROP TABLE IF EXISTS `spy_state_machine_item_state_history`;

DROP TABLE IF EXISTS `spy_state_machine_lock`;

DROP TABLE IF EXISTS `spy_state_machine_process`;

DROP TABLE IF EXISTS `spy_state_machine_transition_log`;

DROP TABLE IF EXISTS `spy_stock`;

DROP TABLE IF EXISTS `spy_stock_address`;

DROP TABLE IF EXISTS `spy_stock_product`;

DROP TABLE IF EXISTS `spy_stock_store`;

DROP TABLE IF EXISTS `spy_store`;

DROP TABLE IF EXISTS `spy_tax_product_storage`;

DROP TABLE IF EXISTS `spy_tax_rate`;

DROP TABLE IF EXISTS `spy_tax_set`;

DROP TABLE IF EXISTS `spy_tax_set_storage`;

DROP TABLE IF EXISTS `spy_tax_set_tax`;

DROP TABLE IF EXISTS `spy_touch`;

DROP TABLE IF EXISTS `spy_touch_search`;

DROP TABLE IF EXISTS `spy_touch_storage`;

DROP TABLE IF EXISTS `spy_unauthenticated_customer_access`;

DROP TABLE IF EXISTS `spy_unauthenticated_customer_access_storage`;

DROP TABLE IF EXISTS `spy_url`;

DROP TABLE IF EXISTS `spy_url_redirect`;

DROP TABLE IF EXISTS `spy_url_redirect_storage`;

DROP TABLE IF EXISTS `spy_url_storage`;

DROP TABLE IF EXISTS `spy_user`;

DROP TABLE IF EXISTS `spy_user_archive`;

DROP TABLE IF EXISTS `spy_vault_deposit`;

DROP TABLE IF EXISTS `spy_weekday_schedule`;

DROP TABLE IF EXISTS `spy_wishlist`;

DROP TABLE IF EXISTS `spy_wishlist_item`;

CREATE TABLE `spy_test`
(
    `id_test` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_test`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
EOT;

        return array(
            'zed' => $connection_zed,
        );
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        $connection_zed = <<< 'EOT'

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `spy_test`;

CREATE TABLE `pyz_example_state_machine_item`
(
    `id_example_state_machine_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_state_machine_item_state` INTEGER,
    `name` VARCHAR(255),
    PRIMARY KEY (`id_example_state_machine_item`),
    INDEX `index-pyz_example_state_machine_item-fk_state_mach-bdf22e713652` (`fk_state_machine_item_state`),
    CONSTRAINT `pyz_example_state_machine_item-fk_state_machine_item_state`
        FOREIGN KEY (`fk_state_machine_item_state`)
        REFERENCES `spy_state_machine_item_state` (`id_state_machine_item_state`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_entity_rule`
(
    `id_acl_entity_rule` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_acl_entity_segment` INTEGER,
    `fk_acl_role` INTEGER NOT NULL,
    `entity` VARCHAR(255) NOT NULL,
    `permission_mask` INTEGER NOT NULL,
    `scope` TINYINT NOT NULL,
    PRIMARY KEY (`id_acl_entity_rule`),
    INDEX `spy_acl_entity_rule-fi_acl_role` (`fk_acl_role`),
    INDEX `spy_acl_entity_rule-fi_acl_entity_segment` (`fk_acl_entity_segment`),
    CONSTRAINT `spy_acl_entity_rule-fk_acl_entity_segment`
        FOREIGN KEY (`fk_acl_entity_segment`)
        REFERENCES `spy_acl_entity_segment` (`id_acl_entity_segment`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_acl_entity_rule-fk_acl_role`
        FOREIGN KEY (`fk_acl_role`)
        REFERENCES `spy_acl_role` (`id_acl_role`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_entity_segment`
(
    `id_acl_entity_segment` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_acl_entity_segment`),
    UNIQUE INDEX `spy_acl_entity_segment_reference` (`reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_entity_segment_merchant`
(
    `id_acl_entity_segment_merchant` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `fk_acl_entity_segment` INTEGER NOT NULL,
    PRIMARY KEY (`id_acl_entity_segment_merchant`),
    UNIQUE INDEX `acl_entity_segment_merchant-fk_merchant-fk_acl_entity_segment-un` (`fk_merchant`, `fk_acl_entity_segment`),
    INDEX `spy_acl_entity_segment_merchant-fi_acl_entity_segment` (`fk_acl_entity_segment`),
    CONSTRAINT `spy_acl_entity_segment_merchant-fk_acl_entity_segment`
        FOREIGN KEY (`fk_acl_entity_segment`)
        REFERENCES `spy_acl_entity_segment` (`id_acl_entity_segment`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_acl_entity_segment_merchant-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_entity_segment_merchant_user`
(
    `id_acl_entity_segment_merchant_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant_user` INTEGER NOT NULL,
    `fk_acl_entity_segment` INTEGER NOT NULL,
    PRIMARY KEY (`id_acl_entity_segment_merchant_user`),
    UNIQUE INDEX `acl_entity_segment_merchant_user-fk_merchant_user-fk_acl_entity_` (`fk_merchant_user`, `fk_acl_entity_segment`),
    INDEX `spy_acl_entity_segment_merchant_user-fi_acl_entity_segment` (`fk_acl_entity_segment`),
    CONSTRAINT `spy_acl_entity_segment_merchant_user-fk_acl_entity_segment`
        FOREIGN KEY (`fk_acl_entity_segment`)
        REFERENCES `spy_acl_entity_segment` (`id_acl_entity_segment`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_acl_entity_segment_merchant_user-fk_merchant_user`
        FOREIGN KEY (`fk_merchant_user`)
        REFERENCES `spy_merchant_user` (`id_merchant_user`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_group`
(
    `id_acl_group` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_acl_group`),
    UNIQUE INDEX `spy_acl_group-name` (`name`),
    UNIQUE INDEX `spy_acl_group-unique-reference` (`reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_group_archive`
(
    `id_acl_group` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `archived_at` DATETIME,
    PRIMARY KEY (`id_acl_group`),
    INDEX `spy_acl_group_archive_i_d94269` (`name`),
    INDEX `spy_acl_group_archive_i_d6e8ac` (`reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_groups_has_roles`
(
    `fk_acl_group` INTEGER NOT NULL,
    `fk_acl_role` INTEGER NOT NULL,
    PRIMARY KEY (`fk_acl_group`,`fk_acl_role`),
    INDEX `spy_acl_groups_has_roles-fi_acl_role` (`fk_acl_role`),
    CONSTRAINT `spy_acl_groups_has_roles-fk_acl_group`
        FOREIGN KEY (`fk_acl_group`)
        REFERENCES `spy_acl_group` (`id_acl_group`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_acl_groups_has_roles-fk_acl_role`
        FOREIGN KEY (`fk_acl_role`)
        REFERENCES `spy_acl_role` (`id_acl_role`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_role`
(
    `id_acl_role` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_acl_role`),
    UNIQUE INDEX `spy_acl_role-name` (`name`),
    UNIQUE INDEX `spy_acl_role-reference` (`reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_role_archive`
(
    `id_acl_role` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `archived_at` DATETIME,
    PRIMARY KEY (`id_acl_role`),
    INDEX `spy_acl_role_archive_i_d94269` (`name`),
    INDEX `spy_acl_role_archive_i_d6e8ac` (`reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_rule`
(
    `id_acl_rule` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_acl_role` INTEGER NOT NULL,
    `action` VARCHAR(45) NOT NULL,
    `bundle` VARCHAR(45) NOT NULL,
    `controller` VARCHAR(45) NOT NULL,
    `type` TINYINT(10) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_acl_rule`),
    INDEX `spy_acl_rule-fi_acl_role` (`fk_acl_role`),
    CONSTRAINT `spy_acl_rule-fk_acl_role`
        FOREIGN KEY (`fk_acl_role`)
        REFERENCES `spy_acl_role` (`id_acl_role`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_rule_archive`
(
    `id_acl_rule` INTEGER NOT NULL,
    `fk_acl_role` INTEGER NOT NULL,
    `action` VARCHAR(45) NOT NULL,
    `bundle` VARCHAR(45) NOT NULL,
    `controller` VARCHAR(45) NOT NULL,
    `type` TINYINT(10) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `archived_at` DATETIME,
    PRIMARY KEY (`id_acl_rule`),
    INDEX `spy_acl_rule-fi_acl_role` (`fk_acl_role`)
) ENGINE=InnoDB;

CREATE TABLE `spy_acl_user_has_group`
(
    `fk_acl_group` INTEGER NOT NULL,
    `fk_user` INTEGER NOT NULL,
    PRIMARY KEY (`fk_acl_group`,`fk_user`),
    INDEX `spy_acl_user_has_group-fi_user` (`fk_user`),
    CONSTRAINT `spy_acl_user_has_group-fk_acl_group`
        FOREIGN KEY (`fk_acl_group`)
        REFERENCES `spy_acl_group` (`id_acl_group`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_acl_user_has_group-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_auth_reset_password`
(
    `id_auth_reset_password` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_user` INTEGER NOT NULL,
    `code` VARCHAR(35) NOT NULL,
    `status` TINYINT(10) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_auth_reset_password`,`fk_user`),
    UNIQUE INDEX `spy_auth_reset_password-code` (`code`),
    INDEX `spy_auth_reset_password-fi_user` (`fk_user`),
    CONSTRAINT `spy_auth_reset_password-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_auth_reset_password_archive`
(
    `id_auth_reset_password` INTEGER NOT NULL,
    `fk_user` INTEGER NOT NULL,
    `code` VARCHAR(35) NOT NULL,
    `status` TINYINT(10) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `archived_at` DATETIME,
    PRIMARY KEY (`id_auth_reset_password`,`fk_user`),
    INDEX `spy_auth_reset_password-fi_user` (`fk_user`),
    INDEX `spy_auth_reset_password_archive_i_4db226` (`code`)
) ENGINE=InnoDB;

CREATE TABLE `spy_availability`
(
    `id_availability` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_availability_abstract` INTEGER NOT NULL,
    `fk_store` INTEGER,
    `is_never_out_of_stock` TINYINT(1) DEFAULT 0,
    `quantity` DECIMAL(20,10) NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_availability`),
    UNIQUE INDEX `spy_availability-sku` (`sku`, `fk_store`),
    INDEX `index-spy_availability-fk_availability_abstract` (`fk_availability_abstract`),
    INDEX `index-spy_availability-fk_store` (`fk_store`),
    CONSTRAINT `spy_availability-fk_spy_availability_abstract`
        FOREIGN KEY (`fk_availability_abstract`)
        REFERENCES `spy_availability_abstract` (`id_availability_abstract`),
    CONSTRAINT `spy_availability-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_availability_abstract`
(
    `id_availability_abstract` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_store` INTEGER,
    `abstract_sku` VARCHAR(255) NOT NULL,
    `quantity` DECIMAL(20,10) DEFAULT 0.0000000000 NOT NULL,
    PRIMARY KEY (`id_availability_abstract`),
    UNIQUE INDEX `spy_availability_abstract-sku` (`abstract_sku`, `fk_store`),
    INDEX `index-spy_availability_abstract-fk_store` (`fk_store`),
    CONSTRAINT `spy_availability_abstract-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_availability_notification_subscription`
(
    `id_availability_notification_subscription` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    `customer_reference` VARCHAR(255),
    `email` VARCHAR(255) NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    `subscription_key` VARCHAR(150) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_availability_notification_subscription`),
    UNIQUE INDEX `spy_availability_notification_subscription-sku-email-store` (`email`, `sku`, `fk_store`),
    UNIQUE INDEX `spy_availability_notification_subscription-unq-subscription_key` (`subscription_key`),
    INDEX `spy_availability_notification_subscription-subscription_key` (`subscription_key`),
    INDEX `spy_availability_notification_subscription-sku` (`email`, `sku`, `fk_store`),
    INDEX `index-spy_availability_notification_subscription-fk_locale` (`fk_locale`),
    INDEX `spy_availability_notification_subscription-fi_store` (`fk_store`),
    CONSTRAINT `spy_availability_notification_subscription-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_availability_notification_subscription-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_availability_storage`
(
    `id_availability_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_availability_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_availability_storage`),
    UNIQUE INDEX `spy_availability_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_availability_storage-unique-key` (`key`),
    INDEX `spy_availability_storage-fk_product_abstract` (`fk_product_abstract`),
    INDEX `spy_availability_storage-fk_availability_abstract` (`fk_availability_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category`
(
    `id_category` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category_template` INTEGER NOT NULL,
    `category_key` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1,
    `is_clickable` TINYINT(1) DEFAULT 1,
    `is_in_menu` TINYINT(1) DEFAULT 1,
    `is_searchable` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id_category`),
    UNIQUE INDEX `spy_category-category_key` (`category_key`),
    INDEX `index-spy_category-fk_category_template` (`fk_category_template`),
    CONSTRAINT `spy_category_fk_7e2c46`
        FOREIGN KEY (`fk_category_template`)
        REFERENCES `spy_category_template` (`id_category_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_attribute`
(
    `id_category_attribute` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `fk_locale` INTEGER NOT NULL,
    `category_image_name` VARCHAR(255),
    `meta_description` TEXT,
    `meta_keywords` TEXT,
    `meta_title` TEXT,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_attribute`),
    INDEX `index-spy_category_attribute-fk_locale` (`fk_locale`),
    INDEX `index-spy_category_attribute-fk_category` (`fk_category`),
    CONSTRAINT `spy_category_attribute_fk_12b6d0`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_category_attribute_fk_723c48`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_closure_table`
(
    `id_category_closure_table` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category_node` INTEGER NOT NULL,
    `fk_category_node_descendant` INTEGER NOT NULL,
    `depth` INTEGER NOT NULL,
    PRIMARY KEY (`id_category_closure_table`),
    INDEX `index-spy_category_closure_table-fk_category_node` (`fk_category_node`),
    INDEX `index-spy_category_closure_table-fk_category_node_descendant` (`fk_category_node_descendant`),
    CONSTRAINT `spy_category_closure_table_fk_a3476a`
        FOREIGN KEY (`fk_category_node_descendant`)
        REFERENCES `spy_category_node` (`id_category_node`),
    CONSTRAINT `spy_category_closure_table_fk_d3e44d`
        FOREIGN KEY (`fk_category_node`)
        REFERENCES `spy_category_node` (`id_category_node`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_image`
(
    `id_category_image` INTEGER NOT NULL AUTO_INCREMENT,
    `external_url_large` VARCHAR(2048),
    `external_url_small` VARCHAR(2048),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_image`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_image_set`
(
    `id_category_image_set` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER,
    `fk_locale` INTEGER,
    `name` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_image_set`),
    INDEX `spy_category_image_set-index-fk_category` (`fk_category`),
    INDEX `index-spy_category_image_set-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_category_image_set-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`),
    CONSTRAINT `spy_category_image_set-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_image_set_to_category_image`
(
    `id_category_image_set_to_category_image` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category_image` INTEGER NOT NULL,
    `fk_category_image_set` INTEGER NOT NULL,
    `sort_order` INTEGER NOT NULL,
    PRIMARY KEY (`id_category_image_set_to_category_image`),
    UNIQUE INDEX `fk_category_image_set-fk_category_image` (`fk_category_image_set`, `fk_category_image`),
    INDEX `index-spy_category_image_set_to_category_image-fk_-85872f21dafe` (`fk_category_image_set`),
    INDEX `index-spy_category_image_set_to_category_image-fk_-7c0ba662126c` (`fk_category_image`),
    CONSTRAINT `spy_category_image_set_to_category_image-fk_category_image`
        FOREIGN KEY (`fk_category_image`)
        REFERENCES `spy_category_image` (`id_category_image`),
    CONSTRAINT `spy_category_image_set_to_category_image-fk_category_image_set`
        FOREIGN KEY (`fk_category_image_set`)
        REFERENCES `spy_category_image_set` (`id_category_image_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_image_storage`
(
    `id_category_image_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `locale` VARCHAR(5) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_image_storage`),
    UNIQUE INDEX `spy_category_image_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_category_image_storage-fk_category` (`fk_category`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_node`
(
    `id_category_node` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `fk_parent_category_node` INTEGER,
    `is_main` TINYINT(1) DEFAULT 0,
    `is_root` TINYINT(1) DEFAULT 0,
    `node_order` INTEGER DEFAULT 0,
    PRIMARY KEY (`id_category_node`),
    INDEX `spy_category_node_i_8f153e` (`node_order`),
    INDEX `index-spy_category_node-fk_parent_category_node` (`fk_parent_category_node`),
    INDEX `index-spy_category_node-fk_category` (`fk_category`),
    CONSTRAINT `spy_category_node_fk_723c48`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`),
    CONSTRAINT `spy_category_node_fk_b54a47`
        FOREIGN KEY (`fk_parent_category_node`)
        REFERENCES `spy_category_node` (`id_category_node`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_node_page_search`
(
    `id_category_node_page_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_category_node` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_node_page_search`),
    UNIQUE INDEX `spy_category_node_page_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_category_node_page_search-unique-key` (`key`),
    INDEX `spy_category_node_page_search-fk_category_node` (`fk_category_node`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_node_storage`
(
    `id_category_node_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_category_node` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_node_storage`),
    UNIQUE INDEX `spy_category_node_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_category_node_storage-unique-key` (`key`),
    INDEX `spy_category_node_storage-fk_category_node` (`fk_category_node`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_store`
(
    `id_category_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_category_store`),
    UNIQUE INDEX `spy_category_store-unique-fk_category-fk_store` (`fk_category`, `fk_store`),
    INDEX `index-spy_category_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_category_store-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_category_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_category_template`
(
    `id_category_template` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `template_path` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_category_template`),
    UNIQUE INDEX `spy_category_template-template_path` (`template_path`)
) ENGINE=InnoDB;

CREATE TABLE `spy_category_tree_storage`
(
    `id_category_tree_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_category_tree_storage`),
    UNIQUE INDEX `spy_category_tree_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_category_tree_storage-unique-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block`
(
    `id_cms_block` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_template` INTEGER,
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `key` VARCHAR(255) NOT NULL COMMENT 'Identifier for existing entities. It should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    PRIMARY KEY (`id_cms_block`),
    UNIQUE INDEX `spy_cms_block-name-uq` (`name`),
    UNIQUE INDEX `spy_cms_block-key` (`key`),
    INDEX `index-spy_cms_block-fk_template` (`fk_template`),
    CONSTRAINT `spy_cms_block-fk_template`
        FOREIGN KEY (`fk_template`)
        REFERENCES `spy_cms_block_template` (`id_cms_block_template`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_category_connector`
(
    `id_cms_block_category_connector` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `fk_category_template` INTEGER NOT NULL,
    `fk_cms_block` INTEGER NOT NULL,
    `fk_cms_block_category_position` INTEGER,
    PRIMARY KEY (`id_cms_block_category_connector`),
    INDEX `spy_cms_block_category-connector-fk_cms_block` (`fk_cms_block`),
    INDEX `spy_cms_block_category-connector-fk_category` (`fk_category`),
    INDEX `index-spy_cms_block_category_connector-fk_category_template` (`fk_category_template`),
    INDEX `index-spy_cms_block_category_connector-fk_cms_bloc-c9abf4e4f9b3` (`fk_cms_block_category_position`),
    CONSTRAINT `spy_cms_block_category_connector-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_block_category_connector-fk_category_template`
        FOREIGN KEY (`fk_category_template`)
        REFERENCES `spy_category_template` (`id_category_template`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_block_category_connector-fk_cms_block`
        FOREIGN KEY (`fk_cms_block`)
        REFERENCES `spy_cms_block` (`id_cms_block`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_block_category_connector-fk_cms_block_category_position`
        FOREIGN KEY (`fk_cms_block_category_position`)
        REFERENCES `spy_cms_block_category_position` (`id_cms_block_category_position`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_category_position`
(
    `id_cms_block_category_position` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_cms_block_category_position`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_category_storage`
(
    `id_cms_block_category_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_block_category_storage`),
    UNIQUE INDEX `spy_cms_block_category_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_cms_block_category_storage-unique-key` (`key`),
    INDEX `spy_cms_block_category_storage-fk_category` (`fk_category`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_glossary_key_mapping`
(
    `id_cms_block_glossary_key_mapping` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_block` INTEGER NOT NULL,
    `fk_glossary_key` INTEGER NOT NULL,
    `placeholder` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_cms_block_glossary_key_mapping`),
    UNIQUE INDEX `spy_cms_block_glossary_key_mapping-unique-fk_cms_block` (`fk_cms_block`, `placeholder`),
    INDEX `index-spy_cms_block_glossary_key_mapping-placeholder` (`placeholder`),
    INDEX `index-spy_cms_block_glossary_key_mapping-fk_glossary_key` (`fk_glossary_key`),
    CONSTRAINT `spy_cms_block_glossary_key_mapping-fk_cms_block`
        FOREIGN KEY (`fk_cms_block`)
        REFERENCES `spy_cms_block` (`id_cms_block`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_block_glossary_key_mapping-fk_glossary_key`
        FOREIGN KEY (`fk_glossary_key`)
        REFERENCES `spy_glossary_key` (`id_glossary_key`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_product_connector`
(
    `id_cms_block_product_connector` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_block` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    PRIMARY KEY (`id_cms_block_product_connector`),
    INDEX `spy_cms_block_product_connector-fk_cms_block` (`fk_cms_block`),
    INDEX `spy_cms_block_product_connector-fk_product_abstract` (`fk_product_abstract`),
    CONSTRAINT `spy_cms_block_product_connector-fk_cms_block`
        FOREIGN KEY (`fk_cms_block`)
        REFERENCES `spy_cms_block` (`id_cms_block`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_block_product_connector-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_product_storage`
(
    `id_cms_block_product_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_block_product_storage`),
    UNIQUE INDEX `spy_cms_block_product_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_cms_block_product_storage-unique-key` (`key`),
    INDEX `spy_cms_block_product_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_storage`
(
    `id_cms_block_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_cms_block` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `cms_block_key` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_block_storage`),
    UNIQUE INDEX `spy_cms_block_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_cms_block_storage-unique-key` (`key`),
    INDEX `spy_cms_block_storage-fk_cms_block` (`fk_cms_block`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_store`
(
    `id_cms_block_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_block` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_cms_block_store`),
    UNIQUE INDEX `spy_cms_block_store-fk_cms_block-fk_store` (`fk_cms_block`, `fk_store`),
    INDEX `index-spy_cms_block_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_cms_block_store-fk_cms_block`
        FOREIGN KEY (`fk_cms_block`)
        REFERENCES `spy_cms_block` (`id_cms_block`),
    CONSTRAINT `spy_cms_block_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_block_template`
(
    `id_cms_block_template` INTEGER NOT NULL AUTO_INCREMENT,
    `template_name` VARCHAR(255) NOT NULL,
    `template_path` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_cms_block_template`),
    UNIQUE INDEX `spy_cms_block_template-unique-template_path` (`template_path`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_glossary_key_mapping`
(
    `id_cms_glossary_key_mapping` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_glossary_key` INTEGER NOT NULL,
    `fk_page` INTEGER NOT NULL,
    `placeholder` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_cms_glossary_key_mapping`),
    UNIQUE INDEX `spy_cms_glossary_key_mapping-unique-fk_page` (`fk_page`, `placeholder`),
    INDEX `index-spy_cms_glossary_key_mapping-fk_glossary_key` (`fk_glossary_key`),
    CONSTRAINT `spy_cms_glossary_key_mapping-fk_glossary_key`
        FOREIGN KEY (`fk_glossary_key`)
        REFERENCES `spy_glossary_key` (`id_glossary_key`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_glossary_key_mapping-fk_page`
        FOREIGN KEY (`fk_page`)
        REFERENCES `spy_cms_page` (`id_cms_page`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_page`
(
    `id_cms_page` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_template` INTEGER NOT NULL,
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `is_searchable` TINYINT(1) DEFAULT 0 NOT NULL,
    `page_key` VARCHAR(32),
    `uuid` VARCHAR(36),
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    PRIMARY KEY (`id_cms_page`),
    UNIQUE INDEX `spy_cms_page-unique-uuid` (`uuid`),
    INDEX `spy_cms_page_i_615cb5` (`page_key`),
    INDEX `index-spy_cms_page-fk_template` (`fk_template`),
    CONSTRAINT `spy_cms_page-fk_template`
        FOREIGN KEY (`fk_template`)
        REFERENCES `spy_cms_template` (`id_cms_template`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_page_localized_attributes`
(
    `id_cms_page_localized_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_page` INTEGER NOT NULL,
    `fk_locale` INTEGER NOT NULL,
    `meta_description` TEXT,
    `meta_keywords` TEXT,
    `meta_title` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_page_localized_attributes`),
    UNIQUE INDEX `spy_cms_page_localized_attributes-unique-fk_cms_page` (`fk_cms_page`, `fk_locale`),
    INDEX `index-spy_cms_page_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_cms_page_localized_attributes-fk_cms_page`
        FOREIGN KEY (`fk_cms_page`)
        REFERENCES `spy_cms_page` (`id_cms_page`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_page_localized_attributes-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_page_search`
(
    `id_cms_page_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_cms_page` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_page_search`),
    UNIQUE INDEX `spy_cms_page_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_cms_page_search-unique-key` (`key`),
    INDEX `spy_cms_page_search-fk_cms_page` (`fk_cms_page`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_page_storage`
(
    `id_cms_page_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_cms_page` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_page_storage`),
    UNIQUE INDEX `spy_cms_page_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_cms_page_storage-unique-key` (`key`),
    INDEX `spy_cms_page_storage-fk_cms_page` (`fk_cms_page`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_page_store`
(
    `id_cms_page_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_page` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_cms_page_store`),
    UNIQUE INDEX `spy_cms_page_store-fk_cms_page-fk_store` (`fk_cms_page`, `fk_store`),
    INDEX `index-spy_cms_page_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_cms_page_store-fk_cms_page`
        FOREIGN KEY (`fk_cms_page`)
        REFERENCES `spy_cms_page` (`id_cms_page`),
    CONSTRAINT `spy_cms_page_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_slot`
(
    `id_cms_slot` INTEGER NOT NULL AUTO_INCREMENT,
    `content_provider_type` VARCHAR(64) NOT NULL,
    `description` TEXT NOT NULL,
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `key` VARCHAR(255) NOT NULL COMMENT 'Identifier for existing entities. It should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_cms_slot`),
    UNIQUE INDEX `spy_cms_slot-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_slot_block`
(
    `id_cms_slot_block` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_cms_block` INTEGER NOT NULL,
    `fk_cms_slot` INTEGER NOT NULL,
    `fk_cms_slot_template` INTEGER NOT NULL,
    `conditions` TEXT,
    `position` INTEGER NOT NULL,
    PRIMARY KEY (`id_cms_slot_block`),
    UNIQUE INDEX `spy_cms_slot_block-slot-block` (`fk_cms_slot_template`, `fk_cms_slot`, `fk_cms_block`, `position`),
    INDEX `index-spy_cms_slot_block-fk_cms_slot` (`fk_cms_slot`),
    INDEX `index-spy_cms_slot_block-fk_cms_block` (`fk_cms_block`),
    CONSTRAINT `spy_cms_slot_block-fk_cms_block`
        FOREIGN KEY (`fk_cms_block`)
        REFERENCES `spy_cms_block` (`id_cms_block`),
    CONSTRAINT `spy_cms_slot_block-fk_cms_slot`
        FOREIGN KEY (`fk_cms_slot`)
        REFERENCES `spy_cms_slot` (`id_cms_slot`),
    CONSTRAINT `spy_cms_slot_block-fk_cms_slot_template`
        FOREIGN KEY (`fk_cms_slot_template`)
        REFERENCES `spy_cms_slot_template` (`id_cms_slot_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_slot_block_storage`
(
    `id_cms_slot_block_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_slot` INTEGER NOT NULL,
    `fk_cms_slot_template` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `slot_template_key` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_slot_block_storage`),
    UNIQUE INDEX `spy_cms_slot_block_storage-unique-key` (`key`),
    UNIQUE INDEX `spy_cms_slot_block_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_cms_slot_block_storage-fk_cms_slot-fk_cms_slot_template` (`fk_cms_slot`, `fk_cms_slot_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_slot_storage`
(
    `id_cms_slot_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `cms_slot_key` VARCHAR(255) NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    PRIMARY KEY (`id_cms_slot_storage`),
    UNIQUE INDEX `spy_cms_slot_storage-cms_slot_key` (`cms_slot_key`),
    UNIQUE INDEX `spy_cms_slot_storage-unique-alias-keys` (`alias_keys`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_slot_template`
(
    `id_cms_slot_template` INTEGER NOT NULL AUTO_INCREMENT,
    `description` TEXT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `path` TEXT NOT NULL COMMENT 'Identifier for existing entities. It should never be changed.',
    `path_hash` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id_cms_slot_template`),
    UNIQUE INDEX `spy_cms_slot_template-path_hash` (`path_hash`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_slot_to_cms_slot_template`
(
    `id_cms_slot_to_cms_slot_template` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_slot` INTEGER NOT NULL,
    `fk_cms_slot_template` INTEGER NOT NULL,
    PRIMARY KEY (`id_cms_slot_to_cms_slot_template`),
    UNIQUE INDEX `spy_cms_slot_to_cms_slot_template-template-slot` (`fk_cms_slot_template`, `fk_cms_slot`),
    INDEX `index-spy_cms_slot_to_cms_slot_template-fk_cms_slot` (`fk_cms_slot`),
    CONSTRAINT `spy_cms_slot_to_cms_slot_template-fk_cms_slot`
        FOREIGN KEY (`fk_cms_slot`)
        REFERENCES `spy_cms_slot` (`id_cms_slot`),
    CONSTRAINT `spy_cms_slot_to_cms_slot_template-fk_cms_slot_template`
        FOREIGN KEY (`fk_cms_slot_template`)
        REFERENCES `spy_cms_slot_template` (`id_cms_slot_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_template`
(
    `id_cms_template` INTEGER NOT NULL AUTO_INCREMENT,
    `template_name` VARCHAR(255) NOT NULL,
    `template_path` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_cms_template`),
    UNIQUE INDEX `spy_cms_template-unique-template_path` (`template_path`),
    INDEX `spy_cms_template-template_path` (`template_path`)
) ENGINE=InnoDB;

CREATE TABLE `spy_cms_version`
(
    `id_cms_version` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_cms_page` INTEGER NOT NULL,
    `fk_user` INTEGER,
    `data` TEXT,
    `version` INTEGER NOT NULL,
    `version_name` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_cms_version`),
    INDEX `spy_cms_version-index-fk_cms_page_version` (`fk_cms_page`, `version`),
    INDEX `index-spy_cms_version-fk_user` (`fk_user`),
    CONSTRAINT `spy_cms_version-fk_cms_page`
        FOREIGN KEY (`fk_cms_page`)
        REFERENCES `spy_cms_page` (`id_cms_page`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_cms_version-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_comment`
(
    `id_comment` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_comment_thread` INTEGER NOT NULL,
    `fk_customer` INTEGER,
    `is_deleted` TINYINT(1) DEFAULT 0,
    `is_updated` TINYINT(1) DEFAULT 0,
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `message` VARCHAR(5000) NOT NULL,
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_comment`),
    UNIQUE INDEX `spy_comment-unique-uuid` (`uuid`),
    INDEX `index-spy_comment-fk_customer` (`fk_customer`),
    INDEX `index-spy_comment_thread-fk_comment_thread` (`fk_comment_thread`),
    CONSTRAINT `spy_comment-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`),
    CONSTRAINT `spy_comment_thread-fk_comment_thread`
        FOREIGN KEY (`fk_comment_thread`)
        REFERENCES `spy_comment_thread` (`id_comment_thread`)
) ENGINE=InnoDB;

CREATE TABLE `spy_comment_tag`
(
    `id_comment_tag` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_comment_tag`),
    UNIQUE INDEX `spy_comment_tag-name` (`name`),
    UNIQUE INDEX `spy_comment_tag-unique-uuid` (`uuid`)
) ENGINE=InnoDB;

CREATE TABLE `spy_comment_thread`
(
    `id_comment_thread` INTEGER NOT NULL AUTO_INCREMENT,
    `owner_id` INTEGER NOT NULL,
    `owner_type` VARCHAR(64) NOT NULL,
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_comment_thread`),
    UNIQUE INDEX `spy_comment_thread-owner_type-owner_id` (`owner_type`, `owner_id`),
    UNIQUE INDEX `spy_comment_thread-unique-uuid` (`uuid`)
) ENGINE=InnoDB;

CREATE TABLE `spy_comment_to_comment_tag`
(
    `fk_comment` INTEGER NOT NULL,
    `fk_comment_tag` INTEGER NOT NULL,
    PRIMARY KEY (`fk_comment`,`fk_comment_tag`),
    INDEX `spy_comment_to_comment_tag-fi_comment_tag` (`fk_comment_tag`),
    CONSTRAINT `spy_comment_to_comment_tag-fk_comment`
        FOREIGN KEY (`fk_comment`)
        REFERENCES `spy_comment` (`id_comment`),
    CONSTRAINT `spy_comment_to_comment_tag-fk_comment_tag`
        FOREIGN KEY (`fk_comment_tag`)
        REFERENCES `spy_comment_tag` (`id_comment_tag`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company`
(
    `id_company` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_type` INTEGER,
    `is_active` TINYINT(1) DEFAULT 0,
    `key` VARCHAR(255) COMMENT 'Key is used for DataImport as identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `status` TINYINT(8) DEFAULT 0 NOT NULL,
    `uuid` VARCHAR(36),
    PRIMARY KEY (`id_company`),
    UNIQUE INDEX `spy_company-unique-uuid` (`uuid`),
    INDEX `index-spy_company-fk_company_type` (`fk_company_type`),
    CONSTRAINT `spy_company-fk_company_type`
        FOREIGN KEY (`fk_company_type`)
        REFERENCES `spy_company_type` (`id_company_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_business_unit`
(
    `id_company_business_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER NOT NULL,
    `fk_parent_company_business_unit` INTEGER,
    `bic` VARCHAR(255),
    `default_billing_address` INTEGER,
    `email` VARCHAR(255),
    `external_url` VARCHAR(255),
    `iban` VARCHAR(255),
    `key` VARCHAR(255) COMMENT 'Key is used for DataImport as identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255),
    `uuid` VARCHAR(36),
    PRIMARY KEY (`id_company_business_unit`),
    UNIQUE INDEX `spy_company_business_unit-unique-key` (`key`),
    UNIQUE INDEX `spy_company_business_unit-unique-uuid` (`uuid`),
    INDEX `index-spy_company_business_unit-fk_company` (`fk_company`),
    INDEX `index-spy_company_business_unit-fk_parent_company_business_unit` (`fk_parent_company_business_unit`),
    INDEX `index-spy_company_business_unit-default_billing_address` (`default_billing_address`),
    CONSTRAINT `spy_co_b_u-default_billing_address`
        FOREIGN KEY (`default_billing_address`)
        REFERENCES `spy_company_unit_address` (`id_company_unit_address`)
        ON DELETE SET NULL,
    CONSTRAINT `spy_company_business_unit-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`),
    CONSTRAINT `spy_company_business_unit-fk_parent_company_business_unit`
        FOREIGN KEY (`fk_parent_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_role`
(
    `id_company_role` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER NOT NULL,
    `is_default` TINYINT(1) DEFAULT 0 NOT NULL,
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(36),
    PRIMARY KEY (`id_company_role`),
    UNIQUE INDEX `spy_company_role-unique-uuid` (`uuid`),
    INDEX `index-spy_company_role-fk_company` (`fk_company`),
    CONSTRAINT `spy_company_role-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_role_to_company_user`
(
    `id_company_role_to_company_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_role` INTEGER NOT NULL,
    `fk_company_user` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_company_role_to_company_user`),
    UNIQUE INDEX `fk_company_role-fk_company_user` (`fk_company_role`, `fk_company_user`),
    INDEX `index-spy_company_role_to_company_user-fk_company_user` (`fk_company_user`),
    CONSTRAINT `spy_company_role_to_company_user-fk_company_role`
        FOREIGN KEY (`fk_company_role`)
        REFERENCES `spy_company_role` (`id_company_role`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_company_role_to_company_user-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_company_role_to_permission`
(
    `id_company_role_to_permission` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_role` INTEGER NOT NULL,
    `fk_permission` INTEGER NOT NULL,
    `configuration` TEXT NOT NULL,
    PRIMARY KEY (`id_company_role_to_permission`,`fk_company_role`,`fk_permission`),
    INDEX `spy_company_role_to_permission-fi_permission` (`fk_permission`),
    INDEX `spy_company_role_to_permission-fi_company_role` (`fk_company_role`),
    CONSTRAINT `spy_company_role_to_permission-fk_company_role`
        FOREIGN KEY (`fk_company_role`)
        REFERENCES `spy_company_role` (`id_company_role`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_company_role_to_permission-fk_permission`
        FOREIGN KEY (`fk_permission`)
        REFERENCES `spy_permission` (`id_permission`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_company_store`
(
    `id_company_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_company_store`),
    UNIQUE INDEX `spy_company_store-unique-company` (`fk_company`, `fk_store`),
    INDEX `index-spy_company_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_company_store-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`),
    CONSTRAINT `spy_company_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_supplier_to_product`
(
    `id_company_supplier_to_product` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER NOT NULL,
    `fk_product` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_company_supplier_to_product`),
    INDEX `index-spy_company_supplier_to_product-fk_company` (`fk_company`),
    INDEX `index-spy_company_supplier_to_product-fk_product` (`fk_product`),
    CONSTRAINT `spy_company_supplier_to_product-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_company_supplier_to_product-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_company_type`
(
    `id_company_type` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_company_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_unit_address`
(
    `id_company_unit_address` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER,
    `fk_country` INTEGER NOT NULL,
    `fk_region` INTEGER,
    `address1` VARCHAR(255),
    `address2` VARCHAR(255),
    `address3` VARCHAR(255),
    `city` VARCHAR(255),
    `comment` VARCHAR(255),
    `key` VARCHAR(255) COMMENT 'Key is used for DataImport as identifier for existing entities. This should never be changed.',
    `phone` VARCHAR(255),
    `uuid` VARCHAR(36),
    `zip_code` VARCHAR(15),
    PRIMARY KEY (`id_company_unit_address`),
    UNIQUE INDEX `spy_company_unit_address-unique-uuid` (`uuid`),
    UNIQUE INDEX `spy_company_unit_address-unique-key` (`key`),
    INDEX `index-spy_company_unit_address-fk_country` (`fk_country`),
    INDEX `index-spy_company_unit_address-fk_region` (`fk_region`),
    INDEX `index-spy_company_unit_address-fk_company` (`fk_company`),
    CONSTRAINT `spy_company_unit_address-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`),
    CONSTRAINT `spy_company_unit_address-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`),
    CONSTRAINT `spy_company_unit_address-fk_region`
        FOREIGN KEY (`fk_region`)
        REFERENCES `spy_region` (`id_region`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_unit_address_label`
(
    `id_company_unit_address_label` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_company_unit_address_label`),
    UNIQUE INDEX `spy_company_unit_address_label-unique-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_unit_address_label_to_company_unit_address`
(
    `id_company_unit_address_label_to_company_unit_address` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_unit_address` INTEGER NOT NULL,
    `fk_company_unit_address_label` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_company_unit_address_label_to_company_unit_address`),
    INDEX `index-spy_company_unit_address_label_to_company_un-01fe071d8046` (`fk_company_unit_address`),
    INDEX `index-spy_company_unit_address_label_to_company_un-a6bd4742c848` (`fk_company_unit_address_label`),
    CONSTRAINT `spy_c_u_a_l_to_c_u_a-fk_company_unit_address`
        FOREIGN KEY (`fk_company_unit_address`)
        REFERENCES `spy_company_unit_address` (`id_company_unit_address`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_c_u_a_l_to_c_u_a-fk_company_unit_address_label`
        FOREIGN KEY (`fk_company_unit_address_label`)
        REFERENCES `spy_company_unit_address_label` (`id_company_unit_address_label`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_company_unit_address_to_company_business_unit`
(
    `id_company_unit_address_to_company_business_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_business_unit` INTEGER NOT NULL,
    `fk_company_unit_address` INTEGER NOT NULL,
    PRIMARY KEY (`id_company_unit_address_to_company_business_unit`),
    INDEX `index-spy_company_unit_address_to_company_business-bbbe287ce824` (`fk_company_business_unit`),
    INDEX `index-spy_company_unit_address_to_company_business-67784ebe75fa` (`fk_company_unit_address`),
    CONSTRAINT `spy_co_u_a_to_co_b_u-fk_co_b_u`
        FOREIGN KEY (`fk_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_co_u_a_to_co_bu_u-fk_co_u_a`
        FOREIGN KEY (`fk_company_unit_address`)
        REFERENCES `spy_company_unit_address` (`id_company_unit_address`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_company_user`
(
    `id_company_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER NOT NULL,
    `fk_company_business_unit` INTEGER,
    `fk_customer` INTEGER NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `is_default` TINYINT(1) DEFAULT 0 NOT NULL,
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `uuid` VARCHAR(36),
    PRIMARY KEY (`id_company_user`),
    UNIQUE INDEX `spy_company_user-unique-uuid` (`uuid`),
    INDEX `index-spy_company_user-fk_company_business_unit` (`fk_company_business_unit`),
    INDEX `index-spy_company_user-fk_company` (`fk_company`),
    INDEX `index-spy_company_user-fk_customer` (`fk_customer`),
    CONSTRAINT `spy_co_u-fk_company_business_unit`
        FOREIGN KEY (`fk_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`)
        ON DELETE SET NULL,
    CONSTRAINT `spy_company_user-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`),
    CONSTRAINT `spy_company_user-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_user_invitation`
(
    `id_company_user_invitation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_business_unit` INTEGER NOT NULL,
    `fk_company_user` INTEGER NOT NULL,
    `fk_company_user_invitation_status` INTEGER NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `first_name` VARCHAR(100) NOT NULL,
    `hash` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_company_user_invitation`),
    UNIQUE INDEX `spy_customer_email` (`email`),
    UNIQUE INDEX `spy_company_user_invitation_hash` (`hash`),
    INDEX `index-spy_company_user_invitation-fk_company_business_unit` (`fk_company_business_unit`),
    INDEX `index-spy_company_user_invitation-fk_company_user_-36f628f46148` (`fk_company_user_invitation_status`),
    INDEX `index-spy_company_user_invitation-fk_company_user` (`fk_company_user`),
    CONSTRAINT `spy_company_user_invitation-fk_company_business_unit`
        FOREIGN KEY (`fk_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`),
    CONSTRAINT `spy_company_user_invitation-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`),
    CONSTRAINT `spy_company_user_invitation-fk_company_user_invitation_status`
        FOREIGN KEY (`fk_company_user_invitation_status`)
        REFERENCES `spy_company_user_invitation_status` (`id_company_user_invitation_status`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_user_invitation_status`
(
    `id_company_user_invitation_status` INTEGER NOT NULL AUTO_INCREMENT,
    `status_key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_company_user_invitation_status`)
) ENGINE=InnoDB;

CREATE TABLE `spy_company_user_storage`
(
    `id_company_user_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_company_user` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_company_user_storage`),
    UNIQUE INDEX `spy_company_user_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_company_user_storage-unique-key` (`key`),
    INDEX `spy_company_user_storage-fk_company_user` (`fk_company_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_configurable_bundle_template`
(
    `id_configurable_bundle_template` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_configurable_bundle_template`),
    UNIQUE INDEX `spy_configurable_bundle_template-uuid` (`uuid`),
    UNIQUE INDEX `spy_configurable_bundle_template-unique-key` (`key`),
    INDEX `index-spy_configurable_bundle_template-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_configurable_bundle_template_image_storage`
(
    `id_configurable_bundle_template_image_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_configurable_bundle_template` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_configurable_bundle_template_image_storage`),
    UNIQUE INDEX `spy_configurable_bundle_template_image_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_configurable_bundle_template_image_storage-fk_c_b_t` (`fk_configurable_bundle_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_configurable_bundle_template_page_search`
(
    `id_configurable_bundle_template_page_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_configurable_bundle_template` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_configurable_bundle_template_page_search`),
    UNIQUE INDEX `spy_configurable_bundle_template_page_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_configurable_bundle_template_page_search-unique-key` (`key`),
    INDEX `spy_configurable_bundle_template_page_search-fk_configurable_bun` (`fk_configurable_bundle_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_configurable_bundle_template_slot`
(
    `id_configurable_bundle_template_slot` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_configurable_bundle_template` INTEGER NOT NULL,
    `fk_product_list` INTEGER,
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_configurable_bundle_template_slot`),
    UNIQUE INDEX `spy_configurable_bundle_template_slot-unique-key` (`key`),
    INDEX `spy_conf_bundle_template_slot-fk_conf_bundle_template` (`fk_configurable_bundle_template`),
    INDEX `spy_configurable_bundle_template_slot-fk_product_list` (`fk_product_list`),
    INDEX `index-spy_configurable_bundle_template_slot-name` (`name`),
    CONSTRAINT `spy_conf_bundle_template_slot-fk_conf_bundle_template`
        FOREIGN KEY (`fk_configurable_bundle_template`)
        REFERENCES `spy_configurable_bundle_template` (`id_configurable_bundle_template`),
    CONSTRAINT `spy_configurable_bundle_template_slot-fk_product_list`
        FOREIGN KEY (`fk_product_list`)
        REFERENCES `spy_product_list` (`id_product_list`)
) ENGINE=InnoDB;

CREATE TABLE `spy_configurable_bundle_template_storage`
(
    `id_configurable_bundle_template_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_configurable_bundle_template` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_configurable_bundle_template_storage`),
    UNIQUE INDEX `spy_configurable_bundle_template_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_configurable_bundle_template_storage-fk_c_b_t` (`fk_configurable_bundle_template`)
) ENGINE=InnoDB;

CREATE TABLE `spy_content`
(
    `id_content` INTEGER NOT NULL AUTO_INCREMENT,
    `content_term_key` VARCHAR(255) NOT NULL,
    `content_type_key` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `key` VARCHAR(255) NOT NULL COMMENT 'Identifier for existing entities. It should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_content`),
    UNIQUE INDEX `spy_content-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_content_localized`
(
    `id_content_localized` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_content` INTEGER NOT NULL,
    `fk_locale` INTEGER,
    `parameters` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_content_localized`),
    UNIQUE INDEX `fk_content_unique_fk_locale_unique` (`fk_content`, `fk_locale`),
    INDEX `index-spy_content_localized-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_content_localized-fk_content`
        FOREIGN KEY (`fk_content`)
        REFERENCES `spy_content` (`id_content`),
    CONSTRAINT `spy_content_localized-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
) ENGINE=InnoDB;

CREATE TABLE `spy_content_storage`
(
    `id_content_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_content` INTEGER NOT NULL,
    `content_key` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_content_storage`),
    UNIQUE INDEX `spy_content_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_content_storage-unique-key` (`key`),
    INDEX `spy_content_storage-content_key` (`content_key`),
    INDEX `spy_content_storage-fk_content` (`fk_content`)
) ENGINE=InnoDB;

CREATE TABLE `spy_country`
(
    `id_country` INTEGER NOT NULL AUTO_INCREMENT,
    `iso2_code` VARCHAR(2) NOT NULL,
    `iso3_code` VARCHAR(3),
    `name` VARCHAR(255),
    `postal_code_mandatory` TINYINT(1) DEFAULT 0,
    `postal_code_regex` VARCHAR(500),
    PRIMARY KEY (`id_country`),
    UNIQUE INDEX `spy_country-iso2_code` (`iso2_code`),
    UNIQUE INDEX `spy_country-iso3_code` (`iso3_code`)
) ENGINE=InnoDB;

CREATE TABLE `spy_currency`
(
    `id_currency` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `code` VARCHAR(5),
    `symbol` VARCHAR(255),
    PRIMARY KEY (`id_currency`)
) ENGINE=InnoDB;

CREATE TABLE `spy_customer`
(
    `id_customer` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER,
    `fk_user` INTEGER,
    `anonymized_at` DATETIME,
    `company` VARCHAR(100),
    `customer_reference` VARCHAR(255) NOT NULL,
    `date_of_birth` DATE,
    `default_billing_address` INTEGER,
    `default_shipping_address` INTEGER,
    `email` VARCHAR(255) NOT NULL,
    `first_name` VARCHAR(100),
    `gender` TINYINT,
    `last_name` VARCHAR(100),
    `password` VARCHAR(255),
    `phone` VARCHAR(255),
    `registered` DATE,
    `registration_key` VARCHAR(150),
    `restore_password_date` DATETIME,
    `restore_password_key` VARCHAR(150),
    `salutation` TINYINT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_customer`),
    UNIQUE INDEX `spy_customer-email` (`email`),
    UNIQUE INDEX `spy_customer-customer_reference` (`customer_reference`),
    INDEX `spy_customer-first_name` (`first_name`),
    INDEX `spy_customer-last_name` (`last_name`),
    INDEX `index-spy_customer-default_billing_address` (`default_billing_address`),
    INDEX `index-spy_customer-default_shipping_address` (`default_shipping_address`),
    INDEX `index-spy_customer-fk_locale` (`fk_locale`),
    INDEX `index-spy_customer-fk_user` (`fk_user`),
    CONSTRAINT `spy_customer-default_billing_address`
        FOREIGN KEY (`default_billing_address`)
        REFERENCES `spy_customer_address` (`id_customer_address`)
        ON DELETE SET NULL,
    CONSTRAINT `spy_customer-default_shipping_address`
        FOREIGN KEY (`default_shipping_address`)
        REFERENCES `spy_customer_address` (`id_customer_address`)
        ON DELETE SET NULL,
    CONSTRAINT `spy_customer-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_customer-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_customer_address`
(
    `id_customer_address` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_country` INTEGER NOT NULL,
    `fk_customer` INTEGER NOT NULL,
    `fk_region` INTEGER,
    `address1` VARCHAR(255),
    `address2` VARCHAR(255),
    `address3` VARCHAR(255),
    `anonymized_at` DATETIME,
    `city` VARCHAR(255),
    `comment` VARCHAR(255),
    `company` VARCHAR(255),
    `deleted_at` DATETIME,
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(255),
    `salutation` TINYINT,
    `uuid` VARCHAR(255),
    `zip_code` VARCHAR(15),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_customer_address`),
    UNIQUE INDEX `spy_customer_address-unique-uuid` (`uuid`),
    INDEX `spy_customer_address-fk_customer` (`fk_customer`),
    INDEX `index-spy_customer_address-fk_region` (`fk_region`),
    INDEX `index-spy_customer_address-fk_country` (`fk_country`),
    CONSTRAINT `spy_customer_address-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`),
    CONSTRAINT `spy_customer_address-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_customer_address-fk_region`
        FOREIGN KEY (`fk_region`)
        REFERENCES `spy_region` (`id_region`)
) ENGINE=InnoDB;

CREATE TABLE `spy_customer_group`
(
    `id_customer_group` INTEGER NOT NULL AUTO_INCREMENT,
    `description` VARCHAR(255),
    `name` VARCHAR(70) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_customer_group`),
    UNIQUE INDEX `spy_customer-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_customer_group_to_customer`
(
    `id_customer_group_to_customer` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_customer` INTEGER NOT NULL,
    `fk_customer_group` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_customer_group_to_customer`),
    UNIQUE INDEX `fk_customer_group-fk_customer` (`fk_customer_group`, `fk_customer`),
    INDEX `index-spy_customer_group_to_customer-fk_customer` (`fk_customer`),
    CONSTRAINT `spy_customer_group_to_customer-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`),
    CONSTRAINT `spy_customer_group_to_customer-fk_customer_group`
        FOREIGN KEY (`fk_customer_group`)
        REFERENCES `spy_customer_group` (`id_customer_group`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_customer_note`
(
    `id_customer_note` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_customer` INTEGER NOT NULL,
    `fk_user` INTEGER NOT NULL,
    `created_at` DATETIME,
    `message` TEXT NOT NULL,
    `updated_at` DATETIME,
    `username` VARCHAR(255),
    PRIMARY KEY (`id_customer_note`),
    INDEX `index-spy_customer_note-fk_customer` (`fk_customer`),
    INDEX `index-spy_customer_note-fk_user` (`fk_user`),
    CONSTRAINT `spy_customer_note-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`),
    CONSTRAINT `spy_customer_note-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_dataset`
(
    `id_dataset` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_dataset`),
    UNIQUE INDEX `spy_dataset_name-unique-key` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_dataset_column`
(
    `id_dataset_column` INTEGER NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_dataset_column`),
    UNIQUE INDEX `spy_dataset_column_title-unique-key` (`title`)
) ENGINE=InnoDB;

CREATE TABLE `spy_dataset_localized_attributes`
(
    `id_dataset_localized_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_dataset` INTEGER NOT NULL,
    `fk_locale` INTEGER NOT NULL,
    `title` VARCHAR(255),
    PRIMARY KEY (`id_dataset_localized_attributes`),
    UNIQUE INDEX `spy_dataset_localized_attributes-unique-fk_dataset` (`fk_dataset`, `fk_locale`),
    INDEX `index-spy_dataset_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_dataset_localized_attributes-fk_dataset`
        FOREIGN KEY (`fk_dataset`)
        REFERENCES `spy_dataset` (`id_dataset`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `spy_dataset_localized_attributes-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
) ENGINE=InnoDB;

CREATE TABLE `spy_dataset_row`
(
    `id_dataset_row` INTEGER NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_dataset_row`),
    UNIQUE INDEX `spy_dataset_row_title-unique-key` (`title`)
) ENGINE=InnoDB;

CREATE TABLE `spy_dataset_row_column_value`
(
    `id_row_column_value` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_dataset` INTEGER NOT NULL,
    `fk_dataset_column` INTEGER NOT NULL,
    `fk_dataset_row` INTEGER NOT NULL,
    `value` VARCHAR(255),
    PRIMARY KEY (`id_row_column_value`),
    INDEX `index-spy_dataset_row_column_value-fk_dataset` (`fk_dataset`),
    INDEX `index-spy_dataset_row_column_value-fk_dataset_row` (`fk_dataset_row`),
    INDEX `index-spy_dataset_row_column_value-fk_dataset_column` (`fk_dataset_column`),
    CONSTRAINT `spy_dataset_row_column_value-fk_dataset`
        FOREIGN KEY (`fk_dataset`)
        REFERENCES `spy_dataset` (`id_dataset`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `spy_dataset_row_column_value-fk_dataset_column`
        FOREIGN KEY (`fk_dataset_column`)
        REFERENCES `spy_dataset_column` (`id_dataset_column`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `spy_dataset_row_column_value-fk_dataset_row`
        FOREIGN KEY (`fk_dataset_row`)
        REFERENCES `spy_dataset_row` (`id_dataset_row`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_date_schedule`
(
    `id_date_schedule` INTEGER NOT NULL AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `time_from` TIME,
    `time_to` TIME,
    `note_glossary_key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_date_schedule`)
) ENGINE=InnoDB;

CREATE TABLE `spy_discount`
(
    `id_discount` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_discount_voucher_pool` INTEGER,
    `fk_store` INTEGER,
    `amount` INTEGER NOT NULL,
    `calculator_plugin` VARCHAR(255),
    `collector_query_string` TEXT,
    `decision_rule_query_string` TEXT,
    `description` VARCHAR(1024),
    `discount_key` VARCHAR(32),
    `discount_type` VARCHAR(255),
    `display_name` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 0,
    `is_exclusive` TINYINT(1) DEFAULT 0,
    `minimum_item_amount` INTEGER DEFAULT 1 NOT NULL,
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_discount`),
    UNIQUE INDEX `spy_discount-unique-display_name` (`display_name`),
    UNIQUE INDEX `spy_discount-unique-fk_discount_voucher_pool` (`fk_discount_voucher_pool`),
    INDEX `spy_discount-index-discount_type` (`discount_type`),
    INDEX `spy_discount_i_862ce6` (`discount_key`),
    INDEX `index-spy_discount-fk_store` (`fk_store`),
    CONSTRAINT `spy_discount-fk_discount_voucher_pool`
        FOREIGN KEY (`fk_discount_voucher_pool`)
        REFERENCES `spy_discount_voucher_pool` (`id_discount_voucher_pool`),
    CONSTRAINT `spy_discount-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_discount_amount`
(
    `id_discount_amount` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_discount` INTEGER NOT NULL,
    `gross_amount` INTEGER,
    `net_amount` INTEGER,
    PRIMARY KEY (`id_discount_amount`),
    UNIQUE INDEX `spy_discount_amount-unique-currency-discount` (`fk_currency`, `fk_discount`),
    INDEX `index-spy_discount_amount-fk_discount` (`fk_discount`),
    CONSTRAINT `spy_discount_amount-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_discount_amount-fk_discount`
        FOREIGN KEY (`fk_discount`)
        REFERENCES `spy_discount` (`id_discount`)
) ENGINE=InnoDB;

CREATE TABLE `spy_discount_promotion`
(
    `id_discount_promotion` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_discount` INTEGER NOT NULL,
    `abstract_sku` VARCHAR(255) NOT NULL,
    `quantity` INTEGER NOT NULL,
    `uuid` VARCHAR(255),
    PRIMARY KEY (`id_discount_promotion`),
    UNIQUE INDEX `spy_discount_promotion-unique-uuid` (`uuid`),
    INDEX `index-spy_discount_promotion-fk_discount` (`fk_discount`),
    CONSTRAINT `spy_discount_promotion-fk_discount`
        FOREIGN KEY (`fk_discount`)
        REFERENCES `spy_discount` (`id_discount`)
) ENGINE=InnoDB;

CREATE TABLE `spy_discount_store`
(
    `id_discount_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_discount` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_discount_store`),
    UNIQUE INDEX `spy_discount_store-fk_discount-fk_store` (`fk_discount`, `fk_store`),
    INDEX `index-spy_discount_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_discount_store-fk_discount`
        FOREIGN KEY (`fk_discount`)
        REFERENCES `spy_discount` (`id_discount`),
    CONSTRAINT `spy_discount_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_discount_voucher`
(
    `id_discount_voucher` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_discount_voucher_pool` INTEGER,
    `code` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 0,
    `max_number_of_uses` INTEGER,
    `number_of_uses` INTEGER,
    `voucher_batch` INTEGER DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_discount_voucher`),
    UNIQUE INDEX `spy_discount_voucher-code` (`code`),
    INDEX `index-spy_discount_voucher-fk_discount_voucher_pool` (`fk_discount_voucher_pool`),
    CONSTRAINT `spy_discount_voucher-fk_discount_voucher_pool`
        FOREIGN KEY (`fk_discount_voucher_pool`)
        REFERENCES `spy_discount_voucher_pool` (`id_discount_voucher_pool`)
) ENGINE=InnoDB;

CREATE TABLE `spy_discount_voucher_pool`
(
    `id_discount_voucher_pool` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 0,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_discount_voucher_pool`)
) ENGINE=InnoDB;

CREATE TABLE `spy_event_behavior_entity_change`
(
    `id_event_behavior_entity_change` BIGINT NOT NULL AUTO_INCREMENT,
    `data` TEXT,
    `process_id` VARCHAR(255),
    `created_at` DATETIME,
    PRIMARY KEY (`id_event_behavior_entity_change`),
    INDEX `spy_event_behavior_entity_change-process_id` (`process_id`)
) ENGINE=InnoDB;

CREATE TABLE `spy_file`
(
    `id_file` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_file_directory` INTEGER,
    `file_name` VARCHAR(500) NOT NULL,
    PRIMARY KEY (`id_file`),
    INDEX `index-spy_file-fk_file_directory` (`fk_file_directory`),
    CONSTRAINT `spy_file-fk_file_directory`
        FOREIGN KEY (`fk_file_directory`)
        REFERENCES `spy_file_directory` (`id_file_directory`)
) ENGINE=InnoDB;

CREATE TABLE `spy_file_directory`
(
    `id_file_directory` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_parent_file_directory` INTEGER,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `position` INTEGER,
    PRIMARY KEY (`id_file_directory`),
    INDEX `spy_file_directory_i_ba7161` (`position`),
    INDEX `index-spy_file_directory-fk_parent_file_directory` (`fk_parent_file_directory`),
    CONSTRAINT `spy_file_directory_fk_47023d`
        FOREIGN KEY (`fk_parent_file_directory`)
        REFERENCES `spy_file_directory` (`id_file_directory`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_file_directory_localized_attributes`
(
    `id_file_directory_localized_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_file_directory` INTEGER NOT NULL,
    `fk_locale` INTEGER NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_file_directory_localized_attributes`),
    UNIQUE INDEX `spy_file_directory_localized_attributes-unique-fk_fd-fk_locale` (`fk_file_directory`, `fk_locale`),
    INDEX `index-spy_file_directory_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_file_directory_localized_attributes_fk_12b6d0`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_file_directory_localized_attributes_fk_52d44c`
        FOREIGN KEY (`fk_file_directory`)
        REFERENCES `spy_file_directory` (`id_file_directory`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_file_info`
(
    `id_file_info` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_file` INTEGER NOT NULL,
    `extension` VARCHAR(255) NOT NULL,
    `size` INTEGER NOT NULL,
    `storage_file_name` VARCHAR(255),
    `storage_name` VARCHAR(255),
    `type` VARCHAR(255) NOT NULL,
    `version` INTEGER NOT NULL,
    `version_name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_file_info`),
    INDEX `index-spy_file_info-fk_file` (`fk_file`),
    CONSTRAINT `spy_file_info-fk_file`
        FOREIGN KEY (`fk_file`)
        REFERENCES `spy_file` (`id_file`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_file_localized_attributes`
(
    `id_file_localized_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_file` INTEGER NOT NULL,
    `fk_locale` INTEGER NOT NULL,
    `alt` TEXT,
    `title` VARCHAR(255),
    PRIMARY KEY (`id_file_localized_attributes`),
    UNIQUE INDEX `spy_file_localized_attributes-unique-fk_file` (`fk_file`, `fk_locale`),
    INDEX `index-spy_file_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_file_localized_attributes-fk_file`
        FOREIGN KEY (`fk_file`)
        REFERENCES `spy_file` (`id_file`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `spy_file_localized_attributes-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
) ENGINE=InnoDB;

CREATE TABLE `spy_file_storage`
(
    `id_file_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_file` INTEGER,
    `file_name` VARCHAR(500),
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    PRIMARY KEY (`id_file_storage`),
    UNIQUE INDEX `spy_file_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_file_storage-unique-key` (`key`),
    INDEX `spy_file_storage-fk_file` (`fk_file`)
) ENGINE=InnoDB;

CREATE TABLE `spy_gift_card`
(
    `id_gift_card` INTEGER NOT NULL AUTO_INCREMENT,
    `attributes` TEXT,
    `code` VARCHAR(40) NOT NULL,
    `currency_iso_code` VARCHAR(5),
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `name` VARCHAR(40) NOT NULL,
    `replacement_pattern` VARCHAR(40),
    `value` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_gift_card`)
) ENGINE=InnoDB;

CREATE TABLE `spy_gift_card_balance_log`
(
    `id_gift_card_balance_log` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_gift_card` INTEGER NOT NULL,
    `fk_sales_order` INTEGER NOT NULL,
    `value` INTEGER NOT NULL,
    `created_at` DATETIME NOT NULL,
    PRIMARY KEY (`id_gift_card_balance_log`),
    INDEX `spy_gift_card_balance_log_i_f56346` (`fk_gift_card`, `created_at`, `fk_sales_order`, `value`),
    INDEX `spy_gift_card_balance_log-fi_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_gift_card_balance_log-fk_gift_card`
        FOREIGN KEY (`fk_gift_card`)
        REFERENCES `spy_gift_card` (`id_gift_card`),
    CONSTRAINT `spy_gift_card_balance_log-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_gift_card_product_abstract_configuration`
(
    `id_gift_card_product_abstract_configuration` INTEGER NOT NULL AUTO_INCREMENT,
    `code_pattern` VARCHAR(40) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_gift_card_product_abstract_configuration`)
) ENGINE=InnoDB;

CREATE TABLE `spy_gift_card_product_abstract_configuration_link`
(
    `id_gift_card_product_abstract_configuration_link` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_gift_card_product_abstract_configuration` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    PRIMARY KEY (`id_gift_card_product_abstract_configuration_link`),
    INDEX `index-spy_gift_card_product_abstract_configuration-ea801cb20841` (`fk_product_abstract`),
    INDEX `index-spy_gift_card_product_abstract_configuration-5c47cd7f57d8` (`fk_gift_card_product_abstract_configuration`),
    CONSTRAINT `spy_gift_card_pa_conf_link-fk_gift_card_pa_conf`
        FOREIGN KEY (`fk_gift_card_product_abstract_configuration`)
        REFERENCES `spy_gift_card_product_abstract_configuration` (`id_gift_card_product_abstract_configuration`),
    CONSTRAINT `spy_gift_card_product_abstract_conf_link-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_gift_card_product_configuration`
(
    `id_gift_card_product_configuration` INTEGER NOT NULL AUTO_INCREMENT,
    `value` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_gift_card_product_configuration`)
) ENGINE=InnoDB;

CREATE TABLE `spy_gift_card_product_configuration_link`
(
    `id_gift_card_product_configuration_link` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_gift_card_product_configuration` INTEGER NOT NULL,
    `fk_product` INTEGER NOT NULL,
    PRIMARY KEY (`id_gift_card_product_configuration_link`),
    INDEX `index-spy_gift_card_product_configuration_link-fk_product` (`fk_product`),
    INDEX `index-spy_gift_card_product_configuration_link-fk_-b6cecefc1da0` (`fk_gift_card_product_configuration`),
    CONSTRAINT `spy_gift_card_p_conf_link-fk_gift_card_p_conf`
        FOREIGN KEY (`fk_gift_card_product_configuration`)
        REFERENCES `spy_gift_card_product_configuration` (`id_gift_card_product_configuration`),
    CONSTRAINT `spy_gift_card_product_configuration_link-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_glossary_key`
(
    `id_glossary_key` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_glossary_key`),
    UNIQUE INDEX `spy_glossary_key-unique-key` (`key`),
    INDEX `spy_glossary_key-index-key` (`key`),
    INDEX `spy_glossary_key-is_active` (`is_active`)
) ENGINE=InnoDB;

CREATE TABLE `spy_glossary_storage`
(
    `id_glossary_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_glossary_key` INTEGER NOT NULL,
    `data` TEXT,
    `glossary_key` VARCHAR(255) NOT NULL,
    `key` VARCHAR(1024) NOT NULL,
    `locale` VARCHAR(5) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_glossary_storage`),
    UNIQUE INDEX `spy_glossary_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_glossary_storage-fk_glossary_key` (`fk_glossary_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_glossary_translation`
(
    `id_glossary_translation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_glossary_key` INTEGER NOT NULL,
    `fk_locale` INTEGER NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `value` TEXT NOT NULL,
    PRIMARY KEY (`id_glossary_translation`),
    UNIQUE INDEX `spy_glossary_translation-unique-fk_glossary_key` (`fk_glossary_key`, `fk_locale`),
    INDEX `spy_glossary_translation-index-fk_locale` (`fk_locale`),
    INDEX `spy_glossary_translation-is_active` (`is_active`),
    CONSTRAINT `spy_glossary_translation-fk_glossary_key`
        FOREIGN KEY (`fk_glossary_key`)
        REFERENCES `spy_glossary_key` (`id_glossary_key`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_glossary_translation-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_locale`
(
    `id_locale` INTEGER NOT NULL AUTO_INCREMENT,
    `locale_name` VARCHAR(5) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (`id_locale`),
    UNIQUE INDEX `spy_locale-unique-locale_name` (`locale_name`),
    INDEX `spy_locale-index-locale_name` (`locale_name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant`
(
    `id_merchant` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_state_machine_process` INTEGER,
    `email` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 0,
    `merchant_reference` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `registration_number` VARCHAR(255),
    `status` VARCHAR(64) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant`),
    UNIQUE INDEX `spy_merchant-unique-email` (`email`),
    UNIQUE INDEX `spy_merchant-unique-merchant_reference` (`merchant_reference`),
    INDEX `index-spy_merchant-fk_state_machine_process` (`fk_state_machine_process`),
    CONSTRAINT `spy_merchant-fk_state_machine_process`
        FOREIGN KEY (`fk_state_machine_process`)
        REFERENCES `spy_state_machine_process` (`id_state_machine_process`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_category`
(
    `id_merchant_category` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `fk_merchant` INTEGER NOT NULL,
    PRIMARY KEY (`id_merchant_category`),
    UNIQUE INDEX `spy_merchant_category-unique-fk_merchant` (`fk_merchant`, `fk_category`),
    INDEX `spy_merchant_category-fi_category` (`fk_category`),
    CONSTRAINT `spy_merchant_category-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_category-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_opening_hours_date_schedule`
(
    `id_merchant_opening_hours_date_schedule` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_date_schedule` INTEGER NOT NULL,
    `fk_merchant` INTEGER NOT NULL,
    PRIMARY KEY (`id_merchant_opening_hours_date_schedule`),
    INDEX `spy_merchant_opening_hours_date_schedule-fk_date_schedule` (`fk_date_schedule`),
    INDEX `spy_merchant_opening_hours_date_schedule-fk_merchant` (`fk_merchant`),
    CONSTRAINT `spy_merchant_opening_hours_date_schedule-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_opening_hours_date_schedule-fk_w_s_e_d`
        FOREIGN KEY (`fk_date_schedule`)
        REFERENCES `spy_date_schedule` (`id_date_schedule`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_opening_hours_storage`
(
    `id_merchant_opening_hours_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_opening_hours_storage`),
    UNIQUE INDEX `spy_merchant_opening_hours_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_merchant_opening_hours_storage-fk_merchant` (`fk_merchant`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_opening_hours_weekday_schedule`
(
    `id_merchant_opening_hours_weekday_schedule` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `fk_weekday_schedule` INTEGER NOT NULL,
    PRIMARY KEY (`id_merchant_opening_hours_weekday_schedule`),
    INDEX `spy_merchant_opening_hours_weekday_schedule-fk_weekday_schedule` (`fk_weekday_schedule`),
    INDEX `spy_merchant_opening_hours_weekday_schedule-fk_merchant` (`fk_merchant`),
    CONSTRAINT `spy_merchant_opening_hours_weekday_schedule-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_opening_hours_weekday_schedule-fk_weekday_schedule`
        FOREIGN KEY (`fk_weekday_schedule`)
        REFERENCES `spy_weekday_schedule` (`id_weekday_schedule`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_product_abstract`
(
    `id_merchant_product_abstract` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    `is_shared` TINYINT(1) DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_product_abstract`),
    UNIQUE INDEX `spy_merchant_product_abstract-unique-fk_product_abstract` (`fk_product_abstract`),
    INDEX `spy_merchant_product_abstract-index-fk_merchant` (`fk_merchant`),
    CONSTRAINT `spy_merchant_product_abstract-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_product_abstract-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_product_option_group`
(
    `id_merchant_product_option_group` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_option_group` INTEGER NOT NULL,
    `merchant_reference` VARCHAR(255) NOT NULL,
    `approval_status` VARCHAR(64) NOT NULL,
    `merchant_sku` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_product_option_group`),
    UNIQUE INDEX `spy_merchant_product_option_group-unique-f_p_o_g-m_r` (`fk_product_option_group`, `merchant_reference`),
    INDEX `spy_merchant_product_option_group-merchant_reference` (`merchant_reference`),
    INDEX `spy_merchant_product_option_group-merchant_sku` (`merchant_sku`),
    INDEX `spy_merchant_product_option_group-approval_status` (`approval_status`),
    CONSTRAINT `spy_merchant_product_option_group-fk_product_option_group`
        FOREIGN KEY (`fk_product_option_group`)
        REFERENCES `spy_product_option_group` (`id_product_option_group`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_profile`
(
    `id_merchant_profile` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `banner_url_glossary_key` VARCHAR(255),
    `cancellation_policy_glossary_key` VARCHAR(255),
    `contact_person_first_name` VARCHAR(255),
    `contact_person_last_name` VARCHAR(255),
    `contact_person_phone` VARCHAR(255),
    `contact_person_role` VARCHAR(255),
    `contact_person_title` TINYINT,
    `data_privacy_glossary_key` VARCHAR(255),
    `delivery_time_glossary_key` VARCHAR(255),
    `description_glossary_key` VARCHAR(255),
    `fax_number` VARCHAR(255),
    `imprint_glossary_key` VARCHAR(255),
    `logo_url` VARCHAR(255),
    `public_email` VARCHAR(255),
    `public_phone` VARCHAR(255),
    `terms_conditions_glossary_key` VARCHAR(255),
    PRIMARY KEY (`id_merchant_profile`),
    UNIQUE INDEX `spy_merchant_profile_unique_fk_merchant` (`fk_merchant`),
    CONSTRAINT `spy_merchant_profile-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_profile_address`
(
    `id_merchant_profile_address` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_country` INTEGER,
    `fk_merchant_profile` INTEGER NOT NULL,
    `address1` VARCHAR(255),
    `address2` VARCHAR(255),
    `address3` VARCHAR(255),
    `city` VARCHAR(255),
    `latitude` VARCHAR(255),
    `longitude` VARCHAR(255),
    `zip_code` VARCHAR(15),
    PRIMARY KEY (`id_merchant_profile_address`),
    INDEX `index-spy_merchant_profile_address-fk_country` (`fk_country`),
    INDEX `index-spy_merchant_profile_address-fk_merchant_profile` (`fk_merchant_profile`),
    CONSTRAINT `spy_merchant_profile_address-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`),
    CONSTRAINT `spy_merchant_profile_address-fk_merchant_profile`
        FOREIGN KEY (`fk_merchant_profile`)
        REFERENCES `spy_merchant_profile` (`id_merchant_profile`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_relationship`
(
    `id_merchant_relationship` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_business_unit` INTEGER NOT NULL,
    `fk_merchant` INTEGER NOT NULL,
    `merchant_relationship_key` VARCHAR(255) COMMENT 'Identifier for existing entities. It should never be changed.',
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_relationship`),
    UNIQUE INDEX `spy_merchant_relationship-merchant_relationship_key` (`merchant_relationship_key`),
    INDEX `spy_merchant_relationship-index-fk_merchant` (`fk_merchant`),
    INDEX `spy_merchant_relationship-index-fk_company_business_unit` (`fk_company_business_unit`),
    CONSTRAINT `spy_merchant_relationship-fk_company_business_unit`
        FOREIGN KEY (`fk_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_relationship-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_relationship_sales_order_threshold`
(
    `id_merchant_relationship_sales_order_threshold` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_merchant_relationship` INTEGER NOT NULL,
    `fk_sales_order_threshold_type` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    `fee` INTEGER,
    `message_glossary_key` VARCHAR(255) NOT NULL,
    `threshold` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_relationship_sales_order_threshold`),
    INDEX `index-spy_merchant_relationship_sales_order_thresh-91b7e0d3292d` (`fk_merchant_relationship`),
    INDEX `index-spy_merchant_relationship_sales_order_thresh-10b5a4fbe26a` (`fk_sales_order_threshold_type`),
    INDEX `index-spy_merchant_relationship_sales_order_thresh-496d2e6d2cd5` (`fk_currency`),
    INDEX `index-spy_merchant_relationship_sales_order_threshold-fk_store` (`fk_store`),
    CONSTRAINT `spy_mer_rel_sales_order_threshold-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_mer_rel_sales_order_threshold-fk_merchant_relationship`
        FOREIGN KEY (`fk_merchant_relationship`)
        REFERENCES `spy_merchant_relationship` (`id_merchant_relationship`),
    CONSTRAINT `spy_mer_rel_sales_order_threshold-fk_sales_order_threshold_type`
        FOREIGN KEY (`fk_sales_order_threshold_type`)
        REFERENCES `spy_sales_order_threshold_type` (`id_sales_order_threshold_type`),
    CONSTRAINT `spy_mer_rel_sales_order_threshold-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_relationship_to_company_business_unit`
(
    `id_merchant_relationship_to_company_business_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_business_unit` INTEGER NOT NULL,
    `fk_merchant_relationship` INTEGER NOT NULL,
    PRIMARY KEY (`id_merchant_relationship_to_company_business_unit`),
    UNIQUE INDEX `spy_merchant_rel-merchant_fk_merchant_rel_fk_company_bu` (`fk_merchant_relationship`, `fk_company_business_unit`),
    INDEX `index-spy_merchant_relationship_to_company_busines-ac55cef65a61` (`fk_merchant_relationship`),
    INDEX `index-spy_merchant_relationship_to_company_busines-37a12c0783a0` (`fk_company_business_unit`),
    CONSTRAINT `spy_merchant_rel_to_company_bu-fk_company_bu`
        FOREIGN KEY (`fk_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_rel_to_company_bu-fk_merchant_rel`
        FOREIGN KEY (`fk_merchant_relationship`)
        REFERENCES `spy_merchant_relationship` (`id_merchant_relationship`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_sales_order`
(
    `id_merchant_sales_order` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `merchant_reference` VARCHAR(255) NOT NULL,
    `merchant_sales_order_reference` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_sales_order`),
    UNIQUE INDEX `spy_merchant_sales_order-merchant_sales_order_reference` (`merchant_sales_order_reference`),
    INDEX `index-spy_merchant_sales_order-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_merchant_sales_order-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_sales_order_item`
(
    `id_merchant_sales_order_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant_sales_order` INTEGER NOT NULL,
    `fk_sales_order_item` INTEGER NOT NULL,
    `fk_state_machine_item_state` INTEGER,
    `merchant_order_item_reference` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_sales_order_item`),
    UNIQUE INDEX `spy_merchant_sales_order_item-unique-fk_sales_order_item` (`fk_sales_order_item`),
    INDEX `spy_merchant_sales_order_item-fk_merchant_sales_order` (`fk_merchant_sales_order`),
    INDEX `index-spy_merchant_sales_order_item-fk_state_machine_item_state` (`fk_state_machine_item_state`),
    CONSTRAINT `spy_merchant_sales_order_item-fk_merchant_sales_order`
        FOREIGN KEY (`fk_merchant_sales_order`)
        REFERENCES `spy_merchant_sales_order` (`id_merchant_sales_order`),
    CONSTRAINT `spy_merchant_sales_order_item-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`),
    CONSTRAINT `spy_merchant_sales_order_item-fk_state_machine_item_state`
        FOREIGN KEY (`fk_state_machine_item_state`)
        REFERENCES `spy_state_machine_item_state` (`id_state_machine_item_state`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_sales_order_totals`
(
    `id_merchant_sales_order_totals` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant_sales_order` INTEGER NOT NULL,
    `canceled_total` INTEGER DEFAULT 0,
    `discount_total` INTEGER DEFAULT 0,
    `grand_total` INTEGER DEFAULT 0,
    `order_expense_total` INTEGER DEFAULT 0,
    `refund_total` INTEGER DEFAULT 0,
    `subtotal` INTEGER DEFAULT 0,
    `tax_total` INTEGER DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_sales_order_totals`),
    INDEX `spy_sales_order_totals-fk_sales_order` (`fk_merchant_sales_order`),
    CONSTRAINT `spy_merchant_sales_order_totals-fk_merchant_sales_order`
        FOREIGN KEY (`fk_merchant_sales_order`)
        REFERENCES `spy_merchant_sales_order` (`id_merchant_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_search`
(
    `id_merchant_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_search`),
    UNIQUE INDEX `spy_merchant_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_merchant_search-unique-key` (`key`),
    INDEX `spy_merchant_search-fk_merchant` (`fk_merchant`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_stock`
(
    `id_merchant_stock` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `fk_stock` INTEGER NOT NULL,
    `is_default` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`id_merchant_stock`),
    UNIQUE INDEX `spy_merchant_stock-fk_stock-fk_merchant` (`fk_merchant`, `fk_stock`),
    INDEX `index-spy_merchant_stock-fk_stock` (`fk_stock`),
    CONSTRAINT `spy_merchant_stock-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_merchant_stock-fk_stock`
        FOREIGN KEY (`fk_stock`)
        REFERENCES `spy_stock` (`id_stock`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_storage`
(
    `id_merchant_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `id_merchant` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_merchant_storage`),
    UNIQUE INDEX `spy_merchant_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_merchant_storage-unique-key` (`key`),
    INDEX `spy_merchant_storage-id_merchant` (`id_merchant`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_store`
(
    `id_merchant_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_merchant_store`),
    UNIQUE INDEX `spy_merchant_store-fk_merchant-fk_store` (`fk_merchant`, `fk_store`),
    INDEX `index-spy_merchant_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_merchant_store-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`),
    CONSTRAINT `spy_merchant_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_merchant_user`
(
    `id_merchant_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant` INTEGER NOT NULL,
    `fk_user` INTEGER NOT NULL,
    PRIMARY KEY (`id_merchant_user`),
    UNIQUE INDEX `fk_merchant_unique_fk_user_unique` (`fk_merchant`, `fk_user`),
    INDEX `index-spy_merchant_user-fk_user` (`fk_user`),
    CONSTRAINT `spy_merchant_user-fk_merchant`
        FOREIGN KEY (`fk_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`),
    CONSTRAINT `spy_merchant_user-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_mime_type`
(
    `id_mime_type` INTEGER NOT NULL AUTO_INCREMENT,
    `comment` VARCHAR(255),
    `is_allowed` TINYINT(1) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_mime_type`),
    UNIQUE INDEX `spy_mime_type-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_navigation`
(
    `id_navigation` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `key` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_navigation`),
    UNIQUE INDEX `spy_navigation_key-unique-key` (`key`),
    INDEX `spy_navigation-index-key` (`key`),
    INDEX `spy_navigation-index-is_active` (`is_active`)
) ENGINE=InnoDB;

CREATE TABLE `spy_navigation_node`
(
    `id_navigation_node` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_navigation` INTEGER NOT NULL,
    `fk_parent_navigation_node` INTEGER,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `node_key` VARCHAR(32),
    `node_type` VARCHAR(255),
    `position` INTEGER,
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    PRIMARY KEY (`id_navigation_node`),
    INDEX `spy_navigation_node_i_ba7161` (`position`),
    INDEX `spy_navigation_node_i_576b1b` (`node_key`),
    INDEX `index-spy_navigation_node-fk_parent_navigation_node` (`fk_parent_navigation_node`),
    INDEX `index-spy_navigation_node-fk_navigation` (`fk_navigation`),
    CONSTRAINT `spy_navigation_node_fk_07636b`
        FOREIGN KEY (`fk_parent_navigation_node`)
        REFERENCES `spy_navigation_node` (`id_navigation_node`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_navigation_node_fk_6f985c`
        FOREIGN KEY (`fk_navigation`)
        REFERENCES `spy_navigation` (`id_navigation`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_navigation_node_localized_attributes`
(
    `id_navigation_node_localized_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_navigation_node` INTEGER NOT NULL,
    `fk_url` INTEGER,
    `css_class` VARCHAR(255),
    `external_url` VARCHAR(255),
    `link` VARCHAR(255),
    `title` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_navigation_node_localized_attributes`),
    INDEX `index-spy_navigation_node_localized_attributes-fk_-4f569df99f9b` (`fk_navigation_node`),
    INDEX `index-spy_navigation_node_localized_attributes-fk_locale` (`fk_locale`),
    INDEX `index-spy_navigation_node_localized_attributes-fk_url` (`fk_url`),
    CONSTRAINT `spy_navigation_node_localized_attributes_fk_12b6d0`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_navigation_node_localized_attributes_fk_43843f`
        FOREIGN KEY (`fk_navigation_node`)
        REFERENCES `spy_navigation_node` (`id_navigation_node`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_navigation_node_localized_attributes_fk_76593a`
        FOREIGN KEY (`fk_url`)
        REFERENCES `spy_url` (`id_url`)
) ENGINE=InnoDB;

CREATE TABLE `spy_navigation_storage`
(
    `id_navigation_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_navigation` INTEGER NOT NULL,
    `navigation_key` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_navigation_storage`),
    UNIQUE INDEX `spy_navigation_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_navigation_storage-unique-key` (`key`),
    INDEX `spy_navigation_storage-fk_navigation` (`fk_navigation`)
) ENGINE=InnoDB;

CREATE TABLE `spy_newsletter_subscriber`
(
    `id_newsletter_subscriber` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_customer` INTEGER,
    `email` VARCHAR(255) NOT NULL,
    `is_confirmed` TINYINT(1) DEFAULT 0 NOT NULL,
    `subscriber_key` VARCHAR(150),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_newsletter_subscriber`),
    UNIQUE INDEX `spy_newsletter_subscriber-unique-email` (`email`),
    UNIQUE INDEX `spy_newsletter_subscriber-unique-subscriber_key` (`subscriber_key`),
    INDEX `spy_newsletter_subscriber-index-email` (`email`),
    INDEX `spy_newsletter_subscriber-index-subscriber_key` (`subscriber_key`),
    INDEX `index-spy_newsletter_subscriber-fk_customer` (`fk_customer`),
    CONSTRAINT `spy_newsletter_subscriber-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`)
) ENGINE=InnoDB;

CREATE TABLE `spy_newsletter_subscription`
(
    `fk_newsletter_subscriber` INTEGER NOT NULL,
    `fk_newsletter_type` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`fk_newsletter_subscriber`,`fk_newsletter_type`),
    INDEX `spy_newsletter_subscription-fi_newsletter_type` (`fk_newsletter_type`),
    CONSTRAINT `spy_newsletter_subscription-fk_newsletter_subscriber`
        FOREIGN KEY (`fk_newsletter_subscriber`)
        REFERENCES `spy_newsletter_subscriber` (`id_newsletter_subscriber`),
    CONSTRAINT `spy_newsletter_subscription-fk_newsletter_type`
        FOREIGN KEY (`fk_newsletter_type`)
        REFERENCES `spy_newsletter_type` (`id_newsletter_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_newsletter_type`
(
    `id_newsletter_type` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_newsletter_type`),
    UNIQUE INDEX `spy_newsletter_type-unique-name` (`name`),
    INDEX `spy_newsletter_type-index-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_nopayment_paid`
(
    `id_nopayment_paid` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_nopayment_paid`),
    INDEX `index-spy_nopayment_paid-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_nopayment_paid-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oauth_access_token`
(
    `id_oauth_access_token` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_oauth_client` VARCHAR(1024) NOT NULL,
    `expirity_date` DATETIME NOT NULL,
    `identifier` VARCHAR(3024) NOT NULL,
    `scopes` VARCHAR(1024),
    `user_identifier` VARCHAR(1024) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_oauth_access_token`),
    INDEX `index-spy_oauth_access_token-fk_oauth_client` (`fk_oauth_client`),
    CONSTRAINT `spy_oauth_access_token-identifier`
        FOREIGN KEY (`fk_oauth_client`)
        REFERENCES `spy_oauth_client` (`identifier`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oauth_client`
(
    `id_oauth_client` INTEGER NOT NULL AUTO_INCREMENT,
    `identifier` VARCHAR(1024) NOT NULL,
    `is_confidential` TINYINT(1),
    `name` VARCHAR(1024) NOT NULL,
    `redirect_uri` VARCHAR(1024),
    `secret` VARCHAR(1024),
    PRIMARY KEY (`id_oauth_client`),
    UNIQUE INDEX `spy_oauth_client-identifier` (`identifier`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oauth_refresh_token`
(
    `id_oauth_refresh_token` BIGINT NOT NULL AUTO_INCREMENT,
    `identifier` VARCHAR(128) NOT NULL,
    `scopes` VARCHAR(1024),
    `customer_reference` VARCHAR(255),
    `user_identifier` VARCHAR(1024) NOT NULL,
    `fk_oauth_client` VARCHAR(1024) NOT NULL,
    `expires_at` DATETIME NOT NULL,
    `revoked_at` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_oauth_refresh_token`),
    INDEX `index-spy_oauth_refresh_token-identifier` (`identifier`),
    INDEX `index-spy_oauth_refresh_token-customer_reference` (`customer_reference`),
    INDEX `index-spy_oauth_refresh_token-fk_oauth_client` (`fk_oauth_client`),
    INDEX `index-spy_oauth_refresh_token-user_identifier` (`user_identifier`),
    CONSTRAINT `spy_oauth_refresh_token-identifier`
        FOREIGN KEY (`fk_oauth_client`)
        REFERENCES `spy_oauth_client` (`identifier`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oauth_scope`
(
    `id_oauth_scope` INTEGER NOT NULL AUTO_INCREMENT,
    `description` TEXT,
    `identifier` VARCHAR(1024) NOT NULL,
    PRIMARY KEY (`id_oauth_scope`),
    UNIQUE INDEX `spy_oauth_scope-identifier` (`identifier`)
) ENGINE=InnoDB;

CREATE TABLE `spy_offer`
(
    `id_offer` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_user` INTEGER,
    `contact_date` DATETIME,
    `contact_person` VARCHAR(255),
    `customer_reference` VARCHAR(255),
    `note` TEXT,
    `quote_data` LONGTEXT NOT NULL,
    `status` TINYINT DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_offer`),
    INDEX `spy_offer-customer_reference` (`customer_reference`),
    INDEX `index-spy_offer-fk_user` (`fk_user`),
    CONSTRAINT `spy_offer-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_event_timeout`
(
    `id_oms_event_timeout` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_oms_order_item_state` INTEGER NOT NULL,
    `fk_sales_order_item` INTEGER NOT NULL,
    `event` VARCHAR(255) NOT NULL,
    `timeout` DATETIME NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_oms_event_timeout`),
    UNIQUE INDEX `spy_oms_event_timeout-unique-fk_sales_order_item` (`fk_sales_order_item`, `fk_oms_order_item_state`),
    INDEX `spy_oms_event_timeout-timeout` (`timeout`),
    INDEX `index-spy_oms_event_timeout-fk_oms_order_item_state` (`fk_oms_order_item_state`),
    CONSTRAINT `spy_oms_event_timeout-fk_oms_order_item_state`
        FOREIGN KEY (`fk_oms_order_item_state`)
        REFERENCES `spy_oms_order_item_state` (`id_oms_order_item_state`),
    CONSTRAINT `spy_oms_event_timeout-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_order_item_state`
(
    `id_oms_order_item_state` INTEGER NOT NULL AUTO_INCREMENT,
    `description` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_oms_order_item_state`),
    UNIQUE INDEX `spy_oms_order_item_state-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_order_item_state_history`
(
    `id_oms_order_item_state_history` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_oms_order_item_state` INTEGER NOT NULL,
    `fk_sales_order_item` INTEGER NOT NULL,
    `created_at` DATETIME,
    PRIMARY KEY (`id_oms_order_item_state_history`),
    INDEX `spy_oms_order_item_state_history-index-fk_soi-fk_oois-id_ooish` (`fk_sales_order_item`, `fk_oms_order_item_state`),
    INDEX `spy_oms_order_item_state_history-fi_oms_order_item_state` (`fk_oms_order_item_state`),
    CONSTRAINT `spy_oms_order_item_state_history-fk_oms_order_item_state`
        FOREIGN KEY (`fk_oms_order_item_state`)
        REFERENCES `spy_oms_order_item_state` (`id_oms_order_item_state`),
    CONSTRAINT `spy_oms_order_item_state_history-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_order_process`
(
    `id_oms_order_process` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_oms_order_process`),
    UNIQUE INDEX `spy_oms_order_process-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_product_offer_reservation`
(
    `id_oms_product_offer_reservation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_store` INTEGER,
    `product_offer_reference` VARCHAR(255) NOT NULL,
    `reservation_quantity` DECIMAL(20,10) DEFAULT 0.0000000000 NOT NULL,
    PRIMARY KEY (`id_oms_product_offer_reservation`),
    UNIQUE INDEX `spy_oms_product_offer_reservation-product_offer_reference` (`product_offer_reference`, `fk_store`),
    INDEX `index-spy_oms_product_offer_reservation-fk_store` (`fk_store`),
    CONSTRAINT `spy_oms_product_offer_reservation-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_product_reservation`
(
    `id_oms_product_reservation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_store` INTEGER,
    `reservation_quantity` DECIMAL(20,10) DEFAULT 0.0000000000 NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_oms_product_reservation`),
    UNIQUE INDEX `spy_oms_product_reservation-sku` (`sku`, `fk_store`),
    INDEX `index-spy_oms_product_reservation-fk_store` (`fk_store`),
    CONSTRAINT `spy_oms_product_reservation-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_product_reservation_change_version`
(
    `id_oms_product_reservation_id` INTEGER NOT NULL,
    `version` BIGINT NOT NULL AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`version`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_product_reservation_last_exported_version`
(
    `version` BIGINT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_product_reservation_store`
(
    `id_oms_product_reservation_store` INTEGER NOT NULL AUTO_INCREMENT,
    `reservation_quantity` DECIMAL(20,10) NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    `store` VARCHAR(255) NOT NULL,
    `version` BIGINT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_oms_product_reservation_store`),
    UNIQUE INDEX `spy_oms_product_reservation_store-unique-store-sku` (`store`, `sku`),
    INDEX `spy_oms_product_reservation_store-version` (`version`),
    INDEX `spy_oms_product_reservation_store-sku` (`sku`),
    INDEX `spy_oms_product_reservation_store-store` (`store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_state_machine_lock`
(
    `id_oms_state_machine_lock` INTEGER NOT NULL AUTO_INCREMENT,
    `details` TEXT,
    `expires` DATETIME NOT NULL,
    `identifier` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_oms_state_machine_lock`),
    UNIQUE INDEX `spy_oms_state_machine_lock-identifier` (`identifier`)
) ENGINE=InnoDB;

CREATE TABLE `spy_oms_transition_log`
(
    `id_oms_transition_log` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_oms_order_process` INTEGER,
    `fk_sales_order` INTEGER NOT NULL,
    `fk_sales_order_item` INTEGER NOT NULL,
    `command` VARCHAR(512),
    `condition` VARCHAR(512),
    `error_message` TEXT,
    `event` VARCHAR(100),
    `hostname` VARCHAR(128) NOT NULL,
    `is_error` TINYINT(1),
    `locked` TINYINT(1),
    `params` TEXT,
    `path` VARCHAR(256),
    `quantity` INTEGER,
    `source_state` VARCHAR(128),
    `target_state` VARCHAR(128),
    `created_at` DATETIME,
    PRIMARY KEY (`id_oms_transition_log`),
    INDEX `index-spy_oms_transition_log-fk_sales_order` (`fk_sales_order`),
    INDEX `index-spy_oms_transition_log-fk_sales_order_item` (`fk_sales_order_item`),
    INDEX `index-spy_oms_transition_log-fk_oms_order_process` (`fk_oms_order_process`),
    CONSTRAINT `spy_oms_transition_log-fk_oms_order_process`
        FOREIGN KEY (`fk_oms_order_process`)
        REFERENCES `spy_oms_order_process` (`id_oms_order_process`),
    CONSTRAINT `spy_oms_transition_log-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`),
    CONSTRAINT `spy_oms_transition_log-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_order_source`
(
    `id_order_source` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_order_source`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_gift_card`
(
    `id_payment_gift_card` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_payment` INTEGER NOT NULL,
    `code` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    PRIMARY KEY (`id_payment_gift_card`),
    INDEX `index-spy_payment_gift_card-fk_sales_payment` (`fk_sales_payment`),
    CONSTRAINT `spy_payment_gift_card-fk_payment`
        FOREIGN KEY (`fk_sales_payment`)
        REFERENCES `spy_sales_payment` (`id_sales_payment`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_method`
(
    `id_payment_method` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_payment_provider` INTEGER NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `payment_method_key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_payment_method`),
    UNIQUE INDEX `spy_payment_method-unique-payment_method_key` (`payment_method_key`),
    INDEX `spy_payment_method-is_active` (`is_active`),
    INDEX `index-spy_payment_method-fk_payment_provider` (`fk_payment_provider`),
    CONSTRAINT `spy_payment_method-fk_payment_provider`
        FOREIGN KEY (`fk_payment_provider`)
        REFERENCES `spy_payment_provider` (`id_payment_provider`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_method_store`
(
    `id_payment_method_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_payment_method` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_payment_method_store`),
    UNIQUE INDEX `spy_payment_method_store-unique-payment_method` (`fk_payment_method`, `fk_store`),
    INDEX `index-payment_method_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_payment_method_store-fk_payment_method`
        FOREIGN KEY (`fk_payment_method`)
        REFERENCES `spy_payment_method` (`id_payment_method`),
    CONSTRAINT `spy_payment_method_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone`
(
    `id_payment_payone` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `payment_method` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(64) NOT NULL,
    `transaction_id` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_payment_payone`),
    INDEX `index-spy_payment_payone-transaction_id` (`transaction_id`),
    INDEX `index-spy_payment_payone-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_payment_payone-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone_api_call_log`
(
    `id_payment_payone_api_call_log` INTEGER NOT NULL AUTO_INCREMENT,
    `request` TEXT,
    `response` TEXT,
    `url` VARCHAR(2048),
    PRIMARY KEY (`id_payment_payone_api_call_log`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone_api_log`
(
    `id_payment_payone_api_log` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_payment_payone` INTEGER NOT NULL,
    `created_at` DATETIME,
    `error_code` VARCHAR(10),
    `error_message_internal` TEXT,
    `error_message_user` TEXT,
    `merchant_id` VARCHAR(20) NOT NULL,
    `mode` VARCHAR(10) NOT NULL,
    `portal_id` VARCHAR(20) NOT NULL,
    `raw_request` TEXT,
    `raw_response` TEXT,
    `redirect_url` TEXT,
    `request` VARCHAR(32) NOT NULL,
    `sequence_number` INTEGER,
    `status` VARCHAR(20),
    `transaction_id` INTEGER,
    `user_id` VARCHAR(20),
    `updated_at` DATETIME,
    PRIMARY KEY (`id_payment_payone_api_log`),
    INDEX `index-spy_payment_payone_api_log-transaction_id-sequence_number` (`transaction_id`, `sequence_number`),
    INDEX `index-spy_payment_payone_api_log-request-created_at-id` (`request`(1), `created_at`, `id_payment_payone_api_log`),
    INDEX `index-spy_payment_payone_api_log-fk_payment_payone` (`fk_payment_payone`),
    CONSTRAINT `spy_payment_payone_api_log-fk_payment_payone`
        FOREIGN KEY (`fk_payment_payone`)
        REFERENCES `spy_payment_payone` (`id_payment_payone`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone_detail`
(
    `id_payment_payone` INTEGER NOT NULL,
    `amount` INTEGER NOT NULL,
    `bank_account` VARCHAR(26),
    `bank_branch_code` VARCHAR(5),
    `bank_check_digit` VARCHAR(2),
    `bank_code` VARCHAR(8),
    `bank_country` VARCHAR(12),
    `bank_group_type` VARCHAR(50),
    `bic` VARCHAR(11),
    `clearing_bank_account` VARCHAR(26),
    `clearing_bank_account_holder` VARCHAR(35),
    `clearing_bank_bic` VARCHAR(11),
    `clearing_bank_city` VARCHAR(50),
    `clearing_bank_code` VARCHAR(11),
    `clearing_bank_country` VARCHAR(2),
    `clearing_bank_iban` VARCHAR(35),
    `clearing_bank_name` VARCHAR(50),
    `currency` VARCHAR(5) NOT NULL,
    `iban` VARCHAR(35),
    `invoice_title` VARCHAR(16),
    `mandate_identification` VARCHAR(35),
    `pseudo_card_pan` VARCHAR(32),
    `shipping_provider` VARCHAR(64),
    `type` VARCHAR(3),
    `work_order_id` VARCHAR(30),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_payment_payone`),
    CONSTRAINT `spy_payment_payone_detail-id_payment_payone`
        FOREIGN KEY (`id_payment_payone`)
        REFERENCES `spy_payment_payone` (`id_payment_payone`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone_order_item`
(
    `id_payment_payone_order_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_payment_payone` INTEGER NOT NULL,
    `fk_sales_order_item` INTEGER NOT NULL,
    `status` VARCHAR(50),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_payment_payone_order_item`),
    UNIQUE INDEX `spy_payment_payone_order_item-unique-payment_payone-order_item` (`fk_payment_payone`, `fk_sales_order_item`),
    INDEX `index-spy_payment_payone_order_item-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_payment_payone_order_item-fk_payment_payone`
        FOREIGN KEY (`fk_payment_payone`)
        REFERENCES `spy_payment_payone` (`id_payment_payone`),
    CONSTRAINT `spy_payment_payone_order_item-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone_transaction_status_log`
(
    `id_payment_payone_transaction_status_log` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_payment_payone` INTEGER NOT NULL,
    `balance` INTEGER,
    `clearing_type` VARCHAR(20),
    `mode` VARCHAR(10),
    `portal_id` VARCHAR(20),
    `price` INTEGER,
    `raw_request` TEXT,
    `receivable` INTEGER,
    `reference_id` INTEGER,
    `reminder_level` VARCHAR(20),
    `sequence_number` INTEGER,
    `status` VARCHAR(20) NOT NULL,
    `transaction_id` INTEGER,
    `transaction_time` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_payment_payone_transaction_status_log`),
    INDEX `spy_payment_payone_transaction_status_log-transaction_id` (`transaction_id`),
    INDEX `index-spy_payment_payone_transaction_status_log-fk-415e7c55d8e7` (`fk_payment_payone`),
    CONSTRAINT `spy_payment_payone_transaction_status_log-fk_payment_payone`
        FOREIGN KEY (`fk_payment_payone`)
        REFERENCES `spy_payment_payone` (`id_payment_payone`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_payone_transaction_status_log_order_item`
(
    `id_payment_payone_transaction_status_log` INTEGER NOT NULL,
    `id_sales_order_item` INTEGER NOT NULL,
    `created_at` DATETIME,
    PRIMARY KEY (`id_payment_payone_transaction_status_log`,`id_sales_order_item`),
    INDEX `fi__payone_transaction_log_order_item-id_sales_order_item` (`id_sales_order_item`),
    CONSTRAINT `spy_payone_transaction_log_order_item-id_payone_transaction_log`
        FOREIGN KEY (`id_payment_payone_transaction_status_log`)
        REFERENCES `spy_payment_payone_transaction_status_log` (`id_payment_payone_transaction_status_log`),
    CONSTRAINT `spy_payone_transaction_log_order_item-id_sales_order_item`
        FOREIGN KEY (`id_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_payment_provider`
(
    `id_payment_provider` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `payment_provider_key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_payment_provider`),
    UNIQUE INDEX `spy_payment_provider-unique-payment_provider_key` (`payment_provider_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_permission`
(
    `id_permission` INTEGER NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(255) NOT NULL,
    `configuration_signature` TEXT,
    PRIMARY KEY (`id_permission`),
    UNIQUE INDEX `spy_permission-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product`
(
    `id_price_product` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company` INTEGER,
    `fk_price_type` INTEGER NOT NULL,
    `fk_product` INTEGER,
    `fk_product_abstract` INTEGER,
    `price` INTEGER DEFAULT 0,
    PRIMARY KEY (`id_price_product`),
    UNIQUE INDEX `spy_price_product-unique-fk_product_abstract` (`fk_product_abstract`, `fk_product`, `fk_price_type`),
    UNIQUE INDEX `fk_price_type_unique_fk_product_abstract_unique` (`fk_product_abstract`, `fk_price_type`),
    UNIQUE INDEX `fk_price_type_unique_fk_product_unique` (`fk_product`, `fk_price_type`),
    INDEX `spy_price_product-fk_price_type` (`fk_price_type`),
    INDEX `spy_price_product-index-fk_product-fk_price_type-price` (`fk_product`, `fk_price_type`, `price`),
    INDEX `index-spy_price_product-fk_company` (`fk_company`),
    CONSTRAINT `spy_price_product-fk_company`
        FOREIGN KEY (`fk_company`)
        REFERENCES `spy_company` (`id_company`),
    CONSTRAINT `spy_price_product-fk_price_type`
        FOREIGN KEY (`fk_price_type`)
        REFERENCES `spy_price_type` (`id_price_type`),
    CONSTRAINT `spy_price_product-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_price_product-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_abstract_merchant_relationship_storage`
(
    `id_price_product_abstract_merchant_relationship_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(255) NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_company_business_unit` INTEGER NOT NULL,
    `data` TEXT,
    `price_key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_price_product_abstract_merchant_relationship_storage`),
    UNIQUE INDEX `spy_price_product_abstract_merchant_relationship_storage-unique-` (`alias_keys`),
    INDEX `spy_price_product_ab_m_r-fk_product-fk_company_business_unit` (`fk_product_abstract`, `fk_company_business_unit`),
    INDEX `spy_price_product_abstract_m_r_storage-price_key` (`price_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_abstract_storage`
(
    `id_price_product_abstract_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_price_product_abstract_storage`),
    UNIQUE INDEX `spy_price_product_abstract_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_price_product_abstract_storage-unique-key` (`key`),
    INDEX `spy_price_product_abstract_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_concrete_merchant_relationship_storage`
(
    `id_price_product_concrete_merchant_relationship_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(255) NOT NULL,
    `fk_product` INTEGER NOT NULL,
    `fk_company_business_unit` INTEGER NOT NULL,
    `price_key` VARCHAR(1024) NOT NULL,
    `data` TEXT,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_price_product_concrete_merchant_relationship_storage`),
    UNIQUE INDEX `spy_price_product_concrete_merchant_relationship_storage-unique-` (`alias_keys`),
    INDEX `spy_price_product_con_m_r-fk_product-fk_company_business_unit` (`fk_product`, `fk_company_business_unit`),
    INDEX `spy_price_product_concrete_m_r_storage-price_key` (`price_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_concrete_storage`
(
    `id_price_product_concrete_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_price_product_concrete_storage`),
    UNIQUE INDEX `spy_price_product_concrete_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_price_product_concrete_storage-unique-key` (`key`),
    INDEX `spy_price_product_concrete_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_default`
(
    `id_price_product_default` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_price_product_store` BIGINT NOT NULL,
    PRIMARY KEY (`id_price_product_default`),
    UNIQUE INDEX `spy_prs_prod_default-unique-price_product_store` (`fk_price_product_store`),
    CONSTRAINT `spy_price_product_default-fk_price_product_store`
        FOREIGN KEY (`fk_price_product_store`)
        REFERENCES `spy_price_product_store` (`id_price_product_store`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_merchant_relationship`
(
    `id_price_product_merchant_relationship` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_merchant_relationship` INTEGER NOT NULL,
    `fk_price_product_store` BIGINT NOT NULL,
    `fk_product` INTEGER,
    `fk_product_abstract` INTEGER,
    PRIMARY KEY (`id_price_product_merchant_relationship`),
    INDEX `spy_price_product_merchant_relationship-index-fk_p_a` (`fk_product_abstract`),
    INDEX `spy_price_product_merchant_relationship-index-fk_product` (`fk_product`),
    INDEX `spy_price_product_merchant_relationship-index-fk_m_r-fk_p_p_s` (`fk_merchant_relationship`, `fk_price_product_store`),
    INDEX `spy_price_product_merchant_relationship-fk_price_product_store` (`fk_price_product_store`),
    CONSTRAINT `spy_price_product_merchant_relationship-fk_m_r`
        FOREIGN KEY (`fk_merchant_relationship`)
        REFERENCES `spy_merchant_relationship` (`id_merchant_relationship`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_price_product_merchant_relationship-fk_price_product_store`
        FOREIGN KEY (`fk_price_product_store`)
        REFERENCES `spy_price_product_store` (`id_price_product_store`),
    CONSTRAINT `spy_price_product_merchant_relationship-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_price_product_merchant_relationship-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_offer`
(
    `id_price_product_offer` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_price_product_store` BIGINT NOT NULL,
    `fk_product_offer` INTEGER NOT NULL,
    PRIMARY KEY (`id_price_product_offer`),
    UNIQUE INDEX `spy_price_product_offer-unique-fk_p_o-fk_p_p_s` (`fk_product_offer`, `fk_price_product_store`),
    INDEX `index-spy_price_product_offer-fk_price_product_store` (`fk_price_product_store`),
    CONSTRAINT `spy_price_product_offer-fk_price_product_store`
        FOREIGN KEY (`fk_price_product_store`)
        REFERENCES `spy_price_product_store` (`id_price_product_store`),
    CONSTRAINT `spy_price_product_offer-fk_product_offer`
        FOREIGN KEY (`fk_product_offer`)
        REFERENCES `spy_product_offer` (`id_product_offer`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_schedule`
(
    `id_price_product_schedule` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    `fk_price_type` INTEGER NOT NULL,
    `fk_product` INTEGER,
    `fk_product_abstract` INTEGER,
    `fk_price_product_schedule_list` BIGINT NOT NULL,
    `net_price` INTEGER,
    `gross_price` INTEGER,
    `price_data` TEXT,
    `active_from` DATETIME NOT NULL,
    `active_to` DATETIME NOT NULL,
    `is_current` TINYINT(1) DEFAULT 0 NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_price_product_schedule`),
    INDEX `index-spy_price_product_schedule-fk_product` (`fk_product`),
    INDEX `index-spy_price_product_schedule-fk_product_abstract` (`fk_product_abstract`),
    INDEX `index-spy_price_product_schedule-fk_currency` (`fk_currency`),
    INDEX `index-spy_price_product_schedule-fk_store` (`fk_store`),
    INDEX `index-spy_price_product_schedule-fk_price_type` (`fk_price_type`),
    INDEX `index-spy_price_product_schedule-fk_price_product_schedule_list` (`fk_price_product_schedule_list`),
    CONSTRAINT `spy_price_product_schedule-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_price_product_schedule-fk_price_product_schedule_list`
        FOREIGN KEY (`fk_price_product_schedule_list`)
        REFERENCES `spy_price_product_schedule_list` (`id_price_product_schedule_list`),
    CONSTRAINT `spy_price_product_schedule-fk_price_type`
        FOREIGN KEY (`fk_price_type`)
        REFERENCES `spy_price_type` (`id_price_type`),
    CONSTRAINT `spy_price_product_schedule-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_price_product_schedule-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_price_product_schedule-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_schedule_list`
(
    `id_price_product_schedule_list` BIGINT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 0,
    `fk_user` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_price_product_schedule_list`),
    INDEX `index-spy_price_product_schedule_list-fk_user` (`fk_user`),
    INDEX `index-spy_price_product_schedule_list-name` (`name`),
    CONSTRAINT `spy_price_product_schedule_list-fk_user`
        FOREIGN KEY (`fk_user`)
        REFERENCES `spy_user` (`id_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_product_store`
(
    `id_price_product_store` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_price_product` INTEGER NOT NULL,
    `fk_store` INTEGER,
    `gross_price` INTEGER,
    `net_price` INTEGER,
    `price_data` TEXT,
    `price_data_checksum` VARCHAR(255),
    PRIMARY KEY (`id_price_product_store`),
    INDEX `spy_price_product_store-index-fk_pr_pro-fk_cur-fk_st` (`fk_currency`, `fk_store`, `fk_price_product`, `price_data_checksum`, `net_price`, `gross_price`),
    INDEX `spy_price_product_store-index-fk_pr_pro-id_pr_pro_st` (`fk_price_product`, `id_price_product_store`),
    INDEX `spy_price_product_store-fi_store` (`fk_store`),
    CONSTRAINT `spy_price_product_store-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_price_product_store-fk_price_product`
        FOREIGN KEY (`fk_price_product`)
        REFERENCES `spy_price_product` (`id_price_product`),
    CONSTRAINT `spy_price_product_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_price_type`
(
    `id_price_type` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `price_mode_configuration` TINYINT,
    PRIMARY KEY (`id_price_type`),
    UNIQUE INDEX `spy_price_type-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product`
(
    `id_product` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `attributes` TEXT NOT NULL,
    `discount` INTEGER,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `is_quantity_splittable` TINYINT(1) DEFAULT 1 NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    `warehouses` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product`),
    UNIQUE INDEX `spy_product-sku` (`sku`),
    INDEX `index-spy_product-fk_product_abstract` (`fk_product_abstract`),
    CONSTRAINT `spy_product-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract`
(
    `id_product_abstract` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_tax_set` INTEGER,
    `attributes` TEXT NOT NULL,
    `color_code` VARCHAR(8),
    `new_from` DATETIME,
    `new_to` DATETIME,
    `sku` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract`),
    UNIQUE INDEX `spy_product_abstract-sku` (`sku`),
    INDEX `index-spy_product_abstract-fk_tax_set` (`fk_tax_set`),
    CONSTRAINT `spy_product_abstract-fk_tax_set`
        FOREIGN KEY (`fk_tax_set`)
        REFERENCES `spy_tax_set` (`id_tax_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_category_storage`
(
    `id_product_abstract_category_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_category_storage`),
    UNIQUE INDEX `spy_product_abstract_category_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_category_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_category_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_group`
(
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_group` INTEGER NOT NULL,
    `position` INTEGER DEFAULT 0 NOT NULL,
    PRIMARY KEY (`fk_product_abstract`,`fk_product_group`),
    INDEX `spy_product_abstract_group-fi_product_group` (`fk_product_group`),
    CONSTRAINT `spy_product_abstract_group-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_abstract_group-fk_product_group`
        FOREIGN KEY (`fk_product_group`)
        REFERENCES `spy_product_group` (`id_product_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_group_storage`
(
    `id_product_abstract_group_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_group_storage`),
    UNIQUE INDEX `spy_product_abstract_group_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_group_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_group_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_image_storage`
(
    `id_product_abstract_image_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_image_storage`),
    UNIQUE INDEX `spy_product_abstract_image_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_image_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_image_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_label_storage`
(
    `id_product_abstract_label_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_label_storage`),
    UNIQUE INDEX `spy_product_abstract_label_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_label_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_label_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_localized_attributes`
(
    `id_abstract_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    `attributes` TEXT NOT NULL,
    `description` TEXT,
    `meta_description` TEXT,
    `meta_keywords` TEXT,
    `meta_title` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_abstract_attributes`),
    UNIQUE INDEX `spy_product_abstract_localized_attributes-unique-fk_pa` (`fk_product_abstract`, `fk_locale`),
    INDEX `index-spy_product_abstract_localized_attributes-fk-a7603b3c2144` (`fk_product_abstract`),
    INDEX `index-spy_product_abstract_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_product_abstract_localized_attributes-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_abstract_localized_attributes-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_option_storage`
(
    `id_product_abstract_option_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_option_storage`),
    UNIQUE INDEX `spy_product_abstract_option_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_option_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_option_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_page_search`
(
    `id_product_abstract_page_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_page_search`),
    UNIQUE INDEX `spy_product_abstract_page_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_page_search-unique-key` (`key`),
    INDEX `spy_product_abstract_page_search-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_product_list_storage`
(
    `id_product_abstract_product_list_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_product_list_storage`),
    UNIQUE INDEX `spy_product_abstract_product_list_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_abstract_product_list_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_product_option_group`
(
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_option_group` INTEGER NOT NULL,
    PRIMARY KEY (`fk_product_abstract`,`fk_product_option_group`),
    INDEX `spy_product_abstract-fi_product_option_group` (`fk_product_option_group`),
    CONSTRAINT `spy_product_abstract-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product_abstract-fk_product_option_group`
        FOREIGN KEY (`fk_product_option_group`)
        REFERENCES `spy_product_option_group` (`id_product_option_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_relation_storage`
(
    `id_product_abstract_relation_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_relation_storage`),
    UNIQUE INDEX `spy_product_abstract_relation_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_relation_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_relation_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_review_storage`
(
    `id_product_abstract_review_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_review_storage`),
    UNIQUE INDEX `spy_product_abstract_review_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_review_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_review_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_set`
(
    `id_product_abstract_set` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_set` INTEGER NOT NULL,
    `position` INTEGER DEFAULT 0 NOT NULL,
    PRIMARY KEY (`id_product_abstract_set`),
    UNIQUE INDEX `spy_product_abstract_set-unique-fk_product_set` (`fk_product_set`, `fk_product_abstract`),
    INDEX `spy_product_abstract_set-fk_product_abstract` (`fk_product_abstract`),
    CONSTRAINT `spy_product_abstract_set-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_abstract_set-fk_product_set`
        FOREIGN KEY (`fk_product_set`)
        REFERENCES `spy_product_set` (`id_product_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_storage`
(
    `id_product_abstract_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `sku` VARCHAR(255),
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_abstract_storage`),
    UNIQUE INDEX `spy_product_abstract_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_abstract_storage-unique-key` (`key`),
    INDEX `spy_product_abstract_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_abstract_store`
(
    `id_product_abstract_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_abstract_store`),
    UNIQUE INDEX `spy_product_abstract_store-fk_product_abstract-fk_store` (`fk_product_abstract`, `fk_store`),
    INDEX `index-spy_product_abstract_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_product_abstract_store-fk_product`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product_abstract_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_alternative`
(
    `id_product_alternative` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `fk_product_abstract_alternative` INTEGER,
    `fk_product_concrete_alternative` INTEGER,
    PRIMARY KEY (`id_product_alternative`),
    INDEX `index-spy_product_alternative-fk_product` (`fk_product`),
    INDEX `index-spy_product_alternative-fk_product_abstract_alternative` (`fk_product_abstract_alternative`),
    INDEX `index-spy_product_alternative-fk_product_concrete_alternative` (`fk_product_concrete_alternative`),
    CONSTRAINT `spy_product_alternative-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_product_alternative-fk_product_abstract_alternative`
        FOREIGN KEY (`fk_product_abstract_alternative`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product_alternative-fk_product_concrete_alternative`
        FOREIGN KEY (`fk_product_concrete_alternative`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_alternative_storage`
(
    `id_product_alternative_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` TEXT,
    `sku` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_alternative_storage`),
    UNIQUE INDEX `spy_product_alternative_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_alternative_storage-unique-key` (`key`),
    INDEX `spy_product_alternative_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_attribute_key`
(
    `id_product_attribute_key` INTEGER NOT NULL AUTO_INCREMENT,
    `is_super` TINYINT(1) DEFAULT 0 NOT NULL,
    `key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_product_attribute_key`),
    UNIQUE INDEX `spy_product_attribute_key-unique-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_bundle`
(
    `id_product_bundle` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_bundled_product` INTEGER NOT NULL COMMENT 'Representation of the single item in this bundle',
    `fk_product` INTEGER NOT NULL COMMENT 'Relation to the main bundle product',
    `quantity` INTEGER DEFAULT 1 NOT NULL COMMENT 'Number of items bundled. For instance when you have 5000 equal items you will have quantity 5000',
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_bundle`),
    INDEX `spy_product_bundle-index-fk_product` (`fk_product`),
    INDEX `index-spy_product_bundle-fk_bundled_product` (`fk_bundled_product`),
    CONSTRAINT `spy_product_bundle-fk_bundled_product`
        FOREIGN KEY (`fk_bundled_product`)
        REFERENCES `spy_product` (`id_product`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_bundle-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_bundle_storage`
(
    `id_product_bundle_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_bundle_storage`),
    UNIQUE INDEX `spy_product_bundle_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_bundle_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_category`
(
    `id_product_category` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    `product_order` INTEGER DEFAULT 0,
    PRIMARY KEY (`id_product_category`),
    UNIQUE INDEX `spy_product_category-unique-fk_product_abstract` (`fk_product_abstract`, `fk_category`),
    INDEX `index-spy_product_category-fk_category` (`fk_category`),
    CONSTRAINT `spy_product_category-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`),
    CONSTRAINT `spy_product_category-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_category_filter`
(
    `id_product_category_filter` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER,
    `filter_data` TEXT NOT NULL,
    PRIMARY KEY (`id_product_category_filter`),
    UNIQUE INDEX `spy_product_category_filter-unique-fk_category` (`fk_category`),
    INDEX `spy_product_category_filter_i_adaed7` (`fk_category`),
    CONSTRAINT `spy_product_category_filter-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_category_filter_storage`
(
    `id_product_category_filter_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_category` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_category_filter_storage`),
    UNIQUE INDEX `spy_product_category_filter_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_category_filter_storage-unique-key` (`key`),
    INDEX `spy_product_category_filter_storage-fk_category` (`fk_category`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_image_storage`
(
    `id_product_concrete_image_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_image_storage`),
    UNIQUE INDEX `spy_product_concrete_image_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_concrete_image_storage-unique-key` (`key`),
    INDEX `spy_product_concrete_image_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_measurement_unit_storage`
(
    `id_product_concrete_measurement_unit_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `store` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_measurement_unit_storage`),
    UNIQUE INDEX `spy_product_concrete_measurement_unit_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_concrete_measurement_unit_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_page_search`
(
    `id_product_concrete_page_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_page_search`),
    UNIQUE INDEX `spy_product_concrete_page_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_concrete_page_search-unique-key` (`key`),
    INDEX `spy_product_concrete_page_search-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_product_list_storage`
(
    `id_product_concrete_product_list_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_product_list_storage`),
    UNIQUE INDEX `spy_product_concrete_product_list_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_concrete_product_list_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_product_offer_price_storage`
(
    `id_product_concrete_product_offer_price_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_product_offer_price_storage`),
    UNIQUE INDEX `spy_product_concrete_product_offer_price_storage-unique-alias-ke` (`alias_keys`),
    UNIQUE INDEX `spy_product_concrete_product_offer_price_storage-unique-key` (`key`),
    INDEX `spy_product_concrete_product_offer_price_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_product_offers_storage`
(
    `id_product_concrete_product_offers_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `concrete_sku` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_product_offers_storage`),
    UNIQUE INDEX `spy_product_concrete_product_offers_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_concrete_product_offers_storage-unique-key` (`key`),
    INDEX `spy_product_concrete_product_offer_storage-concrete_sku` (`concrete_sku`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_concrete_storage`
(
    `id_product_concrete_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `sku` VARCHAR(255),
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_concrete_storage`),
    UNIQUE INDEX `spy_product_concrete_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_concrete_storage-unique-key` (`key`),
    INDEX `spy_product_concrete_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_configuration`
(
    `id_product_configuration` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `configurator_key` VARCHAR(255) NOT NULL,
    `default_configuration` LONGTEXT,
    `default_display_data` LONGTEXT,
    `is_complete` TINYINT(1) DEFAULT 0 NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_configuration`),
    INDEX `spy_product_configuration-fk_product` (`fk_product`),
    INDEX `spy_product_configuration-configurator_key` (`configurator_key`),
    CONSTRAINT `spy_product_configuration-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_configuration_storage`
(
    `id_product_configuration_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_configuration` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(255) NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_configuration_storage`),
    UNIQUE INDEX `spy_product_configuration_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_configuration_storage-sku` (`sku`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_customer_permission`
(
    `id_product_customer_permission` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_customer` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_customer_permission`),
    UNIQUE INDEX `spy_product_customer_permission-fk_product_abstract-fk_customer` (`fk_product_abstract`, `fk_customer`),
    INDEX `index-spy_product_customer_permission-fk_customer` (`fk_customer`),
    CONSTRAINT `spy_product_customer_permission-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_customer_permission-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_discontinued`
(
    `id_product_discontinued` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `active_until` DATE NOT NULL,
    `discontinued_on` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_discontinued`),
    INDEX `index-spy_product_discontinued-fk_product` (`fk_product`),
    CONSTRAINT `spy_product_discontinued-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_discontinued_note`
(
    `id_product_discontinued_note` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product_discontinued` INTEGER NOT NULL,
    `note` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_discontinued_note`),
    UNIQUE INDEX `spy_product_discontinued_note-unique-fk_product_discontinued` (`fk_product_discontinued`, `fk_locale`),
    INDEX `index-spy_product_discontinued_note-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_product_discontinued_note-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_discontinued_note-fk_product_discontinued`
        FOREIGN KEY (`fk_product_discontinued`)
        REFERENCES `spy_product_discontinued` (`id_product_discontinued`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_discontinued_storage`
(
    `id_product_discontinued_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_discontinued` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(255) NOT NULL,
    `locale` VARCHAR(5) NOT NULL,
    `sku` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_discontinued_storage`),
    UNIQUE INDEX `spy_product_discontinued_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_discontinued_storage-fk_product_discontinued` (`fk_product_discontinued`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_group`
(
    `id_product_group` INTEGER NOT NULL AUTO_INCREMENT,
    `product_group_key` VARCHAR(32),
    PRIMARY KEY (`id_product_group`),
    INDEX `spy_product_group_i_55ec34` (`product_group_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_image`
(
    `id_product_image` INTEGER NOT NULL AUTO_INCREMENT,
    `external_url_large` VARCHAR(2048),
    `external_url_small` VARCHAR(2048),
    `product_image_key` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_image`),
    INDEX `spy_product_image_i_8681df` (`product_image_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_image_set`
(
    `id_product_image_set` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER,
    `fk_product` INTEGER,
    `fk_product_abstract` INTEGER,
    `fk_resource_configurable_bundle_template` INTEGER,
    `fk_resource_product_set` INTEGER,
    `name` VARCHAR(255),
    `product_image_set_key` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_image_set`),
    UNIQUE INDEX `fk_locale-fk_product-fk_product_abstract` (`fk_locale`, `fk_product`, `fk_product_abstract`),
    INDEX `spy_product_image_set-fk_resource_configurable_bundle_template` (`fk_resource_configurable_bundle_template`),
    INDEX `spy_product_image_set-index-fk_product` (`fk_product`),
    INDEX `spy_product_image_set-index-fk_product_abstract` (`fk_product_abstract`),
    INDEX `spy_product_image_set-fk_resource_product_set` (`fk_resource_product_set`),
    INDEX `spy_product_image_set_i_6d15d0` (`product_image_set_key`),
    CONSTRAINT `spy_product_image_set-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_image_set-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_product_image_set-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product_image_set-fk_resource_c_b_t`
        FOREIGN KEY (`fk_resource_configurable_bundle_template`)
        REFERENCES `spy_configurable_bundle_template` (`id_configurable_bundle_template`),
    CONSTRAINT `spy_product_image_set-fk_resource_product_set`
        FOREIGN KEY (`fk_resource_product_set`)
        REFERENCES `spy_product_set` (`id_product_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_image_set_to_product_image`
(
    `id_product_image_set_to_product_image` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_image` INTEGER NOT NULL,
    `fk_product_image_set` INTEGER NOT NULL,
    `sort_order` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_image_set_to_product_image`),
    UNIQUE INDEX `fk_product_image_set-fk_product_image` (`fk_product_image_set`, `fk_product_image`),
    INDEX `index-spy_product_image_set_to_product_image-fk_pr-73c1243c19c1` (`fk_product_image_set`),
    INDEX `index-spy_product_image_set_to_product_image-fk_product_image` (`fk_product_image`),
    CONSTRAINT `spy_product_image_set_to_product_image-fk_product_image`
        FOREIGN KEY (`fk_product_image`)
        REFERENCES `spy_product_image` (`id_product_image`),
    CONSTRAINT `spy_product_image_set_to_product_image-fk_product_image_set`
        FOREIGN KEY (`fk_product_image_set`)
        REFERENCES `spy_product_image_set` (`id_product_image_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_label`
(
    `id_product_label` INTEGER NOT NULL AUTO_INCREMENT,
    `front_end_reference` VARCHAR(255),
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `is_dynamic` TINYINT(1) DEFAULT 0 NOT NULL,
    `is_exclusive` TINYINT(1) DEFAULT 0 NOT NULL,
    `is_published` TINYINT(1) DEFAULT 0,
    `name` VARCHAR(255) NOT NULL,
    `position` INTEGER NOT NULL,
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_label`),
    UNIQUE INDEX `spy_product_label-name` (`name`),
    INDEX `idx-spy_product_label-position` (`position`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_label_dictionary_storage`
(
    `id_product_label_dictionary_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_label_dictionary_storage`),
    UNIQUE INDEX `spy_product_label_dictionary_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_label_dictionary_storage-unique-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_label_localized_attributes`
(
    `id_product_label_localized_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product_label` INTEGER NOT NULL,
    `name` VARCHAR(255),
    PRIMARY KEY (`id_product_label_localized_attributes`),
    UNIQUE INDEX `spy_product_label_localized_attributes-fk_product_label-fk_loc` (`fk_product_label`, `fk_locale`),
    INDEX `index-spy_product_label_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_product_label_localized_attributes_fk_12b6d0`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_label_localized_attributes_fk_3dcfb4`
        FOREIGN KEY (`fk_product_label`)
        REFERENCES `spy_product_label` (`id_product_label`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_label_product_abstract`
(
    `id_product_label_product_abstract` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_label` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_label_product_abstract`),
    UNIQUE INDEX `spy_product_label_product_abstract-fk_product_label-fk_pa` (`fk_product_label`, `fk_product_abstract`),
    INDEX `idx-spy_product_label_product_abstract-fk_product_abstract` (`fk_product_abstract`),
    CONSTRAINT `spy_product_label_product_abstract_fk_371a4f`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product_label_product_abstract_fk_3dcfb4`
        FOREIGN KEY (`fk_product_label`)
        REFERENCES `spy_product_label` (`id_product_label`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_label_store`
(
    `id_product_label_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_label` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_label_store`),
    UNIQUE INDEX `spy_product_label_store-unique-fk_product_label-fk_store` (`fk_product_label`, `fk_store`),
    INDEX `index-spy_product_label_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_product_label_store-fk_product_label`
        FOREIGN KEY (`fk_product_label`)
        REFERENCES `spy_product_label` (`id_product_label`),
    CONSTRAINT `spy_product_label_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_list`
(
    `id_product_list` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_merchant_relationship` INTEGER,
    `key` VARCHAR(255),
    `title` VARCHAR(255),
    `type` TINYINT(16) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_list`),
    UNIQUE INDEX `spy_product_list-unique-key` (`key`),
    INDEX `spy_product_list-fk_merchant_relationship` (`fk_merchant_relationship`),
    INDEX `spy_product_list-type` (`type`),
    CONSTRAINT `spy_product_list-fk_merchant_relationship`
        FOREIGN KEY (`fk_merchant_relationship`)
        REFERENCES `spy_merchant_relationship` (`id_merchant_relationship`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_list_category`
(
    `fk_category` INTEGER NOT NULL,
    `fk_product_list` INTEGER NOT NULL,
    PRIMARY KEY (`fk_category`,`fk_product_list`),
    INDEX `spy_product_list_category-fk_product_list` (`fk_product_list`),
    INDEX `spy_product_list_category-fk_category` (`fk_category`),
    CONSTRAINT `spy_product_list_category-fk_category`
        FOREIGN KEY (`fk_category`)
        REFERENCES `spy_category` (`id_category`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_list_category-fk_product_list`
        FOREIGN KEY (`fk_product_list`)
        REFERENCES `spy_product_list` (`id_product_list`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_list_product_concrete`
(
    `fk_product` INTEGER NOT NULL,
    `fk_product_list` INTEGER NOT NULL,
    PRIMARY KEY (`fk_product`,`fk_product_list`),
    INDEX `spy_product_list_product_concrete-fk_product_list` (`fk_product_list`),
    INDEX `spy_product_list_product_concrete-fk_product` (`fk_product`),
    CONSTRAINT `spy_product_list_product_concrete-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_list_product_concrete-fk_product_list`
        FOREIGN KEY (`fk_product_list`)
        REFERENCES `spy_product_list` (`id_product_list`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_localized_attributes`
(
    `id_product_attributes` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product` INTEGER NOT NULL,
    `attributes` TEXT NOT NULL,
    `description` TEXT,
    `is_complete` TINYINT(1) DEFAULT 1,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_attributes`),
    UNIQUE INDEX `spy_product_localized_attributes-unique-fk_product` (`fk_product`, `fk_locale`),
    INDEX `index-spy_product_localized_attributes-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_product_localized_attributes-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_localized_attributes-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_management_attribute`
(
    `id_product_management_attribute` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_attribute_key` INTEGER NOT NULL,
    `allow_input` TINYINT(1) DEFAULT 1 NOT NULL,
    `input_type` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id_product_management_attribute`),
    UNIQUE INDEX `spy_pim_attribute-unique-fk_product_attribute_key` (`fk_product_attribute_key`),
    CONSTRAINT `spy_pim_attribute-fk_product_attribute_key`
        FOREIGN KEY (`fk_product_attribute_key`)
        REFERENCES `spy_product_attribute_key` (`id_product_attribute_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_management_attribute_value`
(
    `id_product_management_attribute_value` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_management_attribute` INTEGER NOT NULL,
    `value` TEXT NOT NULL,
    PRIMARY KEY (`id_product_management_attribute_value`),
    INDEX `index-spy_product_management_attribute_value-fk_pr-7f614d579abb` (`fk_product_management_attribute`),
    CONSTRAINT `spy_pim_attribute_value-fk_pim_attribute`
        FOREIGN KEY (`fk_product_management_attribute`)
        REFERENCES `spy_product_management_attribute` (`id_product_management_attribute`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_management_attribute_value_translation`
(
    `id_product_management_attribute_value_translation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product_management_attribute_value` INTEGER NOT NULL,
    `translation` TEXT NOT NULL,
    PRIMARY KEY (`id_product_management_attribute_value_translation`),
    UNIQUE INDEX `spy_pim_attribute_value_translation-unique-locale_attribute_val` (`fk_locale`, `fk_product_management_attribute_value`),
    INDEX `index-spy_product_management_attribute_value_trans-a710a253ee1d` (`fk_locale`),
    INDEX `index-spy_product_management_attribute_value_trans-8f14a52f8fbf` (`fk_product_management_attribute_value`),
    CONSTRAINT `spy_pim_attribute_value-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_pim_attribute_value_translation-fk_pim_attribute_value`
        FOREIGN KEY (`fk_product_management_attribute_value`)
        REFERENCES `spy_product_management_attribute_value` (`id_product_management_attribute_value`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_measurement_base_unit`
(
    `id_product_measurement_base_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_measurement_unit` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_measurement_base_unit`),
    INDEX `index-spy_product_measurement_base_unit-fk_product_abstract` (`fk_product_abstract`),
    INDEX `index-spy_product_measurement_base_unit-fk_product-42bf48cd9c9e` (`fk_product_measurement_unit`),
    CONSTRAINT `spy_product_measurement_base_unit-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product_measurement_base_unit-fk_product_measurement_unit`
        FOREIGN KEY (`fk_product_measurement_unit`)
        REFERENCES `spy_product_measurement_unit` (`id_product_measurement_unit`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_measurement_sales_unit`
(
    `id_product_measurement_sales_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `fk_product_measurement_base_unit` INTEGER NOT NULL,
    `fk_product_measurement_unit` INTEGER NOT NULL,
    `conversion` FLOAT,
    `is_default` TINYINT(1) NOT NULL,
    `is_displayed` TINYINT(1) NOT NULL,
    `key` VARCHAR(255),
    `precision` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_measurement_sales_unit`),
    INDEX `index-spy_product_measurement_sales_unit-fk_product` (`fk_product`),
    INDEX `index-spy_product_measurement_sales_unit-fk_produc-202aa3d87f0a` (`fk_product_measurement_unit`),
    INDEX `index-spy_product_measurement_sales_unit-fk_produc-5cc18a291b71` (`fk_product_measurement_base_unit`),
    CONSTRAINT `spy_product_measurement_sales_unit-fk_base_unit`
        FOREIGN KEY (`fk_product_measurement_base_unit`)
        REFERENCES `spy_product_measurement_base_unit` (`id_product_measurement_base_unit`),
    CONSTRAINT `spy_product_measurement_sales_unit-fk_measurement_unit`
        FOREIGN KEY (`fk_product_measurement_unit`)
        REFERENCES `spy_product_measurement_unit` (`id_product_measurement_unit`),
    CONSTRAINT `spy_product_measurement_sales_unit-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_measurement_sales_unit_store`
(
    `id_product_measurement_sales_unit_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_measurement_sales_unit` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_measurement_sales_unit_store`),
    UNIQUE INDEX `spy_product_measurement_sales_unit_store-sales_unit-store` (`fk_product_measurement_sales_unit`, `fk_store`),
    INDEX `index-spy_product_measurement_sales_unit_store-fk_store` (`fk_store`),
    INDEX `index-spy_product_measurement_sales_unit_store-fk_-b31f1c565a8f` (`fk_product_measurement_sales_unit`),
    CONSTRAINT `spy_product_measurement_sales_unit_store-fk_sales_unit`
        FOREIGN KEY (`fk_product_measurement_sales_unit`)
        REFERENCES `spy_product_measurement_sales_unit` (`id_product_measurement_sales_unit`),
    CONSTRAINT `spy_product_measurement_sales_unit_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_measurement_unit`
(
    `id_product_measurement_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `code` VARCHAR(255) NOT NULL,
    `default_precision` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_measurement_unit`),
    UNIQUE INDEX `spy_product_measurement_unit-code` (`code`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_measurement_unit_storage`
(
    `id_product_measurement_unit_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_measurement_unit` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_measurement_unit_storage`),
    UNIQUE INDEX `spy_product_measurement_unit_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_measurement_unit_storage-fk_p_m_u` (`fk_product_measurement_unit`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_offer`
(
    `id_product_offer` INTEGER NOT NULL AUTO_INCREMENT,
    `approval_status` VARCHAR(64) NOT NULL,
    `concrete_sku` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1,
    `merchant_reference` VARCHAR(255),
    `merchant_sku` VARCHAR(255),
    `product_offer_reference` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_offer`),
    UNIQUE INDEX `spy_product_offer-product_offer_reference` (`product_offer_reference`),
    INDEX `spy_product_offer-merchant_sku` (`merchant_sku`),
    INDEX `index-spy_product_offer-merchant_reference` (`merchant_reference`),
    INDEX `spy_product_offer-concrete_sku` (`concrete_sku`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_offer_availability_storage`
(
    `id_product_offer_availability_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `product_offer_reference` VARCHAR(255) NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `store` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_offer_availability_storage`),
    UNIQUE INDEX `spy_product_offer_availability_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_offer_availability_storage-p-o-r` (`product_offer_reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_offer_stock`
(
    `id_product_offer_stock` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_offer` INTEGER NOT NULL,
    `fk_stock` INTEGER NOT NULL,
    `is_never_out_of_stock` TINYINT(1) DEFAULT 0,
    `quantity` DECIMAL(20,10) DEFAULT 0.0000000000,
    PRIMARY KEY (`id_product_offer_stock`),
    UNIQUE INDEX `spy_product_offer_stock-unique-fk_stock` (`fk_stock`, `fk_product_offer`),
    INDEX `index-spy_product_offer_stock-fk_product_offer` (`fk_product_offer`),
    CONSTRAINT `spy_product_offer_stock-fk_product_offer`
        FOREIGN KEY (`fk_product_offer`)
        REFERENCES `spy_product_offer` (`id_product_offer`),
    CONSTRAINT `spy_product_offer_stock-fk_stock`
        FOREIGN KEY (`fk_stock`)
        REFERENCES `spy_stock` (`id_stock`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_offer_storage`
(
    `id_product_offer_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `product_offer_reference` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_offer_storage`),
    UNIQUE INDEX `spy_product_offer_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_offer_storage-unique-key` (`key`),
    INDEX `spy_product_offer_storage-product_offer_reference` (`product_offer_reference`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_offer_store`
(
    `fk_product_offer` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`fk_product_offer`,`fk_store`),
    INDEX `spy_product_offer_store_store-fi_store` (`fk_store`),
    CONSTRAINT `spy_product_offer_store-fk_product_offer`
        FOREIGN KEY (`fk_product_offer`)
        REFERENCES `spy_product_offer` (`id_product_offer`),
    CONSTRAINT `spy_product_offer_store_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_offer_validity`
(
    `id_product_offer_validity` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_offer` INTEGER NOT NULL,
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    PRIMARY KEY (`id_product_offer_validity`),
    UNIQUE INDEX `spy_product_offer_validity-fk_product_offer-unique` (`fk_product_offer`),
    CONSTRAINT `spy_product_offer_validity-fk_product_offer`
        FOREIGN KEY (`fk_product_offer`)
        REFERENCES `spy_product_offer` (`id_product_offer`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_option_group`
(
    `id_product_option_group` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_tax_set` INTEGER,
    `active` TINYINT(1),
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_option_group`),
    UNIQUE INDEX `spy_product_option_group-unique-key` (`key`),
    INDEX `index-spy_product_option_group-fk_tax_set` (`fk_tax_set`),
    CONSTRAINT `spy_product_option_group-fk_tax_set`
        FOREIGN KEY (`fk_tax_set`)
        REFERENCES `spy_tax_set` (`id_tax_set`)
        ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE `spy_product_option_value`
(
    `id_product_option_value` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_option_group` INTEGER NOT NULL,
    `price` INTEGER COMMENT 'Deprecated',
    `sku` VARCHAR(255) NOT NULL,
    `value` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_option_value`),
    UNIQUE INDEX `spy_product_option_value-sku` (`sku`),
    INDEX `index-spy_product_option_value-fk_product_option_group` (`fk_product_option_group`),
    CONSTRAINT `spy_product_option_value-fk_product_option_group`
        FOREIGN KEY (`fk_product_option_group`)
        REFERENCES `spy_product_option_group` (`id_product_option_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_option_value_price`
(
    `id_product_option_value_price` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_product_option_value` INTEGER NOT NULL,
    `fk_store` INTEGER,
    `gross_price` INTEGER,
    `net_price` INTEGER,
    PRIMARY KEY (`id_product_option_value_price`),
    UNIQUE INDEX `spy_product_option_value_price-fk_value-fk_store-fk_currency` (`fk_product_option_value`, `fk_store`, `fk_currency`),
    INDEX `index-spy_product_option_value_price-fk_currency` (`fk_currency`),
    INDEX `index-spy_product_option_value_price-fk_store` (`fk_store`),
    CONSTRAINT `spy_product_option_value_price-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_product_option_value_price-fk_product_option_value`
        FOREIGN KEY (`fk_product_option_value`)
        REFERENCES `spy_product_option_value` (`id_product_option_value`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_product_option_value_price-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_packaging_unit`
(
    `id_product_packaging_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_lead_product` INTEGER NOT NULL,
    `fk_product` INTEGER NOT NULL,
    `fk_product_packaging_unit_type` INTEGER NOT NULL,
    `amount_interval` DECIMAL(20,10),
    `amount_max` DECIMAL(20,10),
    `amount_min` DECIMAL(20,10),
    `default_amount` DECIMAL(20,10) NOT NULL,
    `is_amount_variable` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_packaging_unit`),
    UNIQUE INDEX `spy_product_packaging_unit-unique-fk_product` (`fk_product`),
    INDEX `spy_product_packaging_unit-fk_product_packaging_unit_type` (`fk_product_packaging_unit_type`),
    INDEX `index-spy_product_packaging_unit-fk_lead_product` (`fk_lead_product`),
    CONSTRAINT `spy_product_packaging_unit-fk_lead_product`
        FOREIGN KEY (`fk_lead_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_product_packaging_unit-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_product_packaging_unit-fk_product_packaging_unit_type`
        FOREIGN KEY (`fk_product_packaging_unit_type`)
        REFERENCES `spy_product_packaging_unit_type` (`id_product_packaging_unit_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_packaging_unit_storage`
(
    `id_product_packaging_unit_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_packaging_unit_storage`),
    UNIQUE INDEX `spy_product_packaging_unit_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_packaging_unit_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_packaging_unit_type`
(
    `id_product_packaging_unit_type` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_packaging_unit_type`),
    UNIQUE INDEX `spy_product_packaging_unit_type-unique-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_quantity`
(
    `id_product_quantity` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `quantity_interval` INTEGER NOT NULL,
    `quantity_max` INTEGER,
    `quantity_min` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_quantity`),
    UNIQUE INDEX `spy_product_quantity-unique-fk_product` (`fk_product`),
    CONSTRAINT `spy_product_quantity-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_quantity_storage`
(
    `id_product_quantity_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `data` TEXT,
    `key` VARCHAR(1024) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_quantity_storage`),
    UNIQUE INDEX `spy_product_quantity_storage-unique-alias-keys` (`alias_keys`),
    INDEX `spy_product_quantity_storage-fk_product` (`fk_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_relation`
(
    `id_product_relation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_relation_type` INTEGER NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `is_rebuild_scheduled` TINYINT(1) DEFAULT 0 NOT NULL,
    `product_relation_key` VARCHAR(255),
    `query_set_data` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_relation`),
    UNIQUE INDEX `spy_product-relation-unique-product-relation-key` (`product_relation_key`),
    INDEX `index-spy_product_relation-fk_product_abstract` (`fk_product_abstract`),
    INDEX `index-spy_product_relation-fk_product_relation_type` (`fk_product_relation_type`),
    CONSTRAINT `spy_product-relation-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product-relation-type-fk_product_abstract`
        FOREIGN KEY (`fk_product_relation_type`)
        REFERENCES `spy_product_relation_type` (`id_product_relation_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_relation_product_abstract`
(
    `id_product_relation_product_abstract` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `fk_product_relation` INTEGER NOT NULL,
    `order` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_relation_product_abstract`),
    INDEX `index-spy_product_relation_product_abstract-fk_product_relation` (`fk_product_relation`),
    INDEX `index-spy_product_relation_product_abstract-fk_product_abstract` (`fk_product_abstract`),
    CONSTRAINT `spy_product-rel-prod-abs-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`),
    CONSTRAINT `spy_product-rel-prod-rel-fk_product_relation`
        FOREIGN KEY (`fk_product_relation`)
        REFERENCES `spy_product_relation` (`id_product_relation`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_relation_store`
(
    `id_product_relation_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_relation` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_product_relation_store`),
    UNIQUE INDEX `spy_product_relation_store-unique-fk_product_relation-fk_store` (`fk_product_relation`, `fk_store`),
    INDEX `index-spy_product_relation_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_product_relation_store-fk_product_relation`
        FOREIGN KEY (`fk_product_relation`)
        REFERENCES `spy_product_relation` (`id_product_relation`),
    CONSTRAINT `spy_product_relation_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_relation_type`
(
    `id_product_relation_type` INTEGER NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_relation_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_replacement_for_storage`
(
    `id_product_replacement_for_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `data` TEXT,
    `sku` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_replacement_for_storage`),
    UNIQUE INDEX `spy_product_replacement_for_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_replacement_for_storage-unique-key` (`key`),
    INDEX `spy_product_replacement_for_storage-sku` (`sku`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_review`
(
    `id_product_review` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product_abstract` INTEGER NOT NULL,
    `customer_reference` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `nickname` VARCHAR(255),
    `rating` INTEGER DEFAULT 0 NOT NULL,
    `status` TINYINT DEFAULT 0 NOT NULL,
    `summary` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_review`),
    INDEX `spy_product_review-fk_product_abstract` (`fk_product_abstract`),
    INDEX `spy_product_review-fk_locale` (`fk_locale`),
    INDEX `spy_product_review-customer_reference` (`customer_reference`),
    CONSTRAINT `spy_product_review-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_review-fk_product_abstract`
        FOREIGN KEY (`fk_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_review_search`
(
    `id_product_review_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_review` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_review_search`),
    UNIQUE INDEX `spy_product_review_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_review_search-unique-key` (`key`),
    INDEX `spy_product_review_search-fk_product_review` (`fk_product_review`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_search`
(
    `id_product_search` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER,
    `fk_product` INTEGER,
    `is_searchable` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id_product_search`),
    INDEX `spy_product_search-index-fk-product-fk-locale-is_searchable` (`fk_product`, `fk_locale`, `is_searchable`),
    INDEX `spy_product_search-fi_locale` (`fk_locale`),
    CONSTRAINT `spy_product_search-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_search-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_search_attribute`
(
    `id_product_search_attribute` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_attribute_key` INTEGER NOT NULL,
    `filter_type` VARCHAR(255) NOT NULL,
    `position` INTEGER DEFAULT 0 NOT NULL,
    `synced` TINYINT(1) DEFAULT 0,
    PRIMARY KEY (`id_product_search_attribute`),
    UNIQUE INDEX `spy_product_search_attribute-unique-fk_product_attribute_key` (`fk_product_attribute_key`),
    CONSTRAINT `spy_product_search_attribute-fk_product_attribute_key`
        FOREIGN KEY (`fk_product_attribute_key`)
        REFERENCES `spy_product_attribute_key` (`id_product_attribute_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_search_attribute_archive`
(
    `id_product_search_attribute` INTEGER NOT NULL,
    `fk_product_attribute_key` INTEGER NOT NULL,
    `filter_type` VARCHAR(255) NOT NULL,
    `position` INTEGER DEFAULT 0 NOT NULL,
    `synced` TINYINT(1) DEFAULT 0,
    `archived_at` DATETIME,
    PRIMARY KEY (`id_product_search_attribute`),
    INDEX `spy_product_search_attribute_archive_i_a1d33d` (`fk_product_attribute_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_search_attribute_map`
(
    `fk_product_attribute_key` INTEGER NOT NULL,
    `synced` TINYINT(1) DEFAULT 0,
    `target_field` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`fk_product_attribute_key`,`target_field`),
    INDEX `spy_product_search_attribute_map_i_a1d33d` (`fk_product_attribute_key`),
    CONSTRAINT `spy_product_search_attribute_map-fk_product_attribute_key`
        FOREIGN KEY (`fk_product_attribute_key`)
        REFERENCES `spy_product_attribute_key` (`id_product_attribute_key`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_search_attribute_map_archive`
(
    `fk_product_attribute_key` INTEGER NOT NULL,
    `synced` TINYINT(1) DEFAULT 0,
    `target_field` VARCHAR(255) NOT NULL,
    `archived_at` DATETIME,
    PRIMARY KEY (`fk_product_attribute_key`,`target_field`),
    INDEX `spy_product_search_attribute_map_archive_i_a1d33d` (`fk_product_attribute_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_search_config_storage`
(
    `id_product_search_config_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_search_config_storage`),
    UNIQUE INDEX `spy_product_search_config_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_search_config_storage-unique-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_set`
(
    `id_product_set` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 0 NOT NULL,
    `product_set_key` VARCHAR(255) NOT NULL,
    `weight` INTEGER DEFAULT 0 NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_set`),
    UNIQUE INDEX `spy_product_set-product_set_key` (`product_set_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_set_data`
(
    `id_product_set_data` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_product_set` INTEGER NOT NULL,
    `description` TEXT,
    `meta_description` TEXT,
    `meta_keywords` TEXT,
    `meta_title` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_set_data`),
    UNIQUE INDEX `spy_product_set_data-unique-fk_product_set` (`fk_product_set`, `fk_locale`),
    INDEX `spy_product_set_data-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_product_set_data-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_product_set_data-fk_product_set`
        FOREIGN KEY (`fk_product_set`)
        REFERENCES `spy_product_set` (`id_product_set`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_product_set_page_search`
(
    `id_product_set_page_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_set` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_set_page_search`),
    UNIQUE INDEX `spy_product_set_page_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_set_page_search-unique-key` (`key`),
    INDEX `spy_product_set_page_search-fk_product_set` (`fk_product_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_set_storage`
(
    `id_product_set_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_product_set` INTEGER NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_product_set_storage`),
    UNIQUE INDEX `spy_product_set_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_product_set_storage-unique-key` (`key`),
    INDEX `spy_product_set_storage-fk_product_set` (`fk_product_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_product_validity`
(
    `id_product_validity` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `valid_from` DATETIME,
    `valid_to` DATETIME,
    PRIMARY KEY (`id_product_validity`),
    UNIQUE INDEX `spy_product_validity-fk_product-unique` (`fk_product`),
    CONSTRAINT `spy_product_validity-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`)
) ENGINE=InnoDB;

CREATE TABLE `spy_publish_and_synchronize_health_check`
(
    `id_publish_and_synchronize_health_check` INTEGER NOT NULL AUTO_INCREMENT,
    `health_check_key` VARCHAR(255) NOT NULL,
    `health_check_data` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_publish_and_synchronize_health_check`),
    UNIQUE INDEX `spy_publish_and_synchronize_health_check-health_check_key` (`health_check_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_publish_and_synchronize_health_check_search`
(
    `id_publish_and_synchronize_health_check_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_publish_and_synchronize_health_check` INTEGER NOT NULL,
    `health_check_key` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `store` VARCHAR(128),
    `locale` VARCHAR(16),
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_publish_and_synchronize_health_check_search`),
    UNIQUE INDEX `spy_publish_and_synchronize_health_check_search-unique-alias-key` (`alias_keys`),
    UNIQUE INDEX `spy_publish_and_synchronize_health_check_search-unique-key` (`key`),
    INDEX `spy_ps_hc_search-fk_publish_and_synchronize_health_check` (`fk_publish_and_synchronize_health_check`)
) ENGINE=InnoDB;

CREATE TABLE `spy_publish_and_synchronize_health_check_storage`
(
    `id_publish_and_synchronize_health_check_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_publish_and_synchronize_health_check` INTEGER NOT NULL,
    `health_check_key` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_publish_and_synchronize_health_check_storage`),
    UNIQUE INDEX `spy_publish_and_synchronize_health_check_storage-unique-alias-ke` (`alias_keys`),
    UNIQUE INDEX `spy_publish_and_synchronize_health_check_storage-unique-key` (`key`),
    INDEX `spy_ps_hc_storage-fk_publish_and_synchronize_health_check` (`fk_publish_and_synchronize_health_check`)
) ENGINE=InnoDB;

CREATE TABLE `spy_queue_process`
(
    `id_queue_process` INTEGER NOT NULL AUTO_INCREMENT,
    `server_id` VARCHAR(255) NOT NULL,
    `process_pid` INTEGER NOT NULL,
    `worker_pid` INTEGER NOT NULL,
    `queue_name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_queue_process`),
    UNIQUE INDEX `spy_queue_process-unique-key` (`server_id`, `process_pid`, `queue_name`),
    INDEX `spy_queue_process-index-key` (`server_id`, `queue_name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_quote`
(
    `id_quote` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_store` INTEGER NOT NULL,
    `customer_reference` VARCHAR(255) NOT NULL,
    `is_default` TINYINT(1) DEFAULT 0,
    `key` VARCHAR(255) COMMENT 'Key is used for DataImport as identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `quote_data` LONGTEXT NOT NULL,
    `uuid` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_quote`),
    UNIQUE INDEX `spy_quote-unique-name-customer_reference` (`name`, `customer_reference`),
    UNIQUE INDEX `spy_quote-unique-uuid` (`uuid`),
    INDEX `spy_quote-fk_store` (`fk_store`),
    INDEX `spy_quote-customer_reference` (`customer_reference`),
    CONSTRAINT `spy_quote-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_quote_approval`
(
    `id_quote_approval` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_quote` INTEGER NOT NULL,
    `fk_company_user` INTEGER NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_quote_approval`),
    INDEX `spy_quote_approval-fk_company_user` (`fk_company_user`),
    INDEX `spy_quote_approval-fk_quote` (`fk_quote`),
    INDEX `spy_quote_approval-status` (`status`),
    CONSTRAINT `spy_quote_approval-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`),
    CONSTRAINT `spy_quote_approval-fk_quote`
        FOREIGN KEY (`fk_quote`)
        REFERENCES `spy_quote` (`id_quote`)
) ENGINE=InnoDB;

CREATE TABLE `spy_quote_company_user`
(
    `id_quote_company_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_user` INTEGER NOT NULL,
    `fk_quote` INTEGER NOT NULL,
    `fk_quote_permission_group` INTEGER NOT NULL,
    `is_default` TINYINT(1) DEFAULT 1 NOT NULL,
    `uuid` VARCHAR(255),
    PRIMARY KEY (`id_quote_company_user`),
    UNIQUE INDEX `spy_quote_company_user-unique-quote_company_user` (`fk_company_user`, `fk_quote`),
    UNIQUE INDEX `spy_quote_company_user-unique-uuid` (`uuid`),
    INDEX `spy_quote_company_user-fk_quote` (`fk_quote`),
    INDEX `spy_quote_company_user-fk_quote_permission_group` (`fk_quote_permission_group`),
    INDEX `spy_quote_company_user-quote_company_user` (`fk_company_user`, `fk_quote`),
    CONSTRAINT `spy_quote_company_user-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`),
    CONSTRAINT `spy_quote_company_user-fk_quote`
        FOREIGN KEY (`fk_quote`)
        REFERENCES `spy_quote` (`id_quote`),
    CONSTRAINT `spy_quote_company_user-fk_quote_permission_group`
        FOREIGN KEY (`fk_quote_permission_group`)
        REFERENCES `spy_quote_permission_group` (`id_quote_permission_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_quote_permission_group`
(
    `id_quote_permission_group` INTEGER NOT NULL AUTO_INCREMENT,
    `is_default` TINYINT(1) DEFAULT 0 NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_quote_permission_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_quote_permission_group_to_permission`
(
    `id_quote_permission_group_to_permission` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_permission` INTEGER NOT NULL,
    `fk_quote_permission_group` INTEGER NOT NULL,
    PRIMARY KEY (`id_quote_permission_group_to_permission`),
    INDEX `spy_quote_permission_group_to_permission-fk_quote_permission_gr` (`fk_quote_permission_group`),
    INDEX `spy_quote_permission_group_to_permission-fk_permission` (`fk_permission`),
    CONSTRAINT `spy_quote_permission_group_to_permission-fk_permission`
        FOREIGN KEY (`fk_permission`)
        REFERENCES `spy_permission` (`id_permission`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_quote_permission_group_to_permission-fk_quote_permission_gr`
        FOREIGN KEY (`fk_quote_permission_group`)
        REFERENCES `spy_quote_permission_group` (`id_quote_permission_group`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_quote_request`
(
    `id_quote_request` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_user` INTEGER NOT NULL,
    `quote_request_reference` VARCHAR(255) NOT NULL,
    `valid_until` DATETIME,
    `status` VARCHAR(255),
    `is_latest_version_visible` TINYINT(1) DEFAULT 1,
    `uuid` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_quote_request`),
    UNIQUE INDEX `spy_quote_request-reference` (`quote_request_reference`),
    UNIQUE INDEX `spy_quote_request-uuid` (`uuid`),
    INDEX `spy_quote_request-fk_company_user` (`fk_company_user`),
    INDEX `spy_quote_request-quote_request_reference` (`quote_request_reference`),
    INDEX `spy_quote_request-status` (`status`),
    INDEX `spy_quote_request-valid_until-status` (`valid_until`, `status`),
    CONSTRAINT `spy_quote_request-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`)
) ENGINE=InnoDB;

CREATE TABLE `spy_quote_request_version`
(
    `id_quote_request_version` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_quote_request` INTEGER NOT NULL,
    `version` INTEGER NOT NULL,
    `version_reference` VARCHAR(255),
    `metadata` TEXT,
    `quote` LONGTEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_quote_request_version`),
    UNIQUE INDEX `spy_quote_request_version-fk_quote_request-version` (`fk_quote_request`, `version`),
    INDEX `spy_quote_request_version-fk_quote_request` (`fk_quote_request`),
    INDEX `spy_quote_request_version-version` (`version`),
    INDEX `spy_quote_request_version-version_reference` (`version_reference`),
    CONSTRAINT `spy_quote_request_version-fk_quote_request`
        FOREIGN KEY (`fk_quote_request`)
        REFERENCES `spy_quote_request` (`id_quote_request`)
) ENGINE=InnoDB;

CREATE TABLE `spy_refund`
(
    `id_refund` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `amount` INTEGER NOT NULL,
    `comment` TEXT,
    `created_at` DATETIME,
    PRIMARY KEY (`id_refund`),
    INDEX `index-spy_refund-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_refund-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_region`
(
    `id_region` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_country` INTEGER,
    `iso2_code` VARCHAR(6) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id_region`),
    UNIQUE INDEX `spy_region-iso2_code` (`iso2_code`),
    INDEX `index-spy_region-fk_country` (`fk_country`),
    CONSTRAINT `spy_region-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`)
) ENGINE=InnoDB;

CREATE TABLE `spy_resource_share`
(
    `id_resource_share` INTEGER NOT NULL AUTO_INCREMENT,
    `customer_reference` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(255),
    `resource_type` VARCHAR(255) NOT NULL,
    `resource_data` TEXT,
    `expiry_date` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_resource_share`),
    UNIQUE INDEX `id_resource_share-uuid` (`uuid`),
    INDEX `spy_resource_share-uuid` (`uuid`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_discount`
(
    `id_sales_discount` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_expense` INTEGER,
    `fk_sales_order` INTEGER,
    `fk_sales_order_item` INTEGER,
    `fk_sales_order_item_option` INTEGER,
    `amount` INTEGER NOT NULL,
    `description` VARCHAR(510),
    `display_name` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_discount`),
    INDEX `index-spy_sales_discount-fk_sales_order` (`fk_sales_order`),
    INDEX `index-spy_sales_discount-fk_sales_order_item` (`fk_sales_order_item`),
    INDEX `index-spy_sales_discount-fk_sales_expense` (`fk_sales_expense`),
    INDEX `index-spy_sales_discount-fk_sales_order_item_option` (`fk_sales_order_item_option`),
    CONSTRAINT `spy_sales_discount-fk_sales_expense`
        FOREIGN KEY (`fk_sales_expense`)
        REFERENCES `spy_sales_expense` (`id_sales_expense`),
    CONSTRAINT `spy_sales_discount-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`),
    CONSTRAINT `spy_sales_discount-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`),
    CONSTRAINT `spy_sales_discount-fk_sales_order_item_option`
        FOREIGN KEY (`fk_sales_order_item_option`)
        REFERENCES `spy_sales_order_item_option` (`id_sales_order_item_option`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_discount_code`
(
    `id_sales_discount_code` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_discount` INTEGER NOT NULL,
    `code` VARCHAR(255) NOT NULL,
    `codepool_name` VARCHAR(255) NOT NULL,
    `is_once_per_customer` TINYINT(1) DEFAULT 1,
    `is_refundable` TINYINT(1) DEFAULT 0,
    `is_reusable` TINYINT(1) DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_discount_code`),
    INDEX `index-spy_sales_discount_code-fk_sales_discount` (`fk_sales_discount`),
    CONSTRAINT `spy_sales_discount_code-fk_sales_discount`
        FOREIGN KEY (`fk_sales_discount`)
        REFERENCES `spy_sales_discount` (`id_sales_discount`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_expense`
(
    `id_sales_expense` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER,
    `canceled_amount` INTEGER DEFAULT 0,
    `discount_amount_aggregation` INTEGER DEFAULT 0 COMMENT '/Total discount amount for item/',
    `gross_price` INTEGER NOT NULL,
    `merchant_reference` VARCHAR(255),
    `name` VARCHAR(255),
    `net_price` INTEGER DEFAULT 0 COMMENT '/Price for one unit not including tax, without shipping, coupons/',
    `price` INTEGER DEFAULT 0 COMMENT '/Price for item, can be gross or net price depending on tax mode/',
    `price_to_pay_aggregation` INTEGER DEFAULT 0 COMMENT '/Total item price to pay after discounts/',
    `refundable_amount` INTEGER DEFAULT 0 COMMENT '/Total item refundable amount/',
    `tax_amount` INTEGER DEFAULT 0 COMMENT '/Calculated tax amount based on tax mode/',
    `tax_amount_after_cancellation` INTEGER DEFAULT 0 COMMENT '/Calculated tax full amount based on tax mode, includes options, item expenses, /',
    `tax_rate` DECIMAL(8,2),
    `type` VARCHAR(150),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_expense`),
    INDEX `spy_sales_expense-index-fk_sales_order` (`fk_sales_order`, `type`),
    CONSTRAINT `spy_sales_expense-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order`
(
    `id_sales_order` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER,
    `fk_order_source` INTEGER,
    `fk_sales_order_address_billing` INTEGER NOT NULL,
    `fk_sales_order_address_shipping` INTEGER,
    `cart_note` VARCHAR(255),
    `company_business_unit_uuid` VARCHAR(36),
    `company_uuid` VARCHAR(36),
    `currency_iso_code` VARCHAR(5),
    `customer_reference` VARCHAR(255),
    `email` VARCHAR(255),
    `first_name` VARCHAR(100),
    `is_test` TINYINT(1) DEFAULT 0 NOT NULL,
    `last_name` VARCHAR(100),
    `oms_processor_identifier` TINYINT COMMENT 'Defines the processor id for OMS multi-thread order processing',
    `order_custom_reference` VARCHAR(255),
    `order_reference` VARCHAR(45) NOT NULL,
    `price_mode` TINYINT,
    `salutation` TINYINT,
    `store` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order`),
    UNIQUE INDEX `spy_sales_order-order_reference` (`order_reference`),
    INDEX `index-spy_sales_order-company_business_unit_uuid` (`company_business_unit_uuid`),
    INDEX `index-spy_sales_order-company_uuid` (`company_uuid`),
    INDEX `spy_sales_order-customer_reference` (`customer_reference`),
    INDEX `index-spy_sales_order-oms_processor_identifier` (`oms_processor_identifier`),
    INDEX `spy_sales_order-store` (`store`),
    INDEX `spy_sales_order-currency_iso_code` (`currency_iso_code`),
    INDEX `index-spy_sales_order-fk_order_source` (`fk_order_source`),
    INDEX `index-spy_sales_order-fk_sales_order_address_billing` (`fk_sales_order_address_billing`),
    INDEX `index-spy_sales_order-fk_sales_order_address_shipping` (`fk_sales_order_address_shipping`),
    INDEX `index-spy_sales_order-fk_locale` (`fk_locale`),
    CONSTRAINT `spy_sales_order-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_sales_order-fk_order_source`
        FOREIGN KEY (`fk_order_source`)
        REFERENCES `spy_order_source` (`id_order_source`),
    CONSTRAINT `spy_sales_order-fk_sales_order_address_billing`
        FOREIGN KEY (`fk_sales_order_address_billing`)
        REFERENCES `spy_sales_order_address` (`id_sales_order_address`),
    CONSTRAINT `spy_sales_order-fk_sales_order_address_shipping`
        FOREIGN KEY (`fk_sales_order_address_shipping`)
        REFERENCES `spy_sales_order_address` (`id_sales_order_address`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_address`
(
    `id_sales_order_address` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_country` INTEGER NOT NULL,
    `fk_region` INTEGER,
    `address1` VARCHAR(255),
    `address2` VARCHAR(255),
    `address3` VARCHAR(255),
    `cell_phone` VARCHAR(255),
    `city` VARCHAR(255) NOT NULL,
    `comment` VARCHAR(255),
    `company` VARCHAR(255),
    `description` VARCHAR(255),
    `email` VARCHAR(255),
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `middle_name` VARCHAR(100),
    `phone` VARCHAR(255),
    `po_box` VARCHAR(255),
    `salutation` TINYINT,
    `zip_code` VARCHAR(15) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_address`),
    INDEX `index-spy_sales_order_address-fk_country` (`fk_country`),
    INDEX `index-spy_sales_order_address-fk_region` (`fk_region`),
    CONSTRAINT `spy_sales_order_address-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`),
    CONSTRAINT `spy_sales_order_address-fk_region`
        FOREIGN KEY (`fk_region`)
        REFERENCES `spy_region` (`id_region`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_address_history`
(
    `id_sales_order_address_history` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_country` INTEGER NOT NULL,
    `fk_region` INTEGER,
    `fk_sales_order_address` INTEGER NOT NULL,
    `address1` VARCHAR(255),
    `address2` VARCHAR(255),
    `address3` VARCHAR(255),
    `cell_phone` VARCHAR(255),
    `city` VARCHAR(255) NOT NULL,
    `comment` VARCHAR(255),
    `company` VARCHAR(255),
    `description` VARCHAR(255),
    `email` VARCHAR(255),
    `first_name` VARCHAR(100) NOT NULL,
    `is_billing` TINYINT(1) DEFAULT 0,
    `last_name` VARCHAR(100) NOT NULL,
    `middle_name` VARCHAR(100),
    `phone` VARCHAR(255),
    `po_box` VARCHAR(255),
    `salutation` TINYINT,
    `zip_code` VARCHAR(15) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_address_history`),
    INDEX `index-spy_sales_order_address_history-fk_country` (`fk_country`),
    INDEX `index-spy_sales_order_address_history-fk_sales_order_address` (`fk_sales_order_address`),
    INDEX `index-spy_sales_order_address_history-fk_region` (`fk_region`),
    CONSTRAINT `spy_sales_order_address_history-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`),
    CONSTRAINT `spy_sales_order_address_history-fk_region`
        FOREIGN KEY (`fk_region`)
        REFERENCES `spy_region` (`id_region`),
    CONSTRAINT `spy_sales_order_address_history-fk_sales_order_address`
        FOREIGN KEY (`fk_sales_order_address`)
        REFERENCES `spy_sales_order_address` (`id_sales_order_address`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_comment`
(
    `id_sales_order_comment` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `message` TEXT NOT NULL,
    `username` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_comment`),
    INDEX `index-spy_sales_order_comment-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_sales_order_comment-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_configured_bundle`
(
    `id_sales_order_configured_bundle` INTEGER NOT NULL AUTO_INCREMENT,
    `configurable_bundle_template_uuid` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `note` VARCHAR(255),
    `quantity` INTEGER DEFAULT 1 NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_configured_bundle`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_configured_bundle_item`
(
    `id_sales_order_configured_bundle_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_configured_bundle` INTEGER NOT NULL,
    `fk_sales_order_item` INTEGER NOT NULL,
    `configurable_bundle_template_slot_uuid` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_configured_bundle_item`),
    UNIQUE INDEX `spy_sales_order_conf_bundle_item-unique-fk_sales_order_item` (`fk_sales_order_item`),
    INDEX `spy_sales_order_conf_bundle_item-fk_sales_order_conf_bundle` (`fk_sales_order_configured_bundle`),
    INDEX `index-spy_sales_order_configured_bundle_item-fk_sa-8c9b754c1647` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_order_conf_bundle_item-fk_sales_order_conf_bundle`
        FOREIGN KEY (`fk_sales_order_configured_bundle`)
        REFERENCES `spy_sales_order_configured_bundle` (`id_sales_order_configured_bundle`),
    CONSTRAINT `spy_sales_order_configured_bundle_item-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_invoice`
(
    `id_sales_order_invoice` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `reference` VARCHAR(64),
    `issue_date` DATETIME,
    `template_path` VARCHAR(255) NOT NULL,
    `email_sent` TINYINT(1) DEFAULT 0 NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_invoice`),
    UNIQUE INDEX `spy_sales_order_invoice-reference` (`reference`),
    INDEX `index-spy_sales_order_invoice-fk_sales_order` (`fk_sales_order`),
    INDEX `index-spy_sales_order_invoice-email_sent` (`email_sent`),
    CONSTRAINT `spy_sales_order_invoice-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_item`
(
    `id_sales_order_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_oms_order_item_state` INTEGER NOT NULL,
    `fk_oms_order_process` INTEGER,
    `fk_sales_order` INTEGER NOT NULL,
    `fk_sales_order_item_bundle` INTEGER,
    `fk_sales_shipment` INTEGER,
    `amount` DECIMAL(20,10),
    `amount_base_measurement_unit_name` VARCHAR(255),
    `amount_measurement_unit_code` VARCHAR(255),
    `amount_measurement_unit_conversion` FLOAT,
    `amount_measurement_unit_name` VARCHAR(255),
    `amount_measurement_unit_precision` INTEGER,
    `amount_sku` VARCHAR(255),
    `canceled_amount` INTEGER DEFAULT 0,
    `cart_note` VARCHAR(255),
    `discount_amount_aggregation` INTEGER DEFAULT 0 COMMENT '/Total discount amount for item/',
    `discount_amount_full_aggregation` INTEGER DEFAULT 0 COMMENT '/Total discount amount for item with options or item expenses/',
    `expense_price_aggregation` INTEGER DEFAULT 0 COMMENT '/Total price amount for item from item expenses/',
    `gross_price` INTEGER NOT NULL COMMENT '/price for one unit including tax, without shipping, coupons/',
    `group_key` VARCHAR(255),
    `is_quantity_splittable` TINYINT(1) DEFAULT 1 NOT NULL,
    `last_state_change` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `merchant_reference` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    `net_price` INTEGER DEFAULT 0 COMMENT '/Price for one unit not including tax, without shipping, coupons/',
    `order_item_reference` VARCHAR(255),
    `price` INTEGER DEFAULT 0 COMMENT '/Price for item, can be gross or net price depending on tax mode/',
    `price_to_pay_aggregation` INTEGER DEFAULT 0 COMMENT '/Total item price to pay after discounts including options or item expenses/',
    `product_offer_reference` VARCHAR(255),
    `product_option_price_aggregation` INTEGER DEFAULT 0 COMMENT '/Total price amount for item from options/',
    `quantity` INTEGER DEFAULT 1 NOT NULL COMMENT '/Quantity ordered for item/',
    `quantity_base_measurement_unit_name` VARCHAR(255),
    `quantity_measurement_unit_code` VARCHAR(255),
    `quantity_measurement_unit_conversion` FLOAT,
    `quantity_measurement_unit_name` VARCHAR(255),
    `quantity_measurement_unit_precision` INTEGER,
    `refundable_amount` INTEGER DEFAULT 0 COMMENT '/Total item refundable amount/',
    `remuneration_amount` INTEGER,
    `sku` VARCHAR(255) NOT NULL,
    `subtotal_aggregation` INTEGER COMMENT '/Subtotal price amount (item + options + item expenses) before discounts/',
    `tax_amount` INTEGER DEFAULT 0 COMMENT '/Calculated tax amount based on tax mode/',
    `tax_amount_after_cancellation` INTEGER DEFAULT 0 COMMENT '/Calculated tax full amount based on tax mode, includes options, item expenses, /',
    `tax_amount_full_aggregation` INTEGER DEFAULT 0 COMMENT '/Calculated tax full amount based on tax mode, includes options, item expenses/',
    `tax_rate` DECIMAL(8,2),
    `tax_rate_average_aggregation` DECIMAL(8,2) COMMENT '/Calculated tax rate, includes options, item expenses, /',
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_item`),
    UNIQUE INDEX `spy_sales_order_item-order_item_reference` (`order_item_reference`),
    UNIQUE INDEX `spy_sales-order-item-uuid` (`uuid`),
    INDEX `spy_sales_order_item-index-product_offer_reference` (`product_offer_reference`),
    INDEX `spy_sales_order_item-sku` (`sku`),
    INDEX `index-spy_sales_order_item-fk_sales_shipment` (`fk_sales_shipment`),
    INDEX `index-spy_sales_order_item-fk_sales_order_item_bundle` (`fk_sales_order_item_bundle`),
    INDEX `index-spy_sales_order_item-fk_sales_order` (`fk_sales_order`),
    INDEX `index-spy_sales_order_item-fk_oms_order_item_state` (`fk_oms_order_item_state`),
    INDEX `index-spy_sales_order_item-fk_oms_order_process` (`fk_oms_order_process`),
    CONSTRAINT `spy_sales_order_item-fk_oms_order_item_state`
        FOREIGN KEY (`fk_oms_order_item_state`)
        REFERENCES `spy_oms_order_item_state` (`id_oms_order_item_state`),
    CONSTRAINT `spy_sales_order_item-fk_oms_order_process`
        FOREIGN KEY (`fk_oms_order_process`)
        REFERENCES `spy_oms_order_process` (`id_oms_order_process`),
    CONSTRAINT `spy_sales_order_item-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`),
    CONSTRAINT `spy_sales_order_item-fk_sales_order_item_bundle`
        FOREIGN KEY (`fk_sales_order_item_bundle`)
        REFERENCES `spy_sales_order_item_bundle` (`id_sales_order_item_bundle`),
    CONSTRAINT `spy_sales_order_item-fk_sales_shipment`
        FOREIGN KEY (`fk_sales_shipment`)
        REFERENCES `spy_sales_shipment` (`id_sales_shipment`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_item_bundle`
(
    `id_sales_order_item_bundle` INTEGER NOT NULL AUTO_INCREMENT,
    `cart_note` VARCHAR(255),
    `gross_price` INTEGER NOT NULL,
    `image` TEXT,
    `name` VARCHAR(255) NOT NULL,
    `net_price` INTEGER DEFAULT 0,
    `price` INTEGER DEFAULT 0,
    `sku` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_item_bundle`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_item_configuration`
(
    `id_sales_order_item_configuration` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `display_data` LONGTEXT,
    `configuration` LONGTEXT,
    `configurator_key` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_item_configuration`),
    INDEX `spy_sales_order_item_configuration-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_order_item_configuration-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_item_gift_card`
(
    `id_sales_order_item_gift_card` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `attributes` TEXT,
    `code` VARCHAR(40),
    `pattern` VARCHAR(40),
    `value` INTEGER,
    PRIMARY KEY (`id_sales_order_item_gift_card`),
    INDEX `index-spy_sales_order_item_gift_card-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_order_item_gift_card-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_item_metadata`
(
    `id_sales_order_item_metadata` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `image` TEXT,
    `super_attributes` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_item_metadata`),
    INDEX `spy_sales_order_item_metadata-index-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_order_item_metadata-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_item_option`
(
    `id_sales_order_item_option` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `canceled_amount` INTEGER DEFAULT 0,
    `discount_amount_aggregation` INTEGER DEFAULT 0 COMMENT '/Total discount amount for item/',
    `gross_price` INTEGER DEFAULT 0 NOT NULL,
    `group_name` VARCHAR(255) NOT NULL,
    `net_price` INTEGER DEFAULT 0 COMMENT '/Price for one unit not including tax, without shipping, coupons/',
    `price` INTEGER DEFAULT 0 COMMENT '/Price for item, can be gross or net price depending on tax mode/',
    `sku` VARCHAR(255) NOT NULL,
    `tax_amount` INTEGER DEFAULT 0 COMMENT '/Calculated tax amount based on tax mode/',
    `tax_rate` DECIMAL(8,2) NOT NULL,
    `value` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_item_option`),
    INDEX `index-spy_sales_order_item_option-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_order_item_option-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_note`
(
    `id_sales_order_note` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `command` VARCHAR(255) NOT NULL,
    `message` VARCHAR(255) NOT NULL,
    `success` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_note`),
    INDEX `index-spy_sales_order_note-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_sales_order_note-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_threshold`
(
    `id_sales_order_threshold` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_sales_order_threshold_type` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    `fee` INTEGER,
    `message_glossary_key` VARCHAR(255) NOT NULL,
    `threshold` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_threshold`),
    INDEX `index-spy_sales_order_threshold-fk_sales_order_threshold_type` (`fk_sales_order_threshold_type`),
    INDEX `index-spy_sales_order_threshold-fk_currency` (`fk_currency`),
    INDEX `index-spy_sales_order_threshold-fk_store` (`fk_store`),
    CONSTRAINT `spy_sales_order_threshold-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_sales_order_threshold-fk_sales_order_threshold_type`
        FOREIGN KEY (`fk_sales_order_threshold_type`)
        REFERENCES `spy_sales_order_threshold_type` (`id_sales_order_threshold_type`),
    CONSTRAINT `spy_sales_order_threshold-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_threshold_tax_set`
(
    `id_sales_order_threshold_tax_set` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_tax_set` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_threshold_tax_set`),
    INDEX `index-spy_sales_order_threshold_tax_set-fk_tax_set` (`fk_tax_set`),
    CONSTRAINT `spy_sales_order_threshold_tax_set-fk_tax_set`
        FOREIGN KEY (`fk_tax_set`)
        REFERENCES `spy_tax_set` (`id_tax_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_threshold_type`
(
    `id_sales_order_threshold_type` INTEGER NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(255) NOT NULL,
    `threshold_group` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_threshold_type`),
    UNIQUE INDEX `spy_sales_order_threshold_type-unique-key` (`key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_order_totals`
(
    `id_sales_order_totals` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER DEFAULT 0 NOT NULL,
    `canceled_total` INTEGER DEFAULT 0,
    `discount_total` INTEGER DEFAULT 0,
    `grand_total` INTEGER DEFAULT 0,
    `order_expense_total` INTEGER DEFAULT 0,
    `refund_total` INTEGER DEFAULT 0,
    `subtotal` INTEGER DEFAULT 0,
    `tax_total` INTEGER DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_order_totals`),
    INDEX `index-spy_sales_order_totals-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_sales_order_totals-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_payment`
(
    `id_sales_payment` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `fk_sales_payment_method_type` INTEGER NOT NULL,
    `amount` INTEGER NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_payment`),
    INDEX `index-spy_sales_payment-fk_sales_order` (`fk_sales_order`),
    INDEX `index-spy_sales_payment-fk_sales_payment_method_type` (`fk_sales_payment_method_type`),
    CONSTRAINT `spy_sales_payment-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`),
    CONSTRAINT `spy_sales_payment-fk_sales_payment_method_type`
        FOREIGN KEY (`fk_sales_payment_method_type`)
        REFERENCES `spy_sales_payment_method_type` (`id_sales_payment_method_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_payment_method_type`
(
    `id_sales_payment_method_type` INTEGER NOT NULL AUTO_INCREMENT,
    `payment_method` VARCHAR(255) NOT NULL,
    `payment_provider` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_sales_payment_method_type`),
    INDEX `spy_sales_payment_method_type-type` (`payment_provider`, `payment_method`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_reclamation`
(
    `id_sales_reclamation` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order` INTEGER NOT NULL,
    `customer_email` VARCHAR(255) NOT NULL,
    `customer_name` VARCHAR(511) NOT NULL,
    `customer_reference` VARCHAR(255),
    `is_open` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_reclamation`),
    INDEX `index-spy_sales_reclamation-fk_sales_order` (`fk_sales_order`),
    CONSTRAINT `spy_sales_reclamation-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_reclamation_item`
(
    `id_sales_reclamation_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `fk_sales_reclamation` INTEGER NOT NULL,
    PRIMARY KEY (`id_sales_reclamation_item`),
    INDEX `index-spy_sales_reclamation_item-fk_sales_reclamation` (`fk_sales_reclamation`),
    INDEX `index-spy_sales_reclamation_item-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_reclamation_item-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`),
    CONSTRAINT `spy_sales_reclamation_item-fk_sales_reclamation`
        FOREIGN KEY (`fk_sales_reclamation`)
        REFERENCES `spy_sales_reclamation` (`id_sales_reclamation`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_return`
(
    `id_sales_return` INTEGER NOT NULL AUTO_INCREMENT,
    `customer_reference` VARCHAR(255),
    `merchant_reference` VARCHAR(255),
    `return_reference` VARCHAR(255) NOT NULL,
    `store` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_return`),
    UNIQUE INDEX `spy_sales_return-return_reference` (`return_reference`),
    INDEX `spy_sales_return-merchant_reference` (`merchant_reference`),
    INDEX `spy_sales_return-customer_reference` (`customer_reference`),
    INDEX `spy_sales_return-store` (`store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_return_item`
(
    `id_sales_return_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_order_item` INTEGER NOT NULL,
    `fk_sales_return` INTEGER NOT NULL,
    `reason` TEXT,
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_return_item`),
    UNIQUE INDEX `spy_sales_return_item-uuid` (`uuid`),
    INDEX `spy_sales_return_item-fk_sales_return` (`fk_sales_return`),
    INDEX `spy_sales_return_item-fk_sales_order_item` (`fk_sales_order_item`),
    CONSTRAINT `spy_sales_return_item-fk_sales_order_item`
        FOREIGN KEY (`fk_sales_order_item`)
        REFERENCES `spy_sales_order_item` (`id_sales_order_item`),
    CONSTRAINT `spy_sales_return_item-fk_sales_return`
        FOREIGN KEY (`fk_sales_return`)
        REFERENCES `spy_sales_return` (`id_sales_return`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_return_reason`
(
    `id_sales_return_reason` INTEGER NOT NULL AUTO_INCREMENT,
    `glossary_key_reason` VARCHAR(255) NOT NULL,
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    PRIMARY KEY (`id_sales_return_reason`),
    UNIQUE INDEX `spy_sales_return_reason-glossary_key_reason` (`glossary_key_reason`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_return_reason_search`
(
    `id_sales_return_reason_search` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_sales_return_reason` INTEGER NOT NULL,
    `structured_data` TEXT NOT NULL,
    `data` LONGTEXT,
    `locale` VARCHAR(16) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_return_reason_search`),
    UNIQUE INDEX `spy_sales_return_reason_search-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_sales_return_reason_search-unique-key` (`key`),
    INDEX `spy_sales_return_reason_search-fk_sales_return_reason` (`fk_sales_return_reason`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sales_shipment`
(
    `id_sales_shipment` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_sales_expense` INTEGER,
    `fk_sales_order` INTEGER NOT NULL,
    `fk_sales_order_address` INTEGER,
    `carrier_name` VARCHAR(255),
    `delivery_time` VARCHAR(255),
    `merchant_reference` VARCHAR(255),
    `name` VARCHAR(255),
    `requested_delivery_date` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_sales_shipment`),
    INDEX `index-spy_sales_shipment-fk_sales_order_address` (`fk_sales_order_address`),
    INDEX `index-spy_sales_shipment-fk_sales_order` (`fk_sales_order`),
    INDEX `index-spy_sales_shipment-fk_sales_expense` (`fk_sales_expense`),
    CONSTRAINT `spy_sales_shipment-fk_sales_expense`
        FOREIGN KEY (`fk_sales_expense`)
        REFERENCES `spy_sales_expense` (`id_sales_expense`),
    CONSTRAINT `spy_sales_shipment-fk_sales_order`
        FOREIGN KEY (`fk_sales_order`)
        REFERENCES `spy_sales_order` (`id_sales_order`),
    CONSTRAINT `spy_sales_shipment-fk_sales_order_address`
        FOREIGN KEY (`fk_sales_order_address`)
        REFERENCES `spy_sales_order_address` (`id_sales_order_address`)
) ENGINE=InnoDB;

CREATE TABLE `spy_sequence_number`
(
    `id_sequence_number` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `current_id` INTEGER NOT NULL,
    PRIMARY KEY (`id_sequence_number`),
    UNIQUE INDEX `spy_sequence_number-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shipment_carrier`
(
    `id_shipment_carrier` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_shipment_carrier`),
    INDEX `spy_shipment_carrier-is_active` (`is_active`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shipment_method`
(
    `id_shipment_method` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_shipment_carrier` INTEGER NOT NULL,
    `fk_tax_set` INTEGER,
    `availability_plugin` VARCHAR(255),
    `default_price` INTEGER COMMENT 'Deprecated',
    `delivery_time_plugin` VARCHAR(255),
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `price_plugin` VARCHAR(255),
    `shipment_method_key` VARCHAR(255),
    PRIMARY KEY (`id_shipment_method`),
    INDEX `spy_shipment_method-is_active` (`is_active`),
    INDEX `index-spy_shipment_method-fk_shipment_carrier` (`fk_shipment_carrier`),
    INDEX `index-spy_shipment_method-fk_tax_set` (`fk_tax_set`),
    CONSTRAINT `spy_shipment_method-fk_shipment_carrier`
        FOREIGN KEY (`fk_shipment_carrier`)
        REFERENCES `spy_shipment_carrier` (`id_shipment_carrier`),
    CONSTRAINT `spy_shipment_method-fk_tax_set`
        FOREIGN KEY (`fk_tax_set`)
        REFERENCES `spy_tax_set` (`id_tax_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shipment_method_price`
(
    `id_shipment_method_price` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_currency` INTEGER NOT NULL,
    `fk_shipment_method` INTEGER NOT NULL,
    `fk_store` INTEGER,
    `default_gross_price` INTEGER,
    `default_net_price` INTEGER,
    PRIMARY KEY (`id_shipment_method_price`),
    UNIQUE INDEX `spy_shipment_method_price-fk_shipment_method-fk_currency-fk_s` (`fk_shipment_method`, `fk_store`, `fk_currency`),
    INDEX `index-spy_shipment_method_price-fk_currency` (`fk_currency`),
    INDEX `index-spy_shipment_method_price-fk_store` (`fk_store`),
    CONSTRAINT `spy_shipment_method_price-fk_currency`
        FOREIGN KEY (`fk_currency`)
        REFERENCES `spy_currency` (`id_currency`),
    CONSTRAINT `spy_shipment_method_price-fk_shipment_method`
        FOREIGN KEY (`fk_shipment_method`)
        REFERENCES `spy_shipment_method` (`id_shipment_method`),
    CONSTRAINT `spy_shipment_method_price-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shipment_method_store`
(
    `id_shipment_method_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_shipment_method` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_shipment_method_store`),
    UNIQUE INDEX `spy_shipment_method_store-unique-shipment_method` (`fk_shipment_method`, `fk_store`),
    INDEX `index-shipment_method_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_shipment_method_store-fk_shipment_method`
        FOREIGN KEY (`fk_shipment_method`)
        REFERENCES `spy_shipment_method` (`id_shipment_method`),
    CONSTRAINT `spy_shipment_method_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list`
(
    `id_shopping_list` INTEGER NOT NULL AUTO_INCREMENT,
    `customer_reference` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255),
    `key` VARCHAR(255) COMMENT 'Key is an identifier for existing entities. This should never be changed.',
    `name` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_shopping_list`),
    UNIQUE INDEX `spy_shopping_list-unique-customer_reference_id_shopping_list` (`customer_reference`, `id_shopping_list`),
    UNIQUE INDEX `spy_shopping_list-unique-uuid` (`uuid`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_company_business_unit`
(
    `id_shopping_list_company_business_unit` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_business_unit` INTEGER NOT NULL,
    `fk_shopping_list` INTEGER NOT NULL,
    `fk_shopping_list_permission_group` INTEGER NOT NULL,
    PRIMARY KEY (`id_shopping_list_company_business_unit`),
    INDEX `index-spy_shopping_list_company_business_unit-fk_c-350661b6e556` (`fk_company_business_unit`),
    INDEX `index-spy_shopping_list_company_business_unit-fk_shopping_list` (`fk_shopping_list`),
    INDEX `index-spy_shopping_list_company_business_unit-fk_s-ac186bc7732a` (`fk_shopping_list_permission_group`),
    CONSTRAINT `spy_shopping_list_business_unit-fk_company_business_unit`
        FOREIGN KEY (`fk_company_business_unit`)
        REFERENCES `spy_company_business_unit` (`id_company_business_unit`),
    CONSTRAINT `spy_shopping_list_business_unit-fk_shopping_list_perm_group`
        FOREIGN KEY (`fk_shopping_list_permission_group`)
        REFERENCES `spy_shopping_list_permission_group` (`id_shopping_list_permission_group`),
    CONSTRAINT `spy_shopping_list_company_business_unit-fk_shopping_list`
        FOREIGN KEY (`fk_shopping_list`)
        REFERENCES `spy_shopping_list` (`id_shopping_list`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_company_business_unit_blacklist`
(
    `id_shopping_list_company_business_unit_blacklist` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_user` INTEGER NOT NULL,
    `fk_shopping_list_company_business_unit` INTEGER NOT NULL,
    PRIMARY KEY (`id_shopping_list_company_business_unit_blacklist`),
    INDEX `index-spy_shopping_list_company_business_unit_blac-02b93f3310f1` (`fk_shopping_list_company_business_unit`),
    INDEX `index-spy_shopping_list_company_business_unit_blac-3a6bca02d731` (`fk_company_user`),
    CONSTRAINT `spy_shopping_list_business_unit_blacklist-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`),
    CONSTRAINT `spy_shopping_list_business_unit_blacklist-fk_shopping_list_unit`
        FOREIGN KEY (`fk_shopping_list_company_business_unit`)
        REFERENCES `spy_shopping_list_company_business_unit` (`id_shopping_list_company_business_unit`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_company_user`
(
    `id_shopping_list_company_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_company_user` INTEGER NOT NULL,
    `fk_shopping_list` INTEGER,
    `fk_shopping_list_permission_group` INTEGER NOT NULL,
    PRIMARY KEY (`id_shopping_list_company_user`),
    INDEX `index-spy_shopping_list_company_user-fk_company_user` (`fk_company_user`),
    INDEX `index-spy_shopping_list_company_user-fk_shopping_list` (`fk_shopping_list`),
    INDEX `index-spy_shopping_list_company_user-fk_shopping_l-e52d01ab9a70` (`fk_shopping_list_permission_group`),
    CONSTRAINT `spy_shopping_list_company_user-fk_company_user`
        FOREIGN KEY (`fk_company_user`)
        REFERENCES `spy_company_user` (`id_company_user`),
    CONSTRAINT `spy_shopping_list_company_user-fk_shopping_list`
        FOREIGN KEY (`fk_shopping_list`)
        REFERENCES `spy_shopping_list` (`id_shopping_list`),
    CONSTRAINT `spy_shopping_list_company_user-fk_shopping_list_perm_grp`
        FOREIGN KEY (`fk_shopping_list_permission_group`)
        REFERENCES `spy_shopping_list_permission_group` (`id_shopping_list_permission_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_customer_storage`
(
    `id_shopping_list_customer_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `customer_reference` VARCHAR(255) NOT NULL,
    `data` TEXT,
    `key` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_shopping_list_customer_storage`),
    UNIQUE INDEX `spy_shopping_list_customer_storage-unique-alias-keys` (`alias_keys`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_item`
(
    `id_shopping_list_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_shopping_list` INTEGER NOT NULL,
    `quantity` INTEGER DEFAULT 1 NOT NULL,
    `sku` VARCHAR(255),
    `uuid` VARCHAR(36),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_shopping_list_item`),
    UNIQUE INDEX `spy_shopping_list_item-unique-uuid` (`uuid`),
    INDEX `index-spy_shopping_list_item-fk_shopping_list` (`fk_shopping_list`),
    CONSTRAINT `spy_shopping_list_item-fk_shopping_list`
        FOREIGN KEY (`fk_shopping_list`)
        REFERENCES `spy_shopping_list` (`id_shopping_list`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_item_note`
(
    `id_shopping_list_item_note` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_shopping_list_item` INTEGER NOT NULL,
    `note` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_shopping_list_item_note`),
    UNIQUE INDEX `spy_shopping_list_item_note-unique-fk_shopping_list_item` (`fk_shopping_list_item`),
    CONSTRAINT `spy_shopping_list_item_note-fk_shopping_list_item`
        FOREIGN KEY (`fk_shopping_list_item`)
        REFERENCES `spy_shopping_list_item` (`id_shopping_list_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_permission_group`
(
    `id_shopping_list_permission_group` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_shopping_list_permission_group`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_permission_group_to_permission`
(
    `id_shopping_list_permission_group_to_permission` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_permission` INTEGER NOT NULL,
    `fk_shopping_list_permission_group` INTEGER NOT NULL,
    PRIMARY KEY (`id_shopping_list_permission_group_to_permission`),
    INDEX `index-spy_shopping_list_permission_group_to_permis-7157e52256dc` (`fk_shopping_list_permission_group`),
    INDEX `index-spy_shopping_list_permission_group_to_permis-b77eade420f3` (`fk_permission`),
    CONSTRAINT `spy_shopping_list_perm_grp_to_perm-fk_shopping_list_perm_grp`
        FOREIGN KEY (`fk_shopping_list_permission_group`)
        REFERENCES `spy_shopping_list_permission_group` (`id_shopping_list_permission_group`),
    CONSTRAINT `spy_shopping_list_permission_group_to_permission-fk_permission`
        FOREIGN KEY (`fk_permission`)
        REFERENCES `spy_permission` (`id_permission`)
) ENGINE=InnoDB;

CREATE TABLE `spy_shopping_list_product_option`
(
    `id_shopping_list_item_product_option` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_option_value` INTEGER NOT NULL,
    `fk_shopping_list_item` INTEGER NOT NULL,
    PRIMARY KEY (`id_shopping_list_item_product_option`),
    UNIQUE INDEX `fk_shopping_list_item-fk_product_option_value` (`fk_shopping_list_item`, `fk_product_option_value`),
    INDEX `index-spy_shopping_list_product_option-fk_product_option_value` (`fk_product_option_value`),
    CONSTRAINT `shopping_list_product_option-fk_product_option_value`
        FOREIGN KEY (`fk_product_option_value`)
        REFERENCES `spy_product_option_value` (`id_product_option_value`),
    CONSTRAINT `shopping_list_product_option-fk_shopping_list_item`
        FOREIGN KEY (`fk_shopping_list_item`)
        REFERENCES `spy_shopping_list_item` (`id_shopping_list_item`)
) ENGINE=InnoDB;

CREATE TABLE `spy_state_machine_event_timeout`
(
    `id_state_machine_event_timeout` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_state_machine_item_state` INTEGER NOT NULL,
    `fk_state_machine_process` INTEGER NOT NULL,
    `event` VARCHAR(255) NOT NULL,
    `identifier` INTEGER NOT NULL,
    `timeout` DATETIME NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_state_machine_event_timeout`),
    UNIQUE INDEX `spy_state_machine_item_state-unique-identifier` (`identifier`, `fk_state_machine_item_state`),
    INDEX `spy_state_machine_event_timeout-timeout` (`timeout`),
    INDEX `index-spy_state_machine_event_timeout-fk_state_mac-d2bb0e7f2734` (`fk_state_machine_item_state`),
    INDEX `index-spy_state_machine_event_timeout-fk_state_machine_process` (`fk_state_machine_process`),
    CONSTRAINT `spy_state_machine_event_timeout-fk_state_machine_item_state`
        FOREIGN KEY (`fk_state_machine_item_state`)
        REFERENCES `spy_state_machine_item_state` (`id_state_machine_item_state`),
    CONSTRAINT `spy_state_machine_event_timeout-fk_state_machine_process`
        FOREIGN KEY (`fk_state_machine_process`)
        REFERENCES `spy_state_machine_process` (`id_state_machine_process`)
) ENGINE=InnoDB;

CREATE TABLE `spy_state_machine_item_state`
(
    `id_state_machine_item_state` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_state_machine_process` INTEGER NOT NULL,
    `description` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_state_machine_item_state`),
    UNIQUE INDEX `spy_state_machine_item_state-name` (`name`, `fk_state_machine_process`),
    INDEX `index-spy_state_machine_item_state-fk_state_machine_process` (`fk_state_machine_process`),
    CONSTRAINT `spy_state_machine_item_state-fk_state_machine_process`
        FOREIGN KEY (`fk_state_machine_process`)
        REFERENCES `spy_state_machine_process` (`id_state_machine_process`)
) ENGINE=InnoDB;

CREATE TABLE `spy_state_machine_item_state_history`
(
    `id_state_machine_item_state_history` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_state_machine_item_state` INTEGER NOT NULL,
    `identifier` INTEGER NOT NULL,
    `created_at` DATETIME,
    PRIMARY KEY (`id_state_machine_item_state_history`),
    INDEX `spy_state_machine_item_state_history-identifier` (`identifier`),
    INDEX `index-spy_state_machine_item_state_history-fk_stat-86748ef1e826` (`fk_state_machine_item_state`),
    CONSTRAINT `spy_state_machine_item_state_h-fk_state_machine_item_state`
        FOREIGN KEY (`fk_state_machine_item_state`)
        REFERENCES `spy_state_machine_item_state` (`id_state_machine_item_state`)
) ENGINE=InnoDB;

CREATE TABLE `spy_state_machine_lock`
(
    `id_state_machine_lock` INTEGER NOT NULL AUTO_INCREMENT,
    `expires` DATETIME NOT NULL,
    `identifier` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_state_machine_lock`),
    UNIQUE INDEX `spy_state_machine_lock-identifier` (`identifier`)
) ENGINE=InnoDB;

CREATE TABLE `spy_state_machine_process`
(
    `id_state_machine_process` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `state_machine_name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_state_machine_process`),
    UNIQUE INDEX `spy_state_machine_process-name` (`name`, `state_machine_name`),
    INDEX `spy_state_machine_process-state_machine_name` (`state_machine_name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_state_machine_transition_log`
(
    `id_state_machine_transition_log` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_state_machine_process` INTEGER NOT NULL,
    `command` VARCHAR(512),
    `condition` VARCHAR(512),
    `error_message` TEXT,
    `event` VARCHAR(100),
    `hostname` VARCHAR(128) NOT NULL,
    `identifier` INTEGER NOT NULL,
    `is_error` TINYINT(1),
    `locked` TINYINT(1),
    `params` TEXT,
    `path` VARCHAR(256),
    `source_state` VARCHAR(128),
    `target_state` VARCHAR(128),
    `created_at` DATETIME,
    PRIMARY KEY (`id_state_machine_transition_log`),
    INDEX `index-spy_state_machine_transition_log-fk_state_machine_process` (`fk_state_machine_process`),
    CONSTRAINT `spy_state_machine_transition_log-fk_state_machine_process`
        FOREIGN KEY (`fk_state_machine_process`)
        REFERENCES `spy_state_machine_process` (`id_state_machine_process`)
) ENGINE=InnoDB;

CREATE TABLE `spy_stock`
(
    `id_stock` INTEGER NOT NULL AUTO_INCREMENT,
    `is_active` TINYINT(1) DEFAULT 1,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_stock`),
    UNIQUE INDEX `spy_stock-name` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_stock_address`
(
    `id_stock_address` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_stock` INTEGER NOT NULL,
    `fk_country` INTEGER NOT NULL,
    `fk_region` INTEGER,
    `address1` VARCHAR(255) NOT NULL,
    `address2` VARCHAR(255),
    `address3` VARCHAR(255),
    `city` VARCHAR(255) NOT NULL,
    `zip_code` VARCHAR(15) NOT NULL,
    `phone` VARCHAR(255),
    `comment` VARCHAR(255),
    PRIMARY KEY (`id_stock_address`),
    INDEX `index-spy_stock_address-fk_stock` (`fk_stock`),
    INDEX `index-spy_stock_address-fk_country` (`fk_country`),
    INDEX `index-spy_stock_address-fk_region` (`fk_region`),
    CONSTRAINT `spy_stock_address-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`),
    CONSTRAINT `spy_stock_address-fk_region`
        FOREIGN KEY (`fk_region`)
        REFERENCES `spy_region` (`id_region`),
    CONSTRAINT `spy_stock_address-fk_stock`
        FOREIGN KEY (`fk_stock`)
        REFERENCES `spy_stock` (`id_stock`)
) ENGINE=InnoDB;

CREATE TABLE `spy_stock_product`
(
    `id_stock_product` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product` INTEGER NOT NULL,
    `fk_stock` INTEGER NOT NULL,
    `is_never_out_of_stock` TINYINT(1) DEFAULT 0,
    `quantity` DECIMAL(20,10) DEFAULT 0.0000000000,
    PRIMARY KEY (`id_stock_product`),
    UNIQUE INDEX `spy_stock_product-unique-fk_stock` (`fk_stock`, `fk_product`),
    INDEX `spy_stock_product-fk_product` (`fk_product`),
    CONSTRAINT `spy_stock_product-fk_product`
        FOREIGN KEY (`fk_product`)
        REFERENCES `spy_product` (`id_product`),
    CONSTRAINT `spy_stock_product-fk_stock`
        FOREIGN KEY (`fk_stock`)
        REFERENCES `spy_stock` (`id_stock`)
) ENGINE=InnoDB;

CREATE TABLE `spy_stock_store`
(
    `id_stock_store` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_stock` INTEGER NOT NULL,
    `fk_store` INTEGER NOT NULL,
    PRIMARY KEY (`id_stock_store`),
    UNIQUE INDEX `spy_stock_store-unique-stock` (`fk_stock`, `fk_store`),
    INDEX `index-spy_stock_store-fk_store` (`fk_store`),
    CONSTRAINT `spy_stock_store-fk_stock`
        FOREIGN KEY (`fk_stock`)
        REFERENCES `spy_stock` (`id_stock`),
    CONSTRAINT `spy_stock_store-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_store`
(
    `id_store` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    PRIMARY KEY (`id_store`)
) ENGINE=InnoDB;

CREATE TABLE `spy_tax_product_storage`
(
    `id_tax_product_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_product_abstract` INTEGER NOT NULL,
    `data` TEXT,
    `sku` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_tax_product_storage`),
    UNIQUE INDEX `spy_tax_product_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_tax_product_storage-unique-key` (`key`),
    INDEX `spy_tax_product_storage-fk_product_abstract` (`fk_product_abstract`)
) ENGINE=InnoDB;

CREATE TABLE `spy_tax_rate`
(
    `id_tax_rate` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_country` INTEGER,
    `name` VARCHAR(255) NOT NULL,
    `rate` DECIMAL(8,2) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_tax_rate`),
    INDEX `index-spy_tax_rate-fk_country` (`fk_country`),
    CONSTRAINT `spy_tax_rate-fk_country`
        FOREIGN KEY (`fk_country`)
        REFERENCES `spy_country` (`id_country`)
) ENGINE=InnoDB;

CREATE TABLE `spy_tax_set`
(
    `id_tax_set` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `uuid` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_tax_set`),
    UNIQUE INDEX `spy_tax_set-unique-uuid` (`uuid`)
) ENGINE=InnoDB;

CREATE TABLE `spy_tax_set_storage`
(
    `id_tax_set_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_tax_set` INTEGER NOT NULL,
    `data` TEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_tax_set_storage`),
    UNIQUE INDEX `spy_tax_set_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_tax_set_storage-unique-key` (`key`),
    INDEX `spy_tax_set_storage-fk_tax_set` (`fk_tax_set`)
) ENGINE=InnoDB;

CREATE TABLE `spy_tax_set_tax`
(
    `fk_tax_rate` INTEGER NOT NULL,
    `fk_tax_set` INTEGER NOT NULL,
    PRIMARY KEY (`fk_tax_rate`,`fk_tax_set`),
    INDEX `spy_tax_set_tax-fi_tax_set` (`fk_tax_set`),
    CONSTRAINT `spy_tax_set_tax-fk_tax_rate`
        FOREIGN KEY (`fk_tax_rate`)
        REFERENCES `spy_tax_rate` (`id_tax_rate`),
    CONSTRAINT `spy_tax_set_tax-fk_tax_set`
        FOREIGN KEY (`fk_tax_set`)
        REFERENCES `spy_tax_set` (`id_tax_set`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_touch`
(
    `id_touch` INTEGER NOT NULL AUTO_INCREMENT,
    `item_event` TINYINT NOT NULL,
    `item_id` INTEGER NOT NULL,
    `item_type` VARCHAR(255) NOT NULL,
    `touched` DATETIME NOT NULL,
    PRIMARY KEY (`id_touch`),
    UNIQUE INDEX `spy_touch-unique-item_id` (`item_id`, `item_event`, `item_type`),
    INDEX `spy_touch-index-item_id` (`item_id`),
    INDEX `index_spy_touch-item_event_item_type_touched` (`item_event`, `item_type`, `touched`)
) ENGINE=InnoDB;

CREATE TABLE `spy_touch_search`
(
    `id_touch_search` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_store` INTEGER,
    `fk_touch` INTEGER NOT NULL,
    `key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_touch_search`),
    UNIQUE INDEX `spy_touch_search-unique-fk_locale` (`fk_locale`, `key`),
    INDEX `spy_touch_search-index-key` (`key`),
    INDEX `index-spy_touch_search-fk_touch` (`fk_touch`),
    INDEX `index-spy_touch_search-fk_store` (`fk_store`),
    CONSTRAINT `spy_touch_search-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_touch_search-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`),
    CONSTRAINT `spy_touch_search-fk_touch`
        FOREIGN KEY (`fk_touch`)
        REFERENCES `spy_touch` (`id_touch`)
) ENGINE=InnoDB;

CREATE TABLE `spy_touch_storage`
(
    `id_touch_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_store` INTEGER,
    `fk_touch` INTEGER NOT NULL,
    `key` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_touch_storage`),
    UNIQUE INDEX `spy_touch_storage-unique-fk_locale` (`fk_locale`, `key`),
    INDEX `spy_touch_storage-index-key` (`key`),
    INDEX `index-spy_touch_storage-fk_touch` (`fk_touch`),
    INDEX `index-spy_touch_storage-fk_store` (`fk_store`),
    CONSTRAINT `spy_touch_storage-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`),
    CONSTRAINT `spy_touch_storage-fk_store`
        FOREIGN KEY (`fk_store`)
        REFERENCES `spy_store` (`id_store`),
    CONSTRAINT `spy_touch_storage-fk_touch`
        FOREIGN KEY (`fk_touch`)
        REFERENCES `spy_touch` (`id_touch`)
) ENGINE=InnoDB;

CREATE TABLE `spy_unauthenticated_customer_access`
(
    `id_unauthenticated_customer_access` INTEGER NOT NULL AUTO_INCREMENT,
    `content_type` VARCHAR(100) NOT NULL,
    `is_restricted` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id_unauthenticated_customer_access`),
    UNIQUE INDEX `spy_unauthenticated_customer_access_u_0984b8` (`content_type`)
) ENGINE=InnoDB;

CREATE TABLE `spy_unauthenticated_customer_access_storage`
(
    `id_unauthenticated_customer_access_storage` INTEGER NOT NULL AUTO_INCREMENT,
    `data` TEXT,
    `key` VARCHAR(255) NOT NULL,
    `alias_keys` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_unauthenticated_customer_access_storage`),
    UNIQUE INDEX `spy_unauthenticated_customer_access_storage-unique-alias-keys` (`alias_keys`)
) ENGINE=InnoDB;

CREATE TABLE `spy_url`
(
    `id_url` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER NOT NULL,
    `fk_resource_categorynode` INTEGER,
    `fk_resource_merchant` INTEGER,
    `fk_resource_page` INTEGER,
    `fk_resource_product_abstract` INTEGER,
    `fk_resource_product_set` INTEGER,
    `fk_resource_redirect` INTEGER,
    `url` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_url`),
    UNIQUE INDEX `spy_url_unique_key` (`url`),
    INDEX `index-spy_url-fk_resource_merchant` (`fk_resource_merchant`),
    INDEX `spy_url-fk_resource_product_set` (`fk_resource_product_set`),
    INDEX `index-spy_url-fk_resource_categorynode` (`fk_resource_categorynode`),
    INDEX `index-spy_url-fk_resource_page` (`fk_resource_page`),
    INDEX `index-spy_url-fk_resource_product_abstract` (`fk_resource_product_abstract`),
    INDEX `index-spy_url-fk_locale` (`fk_locale`),
    INDEX `index-spy_url-fk_resource_redirect` (`fk_resource_redirect`),
    CONSTRAINT `spy_url-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_url-fk_resource_categorynode`
        FOREIGN KEY (`fk_resource_categorynode`)
        REFERENCES `spy_category_node` (`id_category_node`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_url-fk_resource_merchant`
        FOREIGN KEY (`fk_resource_merchant`)
        REFERENCES `spy_merchant` (`id_merchant`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_url-fk_resource_page`
        FOREIGN KEY (`fk_resource_page`)
        REFERENCES `spy_cms_page` (`id_cms_page`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_url-fk_resource_product_abstract`
        FOREIGN KEY (`fk_resource_product_abstract`)
        REFERENCES `spy_product_abstract` (`id_product_abstract`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_url-fk_resource_product_set`
        FOREIGN KEY (`fk_resource_product_set`)
        REFERENCES `spy_product_set` (`id_product_set`)
        ON DELETE CASCADE,
    CONSTRAINT `spy_url-fk_resource_redirect`
        FOREIGN KEY (`fk_resource_redirect`)
        REFERENCES `spy_url_redirect` (`id_url_redirect`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `spy_url_redirect`
(
    `id_url_redirect` INTEGER NOT NULL AUTO_INCREMENT,
    `status` INTEGER DEFAULT 301 NOT NULL,
    `to_url` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_url_redirect`),
    INDEX `spy_url_redirect-to_url` (`to_url`, `status`)
) ENGINE=InnoDB;

CREATE TABLE `spy_url_redirect_storage`
(
    `id_url_redirect_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_url_redirect` INTEGER NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_url_redirect_storage`),
    UNIQUE INDEX `spy_url_redirect_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_url_redirect_storage-unique-key` (`key`),
    INDEX `spy_url_redirect_storage-fk_url_redirect` (`fk_url_redirect`)
) ENGINE=InnoDB;

CREATE TABLE `spy_url_storage`
(
    `id_url_storage` BIGINT NOT NULL AUTO_INCREMENT,
    `fk_categorynode` INTEGER,
    `fk_merchant` INTEGER,
    `fk_page` INTEGER,
    `fk_product_abstract` INTEGER,
    `fk_product_set` INTEGER,
    `fk_redirect` INTEGER,
    `fk_url` INTEGER NOT NULL,
    `url` VARCHAR(255) NOT NULL,
    `data` LONGTEXT,
    `alias_keys` VARCHAR(255),
    `key` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_url_storage`),
    UNIQUE INDEX `spy_url_storage-unique-alias-keys` (`alias_keys`),
    UNIQUE INDEX `spy_url_storage-unique-key` (`key`),
    INDEX `spy_url_storage-fk_url` (`fk_url`)
) ENGINE=InnoDB;

CREATE TABLE `spy_user`
(
    `id_user` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_locale` INTEGER,
    `first_name` VARCHAR(45) NOT NULL,
    `is_agent` TINYINT(1),
    `last_login` DATETIME,
    `last_name` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `status` TINYINT(10) DEFAULT 0 NOT NULL,
    `username` VARCHAR(45) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_user`),
    UNIQUE INDEX `spy_user-username` (`username`),
    INDEX `spy_user-fi_locale` (`fk_locale`),
    CONSTRAINT `spy_user-fk_locale`
        FOREIGN KEY (`fk_locale`)
        REFERENCES `spy_locale` (`id_locale`)
) ENGINE=InnoDB;

CREATE TABLE `spy_user_archive`
(
    `id_user` INTEGER NOT NULL,
    `fk_locale` INTEGER,
    `first_name` VARCHAR(45) NOT NULL,
    `is_agent` TINYINT(1),
    `last_login` DATETIME,
    `last_name` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `status` TINYINT(10) DEFAULT 0 NOT NULL,
    `username` VARCHAR(45) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `archived_at` DATETIME,
    PRIMARY KEY (`id_user`),
    INDEX `spy_user-fi_locale` (`fk_locale`),
    INDEX `spy_user_archive_i_f86ef3` (`username`)
) ENGINE=InnoDB;

CREATE TABLE `spy_vault_deposit`
(
    `id_vault_deposit` INTEGER NOT NULL AUTO_INCREMENT,
    `data_type` VARCHAR(255) NOT NULL,
    `data_key` VARCHAR(255) NOT NULL,
    `initial_vector` VARCHAR(255) NOT NULL,
    `cipher_text` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_vault_deposit`),
    UNIQUE INDEX `spy_vault_deposit-unique-data_type-data_key` (`data_type`, `data_key`),
    INDEX `spy_vault_deposit-data_type-data_key` (`data_type`, `data_key`)
) ENGINE=InnoDB;

CREATE TABLE `spy_weekday_schedule`
(
    `id_weekday_schedule` INTEGER NOT NULL AUTO_INCREMENT,
    `day` TINYINT NOT NULL,
    `time_from` TIME,
    `time_to` TIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_weekday_schedule`)
) ENGINE=InnoDB;

CREATE TABLE `spy_wishlist`
(
    `id_wishlist` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_customer` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `uuid` VARCHAR(255),
    PRIMARY KEY (`id_wishlist`),
    UNIQUE INDEX `spy_wishlist-unique-fk_customer-name` (`fk_customer`, `name`),
    UNIQUE INDEX `spy_wishlist-unique-uuid` (`uuid`),
    CONSTRAINT `spy_wishlist-fk_customer`
        FOREIGN KEY (`fk_customer`)
        REFERENCES `spy_customer` (`id_customer`)
) ENGINE=InnoDB;

CREATE TABLE `spy_wishlist_item`
(
    `id_wishlist_item` INTEGER NOT NULL AUTO_INCREMENT,
    `fk_wishlist` INTEGER NOT NULL,
    `merchant_reference` VARCHAR(255),
    `product_offer_reference` VARCHAR(255),
    `sku` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_wishlist_item`),
    INDEX `index-spy_wishlist_item-fk_wishlist` (`fk_wishlist`),
    INDEX `index-spy_wishlist_item-sku` (`sku`),
    CONSTRAINT `spy_wishlist_item-fk_wishlist`
        FOREIGN KEY (`fk_wishlist`)
        REFERENCES `spy_wishlist` (`id_wishlist`),
    CONSTRAINT `spy_wishlist_item-sku`
        FOREIGN KEY (`sku`)
        REFERENCES `spy_product` (`sku`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
EOT;

        return array(
            'zed' => $connection_zed,
        );
    }

}