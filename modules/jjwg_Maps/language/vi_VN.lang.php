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

$mod_strings['LBL_MAP'] = 'Bản đồ';
$mod_strings['LBL_MODULE_NAME'] = 'Các bản đồ';
$mod_strings['LBL_MODULE_TITLE'] = 'Bảng đồ: Trang chủ';
$mod_strings['LBL_MODULE_ID'] = 'Các bản đồ';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Các bản đồ';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Đánh dấu tùy chỉnh';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Khu vực tùy chỉnh';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Danh sách bản đồ của tôi';

$mod_strings['LBL_FLEX_RELATE'] = 'Liên quan đến (Trung tâm):';
$mod_strings['LBL_MODULE_TYPE'] = 'Kiểu module để hiển thị:';
$mod_strings['LBL_DISTANCE'] = 'Khoảng cách (bán kính):';
$mod_strings['LBL_UNIT_TYPE'] = 'Loại đơn vị:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Màn hình hiển thị bản đồ';
$mod_strings['LBL_MAP_LEGEND'] = 'Chú thích:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Nhóm:';
$mod_strings['LBL_MAP_GROUP'] = 'Nhóm';
$mod_strings['LBL_MAP_TYPE'] = 'Loại';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Giao cho:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Tìm chỉ đường';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Xem Google Maps';

$mod_strings['LNK_NEW_MAP'] = 'Thêm bản đồ mới';
$mod_strings['LNK_NEW_RECORD'] = 'Thêm bản đồ mới';
$mod_strings['LNK_MAP_LIST'] = 'Danh sách bản đồ';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Kiểm tra mã địa lý';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Bản đồ Radius nhanh';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Không có';
$mod_strings['LBL_MAP_ADDRESS'] = 'Địa chỉ';
$mod_strings['LBL_MAP_PROCESS'] = 'Xử lý nó!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Trạng thái Mã địa lý cuối cùng';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Module đếm mã địa lý';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Chức năng';

$mod_strings['LBL_N/A'] = 'Không áp dụng';
$mod_strings['LBL_ZERO_RESULTS'] = 'Không có kết quả';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Yêu cầu không hợp lệ';
$mod_strings['LBL_APPROXIMATE'] = 'Xấp xỉ';
$mod_strings['LBL_EMPTY'] = 'Trống';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Tổng cộng';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Reset';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Bảng hiển thị bên dưới cho thấy số lượng của các mô-đun đối tượng mã hóa địa lý, được nhóm theo mã hóa địa lý đáp ứng. Hãy nhớ rằng giới hạn sử dụng Google Maps tiêu chuẩn là 2500 yêu cầu mỗi ngày. Mô-đun này sẽ lưu trữ thông tin mã hóa địa lý trong quá trình xử lý để giảm tổng số yêu cầu cần thiết.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Để xử lý các yêu cầu mã hóa địa lý, nên thiết lập Cron-Job hàng đêm. Một entry point tùy chỉnh đã được tạo cho mục đích này và có thể được truy cập mà không cần xác thực. URL hiển thị bên dưới có nghĩa là được sử dụng với Tác vụ theo lịch trình quản trị. Xin vui lòng xem tài liệu để biết thêm thông tin.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Xuất các URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Sử dụng các liên kết dưới đây để xuất địa chỉ đầy đủ cần thông tin mã hóa địa lý. Sau đó sử dụng một công cụ mã hóa địa lý trực tuyến hoặc ngoại tuyến để mã hóa các địa chỉ hàng loạt. Khi bạn hoàn thành mã hóa địa lý, hãy nhập địa chỉ vào mô-đun Cache địa chỉ để sử dụng với bản đồ của bạn. Lưu ý, mô-đun Cache địa chỉ là tùy chọn. Tất cả thông tin mã hóa địa lý được lưu trữ trong mô-đun đại diện.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Địa chỉ bộ nhớ Cache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Thêm vào danh sách mục tiêu';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Đang xử lý...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Cài đặt cấu hình';
$mod_strings['LBL_CONFIG_SAVED'] = 'Cài đặt đã lưu thành công!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Địa chỉ thanh toán';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Địa chỉ giao hàng';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Địa chỉ chính';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Địa chỉ thay thế';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex liên quan';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Địa chỉ (Đơn giản, Người sử dụng)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Tùy chỉnh (Tùy chỉnh Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Kích hoạt';
$mod_strings['LBL_DISABLED'] = 'Vô hiệu hóa';
$mod_strings['LBL_DEFAULT'] = 'Mặc định:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Mặc định:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Các module mã địa lý hợp lệ:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Các bảng mã địa lý hợp lệ:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Cài đặt Loại Địa chỉ: Định nghĩa các loại địa chỉ của module được sử dụng khi địa chỉ mã hóa địa lý. Giá trị chấp nhận được: 'thanh toán'; 'đang chuyển hàng'; 'sơ cấp'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Kiểu địa chỉ cho ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Kiểu địa chỉ của Khách hàng:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Kiểu địa chỉ của Danh bạ:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Kiểu địa chỉ của Đầu mối:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Kiểu địa chỉ cho Cơ hội:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(liên quan đến Khách Hàng)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Kiểu địa chỉ của Tình huống:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Kiểu địa chỉ của Dự án:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(liên quán đến Khách hàng/Cơ hội)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Kiểu địa chỉ của Cuộc họp:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Kiểu địa chỉ của Triển vọng/Mục Tiêu:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Đối tượng liên quan qua các trường liên quan đến Flex';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Cài đặt Trường Nhóm Nhãn: Định nghĩa 'trường' này sẽ được sử dụng làm tham số nhóm khi hiển thị các điểm đánh dấu trên bản đồ. Ví dụ: assign_user_name, ngành, trạng thái, sales_stage, mức độ ưu tiên";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Nhóm trường cho ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Nhóm trường cho Khách hàng:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Nhóm trường cho Liên hệ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Nhóm trường cho Đầu mối:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Nhóm trường cho Cơ hội:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Nhóm trường cho Tình huống:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Nhóm trường cho Dự Án:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Nhóm trường cho Cuộc họp:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Nhóm trường cho Triển vọng/Cơ hội:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Cài đặt địa lý/Cài đặt Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL địa lý API:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL của API mã hoá địa lý Google Maps hoặc Proxy'; // PR 3290
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Cụm từ bí mật cho Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Cụm từ bí mật sẽ được sử dụng với so sánh Proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_GET_A_KEY'] = 'Nhận chìa khóa API Google mã địa lý miễn phí (để mã hoá địa lý một lượng địa chỉ một ngày miễn phí).'; // PR 3290
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Giới hạn địa lý:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' đặt giới hạn truy vấn khi chọn bản ghi để mã hoá địa lý.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Giới hạn địa lý của Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' thiết lập giới hạn yêu cầu khi mã hóa địa lý sử dụng API Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Giới hạn địa chỉ xuất:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' đặt giới hạn truy vấn khi chọn các bản ghi để xuất.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Cho phép kiểu địa điểm 'APPROXIMATE':";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - cho phép các loại địa điểm của 'APPROXIMATE' được coi là kết quả mã hoá 'OK'.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Địa chỉ Thiết lập Cache:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Kích hoạt Địa chỉ Cache (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' cho phép địa chỉ module Cache để hồi phục dữ liệu từ bảng bộ nhớ cache.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Bật lưu địa chỉ Cache (Lưu):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' cho phép địa chỉ bộ nhớ cache lưu dữ liệu vào bảng bộ nhớ cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Thiết lập Logic Hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Bật tất cả Logic Hooks: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' cho phép logic hooks để tự động cập nhật dựa trên các đối tượng liên quan. Bạn nên vô hiệu hóa khi nâng cấp SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Cài đặt Đánh dấu /Lập bản đồ:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Giới hạn điểm đánh dấu trên bản đồ:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' đặt giới hạn truy vấn khi chọn bản ghi để hiển thị trên bản đồ.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Vĩ độ trung tâp mặt định của bản đồ:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' đặt vị trí trung tâm mặc định cho bản đồ.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Kinh độ trung tâm mặc định của bản đồ:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' đặt vị trí trung tâm mặc định cho bản đồ.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Kiểu đơn vị mặc định bản đồ:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' đặt đơn vị đo lường mặc định cho các phép tính khoảng cách. Các giá trị: 'mi' (dặm) hoặc 'km' (km).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Bản đồ khoảng cách mặc định:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' thiết lập khoảng cách mặc định được sử dụng cho khoảng cách dựa trên bản đồ.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Bản đồ trùng lặp người đánh dấu điều chỉnh:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' đặt một điều chỉnh bù đắp được thêm vào kinh độ và vĩ độ trong trường hợp điểm đánh dấu trùng lặp.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Bản đồ đánh dấu Clusterer lưới Size:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' được sử dụng để thiết lập kích thước lưới để tính toán các Clusterers bản đồ.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Bản đồ đánh dấu Clusterer Max Zoom:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' được sử dụng để thiết lập mức thu phóng tối đa mà tại đó clustering sẽ không được áp dụng.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Quan trọng Lưu ý: Tất cả các cài đặt đã lưu có thể được tìm thấy trong bảng 'config' trong mục 'jjwg'. Lưu ý, một tệp tin custom.php không nên được sử dụng để ghi đè cài đặt.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Khu vực';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Người đánh dấu';
$mod_strings['LBL_PARENT_ID'] = 'Nhóm cha';
$mod_strings['LBL_JJWP_PARTNERS'] = 'Đối tác JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Đăng kí khóa';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Khóa Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Xin vui lòng thiết lập khóa Api của Google trong bảng điều khiển Google bản đồ hành chính.';