<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection append
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection home_page
     * @property Grid\Column|Collection logo
     * @property Grid\Column|Collection zip_url
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection agent_id
     * @property Grid\Column|Collection agent_user_id
     * @property Grid\Column|Collection agent_name
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection extra
     * @property Grid\Column|Collection extra_b
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection message
     * @property Grid\Column|Collection api_key
     * @property Grid\Column|Collection api_secret
     * @property Grid\Column|Collection api_url
     * @property Grid\Column|Collection channel_sign
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection is_active
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection cancel_time
     * @property Grid\Column|Collection closes_time
     * @property Grid\Column|Collection currency
     * @property Grid\Column|Collection currency_ratio
     * @property Grid\Column|Collection entrust_type
     * @property Grid\Column|Collection handle_time
     * @property Grid\Column|Collection order_no
     * @property Grid\Column|Collection order_param
     * @property Grid\Column|Collection order_type
     * @property Grid\Column|Collection pay_status
     * @property Grid\Column|Collection pay_type
     * @property Grid\Column|Collection remaining_amount
     * @property Grid\Column|Collection total_price
     * @property Grid\Column|Collection trade_count
     * @property Grid\Column|Collection unit_price
     * @property Grid\Column|Collection symbol
     * @property Grid\Column|Collection domain
     * @property Grid\Column|Collection tenant_id
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection batch
     * @property Grid\Column|Collection migration
     * @property Grid\Column|Collection log_data
     * @property Grid\Column|Collection log_name
     * @property Grid\Column|Collection member_id
     * @property Grid\Column|Collection context
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection display_time
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection expires_at
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection attr_name
     * @property Grid\Column|Collection attr_type
     * @property Grid\Column|Collection attr_value
     * @property Grid\Column|Collection key
     * @property Grid\Column|Collection data
     * @property Grid\Column|Collection expired_at
     * @property Grid\Column|Collection test_name
     * @property Grid\Column|Collection buy_order_no
     * @property Grid\Column|Collection order_item
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection sell_order_no
     * @property Grid\Column|Collection base_currency
     * @property Grid\Column|Collection max_trade_price
     * @property Grid\Column|Collection min_trade_price
     * @property Grid\Column|Collection quote_currency
     * @property Grid\Column|Collection volume
     * @property Grid\Column|Collection payment_method
     * @property Grid\Column|Collection transaction_no
     * @property Grid\Column|Collection transaction_type
     * @property Grid\Column|Collection documentary_status
     * @property Grid\Column|Collection is_lock
     * @property Grid\Column|Collection is_online
     * @property Grid\Column|Collection login_password
     * @property Grid\Column|Collection real_name
     * @property Grid\Column|Collection real_name_authority
     * @property Grid\Column|Collection remarks
     * @property Grid\Column|Collection safe_password
     * @property Grid\Column|Collection user_code
     * @property Grid\Column|Collection user_lastip
     * @property Grid\Column|Collection user_lasttime
     * @property Grid\Column|Collection user_level
     * @property Grid\Column|Collection user_mail
     * @property Grid\Column|Collection user_mobile
     * @property Grid\Column|Collection user_name
     * @property Grid\Column|Collection user_recom
     * @property Grid\Column|Collection user_regip
     * @property Grid\Column|Collection user_type
     * @property Grid\Column|Collection back_image
     * @property Grid\Column|Collection front_image
     * @property Grid\Column|Collection handheld_image
     * @property Grid\Column|Collection id_number
     * @property Grid\Column|Collection nationality
     * @property Grid\Column|Collection refused_msg
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection query_bindings
     * @property Grid\Column|Collection sql
     * @property Grid\Column|Collection ancestor_id
     * @property Grid\Column|Collection descendant_id
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection recharge_credentials
     * @property Grid\Column|Collection recharge_order_number
     * @property Grid\Column|Collection recharge_type
     * @property Grid\Column|Collection del_flag
     * @property Grid\Column|Collection freeze_money
     * @property Grid\Column|Collection lock_money
     * @property Grid\Column|Collection money
     * @property Grid\Column|Collection current
     * @property Grid\Column|Collection decimal
     * @property Grid\Column|Collection withdrawal_account
     * @property Grid\Column|Collection withdrawal_credentials
     * @property Grid\Column|Collection withdrawal_order_num
     *
     * @method Grid\Column|Collection append(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection home_page(string $label = null)
     * @method Grid\Column|Collection logo(string $label = null)
     * @method Grid\Column|Collection zip_url(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection agent_id(string $label = null)
     * @method Grid\Column|Collection agent_user_id(string $label = null)
     * @method Grid\Column|Collection agent_name(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection extra(string $label = null)
     * @method Grid\Column|Collection extra_b(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection message(string $label = null)
     * @method Grid\Column|Collection api_key(string $label = null)
     * @method Grid\Column|Collection api_secret(string $label = null)
     * @method Grid\Column|Collection api_url(string $label = null)
     * @method Grid\Column|Collection channel_sign(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection is_active(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection cancel_time(string $label = null)
     * @method Grid\Column|Collection closes_time(string $label = null)
     * @method Grid\Column|Collection currency(string $label = null)
     * @method Grid\Column|Collection currency_ratio(string $label = null)
     * @method Grid\Column|Collection entrust_type(string $label = null)
     * @method Grid\Column|Collection handle_time(string $label = null)
     * @method Grid\Column|Collection order_no(string $label = null)
     * @method Grid\Column|Collection order_param(string $label = null)
     * @method Grid\Column|Collection order_type(string $label = null)
     * @method Grid\Column|Collection pay_status(string $label = null)
     * @method Grid\Column|Collection pay_type(string $label = null)
     * @method Grid\Column|Collection remaining_amount(string $label = null)
     * @method Grid\Column|Collection total_price(string $label = null)
     * @method Grid\Column|Collection trade_count(string $label = null)
     * @method Grid\Column|Collection unit_price(string $label = null)
     * @method Grid\Column|Collection symbol(string $label = null)
     * @method Grid\Column|Collection domain(string $label = null)
     * @method Grid\Column|Collection tenant_id(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection batch(string $label = null)
     * @method Grid\Column|Collection migration(string $label = null)
     * @method Grid\Column|Collection log_data(string $label = null)
     * @method Grid\Column|Collection log_name(string $label = null)
     * @method Grid\Column|Collection member_id(string $label = null)
     * @method Grid\Column|Collection context(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection display_time(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection expires_at(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection attr_name(string $label = null)
     * @method Grid\Column|Collection attr_type(string $label = null)
     * @method Grid\Column|Collection attr_value(string $label = null)
     * @method Grid\Column|Collection key(string $label = null)
     * @method Grid\Column|Collection data(string $label = null)
     * @method Grid\Column|Collection expired_at(string $label = null)
     * @method Grid\Column|Collection test_name(string $label = null)
     * @method Grid\Column|Collection buy_order_no(string $label = null)
     * @method Grid\Column|Collection order_item(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection sell_order_no(string $label = null)
     * @method Grid\Column|Collection base_currency(string $label = null)
     * @method Grid\Column|Collection max_trade_price(string $label = null)
     * @method Grid\Column|Collection min_trade_price(string $label = null)
     * @method Grid\Column|Collection quote_currency(string $label = null)
     * @method Grid\Column|Collection volume(string $label = null)
     * @method Grid\Column|Collection payment_method(string $label = null)
     * @method Grid\Column|Collection transaction_no(string $label = null)
     * @method Grid\Column|Collection transaction_type(string $label = null)
     * @method Grid\Column|Collection documentary_status(string $label = null)
     * @method Grid\Column|Collection is_lock(string $label = null)
     * @method Grid\Column|Collection is_online(string $label = null)
     * @method Grid\Column|Collection login_password(string $label = null)
     * @method Grid\Column|Collection real_name(string $label = null)
     * @method Grid\Column|Collection real_name_authority(string $label = null)
     * @method Grid\Column|Collection remarks(string $label = null)
     * @method Grid\Column|Collection safe_password(string $label = null)
     * @method Grid\Column|Collection user_code(string $label = null)
     * @method Grid\Column|Collection user_lastip(string $label = null)
     * @method Grid\Column|Collection user_lasttime(string $label = null)
     * @method Grid\Column|Collection user_level(string $label = null)
     * @method Grid\Column|Collection user_mail(string $label = null)
     * @method Grid\Column|Collection user_mobile(string $label = null)
     * @method Grid\Column|Collection user_name(string $label = null)
     * @method Grid\Column|Collection user_recom(string $label = null)
     * @method Grid\Column|Collection user_regip(string $label = null)
     * @method Grid\Column|Collection user_type(string $label = null)
     * @method Grid\Column|Collection back_image(string $label = null)
     * @method Grid\Column|Collection front_image(string $label = null)
     * @method Grid\Column|Collection handheld_image(string $label = null)
     * @method Grid\Column|Collection id_number(string $label = null)
     * @method Grid\Column|Collection nationality(string $label = null)
     * @method Grid\Column|Collection refused_msg(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection query_bindings(string $label = null)
     * @method Grid\Column|Collection sql(string $label = null)
     * @method Grid\Column|Collection ancestor_id(string $label = null)
     * @method Grid\Column|Collection descendant_id(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection recharge_credentials(string $label = null)
     * @method Grid\Column|Collection recharge_order_number(string $label = null)
     * @method Grid\Column|Collection recharge_type(string $label = null)
     * @method Grid\Column|Collection del_flag(string $label = null)
     * @method Grid\Column|Collection freeze_money(string $label = null)
     * @method Grid\Column|Collection lock_money(string $label = null)
     * @method Grid\Column|Collection money(string $label = null)
     * @method Grid\Column|Collection current(string $label = null)
     * @method Grid\Column|Collection decimal(string $label = null)
     * @method Grid\Column|Collection withdrawal_account(string $label = null)
     * @method Grid\Column|Collection withdrawal_credentials(string $label = null)
     * @method Grid\Column|Collection withdrawal_order_num(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection append
     * @property Show\Field|Collection id
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection home_page
     * @property Show\Field|Collection logo
     * @property Show\Field|Collection zip_url
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection input
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection method
     * @property Show\Field|Collection path
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection agent_id
     * @property Show\Field|Collection agent_user_id
     * @property Show\Field|Collection agent_name
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection status
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection extra
     * @property Show\Field|Collection extra_b
     * @property Show\Field|Collection level
     * @property Show\Field|Collection message
     * @property Show\Field|Collection api_key
     * @property Show\Field|Collection api_secret
     * @property Show\Field|Collection api_url
     * @property Show\Field|Collection channel_sign
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection is_active
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection cancel_time
     * @property Show\Field|Collection closes_time
     * @property Show\Field|Collection currency
     * @property Show\Field|Collection currency_ratio
     * @property Show\Field|Collection entrust_type
     * @property Show\Field|Collection handle_time
     * @property Show\Field|Collection order_no
     * @property Show\Field|Collection order_param
     * @property Show\Field|Collection order_type
     * @property Show\Field|Collection pay_status
     * @property Show\Field|Collection pay_type
     * @property Show\Field|Collection remaining_amount
     * @property Show\Field|Collection total_price
     * @property Show\Field|Collection trade_count
     * @property Show\Field|Collection unit_price
     * @property Show\Field|Collection symbol
     * @property Show\Field|Collection domain
     * @property Show\Field|Collection tenant_id
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection batch
     * @property Show\Field|Collection migration
     * @property Show\Field|Collection log_data
     * @property Show\Field|Collection log_name
     * @property Show\Field|Collection member_id
     * @property Show\Field|Collection context
     * @property Show\Field|Collection content
     * @property Show\Field|Collection display_time
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection expires_at
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection attr_name
     * @property Show\Field|Collection attr_type
     * @property Show\Field|Collection attr_value
     * @property Show\Field|Collection key
     * @property Show\Field|Collection data
     * @property Show\Field|Collection expired_at
     * @property Show\Field|Collection test_name
     * @property Show\Field|Collection buy_order_no
     * @property Show\Field|Collection order_item
     * @property Show\Field|Collection price
     * @property Show\Field|Collection sell_order_no
     * @property Show\Field|Collection base_currency
     * @property Show\Field|Collection max_trade_price
     * @property Show\Field|Collection min_trade_price
     * @property Show\Field|Collection quote_currency
     * @property Show\Field|Collection volume
     * @property Show\Field|Collection payment_method
     * @property Show\Field|Collection transaction_no
     * @property Show\Field|Collection transaction_type
     * @property Show\Field|Collection documentary_status
     * @property Show\Field|Collection is_lock
     * @property Show\Field|Collection is_online
     * @property Show\Field|Collection login_password
     * @property Show\Field|Collection real_name
     * @property Show\Field|Collection real_name_authority
     * @property Show\Field|Collection remarks
     * @property Show\Field|Collection safe_password
     * @property Show\Field|Collection user_code
     * @property Show\Field|Collection user_lastip
     * @property Show\Field|Collection user_lasttime
     * @property Show\Field|Collection user_level
     * @property Show\Field|Collection user_mail
     * @property Show\Field|Collection user_mobile
     * @property Show\Field|Collection user_name
     * @property Show\Field|Collection user_recom
     * @property Show\Field|Collection user_regip
     * @property Show\Field|Collection user_type
     * @property Show\Field|Collection back_image
     * @property Show\Field|Collection front_image
     * @property Show\Field|Collection handheld_image
     * @property Show\Field|Collection id_number
     * @property Show\Field|Collection nationality
     * @property Show\Field|Collection refused_msg
     * @property Show\Field|Collection address
     * @property Show\Field|Collection code
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection query_bindings
     * @property Show\Field|Collection sql
     * @property Show\Field|Collection ancestor_id
     * @property Show\Field|Collection descendant_id
     * @property Show\Field|Collection num
     * @property Show\Field|Collection recharge_credentials
     * @property Show\Field|Collection recharge_order_number
     * @property Show\Field|Collection recharge_type
     * @property Show\Field|Collection del_flag
     * @property Show\Field|Collection freeze_money
     * @property Show\Field|Collection lock_money
     * @property Show\Field|Collection money
     * @property Show\Field|Collection current
     * @property Show\Field|Collection decimal
     * @property Show\Field|Collection withdrawal_account
     * @property Show\Field|Collection withdrawal_credentials
     * @property Show\Field|Collection withdrawal_order_num
     *
     * @method Show\Field|Collection append(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection home_page(string $label = null)
     * @method Show\Field|Collection logo(string $label = null)
     * @method Show\Field|Collection zip_url(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection agent_id(string $label = null)
     * @method Show\Field|Collection agent_user_id(string $label = null)
     * @method Show\Field|Collection agent_name(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection extra(string $label = null)
     * @method Show\Field|Collection extra_b(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection message(string $label = null)
     * @method Show\Field|Collection api_key(string $label = null)
     * @method Show\Field|Collection api_secret(string $label = null)
     * @method Show\Field|Collection api_url(string $label = null)
     * @method Show\Field|Collection channel_sign(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection is_active(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection cancel_time(string $label = null)
     * @method Show\Field|Collection closes_time(string $label = null)
     * @method Show\Field|Collection currency(string $label = null)
     * @method Show\Field|Collection currency_ratio(string $label = null)
     * @method Show\Field|Collection entrust_type(string $label = null)
     * @method Show\Field|Collection handle_time(string $label = null)
     * @method Show\Field|Collection order_no(string $label = null)
     * @method Show\Field|Collection order_param(string $label = null)
     * @method Show\Field|Collection order_type(string $label = null)
     * @method Show\Field|Collection pay_status(string $label = null)
     * @method Show\Field|Collection pay_type(string $label = null)
     * @method Show\Field|Collection remaining_amount(string $label = null)
     * @method Show\Field|Collection total_price(string $label = null)
     * @method Show\Field|Collection trade_count(string $label = null)
     * @method Show\Field|Collection unit_price(string $label = null)
     * @method Show\Field|Collection symbol(string $label = null)
     * @method Show\Field|Collection domain(string $label = null)
     * @method Show\Field|Collection tenant_id(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection batch(string $label = null)
     * @method Show\Field|Collection migration(string $label = null)
     * @method Show\Field|Collection log_data(string $label = null)
     * @method Show\Field|Collection log_name(string $label = null)
     * @method Show\Field|Collection member_id(string $label = null)
     * @method Show\Field|Collection context(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection display_time(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection expires_at(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection attr_name(string $label = null)
     * @method Show\Field|Collection attr_type(string $label = null)
     * @method Show\Field|Collection attr_value(string $label = null)
     * @method Show\Field|Collection key(string $label = null)
     * @method Show\Field|Collection data(string $label = null)
     * @method Show\Field|Collection expired_at(string $label = null)
     * @method Show\Field|Collection test_name(string $label = null)
     * @method Show\Field|Collection buy_order_no(string $label = null)
     * @method Show\Field|Collection order_item(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection sell_order_no(string $label = null)
     * @method Show\Field|Collection base_currency(string $label = null)
     * @method Show\Field|Collection max_trade_price(string $label = null)
     * @method Show\Field|Collection min_trade_price(string $label = null)
     * @method Show\Field|Collection quote_currency(string $label = null)
     * @method Show\Field|Collection volume(string $label = null)
     * @method Show\Field|Collection payment_method(string $label = null)
     * @method Show\Field|Collection transaction_no(string $label = null)
     * @method Show\Field|Collection transaction_type(string $label = null)
     * @method Show\Field|Collection documentary_status(string $label = null)
     * @method Show\Field|Collection is_lock(string $label = null)
     * @method Show\Field|Collection is_online(string $label = null)
     * @method Show\Field|Collection login_password(string $label = null)
     * @method Show\Field|Collection real_name(string $label = null)
     * @method Show\Field|Collection real_name_authority(string $label = null)
     * @method Show\Field|Collection remarks(string $label = null)
     * @method Show\Field|Collection safe_password(string $label = null)
     * @method Show\Field|Collection user_code(string $label = null)
     * @method Show\Field|Collection user_lastip(string $label = null)
     * @method Show\Field|Collection user_lasttime(string $label = null)
     * @method Show\Field|Collection user_level(string $label = null)
     * @method Show\Field|Collection user_mail(string $label = null)
     * @method Show\Field|Collection user_mobile(string $label = null)
     * @method Show\Field|Collection user_name(string $label = null)
     * @method Show\Field|Collection user_recom(string $label = null)
     * @method Show\Field|Collection user_regip(string $label = null)
     * @method Show\Field|Collection user_type(string $label = null)
     * @method Show\Field|Collection back_image(string $label = null)
     * @method Show\Field|Collection front_image(string $label = null)
     * @method Show\Field|Collection handheld_image(string $label = null)
     * @method Show\Field|Collection id_number(string $label = null)
     * @method Show\Field|Collection nationality(string $label = null)
     * @method Show\Field|Collection refused_msg(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection query_bindings(string $label = null)
     * @method Show\Field|Collection sql(string $label = null)
     * @method Show\Field|Collection ancestor_id(string $label = null)
     * @method Show\Field|Collection descendant_id(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection recharge_credentials(string $label = null)
     * @method Show\Field|Collection recharge_order_number(string $label = null)
     * @method Show\Field|Collection recharge_type(string $label = null)
     * @method Show\Field|Collection del_flag(string $label = null)
     * @method Show\Field|Collection freeze_money(string $label = null)
     * @method Show\Field|Collection lock_money(string $label = null)
     * @method Show\Field|Collection money(string $label = null)
     * @method Show\Field|Collection current(string $label = null)
     * @method Show\Field|Collection decimal(string $label = null)
     * @method Show\Field|Collection withdrawal_account(string $label = null)
     * @method Show\Field|Collection withdrawal_credentials(string $label = null)
     * @method Show\Field|Collection withdrawal_order_num(string $label = null)
     */
    class Show {}

    /**
     * @method \Dcat\Admin\Extension\DcatSkuPlus\SkuField sku(...$params)
     * @method \Pstldz\MediaExtension\Form\Photo photo(...$params)
     * @method \Pstldz\MediaExtension\Form\SingleFile singleFile(...$params)
     * @method \Pstldz\MediaExtension\Form\Files files(...$params)
     * @method \Pstldz\MediaExtension\Form\Photos photos(...$params)
     * @method \Pstldz\MediaExtension\Form\Video video(...$params)
     * @method \Pstldz\MediaExtension\Form\Videos videos(...$params)
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
