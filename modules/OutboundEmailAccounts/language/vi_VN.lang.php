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
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_CREATED' => 'Được tạo bởi',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tên',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Tài khoản email gửi đi',
    'LBL_MODULE_NAME' => 'Tài khoản email gửi đi',
    'LBL_MODULE_TITLE' => 'Tài khoản email gửi đi',
    'LBL_HOMEPAGE_TITLE' => 'Tài khoản email gửi đi của tôi',
    'LNK_NEW_RECORD' => 'Tạo Tài khoản email gửi đi',
    'LNK_LIST' => 'Xem các tài khoản email gửi đi',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Tài khoản email gửi đi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Các hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Tài khoản email gửi đi mới',
    'LBL_USERNAME' => 'Tên người dùng',
    'LBL_PASSWORD' => 'Mật khẩu',
    'LBL_SMTP_SERVERNAME' => 'Tên máy chủ SMTP',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'Cổng SMTP',
    'LBL_SMTP_PROTOCOL' => 'Giao thức SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Cài đặt tài khoản',
    'LBL_CHANGE_PASSWORD' => 'Đổi mật khẩu',
    'LBL_SEND_TEST_EMAIL' => 'Gửi Email kiểm tra',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Quản trị viên chưa cấu hình mặc định tài khoản thư đi. Không thể gửi email thử nghiệm.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Sử dụng xác thực SMTP không?',
    'LBL_MAIL_SMTPPASS' => 'Mật khẩu SMTP:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'Tên người dùng SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Thông số máy chủ SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Chọn nhà cung cấp Email của bạn:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Mật khẩu Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Mật khẩu Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Địa chỉ Email Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Thay đổi mật khẩu:',
    'LBL_EXCHANGE_SMTPUSER' => 'Thay đổi tên đăng nhập:',
    'LBL_EXCHANGE_SMTPPORT' => 'Thay đổi port server:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Thay đổi server:',

    'LBL_TYPE' => 'Loại',
    'LBL_MAIL_SENDTYPE' => 'Kiểu gửi Mail',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"Từ" tên',
    'LBL_SMTP_FROM_ADDR' => '"Từ" địa chỉ',
);
