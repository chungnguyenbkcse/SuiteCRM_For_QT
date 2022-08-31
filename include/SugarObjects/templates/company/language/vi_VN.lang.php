<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'ERR_DELETE_RECORD' => 'Một số hồ sơ phải được xác định để xoá tài khoản này.',
    'LBL_ACCOUNT_NAME' => 'Tên công ty:',
    'LBL_ACCOUNT' => 'Công ty:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ANNUAL_REVENUE' => 'Doanh thu hàng năm:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_EMAIL_NON_PRIMARY' => 'E-mail không chính thức',
    'LBL_ANY_PHONE' => 'Điện thoại:',
    'LBL_ASSIGNED_TO_NAME' => 'Người dùng:',
    'LBL_RATING' => 'Xếp hạng',
    'LBL_ASSIGNED_TO' => 'Giao cho:',
    'LBL_ASSIGNED_USER' => 'Giao cho:',
    'LBL_ASSIGNED_TO_ID' => 'Giao cho:',
    'LBL_BILLING_ADDRESS_CITY' => 'Thành phố:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Quốc gia:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Mã bưu chính:',
    'LBL_BILLING_ADDRESS_STATE' => 'Quận huyện:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Tên đường 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Tên đường 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Tên đường 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Tên đường:',
    'LBL_BILLING_ADDRESS' => 'Địa chỉ:',
    'LBL_ACCOUNT_INFORMATION' => 'Thông tin công ty',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_DATE_ENTERED' => 'Ngày tạo:',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_DESCRIPTION_INFORMATION' => 'Thông tin mô tả',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DUPLICATE' => 'Có khả năng trùng lặp tài khoản',
    'LBL_EMAIL' => 'Địa chỉ Email:',
    'LBL_EMPLOYEES' => 'Nhân viên:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Loại hình:',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_CITY' => 'Thành phố',
    'LBL_LIST_EMAIL_ADDRESS' => 'Địa chỉ Email',
    'LBL_LIST_PHONE' => 'Điện thoại',
    'LBL_LIST_STATE' => 'Tiểu bang',
    'LBL_MEMBER_OF' => 'Thành viên của:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Tổ chức thành viên',
    'LBL_NAME' => 'Tên:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_OWNERSHIP' => 'Quyền sở hữu:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Khách hàng cấp trên',
    'LBL_PHONE_ALT' => 'Điện thoại khác:',
    'LBL_PHONE_FAX' => 'Số Fax:',
    'LBL_PHONE_OFFICE' => 'Điện thoại VP:',
    'LBL_PHONE' => 'Điện thoại:',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email',
    'LBL_EMAIL_ADDRESSES' => 'Địa chỉ email',
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_SAVE_ACCOUNT' => 'Lưu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Thành phố:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Quốc gia:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Mã bưu chính:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Tiểu bang:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Địa chỉ giao hàng 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Địa chỉ giao hàng 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Địa chỉ giao hàng 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Địa chỉ giao hàng:',
    'LBL_SHIPPING_ADDRESS' => 'Địa chỉ giao hàng:',

    'LBL_STATE' => 'Tiểu bang hoặc khu vực:', //For address fields
    'LBL_TICKER_SYMBOL' => 'Biểu tượng ticker:',
    'LBL_TYPE' => 'Loại:',
    'LBL_WEBSITE' => 'Trang web:',

    'LNK_ACCOUNT_LIST' => 'Khách Hàng',
    'LNK_NEW_ACCOUNT' => 'Tạo Account',

    'MSG_DUPLICATE' => 'Bản ghi tài khoản bạn đang tạo ra có thể là một bản sao của một bản ghi tài khoản đã tồn tại. Hồ sơ tài khoản có tên tương tự được liệt kê dưới đây. <br>Nhấp vào tạo tài khoản để tiếp tục tạo tài khoản mới này, hoặc chọn một tài khoản sẵn có liệt kê dưới đây.',
    'MSG_SHOW_DUPLICATES' => 'Bản ghi tài khoản bạn đang tạo ra có thể là một bản sao của một bản ghi tài khoản đã tồn tại. Hồ sơ tài khoản có tên tương tự được liệt kê dưới đây. <br>Nhấp vào tạo tài khoản để tiếp tục tạo tài khoản mới này, hoặc chọn một tài khoản sẵn có liệt kê dưới đây.',

    'NTC_DELETE_CONFIRMATION' => 'Bạn chắc muốn xoá hoàn toàn bản ghi?',

    'LBL_EDIT_BUTTON' => 'Chỉnh sửa  ',
    'LBL_REMOVE' => 'Xóa bỏ',

);