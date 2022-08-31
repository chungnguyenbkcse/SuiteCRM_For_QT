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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Không thể xác định Nhóm',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Không thể xác định chủ sở hữu',
    'ERR_UW_CONFIG_WRITE' => 'Lỗi Cập Nhật config.php với thông tin Phiên bản mới.',
    'ERR_UW_CONFIG' => 'Vui lòng làm cho tệp config.php của bạn có thể ghi và tải lại trang này.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Thư mục không ghi được',
    'ERR_UW_FILE_NOT_COPIED' => 'Tệp không được sao chép',
    'ERR_UW_FILE_NOT_DELETED' => 'Sự cố khi gỡ bỏ gói ',
    'ERR_UW_FILE_NOT_READABLE' => 'Không thể đọc được tệp.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Không thể di chuyển hoặc viết đề lên tệp',
    'ERR_UW_FLAVOR_2' => 'Nâng cấp Flavor: ',
    'ERR_UW_FLAVOR' => 'Hệ thống SuiteCRM Flavor: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log không thể được tạo / ghi vào. Vui lòng sửa quyền trên thư mục SuiteCRM của bạn.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload được đặt thành giá trị cao hơn 1. Vui lòng thay đổi điều này trong php.ini của bạn và khởi động lại máy chủ web.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Vui lòng chỉ định tệp và thử lại!',
    'ERR_UW_NO_FILES' => 'Đã xảy ra lỗi, không tìm thấy tệp để kiểm tra.',
    'ERR_UW_NO_MANIFEST' => 'Tệp zip thiếu một tập tin manifest.php. Không thể tiếp tục.',
    'ERR_UW_NO_VIEW' => 'Xem không hợp lệ được chỉ định.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Tải lên không hợp lệ.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Không thể tạo thư mục temp. Kiểm tra quyền truy cập tập tin.',
    'ERR_UW_ONLY_PATCHES' => 'Bạn chỉ có thể tải lên các bản vá lỗi trên Trang này.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Lỗi được tìm thấy trong quá trình kiểm tra trước',
    'ERR_UW_UPLOAD_ERR' => 'Đã có lỗi trong khi tải lên các tập tin, xin vui lòng thử lại!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Phiên bản hệ thống SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'Phiên bản PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Phiên bản hệ thống SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Trang này không phải để chạy ',
    'LBL_BUTTON_BACK' => 'Quay lại',
    'LBL_BUTTON_CANCEL' => 'Hủy',
    'LBL_BUTTON_DELETE' => 'Xóa gói',
    'LBL_BUTTON_DONE' => 'Xong',
    'LBL_BUTTON_EXIT' => 'Thoát',
    'LBL_BUTTON_NEXT' => 'Tiếp theo >',
    'LBL_BUTTON_RECHECK' => 'Kiểm tra lại',
    'LBL_BUTTON_RESTART' => 'Khởi động lại',

    'LBL_UPLOAD_UPGRADE' => 'Tải lên Gói Nâng cấp ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'File Backup',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Các tệp bạckup từ bản nâng cấp này có thể được tìm thấy trong',
    'LBL_UW_BACKUP' => 'File BACKUP',
    'LBL_UW_CANCEL_DESC' => 'Nâng cấp đã bị hủy. Bất kỳ tệp tin tạm nào đã được sao chép và bất kỳ tệp nâng cấp nào đã được tải lên đều đã bị xóa.',
    'LBL_UW_CHECK_ALL' => 'Chọn tất cả',
    'LBL_UW_CHECKLIST' => 'Các bước nâng cấp',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Các sao lưu của các tệp bị ghi đè nằm trong thư mục sau: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Hợp nhất các tệp sau đây theo cách thủ công: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Quá trình nâng cấp: Hợp nhất các tập tin bằng thủ công',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Vui lòng sử dụng phương pháp khác phù hợp nhất với bạn để hợp nhất các tệp này. Cho đến khi hoàn thành, cài đặt SuiteCRM của bạn sẽ ở trong trạng thái không chắc chắn, và việc nâng cấp không đầy đủ.',
    'LBL_UW_COMPLETE' => 'Hoàn tất',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Tất cả Yêu cầu về Cài đặt Hệ thống đều hài lòng',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Cài đặt PHP: Thời gian gọi vượt quá theo tham chiếu',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Module',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Module',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Module Chuỗi MB',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Thiết lập PHP: Giới hạn bộ nhớ',
    'LBL_UW_COMPLIANCE_STREAM' => 'Cài đặt PHP: Luồng',
    'LBL_UW_COMPLIANCE_DB' => 'Phiên bản Cơ sở dữ liệu tối thiểu',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Vị trí của php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Phiên bản PHP tối thiểu',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Cài đặt PHP: Chế độ An toàn',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Xác định cài đặt',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Hỗ trợ Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Phiên bản PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Sao chép File thành công',

    'LBL_UW_DB_CHOICE1' => 'Nâng cấp Wizard chạy SQL',
    'LBL_UW_DB_CHOICE2' => 'Truy vấn SQL thủ công',
    'LBL_UW_DB_ISSUES_PERMS' => 'Cơ sở dữ liệu ưu tiên',
    'LBL_UW_DB_METHOD' => 'Phương pháp cập nhật cơ sở dữ liệu',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Tất cả Ưu đãi',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Đặc quyền cần thiết',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Các gói nâng cấp sau đây đã được cài đặt:',
    'LBL_UW_END_LOGOUT_PRE' => 'Việc nâng cấp hoàn tất.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Nhấp vào Xong để thoát khỏi Thuật sỹ Nâng cấp.',
    'LBL_UW_END_LOGOUT' => 'Nếu bạn dự định áp dụng một gói nâng cấp khác bằng cách sử dụng Thuật sỹ Nâng cấp, hãy đăng xuất và đăng nhập lại trước khi làm như vậy.',

    'LBL_UW_FILE_DELETED' => ' đã bị xóa. <br>',
    'LBL_UW_FILE_GROUP' => 'Nhóm',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Quyền của tệp',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Tất cả các tệp có thể ghi được</b>',
    'LBL_UW_FILE_OWNER' => 'Người tạo',
    'LBL_UW_FILE_PERMS' => 'Quyền',
    'LBL_UW_FILE_UPLOADED' => ' đã được tải lên',
    'LBL_UW_FILE' => 'Tên tập tin',
    'LBL_UW_FILES_QUEUED' => 'Các gói nâng cấp sau đây đã sẵn sàng để cài đặt:',
    'LBL_UW_FILES_REMOVED' => 'Các tệp sau sẽ bị xóa khỏi hệ thống: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Nhấp Tiếp theo để tải lên các gói nâng cấp.</b>',
    'LBL_UW_FROZEN' => 'Tải lên một gói trước khi tiếp tục.',
    'LBL_UW_HIDE_DETAILS' => 'Ẩn chi tiết',
    'LBL_UW_IN_PROGRESS' => 'Đang tiến hành',
    'LBL_UW_INCLUDING' => 'Bao gồm',
    'LBL_UW_INCOMPLETE' => 'Chưa hoàn thiện',
    'LBL_UW_MANUAL_MERGE' => 'File hợp nhất',
    'LBL_UW_MODULE_READY' => 'Module đã sẵn sàng để được cài đặt. Nhấp vào "Cam kết" để tiếp tục cài đặt.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Không có Nâng cấp được ghi lại nào được phát hiện.',
    'LBL_UW_NONE' => 'Không có',
    'LBL_UW_OVERWRITE_DESC' => 'Tất cả các tệp đã thay đổi sẽ bị ghi đè, bao gồm bất kỳ tuỳ chỉnh mã nào và các thay đổi mẫu mà bạn đã thực hiện. Bạn có chắc muốn tiếp tục?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Tạo mục tác vụ cho Hợp nhất thủ công?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Gửi email tự nhắc nhở cho hợp nhất bằng tay?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Các tệp được liệt kê dưới đây đã được sửa đổi. Bỏ chọn mục yêu cầu phải hợp nhất thủ công.<i>Bất kỳ thay đổi bố cục nào được phát hiện sẽ tự động được bỏ chọn; đánh dấu bất kỳ cần được ghi đè lên.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Không có file hợp nhất thủ công nào được yêu cầu.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Không cần thiết.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Các tệp tự động lưu trữ:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Tất cả các bài kiểm tra trước đã được thông qua.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Nhấp vào Tiếp theo để sao chép các tệp được nâng cấp vào hệ thống.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Lưu ý: </b> Quá trình nâng cấp còn lại là bắt buộc và nhấn Next sẽ yêu cầu bạn hoàn thành quá trình. Nếu bạn không muốn tiếp tục, hãy nhấp vào nút Hủy.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Chuyển đổi tất cả các File',

    'LBL_UW_REBUILD_TITLE' => 'Xây dựng lại kết quả',
    'LBL_UW_SCHEMA_CHANGE' => 'Lưu Thay đổi',

    'LBL_UW_SHOW_COMPLIANCE' => 'Hiển thị thiết lập được phát hiện',
    'LBL_UW_SHOW_DB_PERMS' => 'Hiển thị mất quyền truy cập cơ sở dữ liệu',
    'LBL_UW_SHOW_DETAILS' => 'Hiện các Chi tiết',
    'LBL_UW_SHOW_DIFFS' => 'Hiển thị các tệp yêu cầu Hợp nhất thủ công',
    'LBL_UW_SHOW_NW_FILES' => 'Hiển thị tệp với quyền không hợp lệ',
    'LBL_UW_SHOW_SCHEMA' => 'Hiển thị sơ đồ thay đổi kịch bản',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Hiển thị các Truy vấn Lỗi',
    'LBL_UW_SHOW' => 'Hiển thị',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Các File được bỏ qua',
    'LBL_UW_SQL_RUN' => 'Kiểm tra khi SQL đã được chạy theo cách thủ công',
    'LBL_UW_START_DESC' => 'Trình hướng dẫn này sẽ hỗ trợ bạn trong việc nâng cấp phiên bản của SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Lưu ý: Chúng tôi đặc biệt khuyên bạn nên tạo một bản sao của phiên bản SuiteCRM bạn sử dụng trong sản xuất và kiểm tra gói nâng cấp trước khi triển khai phiên bản mới. Nếu bạn đã thay đổi tệp "composer.json", thì vui lòng, sau khi quá trình nâng cấp hoàn tất, hãy chạy lệnh này: <br/><br/><pre>composer update</pre>', // Keep the <pre>composer update</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Nhấp vào Tiếp theo để thực hiện kiểm tra trên hệ thống của bạn để đảm bảo rằng hệ thống đã sẵn sàng cho việc nâng cấp. Kiểm tra bao gồm quyền truy cập tập tin, đặc quyền cơ sở dữ liệu và cài đặt máy chủ.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Thuật sỹ Nâng cấp mới sẽ tiếp tục quá trình nâng cấp. Hãy tiếp tục nâng cấp của bạn.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Chào mừng bạn đến với Thuật sỹ Nâng cấp mới',

    'LBL_UW_TITLE_CANCEL' => 'Hủy',
    'LBL_UW_TITLE_COMMIT' => 'Cam kết Nâng cấp',
    'LBL_UW_TITLE_END' => 'Tóm tắt',
    'LBL_UW_TITLE_PREFLIGHT' => 'Kiểm tra trước',
    'LBL_UW_TITLE_START' => 'Chào mừng',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Kiểm tra hệ thống',
    'LBL_UW_TITLE_UPLOAD' => 'Tải lên gói',
    'LBL_UW_TITLE' => 'Trình nâng cấp',
    'LBL_UW_UNINSTALL' => 'Gỡ bỏ cài đặt',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Chấp nhận giấy phép',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Chuyển đổi Giấy phép',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Bắt đầu xử lý',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Đang kiểm tra hệ thống',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Đang kiểm tra giấy phép',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Kiểm tra trước khi tiến hành',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Đang sao chép tệp',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Cam kết Nâng cấp đang xử lý',
    'LBL_UW_COMMIT_DESC' => 'Nhấp vào Tiếp theo để chạy các kịch bản nâng cấp bổ sung.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Nâng cấp các tập lệnh đang được tiến hành',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Nâng cấp sơ lược đang đang Tiến hành',
    'LBL_UPGRADE_IN_PROGRESS' => 'đang xử lý     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Thời gian đã trôi qua',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Hủy nâng cấp và đang tiến hành dọn dẹp',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Nâng cấp có thể mất một thời gian',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Đang kiểm tra tải lên',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Đang tải lên gói nâng cấp ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Thuật sĩ Nâng cấp Thả lược đồ cũ 451',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Hướng dẫn nâng cấp sử dụng thả Schema',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Phương pháp thả lược đồ cũ',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Hiển thị lược đồ cũ có thể được thả xuống',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Các truy vấn đã bỏ qua',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php phiên bản 5 trở lên là bắt buộc.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Phiên bản PHP của bạn không được hỗ trợ bởi SuiteCRM. Bạn sẽ cần phải cài đặt một phiên bản tương thích với các ứng dụng SuiteCRM. Xin vui lòng tham khảo các ma trận khả năng tương thích trong các ghi chú phát hành để hỗ trợ PHP phiên bản. Phiên bản của bạn là ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Chế độ tương thích ngược Php được bật. Thiết lập zend.ze1_compatibility_mode tắt để tiến xa hơn',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Hành động',
    'LBL_ML_CANCEL' => 'Hủy',
    'LBL_ML_COMMIT' => 'Cam kết',
    'LBL_ML_DESCRIPTION' => 'Mô tả',
    'LBL_ML_INSTALLED' => 'Ngày cài đặt',
    'LBL_ML_NAME' => 'Tên',
    'LBL_ML_PUBLISHED' => 'Ngày xuất bản',
    'LBL_ML_TYPE' => 'Loại',
    'LBL_ML_UNINSTALLABLE' => 'Gỡ cài đặt không thành công',
    'LBL_ML_VERSION' => 'Phiên bản',
    'LBL_ML_INSTALL' => 'Cài đặt',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Phiên bản php hiện tại của bạn là: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Phiên bản php được đề nghị là ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' hoặc ở trên.', // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'UpgradeWizard',
    'LBL_UPLOAD_SUCCESS' => 'Đã tải lên thành công gói nâng cấp. Nhấp vào Tiếp theo để thực hiện kiểm tra cuối cùng.',
    'LBL_UW_TITLE_LAYOUTS' => 'Xác nhận bố cục',
    'LBL_LAYOUT_MODULE_TITLE' => 'Các giao diện',
    'LBL_LAYOUT_MERGE_DESC' => 'Có các trường mới có sẵn đã được thêm vào như là một phần của nâng cấp này và có thể được tự động nối vào bố cục module hiện có của bạn. Để tìm hiểu thêm về các lĩnh vực mới, vui lòng tham khảo Ghi chú Phát hành cho phiên bản mà bạn đang nâng cấp.<br><br> Nếu bạn không muốn nối thêm các trường mới, vui lòng bỏ chọn module, và bố cục tùy chỉnh của bạn sẽ vẫn không thay đổi. Các trường sẽ có trong Studio sau khi nâng cấp.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Nhấp vào Tiếp theo để xác nhận thay đổi và để hoàn tất việc nâng cấp.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Nhấp vào Tiếp theo để hoàn tất việc nâng cấp.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Xác nhận bố cục',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Kết quả xác nhận bố cục',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Các bố cục sau đây đã được hợp nhất thành công:',
    'LBL_SELECT_FILE' => 'Chọn File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Các tập tin được tải lên là không tương thích với phiên bản này của SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Các tập tin được tải lên là không tương thích với phiên bản này của PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Các tập tin được tải lên là không tương thích với phiên bản này của SuiteCRM: ',
    'LBL_LANGPACKS' => 'Gói ngôn ngữ' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Bộ nạp mô-đun' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Nâng cấp bản vá lỗi' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Chủ đề' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Quy trình công việc' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Nâng cấp' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Đang xử lý' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Phiên bản tương thích không được đặt trong tệp kê khai',
    'LBL_UPGRD_CSTM_CHK' => 'Quá trình nâng cấp sẽ cập nhật một số tập tin nhưng các tập tin này cũng đã tồn tại trong thư mục/tuỳ chỉnh. Vui lòng xem lại các thay đổi trước khi tiếp tục:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Các tập tin đã tải lên vượt quá chỉ thị upload_max_filesize trong php.ini.',
        2 => 'Các tập tin đã tải lên vượt quá chỉ thị MAX_FILE_SIZE đã được chỉ định trong các hình thức HTML.',
        3 => 'Tập tin tải lên được một phần.',
        4 => 'Không có tập tin được tải lên.',
        5 => 'Lỗi không xác định.',
        6 => 'Thiếu một thư mục tạm thời.',
        7 => 'Ghi tệp vào đĩa không thành công.',
        8 => 'Việc tải tập tin lên bị dừng do phần mở rộng.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Chú ý: việc hết hạn mật khẩu đang thiết lập là none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Vui lòng cập nhật cài đặt của bạn ở đây',
);
