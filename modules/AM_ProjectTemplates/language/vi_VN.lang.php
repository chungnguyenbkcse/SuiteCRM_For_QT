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
    'LBL_ASSIGNED_TO_NAME' => 'Quản trị dự án',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_CREATED' => 'Khởi tạo bởi',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'tên mẫu',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_LIST_FORM_TITLE' => 'Danh sách mẫu dự án ',
    'LBL_MODULE_NAME' => 'Dự án mẫu',
    'LBL_MODULE_TITLE' => 'Dự án mẫu',
    'LBL_HOMEPAGE_TITLE' => 'Mẫu dự án của tôi',
    'LNK_NEW_RECORD' => 'Tạo mẫu dự án',
    'LNK_LIST' => 'Xem mẫu dự án',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Nhập các mẫu dự án',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm mẫu dự án',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Mẫu dự án mới',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_PRIORITY' => 'Ưu tiên',
    'LBL_PROJECT_NAME' => 'Tên dự án',
    'LBL_START_DATE' => 'Ngày bắt đầu',
    'LBL_CREATE_PROJECT_TITLE' => 'Tạo một dự án mới từ mẫu này?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Mẫu tác vụ',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Người dùng',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Liên hệ',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Chọn nguồn',
    'LBL_NEW_PROJECT_CREATED' => 'Dự án mới được tạo',
    'LBL_NEW_PROJECT' => 'Tạo dự án',
    'LBL_CANCEL_PROJECT' => 'Hủy',

    'LBL_SUBTASK' => 'Công việc',
    'LBL_MILESTONE_FLAG' => 'Dặm',
    'LBL_RELATIONSHIP_TYPE' => 'Kiểu quan hệ',
    'LBL_LAG' => 'Tụt hậu',
    'LBL_DAYS' => 'Ngày',
    'LBL_HOURS' => 'Giờ',
    'LBL_MONTHS' => 'Tháng',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Dự án những phần việc',
    'LBL_VIEW_GANTT_TITLE' => 'Xem biểu đồ Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Thời lượng',
    'LBL_TASK_TITLE' => 'Sửa tác vụ',
    'LBL_DURATION_TITLE' => 'Sửa khoảng thời gian',
    'LBL_DESCRIPTION' => 'Ghi chú',
    'LBL_ASSIGNED_USER_ID' => 'Giao cho:',

    'LBL_LIST_ASSIGNED_USER' => 'Quản trị dự án',
    'LBL_UNASSIGNED' => 'Không gán',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Nguồn',
    'LBL_DELETE_TASK' => 'Xóa tác vụ',
    'LBL_VIEW_DETAIL' => 'Xem chi tiết',
    'LBL_ADD_NEW_TASK' => 'Tạo tác vụ mới',
    'LBL_ASSIGNED_USER_NAME' => 'Quản trị dự án:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Tên tác vụ',
    'LBL_DURATION' => 'Thời lượng',
    'LBL_ACTUAL_DURATION' => 'Thời lượng thực tế',
    'LBL_START' => 'Bắt đầu',
    'LBL_FINISH' => 'Kết thúc',
    'LBL_PREDECESSORS' => 'Người tiền nhiệm',
    'LBL_PERCENT_COMPLETE' => '% Hoàn thành',
    'LBL_EDIT_TASK_PROPERTIES' => 'Sửa thuộc tính tác vụ.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Xem xét ngày làm việc',
    'LBL_COPY_ALL_TASKS' => 'Sao chép tất cả tác vụ với tài nguyên',
    'LBL_COPY_SEL_TASKS' => 'Sao chép tất cả tác vụ được chọn với tài nguyên',
    'LBL_TOOLTIP_TITLE' => 'Gợi ý',
    'LBL_TOOLTIP_TEXT' => 'Sao chép tất cả tác vụ được giao cho người dùng',

    'LBL_EMAIL' => 'Hộp thư đến',
    'LBL_PHONE' => 'Điện thoại VP:',
    'LBL_ADD_BUTTON' => 'Thêm',
    'LBL_ADD_INVITEE' => 'Thêm nguồn',
    'LBL_FIRST_NAME' => 'Tên',
    'LBL_LAST_NAME' => 'Họ',
    'LBL_SEARCH_BUTTON' => 'Tìm kiếm',
    'LBL_EMPTY_SEARCH_RESULT' => 'Xin lỗi, không tìm thấy kết quả nào. Vui lòng tạo một người được mời bên dưới.',
    'LBL_CREATE_INVITEE' => 'Tạo nguồn tài nguyên',
    'LBL_CREATE_CONTACT' => 'Như liên hệ',
    'LBL_CREATE_AND_ADD' => 'Tạo và thêm',
    'LBL_CANCEL_CREATE_INVITEE' => 'Hủy',
    'LBL_NO_ACCESS' => 'Bạn không có quyền truy cập để tạo $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Danh sách nguồn tài nguyên',
    'LBL_NONE' => 'Không có',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mẫu dự án: Dự án từ tiêu đề dự án',


);
