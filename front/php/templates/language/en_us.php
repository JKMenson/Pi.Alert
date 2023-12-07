<?php
unset($pia_lang);
//////////////////////////////////////////////////////////////////
// About - Update by @TeroRERO 07ago2022
//////////////////////////////////////////////////////////////////
$pia_lang['About_Title'] = 'Home Network Monitoring System';
$pia_lang['About_Exit'] = 'Sign out';
$pia_lang['About_Reports'] = 'Show notifications';

//////////////////////////////////////////////////////////////////
// General
//////////////////////////////////////////////////////////////////
$pia_lang['Gen_Delete'] = 'Delete';
$pia_lang['Gen_Cancel'] = 'Cancel';
$pia_lang['Gen_Okay'] = 'Ok';
$pia_lang['Gen_Purge'] = 'Purge';
$pia_lang['Gen_Backup'] = 'Run Backup';
$pia_lang['Gen_Restore'] = 'Run Restore';
$pia_lang['Gen_Switch'] = 'Switch';
$pia_lang['Gen_Run'] = 'Run';
$pia_lang['Gen_Save'] = 'Save';
$pia_lang['Gen_Close'] = 'Close';
$pia_lang['Gen_on'] = 'On';
$pia_lang['Gen_off'] = 'Off';

//////////////////////////////////////////////////////////////////
// Login Page
//////////////////////////////////////////////////////////////////

$pia_lang['Login_Box'] = 'Enter your password';
$pia_lang['Login_Remember'] = 'Remember';
//$pia_lang['Login_Remember_small'] = '(valid for 7 days)';
$pia_lang['Login_Submit'] = 'Log in';
//$pia_lang['Login_Psw_run'] = 'To change password run:';
//$pia_lang['Login_Psw_new'] = 'new_password';
//$pia_lang['Login_Psw_folder'] = 'in the "~/pialert/back" folder.';
//$pia_lang['Login_Psw_alert'] = 'Password Alert!';
$pia_lang['Login_Psw-box'] = 'Password';
$pia_lang['Login_Toggle_Info'] = 'Password Information';
$pia_lang['Login_Toggle_Info_headline'] = 'Password Information';
//$pia_lang['Login_Toggle_Alert_headline'] = 'Password Alert!';

//////////////////////////////////////////////////////////////////
// Sidebar
//////////////////////////////////////////////////////////////////

$pia_lang['Navigation_Devices'] = 'Detected devices';
//$pia_lang['Navigation_Services'] = 'Web Services';
$pia_lang['Navigation_Presence'] = 'Chart & Graph';
$pia_lang['Navigation_Events'] = 'Events';
$pia_lang['Navigation_Journal'] = ' System Journal';
$pia_lang['Navigation_Events_Dev'] = 'Events';
$pia_lang['Navigation_Events_Serv'] = 'Web Services';
$pia_lang['Navigation_ICMPScan'] = 'Monitor Devices';
$pia_lang['Navigation_Maintenance'] = 'Settings';
$pia_lang['Navigation_Network'] = 'Network';
//$pia_lang['Navigation_HelpFAQ'] = 'Help / FAQ';
//$pia_lang['Navigation_UpdateCheck'] = 'Update Check';
$pia_lang['Navigation_Section_A'] = 'MAIN MENU';
$pia_lang['Navigation_Section_B'] = 'EVENTS & JOURNAL';
$pia_lang['Navigation_Section_C'] = 'SETTING';

//////////////////////////////////////////////////////////////////
// Device Page
//////////////////////////////////////////////////////////////////

$pia_lang['Device_Title'] = 'Devices';
$pia_lang['Device_Shortcut_AllDevices'] = 'All Devices';
$pia_lang['Device_Shortcut_Connected'] = 'Connected';
$pia_lang['Device_Shortcut_Favorites'] = 'Favorites';
$pia_lang['Device_Shortcut_NewDevices'] = 'New Devices';
$pia_lang['Device_Shortcut_DownAlerts'] = 'Down Alerts';
//$pia_lang['Device_Shortcut_Archived'] = 'Archived';
$pia_lang['Device_Shortcut_Devices'] = 'Devices';
//$pia_lang['Device_Shortcut_OnlineChart_a'] = 'Device presence over time (';
//$pia_lang['Device_Shortcut_OnlineChart_b'] = 'h)';
$pia_lang['Device_TableHead_Name'] = 'Name';
$pia_lang['Device_TableHead_Owner'] = 'Owner';
$pia_lang['Device_TableHead_Type'] = 'Type';
$pia_lang['Device_TableHead_Favorite'] = 'Favorite';
$pia_lang['Device_TableHead_Group'] = 'Group';
$pia_lang['Device_TableHead_Location'] = 'Location';
$pia_lang['Device_TableHead_FirstSession'] = 'First Session';
$pia_lang['Device_TableHead_LastSession'] = 'Last Session';
$pia_lang['Device_TableHead_LastIP'] = 'IP Address';
$pia_lang['Device_TableHead_MAC'] = 'MAC';
$pia_lang['Device_TableHead_MACaddress'] = 'MAC-Address';
$pia_lang['Device_TableHead_LastIPOrder'] = 'Last IP Order';
$pia_lang['Device_TableHead_Rowid'] = 'Rowid';
$pia_lang['Device_TableHead_Status'] = 'Status';
$pia_lang['Device_TableHead_ConnectionType'] = 'Connection Type';
$pia_lang['Device_Searchbox'] = 'Search';
$pia_lang['Device_Tablelenght'] = 'Show _MENU_ entries';
$pia_lang['Device_Tablelenght_all'] = 'All';
$pia_lang['Device_Table_info'] = 'Showing _START_ to _END_ of _TOTAL_ entries';
$pia_lang['Device_Table_nav_next'] = 'Next';
$pia_lang['Device_Table_nav_prev'] = 'Previous';
$pia_lang['Device_bulkEditor_mode'] = 'Bulk Editor';
$pia_lang['Device_bulkEditor_mode_quit'] = 'Quit Editor';
$pia_lang['Device_bulkEditor_selectall'] = 'Select all Host&apos;s';
$pia_lang['Device_bulkEditor_selectnone'] = 'Deselect all Host&apos;s';
$pia_lang['Device_bulkEditor_savebox_title'] = 'Fields were saved';
$pia_lang['Device_bulkEditor_savebox_noselection'] = 'No fields were selected for modification';
$pia_lang['Device_bulkEditor_savebox_mod_devices'] = 'Modified devices';
$pia_lang['Device_bulkEditor_savebox_mod_fields'] = 'Changed values';
$pia_lang['Device_bulkEditor_hostbox_title'] = 'Select the devices to be edited';
$pia_lang['Device_bulkEditor_inputbox_title'] = 'Edit fields';
$pia_lang['Device_bulkDel_button'] = 'DELETE DEVICES';
$pia_lang['Device_bulkDel_info_head'] = 'Delete multiple devices';
$pia_lang['Device_bulkDel_info_text'] = 'With this function, you delete one or more devices from the database. If the devices are still in the network, they may be added back to the database, but without the individual settings.';
$pia_lang['Device_bulkDel_back_before'] = 'Number of devices before';
$pia_lang['Device_bulkDel_back_after'] = 'Current number of devices';
$pia_lang['Device_bulkDel_back_hosts'] = 'MAC addresses to be deleted';

//////////////////////////////////////////////////////////////////
// Presence Page
//////////////////////////////////////////////////////////////////

$pia_lang['Presence_Title'] = 'Presence by Device';
$pia_lang['Presence_Shortcut_AllDevices'] = 'All Devices';
$pia_lang['Presence_Shortcut_Connected'] = 'Connected';
$pia_lang['Presence_Shortcut_Favorites'] = 'Favorites';
$pia_lang['Presence_Shortcut_NewDevices'] = 'New Devices';
$pia_lang['Presence_Shortcut_DownAlerts'] = 'Down Alerts';
//$pia_lang['Presence_Shortcut_Archived'] = 'Archived';
$pia_lang['Presence_Shortcut_Devices'] = 'Devices';

// Localizationfiles under pialert/front/lib/AdminLTE/bower_components/fullcalendar/dist/locale
$pia_lang['Presence_CallHead_Devices'] = 'Devices';
$pia_lang['Presence_CalHead_lang'] = 'en-us';
$pia_lang['Presence_CalHead_year'] = 'year';
$pia_lang['Presence_CalHead_quarter'] = 'quarter';
$pia_lang['Presence_CalHead_month'] = 'month';
$pia_lang['Presence_CalHead_week'] = 'week';
$pia_lang['Presence_CalHead_day'] = 'day';

//////////////////////////////////////////////////////////////////
// Events Page
//////////////////////////////////////////////////////////////////

$pia_lang['Events_Title'] = 'Events';
$pia_lang['Events_Periodselect_today'] = 'Today';
$pia_lang['Events_Periodselect_LastWeek'] = 'Last Week';
$pia_lang['Events_Periodselect_LastMonth'] = 'Last Month';
$pia_lang['Events_Periodselect_LastYear'] = 'Last Year';
$pia_lang['Events_Periodselect_All'] = 'All Info';
$pia_lang['Events_Shortcut_AllEvents'] = 'All Events';
$pia_lang['Events_Shortcut_Sessions'] = 'Sessions';
$pia_lang['Events_Shortcut_MissSessions'] = 'Missing Sessions';
$pia_lang['Events_Shortcut_VoidSessions'] = 'Voided Sessions';
$pia_lang['Events_Shortcut_NewDevices'] = 'New Devices';
$pia_lang['Events_Shortcut_DownAlerts'] = 'Down Alerts';
$pia_lang['Events_Shortcut_Events'] = 'Events';
$pia_lang['Events_TableHead_Order'] = 'Order';
$pia_lang['Events_TableHead_Device'] = 'Device';
$pia_lang['Events_TableHead_Owner'] = 'Owner';
$pia_lang['Events_TableHead_Date'] = 'Date';
$pia_lang['Events_TableHead_EventType'] = 'Event Type';
$pia_lang['Events_TableHead_Connection'] = 'Connection';
$pia_lang['Events_TableHead_Disconnection'] = 'Disconnection';
$pia_lang['Events_TableHead_Duration'] = 'Duration';
$pia_lang['Events_TableHead_DurationOrder'] = 'Duration Order';
$pia_lang['Events_TableHead_IP'] = 'IP';
$pia_lang['Events_TableHead_IPOrder'] = 'IP Order';
$pia_lang['Events_TableHead_AdditionalInfo'] = 'Additional Info';
$pia_lang['Events_Searchbox'] = 'Search';
$pia_lang['Events_Tablelenght'] = 'Show _MENU_ entries';
$pia_lang['Events_Tablelenght_all'] = 'All';
$pia_lang['Events_Table_info'] = 'Showing _START_ to _END_ of _TOTAL_ entries';
$pia_lang['Events_Table_nav_next'] = 'Next';
$pia_lang['Events_Table_nav_prev'] = 'Previous';

//////////////////////////////////////////////////////////////////
// WebServices Events Page
//////////////////////////////////////////////////////////////////

$pia_lang['WebServices_Events_Title'] = 'Web Services - Events';
$pia_lang['WebServices_Events_Shortcut_All'] = 'All Events';
$pia_lang['WebServices_Events_Shortcut_HTTP2xx'] = 'HTTP Code 2xx';
$pia_lang['WebServices_Events_Shortcut_HTTP3xx'] = 'HTTP Code 3xx';
$pia_lang['WebServices_Events_Shortcut_HTTP4xx'] = 'HTTP Code 4xx';
$pia_lang['WebServices_Events_Shortcut_HTTP5xx'] = 'HTTP Code 5xx';
$pia_lang['WebServices_Events_Shortcut_Down'] = 'Down';
$pia_lang['WebServices_Events_TableHead_URL'] = 'URL';
$pia_lang['WebServices_Events_TableHead_TargetIP'] = 'Dest. IP';
$pia_lang['WebServices_Events_TableHead_ScanTime'] = 'Scan Time';
$pia_lang['WebServices_Events_TableHead_StatusCode'] = 'Status Code';
$pia_lang['WebServices_Events_TableHead_ResponsTime'] = 'Response Time';

//////////////////////////////////////////////////////////////////
// Device Details Page
//////////////////////////////////////////////////////////////////

$pia_lang['DevDetail_Periodselect_today'] = 'Today';
$pia_lang['DevDetail_Periodselect_LastWeek'] = 'Last Week';
$pia_lang['DevDetail_Periodselect_LastMonth'] = 'Last Month';
$pia_lang['DevDetail_Periodselect_LastYear'] = 'Last Year';
$pia_lang['DevDetail_Periodselect_All'] = 'All Info';
$pia_lang['DevDetail_Shortcut_CurrentStatus'] = 'Current Status';
$pia_lang['DevDetail_Shortcut_Sessions'] = 'Sessions';
$pia_lang['DevDetail_Shortcut_Presence'] = 'Presence';
$pia_lang['DevDetail_Shortcut_DownAlerts'] = 'Down Alerts';
$pia_lang['DevDetail_Tab_Details'] = 'Details';
$pia_lang['DevDetail_Tab_Nmap'] = 'Tools';
$pia_lang['DevDetail_Tab_Sessions'] = 'Sessions';
$pia_lang['DevDetail_Tab_Presence'] = 'Presence';
$pia_lang['DevDetail_Tab_Events'] = 'Events';
$pia_lang['DevDetail_MainInfo_Title'] = 'Main Info';
$pia_lang['DevDetail_MainInfo_mac'] = 'MAC';
$pia_lang['DevDetail_MainInfo_Name'] = 'Name';
$pia_lang['DevDetail_MainInfo_Owner'] = 'Owner';
$pia_lang['DevDetail_MainInfo_Type'] = 'Type';
$pia_lang['DevDetail_MainInfo_Vendor'] = 'Vendor';
$pia_lang['DevDetail_MainInfo_Model'] = 'Model';
$pia_lang['DevDetail_MainInfo_Serialnumber'] = 'Serial';
$pia_lang['DevDetail_MainInfo_Favorite'] = 'Favorite';
$pia_lang['DevDetail_MainInfo_Group'] = 'Group';
$pia_lang['DevDetail_MainInfo_Location'] = 'Location';
$pia_lang['DevDetail_MainInfo_Comments'] = 'Comments';
$pia_lang['DevDetail_MainInfo_Network'] = 'Uplink Target';
$pia_lang['DevDetail_MainInfo_Network_Port'] = 'Target Port Number';
$pia_lang['DevDetail_MainInfo_Network_ConnectType'] = 'Connection Type';
$pia_lang['DevDetail_SessionInfo_Title'] = 'Session Info';
$pia_lang['DevDetail_SessionInfo_Status'] = 'Status';
$pia_lang['DevDetail_SessionInfo_FirstSession'] = 'First Session';
$pia_lang['DevDetail_SessionInfo_LastSession'] = 'Last Session';
$pia_lang['DevDetail_SessionInfo_LastIP'] = 'IP Address';
$pia_lang['DevDetail_SessionInfo_StaticIP'] = 'Static IP';
$pia_lang['DevDetail_Network_Titel'] = 'Network';
$pia_lang['DevDetail_EveandAl_Title'] = 'Events & Alerts config';
$pia_lang['DevDetail_EveandAl_ScanCycle'] = 'Scan Cycle';
$pia_lang['DevDetail_EveandAl_AlertAllEvents'] = 'Alert All Events';
$pia_lang['DevDetail_EveandAl_AlertDown'] = 'Alert Down';
$pia_lang['DevDetail_EveandAl_Skip'] = 'Skip repeated notifications during';
$pia_lang['DevDetail_EveandAl_NewDevice'] = 'New Device';
//$pia_lang['DevDetail_EveandAl_Archived'] = 'Archived';
//$pia_lang['DevDetail_EveandAl_RandomMAC'] = 'Random MAC';
$pia_lang['DevDetail_EveandAl_ScanCycle_a'] = 'Scan Device (1 min)';
$pia_lang['DevDetail_EveandAl_ScanCycle_z'] = 'Don&#39;t Scan Device (0 min)';
$pia_lang['DevDetail_button_Delete'] = 'Delete Device';
$pia_lang['DevDetail_button_Delete_Warning'] = 'Are you sure you want to delete this device?<br>(maybe you prefer to archive it)';
$pia_lang['DevDetail_button_DeleteEvents'] = 'Delete Events';
$pia_lang['DevDetail_button_DeleteEvents_Warning'] = 'Are you sure you want to delete all Events of this device?<br><br>This will clear the <b>Events history</b> and the <b>Sessions</b> and might help with constant (persistent) notifications';
$pia_lang['DevDetail_button_Reset'] = 'Reset Changes';
$pia_lang['DevDetail_button_Save'] = 'Save';
$pia_lang['DevDetail_SessionTable_Order'] = 'Order';
$pia_lang['DevDetail_SessionTable_Connection'] = 'Connection';
$pia_lang['DevDetail_SessionTable_Disconnection'] = 'Disconnection';
$pia_lang['DevDetail_SessionTable_Duration'] = 'Duration';
$pia_lang['DevDetail_SessionTable_IP'] = 'IP';
$pia_lang['DevDetail_SessionTable_Additionalinfo'] = 'Additional info';
$pia_lang['DevDetail_Events_CheckBox'] = 'Hide Connection Events';
$pia_lang['DevDetail_Tools_nmap_buttonFast'] = 'Fast Scan';
$pia_lang['DevDetail_Tools_nmap_buttonDefault'] = 'Default Scan';
$pia_lang['DevDetail_Tools_nmap_buttonDetail'] = 'Detailed Scan';
$pia_lang['DevDetail_Tools_nmap_buttonFast_text'] = 'Fast Scan: Scan fewer ports (100) than the default scan (a few seconds)';
$pia_lang['DevDetail_Tools_nmap_buttonDefault_text'] = 'Default Scan: Nmap scans the top 1,000 ports for each scan protocol requested. This catches roughly 93% of the TCP ports and 49% of the UDP ports. (about 5 seconds)';
$pia_lang['DevDetail_Tools_nmap_buttonDetail_text'] = 'Detailed Scan: Default scan with enabled OS detection, version detection, script scanning and traceroute (up to 30 seconds or more)';
$pia_lang['DevDetail_Tools_WOL'] = 'Send Wol command to ';
$pia_lang['DevDetail_Tools_WOL_noti'] = 'Wake-on-LAN';
$pia_lang['DevDetail_Tools_WOL_noti_text'] = 'The Wake-on-LAN command is sent to the broadcast address. If the target is not in the subnet/vlan of Pi.Alert, the target device will not respond.';
$pia_lang['BackDevDetail_Tools_WOL_okay'] = 'The command was executed';
$pia_lang['BackDevDetail_Tools_WOL_error'] = 'The command was not executed';

//////////////////////////////////////////////////////////////////
// WebServices Details Page
//////////////////////////////////////////////////////////////////

$pia_lang['WebServices_Title'] = 'Web Services';
$pia_lang['WebServices_unknown_Device'] = 'Unknown Device';
$pia_lang['WebServices_tablehead_TargetIP'] = 'Dest. IP';
$pia_lang['WebServices_tablehead_ScanTime'] = 'Scan Time';
$pia_lang['WebServices_tablehead_Status_Code'] = 'HTTP Status';
$pia_lang['WebServices_tablehead_Response_Time'] = 'Response Time';
$pia_lang['WebServices_Tab_Graph'] = 'Stats';
$pia_lang['WebServices_label_URL'] = 'URL';
$pia_lang['WebServices_label_Tags'] = 'Tag';
$pia_lang['WebServices_label_MAC'] = 'Device';
$pia_lang['WebServices_label_MAC_Select'] = 'Select';
$pia_lang['WebServices_label_Notes'] = 'Note';
$pia_lang['WebServices_label_TargetIP'] = 'Dest. IP';
$pia_lang['WebServices_label_StatusCode'] = 'HTTP Status';
$pia_lang['WebServices_label_ScanTime'] = 'Scan Time';
$pia_lang['WebServices_label_Response_Time'] = 'Response Time';
$pia_lang['WebServices_label_AlertEvents'] = 'All Events';
$pia_lang['WebServices_label_AlertDown'] = 'Down Events';
$pia_lang['WebServices_label_Notification'] = 'Notify';
$pia_lang['WebServices_Chart_a'] = 'Service Status over the last';
$pia_lang['WebServices_Chart_b'] = 'hours';
$pia_lang['WebServices_Page_down'] = 'Offline';
$pia_lang['WebServices_button_Delete_label'] = 'Delete Service';
$pia_lang['WebServices_button_Delete_Warning'] = 'Are you sure you want to delete this web service?';
$pia_lang['WebServices_headline_NewService'] = 'New Web Service';
$pia_lang['WebServices_Events_all'] = 'All Events';
$pia_lang['WebServices_Events_down'] = 'Down';
$pia_lang['WebServices_Events_none'] = 'none';
$pia_lang['WebServices_BoxTitle_General'] = 'General';
$pia_lang['WebServices_Stats_Code'] = 'Page Status';
$pia_lang['WebServices_Stats_Time'] = 'Response Time';
$pia_lang['WebServices_Stats_Time_min'] = 'Fastest';
$pia_lang['WebServices_Stats_Time_max'] = 'Slowest';
$pia_lang['WebServices_Stats_Location'] = 'Location';
$pia_lang['WebServices_Stats_IP'] = 'Current IP';
$pia_lang['WebServices_Stats_IPLocation'] = 'Country Mapping';
$pia_lang['WebServices_Stats_comment_a'] = '(Calculated from all scans of this service.)';

//////////////////////////////////////////////////////////////////
// WebServices Details Page - Backend
//////////////////////////////////////////////////////////////////

$pia_lang['BackWebServices_UpdServ'] = 'The web service was updated';
$pia_lang['BackWebServices_UpdServError'] = 'The web service was not updated';
$pia_lang['BackWebServices_InsServ'] = 'The web service was saved';
$pia_lang['BackWebServices_InsServError'] = 'The web service was not saved';
$pia_lang['BackWebServices_DelServ'] = 'The web service was deleted from the database';
$pia_lang['BackWebServices_DelServError'] = 'The web service could not be deleted, or could not be deleted completely';

//////////////////////////////////////////////////////////////////
// ICMP Monitoring Page
//////////////////////////////////////////////////////////////////

$pia_lang['ICMPMonitor_Title'] = 'Add Monitor';
$pia_lang['ICMPMonitor_headline_IP'] = 'Monitor New IP Address';
$pia_lang['ICMPMonitor_label_IP'] = 'Host IP';
$pia_lang['ICMPMonitor_label_Hostname'] = 'Hostname';
$pia_lang['ICMPMonitor_label_RTT'] = 'avg. RTT';
$pia_lang['BackICMP_mon_disabled'] = 'ICMP monitoring is disabled';
$pia_lang['BackICMP_mon_enabled'] = 'ICMP monitoring is enabled';
$pia_lang['BackICMP_mon_InsICMP'] = 'The ICMP host has been saved';
$pia_lang['BackICMP_mon_InsICMPError'] = 'The ICMP host was not saved';
$pia_lang['BackICMP_mon_DelICMP'] = 'The ICMP host has been deleted from the database';
$pia_lang['BackICMP_mon_DelICMPError'] = 'The ICMP host could not be deleted, or not fully deleted';
$pia_lang['BackICMP_mon_UpdICMP'] = 'The ICMP host has been updated';
$pia_lang['BackICMP_mon_UpdICMPError'] = 'The ICMP host could not be updated';
$pia_lang['ICMPMonitor_Shortcut_Online'] = 'Online';
$pia_lang['ICMPMonitor_Shortcut_Offline'] = 'Offline/Down';
$pia_lang['ICMPMonitor_Availability'] = 'Availability';

//////////////////////////////////////////////////////////////////
// Maintenance Page
//////////////////////////////////////////////////////////////////

$pia_lang['Maintenance_Title'] = 'Settings and Maintenance';
$pia_lang['Maintenance_database_path'] = 'Database-Path';
$pia_lang['Maintenance_database_size'] = 'Database-Size';
$pia_lang['Maintenance_database_lastmod'] = 'last Modification';
$pia_lang['Maintenance_database_backup'] = 'DB Backups';
$pia_lang['Maintenance_config_backup'] = 'Config Backups';
$pia_lang['Maintenance_database_backup_found'] = 'backups were found';
$pia_lang['Maintenance_database_backup_total'] = 'total disk usage';
$pia_lang['Maintenance_arp_status'] = 'Scan Status';
$pia_lang['Maintenance_arp_status_off'] = 'is currently disabled';
$pia_lang['Maintenance_arp_status_on'] = 'scan(s) currently running';
$pia_lang['Maintenance_notification_config'] = 'Notifications (Devices, ICMP)';
$pia_lang['Maintenance_notification_config_webmon'] = 'Notifications (Service Mon.)';
$pia_lang['Maintenance_Tools_Logviewer_Scan'] = 'Scan';
$pia_lang['Maintenance_Tools_Logviewer_Scan_empty'] = 'It is probably currently running scan';
$pia_lang['Maintenance_Tools_Logviewer_IPLog'] = 'Internet IP';
$pia_lang['Maintenance_Tools_Logviewer_IPLog_empty'] = 'No log available';
$pia_lang['Maintenance_Tools_Logviewer_Vendor'] = 'Vendor Update';
$pia_lang['Maintenance_Tools_Logviewer_Vendor_empty'] = 'No log available';
$pia_lang['Maintenance_Tools_Logviewer_Cleanup'] = 'Cleanup';
$pia_lang['Maintenance_Tools_Logviewer_Cleanup_empty'] = 'No log available';
$pia_lang['Maintenance_Tools_Logviewer_Nmap'] = 'Nmap (Session)';
$pia_lang['Maintenance_Tools_Logviewer_Nmap_empty'] = 'No log available';
$pia_lang['Maintenance_Tools_Logviewer_WebServices'] = 'Web Services';
$pia_lang['Maintenance_Tools_Logviewer_WebServices_empty'] = 'No log available';
$pia_lang['Maintenance_Tools_Logviewer_WOL'] = 'Wake-on-LAN (Session)';
$pia_lang['Maintenance_Tools_Logviewer_WOL_empty'] = 'No log available';
$pia_lang['Maintenance_themeselector_lable'] = 'Select Skin';
$pia_lang['Maintenance_themeselector_empty'] = 'Choose a Skin';
$pia_lang['Maintenance_themeselector_apply'] = 'Apply';
$pia_lang['Maintenance_lang_selector_lable'] = 'Select Language';
$pia_lang['Maintenance_lang_selector_empty'] = 'Choose Language';
$pia_lang['Maintenance_lang_en_us'] = 'English (US)';
$pia_lang['Maintenance_lang_de_de'] = 'German (DE)';
$pia_lang['Maintenance_lang_es_es'] = 'Spanish (ES)';
$pia_lang['Maintenance_lang_fr_fr'] = 'French (FR)';
$pia_lang['Maintenance_lang_it_it'] = 'Italian (IT)';
$pia_lang['Maintenance_lang_selector_apply'] = 'Apply';
$pia_lang['Maintenance_Tools_Tab_Settings'] = 'Settings';
$pia_lang['Maintenance_Tools_Tab_Tools'] = 'Maintenance';
$pia_lang['Maintenance_Tools_Tab_BackupRestore'] = 'Backup &sol; Restore';
$pia_lang['Maintenance_Tools_Tab_Subheadline_a'] = 'General';
$pia_lang['Maintenance_Tools_Tab_Subheadline_b'] = 'Configure device overview';
$pia_lang['Maintenance_Tools_Tab_Subheadline_c'] = 'Security';
$pia_lang['Maintenance_Tools_Tab_Subheadline_d'] = 'Modules';
$pia_lang['Maintenance_Tools_Tab_Settings_Intro'] = 'The options listed here cause server-side configuration changes. These changes affect all devices that access this page.';
$pia_lang['Maintenance_Tool_darkmode'] = 'Dark Mode';
$pia_lang['Maintenance_Tool_darkmode_noti'] = 'Toggle Modes';
$pia_lang['Maintenance_Tool_darkmode_noti_text'] = 'After the theme switch, the page tries to reload itself to activate the change. If necessary, the cache must be cleared.';
$pia_lang['Maintenance_Tool_onlinehistorygraph'] = 'History Graph';
$pia_lang['Maintenance_Tool_onlinehistorygraph_noti'] = 'Graph display';
$pia_lang['Maintenance_Tool_onlinehistorygraph_noti_text'] = 'Enables/disables the graph to display the online/offline history over the last 12h.';
$pia_lang['Maintenance_Tool_webservicemon'] = 'Web Service Mon.';
$pia_lang['Maintenance_Tool_webservicemon_noti'] = 'Web Service Monitoring';
$pia_lang['Maintenance_Tool_webservicemon_noti_text'] = 'Enables or disables the web service monitoring for Pi.Alert. With activation, additional elements are displayed in the interface. With deactivation, they disappear again.';
$pia_lang['Maintenance_Tool_icmpmon'] = 'ICMP Monitoring';
$pia_lang['Maintenance_Tool_icmpmon_noti'] = 'ICMP Monitoring';
$pia_lang['Maintenance_Tool_icmpmon_noti_text'] = 'Enables or disables ICMP monitoring for Pi.Alert. Enabling this will display additional elements in the interface. Disabling it will make these elements disappear.';
$pia_lang['Maintenance_Tool_mainscan'] = 'Main Scan';
$pia_lang['Maintenance_Tool_mainscan_noti'] = 'Main Scan';
$pia_lang['Maintenance_Tool_mainscan_noti_text'] = 'Enables or disables the main scanning method for Pi.Alert (ARP scan). The collection of data from configured external sources remains active.';
$pia_lang['Maintenance_Tool_DevListCol_noti'] = 'Configure device overview';
$pia_lang['Maintenance_Tool_DevListCol_noti_text'] = 'Do you want to save the changes you have made? This change will affect all devices you use to access this page.';
$pia_lang['Maintenance_Tool_setapikey_false'] = 'No API-Key set';
$pia_lang['Maintenance_Tool_setapikey'] = 'Set API-Key';
$pia_lang['Maintenance_Tool_setapikey_text'] = 'With the API key it is possible to make queries to the database without using the web page. This can be the case if another service should access the data of this database. If an API key already exists, it will be replaced.';
$pia_lang['Maintenance_Tool_setapikey_noti'] = 'Setting API-Key';
$pia_lang['Maintenance_Tool_setapikey_noti_text'] = 'Do you want to replace an existing API key with a new key? Existing keys are then no longer usable.';
$pia_lang['Maintenance_Tool_ignorelist'] = 'Ignore list';
$pia_lang['Maintenance_Tool_ignorelist_false'] = 'No ignore list configured';
$pia_lang['Maintenance_arpscantimer_empty'] = 'Set period';
$pia_lang['Maintenance_Tool_arpscansw'] = 'Toggle Scans (on/off)';
$pia_lang['Maintenance_Tool_arpscansw_text'] = 'Switches all scans of Pi.Alert on or off. If no time period has been defined for timer activation, Pi.Alert switches on again after a pause of 10 min with the next pending scan. Scans that are already running will not be terminated.';
$pia_lang['Maintenance_Tool_arpscansw_noti'] = 'Toggle arp-Scan on or off';
$pia_lang['Maintenance_Tool_arpscansw_noti_text'] = 'When the scan has been switched off it remains off until it is activated again.';
$pia_lang['Maintenance_Tool_test_notification'] = 'Test Notifications';
$pia_lang['Maintenance_Tool_test_notification_text'] = 'Test reporting for all activated services.';
$pia_lang['Maintenance_Tool_test_notification_noti'] = 'Notifications test';
$pia_lang['Maintenance_Tool_test_notification_noti_text'] = 'Should a test notification be performed across all configured and enabled notification services?';
$pia_lang['Maintenance_Tool_del_alldev'] = 'Delete all Devices';
$pia_lang['Maintenance_Tool_del_alldev_text'] = 'All devices will be deleted from the database.';
$pia_lang['Maintenance_Tool_del_alldev_noti'] = 'Delete Devices';
$pia_lang['Maintenance_Tool_del_alldev_noti_text'] = 'Are you sure you want to delete all devices?';
$pia_lang['Maintenance_Tool_del_unknowndev'] = 'Delete (unknown) Devices';
$pia_lang['Maintenance_Tool_del_unknowndev_text'] = 'All devices named (unknown) will be deleted from the database.';
$pia_lang['Maintenance_Tool_del_unknowndev_noti'] = 'Delete (unknown) Devices';
$pia_lang['Maintenance_Tool_del_unknowndev_noti_text'] = 'Are you sure you want to delete all (unknown) devices?';
$pia_lang['Maintenance_Tool_del_allevents'] = 'Delete Events (Reset Presence)';
$pia_lang['Maintenance_Tool_del_allevents_text'] = 'All events in the database will be deleted. At that moment the presence of all devices will be reset. This can lead to invalid sessions. This means that devices are displayed as "present" although they are offline. A scan while the device in question is online solves the problem.';
$pia_lang['Maintenance_Tool_del_allevents_noti'] = 'Delete Events';
$pia_lang['Maintenance_Tool_del_allevents_noti_text'] = 'Are you sure you want to delete all Events? This resets Presence of all Devices.';
$pia_lang['Maintenance_Tool_del_Inactive_Hosts'] = 'Delete inactive devices';
$pia_lang['Maintenance_Tool_del_Inactive_Hosts_text'] = 'All devices that have been inactive for 30 days will be deleted. The events of these devices are also removed from the database.';
$pia_lang['Maintenance_Tool_backup'] = 'DB Backup';
$pia_lang['Maintenance_Tool_backup_text'] = 'The database backups are located in the database directory as a zip-archive, named with the creation date. There is no maximum number of backups.';
$pia_lang['Maintenance_Tool_backup_noti'] = 'DB Backup';
$pia_lang['Maintenance_Tool_backup_noti_text'] = 'Are you sure you want to execute the the DB Backup? Be sure that no scan is currently running.';
$pia_lang['Maintenance_Tool_restore'] = 'DB Restore';
$pia_lang['Maintenance_Tool_restore_blocked'] = 'not available';
$pia_lang['Maintenance_Tool_restore_text'] = 'The latest backup can be restored via the button, but older backups can only be restored manually. After the restore, make an integrity check on the database for safety, in case the db was currently in write access when the backup was created.';
$pia_lang['Maintenance_Tool_restore_noti'] = 'DB Restore';
$pia_lang['Maintenance_Tool_restore_noti_text'] = 'Are you sure you want to execute the the DB Restore? Be sure that no scan is currently running.';
$pia_lang['Maintenance_Tool_latestdb_download'] = 'Download latest DB Backup';
$pia_lang['Maintenance_Tool_latestconf_download'] = 'Download current pialert.conf';
$pia_lang['Maintenance_Tool_purgebackup'] = 'Purge Backups';
$pia_lang['Maintenance_Tool_purgebackup_text'] = 'All other backups will be deleted except for the last 3 backups.';
$pia_lang['Maintenance_Tool_purgebackup_noti'] = 'Purge Backups';
$pia_lang['Maintenance_Tool_purgebackup_noti_text'] = 'Are you sure you want to delete all backups except the last 3?';
$pia_lang['Maintenance_Tool_del_ActHistory'] = 'Deleting the network activity';
$pia_lang['Maintenance_Tool_del_ActHistory_text'] = 'The network activity graph is reset. This does not affect the events.';
$pia_lang['Maintenance_Tool_del_ActHistory_noti'] = 'Delete network activity';
$pia_lang['Maintenance_Tool_del_ActHistory_noti_text'] = 'Are you sure you want to reset the network activity?';
$pia_lang['Maintenance_Tool_loginenable'] = 'Enable Login';
$pia_lang['Maintenance_Tool_loginenable_text'] = 'After activation, you will automatically be taken to the login page. If you have not set a password before, "123456" is the default password.';
$pia_lang['Maintenance_Tool_loginenable_noti'] = 'Enable Login';
$pia_lang['Maintenance_Tool_loginenable_noti_text'] = 'Are you sure you want to activate the login?';
$pia_lang['Maintenance_Tool_logindisable'] = 'Disable Login';
$pia_lang['Maintenance_Tool_logindisable_text'] = 'The login will be deactivated. Every user now has the possibility to access the Pi.Alert page again.';
$pia_lang['Maintenance_Tool_logindisable_noti'] = 'Disable Login';
$pia_lang['Maintenance_Tool_logindisable_noti_text'] = 'Are you sure you want to deactivate the login?';
$pia_lang['Maintenance_ConfEditor_Start'] = 'Edit Pi.Alert Config';
$pia_lang['Maintenance_ConfEditor_Hint'] = 'Notes to the editor';
$pia_lang['Maintenance_ConfEditor_Backup'] = 'Create Backup';
$pia_lang['Maintenance_ConfEditor_Restore'] = 'Prev. Version';
$pia_lang['Maintenance_ConfEditor_Restore_noti'] = 'To previous version';
$pia_lang['Maintenance_ConfEditor_Restore_noti_text'] = 'The last version of the configuration file is restored. The "previous version" is either that of the last backup, or the version before the last save. Depending on which is more current.';
$pia_lang['Maintenance_ConfEditor_Backup_info'] = 'In addition to the "pialert-prev.bak" file, another backup is created with the current date incl. time. This backup must be restored manually if necessary (rename to "pialert.conf"). An existing "pialert-prev.bak" file is always overwritten.';
$pia_lang['Maintenance_ConfEditor_Restore_info'] = 'This function restores the configuration file from the "pialert-prev.bak" file. The file "pialert-prev.bak" is created when saving and creating a backup.';
$pia_lang['Maintenance_ConfEditor_Save_info'] = 'The content of the text field with any changes is saved to the "pialert.conf" file. The previous configuration is saved as "pialert-prev.bak". With each save the file "pialert-prev.bak" is overwritten again and again with the previous configuration file.';
$pia_lang['Maintenance_Tool_ConfBackup'] = 'Create Config Backup';
$pia_lang['Maintenance_Tool_ConfBackup_text'] = 'In addition to the file "pialert-prev.bak," another backup is created with the current date and time. This backup must be manually restored if needed (rename it to "pialert.conf").';

//////////////////////////////////////////////////////////////////

// Maintenance Page (Backend)
//////////////////////////////////////////////////////////////////

$pia_lang['BackDevices_Arpscan_disabled'] = 'Arp-Scan Disabled';
$pia_lang['BackDevices_Arpscan_enabled'] = 'Arp-Scan Enabled';
$pia_lang['BackDevices_setapikey'] = 'API-Key set';
$pia_lang['BackDevices_test_notification'] = 'Notification sent';
$pia_lang['BackDevices_darkmode_disabled'] = 'Darkmode Disabled';
$pia_lang['BackDevices_darkmode_enabled'] = 'Darkmode Enabled';
$pia_lang['BackDevices_webservicemon_disabled'] = 'Web Service Monitoring Disabled';
$pia_lang['BackDevices_webservicemon_enabled'] = 'Web Service Monitoring Enabled';
$pia_lang['BackDevices_MainScan_disabled'] = 'Main Scan is disabled';
$pia_lang['BackDevices_MainScan_enabled'] = 'Main Scan is enabled';
$pia_lang['BackDevices_onlinehistorygraph_disabled'] = 'Graph disabled.';
$pia_lang['BackDevices_onlinehistorygraph_enabled'] = 'Graph enabled.';
$pia_lang['BackDevices_Restore_CopError'] = 'The original database could not be saved.';
$pia_lang['BackDevices_Restore_okay'] = 'Restore executed successfully.';
$pia_lang['BackDevices_Restore_Failed'] = 'Restore Failed. Please restore the backup manually.';
$pia_lang['BackDevices_Backup_WALError'] = 'The original database was not copied because transactions may be open.';
$pia_lang['BackDevices_Backup_IntegrityError'] = 'The copied database has not passed the integrity check.';
$pia_lang['BackDevices_Backup_CopError'] = 'The original database could not be saved.';
$pia_lang['BackDevices_Backup_okay'] = 'The backup executed successfully with the new archive';
$pia_lang['BackDevices_Backup_Failed'] = 'The backup executed partially successfully. The archive could not be created or is empty.';
$pia_lang['BackDevices_DBTools_DelDev_a'] = 'Device deleted successfully';
$pia_lang['BackDevices_DBTools_DelDev_b'] = 'Devices deleted successfully';
$pia_lang['BackDevices_DBTools_DelEvents'] = 'Events deleted successfully';
$pia_lang['BackDevices_DBTools_DelEventsError'] = 'Error deleting Events';
$pia_lang['BackDevices_DBTools_DelDevError_a'] = 'Error deleting Device';
$pia_lang['BackDevices_DBTools_DelDevError_b'] = 'Error deleting Devices';
$pia_lang['BackDevices_DBTools_UpdDev'] = 'Device updated successfully';
$pia_lang['BackDevices_DBTools_UpdDevError'] = 'Error updating device';
$pia_lang['BackDevices_DBTools_Purge'] = 'The oldest backups were deleted';
$pia_lang['BackDevices_DBTools_DelActHistory'] = 'Network aktivity reset successful';
$pia_lang['BackDevices_DBTools_DelActHistoryError'] = 'Network aktivity reset not successful';
$pia_lang['BackDevices_DBTools_DelInactHosts'] = 'Inactive hosts have been deleted.';
$pia_lang['BackDevices_DBTools_DelInactHostsError'] = 'An error occurred when trying to delete inactive hosts.';
$pia_lang['BackDevices_Login_disabled'] = 'Login disabled.';
$pia_lang['BackDevices_Login_enabled'] = 'Login enabled.';
$pia_lang['BackDevices_Theme_set'] = 'Theme applied';
$pia_lang['BackDevices_Theme_notset'] = 'Theme not applied';
$pia_lang['BackDevices_Theme_invalid'] = 'No theme selected';
$pia_lang['BackDevices_Language_set'] = 'Language applied';
$pia_lang['BackDevices_Language_notset'] = 'Language not applied';
$pia_lang['BackDevices_Language_invalid'] = 'No language selected';
$pia_lang['BackDevices_DevListCol_noti_text'] = 'Table setting is saved.';
$pia_lang['BackDevices_ConfEditor_CopError'] = 'It is not possible to save the configuration.';
$pia_lang['BackDevices_ConfEditor_CopOkay'] = 'The configuration backup is completed.';
$pia_lang['BackDevices_ConfEditor_RestoreError'] = 'The last version of the configuration could not be restored.';
$pia_lang['BackDevices_ConfEditor_RestoreOkay'] = 'The last version of the configuration has been restored.';
$pia_lang['BackDevices_Report_Delete'] = ' Notification(s) has been deleted.';

//////////////////////////////////////////////////////////////////
// Network Page
//////////////////////////////////////////////////////////////////

$pia_lang['Network_Title'] = 'Network Overview';
$pia_lang['Network_ManageDevices'] = 'Manage Devices';
$pia_lang['Network_ManageAdd_Name'] = 'Device Name';
$pia_lang['Network_ManageAdd_Name_text'] = 'Name without special characters';
$pia_lang['Network_ManageAdd_Type'] = 'Device Type';
$pia_lang['Network_ManageAdd_Type_text'] = '-- Select Type --';
$pia_lang['Network_ManageAdd_Port'] = 'Port Count';
$pia_lang['Network_ManageAdd_Port_text'] = 'leave blank for wifi and powerline';
$pia_lang['Network_ManageAdd_Submit'] = 'Add Device';
$pia_lang['Network_ManageEdit_ID'] = 'Device to update';
$pia_lang['Network_ManageEdit_ID_text'] = '-- Select Device for editing --';
$pia_lang['Network_ManageEdit_Name'] = 'New Device Name';
$pia_lang['Network_ManageEdit_Name_text'] = 'Name without special characters';
$pia_lang['Network_ManageEdit_Type'] = 'New Device Type';
$pia_lang['Network_ManageEdit_Type_text'] = '-- Select Type --';
$pia_lang['Network_ManageEdit_Port'] = ' New Port Count';
$pia_lang['Network_ManageEdit_Port_text'] = 'leave blank for wifi and powerline';
$pia_lang['Network_ManageEdit_Downlink'] = 'manual Port-Configuration (Target-MAC,locale Port)';
$pia_lang['Network_ManageEdit_Downlink_text'] = '0a:1b:3c:4d:5e:6f,16;Target-MAC 2,Port 2;';
$pia_lang['Network_ManageEdit_Submit'] = 'Save Changes';
$pia_lang['Network_ManageDel_Name'] = 'Device to delete';
$pia_lang['Network_ManageDel_Name_text'] = '-- Select Device --';
$pia_lang['Network_ManageDel_Submit'] = 'Delete Device';
$pia_lang['Network_Table_State'] = 'State';
$pia_lang['Network_Table_Hostname'] = 'Hostname';
$pia_lang['Network_Table_IP'] = 'IP';
$pia_lang['Network_UnassignedDevices'] = 'Unassigned devices';
$pia_lang['NetworkSettings_Title'] = 'Settings - Network Overview';
//$pia_lang['Network_ManageDevices_Intro'] = 'This section is used for creating transparent/IP-less (unmanaged) devices such as hubs or switches, as well as active devices like routers, managed switches, or access points that influence the network structure. Devices already detected by Pi.Alert must be recreated here for display. Editing or deleting devices already detected by Pi.Alert is independent of the "<span class="text-maroon help_faq_code">' . $pia_lang['Navigation_Devices'] . '</span>" list and only has significance for the "<span class="text-maroon help_faq_code">' . $pia_lang['Navigation_Network'] . '</span>" page.';
$pia_lang['Network_Unmanaged_Devices'] = 'Manage Non-Scannable Devices';
//$pia_lang['Network_Unmanaged_Devices_Intro'] = 'At this location, end devices that occupy ports or connections on switches or routers but do not have network functionality themselves can be created. Devices that cannot be detected but should be displayed for an overview can also be taken into account here. The devices created here only appear on the "<span class="text-maroon help_faq_code">' . $pia_lang['Navigation_Network'] . '</span>" page.';
$pia_lang['Network_Unmanaged_Devices_Connected'] = 'Connected to';
$pia_lang['Network_Unmanaged_Devices_Connected_text'] = 'Select Device';
$pia_lang['Network_Unmanaged_Devices_Port'] = 'On Port';
$pia_lang['Network_Unmanaged_Devices_Port_text'] = 'On Port number on the selected device';

//////////////////////////////////////////////////////////////////
// Help Page
//////////////////////////////////////////////////////////////////

$pia_lang['HelpFAQ_Title'] = 'Help / FAQ';
$pia_lang['HelpFAQ_Cat_General'] = 'General';
$pia_lang['HelpFAQ_Cat_Detail'] = 'Detail View';
$pia_lang['HelpFAQ_Cat_General_100_head'] = 'The clock on the top right and the times of the events/presence are not correct (time difference).';
$pia_lang['HelpFAQ_Cat_General_100_text_a'] = 'On your PC the following time zone is set for the PHP environment:';
$pia_lang['HelpFAQ_Cat_General_100_text_b'] = 'If this is not the timezone you are in, you should change the timezone in the PHP configuration file. You can find it in this directory:';
$pia_lang['HelpFAQ_Cat_General_100_text_c'] = 'Search in this file for the entry "date.timezone", remove the leading ";" if necessary and enter the desired timezone. A list with the supported timezones can be found here (<a href="https://www.php.net/manual/en/timezones.php" target="blank">Link</a>)';
$pia_lang['HelpFAQ_Cat_General_101_head'] = 'My network seems to slow down, streaming "freezes".';
$pia_lang['HelpFAQ_Cat_General_101_text'] = 'It may well be that low-powered devices reach their performance limits with the way Pi.Alert detects new devices on the network. This is amplified even more,
											 if these devices communicate with the network via WLAN. Solutions here would be to switch to a wired connection if possible or, if the device is only to be used for a limited period of time, to use the arp scan.
											 pause the arp scan on the maintenance page.';
$pia_lang['HelpFAQ_Cat_General_102_head'] = 'I get the message that the database is read only.';
$pia_lang['HelpFAQ_Cat_General_102_text'] = 'Check in the Pi.Alert directory if the database folder (db) has been assigned the correct permissions:<br>
              								 <span class="text-maroon help_faq_code">drwxrwxr-x  2 (your username) www-data</span><br>
              								 If the permission is not correct, you can set it again with the following commands in the terminal or the console:<br>
              								 <div class="help_faq_code" style="padding-left: 10px; margin-bottom: 10px;">
              								 sudo chgrp -R www-data ~/pialert/db<br>
              								 sudo chown [Username]:www-data ~/pialert/db/pialert.db<br>
                							 chmod -R 775 ~/pialert/db
              								 </div>
              								 Another option is to reset the necessary permissions in the directory <span class="text-maroon help_faq_code">~/pialert/back</span> using <span class="text-maroon help_faq_code">pialert-cli</span>. There are several options available to you.<br><br>
											 <span class="text-maroon help_faq_code">./pialert-cli set_permissions</span><br>
											 This command only resets the group permissions, leaving the file owner unchanged.<br><br>
											 <span class="text-maroon help_faq_code">./pialert-cli set_permissions --lxc</span><br>
											 This additional option is introduced for use within an LXC container. It changes the group as per the basic functionality and sets the user "root" as the owner. This option is not relevant outside of an LXC environment.<br><br>
											 <span class="text-maroon help_faq_code">./pialert-cli set_permissions --homedir</span><br>
											 This option should be the preferred one. Here, the username is determined based on the parent home directory of the Pi.Alert installation. This username becomes the owner of the files. The group is set according to the basic functionality.';
$pia_lang['HelpFAQ_Cat_General_103_head'] = 'The login page does not appear, even after changing the password.';
$pia_lang['HelpFAQ_Cat_General_103_text'] = 'In addition to the password, the configuration file must contain <span class="text-maroon help_faq_code">~/pialert/config/pialert.conf</span>
              								 also the parameter <span class="text-maroon help_faq_code">PIALERT_WEB_PROTECTION</span> must set to <span class="text-maroon help_faq_code">True</span>.';
$pia_lang['HelpFAQ_Cat_General_104_head'] = 'Notes on migrating from pucherot to this fork.';
$pia_lang['HelpFAQ_Cat_General_104_text'] = 'The database in this fork has been extended by some fields. To take over the database from the original Pi.Alert (pucherot), an update function is available via the "pialert-cli" in the directory <span class="text-maroon help_faq_code">~/pialert/back</span>.
											 The command is then <span class="text-maroon help_faq_code">./pialert-cli update_db</span>';
$pia_lang['HelpFAQ_Cat_General_105_head'] = 'pialert-cli';
$pia_lang['HelpFAQ_Cat_General_105_text'] = 'The command line tool <span class="text-maroon help_faq_code">pialert-cli</span> is located in the directory <span class="text-maroon help_faq_code">~/pialert/back</span> and offers the possibility to make settings to Pi.Alert
                                             without web page or change to the configuration file. With the command <span class="text-maroon help_faq_code">./pialert-cli help</span> a list with the supported options can be called.
											 <table class="help_table_gen">
											    <tr><td class="help_table_gen_a">set_login</td>
											        <td class="help_table_gen_b">- Sets the parameter PIALERT_WEB_PROTECTION in the config file to TRUE<br>
											            - If the parameter is not present, it will be created. Additionally the default password "123456" is set.<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">unset_login</td>
											        <td class="help_table_gen_b">- Sets the parameter PIALERT_WEB_PROTECTION in the config file to FALSE<br>
											            - If the parameter is not present, it will be created. Additionally the default password "123456" is set.<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">set_password &lt;password&gt;</td>
											        <td class="help_table_gen_b">- Sets the new password as a hashed value.<br>
											            - If the PIALERT_WEB_PROTECTION parameter does not exist yet, it will be created and set to "TRUE" (login enabled)<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">set_autopassword</td>
											        <td class="help_table_gen_b">- Sets a new random password as a hashed value and show it plaintext in the console.<br>
											            - If the PIALERT_WEB_PROTECTION parameter does not exist yet, it will be created and set to "TRUE" (login enabled)<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">disable_scan &lt;MIN&gt;</td>
											        <td class="help_table_gen_b">- Stops all active scans.<br>
											            - Prevents new scans from starting.<br>
											            - You can set a Timeout in minutes. If no timeout is set, Pi.Alert restarts itself with the next scan after 10min.<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">enable_scan</td>
											        <td class="help_table_gen_b">- Allows the start of new scans again.<br>&nbsp;</td></tr>
												<tr><td class="help_table_gen_a">disable_mainscan</td>
												    <td class="help_table_gen_b">- Disables the main scanning method for Pi.Alert (ARP scan)</td></tr>
												<tr><td class="help_table_gen_a">enable_mainscan</td>
												    <td class="help_table_gen_b">- Enables the main scanning method for Pi.Alert (ARP scan)</td></tr>
											    <tr><td class="help_table_gen_a">enable_service_mon</td>
											        <td class="help_table_gen_b">- Enable Web Service Monitoring<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">disable_service_mon</td>
											        <td class="help_table_gen_b">- Disable Web Service Monitoring<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">enable_icmp_mon</td>
											        <td class="help_table_gen_b">- Enable ICMP Monitoring (ping)<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">disable_icmp_mon</td>
											        <td class="help_table_gen_b">- Disable ICMP Monitoring (ping)<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">update_db</td>
											        <td class="help_table_gen_b">- The script tries to make the database compatible for this fork.<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">set_apikey</td>
											        <td class="help_table_gen_b">- With the API key it is possible to make queries to the database without using the web page. If an API key already exists, it will be replaced.<br>&nbsp;</td></tr>
												<tr><td class="help_table_gen_a">set_permissions</td>
													<td class="help_table_gen_b">- Repairs the file permissions of the database for the group. If permissions need to be reset for the user as well, an additional option is required:<br>
																				<span class="text-maroon" style="display:inline-block;width:130px;">--lxc</span> sets "root" as the username<br>
																				<span class="text-maroon" style="display:inline-block;width:130px;">--custom</span> sets a custom username<br>
																				<span class="text-maroon" style="display:inline-block;width:130px;">--homedir</span> takes the username from the home directory</td></tr>
											    <tr><td class="help_table_gen_a">reporting_test</td>
											        <td class="help_table_gen_b">- Test reporting for all activated services.<br>&nbsp;</td></tr>
											    <tr><td class="help_table_gen_a">set_sudoers</td>
											        <td class="help_table_gen_b">- Create sudoer file for www-data and Pi.Alert user</td></tr>
											    <tr><td class="help_table_gen_a">unset_sudoers</td>
											        <td class="help_table_gen_b">- Delete sudoer file for www-data and Pi.Alert user</td></tr>
											</table>';
$pia_lang['HelpFAQ_Cat_General_106_head'] = 'How can I perform an integrity check on the database?';
$pia_lang['HelpFAQ_Cat_General_106_text'] = 'If you want to check the database currently in use, stop Pi.Alert for about 1 hour to prevent any writing access to the database during the check. Also, the web interface should not be open for any other write operations during the check.
											 Now, open the console in the directory <span class="text-maroon help_faq_code">~/pialert/db</span> and use the command <span class="text-maroon help_faq_code">ls</span> to list the contents of the directory. If the files
											 <span class="text-maroon help_faq_code">pialert.db-shm</span> and <span class="text-maroon help_faq_code">pialert.db-wal</span> appear in the list (with the same timestamp as the "pialert.db" file), it means that there are still database transactions open. In this case, just wait a moment, and to check, run the <span class="text-maroon help_faq_code">ls</span> command again.
											 <br><br>
											 Once these files have disappeared, the check can be performed. To do this, execute the following commands:<br>
											 <div class="help_faq_code" style="padding-left: 10px; margin-bottom: 10px;">
											    sqlite3 pialert.db "PRAGMA integrity_check"<br>
											    sqlite3 pialert.db "PRAGMA foreign_key_check"
											 </div><br>
											 In both cases, no errors should be reported. After the check, you can restart Pi.Alert.';
$pia_lang['HelpFAQ_Cat_General_107_head'] = 'pialert.conf';
$pia_lang['HelpFAQ_Cat_General_107_text'] = 'The file <span class="text-maroon help_faq_code">pialert.conf</span> is located in the directory <span class="text-maroon help_faq_code">~/pialert/config</span>.
											 In this configuration file many functions of Pi.Alert can be set according to the personal wishes. Since the possibilities are various, I would like to give a
											 short explanation to the individual points.
											 <table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">General Settings</td></tr>
											    <tr><td class="help_table_gen_a">PIALERT_PATH</td>
											        <td class="help_table_gen_b">This variable is set during installation and should not be changed.</td></tr>
											    <tr><td class="help_table_gen_a">DB_PATH</td>
											        <td class="help_table_gen_b">This variable is set during installation and should not be changed.</td></tr>
											    <tr><td class="help_table_gen_a">LOG_PATH</td>
											        <td class="help_table_gen_b">This variable is set during installation and should not be changed.</td></tr>
											    <tr><td class="help_table_gen_a">PRINT_LOG</td>
											        <td class="help_table_gen_b">If this entry is set to <span class="text-maroon help_faq_code">True</span>, additional timestamps for the individual sub-functions are added to the scan log. By default this entry is set to <span class="text-maroon help_faq_code">False</span></td></tr>
											    <tr><td class="help_table_gen_a">VENDORS_DB</td>
											        <td class="help_table_gen_b">This variable is set during installation and should not be changed.</td></tr>
											    <tr><td class="help_table_gen_a">PIALERT_APIKEY</td>
											        <td class="help_table_gen_b">With the API key it is possible to make queries to the database without using the web page. The API key is a random string that can be set via the settings or via <span class="text-maroon help_faq_code">pialert-cli</span></td></tr>
											    <tr><td class="help_table_gen_a">PIALERT_WEB_PROTECTION</td>
											        <td class="help_table_gen_b">Enables or disables the password protection of the Pi.Alert web interface.</td></tr>
											    <tr><td class="help_table_gen_a">PIALERT_WEB_PASSWORD</td>
											        <td class="help_table_gen_b">This field contains the hashed password for the web interface. The password cannot be entered here in plain text, but must be set with <span class="text-maroon help_faq_code">pialert-cli</span></td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Other Modules</td></tr>
											    <tr><td class="help_table_gen_a">SCAN_WEBSERVICES</td>
											        <td class="help_table_gen_b">Here the function for monitoring web services can be switched on (<span class="text-maroon help_faq_code">True</span>) or off (<span class="text-maroon help_faq_code">False</span>)</td></tr>
											    <tr><td class="help_table_gen_a">ICMPSCAN_ACTIVE</td>
											        <td class="help_table_gen_b">ICMP Monitoring on/off</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Special Protocol Scanning</td></tr>
											    <tr><td class="help_table_gen_a">SCAN_ROGUE_DHCP</td>
											        <td class="help_table_gen_b">Activates the search for foreign, also called "rogue", DHCP servers. This function is used to detect whether there is a foreign DHCP server in the network that could take control of IP management.</td></tr>
											    <tr><td class="help_table_gen_a">DHCP_SERVER_ADDRESS</td>
											        <td class="help_table_gen_b">The IP of the known DHCP server is stored here.</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Mail-Account Settings</td></tr>
											    <tr><td class="help_table_gen_a">SMTP_SERVER</td>
											        <td class="help_table_gen_b">Address of the e-mail server (e.g. smtp.gmail.com)</td></tr>
											    <tr><td class="help_table_gen_a">SMTP_PORT</td>
											        <td class="help_table_gen_b">The port of the SMTP server. The port may vary depending on the server configuration.</td></tr>
											    <tr><td class="help_table_gen_a">SMTP_USER</td>
											        <td class="help_table_gen_b">User name</td></tr>
											    <tr><td class="help_table_gen_a">SMTP_PASS</td>
											        <td class="help_table_gen_b">Password</td></tr>
											    <tr><td class="help_table_gen_a">SMTP_SKIP_TLS</td>
											        <td class="help_table_gen_b">If this entry is set to <span class="text-maroon help_faq_code">True</span>, transport encryption of the e-mail is enabled. If the server does not support this, the entry must be set to <span class="text-maroon help_faq_code">False</span>.</td></tr>
											    <tr><td class="help_table_gen_a">SMTP_SKIP_LOGIN</td>
											        <td class="help_table_gen_b">There are SMTP servers which do not require a login. In such a case, this value can be set to <span class="text-maroon help_faq_code">True</span>.</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">WebGUI Reporting</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_WEBGUI</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the network in the web interface.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_WEBGUI_WEBMON</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the monitored web services in the web interface.</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr>
											        <td class="help_table_gen_section" colspan="2">Mail Reporting</td>
											    </tr>
											    <tr><td class="help_table_gen_a">REPORT_MAIL</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the network via e-mail.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_MAIL_WEBMON</td>
											        <td class="help_table_gen_b">Enables/disables the notification of changes in the monitored web services by e-mail.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_FROM</td>
											        <td class="help_table_gen_b">Name or identifier of the sender.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_TO</td>
											        <td class="help_table_gen_b">E-mail address to which the notification should be sent.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_DEVICE_URL</td>
											        <td class="help_table_gen_b">URL of the Pi.Alert installation to create a clickable link in the e-mail to the detected device.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_DASHBOARD_URL</td>
											        <td class="help_table_gen_b">URL of the Pi.Alert installation, to be able to create a clickable link in the e-mail.</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr>
											        <td class="help_table_gen_section" colspan="2">Pushsafer</td>
											    </tr>
											    <tr><td class="help_table_gen_a">REPORT_PUSHSAFER</td>
											        <td class="help_table_gen_b">Enables/disables notifications about changes in the network via Pushsafer.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_PUSHSAFER_WEBMON</td>
											        <td class="help_table_gen_b">Enables/disables notifications about changes in the monitored web services via Pushsafer.</td></tr>
											    <tr><td class="help_table_gen_a">PUSHSAFER_TOKEN</td>
											        <td class="help_table_gen_b">This is the private key that can be viewed on the pushsafer page.</td></tr>
											    <tr><td class="help_table_gen_a">PUSHSAFER_DEVICE</td>
											        <td class="help_table_gen_b">The device ID to which the message will be sent. &lsquo;<span class="text-maroon help_faq_code">a</span>&rsquo; means the message will be sent to all configuring devices and will consume a corresponding number of API calls.</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Pushover</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_PUSHOVER</td>
											        <td class="help_table_gen_b">Enables/disables notifications about changes in the network via Pushover.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_PUSHOVER_WEBMON</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the monitored web services via Pushover.</td></tr>
											    <tr><td class="help_table_gen_a">PUSHOVER_TOKEN</td>
											        <td class="help_table_gen_b">Also called "APP TOKEN" or "API TOKEN". This token can be queried on the pushover page.</td></tr>
											    <tr><td class="help_table_gen_a">PUSHOVER_USER</td>
											        <td class="help_table_gen_b">Also called "USER KEY". This key is displayed right after login on the start page.</td></tr>
											</table>
											<table class="help_table_gen">
					    						<tr><td class="help_table_gen_section" colspan="2">NTFY</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_NTFY</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the network via NTFY.</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_NTFY_WEBMON</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the monitored web services via NTFY.</td></tr>
											    <tr><td class="help_table_gen_a">NTFY_HOST</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">NTFY_TOPIC</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">NTFY_USER</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">NTFY_PASSWORD</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">NTFY_PRIORITY</td>
											        <td class="help_table_gen_b">    </td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Shoutrrr</td></tr>
											    <tr><td class="help_table_gen_a">SHOUTRRR_BINARY</td>
											        <td class="help_table_gen_b">Here you have to configure which binary of shoutrrr has to be used. This depends on the hardware Pi.Alert was installed on.</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Telegram via Shoutrrr</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_TELEGRAM</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the network via Telegram</td></tr>
											    <tr><td class="help_table_gen_a">REPORT_TELEGRAM_WEBMON</td>
											        <td class="help_table_gen_b">Enables/disables the notifications about changes in the monitored web services via Telegram</td></tr>
											    <tr><td class="help_table_gen_a">TELEGRAM_BOT_TOKEN_URL</td>
											        <td class="help_table_gen_b">    </td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">DynDNS and IP</td></tr>
											    <tr><td class="help_table_gen_a">QUERY_MYIP_SERVER</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">DDNS_ACTIVE</td>
											        <td class="help_table_gen_b">Enables/disables the configured DDNS service in Pi.Alert. DDNS, also known as DynDNS, allows you to update a domain name with a regularly changing IP address. This service is offered by several service providers.</td></tr>
											    <tr><td class="help_table_gen_a">DDNS_DOMAIN</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">DDNS_USER</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">DDNS_PASSWORD</td>
											        <td class="help_table_gen_b">    </td></tr>
											    <tr><td class="help_table_gen_a">DDNS_UPDATE_URL</td>
											        <td class="help_table_gen_b">    </td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Automatic Speedtest</td></tr>
											    <tr><td class="help_table_gen_a">SPEEDTEST_TASK_ACTIVE</td>
											        <td class="help_table_gen_b"></td></tr>
											    <tr><td class="help_table_gen_a">SPEEDTEST_TASK_HOUR</td>
											        <td class="help_table_gen_b"></td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Arp-scan Options & Samples</td></tr>
											    <tr><td class="help_table_gen_a">MAC_IGNORE_LIST</td>
											        <td class="help_table_gen_b">
											            <span class="text-maroon help_faq_code">[&apos;MAC-Address 1&apos;, &apos;MAC-Address 2&apos;]</span><br>
											            This MAC address(es) (save with small letters) will be filtered out from the scan results.</td></tr>
											    <tr><td class="help_table_gen_a">SCAN_SUBNETS</td>
											        <td class="help_table_gen_b">
											        	&lsquo;<span class="text-maroon help_faq_code">--localnet</span>&rsquo;<br>
											        	Normally this option is already the correct settings. This setting is selected when Pi.Alert is installed on a device with a network card and no other networks are configured.<br><br>
											        	&lsquo;<span class="text-maroon help_faq_code">--localnet --interface=eth0</span>&rsquo;<br>
											        	This configuration is selected if Pi.Alert is installed on a system with at least 2 network cards and a configured network. However, the interface designation may differ and must be adapted to the conditions of the system.<br><br>
											        	<span class="text-maroon help_faq_code">[&apos;192.168.1.0/24 --interface=eth0&apos;,&apos;192.168.2.0/24 --interface=eth1&apos;]</span><br>
											        	The last configuration is necessary if several networks are to be monitored. For each network to be monitored, a corresponding network card must be configured. This is necessary because the "arp-scan" used is not routed, i.e. it only works within its own subnet. Each interface is entered here with the corresponding network. The interface designation must be adapted to the conditions of the system.
											        </td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">ICMP Monitoring Options</td></tr>
											    <tr><td class="help_table_gen_a">ICMP_ONLINE_TEST</td>
											        <td class="help_table_gen_b">Number of attempts to determine if a device is online (Default 1).</td></tr>
											    <tr><td class="help_table_gen_a">ICMP_GET_AVG_RTT</td>
											        <td class="help_table_gen_b">Number of "ping&apos;s" to calculate the average response time (Default 2).</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Pi-hole Configuration</td></tr>
											    <tr><td class="help_table_gen_a">PIHOLE_ACTIVE</td>
											        <td class="help_table_gen_b">This variable is set during installation.</td></tr>
											    <tr><td class="help_table_gen_a">PIHOLE_DB</td>
											        <td class="help_table_gen_b">This variable is set during installation and should not be changed.</td></tr>
											    <tr><td class="help_table_gen_a">DHCP_ACTIVE</td>
											        <td class="help_table_gen_b">This variable is set during installation.</td></tr>
											    <tr><td class="help_table_gen_a">DHCP_LEASES</td>
											        <td class="help_table_gen_b">This variable is set during installation and should not be changed.</td></tr>
											</table>
											<table class="help_table_gen">
					    						<tr><td class="help_table_gen_section" colspan="2">Fritzbox Configuration</td></tr>
											    <tr><td class="help_table_gen_a">FRITZBOX_ACTIVE</td>
											        <td class="help_table_gen_b">If a Fritzbox is used in the network, it can be used as a data source. This can be activated or deactivated at this point.</td></tr>
											    <tr><td class="help_table_gen_a">FRITZBOX_IP</td>
											        <td class="help_table_gen_b">IP address of the Fritzbox.</td></tr>
											    <tr><td class="help_table_gen_a">FRITZBOX_USER</td>
											        <td class="help_table_gen_b">User name<br>This assumes that the Fritzbox is configured for a login with username and password, instead of password only. A login with password only is not supported.</td></tr>
											    <tr><td class="help_table_gen_a">FRITZBOX_PASS</td>
											        <td class="help_table_gen_b">Password</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Mikrotik Configuration</td></tr>
											    <tr><td class="help_table_gen_a">MIKROTIK_ACTIVE</td>
											        <td class="help_table_gen_b">If a Mikrotik router is used in the network, it can be used as a data source. This can be enabled or disabled at this point.</td></tr>
											    <tr><td class="help_table_gen_a">MIKROTIK_IP</td>
											        <td class="help_table_gen_b">IP address of the Mikrotik router.</td></tr>
											    <tr><td class="help_table_gen_a">MIKROTIK_USER</td>
											        <td class="help_table_gen_b">Username</td></tr>
											    <tr><td class="help_table_gen_a">MIKROTIK_PASS</td>
											        <td class="help_table_gen_b">Password</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">UniFi Configuration</td></tr>
											    <tr><td class="help_table_gen_a">UNIFI_ACTIVE</td>
											        <td class="help_table_gen_b">If a UniFi system is used in the network, it can be used as a data source. This can be enabled or disabled at this point.</td></tr>
											    <tr><td class="help_table_gen_a">UNIFI_IP</td>
											        <td class="help_table_gen_b">IP address of the Unifi system.</td></tr>
											    <tr><td class="help_table_gen_a">UNIFI_API</td>
											        <td class="help_table_gen_b">Possible UNIFI APIs are v4, v5, unifiOS, UDMP-unifiOS</td></tr>
											    <tr><td class="help_table_gen_a">UNIFI_USER</td>
											        <td class="help_table_gen_b">Username</td></tr>
											    <tr><td class="help_table_gen_a">UNIFI_PASS</td>
											        <td class="help_table_gen_b">Password</td></tr>
											</table>
											<table class="help_table_gen">
											    <tr><td class="help_table_gen_section" colspan="2">Maintenance Tasks Cron</td></tr>
											    <tr><td class="help_table_gen_a">DAYS_TO_KEEP_ONLINEHISTORY</td>
											        <td class="help_table_gen_b">Number of days for which the online history (activity graph) is to be stored in the database. One day generates 288 such records.</td></tr>
											    <tr><td class="help_table_gen_a">DAYS_TO_KEEP_EVENTS</td>
											        <td class="help_table_gen_b">Number of days for which the events of the individual devices are to be stored.</td></tr>
											</table>';
$pia_lang['HelpFAQ_Cat_Device_200_head'] = 'I have devices in my list that I do not know about. After deleting them, they always reappear.';
$pia_lang['HelpFAQ_Cat_Device_200_text'] = 'If you use Pi-hole, please note that Pi.Alert retrieves information from Pi-hole. Pause Pi.Alert, go to the settings page in Pi-hole and
         									delete the DHCP lease if necessary. Then, also in Pi-hole, look under Tools -> Network to see if you can find the recurring hosts there.
         									If yes, delete them there as well. Now you can start Pi.Alert again. Now the device(s) should not show up anymore. Restarting the <span class="text-maroon help_faq_code">pihole-FTL</span> service may also fix the problem.
         									If such a device continues to appear repeatedly, the MAC address can be added to the ignore list <span class="text-maroon help_faq_code">MAC_IGNORE_LIST</span> in the <span class="text-maroon help_faq_code">pialert.conf</span>.';
$pia_lang['HelpFAQ_Cat_Detail_300_head'] = 'What means ';
$pia_lang['HelpFAQ_Cat_Detail_300_text_a'] = 'means a network device created from the network page.';
$pia_lang['HelpFAQ_Cat_Detail_300_text_b'] = 'designates the port number where the currently edited device is connected to this network device.';
$pia_lang['HelpFAQ_Cat_Detail_301_head_a'] = 'When is scanning now? At ';
$pia_lang['HelpFAQ_Cat_Detail_301_head_b'] = ' says 1min but the graph shows 5min intervals.';
$pia_lang['HelpFAQ_Cat_Detail_301_text'] = 'The time interval between the scans is defined by the "Cronjob", which is set to 5min by default. The designation "1min" refers to the expected duration of the scan.
        									Depending on the network configuration, this time may vary. To edit the cronjob, you can use the following command in the terminal/console <span class="text-maroon help_faq_code">crontab -e</span>
        									and change the interval.';
$pia_lang['HelpFAQ_Cat_Detail_302_head_a'] = 'What means ';
$pia_lang['HelpFAQ_Cat_Detail_302_head_b'] = 'and why can\'t I select that?';
$pia_lang['HelpFAQ_Cat_Detail_302_text'] = 'Some modern devices generate random MAC addresses for privacy reasons, which can no longer be associated with any manufacturer and which change again with each new connection.
        									Pi.Alert detects if it is such a random MAC address and activates this "field" automatically. To disable this behavior you have to look in your device how to disable
        									MAC address randomization.';
$pia_lang['HelpFAQ_Cat_Detail_303_head'] = 'What is Nmap and what is it for?';
$pia_lang['HelpFAQ_Cat_Detail_303_text'] = 'Nmap is a network scanner with multiple capabilities.<br>
        									When a new device appears in your list, you have the possibility to get more detailed information about the device via the Nmap scan.';
$pia_lang['HelpFAQ_Cat_Presence_400_head'] = 'Devices are displayed with a yellow marker and the note "missing event".';
$pia_lang['HelpFAQ_Cat_Presence_400_text'] = 'If this happens, you have the option to delete the events on the device in question (details view). Another possibility would be to switch on the device and wait until Pi.Alert detects the device as "online" with the next
        									  scan and then simply turn the device off again. Now Pi.Alert should properly note the state of the device in the database with the next scan.';
$pia_lang['HelpFAQ_Cat_Presence_401_head'] = 'A device is displayed as present although it is "Offline".';
$pia_lang['HelpFAQ_Cat_Presence_401_text'] = 'If this happens, you have the possibility to delete the events for the device in question (details view). Another possibility would be to switch on the device and wait until Pi.Alert recognizes the device as "online" with the next scan
											  and then simply switch the device off again. Now Pi.Alert should properly note the state of the device in the database with the next scan.';
$pia_lang['HelpFAQ_Cat_Network_600_head'] = 'What is this page for?';
$pia_lang['HelpFAQ_Cat_Network_600_text'] = 'This page should offer you the possibility to map the assignment of your network devices. For this purpose, you can create one or more switches, WLANs, routers, etc., provide them with a port number if necessary and assign already detected
											 devices to them. This assignment is done in the detailed view of the device to be assigned. So it is possible for you to quickly determine to which port a host is connected and if it is online. It is possible to assign a device to multiple
											 ports (port bundling), as well as multiple devices to one port (virtual machines).';
$pia_lang['HelpFAQ_Cat_Network_601_head'] = 'How does the network page work?';
$pia_lang['HelpFAQ_Cat_Network_601_text'] = 'On the network side, for example, a switch is created. For this purpose, I already offer corresponding devices in the selection list. You continue to specify the type and the number of ports.<br><br>
											 On the detail view you have now, with each recognized device, the possibility to save this just created switch and the occupied port.<br><br>
											 Now the network page shows you the switch with its ports and the devices connected to it. For each device in the detail view, you have the option of assigning multiple ports to a switch, which you separate with a comma (e.g. for link aggregation). It is also possible to assign several devices to one port (e.g. a server with several virtual machines).<br><br>
											 You can also assign a switch to a router if you have created it on the network side. Normally, this switch will now be displayed on the router tab. What does not happen is that the router is displayed on the switch port. For this it is necessary and possible to save a manual port configuration. To do this, open the "Administration" and select the switch in the editing. After you have entered the type and the number of ports again, you have a selection list of possible devices in the lowest field. After the selection, only the MAC address is visible, followed by a ",". Now simply add the port of the router on the switch and save. It is also possible to enter multiple MAC addresses and ports. It is important to follow the syntax "MAC1,PortA;MAC2,PortB;MAC3,PortC".';
$pia_lang['HelpFAQ_Cat_Network_602_head'] = 'A switch or router is shown to me without ports.';
$pia_lang['HelpFAQ_Cat_Network_602_text'] = 'It is possible that the number of ports was not entered when the device was created on the network page. When editing the device on the network page, it is also necessary to enter an already entered number of ports again.<br>
											 If the number of ports is missing for a device that has already been created, the problem should be solved by editing the device and specifying the ports, the type and, if necessary, the manual port configuration.';
$pia_lang['HelpFAQ_Cat_Service_700_head'] = 'What do the different colors in the colored bar mean?';
$pia_lang['HelpFAQ_Cat_Service_700_text'] = 'There are 5 different color codes in total: <br>
											 <span style="background-color:lightgray;">&nbsp;&nbsp;&nbsp;</span> - no scan available yet<br>
											 <span class="bg-green">&nbsp;&nbsp;&nbsp;</span> - HTTP status code 2xx<br>
											 <span class="bg-yellow">&nbsp;&nbsp;&nbsp;</span> - HTTP status code 3xx-4xx<br>
											 <span class="bg-orange-custom">&nbsp;&nbsp;&nbsp;</span> - HTTP status code 5xx<br>
											 <span class="bg-red">&nbsp;&nbsp;&nbsp;</span> - offline';
$pia_lang['HelpFAQ_Cat_Service_701_head'] = 'What are the HTTP status codes?';
// from json
$pia_lang['HelpFAQ_Cat_Service_702_head'] = 'What changes are reported?';
$pia_lang['HelpFAQ_Cat_Service_702_text'] = 'Detectable events are:<br>
												<ul>
													<li>Changing the HTTP status code</li>
													<li>Change IP</li>
													<li>Response time of the server or the missing of the response.</li>
												</ul>
											 Depending on the choice of notification, either everything is reported, or only the absence of a server response.';
$pia_lang['HelpFAQ_Cat_Service_703_head'] = 'General information about "Web Service Monitoring".';
$pia_lang['HelpFAQ_Cat_Service_703_text'] = 'The monitoring is based exclusively on the responses of HTTP requests sent to the page. Depending on the state of the server, meaningful error patterns can be detected here. If the server does not respond at all, this is considered as "Down/Offline". These web server requests are performed every 10 min as part of the normal scan.';
$pia_lang['HelpFAQ_Cat_ServiceDetails_750_head'] = 'I cannot edit all the fields.';
$pia_lang['HelpFAQ_Cat_ServiceDetails_750_text'] = 'Not every field that is displayed on this page can be edited. Editable fields are:
													<ul>
														<li>' . $pia_lang['WebServices_label_Tags'] . '</li>
														<li>' . $pia_lang['WebServices_label_MAC'] . ' (possibly a device to which this web service is assigned)<br>
															A MAC address is expected here. If something else (e.g. "laptop") is entered here, "' . $pia_lang['WebServices_unknown_Device'] . ' (laptop)" appears in the overview..
															Services without this entry are listed under "' . $pia_lang['WebServices_BoxTitle_General'] . '".</li>
														<li>CheckBox: ' . $pia_lang['WebServices_Events_all'] . '</li>
														<li>CheckBox: ' . $pia_lang['WebServices_Events_down'] . '</li>
													</ul>';

//////////////////////////////////////////////////////////////////
// Reports Page
//////////////////////////////////////////////////////////////////

$pia_lang['Reports_Title'] = 'Notifications';
$pia_lang['Reports_delete_all'] = 'Delete all notifications';
$pia_lang['Reports_delete_all_noti'] = 'Delete all notifications';
$pia_lang['Reports_delete_all_noti_text'] = 'All notifications are deleted. The counter is being reset with this.';
$pia_lang['Reports_Rogue_hint'] = 'A new message about an unknown DHCP server will only be displayed after this message has been deleted.';

//////////////////////////////////////////////////////////////////
// UpdateCheck
//////////////////////////////////////////////////////////////////

$pia_lang['Maintenance_Tools_Updatecheck'] = 'Check for Updates';
$pia_lang['Maintenance_Github_package_a'] = 'Latest Version: ';
$pia_lang['Maintenance_Github_package_b'] = 'o\'clock';
$pia_lang['Updatecheck_Title'] = 'Update Check';
$pia_lang['Updatecheck_cur'] = 'Currently used Pi.Alert Version';
$pia_lang['Updatecheck_new'] = 'Latest Pi.Alert Version on Github';
$pia_lang['GeoLiteDB_Title'] = 'GeoLite2 DB Check';
$pia_lang['GeoLiteDB_cur'] = 'GeoLite2 DB loaded on';
$pia_lang['GeoLiteDB_new'] = 'Latest GeoLite2 DB on Github';
$pia_lang['Updatecheck_RN'] = 'Pi.Alert Update Notes';
$pia_lang['Updatecheck_RN2'] = 'Pi.Alert Update Check';
$pia_lang['Updatecheck_U2D'] = 'You are already using the latest version';
$pia_lang['GeoLiteDB_button_del'] = 'Delete GeoLite2 Database';
$pia_lang['GeoLiteDB_button_ins'] = 'Install GeoLite2 Database';
$pia_lang['GeoLiteDB_button_upd'] = 'Update GeoLite2 Database';
$pia_lang['GeoLiteDB_credits'] = 'The database is downloaded from <a href="https://github.com/P3TERX/GeoLite.mmdb" target="_blank">github.com/P3TERX/GeoLite.mmdb</a>. The GeoLite2 database is a product of <a href="https://dev.maxmind.com/geoip/geolite2-free-geolocation-data" target="_blank">MaxMind</a>.';
$pia_lang['GeoLiteDB_Installnotes'] = 'You can install the database via the ' . $pia_lang['WebServices_Tab_Graph'] . ' tab on the details page of any web service.';
$pia_lang['GeoLiteDB_absent'] = 'DB not installed';

//////////////////////////////////////////////////////////////////
// System Info Page
//////////////////////////////////////////////////////////////////

$pia_lang['SysInfo_storage_note'] = 'It is possible that the memory usage cannot be determined for all drives listed above. This depends on the user under which the drives are mounted.';

//////////////////////////////////////////////////////////////////
// Speedtest
//////////////////////////////////////////////////////////////////

$pia_lang['ookla_postinstall_note'] = 'Before you can use the Ookla Speedtest client, you need to execute the command "sudo ./speedtest" once in the directory "$HOME/pialert/back/speedtest/." The Speedtest button will be enabled after reloading the page, but it will only work after accepting the Ookla license.';
$pia_lang['ookla_devdetails_tab_title'] = 'Speedtest History';
$pia_lang['ookla_devdetails_required'] = 'The history of Speedtest results is currently supported only with the official Speedtest by Ookla (<a href="https://www.speedtest.net/apps/cli" target="blank">speedtest.net</a>).';
$pia_lang['ookla_devdetails_tab_headline'] = 'Speedtest History';
$pia_lang['ookla_devdetails_table_time'] = 'Date';
$pia_lang['ookla_devdetails_table_isp'] = 'ISP';
$pia_lang['ookla_devdetails_table_server'] = 'Server';
$pia_lang['ookla_devdetails_table_ping'] = 'Ping';
$pia_lang['ookla_devdetails_table_down'] = 'Download';
$pia_lang['ookla_devdetails_table_up'] = 'Upload';

// =============================================================================================================

$pia_journ_lang['Journal_TableHead_Class'] = 'Method';
$pia_journ_lang['Journal_TableHead_Trigger'] = 'Trigger';

$pia_journ_lang['Title'] = 'Application Journal';
$pia_journ_lang['File_hash'] = 'pialert.conf - Hash';
// Frontend
$pia_journ_lang['a_000'] = 'Configuration File';
$pia_journ_lang['a_001'] = 'GUI Access';
$pia_journ_lang['a_002'] = 'Pi.Alert Scans';
$pia_journ_lang['a_005'] = 'GUI Configuration';
$pia_journ_lang['a_010'] = 'DB Maintenance';
$pia_journ_lang['a_020'] = 'Devices';
$pia_journ_lang['a_021'] = 'Multi-Editor';
$pia_journ_lang['a_025'] = 'Tools';
$pia_journ_lang['a_030'] = 'Web Service Monitoring';
$pia_journ_lang['a_031'] = 'ICMP Monitoring';
$pia_journ_lang['a_032'] = 'Main Scan';
$pia_journ_lang['a_040'] = 'Network Overview';
$pia_journ_lang['a_050'] = 'Reports';
$pia_journ_lang['a_060'] = 'Update Check';
$pia_journ_lang['a_070'] = 'API';
// pialert-cli
$pia_journ_lang['b_002'] = $pia_journ_lang['a_002'];
$pia_journ_lang['b_010'] = 'DB Maintenance';
$pia_journ_lang['b_030'] = $pia_journ_lang['a_030'];
$pia_journ_lang['b_031'] = $pia_journ_lang['a_031'];
$pia_journ_lang['b_032'] = $pia_journ_lang['a_032'];
// cronjob
$pia_journ_lang['c_002'] = $pia_journ_lang['a_002'];
$pia_journ_lang['c_010'] = $pia_journ_lang['a_010'];
// Log Strings
$pia_journ_lang['LogStr_0001'] = 'Entry added';
$pia_journ_lang['LogStr_0002'] = 'Entry edited';
$pia_journ_lang['LogStr_0003'] = 'Entry deleted';
$pia_journ_lang['LogStr_0004'] = 'Entry edited (with error)';
$pia_journ_lang['LogStr_0005'] = 'Entry deleted (with error)';
$pia_journ_lang['LogStr_0006'] = 'Last configuration file change reverted';
$pia_journ_lang['LogStr_0007'] = 'Configuration backup created';
$pia_journ_lang['LogStr_0008'] = 'GeoLite2 database installed';
$pia_journ_lang['LogStr_0009'] = 'GeoLite2 database deleted';
$pia_journ_lang['LogStr_0010'] = 'Database updated';
$pia_journ_lang['LogStr_0011'] = 'Database backup created';
$pia_journ_lang['LogStr_0012'] = 'Database backup restored';
$pia_journ_lang['LogStr_0013'] = 'Cleaned up backups (configuration file and database)';
$pia_journ_lang['LogStr_0014'] = 'Delete inactive hosts (with error)';
$pia_journ_lang['LogStr_0015'] = 'Delete inactive hosts';
$pia_journ_lang['LogStr_0016'] = 'Delete all hosts without MAC address';
$pia_journ_lang['LogStr_0017'] = 'Delete all hosts without MAC address (with error)';
$pia_journ_lang['LogStr_0018'] = 'Delete all (unknown) hosts';
$pia_journ_lang['LogStr_0019'] = 'Delete all (unknown) hosts (with error)';
$pia_journ_lang['LogStr_0020'] = 'Delete all events of a device';
$pia_journ_lang['LogStr_0021'] = 'Delete all events of a device (with error)';
$pia_journ_lang['LogStr_0022'] = 'Delete all hosts from the device list';
$pia_journ_lang['LogStr_0023'] = 'Delete all hosts from the device list (with error)';
$pia_journ_lang['LogStr_0024'] = 'Delete all events';
$pia_journ_lang['LogStr_0025'] = 'Delete all events (with error)';
$pia_journ_lang['LogStr_0026'] = 'Reset network activity';
$pia_journ_lang['LogStr_0027'] = 'Reset network activity (with error)';
$pia_journ_lang['LogStr_0030'] = 'Added active network component (Switch, Router, etc.)';
$pia_journ_lang['LogStr_0031'] = 'Edited active network component (Switch, Router, etc.)';
$pia_journ_lang['LogStr_0032'] = 'Deleted active network component (Switch, Router, etc.)';
$pia_journ_lang['LogStr_0033'] = 'Added non-scannable device (Hubs, PoE devices, Docker, etc.)';
$pia_journ_lang['LogStr_0034'] = 'Edited non-scannable device (Hubs, PoE devices, Docker, etc.)';
$pia_journ_lang['LogStr_0035'] = 'Deleted non-scannable device (Hubs, PoE devices, Docker, etc.)';
$pia_journ_lang['LogStr_0050'] = 'Enabled Pi.Alert password protection';
$pia_journ_lang['LogStr_0051'] = 'Disabled Pi.Alert password protection';
$pia_journ_lang['LogStr_0052'] = 'Changed device list column configuration';
$pia_journ_lang['LogStr_0053'] = 'Changed theme';
$pia_journ_lang['LogStr_0054'] = 'Changed language';
$pia_journ_lang['LogStr_0055'] = $pia_lang['BackDevices_darkmode_disabled'];
$pia_journ_lang['LogStr_0056'] = $pia_lang['BackDevices_darkmode_enabled'];
$pia_journ_lang['LogStr_0057'] = $pia_lang['BackDevices_onlinehistorygraph_disabled'];
$pia_journ_lang['LogStr_0058'] = $pia_lang['BackDevices_onlinehistorygraph_enabled'];
$pia_journ_lang['LogStr_0061'] = 'Pi.Alert update available';
$pia_journ_lang['LogStr_0062'] = 'No Pi.Alert update available';
$pia_journ_lang['LogStr_0063'] = 'GeoLite2 DB update available';
$pia_journ_lang['LogStr_0064'] = 'No GeoLite2 DB update available';
$pia_journ_lang['LogStr_0065'] = 'GeoLite2 DB not installed';
$pia_journ_lang['LogStr_0101'] = 'Database cleaned and optimized';
$pia_journ_lang['LogStr_0210'] = 'Performed individual nmap scan';
$pia_journ_lang['LogStr_0251'] = 'Wake-on-lan executed';
$pia_journ_lang['LogStr_0255'] = 'Online Speedtest executed';
$pia_journ_lang['LogStr_0301'] = $pia_lang['BackDevices_webservicemon_enabled'];
$pia_journ_lang['LogStr_0302'] = $pia_lang['BackDevices_webservicemon_disabled'];
$pia_journ_lang['LogStr_0500'] = 'Test notification(s) sent';
$pia_journ_lang['LogStr_0503'] = 'Report deleted';
$pia_journ_lang['LogStr_0504'] = 'Delete all reports';
$pia_journ_lang['LogStr_0510'] = 'Pi.Alert reactivated';
$pia_journ_lang['LogStr_0511'] = 'Pi.Alert deactivated (with time specification)';
$pia_journ_lang['LogStr_0512'] = 'Pi.Alert deactivated (for 10 minutes)';
$pia_journ_lang['LogStr_0700'] = 'Set API key';
$pia_journ_lang['LogStr_9001'] = 'Access to the web interface started';
$pia_journ_lang['LogStr_9002'] = 'Logout performed';
$pia_journ_lang['LogStr_9003'] = 'Login error (incorrect password!)';
$pia_journ_lang['LogStr_9004'] = 'Access to the web interface started (with cookie)';
$pia_journ_lang['LogStr_9991'] = $pia_lang['BackDevices_MainScan_enabled'];
$pia_journ_lang['LogStr_9992'] = $pia_lang['BackDevices_MainScan_disabled'];
$pia_journ_lang['LogStr_9999'] = 'Configuration file edited';

?>
