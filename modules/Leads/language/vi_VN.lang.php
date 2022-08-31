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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Số hồ sơ phải được xác định để xóa bỏ đầu mối.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Mô tả Khách hàng',
    'LBL_ACCOUNT_ID' => 'ID Khách hàng',
    'LBL_FULL_NAME' => 'Họ và tên',
    'LBL_ACCOUNT_NAME' => 'Tên tài khoản:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Các hoạt động',
    'LBL_ADD_BUSINESSCARD' => 'Thêm Business Card',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ALT_ADDRESS_CITY' => 'Thành phố',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Quốc gia',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Mã bưu chính',
    'LBL_ALT_ADDRESS_STATE' => 'Tiểu bang',
    'LBL_ALT_ADDRESS_STREET_2' => 'Địa chỉ 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Địa chỉ 3',
    'LBL_ALT_ADDRESS_STREET' => 'Địa chỉ',
    'LBL_ALTERNATE_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ALT_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ bất kỳ:',
    'LBL_ANY_EMAIL' => 'Email bất kỳ:',
    'LBL_ANY_PHONE' => 'Điện thoại bất kỳ:',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_ASSIGNED_TO_ID' => 'Đã chỉ định cho người dùng:',
    'LBL_BUSINESSCARD' => 'Chuyển đổi',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CONTACT_ID' => 'ID Liên hệ',
    'LBL_CONTACT_INFORMATION' => 'Xem tổng quát', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Tên Đầu mối:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Đầu mối-Cơ hội:',
    'LBL_CONTACT_ROLE' => 'Vai trò:',
    'LBL_CONTACT' => 'Đầu mối:',
    'LBL_CONVERTED_ACCOUNT' => 'Khách hàng đã được chuyển đổi:',
    'LBL_CONVERTED_CONTACT' => 'Liên hệ đã được chuyển đổi:',
    'LBL_CONVERTED_OPP' => 'Cơ hội đã được chuyển đổi:',
    'LBL_CONVERTED' => 'Đã chuyển đổi',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Chuyển đổi Đầu mối',
    'LBL_CONVERTLEAD' => 'Chuyển đổi Đầu mối',
    'LBL_CONVERTLEAD_WARNING' => 'Cảnh báo: Trạng thái của Đầu mối bạn chuyển đổi thành "Đã chuyển đổi". Bản ghi Liên hệ và/hoặc Tài khoản có thể đã được tạo từ Đầu mối. Nếu bạn muốn tiếp tục chuyển đổi Đầu mối, hãy nhấp vào Save. Để quay lại Đầu mối mà không chuyển đổi nó, hãy nhấp vào Hủy.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Liên hệ có thể: ',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_CREATED_NEW' => 'Đã tạo cái mới',
    'LBL_CREATED_ACCOUNT' => 'Đã tạo Khách hàng mới',
    'LBL_CREATED_CALL' => 'Đã tạo Cuộc gọi mới',
    'LBL_CREATED_CONTACT' => 'Đã tạo Liên hệ mới',
    'LBL_CREATED_MEETING' => 'Đã tạo Hội họp mới',
    'LBL_CREATED_OPPORTUNITY' => 'Đã tạo Cơ hội mới',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_DEPARTMENT' => 'Phòng ban:',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DO_NOT_CALL' => 'Xin đừng gọi:',
    'LBL_DUPLICATE' => 'Đầu mối tương tự',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email từ bên ngoài:',
    'LBL_EXISTING_ACCOUNT' => 'Chọn Khách hàng hiện hữu',
    'LBL_EXISTING_CONTACT' => 'Chọn Liên hệ hiện hữu',
    'LBL_EXISTING_OPPORTUNITY' => 'Sử dụng các cơ hội sẵn có',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Tên:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_HOME_PHONE' => 'Điện thoại nhà:',
    'LBL_IMPORT_VCARD' => 'Nhập vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Tự động tạo một đầu mối mới bằng cách nhập khẩu vCard tập tin hệ thống của bạn.',
    'LBL_INVALID_EMAIL' => 'Email không tồn tại:',
    'LBL_INVITEE' => 'Báo cáo trực tiếp',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Mô tả nguồn Đầu mối:',
    'LBL_LEAD_SOURCE' => 'Nguồn đầu mối:',
    'LBL_LIST_ACCEPT_STATUS' => 'Tình trạng chấp nhận',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_CONTACT_NAME' => 'Tên Đầu mối',
    'LBL_LIST_CONTACT_ROLE' => 'Vai trò',
    'LBL_LIST_DATE_ENTERED' => 'Ngày tạo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Hộp thư đến',
    'LBL_LIST_FIRST_NAME' => 'Tên',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Đầu mối',
    'LBL_LIST_LAST_NAME' => 'Họ',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Mô tả nguồn Đầu mối',
    'LBL_LIST_LEAD_SOURCE' => 'Nguồn đầu mối',
    'LBL_LIST_MY_LEADS' => 'Đầu mối',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_PHONE' => 'Điện thoại VP',
    'LBL_LIST_REFERED_BY' => 'Tham khảo bởi',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LBL_LIST_TITLE' => 'Chức danh',
    'LBL_MOBILE_PHONE' => 'Di động:',
    'LBL_MODULE_NAME' => 'Đầu mối',
    'LBL_MODULE_TITLE' => 'Đầu mối: Tr.chính',
    'LBL_NAME' => 'Tên:',
    'LBL_NEW_FORM_TITLE' => 'Đầu mối mới',
    'LBL_OFFICE_PHONE' => 'Điện thoại VP:',
    'LBL_OPP_NAME' => 'Tên Cơ hội:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Trị giá:',
    'LBL_OPPORTUNITY_ID' => 'ID Cơ hội',
    'LBL_OPPORTUNITY_NAME' => 'Tên Cơ hội:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_PHONE' => 'Điện thoại:',
    'LBL_PORTAL_APP' => 'Ứng dụng',
    'LBL_PORTAL_INFORMATION' => 'Thông tin',
    'LBL_PORTAL_NAME' => 'Tên:',
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_STREET' => 'Địa chỉ',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Thành phố',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Quốc gia',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Mã bưu chính',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Tên tiểu bang chính',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Địa chỉ 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Địa chỉ 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Địa chỉ chính',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',
    'LBL_REFERED_BY' => 'Được tham chiếu bởi:',
    'LBL_REPORTS_TO_ID' => 'Báo cáo cho ID',
    'LBL_REPORTS_TO' => 'Báo cáo cho:',
    'LBL_SALUTATION' => 'Xưng hô',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_CREATED' => 'Được tạo bởi',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Đầu mối',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Chọn lựa Đầu mối',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Chọn lựa Đầu mối',
    'LBL_STATE' => 'Tiểu bang hoặc khu vực:', //For address fields
    'LBL_STATUS_DESCRIPTION' => 'Mô tả trạng thái:',
    'LBL_STATUS' => 'Trạng thái:',
    'LBL_TITLE' => 'Chức danh:',
    'LNK_IMPORT_VCARD' => 'Tạo Đầu mối từ vCard',
    'LNK_LEAD_LIST' => 'Xem Đầu mối',
    'LNK_NEW_ACCOUNT' => 'Tạo Khách hàng',
    'LNK_NEW_APPOINTMENT' => 'Tạo Cuộc hẹn',
    'LNK_NEW_CONTACT' => 'Tạo Liên hệ',
    'LNK_NEW_LEAD' => 'Tạo Đầu mối',
    'LNK_NEW_NOTE' => 'Tạo Ghi chú',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'LNK_NEW_CASE' => 'Tạo Vụ việc',
    'LNK_NEW_CALL' => 'Log Cuộc gọi',
    'LNK_NEW_MEETING' => 'Lịch trình Hội họp',
    'LNK_NEW_OPPORTUNITY' => 'Tạo Cơ hội',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Chọn khách hàng',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Chọn Liên hệ',
    'NTC_DELETE_CONFIRMATION' => 'Bạn chắc muốn xoá hoàn toàn bản ghi?',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có muốn loại bỏ Đầu mối từ Vụ việc này?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Chiến dịch',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',
    'LBL_PROSPECT_LIST' => 'Danh sách Tiềm năng',
    'LBL_CAMPAIGN_LEAD' => 'Chiến dịch',
    'LBL_BIRTHDATE' => 'Ngày sinh:',
    'LBL_ASSISTANT_PHONE' => 'Điện thoại trợ lý',
    'LBL_ASSISTANT' => 'Trợ lý',
    'LBL_CREATED_USER' => 'Người tạo',
    'LBL_MODIFIED_USER' => 'Người sửa',
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CONVERT_MODULE_NAME' => 'Chức năng',
    'LBL_CONVERT_REQUIRED' => 'Yêu cầu',
    'LBL_CONVERT_SELECT' => 'Cho phép chọn lựa',
    'LBL_CONVERT_COPY' => 'Sao chép dữ liệu',
    'LBL_CONVERT_EDIT' => 'Sửa',
    'LBL_CONVERT_DELETE' => 'Xóa',
    'LBL_CONVERT_ADD_MODULE' => 'Thêm Chức năng',
    'LBL_CREATE' => 'Tạo',
    'LBL_SELECT' => ' <b>OR</b> Chọn',
    'LBL_WEBSITE' => 'Trang web',
    'LNK_IMPORT_LEADS' => 'Nhập Đầu mối',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Các Module để tạo ra một bản ghi mới trong.',
    'LBL_REQUIRED_TIP' => 'Các module cần thiết phải được tạo ra hoặc được chọn trước khi đầu mối có thể được chuyển đổi.',
    'LBL_COPY_TIP' => 'Nếu đã kiểm tra, các trường từ đầu mối sẽ được sao chép vào các trường có cùng tên trong các bản ghi vừa tạo.',
    'LBL_SELECTION_TIP' => 'Các Module có trường liên quan trong Danh bạ có thể được chọn chứ không phải tạo ra trong quá trình chuyển đổi.',
    'LBL_EDIT_TIP' => 'Thay đổi giao diện chuyển đổi cho module này.',
    'LBL_DELETE_TIP' => 'Loại bỏ module này khỏi giao diện chuyển đổi.',

    'LBL_ACTIVITIES_MOVE' => 'Di chuyển các hoạt động đến',
    'LBL_ACTIVITIES_COPY' => 'Sao chép các hoạt động',
    'LBL_ACTIVITIES_MOVE_HELP' => "Chọn bản ghi để di chuyển các hoạt động của Đầu mối. Nhiệm vụ, Cuộc gọi, Cuộc họp, Ghi chú và Email sẽ được di chuyển đến các bản ghi đã chọn.",
    'LBL_ACTIVITIES_COPY_HELP' => "Chọn (các) hồ sơ để tạo bản sao các hoạt động của Đầu mối. Tác vụ mới, Cuộc gọi, Cuộc họp và Ghi chú sẽ được tạo cho mỗi bản ghi đã chọn. Email sẽ liên quan đến (những) bản ghi đã chọn.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID Chiến dịch',
    'LBL_EDITLAYOUT' => 'Sửa khung' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Nhập vào ngày' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Đang tải' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Sửa' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Sự kiện',
    'LBL_WWW' => 'WWW',
);