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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Tiếng Việt (Vietnamese) - vi_VN',
    'moduleList' => array(
        'Home' => 'Trang chủ',
        'ResourceCalendar' => 'Quản lý lịch',
        'Contacts' => 'Liên hệ',
        'Accounts' => 'Tài khoản',
        'Alerts' => 'Cảnh báo',
        'Opportunities' => 'Cơ hội',
        'Cases' => 'Vụ việc',
        'Notes' => 'Ghi chú',
        'Calls' => 'Cuộc gọi',
        'TemplateSectionLine' => 'Bản mẫu phần dòng',
        'Calls_Reschedule' => 'Lịch gọi',
        'Emails' => 'Emails',
        'EAPM' => 'EAPM',
        'Meetings' => 'Hội họp',
        'Tasks' => 'Công việc',
        'Calendar' => 'Lịch',
        'Leads' => 'Đầu mối',
        'Currencies' => 'Tiền tệ',
        'Activities' => 'Hoạt động',
        'Bugs' => 'Lỗi',
        'Feeds' => 'RSS',
        'iFrames' => 'Trang của tôi',
        'TimePeriods' => 'Khoảng thời gian',
        'ContractTypes' => 'Kiểu hợp đồng',
        'Schedulers' => 'Lịch trình',
        'Project' => 'Dự án',
        'ProjectTask' => 'Dự án những phần việc',
        'Campaigns' => 'Chiến dịch',
        'CampaignLog' => 'Ghi lại chiến dịch',
        'Documents' => 'Tài liệu',
        'DocumentRevisions' => 'Phiên bản tài liệu',
        'Connectors' => 'Kết nối',
        'Roles' => 'Vai trò',
        'Notifications' => 'Chú ý',
        'Sync' => 'Đồng bộ',
        'Users' => 'Người dùng',
        'Employees' => 'Nhân viên',
        'Administration' => 'Quản trị viên',
        'ACLRoles' => 'Vai trò',
        'InboundEmail' => 'Hộp thư đến',
        'Releases' => 'Phát hành',
        'Prospects' => 'Mục tiêu',
        'Queues' => 'Hàng đợi',
        'EmailMarketing' => 'Email quảng bá',
        'EmailTemplates' => 'Email - mẫu',
        'ProspectLists' => 'Mục tiêu - danh sách',
        'SavedSearch' => 'Lưu kết quả tìm kiếm',
        'UpgradeWizard' => 'Trình nâng cấp',
        'Trackers' => 'Theo dõi',
        'TrackerSessions' => 'Theo dõi phiên làm ',
        'TrackerQueries' => 'Theo dõi truy vấn',
        'FAQ' => 'Hỏi đáp',
        'Newsletters' => 'Tin mới',
        'SugarFeed' => 'Nguồn cấp dữ liệu SuiteCRM',
        'SugarFavorites' => 'Đánh dấu SuiteCRM vào mục yêu thích',

        'OAuthKeys' => 'Bảo Mật ',
        'OAuthTokens' => 'Bảo mật',
        'OAuth2Clients' => 'OAuth Clients',
        'OAuth2Tokens' => 'Bảo mật',
    ),

    'moduleListSingular' => array(
        'Home' => 'Trang chủ',
        'Dashboard' => 'Tổng quan',
        'Contacts' => 'Liên hệ',
        'Accounts' => 'Tài khoản',
        'Opportunities' => 'Cơ hội',
        'Cases' => 'Kịch bản',
        'Notes' => 'Ghi chú',
        'Calls' => 'Cuộc gọi',
        'Emails' => 'Email',
        'EmailTemplates' => 'Email mẫu',
        'Meetings' => 'Hội họp',
        'Tasks' => 'Công việc',
        'Calendar' => 'Lịch',
        'Leads' => 'Đầu mối',
        'Activities' => 'Hoạt động',
        'Bugs' => 'Phát sinh',
        'KBDocuments' => 'Kiến thức cơ sở',
        'Feeds' => 'RSS',
        'iFrames' => 'Trang của tôi',
        'TimePeriods' => 'Khoảng thời gian',
        'Project' => 'Dự án',
        'ProjectTask' => 'Công việc dự án',
        'Prospects' => 'Mục tiêu',
        'Campaigns' => 'Chiến dịch kinh doanh',
        'Documents' => 'Tài liệu',
        'Sync' => 'Đồng bộ',
        'Users' => 'Người dùng',
        'SugarFavorites' => 'Đánh dấu SuiteCRM vào mục yêu thích',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Đồng ý',
        '2' => 'Không',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Nhà tư vấn',
        'Competitor' => 'Đối thủ',
        'Customer' => 'Khách hàng',
        'Integrator' => 'Hợp tác',
        'Investor' => 'Đầu tư',
        'Partner' => 'Đối tác',
        'Press' => 'Báo chí',
        'Prospect' => 'Tiềm năng',
        'Reseller' => 'bán lẻ',
        'Other' => 'Khác',
    ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'May mặc',
        'Banking' => 'Ngân hàng',
        'Biotechnology' => 'Sinh học',
        'Chemicals' => 'Hóa chất',
        'Communications' => 'Thông tin',
        'Construction' => 'Xây dựng',
        'Consulting' => 'Tư vấn',
        'Education' => 'Giáo dục',
        'Electronics' => 'Điện',
        'Energy' => 'Năng lượng',
        'Engineering' => 'Kỹ sư',
        'Entertainment' => 'Giải trí',
        'Environmental' => 'Môi trường',
        'Finance' => 'Tài chính',
        'Government' => 'Chính phủ',
        'Healthcare' => 'Chăm sóc sức khỏe',
        'Hospitality' => 'Cư trú',
        'Insurance' => 'Bảo hiểm',
        'Machinery' => 'Máy móc',
        'Manufacturing' => 'Nhà xưởng',
        'Media' => 'Đa phương tiện',
        'Not For Profit' => 'Phi lợi nhuận',
        'Recreation' => 'tái tạo',
        'Retail' => 'Bán lẻ',
        'Shipping' => 'Mua sắm',
        'Technology' => 'Công nghệ',
        'Telecommunications' => 'Truyền thông',
        'Transportation' => 'Vận chuyển',
        'Utilities' => 'Đa dụng',
        'Other' => 'Khác',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Cuộc gọi hoàn hảo',
        'Existing Customer' => 'Khách hàng có sẵn',
        'Self Generated' => 'Tự tạo',
        'Employee' => 'Nhân viên',
        'Partner' => 'Đối tác',
        'Public Relations' => 'Quan hệ cộng đồng',
        'Direct Mail' => 'Gửi thư trực tiếp',
        'Conference' => 'Hội nghị',
        'Trade Show' => 'Hội chợ triển lãm',
        'Web Site' => 'Trang web',
        'Word of mouth' => 'Truyền miệng',
        'Email' => 'Email',
        'Campaign' => 'Chiến dịch kinh doanh',
        'Other' => 'Khác',
    ),
    'language_dom' => array(
        'af' => 'Afrikaans',
        'ar-EG' => 'Arabic, Egypt',
        'ar-SA' => 'Arabic, Saudi Arabia',
        'az' => 'Azerbaijani',
        'bg' => 'Bulgarian',
        'bn' => 'Bengali',
        'bs' => 'Bosnian',
        'ca' => 'Catalan',
        'ceb' => 'Cebuano',
        'cs' => 'Czech',
        'da' => 'Danish',
        'de' => 'German',
        'de-CH' => 'German, Switzerland',
        'el' => 'Greek',
        'en-GB' => 'English, United Kingdom',
        'en-US' => 'English, United States',
        'es-ES' => 'Spanish',
        'es-MX' => 'Spanish, Mexico',
        'es-PY' => 'Spanish, Paraguay',
        'es-VE' => 'Spanish, Venezuela',
        'et' => 'Estonian',
        'eu' => 'Basque',
        'fa' => 'Persian',
        'fi' => 'Filipino',
        'fil' => 'Finnish',
        'fr' => 'French',
        'fr-CA' => 'French, Canada',
        'gu-IN' => 'Gujarati',
        'he' => 'Hebrew',
        'hi' => 'Hindi',
        'hr' => 'Croatian',
        'hu' => 'Hungarian',
        'hy-AM' => 'Armenian',
        'id' => 'Indonesian',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'ka' => 'Georgian',
        'ko' => 'Korean',
        'lt' => 'Lithuanian',
        'lv' => 'Latvian',
        'mk' => 'Macedonian',
        'nb' => 'Norwegian Bokmal',
        'nl' => 'Dutch',
        'pcm' => 'Nigerian Pidgin',
        'pl' => 'Polish',
        'pt-BR' => 'Portuguese, Brazilian',
        'pt-PT' => 'Portuguese',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'si-LK' => 'Sinhala',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'sq' => 'Albanian',
        'sr-CS' => 'Serbian (Latin)',
        'sv-SE' => 'Swedish',
        'th' => 'Thái Lan',
        'tl' => 'Tagalog',
        'tr' => 'Turkish',
        'uk' => 'Ukrainian',
        'ur-IN' => 'Urdu (India)',
        'ur-PK' => 'Urdu (Pakistan)',
        'vi' => 'Tiếng Việt',
        'yo' => 'Yoruba',
        'zh-CN' => 'Chinese Simplified',
        'zh-TW' => 'Chinese Traditional',
        'other' => 'Khác',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Doanh nghiệp có sẵn',
        'New Business' => 'Doang nghiệp mới',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Doanh thu',
        'Investment' => 'Đầu tư',
        'Expected_Revenue' => 'Dự kiến doanh thu',
        'Budget' => 'Ngân sách',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Người ra quyết định chính',
        'Business Decision Maker' => 'Người ra quyết định kinh doanh',
        'Business Evaluator' => 'Người đánh giá kinh doanh',
        'Technical Decision Maker' => 'Người ra quyết định kỹ thuật',
        'Technical Evaluator' => 'Người đánh giá kỹ thuật',
        'Executive Sponsor' => 'Nhà tài trợ',
        'Influencer' => 'Người ảnh hưởng',
        'Other' => 'Khác',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Thông tin liên hệ chính',
        'Alternate Contact' => 'Thông tin liên hệ phụ',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Khảo sát',
        'Qualification' => 'Trình độ chuyên môn',
        'Needs Analysis' => 'Cần phân tích',
        'Value Proposition' => 'Đề xuất giá trị',
        'Id. Decision Makers' => 'Xác minh người ra quyết định',
        'Perception Analysis' => 'Giải thích phân tích',
        'Proposal/Price Quote' => 'Khảo sát/Báo giá',
        'Negotiation/Review' => 'Thương lượng/đánh giá',
        'Closed Won' => 'Đã khóa (Thành công)',
        'Closed Lost' => 'Kết thúc thất bại',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Cuộc gọi',
        'Meeting' => 'Hội họp',
        'Task' => 'Công việc',
        'Email' => 'Email',
        'Note' => 'Ghi chú',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Ông.',
        'Ms.' => 'Cô.',
        'Mrs.' => 'Bà.',
        'Miss' => 'Nhỡ',
        'Dr.' => 'Tiến sĩ.',
        'Prof.' => 'Giáo sư.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 phút trước',
        300 => '5 phút trước',
        600 => '10 phút trước',
        900 => '15 phút trước',
        1800 => '30 phút trước',
        3600 => '1 giờ trước',
        7200 => '2 giờ trước',
        10800 => '3 giờ trước',
        18000 => '5 giờ trước',
        86400 => '1 ngày trước',
    ),

    'task_priority_default' => 'Đa phương tiện',
    'task_priority_dom' => array(
        'High' => 'Cao',
        'Medium' => 'Đa phương tiện',
        'Low' => 'Thấp',
    ),
    'task_status_default' => 'Not Started',
    'task_status_dom' => array(
        'Not Started' => 'Chưa bắt đầu',
        'In Progress' => 'Đang tiến hành',
        'Completed' => 'Hoàn thành',
        'Pending Input' => 'Đang chờ xử lý đầu vào',
        'Deferred' => 'Hoãn lại',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã giữ lại',
        'Not Held' => 'Không giữ lại',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Khác',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã giữ lại',
        'Not Held' => 'Không giữ lại',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Trong giới hạn',
        'Outbound' => 'Vượt giới hạn',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Mới',
        'Assigned' => 'Đã giao',
        'In Process' => 'Trong quá trình',
        'Converted' => 'Đã chuyển đổi',
        'Recycled' => 'Tái sử dụng',
        'Dead' => 'Chết',
    ),

    'call_status_lead_dom' => array (
        'NCT' => 'Chưa liên hệ',
        'COT' => 'Đã liên hệ',
        'INT' => 'Khách hàng quan tâm', 
        'AGD' => 'Khách hàng đồng ý',
        'RFS' => 'Khách hàng từ chối',
    ),

    'call_status_disbursement_dom' => array (
        'Number of customers are busy' => 'Số khách hàng đang bận',
        'Relatives ask to call back later' => 'Người thân yêu cầu gọi lại sau',
        'Customer does not have any card' => 'Khách hàng không có bất kỳ thẻ nào', 
        'Customers are not suitable for information' => 'Khách hàng không phù hợp về thông tin',
        'Customer denied fraud suspicion' => 'Khách hàng bị từ chối tình nghi gian lận',
        'Customers are thinking again - call back later' => 'Khách hàng đang suy nghĩ lại - gọi lại sau',
        'Customers who want to borrow do not have a card' => 'Khách hàng muốn vay chưa có thẻ',
        'Customers are interested but haven\'t picked up the phone yet' => 'Khách hàng quan tâm nhưng chưa bắt máy',
        'Customers are waiting for the card to arrive' => 'Khách hàng đang đợi thẻ về',
        'Customer is accepted and has been transferred' => 'Khách hàng được chấp nhận và đã được chuyển tiền',
        'Customer agrees but has not disbursed' => 'Khách hàng đồng ý nhưng chưa giải ngân được',
        'Customers refuse high interest rates' => 'Khách hàng từ chối lãi suất cao'
    ),

    'call_status_description_lead_dom' => array (
        '01_NCT_Engaged' => 'Số khách hàng đang bận',
        '02_NCT_No_response' => 'Không có phản hồi từ khách hàng ', 
        '03_NCT_Not_available' => 'Số điện thoại khách hàng không sẵn sàng (tắt máy, không tín hiệu ) - theo dõi lại.',
        '04_NCT_Relative_call_back' => 'Người thân yêu cầu gọi lại sau',
        '05_NCT_Relative_call_new' => 'Người thân cung cấp số điện thoại mới',
        '06_NCT_Invalid_number' => 'Số điện thoại bị thiếu số hoặc tổng đài thông báo số điện thoại không tồn tại',
        '01_COT_Not_eligible_No_Card' => 'Khách hàng không có bất kỳ thẻ nào',
        '02_COT_Not_eligible_Wrong_Info' => 'Khách hàng không phù hợp về thông tin',
        '03_COT_Not_interested_Complain' => 'Khách hàng phàn nàn liên hệ nhiều',
        '04_COT_Client_busy' => 'Khách hàng đang bận và chưa tư vấn',
        '01_INT_no_money_in_card' => 'Khách hàng bị từ chối / Không đủ tiền trên thẻ',
        '02_INT_Consider_Call_back' => 'Khách hàng đang suy nghĩ lại - gọi lại sau',
        '03_INT_Client_need_a_card' => 'Khách hàng muốn vay chưa có thẻ',
        '04_INT_Client_interest_but_no_pick_up' => 'Khách hàng quan tâm nhưng chưa bắt máy',
        '05_INT_Client_interest_but_no_pick_up' => 'Khách hàng đang đợi thẻ về', 
        '01_AGD_Approved_and_paid_money' => 'Khách hàng được chấp nhận và đã được chuyển tiền',
        '02_AGD_Schedules_Application_with_disbursement' => 'Khách hàng đồng ý và chuyển sang bộ phận giải ngân',
        '03_AGD_Agreed_but_still_not_contact' => 'Khách hàng đồng ý nhưng chưa giải ngân được',
        '01_RFS_Refused_negative' => 'Khách hàng từ chối và có thái độ tiêu cực',
        '02_RFS_Refused_High_Rate' => 'Khách hàng từ chối lãi suất cao',
        '03_RFS_Refused_Loan_Amount' => 'Khách hàng từ chối khoản vay không phù hợp',
        '04_RFS_Refused_No_need' => 'Khách hàng từ chối không cần trong thời gian này',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Cao',
        'P2' => 'Đa phương tiện',
        'P3' => 'Thấp',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Người dùng',
        'Administrator' => 'Quản trị viên',
    ),
    'user_status_dom' => array(
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Không hoạt động',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Mã email',
    ),
    'employee_status_dom' => array(
        'Active' => 'Đang hoạt động',
        'Terminated' => 'Nghỉ việc',
        'Leave of Absence' => 'Nghỉ phép',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Cao',
        'Medium' => 'Đa phương tiện',
        'Low' => 'Thấp',
    ),
    'project_task_priority_default' => 'Đa phương tiện',

    'project_task_status_options' => array(
        'Not Started' => 'Chưa bắt đầu',
        'In Progress' => 'Đang tiến hành',
        'Completed' => 'Hoàn thành',
        'Pending Input' => 'Đang chờ xử lý đầu vào',
        'Deferred' => 'Hoãn lại',
    ),
    'project_task_utilization_options' => array(
        '0' => 'không có',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Dự thảo',
        'In Review' => 'Đang xem xét',
        'Underway' => 'Tiến hành',
        'On_Hold' => 'Chờ đợi',
        'Completed' => 'Hoàn thành',
    ),
    'project_status_default' => 'Dự thảo',

    'project_duration_units_dom' => array(
        'Days' => 'Ngày',
        'Hours' => 'Giờ',
    ),

    'activity_status_type_dom' => array(
        '' => '--Không--',
        'active' => 'Đang hoạt động',
        'inactive' => 'Không hoạt động',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Tài khoản',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Tài khoản',
        'Opportunities' => 'Cơ hội',
        'Cases' => 'Kịch bản',
        'Leads' => 'Đối tác tiềm năng',
        'Contacts' => 'Liên hệ', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Phát sinh',
        'Project' => 'Dự án',

        'Prospects' => 'Mục tiêu',
        'ProjectTask' => 'Công việc dự án',

        'Tasks' => 'Công việc',

    ),
// PR 4606
    'record_type_display_notes' => array(
        'Accounts' => 'Tài khoản',
        'Contacts' => 'Liên hệ',
        'Opportunities' => 'Cơ hội',
        'Campaigns' => 'Chiến dịch kinh doanh',
        'Tasks' => 'Công việc',
        'Emails' => 'Email',

        'Bugs' => 'Phát sinh',
        'Project' => 'Dự án',
        'ProjectTask' => 'Công việc dự án',
        'Prospects' => 'Mục tiêu',
        'Cases' => 'Kịch bản',
        'Leads' => 'Đầu mối',

        'Meetings' => 'Hội họp',
        'Calls' => 'Cuộc gọi',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Tài khoản',
        'Contacts' => 'Liên hệ',
        'Tasks' => 'Công việc',
        'Opportunities' => 'Cơ hội',

        'Bugs' => 'Phát sinh',
        'Cases' => 'Kịch bản',
        'Leads' => 'Đầu mối',

        'Project' => 'Dự án',
        'ProjectTask' => 'Công việc dự án',

        'Prospects' => 'Mục tiêu',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Báo giá',
        'AOS_Invoices' => 'Hóa đơn',
        'AOS_Contracts' => 'Hợp đồng',
    ),
    'issue_priority_default_key' => 'Đa phương tiện',
    'issue_priority_dom' => array(
        'Urgent' => 'Khẩn cấp',
        'High' => 'Cao',
        'Medium' => 'Đa phương tiện',
        'Low' => 'Thấp',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Được chấp nhận',
        'Duplicate' => 'Trùng lặp',
        'Closed' => 'Đã đóng',
        'Out of Date' => 'Hết hạn',
        'Invalid' => 'Không hợp lệ',
    ),

    'issue_status_default_key' => 'Mới',
    'issue_status_dom' => array(
        'New' => 'Mới',
        'Assigned' => 'Đã giao',
        'Closed' => 'Đã đóng',
        'Pending' => 'Trì hoãn',
        'Rejected' => 'Đã từ chối',
    ),

    'bug_priority_default_key' => 'Đa phương tiện',
    'bug_priority_dom' => array(
        'Urgent' => 'Khẩn cấp',
        'High' => 'Cao',
        'Medium' => 'Đa phương tiện',
        'Low' => 'Thấp',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Được chấp nhận',
        'Duplicate' => 'Trùng lặp',
        'Fixed' => 'Đã sửa',
        'Out of Date' => 'Hết hạn',
        'Invalid' => 'Không hợp lệ',
        'Later' => 'Sau',
    ),
    'bug_status_default_key' => 'Mới',
    'bug_status_dom' => array(
        'New' => 'Mới',
        'Assigned' => 'Đã giao',
        'Closed' => 'Đã đóng',
        'Pending' => 'Trì hoãn',
        'Rejected' => 'Đã từ chối',
    ),
    'bug_type_default_key' => 'Phát sinh',
    'bug_type_dom' => array(
        'Defect' => 'Khiếm khuyết',
        'Feature' => 'Tính năng',
    ),
    'case_type_dom' => array(
        'Administration' => 'Quản trị viên',
        'Product' => 'Sản phẩm',
        'User' => 'Người dùng',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Nội bộ',
        'Forum' => 'Diễn đàn',
        'Web' => 'Web',
        'InboundEmail' => 'Hộp thư đến',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Khách hàng',
        'Activities' => 'Hoạt động',
        'Bugs' => 'Lỗi',
        'Calendar' => 'Lịch',
        'Calls' => 'Cuộc gọi',
        'Campaigns' => 'Chiến dịch',
        'Cases' => 'Vụ việc',
        'Contacts' => 'Liên hệ',
        'Currencies' => 'Tiền tệ',
        'Dashboard' => 'Tổng quan',
        'Documents' => 'Tài liệu',
        'Emails' => 'Emails',
        'Feeds' => 'Nguồn cấp dữ liệu',
        'Forecasts' => 'Dự báo',
        'Help' => 'Giúp đỡ',
        'Home' => 'Trang chủ',
        'Leads' => 'Đầu mối',
        'Meetings' => 'Hội họp',
        'Notes' => 'Ghi chú',
        'Opportunities' => 'Cơ hội',
        'Outlook Plugin' => 'Outlook plugin',
        'Projects' => 'Dự án',
        'Quotes' => 'Báo giá',
        'Releases' => 'Phát hành',
        'RSS' => 'Tin',
        'Studio' => 'Studio',
        'Upgrade' => 'Nâng cấp',
        'Users' => 'Người dùng',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Lập kế hoạch',
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Không hoạt động',
        'Complete' => 'Hoàn tất',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Người bán hàng qua điện thoại',
        'Mail' => 'Thư',
        'Email' => 'Email',
        'Print' => 'In',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Ti vi',
        'NewsLetter' => 'Bản tin',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Hàng tuần',
        'Monthly' => 'Hàng tháng',
        'Quarterly' => 'Hàng quý',
        'Annually' => 'Hàng năm',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Tháng một',
        '2' => 'Tháng Hai',
        '3' => 'Tháng Ba',
        '4' => 'Tháng Tư',
        '5' => 'Tháng Năm',
        '6' => 'Tháng Sáu',
        '7' => 'Tháng Bảy',
        '8' => 'Tháng Tám',
        '9' => 'Tháng Chín',
        '10' => 'Tháng Mười',
        '11' => 'Tháng Mười Một',
        '12' => 'Tháng Mười Hai',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Th. 1',
        '2' => 'Th. 2',
        '3' => 'Th. 3',
        '4' => 'Th. 4',
        '5' => 'Tháng Năm',
        '6' => 'Th. 6',
        '7' => 'Th. 7',
        '8' => 'Th. 8',
        '9' => 'Th. 9',
        '10' => 'Th. 10',
        '11' => 'Th. 11',
        '12' => 'Th. 12',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Chủ Nhật',
        '2' => 'Thứ Hai',
        '3' => 'Thứ Ba',
        '4' => 'Thứ Tư',
        '5' => 'Thứ Năm',
        '6' => 'Thứ Sáu',
        '7' => 'Thứ Bảy',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'C.Nhật',
        '2' => 'T.2',
        '3' => 'T.3',
        '4' => 'T.4',
        '5' => 'T.5',
        '6' => 'T.6',
        '7' => 'T.7',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'sáng',
        'pm' => 'chiều',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Sáng',
        'PM' => 'Chiều',
    ),

    'dom_email_types' => array(
        'out' => 'Gửi',
        'archived' => 'Lưu trữ',
        'draft' => 'Dự thảo',
        'inbound' => 'Trong giới hạn',
        'campaign' => 'Chiến dịch kinh doanh',
    ),
    'dom_email_status' => array(
        'archived' => 'Lưu trữ',
        'closed' => 'Đã đóng',
        'draft' => 'Dự thảo',
        'read' => 'Đọc',
        'replied' => 'Đã trả lời',
        'sent' => 'Gửi',
        'send_error' => 'Gửi lỗi',
        'unread' => 'Chưa đọc',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Lưu trữ',
    ),

    'dom_email_server_type' => array(
        '' => '--Không--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Không--',
        'createcase' => 'Tạo Vụ việc',
        'bounce' => 'Xử lý thư trả lại',
    ),
    'dom_email_distribution' => array(
        '' => '--Không--',
        'direct' => 'Chỉ định trực tiếp',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Ít bận rộn',
    ),
    'dom_email_errors' => array(
        1 => 'Chỉ chọn một người dùng khi trực tiếp giao hàng.',
        2 => 'Bạn phải gán chỉ kiểm tra các mục khi trực tiếp giao hàng.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Có',
        'bool_false' => 'Không',
    ),
    'dom_int_bool' => array(
        1 => 'Có',
        0 => 'Không',
    ),
    'dom_switch_bool' => array(
        'on' => 'Có',
        'off' => 'Không',
        '' => 'Không',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM Email của khách hàng',
        'mailto' => 'Ứng dụng Email bên ngoài',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML trực tiếp',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Định dạng Email mặc định',
        'html' => 'HTML Email',
        'plain' => 'Thư điện tử văn bản thuần',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Thời gian hoạt động đã qua, không được thực hiện',
        'ready' => 'Sẵn sàng',
        'in progress' => 'Đang tiến hành',
        'failed' => 'Thất bại',
        'completed' => 'Hoàn thành',
        'no curl' => 'Không chạy: cURL không có sẵn',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Không hoạt động',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Phút',
        'hour' => 'Giờ',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Kiến thức cơ bản',
        'Sales' => 'Bán hàng',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Lưu trữ',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketing tài sản thế chấp',
        'Product Brochures' => 'Tài liệu quảng cáo sản phẩm',
        'FAQ' => 'Hỏi đáp',
    ),

    'document_status_dom' => array(
        'Active' => 'Đang hoạt động',
        'Draft' => 'Dự thảo',
        'FAQ' => 'Hỏi đáp',
        'Expired' => 'hết hạn',
        'Under Review' => 'Đang xem xét',
        'Pending' => 'Trì hoãn',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Hòa trộn Mail',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Thỏa thuận cấp phép',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Chấp nhận',
        'decline' => 'Từ chối',
        'tentative' => 'Dự kiến',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Được chấp nhận',
        'decline' => 'Đã từ chối',
        'tentative' => 'Dự kiến',
        'none' => 'Không có',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Không có',
        'Daily' => 'Hàng ngày',
        'Weekly' => 'Hàng tuần',
        'Monthly' => 'Hàng tháng',
        'Yearly' => 'Hàng Năm',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'Ngày',
        'Weekly' => 'Tuần',
        'Monthly' => 'Tháng',
        'Yearly' => 'Năm',
    ),

    'duration_dom' => array(
        '' => 'Không có',
        '900' => '15 phút',
        '1800' => '30 phút',
        '2700' => '45 phút',
        '3600' => '1 giờ',
        '5400' => '1,5 giờ',
        '7200' => '2 giờ',
        '10800' => '3 giờ',
        '21600' => '6 giờ',
        '86400' => '1 ngày',
        '172800' => '2 Ngày',
        '259200' => '3 ngày',
        '604800' => '1 Tuần',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Mặc định',
        'seed' => 'Hạt giống',
        'exempt_domain' => 'Danh sách đàn áp - bằng tên miền',
        'exempt_address' => 'Danh sách đàn áp - bằng địa chỉ Email',
        'exempt' => 'Danh sách đàn áp - bằng Id',
        'test' => 'Thử nghiệm',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Đang hoạt động',
        'inactive' => 'Không hoạt động',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Tin nhắn đã gửi/đã cố gắng',
        'send error' => 'Tin nhắn bị trả về, khác',
        'invalid email' => 'Tin nhắn bị trả về, không hợp lệ',
        'link' => 'Bấm vào thông qua liên kết',
        'viewed' => 'Xem tin nhắn',
        'removed' => 'Từ chối nhận',
        'lead' => 'Đầu mối đã tạo',
        'contact' => 'Liên hệ đã được tạo',
        'blocked' => 'Bị đàn áp bởi địa chỉ hoặc tên miền',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Liên hệ',
        'Users' => 'Người dùng',
        'Prospects' => 'Mục tiêu',
        'Leads' => 'Đầu mối',
        'Accounts' => 'Khách hàng',
    ),
    'merge_operators_dom' => array(
        'like' => 'Có chứa',
        'exact' => 'Chính xác',
        'start' => 'Bắt đầu với',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Có',
        'false' => 'Không',
        'required' => 'Yêu cầu',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Vô hiệu hóa',
        1 => 'Kích hoạt',
    ),

    'projects_priority_options' => array(
        'high' => 'Cao',
        'medium' => 'Đa phương tiện',
        'low' => 'Thấp',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Chưa bắt đầu',
        'inprogress' => 'Đang tiến hành',
        'completed' => 'Hoàn thành',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Mở rộng huyền thoại',
        'collapselegend' => 'Sụp đổ huyền thoại',
        'clickfordrilldown' => 'Bấm để chạy xuống',
        'detailview' => 'Các chi tiết khác',
        'piechart' => 'Bảng xếp từng cái',
        'groupchart' => 'Bảng xếp hạng nhóm',
        'stackedchart' => 'Biểu đồ xếp chồng lên nhau',
        'barchart' => 'Biểu đồ thanh',
        'horizontalbarchart' => 'Biểu đồ thanh ngang',
        'linechart' => 'Bảng xếp từng hàng',
        'noData' => 'Dữ liệu không có',
        'print' => 'In',
        'pieWedgeName' => 'Nhiều mục',
    ),
    'release_status_dom' => array(
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Không hoạt động',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Trích dẫn đơn (&#39;)',
        '"' => 'Trích dẫn kép (&#34;)',
        '' => 'Không có',
        'other' => 'Khác:',
    ),
    'import_delimeter_options' => array(
        ',' => '\'',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Khác:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Cửa sổ Mới',
        '_self' => 'Cùng cửa sổ',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Không tự làm tươi',
        '30' => 'Mỗi 30 giây',
        '60' => 'Mỗi 1 phút',
        '180' => 'Mỗi 3 phút',
        '300' => 'Mỗi 5 phút',
        '600' => 'Mỗi 10 phút',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Không bao giờ',
        '30' => 'Mỗi 30 giây',
        '60' => 'Mỗi 1 phút',
        '180' => 'Mỗi 3 phút',
        '300' => 'Mỗi 5 phút',
        '600' => 'Mỗi 10 phút',
    ),
    'date_range_search_dom' => array(
        '=' => 'Tương đương',
        'not_equal' => 'Không phải trên',
        'greater_than' => 'Sau',
        'less_than' => 'Trước',
        'last_7_days' => '7 ngày trước',
        'next_7_days' => '7 ngày tới',
        'last_30_days' => '30 ngày trước',
        'next_30_days' => '30 ngày tới',
        'last_month' => 'Tháng trước',
        'this_month' => 'Tháng này',
        'next_month' => 'Tháng tới',
        'last_year' => 'Năm trước',
        'this_year' => 'Năm nay',
        'next_year' => 'Năm tới',
        'between' => 'Ở giữa',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Tương đương',
        'not_equal' => 'Không bằng',
        'greater_than' => 'Lớn hơn',
        'greater_than_equals' => 'Lớn hơn hoặc bằng',
        'less_than' => 'Ít hơn',
        'less_than_equals' => 'Nhỏ hơn hoặc bằng',
        'between' => 'Ở giữa',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Sao lưu',
        'move' => 'Di chuyển',
        'donothing' => 'Không làm gì',
    ),
    // PR 6009
    'inboundmail_assign_replies_to_admin' => array(
        'donothing' => 'Không làm gì',
        'repliedtoowner' => 'Chủ quyền email trả lời',
        'recordowner' => 'Chủ quyền hồ sơ liên quan',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Kết quả', // PR 6522
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Tệp không được tải lên thành công. Có thể là cài đặt \'upload_max_filesize\' trong tệp php.ini của bạn được thiết lập là một số nhỏ',
    'ERR_SEARCH_INVALID_QUERY' => 'Có lỗi xảy ra khi thực hiện tìm kiếm. Cú pháp truy vấn của bạn không hợp lệ.', // PR 6522
    'ERR_SEARCH_NO_RESULTS' => 'Không có kết quả tìm kiếm theo tiêu chí của bạn. Thử mở rộng tìm kiếm.', // PR 6522
    'LBL_SEARCH_PERFORMED_IN' => 'Tìm kiếm thực hiện trong', // PR 6522
    'LBL_EMAIL_CODE' => 'Mã email:',
    'LBL_SEND' => 'Gửi',
    'LBL_LOGOUT' => 'Đăng xuất',
    'LBL_TOUR_NEXT' => 'Tới',
    'LBL_TOUR_SKIP' => 'Bỏ qua',
    'LBL_TOUR_BACK' => 'Lùi',
    'LBL_TOUR_TAKE_TOUR' => 'Du ngoạn một vòng',
    'LBL_MOREDETAIL' => 'Chi tiết hơn' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Sửa trực tiếp' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Xem trực tiếp' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Bộ lọc' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Thêm' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Thêm Địa chỉ Email' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Ẩn/hiện' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Xóa' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Xóa sạch' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Xóa bỏ' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Xóa địa chỉ Email' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Chọn không tham gia',
    'LBL_ID_FF_OPT_IN' => 'Chọn tham gia',
    'LBL_ID_FF_INVALID' => 'Thực hiện không hợp lệ',
    'LBL_ADD' => 'Thêm' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo công ty' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Kết nối quảng cáo bật nhanh',
    'LBL_CLOSEINLINE' => 'Đóng',
    'LBL_VIEWINLINE' => 'Xem',
    'LBL_INFOINLINE' => 'Thông tin',
    'LBL_PRINT' => 'In',
    'LBL_HELP' => 'Giúp đỡ',
    'LBL_ID_FF_SELECT' => 'Chọn',
    'DEFAULT' => 'Cơ bản', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Sắp xếp',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Kích hoạt SMTP qua SSL hoặc TLS?',
    'LBL_NO_ACTION' => 'Không có hành động bởi cái tên: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Không có hành động sẵn sàng.',
    'LBL_NO_DATA' => 'Không có dữ liệu',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => 'Lỗi bất ngờ đã xảy ra.', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => 'Một giá trị đã không được xử lý một cách chính xác đó ngăn chặn một quá trình tiếp tục.', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => 'Một giá trị không sử dụng được tìm thấy đó ngăn chặn một quá trình tiếp tục.', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => 'Các loại giá trị là khác nhau hơn so với những gì đã được dự kiến.', //PR 3669

    'LBL_ROUTING_FLAGGED' => 'cài đặt cờ',
    'LBL_NOTIFICATIONS' => 'Chú ý',

    'LBL_ROUTING_TO' => 'a',
    'LBL_ROUTING_TO_ADDRESS' => 'đến địa chỉ',
    'LBL_ROUTING_WITH_TEMPLATE' => 'với mẫu',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Kỷ lục này hiện đang có giá trị trong các lĩnh vực văn phòng điện thoại và địa chỉ. Để ghi đè lên các giá trị này với các văn phòng điện thoại và địa chỉ của tài khoản mà bạn đã chọn, nhấn "OK". Để giữ cho các giá trị hiện tại, nhấp vào "Hủy bỏ".',
    'LBL_DROP_HERE' => '[Thả ở đây]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Điền trước Gmail&#153; mặc định',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Tên',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Thuộc tính máy chủ gửi thư',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Mật khẩu SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Cổng SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Máy chủ SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Tên người dùng SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Mặc định',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Cảnh báo: Thiếu tên người dùng và mật khẩu cho tài khoản e-mail gửi đi.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Thiết lập tài khoản Mail để xem các email từ các tài khoản email của bạn.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Cung cấp thông tin máy chủ SMTP mail để sử dụng cho email gửi đi trong tài khoản Mail.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Xong',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Xóa',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Đến:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Địa chỉ Email',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Bộ lọc',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Tên',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Không tìm thấy địa chỉ',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Lưu & Thêm vào sổ địa chỉ',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Chọn người nhận Email',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Sổ địa chỉ',
    'LBL_EMAIL_REPORTS_TITLE' => 'Báo cáo',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Cảnh báo! Ngoài tài khoản bạn đang cố gắng để xóa là liên quan đến tài khoản hiện tại trong nước. Bạn có chắc bạn muốn tiếp tục không?',
    'LBL_EMAIL_ADDRESSES' => 'Hộp thư đến',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Địa chỉ Email',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Bạn đã xác nhận địa chỉ email của bạn đã được chọn để sử dụng: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Không thể xác nhận địa chỉ email',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Nhập vào SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Chỉ định',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Đính kèm',
    'LBL_EMAIL_ATTACHMENT' => 'Đính kèm',
    'LBL_EMAIL_ATTACHMENTS' => 'Từ hệ thống cơ sở',
    'LBL_EMAIL_ATTACHMENTS2' => 'Từ các tài liệu SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Mẫu đính kèm',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Tập tin',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Tài liệu',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Hủy',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Ký tự',
    'LBL_EMAIL_CHECK' => 'Kiểm tra Mail',
    'LBL_EMAIL_CHECKING_NEW' => 'Kiểm tra Email mới',
    'LBL_EMAIL_CHECKING_DESC' => 'Xin vui lòng chờ một chút... <br><br>Nếu điều này là kiểm tra đầu tiên cho các tài khoản mail, có thể mất một thời gian.',
    'LBL_EMAIL_CLOSE' => 'Đóng',
    'LBL_EMAIL_COFFEE_BREAK' => 'Kiểm tra Email mới. Tài khoản mail <br><br>lớn có thể mất một lượng đáng kể thời gian.',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Vui lòng nhập (nhiều) người nhận cho email này.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Phần nội dung của email này là trống rỗng. Cứ gửi chứ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Email này có không có chủ đề. Cứ gửi chứ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(không có chủ đề)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Vui lòng nhập địa chỉ email hợp lệ cho To, CC và BCC',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Loại bỏ  email này?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Bạn có chắc muốn xóa chữ ký này?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email được gửi',

    'LBL_EMAIL_CREATE_NEW' => '--Tạo lưu trữ--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Nhiều cùng lúc',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Trống',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Ngày được gửi bởi người gửi',
    'LBL_EMAIL_DATE_TODAY' => 'Xem Lịch',
    'LBL_EMAIL_DELETE' => 'Xóa',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Xoá thư đã chọn không?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email đã xóa thành công.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Xoá tin nhắn',
    'LBL_EMAIL_DETAILS' => 'Chi tiết',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Chỉ có địa chỉ chính sẽ được sử dụng khi làm việc với danh bạ.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Làm rỗng thùng rác',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Đang xóa máy chủ của thư gửi đi',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Đang làm sạch bộ nhớ tập tin',
    'LBL_EMAIL_EMPTY_MSG' => 'Không có email để hiển thị.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Không có địa chỉ email để hiển thị.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Tên thư mục phải là duy nhất và không để trống. Vui lòng thử lại.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Không thể xóa một thư mục. Hoặc thư mục hoặc thư mục con có email hoặc một hộp thư liên quan đến nó.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Không thể xác định thư mục dự kiến từ bối cảnh. Thử lại.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Hãy kiểm tra cài đặt của bạn.',
    'LBL_EMAIL_ERROR_DESC' => 'Lỗi được phát hiện: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Bạn không có quyền truy cập vào khu vực này. Liên hệ với quản trị trang web của bạn để có được truy cập.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Tên thư mục SuiteCRM phải là duy nhất.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Vui lòng nhập một số tiêu chí tìm kiếm.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Một lỗi đã xảy ra',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Thông báo đã gỡ bỏ khỏi máy chủ',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Tin nhắn đã xóa từ máy chủ hoặc di chuyển đến một thư mục khác nhau',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Kết nối tới máy chủ thư đã thất bại. Xin vui lòng liên hệ với người quản trị',
    'LBL_EMAIL_ERROR_MOVE' => 'Di chuyển email giữa máy chủ và/hoặc tài khoản thư không được hỗ trợ tại thời điểm này.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Lỗi di chuyển',
    'LBL_EMAIL_ERROR_NAME' => 'Tên là bắt buộc.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Từ địa chỉ được yêu cầu. Vui lòng nhập một địa chỉ email hợp lệ.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Vui lòng cung cấp một tập tin.',
    'LBL_EMAIL_ERROR_SERVER' => 'Một địa chỉ máy chủ là cần thiết.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Tài khoản thư có thể không đã được lưu.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Xuất hiện lỗi trong khi giao tiếp với máy chủ gửi thư.',
    'LBL_EMAIL_ERROR_USER' => 'Tên truy cập là bắt buộc.',
    'LBL_EMAIL_ERROR_PORT' => 'Một cổng máy chủ gửi thư được yêu cầu.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Một giao thức máy chủ là cần thiết.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Giám sát thư mục được yêu cầu.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Thư mục thùng rác là cần thiết.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Thông tin này không có sẵn',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Không có máy chủ gửi thư đi được chỉ định.',
    'LBL_EMAIL_ERROR_SENDING' => 'Lỗi gửi Email. Xin vui lòng liên hệ với quản trị của bạn để được trợ giúp.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0',        null, null, '.gif', '') . 'Thư mục',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder',        'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Thêm',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Thêm thư mục mới',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Đổi tên thư mục',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Lưu',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Thêm thư mục này vào',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Thư mục này không thể thay đổi',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Bạn có chắc bạn muốn xóa bỏ thư mục này? \n Quá trình này không thể đảo ngược. \n Thư mục xóa sẽ loại bỏ tất cả các thư mục chứa bên trong nó.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Tên thư mục mới',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Vui lòng chọn một thư mục trước khi thực hiện hành động này.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Quản lý thư mục',

    'LBL_EMAIL_FORWARD' => 'Chuyển tiếp',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Đã tải về [[count]] của [[total]] thư điện tử',
    'LBL_EMAIL_FROM' => 'Từ',
    'LBL_EMAIL_GROUP' => 'Nhóm',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Nhóm',
    'LBL_EMAIL_HOME_FOLDER' => 'bắt đầu',
    'LBL_EMAIL_IE_DELETE' => 'Đang xóa hộp thư',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Xóa chữ ký',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Bạn có chắc chắn muốn xoá tài khoản mail này?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Xóa thành công.',
    'LBL_EMAIL_IE_SAVE' => 'Đang lưu trữ thông tin hộp thư',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Nhập Email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Nhập vào SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Nhập thiết lập',
    'LBL_EMAIL_INVALID' => 'Không hợp lệ',
    'LBL_EMAIL_LOADING' => 'Đang tải...',
    'LBL_EMAIL_MARK' => 'Điểm',
    'LBL_EMAIL_MARK_FLAGGED' => 'Khi cắm cờ',
    'LBL_EMAIL_MARK_READ' => 'Như là đọc',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Như chưa cắm cờ',
    'LBL_EMAIL_MARK_UNREAD' => 'Như là chưa đọc',
    'LBL_EMAIL_ASSIGN_TO' => 'Chỉ định cho',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Tạo thư mục',
    'LBL_EMAIL_MENU_COMPOSE' => 'Soạn thư',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Xoá thư mục',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Dọn sạch sọt rác',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Đồng bộ hóa',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Xoá tập tin tạm',
    'LBL_EMAIL_MENU_REMOVE' => 'Xóa bỏ',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Đổi tên thư mục',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Đổi tên thư mục',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Xin vui lòng thực hiện một sự lựa chọn trước khi cố thao tác này.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Tạo một thư mục (từ xa hoặc SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Xóa một thư mục (từ xa hoặc trong SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Đổ thùng rác tất cả các thư mục cho tài khoản e-mail của bạn',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Đánh dấu các email(s) đã đọc',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Đánh dấu các email(s) chưa cắm cờ',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Đổi tên một thư mục (từ xa hoặc trong SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'thông điệp',

    'LBL_EMAIL_ML_NAME' => 'Tên danh sách',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Chọn danh sách địa chỉ',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Danh sách địa chỉ có sẵn',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> chọn nhiều hơn<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Không',
    'LBL_EMAIL_NOT_SENT' => 'Hệ thống không thể xử lý yêu cầu của bạn. Xin vui lòng liên hệ với người quản trị hệ thống.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Xin vui lòng chờ một chút...',
    'LBL_EMAIL_OPEN_ALL' => 'Mở nhiều thư',
    'LBL_EMAIL_OPTIONS' => 'Tùy chọn',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Soạn nhanh',
    'LBL_EMAIL_OPT_OUT' => 'Từ chối nhận',
    'LBL_EMAIL_OPT_IN' => 'Đã tham gia',
    'LBL_EMAIL_OPT_IN_AND_INVALID' => 'Đã chọn tham gia và không hợp lệ',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Chọn ra và không hợp lệ',
    'LBL_EMAIL_PERFORMING_TASK' => 'Thực hiện nhiệm vụ',
    'LBL_EMAIL_PRIMARY' => 'Chính',
    'LBL_EMAIL_PRINT' => 'In',

    'LBL_EMAIL_QC_BUGS' => 'Phát sinh',
    'LBL_EMAIL_QC_CASES' => 'Kịch bản',
    'LBL_EMAIL_QC_LEADS' => 'Đối tác tiềm năng',
    'LBL_EMAIL_QC_CONTACTS' => 'Liên hệ',
    'LBL_EMAIL_QC_TASKS' => 'Công việc',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Cơ hội',
    'LBL_EMAIL_QUICK_CREATE' => 'Tạo nhanh',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Xây dựng lại thư mục',
    'LBL_EMAIL_RELATE_TO' => 'Liên quan',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Xem mối quan hệ',
    'LBL_EMAIL_RECORD' => 'Bản ghi email',
    'LBL_EMAIL_REMOVE' => 'Xóa bỏ',
    'LBL_EMAIL_REPLY' => 'Trả lời',
    'LBL_EMAIL_REPLY_ALL' => 'Trả lời tất cả',
    'LBL_EMAIL_REPLY_TO' => 'Trả lời cho',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Đang truy xuất thư',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Đang truy xuất bảng ghi thư',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Xin vui lòng chọn chỉ có một email',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Quay trở lại mô-đun trước?',
    'LBL_EMAIL_REVERT' => 'Đảo ngược',
    'LBL_EMAIL_RELATE_EMAIL' => 'Email có liên quan',

    'LBL_EMAIL_RULES_TITLE' => 'Quản lý quy tắc',

    'LBL_EMAIL_SAVE' => 'Lưu',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Lưu & trả lời',
    'LBL_EMAIL_SAVE_DRAFT' => 'Lưu dự thảo',
    'LBL_EMAIL_DRAFT_SAVED' => 'Bản thảo đã được lưu',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Từ',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Cho đến ngày',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Không có kết quả phù hợp với tiêu chí tìm kiếm của bạn.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Kết quả tìm kiếm',

    'LBL_EMAIL_SELECT' => 'Chọn',

    'LBL_EMAIL_SEND' => 'Gửi',
    'LBL_EMAIL_SENDING_EMAIL' => 'Đang gửi Email',

    'LBL_EMAIL_SETTINGS' => 'Tùy chỉnh',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Tài khoản thư',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Xoá bản ghi',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Kiểm tra thư mới',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Từ địa chỉ',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Địa chỉ email để kiểm tra thông báo:',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Từ tên',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Trả lời đến địa chỉ',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Đồng bộ hóa tất cả các tài khoản Mail',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Một email được gửi đến địa chỉ email xác định bằng cách sử dụng cài đặt thư gửi đi được cung cấp. Vui lòng kiểm tra để xem nếu các email nhận được để kiểm chứng các cài đặt chính xác.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Xem đầy đủ SMTP đăng nhập',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Thực hiện đồng bộ hoá đầy đủ? \nLarge tài khoản mail có thể mất vài phút.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Bấm phím Shift hoặc phím Ctrl để chọn nhiều thư mục.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Tổng quan',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Tạo nhóm thư mục',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Chỉnh sửa nhóm thư mục',

    'LBL_EMAIL_SETTINGS_NAME' => 'Tên tài khoản thư',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Chọn số lượng các email mỗi trang trong hộp thư đến. Thiết đặt này có thể cần làm mới trang để có hiệu lực.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Đang truy xuất tài khoản thư',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Các cài đặt đã được lưu.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Chỉ gửi email văn bản thuần tuý',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Emails mỗi trang',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Cài đặt hình ảnh',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Quyền ưu tiên',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Người dùng có các thư mục',
    'LBL_EMAIL_ERROR_PREPEND' => 'Đã có lỗi email:', // PR 6752
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Các máy chủ thư đi chọn cho tài khoản e-mail mà bạn đang sử dụng không hợp lệ. Kiểm tra các thiết lập hoặc lựa chọn một máy chủ thư khác cho tài khoản thư.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Một máy chủ thư đi không được cấu hình để gửi email. Xin vui lòng đặt cấu hình một máy chủ thư đi hoặc chọn một máy chủ thư đi cho tài khoản email mà bạn đang sử dụng trong cài đặt >> tài khoản thư.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Chữ ký mặc định',
    'LBL_EMAIL_SIGNATURES' => 'Chữ ký',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Khác',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[Thư mục từ xa]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[Thư mục SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'Chủ đề',
    'LBL_EMAIL_SUCCESS' => 'Thành công',
    'LBL_EMAIL_SUGAR_FOLDER' => 'Thư mục SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Nội dung mẫu thư điện tử trống rỗng',
    'LBL_EMAIL_TEMPLATES' => 'Mẫu thiết kế',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_VIEW' => 'Xem',
    'LBL_EMAIL_VIEW_HEADERS' => 'Hiển thị tiêu đề',
    'LBL_EMAIL_VIEW_RAW' => 'Màn hình hiển thị nguyên Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Tính năng này không được hỗ trợ khi sử dụng POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Các văn bản liên kết mặc định.',
    'LBL_EMAIL_YES' => 'Có',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Gửi Email kiểm tra',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Kiểm tra Email đã gửi',
    'LBL_EMAIL_MESSAGE_NO' => 'Tin nhắn số.', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Nhập khẩu đã thông qua',
    'LBL_EMAIL_IMPORT_FAIL' => 'Nhập thất bại vì tin nhắn đã được chuyển nhập hoặc đã bị xóa từ máy chủ',

    'LBL_LINK_NONE' => 'Không có',
    'LBL_LINK_ALL' => 'Tất cả',
    'LBL_LINK_RECORDS' => 'Hồ sơ',
    'LBL_LINK_SELECT' => 'Chọn',
    'LBL_LINK_ACTIONS' => 'Hành động', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Xác nhận',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Bạn có muốn đóng này #module #?',
    'LBL_INVALID_FILE_EXTENSION' => 'Phần mở rộng tệp không hợp lệ',

    'ERR_AJAX_LOAD' => 'Một lỗi đã xảy ra:',
    'ERR_AJAX_LOAD_FAILURE' => 'Đã có lỗi khi xử lý yêu cầu của bạn, hãy thử một lần sau.',
    'ERR_AJAX_LOAD_FOOTER' => 'Nếu lỗi này vẫn còn, xin vui lòng có người quản trị vô hiệu hóa Ajax cho mô-đun này',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Dấu phân cách thập phân không thể sử dụng các ký tự tương tự như hàng ngàn separator.\n\n xin vui lòng thay đổi các giá trị.',
    'ERR_DELETE_RECORD' => 'Một số hồ sơ phải được xác định để xóa liên lạc.',
    'ERR_EXPORT_DISABLED' => 'Vô hiệu hóa xuất.',
    'ERR_EXPORT_TYPE' => 'Lỗi xuất ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'không phải là một địa chỉ email hợp lệ.',
    'ERR_INVALID_FILE_REFERENCE' => 'Tham chiếu tệp không hợp lệ',
    'ERR_NO_HEADER_ID' => 'Tính năng này không được cung cấp trong phiên bản này.',
    'ERR_NOT_ADMIN' => 'Không được phép truy cập vào quản trị.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Thiếu trường bắt buộc:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Trường bắt buộc không hợp lệ:',
    'ERR_INVALID_VALUE' => 'Giá trị không hợp lệ:',
    'ERR_NO_SUCH_FILE' => 'Tệp không tồn tại trên hệ thống',
    'ERR_FILE_EMPTY' => 'Tập tin rỗng', // PR 6672
    'ERR_NO_SINGLE_QUOTE' => 'Không thể sử dụng dấu ngoặc đơn cho ',
    'ERR_NOTHING_SELECTED' => 'Xin vui lòng thực hiện một sự lựa chọn trước khi tiếp tục.',
    'ERR_SELF_REPORTING' => 'Người dùng không thể thông báo cho anh ta hoặc mình.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Không phù hợp cho lĩnh vực: ',
    'ERR_SQS_NO_MATCH' => 'Không trùng khớp',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Vui lòng chỉ định chỉ mục \'key\' trong thuộc tính Params hiển thị cho định nghĩa Meta-Data',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Lỗi: Tên cổng thông tin đã được đặt cho số liên lạc khác.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Giá trị lĩnh vực không tương thích với giá trị chính xác',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Có lỗi khi cố gắng để lưu trữ vào tài khoản bên ngoài.',
    'ERR_NO_DB' => 'Không thể kết nối cơ sở dữ liệu. Xin vui lòng tham khảo suitecrm. xem log để biết chi tiết.',
    'ERR_DB_FAIL' => 'Cơ sở dữ liệu lỗi. Xin vui lòng tham khảo suitecrm. xem log để biết chi tiết.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} tập tin chỉ có thể được sử dụng với một cơ sở dữ liệu {1} SuiteCRM.',

    'LBL_ACCOUNT' => 'Tài khoản',
    'LBL_ACCOUNTS' => 'Khách hàng',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'tài khoản',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Xem Tổng kết',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Xem Tổng kết',
    'LBL_ADD_BUTTON' => 'Thêm',
    'LBL_ADD_DOCUMENT' => 'Thêm Tài liệu',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Thêm vào mục tiêu',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Thêm địa chỉ liên lạc vào danh sách mục tiêu',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Bấm vào để đóng',
    'LBL_ADDITIONAL_DETAILS' => 'Chi tiết thêm',
    'LBL_ADMIN' => 'Quản trị viên',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Lưu trữ',
    'LBL_ASSIGNED_TO_USER' => 'Giao cho người dùng',
    'LBL_ASSIGNED_TO' => 'Giao cho:',
    'LBL_BACK' => 'Quay lại',
    'LBL_BILLING_ADDRESS' => 'Địa chỉ thanh toán',
    'LBL_QUICK_CREATE' => 'Tạo ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - mã nguồn mở CRM',
    'LBL_BUGS' => 'Lỗi',
    'LBL_BY' => 'bởi',
    'LBL_CALLS' => 'Cuộc gọi',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Gửi đã xếp hàng chiến dịch email',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Gửi',
    'LBL_CASE' => 'Kịch bản',
    'LBL_CASES' => 'Vụ việc',
    'LBL_CHANGE_PASSWORD' => 'Đổi mật khẩu',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Chọn tất cả',
    'LBL_CITY' => 'Thành phố',
    'LBL_CLEAR_BUTTON_LABEL' => 'Xóa',
    'LBL_CLEAR_BUTTON_TITLE' => 'Xóa',
    'LBL_CLEARALL' => 'Xóa hết',
    'LBL_CLOSE_BUTTON_TITLE' => 'Đóng', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Đóng và tạo mới', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Đóng và tạo mới', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Mở mục:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Soạn thư',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Soạn thư',
    'LBL_SEARCH_DROPDOWN_YES' => 'Có',
    'LBL_SEARCH_DROPDOWN_NO' => 'Không',
    'LBL_CONTACT_LIST' => 'Danh sách liên hệ',
    'LBL_CONTACT' => 'Liên hệ',
    'LBL_CONTACTS' => 'Liên hệ',
    'LBL_CONTRACT' => 'Hợp đồng',
    'LBL_CONTRACTS' => 'Hợp đồng',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_CREATE_BUTTON_LABEL' => 'Tạo', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Tạo bởi người dùng',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_CREATED' => 'Được tạo bởi',
    'LBL_CURRENT_USER_FILTER' => 'Dữ liệu của tôi:',
    'LBL_CURRENCY' => 'Tiền tệ:',
    'LBL_DOCUMENTS' => 'Tài liệu',
    'LBL_DATE_ENTERED' => 'Ngày tạo:',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa:',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_DUPLICATE_BUTTON' => 'Trùng lặp',
    'LBL_DELETE_BUTTON' => 'Xóa',
    'LBL_DELETE' => 'Xóa',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_DIRECT_REPORTS' => 'Báo cáo trực tiếp',
    'LBL_DONE_BUTTON_LABEL' => 'Xong',
    'LBL_DONE_BUTTON_TITLE' => 'Xong',
    'LBL_FAVORITES' => 'yêu thích',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Xin chọn tập tin Vcard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard không có tất cả các trường bắt buộc cho các mô-đun này. Xin vui lòng tham khảo suitecrm.log để biết chi tiết.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Các tập tin đã tải lên vượt quá giới hạn kích thước 30000 byte được chỉ ra trong các hình thức HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Đã có lỗi trong khi tải lên tập tin vCard. Xin vui lòng tham khảo suitecrm.log để biết chi tiết.',
    'LBL_IMPORT_VCARD' => 'Nhập vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Nhập vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Nhập vCard',
    'LBL_VIEW_BUTTON' => 'Xem',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email dưới dạng PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email dưới dạng PDF',
    'LBL_EMAILS' => 'Emails',
    'LBL_EMPLOYEES' => 'Nhân viên',
    'LBL_ENTER_DATE' => 'Nhập vào ngày',
    'LBL_EXPORT' => 'Xuất ra',
    'LBL_FAVORITES_FILTER' => 'Yêu thích của tôi:',
    'LBL_GO_BUTTON_LABEL' => 'Đi',
    'LBL_HIDE' => 'Ẩn',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Nhập',
    'LBL_IMPORT_STARTED' => 'Bắt đầu nhập: ',
    'LBL_LAST_VIEWED' => 'Vừa xem qua',
    'LBL_LEADS' => 'Đầu mối',
    'LBL_LESS' => 'ít hơn',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CAMPAIGNLOG' => 'Log Chiến dịch',
    'LBL_CAMPAIGN_CONTACT' => 'Chiến dịch',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Không có',
    'LBL_THEME' => 'Giao diện:',
    'LBL_FOUND_IN_RELEASE' => 'Tìm thấy trong bản phát hành',
    'LBL_FIXED_IN_RELEASE' => 'Cố định trong bản phát hành',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_ASSIGNED_USER' => 'Người dùng',
    'LBL_LIST_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_LIST_CONTACT_ROLE' => 'Liên hệ với vai trò',
    'LBL_LIST_DATE_ENTERED' => 'Ngày tạo',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_OF' => 'của',
    'LBL_LIST_PHONE' => 'Điện thoại',
    'LBL_LIST_RELATED_TO' => 'Liên quan đến',
    'LBL_LIST_USER_NAME' => 'Tên người dùng',
    'LBL_LISTVIEW_NO_SELECTED' => 'Vui lòng chọn ít nhất 1 hồ sơ để tiến hành.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Vui lòng chọn ít nhất 2 hồ sơ để tiến hành.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Đã chọn',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Đã chọn: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Tiến sĩ.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Hủy',
    'LBL_VERIFY' => 'Xác thực',
    'LBL_RESEND' => 'Gửi lại',
    'LBL_PROFILE' => 'Hồ sơ',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MASS_UPDATE' => 'Khối lượng Cập Nhật',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Không có lĩnh vực sẵn sàng cho hoạt động cập nhật khối lượng',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Email chính',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Chọn Email tham gia chính',
    'LBL_MEETINGS' => 'Hội họp',
    'LBL_MEETING_GO_BACK' => 'Quay trở lại cuộc họp',
    'LBL_MEMBERS' => 'Thành viên',
    'LBL_MEMBER_OF' => 'Thành viên của',
    'LBL_MODIFIED_BY_USER' => 'Sửa bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_MORE' => 'Nhiều hơn',
    'LBL_MY_ACCOUNT' => 'Thiết lập của tôi',
    'LBL_NAME' => 'Tên',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Tạo',
    'LBL_NEW_BUTTON_TITLE' => 'Tạo',
    'LBL_NEXT_BUTTON_LABEL' => 'Tiếp theo',
    'LBL_NONE' => '--Không--',
    'LBL_NOTES' => 'Ghi chú',
    'LBL_OPPORTUNITIES' => 'Cơ hội',
    'LBL_OPPORTUNITY_NAME' => 'Tên Cơ hội',
    'LBL_OPPORTUNITY' => 'Cơ hội',
    'LBL_OR' => 'Hoặc',
    'LBL_PANEL_OVERVIEW' => 'Xem toàn bộ', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Khác', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Thông tin thêm', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Loại Cấp trên',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Tên thành phố chính:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Tên quốc gia chính:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Mã bưu chính:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Tên tiểu bang chính:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Địa chỉ 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Địa chỉ 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Địa chỉ:',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',

    'LBL_PROSPECTS' => 'Triển vọng',
    'LBL_PRODUCTS' => 'Sản phẩm',
    'LBL_PROJECT_TASKS' => 'Dự án những phần việc',
    'LBL_PROJECTS' => 'Dự án',
    'LBL_QUOTES' => 'Báo giá',

    'LBL_RELATED' => 'Liên quan',
    'LBL_RELATED_RECORDS' => 'Liên quan đến hồ sơ',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_REPORTS_TO' => 'Báo cáo cho',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Chỉ ra trường bắt buộc',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Xong',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Dạng đầy đủ',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Dạng đầy đủ',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Lưu & tạo mới',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Lưu & tạo mới',
    'LBL_SAVE_OBJECT' => 'Lưu {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Tìm kiếm',
    'LBL_SEARCH_BUTTON_TITLE' => 'Tìm kiếm',
    'LBL_FILTER' => 'Bộ lọc',
    'LBL_SEARCH' => 'Tìm kiếm',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'thêm',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Định dạng tệp không hợp lệ, chỉ có tập tin hình ảnh có thể được tải lên.',
    'LBL_SELECT_BUTTON_KEY' => 'Mục tiêu',
    'LBL_SELECT_BUTTON_LABEL' => 'Chọn',
    'LBL_SELECT_BUTTON_TITLE' => 'Chọn',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Duyệt tài liệu',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Duyệt tài liệu',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'Mục tiêu',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Chọn liên lạc',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Chọn liên lạc',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'CHỌN MẪU báo cáo',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Chọn báo cáo',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Chọn người dùng',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Chọn người dùng',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Chọn người dùng',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Chọn người dùng',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Xóa người dùng',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Xóa người dùng',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Các nguồn tài nguyên được sử dụng để xây dựng trang này (truy vấn, tập tin)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'giây.',
    'LBL_SERVER_RESPONSE_TIME' => 'Thời gian máy chủ phản hồi:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Sử dụng bộ nhớ máy chủ: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Sử dụng:-mô-đun: {0} - hành động: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Sử dụng bộ nhớ máy tối đa: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Địa chỉ giao hàng',
    'LBL_SHOW' => 'Hiển thị',
    'LBL_STATE' => 'Tiểu bang:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Trạng thái của bạn cho sự kiện này đã được Cập Nhật!',
    'LBL_STATUS' => 'Tình trạng:',
    'LBL_STREET' => 'Địa chỉ',
    'LBL_SUBJECT' => 'Chủ đề',

    'LBL_INBOUNDEMAIL_ID' => 'Gửi đến Email ID',

    'LBL_SCENARIO_SALES' => 'Bán hàng',
    'LBL_SCENARIO_MARKETING' => 'Tiếp thị',
    'LBL_SCENARIO_FINANCE' => 'Tài chính',
    'LBL_SCENARIO_SERVICE' => 'Dịch vụ',
    'LBL_SCENARIO_PROJECT' => 'Quản lý dự án',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Kịch bản này tạo thuận lợi cho việc quản lý các mặt hàng kinh doanh',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Kịch bản này tạo điều kiện cho việc quản lý các mặt hàng tiếp thị',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Kịch bản này tạo thuận lợi cho việc quản lý các mặt hàng liên quan đến tài chính',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Kịch bản này tạo điều kiện cho việc quản lý các mặt hàng liên quan đến dịch vụ',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Kịch bản này tạo thuận lợi cho việc quản lý các hạng mục liên quan đến dự án',

    'LBL_SYNC' => 'Đồng phòng ban',
    'LBL_TABGROUP_ALL' => 'Tất cả',
    'LBL_TABGROUP_ACTIVITIES' => 'Hoạt động',
    'LBL_TABGROUP_COLLABORATION' => 'kết hợp',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Khác',
    'LBL_TABGROUP_SALES' => 'Bán hàng',
    'LBL_TABGROUP_SUPPORT' => 'Hỗ trợ',
    'LBL_TASKS' => 'Công việc',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Lưu trữ Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Lưu trữ Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Bỏ xoá',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Bỏ xoá',
    'LBL_UNDELETE_BUTTON' => 'Bỏ xoá',
    'LBL_UNDELETE' => 'Bỏ xoá',
    'LBL_UNSYNC' => 'Không đồng bộ',
    'LBL_UPDATE' => 'Cập nhật',
    'LBL_USER_LIST' => 'Danh sách người dùng',
    'LBL_USERS' => 'Người dùng',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Kiểm tra các mục hiện có email...',
    'LBL_VERIFY_PORTAL_NAME' => 'Kiểm tra tên cổng hiện tại...',
    'LBL_VIEW_IMAGE' => 'xem',

    'LNK_ABOUT' => 'Về',
    'LNK_ADVANCED_FILTER' => 'Bộ lọc nâng cao',
    'LNK_BASIC_FILTER' => 'Lọc nhanh',
    'LBL_ADVANCED_SEARCH' => 'Bộ lọc nâng cao',
    'LBL_QUICK_FILTER' => 'Lọc nhanh',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Hiển thị tất cả',
    'LNK_CLOSE' => 'Đóng',
    'LBL_MODIFY_CURRENT_FILTER' => 'Sửa đổi bộ lọc hiện tại',
    'LNK_SAVED_VIEWS' => 'Tùy chọn bố cục',
    'LNK_DELETE' => 'Xóa',
    'LNK_EDIT' => 'Sửa',
    'LNK_GET_LATEST' => 'Lấy gần đây nhất',
    'LNK_GET_LATEST_TOOLTIP' => 'Thay thế với phiên bản gần nhất',
    'LNK_HELP' => 'Giúp đỡ',
    'LNK_CREATE' => 'Tạo',
    'LNK_LIST_END' => 'Kết thúc',
    'LNK_LIST_NEXT' => 'Tiếp theo',
    'LNK_LIST_PREVIOUS' => 'Trước',
    'LNK_LIST_RETURN' => 'Trở lại danh sách',
    'LNK_LIST_START' => 'bắt đầu',
    'LNK_LOAD_SIGNED' => 'Nhập',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Thay thế với tài liệu nhập',
    'LNK_PRINT' => 'In',
    'LNK_BACKTOTOP' => 'Lên trên',
    'LNK_REMOVE' => 'Xóa bỏ',
    'LNK_RESUME' => 'Bắt đầu lại',
    'LNK_VIEW_CHANGE_LOG' => 'Xem nhật ký',

    'NTC_CLICK_BACK' => 'Xin vui lòng bấm vào nút quay lại của trình duyệt và sửa chữa các lỗi.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Bạn có chắc bạn muốn xóa bỏ lựa chọn bản ghi(s)?',
    'NTC_TEMPLATE_IS_USED' => 'Các mẫu được sử dụng trong ít nhất một hồ sơ tiếp thị email. Bạn có chắc bạn muốn xóa bỏ nó?',
    'NTC_TEMPLATES_IS_USED' => 'Các bản mẫu được sử dụng trong các bản ghi Email Marketing. Bạn có chắc bạn muốn xóa bỏ chúng không?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Bạn chắc muốn xoá hoàn toàn bản ghi?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Bạn có chắc muốn xoá nó ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Bạn có chắc muốn nâng cấp nó ',
    'NTC_DELETE_SELECTED_RECORDS' => ' chọn bản ghi(s)?',
    'NTC_LOGIN_MESSAGE' => 'Vui lòng điền tên đăng nhập và mật khẩu.',
    'NTC_NO_ITEMS_DISPLAY' => 'không có',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có chắc bạn muốn loại bỏ mối quan hệ này? Chỉ có các mối quan hệ sẽ được gỡ bỏ. Hồ sơ sẽ không bị xóa.',
    'NTC_REQUIRED' => 'Chỉ ra trường bắt buộc',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Chào mừng',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Bạn đang về để lại bản ghi này mà không lưu bất kỳ thay đổi nào bạn có thể đã ghi lại. Bạn có chắc bạn muốn rời khỏi hồ sơ này?',
    'ERROR_NO_RECORD' => 'Lỗi lấy hồ sơ. Hồ sơ này có thể bị xoá hoặc bạn có thể không được phép xem nó.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Cảnh báo:</b> Phiên bản trình duyệt của bạn không còn được hỗ trợ hoặc bạn đang sử dụng một trình duyệt không được hỗ trợ. <p></p> Phiên bản trình duyệt sau đây được khuyến cáo: <p></p> <ul><li>Internet Explorer 10 (tương thích xem không được hỗ trợ) <li>Firefox 32.0 <li>Safari 5.1 <li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Cảnh báo:</b> Trình duyệt của bạn là trong chế độ xem tương thích trình duyệt IE mà không được hỗ trợ.',
    'ERROR_TYPE_NOT_VALID' => 'Lỗi. Loại hình này là không hợp lệ.',
    'ERROR_NO_BEAN' => 'Thất bại trong việc nhận được đậu.',
    'LBL_DUP_MERGE' => 'Tìm bản sao',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Quản lý đăng ký',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Quản lý đăng ký cho ',
    // Ajax status strings
    'LBL_LOADING' => 'Đang tải ...',
    'LBL_SEARCHING' => 'Đang tìm...',
    'LBL_SAVING_LAYOUT' => 'Đang lưu ...',
    'LBL_SAVED_LAYOUT' => 'Khung đã được lưu.',
    'LBL_SAVED' => 'Đã lưu',
    'LBL_SAVING' => 'Đang lưu',
    'LBL_DISPLAY_COLUMNS' => 'Hiển thị cột',
    'LBL_HIDE_COLUMNS' => 'Ẩn cột',
    'LBL_SEARCH_CRITERIA' => 'Điều kiện tìm kiếm',
    'LBL_SAVED_VIEWS' => 'Lưu View',
    'LBL_PROCESSING_REQUEST' => 'Đang xử lý..',
    'LBL_REQUEST_PROCESSED' => 'Xong',
    'LBL_AJAX_FAILURE' => 'Thất bại Ajax',
    'LBL_MERGE_DUPLICATES' => 'Hợp nhất',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Bộ lọc của tôi',
    'LBL_AMIN_SAVED_FILTER_SHORTCUT' => 'Bộ lọc của admin',
    'LBL_SEARCH_POPULATE_ONLY' => 'Thực hiện một tìm kiếm bằng cách sử dụng mẫu tìm kiếm ở trên',
    'LBL_DETAILVIEW' => 'Xem chi tiết',
    'LBL_LISTVIEW' => 'Chế độ xem danh sách',
    'LBL_EDITVIEW' => 'Chỉnh sửa xem',
    'LBL_BILLING_STREET' => 'Đường:',
    'LBL_SHIPPING_STREET' => 'Đường:',
    'LBL_SEARCHFORM' => 'Biểu mẫu tìm kiếm',
    'LBL_SAVED_SEARCH_ERROR' => 'Vui lòng cung cấp tên cho dạng xem này.',
    'LBL_DISPLAY_LOG' => 'Hiển thị nhật ký',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Hệ thống',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Thời gian chờ phiên',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Phiên làm việc của bạn là về để thời gian chờ trong 2 phút. Xin vui lòng lưu công việc của bạn.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Phiên làm việc đã hết.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Hội họp',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Cuộc gọi',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Thời gian: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Địa điểm: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Mô tả: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Trạng thái: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Liên quan đến: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK để xem cuộc gọi này hoặc bấm vào Huỷ để bỏ qua thông báo này.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK để xem cuộc họp này hoặc bấm vào Huỷ để bỏ qua thông báo này.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Sự kiện',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Sự kiện không phải là thiết lập.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Vị trí không được thiết lập.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Ngày bắt đầu không được xác định.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Không tìm thấy kết quả nào.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Không tìm thấy kết quả... Có lẽ thay đổi tiêu chí tìm kiếm của bạn và cố gắng một lần nữa?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Không có kết quả tìm thấy cho <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Tạo <item1>như là một <item2>mới',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'hoặc thay đổi tiêu chí tìm kiếm của bạn',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Bạn hiện không có hồ sơ lưu trữ. <item2>hoặc <item3>một bây giờ.',

    'LBL_CLICK_HERE' => 'Click vào đây',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Thêm vào Yêu thích',
    'LBL_CREATE_CONTACT' => 'Tạo thông tin Liên hệ',
    'LBL_CREATE_CASE' => 'Tạo Vụ việc',
    'LBL_CREATE_NOTE' => 'Tạo ghi chú',
    'LBL_CREATE_OPPORTUNITY' => 'Tạo Opportunity',
    'LBL_SCHEDULE_CALL' => 'Log Cuộc gọi',
    'LBL_SCHEDULE_MEETING' => 'Lịch họp',
    'LBL_CREATE_TASK' => 'Tạo Tác vụ',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Tạo ra các hình mẫu',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Lưu mẫu cho wed',
    'LBL_AVAILABLE_FIELDS' => 'Có sẵn các lĩnh vực',
    'LBL_FIRST_FORM_COLUMN' => 'Cột mẫu đầu tiên',
    'LBL_SECOND_FORM_COLUMN' => 'Cột mẫu thứ hai',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Thiếu trường bắt buộc: được chỉ định để',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Thiếu trường bắt buộc: liên quan đến chiến dịch',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Mẫu web để tạo ra ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Đệ trình mẫu đơn này sẽ tạo ra ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Thêm tất cả các lĩnh vực',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Đặt lại tất cả các lĩnh vực',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Loại bỏ tất cả các trường',
    'LBL_NEXT_BTN' => 'Tới',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Chỉ có thể nhúng các tệp đính kèm hình ảnh được hỗ trợ sau đây: JPG, PNG.',
    'LBL_TRAINING' => 'Diễn đàn hỗ trợ',
    'ERR_MSSQL_DB_CONTEXT' => 'Thay đổi bối cảnh cơ sở dữ liệu thành',
    'ERR_MSSQL_WARNING' => 'Cảnh báo:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Lỗi: Tệp [[file]] là mất tích. Không thể tạo vì không tìm thấy file HTML tương ứng.',
    'ERR_CANNOT_FIND_MODULE' => 'Lỗi: Mô-đun [module] không tồn tại.',
    'LBL_ALT_ADDRESS' => 'Địa chỉ khác:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Lỗi: Có một số đối số không đồng đều cho các phần tử \'key\' và \'copy\' trong mảng Params hiển thị.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Tổng quan',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Lọc',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Chỉ dữ liệu của tôi',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tiêu đề',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Các dòng hiển thị',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Bạn đã đạt đến số tối đa SuiteCRM Dashlets quản trị của bạn đã thiết lập. Hãy loại bỏ SuiteCRM Dashlet để thêm nhiều hơn nữa.',
    'LBL_ADDING_DASHLET' => 'Thêm SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet thêm',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Bạn có chắc bạn muốn loại bỏ này SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Loại bỏ các SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Đang tải trang, xin chờ...',

    'LBL_RELOAD_PAGE' => 'Xin vui lòng <a href="javascript: window.location.reload()"> tải lại cửa sổ</a> để sử dụng này SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Thêm Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Đóng',
    'LBL_OPTIONS' => 'Tùy chọn',
    'LBL_1_COLUMN' => '1 cột',
    'LBL_2_COLUMN' => '2 cột',
    'LBL_3_COLUMN' => '3 cột',
    'LBL_PAGE_NAME' => 'tên trang',

    'LBL_SEARCH_RESULTS' => 'Kết quả tìm kiếm',
    'LBL_SEARCH_MODULES' => 'Mô-đun',
    'LBL_SEARCH_TOOLS' => 'Công cụ',
    'LBL_SEARCH_HELP_TITLE' => 'mẹo tìm kiếm',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Không có hình ảnh',

    'LBL_MODULE' => 'Chức năng',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Sao chép các địa chỉ từ trái:',
    'LBL_SAVE_AND_CONTINUE' => 'Lưu và tiếp tục',

    'LBL_SEARCH_HELP_TEXT' => '<p>< br / ><strong>Multiselect điều khiển</strong></p><ul><li>Bấm vào các giá trị để chọn một thuộc tính.</li><li>Nhấp Ctrl để chọn nhiều. Người dùng Mac sử dụng bấm vào CMD.</li><li>Để chọn tất cả các giá trị giữa hai thuộc tính,&nbsp; bấm vào giá trị đầu tiên&nbsp;và sau đó thay đổi nhấp chuột cuối cùng giá trị.</li></ul><p><strong>Tùy chọn nâng cao tìm kiếm bố trí &</strong><br><br>bằng cách sử dụng tùy chọn<b>Lưu tìm & Layout</b>,bạn có thể lưu một tập hợp các thông số tìm kiếm và/hoặc một giao diện tùy chỉnh dạng xem danh sách để nhanh chóng có được kết quả mong muốn tìm kiếm trong tương lai. Bạn có thể tiết kiệm một số lượng không giới hạn tìm kiếm tuỳ chỉnh và bố trí. Tất cả các lưu tìm kiếm xuất hiện theo tên trong danh sách tìm kiếm đã lưu, với cuối cùng tải tìm kiếm đã lưu xuất hiện ở đầu danh sách.<br><br>Để tùy chỉnh bố trí xem danh sách, sử dụng các hộp ẩn cột và cột hiển thị để chọn các lĩnh vực đó để hiển thị trong kết quả tìm kiếm. Ví dụ, bạn có thể xem hoặc ẩn thông tin chi tiết như ghi tên, và được chỉ định người dùng và nhóm được chỉ định trong tìm kiếm kết quả. Để thêm một cột vào xem danh sách, chọn trường từ cột ẩn danh và sử dụng mũi tên trái để di chuyển nó vào danh sách hiển thị cột. Để loại bỏ một cột từ danh sách, chọn nó trong danh sách hiển thị cột và sử dụng mũi tên bên phải để di chuyển nó đến cột ẩn danh.<br><br>Nếu bạn lưu thiết đặt bố trí, bạn sẽ có thể tải chúng bất cứ lúc nào để xem kết quả tìm kiếm tùy chỉnh bố trí. <br><br>Để lưu và cập nhật một tìm kiếm và/hoặc bố trí:<ol><li>nhập tên cho tìm kiếm kết quả trong <b>lưu tìm kiếm này như</b> lĩnh vực và nhấp vào <b>lưu</b>. Tên gọi bây giờ sẽ hiển thị trong danh sách tìm kiếm lưu cạnh nút <b>xóa</b>.</li><li>Để xem các tìm kiếm đã lưu, hãy chọn nó từ danh sách tìm kiếm lưu. Kết quả tìm kiếm được hiển thị trong giao diện danh sách.</li><li>Để cập nhật các thuộc tính của một tìm kiếm đã lưu, hãy chọn tìm kiếm đã lưu từ danh sách, nhập các tiêu chí tìm kiếm mới và/hoặc bố trí tùy chọn trong khu vực tìm kiếm nâng cao, và nhấp vào <b>Cập Nhật</b> bên cạnh <b>Thay đổi tìm kiếm hiện tại</b>.</li> <li>Để xoá tìm kiếm đã lưu, hãy chọn nó trong danh sách tìm kiếm đã lưu, nhấp vào <b>xóa</b> bên cạnh <b>Thay đổi tìm kiếm hiện thời</b> và sau đó nhấp vào <b>OK</b> để xác nhận Xoá.</li></ol> <p><strong>Lời khuyên</strong> <br><br>bằng cách sử dụng các % như là một nhà điều hành ký bạn có thể làm cho tìm kiếm của bạn rộng hơn. Ví dụ như thay vì chỉ tìm kiếm cho kết quả tương đương "Táo" bạn có thể thay đổi tìm kiếm của bạn để "Táo %" sẽ phù hợp với tất cả các kết quả bắt đầu với từ táo, nhưng có thể chứa các ký tự khác.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Lỗi: Đạt đến giới hạn truy vấn của $limit cho $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Lỗi: Resource Observer->notify() cần được ghi đè.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Lỗi: Không thể tạo màn hình vì tệp siêu dữ liệu là trống rỗng hoặc tập tin không tồn tại.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Lỗi: Không có cấu hình màn hình cho tên yêu cầu',
    'ERR_UNDEFINED_METRIC' => 'Lỗi: Không thể đặt giá trị cho số liệu không xác định',
    'ERR_STORE_FILE_MISSING' => 'Lỗi: Không tìm thấy cửa hàng thực hiện tệp',

    'LBL_MONITOR_ID' => 'Giám sát Id',
    'LBL_USER_ID' => 'Id người dùng',
    'LBL_MODULE_NAME' => 'Tên mô-đun',
    'LBL_ITEM_ID' => 'Mã Id',
    'LBL_ITEM_SUMMARY' => 'Mục tóm tắt',
    'LBL_ACTION' => 'Hành động',
    'LBL_SESSION_ID' => 'Id Phiên làm việc',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack tạo ra cho người sử dụng id {0}',
    'LBL_VISIBLE' => 'Hồ sơ có thể nhìn thấy',
    'LBL_DATE_LAST_ACTION' => 'Ngày của hành động cuối',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'không phải là trước khi',
    'MSG_IS_MORE_THAN' => 'là nhiều hơn',
    'MSG_IS_LESS_THAN' => 'là ít hơn',
    'MSG_SHOULD_BE' => 'nên',
    'MSG_OR_GREATER' => 'hoặc cao hơn',

    'LBL_LIST' => 'Danh sách',
    'LBL_CREATE_BUG' => 'Tạo Bug',

    'LBL_OBJECT_IMAGE' => 'đối tượng hình ảnh',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Chọn ngày',

    'LBL_VALIDATE_RANGE' => 'không phải là trong phạm vi hợp lệ',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Hãy chọn cả phạm vi ngày bắt đầu và kết thúc',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Hãy chọn cả mục nhập phạm vi bắt đầu và kết thúc',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tất cả',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Lỗi: Số đếm mảng của tham số bean không khớp với số đếm mảng của các kết quả.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Lỗi: Thiếu mục nhập lập bản đồ cho mô-đun.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Lỗi: Không thể truy xuất dữ liệu cho {0} kết nối. Các dịch vụ hiện có thể không thể truy cập hoặc các cài đặt cấu hình có thể không hợp lệ. Thông báo lỗi kết nối: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Tối ưu trải nghiệm sử dụng IIS/FastCGI sapi, thiết lập fastcgi.logging 0 trong tập tin php.ini của bạn.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Tên',
    'LBL_COLLECTION_PRIMARY' => 'Chính',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Trống trường bắt buộc',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_DESCRIPTION' => 'Mô tả',

    'LBL_YESTERDAY' => 'hôm qua',
    'LBL_TODAY' => 'hôm nay',
    'LBL_TOMORROW' => 'ngày mai',
    'LBL_NEXT_WEEK' => 'thứ 7 tới',
    'LBL_NEXT_MONDAY' => 'thứ hai tiếp theo',
    'LBL_NEXT_FRIDAY' => 'thứ sáu tiếp theo',
    'LBL_TWO_WEEKS' => 'hai tuần',
    'LBL_NEXT_MONTH' => 'tháng tới',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'ngày đầu tiên của tháng tiếp theo',
    'LBL_THREE_MONTHS' => 'ba tháng',
    'LBL_SIXMONTHS' => 'sáu tháng',
    'LBL_NEXT_YEAR' => 'năm sau',

    //Datetimecombo fields
    'LBL_HOURS' => 'Giờ',
    'LBL_MINUTES' => 'Phút',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Ngày giờ',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Tự động làm mới',

    'LBL_DURATION_DAY' => 'ngày',
    'LBL_DURATION_HOUR' => 'giờ',
    'LBL_DURATION_MINUTE' => 'phút',
    'LBL_DURATION_DAYS' => 'Ngày',
    'LBL_DURATION_HOURS' => 'Trong suốt hàng giờ',
    'LBL_DURATION_MINUTES' => 'Trong suốt hàng phút',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Chọn tháng',
    'LBL_ENTER_YEAR' => 'Nhập năm',
    'LBL_ENTER_VALID_YEAR' => 'Vui lòng nhập một năm hợp lệ',

    //File write error label
    'ERR_FILE_WRITE' => 'Lỗi: Không thể ghi tệp {0}. Vui lòng kiểm tra hệ thống và web server cho phép.',
    'ERR_FILE_NOT_FOUND' => 'Lỗi: Không thể nạp tệp {0}. Vui lòng kiểm tra hệ thống và web server cho phép.',

    'LBL_AND' => 'A',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Các tập tin trên nguồn bên ngoài',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Bảo mật',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => ' "Đây là một mẫu nhập tập tin mà cung cấp một ví dụ về nội dung dự kiến của một tập tin đã sẵn sàng cho nhập khẩu." "Các tập tin là một tệp .csv phân cách bằng dấu phẩy, bằng cách sử dụng dấu ngoặc kép đôi như lĩnh vực qualifier."  "Hàng tiêu đề là hàng cao nhất trong các tập tin và bao gồm các lĩnh vực nhãn như bạn sẽ nhìn thấy chúng trong ứng dụng." "Các nhãn này được sử dụng để lập bản đồ các dữ liệu trong các tập tin đến các lĩnh vực trong ứng dụng."  "Ghi chú: tên cơ sở dữ liệu cũng có thể được sử dụng trong hàng tiêu đề. Điều này là hữu ích khi bạn đang sử dụng phpMyAdmin hoặc một cơ sở dữ liệu công cụ để cung cấp một danh sách xuất khẩu các dữ liệu nhập khẩu." "Thứ tự cột là không quan trọng vì quá trình nhập khẩu phù hợp với các dữ liệu đến các lĩnh vực thích hợp dựa trên hàng tiêu đề."   "Để sử dụng tập tin này như một mẫu, thực hiện như sau:" "1. loại bỏ các hàng mẫu dữ liệu" "2. Loại bỏ văn bản trợ giúp mà bạn đang đọc ngay bây giờ""3. Nhập vào dữ liệu của bạn vào hàng phù hợp và cột""4. Lưu tệp vào một vị trí nổi tiếng trên hệ thống của bạn""5. Nhấp vào tùy chọn nhập khẩu từ trình đơn tác vụ trong ứng dụng và chọn tập tin để tải lên"    ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Không có thông báo hiện tại',
    'LBL_ALT_SORT_DESC' => 'Xếp giảm dần',
    'LBL_ALT_SORT_ASC' => 'Xếp tăng dần',
    'LBL_ALT_SORT' => 'Sắp xếp',
    'LBL_ALT_SHOW_OPTIONS' => 'Hiển thị tùy chọn',
    'LBL_ALT_HIDE_OPTIONS' => 'Ẩn tùy chọn',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Di chuyển mục đã chọn vào danh sách bên trái',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Di chuyển mục đã chọn vào danh sách ở bên phải',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Di chuyển mục đã chọn lên để hiển thị danh sách',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Di chuyển mục đã chọn xuống để hiển thị danh sách',
    'LBL_ALT_INFO' => 'Thông tin',
    'MSG_DUPLICATE' => 'Bản ghi {0} bạn đang tạo ra có thể là một bản sao của một bản ghi {0} đã tồn tại. {1} bản ghi có tên tương tự được liệt kê dưới đây. {1} <br>nhấp vào tạo để tiếp tục tạo này {0} mới, hoặc chọn một {0} sẵn có được liệt kê dưới đây.',
    'MSG_SHOW_DUPLICATES' => 'Bản ghi {0} bạn đang tạo ra có thể là một bản sao của một bản ghi {0} đã tồn tại. {1} bản ghi có tên tương tự được liệt kê dưới đây. Bấm vào lưu để tiếp tục tạo này {0} mới, hay bấm Hủy bỏ để trở về các mô-đun mà không tạo ra {0}.',
    'LBL_EMAIL_TITLE' => 'địa chỉ email',
    'LBL_EMAIL_OPT_TITLE' => 'Địa chỉ email từ chối',
    'LBL_EMAIL_INV_TITLE' => 'Địa chỉ email không hợp lệ',
    'LBL_EMAIL_PRIM_TITLE' => 'Làm cho địa chỉ Email chính',
    'LBL_SELECT_ALL_TITLE' => 'Chọn tất cả',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Chọn hàng này',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'LỖI: Đã có lỗi trong khi tải lên. Mã lỗi: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'LỖI: Đã có lỗi trong khi tải lên. Mã lỗi: {0} - {1}. Upload_maxsize là {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'LỖI: Có một lỗi trong khi tải lên của bạn, xin vui lòng liên hệ với người quản trị để được giúp đỡ.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Kích thước của tải lên ({0} byte) vượt quá cho phép tối đa: {1} byte',
    'UPLOAD_REQUEST_ERROR' => 'Lỗi đã xảy ra. Xin vui lòng làm tươi lại trang và thử lại.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Sửa',
    'LBL_EDIT_BUTTON_TITLE' => 'Sửa',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Trùng lặp',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Trùng lặp',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Xóa',
    'LBL_DELETE_BUTTON_TITLE' => 'Xóa',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Hàng loạt hành động', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Hành động', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Lưu',
    'LBL_SAVE_BUTTON_TITLE' => 'Lưu',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Hủy',
    'LBL_CANCEL_BUTTON_TITLE' => 'Hủy',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'đầu nối mảng trong {0} định nghĩa không chính xác hoặc có sản phẩm nào và không được sử dụng.',
    'ERR_SUHOSIN' => 'Tải lên dòng bị chặn bởi Suhosin, xin vui lòng thêm&quot;tải lên&quot; đến suhosin.executor.include.whitelist (xem suitecrm.log để biết thêm thông tin)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Các phản ứng xấu từ các máy chủ',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Báo giá',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Giá bán',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Thủ công',
        '5' => 'Mỗi 5 phút',
        '15' => 'Mỗi 15 phút',
        '30' => 'Mỗi 30 phút',
        '60' => 'Mỗi giờ',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Xin nhắc lại là rỗng hoặc không chính xác.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Xin nhắc lại không được đặt cho một popup hoặc email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Không có người mời để nhắc nhở.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Lời nhắc không bao gồm bất kỳ người được mời nào, bạn có muốn xóa lời nhắc không?',
    'LBL_DELETE_REMINDER' => 'Xóa bỏ nhắc nhở',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Chọn cột',
    'LBL_COLUMN_CHOOSER' => 'Chọn cột',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Lưu thay đổi',
    'LBL_DISPLAYED' => 'Hiển thị',
    'LBL_HIDDEN' => 'Ẩn',
    'ERR_EMPTY_COLUMNS_LIST' => 'Ít nhất, một trong những yếu tố cần thiết',

    'LBL_FILTER_HEADER_TITLE' => 'Bộ lọc',

    'LBL_CATEGORY' => 'Chủng loại',
    'LBL_LIST_CATEGORY' => 'Chủng loại',
    'ERR_FACTOR_TPL_INVALID' => 'Thông điệp xác thực yếu tố là không hợp lệ, vui lòng liên hệ với người quản trị.',
    'LBL_SUBTHEMES' => 'Kiểu',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Bình minh',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Ngày',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Chạng vạng',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Đêm',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Bỏ qua bản dự thảo',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Thao tác này sẽ xóa email này, bạn có muốn tiếp tục?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Thoát',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Nếu rời khỏi hộp soạn thảo bạn sẽ mất các thông tin đã nhập, bạn có muốn tiếp tục?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Áp dụng một mẫu thư điện tử',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Thao tác này sẽ ghi đè lên các thư điện tử cơ thể và các lĩnh vực chủ đề, bạn có muốn tiếp tục?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Xác nhận chọn tham gia',
    'LBL_OPT_IN_TITLE' => 'Chọn tham gia',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Xác nhận chọn ngày tham gia',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Xác nhận chọn ngày gửi',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Ngày xác nhận sử dụng sai',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Mã xác nhận sử dụng',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Mẫu Email chọn tham gia thì không được cấu hình. Xin vui lòng thiết lập trong cài đặt email.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Email tham gia yêu cầu phải có liên quan đến Tài khoản/Liên hệ/Đầu mối/Mục tiêu',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Nhóm không có thể thừa kế',
    'LBL_PRIMARY_GROUP' => "Nhóm chính",

    // footer
    'LBL_SUITE_TOP' => 'Lên trên',
    'LBL_SUITE_SUPERCHARGED' => 'Được nén bởi SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Được tài trợ bởi SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM đã được viết và đóng gói bởi <a href="https://salesagility.com"> SalesAgility </a>. Chương trình được cung cấp AS IS, không có bảo hành. Được cấp phép theo AGPLv3.',
    'LBL_SUITE_DESC2' => 'Chương trình này là phần mềm miễn phí; bạn có thể phân phối lại nó và/hoặc sửa đổi nó theo các điều khoản của Giấy phép cộng đồng chung Affose của GNU phiên bản 3 như được xuất bản bởi Tổ chức Phần mềm miễn phí, bao gồm sự cho phép bổ sung được đề cập trong tiêu đề mã nguồn.',
    'LBL_SUITE_DESC3' => 'SuiteCRM là thương hiệu của SalesAgility Ltd. Tất cả các tên công ty và sản phẩm khác có thể là thương hiệu của các công ty tương ứng mà chúng được liên kết.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Đặt lại mật khẩu',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Gửi xác nhận trong Email tham gia',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Email xác nhận sử dụng chỉ dành cho Khách Hàng/ Liên Hệ/ Khách Hàng Tiềm Năng/ Khách Hàng Triển Vọng',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Email xác nhận sử dụng đã bị vô hiệu, kích hoạt thông số này trong Thiết lập Email hoặc liên hệ với Quản trị hệ thống.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Email xác nhận sử dụng đang gửi là không thể vì trong Liên Hệ không có địa chỉ email chính',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Email xác nhận sử dụng đang gửi không thành công',
    'LBL_CONFIRM_EMAIL_SENT' => 'Email xác nhận sử dụng đã gửi thành công',
);

$app_list_strings['moduleList']['Library'] = 'Thư viện';
$app_list_strings['moduleList']['EmailAddresses'] = 'Địa chỉ Email ';
$app_list_strings['project_priority_default'] = 'Đa phương tiện';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Cao',
    'Medium' => 'Đa phương tiện',
    'Low' => 'Thấp',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Đồng ý',
    'contract' => 'Hợp đồng',
    'legal_obligation' => 'Nghĩa vụ pháp lý',
    'protection_of_interest' => 'Bảo vệ quyền lợi',
    'public_interest' => 'Lợi ích công cộng',
    'legitimate_interest' => 'Quyền lợi hợp pháp',
    'withdrawn' => 'Rút lại',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Trang web',
    'phone' => 'Điện thoại',
    'given_to_user' => 'Trao cho người sử dụng',
    'email' => 'Email',
    'third_party' => 'Bên thứ ba',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Kiến thức cơ bản';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'BELGIUM',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'ĐẢO BOUVET',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'ĐẢO CANARY',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'CỘNG HOÀ SÉC',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'ĐAN MẠCH',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'CỘNG HOÀ DOMINICA',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'AI CẬP',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETHIOPIA',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANCE',
    'FRENCH GUIANA' => 'FRENCH GUIANA',
    'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANY',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREECE',
    'GREENLAND' => 'GREENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'ICELAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'ẤN ĐỘ',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'AI LEN',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'Ý',
    'IVORY COAST' => 'BỜ BIỂN NGÀ',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'NHẬT BẢN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'HÀN QUỐC',
    'KOREA, SOUTH' => 'KOREA, SOUTH',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LÀO',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITHUANIA',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MOROCCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NORWAY',
    'OMAN' => 'OMAN',
    'OTHER' => 'OTHER',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLAND',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSSIA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'NAM PHI',
    'SOUTH YEMEN' => 'SOUTH YEMEN',
    'SPAIN' => 'TÂY BAN NHA',
    'SPANISH SAHARA' => 'SPANISH SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'THUỴ ĐIỂN',
    'SWITZERLAND' => 'THUỴ SỸ',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'ĐÀI LOAN',
    'TAJIKISTAN' => 'TAJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THÁI LAN',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'THỔ NHĨ KỲ',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
    'UNITED KINGDOM' => 'VƯƠNG QUỐC ANH',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
    'USA' => 'HOA KỲ',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'THÀNH PHỐ VATICAN',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIỆT NAM',
    'WAKE ISLAND' => 'ĐẢO WAKE',
    'WEST INDIES' => 'TÂY ẤN',
    'WESTERN SAHARA' => 'TÂY SAHARA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG 5 (Đài Loan và Hồng Kông)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Kirin)',
    'CP1252' => 'CP1252 (MS Tây Âu & U. S.)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Triều tiên)',
    'EUC-TW' => 'EUC-TW (Đài Loan)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Châu Phi/Abidjan',
    'Africa/Djibouti' => 'Châu Phi/Djibouti',
    'Africa/Cairo' => 'Châu Phi/Cairo',
    'Africa/Malabo' => 'Châu Phi/Malabo',
    'Africa/Asmera' => 'Châu Phi/Asmera',
    'Africa/Addis_Ababa' => 'Châu Phi/Addis Ababa',
    'Africa/Libreville' => 'Châu Phi/Libreville',
    'Africa/Banjul' => 'Châu Phi/Banjul',
    'Africa/Accra' => 'Châu Phi/Accra',
    'Africa/Conakry' => 'Châu Phi/Conakry',
    'Africa/Bissau' => 'Châu Phi/Bissau',
    'Africa/Nairobi' => 'Châu Phi/Nairobi',
    'Africa/Maseru' => 'Châu Phi/Maseru',
    'Africa/Monrovia' => 'Châu Phi/Monrovia',
    'Africa/Tripoli' => 'Châu Phi/Tripoli',
    'Indian/Antananarivo' => 'Ấn Độ/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Châu Phi/Bamako',
    'Africa/Nouakchott' => 'Châu Phi/Nouakchott',
    'Indian/Mauritius' => 'Ấn Độ/Mauritius',
    'Indian/Mayotte' => 'Ấn Độ/Mayotte',
    'Africa/Casablanca' => 'Châu Phi/Casablanca',
    'Africa/El_Aaiun' => 'Châu Phi/El Aaiun',
    'Africa/Maputo' => 'Châu Phi/Maputo',
    'Africa/Windhoek' => 'Châu Phi/Windhoek',
    'Africa/Niamey' => 'Châu Phi/Niamey',
    'Africa/Lagos' => 'Châu Phi/Lagos',
    'Indian/Reunion' => 'Ấn Độ/đảo Reunion',
    'Africa/Kigali' => 'Châu Phi/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Châu Phi/Sao Tome',
    'Africa/Dakar' => 'Châu Phi/Dakar',
    'Indian/Mahe' => 'Ấn Độ/Mahe',
    'Africa/Freetown' => 'Châu Phi/Freetown',
    'Africa/Mogadishu' => 'Châu Phi/Mogadishu',
    'Africa/Johannesburg' => 'Châu Phi/Johannesburg',
    'Africa/Khartoum' => 'Châu Phi/Khartoum',
    'Africa/Mbabane' => 'Châu Phi/Mbabane',
    'Africa/Dar_es_Salaam' => 'Châu Phi/Dar es Salaam',
    'Africa/Lome' => 'Châu Phi/Lome',
    'Africa/Tunis' => 'Châu Phi/Tunis',
    'Africa/Kampala' => 'Châu Phi/Kampala',
    'Africa/Lusaka' => 'Châu Phi/Lusaka',
    'Africa/Harare' => 'Châu Phi/Harare',
    'Antarctica/Casey' => 'Nam cực/Casey',
    'Antarctica/Davis' => 'Nam cực/Davis',
    'Antarctica/Mawson' => 'Nam cực/Mawson',
    'Indian/Kerguelen' => 'Ấn Độ/Kerguelen',
    'Antarctica/DumontDUrville' => 'Nam cực/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Africa/Brazzaville',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldives',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Asia/Hovd',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Europe/London',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athens',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'America/El Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao Paulo',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Yêu cầu',
    2 => 'Truy cập',
    3 => 'Không hợp lệ',
);
// PR 5464
$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Chiến dịch kinh doanh',
    'email' => 'Email',
    'event' => 'Sự kiện',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Chiến dịch kinh doanh',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Chiến dịch kinh doanh',
    'email' => 'Email',
    'system' => 'Hệ thống',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Kiến thức cơ bản'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - thể loại'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Dự thảo';
$app_list_strings['aok_status_list']['Expired'] = 'hết hạn';
$app_list_strings['aok_status_list']['In_Review'] = 'Đang xem xét';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Riêng tư';
$app_list_strings['aok_status_list']['published_public'] = 'Công khai';

$app_list_strings['moduleList']['FP_events'] = 'Sự kiện';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Vị trí';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Mời';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Không được mời';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Tham dự';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Không tham dự';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Được chấp nhận';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Đã từ chối';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Không có phản ứng';

$app_strings['LBL_STATUS_EVENT'] = 'Tình trạng lời mời';
$app_strings['LBL_ACCEPT_STATUS'] = 'trạng thái đồng ý';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'chọn trang này';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Chọn trang này';
$app_strings['LBL_LISTVIEW_NONE'] = 'Bỏ chọn tất cả';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Chỉ số sự kiện';
$app_list_strings['moduleList']['AOD_Index'] = 'Chỉ số';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Trường hợp các sự kiện';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Cập nhật trường hợp';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Vui lòng trả lời trên dòng này ==========';


//aop PR 5426
$app_list_strings['moduleList']['JAccount'] = 'JAccount';

$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Mở',
        'Closed' => 'Đã đóng',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Mới',
        'Open_Assigned' => 'Đã giao',
        'Closed_Closed' => 'Đã đóng',
        'Open_Pending Input' => 'Đang chờ xử lý đầu vào',
        'Closed_Rejected' => 'Đã từ chối',
        'Closed_Duplicate' => 'Trùng lặp',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Người dùng độc lập',
        'Account' => 'Tài khoản người dùng',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Sử dụng mặc định AOP',
    'singleUser' => 'Người dùng duy nhất',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Ít bận rộn',
    'random' => 'Mặc nhiên',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Báo cáo';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Báo cáo điều kiện';
$app_list_strings['moduleList']['AOR_Charts'] = 'Biểu đồ báo cáo';
$app_list_strings['moduleList']['AOR_Fields'] = 'Báo cáo lĩnh vực';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Theo lịch trình báo cáo';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Tương đương';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Không bằng';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Lớn hơn';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Ít hơn';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Lớn hơn hoặc bằng';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Nhỏ hơn hoặc bằng';
$app_list_strings['aor_operator_list']['Contains'] = 'Có chứa';
$app_list_strings['aor_operator_list']['Not_Contains'] = 'Không chứa';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Bắt đầu với';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Kết thúc bằng';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'A';
$app_list_strings['aor_condition_operator_list']['OR'] = 'Hoặc';
$app_list_strings['aor_condition_type_list']['Value'] = 'Giá trị';
$app_list_strings['aor_condition_type_list']['Field'] = 'Các trường';
$app_list_strings['aor_condition_type_list']['Date'] = 'Ngày giờ';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Một trong';
$app_list_strings['aor_condition_type_list']['Period'] = 'Giai đoạn';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Người dùng hiện tại';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Phút';
$app_list_strings['aor_date_type_list']['hour'] = 'Giờ';
$app_list_strings['aor_date_type_list']['day'] = 'Ngày';
$app_list_strings['aor_date_type_list']['week'] = 'Tuần';
$app_list_strings['aor_date_type_list']['month'] = 'Tháng';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Giờ làm việc';
$app_list_strings['aor_date_options']['now'] = 'Bây giờ';
$app_list_strings['aor_date_options']['field'] = 'Trường này';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'tăng dần';
$app_list_strings['aor_sort_operator']['DESC'] = 'Giảm dần';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Đếm';
$app_list_strings['aor_function_list']['MIN'] = 'Tối thiểu';
$app_list_strings['aor_function_list']['MAX'] = 'Tối đa';
$app_list_strings['aor_function_list']['SUM'] = 'Tổng';
$app_list_strings['aor_function_list']['AVG'] = 'Trung bình';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Đếm';
$app_list_strings['aor_total_options']['SUM'] = 'Tổng';
$app_list_strings['aor_total_options']['AVG'] = 'Trung bình';
$app_list_strings['aor_chart_types']['bar'] = 'Thanh biểu đồ';
$app_list_strings['aor_chart_types']['line'] = 'Đường biểu đồ';
$app_list_strings['aor_chart_types']['pie'] = 'Biểu đồ tròn';
$app_list_strings['aor_chart_types']['radar'] = 'Biểu đồ radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Thanh xếp chồng';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Thanh nhóm';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Hàng tháng';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Hàng tuần';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Hàng ngày';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Đang hoạt động';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Không hoạt động';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Hộp thư đến';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Người dùng';
$app_list_strings['aor_email_type_list']['Users'] = 'Người dùng';
$app_list_strings['aor_assign_options']['all'] = 'Tất cả người dùng';
$app_list_strings['aor_assign_options']['role'] = 'Tất cả người dùng trong vai trò';
$app_list_strings['aor_assign_options']['security_group'] = 'Tất cả người dùng vào nhóm bảo mật';
$app_list_strings['date_time_period_list']['today'] = 'Hôm nay';
$app_list_strings['date_time_period_list']['yesterday'] = 'Hôm qua';
$app_list_strings['date_time_period_list']['this_week'] = 'Tuần này';
$app_list_strings['date_time_period_list']['last_week'] = 'Tuần trước';
$app_list_strings['date_time_period_list']['last_month'] = 'Tháng trước';
$app_list_strings['date_time_period_list']['this_month'] = 'Tháng này';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Quý này';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Quý trước';
$app_list_strings['date_time_period_list']['this_year'] = 'Năm nay';
$app_list_strings['date_time_period_list']['last_year'] = 'Năm trước';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'trên các';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'trên';
$app_strings['LBL_CRON_AT'] = 'tại';
$app_strings['LBL_CRON_RAW'] = 'Nâng cao';
$app_strings['LBL_CRON_MIN'] = 'Phút';
$app_strings['LBL_CRON_HOUR'] = 'Giờ';
$app_strings['LBL_CRON_DAY'] = 'Ngày';
$app_strings['LBL_CRON_MONTH'] = 'Tháng';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Hàng ngày';
$app_strings['LBL_CRON_WEEKLY'] = 'Hàng tuần';
$app_strings['LBL_CRON_MONTHLY'] = 'Hàng tháng';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Hợp đồng';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Hóa đơn';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'Các mẫu PDF';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Sản phẩm - thể loại';
$app_list_strings['moduleList']['AOS_Products'] = 'Sản phẩm';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Các hàng mục';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Báo giá';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Nhà phân tích';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Đối thủ';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Khách hàng';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Hợp tác';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Đầu tư';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Đối tác';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Báo chí';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Triển vọng';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Đại lý';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Khác';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Dự thảo';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Thương lượng';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Chuyển giao';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Chờ đợi';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Đã Xác nhận';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Đã khóa (Được chấp nhận)';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Kết thúc thất bại';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Đóng cửa chết';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Chấp nhận';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Không được chấp thuận';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Nhà phân tích';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Đối thủ';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Khách hàng';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Hợp tác';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Đầu tư';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Đối tác';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Báo chí';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Triển vọng';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Đại lý';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Khác';
$app_list_strings['invoice_status_dom']['Paid'] = 'Thanh Toán';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Chưa thanh toán';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Đã hủy bỏ';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Không được lập hoá đơn';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Hoá đơn';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Máy tính xách tay';
$app_list_strings['product_category_dom']['Desktops'] = 'Máy tính để bàn';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Tốt';
$app_list_strings['product_type_dom']['Service'] = 'Dịch vụ';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Báo giá';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Hóa đơn';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Hợp đồng';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Báo giá';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Hóa đơn';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Hợp đồng';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Tài khoản';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Khách hàng';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Đầu mối';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Chưa bắt đầu';
$app_list_strings['contract_status_list']['In Progress'] = 'Đang tiến hành';
$app_list_strings['contract_status_list']['Signed'] = 'Đã ký';
$app_list_strings['contract_type_list']['Type'] = 'Loại';
$app_strings['LBL_PRINT_AS_PDF'] = 'In dưới dạng PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Vui lòng lựa chọn một Mẫu';
$app_strings['LBL_NO_TEMPLATE'] = 'Tìm thấy ERROR\nNo mẫu. \nPlease đi đến các mô-đun mẫu PDF và tạo một tài khoản';

//aow PR 5775
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Quy trình công việc';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Quy trình làm việc điều kiện';
$app_list_strings['moduleList']['AOW_Processed'] = 'Quá trình kiểm toán';
$app_list_strings['moduleList']['AOW_Actions'] = 'Quy trình làm việc hành động';
$app_list_strings['aow_status_list']['Active'] = 'Đang hoạt động';
$app_list_strings['aow_status_list']['Inactive'] = 'Không hoạt động';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Tương đương';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Không bằng';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Lớn hơn';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Ít hơn';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Lớn hơn hoặc bằng';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Nhỏ hơn hoặc bằng';
$app_list_strings['aow_operator_list']['Contains'] = 'Có chứa';
$app_list_strings['aow_operator_list']['Not_Contains'] = 'Không chứa';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Bắt đầu với';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Kết thúc bằng';
$app_list_strings['aow_operator_list']['is_null'] = 'Là Null';
$app_list_strings['aow_operator_list']['is_not_null'] = 'Không là Null';
$app_list_strings['aow_operator_list']['Anniversary'] = 'Lễ thường niên';
$app_list_strings['aow_process_status_list']['Complete'] = 'Hoàn tất';
$app_list_strings['aow_process_status_list']['Running'] = 'Đang chạy';
$app_list_strings['aow_process_status_list']['Pending'] = 'Trì hoãn';
$app_list_strings['aow_process_status_list']['Failed'] = 'Thất bại';
$app_list_strings['aow_condition_operator_list']['And'] = 'A';
$app_list_strings['aow_condition_operator_list']['OR'] = 'Hoặc';
$app_list_strings['aow_condition_type_list']['Value'] = 'Giá trị';
$app_list_strings['aow_condition_type_list']['Field'] = 'Các trường';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Bất kỳ thay đổi';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Trong nhóm an toàn';
$app_list_strings['aow_condition_type_list']['Date'] = 'Ngày giờ';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Một trong';
$app_list_strings['aow_action_type_list']['Value'] = 'Giá trị';
$app_list_strings['aow_action_type_list']['Field'] = 'Các trường';
$app_list_strings['aow_action_type_list']['Date'] = 'Ngày giờ';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Vòng tròn Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Ít bận rộn';
$app_list_strings['aow_action_type_list']['Random'] = 'Mặc nhiên';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Giá trị';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Các trường';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Phút';
$app_list_strings['aow_date_type_list']['hour'] = 'Giờ';
$app_list_strings['aow_date_type_list']['day'] = 'Ngày';
$app_list_strings['aow_date_type_list']['week'] = 'Tuần';
$app_list_strings['aow_date_type_list']['month'] = 'Tháng';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Giờ làm việc';
$app_list_strings['aow_date_options']['now'] = 'Bây giờ';
$app_list_strings['aow_date_options']['today'] = 'Hôm nay';
$app_list_strings['aow_date_options']['field'] = 'Trường này';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Tất cả người dùng';
$app_list_strings['aow_assign_options']['role'] = 'Tất cả người dùng trong vai trò';
$app_list_strings['aow_assign_options']['security_group'] = 'Tất cả người dùng vào nhóm bảo mật';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Hộp thư đến';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Bản ghi Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Lĩnh vực liên quan';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Người dùng';
$app_list_strings['aow_email_type_list']['Users'] = 'Người dùng';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Các trường';
$app_list_strings['aow_email_to_list']['to'] = 'Đến';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tất cả hồ sơ';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Hồ sơ mới';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Sửa đổi hồ sơ';
$app_list_strings['aow_run_when_list']['Always'] = 'Luôn luôn';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Chỉ lưu trữ';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Chỉ có ở trình lập lịch biểu';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Dự án - mẫu';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Dự án công việc mẫu';
$app_list_strings['relationship_type_list']['FS'] = 'Kết thúc để bắt đầu';
$app_list_strings['relationship_type_list']['SS'] = 'Bắt đầu để bắt đầu';
$app_list_strings['duration_unit_dom']['Days'] = 'Ngày';
$app_list_strings['duration_unit_dom']['Hours'] = 'Giờ';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Xem biểu đồ Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Xem chi tiết';
$app_strings['LBL_CREATE_PROJECT'] = 'Tạo dự án';

//gmaps
$app_strings['LBL_MAP'] = 'Bản đồ';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Kinh độ';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Vĩ độ';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Trạng thái Mã địa lý';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Địa chỉ';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Các bản đồ';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Bản đồ - đánh dấu';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Bản đồ - khu vực';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Bản đồ - địa chỉ bộ nhớ Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Đối tác JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Dặm';
$app_list_strings['map_unit_type_list']['km'] = 'Cây số';

$app_list_strings['map_module_type_list']['Accounts'] = 'Tài khoản';
$app_list_strings['map_module_type_list']['Contacts'] = 'Liên hệ';
$app_list_strings['map_module_type_list']['Cases'] = 'Kịch bản';
$app_list_strings['map_module_type_list']['Leads'] = 'Đầu mối';
$app_list_strings['map_module_type_list']['Meetings'] = 'Hội họp';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Cơ hội';
$app_list_strings['map_module_type_list']['Project'] = 'Chủ đề';
$app_list_strings['map_module_type_list']['Prospects'] = 'Đối tượng';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Tài khoản';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Liên hệ';
$app_list_strings['map_relate_type_list']['Cases'] = 'Kịch bản';
$app_list_strings['map_relate_type_list']['Leads'] = 'Đầu mối';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Hội họp';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Cơ hội';
$app_list_strings['map_relate_type_list']['Project'] = 'Dự án';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Mục tiêu';

$app_list_strings['marker_image_list']['accident'] = 'Tai nạn';
$app_list_strings['marker_image_list']['administration'] = 'Quản trị viên';
$app_list_strings['marker_image_list']['agriculture'] = 'Nông nghiệp';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Chiếc máy bay nhỏ';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Máy bay du lịch';
$app_list_strings['marker_image_list']['airport'] = 'Sân bay';
$app_list_strings['marker_image_list']['amphitheater'] = 'Giảng đường';
$app_list_strings['marker_image_list']['apartment'] = 'Căn hộ cao cấp';
$app_list_strings['marker_image_list']['aquarium'] = 'Hồ cá';
$app_list_strings['marker_image_list']['arch'] = 'Kiến trúc';
$app_list_strings['marker_image_list']['atm'] = 'Máy Atm';
$app_list_strings['marker_image_list']['audio'] = 'Âm thanh';
$app_list_strings['marker_image_list']['bank'] = 'Ngân hàng';
$app_list_strings['marker_image_list']['bank_euro'] = 'Ngân hàng Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Ngân hàng Pound';
$app_list_strings['marker_image_list']['bar'] = 'Quán rượu';
$app_list_strings['marker_image_list']['beach'] = 'Bãi biển';
$app_list_strings['marker_image_list']['beautiful'] = 'Bắt mắt';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bãi đậu xe đạp';
$app_list_strings['marker_image_list']['big_city'] = 'Thành phố lớn';
$app_list_strings['marker_image_list']['bridge'] = 'Cầu';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Cầu hiện đại';
$app_list_strings['marker_image_list']['bus'] = 'Xe buýt';
$app_list_strings['marker_image_list']['cable_car'] = 'Cable Car';
$app_list_strings['marker_image_list']['car'] = 'Xe hơi';
$app_list_strings['marker_image_list']['car_rental'] = 'Cho thuê xe hơi';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'Lâu đài';
$app_list_strings['marker_image_list']['cathedral'] = 'Nhà thờ';
$app_list_strings['marker_image_list']['chapel'] = 'Nhà thờ';
$app_list_strings['marker_image_list']['church'] = 'Nhà thờ';
$app_list_strings['marker_image_list']['city_square'] = 'Quảng trường thành phố';
$app_list_strings['marker_image_list']['cluster'] = 'Cụm';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cụm 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cụm 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cụm 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cụm 5';
$app_list_strings['marker_image_list']['coffee'] = 'Cà phê';
$app_list_strings['marker_image_list']['community_centre'] = 'Trung tâm cộng đồng';
$app_list_strings['marker_image_list']['company'] = 'Công ty';
$app_list_strings['marker_image_list']['conference'] = 'Hội nghị';
$app_list_strings['marker_image_list']['construction'] = 'Xây dựng';
$app_list_strings['marker_image_list']['convenience'] = 'Tiện lợi';
$app_list_strings['marker_image_list']['court'] = 'Tòa án';
$app_list_strings['marker_image_list']['cruise'] = 'Hành trình';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Thu đổi Ngoại tệ';
$app_list_strings['marker_image_list']['customs'] = 'Tùy chỉnh';
$app_list_strings['marker_image_list']['cycling'] = 'Đạp xe';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Nha sĩ';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Cửa hàng';
$app_list_strings['marker_image_list']['disability'] = 'Người Khuyết tật';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Vô hiệu hóa theo dõi';
$app_list_strings['marker_image_list']['doctor'] = 'Bác sĩ';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dây xích chó';
$app_list_strings['marker_image_list']['down'] = 'Xuống';
$app_list_strings['marker_image_list']['down_left'] = 'Xuống trái';
$app_list_strings['marker_image_list']['down_right'] = 'Xuống phải';
$app_list_strings['marker_image_list']['down_then_left'] = 'Xuống sau đó bên trái';
$app_list_strings['marker_image_list']['down_then_right'] = 'Xuống sau đó bên phải';
$app_list_strings['marker_image_list']['drugs'] = 'Ma túy';
$app_list_strings['marker_image_list']['elevator'] = 'Thang máy';
$app_list_strings['marker_image_list']['embassy'] = 'Đại sứ quán';
$app_list_strings['marker_image_list']['expert'] = 'Chuyên gia';
$app_list_strings['marker_image_list']['factory'] = 'Nhà máy sản xuất';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Đá rơi xuống';
$app_list_strings['marker_image_list']['fast_food'] = 'Thức ăn nhanh';
$app_list_strings['marker_image_list']['festival'] = 'Lễ hội';
$app_list_strings['marker_image_list']['fjord'] = 'Vịnh hẹp';
$app_list_strings['marker_image_list']['forest'] = 'Rừng';
$app_list_strings['marker_image_list']['fountain'] = 'Đài phun nước';
$app_list_strings['marker_image_list']['friday'] = 'Thứ Sáu';
$app_list_strings['marker_image_list']['garden'] = 'Sân vườn';
$app_list_strings['marker_image_list']['gas_station'] = 'Trạm xăng';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Quà tặng';
$app_list_strings['marker_image_list']['gourmet'] = 'Ăn ngon';
$app_list_strings['marker_image_list']['grocery'] = 'Cửa hàng tạp hóa';
$app_list_strings['marker_image_list']['hairsalon'] = 'Tiệm làm tóc';
$app_list_strings['marker_image_list']['helicopter'] = 'Máy bay trực thăng';
$app_list_strings['marker_image_list']['highway'] = 'Đường cao tốc';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Khu phố lịch sử';
$app_list_strings['marker_image_list']['home'] = 'bắt đầu';
$app_list_strings['marker_image_list']['hospital'] = 'Bệnh viện';
$app_list_strings['marker_image_list']['hostel'] = 'Nhà trọ';
$app_list_strings['marker_image_list']['hotel'] = 'Khách sạn';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Khách sạn 1 sao';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Khách sạn 2 sao';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Khách sạn 3 sao';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Khách sạn 4 sao';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Khách sạn 5 sao';
$app_list_strings['marker_image_list']['info'] = 'Thông tin';
$app_list_strings['marker_image_list']['justice'] = 'Tư pháp';
$app_list_strings['marker_image_list']['lake'] = 'Hồ';
$app_list_strings['marker_image_list']['laundromat'] = 'Giặt ủi';
$app_list_strings['marker_image_list']['left'] = 'Trái';
$app_list_strings['marker_image_list']['left_then_down'] = 'Trái rồi xuống';
$app_list_strings['marker_image_list']['left_then_up'] = 'Trái rồi lên';
$app_list_strings['marker_image_list']['library'] = 'Thư viện';
$app_list_strings['marker_image_list']['lighthouse'] = 'Ngọn hải đăng';
$app_list_strings['marker_image_list']['liquor'] = 'Rượu';
$app_list_strings['marker_image_list']['lock'] = 'Khóa';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Mát-xa';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Tháp điện thoại di động';
$app_list_strings['marker_image_list']['modern_tower'] = 'Tháp hiện đại';
$app_list_strings['marker_image_list']['monastery'] = 'Tu viện';
$app_list_strings['marker_image_list']['monday'] = 'Thứ Hai';
$app_list_strings['marker_image_list']['monument'] = 'Line Item Groups';
$app_list_strings['marker_image_list']['mosque'] = 'Nhà thờ Hồi giáo';
$app_list_strings['marker_image_list']['motorcycle'] = 'Xe máy';
$app_list_strings['marker_image_list']['museum'] = 'Bảo tàng';
$app_list_strings['marker_image_list']['music_live'] = 'Nhạc sống';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Dàn bơm dầu';
$app_list_strings['marker_image_list']['pagoda'] = 'Chùa';
$app_list_strings['marker_image_list']['palace'] = 'Cung điện';
$app_list_strings['marker_image_list']['panoramic'] = 'Toàn cảnh';
$app_list_strings['marker_image_list']['park'] = 'Công viên';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park và Ride';
$app_list_strings['marker_image_list']['parking'] = 'Bãi đậu xe';
$app_list_strings['marker_image_list']['photo'] = 'Hình ảnh';
$app_list_strings['marker_image_list']['picnic'] = 'Dã ngoại';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Địa điểm Chưa được khảo sát';
$app_list_strings['marker_image_list']['places_visited'] = 'Nơi viếng thăm';
$app_list_strings['marker_image_list']['playground'] = 'Sân chơi';
$app_list_strings['marker_image_list']['police'] = 'Cảnh sát';
$app_list_strings['marker_image_list']['port'] = 'Cổng';
$app_list_strings['marker_image_list']['postal'] = 'Bưu chính';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Dòng điện cực';
$app_list_strings['marker_image_list']['power_plant'] = 'Nhà máy điện';
$app_list_strings['marker_image_list']['power_substation'] = 'Trạm biến áp điện';
$app_list_strings['marker_image_list']['public_art'] = 'Nghệ thuật công cộng';
$app_list_strings['marker_image_list']['rain'] = 'Mưa';
$app_list_strings['marker_image_list']['real_estate'] = 'Bất động sản';
$app_list_strings['marker_image_list']['regroup'] = 'Tập hợp';
$app_list_strings['marker_image_list']['resort'] = 'Khu nghỉ mát';
$app_list_strings['marker_image_list']['restaurant'] = 'Nhà hàng';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Nhà hàng Phi';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Nhà hàng thịt nướng';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Nhà hàng Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Nhà hàng Trung Quốc';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Nhà hàng cá';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Nhà hàng cá khoai tây chiên';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Nhà hàng Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Hy Lạp Nhà hàng';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Nhà hàng Ấn Độ';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Nhà hàng ý';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Nhà hàng Nhật bản';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Nhà hàng thịt nướng Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Nhà hàng Hàn Quốc';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Nhà hàng địa Trung Hải';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Nhà hàng Mexico';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Nhà hàng lãng mạn';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Nhà hàng Thái Lan';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Nhà hàng Bồn';
$app_list_strings['marker_image_list']['right'] = 'Phải';
$app_list_strings['marker_image_list']['right_then_down'] = 'Trái rồi xuống';
$app_list_strings['marker_image_list']['right_then_up'] = 'Trái rồi lên';
$app_list_strings['marker_image_list']['saturday'] = 'Thứ Bảy';
$app_list_strings['marker_image_list']['school'] = 'Trường học';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Khu mua sắm';
$app_list_strings['marker_image_list']['shore'] = 'Bờ biển';
$app_list_strings['marker_image_list']['sight'] = 'Tầm nhìn';
$app_list_strings['marker_image_list']['small_city'] = 'Thành phố nhỏ';
$app_list_strings['marker_image_list']['snow'] = 'Tuyết';
$app_list_strings['marker_image_list']['spaceport'] = 'Phi thuyền';
$app_list_strings['marker_image_list']['speed_100'] = 'Tốc độ 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Tốc độ 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Tốc độ 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Tốc độ 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Tốc độ 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Tốc độ 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Tốc độ 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Tốc độ 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Tốc độ 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Tốc độ 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Tốc độ 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Tốc độ 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Tốc độ Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Sân vận động';
$app_list_strings['marker_image_list']['statue'] = 'Bức tượng';
$app_list_strings['marker_image_list']['steam_train'] = 'Tàu hơi nước';
$app_list_strings['marker_image_list']['stop'] = 'Dừng';
$app_list_strings['marker_image_list']['stoplight'] = 'Đèn dừng';
$app_list_strings['marker_image_list']['subway'] = 'Tàu điện ngầm';
$app_list_strings['marker_image_list']['sun'] = 'C.Nhật';
$app_list_strings['marker_image_list']['sunday'] = 'Chủ Nhật';
$app_list_strings['marker_image_list']['supermarket'] = 'Siêu thị';
$app_list_strings['marker_image_list']['synagogue'] = 'Giáo đường Do Thái';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Xe taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Trà Xanh';
$app_list_strings['marker_image_list']['telephone'] = 'Điện thoại';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Ngôi đền Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Sân thượng';
$app_list_strings['marker_image_list']['text'] = 'Văn bản';
$app_list_strings['marker_image_list']['theater'] = 'Nhà hát';
$app_list_strings['marker_image_list']['theme_park'] = 'Gói giao diện';
$app_list_strings['marker_image_list']['thursday'] = 'Thứ Năm';
$app_list_strings['marker_image_list']['toilets'] = 'Nhà vệ sinh';
$app_list_strings['marker_image_list']['toll_station'] = 'Trạm thu phí';
$app_list_strings['marker_image_list']['tower'] = 'Tháp';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Camera ghi hình giao thông';
$app_list_strings['marker_image_list']['train'] = 'Xe lửa';
$app_list_strings['marker_image_list']['tram'] = 'Xe điện';
$app_list_strings['marker_image_list']['truck'] = 'Xe tải';
$app_list_strings['marker_image_list']['tuesday'] = 'Thứ Ba';
$app_list_strings['marker_image_list']['tunnel'] = 'Đường hầm';
$app_list_strings['marker_image_list']['turn_left'] = 'Rẽ Trái';
$app_list_strings['marker_image_list']['turn_right'] = 'Rẽ Phải';
$app_list_strings['marker_image_list']['university'] = 'Trường đại học';
$app_list_strings['marker_image_list']['up'] = 'Lên';
$app_list_strings['marker_image_list']['up_left'] = 'Lên trái';
$app_list_strings['marker_image_list']['up_right'] = 'Lên phải';
$app_list_strings['marker_image_list']['up_then_left'] = 'Lên qua trái';
$app_list_strings['marker_image_list']['up_then_right'] = 'Lên qua phải';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Đoạn phim';
$app_list_strings['marker_image_list']['villa'] = 'Biệt thự';
$app_list_strings['marker_image_list']['water'] = 'Nước';
$app_list_strings['marker_image_list']['waterfall'] = 'Thác nước';
$app_list_strings['marker_image_list']['watermill'] = 'Nhà máy nước';
$app_list_strings['marker_image_list']['waterpark'] = 'Công viên nước';
$app_list_strings['marker_image_list']['watertower'] = 'Tháp nước';
$app_list_strings['marker_image_list']['wednesday'] = 'Thứ Tư';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Tua bin gió';
$app_list_strings['marker_image_list']['windmill'] = 'Cối xay gió';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Công việc văn phòng';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Di sản thế giới';
$app_list_strings['marker_image_list']['zoo'] = 'Sở thú';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Ra khỏi văn phòng';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Trong một cuộc họp';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Đổi lịch hẹn';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Vui lòng nhập thông tin lịch lại';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Ngày:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Lý do:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Vui lòng chọn ngày đúng';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Vui lòng lựa chọn một lý do';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Đổi lịch hẹn';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Lịch sử cuộc gọi thử';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Cuộc gọi thử';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Quản lý nhóm bảo mật';
$app_strings['LBL_LOGIN_AS'] = 'Đăng nhập như ';
$app_strings['LBL_LOGOUT_AS'] = 'Đăng xuất như ';
$app_strings['LBL_SECURITYGROUP'] = 'Nhóm bảo mật';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Tài khoản email gửi đi';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Thông tin chi tiết nguồn cấp dữ liệu xã hội';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Bộ lọc';

$app_strings['LBL_COLLECTION_TYPE'] = 'Loại';

$app_strings['LBL_ADD_TAB'] = 'Thêm thẻ';
$app_strings['LBL_EDIT_TAB'] = 'Chỉnh sửa thẻ';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Bảng điều khiển SuiteCRM'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Nhập tên bảng:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Số lượng các cột:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Bạn có chắc chắn muốn xoá';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'bảng điều khiển?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Thêm một trang bảng điều khiển';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Loại bỏ bảng điều khiển hiện thời';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Đổi tên trang bảng điều khiển';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Hành động'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tác vụ',
    'Meetings' => 'Hội họp',
    'Calls' => 'Xem Cuộc gọi',
    'Notes' => 'Ghi chú',
    'Emails' => 'Email'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Bản mẫu phần biên tập';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Bạn đã nhấp vào từ các lĩnh vực mà bạn đã chỉnh sửa mà không lưu nó. Bấm ok nếu bạn đang hạnh phúc để mất của bạn thay đổi, hoặc hủy bỏ nếu bạn muốn tiếp tục chỉnh sửa";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Đã có lỗi trong khi tải các lĩnh vực. Phiên của bạn có thể đã hết thời gian. Xin vui lòng đăng nhập lại để sửa lỗi này";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Bán hàng',
    'getAccountsSpotsData' => 'Tài khoản',
    'getLeadsSpotsData' => 'Đầu mối',
    'getServiceSpotsData' => 'Dịch vụ',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Hoạt động Marketing',
    'getActivitiesSpotsData' => 'Các hoạt động',
    'getQuotesSpotsData' => 'Báo giá'
);

$app_list_strings['moduleList']['Spots'] = 'Điểm';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Giờ làm việc';
$app_list_strings['business_hours_list']['0'] = '12 am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12 pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'Thứ Hai';
$app_list_strings['day_list']['Tuesday'] = 'Thứ Ba';
$app_list_strings['day_list']['Wednesday'] = 'Thứ Tư';
$app_list_strings['day_list']['Thursday'] = 'Thứ Năm';
$app_list_strings['day_list']['Friday'] = 'Thứ Sáu';
$app_list_strings['day_list']['Saturday'] = 'Thứ Bảy';
$app_list_strings['day_list']['Sunday'] = 'Chủ Nhật';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Pháp lý';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Chiều dọc';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Chiều ngang';
$app_list_strings['run_when_dom']['When True'] = 'Đánh giá khi lưu'; // PR 6143
$app_list_strings['run_when_dom']['Once True'] = 'Liên tục - (Trường phải được kiểm soát)';
$app_list_strings['sa_status_list']['Complete'] = 'Hoàn tất';
$app_list_strings['sa_status_list']['In_Review'] = 'Đang xem xét';
$app_list_strings['sa_status_list']['Issue_Resolution'] = 'Đưa ra giải pháp';
$app_list_strings['sa_status_list']['Pending_Apttus_Submission'] = 'Đang chờ Apttus nộp hồ sơ';
$app_list_strings['sharedGroupRule']['none'] = 'Cấm truy cập';
$app_list_strings['sharedGroupRule']['view'] = 'Chỉ Xem';
$app_list_strings['sharedGroupRule']['view_edit'] = 'Xem & Sửa';
$app_list_strings['sharedGroupRule']['view_edit_delete'] = 'Xem, Sửa & Xóa';
$app_list_strings['moduleList']['SharedSecurityRulesFields'] = 'Các trường được chia sẻ quy tắc bảo mật';
$app_list_strings['moduleList']['SharedSecurityRules'] = 'Quy tắc bảo mật chung';
$app_list_strings['moduleList']['SharedSecurityRulesActions'] = 'Các hành động quy tắc bảo mật chung';
$app_list_strings['shared_email_type_list'][''] = '';
$app_list_strings['shared_email_type_list']['Specify User'] = 'Người dùng';
$app_list_strings['shared_email_type_list']['Users'] = 'Người dùng';
$app_list_strings['aow_condition_type_list']['Value'] = 'Giá trị';
$app_list_strings['aow_condition_type_list']['Field'] = 'Các trường';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Bất kỳ thay đổi';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Trong nhóm an toàn';
$app_list_strings['aow_condition_type_list']['currentUser'] = 'Người dùng đăng nhập hiện tại';
$app_list_strings['aow_condition_type_list']['Date'] = 'Ngày giờ';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Một trong';


$app_list_strings['moduleList']['SurveyResponses'] = 'Phản hồi khảo sát';
$app_list_strings['moduleList']['Surveys'] = 'Khảo sát';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Trả lời câu hỏi khảo sát';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Câu hỏi khảo sát';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Tùy chọn câu hỏi khảo sát';
$app_list_strings['survey_status_list']['Draft'] = 'Dự thảo';
$app_list_strings['survey_status_list']['Public'] = 'Công khai';
$app_list_strings['survey_status_list']['Closed'] = 'Đã đóng';
$app_list_strings['surveys_question_type']['Text'] = 'Văn bản';
$app_list_strings['surveys_question_type']['Textbox'] = 'Ô văn bản';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Ô đánh dấu';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Trình đơn thả xuống';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Chọn nhiều';
$app_list_strings['surveys_question_type']['Matrix'] = 'Ma trận';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Ngày giờ';
$app_list_strings['surveys_question_type']['Scale'] = 'Tỷ lệ';
$app_list_strings['surveys_question_type']['Rating'] = 'Xếp hạng';
$app_list_strings['surveys_matrix_options'][0] = 'Hài lòng';
$app_list_strings['surveys_matrix_options'][1] = 'Hài lòng hay không hài lòng';
$app_list_strings['surveys_matrix_options'][2] = 'Không hài lòng';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Đang chờ xác nhận chọn tham gia, xác nhận chọn tham gia không được gửi';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Email xác nhận sử dụng đang gửi bị lỗi';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Đang chờ xác nhận chọn tham gia, xác nhận chọn tham gia đã được gửi';
$app_strings['LBL_OPT_IN'] = 'Chọn tham gia';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Đã xác nhận chọn tham gia';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Từ chối nhận';
$app_strings['LBL_OPT_IN_INVALID'] = 'Không hợp lệ';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Vô hiệu hóa',
    'opt-in' => 'Chọn tham gia',
    'confirmed-opt-in' => 'Xác nhận chọn tham gia'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Không sử dụng',
    'opt-in' => 'Chọn tham gia',
    'confirmed-opt-in' => 'Xác nhận chọn tham gia'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Xác nhận việc Email chọn tham gia đã được thêm vào hàng email đợi cho %s (các) đỉa chỉ Email. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Không thể gửi email đến %s các địa chỉ email, bởi vì họ không được chọn tham gia. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'địa chỉ email %s không có một id hợp lệ. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Xác thực hai yếu tố bị lỗi';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Đã gửi mã xác thực hai yếu tố.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Không thể gửi mã xác thực hai yếu tố.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Cảm ơn bạn đã quan tâm.';

$app_strings['ERR_IP_CHANGE'] = 'Phiên của kết nối bị chấm dứt do sự thay đổi địa chỉ IP của bạn';
$app_strings['ERR_RETURN'] = 'Trở về trang chủ';

$app_strings['LBL_ALLOTTED_CUSTOMER'] = 'KHÁCH HÀNG ĐƯỢC PHÂN PHỐI';
$app_strings['LBL_CUSTOMERS_HAVE_NOT_CONTACTED'] = 'KHÁCH HÀNG CHƯA TÁC ĐỘNG';
$app_strings['LBL_CUSTOMERS_ARE_INTERESTED_OR_AGREE'] = 'KHÁCH HÀNG QUAN TÂM HOẶC ĐỒNG Ý';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Cung cấp mật khẩu',
    'client_credentials' => 'Thông tin đăng nhập của khách hàng',
    'implicit' => 'Tiềm ẩn',
    'authorization_code' => 'Mã xác thực'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'phút',
    'hour' => 'giờ',
    'day' => 'Ngày',
    'week' => 'tuần',
    'month' => 'tháng',
];
/** PR 6222 */
$app_list_strings['search_controllers'] = [
    'Search' => 'Tìm kiếm (mới)',
    'UnifiedSearch' => 'Tìm kiếm tổng quan (không dùng)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Lỗi JSON API';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Xuất hiện lỗi JSON API.'; // PR 6752
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Phiên bản API: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Vui lòng đảm bảo bạn đã nhập dữ liệu vào những trường được yêu cầu bắt buộc';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Phần nội dung của một yêu cầu của một JSON API phải có định dạng là JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Không thể xác nhận các Json Api Payload yêu cầu';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Không thể xác nhận các Json Api Payload phản hồi';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'JSON API không thể tìm thấy tài nguyên';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'JSON API mong muốn "Accept" phải có header là application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'JSON API mong muốn "Content-Type" có header là application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Thông báo hiện tại được kích hoạt cho trình duyệt web này.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Thông báo đã được tắt cho trình duyệt web này. Sử dụng chức năng tuỳ chọn trình duyệt của bạn để bật lên khi cần thiết.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Trình duyệt này không hỗ trợ chế độ thông báo máy tính để bàn.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'Đồng bộ SuiteCRM Google - LỖI'; // PR 6539
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Đã có lỗi: '; // PR 6539

$app_strings['LBL_TO_CONTINUE'] = ' để tiếp tục.'; // PR 6539

$app_strings['IMAP_HANDLER_ERROR'] = 'LỖI: {error}; từ khóa là: "{key}".'; // PR 6600 6617
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: kiểm tra cài đặt đã thay đổi "{key}"'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Yêu cầu không hợp lệ, dùng giá trị "{var}".'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Lỗi không rõ đã xảy ra, phím "{key}" không được lưu.'; // PR 6752
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Kiểm tra cài đặt không tồn tại.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Không tìm thấy khóa bảo mật.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Lưu khóa bảo mật bị lỗi.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Không rõ nguyên nhân'; // PR 6600 6617

$app_strings['LBL_SEARCH_TITLE']                   = 'Tìm kiếm'; // Dev 6543
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Điều kiện tìm kiếm'; // Dev 6543
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Tìm kiếm'; // Dev 6543
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Tìm kiếm'; // Dev 6543
$app_strings['LBL_SEARCH_QUERY']                   = 'Truy vấn tìm kiếm: '; // Dev 6543
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Kết quả mỗi trang: '; // Dev 6543
$app_strings['LBL_SEARCH_ENGINE']                  = 'Bộ máy tìm kiếm: '; // Dev 6543
$app_strings['LBL_SEARCH_TOTAL'] = 'Tổng kết quả tìm kiếm: '; // Dev PR 6705
$app_strings['LBL_SEARCH_PREV'] = 'Trước'; // Dev PR 6705
$app_strings['LBL_SEARCH_NEXT'] = 'Tới'; // Dev PR 6705
$app_strings['LBL_SEARCH_PAGE'] = 'Trang tìm kiếm '; // Dev PR 6705
$app_strings['LBL_SEARCH_OF'] = ' của '; // Usage: Page 1 of 5 - Dev PR 6705

$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'Một báo cáo mà bạn đã chọn nhắm mục tiêu theo một mô-đun bạn không có quyền truy cập vào. Vui lòng chọn một báo cáo với một mô-đun mục tiêu, bạn có thể truy cập.';
