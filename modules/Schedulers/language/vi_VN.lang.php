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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Quy trình tác vụ Workflow',
    'LBL_OOTB_REPORTS' => 'Chạy các hoạt động lập lịch trình báo cáo',
    'LBL_OOTB_IE' => 'Kiểm tra hộp thư đến',
    'LBL_OOTB_BOUNCE' => 'Chạy quy trình hàng đêm gửi email chiến dịch',
    'LBL_OOTB_CAMPAIGN' => 'Chạy hàng loạt Email chiến dịch hàng đêm',
    'LBL_OOTB_PRUNE' => 'Lượt bớt cơ sở dữ liệu vào ngày đầu tiên của tháng',
    'LBL_OOTB_TRACKER' => 'Lượt bớt bảng theo dõi',
    'LBL_OOTB_SUGARFEEDS' => 'Lượt bớt các Bảng trường SuiteCRM',
    'LBL_OOTB_LUCENE_INDEX' => 'Thực hiện các chỉ số Lucene',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Tối ưu hóa chỉ số AOD',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Chạy thông báo Email nhắc nhở',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Làm sạch công việc đang đợi',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Loại bỏ các tài liệu từ hệ thống tập tin',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Đồng bộ Lịch Google', // PR 6146

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Khoảng thời gian:',
    'LBL_LIST_LIST_ORDER' => 'Lịch biểu:',
    'LBL_LIST_NAME' => 'Lịch biểu:',
    'LBL_LIST_RANGE' => 'Khoảng:',
    'LBL_LIST_STATUS' => 'Tình trạng:',
    'LBL_LIST_TITLE' => 'Danh sách lịch biểu:',
// human readable:
    'LBL_SUN' => 'Chủ Nhật',
    'LBL_MON' => 'Thứ Hai',
    'LBL_TUE' => 'Thứ Ba',
    'LBL_WED' => 'Thứ Tư',
    'LBL_THU' => 'Thứ Năm',
    'LBL_FRI' => 'Thứ Sáu',
    'LBL_SAT' => 'Thứ Bảy',
    'LBL_ALL' => 'Hàng ngày',
    'LBL_EVERY' => 'Mỗi ',
    'LBL_FROM' => 'Từ ',
    'LBL_ON_THE' => 'Trên các ',
    'LBL_RANGE' => ' để ',
    'LBL_AND' => ' và ',
    'LBL_MINUTES' => ' phút ',
    'LBL_HOUR' => ' giờ',
    'LBL_HOUR_SING' => ' giờ',
    'LBL_OFTEN' => ' Càng thường xuyên càng tốt.',
    'LBL_MIN_MARK' => ' đánh dấu phút',


// crontabs
    'LBL_MINS' => 'phút',
    'LBL_HOURS' => 'giờ',
    'LBL_DAY_OF_MONTH' => 'ngày',
    'LBL_MONTHS' => 'tháng',
    'LBL_DAY_OF_WEEK' => 'ngày',
    'LBL_CRONTAB_EXAMPLES' => 'Ở trên sử dụng ký hiệu chuẩn crontab.',
// Labels
    'LBL_ALWAYS' => 'Luôn luôn',
    'LBL_CATCH_UP' => 'Thực hiện nếu bị mất',
    'LBL_CATCH_UP_WARNING' => 'Bỏ chọn nếu công việc này có thể mất nhiều thời gian để chạy.',
    'LBL_DATE_TIME_END' => 'Ngày & thời gian kết thúc',
    'LBL_DATE_TIME_START' => 'Ngày & thời gian bắt đầu',
    'LBL_INTERVAL' => 'Khoảng thời gian',
    'LBL_JOB' => 'Công việc',
    'LBL_JOB_URL' => 'Việc làm URL',
    'LBL_LAST_RUN' => 'Lần chạy thành công cuối cùng',
    'LBL_MODULE_NAME' => 'Lịch biểu MaVietCRM',
    'LBL_MODULE_TITLE' => 'Lịch trình',
    'LBL_NAME' => 'Tên công việc',
    'LBL_NEVER' => 'Không bao giờ',
    'LBL_NEW_FORM_TITLE' => 'Lịch biểu mới',
    'LBL_PERENNIAL' => 'vĩnh viễn',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm lịch biểu',
    'LBL_SCHEDULER' => 'Lịch biểu:',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_TIME_FROM' => 'Hoạt động từ',
    'LBL_TIME_TO' => 'Hoạt động',
    'LBL_WARN_CURL_TITLE' => 'cURL cảnh báo:',
    'LBL_WARN_CURL' => 'Cảnh báo:',
    'LBL_WARN_NO_CURL' => 'Hệ thống này không có thư viện cURL kích hoạt/biên dịch vào các module PHP (--với-curl=/path/to/curl_library). Xin vui lòng liên hệ với người quản trị để giải quyết vấn đề này. Nếu không có chức năng cURL, lịch biểu không thể luồng công việc của nó.',
    'LBL_BASIC_OPTIONS' => 'Thiết lập cơ bản',
    'LBL_ADV_OPTIONS' => 'Tùy chọn nâng cao',
    'LBL_TOGGLE_ADV' => 'Hiển thị tùy chọn nâng cao',
    'LBL_TOGGLE_BASIC' => 'Hiển thị tùy chọn cơ bản',
// Links
    'LNK_LIST_SCHEDULER' => 'Lịch trình',
    'LNK_NEW_SCHEDULER' => 'Tạo lịch',
// Messages
    'ERR_CRON_SYNTAX' => 'Cú pháp Cron Không hợp lệ',
    'NTC_LIST_ORDER' => 'Cài đặt bộ lịch trình này sẽ xuất hiện trong danh sách Lịch thả xuống',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Để thiết lập lịch Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Để thiết lập Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Để chạy Lich MavietCRM, chỉnh sửa tập tin crontab web server người dùng của bạn với lệnh này: ',
    'LBL_CRON_LINUX_DESC2' => '... và thêm dòng sau vào file crontab: ',
    'LBL_CRON_LINUX_DESC3' => 'Bạn nên làm điều này chỉ sau khi tiến trình cài đặt được ký kết.',
    'LBL_CRON_WINDOWS_DESC' => 'Để chạy Lich MavietCrm, tạo một tập tin thực thi để chạy bằng cách sử dụng tác vụ Lịch Windows. Tập tin thực thi nên bao gồm các lệnh sau đây: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Nhật ký công việc',
    'LBL_EXECUTE_TIME' => 'Thời gian thực hiện',

//jobstrings
    'LBL_REFRESHJOBS' => 'Làm mới công việc',
    'LBL_POLLMONITOREDINBOXES' => 'Kiểm tra Tài khoản thư đến',
    'LBL_PERFORMFULLFTSINDEX' => 'Hệ thống chỉ sô tìm kiếm văn bản đầy đủ',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Chạy hàng loạt Email chiến dịch hàng đêm',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Chạy quy trình hàng đêm gửi email chiến dịch',
    'LBL_PRUNEDATABASE' => 'Lượt bớt cơ sở dữ liệu vào ngày đầu tiên của tháng',
    'LBL_TRIMTRACKER' => 'Lượt bớt bảng theo dõi',
    'LBL_TRIMSUGARFEEDS' => 'Lượt bớt các Bảng trường SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Chạy Email nhắc nhở gửi',
    'LBL_CLEANJOBQUEUE' => 'Dọn dẹp công việc đang đợi',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Loại bỏ các tài liệu từ hệ thống tập tin',

    'LBL_AODOPTIMISEINDEX' => 'Tối ưu hoá nâng cao chỉ số OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'Không lập chỉ số các tài liệu',
    'LBL_POLLMONITOREDINBOXESAOP' => 'Hộp thư đến AOP Poll được theo dõi',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Chạy theo lịch trình báo cáo',
    'LBL_PROCESSAOW_WORKFLOW' => 'Quá trình AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Bộ lập chỉ mục Elastic Search', // PR 6222

    'LBL_SCHEDULER_TIMES' => 'Thời gian biểu',
    'LBL_SYNCGOOGLECALENDAR' => 'Đồng bộ Lịch Google', // PR 6146
);

global $sugar_config;
