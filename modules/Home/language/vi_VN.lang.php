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
    'LBL_MODULE_NAME' => 'Trang chủ',
    'LBL_NEW_FORM_TITLE' => 'Liên hệ mới',
    'LBL_FIRST_NAME' => 'Tên:',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_LIST_LAST_NAME' => 'Họ',
    'LBL_PHONE' => 'ĐT:',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Biểu đồ Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'hành trình bởi giai đoạn',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'hành trình bởi giai đoạn',
    'LNK_NEW_CONTACT' => 'Tạo liên hệ',
    'LNK_NEW_ACCOUNT' => 'tạo tài khoản',
    'LNK_NEW_OPPORTUNITY' => 'tạo cơ hội',
    'LNK_NEW_LEAD' => 'Tạo KH tiềm năng',
    'LNK_NEW_CASE' => 'tạo kịch bản',
    'LNK_NEW_NOTE' => 'Tạo ghi chú hoặc đính kèm',
    'LNK_NEW_CALL' => 'Nhật ký cuộc gọi',
    'LNK_NEW_EMAIL' => 'Lưu trữ Email',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_TASK' => 'Tạo công việc',
    'LNK_NEW_BUG' => 'Báo cáo Lỗi',
    'LBL_ADD_BUSINESSCARD' => 'Nhập Business Card',
    'LNK_NEW_SEND_EMAIL' => 'Soạn email',
    'LBL_NO_ACCESS' => 'Bạn không có quyền truy cập vào khu vực này. Liên hệ với quản trị trang web của bạn để có được quyền truy cập',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Không có kết quả --',
    'LBL_NO_RESULTS' => '<h2>Không tìm thấy kết quả. Xin vui lòng tìm kiếm lại.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Mẹo tìm kiếm:</h3><ul><li>Đảm bảo bạn có các danh mục phù hợp được chọn ở trên.</li><li>Mở rộng các tiêu chí tìm kiếm của bạn.</li><li>Nếu bạn vẫn không thể tìm thấy bất kỳ kết quả nào hãy thử tùy chọn tìm kiếm nâng cao.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Thêm SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Trang web',
    'LBL_RSS_TITLE' => 'Tin mới',
    'LBL_CLOSE_DASHLETS' => 'Đóng',
    'LBL_OPTIONS' => 'Tùy chọn',
    // dashlet search fields
    'LBL_TODAY' => 'Xem Lịch',
    'LBL_YESTERDAY' => 'Hôm qua',
    'LBL_TOMORROW' => 'Ngày mai',
    'LBL_NEXT_WEEK' => 'Tuần tới',
    'LBL_LAST_7_DAYS' => '7 ngày trước',
    'LBL_NEXT_7_DAYS' => '7 ngày tới',
    'LBL_LAST_MONTH' => 'Tháng trước',
    'LBL_NEXT_MONTH' => 'Tháng tới',
    'LBL_LAST_YEAR' => 'Năm trước',
    'LBL_NEXT_YEAR' => 'Năm tới',
    'LBL_LAST_30_DAYS' => '30 ngày trước',
    'LBL_NEXT_30_DAYS' => '30 ngày tới',
    'LBL_THIS_MONTH' => 'Tháng này',
    'LBL_THIS_YEAR' => 'Năm nay',

    'LBL_MODULES' => 'Mô-đun',
    'LBL_CHARTS' => 'Biểu đồ',
    'LBL_TOOLS' => 'Công cụ',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Kết quả tìm kiếm',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Xem Module',
        'Portal' => 'Cổng thông tin',
        'Charts' => 'Biểu đồ',
        'Tools' => 'Công cụ',
        'Miscellaneous' => 'Linh tinh'
    ),
    'LBL_ADDING_DASHLET' => 'Thêm SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet thêm',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Bạn có chắc bạn muốn loại bỏ này SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Loại bỏ các SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Tổng quan',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Sàng lọc',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Chỉ mẫu của tôi',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tiêu đề',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Các dòng hiển thị',

    'LBL_DASHLET_DELETE' => 'Xóa SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Làm mới SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Chỉnh sửa SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Đóng',

    'LBL_SEARCH' => 'Tìm',
    'LBL_CLEAR' => 'Xóa',

    'LBL_BASIC_CHARTS' => 'Biểu đồ cơ bản',

    'LBL_DASHLET_SEARCH' => 'Tìm SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Phiên bản',
    'LBL_BUILD' => 'Đóng gói',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - nhà cung cấp CE framework',

    'LBL_DASHLET_TITLE' => 'trang của tôi',
    'LBL_DASHLET_OPT_TITLE' => 'Tiêu đề',
    'LBL_DASHLET_INCORRECT_URL' => 'Trang web không đúng vị trí được chỉ định',
    'LBL_DASHLET_OPT_URL' => 'Vị trí trang web',
    'LBL_DASHLET_OPT_HEIGHT' => 'Chiều cao Dashlet (theo điểm ảnh)',
    'LBL_DASHLET_SUGAR_NEWS' => 'Tin tức SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Khám phá SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Lọc nhanh' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Bộ lọc nâng cao' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Biểu tượng trang chủ',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Nhanh chóng quay về trang tổng quan của trang chủ trong một cú nhấp chuột.',
    'LBL_TOUR_MODULES' => 'Mô-đun',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Tất cả các module quan trọng của bạn đang ở đây.',
    'LBL_TOUR_MORE' => 'Thêm các module',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Phần còn lại của các module của bạn đang ở đây.',
    'LBL_TOUR_SEARCH' => 'Tìm kiếm văn bản đầy đủ',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Tìm kiếm chỉ để nhận được thao tác tốt hơn.',
    'LBL_TOUR_NOTIFICATIONS' => 'Chú ý',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Thông báo ứng dụng SuiteCRM sẽ xuất hiện ở đây.',
    'LBL_TOUR_PROFILE' => 'Hồ sơ',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Truy cập hồ sơ, cài đặt và đăng xuất.',
    'LBL_TOUR_QUICKCREATE' => 'Tạo nhanh',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Nhanh chóng tạo hồ sơ mà không làm mất vị trí của bạn.',
    'LBL_TOUR_FOOTER' => 'Nối lại trang cuối',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Dễ dàng mở rộng và thu gọn cuối trang.',
    'LBL_TOUR_CUSTOM' => 'Tuỳ chỉnh Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Tuỳ chỉnh tích hợp sẽ đi đến đây.',
    'LBL_TOUR_BRAND' => 'Thương hiệu của bạn',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Logo của bạn đi ở đây. Bạn có thể di chuột qua để xem thêm thông tin.',
    'LBL_TOUR_WELCOME' => 'Chào mừng đến với SuiteCRM',
    'LBL_TOUR_WATCH' => 'Xem những gì tính năng mới trong SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Thanh điều hướng đơn giản mới</li><li class="icon-ok">Chân trang đóng lại mới</li><li class="icon-ok"> Cải tiến tìm kiếm</li><li class="icon-ok">Trình đơn tác vụ đã cập nhật</li></ul> <p>và nhiều hơn nữa!</p>',
    'LBL_TOUR_VISIT' => 'Để biết thêm thông tin hãy truy cập ứng dụng của chúng tôi',
    'LBL_TOUR_DONE' => 'Bạn đã hoàn tất!',
    'LBL_TOUR_REFERENCE_1' => 'Bạn có thể luôn luôn tham khảo từ chúng tôi',
    'LBL_TOUR_REFERENCE_2' => 'thông qua các liên kết "Hỗ trợ" trong tab hồ sơ.',
    'LNK_TOUR_DOCUMENTATION' => 'tài liệu hướng dẫn',
    'LBL_TOUR_CALENDAR_URL_1' => 'Bạn có chia sẻ lịch của SuiteCRM với các ứng dụng bên thứ ba, chẳng hạn như Microsoft Outlook hoặc Exchange? Nếu vậy, bạn có một URL mới. URL này an toàn hơn bao gồm khóa cá nhân sẽ ngăn việc xuất bản trái phép lịch của bạn.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Truy xuất lịch URL được chia sẻ mới của bạn.',
    'LBL_CONTRIBUTORS' => 'Những người đóng góp',
    'LBL_ABOUT_SUITE' => 'Về SuiteCRM',
    'LBL_PARTNERS' => 'Đối tác',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE và Định lại các module theo SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - mã nguồn mở CRM cho thế giới',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite bởi Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps bởi Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO cung cấp bởi các giải pháp có ý thức',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Đóng góp để SuiteCRM 7.3 phát hành bởi ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Các trường tính toán của Workflow được đóng góp bởi diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Về bản dịch SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Bản dịch hợp tác của cộng đồng SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Bản dịch được tạo bằng Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM được xuất bản theo một giấy phép mã nguồn mở - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Tất cả các mã SuiteCRM quản lý và phát triển bởi dự án sẽ được phát hành mã nguồn mở - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Hỗ trợ SuiteCRM có sẵn trong cả hai lựa chọn miễn phí và trả tiền',

    'LBL_SUITE_PARTNERS' => 'Chúng tôi có đối tác trung thành với SuiteCRM, những người luôn say mê về mã nguồn mở. Để xem danh sách đối tác đầy đủ của chúng tôi, hãy xem trang web của chúng tôi.',

    'LBL_SAVE_BUTTON' => 'Lưu',
    'LBL_DELETE_BUTTON' => 'Xóa',
    'LBL_APPLY_BUTTON' => 'Áp dụng',
    'LBL_SEND_INVITES' => 'Gửi thư mời',
    'LBL_CANCEL_BUTTON' => 'Hủy',
    'LBL_CLOSE_BUTTON' => 'Đóng',

    'LBL_CREATE_NEW_RECORD' => 'Tạo hoạt động',
    'LBL_CREATE_CALL' => 'Log Cuộc gọi',
    'LBL_CREATE_MEETING' => 'Lịch họp',

    'LBL_GENERAL_TAB' => 'Chi tiết',
    'LBL_PARTICIPANTS_TAB' => 'Người được mời',
    'LBL_REPEAT_TAB' => 'Tái phát',

    'LBL_REPEAT_TYPE' => 'Lặp lại',
    'LBL_REPEAT_INTERVAL' => 'Mỗi',
    'LBL_REPEAT_END' => 'Kết thúc',
    'LBL_REPEAT_END_AFTER' => 'Sau',
    'LBL_REPEAT_OCCURRENCES' => 'tái phát',
    'LBL_REPEAT_END_BY' => 'Bởi',
    'LBL_REPEAT_DOW' => 'Trên',
    'LBL_REPEAT_UNTIL' => 'Lặp lại cho đến khi',
    'LBL_REPEAT_COUNT' => 'Số lượng các tái phát',
    'LBL_REPEAT_LIMIT_ERROR' => 'Yêu cầu của bạn sẽ tạo ra nhiều hơn cuộc họp $limit.',

    //Events PR 5641
    'LNK_EVENT' => 'Sự kiện',
    'LNK_EVENT_VIEW' => 'Xem sự kiện',
    'LBL_DATE' => 'Ngày: ',
    'LBL_DURATION' => 'Khoảng thời gian: ',
    'LBL_NAME' => 'Tiêu đề: ',
    'LBL_HOUR_ABBREV' => 'giờ',
    'LBL_HOURS_ABBREV' => 'giờ',
    'LBL_MINSS_ABBREV' => 'phút',
    'LBL_LOCATION' => 'Địa điểm: ',
    'LBL_STATUS' => 'Trạng thái: ',
    'LBL_DESCRIPTION' => 'Mô tả: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Có lỗi xảy ra khi thực hiện tìm kiếm. Cú pháp truy vấn của bạn không hợp lệ.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Không thể tìm thấy Bộ máy tìm kiếm được yêu cầu. Hãy thử thực hiện tìm kiếm một lần nữa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Kết nối tới máy chủ Elastic Search thất bại.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Đã xảy ra lỗi nội bộ đối với Tìm kiếm.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Một lỗi không xác định đã xảy ra trong khi thực hiện tìm kiếm.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Liên hệ với quản trị viên nếu vấn đề vẫn còn. Thông tin thêm có sẵn trong logs.',
);