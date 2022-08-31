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
    'LBL_ASSIGNED_TO_NAME' => 'Giao cho',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày sửa',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Sửa bởi',
    'LBL_CREATED' => 'Được tạo bởi',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tên',
    'LBL_SAVING' => 'Đang lưu...',
    'LBL_SAVED' => 'Đã lưu',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_FORM_TITLE' => 'Danh sách tin',
    'LBL_MODULE_NAME' => 'Bảng tin',
    'LBL_MODULE_TITLE' => 'Bảng tin',
    'LBL_DASHLET_DISABLED' => 'Cảnh báo: Hệ thống Nguồn cấp dữ liệu bị vô hiệu, không có mục nhập nguồn cấp dữ liệu mới để được đăng cho đến khi nó được kích hoạt',
    'LBL_RECORDS_DELETED' => 'Tất cả các mục Nguồn cấp dữ liệu trước đó đã bị xóa, nếu hệ thống Nguồn cấp dữ liệu được bật, mục mới sẽ được tạo tự động.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'bạn có chắc muốn xóa tất cả?',
    'LBL_FLUSH_RECORDS' => 'Xóa nội dung tin',
    'LBL_ENABLE_FEED' => 'Mở bảng tin của tôi',
    'LBL_ENABLE_MODULE_LIST' => 'Kích hoạt nguồn cấp dữ liệu cho',
    'LBL_HOMEPAGE_TITLE' => 'Bảng tin của tôi',
    'LNK_NEW_RECORD' => 'Tạo tin mới',
    'LNK_LIST' => 'Tin',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm tin',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Tin mới',
    'LBL_ALL' => 'tất cả',
    'LBL_USER_FEED' => 'Tin của người dùng',
    'LBL_ENABLE_USER_FEED' => 'Tin người dùng hoạt động',
    'LBL_TO' => 'Hiển thị cho Nhóm',
    'LBL_IS' => 'là',
    'LBL_DONE' => 'Xong',
    'LBL_TITLE' => 'Tiêu đề',
    'LBL_ROWS' => 'hàng',
    'LBL_CATEGORIES' => 'Mô-đun',
    'LBL_TIME_LAST_WEEK' => 'Tuần trước',
    'LBL_TIME_WEEKS' => 'tuần',
    'LBL_TIME_DAY' => 'ngày', // PR 6080
    'LBL_TIME_DAYS' => 'Ngày',
    'LBL_TIME_YESTERDAY' => 'Hôm qua',
    'LBL_TIME_HOURS' => 'Giờ',
    'LBL_TIME_HOUR' => 'Giờ',
    'LBL_TIME_MINUTES' => 'Phút',
    'LBL_TIME_MINUTE' => 'Phút',
    'LBL_TIME_SECONDS' => 'Giây',
    'LBL_TIME_SECOND' => 'Giây',
    'LBL_TIME_AND' => 'và',
    'LBL_TIME_AGO' => 'trước',
// Activity stream
    'CREATED_CONTACT' => 'tạo một <b>NEW</b> {0}',
    'CREATED_OPPORTUNITY' => 'tạo một <b>NEW</b> {0}',
    'CREATED_CASE' => 'tạo một <b>NEW</b> {0}',
    'CREATED_LEAD' => 'tạo một <b>NEW</b> {0}',
    'FOR' => 'cho', // Activity stream for cases
    'FOR_AMOUNT' => 'cho số lượng', // Activity stream for opportunity
    'CLOSED_CASE' => '<b>CLOSED</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'với',

    'LBL_LINK_TYPE_Link' => 'Liên kết',
    'LBL_LINK_TYPE_Image' => 'Ảnh',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Chọn',
    'LBL_POST' => 'Đăng lên',
    'LBL_AUTHENTICATE' => 'kết nối tới',
    'LBL_AUTHENTICATION_PENDING' => 'Không phải tất cả tài khoản bên ngoài mà bạn đã chọn đều được xác thực. Nhấp vào \'Hủy\' để trở lại cửa sổ Tùy chọn để xác thực tài khoản bên ngoài hoặc nhấp vào \'Ok\' để tiếp tục mà không xác thực.',
    'LBL_ADVANCED_SEARCH' => 'Bộ lọc nâng cao' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Xem nhiều tùy chọn hơn',
    'LBL_HIDE_OPTIONS' => 'Ẩn tùy chọn',
    'LBL_VIEW' => 'Xem',
    'LBL_POST_TITLE' => 'Đăng trạng thái của bạn ',
    'LBL_URL_LINK_TITLE' => 'Liên kết URL để sử dụng',
);
