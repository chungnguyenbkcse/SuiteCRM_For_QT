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
    'LBL_MODULE_NAME' => 'Dự án',
    'LBL_MODULE_TITLE' => 'Dự án: Trang chủ',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm dự án',
    'LBL_LIST_FORM_TITLE' => 'Danh sách dự án',
    'LBL_HISTORY_TITLE' => 'Lịch sử',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Ngày tạo:',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa:',
    'LBL_ASSIGNED_USER_ID' => 'Giao cho:',
    'LBL_ASSIGNED_USER_NAME' => 'Quản trị dự án:',
    'LBL_MODIFIED_USER_ID' => 'Sửa đổi Id người dùng:',
    'LBL_CREATED_BY' => 'Tạo bởi:',
    'LBL_NAME' => 'Tên:',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DELETED' => 'đã xóa:',
    'LBL_DATE' => 'Ngày:',
    'LBL_DATE_START' => 'Ngày bắt đầu:',
    'LBL_DATE_END' => 'Ngày kết thúc:',
    'LBL_PRIORITY' => 'Ưu tiên:',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Tổng ước tính nỗ lực (giờ)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Tổng sự nỗ lực trên thực tế (giờ)',
    'LBL_LIST_END_DATE' => 'Ngày kết thúc',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Dự án',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Dự án những phần việc',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Không có',
    'LBL_ALL_PROJECTS' => 'Tất cả các dự án',
    'LBL_ALL_USERS' => 'Tất cả người dùng',
    'LBL_ALL_CONTACTS' => 'Tất cả danh bạ',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Dự án mới',
    'LNK_NEW_PROJECT' => 'Khởi tạo một dự án',
    'LNK_PROJECT_LIST' => 'Xem danh mục dự án',
    'LNK_NEW_PROJECT_TASK' => 'Tạo công việc dự án',
    'LNK_PROJECT_TASK_LIST' => 'Xem dự án nhiệm vụ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Dự án',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_CASES_SUBPANEL_TITLE' => 'Vụ việc',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Lỗi',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Tên tác vụ',
    'LBL_DURATION' => 'Thời lượng',
    'LBL_ACTUAL_DURATION' => 'Thời lượng thực tế',
    'LBL_START' => 'bắt đầu',
    'LBL_FINISH' => 'Kết thúc',
    'LBL_PREDECESSORS' => 'Người tiền nhiệm',
    'LBL_PERCENT_COMPLETE' => '% Hoàn thành',
    'LBL_MORE' => 'Nhiều hơn...',
    'LBL_OPPORTUNITIES' => 'Cơ hội',
    'LBL_NEXT_WEEK' => 'Tiếp theo',
    'LBL_PROJECT_INFORMATION' => 'Tổng quan dự án',
    'LBL_EDITLAYOUT' => 'Sửa khung' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Dự án những phần việc',
    'LBL_VIEW_GANTT_TITLE' => 'Xem biểu đồ Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Thời lượng',
    'LBL_TASK_TITLE' => 'Chỉnh sửa tác vụ',
    'LBL_DURATION_TITLE' => 'Chỉnh sửa thời gian thực hiện',
    'LBL_LAG' => 'Tụt hậu',
    'LBL_DAYS' => 'Ngày',
    'LBL_HOURS' => 'Giờ',
    'LBL_MONTHS' => 'Tháng',
    'LBL_SUBTASK' => 'Công việc',
    'LBL_MILESTONE_FLAG' => 'Sự kiện quan trọng',
    'LBL_ADD_NEW_TASK' => 'Thêm tác vụ mới',
    'LBL_DELETE_TASK' => 'Xóa bỏ tác vụ',
    'LBL_EDIT_TASK_PROPERTIES' => 'Chỉnh sửa thuộc tính của tác vụ.',
    'LBL_PARENT_TASK_ID' => 'Tác vụ cha',
    'LBL_RESOURCE_CHART' => 'Quản lý lịch',
    'LBL_RELATIONSHIP_TYPE' => 'Kiểu quan hệ',
    'LBL_ASSIGNED_TO' => 'Quản trị dự án',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Dự án mẫu',
    'LBL_STATUS' => 'Tình trạng:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Quản trị dự án',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Dự án',
    'LBL_TOOLTIP_TASK_NAME' => 'Tên tác vụ',
    'LBL_TOOLTIP_TITLE' => 'Công việc ngày hôm nay',
    'LBL_TOOLTIP_TASK_DURATION' => 'Thời lượng',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Nguồn tài nguyên là một người dùng',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Nguồn tài nguyên là một liên hệ',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Tháng trước',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Tháng tới',
    'LBL_RESOURCE_CHART_WEEK' => 'Tuần',
    'LBL_RESOURCE_CHART_DAY' => 'Ngày',
    'LBL_RESOURCE_CHART_WARNING' => 'Không có nguồn tài nguyên đã được gán cho một dự án.',
    'LBL_PROJECT_DELETE_MSG' => 'Bạn có chắc bạn muốn xóa bỏ dự án này và tác vụ có liên quan của nó?',
    'LBL_LIST_MY_PROJECT' => 'Dự án của tôi',
    'LBL_LIST_ASSIGNED_USER' => 'Quản trị dự án',
    'LBL_UNASSIGNED' => 'Không gán',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Nguồn',

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
    'LBL_REMOVE' => 'Xóa bỏ', // PR 5451
    'LBL_VIEW_DETAIL' => 'Xem chi tiết',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Xem xét ngày làm việc',

    'LBL_PROJECTS_SEARCH' => 'Tìm dự án',
    'LBL_USERS_SEARCH' => 'Tìm kiếm người dùng',
    'LBL_CONTACTS_SEARCH' => 'Chọn số Liên hệ',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Tìm kiếm',

    'LBL_CHART_TYPE' => 'Loại',
    'LBL_CHART_WEEKLY' => 'Hàng tuần',
    'LBL_CHART_MONTHLY' => 'Hàng tháng',
    'LBL_CHART_QUARTERLY' => 'Hàng quý',

    'LBL_RESOURCE_CHART_MONTH' => 'Tháng',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quý',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Dự án liên hệ từ tiêu đề dự án',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mẫu dự án: Dự án từ tiêu đề dự án',
    'LBL_AOS_QUOTES_PROJECT' => 'Báo giá: Dự án',

);
