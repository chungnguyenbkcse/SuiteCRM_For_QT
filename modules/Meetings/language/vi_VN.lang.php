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
    'LBL_ACCEPT_THIS' => 'Đồng ý?',
    'LBL_ADD_BUTTON' => 'Thêm',
    'LBL_ADD_INVITEE' => 'Thêm Người được mời',
    'LBL_CONTACT_NAME' => 'Liên hệ:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_CREATED_BY' => 'Được tạo bởi',
    'LBL_DATE_END' => 'Ngày kết thúc',
    'LBL_DATE_TIME' => 'Ngày & thời gian bắt đầu:',
    'LBL_DATE' => 'Ngày bắt đầu:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hội họp',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DIRECTION' => 'Phương hướng:',
    'LBL_DURATION_HOURS' => 'Thời lượng - giờ:',
    'LBL_DURATION_MINUTES' => 'Thời lượng - phút:',
    'LBL_DURATION' => 'Thời lượng:',
    'LBL_EMAIL' => 'Hộp thư đến',
    'LBL_FIRST_NAME' => 'Tên',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ghi chú',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(giờ/phút)',
    'LBL_INVITEE' => 'Người được mời',
    'LBL_LAST_NAME' => 'Họ',
    'LBL_ASSIGNED_TO_NAME' => 'Giao cho:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',
    'LBL_LIST_CLOSE' => 'Đóng',
    'LBL_LIST_CONTACT' => 'Liên hệ',
    'LBL_LIST_DATE_MODIFIED' => 'Ngày sửa',
    'LBL_LIST_DATE' => 'Ngày bắt đầu',
    'LBL_LIST_DIRECTION' => 'Phương hướng',
    'LBL_LIST_DUE_DATE' => 'Ngày hạn',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Hội họp',
    'LBL_LIST_MY_MEETINGS' => 'Hội họp',
    'LBL_LIST_RELATED_TO' => 'Liên quan tới',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LBL_LIST_SUBJECT' => 'Chủ đề',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_LOCATION' => 'Thời lượng:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Được sửa bởi',
    'LBL_MODULE_NAME' => 'Hội họp',
    'LBL_MODULE_TITLE' => 'Hội họp: Tr.chính',
    'LBL_NAME' => 'Tên',
    'LBL_NEW_FORM_TITLE' => 'Tạo cuộc hẹn',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Cập nhật trình tự Cuộc họp',
    'LBL_PHONE' => 'Điện thoại VP:',
    'LBL_REMINDER_TIME' => 'Thời gian nhắc nhở',
    'LBL_EMAIL_REMINDER_SENT' => 'Lời nhắc email đã gửi',
    'LBL_REMINDER' => 'Nhắc nhở:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Gửi email cho tất cả khách mời',
    'LBL_EMAIL_REMINDER' => 'Email nhắc nhở',
    'LBL_EMAIL_REMINDER_TIME' => 'Email nhắc nhở thời gian',
    'LBL_REMOVE' => 'Xóa bỏ', // PR 5451
    'LBL_SCHEDULING_FORM_TITLE' => 'Lịch trình',
    'LBL_SEARCH_BUTTON' => 'Tìm kiếm',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_SEND_BUTTON_LABEL' => 'Gửi thư mời',
    'LBL_SEND_BUTTON_TITLE' => 'Gửi thư mời',
    'LBL_STATUS' => 'Tình trạng:',
    'LBL_TYPE' => 'Loại Hội họp',
    'LBL_PASSWORD' => 'Mật khẩu',
    'LBL_URL' => 'Bắt đầu Hội họp',
    'LBL_HOST_URL' => 'Máy chủ lưu trữ URL',
    'LBL_DISPLAYED_URL' => 'URL hiển thị',
    'LBL_CREATOR' => 'Chủ tọa',
    'LBL_EXTERNALID' => 'Ứng dụng ID ngoài',
    'LBL_SUBJECT' => 'Chủ đề:',
    'LBL_TIME' => 'Thời gian bắt đầu:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Người dùng',
    'LBL_PARENT_TYPE' => 'Loại Cấp trên',
    'LBL_PARENT_ID' => 'Nhóm cha',
    'LNK_MEETING_LIST' => 'Xem Hội họp',
    'LNK_NEW_APPOINTMENT' => 'Tạo cuộc hẹn',
    'LNK_NEW_MEETING' => 'Lịch trình Hội họp',
    'LNK_IMPORT_MEETINGS' => 'Nhập Hội họp',

    'LBL_CREATED_USER' => 'Người dùng tạo',
    'LBL_MODIFIED_USER' => 'Người dùng sửa',
    'NOTICE_DURATION_TIME' => 'Thời lượng phải được lớn hơn 0',
    'LBL_MEETING_INFORMATION' => 'Xem Toàn bộ', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LIST_JOIN_MEETING' => 'Tham gia Hội họp',
    'LBL_ACCEPT_STATUS' => 'Tình trạng chấp nhận',
    'LBL_ACCEPT_LINK' => 'Chấp nhận liên kết',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Bạn không thể tham gia cuộc họp này bởi vì bạn không phải là một khách mời.',
    'LBL_EXTNOT_RECORD_LINK' => 'Xem cuộc họp',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Bạn không thể bắt đầu cuộc họp này bởi vì bạn không phải là người quản trị hoặc người chủ trì của cuộc họp.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Tạo một khách mời',
    'LBL_CREATE_CONTACT' => 'Như liên hệ',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Như là đầu mối', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Tạo và thêm', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Hủy',
    'LBL_EMPTY_SEARCH_RESULT' => 'Xin lỗi, không tìm thấy kết quả nào. Vui lòng tạo một người được mời bên dưới.',
    'LBL_NO_ACCESS' => 'Bạn không có quyền truy cập để tạo $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Kiểu lặp lại',
    'LBL_REPEAT_INTERVAL' => 'Khoảng thời gian lặp lại',
    'LBL_REPEAT_DOW' => 'Lặp lại Dow',
    'LBL_REPEAT_UNTIL' => 'Lặp lại cho đến khi',
    'LBL_REPEAT_COUNT' => 'Lặp lại đếm',
    'LBL_REPEAT_PARENT_ID' => 'Lặp lại Parent ID',
    'LBL_RECURRING_SOURCE' => 'Nguồn định kỳ',

    'LBL_SYNCED_RECURRING_MSG' => 'Cuộc họp này bắt nguồn từ một hệ thống khác và đã được đồng bộ hóa với MavietCRM. Để thực hiện thay đổi, đi đến cuộc họp ban đầu trong hệ thống khác. Những thay đổi được thực hiện trong hệ thống khác có thể được đồng bộ với hồ sơ này.',
    'LBL_RELATED_TO' => 'Liên quan đến:',

    // for reminders
    'LBL_REMINDERS' => 'Nhắc nhở',
    'LBL_REMINDERS_ACTIONS' => 'Hành động:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email khách mời',
    'LBL_REMINDERS_WHEN' => 'Khi:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Loại bỏ các lời nhắc nhở',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Thêm tất cả Khách mời',
    'LBL_REMINDERS_ADD_REMINDER' => 'Thêm nhắc nhở',

    // for google sync
    'LBL_GSYNC_ID' => 'ID Google Sự kiện', // PR 6146
    'LBL_GSYNC_LASTSYNC' => 'Thời gian Google đồng bộ mới nhất', // PR 6146
);
