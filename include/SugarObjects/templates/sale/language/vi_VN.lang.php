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
    'LBL_MODULE_NAME' => 'Bán hàng',
    'LBL_MODULE_TITLE' => 'Bán: Trang chủ',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm doanh số',
    'LBL_LIST_FORM_TITLE' => 'Danh sách bán hàng',
    'LBL_NAME' => 'Tên doanh số',
    'LBL_LIST_SALE_NAME' => 'Tên',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_AMOUNT' => 'Trị giá',
    'LBL_LIST_DATE_CLOSED' => 'Đóng',
    'LBL_LIST_SALE_STAGE' => 'Giai đoạn bán hàng',
    'LBL_ACCOUNT_ID' => 'ID Khách hàng',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Tên Khách hàng:',
    'LBL_AMOUNT' => 'Giá trị:',
    'LBL_AMOUNT_USDOLLAR' => 'Số tiền USD:',
    'LBL_CURRENCY' => 'Tiền tệ:',
    'LBL_DATE_CLOSED' => 'Ngày đóng dự kiến:',
    'LBL_TYPE' => 'Loại:',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
    'LBL_NEXT_STEP' => 'Bước kế tiếp:',
    'LBL_LEAD_SOURCE' => 'Nguồn đầu mối:',
    'LBL_SALES_STAGE' => 'Giai đoạn bán hàng:',
    'LBL_PROBABILITY' => 'Ước lượng (%):',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DUPLICATE' => 'Có thể lặp lại doanh số',
    'MSG_DUPLICATE' => 'Bản ghi tài khoản bạn đang tạo ra có thể là một bản sao của một bản ghi tài khoản đã tồn tại. Hồ sơ tài khoản có tên tương tự được liệt kê dưới đây. <br>Nhấp vào tạo tài khoản để tiếp tục tạo tài khoản mới này, hoặc chọn một tài khoản sẵn có liệt kê dưới đây.',
    'LBL_NEW_FORM_TITLE' => 'Tạo bán hàng',
    'ERR_DELETE_RECORD' => 'Số hồ sơ phải được xác định để xóa bỏ doanh số.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bán hàng',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_ASSIGNED_TO_NAME' => 'Người dùng:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',
    'LBL_ASSIGNED_TO_ID' => 'Chỉ định cho ID',
    'LBL_MODIFIED_NAME' => 'Sửa bởi người dùng',
    'LBL_SALE_INFORMATION' => 'Thông tin bán hàng',
    'LBL_CURRENCY_NAME' => 'Tên loại tiền',
    'LBL_CURRENCY_SYMBOL' => 'Biểu tượng loại tiền',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_REMOVE' => 'Xóa bỏ',

);
