<?php

/**
 * @Project NUKEVIET 4.x
 * @This product includes GeoLite2 data created by MaxMind, available from http://www.maxmind.com
 * @Createdate Wed, 18 Apr 2018 03:28:19 GMT
 */

$ranges = array('2603::/20'=>'US','2603:1000::/28'=>'US','2603:1010::/39'=>'AU','2603:1010:200::/40'=>'AU','2603:1010:300::/40'=>'US','2603:1010:400::/38'=>'US','2603:1010:800::/37'=>'US','2603:1010:1000::/36'=>'US','2603:1010:2000::/35'=>'US','2603:1010:4000::/34'=>'US','2603:1010:8000::/33'=>'US','2603:1011::/32'=>'US','2603:1012::/31'=>'US','2603:1014::/31'=>'US','2603:1016::/44'=>'AU','2603:1016:10::/44'=>'US','2603:1016:20::/45'=>'AU','2603:1016:28::/47'=>'AU','2603:1016:2a::/47'=>'US','2603:1016:2c::/46'=>'US','2603:1016:30::/44'=>'US','2603:1016:40::/42'=>'US','2603:1016:80::/41'=>'US','2603:1016:100::/40'=>'US','2603:1016:200::/48'=>'AU','2603:1016:201::/58'=>'AU','2603:1016:201:40::/58'=>'US','2603:1016:201:80::/57'=>'US','2603:1016:201:100::/56'=>'US','2603:1016:201:200::/55'=>'US','2603:1016:201:400::/54'=>'US','2603:1016:201:800::/53'=>'US','2603:1016:201:1000::/52'=>'US','2603:1016:201:2000::/51'=>'US','2603:1016:201:4000::/50'=>'US','2603:1016:201:8000::/49'=>'US','2603:1016:202::/47'=>'US','2603:1016:204::/46'=>'US','2603:1016:208::/45'=>'US','2603:1016:210::/44'=>'US','2603:1016:220::/45'=>'US','2603:1016:228::/48'=>'AU','2603:1016:229::/48'=>'US','2603:1016:22a::/47'=>'US','2603:1016:22c::/46'=>'US','2603:1016:230::/44'=>'US','2603:1016:240::/42'=>'US','2603:1016:280::/41'=>'US','2603:1016:300::/40'=>'US','2603:1016:400::/48'=>'US','2603:1016:401::/48'=>'AU','2603:1016:402::/48'=>'AU','2603:1016:403::/48'=>'US','2603:1016:404::/46'=>'US','2603:1016:408::/45'=>'US','2603:1016:410::/44'=>'US','2603:1016:420::/43'=>'US','2603:1016:440::/42'=>'US','2603:1016:480::/41'=>'US','2603:1016:500::/40'=>'US','2603:1016:600::/39'=>'US','2603:1016:800::/37'=>'US','2603:1016:1000::/39'=>'AU','2603:1016:1200::/40'=>'US','2603:1016:1300::/40'=>'AU','2603:1016:1400::/38'=>'US','2603:1016:1800::/37'=>'US','2603:1016:2000::/35'=>'US','2603:1016:4000::/34'=>'US','2603:1016:8000::/33'=>'US','2603:1017::/32'=>'US','2603:1018::/32'=>'US','2603:1019::/40'=>'AU','2603:1019:100::/48'=>'AU','2603:1019:101::/48'=>'US','2603:1019:102::/47'=>'US','2603:1019:104::/46'=>'US','2603:1019:108::/45'=>'US','2603:1019:110::/44'=>'US','2603:1019:120::/43'=>'US','2603:1019:140::/42'=>'US','2603:1019:180::/41'=>'US','2603:1019:200::/40'=>'AU','2603:1019:300::/40'=>'US','2603:1019:400::/38'=>'US','2603:1019:800::/37'=>'US','2603:1019:1000::/36'=>'US','2603:1019:2000::/35'=>'US','2603:1019:4000::/34'=>'US','2603:1019:8000::/33'=>'US','2603:101a::/31'=>'US','2603:101c::/30'=>'US','2603:1020::/40'=>'IE','2603:1020:100::/40'=>'AT','2603:1020:200::/40'=>'NL','2603:1020:300::/40'=>'GB','2603:1020:400::/40'=>'GB','2603:1020:500::/40'=>'FI','2603:1020:600::/39'=>'GB','2603:1020:800::/39'=>'FR','2603:1020:a00::/39'=>'US','2603:1020:c00::/38'=>'US','2603:1020:1000::/36'=>'US','2603:1020:2000::/35'=>'US','2603:1020:4000::/34'=>'US','2603:1020:8000::/33'=>'US','2603:1021::/32'=>'US','2603:1022::/31'=>'US','2603:1024::/40'=>'IE','2603:1024:100::/40'=>'US','2603:1024:200::/39'=>'US','2603:1024:400::/38'=>'US','2603:1024:800::/37'=>'US','2603:1024:1000::/36'=>'US','2603:1024:2000::/35'=>'US','2603:1024:4000::/34'=>'US','2603:1024:8000::/33'=>'US','2603:1025::/32'=>'US','2603:1026::/47'=>'IE','2603:1026:2::/48'=>'IE','2603:1026:3::/48'=>'FI','2603:1026:4::/47'=>'IE','2603:1026:6::/48'=>'IE','2603:1026:7::/48'=>'FI','2603:1026:8::/48'=>'IE','2603:1026:9::/48'=>'US','2603:1026:a::/47'=>'US','2603:1026:c::/46'=>'US','2603:1026:10::/44'=>'US','2603:1026:20::/47'=>'IE','2603:1026:22::/48'=>'IE','2603:1026:23::/48'=>'FI','2603:1026:24::/47'=>'IE','2603:1026:26::/47'=>'US','2603:1026:28::/47'=>'IE','2603:1026:2a::/48'=>'IE','2603:1026:2b::/48'=>'FI','2603:1026:2c::/47'=>'IE','2603:1026:2e::/48'=>'US','2603:1026:2f::/48'=>'FI','2603:1026:30::/44'=>'US','2603:1026:40::/42'=>'US','2603:1026:80::/41'=>'US','2603:1026:100::/44'=>'FR','2603:1026:110::/44'=>'US','2603:1026:120::/44'=>'FR','2603:1026:130::/44'=>'US','2603:1026:140::/42'=>'US','2603:1026:180::/41'=>'US','2603:1026:200::/40'=>'NL','2603:1026:300::/40'=>'AT','2603:1026:400::/39'=>'GB','2603:1026:600::/40'=>'GB','2603:1026:700::/44'=>'FR','2603:1026:710::/44'=>'US','2603:1026:720::/44'=>'FR','2603:1026:730::/44'=>'US','2603:1026:740::/42'=>'US','2603:1026:780::/41'=>'US','2603:1026:800::/40'=>'GB','2603:1026:900::/40'=>'US','2603:1026:a00::/39'=>'US','2603:1026:c00::/48'=>'US','2603:1026:c01::/48'=>'AT','2603:1026:c02::/48'=>'IE','2603:1026:c03::/48'=>'NL','2603:1026:c04::/48'=>'FI','2603:1026:c05::/48'=>'GB','2603:1026:c06::/47'=>'GB','2603:1026:c08::/48'=>'GB','2603:1026:c09::/48'=>'FR','2603:1026:c0a::/48'=>'FR','2603:1026:c0b::/48'=>'US','2603:1026:c0c::/46'=>'US','2603:1026:c10::/44'=>'US','2603:1026:c20::/43'=>'US','2603:1026:c40::/42'=>'US','2603:1026:c80::/41'=>'US','2603:1026:d00::/40'=>'US','2603:1026:e00::/39'=>'US','2603:1026:1000::/40'=>'IE','2603:1026:1100::/40'=>'FR','2603:1026:1200::/40'=>'FR','2603:1026:1300::/40'=>'NL','2603:1026:1400::/38'=>'US','2603:1026:1800::/37'=>'US','2603:1026:2000::/35'=>'US','2603:1026:4000::/34'=>'US','2603:1026:8000::/33'=>'US','2603:1027::/63'=>'US','2603:1027:0:2::/63'=>'NL','2603:1027:0:4::/64'=>'IE','2603:1027:0:5::/64'=>'US','2603:1027:0:6::/64'=>'NL','2603:1027:0:7::/64'=>'IE','2603:1027:0:8::/64'=>'IE','2603:1027:0:9::/64'=>'NL','2603:1027:0:a::/63'=>'NL','2603:1027:0:c::/64'=>'IE','2603:1027:0:d::/64'=>'US','2603:1027:0:e::/63'=>'US','2603:1027:0:10::/60'=>'US','2603:1027:0:20::/59'=>'US','2603:1027:0:40::/63'=>'US','2603:1027:0:42::/64'=>'US','2603:1027:0:43::/64'=>'NL','2603:1027:0:44::/64'=>'IE','2603:1027:0:45::/64'=>'US','2603:1027:0:46::/64'=>'NL','2603:1027:0:47::/64'=>'IE','2603:1027:0:48::/61'=>'US','2603:1027:0:50::/60'=>'US','2603:1027:0:60::/59'=>'US','2603:1027:0:80::/63'=>'US','2603:1027:0:82::/63'=>'NL','2603:1027:0:84::/64'=>'IE','2603:1027:0:85::/64'=>'US','2603:1027:0:86::/64'=>'NL','2603:1027:0:87::/64'=>'IE','2603:1027:0:88::/64'=>'IE','2603:1027:0:89::/64'=>'NL','2603:1027:0:8a::/63'=>'NL','2603:1027:0:8c::/64'=>'IE','2603:1027:0:8d::/64'=>'US','2603:1027:0:8e::/63'=>'US','2603:1027:0:90::/60'=>'US','2603:1027:0:a0::/59'=>'US','2603:1027:0:c0::/63'=>'US','2603:1027:0:c2::/64'=>'US','2603:1027:0:c3::/64'=>'NL','2603:1027:0:c4::/64'=>'IE','2603:1027:0:c5::/64'=>'US','2603:1027:0:c6::/64'=>'NL','2603:1027:0:c7::/64'=>'IE','2603:1027:0:c8::/61'=>'US','2603:1027:0:d0::/60'=>'US','2603:1027:0:e0::/59'=>'US','2603:1027:0:100::/56'=>'US','2603:1027:0:200::/55'=>'US','2603:1027:0:400::/54'=>'US','2603:1027:0:800::/53'=>'US','2603:1027:0:1000::/52'=>'US','2603:1027:0:2000::/51'=>'US','2603:1027:0:4000::/50'=>'US','2603:1027:0:8000::/49'=>'US','2603:1027:1::/48'=>'US','2603:1027:2::/47'=>'US','2603:1027:4::/46'=>'US','2603:1027:8::/45'=>'US','2603:1027:10::/44'=>'US','2603:1027:20::/43'=>'US','2603:1027:40::/42'=>'US','2603:1027:80::/41'=>'US','2603:1027:100::/40'=>'US','2603:1027:200::/39'=>'US','2603:1027:400::/38'=>'US','2603:1027:800::/37'=>'US','2603:1027:1000::/36'=>'US','2603:1027:2000::/35'=>'US','2603:1027:4000::/34'=>'US','2603:1027:8000::/33'=>'US','2603:1028::/32'=>'US','2603:1029::/39'=>'US','2603:1029:200::/40'=>'US','2603:1029:300::/40'=>'AT','2603:1029:400::/40'=>'IE','2603:1029:500::/40'=>'US','2603:1029:600::/46'=>'NL','2603:1029:604::/47'=>'NL','2603:1029:606::/47'=>'US','2603:1029:608::/45'=>'US','2603:1029:610::/44'=>'US','2603:1029:620::/43'=>'US','2603:1029:640::/42'=>'US','2603:1029:680::/41'=>'US','2603:1029:700::/40'=>'US','2603:1029:800::/47'=>'GB','2603:1029:802::/47'=>'US','2603:1029:804::/46'=>'US','2603:1029:808::/45'=>'US','2603:1029:810::/44'=>'US','2603:1029:820::/43'=>'US','2603:1029:840::/42'=>'US','2603:1029:880::/41'=>'US','2603:1029:900::/40'=>'US','2603:1029:a00::/40'=>'US','2603:1029:b00::/40'=>'GB','2603:1029:c00::/40'=>'GB','2603:1029:d00::/40'=>'US','2603:1029:e00::/39'=>'US','2603:1029:1000::/36'=>'US','2603:1029:2000::/35'=>'US','2603:1029:4000::/34'=>'US','2603:1029:8000::/33'=>'US','2603:102a::/31'=>'US','2603:102c::/30'=>'US','2603:1030::/39'=>'US','2603:1030:200::/45'=>'US','2603:1030:208::/46'=>'CA','2603:1030:20c::/46'=>'US','2603:1030:210::/44'=>'US','2603:1030:220::/43'=>'US','2603:1030:240::/42'=>'US','2603:1030:280::/41'=>'US','2603:1030:300::/40'=>'US','2603:1030:400::/38'=>'US','2603:1030:800::/38'=>'US','2603:1030:c00::/39'=>'US','2603:1030:e00::/40'=>'US','2603:1030:f00::/40'=>'CA','2603:1030:1000::/40'=>'CA','2603:1030:1100::/40'=>'US','2603:1030:1200::/39'=>'US','2603:1030:1400::/38'=>'US','2603:1030:1800::/37'=>'US','2603:1030:2000::/35'=>'US','2603:1030:4000::/34'=>'US','2603:1030:8000::/33'=>'US','2603:1031::/32'=>'US','2603:1032::/31'=>'US','2603:1034::/31'=>'US','2603:1036::/39'=>'US','2603:1036:200::/40'=>'US','2603:1036:300::/45'=>'US','2603:1036:308::/48'=>'US','2603:1036:309::/48'=>'CA','2603:1036:30a::/48'=>'CA','2603:1036:30b::/48'=>'US','2603:1036:30c::/46'=>'US','2603:1036:310::/44'=>'US','2603:1036:320::/43'=>'US','2603:1036:340::/42'=>'US','2603:1036:380::/41'=>'US','2603:1036:400::/38'=>'US','2603:1036:800::/39'=>'US','2603:1036:a00::/40'=>'US','2603:1036:b00::/40'=>'CA','2603:1036:c00::/40'=>'CA','2603:1036:d00::/40'=>'US','2603:1036:e00::/39'=>'US','2603:1036:1000::/36'=>'US','2603:1036:2000::/35'=>'US','2603:1036:4000::/34'=>'US','2603:1036:8000::/33'=>'US','2603:1037::/61'=>'US','2603:1037:0:8::/62'=>'US','2603:1037:0:c::/63'=>'US','2603:1037:0:e::/63'=>'CA','2603:1037:0:10::/60'=>'US','2603:1037:0:20::/59'=>'US','2603:1037:0:40::/58'=>'US','2603:1037:0:80::/61'=>'US','2603:1037:0:88::/62'=>'US','2603:1037:0:8c::/63'=>'US','2603:1037:0:8e::/63'=>'CA','2603:1037:0:90::/60'=>'US','2603:1037:0:a0::/59'=>'US','2603:1037:0:c0::/58'=>'US','2603:1037:0:100::/56'=>'US','2603:1037:0:200::/55'=>'US','2603:1037:0:400::/54'=>'US','2603:1037:0:800::/53'=>'US','2603:1037:0:1000::/52'=>'US','2603:1037:0:2000::/51'=>'US','2603:1037:0:4000::/50'=>'US','2603:1037:0:8000::/49'=>'US','2603:1037:1::/48'=>'US','2603:1037:2::/47'=>'US','2603:1037:4::/46'=>'US','2603:1037:8::/45'=>'US','2603:1037:10::/44'=>'US','2603:1037:20::/43'=>'US','2603:1037:40::/42'=>'US','2603:1037:80::/41'=>'US','2603:1037:100::/40'=>'US','2603:1037:200::/39'=>'US','2603:1037:400::/38'=>'US','2603:1037:800::/37'=>'US','2603:1037:1000::/36'=>'US','2603:1037:2000::/35'=>'US','2603:1037:4000::/34'=>'US','2603:1037:8000::/33'=>'US','2603:1038::/32'=>'US','2603:1039::/37'=>'US','2603:1039:800::/38'=>'US','2603:1039:c00::/39'=>'US','2603:1039:e00::/40'=>'CA','2603:1039:f00::/40'=>'US','2603:1039:1000::/40'=>'CA','2603:1039:1100::/40'=>'US','2603:1039:1200::/39'=>'US','2603:1039:1400::/38'=>'US','2603:1039:1800::/37'=>'US','2603:1039:2000::/35'=>'US','2603:1039:4000::/34'=>'US','2603:1039:8000::/33'=>'US','2603:103a::/31'=>'US','2603:103c::/30'=>'US','2603:1040::/40'=>'SG','2603:1040:100::/40'=>'MY','2603:1040:200::/40'=>'HK','2603:1040:300::/40'=>'US','2603:1040:400::/40'=>'JP','2603:1040:500::/40'=>'US','2603:1040:600::/40'=>'JP','2603:1040:700::/40'=>'US','2603:1040:800::/40'=>'IN','2603:1040:900::/40'=>'AE','2603:1040:a00::/40'=>'IN','2603:1040:b00::/40'=>'AE','2603:1040:c00::/40'=>'IN','2603:1040:d00::/40'=>'US','2603:1040:e00::/39'=>'KR','2603:1040:1000::/36'=>'US','2603:1040:2000::/35'=>'US','2603:1040:4000::/34'=>'US','2603:1040:8000::/33'=>'US','2603:1041::/32'=>'US','2603:1042::/31'=>'US','2603:1044::/31'=>'US','2603:1046::/40'=>'SG','2603:1046:100::/40'=>'KR','2603:1046:200::/40'=>'HK','2603:1046:300::/40'=>'KR','2603:1046:400::/40'=>'JP','2603:1046:500::/40'=>'IN','2603:1046:600::/40'=>'JP','2603:1046:700::/40'=>'IN','2603:1046:800::/48'=>'MY','2603:1046:801::/48'=>'KR','2603:1046:802::/48'=>'US','2603:1046:803::/48'=>'KR','2603:1046:804::/48'=>'MY','2603:1046:805::/48'=>'KR','2603:1046:806::/47'=>'US','2603:1046:808::/45'=>'US','2603:1046:810::/44'=>'US','2603:1046:820::/48'=>'MY','2603:1046:821::/48'=>'KR','2603:1046:822::/47'=>'US','2603:1046:824::/46'=>'US','2603:1046:828::/48'=>'MY','2603:1046:829::/48'=>'KR','2603:1046:82a::/48'=>'US','2603:1046:82b::/48'=>'KR','2603:1046:82c::/46'=>'US','2603:1046:830::/44'=>'US','2603:1046:840::/42'=>'US','2603:1046:880::/41'=>'US','2603:1046:900::/40'=>'IN','2603:1046:a00::/39'=>'US','2603:1046:c00::/63'=>'HK','2603:1046:c00:2::/63'=>'JP','2603:1046:c00:4::/62'=>'US','2603:1046:c00:8::/61'=>'US','2603:1046:c00:10::/60'=>'US','2603:1046:c00:20::/59'=>'US','2603:1046:c00:40::/58'=>'US','2603:1046:c00:80::/57'=>'US','2603:1046:c00:100::/56'=>'US','2603:1046:c00:200::/55'=>'US','2603:1046:c00:400::/54'=>'US','2603:1046:c00:800::/53'=>'US','2603:1046:c00:1000::/52'=>'US','2603:1046:c00:2000::/51'=>'US','2603:1046:c00:4000::/50'=>'US','2603:1046:c00:8000::/49'=>'US','2603:1046:c01::/48'=>'SG','2603:1046:c02::/48'=>'HK','2603:1046:c03::/48'=>'MY','2603:1046:c04::/47'=>'IN','2603:1046:c06::/48'=>'IN','2603:1046:c07::/48'=>'KR','2603:1046:c08::/48'=>'KR','2603:1046:c09::/48'=>'JP','2603:1046:c0a::/48'=>'JP','2603:1046:c0b::/48'=>'US','2603:1046:c0c::/46'=>'US','2603:1046:c10::/44'=>'US','2603:1046:c20::/43'=>'US','2603:1046:c40::/42'=>'US','2603:1046:c80::/41'=>'US','2603:1046:d00::/40'=>'US','2603:1046:e00::/39'=>'US','2603:1046:1000::/36'=>'US','2603:1046:2000::/35'=>'US','2603:1046:4000::/34'=>'US','2603:1046:8000::/33'=>'US','2603:1047::/64'=>'KR','2603:1047:0:1::/64'=>'HK','2603:1047:0:2::/63'=>'SG','2603:1047:0:4::/64'=>'US','2603:1047:0:5::/64'=>'HK','2603:1047:0:6::/64'=>'SG','2603:1047:0:7::/64'=>'KR','2603:1047:0:8::/63'=>'JP','2603:1047:0:a::/63'=>'AU','2603:1047:0:c::/63'=>'IN','2603:1047:0:e::/64'=>'HK','2603:1047:0:f::/64'=>'SG','2603:1047:0:10::/60'=>'US','2603:1047:0:20::/59'=>'US','2603:1047:0:40::/64'=>'JP','2603:1047:0:41::/64'=>'SG','2603:1047:0:42::/64'=>'JP','2603:1047:0:43::/64'=>'HK','2603:1047:0:44::/64'=>'AU','2603:1047:0:45::/64'=>'IN','2603:1047:0:46::/64'=>'US','2603:1047:0:47::/64'=>'IN','2603:1047:0:48::/63'=>'KR','2603:1047:0:4a::/63'=>'US','2603:1047:0:4c::/62'=>'US','2603:1047:0:50::/60'=>'US','2603:1047:0:60::/59'=>'US','2603:1047:0:80::/64'=>'KR','2603:1047:0:81::/64'=>'HK','2603:1047:0:82::/63'=>'SG','2603:1047:0:84::/64'=>'US','2603:1047:0:85::/64'=>'HK','2603:1047:0:86::/64'=>'SG','2603:1047:0:87::/64'=>'KR','2603:1047:0:88::/63'=>'JP','2603:1047:0:8a::/63'=>'AU','2603:1047:0:8c::/63'=>'IN','2603:1047:0:8e::/64'=>'HK','2603:1047:0:8f::/64'=>'SG','2603:1047:0:90::/64'=>'HK','2603:1047:0:91::/64'=>'SG','2603:1047:0:92::/63'=>'US','2603:1047:0:94::/62'=>'US','2603:1047:0:98::/61'=>'US','2603:1047:0:a0::/59'=>'US','2603:1047:0:c0::/64'=>'JP','2603:1047:0:c1::/64'=>'SG','2603:1047:0:c2::/64'=>'JP','2603:1047:0:c3::/64'=>'HK','2603:1047:0:c4::/64'=>'AU','2603:1047:0:c5::/64'=>'IN','2603:1047:0:c6::/64'=>'US','2603:1047:0:c7::/64'=>'IN','2603:1047:0:c8::/63'=>'KR','2603:1047:0:ca::/63'=>'US','2603:1047:0:cc::/62'=>'US','2603:1047:0:d0::/60'=>'US','2603:1047:0:e0::/59'=>'US','2603:1047:0:100::/56'=>'US','2603:1047:0:200::/55'=>'US','2603:1047:0:400::/54'=>'US','2603:1047:0:800::/53'=>'US','2603:1047:0:1000::/52'=>'US','2603:1047:0:2000::/51'=>'US','2603:1047:0:4000::/50'=>'US','2603:1047:0:8000::/49'=>'US','2603:1047:1::/48'=>'US','2603:1047:2::/47'=>'US','2603:1047:4::/46'=>'US','2603:1047:8::/45'=>'US','2603:1047:10::/44'=>'US','2603:1047:20::/43'=>'US','2603:1047:40::/42'=>'US','2603:1047:80::/41'=>'US','2603:1047:100::/40'=>'SG','2603:1047:200::/40'=>'HK','2603:1047:300::/40'=>'JP','2603:1047:400::/40'=>'JP','2603:1047:500::/40'=>'KR','2603:1047:600::/39'=>'IN','2603:1047:800::/37'=>'US','2603:1047:1000::/36'=>'US','2603:1047:2000::/35'=>'US','2603:1047:4000::/34'=>'US','2603:1047:8000::/33'=>'US','2603:1048::/32'=>'US','2603:1049::/47'=>'SG','2603:1049:2::/48'=>'SG','2603:1049:3::/48'=>'US','2603:1049:4::/46'=>'US','2603:1049:8::/45'=>'US','2603:1049:10::/44'=>'US','2603:1049:20::/43'=>'US','2603:1049:40::/42'=>'US','2603:1049:80::/41'=>'US','2603:1049:100::/40'=>'US','2603:1049:200::/47'=>'HK','2603:1049:202::/47'=>'US','2603:1049:204::/46'=>'US','2603:1049:208::/45'=>'US','2603:1049:210::/44'=>'US','2603:1049:220::/43'=>'US','2603:1049:240::/42'=>'US','2603:1049:280::/41'=>'US','2603:1049:300::/48'=>'KR','2603:1049:301::/48'=>'US','2603:1049:302::/47'=>'US','2603:1049:304::/46'=>'US','2603:1049:308::/45'=>'US','2603:1049:310::/44'=>'US','2603:1049:320::/43'=>'US','2603:1049:340::/42'=>'US','2603:1049:380::/41'=>'US','2603:1049:400::/40'=>'JP','2603:1049:500::/40'=>'US','2603:1049:600::/40'=>'JP','2603:1049:700::/40'=>'US','2603:1049:800::/38'=>'US','2603:1049:c00::/40'=>'IN','2603:1049:d00::/40'=>'US','2603:1049:e00::/40'=>'IN','2603:1049:f00::/40'=>'US','2603:1049:1000::/40'=>'IN','2603:1049:1100::/40'=>'US','2603:1049:1200::/39'=>'US','2603:1049:1400::/38'=>'US','2603:1049:1800::/37'=>'US','2603:1049:2000::/35'=>'US','2603:1049:4000::/34'=>'US','2603:1049:8000::/33'=>'US','2603:104a::/31'=>'US','2603:104c::/30'=>'US','2603:1050::/48'=>'US','2603:1050:1::/48'=>'BR','2603:1050:2::/47'=>'BR','2603:1050:4::/46'=>'US','2603:1050:8::/45'=>'US','2603:1050:10::/44'=>'US','2603:1050:20::/43'=>'US','2603:1050:40::/42'=>'US','2603:1050:80::/41'=>'US','2603:1050:100::/40'=>'BR','2603:1050:200::/44'=>'US','2603:1050:210::/44'=>'CL','2603:1050:220::/43'=>'US','2603:1050:240::/42'=>'US','2603:1050:280::/41'=>'US','2603:1050:300::/40'=>'CL','2603:1050:400::/38'=>'US','2603:1050:800::/37'=>'US','2603:1050:1000::/36'=>'US','2603:1050:2000::/35'=>'US','2603:1050:4000::/34'=>'US','2603:1050:8000::/33'=>'US','2603:1051::/32'=>'US','2603:1052::/31'=>'US','2603:1054::/31'=>'US','2603:1056::/39'=>'US','2603:1056:200::/40'=>'BR','2603:1056:300::/40'=>'US','2603:1056:400::/40'=>'BR','2603:1056:500::/40'=>'US','2603:1056:600::/40'=>'CL','2603:1056:700::/40'=>'US','2603:1056:800::/38'=>'US','2603:1056:c00::/47'=>'US','2603:1056:c02::/47'=>'BR','2603:1056:c04::/48'=>'CL','2603:1056:c05::/48'=>'US','2603:1056:c06::/47'=>'US','2603:1056:c08::/45'=>'US','2603:1056:c10::/44'=>'US','2603:1056:c20::/43'=>'US','2603:1056:c40::/42'=>'US','2603:1056:c80::/41'=>'US','2603:1056:d00::/40'=>'US','2603:1056:e00::/39'=>'US','2603:1056:1000::/36'=>'US','2603:1056:2000::/35'=>'US','2603:1056:4000::/34'=>'US','2603:1056:8000::/33'=>'US','2603:1057::/32'=>'US','2603:1058::/43'=>'CL','2603:1058:20::/43'=>'US','2603:1058:40::/42'=>'US','2603:1058:80::/41'=>'US','2603:1058:100::/40'=>'US','2603:1058:200::/39'=>'US','2603:1058:400::/38'=>'US','2603:1058:800::/37'=>'US','2603:1058:1000::/36'=>'US','2603:1058:2000::/35'=>'US','2603:1058:4000::/34'=>'US','2603:1058:8000::/33'=>'US','2603:1059::/48'=>'BR','2603:1059:1::/48'=>'CL','2603:1059:2::/47'=>'US','2603:1059:4::/46'=>'US','2603:1059:8::/45'=>'US','2603:1059:10::/44'=>'CL','2603:1059:20::/43'=>'US','2603:1059:40::/42'=>'US','2603:1059:80::/41'=>'US','2603:1059:100::/48'=>'BR','2603:1059:101::/48'=>'US','2603:1059:102::/47'=>'US','2603:1059:104::/46'=>'US','2603:1059:108::/45'=>'US','2603:1059:110::/44'=>'BR','2603:1059:120::/43'=>'US','2603:1059:140::/42'=>'US','2603:1059:180::/41'=>'US','2603:1059:200::/39'=>'US','2603:1059:400::/38'=>'US','2603:1059:800::/37'=>'US','2603:1059:1000::/36'=>'US','2603:1059:2000::/35'=>'US','2603:1059:4000::/34'=>'US','2603:1059:8000::/33'=>'US','2603:105a::/31'=>'US','2603:105c::/30'=>'US','2603:1060::/27'=>'US','2603:1080::/25'=>'US','2603:2000::/20'=>'US','2603:3000::/24'=>'US','2603:4000::/24'=>'US','2603:5000::/24'=>'US','2603:6000::/24'=>'US','2603:7000::/24'=>'US','2603:8000::/24'=>'US','2603:9000::/24'=>'US','2603:a000::/24'=>'US','2603:b000::/24'=>'US');