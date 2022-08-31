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

    'LBL_SHAREDWEEK' => 'Tuần chia sẻ',
    'LBL_SHAREDMONTH' => 'Tháng chia sẻ',

    'LBL_MODULE_NAME' => 'Lịch',
    'LBL_MODULE_TITLE' => 'Lịch',
    'LNK_NEW_CALL' => 'Log Cuộc gọi',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'LNK_CALL_LIST' => 'Xem Cuộc gọi',
    'LNK_MEETING_LIST' => 'Hội họp',
    'LNK_TASK_LIST' => 'Xem Tác vụ',
    'LNK_TASK' => 'Công việc',
    'LNK_TASK_VIEW' => 'Xem tác vụ',
    'LNK_EVENT' => 'Sự kiện',
    'LNK_EVENT_VIEW' => 'Xem sự kiện',
    'LNK_VIEW_CALENDAR' => 'Xem Lịch',
    'LNK_IMPORT_CALLS' => 'Nhập Cuộc gọi',
    'LNK_IMPORT_MEETINGS' => 'Nhập Hội họp',
    'LNK_IMPORT_TASKS' => 'Nhập Tác vụ',
    'LBL_MONTH' => 'Tháng',
    'LBL_AGENDADAY' => 'Ngày',
    'LBL_YEAR' => 'Năm',

    'LBL_AGENDAWEEK' => 'Tuần',
    'LBL_PREVIOUS_MONTH' => 'Tháng trước',
    'LBL_PREVIOUS_DAY' => 'Ngày trước',
    'LBL_PREVIOUS_YEAR' => 'Năm trước',
    'LBL_PREVIOUS_WEEK' => 'Tuần trước',
    'LBL_NEXT_MONTH' => 'Tháng tới',
    'LBL_NEXT_DAY' => 'Ngày tới',
    'LBL_NEXT_YEAR' => 'Năm tới',
    'LBL_NEXT_WEEK' => 'Tuần tới',
    'LBL_AM' => 'Sáng',
    'LBL_PM' => 'Chiều',
    'LBL_SCHEDULED' => 'Lịch',
    'LBL_BUSY' => 'Bận',
    'LBL_CONFLICT' => 'Mâu thuẫn',
    'LBL_USER_CALENDARS' => 'Lịch Người dùng',
    'LBL_SHARED' => 'Chia sẻ',
    'LBL_PREVIOUS_SHARED' => 'Trước',
    'LBL_NEXT_SHARED' => 'Tới',
    'LBL_SHARED_CAL_TITLE' => 'Chia sẻ Lịch',
    'LBL_USERS' => 'Người dùng',
    'LBL_REFRESH' => 'Làm mới',
    'LBL_EDIT_USERLIST' => 'Danh sách người dùng',
    'LBL_SELECT_USERS' => 'Chọn người dùng để hiển thị lịch',
    'LBL_FILTER_BY_TEAM' => 'Danh sách người dùng lọc bởi đội ngũ:',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_DATE' => 'Ngày & thời gian bắt đầu',
    'LBL_CREATE_MEETING' => 'Lịch họp',
    'LBL_CREATE_CALL' => 'Log Cuộc gọi',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Có',
    'LBL_NO' => 'Không',
    'LBL_SETTINGS' => 'Tùy chỉnh',
    'LBL_CREATE_NEW_RECORD' => 'Tạo hoạt động',
    'LBL_LOADING' => 'Đang tải......',
    'LBL_SAVING' => 'Đang lưu......',
    'LBL_SENDING_INVITES' => 'Đang lưu & gửi giấy mời.....',
    'LBL_CONFIRM_REMOVE' => 'Bạn chắc muốn xoá hoàn toàn bản ghi này?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Bạn có chắc bạn muốn loại bỏ tất cả các bản ghi định kỳ?',
    'LBL_EDIT_RECORD' => 'Chỉnh sửa hoạt động',
    'LBL_ERROR_SAVING' => 'Lỗi trong khi lưu',
    'LBL_ERROR_LOADING' => 'Lỗi trong khi tải',
    'LBL_GOTO_DATE' => 'Đi đến Ngày',
    'NOTICE_DURATION_TIME' => 'Thời lượng không được quá 0',
    'LBL_STYLE_BASIC' => 'Cơ bản', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_STYLE_ADVANCED' => 'Nâng cao', //Can be translated in all caps. This string will be used by SuiteP template menu actions

    'LBL_NO_USER' => 'Không phù hợp với trường: Được ấn định cho',
    'LBL_SUBJECT' => 'Chủ đề',
    'LBL_DURATION' => 'Thời lượng',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_PRIORITY' => 'ưu tiên',

    'LBL_SETTINGS_TITLE' => 'Tùy chỉnh',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Hiển thị khoảng thời gian trong chế độ xem theo ngày và ngày:',
    'LBL_SETTINGS_TIME_STARTS' => 'Thời gian bắt đầu:',
    'LBL_SETTINGS_TIME_ENDS' => 'Thời gian kết thúc:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Hiển thị cuộc gọi:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Hiển thị tác vụ:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Hiển thị hoàn thành Cuộc họp, Cuộc gọi và Tác vụ:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Chia sẻ lịch riêng biệt:',

    'LBL_SAVE_BUTTON' => 'Lưu',
    'LBL_DELETE_BUTTON' => 'Xóa',
    'LBL_APPLY_BUTTON' => 'Áp dụng',
    'LBL_SEND_INVITES' => 'Gửi thư mời',
    'LBL_CANCEL_BUTTON' => 'Hủy',
    'LBL_CLOSE_BUTTON' => 'Đóng',

    'LBL_GENERAL_TAB' => 'Chi tiết',
    'LBL_PARTICIPANTS_TAB' => 'Người được mời',
    'LBL_REPEAT_TAB' => 'Tái phát',

    'LBL_REPEAT_TYPE' => 'Lặp lại',
    'LBL_REPEAT_INTERVAL' => 'Mỗi',
    'LBL_REPEAT_END' => 'Kết thúc',
    'LBL_REPEAT_END_AFTER' => 'Sau',
    'LBL_REPEAT_OCCURRENCES' => 'tái phát',
    'LBL_REPEAT_END_BY' => 'Bởi',
    'LBL_REPEAT_DOW' => 'Trên',
    'LBL_REPEAT_UNTIL' => 'Lặp lại cho đến khi',
    'LBL_REPEAT_COUNT' => 'Số lượng các tái phát',
    'LBL_REPEAT_LIMIT_ERROR' => 'Yêu cầu của bạn sẽ tạo ra nhiều hơn cuộc họp $limit.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Chỉnh sửa tất cả tái phát',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Xóa tất cả tái phát',

    'LBL_DATE_END_ERROR' => 'Ngày kết thúc là trước ngày bắt đầu',
    'ERR_YEAR_BETWEEN' => 'Xin lỗi, lịch không thể xử lý năm bạn yêu cầu <br> Năm phải từ năm 1970 đến năm 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: không định nghĩa cho chế độ xem này',
    'LBL_NO_ITEMS_MOBILE' => 'Lịch của bạn là trống trong tuần.',
    'LBL_GENERAL_SETTINGS' => 'Cài đặt chung',
    'LBL_COLOR_SETTINGS' => 'Cài đặt màu sắc',
    'LBL_MODULE' => 'Chức năng',
    'LBL_BODY' => 'Nội dung',
    'LBL_BORDER' => 'Đường viền',
    'LBL_TEXT' => 'Văn bản',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "C.Nhật",
            '1' => "T.2",
            '2' => "T.3",
            '3' => "T.4",
            '4' => "T.5",
            '5' => "T.6",
            '6' => "T.7",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Chủ Nhật",
            '1' => "Thứ Hai",
            '2' => "Thứ Ba",
            '3' => "Thứ Tư",
            '4' => "Thứ Năm",
            '5' => "Thứ Sáu",
            '6' => "Thứ Bảy",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Th. 1",
            '2' => "Th. 2",
            '3' => "Th. 3",
            '4' => "Th. 4",
            '5' => "Tháng Năm",
            '6' => "Th. 6",
            '7' => "Th. 7",
            '8' => "Th. 8",
            '9' => "Th. 9",
            '10' => "Th. 10",
            '11' => "Th. 11",
            '12' => "Th. 12",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Tháng một",
            '2' => "Tháng Hai",
            '3' => "Tháng Ba",
            '4' => "Tháng Tư",
            '5' => "Tháng Năm",
            '6' => "Tháng Sáu",
            '7' => "Tháng Bảy",
            '8' => "Tháng Tám",
            '9' => "Tháng Chín",
            '10' => "Tháng Mười",
            '11' => "Tháng Mười Một",
            '12' => "Tháng Mười Hai",
        ),
);