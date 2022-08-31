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
    'ERR_DELETE_RECORD' => 'Bạn phải chỉ định một bản ghi để xóa tài khoản.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Gợi ý kiến thức cơ bản',
    'LBL_TOOL_TIP_TITLE' => 'Tiêu đề: ',
    'LBL_TOOL_TIP_BODY' => 'Nội dung: ',
    'LBL_TOOL_TIP_INFO' => 'Thông tin bổ sung: ',
    'LBL_TOOL_TIP_USE' => 'Sử dụng như: ',
    'LBL_SUGGESTION_BOX' => 'Gợi ý',
    'LBL_NO_SUGGESTIONS' => 'Không có đề xuất',
    'LBL_RESOLUTION_BUTTON' => 'Giải pháp',
    'LBL_SUGGESTION_BOX_STATUS' => 'Trạng thái',
    'LBL_SUGGESTION_BOX_TITLE' => 'Chức danh',
    'LBL_SUGGESTION_BOX_REL' => 'Mức độ liên quan',

    'LBL_ACCOUNT_ID' => 'ID Khách hàng',
    'LBL_ACCOUNT_NAME' => 'Tên tài khoản:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Các hoạt động',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Lỗi',
    'LBL_CASE_NUMBER' => 'Thứ tự:',
    'LBL_CASE' => 'Vụ việc:',
    'LBL_CONTACT_NAME' => 'Tên liên lạc:',
    'LBL_CONTACT_ROLE' => 'Vai trò:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Vụ việc',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_INVITEE' => 'Liên hệ',
    'LBL_MEMBER_OF' => 'Khách hàng',
    'LBL_MODULE_NAME' => 'Vụ việc',
    'LBL_MODULE_TITLE' => 'Vụ việc: Tr.chính',
    'LBL_NEW_FORM_TITLE' => 'Vụ việc mới',
    'LBL_NUMBER' => 'Số:',
    'LBL_PRIORITY' => 'Ưu tiên:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Tài liệu',
    'LBL_RESOLUTION' => 'Giải pháp:',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_STATUS' => 'Trạng thái:',
    'LBL_SUBJECT' => 'Chủ đề:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_ASSIGNED' => 'Được chỉ định đến',
    'LBL_LIST_CLOSE' => 'Đóng',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Vụ việc',
    'LBL_LIST_LAST_MODIFIED' => 'Chỉnh sửa lần cuối',
    'LBL_LIST_MY_CASES' => 'Vụ việc',
    'LBL_LIST_NUMBER' => 'Số.',
    'LBL_LIST_PRIORITY' => 'Ưu tiên',
    'LBL_LIST_STATUS' => 'Trạng thái',
    'LBL_LIST_SUBJECT' => 'Chủ đề',

    'LNK_CASE_LIST' => 'Xem Vụ việc',
    'LNK_NEW_CASE' => 'Tạo Vụ việc',
    'LBL_LIST_DATE_CREATED' => 'Ngày tạo',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_TYPE' => 'Loại',
    'LBL_WORK_LOG' => 'Nhật ký làm việc',
    'LNK_IMPORT_CASES' => 'Nhập Vụ việc',

    'LBL_CREATED_USER' => 'Người tạo',
    'LBL_MODIFIED_USER' => 'Người sửa',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Chủ đề',
    'LBL_CASE_INFORMATION' => 'Toàn bộ',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    // SNIP
    'LBL_UPDATE_TEXT' => 'Bản Cập Nhật - văn bản', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Cập nhật nội bộ',
    'LBL_AOP_CASE_UPDATES' => 'Cập nhật trường hợp',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Cập nhật tình huống bài viết',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Thu gọn tất cả',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Mở rộng tất cả',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Đính kèm: ',

    'LBL_AOP_CASE_EVENTS' => 'Trường hợp các sự kiện',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Trường hợp tập tin đính kèm:',
    'LBL_ADD_CASE_FILE' => 'Thêm tập tin',
    'LBL_REMOVE_CASE_FILE' => 'Loại bỏ tệp',
    'LBL_SELECT_CASE_DOCUMENT' => 'Chọn tài liệu',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Hủy rõ ràng',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Tài liệu Nội bộ CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'File bên ngoài',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Được tạo bởi liên hệ',
    'LBL_CONTACT_CREATED_BY' => 'Được tạo bởi',
    'LBL_CASE_UPDATE_FORM' => 'Bản Cập Nhật - form đính kèm', //Form for attachments on case updates
    'LBL_CREATOR_PORTAL' => 'Đường dẫn Portal', //PR 5426
    'LBL_SUGGESTION' => 'Đề xuất', //PR 5426
);