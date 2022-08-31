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
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tiêu đề',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'ERR_DELETE_RECORD' => 'Một số hồ sơ phải được xác định để xoá tài khoản này.',
    'LBL_ACCOUNT_NAME' => 'Tiêu đề',
    'LBL_ACCOUNT' => 'Công ty:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ANNUAL_REVENUE' => 'Doanh thu hàng năm:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Điện thoại:',
    'LBL_RATING' => 'Xếp hạng',
    'LBL_ASSIGNED_USER' => 'Người dùng',
    'LBL_BILLING_ADDRESS_CITY' => 'Thành phố:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Quốc gia:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Mã bưu chính:',
    'LBL_BILLING_ADDRESS_STATE' => 'Quận huyện:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Tên đường 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Tên đường 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Tên đường 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Tên đường:',
    'LBL_BILLING_ADDRESS' => 'Địa chỉ:',
    'LBL_ACCOUNT_INFORMATION' => 'Xem toàn bộ Đối tượng',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_DUPLICATE' => 'Có khả năng trùng lặp tài khoản',
    'LBL_EMAIL' => 'Email:',
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
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_OWNERSHIP' => 'Quyền sở hữu:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Khách hàng cấp trên',
    'LBL_PHONE_ALT' => 'Điện thoại khác:',
    'LBL_PHONE_FAX' => 'Số Fax:',
    'LBL_PHONE_OFFICE' => 'Điện thoại VP:',
    'LBL_PHONE' => 'Điện thoại:',
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
    'LNK_ACCOUNT_LIST' => 'Tài khoản',
    'LNK_NEW_ACCOUNT' => 'Tạo Account',
    'MSG_DUPLICATE' => 'Tài khoản đang tạo này có thể tạo một tài khoản trùng lặp. Bạn có thể chọn một tài khoản từ danh sách dưới đây hoặc bạn có thể bấm vào vào lưu để tiếp tục để tạo tài khoản mới với các dữ liệu đã nhập trước đó.',
    'MSG_SHOW_DUPLICATES' => 'Tài khoản đang tạo này có thể tạo một tài khoản trùng lặp. Bạn có thể hoặc nhấp vào lưu để tiếp tục tạo tài khoản mới với các dữ liệu đã nhập trước đó hoặc bạn có thể bấm Hủy bỏ.',
    'NTC_DELETE_CONFIRMATION' => 'Bạn chắc muốn xoá hoàn toàn bản ghi?',
    'LBL_LIST_FORM_TITLE' => 'Danh sách báo giá',
    'LBL_MODULE_NAME' => 'Báo giá',
    'LBL_MODULE_TITLE' => 'Báo giá: Trang chủ',
    'LBL_HOMEPAGE_TITLE' => 'Báo giá của tôi',
    'LNK_NEW_RECORD' => 'Tạo Báo giá',
    'LNK_LIST' => 'Xem báo giá',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm báo giá',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_NEW_FORM_TITLE' => 'Báo giá mới',
    'LBL_TERMS_C' => 'Điều khoản',
    'LBL_APPROVAL_ISSUE' => 'Phê duyệt các vấn đề',
    'LBL_APPROVAL_STATUS' => 'Trạng thái phê duyệt',
    'LBL_BILLING_ACCOUNT' => 'Tài khoản',
    'LBL_BILLING_CONTACT' => 'Liên hệ',
    'LBL_EXPIRATION' => 'Có hiệu lực đến',
    'LBL_QUOTE_NUMBER' => 'Số Báo giá',
    'LBL_OPPORTUNITY' => 'Cơ hội',
    'LBL_TEMPLATE_DDOWN_C' => 'Báo giá mẫu',
    'LBL_STAGE' => 'Giai đoạn báo giá',
    'LBL_TERM' => 'Điều khoản thanh toán',
    'LBL_SUBTOTAL_AMOUNT' => 'Tổng số phụ',
    'LBL_DISCOUNT_AMOUNT' => 'Chiết khấu',
    'LBL_TAX_AMOUNT' => 'Thuế',
    'LBL_SHIPPING_AMOUNT' => 'Mua sắm',
    'LBL_TOTAL_AMT' => 'Tổng cộng',
    'VALUE' => 'Tiêu đề',
    'LBL_EMAIL_ADDRESSES' => 'Địa chỉ Email',
    'LBL_LINE_ITEMS' => 'Các hàng mục',
    'LBL_GRAND_TOTAL' => 'Tổng số',
    'LBL_INVOICE_STATUS' => 'Trạng thái hóa đơn',
    'LBL_PRODUCT_QUANITY' => 'Số lượng',
    'LBL_PRODUCT_NAME' => 'Sản phẩm',
    'LBL_PRODUCT_NUMBER' => 'Số', // PR 3296
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Ghi chú',
    'LBL_PRODUCT_DESCRIPTION' => 'Mô tả',
    'LBL_LIST_PRICE' => 'Danh sách',
    'LBL_DISCOUNT_AMT' => 'Chiết khấu',
    'LBL_UNIT_PRICE' => 'Giá bán',
    'LBL_TOTAL_PRICE' => 'Tổng cộng',
    'LBL_VAT' => 'Thuế', // VAT
    'LBL_VAT_AMT' => 'Tổng số tiền thuế', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Thêm dòng sản phẩm',
    'LBL_SERVICE_NAME' => 'Dịch vụ',
    'LBL_SERVICE_NUMBER' => 'Số', // PR 3296
    'LBL_SERVICE_LIST_PRICE' => 'Danh sách',
    'LBL_SERVICE_PRICE' => 'Giá bán',
    'LBL_SERVICE_DISCOUNT' => 'Chiết khấu',
    'LBL_ADD_SERVICE_LINE' => 'Thêm dòng dịch vụ ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Xóa bỏ',
    'LBL_CONVERT_TO_INVOICE' => 'Chuyển đổi sang hóa đơn',
    'LBL_PRINT_AS_PDF' => 'In dưới dạng PDF',
    'LBL_EMAIL_QUOTE' => 'Email báo giá',
    'LBL_CREATE_CONTRACT' => 'Tạo Hợp đồng',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Báo giá',
    'LBL_EMAIL_NAME' => 'Báo giá cho',
    'LBL_QUOTE_DATE' => 'Ngày Báo giá',
    'LBL_NO_TEMPLATE' => 'Lỗi\nKhông có mẫu nào được tìm thấy. Nếu bạn chưa có một báo giá mẫu, đi đến module mẫu PDF và tạo một mẫu báo giá để sử dụng',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Tổng phụ + thuế',//pre shipping
    'LBL_EMAIL_PDF' => 'Email dưới dạng PDF',
    'LBL_ADD_GROUP' => 'Thêm nhóm',
    'LBL_DELETE_GROUP' => 'Xoá nhóm',
    'LBL_GROUP_NAME' => 'Tên nhóm',
    'LBL_GROUP_DESCRIPTION' => 'Mô tả nhóm', // PR 3296
    'LBL_GROUP_TOTAL' => 'Tất cả nhóm',
    'LBL_SHIPPING_TAX' => 'Thuế vận chuyển',
    'LBL_SHIPPING_TAX_AMT' => 'Thuế vận chuyển',
    'LBL_IMPORT_LINE_ITEMS' => 'Nhập các dòng mục',
    'LBL_CREATE_OPPORTUNITY' => 'Tạo Opportunity',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Tổng số phụ (tiền tệ mặc định)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Giảm giá (tiền tệ mặc định)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Thuế (tiền tệ mặc định)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Phí vận chuyển (tiền tệ mặc định)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Tổng (tiền tệ mặc định)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Thuế vận chuyển (tiền tệ mặc định)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Tổng cộng (tiền tệ mặc định)',
    'LBL_QUOTE_TO' => 'Báo giá đến',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Tổng phụ + Thuế (tiền tệ mặc định)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Báo giá: hợp đồng',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Báo giá: hoá đơn',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Báo giá sản phẩm',
    'LBL_AOS_QUOTES_PROJECT' => 'Báo giá: Dự án',
);