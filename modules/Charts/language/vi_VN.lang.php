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
    'ERR_NO_OPPS' => 'Vui lòng tạo một số cơ hội để xem các đồ thị Cơ hội.',
    'LBL_ALL_OPPORTUNITIES' => 'Tổng số tiền của tất cả các cơ hội là ',
    'LBL_CHART_TYPE' => 'Kiểu biểu đồ:',
    'LBL_CREATED_ON' => 'Chạy lần cuối vào ',
    'LBL_CLOSE_DATE_START' => 'Ngày đóng dự kiến - Từ:',
    'LBL_CLOSE_DATE_END' => 'Ngày đóng dự kiến - Đến:',
    'LBL_DATE_END' => 'Ngày kết thúc:',
    'LBL_DATE_RANGE_TO' => 'a',
    'LBL_DATE_RANGE' => 'Phạm vi ngày',
    'LBL_DATE_START' => 'Bắt đầu ngày:',
    'LBL_EDIT' => 'Sửa',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Hiển thị số lượng cơ hội tích lũy bằng nguồn đầu mối được lựa chọn bởi kết quả cho người dùng chọn. Kết quả dựa trên việc liệu giai đoạn bán hàng kết thúc thắng lợi, kết thúc thất bại hay bất kỳ giá trị nào khác.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Tất cả cơ hội theo nguồn đầu mối theo kết quả',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Hiển thị số lượng cơ hội tích lũy bằng nguồn đầu mối được chọn cho người dùng chọn.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Tất cả cơ hội theo nguồn đầu mối',
    'LBL_LEAD_SOURCE_OTHER' => 'Khác',
    'LBL_LEAD_SOURCES' => 'Nguồn đầu mối:',
    'LBL_MODULE_NAME' => 'Tổng quan',
    'LBL_MODULE_TITLE' => 'Bảng trình chiếu: Trang chủ',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Hiển thị số lượng cơ hội tích lũy theo kết quả theo tháng cho người dùng chọn trong đó ngày đóng dự kiến sẽ nằm trong phạm vi ngày đã chỉ định. Kết quả dựa trên việc liệu giai đoạn bán hàng kết thúc thắng lợi, kết thúc thất bại hay bất kỳ giá trị nào khác.',
    'LBL_OPP_SIZE' => 'Quy mô cơ hội trong',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'cơ hội của nguồn đầu mối ở đâu',
    'LBL_OPPS_IN_STAGE' => ' giai đoạn bán hàng ở đâu',
    'LBL_OPPS_OUTCOME' => ' kết quả ở đâu',
    'LBL_OPPS_WORTH' => 'giá trị cơ hội',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Cho biết số tiền lũy tiến của các giai đoạn bán hàng đã chọn cho các cơ hội của bạn trong đó ngày đóng dự kiến sẽ nằm trong phạm vi ngày đã chỉ định.',
    'LBL_REFRESH' => 'Làm mới',
    'LBL_ROLLOVER_DETAILS' => 'Cuộn theo thanh bar để biết chi tiết.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Cuộn theo mũi tên đẻ biết chi tiết.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Hiển thị số lượng cơ hội tích lũy theo các giai đoạn bán hàng đã chọn cho người dùng chọn trong đó ngày đóng dự kiến sẽ nằm trong phạm vi ngày đã chỉ định.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'hành trình bởi giai đoạn',
    'LBL_SALES_STAGES' => 'Giai đoạn bán hàng:',
    'LBL_TOTAL_PIPELINE' => 'Tổng số Quá trình bán hàng là ',
    'LBL_USERS' => 'Người dùng:',
    'LBL_YEAR_BY_OUTCOME' => 'Quá trình bán hàng theo tháng theo kết quả',
    'LBL_YEAR' => 'Năm:',
    'LNK_NEW_ACCOUNT' => 'Tạo Account',
    'LNK_NEW_CALL' => 'Log Cuộc gọi',
    'LNK_NEW_CASE' => 'Tạo Vụ việc',
    'LNK_NEW_CONTACT' => 'Tạo thông tin Liên hệ',
    'LNK_NEW_LEAD' => 'Tạo Dẫn dắt',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_NOTE' => 'Tạo Ghi chú hoặc Đính kèm',
    'LNK_NEW_OPPORTUNITY' => 'Tạo Opportunity',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'NTC_NO_LEGENDS' => 'Không có',

    'LBL_TITLE' => 'Tiêu đề: ',
    'LBL_MY_MODULES_USED_SIZE' => 'Số lượng truy cập',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Nguồn đâu mối bởi kết quả',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Kết quả theo tháng',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Quá trình bán hàng bởi Nguồn đầu mối',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Quá trình bán hàng của tôi bởi giai đoạn bán hàng',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Module của tôi được sử dụng (30 ngày)',
);
