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
    'LBL_SEND_DATE_TIME' => 'Ngày gửi',
    'LBL_IN_QUEUE' => 'Đang thực hiện',
    'LBL_IN_QUEUE_DATE' => 'Hàng',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Chỉ dùng số nguyên',

    'LBL_ATTACHMENT_AUDIT' => ' Đã gửi.',
    'LBL_CONFIGURE_SETTINGS' => 'Cấu hình email',
    'LBL_CUSTOM_LOCATION' => 'Xác định người dùng',
    'LBL_DEFAULT_LOCATION' => 'Mặc định',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Xóa ghi chú liên quan và file đính kèm với email đã bị xóa',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Cấu hình chấp nhận việc nhận mail',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Tự động gửi mail tham gia',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Xác nhận mẫu Mail tham gia',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Cấu hình hợp thư đi',
    'LBL_EMAILS_PER_RUN' => 'Số lượng email được gửi đi mỗi loạt:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Chiến dịch',
    'LBL_LIST_FORM_TITLE' => 'hàng đợi',
    'LBL_LIST_FROM_NAME' => 'Từ tên',
    'LBL_LIST_IN_QUEUE' => 'Trong quá trình',
    'LBL_LIST_MESSAGE_NAME' => 'tin nhắn Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Người nhận Email',
    'LBL_LIST_RECIPIENT_NAME' => 'tên người nhận',
    'LBL_LIST_SEND_ATTEMPTS' => 'Cố gắng gửi',
    'LBL_LIST_SEND_DATE_TIME' => 'Gửi',
    'LBL_LIST_USER_NAME' => 'Tên người dùng',
    'LBL_LOCATION_ONLY' => 'Địa điểm',
    'LBL_LOCATION_TRACK' => 'Vị trí của File theo dõi chiến dịch (like campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Giữ tin nhắn của chiến dịch:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Bạn có muốn giữ email <bold>EACH</bold> tin nhắn đã gửi?  <bold>Chúng tôi đề nghị không</bold>.  Chọn không sẽ chỉ lưu mẫu và các giá trị có sẵn.',
    'LBL_MAIL_SENDTYPE' => 'Người chuyển tiếp Email:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Xác thực SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Mật khẩu:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Mail Server:',
    'LBL_MAIL_SMTPUSER' => 'Tên đăng nhập:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Chọn nhà cung cấp Email của bạn',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Mật khẩu Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Địa chỉ Email Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Thay đổi mật khẩu',
    'LBL_EXCHANGE_SMTPUSER' => 'Thay đổi tên đăng nhập',
    'LBL_EXCHANGE_SMTPPORT' => 'Thay đổi port server',
    'LBL_EXCHANGE_SMTPSERVER' => 'Thay đổi server',
    'LBL_EMAIL_LINK_TYPE' => 'Email khách hàng',
    'LBL_MARKETING_ID' => 'Marketing Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Email Tùy chỉnh',
    'LBL_MODULE_TITLE' => 'Quản lý thứ tự thư đi',
    'LBL_NOTIFICATION_ON_DESC' => 'Khi được bật, email được gửi tới người dùng khi hồ sơ được chỉ định cho họ.',
    'LBL_NOTIFY_FROMADDRESS' => '"Từ" địa chỉ:',
    'LBL_NOTIFY_FROMNAME' => '"Từ" tên:',
    'LBL_NOTIFY_ON' => 'Thông báo chuyển nhượng',
    'LBL_NOTIFY_TITLE' => 'Tùy chỉnh Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Tùy chỉnh Email gửi đi',
    'LBL_RELATED_ID' => 'Id liên quan',
    'LBL_RELATED_TYPE' => 'Kiểu liên quan',
    'LBL_SEARCH_FORM_TITLE' => 'Sắp xếp tìm kiếm',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Value of Config.php setting site_url',
    'TXT_REMOVE_ME_ALT' => 'Để xóa bạn khỏi danh sách email',
    'TXT_REMOVE_ME_CLICK' => 'bấm vào đây',
    'TXT_REMOVE_ME' => 'Để xóa bạn từ danh sách email ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Gửi thông báo từ địa chỉ email của người dùng được giao',

    'LBL_SECURITY_TITLE' => 'Cài đặt bảo mật email',
    'LBL_SECURITY_DESC' => 'Kiểm tra những điều sau đây KHÔNG nên được cho phép qua Email thư đến hoặc hiển thị trong module Email.',
    'LBL_SECURITY_APPLET' => 'Thẻ Applet',
    'LBL_SECURITY_BASE' => 'Thẻ cơ bản',
    'LBL_SECURITY_EMBED' => 'Thẻ nhúng',
    'LBL_SECURITY_FORM' => 'Thẻ form',
    'LBL_SECURITY_FRAME' => 'Thẻ Frame',
    'LBL_SECURITY_FRAMESET' => 'Thẻ Frameset',
    'LBL_SECURITY_IFRAME' => 'thẻ iFame',
    'LBL_SECURITY_IMPORT' => 'Thẻ nhập',
    'LBL_SECURITY_LAYER' => 'Thẻ Layer',
    'LBL_SECURITY_LINK' => 'Thẻ liên kết',
    'LBL_SECURITY_OBJECT' => 'Thẻ chủ đề',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Chọn Outlook mặc định cài đặt bảo mật tối thiểu (lỗi bên phải của màn hình chính xác).',
    'LBL_SECURITY_STYLE' => 'Thẻ Style',
    'LBL_SECURITY_TOGGLE_ALL' => 'Chuyển đổi tất cả các tùy chọn',
    'LBL_SECURITY_XMP' => 'Thẻ Xmp',
    'LBL_YES' => 'Có',
    'LBL_NO' => 'Không',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Cố gắng gửi',
    'LBL_OUTGOING_SECTION_HELP' => 'Cấu hình máy chủ thư đi mặc định để gửi thông báo email, bao gồm cả cảnh báo luồng công việc.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Người dùng có thể gửi bằng danh tính của tài khoản này:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Khi chọn tùy chọn này, tất cả người dùng sẽ có thể gửi email sử dụng cùng một tài khoản mail gửi đi<br> để gửi thông báo và cảnh báo hệ thống. Nếu tùy chọn không được chọn,<br>người dùng vẫn có thể sử dụng máy chủ thư đi sau khi cung cấp thông tin tài khoản của riêng họ.',
    'LBL_FROM_ADDRESS_HELP' => 'Khi được bật, tên và địa chỉ email của người dùng sẽ được bao gồm trong trường Từ của email. Tính năng này có thể không hoạt động với các máy chủ SMTP không cho phép gửi từ một tài khoản email khác với tài khoản máy chủ.',
    'LBL_HELP' => 'Giúp đỡ' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Xem các tài khoản email gửi đi',
    'LBL_ALLOW_SEND_AS_USER' => 'Người dùng có thể gửi bằng chính tài khoản của họ:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Khi được kích hoạt, <b>tất cả</b> người dùng có thể gửi mail bằng cách sử dụng máy chủ gửi đi, sử dụng địa chỉ email chính của họ như là &quot;Từ:&quot; địa chỉ.<br>Tính năng này có thể không hoạt động với các máy chủ SMTP nào mà không cho phép gửi thư từ một tài khoản email khác so với tài khoản máy chủ.',
);
