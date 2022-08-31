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
    'LBL_EMAIL_INFORMATION' => 'Email',
    'LBL_FW' => 'Chuyển tiếp:',
    'LBL_RE' => 'trả lời:',

    'LBL_BUTTON_CREATE' => 'Tạo',
    'LBL_BUTTON_EDIT' => 'Sửa',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Sửa thư nháp',
    'LBL_QS_DISABLED' => '(Tìm kiếm nhanh không khả dụng cho module này. Vui lòng sử dụng nút chọn.)',
    'LBL_SIGNATURE_PREPEND' => 'Chữ ký dưới trả lời',
    'LBL_IMPORT' => 'Nhập',
    'LBL_LOADING' => 'Đang tải',
    'LBL_MARKING' => 'Phân loại',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Bạn có chắc chắn muốn xoá email này?',
    'LBL_ENTER_FOLDER_NAME' => 'Điền tên thư mục',

    'LBL_ERROR_SELECT_MODULE' => 'Xin chọn 1 module liên quan đến',

    'ERR_ARCHIVE_EMAIL' => 'Lõi : chọn email để soạn.',
    'ERR_DELETE_RECORD' => 'Lỗi:. Bạn phải chỉ định một bản ghi để xóa tài khoản.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_ADD_DASHLETS' => 'Thêm SuiteCRM Dashlets',
    'LBL_ADD_DOCUMENT' => 'Thêm tài liệu',
    'LBL_ADD_ENTRIES' => 'Thêm bài viết',
    'LBL_ADD_FILE' => 'Thêm file',
    'LBL_ATTACHMENTS' => 'Đính kèm:',
    'LBL_ATTACH_FILES' => 'Tệp đính kèm',
    'LBL_ATTACH_DOCUMENTS' => 'Tài liệu đính kèm',
    'LBL_HAS_ATTACHMENT' => 'Có đính kèm?:',
    'LBL_BCC' => 'Bcc:',
    'LBL_BODY' => 'Phàn thân:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Lỗi',
    'LBL_CC' => 'Cc:',
    'LBL_COMPOSE_MODULE_NAME' => 'Soạn email',
    'LBL_CONTACT_NAME' => 'Liên hệ:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_CREATED_BY' => 'Được tạo bởi',
    'LBL_DATE_SENT_RECEIVED' => 'Ngày gửi/nhận:', // PR 6728
    'LBL_DATE' => 'Ngày gửi:',
    'LBL_DELETE_FROM_SERVER' => 'Xóa tin nhắn từ server',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_EDIT_ALT_TEXT' => 'Sửa nội dung',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Gửi phàn nội dung',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Gửi Email tham gia',
    'LBL_EMAIL_ATTACHMENT' => 'Email đính kèm',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Chọn',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Xóa',
    'LBL_EMAIL' => 'Địa chỉ Email :',
    'LBL_EMAILS_ACCOUNTS_REL' => 'Emails:Tài khoản',
    'LBL_EMAILS_BUGS_REL' => 'Email: Lỗi',
    'LBL_EMAILS_CASES_REL' => 'Emails:Kịch bản',
    'LBL_EMAILS_CONTACTS_REL' => 'Emails:Liên hệ',
    'LBL_EMAILS_LEADS_REL' => 'Emails:Khách hàng tiềm năng',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'Emails:Cơ hội',
    'LBL_EMAILS_NOTES_REL' => 'Emails:Ghi chú',
    'LBL_EMAILS_PROJECT_REL' => 'Emails:Dự án',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'Emails:Công việc dự án',
    'LBL_EMAILS_PROSPECT_REL' => 'Emails:Triển vọng',
    'LBL_EMAILS_CONTRACTS_REL' => 'Emails:Hợp đồng',
    'LBL_EMAILS_TASKS_REL' => 'Emails:Công việc',
    'LBL_EMAILS_USERS_REL' => 'Emails:người dùng',
    'LBL_EMPTY_FOLDER' => 'Không có email hiển thị',
    'LBL_SELECT_FOLDER' => 'Chọn thư mục',
    'LBL_ERROR_SENDING_EMAIL' => 'Lỗi gửi mail',
    'LBL_ERROR_SAVING_DRAFT' => 'Lỗi lưu dự thảo',
    'LBL_FROM_NAME' => 'Từ tên',
    'LBL_FROM' => 'từ:',
    'LBL_REPLY_TO' => 'Trả lời đến:',
    'LBL_HTML_BODY' => 'Nội dung',
    'LBL_INVITEE' => 'Người nhận',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Đầu mối',
    'LBL_MESSAGE_SENT' => 'Tin nhắn gửi',
    'LBL_MODIFIED_BY' => 'Được sửa bởi',
    'LBL_MODULE_NAME' => 'tất cả Emails',
    'LBL_MODULE_TITLE' => 'Emails: ',
    'LBL_MY_EMAILS' => 'Emails',
    'LBL_NEW_FORM_TITLE' => 'Email lưu trữ',
    'LBL_NONE' => 'Không có',
    'LBL_NOT_SENT' => 'Gửi lỗi',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Đính kèm',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Dự án',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Dự án những phần việc',
    'LBL_RAW' => 'Email nháp',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Lưu dự thảo',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Xóa bỏ bản nháp',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Email ',
    'LBL_SEND_ANYWAYS' => 'Email này không có chủ đề.  Send/save anyway?',
    'LBL_SEND_BUTTON_LABEL' => 'Gửi',
    'LBL_SEND_BUTTON_TITLE' => 'Gửi',
    'LBL_SEND' => 'GỬI',
    'LBL_SENT_MODULE_NAME' => 'Gửi Emails',
    'LBL_SHOW_ALT_TEXT' => 'Xem phần thân',
    'LBL_SIGNATURE' => 'Chữ ký',
    'LBL_SUBJECT' => 'Chủ đề:',
    'LBL_TEXT_BODY' => 'Phần thân',
    'LBL_TIME' => 'Giờ gửi:',
    'LBL_TO_ADDRS' => 'Đến',
    'LBL_USERS_SUBPANEL_TITLE' => 'Người dùng',
    'LBL_USERS' => 'Người dùng',

    'LNK_CALL_LIST' => 'Cuộc gọi',
    'LBL_EMAIL_RELATE' => 'Liên quan đến',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Xem mẫu',
    'LNK_MEETING_LIST' => 'Hội họp',
    'LNK_NEW_CALL' => 'Nhật ký cuộc gọi',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Tạo email mẫu',
    'LNK_NEW_EMAIL' => 'Gửi Email',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_NOTE' => 'Tạo ghi chú hoặc đính kèm',
    'LNK_NEW_SEND_EMAIL' => 'Soạn',
    'LNK_NEW_TASK' => 'tạo công việc',
    'LNK_NOTE_LIST' => 'Ghi chú',
    'LNK_SENT_EMAIL_LIST' => 'Gửi Emails',
    'LNK_TASK_LIST' => 'Công việc',
    'LNK_VIEW_CALENDAR' => 'Hôm nay',

    'LBL_LIST_ASSIGNED' => 'Đã giao',
    'LBL_LIST_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_LIST_DATE_SENT' => 'Ngày gửi',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'Ngày gửi/nhận', // PR 6728
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Dự thảo',
    'LBL_LIST_FORM_SENT_TITLE' => 'Gửi Emails',
    'LBL_LIST_FORM_TITLE' => 'Danh sách Email ',
    'LBL_LIST_FROM_ADDR' => 'Từ',
    'LBL_LIST_RELATED_TO' => 'Kiểu người nhận',
    'LBL_LIST_SUBJECT' => 'Chủ đề',
    'LBL_LIST_TO_ADDR' => 'Đến',
    'LBL_LIST_TYPE' => 'Kiểu',

    'WARNING_SETTINGS_NOT_CONF' => 'Chưa cấu hình hệ thống mail.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Xem đã hủy',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ẩn đã hủy',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Kiểm tra Mail',
    'LBL_BUTTON_CHECK_TITLE' => 'Kiểm tra Email mới',
    'LBL_BUTTON_FORWARD' => 'Chuyển tiếp',
    'LBL_BUTTON_REPLY_TITLE' => 'Trả lời',
    'LBL_BUTTON_REPLY_ALL' => 'Trả lời tất cả',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kịch bản',
    'LBL_INBOUND_TITLE' => 'Hộp thư Email',
    'LBL_INTENT' => 'Mục đích',
    'LBL_MESSAGE_ID' => 'ID thông báo',
    'LBL_REPLY_HEADER_1' => 'mở ',
    'LBL_REPLY_HEADER_2' => 'viết:',
    'LBL_REPLY_TO_ADDRESS' => 'trả lời đến địa chỉ',
    'LBL_REPLY_TO_NAME' => 'trả lời đến tên',

    'LBL_LIST_BUG' => 'Lỗi',
    'LBL_LIST_CASE' => 'Kịch bản',
    'LBL_LIST_CONTACT' => 'Liên hệ',
    'LBL_LIST_LEAD' => 'Đầu mối',
    'LBL_LIST_TASK' => 'Công việc',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',

    // for Inbox
    'LBL_ALL' => 'tất cả',
    'LBL_ASSIGN_WARN' => 'Đảm bảo 2 tùy chọn được chọn.',
    'LBL_BACK_TO_GROUP' => 'Quay trở lại hộp thư nhóm',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Giao',
    'LBL_BUTTON_DISTRIBUTE' => 'Giao',
    'LBL_BUTTON_GRAB_TITLE' => 'Lấy từ nhóm',
    'LBL_BUTTON_GRAB' => 'Lấy từ nhóm',
    'LBL_CREATE_BUG' => 'Tạo Bug',
    'LBL_CREATE_CASE' => 'Tạo Kịch bản',
    'LBL_CREATE_CONTACT' => 'Tạo Liên hệ',
    'LBL_CREATE_LEAD' => 'Tạo Khách hàng tiềm năng',
    'LBL_CREATE_TASK' => 'Tạo Công việc',
    'LBL_DIST_TITLE' => 'Giao việc',
    'LBL_LOCK_FAIL_DESC' => 'Vật được chọn không có.',
    'LBL_LOCK_FAIL_USER' => ' đã có quyền sở hữu.',
    'LBL_MASS_DELETE_ERROR' => 'Không có vật nào đã chọn có thể xóa.',
    'LBL_NEW' => 'Mới',
    'LBL_NEXT_EMAIL' => 'Vật mới',
    'LBL_REPLIED' => 'Đã trả lời',
    'LBL_TO' => 'Đến: ',
    'LBL_TOGGLE_ALL' => 'Chuyển đổi tất cả',
    'LBL_UNKNOWN' => 'Không rõ',
    'LBL_USE' => 'Giao:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Giao kết quả cho: ',
    'LBL_USER_SELECT' => 'Chọn người dùng',
    'LBL_USING_RULES' => 'Chọn quyền:',
    'LBL_WARN_NO_DIST' => 'Không có phương thức cung cấp',
    'LBL_WARN_NO_USERS' => 'Không có người dùng được chọn',
    'LBL_IMPORT_STATUS_TITLE' => 'Trạng thái',
    'LBL_INDICATOR' => 'Chỉ số',
    'LBL_LIST_STATUS' => 'Trạng thái',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Nhóm Inbox',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Bản Nháp',
    'LBL_LIST_TITLE_MY_INBOX' => 'Hộp thư đến',
    'LBL_LIST_TITLE_MY_SENT' => 'Email đã gửi',
    'LBL_LIST_TITLE_MY_ARCHIVES' => ' Emails lưu trữ',

    'LNK_MY_DRAFTS' => 'Bản Nháp',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Xem Email',
    'LNK_QUICK_REPLY' => 'Trả lời',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Không có Team chính nào được xác định',
    'LBL_INSERT_CONTACT_EMAIL' => 'Chèn Địa chỉ Email từ Liên hệ',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Chèn Địa chỉ Email từ Tài khoản',
    'LBL_INSERT_TARGET_EMAIL' => 'Chèn Địa chỉ Email từ Mục tiêu',
    'LBL_INSERT_USER_EMAIL' => 'Chèn Địa chỉ Email từ người dùng',
    'LBL_INSERT_LEAD_EMAIL' => 'Chèn Địa chỉ Email từ đầu mối',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Địa chỉ email không hợp lệ',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Giao cho:',
    'LBL_MEMBER_OF' => 'Cấp trên',
    'LBL_QUICK_CREATE' => ' Tạo nhanh',
    'LBL_CREATE' => 'Tạo', // PR 5651
    'LBL_STATUS' => 'Tình trạng thư:',
    'LBL_EMAIL_FLAGGED' => 'Gắn cờ:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Trạng thái trả lời:',
    'LBL_TYPE' => 'kiểu:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Xin kiểm tra!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Chọn email mẫu sẽ ghi đè lên nội dung đang có?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Chọn "--None--" sẽ xóa tất cả nội dung đang có?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Cảnh báo',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Sử dụng mẫu email có chứa các biến số liên hệ, chẳng hạn như tên liên hệ, để gửi email đến nhiều người nhận có thể có kết quả không mong muốn. Bạn nên sử dụng một chiến dịch email để gửi hàng loạt.',
    'LBL_CHECK_ATTACHMENTS' => 'Xin kiểm tra đính kèm!',
    'LBL_HAS_ATTACHMENTS' => 'Email này đã có đính kèm(s). Would you like to keep the attachment(s)?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Có tệp đính kèm',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Sai vùng yêu cầu',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Sai vùng yêu cầu',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Chỉ hiện người nhận liên quan',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Thêm',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Thêm',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Thuộc tính tài khoản Email',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Máy chủ Email SMTP gửi đi',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Máy chủ Email SMTP gửi đi',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Tài khoản thư',
    'LBL_EMAIL_SETTINGS_INBOUND' => ' Email đến',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => ' Email đi',
    'LBL_ADD_CC' => 'Thêm Cc',
    'LBL_ADD_BCC' => 'Thêm Bcc',
    'LBL_MOVE_TO_BCC' => 'Di chuyển sang Bcc',
    'LBL_ADD_TO_ADDR' => 'Thêm vào',
    'LBL_SELECTED_ADDR' => 'Đã chọn',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Lỗi gửi mail',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'Hiện ',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' Nhiều hơn',
    'LBL_MORE_OPTIONS' => 'Nhiều hơn',
    'LBL_LESS_OPTIONS' => 'Ít hơn',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Cá nhân',
    'LBL_MAILBOX_TYPE_GROUP' => 'Nhóm',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Nhóm - Tự động-Nhập',
    'LBL_SEARCH_FOR' => 'Tìm kiếm cho',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Cá nhân</b>: Tài khoản email mà bạn có thể truy cập. Chỉ bạn mới có thể quản lý và nhập các email từ tài khoản này. <br><b>Nhóm</b>: Tài khoản Email có thể truy cập được bởi các thành viên của các nhóm được chỉ định. Các thành viên của nhóm có thể quản lý và nhập các email từ tài khoản này. <br><b>Nhóm - nhập khẩu-tự động</b>: Tài khoản email có thể truy cập được bởi các thành viên của các nhóm được chỉ định. Các email được tự động nhập vào làm hồ sơ.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Nhập địa chỉ email, Tên, Họ hoặc Tên Tài khoản để tìm người nhận.',
    'LBL_TEST_SETTINGS' => 'Kiểm tra tùy chỉnh ',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Thông báo này không có nội dung</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Vui lòng xác định chủ đề',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Vui lòng xác định thông điệp của bạn trong phần nội dung',
    'LBL_HAS_INVALID_EMAIL_CC' => 'Địa chỉ trong trường Cc là không hợp lệ',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'Địa chỉ trong trường Bcc là không hợp lệ',
    'LBL_HAS_INVALID_EMAIL_TO' => 'Địa chỉ trong trường Đến là không hợp lệ',
    'LBL_TEST_EMAIL_SUBJECT' => 'Email thử nghiệm từ MavietCRM',
    'LBL_NO_SUBJECT' => '(không có chủ đề)',
    'LBL_CHECKING_ACCOUNT' => 'Kiểm tra tài khoản',
    'LBL_OF' => 'của',
    'LBL_TEST_EMAIL_BODY' => 'Đây là email kiểm tra. Nếu nhận được xác nhận tùy chỉnh hộp thư đúng.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Quản trị viên chưa cấu hình mặc định tài khoản thư đi. Không thể gửi email thử nghiệm.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Sử dụng xác thực SMTP không?',
    'LBL_MAIL_SMTPPASS' => 'Mật khẩu SMTP:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'Tên người dùng SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Thông số máy chủ SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Chọn nhà cung cấp Email của bạn:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Mật khẩu Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Mật khẩu Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Địa chỉ Email Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Thay đổi mật khẩu:',
    'LBL_EXCHANGE_SMTPUSER' => 'Thay đổi tên đăng nhập:',
    'LBL_EXCHANGE_SMTPPORT' => 'Thay đổi port server:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Thay đổi server:',

    'LBL_EDIT_LAYOUT' => 'Sửa khung' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Đính kèm' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Xóa' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Tạo Kịch bản' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Tạo khách hàng tiềm năng' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Tạo Liên hệ' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Tạo Bugs' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Tạo Công việc' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Đúng' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Đóng' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Giúp đỡ' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Chờ' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Kiểm tra Email' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Soạn email' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Email Tùy chỉnh' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'Emails:Họp',
    'LBL_DATE_MODIFIED' => 'Ngày sửa',

    'LBL_CATEGORY' => 'Chủng loại',
    'LBL_LIST_CATEGORY' => 'Chủng loại',
    'LBL_EMAIL_TEMPLATE' => 'Email mẫu',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Bỏ qua bản dự thảo',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Thao tác này sẽ xóa email này, bạn có muốn tiếp tục?',
    'LBL_EMAIL_DRAFT_DELETED' => 'Dự thảo đã bị xóa',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Xuất hiện lỗi trong khi cố gắng để xóa các bản nháp.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'Bản ghi đã được tạo thành công.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS2' => 'Bấm OK để xem bản ghi mới.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS3' => 'Bấm Cancel để quay lại Email.', // PR 5651

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Áp dụng một mẫu thư điện tử',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Thao tác này sẽ ghi đè lên các thư điện tử cơ thể và các lĩnh vực chủ đề, bạn có muốn tiếp tục?',

    'LBL_MAILBOX_ID' => 'ID của hộp thư',
    'LBL_PARENT_ID' => 'Nhóm cha',
    'LBL_LAST_SYNCED' => 'Lần cuối đồng bộ',
    'LBL_ORPHANED' => 'Đơn thân',
    'LBL_IMAP_KEYWORDS' => 'Từ khóa IMAP',
    'LBL_ERROR_NO_FOLDERS' => 'Lỗi: Không có sẵn thư mục. Hãy kiểm tra cài đặt email của bạn.',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',


    'LBL_MARK_UNREAD' => 'Đánh dấu chưa đọc',
    'LBL_MARK_READ' => 'Đánh dấu đã đọc',
    'LBL_MARK_FLAGGED' => 'Đánh dấu cờ hiệu',
    'LBL_MARK_UNFLAGGED' => 'Đánh dấu chưa cắm cờ',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Email tham gia đã gửi',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Chấp nhận việc nhận mail đã thất bại',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Mã xác nhận chấp nhận việc nhận mail',

    'ERR_NO_RETURN_ID' => 'Không tìm thấy tập tin đính kèm.',

    'LBL_LIST_DATE_MODIFIED' => 'Lần sửa cuối',
    'LNK_IMPORT_CAMPAIGNS' => 'Nhập chiến dịch',
     
     // PR 6728 Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'Trường từ địa chỉ không được thiết lập.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'Trường từ địa chỉ bị trống.',
    'ERR_FIELD_FROM_IS_INVALID' => 'Trường từ địa chỉ không hợp lệ.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'Từ địa chỉ không được thiết lập.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'Từ địa chỉ bị trống.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'Từ địa chỉ không hợp lệ.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'Từ tên địa chỉ không được thiết lập.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'Từ tên địa chỉ bị trống.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'Từ tên địa chỉ không hợp lệ.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'Từ tên địa chỉ không được thiết lập.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'Từ tên địa chỉ bị trống.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'Từ tên địa chỉ không hợp lệ.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'Từ địa chỉ và tên không được thiết lập.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'Từ địa chỉ và tên bị trống.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'Từ địa chỉ và tên không hợp lệ.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'Định dạng từ địa chỉ và tên không chính xác, sử dụng định dạng "from@emailaddress.org <Name of Person>".',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'Phần tên của Cặp từ địa chỉ và tên không hợp lệ.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'Phần địa chỉ của cặp từ địa chỉ và tên không hợp lệ.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'Cặp từ địa chỉ và tên không khớp so với từ tên hoặc địa chỉ email.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'Cặp từ địa chỉ và tên không khớp so với từ địa chỉ.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'Cặp từ địa chỉ và tên không khớp so với từ tên.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'Cặp từ địa chỉ và tên không khớp so với từ tên.',
);