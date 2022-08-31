<?php
/**
 * ç
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
    'LBL_BASIC_SEARCH' => 'Lọc nhanh',
    'LBL_ADVANCED_SEARCH' => 'Bộ lọc nâng cao',
    'LBL_BASIC_TYPE' => 'Loại cơ bản',
    'LBL_ADVANCED_TYPE' => 'Dạng nâng cao',
    'LBL_SYSOPTS_2' => 'Loại cơ sở dữ liệu sẽ được sử dụng cho trường hợp SuiteCRM bạn đang cài đặt?',
    'LBL_SYSOPTS_DB' => 'Xác định loại hình cơ sở dữ liệu',
    'LBL_SYSOPTS_DB_TITLE' => 'Loại hình cơ sở dữ liệu',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Xin vui lòng sửa chữa các lỗi sau đây trước khi tiếp tục:',
    'ERR_DB_VERSION_FAILURE' => 'Không thể kiểm tra phiên bản cơ sở dữ liệu.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Cung cấp tên người dùng của người sử dụng admin SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Cung cấp mật khẩu cho người sử dụng admin SuiteCRM. ',

    'ERR_CHECKSYS' => 'Lỗi đã được phát hiện trong quá trình kiểm tra khả năng tương thích. Để cài đặt SuiteCRM của bạn để hoạt động đúng, xin vui lòng làm theo các bước thích hợp để giải quyết các vấn đề được liệt kê dưới đây và hoặc nhấn nút kiểm tra lại, hoặc thử cài đặt lại.',
    'ERR_CHECKSYS_CURL' => 'Không tìm thấy: Lịch trình SuiteCRM sẽ chạy với tính năng hạn chế.',
    'ERR_CHECKSYS_IMAP' => 'Không tìm thấy: Email đến và các chiến dịch (Email) yêu cầu các thư viện IMAP. Sẽ không có chức năng.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Thiết lập này ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M hoặc lớn hơn tập tin php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Cảnh báo: Không thể ghi',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Phiên bản PHP của bạn không được hỗ trợ bởi SuiteCRM. Bạn sẽ cần phải cài đặt một phiên bản tương thích với các ứng dụng SuiteCRM. Xin vui lòng tham khảo các ma trận khả năng tương thích trong các ghi chú phát hành để hỗ trợ PHP phiên bản. Phiên bản của bạn là ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Phiên bản PHP của bạn không được hỗ trợ bởi SuiteCRM. Bạn sẽ cần phải cài đặt một phiên bản tương thích với các ứng dụng SuiteCRM. Xin vui lòng tham khảo các ma trận khả năng tương thích trong các ghi chú phát hành để hỗ trợ PHP phiên bản. Phiên bản của bạn là ',
    'ERR_CHECKSYS_FASTCGI' => 'Chúng tôi phát hiện rằng bạn đang sử dụng một trình xử lý FastCGI mapping cho PHP. Bạn sẽ cần phải cài đặt/cấu hình một phiên bản tương thích với các ứng dụng SuiteCRM. Vui lòng tham khảo Bảng tính Tương thích trong Chú giải Phát hành cho Các Phiên bản Được Hỗ trợ. Xin vui lòng xem <a href="http://www.iis.net/php/" target="_blank"> http://www.iis.net/php/</a> để biết chi tiết ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Tối ưu trải nghiệm sử dụng IIS/FastCGI sapi, thiết lập fastcgi.logging 0 trong tập tin php.ini của bạn.',
    'LBL_DB_UNAVAILABLE' => 'Database không có sẵn',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Hỗ trợ cơ sở dữ liệu không được tìm thấy. Hãy chắc chắn rằng bạn có các trình điều khiển cần thiết cho một trong các kiểu cơ sở dữ liệu được hỗ trợ sau đây: MySQL hoặc MS SQLServer. Bạn có thể cần phải sửa lại phần mở rộng trong tệp php.ini, hoặc biên dịch lại với tệp nhị phân đúng, tùy thuộc vào phiên bản PHP của bạn. Vui lòng tham khảo Hướng dẫn PHP để biết thêm thông tin về cách bật Hỗ trợ Cơ sở dữ liệu.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Không tìm thấy các chức năng liên quan đến thư viện phân tích cú pháp XML cần thiết cho ứng dụng SuiteCRM. Bạn có thể cần phải sửa lại phần mở rộng trong tệp php.ini, hoặc biên dịch lại với tệp nhị phân đúng, tùy thuộc vào phiên bản PHP của bạn. Vui lòng tham khảo Hướng dẫn PHP để biết thêm thông tin.',
    'ERR_CHECKSYS_MBSTRING' => 'Không tìm thấy các chức năng liên quan đến chuỗi Multibyte PHP mở rộng (mbstring) cần thiết cho ứng dụng SuiteCRM.<br/><br/>Nói chung, mô đun mbstring không được bật theo mặc định trong PHP và phải được kích hoạt bằng --enable-mbstring khi nhị phân PHP được xây dựng. Vui lòng tham khảo Hướng dẫn PHP để biết thêm thông tin về cách bật hỗ trợ mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'File cấu hình tồn tại nhưng không thể ghi. Vui lòng thực hiện các bước cần thiết để làm cho tệp này có thể ghi. Tùy thuộc vào hệ điều hành của bạn, điều này có thể yêu cầu bạn thay đổi quyền truy cập bằng cách chạy chmod 766, hoặc nhấp chuột phải vào tên tệp để truy cập các thuộc tính và bỏ chọn tùy chọn chỉ đọc.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'File cấu hình ghi đè tồn tại nhưng không thể ghi. Vui lòng thực hiện các bước cần thiết để làm cho tệp này có thể ghi. Tùy thuộc vào hệ điều hành của bạn, điều này có thể yêu cầu bạn thay đổi quyền truy cập bằng cách chạy chmod 766, hoặc nhấp chuột phải vào tên tệp để truy cập các thuộc tính và bỏ chọn tùy chọn chỉ đọc.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Danh mục tuỳ chỉnh vẫn tồn tại nhưng không thể ghi. Bạn có thể phải thay đổi quyền cho nó (chmod 766) hoặc nhấp chuột phải vào nó và bỏ chọn tuỳ chọn chỉ đọc, tùy thuộc vào Hệ điều hành của bạn. Vui lòng thực hiện các bước cần thiết để làm cho tệp có thể ghi.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Các tệp hoặc các danh mục được liệt kê dưới đây không thể ghi hoặc bị thiếu và không thể tạo được. Tùy thuộc vào Hệ điều hành của bạn, việc sửa lại này có thể yêu cầu bạn phải thay đổi quyền truy cập vào các tệp tin hoặc thư mục gốc (chmod 755), hoặc nhấp chuột phải vào thư mục gốc và bỏ chọn tuỳ chọn 'chỉ đọc' và áp dụng nó cho tất cả các thư mục con.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Ghi đè cấu hình',
    'ERR_CHECKSYS_SAFE_MODE' => 'Chế độ An toàn đang Bật (bạn có thể muốn tắt trong php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Không tìm thấy hỗ trợ ZLib: SuiteCRM gặt hái được nhiều lợi ích về hiệu suất với nén zlib.',
    'ERR_CHECKSYS_ZIP' => 'Không tìm thấy hỗ trợ ZIP: SuiteCRM cần hỗ trợ ZIP để xử lý tệp nén.',
    'ERR_CHECKSYS_PCRE' => 'Thư viện PCRE không tìm thấy: SuiteCRM cần thư viện PCRE để thực thi so khớp mẫu regular expression kiểu Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Phiên bản thư viện PCRE: SuiteCRM cần thư viện PCRE 7.0 hoặc cao hơn để thực thi so khớp mẫu regular expression kiểu Perl.',
    'ERR_DB_ADMIN' => 'Tên người dùng và/hoặc mật khẩu quản trị viên cơ sở dữ liệu được cung cấp không hợp lệ và không thể thiết lập kết nối với cơ sở dữ liệu. Vui lòng nhập tên và mật khẩu người dùng hợp lệ. (Lỗi: ',
    'ERR_DB_ADMIN_MSSQL' => 'Tên người dùng và/hoặc mật khẩu quản trị viên cơ sở dữ liệu được cung cấp không hợp lệ và không thể thiết lập kết nối với cơ sở dữ liệu. Vui lòng nhập tên và mật khẩu người dùng hợp lệ.',
    'ERR_DB_EXISTS_NOT' => 'Cơ sở dữ liệu được chỉ định không tồn tại.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Cơ sở dữ liệu đã tồn tại với dữ liệu cấu hình. Để chạy một cài đặt với cơ sở dữ liệu đã chọn, hãy chạy lại cài đặt và chọn: "Thả và tạo lại các bảng SuiteCRM hiện có?" Để nâng cấp, sử dụng Thuật sỹ Nâng cấp trong Bảng điều khiển dành cho Quản trị viên. Vui lòng đọc tài liệu nâng cấp tại <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">đây</a>.',
    'ERR_DB_EXISTS' => 'Tên cơ sở dữ liệu được cung cấp đã tồn tại - không thể tạo một tên khác có cùng tên.',
    'ERR_DB_EXISTS_PROCEED' => 'Tên Cơ sở dữ liệu được cung cấp đã tồn tại. Bạn có thể <br>1. nhấn nút quay lại và chọn tên cơ sở dữ liệu mới <br>2. nhấn tiếp và tiếp tục nhưng tất cả các bảng hiện có trên cơ sở dữ liệu này sẽ bị bỏ. <strong> Điều này có nghĩa là bảng và dữ liệu của bạn sẽ bị thổi bay.</strong>',
    'ERR_DB_HOSTNAME' => 'Tên máy chủ không được để trống.',
    'ERR_DB_INVALID' => 'Đã chọn kiểu cơ sở dữ liệu không hợp lệ.',
    'ERR_DB_LOGIN_FAILURE' => 'Máy chủ cơ sở dữ liệu được cung cấp, tên người dùng và/hoặc mật khẩu không hợp lệ và không thể thiết lập kết nối với cơ sở dữ liệu. Vui lòng nhập một máy chủ, tên người dùng và mật khẩu hợp lệ',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Máy chủ cơ sở dữ liệu được cung cấp, tên người dùng và/hoặc mật khẩu không hợp lệ và không thể thiết lập kết nối với cơ sở dữ liệu. Vui lòng nhập một máy chủ, tên người dùng và mật khẩu hợp lệ',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Máy chủ cơ sở dữ liệu được cung cấp, tên người dùng và/hoặc mật khẩu không hợp lệ và không thể thiết lập kết nối với cơ sở dữ liệu. Vui lòng nhập một máy chủ, tên người dùng và mật khẩu hợp lệ',
    'ERR_DB_MYSQL_VERSION' => 'Phiên bản MySQL của bạn (%s) không được hỗ trợ bởi SuiteCRM. Bạn sẽ cần cài đặt một phiên bản tương thích với ứng dụng SuiteCRM. Vui lòng tham khảo tính tương thích trong chú thích Phát hành cho các phiên bản MySQL được hỗ trợ.',
    'ERR_DB_NAME' => 'Cơ sở dữ liệu tên không được để trống.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Tên cơ sở dữ liệu không chứa một ' \\', '/', hoặc '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Tên cơ sở dữ liệu có thể bắt đầu với một số, '#', hoặc ' @' và không chứa dấu cách, ' \"',\"'\", ' *', '/', '\\', '? ',':', ' <', ' chủ ', '& ','!', hoặc '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Tên cơ sở dữ liệu có thể chỉ bao gồm ký tự chữ số và ký hiệu '#', '_' hoặc '$'",
    'ERR_DB_PASSWORD' => 'Mật khẩu được cung cấp cho người quản trị cơ sở dữ liệu SuiteCRM không khớp. Vui lòng nhập lại mật khẩu giống nhau trong các trường mật khẩu.',
    'ERR_DB_PRIV_USER' => 'Cung cấp tên người dùng quản trị cơ sở dữ liệu. Người dùng được yêu cầu cho kết nối ban đầu với cơ sở dữ liệu.',
    'ERR_DB_USER_EXISTS' => 'Tên người dùng cho người dùng cơ sở dữ liệu SuiteCRM đã tồn tại - không thể tạo một tên khác có cùng tên. Vui lòng nhập tên người dùng mới.',
    'ERR_DB_USER' => 'Nhập tên đăng nhập cho quản trị viên cơ sở dữ liệu SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Xin vui lòng sửa chữa các lỗi sau đây trước khi tiếp tục:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Mật khẩu được cung cấp cho người quản trị cơ sở dữ liệu SuiteCRM không khớp. Vui lòng nhập lại mật khẩu giống nhau trong các trường mật khẩu.',
    'ERR_ERROR_GENERAL' => 'Đã xảy ra những lỗi sau:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Không thể xóa File: ',
    'ERR_LANG_MISSING_FILE' => 'Không thể tìm thấy file: ',
    'ERR_LANG_NO_LANG_FILE' => 'Không tìm thấy File gói ngôn ngữ nào bao gồm/ngôn ngữ bên trong: ',
    'ERR_LANG_UPLOAD_1' => 'Có vấn đề với tải lên của bạn. Vui lòng thử lại.',
    'ERR_LANG_UPLOAD_2' => 'Gói ngôn ngữ phải là File ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP không thể di chuyển file tạm vào Danh mục nâng cấp.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Danh mục nhật ký được cung cấp không phải là một Danh mục hợp lệ.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Danh mục gốc được cung cấp không phải là một Danh mục có thể ghi được.',
    'ERR_NO_DIRECT_SCRIPT' => 'Không thể xử lý trực tiếp tập lệnh.',
    'ERR_NO_SINGLE_QUOTE' => 'Không thể sử dụng dấu ngoặc đơn cho ',
    'ERR_PASSWORD_MISMATCH' => 'Mật khẩu được cung cấp cho người dùng quản trị viên SuiteCRM không khớp. Vui lòng nhập lại mật khẩu giống nhau trong các trường mật khẩu.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Không thể ghi vào <span class=stop> config.php</span> file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Bạn có thể tiếp tục cài đặt này bằng cách tạo tệp config.php theo cách thủ công và dán các thông tin cấu hình dưới đây vào tệp config.php. Tuy nhiên, bạn <strong>phải</strong> tạo tệp config.php trước khi tiếp tục bước tiếp theo.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Bạn có nhớ để tạo tập tin config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Cảnh báo: Không thể ghi vào tệp config.php. Hãy đảm bảo rằng nó tồn tại.',
    'ERR_PERFORM_HTACCESS_1' => 'Không thể ghi vào ',
    'ERR_PERFORM_HTACCESS_2' => ' file.',
    'ERR_PERFORM_HTACCESS_3' => 'Nếu bạn muốn an toàn tập tin của bạn khỏi bị có thể truy cập thông qua trình duyệt, tạo một tập tin htaccess trong Danh mục gốc của bạn với các dòng:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Chúng tôi không thể nhận biết kết nối Internet.</b>Khi bạn có kết nối, vui lòng truy cập <a href="http://www.suitecrm.com/"> http://www.suitecrm.com/</a> để đăng ký với SuiteCRM. Bằng cách cho chúng tôi biết một chút về cách công ty của bạn lên kế hoạch sử dụng SuiteCRM, chúng tôi có thể đảm bảo chúng tôi luôn cung cấp đúng ứng dụng cho nhu cầu kinh doanh của bạn.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Danh mục phiên làm việc được cung cấp không phải là một Danh mục hợp lệ.',
    'ERR_SESSION_DIRECTORY' => 'Danh mục phiên được cung cấp không phải là một Danh mục có thể ghi được.',
    'ERR_SESSION_PATH' => 'Đường dẫn phiên làm việc là cần thiết nếu bạn muốn chỉ định cho riêng bạn.',
    'ERR_SI_NO_CONFIG' => 'Bạn không bao gồm config_si.php trong tài liệu gốc, hoặc bạn đã không xác định $sugar_config_si trong config.php',
    'ERR_SITE_GUID' => 'ID Ứng dụng là cần thiết nếu bạn muốn chỉ định cho riêng bạn.',
    'ERROR_SPRITE_SUPPORT' => "Hiện nay chúng tôi không thể xác định vị trí thư viện GD, kết quả là bạn sẽ không thể sử dụng chức năng CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Chú ý: Cấu hình PHP của bạn nên được thay đổi để cho phép các tập tin được tải lên ít nhất 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Tải lên tập tin kích thước',
    'ERR_URL_BLANK' => 'Cung cấp các URL cơ sở cho trường hợp SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Không thể định vị bản ghi cài đặt của',
    'ERROR_MANIFEST_TYPE' => 'Tệp kê khai cần phải xác định loại gói.',
    'ERROR_PACKAGE_TYPE' => 'Tệp kê khai chỉ định một loại gói không được công nhận',
    'ERROR_VERSION_INCOMPATIBLE' => 'Các tập tin được tải lên là không tương thích với phiên bản này của SuiteCRM: ',

    'LBL_BACK' => 'Quay lại',
    'LBL_CANCEL' => 'Hủy',
    'LBL_ACCEPT' => 'Đồng ý',
    'LBL_CHECKSYS_CACHE' => 'Danh mục Cache có thể ghi được',
    'LBL_DROP_DB_CONFIRM' => 'Tên Cơ sở dữ liệu được cung cấp đã tồn tại.<br>Bạn có thể:<br> 1. Nhấp vào nút Huỷ và chọn một tên cơ sở dữ liệu mới, hoặc <br>2. Nhấp vào nút Chấp nhận và tiếp tục. Tất cả các bảng hiện có trong cơ sở dữ liệu sẽ được bỏ. <strong>Điều này có nghĩa là tất cả các bảng và dữ liệu đã có sẵn sẽ bị thổi bay.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Hợp phần',
    'LBL_CHECKSYS_CONFIG' => 'Có thể ghi tập tin cấu hình SuiteCRM (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Module',
    'LBL_CHECKSYS_CUSTOM' => 'Có thể ghi các danh mục tuỳ chỉnh',
    'LBL_CHECKSYS_DATA' => 'Danh mục dữ liệu có thể ghi',
    'LBL_CHECKSYS_IMAP' => 'IMAP Module',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Module Chuỗi MB',
    'LBL_CHECKSYS_MEM_OK' => 'OK (không có giới hạn)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Không giới hạn)',
    'LBL_CHECKSYS_MEM' => 'Giới hạn bộ nhớ PHP',
    'LBL_CHECKSYS_MODULE' => 'Các Module có thể sinh ra các danh mục con và File',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Không có sẵn',
    'LBL_CHECKSYS_OK' => 'Ok',
    'LBL_CHECKSYS_PHP_INI' => 'Vị trí tập tin cấu hình PHP (php.ini) của bạn:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Phiên bản PHP',
    'LBL_CHECKSYS_IISVER' => 'Phiên bản IIS',
    'LBL_CHECKSYS_RECHECK' => 'Kiểm tra lại',
    'LBL_CHECKSYS_STATUS' => 'Tình trạng',
    'LBL_CHECKSYS_TITLE' => 'Kiểm tra chấp nhận Hệ thống',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CHECKSYS_ZLIB' => 'Module nén ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Module xử lý ZIP',
    'LBL_CHECKSYS_PCRE' => 'Thư viện PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Vui lòng sửa các tệp hoặc thư mục sau đây trước khi tiếp tục:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Vui lòng sửa các danh mục và các file dưới đây trước khi tiếp tục:',
    'LBL_CHECKSYS_UPLOAD' => 'Danh mục tải lên có thể ghi',
    'LBL_CLOSE' => 'Đóng',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'đã được tạo',
    'LBL_CONFIRM_DB_TYPE' => 'Loại hình cơ sở dữ liệu',
    'LBL_CONFIRM_NOT' => 'not',
    'LBL_CONFIRM_TITLE' => 'Xác nhận thiết đặt',
    'LBL_CONFIRM_WILL' => 'sẽ',
    'LBL_DBCONF_DB_DROP' => 'Thả bàn',
    'LBL_DBCONF_DB_NAME' => 'Tên cơ sở dữ liệu',
    'LBL_DBCONF_DB_PASSWORD' => 'Mật khẩu người dùng cơ sở dữ liệu SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Nhập lại mật khẩu người dùng cơ sở dữ liệu SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Người dùng cơ sở dữ liệu SuiteCRM',
    'LBL_DBCONF_SUGAR_DB_USER' => 'Người dùng cơ sở dữ liệu SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Tên đăng nhập Quản trị cơ sở dữ liệu',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Mật khẩu Quản trị cơ sở dữ liệu',
    'LBL_DBCONF_COLLATION' => 'Đối chiếu', // PR 6475
    'LBL_DBCONF_CHARSET' => 'Ký tự', // PR 6475
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Cấu hình database nâng cao', // PR 6475
    'LBL_DBCONF_DEMO_DATA' => 'Thêm vào cơ sở dữ liệu với dữ liệu Demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Chọn dữ liệu Demo',
    'LBL_DBCONF_HOST_NAME' => 'Tên máy chủ',
    'LBL_DBCONF_HOST_INSTANCE' => 'Máy chủ Instance',
    'LBL_DBCONFIG_SECURITY' => 'Vì mục đích bảo mật, bạn có thể chỉ định một người sử dụng cơ sở dữ liệu độc quyền để kết nối với cơ sở dữ liệu SuiteCRM. Người dùng này phải có khả năng viết, cập nhật và truy xuất dữ liệu trên cơ sở dữ liệu SuiteCRM sẽ được tạo ra cho trường hợp này. Người dùng này có thể là quản trị viên cơ sở dữ liệu đã nêu ở trên, hoặc bạn có thể cung cấp thông tin người dùng cơ sở dữ liệu mới hoặc hiện có.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Cung cấp người dùng hiện có',
    'LBL_DBCONFIG_CREATE_DD' => 'Xác định người dùng để tạo',
    'LBL_DBCONFIG_SAME_DD' => 'Tương tự như Người dùng Quản trị',
    'LBL_DBCONF_TITLE' => 'Cấu hình Cơ sỡ dữ liệu',
    'LBL_DBCONF_TITLE_NAME' => 'Cung cấp tên Cơ sỡ dữ liệu',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Cung cấp thông tin người dùng cơ sở dữ liệu',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Mật khẩu',
    'LBL_DISABLED_DESCRIPTION_2' => 'Sau khi thay đổi này đã được thực hiện, bạn có thể nhấp vào nút "Bắt đầu" dưới đây để bắt đầu cài đặt của bạn. <i> Sau khi quá trình cài đặt hoàn tất, bạn sẽ muốn thay đổi giá trị cho \'installer_locked\' thành \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Trình cài đặt đã được chạy một lần. Là một biện pháp an toàn, nó đã bị vô hiệu hóa từ chạy lần thứ hai. Nếu bạn chắc chắn muốn chạy lại, hãy chuyển đến tệp config.php của bạn và tìm (hoặc thêm) một biến được gọi là \'installer_locked\' và đặt nó là \'false\'. Dòng nên giống như sau:',
    'LBL_DISABLED_HELP_1' => 'Để được trợ giúp cài đặt, vui lòng truy cập SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://suitecrm.com/suitecrm/forum/suite-forum',
    'LBL_DISABLED_HELP_2' => 'diễn đàn hỗ trợ',
    'LBL_DISABLED_TITLE_2' => 'Cài đặt SuiteCRM đã bị vô hiệu',
    'LBL_HELP' => 'Giúp đỡ',
    'LBL_INSTALL' => 'Cài đặt',
    'LBL_INSTALL_TYPE_TITLE' => 'Tùy chọn cài đặt',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Lựa chọn kiểu cài đặt',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Cài đặt thông thường</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Cài đặt tùy chỉnh</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Yêu cầu thông tin tối thiểu cho quá trình cài đặt. Khuyến cáo cho người dùng mới.',
    'LBL_INSTALL_TYPE_MSG3' => 'Cung cấp các tùy chọn bổ sung để cài đặt trong quá trình cài đặt. Hầu hết các tùy chọn này cũng có sẵn sau khi cài đặt trong màn hình quản trị. Được đề nghị cho người dùng nâng cao.',
    'LBL_LANG_1' => 'Để sử dụng một ngôn ngữ trong SuiteCRM ngoài ngôn ngữ mặc định (tiếng Anh-Mỹ), bạn có thể tải lên và cài đặt gói ngôn ngữ tại thời điểm này. Bạn cũng có thể tải lên và cài đặt gói ngôn ngữ từ bên trong ứng dụng SuiteCRM. Nếu bạn muốn bỏ qua bước này, hãy nhấp vào Tiếp theo.',
    'LBL_LANG_BUTTON_COMMIT' => 'Cài đặt',
    'LBL_LANG_BUTTON_REMOVE' => 'Xóa bỏ',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Gỡ bỏ cài đặt',
    'LBL_LANG_BUTTON_UPLOAD' => 'Tải lên',
    'LBL_LANG_NO_PACKS' => 'không có',
    'LBL_LANG_PACK_INSTALLED' => 'Các gói ngôn ngữ sau đây đã được cài đặt: ',
    'LBL_LANG_PACK_READY' => 'Các gói ngôn ngữ sau đã sẵn sàng để cài đặt: ',
    'LBL_LANG_SUCCESS' => 'Gói ngôn ngữ đã được tải lên thành công.',
    'LBL_LANG_TITLE' => 'Gói ngôn ngữ',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Cài đặt SuiteCRM ngay bây giờ. Quá trình này có thể mất vài phút.',
    'LBL_LANG_UPLOAD' => 'Tải lên một gói ngôn ngữ',
    'LBL_LICENSE_ACCEPTANCE' => 'Chấp nhận giấy phép',
    'LBL_LICENSE_CHECKING' => 'Kiểm tra hệ thống để tương thích.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Kiểm tra môi trường',
    'LBL_LICENSE_CHKDB_HEADER' => 'Xác minh thông tin xác thực của DataBase.',
    'LBL_LICENSE_CHECK_PASSED' => 'Hệ thống thông qua kiểm tra tính tương thích.',
    'LBL_CREATE_CACHE' => 'Đang chuẩn bị cài đặt...',
    'LBL_LICENSE_REDIRECT' => 'Đang chuyển hướng trong ',
    'LBL_LICENSE_I_ACCEPT' => 'Đồng ý',
    'LBL_LICENSE_PRINTABLE' => ' Chế độ xem có thể in ',
    'LBL_PRINT_SUMM' => 'In tóm tắt',
    'LBL_LICENSE_TITLE_2' => 'Giấy phép SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Tiến sĩ.',

    'LBL_ML_ACTION' => 'Hành động',
    'LBL_ML_DESCRIPTION' => 'Mô tả',
    'LBL_ML_INSTALLED' => 'Ngày cài đặt',
    'LBL_ML_NAME' => 'Tên',
    'LBL_ML_PUBLISHED' => 'Ngày xuất bản',
    'LBL_ML_TYPE' => 'Loại',
    'LBL_ML_UNINSTALLABLE' => 'Gỡ cài đặt không thành công',
    'LBL_ML_VERSION' => 'Phiên bản',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver cho PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'Tiếp theo',
    'LBL_NO' => 'Không',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Cài đặt mật khẩu quản trị trang web',
    'LBL_PERFORM_CONFIG_PHP' => 'Đang tạo file cấu hình SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Đang tạo cơ sỡ dữ liệu</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>trên</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Tạo tên người dùng và mật khẩu cơ sở dữ liệu...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Tạo dữ liệu SuiteCRM mặc định',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Đang tạo Lịch công việc mặc định',
    'LBL_PERFORM_DEFAULT_USERS' => 'Đang tạo người dùng mặc định',
    'LBL_PERFORM_DEMO_DATA' => 'Đưa vào các bảng cơ sở dữ liệu với dữ liệu demo (điều này có thể mất một ít thời gian)',
    'LBL_PERFORM_DONE' => 'done<br>',
    'LBL_PERFORM_FINISH' => 'Kết thúc',
    'LBL_PERFORM_OUTRO_1' => 'Thiết lập của SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' bây giờ là hoàn tất!',
    'LBL_PERFORM_OUTRO_3' => 'Tổng thời gian: ',
    'LBL_PERFORM_OUTRO_4' => ' giây.',
    'LBL_PERFORM_OUTRO_5' => 'Gần đúng bộ nhớ sử dụng: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Thành công!',
    'LBL_PERFORM_TABLES' => 'Tạo các bảng ứng dụng SuiteCRM, các bảng kiểm toán và quan hệ của các dữ liệu',
    'LBL_PERFORM_TITLE' => 'Thực hiện cài đặt',
    'LBL_PRINT' => 'In',
    'LBL_REG_CONF_1' => 'Vui lòng điền đầy đủ thông tin dưới đây để nhận các thông báo về sản phẩm mới, tin đào tạo, tin khuyến mãi và các sự kiến đặc biệt từ SuiteCRM. Chúng tôi không bán, cho thuê, chia sẻ hoặc phân phối bất kì thông tin nào cho bên thứ ba.',
    'LBL_REG_CONF_3' => 'Cảm ơn bạn đã đăng ký. Nhấn vào nút Hoàn thành để đăng nhập vào SuiteCRM. Bạn sẽ cần phải đăng nhập lần đầu tiên sử dụng tên người dùng "admin" và mật khẩu bạn đã nhập trong bước 2.',
    'LBL_REG_TITLE' => 'Đăng ký',
    'LBL_REQUIRED' => '* Trường bắt buộc',

    'LBL_SITECFG_ADMIN_Name' => 'Tên Quản trị Ứng dụng SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Nhập lại mật khẩu người dùng quản trị SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Mật khẩu người dùng quản trị SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID Ứng dụng',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Nếu chọn, bạn phải cung cấp ID ứng dụng để ghi đè ID được tạo tự động. ID đảm bảo rằng session của SuiteCRM này không được sử dụng bởi một SuiteCRM khác. Nếu bạn có một cluster cài đặt SuiteCRM, tất cả chúng phải được chia sẻ cùng một ID ứng dụng.',
    'LBL_SITECFG_CUSTOM_ID' => 'Cung cấp ID ứng dụng của riêng bạn',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Nếu chọn, bạn vui lòng chỉ định đường dẫn mới để ghi đè đường dẫn mặc định của SuiteCRM log. File log có thể được lưu trữ ở bất kì thư mục nào, việc truy cập bằng trình duyệt sẽ bị giới hạn bằng chuyển hướng trong .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Sử dụng tùy chỉnh Danh mục Log',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Nếu chọn, bạn vui lòng cung cấp thư mục an toàn để lưu trữ các thông tin session của SuiteCRM. Việc này nhằm đảm bảo dữ liệu session tránh khỏi các nguy cơ tiềm ẩn trên môi trường shared host.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Sử dụng tùy chỉnh Danh mục phiên làm việc cho SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Xin vui lòng sửa chữa các lỗi sau đây trước khi tiếp tục:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Danh mục Log',
    'LBL_SITECFG_SESSION_PATH' => 'Đường dẫn đến thư mục phiên làm việc <br>(phải ghi được)',
    'LBL_SITECFG_SITE_SECURITY' => 'Chọn tùy chọn bảo mật',
    'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => 'Nếu được chọn, Hệ thống sẽ kiểm tra định kỳ cho các phiên bản Cập Nhật của các ứng dụng.',
    'LBL_SITECFG_SUGAR_UP' => 'Tự động kiểm tra Cập Nhật?',
    'LBL_SITECFG_TITLE' => 'Cấu hình trang web',
    'LBL_SITECFG_TITLE2' => 'Xác định người sử dụng quản lý',
    'LBL_SITECFG_SECURITY_TITLE' => 'Bảo mật trang web',
    'LBL_SITECFG_URL' => 'Phiên bản URL của SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Gửi thống kê sử dụng ẩn danh?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Nếu được chọn, SuiteCRM sẽ gửi số liệu thống kê <b>ẩn danh</b> về cài đặt của bạn cho SuiteCRM Inc mỗi khi hệ thống của bạn sẽ kiểm tra phiên bản mới. Thông tin này sẽ giúp chúng tôi hiểu rõ cách sử dụng các ứng dụng hơn và hướng dẫn cải tiến cho sản phẩm.',
    'LBL_SITECFG_URL_MSG' => 'Nhập đường dẫn để truy cập SuiteCRM sau khi cài đặt. Đường dẫn sẽ được dùng làm đường dẫn chính trong ứng dụng SuiteCRM. Đường dẫn nên là địa chỉ của web server hoặc tên máy chủ hoặc địa chỉ IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Đặt tên cho hệ thống của bạn. Tên này sẽ được hiển thị ở thanh tiêu đề của trình duyệt khi người dùng truy cập ứng dụng SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Sau khi cài đặt, bạn cần phải dùng user admin của SuiteCRM (mặc định username = admin) để đăng nhập vào SuiteCRM. Nhập mật khẩu cho user quản trị. Mật khẩu này có thể thay đổi sau khi đăng nhập lần đầu. Bạn cũng có thể nhập username khác bên cạnh username admin được cung cấp mặc định.',
    'LBL_SITECFG_COLLATION_MSG' => 'Chọn database collation cho hệ thống của bạn. Thiết lập này sẽ tạo bảng theo ngôn ngữ bạn sử dụng. Trong trường hợp ngôn ngữ của bạn không yêu cầu các thiết lập đặc biệt thì nên để mặc định.',
    'LBL_SPRITE_SUPPORT' => 'Nhân vật hỗ trợ',
    'LBL_SYSTEM_CREDS' => 'Chứng chỉ Hệ thống',
    'LBL_SYSTEM_ENV' => 'Môi trường hệ thống',
    'LBL_SHOW_PASS' => 'Hiện mật khẩu',
    'LBL_HIDE_PASS' => 'Ẩn mật khẩu',
    'LBL_HIDDEN' => '<i>(ẩn)</i>',
    'LBL_STEP1' => 'Bước 1 của 2 - Các yêu cầu trước khi cài đặt',
    'LBL_STEP2' => 'Bước 2 / 2 - cấu hình',
    'LBL_STEP' => 'Bước',
    'LBL_TITLE_WELCOME' => 'Chào mừng đến với SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Bạn đã sẵn sàng để cài đặt?',
    'REQUIRED_SYS_COMP' => 'Các thành phần hệ thống yêu cầu',
    'REQUIRED_SYS_COMP_MSG' =>
        'Trước khi bắt đầu, hãy đảm bảo hệ thống đáp ứng được các yêu cầu sau đây:<br>
                      <ul>
                      <li> Database/Database Management System (Ví dụ: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Tham khảo bảng ma trận trong các ghi chú phát hành để xem hệ thống có tương thích với phiên bản SuiteCRM mà bạn đang cài không.<br>',
    'REQUIRED_SYS_CHK' => 'Kiểm tra hệ thống ban đầu',
    'REQUIRED_SYS_CHK_MSG' =>
        'Khi bắt đầu quá trình cài đặt, hệ thống sẽ kiểm tra web server nơi chứa bộ cài SuiteCRM để
                      đảm bảo rằng hệ thống được cấu hình phù hợp và có đầy đủ các thành phần cần thiết
                      để cài đặt thành công. <br><br>
                      Hệ thống kiểm tra tất cả tiêu chí sau:<br>
                      <ul>
                      <li><b>Phiên bản PHP</b> &#8211; phải tương thích với ứng dụng</li>
                      <li><b>Các biến Session</b> &#8211; phải hoạt động được</li>
                      <li><b>MB Strings</b> &#8211; phải được cài đặt và kích hoạt trong php.ini</li>
                      <li><b>Database</b> &#8211; phải cài đặt sẵn MariaDB, MySQL hoặc SQL Server</li>
                      <li><b>Config.php</b> &#8211; phải có sẵn và được cấp quyền ghi file</li>
                      <li>Những file SuiteCRM sau đây phải được cấp quyền ghi:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Nếu kiểm tra thất bại, bạn sẽ không thể tiến hành cài đặt.
                                  Thông báo lỗi sẽ được hiển thị, giải thích tại sao hệ thống của bạn đã không thể vượt qua kiểm tra.
                                  Sau khi những thay đổi cần thiết được điều chỉnh, bạn có thể thực hiện kiểm tra lần nữa để có thể tiếp tục cài đặt.<br>',


    'REQUIRED_INSTALLTYPE' => 'Cài đặt thông thường hoặc Tuỳ chỉnh',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Sau khi kiểm tra hệ thống được thực hiện, bạn có thể chọn một trong hai
                      Cài đặt tiêu chuẩn hoặc tùy chỉnh. <br><br>
                      Đối với cả cài đặt <b>Tiêu chuẩn</b> và <b>Tùy chỉnh</b>, bạn sẽ cần biết những điều sau: <br>
                      <ul>
                      <li><b>Loại cơ sở dữ liệu</b> sẽ chứa dữ liệu SuiteCRM <ul><li>Cơ sở dữ liệu tương thích
                      gồm: MariaDB, MySQL hoặc SQL Server. <br><br></li></ul></li>
                      <li><b>Tên của máy chủ web</b> hoặc máy chủ (host) mà cơ sở dữ liệu được đặt
                      <ul><li>Đây có thể là <i>localhost</i> nếu cơ sở dữ liệu nằm trên máy tính cục bộ của bạn hoặc trên cùng một máy chủ web hoặc máy như các tệp SuiteCRM của bạn. <br><br></li></ul></li>
                      <li><b>Tên của cơ sở dữ liệu</b> mà bạn muốn sử dụng để lưu trữ dữ liệu SuiteCRM </li>
                        <ul>
                          <li>Bạn có thể đã có cơ sở dữ liệu hiện có mà bạn muốn sử dụng. Nếu
                          bạn cung cấp tên của cơ sở dữ liệu hiện có, các bảng trong cơ sở dữ liệu sẽ
                          bị hủy trong khi cài đặt khi lược đồ cho cơ sở dữ liệu SuiteCRM được xác định. </li>
                          <li>Nếu bạn chưa có cơ sở dữ liệu, tên bạn cung cấp sẽ được sử dụng cho
                          cơ sở dữ liệu mới được tạo cho ví dụ trong khi cài đặt. <br><br></li>
                        </ul>
                      <li><b>Tên người dùng và mật khẩu của quản trị viên cơ sở dữ liệu</b> <ul><li>Quản trị viên cơ sở dữ liệu sẽ có thể tạo bảng và người dùng và ghi vào cơ sở dữ liệu. </li><li>Bạn có thể cần phải
                      liên hệ với quản trị viên cơ sở dữ liệu của bạn để biết thông tin này nếu cơ sở dữ liệu là
                      không nằm trên máy tính cục bộ của bạn và / hoặc nếu bạn không phải là quản trị viên cơ sở dữ liệu. <br><br></ul></li></li>
                      <li><b>Tên người dùng và mật khẩu cơ sở dữ liệu SuiteCRM</b>
                      </li>
                        <ul>
                          <li>Người dùng có thể là quản trị viên cơ sở dữ liệu hoặc bạn có thể cung cấp tên của
                          người dùng cơ sở dữ liệu hiện có. </li>
                          <li>Nếu bạn muốn tạo người dùng cơ sở dữ liệu mới cho mục đích này, bạn sẽ
                          có thể cung cấp tên người dùng và mật khẩu mới trong quá trình cài đặt,
                          và người dùng sẽ được tạo trong quá trình cài đặt. </li>
                        </ul></ul><p>

                      Để cài đặt <b>Tùy chỉnh</b>, bạn cũng có thể cần biết những điều sau: <br>
                      <ul>
                      <li><b>URL sẽ được sử dụng để truy cập phiên bản SuiteCRM</b> sau khi được cài đặt.
                      URL này phải bao gồm máy chủ web hoặc tên máy hoặc địa chỉ IP. <br><br></li>
                                  <li>[Optional] <b>Đường dẫn đến thư mục phiên</b> nếu bạn muốn sử dụng một tùy chỉnh
                                  thư mục phiên cho thông tin SuiteCRM để ngăn dữ liệu phiên
                                  dễ bị tổn thương trên các máy chủ được chia sẻ. <br><br></li>
                                  <li>[Optional] <b>Đường dẫn đến thư mục nhật ký tùy chỉnh</b> nếu bạn muốn ghi đè thư mục mặc định cho nhật ký SuiteCRM. <br><br></li>
                                  <li>[Optional] <b>ID ứng dụng</b> nếu bạn muốn ghi đè tự động tạo
                                  ID đảm bảo rằng các phiên của một phiên bản SuiteCRM không được sử dụng bởi các phiên bản khác. <br><br></li>
                                  <li><b>Bộ ký tự</b> được sử dụng phổ biến nhất tại địa phương của bạn. <br><br></li></ul>
                                  Để biết thêm thông tin chi tiết, xin vui lòng tham khảo Hướng dẫn cài đặt.                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Xin vui lòng đọc các thông tin quan trọng sau đây trước khi tiếp tục cài đặt. Các thông tin sẽ giúp bạn xác định có hay không bạn đã sẵn sàng để cài đặt ứng dụng tại thời điểm này.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Chọn ngôn ngữ của bạn</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Cài đặt Wizard',
    'LBL_WIZARD_TITLE' => 'Cài đặt SuiteCRM Wizard: ',
    'LBL_YES' => 'Có',

    'LBL_PATCHES_TITLE' => 'Cài đặt các bản vá lỗi mới nhất',
    'LBL_MODULE_TITLE' => 'Cài đặt gói ngôn ngữ',
    'LBL_PATCH_1' => 'Nếu bạn muốn bỏ qua bước này, hãy nhấp vào Tiếp theo.',
    'LBL_PATCH_TITLE' => 'Nâng cấp hệ thống',
    'LBL_PATCH_READY' => 'Các gói nâng cấp sau đây đã sẵn sàng để cài đặt:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM dựa vào PHP session để lưu trữ các thông tin quan trọng trong khi kết nối với máy chủ. Cài đặt PHP của bạn không có thông tin session được cấu hình chính xác.
											<br><br>Một lỗi cấu hình phổ biến là</b> <b>'session.save_path' không được trỏ đến một thư mục hợp lệ. <br>
											<br> Xin vui lòng chỉnh lại chính xác <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>cấu hình PHP</a> trong tập tin php.ini ở dưới đây.",
    'LBL_SESSION_ERR_TITLE' => 'Lỗi cấu hình PHP session',
    'LBL_SYSTEM_NAME' => 'Tên hệ thống',
    'LBL_COLLATION' => 'Các thiết lập collation',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Nhập tên hệ thống cho SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Chọn tập tin từ máy tính',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php phiên bản 5 trở lên là bắt buộc.',
    'LBL_MINIMUM_PHP_VERSION' => 'Phiên bản Php tối thiểu là 5.1.0. Khuyến nghị phiên bản Php 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Phiên bản php hiện tại của bạn là ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Giới thiệu php phiên bản là 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Chế độ tương thích ngược Php được bật. Thiết lập zend.ze1_compatibility_mode tắt để tiến xa hơn',
    'LBL_STREAM' => 'Cho phép sử dụng stream trong PHP',

    'advanced_password_new_account_email' => array(
        'subject' => 'Thông tin tài khoản mới',
        'type' => 'hệ thống',
        'description' => 'Mẫu này dành cho quản trị viên hệ thống dùng để gửi mật khẩu mới cho người dùng.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Đây là tên tài khoản của bạn và mật khẩu tạm thời:</p><p>Tên đăng nhập: $contact_user_user_name </p><p>Mật khẩu: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Sau khi bạn đăng nhập bằng cách sử dụng mật khẩu ở trên, bạn có thể phải đặt lại mật khẩu thành một lựa chọn riêng của bạn.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Đây là tài khoản và mật khẩu tạm thời:
Tài khoản : $contact_user_user_name
Mật khẩu : $contact_user_user_hash

$config_site_url

Sau khi đăng nhập bằng mật khẩu tạm thời ở trên, bạn được yêu cầu thay đổi mật khẩu mới.',
        'name' => 'Email hệ thống tạo mật khẩu',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Đặt lại mật khẩu tài khoản của bạn',
        'type' => 'hệ thống',
        'description' => "Mẫu này được sử dụng gửi cho người dùng một đường dẫn để reset mật khẩu.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Bạn mới yêu cầu cho $contact_user_pwd_last_changed để có thể đặt lại mật khẩu tài khoản của bạn. </p><p>Nhấp vào liên kết dưới đây để đặt lại mật khẩu:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Gần đây bạn đã yêu cầu $contact_user_pwd_last_changed để có thể reset mật khẩu tài khoản của bạn.

Nhấp vào đường dẫn phía dưới để reset mật khẩu:

$contact_user_link_guid',
        'name' => 'Quên mật khẩu Email',
    ),
    
    
    'two_factor_auth_email' => array(
        'subject' => 'Mã bảo mật 2 lớp',
        'type' => 'hệ thống',
        'description' => "Mẫu này được sử dụng để gửi người dùng một mã bảo mật 2 lớp.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Mã xác thực 2 lớp  <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Mã xác thực 2 lớp là $code.',
        'name' => 'Email xác thực 2 lớp',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Từ" tên:',
    'LBL_FROM_ADDR' => '"Từ" địa chỉ:',

    'LBL_WIZARD_SMTP_DESC' => 'Cung cấp tài khoản email sẽ được sử dụng để gửi email, chẳng hạn như thông báo chuyển nhượng và mật khẩu người dùng mới. Người dùng sẽ nhận được email từ SuiteCRM, như được gửi từ tài khoản email được chỉ định.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Chọn nhà cung cấp Email của bạn:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Khác',
    'LBL_MAIL_SMTP_SETTINGS' => 'Thông số máy chủ SMTP',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Sử dụng xác thực SMTP không?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Kích hoạt SMTP qua SSL hoặc TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Địa chỉ Email Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Mật khẩu Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Cho phép người dùng sử dụng tài khoản này cho email gửi đi:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Khi chọn tùy chọn này, tất cả người dùng sẽ có thể gửi email sử dụng cùng một tài khoản mail để gửi thông báo và cảnh báo hệ thống. Nếu tùy chọn không được chọn, người dùng vẫn có thể sử dụng máy chủ email sau khi cung cấp thông tin tài khoản của riêng họ.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Mật khẩu Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Thay đổi mật khẩu:',
    'LBL_EXCHANGE_SMTPUSER' => 'Thay đổi tên đăng nhập:',
    'LBL_EXCHANGE_SMTPPORT' => 'Thay đổi port server:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Thay đổi server:',


    'LBL_MAIL_SMTPUSER' => 'Tên người dùng SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Mật khẩu SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Xây dựng thương hiệu',
    'LBL_WIZARD_SYSTEM_DESC' => 'Cung cấp tên và biểu tượng của tổ chức bạn để gắn thương hiệu SuiteCRM của bạn.',
    'SYSTEM_NAME_WIZARD' => 'Tên:',
    'SYSTEM_NAME_HELP' => 'Đây là tên hiển thị trên thanh tiêu đề của trình duyệt của bạn.',
    'NEW_LOGO' => 'Chọn biểu tượng:',
    'NEW_LOGO_HELP' => 'Định dạng tập tin hình ảnh có thể là .png hoặc .jpg. Chiều cao tối đa là 170px, và chiều rộng tối đa là 450px. Bất kỳ hình ảnh nào được tải lên mà lớn hơn kích thước tối đa cho phép sẽ được thu nhỏ lại theo mặc định.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Tải lên',
    'CURRENT_LOGO' => 'Logo hiện tại:',
    'CURRENT_LOGO_HELP' => 'Biểu tượng này sẽ được hiển thị ở góc bên trái phía dưới của các ứng dụng SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Lựa chọn kịch bản',
    'LBL_WIZARD_SCENARIO_DESC' => 'Điều này cho phép thiết kế riêng của các mô-đun được hiển thị dựa trên yêu cầu của bạn. Mỗi mô-đun có thể được kích hoạt sau khi cài đặt bằng cách sử dụng trang quản trị.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Không có kịch bản hiện đang được thiết lập trong tập tin cấu hình (config.php)',



    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Thiết lập hệ thống miền địa phương',
    'LBL_WIZARD_LOCALE_DESC' => 'Chỉ định cách bạn muốn dữ liệu trong SuiteCRM được hiển thị, dựa trên vị trí địa lý của bạn. Cài đặt bạn cung cấp ở đây sẽ là cài đặt mặc định. Người dùng sẽ có thể thiết lập sở thích riêng của họ.',
    'LBL_DATE_FORMAT' => 'Định dạng ngày:',
    'LBL_TIME_FORMAT' => 'Định dạng thời gian:',
    'LBL_TIMEZONE' => 'Múi giờ:',
    'LBL_LANGUAGE' => 'Ngôn ngữ:',
    'LBL_CURRENCY' => 'Tiền tệ:',
    'LBL_CURRENCY_SYMBOL' => 'Biểu tượng loại tiền:',
    'LBL_CURRENCY_ISO4217' => 'Mã tiền tệ ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'phân tách 1000s:',
    'LBL_DECIMAL_SEP' => 'Biểu tượng thập phân:',
    'LBL_NAME_FORMAT' => 'Định dạng tên:',
    'UPLOAD_LOGO' => 'Xin vui lòng chờ, Logo đang tải lên..',
    'ERR_UPLOAD_FILETYPE' => 'Kiểu File không cho phép, xin vui lòng tải lên jpeg hoặc png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Đã xảy ra lỗi tải lên tệp không xác định.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Các tập tin đã tải lên vượt quá chỉ thị upload_max_filesize trong php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Các tập tin đã tải lên vượt quá chỉ thị MAX_FILE_SIZE đã được chỉ định trong các hình thức HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Tập tin tải lên được một phần.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Không có tập tin được tải lên.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Thiếu một thư mục tạm thời.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Không thể ghi tập tin vào đĩa.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Phần mở rộng của PHP dừng tải lên tập tin. PHP không cung cấp cách để xác định phần mở rộng đã gây ra việc ngăn chặn tập tin tải lên.',

    'LBL_INSTALL_PROCESS' => 'Cài đặt...',

    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email :',
    'ERR_ADMIN_EMAIL' => 'Địa chỉ Email của Quản trị viên không chính xác.',
    'ERR_SITE_URL' => 'URL trang web là bắt buộc.',

    'STAT_CONFIGURATION' => 'Cấu hình mối quan hệ...',
    'STAT_CREATE_DB' => 'Tạo cơ sở dữ liệu...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Tạo thiết đặt mặc định...',
    'STAT_INSTALL_FINISH' => 'Cài đặt kết thúc...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Quá trình cài đặt hoàn tất, <a href="%s"> vui lòng đăng nhập...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Hãy chấp nhận giấy phép trước',

    'LBL_MORE_OPTIONS_TITLE' => 'Tuỳ chọn khác',
    'LBL_START' => 'bắt đầu',
    'LBL_DB_CONN_ERR' => 'Cơ sở dữ liệu lỗi',
    'LBL_OLD_PHP' => 'Phiên bản PHP cũ phát hiện!',
    'LBL_OLD_PHP_MSG' => 'Phiên bản PHP được đề nghị để cài đặt SuiteCRM là %s <br />mặc dù các phiên bản PHP tối thiểu cần thiết là %s, không được khuyến nghị do số lượng lớn các lỗi phát sinh, bao gồm các lỗi bảo mật, phát hành trong các phiên bản hiện đại hơn.<br />Bạn đang sử dụng phiên bản PHP %s, là EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Xin vui lòng xem xét nâng cấp phiên bản PHP của bạn. Hướng dẫn <a href="http://php.net/migration70">http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Tôi biết những rủi ro và muốn tiếp tục.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Người dùng',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Tên cơ sở dữ liệu',
    'LBL_DBCONFIG_MSG3' => 'Tên của cơ sở dữ liệu sẽ chứa dữ liệu cho cá thể SuiteCRM bạn sắp cài đặt.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Tên máy chủ',
    'LBL_DBCONFIG_MSG2' => 'Tên của máy chủ web hoặc tên máy (máy chủ) mà chứa cơ sở dữ liệu (chẳng hạn như www.mydomain.com). Nếu cài đặt ngay trên máy chủ, tốt hơn là sử dụng \'localhost\' thay cho \'127.0.0.1\', vì lý do hiệu suất.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Tên người dùng và mật khẩu của người quản trị cơ sở dữ liệu là người có thể tạo các bảng cơ sở dữ liệu và người dùng và là người có thể ghi vào cơ sở dữ liệu để thiết lập cơ sở dữ liệu SuiteCRM.'
);