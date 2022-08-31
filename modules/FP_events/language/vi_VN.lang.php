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
    'LBL_NAME' => 'Tên',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_LIST_FORM_TITLE' => 'Danh sách sự kiện',
    'LBL_MODULE_NAME' => 'Sự kiện',
    'LBL_MODULE_TITLE' => 'Sự kiện',
    'LBL_HOMEPAGE_TITLE' => 'Sự kiện của tôi',
    'LNK_NEW_RECORD' => 'Tạo sự kiện',
    'LNK_LIST' => 'Xem sự kiện',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm sự kiện',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Sự kiện mới',
    'LBL_LOCATION' => 'Địa điểm',
    'LBL_START_DATE' => 'ngày bắt đầu',
    'LBL_END_DATE' => 'Ngày/thời gian kết thúc',
    'LBL_BUDGET' => 'Ngân sách',
    'LBL_DATE' => 'Ngày bắt đầu',
    'LBL_DATE_END' => 'Ngày kết thúc',
    'LBL_DURATION' => 'Thời lượng',
    'LBL_INVITE_TEMPLATES' => 'Mẫu Email mời',
    'LBL_INVITE_PDF' => 'Gửi lời mời',
    'LBL_EDITVIEW_PANEL1' => 'Chi tiết sự kiện',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Đại biểu',
    'LBL_ACCEPT_REDIRECT' => 'Chấp nhận các URL chuyển hướng',
    'LBL_DECLINE_REDIRECT' => 'Từ chối URL chuyển hướng',
    'LBL_SELECT_DELEGATES' => 'Chọn người đại diện',
    'LBL_SELECT_DELEGATES_TITLE' => 'Chọn người đại diện:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Danh sách đối tượng',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Mục tiêu',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Liên hệ',
    'LBL_SELECT_DELEGATES_LEADS' => 'Đầu mối',
    'LBL_MANAGE_DELEGATES' => 'Quản lý các đại biểu',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Quản lý các đại biểu:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Quản lý chấp nhận',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Quản lý chấp nhận',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Được chấp nhận',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Đã từ chối',
    'LBL_MANAGE_POPUP_ERROR' => 'Không có người đại diện được lựa chọn.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Mời',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Không được mời',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Tham dự',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Không tham dự',
    'LBL_SUCCESS_MSG' => 'Tất cả lời mời đã được gửi thành công.',
    'LBL_ERROR_MSG_1' => 'Tất cả liên hệ liên kết đã được Mời.',
    'LBL_ERROR_MSG_2' => 'Gửi email mời đã thất bại! Hãy kiểm tra cài đặt email của bạn.',
    'LBL_ERROR_MSG_3' => 'Hơn 10 email đã bị lỗi khi được gửi đi. Hãy kiểm tra tất cả các liên hệ bạn mời có địa chỉ email hợp lệ. (Xem suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' các email đã bị lỗi khi được gửi đi. Hãy kiểm tra tất cả các liên hệ bạn mời có địa chỉ email hợp lệ. (Xem suitecrm.log)', //LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Mẫu Email không hợp lệ',
    'LBL_EMAIL_INVITE' => 'Email mời',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Liên hệ',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Vị trí',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Đầu mối',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Đối tượng',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Đại biểu',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Tên',
    'LBL_ACCOUNT_NAME' => 'Công ty',
    'LBL_SIGNATURE' => 'Chữ ký',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Mời',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Tình trạng',

    'LBL_ACTIVITY_STATUS' => 'Tình trạng hoạt động',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Địa điểm Sự kiện từ tiêu đề sự kiện',
    // Email links
    'LBL_ACCEPT_LINK' => 'Chấp nhận',
    'LBL_DECLINE_LINK' => 'Từ chối',

);
