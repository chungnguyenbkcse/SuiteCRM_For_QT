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
    //module
    'LBL_MODULE_NAME' => 'Tài liệu',
    'LBL_MODULE_TITLE' => 'Tài liệu: Trang chủ',
    'LNK_NEW_DOCUMENT' => 'Tạo Tài liệu',
    'LNK_DOCUMENT_LIST' => 'Danh sách tài liệu',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Tài liệu',
    //vardef labels
    'LBL_NAME' => 'Tên Tài liệu',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_ASSIGNED_TO' => 'Giao cho:',
    'LBL_CATEGORY' => 'Chủng loại',
    'LBL_SUBCATEGORY' => 'Chủng loại phụ',
    'LBL_STATUS' => 'Tình trạng',
    'LBL_IS_TEMPLATE' => 'làm Mẫu',
    'LBL_TEMPLATE_TYPE' => 'Loại Tài liệu',
    'LBL_REVISION_NAME' => 'Số Bản sửa',
    'LBL_MIME' => 'Loại Mime',
    'LBL_REVISION' => 'Bản sửa',
    'LBL_DOCUMENT' => 'Tài liệu liên quan',
    'LBL_LATEST_REVISION' => 'Bản điều chỉnh cuối',
    'LBL_CHANGE_LOG' => 'Log Thay đổi',
    'LBL_ACTIVE_DATE' => 'Ngày phát hành',
    'LBL_EXPIRATION_DATE' => 'Ngày hết hạn',
    'LBL_FILE_EXTENSION' => 'Tập tin mở rộng',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Không xác định',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Tài liệu mới',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Tên Tài liệu:',
    'LBL_FILENAME' => 'Tên tập tin:',
    'LBL_FILE_UPLOAD' => 'Tập tin:',
    'LBL_DOC_VERSION' => 'Phiên bản:',
    'LBL_CATEGORY_VALUE' => 'Chủng loại:',
    'LBL_SUBCATEGORY_VALUE' => 'Chủng loại phụ:',
    'LBL_DOC_STATUS' => 'Tình trạng:',
    'LBL_DET_TEMPLATE_TYPE' => 'Loại Tài liệu:',
    'LBL_DOC_DESCRIPTION' => 'Mô tả:',
    'LBL_DOC_ACTIVE_DATE' => 'Ngày phát hành:',
    'LBL_DOC_EXP_DATE' => 'Ngày hết hạn:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Danh sách Tài liệu',
    'LBL_LIST_DOCUMENT' => 'Tài liệu',
    'LBL_LIST_CATEGORY' => 'Chủng loại',
    'LBL_LIST_SUBCATEGORY' => 'Chủng loại phụ',
    'LBL_LIST_REVISION' => 'Bản sửa',
    'LBL_LIST_LAST_REV_CREATOR' => 'phát hành bởi',
    'LBL_LIST_LAST_REV_DATE' => 'Ngày Bản sửa',
    'LBL_LIST_VIEW_DOCUMENT' => 'Xem',
    'LBL_LIST_ACTIVE_DATE' => 'Ngày phát hành',
    'LBL_LIST_EXP_DATE' => 'Ngày hết hạn',
    'LBL_LIST_STATUS' => 'Tình trạng',

    //document search form.
    'LBL_SF_CATEGORY' => 'Chủng loại:',
    'LBL_SF_SUBCATEGORY' => 'Chủng loại phụ:',

    'DEF_CREATE_LOG' => 'Tài liệu đã được tạo',

    //error messages
    'ERR_DOC_NAME' => 'Tên Tài liệu',
    'ERR_DOC_ACTIVE_DATE' => 'Ngày phát hành',
    'ERR_FILENAME' => 'Tên tập tin',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Tên Tài liệu',

    'LBL_EDIT_BUTTON' => 'Chỉnh sửa ',
    'LBL_REMOVE' => 'Xóa bỏ',

);
