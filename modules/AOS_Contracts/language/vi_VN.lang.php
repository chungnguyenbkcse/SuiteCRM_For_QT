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
    'LBL_ASSIGNED_TO_NAME' => 'Quản lý hợp đồng',
    'LBL_CONTRACT_ACCOUNT' => 'Tài khoản',
    'LBL_OPPORTUNITY' => 'Cơ hội',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_CREATED' => 'Khởi tạo bởi',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tiêu đề Hợp đồng',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Hợp đồng',
    'LBL_MODULE_NAME' => 'Hợp đồng',
    'LBL_MODULE_TITLE' => 'Hợp đồng: Trang chính',
    'LBL_HOMEPAGE_TITLE' => 'Hợp đồng của tôi',
    'LNK_NEW_RECORD' => 'Tạo Hợp đồng',
    'LNK_LIST' => 'Xem',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Hợp đồng',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Hợp đồng mới',
    'LBL_CONTRACT_NAME' => 'Tên Hợp đồng',
    'LBL_REFERENCE_CODE ' => 'Mã tham khảo ',
    'LBL_START_DATE' => 'Ngày bắt đầu',
    'LBL_END_DATE' => 'Ngày kết thúc',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Giá trị hợp đồng',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Khách hàng ký hợp đồng ngày',
    'LBL_COMPANY_SIGNED_DATE' => 'Công ty đã ký ngày',
    'LBL_RENEWAL_REMINDER_DATE' => 'Đổi mới ngày nhắc nhở',
    'LBL_CONTRACT_TYPE' => 'Kiểu Hợp đồng',
    'LBL_CONTACT' => 'Liên hệ',
    'LBL_ADD_GROUP' => 'Thêm nhóm',
    'LBL_DELETE_GROUP' => 'Xoá nhóm',
    'LBL_GROUP_NAME' => 'Tên nhóm',
    'LBL_GROUP_TOTAL' => 'Tất cả nhóm',
    'LBL_PRODUCT_QUANITY' => 'Số lượng',
    'LBL_PRODUCT_NAME' => 'Sản phẩm',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Ghi chú',
    'LBL_PRODUCT_DESCRIPTION' => 'Mô tả',
    'LBL_LIST_PRICE' => 'Danh sách',
    'LBL_DISCOUNT_AMT' => 'Chiết khấu',
    'LBL_UNIT_PRICE' => 'Giá bán',
    'LBL_TOTAL_PRICE' => 'Tổng cộng',
    'LBL_VAT' => 'Thuế',
    'LBL_VAT_AMT' => 'Tổng số tiền thuế',
    'LBL_SERVICE_NAME' => 'Dịch vụ',
    'LBL_SERVICE_LIST_PRICE' => 'Danh sách',
    'LBL_SERVICE_PRICE' => 'Giá bán',
    'LBL_SERVICE_DISCOUNT' => 'Chiết khấu',
    'LBL_LINE_ITEMS' => 'Các hàng mục',
    'LBL_SUBTOTAL_AMOUNT' => 'Tổng số phụ',
    'LBL_DISCOUNT_AMOUNT' => 'Chiết khấu',
    'LBL_TAX_AMOUNT' => 'Thuế',
    'LBL_SHIPPING_AMOUNT' => 'Mua sắm',
    'LBL_TOTAL_AMT' => 'Tổng cộng',
    'LBL_GRAND_TOTAL' => 'Tổng số',
    'LBL_SHIPPING_TAX' => 'Thuế vận chuyển',
    'LBL_SHIPPING_TAX_AMT' => 'Thuế vận chuyển',
    'LBL_ADD_PRODUCT_LINE' => 'Thêm dòng sản phẩm',
    'LBL_ADD_SERVICE_LINE' => 'Thêm dòng dịch vụ ',
    'LBL_PRINT_AS_PDF' => 'In dưới dạng PDF',
    'LBL_EMAIL_PDF' => 'Email dưới dạng PDF',
    'LBL_PDF_NAME' => 'Hợp đồng',
    'LBL_EMAIL_NAME' => 'Hợp đồng cho',
    'LBL_NO_TEMPLATE' => 'Lỗi\nKhông có mẫu nào được tìm thấy. Nếu bạn chưa có một hợp đồng mẫu, đi đến module mẫu PDF và tạo một mẫu hợp đồng để sử dụng',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Giá trị hợp đồng (tiền tệ mặc định)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Tổng số phụ (tiền tệ mặc định)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Giảm giá (tiền tệ mặc định)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Thuế (tiền tệ mặc định)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Phí vận chuyển (tiền tệ mặc định)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Tổng (tiền tệ mặc định)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Thuế vận chuyển (tiền tệ mặc định)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Tổng cộng (tiền tệ mặc định)',

    'LBL_CALL_ID' => 'ID cuộc gọi',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Báo giá sản phẩm',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Báo giá: hợp đồng',
);