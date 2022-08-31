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
    'LBL_EDIT_LAYOUT' => 'Sửa khung',
    'LBL_EDIT_FIELDS' => 'Chỉnh sửa trường tùy chỉnh',
    'LBL_SELECT_FILE' => 'Chọn File',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Hộp công cụ',
    'LBL_SUGAR_FIELDS_STAGE' => 'Các trường SuiteCRM (nhấp vào các mục để thêm vào cấp khu vực)',
    'LBL_VIEW_SUGAR_FIELDS' => 'Xem Các trường SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Bị lỗi để lưu',
    'LBL_CONFIRM_UNSAVE' => 'Mọi thay đổi sẽ không được lưu. Bạn có chắc chắn muốn tiếp tục không?',
    'LBL_PUBLISHING' => 'Đang phát hành...',
    'LBL_PUBLISHED' => 'Công bố',
    'LBL_FAILED_PUBLISHED' => 'Phát hành thất bại',
    'LBL_DROP_HERE' => '[Thả ở đây]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Tên',
    'LBL_LABEL' => 'Nhãn',
    'LBL_MASS_UPDATE' => 'Khối lượng Cập Nhật',
    'LBL_DEFAULT_VALUE' => 'Giá trị mặc định',
    'LBL_REQUIRED' => 'Yêu cầu',
    'LBL_DATA_TYPE' => 'Loại',


    'LBL_HISTORY' => 'Lịch sử',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Chào mừng bạn đến với Studio!</h2><br> Bạn muốn làm gì hôm nay?<br><b>Vui lòng chọn từ các tùy chỉnh bên dưới.</b>',
    'LBL_SW_EDIT_MODULE' => 'Sửa Module',
    'LBL_SW_EDIT_DROPDOWNS' => 'Chỉnh sửa Drop Downs',
    'LBL_SW_EDIT_TABS' => 'Cấu hình Tab',
    'LBL_SW_RENAME_TABS' => 'Sửa tên Tab',
    'LBL_SW_EDIT_GROUPTABS' => 'Cấu hình nhóm Tab',
    'LBL_SW_EDIT_PORTAL' => 'Sửa portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Chỉnh sửa trường tùy chỉnh',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Di chuyển các lĩnh vực tùy chỉnh',

//Manager Backups History
    'LBL_MB_DELETE' => 'Xóa',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Tạo một Drop Down',
    'LBL_DROPDOWN_NAME' => 'Tên Dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'Ngôn ngữ Dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'Ngôn ngữ:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Giá trị hiển thị',
    'LBL_DD_DATABASEVALUE' => 'Giá trị cơ sở dữ liệu',
    'LBL_DD_ALL' => 'Tất cả',

//BUTTONS
    'LBL_BTN_SAVE' => 'Lưu',
    'LBL_BTN_CANCEL' => 'Hủy',
    'LBL_BTN_SAVEPUBLISH' => 'Lưu & Triển khai',
    'LBL_BTN_HISTORY' => 'Lịch sử',
    'LBL_BTN_ADDROWS' => 'Thêm hàng',
    'LBL_BTN_UNDO' => 'Trở lại',
    'LBL_BTN_REDO' => 'Làm lại',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Thêm trường tùy chỉnh',
    'LBL_BTN_TABINDEX' => 'Sửa thứ tự Tab',

//TABS
    'LBL_MODULES' => 'Mô-đun',
    'LBL_MODULE_NAME' => 'Quản trị viên',
    'LBL_CONFIGURE_GROUP_TABS' => 'Cấu hình mô-đun bộ lọc trình đơn',
    'LBL_GROUP_TAB_WELCOME' => 'Bộ lọc bên dưới sẽ được hiển thị trong danh sách Thêm trong menu Module để người dùng xem các nhóm module bên trong menu. Kéo và thả module đến và đi từ bộ lọc. Lưu ý: Các bộ lọc rỗng sẽ không được hiển thị trong menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Nhấp vào Giá trị Hiển thị của bất kỳ tab nào trong bảng bên dưới để đổi tên tab.',
    'LBL_DELETE_MODULE' => 'Gỡ bỏ&nbsp;module<br />từ&nbsp;bộ lọc',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Chọn một ngôn ngữ có sẵn, chỉnh sửa nhãn Nhóm và nhấp vào Lưu và Triển khai để áp dụng nhãn trong ngôn ngữ đã chọn.',
    'LBL_ADD_GROUP' => 'Thêm Bộ lọc',
    'LBL_NEW_GROUP' => 'Nhóm mới',
    'LBL_RENAME_TABS' => 'Đổi tên mô-đun',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Lỗi: Giá trị khóa không hợp lệ: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Lưu' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Trở lại' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Làm lại' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Tức thời' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Xóa' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Thêm các trường' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Tối đa' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Giảm thiểu' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Xuất bản' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Thêm hàng' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Thêm các trường' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Sửa' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Chọn một ngôn ngữ để thêm.',
    'LBL_SINGULAR' => 'Nhãn đơn lẻ',
    'LBL_PLURAL' => 'Nhãn',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Nhấp <b>Lưu</b> để áp dụng các thay đổi.'

);
