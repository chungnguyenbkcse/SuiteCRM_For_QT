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

$mod_strings = [
    'LBL_MODULE_NAME' => 'Người dùng OAuth2',
    'LBL_MODULE_TITLE' => 'Người dùng OAuth2',
    'LBL_MODULE_ID' => 'Người dùng OAuth2',
    'LBL_IS_CONFIDENTIAL' => 'Là bí mật',
    'LBL_SECRET' => 'Riêng tư',
    'LBL_SECRET_HASHED' => 'Thay đổi chuỗi bí mật',
    'LBL_LEAVE_BLANK' => 'Để trống trừ khi thay đổi',
    'LBL_REMEMBER_SECRET' => 'Vui lòng ghi lại chuỗi bí mật vì nó sẽ không có sẵn sau khi bạn lưu.',
    'LBL_REDIRECT_URL' => 'Chuyển hướng URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Loại cấp quyền được cho phép',
    'LBL_DURATION_AMOUNT' => 'Thời lượng',
    'LBL_DURATION_UNIT' => 'Đơn vị thời lượng',
    'LBL_USER' => 'Người dùng được liên kết',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Kích hoạt OAuth2 Tokens',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Access token hết hạn',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Refresh token hết hạn',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Danh sách OAuth2 Tokens',
    'LNK_OAUTH2_CLIENT_LIST' => 'Danh sách người dùng OAuth2',

    'LNK_NEW_OAUTH2_CLIENT' => 'Tạo người dùng OAuth2',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Mật khẩu mới của người dùng',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Xác thực người dùng mới',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Người dùng ngầm mới',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Người dùng ủy quyền mới',

];