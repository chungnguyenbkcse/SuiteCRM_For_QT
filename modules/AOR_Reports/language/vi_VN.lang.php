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
    'LBL_NAME' => 'tên',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'tên',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_LIST_FORM_TITLE' => 'Danh sách báo cáo',
    'LBL_MODULE_NAME' => 'Báo cáo',
    'LBL_MODULE_TITLE' => 'Báo cáo',
    'LBL_HOMEPAGE_TITLE' => 'Các báo cáo của tôi',
    'LNK_NEW_RECORD' => 'Tạo báo cáo',
    'LNK_LIST' => 'Báo cáo',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm báo cáo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Báo cáo mới',
    'LBL_REPORT_MODULE' => 'Module báo cáo',
    'LBL_GRAPHS_PER_ROW' => 'Biểu đồ theo dòng',
    'LBL_FIELD_LINES' => 'Các trường hiển thị',
    'LBL_ADD_FIELD' => 'Thêm các trường',
    'LBL_CONDITION_LINES' => 'Điều kiện',
    'LBL_ADD_CONDITION' => 'Thêm điều kiện',
    'LBL_EXPORT' => 'Xuất ra',
    'LBL_DOWNLOAD_PDF' => 'Tải PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Thêm vào mục tiêu',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Cây module',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Các trường',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Điều kiện',
    'LBL_TOTAL' => 'Tổng cộng',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Biểu đồ',
    'LBL_ADD_CHART' => 'Thêm biểu đồ',
    'LBL_ADD_PARENTHESIS' => 'Chèn dấu ngoặc đơn',// PR 5471 to be removed after merged
    'LBL_INSERT_PARENTHESIS' => 'Chèn dấu ngoặc đơn', // PR 5471
    'LBL_CHART_TITLE' => 'Tiêu đề',
    'LBL_CHART_TYPE' => 'Loại',
    'LBL_CHART_X_FIELD' => 'Trục X',
    'LBL_CHART_Y_FIELD' => 'Trục Y',
    'LBL_AOR_REPORTS_DASHLET' => 'Báo cáo',
    'LBL_DASHLET_TITLE' => 'Tiêu đề',
    'LBL_DASHLET_REPORT' => 'Báo cáo',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Vui lòng chọn một báo cáo',
    'LBL_DASHLET_SAVE' => 'Lưu',
    'LBL_DASHLET_CHARTS' => 'Biểu đồ',
    'LBL_DASHLET_ONLY_CHARTS' => 'Chỉ hiển thị biểu đồ',
    'LBL_UPDATE_PARAMETERS' => 'Cập nhật',
    'LBL_PARAMETERS' => 'Tham số',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Kéo và thả các phần tử vào các trường hoặc vùng điều kiện',
    'LBL_MAIN_GROUPS' => 'Nhóm chính:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Biểu đồ không tên',
    'LBL_REPORT' => 'Báo cáo',
);
