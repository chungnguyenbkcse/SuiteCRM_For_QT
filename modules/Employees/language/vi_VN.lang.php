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
    'LBL_MODULE_NAME' => 'Nhân viên',
    'LBL_MODULE_TITLE' => 'Nhân viên: Trang chủ',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Nhân viên ',
    'LBL_LIST_FORM_TITLE' => 'Nhân viên',
    'LBL_NEW_FORM_TITLE' => 'Nhân viên mới',
    'LBL_LOGIN' => 'Đăng nhập',
    'LBL_RESET_PREFERENCES' => 'Trở về giao diện ban đầu',
    'LBL_TIME_FORMAT' => 'Định dạng thời gian:',
    'LBL_DATE_FORMAT' => 'Định dạng ngày:',
    'LBL_TIMEZONE' => 'Thời gian hiện tại:',
    'LBL_CURRENCY' => 'Tiền tệ:',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_LAST_NAME' => 'Họ',
    'LBL_LIST_EMPLOYEE_NAME' => 'Tên nhân viên',
    'LBL_LIST_DEPARTMENT' => 'Phòng ban',
    'LBL_LIST_REPORTS_TO_NAME' => 'báo cáo cho',
    'LBL_LIST_EMAIL' => 'Hộp thư đến',
    'LBL_LIST_USER_NAME' => 'Tên người dùng',
    'LBL_ERROR' => 'Lỗi:',
    'LBL_PASSWORD' => 'Mật khẩu:',
    'LBL_USER_NAME' => 'Tên người dùng:',
    'LBL_USER_TYPE' => 'Kiểu người dùng',
    'LBL_FIRST_NAME' => 'Tên:',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_THEME' => 'Giao diện:',
    'LBL_LANGUAGE' => 'Ngôn ngữ:',
    'LBL_ADMIN' => 'Quản trị viên:',
    'LBL_EMPLOYEE_INFORMATION' => 'Thông tin',
    'LBL_OFFICE_PHONE' => 'ĐT văn phòng:',
    'LBL_REPORTS_TO' => 'Báo cáo cho Id:',
    'LBL_REPORTS_TO_NAME' => 'Báo cáo cho',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_NOTES' => 'Ghi chú:',
    'LBL_DEPARTMENT' => 'Phòng ban:',
    'LBL_TITLE' => 'Chức vụ:',
    'LBL_ANY_ADDRESS' => 'bất kỳ địa chỉ',
    'LBL_ANY_PHONE' => 'Bất kỳ số đt:',
    'LBL_ANY_EMAIL' => 'bất kỳ Email:',
    'LBL_ADDRESS' => 'Địa chỉ:',
    'LBL_CITY' => 'Thành phố:',
    'LBL_STATE' => 'Tiểu bang hoặc khu vực:', //For address fields
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_NAME' => 'Tên:',
    'LBL_MOBILE_PHONE' => 'Di động:',
    'LBL_FAX' => 'Fax',
    'LBL_EMAIL' => 'Địa chỉ Email :',
    'LBL_EMAIL_LINK_TYPE' => 'Email khách hàng',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Gửi email bằng cách sử dụng ứng dụng email trong ứng dụng SuiteCRM.<br><b>External Mail Client:</b> Gửi email bằng cách sử dụng một ứng dụng email bên ngoài của các ứng dụng SuiteCRM, chẳng hạn như Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'ĐT nhà:',
    'LBL_WORK_PHONE' => 'ĐT văn phòng:',
    'LBL_EMPLOYEE_STATUS' => 'Trạng thái nhân viên:',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',
    'LBL_SAVED_SEARCH' => 'Tùy chọn bố cục',
    'LBL_MESSENGER_ID' => 'Tên IM:',
    'LBL_MESSENGER_TYPE' => 'Loại IM:',
    'ERR_LAST_ADMIN_1' => 'tên nhân viên "',
    'ERR_LAST_ADMIN_2' => '" cuối cùng phải là quản trị viên.',
    'LNK_NEW_EMPLOYEE' => 'tạo nhân viên',
    'LNK_EMPLOYEE_LIST' => 'Xem nhân viên',
    'ERR_DELETE_RECORD' => 'Bạn phải chỉ định một bản ghi để xóa tài khoản.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Trạng thái nhân viên',

    'LBL_SUGAR_LOGIN' => 'Là người dùng',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Thông báo chỉ định',
    'LBL_IS_ADMIN' => 'là quản trị viên',
    'LBL_GROUP' => 'Nhóm người dùng',
    'LBL_PHOTO' => 'Hình ảnh',
    'LBL_DELETE_USER_CONFIRM' => 'Nhân viên này cũng là một người dùng. Xóa hồ sơ nhân viên cũng sẽ xóa hồ sơ người dùng, và người dùng sẽ không thể truy cập vào các ứng dụng. Bạn có muốn tiếp tục với việc xóa hồ sơ này?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Bạn có chắc bạn muốn xóa bỏ nhân viên này không?',
    'LBL_ONLY_ACTIVE' => 'Nhân viên hoạt động',
    'LBL_SELECT' => 'Chọn' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Xác thực Id',
    'LBL_EXT_AUTHENTICATE' => 'Xác thực ngoài',
    'LBL_GROUP_USER' => 'Nhóm người dùng',
    'LBL_LIST_ACCEPT_STATUS' => 'trạng thái đồng ý',
    'LBL_MODIFIED_BY' => 'Được sửa bởi',
    'LBL_MODIFIED_BY_ID' => 'Chỉnh sửa bởi Id',
    'LBL_CREATED_BY_NAME' => 'Được tạo bởi', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'API cổng thông tin người dùng',
    'LBL_PSW_MODIFIED' => 'mật khẩu thay đổi lần cuối',
    'LBL_SHOW_ON_EMPLOYEES' => 'Hiện thị nhân viên',
    'LBL_USER_HASH' => 'Mật khẩu',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Mật khẩu hệ thống',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Trạng thái',
    'LBL_ADDRESS_CITY' => 'Thành phố',
    'LBL_ADDRESS_COUNTRY' => 'Quốc gia',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ADDRESS_POSTALCODE' => ' Postal Code',
    'LBL_ADDRESS_STATE' => 'Tỉnh',
    'LBL_ADDRESS_STREET' => 'Đường',

    'LBL_DATE_MODIFIED' => 'Ngày sửa',
    'LBL_DATE_ENTERED' => 'Ngày nhập',
    'LBL_DELETED' => 'Đã xóa',

    'LBL_BUTTON_SELECT' => 'Chọn',
    'LBL_BUTTON_CLEAR' => 'Xóa sạch',

    'LBL_CONTACTS_SYNC' => 'Đồng bộ liên hệ',
    'LBL_OAUTH_TOKENS' => 'Bảo mật',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Dự án người dùng từ tiêu đề dự án',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Dự án liên hệ từ tiêu đề dự án',
    'LBL_ROLES' => 'Vai trò ',
    'LBL_SECURITYGROUPS' => 'Nhóm bảo mật',
    'LBL_PROSPECT_LIST' => 'Danh sách tiềm năng',
);
