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
    'LBL_MODULE_NAME' => 'Lỗi',
    'LBL_MODULE_TITLE' => 'Theo dõi Lỗi: Tr.chính',
    'LBL_MODULE_ID' => 'Lỗi',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Lỗi',
    'LBL_NEW_FORM_TITLE' => 'Lỗi mới',
    'LBL_SUBJECT' => 'Chủ đề:',
    'LBL_NUMBER' => 'Số:',
    'LBL_STATUS' => 'Tình trạng:',
    'LBL_PRIORITY' => 'Ưu tiên:',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_CONTACT_NAME' => 'Tên liên lạc:',
    'LBL_CONTACT_ROLE' => 'Vai trò:',
    'LBL_LIST_NUMBER' => 'Số.',
    'LBL_LIST_SUBJECT' => 'Chủ đề',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LBL_LIST_PRIORITY' => 'Ưu tiên',
    'LBL_LIST_RESOLUTION' => 'Giải pháp',
    'LBL_LIST_LAST_MODIFIED' => 'Lần sửa cuối',
    'LBL_INVITEE' => 'Liên hệ',
    'LBL_TYPE' => 'Loại:',
    'LBL_LIST_TYPE' => 'Loại',
    'LBL_RESOLUTION' => 'Giải pháp:',
    'LBL_RELEASE' => 'Phát hành:',
    'LNK_NEW_BUG' => 'Báo cáo Lỗi',
    'LNK_BUG_LIST' => 'Xem Lỗi',
    'ERR_DELETE_RECORD' => 'Bạn phải xác định một bản ghi trong danh sách để xóa các lỗi.',
    'LBL_LIST_MY_BUGS' => 'Lỗi được chỉ định',
    'LNK_IMPORT_BUGS' => 'Nhập Lỗi',
    'LBL_FOUND_IN_RELEASE' => 'Tìm thấy:',
    'LBL_FIXED_IN_RELEASE' => 'Sửa chữa:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Sửa chữa',
    'LBL_WORK_LOG' => 'Lịch sử làm việc:',
    'LBL_SOURCE' => 'Nguồn:',
    'LBL_PRODUCT_CATEGORY' => 'Chủng loại:',

    'LBL_CREATED_BY' => 'Tạo bởi:',
    'LBL_MODIFIED_BY' => 'Sửa lần cuối bởi:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Địa chỉ Email',
    'LBL_LIST_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_PHONE' => 'Điện thoại',
    'NTC_DELETE_CONFIRMATION' => 'Bạn có chắc bạn muốn loại bỏ liên hệ này khỏi lỗi này không?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Quản lý Lỗi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_CASES_SUBPANEL_TITLE' => 'Vụ việc',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Tài liệu',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',

    'LBL_BUG_INFORMATION' => 'Xem toàn bộ', //Can be translated in all caps. This string will be used by SuiteP template menu actions

);