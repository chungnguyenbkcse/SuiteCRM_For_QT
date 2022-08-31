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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Cuộc gọi',
    'LBL_MODULE_TITLE' => 'Cuộc gọi: Tr.chính',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_LIST_FORM_TITLE' => 'Danh sách cuộc gọi',
    'LBL_NEW_FORM_TITLE' => 'Thiết lập cuộc hẹn',
    'LBL_LIST_CLOSE' => 'Đóng',
    'LBL_LIST_SUBJECT' => 'Chủ đề',
    'LBL_LIST_CONTACT' => 'Liên hệ',
    'LBL_LIST_RELATED_TO' => 'Liên quan đến',
    'LBL_LIST_RELATED_TO_ID' => 'Liên quan đến ID',
    'LBL_LIST_DATE' => 'Ngày bắt đầu',
    'LBL_LIST_DIRECTION' => 'Phương hướng',
    'LBL_SUBJECT' => 'Chủ đề:',
    'LBL_REMINDER' => 'Nhắc nhở:',
    'LBL_CONTACT_NAME' => 'Liên hệ:',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_STATUS' => 'Tình trạng:',
    'LBL_DIRECTION' => 'Phương hướng:',
    'LBL_DATE' => 'Ngày bắt đầu:',
    'LBL_DURATION' => 'Thời lượng:',
    'LBL_DURATION_HOURS' => 'Thời lượng - giờ:',
    'LBL_DURATION_MINUTES' => 'Thời lượng - phút:',
    'LBL_HOURS_MINUTES' => '(giờ/phút)',
    'LBL_DATE_TIME' => 'Ngày & thời gian bắt đầu:',
    'LBL_TIME' => 'Thời gian bắt đầu:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Nhật ký cuộc gọi',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_CALL_LIST' => 'Xem cuộc gọi',
    'LNK_IMPORT_CALLS' => 'Nhập cuộc gọi',
    'ERR_DELETE_RECORD' => 'Một số hồ sơ phải được xác định để xoá tài khoản này.',
    'LBL_INVITEE' => 'Người được mời',
    'LBL_RELATED_TO' => 'Liên quan đến:',
    'LNK_NEW_APPOINTMENT' => 'Thiết lập cuộc hẹn',
    'LBL_SCHEDULING_FORM_TITLE' => 'Lịch trình',
    'LBL_ADD_INVITEE' => 'Thêm người được mời',
    'LBL_NAME' => 'Tên',
    'LBL_FIRST_NAME' => 'Tên',
    'LBL_LAST_NAME' => 'Họ',
    'LBL_EMAIL' => 'Hộp thư đến',
    'LBL_PHONE' => 'Điện thoại',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Gửi email cho tất cả khách mời',
    'LBL_EMAIL_REMINDER' => 'Email nhắc nhở',
    'LBL_EMAIL_REMINDER_TIME' => 'Email nhắc nhở thời gian',
    'LBL_SEND_BUTTON_TITLE' => 'Gửi thư mời',
    'LBL_SEND_BUTTON_LABEL' => 'Gửi thư mời',
    'LBL_DATE_END' => 'Ngày kết thúc',
    'LBL_REMINDER_TIME' => 'Thời gian nhắc nhở',
    'LBL_EMAIL_REMINDER_SENT' => 'Lời nhắc email đã gửi',
    'LBL_SEARCH_BUTTON' => 'Tìm kiếm',
    'LBL_ADD_BUTTON' => 'Thêm',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuộc gọi',
    'LNK_SELECT_ACCOUNT' => 'Chọn Khách hàng',
    'LNK_NEW_ACCOUNT' => 'Khách hàng mới',
    'LNK_NEW_OPPORTUNITY' => 'Cơ hội mới',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_USERS_SUBPANEL_TITLE' => 'Người dùng',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Thành viên của',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ghi chú',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_LIST_MY_CALLS' => 'Cuộc gọi',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_ASSIGNED_TO_ID' => 'Đã chỉ định cho người dùng',
    'NOTICE_DURATION_TIME' => 'Thời lượng không được quá 0',
    'LBL_CALL_INFORMATION' => 'Thông tin tổng quát', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_REMOVE' => 'Xóa bỏ', // PR 6017  commit/30577ae27759c5f4782a530b3d5b4ebd688394d8
    'LBL_ACCEPT_STATUS' => 'Tình trạng chấp nhận',
    'LBL_ACCEPT_LINK' => 'Chấp nhận liên kết',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Tạo một khách mời',
    'LBL_CREATE_CONTACT' => 'Như liên hệ',
    'LBL_CREATE_LEAD' => 'Như là đầu mối',
    'LBL_CREATE_AND_ADD' => 'Tạo và thêm',
    'LBL_CANCEL_CREATE_INVITEE' => 'Hủy',
    'LBL_EMPTY_SEARCH_RESULT' => 'Xin lỗi, không tìm thấy kết quả nào. Vui lòng tạo một người được mời bên dưới.',
    'LBL_NO_ACCESS' => 'Bạn không có quyền truy cập để tạo $module',

    'LBL_REPEAT_TYPE' => 'Kiểu lặp lại',
    'LBL_REPEAT_INTERVAL' => 'Khoảng thời gian lặp lại',
    'LBL_REPEAT_DOW' => 'Lặp lại Dow',
    'LBL_REPEAT_UNTIL' => 'Lặp lại cho đến khi',
    'LBL_REPEAT_COUNT' => 'Lặp lại đếm',
    'LBL_REPEAT_PARENT_ID' => 'Lặp lại Parent ID',
    'LBL_RECURRING_SOURCE' => 'Nguồn định kỳ',

    'LBL_SYNCED_RECURRING_MSG' => 'Cuộc gọi này có nguồn gốc từ một hệ thống khác và được đồng bộ hóa với SuiteCRM. Để thay đổi, đi đến các cuộc gọi ban đầu trong hệ thống khác. Làm thay đổi trong hệ thống khác có thể được đồng bộ hóa với bản ghi này.',

    // for reminders
    'LBL_REMINDERS' => 'Nhắc nhở',
    'LBL_REMINDERS_ACTIONS' => 'Hành động:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email khách mời',
    'LBL_REMINDERS_WHEN' => 'Khi:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Loại bỏ các lời nhắc nhở',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Thêm tất cả Khách mời',
    'LBL_REMINDERS_ADD_REMINDER' => 'Thêm nhắc nhở',

    'LBL_RESCHEDULE' => 'Đổi lịch hẹn',
    'LBL_RESCHEDULE_COUNT' => 'Cuộc gọi thử',
    'LBL_RESCHEDULE_DATE' => 'Ngày giờ',
    'LBL_RESCHEDULE_REASON' => 'Lý do',
    'LBL_RESCHEDULE_ERROR1' => 'Vui lòng chọn ngày đúng',
    'LBL_RESCHEDULE_ERROR2' => 'Vui lòng lựa chọn một lý do',
    'LBL_RESCHEDULE_PANEL' => 'Đổi lịch hẹn',
    'LBL_RESCHEDULE_HISTORY' => 'Lịch sử cuộc gọi thử',
    'LBL_CANCEL' => 'Hủy',
    'LBL_SAVE' => 'Lưu',

    'LBL_CALLS_RESCHEDULE' => 'Lịch gọi',
    'LBL_LIST_STATUS'=>'Tình trạng',
    'LBL_LIST_DATE_MODIFIED'=>'Ngày chỉnh sửa',
    'LBL_LIST_DUE_DATE'=>'Ngày hạn',
);