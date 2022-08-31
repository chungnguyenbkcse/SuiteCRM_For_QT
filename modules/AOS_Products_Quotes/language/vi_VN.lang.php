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
    'LBL_ASSIGNED_TO_ID' => 'Tên người dùng được chỉ định',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_CREATED' => 'Khởi tạo bởi',
    'LBL_DESCRIPTION' => 'Ghi chú',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tên',
    'LBL_NUMBER' => 'Số', //PR 3296
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_FORM_TITLE' => 'Danh sách báo giá sản phẩm',
    'LBL_MODULE_NAME' => 'Các hàng mục',
    'LBL_MODULE_TITLE' => 'Báo giá sản phẩm: Trang chủ',
    'LBL_HOMEPAGE_TITLE' => 'Báo giá sản phẩm của tôi',
    'LNK_NEW_RECORD' => 'Tạo báo giá sản phẩm',
    'LNK_LIST' => 'Báo giá sản phẩm',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm báo giá sản phẩm',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Báo giá sản phẩm mới',
    'LBL_PRODUCT_NAME' => 'Tên',
    'LBL_PRODUCT_NUMBER' => 'Số', //PR 3296
    'LBL_PRODUCT_QTY' => 'Số lượng',
    'LBL_PRODUCT_COST_PRICE' => 'Chi phí giá cả',
    'LBL_PRODUCT_LIST_PRICE' => 'Danh sách giá',
    'LBL_PRODUCT_UNIT_PRICE' => 'Đơn giá',
    'LBL_PRODUCT_DISCOUNT' => 'Chiết khấu',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Số tiền giảm giá',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_DESCRIPTION' => 'Mô tả',
    'LBL_DISCOUNT' => 'Kiểu giảm giá',
    'LBL_VAT_AMT' => 'Tổng số tiền thuế',
    'LBL_VAT' => 'Thuế',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Tổng giá',
    'LBL_PRODUCT_NOTE' => 'Ghi chú',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Liên quan đến',
    'LBL_PRODUCT' => 'Sản phẩm',

    'LBL_SERVICE_MODULE_NAME' => 'Dịch vụ',
    'LBL_SERVICE_NUMBER' => 'Số', //PR 3296
    'LBL_LIST_NUM' => 'Số',
    'LBL_PARENT_ID' => 'Nhóm cha',
    'LBL_GROUP_NAME' => 'Nhóm',
    'LBL_GROUP_DESCRIPTION' => 'Mô tả', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Chi phí giá cả (tiền tệ mặc định)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Danh sách giá (tiền tệ mặc định)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Đơn giá (tiền tệ mặc định)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Tổng giá (tiền tệ mặc định)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Giảm giá (tiền tệ mặc định)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Tổng giảm giá (tiền tệ mặc định)',
    'LBL_VAT_AMT_USDOLLAR' => 'Tổng thuế (tiền tệ mặc định)',
    'LBL_PRODUCTS_SERVICES' => 'Sản phẩm / dịch vụ',
    'LBL_PRODUCT_ID' => 'ID sản phẩm',

    'LBL_AOS_CONTRACTS' => 'Hợp đồng',
    'LBL_AOS_INVOICES' => 'Hóa đơn',
    'LBL_AOS_PRODUCTS' => 'Sản phẩm',
    'LBL_AOS_QUOTES' => 'Báo giá',
);