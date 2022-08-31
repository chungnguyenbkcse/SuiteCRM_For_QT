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
    'LBL_MODULE_NAME' => 'Cơ hội',
    'LBL_MODULE_TITLE' => 'Cơ hội: Tr.chính',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Cơ hội',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Cơ hội',
    'LBL_OPPORTUNITY_NAME' => 'Tên Cơ hội:',
    'LBL_OPPORTUNITY' => 'Cơ hội:',
    'LBL_NAME' => 'Tên Cơ hội',
    'LBL_INVITEE' => 'Liên hệ',
    'LBL_CURRENCIES' => 'Tiền tệ',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Tên',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_AMOUNT' => 'Trị giá Cơ hội',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Trị giá',
    'LBL_LIST_DATE_CLOSED' => 'Đóng',
    'LBL_LIST_SALES_STAGE' => 'Giai đoạn bán hàng',
    'LBL_ACCOUNT_ID' => 'ID Khách hàng',
    'LBL_CURRENCY_NAME' => 'Tên loại tiền',
    'LBL_CURRENCY_SYMBOL' => 'Biểu tượng loại tiền',

    'UPDATE' => 'Cơ hội - Tiền tệ Cập nhật',
    'LBL_ACCOUNT_NAME' => 'Tên tài khoản:',
    'LBL_AMOUNT' => 'Giá trị Cơ hội:',
    'LBL_AMOUNT_USDOLLAR' => 'Giá trị:',
    'LBL_CURRENCY' => 'Tiền tệ:',
    'LBL_DATE_CLOSED' => 'Ngày đóng dự kiến:',
    'LBL_TYPE' => 'Loại:',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_NEXT_STEP' => 'Bước kế tiếp:',
    'LBL_LEAD_SOURCE' => 'Nguồn Đầu mối:',
    'LBL_SALES_STAGE' => 'Giai đoạn bán hàng:',
    'LBL_PROBABILITY' => 'Ước lượng (%):',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_DUPLICATE' => 'Có khả năng trùng lặp Cơ hội',
    'MSG_DUPLICATE' => 'Bản ghi cơ hội bạn sắp tạo có thể là bản sao của bản ghi cơ hội đã tồn tại. Bản ghi cơ hội có chứa các tên tương tự được liệt kê dưới đây.<br>Nhấp vào Lưu để tiếp tục tạo cơ hội mới này hoặc nhấp Hủy để trở lại mô đun mà không tạo cơ hội.',
    'LBL_NEW_FORM_TITLE' => 'Tạo Cơ hội',
    'LNK_NEW_OPPORTUNITY' => 'Tạo Cơ hội',
    'LNK_OPPORTUNITY_LIST' => 'Xem Cơ hội',
    'ERR_DELETE_RECORD' => 'Một số bản ghi phải được xác định để xóa cơ hội.',
    'LBL_TOP_OPPORTUNITIES' => 'Top Cơ hội đang mở',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Bạn muốn bỏ cơ hội này khỏi dự án?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Hoạt động',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Tài liệu',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
    'LBL_ASSIGNED_TO_NAME' => 'Giao cho:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Cơ hội đã đóng',
    'LBL_TOTAL_OPPORTUNITIES' => 'Tổng cộng Cơ hội',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Cơ hội chiến thắng đã đóng',
    'LBL_ASSIGNED_TO_ID' => 'Đã chỉ định cho người dùng:',
    'LBL_MODIFIED_NAME' => 'Sửa bởi người dùng',
    'LBL_CREATED_USER' => 'Người tạo',
    'LBL_MODIFIED_USER' => 'Người sửa',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Chiến dịch',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Dự án',
    'LNK_IMPORT_OPPORTUNITIES' => 'Nhập Cơ hội',
    'LBL_EDITLAYOUT' => 'Sửa khung' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Hợp đồng',
    'LBL_AOS_QUOTES' => 'Báo giá',
);
