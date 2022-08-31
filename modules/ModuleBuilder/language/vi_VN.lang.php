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
    'LBL_LOADING' => 'Đang tải' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ẩn tùy chọn' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Xóa' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Cung cấp <b>Tên</b> cho gói. Tên bạn nhập phải là chữ và số và không chứa dấu cách. (Ví dụ: HR_Management) <br/><br/> Bạn có thể cung cấp thông tin <b>Tác giả</b> và <b>Mô tả</b> cho gói. <br/><br/>Nhấp vào <b>Lưu</b> để tạo gói.',
            'modify' => 'Các thuộc tính và hành động có thể có cho <b>Gói</b> xuất hiện ở đây. <br><br>Bạn có thể sửa đổi <b>Tên</b>, <b>Tác giả</b> và <b>Mô tả</b> của gói, cũng như xem và tùy chỉnh tất cả các mô-đun có trong gói. <br><br>Nhấp vào <b>Mô-đun mới</b> để tạo mô-đun cho gói. <br><br>Nếu gói chứa ít nhất một mô-đun, bạn có thể <b>Xuất bản</b> và <b>Triển khai</b> gói, cũng như <b>Xuất</b> các tùy chỉnh được thực hiện trong gói.',
            'name' => 'Đây là <b>Tên</b> của gói hiện tại. <br/><br/>Tên bạn nhập phải là chữ và số, bắt đầu bằng một chữ cái và không chứa khoảng trắng. (Ví dụ: HR_Management)',
            'author' => 'Đây là <b>Tác giả</b> được hiển thị trong khi cài đặt dưới dạng tên của thực thể đã tạo gói. <br><br>Tác giả có thể là một cá nhân hoặc một công ty.',
            'description' => 'Đây là <b>Mô tả</b> của gói được hiển thị trong khi cài đặt.',
            'publishbtn' => 'Nhấp vào <b>Xuất bản</b> để lưu tất cả dữ liệu đã nhập và để tạo tệp .zip là phiên bản có thể cài đặt của gói. <br><br>Sử dụng <b>Trình tải mô-đun</b> để tải lên tập tin .zip và cài đặt gói.',
            'deploybtn' => 'Nhấp vào <b>Triển khai</b> để lưu tất cả dữ liệu đã nhập và để cài đặt gói, bao gồm tất cả các mô-đun, trong trường hợp hiện tại.',
            'duplicatebtn' => 'Nhấp vào <b>Nhân đôi</b> để sao chép nội dung của gói vào gói mới và để hiển thị gói mới. <br/><br/>Đối với gói mới, một tên mới sẽ được tạo tự động bằng cách thêm một số vào cuối tên của gói được sử dụng để tạo tên mới. Bạn có thể đổi tên gói mới bằng cách nhập <b>Tên</b> mới và nhấp vào <b>Lưu</b>.',
            'exportbtn' => 'Nhấp vào <b>Xuất</b> để tạo tệp .zip chứa các tùy chỉnh được thực hiện trong gói. <br><br>Tệp được tạo không phải là phiên bản có thể cài đặt của gói. <br><br>Sử dụng <b>Trình tải mô-đun</b> để nhập tệp .zip và để có gói, bao gồm các tùy chỉnh, xuất hiện trong Trình tạo mô-đun.',
            'deletebtn' => 'Nhấp vào <b>Xóa</b> để xóa gói này và tất cả các tệp liên quan đến gói này.',
            'savebtn' => 'Nhấp vào <b>Lưu</b> để lưu tất cả dữ liệu đã nhập liên quan đến gói.',
            'existing_module' => 'Nhấp vào biểu tượng <b>Mô-đun</b> để chỉnh sửa các thuộc tính và tùy chỉnh các trường, mối quan hệ và bố cục được liên kết với mô-đun.',
            'new_module' => 'Nhấp vào <b>Mô-đun mới</b> để tạo mô-đun mới cho gói này.',
            'key' => '<b>Khóa</b> 5 chữ cái, chữ số sẽ được sử dụng làm tiền tố tất cả các thư mục, tên lớp và bảng cơ sở dữ liệu cho tất cả các mô-đun trong gói hiện tại. <br><br>Khóa được sử dụng trong nỗ lực để đạt được tính duy nhất của tên bảng.',
            'readme' => 'Nhấp để thêm văn bản <b>Hướng dẫn</b> cho gói này. <br><br>Hướng dẫn sẽ có sẵn tại thời điểm cài đặt.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Cung cấp <b>Tên</b> cho mô-đun. <b>Nhãn</b> mà bạn cung cấp sẽ xuất hiện trong tab điều hướng. <br/><br/> Chọn hiển thị tab điều hướng cho mô-đun bằng cách chọn hộp kiểm <b>Tab điều hướng</b>. <br/><br/>Sau đó chọn loại mô-đun bạn muốn tạo. <br/><br/>Chọn loại mẫu. Mỗi mẫu chứa một tập hợp các trường cụ thể, cũng như bố cục được xác định trước, để sử dụng làm mô-đun cơ bản của bạn. <br/><br/>Nhấp vào <b>Lưu</b> để tạo mô-đun.',
            'modify' => 'Bạn có thể thay đổi các thuộc tính mô-đun hoặc tùy chỉnh <b>Trường</b>, <b>Mối quan hệ</b> và <b>Bố cục</b> liên quan đến mô-đun.',
            'importable' => 'Chọn hộp kiểm <b>Cho phép nhập</b> sẽ cho phép nhập cho mô-đun này. <br><br>Liên kết đến Trình hướng dẫn nhập sẽ xuất hiện trong bảng Phím tắt trong mô-đun. Trình hướng dẫn Nhập khẩu tạo điều kiện nhập dữ liệu từ các nguồn bên ngoài vào mô-đun tùy chỉnh.',
            'team_security' => 'Chọn hộp kiểm <b>Bảo mật nhóm</b> sẽ cho phép bảo mật nhóm cho mô-đun này. <br/><br/>Nếu bật bảo mật nhóm, trường chọn Nhóm sẽ xuất hiện trong các bản ghi trong mô-đun ',
            'reportable' => 'Chọn hộp này sẽ cho phép mô-đun này có báo cáo chạy với nó.',
            'assignable' => 'Chọn hộp này sẽ cho phép một bản ghi trong mô-đun này được gán cho người dùng đã chọn.',
            'has_tab' => 'Kiểm tra <b>Tab điều hướng</b> sẽ cung cấp tab điều hướng cho mô-đun.',
            'acl' => 'Chọn hộp này sẽ bật Kiểm soát truy cập trên mô-đun này, bao gồm Bảo mật dữ liệu theo cấp độ trường.',
            'studio' => 'Chọn hộp này sẽ cho phép quản trị viên tùy chỉnh mô-đun này trong Studio.',
            'audit' => 'Chọn hộp này sẽ bật Kiểm tra cho mô-đun này. Thay đổi đối với các trường nhất định sẽ được ghi lại để quản trị viên có thể xem lại lịch sử thay đổi.',
            'viewfieldsbtn' => 'Nhấp vào <b>Xem trường</b> để xem các trường được liên kết với mô-đun và để tạo và chỉnh sửa các trường tùy chỉnh.',
            'viewrelsbtn' => 'Nhấp vào <b>Xem mối quan hệ</b> để xem các mối quan hệ được liên kết với mô-đun này và để tạo mối quan hệ mới.',
            'viewlayoutsbtn' => 'Nhấp vào <b>Xem bố cục</b> để xem bố cục cho mô-đun và để tùy chỉnh sắp xếp trường trong bố cục.',
            'duplicatebtn' => 'Nhấp vào <b>Nhân đôi</b> để sao chép các thuộc tính của mô-đun vào mô-đun mới và để hiển thị mô-đun mới. <br/><br/>Đối với mô-đun mới, một tên mới sẽ được tạo tự động bằng cách nối thêm một số vào cuối tên của mô-đun được sử dụng để tạo tên mới.',
            'deletebtn' => 'Nhấp vào <b>Xóa</b> để xóa Module này.',
            'name' => 'Đây là <b>Tên</b> của mô-đun hiện tại. <br/><br/>Tên phải là chữ và số và phải bắt đầu bằng một chữ cái và không chứa khoảng trắng. (Ví dụ: HR_Management)',
            'label' => 'Đây là <b>Nhãn</b> sẽ xuất hiện trong tab điều hướng cho mô-đun. ',
            'savebtn' => 'Nhấp vào <b>Lưu</b> để lưu tất cả dữ liệu đã nhập liên quan đến mô-đun.',
            'type_basic' => 'Loại mẫu <b>Basic</b> cung cấp các trường cơ bản, chẳng hạn như các trường Tên, Được giao cho, Nhóm, Ngày tạo và Mô tả.',
            'type_company' => 'Loại mẫu <b>Company</b> cung cấp các trường dành riêng cho tổ chức, chẳng hạn như Tên công ty, Ngành nghề và Địa chỉ thanh toán. <br/><br/>Sử dụng mẫu này để tạo các mô-đun tương tự như mô-đun Khách hàng tiêu chuẩn.',
            'type_issue' => 'Loại mẫu <b>Issue</b> cung cấp các trường cụ thể theo vụ việc và lỗi cụ thể, chẳng hạn như Số, Trạng thái, Ưu tiên và Mô tả. <br/><br/>Sử dụng mẫu này để tạo các mô-đun tương tự như các mô-đun vụ việc và lỗi tiêu chuẩn.',
            'type_person' => 'Loại mẫu <b>Person</b> cung cấp các trường cụ thể cho từng cá nhân, chẳng hạn như Tính toán, Tiêu đề, Tên, Địa chỉ và Số điện thoại. <br/><br/>Sử dụng mẫu này để tạo các mô-đun tương tự như Liên hệ và Khách hàng tiềm năng mô-đun tiêu chuẩn.',
            'type_sale' => 'Loại mẫu <b>Sale</b> cung cấp các trường cụ thể về cơ hội, chẳng hạn như Nguồn khách hàng tiềm năng, Giai đoạn, Số tiền và Xác suất. <br/><br/> Sử dụng mẫu này để tạo các mô-đun tương tự như mô-đun Cơ hội tiêu chuẩn.',
            'type_file' => 'Loại mẫu <b>File</b> cung cấp các trường cụ thể của Tài liệu, như Tên tệp, loại tài liệu và Ngày xuất bản. <br><br> Sử dụng mẫu này để tạo các mô-đun tương tự như mô-đun Tài liệu tiêu chuẩn.',

        ),
        'dropdowns' => array(
            'default' => 'Tất cả <b>Danh sách thả xuống</b> cho ứng dụng được liệt kê ở đây. <br><br>Có thể sử dụng danh sách thả xuống cho các trường thả xuống trong bất kỳ mô-đun nào. <br><br> Để thay đổi đối với danh sách thả xuống hiện có, nhấp vào tên thả xuống. <br><br>Nhấp vào <b>Thêm thả xuống</b> để tạo danh sách thả xuống mới.',
            'editdropdown' => 'Danh sách thả xuống có thể được sử dụng cho các trường thả xuống tiêu chuẩn hoặc tùy chỉnh trong bất kỳ mô-đun nào. <br><br>Cung cấp <b>Tên</b> cho danh sách thả xuống. <br><br> Nếu bất kỳ gói ngôn ngữ nào được cài đặt trong ứng dụng, bạn có thể chọn <b>Ngôn ngữ</b> để sử dụng cho các mục danh sách. <br><br>Trong trường <b>Tên mục</b>, cung cấp tên cho tùy chọn trong danh sách thả xuống. Tên này sẽ không xuất hiện trong danh sách thả xuống hiển thị cho người dùng. <br><br>Trong trường <b>Nhãn hiển thị</b>, cung cấp nhãn sẽ hiển thị cho người dùng. <br><br>Sau khi cung cấp tên mục và nhãn hiển thị, nhấp vào <b>Thêm</b> để thêm mục vào danh sách thả xuống. <br><br>Để sắp xếp lại các mục trong danh sách, kéo và thả các mục vào vị trí mong muốn. <br><br>Để chỉnh sửa nhãn hiển thị của một mục, nhấp vào biểu tượng <b>Chỉnh sửa</b> và nhập nhãn mới. Để xóa một mục khỏi danh sách thả xuống, hãy nhấp vào biểu tượng <b>Xóa</b>. <br><br>Để hoàn tác thay đổi được thực hiện cho nhãn hiển thị, nhấp vào <b>Hoàn tác</b>. Để làm lại một thay đổi đã được hoàn tác, hãy nhấp vào <b>Làm lại</b>. <br><br>Nhấp vào <b>Lưu</b> để lưu danh sách thả xuống.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Tất cả các trường có thể được hiển thị trong <b>Subpanel</b> xuất hiện ở đây. <br><br>Cột <b>Mặc định</b> chứa các trường được hiển thị trong Subpanel. <br/><br/>Cột <b>Ẩn</b> chứa các trường có thể được thêm vào cột Mặc định.'
        ,
            'savebtn' => 'Nhấp vào <b>Lưu & Triển khai</b> để lưu các thay đổi bạn đã thực hiện và để chúng hoạt động trong mô-đun.',
            'historyBtn' => 'Nhấp vào <b>Xem lịch sử</b> để xem và khôi phục bố cục đã lưu trước đó từ lịch sử.',
            'historyDefault' => 'Nhấp vào <b>Khôi phục mặc định</b> để khôi phục chế độ xem về bố cục ban đầu.',
            'Hidden' => 'Các trường <b>Ẩn</b> không xuất hiện trong subpanel.',
            'Default' => 'Các trường <b>Mặc định</b> xuất hiện trong subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Tất cả các trường có thể được hiển thị trong <b>ListView</b> xuất hiện ở đây. <br><br>Cột <b>Mặc định</b> chứa các trường được hiển thị trong ListView theo mặc định. <br/><br/>Cột <b>Có sẵn</b> chứa các trường mà người dùng có thể chọn trong Tìm kiếm để tạo ListView tùy chỉnh. <br/><br/>Cột <b>Ẩn</b> chứa các trường có thể được thêm vào cột Mặc định hoặc Có sẵn.'
        ,
            'savebtn' => 'Nhấp vào <b>Lưu & Triển khai</b> để lưu các thay đổi bạn đã thực hiện và để chúng hoạt động trong mô-đun.',
            'historyBtn' => 'Nhấp vào <b>Xem lịch sử</b> để xem và khôi phục bố cục đã lưu trước đó từ lịch sử. <br><br><b>Khôi phục</b> trong <b>Xem lịch sử</b> khôi phục vị trí trường trong bố trí đã lưu trước đó. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'historyDefault' => 'Nhấp vào <b>Khôi phục mặc định</b> để khôi phục chế độ xem về bố cục ban đầu. <br><br><b>Khôi phục mặc định</b> chỉ khôi phục vị trí trường trong bố cục ban đầu. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'Hidden' => 'Các trường <b>Ẩn</b> hiện không có sẵn để người dùng nhìn thấy trong ListViews.',
            'Available' => 'Các trường <b>có sẵn</b> không được hiển thị theo mặc định, nhưng người dùng có thể thêm vào ListViews.',
            'Default' => 'Các trường <b>Mặc định</b> xuất hiện trong ListView không được người dùng tùy chỉnh.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Tất cả các trường có thể được hiển thị trong <b>ListView</b> xuất hiện ở đây. <br><br>Cột <b>Mặc định</b> chứa các trường được hiển thị trong ListView theo mặc định. <br/><br/>Cột <b>Ẩn</b> chứa các trường có thể được thêm vào cột Mặc định hoặc Có sẵn.'
        ,
            'savebtn' => 'Nhấp vào <b>Lưu & Triển khai</b> để lưu các thay đổi bạn đã thực hiện và để chúng hoạt động trong mô-đun.',
            'historyBtn' => 'Nhấp vào <b>Xem lịch sử</b> để xem và khôi phục bố cục đã lưu trước đó từ lịch sử. <br><br><b>Khôi phục</b> trong <b>Xem lịch sử</b> khôi phục vị trí trường trong bố trí đã lưu trước đó. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'historyDefault' => 'Nhấp vào <b>Khôi phục mặc định</b> để khôi phục chế độ xem về bố cục ban đầu. <br><br><b>Khôi phục mặc định</b> chỉ khôi phục vị trí trường trong bố cục ban đầu. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'Hidden' => 'Các trường <b>Ẩn</b> hiện không có sẵn để người dùng nhìn thấy trong ListViews.',
            'Default' => 'Các trường <b>Mặc định</b> xuất hiện trong ListView không được người dùng tùy chỉnh.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Tất cả các trường có thể được hiển thị trong biểu mẫu <b>Bộ lọc</b> xuất hiện ở đây. <br><br>Cột <b>Mặc định</b> chứa các trường sẽ được hiển thị trong biểu mẫu Tìm kiếm. <br/><br/>Cột <b>Ẩn</b> chứa các trường có sẵn cho bạn với tư cách quản trị viên để thêm vào biểu mẫu Tìm kiếm.'
        ,
            'savebtn' => 'Nhấp vào <b>Lưu & Triển khai</b> sẽ lưu tất cả các thay đổi và khiến chúng hoạt động',
            'Hidden' => 'Các trường <b>Ẩn</b> không xuất hiện trong Tìm kiếm.',
            'historyBtn' => 'Nhấp vào <b>Xem lịch sử</b> để xem và khôi phục bố cục đã lưu trước đó từ lịch sử. <br><br><b>Khôi phục</b> trong <b>Xem lịch sử</b> khôi phục vị trí trường trong bố trí đã lưu trước đó. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'historyDefault' => 'Nhấp vào <b>Khôi phục mặc định</b> để khôi phục chế độ xem về bố cục ban đầu. <br><br><b>Khôi phục mặc định</b> chỉ khôi phục vị trí trường trong bố cục ban đầu. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'Default' => 'Các trường <b>Mặc định</b> xuất hiện trong Tìm kiếm.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Vùng <b>Bố cục</b> chứa các trường hiện được hiển thị trong <b>DetailView</b>. <br/><br/><b>Hộp công cụ</b> chứa <b>Thùng rác</b> và các trường và thành phần bố cục có thể được thêm vào bố cục. <br><br>Thay đổi bố cục bằng cách kéo và thả các thành phần và trường giữa <b>Hộp công cụ</b> và <b>Bố cục</b> và trong chính bố cục. <br><br>Để xóa một trường khỏi bố cục, hãy kéo trường vào <b>Thùng rác</b>. Trường sau đó sẽ có sẵn trong Hộp công cụ để thêm vào bố cục.',
            'defaultquickcreate' => 'Vùng <b>Bố cục</b> chứa các trường hiện được hiển thị trong biểu mẫu <b>QuickCreate</b>. <br><br>Biểu mẫu QuickCreate xuất hiện trong các subpanel cho mô-đun khi nút Tạo đã nhấp. <br/><br/><b>Hộp công cụ</b> chứa <b>Thùng rác</b> và các trường và thành phần bố cục có thể được thêm vào bố cục. <br><br>Thay đổi bố cục bằng cách kéo và thả các thành phần và trường giữa <b>Hộp công cụ</b> và <b>Bố cục</b> và trong chính bố cục. <br><br>Để xóa trường khỏi bố trí, kéo trường vào <b>Thùng rác</b>. Trường sau đó sẽ có sẵn trong Hộp công cụ để thêm vào bố cục.',
            //this default will be used for edit view
            'default' => 'Vùng <b>Bố cục</b> chứa các trường hiện được hiển thị trong <b>EditView</b>. <br/><br/><b>Hộp công cụ</b> chứa <b>Thùng rác</b> và các trường và thành phần bố cục có thể được thêm vào bố cục. <br><br>Thay đổi bố cục bằng cách kéo và thả các thành phần và trường giữa <b>Hộp công cụ</b> và <b>Bố cục</b> và trong chính bố cục. <br><br>Để xóa một trường khỏi bố cục, hãy kéo trường vào <b>Thùng rác</b>. Trường sau đó sẽ có sẵn trong Hộp công cụ để thêm vào bố cục.',
            'saveBtn' => 'Nhấp vào <b>Lưu</b> để lưu các thay đổi bạn đã thực hiện cho bố cục kể từ lần cuối bạn lưu nó. <br><br>Các thay đổi sẽ không được hiển thị trong mô-đun cho đến khi bạn Triển khai các thay đổi đã lưu.',
            'historyBtn' => 'Nhấp vào <b>Xem lịch sử</b> để xem và khôi phục bố cục đã lưu trước đó từ lịch sử. <br><br><b>Khôi phục</b> trong <b>Xem lịch sử</b> khôi phục vị trí trường trong bố trí đã lưu trước đó. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'historyDefault' => 'Nhấp vào <b>Khôi phục mặc định</b> để khôi phục chế độ xem về bố cục ban đầu. <br><br><b>Khôi phục mặc định</b> chỉ khôi phục vị trí trường trong bố cục ban đầu. Để thay đổi nhãn trường, nhấp vào biểu tượng Chỉnh sửa bên cạnh mỗi trường.',
            'publishBtn' => 'Nhấp vào <b>Lưu & Triển khai </b> để lưu tất cả các thay đổi bạn đã thực hiện cho bố cục kể từ lần cuối bạn lưu và để các thay đổi được kích hoạt trong mô-đun. <br><br>Bố cục sẽ ngay lập tức được hiển thị trong mô-đun.',
            'toolbox' => '<b>Hộp công cụ</b> chứa <b>Thùng rác</b>, các thành phần bố cục bổ sung và tập hợp các trường có sẵn để thêm vào bố cục. <br/><br/>Các thành phần và trường bố cục trong Hộp công cụ có thể được kéo và thả vào bố cục và các thành phần và trường bố cục có thể được kéo và thả từ bố cục vào Hộp công cụ. <br><br>Các thành phần bố cục là <b>Bảng điều khiển</b> và <b>Hàng</b>. Thêm một hàng mới hoặc bảng điều khiển mới vào bố cục sẽ cung cấp thêm các vị trí trong bố cục cho các trường. <br/><br/>Kéo và thả bất kỳ trường nào trong Hộp công cụ hoặc bố trí vào vị trí trường bị chiếm dụng để hoán đổi vị trí của hai trường. <br/><br/>Trường <b>Filler</b> tạo không gian trống trong bố cục nơi nó được đặt.',
            'panels' => 'Vùng <b>Bố cục</b> cung cấp chế độ xem cách bố trí sẽ xuất hiện trong mô-đun khi các thay đổi được thực hiện cho bố cục được triển khai. <br/><br/>Bạn có thể định vị lại các trường, hàng và bảng điều khiển bằng cách kéo và thả chúng vào vị trí mong muốn. <br/><br/>Xóa các phần tử bằng cách kéo và thả chúng vào <b>Thùng rác</b> trong Hộp công cụ hoặc thêm các phần tử và trường mới bằng cách kéo chúng từ <b>Hộp công cụ</b> và thả chúng vào vị trí mong muốn trong bố cục.',
            'delete' => 'Kéo và thả bất kỳ phần tử nào ở đây để xóa nó khỏi bố cục',
            'property' => 'Chỉnh sửa Nhãn hiển thị cho trường này. <br/><b>Thứ tự tab</b> điều khiển theo thứ tự phím tab chuyển đổi giữa các trường.',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Trường</b> có sẵn cho mô-đun được liệt kê ở đây theo Tên trường. <br><br>Các trường tùy chỉnh được tạo cho mô-đun xuất hiện phía trên các trường có sẵn cho mô-đun theo mặc định. <br><br>Để chỉnh sửa một trường, hãy nhấp vào <b>Tên trường</b>. <br/><br/>Để tạo trường mới, nhấp vào <b>Thêm trường</b>.',
            'mbDefault' => '<b>Các trường</b> có sẵn cho mô-đun được liệt kê ở đây theo Tên trường. <br><br>Để định cấu hình các thuộc tính cho một trường, hãy nhấp vào Tên trường. <br><br> Để tạo một trường trường mới, nhấp vào <b>Thêm trường</b>. Có thể chỉnh sửa nhãn cùng với các thuộc tính khác của trường mới sau khi tạo bằng cách nhấp vào Tên trường. <br><br>Sau khi mô-đun được triển khai, các trường mới được tạo trong Trình tạo mô-đun được coi là trường tiêu chuẩn trong mô-đun được triển khai ở phòng chụp.',
            'addField' => 'Chọn <b>Kiểu dữ liệu</b> cho trường mới. Loại bạn chọn xác định loại ký tự nào có thể được nhập cho trường. Ví dụ: chỉ các số có số nguyên mới có thể được nhập vào các trường thuộc loại dữ liệu Số nguyên. <br><br>Cung cấp <b>Tên</b> cho trường. Tên phải là chữ và số và không được chứa bất kỳ khoảng trắng nào. Dấu gạch dưới là hợp lệ. <br><br><b>Nhãn hiển thị</b> là nhãn sẽ xuất hiện cho các trường trong bố trí mô-đun. <b>Nhãn hệ thống</b> được sử dụng để tham chiếu trường trong mã. <br><br>Tùy thuộc vào loại dữ liệu được chọn cho trường, một số hoặc tất cả các thuộc tính sau có thể được đặt cho trường: <br><br><b>Văn bản trợ giúp</b> xuất hiện tạm thời trong khi người dùng di chuyển qua trường và có thể được sử dụng để nhắc người dùng về loại đầu vào mong muốn. <br><br><b>Nhận xét Văn bản</b> chỉ được nhìn thấy trong Studio & / hoặc Trình tạo mô-đun và có thể được sử dụng để mô tả trường cho quản trị viên. <br><br><b>Giá trị mặc định</b> sẽ xuất hiện trong trường. Người dùng có thể nhập một giá trị mới vào trường hoặc sử dụng giá trị mặc định. <br><br>Chọn hộp kiểm <b>Cập nhật hàng loạt</b> để có thể sử dụng tính năng Cập nhật hàng loạt cho trường. <br><br>Giá trị <b>Kích thước tối đa</b> xác định số lượng ký tự tối đa có thể được nhập vào trường. <br><br>Chọn hộp kiểm <b>Trường bắt buộc</b> để làm cho lĩnh vực cần thiết. Phải cung cấp giá trị cho trường để có thể lưu bản ghi có chứa trường. <br><br>Chọn hộp kiểm <b>Có thể báo cáo</b> để cho phép trường được sử dụng cho các bộ lọc và để hiển thị dữ liệu trong Báo cáo. <br><br>Chọn hộp kiểm <b>Kiểm toán</b> để có thể theo dõi các thay đổi đối với trường trong Nhật ký thay đổi. <br><br>Chọn một tùy chọn trong Trường <b>Có thể nhập</b> để cho phép, không cho phép hoặc yêu cầu trường được nhập vào trong Trình hướng dẫn nhập. <br><br>Chọn một tùy chọn trong trường <b>Sao chép hợp nhất</b> để bật hoặc vô hiệu hóa các tính năng Hợp nhất trùng lặp và Tìm trùng lặp. <br><br>Các thuộc tính bổ sung có thể được đặt cho các loại dữ liệu nhất định.',
            'editField' => 'Các thuộc tính của trường này có thể được tùy chỉnh. <br><br>Nhấp vào <b>Nhân bản</b> để tạo trường mới có cùng thuộc tính.',
            'mbeditField' => '<b>Nhãn hiển thị</b> của trường mẫu có thể được tùy chỉnh. Các thuộc tính khác của trường không thể được tùy chỉnh. <br><br>Nhấp vào <b>Nhân bản</b> để tạo trường mới có cùng thuộc tính. <br><br>Để xóa trường mẫu để nó không hiển thị trong mô-đun, xóa trường khỏi <b>Bố cục</b> thích hợp.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Xuất các tùy chỉnh được thực hiện trong Studio bằng cách tạo các gói có thể được tải lên một phiên bản SuiteCRM khác thông qua <b>Trình tải mô-đun</b>. <br><br>Trước tiên, hãy cung cấp <b>Tên gói</b>. Bạn cũng có thể cung cấp <b>Tác giả</b> và <b>Mô tả</b> cho gói. <br><br>Chọn các mô-đun có chứa các tùy chỉnh bạn muốn xuất. Chỉ các mô-đun chứa các tùy chỉnh sẽ xuất hiện để bạn chọn. <br><br>Sau đó nhấp vào <b>Xuất</b> để tạo tệp .zip cho gói chứa các tùy chỉnh.',
            'exportCustomBtn' => 'Nhấp vào <b>Xuất</b> để tạo tệp .zip cho gói chứa các tùy chỉnh mà bạn muốn xuất.',
            'name' => 'Đây là <b>Tên</b> của gói. Tên này sẽ được hiển thị trong khi cài đặt.',
            'author' => 'Đây là <b>Tác giả</b> được hiển thị trong khi cài đặt dưới dạng tên của thực thể đã tạo gói. Tác giả có thể là một cá nhân hoặc một công ty.',
            'description' => 'Đây là <b>Mô tả</b> của gói được hiển thị trong khi cài đặt.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Chào mừng bạn đến với khu vực <b>Công cụ dành cho nhà phát triển</b>. <br/><br/>Sử dụng các công cụ trong khu vực này để tạo và quản lý các mô-đun và trường tiêu chuẩn và tùy chỉnh.',
            'studioBtn' => 'Sử dụng <b>Studio</b> để tùy chỉnh các mô-đun được triển khai.',
            'mbBtn' => 'Sử dụng <b>Trình tạo mô-đun</b> để tạo các mô-đun mới.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Sử dụng <b>Trình chỉnh sửa thả xuống</b> để thêm và chỉnh sửa danh sách thả xuống toàn cầu cho các trường thả xuống.',
            'appBtn' => 'Chế độ ứng dụng là nơi bạn có thể tùy chỉnh các thuộc tính khác nhau của chương trình, chẳng hạn như có bao nhiêu báo cáo TPS được hiển thị trên trang chủ',
            'backBtn' => 'Quay trở lại bước trước.',
            'studioHelp' => 'Sử dụng <b>Studio</b> để xác định thông tin nào và cách hiển thị trong các mô-đun.',
            'moduleBtn' => 'Nhấp để sửa module này.',
            'moduleHelp' => 'Các thành phần mà bạn có thể tùy chỉnh cho mô-đun xuất hiện ở đây. <br><br>Nhấp vào biểu tượng để chọn thành phần cần chỉnh sửa.',
            'fieldsBtn' => 'Tạo và tùy chỉnh <b>Trường</b> để lưu trữ thông tin trong mô-đun.',
            'labelsBtn' => 'Chỉnh sửa <b>Nhãn</b> hiển thị cho các trường và các tiêu đề khác trong mô-đun.',
            'relationshipsBtn' => 'Thêm mới hoặc xem <b>Mối quan hệ</b> hiện có cho mô-đun.',
            'layoutsBtn' => 'Tùy chỉnh mô-đun <b>Bố cục</b>. Bố cục là các chế độ xem khác nhau của mô-đun chứa các trường. <br><br>Bạn có thể xác định trường nào xuất hiện và cách chúng được tổ chức trong mỗi bố cục.',
            'subpanelBtn' => 'Xác định trường nào xuất hiện trong <b>Subpanels</b> trong mô-đun.',
            'portalBtn' => 'Tùy chỉnh mô-đun <b>Bố cục</b> xuất hiện trong <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Mô-đun <b>Bố cục</b> có thể được tùy chỉnh xuất hiện tại đây. <br><br>Bố cục hiển thị các trường và dữ liệu trường. <br> <br> Nhấp vào biểu tượng để chọn bố cục cần chỉnh sửa.',
            'subpanelHelp' => '<b>Subpanels</b> trong mô-đun có thể được tùy chỉnh xuất hiện tại đây. <br><br>Nhấp vào biểu tượng để chọn mô-đun cần chỉnh sửa.',
            'newPackage' => 'Nhấp vào <b>Gói mới</b> để tạo một gói mới.',
            'exportBtn' => 'Nhấp vào <b>Xuất tùy chỉnh</b> để tạo và tải xuống gói chứa các tùy chỉnh được thực hiện trong Studio cho các mô-đun cụ thể.',
            'mbHelp' => 'Sử dụng <b>Trình tạo mô-đun</b> để tạo các gói chứa các mô-đun tùy chỉnh dựa trên các đối tượng tiêu chuẩn hoặc tùy chỉnh.',
            'viewBtnEditView' => 'Tùy chỉnh bố cục <b>EditView</b> của mô-đun. <br><br>EditView là hình thức chứa các trường đầu vào để ghi dữ liệu do người dùng nhập.',
            'viewBtnDetailView' => 'Tùy chỉnh bố cục <b>Chi tiết</b> của mô-đun. <br><br>Chi tiết xem hiển thị dữ liệu trường do người dùng nhập.',
            'viewBtnDashlet' => 'Tùy chỉnh <b>SuiteCRM Dashlet</b> của mô-đun, bao gồm ListView và Tìm kiếm của SuiteCRM. <br><br>Dashlet SuiteCRM sẽ có sẵn để thêm vào các trang trong mô-đun Trang chủ.',
            'viewBtnListView' => 'Tùy chỉnh bố cục <b>ListView</b> của mô-đun. <br><br>Kết quả tìm kiếm xuất hiện trong ListView.',
            'searchBtn' => 'Tùy chỉnh bố cục <b>Tìm kiếm</b> của mô-đun. <br><br>Xác định trường nào có thể được sử dụng để lọc các bản ghi xuất hiện trong ListView.',
            'viewBtnQuickCreate' => 'Tùy chỉnh bố cục <b>QuickCreate</b> của mô-đun. <br><br>Biểu mẫu QuickCreate xuất hiện trong các bảng con và trong mô-đun Email.',
            'addLayoutHelp' => "Để tạo bố cục tùy chỉnh cho Nhóm bảo mật, hãy chọn Nhóm bảo mật thích hợp và bố cục để sao chép từ đó làm điểm bắt đầu.",
            'searchHelp' => 'Các biểu mẫu <b>Tìm kiếm</b> có thể được tùy chỉnh xuất hiện tại đây. <br><br>Biểu mẫu tìm kiếm chứa các trường để lọc bản ghi. <br><br>Nhấp vào biểu tượng để chọn bố cục tìm kiếm cần chỉnh sửa.',
            'dashletHelp' => 'Bố cục <b>SuiteCRM</b> có thể được tùy chỉnh xuất hiện tại đây. <br><br>Dashlet SuiteCRM sẽ có sẵn để thêm vào các trang trong mô-đun Trang chủ.',
            'DashletListViewBtn' => '<b>SuiteCRM Dashlet ListView</b> hiển thị các bản ghi dựa trên bộ lọc tìm kiếm của SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => '<b>Tìm kiếm trong SuiteCRM Dashlet</b> bộ lọc bản ghi cho xem danh sách trong SuiteCRM Dashlet.',
            'popupHelp' => 'Bố cục <b>Popup</b> có thể được tùy chỉnh xuất hiện ở đây. <br>',
            'PopupListViewBtn' => '<b>Popup ListView</b> Hiển thị hồ sơ dựa trên quan điểm tìm Popup.',
            'PopupSearchViewBtn' => '<b>Tìm kiếm trong Popup</b> xem các bản ghi cho danh sách trong Popup.',
            'BasicSearchBtn' => 'Tùy chỉnh biểu mẫu <b>Bộ lọc nhanh</b> xuất hiện trong tab Bộ lọc nhanh trong khu vực Tìm kiếm cho mô-đun.',
            'AdvancedSearchBtn' => 'Tùy chỉnh biểu mẫu <b>Bộ lọc nâng cao</b> xuất hiện trong tab Tìm kiếm nâng cao trong khu vực Tìm kiếm cho mô-đun.',
            'portalHelp' => 'Quản lý và tùy chỉnh <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Tải lên <b>Style Sheet</b> cho SuiteCRM Portal.',
            'SPSync' => '<b>Đồng bộ</b> các tùy chỉnh cho SuiteCRM Portal.',
            'Layouts' => 'Tùy chỉnh <b>Bố cục</b> của các mô-đun SuiteCRM Portal.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Tất cả <b>Mối quan hệ</b> tồn tại giữa mô-đun và các mô-đun được triển khai khác xuất hiện ở đây. <br><br> Mối quan hệ <b>Tên</b> là tên do hệ thống tạo cho mối quan hệ. <br><br><b>Mô-đun chính</b> là mô-đun sở hữu các mối quan hệ. Ví dụ: tất cả các thuộc tính của các mối quan hệ mà mô đun Tài khoản là mô đun chính được lưu trữ trong các bảng cơ sở dữ liệu Tài khoản. <br><br><b>Loại</b> là loại mối quan hệ tồn tại giữa Mô-đun chính và <b>Mô-đun liên quan</b>. <br><br>Nhấp vào tiêu đề cột để sắp xếp theo cột. <br><br>Nhấp vào một dòng trong bảng quan hệ để xem các thuộc tính được liên kết với mối quan hệ. <br><br>Nhấp vào <b>Thêm mối quan hệ</b> để tạo mối quan hệ mới. <br><br>Mối quan hệ có thể được tạo giữa bất kỳ hai mô-đun được triển khai.',
            'relationshipHelp' => '<b>Mối quan hệ</b> có thể được tạo giữa mô-đun và mô-đun được triển khai khác. <br><br>Mối quan hệ được thể hiện trực quan thông qua các bảng con và liên kết các trường trong bản ghi mô-đun. <br><br>Chọn một trong các tùy chọn sau mối quan hệ <b>Các loại</b> cho mô-đun: <br><br><b>Một-một</b> - Bản ghi của cả hai mô-đun sẽ chứa các trường liên quan. <br><br><b>Một-nhiều</b> - Bản ghi của Mô-đun chính sẽ chứa một bảng con và bản ghi của Mô-đun liên quan sẽ chứa một trường liên quan. <br><br><b>Nhiều-nhiều</b> - Cả hai Bản ghi của các mô-đun sẽ hiển thị các bảng con. <br><br>Chọn <b>Mô-đun liên quan</b> cho mối quan hệ. <br><br>Nếu loại mối quan hệ liên quan đến các bảng con, hãy chọn chế độ xem bảng con cho các mô-đun thích hợp. <br><br>Nhấp vào <b>Lưu</b> để tạo mối quan hệ.',
            'convertLeadHelp' => 'Tại đây, bạn có thể thêm các mô-đun vào màn hình bố trí chuyển đổi và sửa đổi bố cục của các mô-đun hiện có. <br/>
Bạn có thể sắp xếp lại các mô-đun bằng cách kéo các hàng của chúng trong bảng. <br/><br/>
<b>Mô-đun:</b> Tên của mô-đun. <br/><br/>
<b>Bắt buộc:</b> Các mô-đun cần thiết phải được tạo hoặc chọn trước khi có thể chuyển đổi khách hàng tiềm năng. <br/><br/>
<b>Sao chép dữ liệu: </b> Nếu được chọn, các trường từ khách hàng tiềm năng sẽ được sao chép sang các trường có cùng tên trong các bản ghi mới được tạo. <br/><br/>
<b>Cho phép lựa chọn:</b> Các mô-đun có trường liên quan trong Danh bạ có thể được chọn thay vì được tạo trong quá trình chuyển đổi khách hàng tiềm năng. <br/><br/>
<b>Chỉnh sửa:</b> Sửa đổi bố cục chuyển đổi cho mô-đun này. <br/><br/>
<b>Xóa:</b> Xóa mô-đun này khỏi bố cục chuyển đổi. <br/><br/>',


            'editDropDownBtn' => 'Chỉnh sửa Trình thả xuống tổng quát',
            'addDropDownBtn' => 'Thêm một Trình thả xuống tổng quát mới',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Trường</b> trong mô-đun được liệt kê ở đây theo Tên trường. <br><br>Mẫu mô-đun bao gồm một bộ trường được xác định trước. <br><br>Để tạo trường mới, hãy nhấp vào <b>Thêm trường</b>. <br><br>Để chỉnh sửa trường, nhấp vào <b>Tên trường</b>. <br/><br/>Sau khi mô-đun được triển khai, các trường mới được tạo trong Module Builder, cùng với các trường mẫu, được coi là các trường tiêu chuẩn trong Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => '<b>Mối quan hệ</b> đã được tạo giữa mô-đun và các mô-đun khác xuất hiện ở đây. <br><br>Mối quan hệ <b>Tên</b> là tên do hệ thống tạo cho mối quan hệ. <br><br><b>Mô-đun chính</b> là mô-đun sở hữu các mối quan hệ. Các thuộc tính mối quan hệ được lưu trữ trong các bảng cơ sở dữ liệu thuộc về mô đun chính. <br><br><b>Loại</b> là loại mối quan hệ tồn tại giữa mô đun Chính và <b>Mô đun liên quan</b>. <br><br>Nhấp vào tiêu đề cột để sắp xếp theo cột. <br><br>Nhấp vào một hàng trong bảng mối quan hệ để xem và chỉnh sửa các thuộc tính được liên kết với mối quan hệ. <br><br>Nhấp vào <b>Thêm mối quan hệ</b> để tạo mối quan hệ mới.',
            'addrelbtn' => 'di chuột qua để thêm mối quan hệ...',
            'addRelationship' => '<b>Mối quan hệ</b> có thể được tạo giữa mô-đun và mô-đun tùy chỉnh khác hoặc mô-đun được triển khai. <br><br>Mối quan hệ được thể hiện trực quan thông qua các bảng con và liên quan đến các trường trong bản ghi mô-đun. <br><br>Chọn một trong các mối quan hệ sau <b>Loại</b> cho mô-đun: <br><br><b>Một-một</b> - Bản ghi của cả hai mô-đun sẽ chứa các trường liên quan. <br><br > <b>Một-nhiều</b> - Bản ghi của Mô-đun chính sẽ chứa một bảng con và bản ghi của Mô-đun liên quan sẽ chứa trường liên quan. <br><br><b>Nhiều-nhiều</b> - Bản ghi của cả hai mô-đun sẽ hiển thị các bảng con. <br><br>Chọn <b>Mô-đun liên quan</b> cho mối quan hệ. <br><br>Nếu loại mối quan hệ liên quan đến các bảng con, hãy chọn chế độ xem bảng con cho các mô-đun thích hợp. <br><br>Nhấp vào <b>Lưu</b> để tạo mối quan hệ.',
        ),
        'labelsHelp' => array(
            'default' => 'Có thể thay đổi <b>Nhãn</b> cho các trường và các tiêu đề khác trong mô-đun. <br><br>Chỉnh sửa nhãn bằng cách nhấp vào trong trường, nhập nhãn mới và nhấp vào <b>Lưu</b>. <br><br>Nếu bất kỳ gói ngôn ngữ nào được cài đặt trong ứng dụng, bạn có thể chọn <b>Ngôn ngữ</b> để sử dụng cho nhãn.',
            'saveBtn' => 'Nhấp vào <b>Lưu</b> để lưu tất cả các thay đổi.',
            'publishBtn' => 'Nhấp vào <b>Lưu & Triển khai</b> để lưu tất cả các thay đổi và kích hoạt chúng.',
        ),
        'portalSync' => array(
            'default' => 'Nhập <b>SuiteCRM Portal URL</b> của phiên bản cổng thông tin để cập nhật và nhấp vào <b>Go</b>. <br><br>Sau đó nhập tên người dùng và mật khẩu SuiteCRM hợp lệ, rồi nhấp vào <b>Bắt đầu đồng bộ hóa</b>. <br><br>Các tùy chỉnh được thực hiện cho Cổng SuiteCRM <b>Bố cục</b>, cùng với <b>Biểu định kiểu</b> nếu được tải lên, sẽ được chuyển đến thể hiện cổng thông tin cụ thể.',
        ),
        'portalStyle' => array(
            'default' => 'Bạn có thể tùy chỉnh giao diện của SuiteCRM Portal bằng cách sử dụng Css. <br><br>Chọn <b>Css</b> để tải lên. <br><br>Biểu định kiểu sẽ được triển khai trong SuiteCRM Portal trong lần tiếp theo đồng bộ hóa được thực hiện.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Để bắt đầu một dự án, nhấp vào <b>Gói mới</b> để tạo gói mới chứa các mô-đun tùy chỉnh của bạn. <br/><br/>Mỗi gói có thể chứa một hoặc nhiều mô-đun. <br/><br/>Chẳng hạn, bạn có thể muốn tạo một gói chứa một mô-đun tùy chỉnh có liên quan đến mô-đun Tài khoản tiêu chuẩn. Hoặc, bạn có thể muốn tạo một gói chứa một số mô-đun mới hoạt động cùng nhau như một dự án và có liên quan với nhau và với các mô-đun khác đã có trong ứng dụng.',
            'somepackages' => 'Một <b>Gói</b> như một thùng chứa các mô-đun tùy chỉnh, tất cả đều là một phần của một dự án. Gói có thể chứa một hoặc nhiều <b>mô-đun</b> tùy chỉnh có thể liên quan với nhau hoặc với các mô-đun khác trong ứng dụng. <br/><br/>Sau khi tạo gói cho dự án của bạn, bạn có thể tạo các mô-đun cho gói ngay lập tức hoặc bạn có thể quay lại Trình tạo mô-đun sau để hoàn thành dự án. <br><br>Khi dự án hoàn thành, bạn có thể <b>Triển khai</b> gói để cài đặt các mô-đun tùy chỉnh trong ứng dụng.',
            'afterSave' => 'Gói mới của bạn nên chứa ít nhất một mô-đun. Bạn có thể tạo một hoặc nhiều mô-đun tùy chỉnh cho gói. <br/><br/> Nhấp vào <b>Mô-đun mới</b> để tạo mô-đun tùy chỉnh cho gói này. <br/><br/>Sau khi tạo tại ít nhất một mô-đun, bạn có thể xuất bản hoặc triển khai gói để cung cấp cho phiên bản của bạn và / hoặc các phiên bản của người dùng khác. <br/><br/>Để triển khai gói trong một bước trong phiên bản SuiteCRM của bạn, nhấp vào <b>Triển khai</b>. <br><br>Nhấp vào <b>Xuất bản</b> để lưu gói dưới dạng tệp .zip. Sau khi tệp .zip được lưu vào hệ thống của bạn, hãy sử dụng <b>Trình tải mô-đun</b> để tải lên và cài đặt gói trong phiên bản SuiteCRM của bạn. <br/><br/>Bạn có thể phân phối tệp cho người dùng khác để tải lên và cài đặt trong các phiên bản SuiteCRM của riêng họ.',
            'create' => 'Một <b>Gói</b> hoạt động như một thùng chứa cho các mô-đun tùy chỉnh, tất cả đều là một phần của một dự án. Gói có thể chứa một hoặc nhiều mô-đun <b>tùy chỉnh</b> có thể liên quan với nhau hoặc với các mô-đun khác trong ứng dụng. <br/><br/>Sau khi tạo gói cho dự án của bạn, bạn có thể tạo các mô-đun cho gói ngay lập tức hoặc bạn có thể quay lại Trình tạo mô-đun sau đó để hoàn thành dự án.',
        ),
        'main' => array(
            'welcome' => 'Sử dụng <b>Công cụ dành cho nhà phát triển</b> để tạo và quản lý các mô-đun và trường tiêu chuẩn và tùy chỉnh. <br/><br/>Để quản lý các mô-đun trong ứng dụng, nhấp vào <b>Studio</b>. <br/><br/>Để tạo các mô-đun tùy chỉnh, nhấp vào <b>Trình tạo mô-đun</b>.',
            'studioWelcome' => 'Tất cả các mô-đun hiện được cài đặt, bao gồm các đối tượng tiêu chuẩn và mô-đun, có thể tùy chỉnh trong Studio.'
        ),
        'module' => array(
            'somemodules' => "Vì gói hiện tại chứa ít nhất một mô-đun, bạn có thể <b>Triển khai</b> các mô-đun trong gói trong phiên bản SuiteCRM của bạn hoặc <b>Xuất bản</b> gói được cài đặt trong phiên bản SuiteCRM hiện tại hoặc khác phiên bản bằng cách sử dụng <b>Trình tải mô-đun</b>. <br/><br/>Để cài đặt gói trực tiếp trong phiên bản SuiteCRM của bạn, nhấp vào <b>Triển khai</b>. <br><br>Để tạo Tệp .zip cho gói có thể được tải và cài đặt trong phiên bản SuiteCRM hiện tại và các phiên bản khác bằng cách sử dụng <b>Trình tải mô-đun</b>, nhấp vào <b>Xuất bản</b>. <br/><br/>Bạn có thể xây dựng các mô-đun cho gói này theo từng giai đoạn và xuất bản hoặc triển khai khi bạn sẵn sàng làm việc đó. <br/><br/>Sau khi xuất bản hoặc triển khai gói, bạn có thể thay đổi các thuộc tính gói và tùy chỉnh các mô-đun thêm. Sau đó xuất bản lại hoặc triển khai lại gói để áp dụng các thay đổi.",
            'editView' => 'Tại đây bạn có thể chỉnh sửa các trường hiện có. Bạn có thể xóa bất kỳ trường nào hiện có hoặc thêm các trường có sẵn trong bảng điều khiển bên trái.',
            'create' => 'Khi chọn loại <b>Loại</b> của mô-đun mà bạn muốn tạo, hãy ghi nhớ các loại trường bạn muốn có trong mô-đun. <br/><br/>Mỗi mẫu mô-đun chứa một tập hợp các trường liên quan đến loại mô-đun được mô tả bởi tiêu đề. <br/><br/><b>Basic</b> - Cung cấp các trường cơ bản xuất hiện trong Các mô-đun chuẩn, chẳng hạn như các trường Tên, Được gán cho, Nhóm, Ngày tạo và Mô tả. <br/><br/><b>Company</b> - Cung cấp các trường dành riêng cho tổ chức, như Tên công ty, Ngành và Thanh toán Địa chỉ nhà. Sử dụng mẫu này để tạo các mô-đun tương tự như mô-đun Khách hàng tiêu chuẩn. <br/><br/><b>Person</b> - Cung cấp các trường cụ thể cho từng cá nhân, như Tính toán, Tiêu đề, Tên, Địa chỉ và Số điện thoại. Sử dụng mẫu này để tạo các mô-đun tương tự như các mô-đun Liên hệ và Khách hàng tiềm năng tiêu chuẩn. <br/><br/><b>Issue</b> - Cung cấp các trường cụ thể theo trường hợp và lỗi, như Số, Trạng thái, Ưu tiên và Mô tả. Sử dụng mẫu này để tạo các mô-đun tương tự như các mô-đun Vụ việc và Lỗi tiêu chuẩn. <br/><br/>Lưu ý: Sau khi bạn tạo mô-đun, bạn có thể chỉnh sửa nhãn của các trường được cung cấp bởi mẫu, cũng như tạo các trường tùy chỉnh để thêm vào bố trí mô-đun.',
            'afterSave' => 'Tùy chỉnh mô-đun cho phù hợp với nhu cầu của bạn bằng cách chỉnh sửa và tạo các trường, thiết lập mối quan hệ với các mô-đun khác và sắp xếp các trường trong bố cục. <br/><br/>Để xem các trường mẫu và quản lý các trường tùy chỉnh trong mô-đun, nhấp vào <b>Xem trường</b>. <br/><br/>Để tạo và quản lý mối quan hệ giữa mô-đun và các mô-đun khác, cho dù các mô-đun đã có trong ứng dụng hoặc các mô-đun tùy chỉnh khác trong cùng một gói, hãy nhấp vào <b>Xem mối quan hệ</b>. <br/><br/>Để chỉnh sửa bố cục mô-đun, nhấp vào <b>Xem bố cục</b>. Bạn có thể thay đổi bố cục Chế độ xem chi tiết, Chỉnh sửa và Chế độ xem danh sách cho mô-đun giống như đối với các mô-đun đã có trong ứng dụng trong Studio. <br/><br/>Để tạo mô-đun có cùng thuộc tính với mô-đun hiện tại, nhấp vào <b> Nhân bản</b>. Bạn có thể tùy chỉnh thêm các mô-đun mới.',
            'viewfields' => 'Các trường trong mô-đun có thể được tùy chỉnh cho phù hợp với nhu cầu của bạn. <br/><br/>Bạn không thể xóa các trường tiêu chuẩn, nhưng bạn có thể xóa chúng khỏi bố cục thích hợp trong các trang Bố cục. <br/><br/>Bạn có thể nhanh chóng tạo các trường mới có thuộc tính tương tự với các trường hiện có bằng cách nhấp vào <b>Nhân bản</b> trong biểu mẫu <b>Thuộc tính</b>. Nhập bất kỳ thuộc tính mới nào và sau đó nhấp vào <b>Lưu</b>. <br/><br/>Bạn nên đặt tất cả các thuộc tính cho các trường tiêu chuẩn và trường tùy chỉnh trước khi bạn xuất bản và cài đặt gói chứa các mô-đun tùy chỉnh.',
            'viewrelationships' => 'Bạn có thể tạo mối quan hệ nhiều-nhiều giữa mô-đun hiện tại và các mô-đun khác trong gói và / hoặc giữa mô-đun hiện tại và mô-đun đã được cài đặt trong ứng dụng. <br><br>Để tạo mối quan hệ một-nhiều và một-một, tạo các trường <b>Relate</b> và <b>Flex Relate</b> cho các mô-đun.',
            'viewlayouts' => 'Bạn có thể kiểm soát các trường có sẵn để chụp dữ liệu trong <b>Chế độ chỉnh sửa</b>. Bạn cũng có thể kiểm soát dữ liệu nào hiển thị trong <b>Chế độ xem chi tiết</b>. Các quan điểm không phải phù hợp. <br/><br/>Biểu mẫu Tạo nhanh được hiển thị khi nhấp vào <b>Tạo</b> trong một bảng con mô-đun. Theo mặc định, bố cục biểu mẫu <b>Tạo nhanh</b> giống với bố cục <b>Chế độ chỉnh sửa</b> mặc định. Bạn có thể tùy chỉnh biểu mẫu Tạo nhanh để nó chứa ít hơn và / hoặc các trường khác với bố cục Chỉnh sửa dạng xem. <br><br>Bạn có thể xác định bảo mật mô-đun bằng tùy chỉnh Bố cục cùng với <b>Quản lý vai trò</b>. <br><br>',
            'existingModule' => 'Sau khi tạo và tùy chỉnh mô-đun này, bạn có thể tạo các mô-đun bổ sung hoặc quay lại gói để <b>Xuất bản</b> hoặc <b>Triển khai</b> gói. <br><br>Để tạo các mô-đun bổ sung, nhấp vào <b>Nhân đôi</b> để tạo mô-đun có cùng thuộc tính với mô-đun hiện tại hoặc điều hướng quay lại gói và nhấp vào <b>Mô-đun mới</b>. <br><br>Nếu bạn đã sẵn sàng đến <b>Xuất bản</b> hoặc <b>Triển khai</b> gói chứa mô-đun này, điều hướng quay lại gói để thực hiện các chức năng này. Bạn có thể xuất bản và triển khai các gói chứa ít nhất một mô-đun.',
            'labels' => 'Các nhãn của các trường tiêu chuẩn cũng như các trường tùy chỉnh có thể được thay đổi. Thay đổi nhãn trường sẽ không ảnh hưởng đến dữ liệu được lưu trữ trong các trường.',
        ),
        'listViewEditor' => array(
            'modify' => 'Có ba cột hiển thị bên trái. Cột "Mặc định" chứa các trường được hiển thị trong chế độ xem danh sách theo mặc định, cột "Có sẵn" chứa các trường mà người dùng có thể chọn sử dụng để tạo chế độ xem danh sách tùy chỉnh và cột "Ẩn" chứa các trường có sẵn cho bạn với tư cách là quản trị viên để thêm vào các cột mặc định hoặc có sẵn để người dùng sử dụng nhưng hiện đang bị vô hiệu hóa.',
            'savebtn' => 'Nhấp vào <b>Lưu</b> sẽ lưu tất cả các thay đổi và khiến chúng hoạt động.',
            'Hidden' => 'Các trường ẩn là các trường hiện không có sẵn cho người dùng để sử dụng trong chế độ xem danh sách.',
            'Available' => 'Các trường có sẵn là các trường không được hiển thị theo mặc định, nhưng người dùng có thể bật.',
            'Default' => 'Các trường mặc định được hiển thị cho người dùng chưa tạo cài đặt chế độ xem danh sách tùy chỉnh.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Có hai cột hiển thị bên trái. Cột "Mặc định" chứa các trường sẽ được hiển thị trong chế độ xem tìm kiếm và cột "Ẩn" chứa các trường có sẵn cho bạn với tư cách quản trị viên để thêm vào chế độ xem.',
            'savebtn' => 'Nhấp vào <b>Lưu & Triển khai</b> sẽ lưu tất cả các thay đổi và khiến chúng hoạt động.',
            'Hidden' => 'Các trường ẩn là các trường sẽ không được hiển thị trong chế độ xem tìm kiếm.',
            'Default' => 'Các trường mặc định sẽ được hiển thị trong chế độ xem tìm kiếm.'
        ),
        'layoutEditor' => array(
            'default' => 'Có hai cột hiển thị bên trái. Cột bên phải, được gắn nhãn Bố cục hiện tại hoặc Xem trước bố cục, là nơi bạn thay đổi bố cục mô-đun. Cột bên trái, có tên Hộp công cụ, chứa các thành phần và công cụ hữu ích để sử dụng khi chỉnh sửa bố cục. <br/><br/>Nếu khu vực bố cục có tiêu đề Bố cục hiện tại thì bạn đang làm việc trên một bản sao của bố cục hiện đang được sử dụng để hiển thị. <br/><br/>Nếu có tiêu đề Xem trước bố cục thì bạn đang làm việc trên một bản sao được tạo trước đó bằng cách nhấp vào nút Lưu, có thể đã được thay đổi từ phiên bản mà người dùng mô-đun này nhìn thấy.',
            'saveBtn' => 'Nhấp vào nút này sẽ lưu bố cục để bạn có thể bảo vệ các thay đổi của mình. Khi bạn trở lại mô-đun này, bạn sẽ bắt đầu từ bố cục thay đổi này. Tuy nhiên, người dùng của mô-đun sẽ không nhìn thấy bố cục của bạn cho đến khi bạn nhấp vào nút Lưu và Xuất bản.',
            'publishBtn' => 'Nhấn vào nút này để triển khai bố trí. Điều này có nghĩa là bố cục này sẽ ngay lập tức được nhìn thấy bởi người dùng mô-đun này.',
            'toolbox' => 'Hộp công cụ chứa nhiều tính năng hữu ích để chỉnh sửa bố cục, bao gồm khu vực thùng rác, một bộ các yếu tố bổ sung và một bộ các trường có sẵn. Bất kỳ trong số này có thể được kéo và thả vào bố trí.',
            'panels' => 'Khu vực này hiển thị cách bố trí của bạn sẽ trông như thế nào đối với người dùng mô-đun này khi nó bị mất. <br/><br/>Bạn có thể định vị lại các thành phần như trường, hàng và bảng bằng cách kéo và thả chúng; xóa các phần tử bằng cách kéo và thả chúng vào vùng rác trong hộp công cụ hoặc thêm các phần tử mới bằng cách kéo chúng từ hộp công cụ và thả chúng vào bố trí ở vị trí mong muốn.'
        ),
        'dropdownEditor' => array(
            'default' => 'Có hai cột hiển thị bên trái. Cột bên phải, được gắn nhãn Bố cục hiện tại hoặc Xem trước bố cục, là nơi bạn thay đổi bố cục mô-đun. Cột bên trái, có tên Hộp công cụ, chứa các thành phần và công cụ hữu ích để sử dụng khi chỉnh sửa bố cục. <br/><br/>Nếu khu vực bố cục có tiêu đề Bố cục hiện tại thì bạn đang làm việc trên một bản sao của bố cục hiện đang được sử dụng để hiển thị. <br/><br/>Nếu có tiêu đề Xem trước bố cục thì bạn đang làm việc trên một bản sao được tạo trước đó bằng cách nhấp vào nút Lưu, có thể đã được thay đổi từ phiên bản mà người dùng mô-đun này nhìn thấy.',
            'dropdownaddbtn' => 'Nhấp vào nút này sẽ thêm một mục mới vào danh sách thả xuống.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Các tùy chỉnh được thực hiện trong Studio trong trường hợp này có thể được đóng gói và triển khai trong trường hợp khác. <br><br>Cung cấp <b>Tên gói</b>. Bạn có thể cung cấp <b>Tác giả</b> và <b>Mô tả</b> thông tin cho gói. <br><br>Chọn các mô-đun có chứa các tùy chỉnh để xuất. (Chỉ các mô-đun chứa các tùy chỉnh sẽ xuất hiện để bạn chọn.) <br><br>Nhấp vào <b>Xuất</b> để tạo tệp .zip cho gói chứa các tùy chỉnh. Tệp .zip có thể được tải lên trong một phiên bản khác thông qua <b>Trình tải mô-đun</b>.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => '<b>Tên</b> của gói sẽ được hiển thị trong Trình tải mô-đun sau khi gói được tải lên để cài đặt trong Studio.',
            'author' => '<b>Tác giả</b> là tên của thực thể đã tạo gói. Tác giả có thể là một cá nhân hoặc một công ty. <br><br>Tác giả sẽ được hiển thị trong Trình tải mô-đun sau khi gói được tải lên để cài đặt trong Studio.',
            'description' => '<b>Mô tả</b> của gói sẽ được hiển thị trong Trình tải mô-đun sau khi gói được tải lên để cài đặt trong Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Chào mừng bạn đến với khu vực <b>Công cụ dành cho nhà phát triển</b>. <br/><br/>Sử dụng các công cụ trong khu vực này để tạo và quản lý các mô-đun và trường tiêu chuẩn và tùy chỉnh.',
            'studioBtn' => 'Sử dụng <b>Studio</b> để tùy chỉnh các mô-đun đã cài đặt bằng cách thay đổi cách sắp xếp trường, chọn trường nào có sẵn và tạo trường dữ liệu tùy chỉnh.',
            'mbBtn' => 'Sử dụng <b>Trình tạo mô-đun</b> để tạo các mô-đun mới.',
            'appBtn' => 'Sử dụng chế độ Ứng dụng để tùy chỉnh các thuộc tính khác nhau của chương trình, chẳng hạn như có bao nhiêu báo cáo TPS được hiển thị trên trang chủ',
            'backBtn' => 'Quay trở lại bước trước.',
            'studioHelp' => 'Sử dụng <b>Studio</b> để tùy chỉnh các mô-đun đã cài đặt.',
            'moduleBtn' => 'Nhấp để sửa module này.',
            'moduleHelp' => 'Chọn thành phần mô-đun mà bạn muốn chỉnh sửa',
            'fieldsBtn' => 'Chỉnh sửa thông tin nào được lưu trữ trong mô-đun bằng cách kiểm soát <b>Trường</b> trong mô-đun. <br/><br/>Bạn có thể chỉnh sửa và tạo các trường tùy chỉnh tại đây.',
            'labelsBtn' => 'Nhấp vào <b>Lưu</b> để lưu nhãn tùy chỉnh của bạn.',
            'layoutsBtn' => 'Tùy chỉnh <b>Bố cục</b> của chế độ xem Chỉnh sửa, Chi tiết, Danh sách và tìm kiếm.',
            'subpanelBtn' => 'Chỉnh sửa thông tin nào được hiển thị trong bảng con mô-đun này.',
            'layoutsHelp' => 'Chọn <b>Bố cục để chỉnh sửa</b>. <br/><br/>Để thay đổi bố cục có chứa các trường dữ liệu để nhập dữ liệu, nhấp vào <b>Chỉnh sửa chế độ xem</b>. <br/><br/>Để thay đổi bố cục hiển thị dữ liệu được nhập vào các trường trong Chế độ xem chỉnh sửa, nhấp vào <b>Chế độ xem chi tiết</b>. <br/><br/>Để thay đổi các cột xuất hiện trong danh sách mặc định, nhấp vào <b>Chế độ xem danh sách</b>. <br/><br/>Để thay đổi bố cục biểu mẫu tìm kiếm Cơ bản và Nâng cao, nhấp vào <b>Tìm kiếm</b>.',
            'subpanelHelp' => 'Chọn một <b>Subpanel</b> để chỉnh sửa.',
            'searchHelp' => 'Chọn bố cục <b>Tìm kiếm</b> để chỉnh sửa.',
            'newPackage' => 'Nhấp vào <b>Gói mới</b> để tạo một gói mới.',
            'mbHelp' => '<b>Chào mừng bạn đến với Trình tạo mô-đun.</b> <br/><br/>Sử dụng <b>Trình tạo mô-đun</b> để tạo các gói chứa các mô-đun tùy chỉnh dựa trên các đối tượng tiêu chuẩn hoặc tùy chỉnh. <br/><br/>Để bắt đầu, hãy nhấp vào <b>Gói mới</b> để tạo gói mới hoặc chọn gói cần chỉnh sửa. <br/><br/><b>Gói</b> hoạt động như một thùng chứa cho các mô-đun tùy chỉnh, tất cả đều là một phần của một dự án. Gói có thể chứa một hoặc nhiều mô-đun tùy chỉnh có thể liên quan với nhau hoặc với các mô-đun trong ứng dụng. <br/><br/>Ví dụ: Bạn có thể muốn tạo một gói chứa một mô-đun tùy chỉnh có liên quan đến mô-đun Tài khoản chuẩn. Hoặc, bạn có thể muốn tạo một gói chứa một số mô-đun mới hoạt động cùng nhau như một dự án và có liên quan với nhau và với các mô-đun trong ứng dụng.',
            'exportBtn' => 'Nhấp vào <b>Xuất tùy chỉnh</b> để tạo gói chứa các tùy chỉnh được thực hiện trong Studio cho các mô-đun cụ thể.',
        ),



    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Trình đơn xổ dọc biên tập',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Xây dựng mô-đun',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Trình đơn xổ dọc biên tập',
    'LBL_DEVELOPER_TOOLS' => 'Công cụ phát triển',
    'LBL_SUGARPORTAL' => 'Biên tập SuiteCRM Portal',
    'LBL_PACKAGE_LIST' => 'Danh sách gói',
    'LBL_HOME' => 'Trang chủ',
    'LBL_NONE' => '-Không-',
    'LBL_DEPLOYE_COMPLETE' => 'Triển khai hoàn chỉnh',
    'LBL_DEPLOY_FAILED' => 'Đã xảy ra lỗi trong quá trình triển khai, gói của bạn có thể không được cài đặt đúng',
    'LBL_AVAILABLE_SUBPANELS' => 'Subpanels có sẵn',
    'LBL_ADVANCED' => 'Nâng cao',
    'LBL_ADVANCED_SEARCH' => 'Bộ lọc nâng cao',
    'LBL_BASIC' => 'Cơ bản',
    'LBL_BASIC_SEARCH' => 'Lọc nhanh',
    'LBL_CURRENT_LAYOUT' => 'Bố cục',
    'LBL_CURRENCY' => 'Tiền tệ',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'Danh sách Dashlet SuiteCRM',
    'LBL_POPUP' => 'Xem Popup',
    'LBL_POPUPLISTVIEW' => 'Xem danh sách trên popup',
    'LBL_POPUPSEARCH' => 'Tìm kiếm trên popup',
    'LBL_DASHLETSEARCHVIEW' => 'Tìm kiếm trên Dashlet của SuiteCRM',
    'LBL_DETAILVIEW' => 'Xem chi tiết',
    'LBL_DROP_HERE' => '[Thả ở đây]',
    'LBL_EDIT' => 'Sửa',
    'LBL_EDIT_LAYOUT' => 'Sửa khung',
    'LBL_EDIT_FIELDS' => 'Sửa các trường',
    'LBL_EDITVIEW' => 'Chỉnh sửa xem',
    'LBL_FILLER' => '(Lấp đầy khoảng trống)',
    'LBL_FIELDS' => 'Các trường',
    'LBL_FAILED_TO_SAVE' => 'Bị lỗi để lưu',
    'LBL_FAILED_PUBLISHED' => 'Phát hành thất bại',
    'LBL_HOMEPAGE_PREFIX' => 'Của tôi',
    'LBL_LAYOUT_PREVIEW' => 'Xem trước bố cục',
    'LBL_LAYOUTS' => 'Các giao diện',
    'LBL_LISTVIEW' => 'Chế độ xem danh sách',
    'LBL_MODULES' => 'Mô-đun',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Gói mới',
    'LBL_NEW_PANEL' => 'Bảng điều khiển mới',
    'LBL_NEW_ROW' => 'Dong mới',
    'LBL_PACKAGE_DELETED' => 'Gói đã xóa',
    'LBL_PUBLISHING' => 'Đang phát hành...',
    'LBL_PUBLISHED' => 'Công bố',
    'LBL_SELECT_FILE' => 'Chọn File',
    'LBL_SUBPANELS' => 'Subpanels',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Chức danh:',
    'LBL_SEARCH_FORMS' => 'Tìm kiếm',
    'LBL_SEARCH' => 'Tìm kiếm',
    'LBL_SEARCH_BUTTON' => 'Tìm kiếm',
    'LBL_FILTER' => 'Bộ lọc',
    'LBL_TOOLBOX' => 'Hộp công cụ',
    'LBL_QUICKCREATE' => 'Tạo nhanh',
    'LBL_EDIT_DROPDOWNS' => 'Chỉnh sửa Trình thả xuống tổng quát',
    'LBL_ADD_DROPDOWN' => 'Thêm một Trình thả xuống tổng quát mới',
    'LBL_BLANK' => '--trống--',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TABDEF_TYPE' => 'Kiểu hiển thị',
    'LBL_TABDEF_TYPE_HELP' => 'Chọn cách hiển thị phần này. Tùy chọn này chỉ có tác dụng nếu bạn đã kích hoạt tab trên chế độ xem này.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Bảng điều khiển',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Chọn Bảng điều khiển để hiển thị bảng điều khiển này trong chế độ xem bố cục. Chọn Tab để bảng điều khiển này được hiển thị trong một tab riêng trong cách bố trí. Khi Tab được chỉ định cho bảng điều khiển, các bảng tiếp theo sẽ được hiển thị như Bảng điều khiển sẽ được hiển thị bên trong tab. <br/>Tab mới sẽ được bắt đầu cho bảng điều khiển kế tiếp mà Tab được chọn. Nếu Tab được chọn cho bảng bên dưới bảng điều khiển đầu tiên, bảng điều khiển đầu tiên sẽ nhất thiết phải là Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Thu gọn',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Chọn để làm cho trạng thái mặc định của bảng này được thu gọn lại.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Tên',
    'LBL_DROPDOWN_LANGUAGE' => 'Ngôn ngữ',
    'LBL_DROPDOWN_ITEMS' => 'Danh sách các đề mục',
    'LBL_DROPDOWN_ITEM_NAME' => 'Tên khoản mục',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Hiển thị nhãn',
    'LBL_SYNC_TO_DETAILVIEW' => 'Đồng bộ để xem chi tiết',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Chọn tùy chọn này để đồng bộ bố cục Chỉnh sửa xem này với bố cục Xem chi tiết tương ứng. Các trường và vị trí trường trong Chỉnh sửa xem<br>sẽ được đồng bộ hóa và lưu vào Xem chi tiết một cách tự động khi nhấp vào Lưu hoặc Lưu & Triển khai trong Xem chi tiết. <br>Thay đổi bố cục sẽ không thể thực hiện được trong Xem chi tiết.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Chế độ xem chi tiết này được đồng bộ hóa với chế độ chỉnh sửa tương ứng. <br>Trường và vị trí trường trong Chế độ xem chi tiết này phản ánh các trường và vị trí trường trong chế độ chỉnh sửa. <br>Thay đổi đối với Chế độ xem chi tiết có thể được lưu hoặc triển khai trong trang này. Thực hiện thay đổi hoặc không đồng bộ hóa bố cục trong Chế độ chỉnh sửa. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Sao chép từ EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Giá trị này được yêu cầu cho cả Tên Mục và Nhãn Hiển thị. Để thêm một mục trống, hãy nhấp vào Thêm mà không nhập bất kỳ giá trị nào cho Tên mục và Nhãn Hiển thị.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key đã tồn tại trong danh sách',
    'LBL_NO_SAVE_ACTION' => 'Không thể tìm thấy thao tác lưu cho chế độ xem này.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:thiết lập Địa điểm: tài liệu xấu',


//RELATIONSHIPS
    'LBL_MODULE' => 'Chức năng',
    'LBL_LHS_MODULE' => 'Module chính',
    'LBL_CUSTOM_RELATIONSHIPS' => '* mối quan hệ được tạo trong Studio',
    'LBL_RELATIONSHIPS' => 'Các mối quan hệ',
    'LBL_RELATIONSHIP_EDIT' => 'Sửa Mối quan hệ',
    'LBL_REL_NAME' => 'Tên',
    'LBL_REL_LABEL' => 'Nhãn',
    'LBL_REL_TYPE' => 'Loại',
    'LBL_RHS_MODULE' => 'Module liên quan',
    'LBL_NO_RELS' => 'Không có mối quan hệ',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Tùy chọn điều kiện',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Cột',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Giá trị',
    'LBL_SUBPANEL_FROM' => 'SubPanel từ',
    'LBL_RELATIONSHIP_ONLY' => 'Không có yếu tố hiển thị sẽ được tạo ra cho mối quan hệ này vì nó có mối quan hệ nhìn thấy được giữa hai module.',
    'LBL_ONETOONE' => 'Một đến một',
    'LBL_ONETOMANY' => 'Một đến nhiều',
    'LBL_MANYTOONE' => 'Nhiều đến một',
    'LBL_MANYTOMANY' => 'Nhiều đến nhiều',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Chọn một module để chỉnh sửa.',
    'LBL_QUESTION_LAYOUT' => 'Chọn bố cục để chỉnh sửa.',
    'LBL_QUESTION_SUBPANEL' => 'Chọn một subpanel để chỉnh sửa.',
    'LBL_QUESTION_SEARCH' => 'Chọn bố cục bộ lọc để chỉnh sửa.',
    'LBL_QUESTION_MODULE' => 'Chọn một thành phần của module để chỉnh sửa.',
    'LBL_QUESTION_PACKAGE' => 'Chọn một gói phần mềm để chỉnh sửa hoặc tạo một gói phần mềm mới.',
    'LBL_QUESTION_EDITOR' => 'Chọn một công cụ.',
    'LBL_QUESTION_DASHLET' => 'Chọn bố trí dashlet để chỉnh sửa.',
    'LBL_QUESTION_POPUP' => 'Chọn bố cục popup để chỉnh sửa.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Tên',
    'LBL_LABELS' => 'Nhãn',
    'LBL_MASS_UPDATE' => 'Khối lượng Cập Nhật',
    'LBL_DEFAULT_VALUE' => 'Giá trị mặc định',
    'LBL_REQUIRED' => 'Yêu cầu',
    'LBL_DATA_TYPE' => 'Loại',
    'LBL_HCUSTOM' => 'TÙY THÍCH',
    'LBL_HDEFAULT' => 'Mặc định',
    'LBL_LANGUAGE' => 'Ngôn ngữ:',
    'LBL_CUSTOM_FIELDS' => '* trường được tạo trong Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Chỉnh sửa nhãn',
    'LBL_SECTION_PACKAGES' => 'Gói',
    'LBL_SECTION_PACKAGE' => 'Gói',
    'LBL_SECTION_MODULES' => 'Mô-đun',
    'LBL_SECTION_DROPDOWNS' => 'Trình đơn thả xuống',
    'LBL_SECTION_PROPERTIES' => 'Thuộc tính',
    'LBL_SECTION_DROPDOWNED' => 'Chỉnh sửa Drop Downs',
    'LBL_SECTION_HELP' => 'Giúp đỡ',
    'LBL_SECTION_MAIN' => 'Chính',
    'LBL_SECTION_FIELDEDITOR' => 'Sửa trường',
    'LBL_SECTION_DEPLOY' => 'Triển khai',
    'LBL_SECTION_MODULE' => 'Chức năng',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Mặc định',
    'LBL_HIDDEN' => 'Ẩn',
    'LBL_AVAILABLE' => 'Có sẵn',
    'LBL_LISTVIEW_DESCRIPTION' => 'Có ba cột được hiển thị dưới đây. Cột <b>Mặc định</b> chứa các trường được hiển thị trong chế độ xem danh sách theo mặc định. Cột <b>Bổ sung</b> chứa các trường mà người dùng có thể chọn sử dụng để tạo chế độ xem tùy chỉnh. Cột <b>Có sẵn</b> hiển thị các trường có sẵn cho bạn với tư cách quản trị viên để thêm vào các cột Mặc định hoặc Bổ sung để người dùng sử dụng.',
    'LBL_LISTVIEW_EDIT' => 'Trình chỉnh sửa chế độ Xem Danh sách',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Xem trước',
    'LBL_MB_RESTORE' => 'Khôi phục',
    'LBL_MB_DELETE' => 'Xóa',
    'LBL_MB_DEFAULT_LAYOUT' => 'Layout mặc định',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Thêm',
    'LBL_BTN_SAVE' => 'Lưu',
    'LBL_BTN_SAVE_CHANGES' => 'Lưu Thay đổi',
    'LBL_BTN_DONT_SAVE' => 'Bỏ các thay đổi',
    'LBL_BTN_CANCEL' => 'Hủy',
    'LBL_BTN_CLOSE' => 'Đóng',
    'LBL_BTN_SAVEPUBLISH' => 'Lưu & Triển khai',
    'LBL_BTN_CLONE' => 'Nhân bản',
    'LBL_BTN_ADDROWS' => 'Thêm hàng',
    'LBL_BTN_ADDFIELD' => 'Thêm các trường',
    'LBL_BTN_ADDDROPDOWN' => 'Thêm Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Sắp xếp tăng dần',
    'LBL_BTN_SORT_DESCENDING' => 'Sắp xếp giảm dần',
    'LBL_BTN_EDLABELS' => 'Chỉnh sửa nhãn',
    'LBL_BTN_UNDO' => 'Trở lại',
    'LBL_BTN_REDO' => 'Làm lại',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Thêm trường tùy chỉnh',
    'LBL_BTN_EXPORT' => 'Tùy chỉnh xuất',
    'LBL_BTN_DUPLICATE' => 'Trùng lặp',
    'LBL_BTN_PUBLISH' => 'Xuất bản',
    'LBL_BTN_DEPLOY' => 'Triển khai',
    'LBL_BTN_EXP' => 'Xuất ra',
    'LBL_BTN_DELETE' => 'Xóa',
    'LBL_BTN_VIEW_LAYOUTS' => 'Xem bố cục',
    'LBL_BTN_VIEW_FIELDS' => 'Xem trường',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Xem mối quan hệ',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Thêm Mối quan hệ',
    'LBL_BTN_RENAME_MODULE' => 'Thay đổi tên Module',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Lỗi: Tệp tin đã tồn tại',
    'ERROR_INVALID_KEY_VALUE' => "Lỗi: Giá trị khóa không hợp lệ: [']",
    'ERROR_NO_HISTORY' => 'Không có file lịch sử được tìm thấy',
    'ERROR_MINIMUM_FIELDS' => 'Bố cục phải chứa ít nhất một trường',
    'ERROR_GENERIC_TITLE' => 'Một lỗi đã xảy ra',
    'ERROR_REQUIRED_FIELDS' => 'Bạn có chắc bạn muốn tiếp tục không? Các lĩnh vực sau đây bắt buộc bị mất từ cách bố trí:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Tên gói:',
    'LBL_MODULE_NAME' => 'Tên Module:',
    'LBL_AUTHOR' => 'Tác giả:',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_KEY' => 'Key:',
    'LBL_ADD_README' => ' Đọc tôi',
    'LBL_LAST_MODIFIED' => 'Lần cuối sửa đổi:',
    'LBL_NEW_MODULE' => 'Module mới',
    'LBL_LABEL' => 'Nhãn:',
    'LBL_LABEL_TITLE' => 'Nhãn',
    'LBL_WIDTH' => 'Chiều rộng',
    'LBL_PACKAGE' => 'Gói:',
    'LBL_TYPE' => 'Loại:',
    'LBL_NAV_TAB' => 'Thanh điều hướng',
    'LBL_CREATE' => 'Tạo',
    'LBL_LIST' => 'Danh sách',
    'LBL_VIEW' => 'Xem',
    'LBL_HISTORY' => 'Xem lịch sử',
    'LBL_RESTORE_DEFAULT' => 'Khôi phục về Mặc định',
    'LBL_ACTIVITIES' => 'Hoạt động',
    'LBL_NEW' => 'Mới',
    'LBL_TYPE_BASIC' => 'cơ bản',
    'LBL_TYPE_COMPANY' => 'công ty',
    'LBL_TYPE_PERSON' => 'người',
    'LBL_TYPE_ISSUE' => 'vấn đề',
    'LBL_TYPE_SALE' => 'bán hàng',
    'LBL_TYPE_FILE' => 'tập tin',
    'LBL_RSUB' => 'Đây là subpanel sẽ được hiển thị trong module của bạn',
    'LBL_MSUB' => 'Đây là Suppanel mà module của bạn cung cấp cho module liên quan để hiển thị',
    'LBL_MB_IMPORTABLE' => 'Đang nhập',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] đã xóa',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Tùy chỉnh xuất',
    'LBL_EC_NAME' => 'Tên gói:',
    'LBL_EC_AUTHOR' => 'Tác giả:',
    'LBL_EC_DESCRIPTION' => 'Mô tả:',
    'LBL_EC_CHECKERROR' => 'Vui lòng chọn một module.',
    'LBL_EC_CUSTOMFIELD' => '(Các) trường được tùy biến',
    'LBL_EC_CUSTOMLAYOUT' => '(Các) bố cục được tùy chỉnh',
    'LBL_EC_NOCUSTOM' => 'Không có module nào được tùy chỉnh.',
    'LBL_EC_EMPTYCUSTOM' => 'có tùy chỉnh trống.',
    'LBL_EC_EXPORTBTN' => 'Xuất ra',
    'LBL_MODULE_DEPLOYED' => 'Module đã được triển khai.',
    'LBL_UNDEFINED' => 'không xác định',
    'LBL_EC_VIEWS' => 'xem được tùy chỉnh',
    'LBL_EC_SUGARFEEDS' => '(các) trường được tùy biến',
    'LBL_EC_DASHLETS' => '(các) Dashlet được tùy chỉnh',
    'LBL_EC_CSS' => '(các) css được tùy chỉnh',
    'LBL_EC_TPLS' => '(các) tpls được tùy chỉnh',
    'LBL_EC_IMAGES' => '(các) ảnh được tùy chỉnh',
    'LBL_EC_JS' => '(các) js được tùy chỉnh',
    'LBL_EC_QTIP' => '(các) qtip được tùy chỉnh',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Không thể truy xuất dữ liệu',
    'LBL_AJAX_LOADING' => 'Đang tải...',
    'LBL_AJAX_DELETING' => 'Đang xóa...',
    'LBL_AJAX_BUILDPROGRESS' => 'Đang tiến hành xây dựng...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Đang tiến hành triển khai...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Kết quả',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Hoạt động này được hoàn thành thành công',
    'LBL_AJAX_LOADING_TITLE' => 'Đang Xử lý..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Xin vui lòng chờ, đang tải..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Bạn có chắc chắn muốn loại bỏ gói này? Thao tác này sẽ xóa vĩnh viễn tất cả các tệp được liên kết với gói này.',
    'LBL_JS_REMOVE_MODULE' => 'Bạn có chắc chắn muốn loại bỏ module này? Thao tác này sẽ xóa vĩnh viễn tất cả các tệp được liên kết với module này.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Mọi tuỳ chỉnh bạn đã thực hiện trong Studio sẽ bị ghi đè khi module này được triển khai lại. Bạn có chắc muốn tiếp tục?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Gói đang triển khai',
    'LBL_JS_VALIDATE_NAME' => 'Tên - Phải là chữ số, bắt đầu bằng một chữ cái và không chứa dấu cách.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Tên gói đã tồn tại',
    'LBL_JS_VALIDATE_KEY' => 'Key - Phải là chữ và số, bắt đầu bằng một chữ cái và không chứa dấu cách.',
    'LBL_JS_VALIDATE_LABEL' => 'Vui lòng nhập một nhãn sẽ được sử dụng làm Tên hiển thị cho module này',
    'LBL_JS_VALIDATE_TYPE' => 'Vui lòng chọn loại module bạn muốn xây dựng từ danh sách ở trên',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Nhãn - vui lòng thêm một nhãn sẽ được hiển thị bên trên subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Xoá trường tùy chỉnh này sẽ xóa cả trường tùy chỉnh và tất cả dữ liệu có liên quan đến trường tùy chỉnh trong cơ sở dữ liệu. Trường sẽ không còn xuất hiện trong bất kỳ bố cục mô đun nào. \n\nBạn có muốn tiếp tục không?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Bạn có chắc chắn muốn xóa mối quan hệ này?',
    'LBL_CONFIRM_DONT_SAVE' => 'Những thay đổi đã được thực hiện kể từ khi bạn lưu lần cuối, bạn có muốn lưu không?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Lưu thay đổi?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Dữ liệu có thể bị cắt ngắn và không thể hoàn tác, bạn có chắc chắn muốn tiếp tục không?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Chọn loại dữ liệu thích hợp dựa trên loại dữ liệu sẽ được nhập vào trường.',

//Revert Module labels
    'LBL_RESET' => 'Reset',
    'LBL_RESET_MODULE' => 'Đặt lại Module',
    'LBL_REMOVE_CUSTOM' => 'Gỡ bỏ các tùy chỉnh',
    'LBL_CLEAR_RELATIONSHIPS' => 'Xóa các mối quan hệ',
    'LBL_RESET_LABELS' => 'Đặt lại nhãn',
    'LBL_RESET_LAYOUTS' => 'Reset Layouts',
    'LBL_REMOVE_FIELDS' => 'Gỡ bổ các trường tùy chỉnh',
    'LBL_CLEAR_EXTENSIONS' => 'Xóa các phần mở rộng',
    'LBL_HISTORY_TIMESTAMP' => 'Mốc thời gian',
    'LBL_HISTORY_TITLE' => ' lịch sử',

    'fieldTypes' => array(
        'varchar' => 'Trường văn bản',
        'int' => 'Số nguyên',
        'float' => 'Float',
        'bool' => 'Ô đánh dấu',
        'enum' => 'DropDown',
        'dynamicenum' => 'Dynamic DropDown',
        'multienum' => 'Chọn nhiều',
        'date' => 'Ngày giờ',
        'phone' => 'Điện thoại',
        'currency' => 'Tiền tệ',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Liên quan',
        'address' => 'Địa chỉ',
        'text' => 'Vùng viết văn bản',
        'url' => 'Đường dẫn URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Ngày giờ',
        'decimal' => 'Thập phân',
        'image' => 'Ảnh',
        'wysiwyg' => 'WYSIWYG', // PR 6806
    ),
    'labelTypes' => array(
        "frequently_used" => "Nhãn thường sử dụng",
        "all" => "Tất cả các nhãn",
    ),

    'parent' => 'Flex liên quan',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Bạn đang chọn mục này để xóa khỏi danh sách thả xuống. Bất kỳ trường thả xuống nào sử dụng danh sách này với mục này vì giá trị sẽ không còn hiển thị giá trị và giá trị sẽ không còn có thể được chọn từ các trường thả xuống. Bạn có chắc chắn muốn tiếp tục không?",

    'LBL_ALL_MODULES' => 'Tất cả các mô-đun',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (liên quan {1} ID)',
);