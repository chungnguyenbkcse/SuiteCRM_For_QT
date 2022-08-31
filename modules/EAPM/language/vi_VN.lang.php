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
    'LBL_ASSIGNED_TO_NAME' => 'Trường Vô tuyến',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_CREATED' => 'Khởi tạo bởi',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tên người dùng ứng dụng',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa đổi bởi người dùng',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_FORM_TITLE' => 'Danh sách tài khoản bên ngoài',
    'LBL_MODULE_NAME' => 'Tài khoản ngoài',
    'LBL_MODULE_TITLE' => 'Các tài khoản ngoài',
    'LBL_HOMEPAGE_TITLE' => 'Các tài khoản ngoài của tôi',
    'LNK_NEW_RECORD' => 'Tạo tài khoản bên ngoài',
    'LNK_LIST' => 'Xem các tài khoản ngoài',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm nguồn bên ngoài',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Tài khoản bên ngoài mới',
    'LBL_PASSWORD' => 'Mật khẩu ứng dụng',
    'LBL_USER_NAME' => 'Tên người dùng ứng dụng',
    'LBL_URL' => 'Đường dẫn URL',
    'LBL_APPLICATION' => 'Ứng dụng',
    'LBL_API_DATA' => 'Dữ liệu API',
    'LBL_API_CONSKEY' => 'Consumer Key',
    'LBL_API_CONSSECRET' => 'Consumer Secret',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Phương pháp ủy quyền này không được hỗ trợ bởi ứng dụng",
    'LBL_AUTH_ERROR' => 'Cố gắng kết nối với tài khoản này thất bại.',
    'LBL_VALIDATED' => 'Đã kết nối',
    'LBL_ACTIVE' => 'Đang hoạt động',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Kết nối',
    'LBL_NOTE' => 'Xin vui lòng lưu ý',
    'LBL_CONNECTED' => 'Đã kết nối',

    'LBL_ERR_NO_AUTHINFO' => 'Không có thông tin xác thực cho tài khoản này.',
    'LBL_ERR_NO_TOKEN' => 'Không có token đăng nhập hợp lệ cho tài khoản này.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Bạn hiện không kết nối với tài khoản {0} của bạn. Nhấp OK để đăng nhập vào tài khoản của bạn và để tái kích hoạt lại kết nối.',

    'LBL_CLICK_TO_EDIT' => 'Nhấp vào chỉnh sửa',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Xác thực lại',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Tài khoản cho ứng dụng này đã tồn tại. Chúng tôi đã phục hồi tài khoản hiện tại.',
    'LBL_OMIT_URL' => '(Bỏ qua http:// hoặc https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Nhấp vào <b>Kết nối</b> để được chuyển hướng đến một trang cung cấp thông tin tài khoản của bạn và cho phép truy cập vào tài khoản của Maviet Crm. Sau khi kết nối, bạn sẽ được hướng về Maviet Crm.',
    'LBL_BASIC_SAVE_NOTICE' => 'Bấm vào <b>Kết nối</b> để kết nối tài khoản này với MavietCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Xin vui lòng cho phép cửa sổ bật lên của trình duyệt hoặc thêm một ngoại lệ cho trang web "{0}" vào danh sách ngoại lệ để kết nối.',

    'LBL_API_OAUTHSECRET' => 'API OAuth riêng tư',
);
