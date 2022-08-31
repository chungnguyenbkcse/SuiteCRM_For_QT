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
    'LBL_NAME' => 'Tên công việc',
    'LBL_EXECUTE_TIME' => 'Thời gian thực hiện',
    'LBL_SCHEDULER_ID' => 'Lịch biểu',
    'LBL_STATUS' => 'Tình trạng công việc',
    'LBL_RESOLUTION' => 'Kết quả',
    'LBL_MESSAGE' => 'Thông điệp',
    'LBL_DATA' => 'Dữ liệu việc làm',
    'LBL_REQUEUE' => 'Thử lại khi thất bại',
    'LBL_RETRY_COUNT' => 'Thử lại tối đa',
    'LBL_FAIL_COUNT' => 'Thất bại',
    'LBL_INTERVAL' => 'Khoảng cách giữa các lần thử tối thiểu',
    'LBL_CLIENT' => 'Sở hữu khách hàng',
    'LBL_PERCENT' => 'Phần trăm hoàn thành',
// Errors
    'ERR_CALL' => "Không thể gọi chức năng: %s",
    'ERR_CURL' => "Không CURL - không thể chạy các công việc URL",
    'ERR_FAILED' => "Unexpected failure, please check PHP logs and sugarcrm.log",
    'ERR_PHP' => "%s [%d]: %s trong %s trên đường %d",
    'ERR_NOUSER' => "Không có ID người dùng được chỉ định cho công việc",
    'ERR_NOSUCHUSER' => "ID Người dùng %s không tìm thấy",
    'ERR_JOBTYPE' => "Loại công việc không xác định: %s",
    'ERR_TIMEOUT' => "Đã thất bại vì hết thời hạn",
    'ERR_JOB_FAILED_VERBOSE' => 'Công việc %1$s (%2$s) đã thất bại trong chạy CRON',
);
