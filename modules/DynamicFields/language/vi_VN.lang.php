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
    'LNK_NEW_CALL' => 'Nhạt ký cuộc gọi',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_TASK' => 'Tạo công việc',
    'LNK_NEW_NOTE' => 'tạo ghi chú hoặc đính kèm',
    'LNK_NEW_EMAIL' => 'Soạn Email',
    'LNK_CALL_LIST' => 'Cuộc gọi',
    'LNK_MEETING_LIST' => 'Hội họp',
    'LNK_TASK_LIST' => 'Công việc',
    'LNK_NOTE_LIST' => 'Ghi chú',
    'LBL_ADD_FIELD' => 'Thêm vùng:',
    'LBL_SEARCH_FORM_TITLE' => 'Module tìm kiếm',
    'COLUMN_TITLE_NAME' => 'Tên vùng',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Hiển thị nhãn',
    'COLUMN_TITLE_LABEL_VALUE' => 'Giá trị nhãn',
    'COLUMN_TITLE_LABEL' => 'Nhãn hệ thống',
    'COLUMN_TITLE_DATA_TYPE' => 'Kiểu dữ liệu',
    'COLUMN_TITLE_MAX_SIZE' => 'Kích thước lớn nhất',
    'COLUMN_TITLE_HELP_TEXT' => 'Vùng giúp đỡ',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Vùng bình luận',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Vùng yêu cầu',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Giá trị mặc định',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Chiều cao IFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'URL mặc định',
    'COLUMN_TITLE_AUDIT' => 'Kiểm toán',
    'COLUMN_TITLE_MIN_VALUE' => 'Giá trị nhỏ nhất',
    'COLUMN_TITLE_MAX_VALUE' => 'Giá trị lớn nhất',
    'COLUMN_TITLE_LABEL_ROWS' => 'hàng',
    'COLUMN_TITLE_LABEL_COLS' => 'Cột',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# Mục được hiển thị',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Tự động tăng giá trị tiếp theo',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Vô hiệu hóa dịnh dạng',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Mở vùng tìm kiếm',
    'LBL_DROP_DOWN_LIST' => 'Thả xuống danh sách',
    'LBL_RADIO_FIELDS' => 'Trường vô tuyến',
    'LBL_MULTI_SELECT_LIST' => 'Danh sách chọn nhiều',
    'COLUMN_TITLE_PRECISION' => 'Tính chính xác',
    'LBL_MODULE' => 'Chức năng',
    'COLUMN_TITLE_MASS_UPDATE' => 'Khối lượng Cập Nhật',
    'COLUMN_TITLE_IMPORTABLE' => 'Có thể nhập',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Hợp nhất trùng lặp',
    'LBL_LABEL' => 'Nhãn',
    'LBL_DATA_TYPE' => 'Kiểu dữ liệu',
    'LBL_DEFAULT_VALUE' => 'Giá trị mặc định',
    'ERR_RESERVED_FIELD_NAME' => "Từ khoá Dành riêng",
    'ERR_SELECT_FIELD_TYPE' => 'Vui lòng chọn một loại trường',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Tên trường đã tồn tại',
    'LBL_BTN_ADD' => 'Thêm',
    'LBL_BTN_EDIT' => 'Sửa',
    'LBL_GENERATE_URL' => 'Tạo URL',
    'LBL_CALCULATED' => 'Giá trị đã tính',
    'LBL_LINK_TARGET' => 'Mở Liên Kết',
    'LBL_IMAGE_WIDTH' => 'Chiều rộng',
    'LBL_IMAGE_HEIGHT' => 'Chiều cao',
    'LBL_IMAGE_BORDER' => 'Đường viền',
    'LBL_HELP' => 'Giúp đỡ' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Sửa trực tiếp',
    'COLUMN_TITLE_PARENT_ENUM' => 'Parent thả xuống',
);