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
    'LBL_ALL_MODULES' => 'Tất cả',//rost fix
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
    'LBL_NONINHERITABLE' => 'Không có thể thừa kế',
    'LBL_LIST_NONINHERITABLE' => 'Không có thể thừa kế',
    'LBL_NAME' => 'Tên',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_FORM_TITLE' => 'Nhóm bảo mật',
    'LBL_MODULE_NAME' => 'Quản lý nhóm bảo mật',
    'LBL_MODULE_TITLE' => 'Quản lý nhóm bảo mật',
    'LNK_NEW_RECORD' => 'Tạo một nhóm bảo mật',
    'LNK_LIST' => 'Chế độ xem danh sách',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm trên quản lý nhóm',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Quản lý nhóm bảo mật',
    'LBL_USERS' => 'Người dùng',
    'LBL_USERS_SUBPANEL_TITLE' => 'Người dùng',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Vai trò ',
    'LBL_ROLES' => 'Vai trò ',

    'LBL_CONFIGURE_SETTINGS' => 'Cấu hình',
    'LBL_ADDITIVE' => 'Quyền bổ sung',
    'LBL_ADDITIVE_DESC' => "Người dùng được quyền lớn nhất của tất cả các vai trò được giao cho người dùng hoặc (các) nhóm của người dùng",
    'LBL_STRICT_RIGHTS' => 'Quyền nghiêm ngặt',
    'LBL_STRICT_RIGHTS_DESC' => "Nếu người dùng là một thành viên của một số nhóm thì chỉ được sử dụng các quyền tương ứng từ nhóm được gán cho bản ghi hiện tại.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Người dùng vai trò ưu tiên',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Nếu bất kỳ vai trò nào được gán trực tiếp cho người dùng, vai trò đó phải được ưu tiên hơn bất kỳ vai trò nhóm nào.',
    'LBL_INHERIT_TITLE' => 'Quy tắc Nhóm kế thừa',
    'LBL_INHERIT_CREATOR' => 'Kế thừa tạo bởi người dùng',
    'LBL_INHERIT_CREATOR_DESC' => 'Hồ sơ sẽ kế thừa tất cả các nhóm được giao cho người dùng tạo ra nó.',
    'LBL_INHERIT_PARENT' => 'Kế thừa từ hồ sơ cha',
    'LBL_INHERIT_PARENT_DESC' => 'ví dụ. Nếu một trường hợp được tạo ra cho một liên hệ, trường hợp sẽ kế thừa các nhóm liên kết với số liên hệ.',
    'LBL_USER_POPUP' => 'Popup nhóm người dùng mới',
    'LBL_USER_POPUP_DESC' => 'Khi tạo một người dùng mới hiển thị popup Nhóm bảo mật để gán cho người dùng đến một nhóm.',
    'LBL_INHERIT_ASSIGNED' => 'Kế thừa từ gán cho người dùng',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Hồ sơ sẽ thừa kế tất cả các nhóm của người dùng được chỉ định cho các hồ sơ. Các nhóm khác được chỉ định cho hồ sơ sẽ KHÔNG được xóa.',
    'LBL_POPUP_SELECT' => 'Sử dụng chọn nhóm người tạo',
    'LBL_POPUP_SELECT_DESC' => 'Khi một bản ghi được tạo bởi một người dùng trong nhiều nhóm hiển thị một bảng lựa chọn nhóm trên màn hình tạo. Nếu không thừa hưởng một nhóm đó.',
    'LBL_FILTER_USER_LIST' => 'Lọc danh sách người dùng',
    'LBL_FILTER_USER_LIST_DESC' => "Người dùng không phải là quản trị viên chỉ có thể gán cho người dùng trong cùng một nhóm",

    'LBL_DEFAULT_GROUP_TITLE' => 'Nhóm mặc định cho các hồ sơ mới',
    'LBL_ADD_BUTTON_LABEL' => 'Thêm',
    'LBL_REMOVE_BUTTON_LABEL' => 'Xóa bỏ',
    'LBL_GROUP' => 'Nhóm:',
    'LBL_MODULE' => 'Module:',

    'LBL_MASS_ASSIGN' => 'Nhóm bảo mật: Gán hàng loạt',
    'LBL_ASSIGN' => 'Giao',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_ASSIGN_CONFIRM' => 'Bạn có chắc chắn muốn thêm nhóm này vào ',
    'LBL_REMOVE_CONFIRM' => 'Bạn có chắc chắn muốn loại bỏ nhóm này khỏi ',
    'LBL_CONFIRM_END' => ' chọn bản ghi(s)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Bảo mật Nhóm/Người dùng',
    'LBL_USER_NAME' => 'Tên người dùng',
    'LBL_SECURITYGROUP_NAME' => 'Tên Nhóm bảo mật',
    'LBL_HOMEPAGE_TITLE' => 'Nhóm thông điệp',
    'LBL_TITLE' => 'Tiêu đề',
    'LBL_ROWS' => 'hàng',
    'LBL_POST' => 'Đăng lên',
    'LBL_SELECT_GROUP_ERROR' => 'Vui lòng chọn một nhóm và cố gắng một lần nữa.',

    'LBL_GROUP_SELECT' => 'Chọn Nhóm mà nhóm đó cần phải có quyền truy cập vào hồ sơ này',
    'LBL_ERROR_DUPLICATE' => 'Do trùng lặp có thể được phát hiện bởi SuiteCRM, bạn sẽ phải tự thêm các nhóm bảo mật để hồ sơ của bạn mới được tạo ra.',

    'LBL_INBOUND_EMAIL' => 'Tài khoản email đến',
    'LBL_INBOUND_EMAIL_DESC' => 'Chỉ cho phép truy cập vào một tài khoản email nếu người dùng thuộc về một nhóm được gán cho tài khoản mail.',
    'LBL_PRIMARY_GROUP' => 'Nhóm chính',
    'LBL_CHECKMARK' => 'Đánh dấu',
);
