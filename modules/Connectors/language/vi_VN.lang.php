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

    'LBL_ADMINISTRATION_MAIN' => 'Cài đặt kết nối',
    'LBL_AVAILABLE' => 'Có sẵn',
    'LBL_BACK' => 'Quay lại',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Một số các trường được yêu cầu đã được để trống. Tiến hành lưu các thay đổi không?',
    'LBL_CONNECTOR_FIELDS' => 'Các trường kết nối',
    'LBL_DATA' => 'Dữ liệu',
    'LBL_DEFAULT' => 'Mặc định',
    'LBL_DISABLED' => 'Vô hiệu hóa',
    'LBL_ENABLED' => 'Kích hoạt',
    'LBL_EXTERNAL' => 'Cho phép người dùng tạo bản ghi tài khoản bên ngoài để kết nối này.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Để sử dụng trình kết nối này, các thuộc tính cũng nên được đặt trong trang Cài đặt thuộc tính Set Connector.',
    'LBL_MERGE' => 'Hợp nhất',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Bật Trình kết nối',
    'LBL_MODIFY_DISPLAY_DESC' => 'Chọn những module được kích hoạt cho mỗi kết nối.',
    'LBL_MODULE_FIELDS' => 'Các trường Module',
    'LBL_MODIFY_MAPPING_TITLE' => 'Bản đồ các trường kết nối',
    'LBL_MODIFY_MAPPING_DESC' => 'Bản đồ các trường kết nối cho các trường mô đun để xác định dữ liệu trình kết nối nào có thể được xem và hợp nhất vào các bản ghi mô-đun.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Thuộc tính cài đặt kết nối',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Cấu hình thuộc tính cho mỗi trình kết nối, bao gồm URLs và API keys.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Quản lý Tìm kiếm trình kết nối',
    'LBL_MODIFY_SEARCH' => 'Tìm kiếm',
    'LBL_MODIFY_SEARCH_DESC' => 'Chọn các trường kết nối để sử dung cho việc tìm kiếm dữ liệu cho mỗi module.',
    'LBL_MODULE_NAME' => 'Kết nối',
    'LBL_NO_PROPERTIES' => 'Không có thuộc tính nào được cấu hình cho trình kết nối này.',
    'LBL_SAVE' => 'Lưu',
    'LBL_SUMMARY' => 'Tóm tắt',
    'LBL_STEP1' => 'Tìm kiếm và xem dữ liệu',
    'LBL_STEP2' => 'Hợp nhất các bản ghi với',
    'LBL_TEST_SOURCE' => 'Kiểm tra kết nối',
    'LBL_TEST_SOURCE_FAILED' => 'Thử nghiệm thất bại',
    'LBL_TEST_SOURCE_SUCCESS' => 'Thử nghiệm thành công',
    'LBL_TITLE' => 'Hợp nhất dữ liệu',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Lỗi: Không có chi tiết bổ sung được tìm thấy cho bản ghi.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Không có module được kích hoạt cho kết nối này. Hãy chọn một module cho kết nối này trong trang kích hoạt trình kết nối.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Lỗi: Không có kết nối nào được kích hoạt để xác định các trường tìm kiếm.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Lỗi: Không có trường tìm kiếm được xác định cho module và trình kết nối. Hãy liên hệ với quản trị hệ thống.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Lỗi: Không có trường module được ánh xạ để hiển thị trong kết quả. Hãy liên hệ với quản trị hệ thống.',
    'LBL_INFO_INLINE' => 'Thông tin' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Đóng' /*for 508 compliance fix*/,

);
