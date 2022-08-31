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
    'ERR_DELETE_RECORD' => 'Chỉ định con số kỷ lục để xóa số liên lạc.',
    'LBL_ACCOUNT_ID' => 'ID Khách hàng:',
    'LBL_ACCOUNT_NAME' => 'Tên tài khoản:',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Các hoạt động',
    'LBL_ADD_BUSINESSCARD' => 'Nhập Business Card',
    'LBL_ADDMORE_BUSINESSCARD' => 'Thêm business card khác',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ALT_ADDRESS_CITY' => 'Tên thành phố khác:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Tên quốc gia khác:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Mã bưu chính khác:',
    'LBL_ALT_ADDRESS_STATE' => 'Địa chỉ tiểu bang khác:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Địa chỉ khác 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Địa chỉ khác 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Địa chỉ khác:',
    'LBL_ALTERNATE_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ALT_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Điện thoại:',
    'LBL_ASSIGNED_TO_NAME' => 'Giao cho:',
    'LBL_ASSIGNED_TO_ID' => 'Đã chỉ định cho người dùng',
    'LBL_ASSISTANT_PHONE' => 'Điện thoại phụ:',
    'LBL_ASSISTANT' => 'Phụ:',
    'LBL_BIRTHDATE' => 'Ngày sinh:',
    'LBL_BUSINESSCARD' => 'vCard',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CAMPAIGN_ID' => 'ID Chiến dịch',
    'LBL_CONTACT_INFORMATION' => 'Xem thông tin Liên hệ',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Tên liên lạc:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Liên hệ-cơ hội:',
    'LBL_CONTACT_ROLE' => 'Vai trò:',
    'LBL_CONTACT' => 'Liên hệ:',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_CREATED_ACCOUNT' => 'Đã tạo 1 Khách hàng mới',
    'LBL_CREATED_CALL' => 'Đã tạo 1 cuộc gọi mới',
    'LBL_CREATED_CONTACT' => 'Đã tạo 1 Liên hệ mới',
    'LBL_CREATED_MEETING' => 'Đã tạo 1 Cuộc hẹn mới',
    'LBL_CREATED_OPPORTUNITY' => 'Một cơ hội mới đã được tạo',
    'LBL_DATE_MODIFIED' => 'Ngày điều chỉnh:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_DEPARTMENT' => 'Phòng:',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Báo cáo trực tiếp',
    'LBL_DO_NOT_CALL' => 'Xin đừng gọi:',
    'LBL_DUPLICATE' => 'Có thể có số liên lạc trùng lặp',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email từ bên ngoài:',
    'LBL_EXISTING_ACCOUNT' => 'Chọn Khách hàng hiện hữu',
    'LBL_EXISTING_CONTACT' => 'Chọn Liên hệ hiện hữu',
    'LBL_EXISTING_OPPORTUNITY' => 'Sử dụng các cơ hội sẵn có',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Tên:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_HOME_PHONE' => 'Nhà:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Nhập vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Tự động tạo một liên hệ mới bằng cách nhập khẩu vCard tập tin hệ thống của bạn.',
    'LBL_INVALID_EMAIL' => 'Email không tồn tại:',
    'LBL_INVITEE' => 'Báo cáo trực tiếp',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_LEAD_SOURCE' => 'Nguồn đầu mối:',
    'LBL_LIST_ACCEPT_STATUS' => 'Trạng thái chấp thuận',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_LIST_CONTACT_ROLE' => 'Vai trò',
    'LBL_LIST_EMAIL_ADDRESS' => 'Hộp thư đến',
    'LBL_LIST_FIRST_NAME' => 'Tên',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Liên hệ',
    'LBL_LIST_LAST_NAME' => 'Họ',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_PHONE' => 'Điện thoại VP',
    'LBL_LIST_TITLE' => 'Chức danh',
    'LBL_MOBILE_PHONE' => 'Di động:',
    'LBL_MODIFIED' => 'Điều chỉnh bởi:',
    'LBL_MODULE_NAME' => 'Liên hệ',
    'LBL_MODULE_TITLE' => 'Thông tin Liên hệ: Trang chính',
    'LBL_NAME' => 'Tên:',
    'LBL_NEW_FORM_TITLE' => 'Khách hàng mới',
    'LBL_NOTE_SUBJECT' => 'Chủ đề ghi chú',
    'LBL_OFFICE_PHONE' => 'Điện thoại VP:',
    'LBL_OPP_NAME' => 'Tên cơ hội:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Cơ hội vai trò ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Vai trò của cơ hội',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_PHONE' => 'Điện thoại:',
    'LBL_PORTAL_APP' => 'Cổng thông tin ứng dụng:',
    'LBL_PORTAL_INFORMATION' => 'Thông tin',
    'LBL_PORTAL_NAME' => 'Tên:',
    'LBL_STREET' => 'Địa chỉ',
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Tên thành phố:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Tên quốc gia:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Mã bưu chính:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Tên tiểu bang chính:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Địa chỉ 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Địa chỉ 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Địa chỉ:',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',
    'LBL_PRODUCTS_TITLE' => 'Sản phẩm',
    'LBL_REPORTS_TO_ID' => 'Báo cáo ID:',
    'LBL_REPORTS_TO' => 'Báo cáo cho:',
    'LBL_RESOURCE_NAME' => 'Gói tài nguyên',
    'LBL_SALUTATION' => 'Xưng hô:',
    'LBL_SAVE_CONTACT' => 'Lưu',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Chọn kiểm tra danh bạ',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Chọn kiểm tra danh bạ',
    'LBL_STATE' => 'Tiểu bang hoặc khu vực:', //For address fields
    'LBL_SYNC_CONTACT' => 'Đồng bộ Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Danh sách tiềm năng',
    'LBL_TITLE' => 'Chức danh:',
    'LNK_CONTACT_LIST' => 'Xem thông tin Liên hệ',
    'LNK_IMPORT_VCARD' => 'Tạo thông tin từ vCard',
    'LNK_NEW_ACCOUNT' => 'Tạo Account',
    'LNK_NEW_APPOINTMENT' => 'Tạo cuộc hẹn',
    'LNK_NEW_CALL' => 'Nhật ký cuộc gọi',
    'LNK_NEW_CASE' => 'Tạo 1 hỗ trợ KH',
    'LNK_NEW_CONTACT' => 'Tạo thông tin Liên hệ',
    'LNK_NEW_EMAIL' => 'Lưu trữ Email',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_NOTE' => 'Tạo ghi chú',
    'LNK_NEW_OPPORTUNITY' => 'Tạo Opportunity',
    'LNK_NEW_TASK' => 'Tạo công việc',
    'LNK_SELECT_ACCOUNT' => "Chọn Account",
    'NTC_DELETE_CONFIRMATION' => 'Bạn chắc muốn xoá hoàn toàn bản ghi?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Việc tạo ra một cơ hội yêu cầu một tài khoản. \n hãy tạo tài khoản mới hoặc chọn có sẵn.',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có chắc bạn muốn loại bỏ liên hệ này khỏi trường hợp?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Tài liệu',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copy đến địa chỉ chính',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copy đến địa chỉ khác',

    'LBL_CASES_SUBPANEL_TITLE' => 'Hỗ trợ khác hàng',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Lỗi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Các dự án',
    'LBL_PROJECTS_RESOURCES' => 'Nguồn lực dự án',
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Chiến dịch',
    'LBL_LIST_CITY' => 'Thành phố',
    'LBL_LIST_STATE' => 'Tiểu bang',
    'LBL_HOMEPAGE_TITLE' => 'Liên hệ',
    'LBL_OPPORTUNITIES' => 'Cơ hội',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Thông tin Liên hệ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Các dự án',
    'LNK_IMPORT_CONTACTS' => 'Import thông tin Liên hệ',

    // SNIP
    'LBL_USER_SYNC' => 'Đồng bộ người dùng',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Sự kiện',

    'LBL_AOP_CASE_UPDATES' => 'Cập nhật trường hợp',
    'LBL_CREATE_PORTAL_USER' => 'Tạo cổng thông tin người dùng',
    'LBL_ENABLE_PORTAL_USER' => 'Cho phép người sử dụng cổng thông tin',
    'LBL_DISABLE_PORTAL_USER' => 'Vô hiệu hóa cổng thông tin người dùng',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Thất bại trong việc tạo ra các cổng thông tin người dùng',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Thất bại để kích hoạt cổng thông tin người dùng',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Không thể vô hiệu hóa cổng thông tin người dùng',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Tạo cổng thông tin người dùng',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Kích hoạt cổng thông tin người dùng',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Vô hiệu hóa cổng thông tin người dùng',
    'LBL_NO_JOOMLA_URL' => 'Không có cổng đã chỉ định URL',
    'LBL_PORTAL_USER_TYPE' => 'Loại cổng thông tin người dùng',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Vô hiệu hóa tài khoản',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Tài khoản Joomla ID',
   
    'LBL_ERROR_NO_PORTAL_SELECTED' => 'Không có bất kỳ Portal nào được chọn', // escaped single quotes required. PR 5426
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_ERROR' => 'Nhiều hơn một portal URL được thiết lập nhưng nhiều portal không được hỗ trợ, vui lòng cập nhật các thành phần portal trên trang web: ',
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_WARNING' => 'Các thành phần của portal không dùng nữa, vui lòng cập nhật các thành phần portal trên trang web: ',

    'LBL_INVALID_USER_DATA' => 'Cố gắng tạo portal người dùng không cần tên và/hoặc bất kỳ email nào. Vui lòng kiểm tra chi tiết liên hệ',
    'LBL_NO_RELATED_JACCOUNT' => 'Cố gắng vô hiệu hóa người dùng CRM mà không có quan hệ với portal tài khoản Joomla',
    'LBL_UNABLE_READ_PORTAL_VERSION' => 'Không thể đọc phiên bản AOP từ portal', // PR 5426
 
    'LBL_AOS_CONTRACTS' => 'Hợp đồng',
    'LBL_AOS_INVOICES' => 'Hóa đơn',
    'LBL_AOS_QUOTES' => 'Báo giá',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Dự án liên hệ từ dự án tiêu đề',
    'LBL_LANGUAGE' => 'Ngôn ngữ', // PR 5721
);