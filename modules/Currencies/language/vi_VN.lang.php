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
    'LBL_MODULE_NAME' => 'Tiền tệ',
    'LBL_LIST_FORM_TITLE' => 'Tiền tệ',
    'LBL_CURRENCY' => 'Tiền tệ',
    'LBL_ADD' => 'Thêm',
    'LBL_MERGE' => 'Hợp nhất',
    'LBL_MERGE_TXT' => 'Vui lòng chọn đơn vị tiền tệ bạn muốn ánh xạ cho các loại tiền tệ đã chọn. Điều này sẽ xóa tất cả các loại tiền tệ với một dấu kiểm và gán giá trị bất kỳ liên kết với họ để lựa chọn đơn vị tiền tệ.',
    'LBL_US_DOLLAR' => 'Đô-la Mỹ',
    'LBL_DELETE' => 'Xóa',
    'LBL_LIST_SYMBOL' => 'Biểu tượng loại tiền',
    'LBL_LIST_NAME' => 'Tên loại tiền',
    'LBL_LIST_ISO4217' => 'Mã ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Nhập mã ISO 4217 của ba ký tự xác định tiền tệ tên và các ký hiệu tiền tệ.',
    'LBL_UPDATE' => 'Cập nhật',
    'LBL_LIST_RATE' => 'Tỷ lệ chuyển đổi',
    'LBL_LIST_RATE_HELP' => 'Một tỷ lệ chuyển đổi 0,5 Euro có nghĩa là USD = 5 10 Euro.',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LNK_NEW_CONTACT' => 'Khách hàng mới',
    'LNK_NEW_ACCOUNT' => 'Khách hàng mới',
    'LNK_NEW_OPPORTUNITY' => 'Cơ hội mới',
    'LNK_NEW_CASE' => 'Vụ việc mới',
    'LNK_NEW_NOTE' => 'Tạo Ghi chú hoặc Đính kèm',
    'LNK_NEW_CALL' => 'Cuộc gọi mới',
    'LNK_NEW_EMAIL' => 'Email mới',
    'LNK_NEW_MEETING' => 'Họp mới',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'NTC_DELETE_CONFIRMATION' => 'Bạn có chắc bạn muốn xóa hồ sơ này? Bất kỳ bản ghi bằng cách sử dụng loại tiền tệ này sẽ được chuyển đổi sang các loại tiền tệ mặc định hệ thống khi chúng được truy cập. Nó có thể tốt hơn để thiết lập tình trạng không hoạt động.',
    'LBL_BELOW_MIN' => 'Tỷ lệ chuyển đổi phải lớn hơn 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Đang hoạt động',
            'Inactive' => 'Không hoạt động',
        ),
    'LBL_CREATED_BY' => 'Khởi tạo bởi',
    'LBL_EDIT_LAYOUT' => 'Sửa khung' /*for 508 compliance fix*/,
);
