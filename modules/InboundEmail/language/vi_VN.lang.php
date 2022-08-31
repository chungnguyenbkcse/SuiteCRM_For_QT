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


    'LBL_RE' => 'trả lời:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Đăng nhập hoặc Mật khẩu Không đúng',
    'ERR_INI_ZLIB' => 'Không thể tắt tính năng Zlib tạm thời. "Cài đặt Kiểm tra" có thể không thành công.',
    'ERR_NO_IMAP' => 'Không tìm thấy thư viện IMAP. Vui lòng giải quyết vấn đề này trước khi tiếp tục với Email gửi đến',
    'ERR_NO_OPTS_SAVED' => 'Không có tối ưu nào được lưu với tài khoản Email gửi đến của bạn. Vui lòng xem lại các cài đặt',
    'ERR_TEST_MAILBOX' => 'Vui lòng kiểm tra các thiết lập của bạn và thử lại.',

    'LBL_ASSIGN_TO_USER' => 'Gán cho người dùng',
    'LBL_AUTOREPLY' => 'Mẫu trả lời tự động',
    'LBL_AUTOREPLY_HELP' => 'Chọn một phản hồi tự động để thông báo cho người gửi email rằng phản hồi của họ đã nhận được.',
    'LBL_BASIC' => 'Thông tin tài khoản Email',
    'LBL_CASE_MACRO' => 'Trường hợp Marco',
    'LBL_CASE_MACRO_DESC' => 'Cài đặt macro mà marco đó được phân tích cú pháp và sử dụng để liên kết email nhập vào Tình huống.',
    'LBL_CASE_MACRO_DESC2' => 'Cài đặt này là bất kỳ giá trị nào, nhưng giữ <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Đóng cửa sổ',
    'LBL_CREATE_TEMPLATE' => 'Tạo',
    'LBL_DELETE_SEEN' => 'Xóa Email đã đọc sau khi nhập',
    'LBL_EDIT_TEMPLATE' => 'Sửa',
    'LBL_EMAIL_OPTIONS' => 'Tùy chọn Email xử lý',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Tùy chọn xử lý trả về',
    'LBL_FILTER_DOMAIN_DESC' => 'Chỉ định tên miền mà tên miền đó không có trả lời tự động sẽ được gửi.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Chọn để tự động tạo hồ sơ email trong SuiteCRM cho tất cả các email đến.',
    'LBL_FILTER_DOMAIN' => 'Không có trả lời tự động cho tên miền này',
    'LBL_FIND_SSL_WARN' => '<br>Thử nghiệm SSL có thể mất một thời gian dài. Xin hãy kiên nhẫn. <br>',
    'LBL_FROM_ADDR' => '"Từ" địa chỉ',
    'LBL_FROM_ADDR_DESC' => 'Địa chỉ email được cung cấp ở đây có thể không xuất hiện trong phần "Từ" địa chỉ của email được gửi do hạn chế của nhà cung cấp dịch vụ Email. Trong những trường hợp này, địa chỉ email được định nghĩa trong máy chủ Email đi sẽ được sử dụng.',
    'LBL_FROM_NAME' => '"Từ" tên',
    'LBL_GROUP_QUEUE' => 'Gán cho nhóm',
    'LBL_HOME' => 'Trang chủ',
    'LBL_LIST_MAILBOX_TYPE' => 'Tài khoản Email sử dụng',
    'LBL_LIST_NAME' => 'Tên:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Loại',
    'LBL_LIST_SERVER_URL' => 'Máy chủ Email',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LBL_LOGIN' => 'Tên người dùng',
    'LBL_MAILBOX_DEFAULT' => 'HỘP THƯ ĐẾN',
    'LBL_MAILBOX_SSL' => 'Sử dụng SSL',
    'LBL_MAILBOX_TYPE' => 'Hành động có thể',
    'LBL_DISTRIBUTION_METHOD' => 'Phương pháp phân phối',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Trường hợp Mẫu trả lời tự động',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Chọn phản hồi tự động để thông báo cho người gửi email rằng trường hợp đã được tạo. Email có chứa số trường hợp trong dòng Chủ đề tuân thủ cài đặt Trường hợp Macro. Phản hồi này chỉ được gửi khi nhận được email đầu tiên từ người nhận.',
    'LBL_MAILBOX' => 'Thư mục theo dõi',
    'LBL_TRASH_FOLDER' => 'Thư mục rác',
    'LBL_SENT_FOLDER' => 'Thư mục đã gửi',
    'LBL_SELECT' => 'Chọn',
    'LBL_MARK_READ_NO' => 'Email bị đánh dấu đã bị xóa sau khi nhập',
    'LBL_MARK_READ_YES' => 'Email còn lại trên máy chủ sau khi nhập khẩu',
    'LBL_MARK_READ' => 'Xóa thư khỏi máy chủ',
    'LBL_MAX_AUTO_REPLIES' => 'Số lượng phản hồi tự động',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Cài đặt số lượng tối đa các phản hồi tự động để gửi đến địa chỉ email duy nhất trong khoảng thời gian 24 giờ.',
    'LBL_PERSONAL_MODULE_NAME' => 'Tài khoản Email cá nhân',
    'LBL_CREATE_CASE' => 'Tạo các tình huống từ Email',
    'LBL_CREATE_CASE_HELP' => 'Chọn để tự động tạo hồ sơ tình huống trong SuiteCRM từ các email gửi đến.',
    'LBL_MODULE_NAME' => 'Tài khoản Email nhóm',
    'LBL_BOUNCE_MODULE_NAME' => 'Hộp thư xử lý trả lại',
    'LBL_MODULE_TITLE' => 'Hộp thư đến',
    'LBL_NAME' => 'Tên',
    'LBL_NONE' => 'Không có',
    'LBL_ONLY_SINCE_NO' => 'Không. Kiểm tra đối với tất cả các email trên máy chủ Email.',
    'LBL_ONLY_SINCE_YES' => 'Yes.',
    'LBL_PASSWORD' => 'Mật khẩu',
    'LBL_POP3_SUCCESS' => 'Kết nối thử nghiệm POP3 của bạn là thành công.',
    'LBL_POPUP_TITLE' => 'Kiểm tra tùy chỉnh ',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Chọn (các) thư mục đã đăng ký',
    'LBL_SELECT_TRASH_FOLDERS' => 'Chọn thư mục thùng rác',
    'LBL_SELECT_SENT_FOLDERS' => 'Chọn thư mục đã gửi',
    'LBL_DELETED_FOLDERS_LIST' => '(Các) thư mục %s sau không tồn tại hoặc đã bị xoá khỏi máy chủ',
    'LBL_PORT' => 'Cổng máy chủ Email',
    'LBL_REPLY_TO_NAME' => 'Tên "Trả lời"',
    'LBL_REPLY_TO_ADDR' => 'Địa chỉ "Trả lời"',
    'LBL_SAME_AS_ABOVE' => 'Sử dụng từ Tên/Địa chỉ',
    'LBL_SERVER_OPTIONS' => 'Thiết lập nâng cao',
    'LBL_SERVER_TYPE' => 'Giao thức Máy chủ Email',
    'LBL_SERVER_URL' => 'Địa chỉ máy chủ Thư',
    'LBL_SSL_DESC' => 'Nếu máy chủ thư của bạn hỗ trợ các kết nối socket an toàn, cho phép điều này sẽ buộc các kết nối SSL khi nhập email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Team được chọn có quyền truy cập vài tài khoản Email.',
    'LBL_SSL' => 'Sử dụng SSL',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_SYSTEM_DEFAULT' => 'Mặc định hệ thống',
    'LBL_TEST_BUTTON_TITLE' => 'Thử nghiệm',
    'LBL_TEST_SETTINGS' => 'Kiểm tra tùy chỉnh ',
    'LBL_TEST_SUCCESSFUL' => 'Đã kết nối thành công.',
    'LBL_TEST_WAIT_MESSAGE' => 'Xin vui lòng chờ một chút...',
    'LBL_WARN_IMAP_TITLE' => 'Đã tăt Email đến',
    'LBL_WARN_IMAP' => 'Cảnh báo:',
    'LBL_WARN_NO_IMAP' => 'Email Inbound <b>không thể</b> hoạt động mà không có các thư viện IMAP c-client được bật/được biên dịch với module PHP. Vui lòng liên hệ với quản trị viên của bạn để giải quyết vấn đề này.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nhóm Tài khoản Mail mới',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Tài khoản xử lý trả về',
    'LNK_LIST_MAILBOXES' => 'Tất cả các tài khoản Mail',
    'LNK_LIST_SCHEDULER' => 'Lịch trình',
    'LNK_SEED_QUEUES' => 'Seed Queues từ các Team',
    'LBL_GROUPFOLDER_ID' => 'Id thư mục nhóm',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Cho phép người dùng gửi email sử dụng "Từ" tên và địa chỉ như là địa chỉ trả lời',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Khi tùy chọn này được chọn, Từ Tên và Từ Địa chỉ Email liên kết với tài khoản thư nhóm này sẽ xuất hiện dưới dạng tùy chọn cho trường Từ khi soạn email cho người dùng có quyền truy cập vào tài khoản Email nhóm.',
    'LBL_STATUS_ACTIVE' => 'Đang hoạt động',
    'LBL_STATUS_INACTIVE' => 'Không hoạt động',
    'LBL_IS_PERSONAL' => 'Cá nhân',
    'LBL_IS_GROUP' => 'Nhóm',
    'LBL_ENABLE_AUTO_IMPORT' => 'Nhập khẩu các email tự động',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Cảnh báo: Bạn đang sửa đổi cài đặt tự động nhập của bạn mà điều này có thể dẫn đến mất dữ liệu.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Chú ý: Tự động nhập phải được kích hoạt khi tự động tạo trường hợp.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Bản Nháp',
    'LBL_LIST_TITLE_MY_INBOX' => 'Hộp thư đến',
    'LBL_LIST_TITLE_MY_SENT' => 'Email đã gửi',
    'LBL_LIST_TITLE_MY_ARCHIVES' => ' Emails lưu trữ',
    'LNK_MY_DRAFTS' => 'Bản Nháp',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Xem Email',
    'LNK_QUICK_REPLY' => 'Trả lời',
    'LNK_SENT_EMAIL_LIST' => 'Gửi Emails',
    'LBL_EDIT_LAYOUT' => 'Sửa khung' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Được sửa bởi',
    'LBL_SERVICE' => 'Dịch vụ',
    'LBL_STORED_OPTIONS' => 'Tùy chọn lưu trữ',
    'LBL_GROUP_ID' => 'ID nhóm',
    'LBL_REPLY_ASSIGNING_BEHAVIOR' => 'Chỉ định trả lời cho', // PR 6009
    'LBL_REPLY_ASSIGNING_BEHAVIOR_HELP' => 'Khi một email đến thì một email trả lời được gửi từ SuiteCRM, người trả lời sẽ được chỉ định cho: <br><br><b>Không làm gì: </b>Hành vi mặc định. Email không được gán cho bất kỳ ai. <br><br><b>Đã trả lời cho Chủ sở hữu email: </b>Email được gán cho chủ sở hữu của email đã trả lời hoặc email cuối cùng được gửi từ SuiteCRM trong chủ đề. <br><br><b>Chủ sở hữu bản ghi liên kết: </b>Email được gán cho chủ sở hữu bản ghi mà email đã trả lời hoặc email cuối cùng được gửi từ SuiteCRM trong chủ đề, có liên quan đến.', // PR 6009

    'LBL_CREATE_CONTACT' => 'Tạo liên hệ từ email', // PR 5721
    'LBL_CREATE_CONTACT_HELP' => 'Chọn để tự động tạo bản ghi liên hệ trong SuiteCRM từ các email đến.', // PR 5721
    'LBL_CONTACT_DEFAULT_LANGUAGE' => 'Ngôn ngữ liên hệ mặc định', // PR 5721
    'LBL_FILL_CONTACT_NAME' => 'Điền tên liên hệ', // PR 5721 - Escaped required
    'LBL_FILL_CONTACT_NAME_HELP' => 'Chọn để tự động điền tên và họ của liên hệ mới, được tạo từ các email đến.', // PR 5721
    'LBL_CONTACT_DEFAULT_SOURCE' => 'Nguồn liên hệ mới', // PR 5721
    'LBL_NEW_CASE_STATUS' => 'Trạng thái cho vụ việc đã tạo', // PR 5721
    'LBL_NEW_CASE_PRIORITY' => 'Ưu tiên cho vụ việc đã tạo', // PR 5721
    'LBL_NEW_CASE_TYPE' => 'Nhập cho vụ việc đã tạo', // PR 5721
);