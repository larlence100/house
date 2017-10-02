# Host: localhost  (Version: 5.5.32)
# Date: 2017-06-23 11:24:12
# Generator: MySQL-Front 5.3  (Build 2.42)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;

#
# Source for table "jjrxt_access"
#

CREATE TABLE `jjrxt_access` (
  `role_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `node_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_access"
#

INSERT INTO `jjrxt_access` VALUES (1,92,3,NULL),(1,93,3,NULL),(1,94,3,NULL),(5,44,3,NULL),(1,95,3,NULL),(1,96,3,NULL),(1,97,3,NULL),(1,91,2,NULL),(1,54,3,NULL),(1,70,3,NULL),(1,52,2,NULL),(1,98,3,NULL),(1,99,3,NULL),(5,141,3,NULL),(5,43,2,NULL),(5,54,3,NULL),(5,70,3,NULL),(5,52,2,NULL),(5,45,3,NULL),(5,46,3,NULL),(5,47,3,NULL),(5,48,3,NULL),(5,42,3,NULL),(5,41,3,NULL),(5,49,3,NULL),(5,51,3,NULL),(5,40,2,NULL),(5,76,3,NULL),(5,56,3,NULL),(1,100,3,NULL),(1,111,3,NULL),(1,112,3,NULL),(1,113,3,NULL),(1,114,3,NULL),(1,115,3,NULL),(1,116,3,NULL),(1,117,3,NULL),(1,118,3,NULL),(1,110,3,NULL),(1,109,3,NULL),(1,101,3,NULL),(1,102,3,NULL),(1,103,3,NULL),(1,104,3,NULL),(1,105,3,NULL),(1,106,3,NULL),(1,107,3,NULL),(1,108,3,NULL),(1,119,3,NULL),(1,17,3,NULL),(1,18,3,NULL),(1,36,3,NULL),(1,190,3,NULL),(1,192,3,NULL),(1,120,3,NULL),(1,16,2,NULL),(5,57,3,NULL),(5,58,3,NULL),(5,59,3,NULL),(5,60,3,NULL),(5,61,3,NULL),(5,62,3,NULL),(5,151,3,NULL),(5,150,3,NULL),(5,55,2,NULL),(5,67,3,NULL),(5,68,3,NULL),(5,69,3,NULL),(5,71,3,NULL),(5,72,3,NULL),(5,73,3,NULL),(5,74,3,NULL),(5,66,3,NULL),(5,65,3,NULL),(5,64,3,NULL),(2,44,3,NULL),(1,46,3,NULL),(1,47,3,NULL),(1,48,3,NULL),(1,49,3,NULL),(1,50,3,NULL),(1,51,3,NULL),(1,45,3,NULL),(1,41,3,NULL),(1,42,3,NULL),(1,40,2,NULL),(1,44,3,NULL),(1,141,3,NULL),(1,43,2,NULL),(1,56,3,NULL),(1,57,3,NULL),(1,58,3,NULL),(1,59,3,NULL),(1,60,3,NULL),(1,61,3,NULL),(1,62,3,NULL),(3,141,3,NULL),(3,43,2,NULL),(3,54,3,NULL),(3,70,3,NULL),(3,52,2,NULL),(3,143,3,NULL),(3,144,3,NULL),(3,145,3,NULL),(3,146,3,NULL),(3,147,3,NULL),(3,148,3,NULL),(3,149,3,NULL),(3,142,2,NULL),(3,99,3,NULL),(3,115,3,NULL),(3,116,3,NULL),(3,104,3,NULL),(3,105,3,NULL),(3,106,3,NULL),(3,107,3,NULL),(3,118,3,NULL),(3,17,3,NULL),(3,190,3,NULL),(3,119,3,NULL),(3,16,2,NULL),(3,45,3,NULL),(3,46,3,NULL),(3,47,3,NULL),(3,48,3,NULL),(3,42,3,NULL),(3,41,3,NULL),(3,49,3,NULL),(3,50,3,NULL),(3,51,3,NULL),(3,40,2,NULL),(3,76,3,NULL),(3,56,3,NULL),(3,57,3,NULL),(3,58,3,NULL),(3,59,3,NULL),(3,60,3,NULL),(3,61,3,NULL),(3,62,3,NULL),(3,151,3,NULL),(3,150,3,NULL),(3,55,2,NULL),(3,67,3,NULL),(3,68,3,NULL),(3,69,3,NULL),(3,71,3,NULL),(3,72,3,NULL),(3,73,3,NULL),(3,74,3,NULL),(3,66,3,NULL),(3,65,3,NULL),(3,64,3,NULL),(3,75,3,NULL),(3,163,3,NULL),(3,162,3,NULL),(3,154,3,NULL),(3,155,3,NULL),(3,63,2,NULL),(3,78,3,NULL),(3,89,3,NULL),(3,90,3,NULL),(3,88,3,NULL),(3,87,3,NULL),(3,79,3,NULL),(3,80,3,NULL),(3,81,3,NULL),(3,82,3,NULL),(3,83,3,NULL),(3,84,3,NULL),(3,85,3,NULL),(3,86,3,NULL),(3,174,3,NULL),(3,173,3,NULL),(3,172,3,NULL),(3,165,3,NULL),(3,168,3,NULL),(3,169,3,NULL),(3,170,3,NULL),(3,171,3,NULL),(3,164,2,NULL),(1,76,3,NULL),(1,151,3,NULL),(1,150,3,NULL),(1,55,2,NULL),(1,68,3,NULL),(4,44,3,NULL),(4,141,3,NULL),(4,43,2,NULL),(3,201,3,NULL),(3,202,3,NULL),(1,69,3,NULL),(1,71,3,NULL),(1,72,3,NULL),(1,73,3,NULL),(1,74,3,NULL),(1,75,3,NULL),(3,203,3,NULL),(1,67,3,NULL),(1,66,3,NULL),(4,41,3,NULL),(4,51,3,NULL),(4,49,3,NULL),(4,46,3,NULL),(4,47,3,NULL),(4,48,3,NULL),(4,40,2,NULL),(4,144,3,NULL),(4,143,3,NULL),(4,145,3,NULL),(4,146,3,NULL),(4,147,3,NULL),(4,149,3,NULL),(4,148,3,NULL),(4,142,2,NULL),(4,161,3,NULL),(4,160,3,NULL),(4,159,2,NULL),(4,14,1,NULL),(1,64,3,NULL),(1,65,3,NULL),(1,163,3,NULL),(1,162,3,NULL),(1,154,3,NULL),(1,155,3,NULL),(1,63,2,NULL),(1,79,3,NULL),(1,90,3,NULL),(1,89,3,NULL),(1,88,3,NULL),(1,80,3,NULL),(1,81,3,NULL),(1,82,3,NULL),(1,83,3,NULL),(1,84,3,NULL),(1,85,3,NULL),(1,86,3,NULL),(1,87,3,NULL),(1,78,3,NULL),(1,174,3,NULL),(1,173,3,NULL),(1,172,3,NULL),(1,165,3,NULL),(1,168,3,NULL),(3,175,3,NULL),(3,176,3,NULL),(3,177,3,NULL),(3,178,3,NULL),(3,179,3,NULL),(3,180,3,NULL),(3,181,3,NULL),(1,169,3,NULL),(1,170,3,NULL),(3,166,3,NULL),(1,171,3,NULL),(1,164,2,NULL),(1,201,3,NULL),(1,202,3,NULL),(1,203,3,NULL),(1,204,3,NULL),(1,205,3,NULL),(1,206,3,NULL),(1,207,3,NULL),(1,208,3,NULL),(1,200,3,NULL),(1,199,3,NULL),(1,198,3,NULL),(1,196,2,NULL),(3,167,3,NULL),(3,182,3,NULL),(3,183,3,NULL),(3,184,3,NULL),(3,185,3,NULL),(3,186,3,NULL),(3,187,3,NULL),(3,188,3,NULL),(3,131,3,NULL),(3,132,3,NULL),(3,133,3,NULL),(3,134,3,NULL),(3,135,3,NULL),(3,136,3,NULL),(3,137,3,NULL),(3,138,3,NULL),(3,130,3,NULL),(3,129,3,NULL),(3,123,3,NULL),(3,124,3,NULL),(3,125,3,NULL),(3,126,3,NULL),(3,127,3,NULL),(1,175,3,NULL),(1,176,3,NULL),(1,177,3,NULL),(1,178,3,NULL),(1,179,3,NULL),(1,180,3,NULL),(1,181,3,NULL),(1,166,3,NULL),(1,167,3,NULL),(1,182,3,NULL),(1,183,3,NULL),(1,184,3,NULL),(1,185,3,NULL),(1,186,3,NULL),(1,187,3,NULL),(1,188,3,NULL),(1,132,3,NULL),(1,133,3,NULL),(1,134,3,NULL),(1,135,3,NULL),(1,136,3,NULL),(1,137,3,NULL),(1,138,3,NULL),(1,139,3,NULL),(1,131,3,NULL),(1,130,3,NULL),(1,123,3,NULL),(1,124,3,NULL),(1,125,3,NULL),(1,126,3,NULL),(1,127,3,NULL),(1,128,3,NULL),(1,129,3,NULL),(1,140,3,NULL),(1,156,3,NULL),(1,157,3,NULL),(1,158,3,NULL),(1,122,2,NULL),(1,143,3,NULL),(3,128,3,NULL),(1,144,3,NULL),(1,145,3,NULL),(1,146,3,NULL),(1,147,3,NULL),(1,148,3,NULL),(1,149,3,NULL),(1,142,2,NULL),(1,209,3,NULL),(1,160,3,NULL),(1,161,3,NULL),(1,159,2,NULL),(1,14,1,NULL),(2,206,3,NULL),(2,207,3,NULL),(2,208,3,NULL),(2,200,3,NULL),(2,199,3,NULL),(2,198,3,NULL),(2,196,2,NULL),(2,209,3,NULL),(2,160,3,NULL),(2,161,3,NULL),(2,159,2,NULL),(2,14,1,NULL),(3,139,3,NULL),(3,140,3,NULL),(3,156,3,NULL),(3,157,3,NULL),(3,158,3,NULL),(3,122,2,NULL),(3,209,3,NULL),(3,160,3,NULL),(3,161,3,NULL),(3,159,2,NULL),(3,14,1,NULL),(2,44,3,NULL),(3,44,3,NULL),(5,75,3,NULL),(5,163,3,NULL),(5,162,3,NULL),(5,154,3,NULL),(5,155,3,NULL),(5,63,2,NULL),(5,78,3,NULL),(5,89,3,NULL),(5,90,3,NULL),(5,88,3,NULL),(5,87,3,NULL),(5,79,3,NULL),(5,80,3,NULL),(5,81,3,NULL),(5,82,3,NULL),(5,83,3,NULL),(5,84,3,NULL),(5,85,3,NULL),(5,86,3,NULL),(5,174,3,NULL),(5,173,3,NULL),(5,172,3,NULL),(5,165,3,NULL),(5,168,3,NULL),(5,169,3,NULL),(5,170,3,NULL),(5,171,3,NULL),(5,164,2,NULL),(5,201,3,NULL),(5,202,3,NULL),(5,203,3,NULL),(5,204,3,NULL),(5,205,3,NULL),(5,206,3,NULL),(5,207,3,NULL),(5,208,3,NULL),(5,200,3,NULL),(5,199,3,NULL),(5,198,3,NULL),(5,196,2,NULL),(5,209,3,NULL),(5,160,3,NULL),(5,161,3,NULL),(5,159,2,NULL),(5,14,1,NULL),(11,14,1,NULL),(11,159,2,NULL),(11,161,3,NULL),(11,160,3,NULL),(11,209,3,NULL),(11,142,2,NULL),(11,149,3,NULL),(11,148,3,NULL),(11,147,3,NULL),(11,146,3,NULL),(11,145,3,NULL),(11,144,3,NULL),(11,143,3,NULL),(11,122,2,NULL),(11,158,3,NULL),(11,157,3,NULL),(11,156,3,NULL),(11,140,3,NULL),(11,129,3,NULL),(11,128,3,NULL),(11,127,3,NULL),(11,126,3,NULL),(11,125,3,NULL),(11,124,3,NULL),(11,123,3,NULL),(11,130,3,NULL),(11,131,3,NULL),(11,139,3,NULL),(11,138,3,NULL),(11,137,3,NULL),(11,136,3,NULL),(11,135,3,NULL),(11,134,3,NULL),(11,133,3,NULL),(11,132,3,NULL),(11,188,3,NULL),(11,187,3,NULL),(11,186,3,NULL),(11,185,3,NULL),(11,184,3,NULL),(11,183,3,NULL),(11,182,3,NULL),(11,167,3,NULL),(11,166,3,NULL),(11,181,3,NULL),(11,180,3,NULL),(11,179,3,NULL),(11,178,3,NULL),(11,177,3,NULL),(11,176,3,NULL),(11,175,3,NULL),(11,196,2,NULL),(11,198,3,NULL),(11,199,3,NULL),(11,200,3,NULL),(11,208,3,NULL),(11,207,3,NULL),(11,206,3,NULL),(11,205,3,NULL),(11,204,3,NULL),(11,203,3,NULL),(11,202,3,NULL),(11,201,3,NULL),(11,164,2,NULL),(11,171,3,NULL),(11,170,3,NULL),(11,169,3,NULL),(11,168,3,NULL),(11,165,3,NULL),(11,172,3,NULL),(11,173,3,NULL),(11,174,3,NULL),(11,78,3,NULL),(11,87,3,NULL),(11,86,3,NULL),(11,85,3,NULL),(11,84,3,NULL),(11,83,3,NULL),(11,82,3,NULL),(11,81,3,NULL),(11,80,3,NULL),(11,88,3,NULL),(11,89,3,NULL),(11,90,3,NULL),(11,79,3,NULL),(11,63,2,NULL),(11,155,3,NULL),(11,154,3,NULL),(11,162,3,NULL),(11,163,3,NULL),(11,65,3,NULL),(11,64,3,NULL),(11,66,3,NULL),(11,67,3,NULL),(11,75,3,NULL),(11,74,3,NULL),(11,73,3,NULL),(11,72,3,NULL),(11,71,3,NULL),(11,69,3,NULL),(11,68,3,NULL),(11,55,2,NULL),(11,150,3,NULL),(11,151,3,NULL),(11,76,3,NULL),(11,62,3,NULL),(11,61,3,NULL),(11,60,3,NULL),(11,59,3,NULL),(11,58,3,NULL),(11,57,3,NULL),(11,56,3,NULL),(11,43,2,NULL),(11,141,3,NULL),(11,44,3,NULL),(11,40,2,NULL),(11,42,3,NULL),(11,41,3,NULL),(11,45,3,NULL),(11,51,3,NULL),(11,50,3,NULL),(11,49,3,NULL),(11,48,3,NULL),(11,47,3,NULL),(11,46,3,NULL),(11,16,2,NULL),(11,120,3,NULL),(11,192,3,NULL),(11,190,3,NULL),(11,36,3,NULL),(11,18,3,NULL),(11,17,3,NULL),(11,119,3,NULL),(11,108,3,NULL),(11,107,3,NULL),(11,106,3,NULL),(11,105,3,NULL),(11,104,3,NULL),(11,103,3,NULL),(11,102,3,NULL),(11,101,3,NULL),(11,109,3,NULL),(11,110,3,NULL),(11,118,3,NULL),(11,117,3,NULL),(11,116,3,NULL),(11,115,3,NULL),(11,114,3,NULL),(11,113,3,NULL),(11,112,3,NULL),(11,111,3,NULL),(11,100,3,NULL),(11,99,3,NULL),(11,98,3,NULL),(11,52,2,NULL),(11,70,3,NULL),(11,54,3,NULL),(11,91,2,NULL),(11,97,3,NULL),(11,96,3,NULL),(11,95,3,NULL),(11,94,3,NULL),(11,93,3,NULL),(11,92,3,NULL);

#
# Source for table "jjrxt_bumen"
#

CREATE TABLE `jjrxt_bumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `bmming` varchar(100) DEFAULT NULL,
  `bmfuzerenid` int(11) DEFAULT NULL,
  `cjshijian` int(11) DEFAULT NULL,
  `bmdianhua` varchar(100) DEFAULT NULL,
  `bmdizhi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_bumen"
#

INSERT INTO `jjrxt_bumen` VALUES (1,10000,'总店',2,1456945383,'05543894785','淮南'),(2,10000,'北京店',7,1456945383,'0108756578','北京'),(3,10000,'天津店',11,1456945383,'0224356786','天津'),(4,10000,'山西店',15,1456945383,'03519876557','太原'),(5,10000,'上海店',19,1456945383,'0218675467','上海'),(6,10000,'江苏店',23,1456945383,'05129865456','苏州'),(7,10000,'浙江店',27,1456945383,'05717847653','杭州'),(8,10000,'安徽店',31,1456945383,'05547755854','淮南'),(9,10000,'江西店',35,1456945383,'07915437846','南昌'),(10,10000,'山东店',39,1456945383,'05329374638','青岛'),(11,10000,'湖北店',43,1456945383,'0278464384','武汉'),(12,10000,'湖南店',47,1456945383,'07319343746','长沙'),(13,10000,'广东店',51,1456945383,'07573472648','佛山'),(14,10000,'重庆店',55,1456945383,'0236738463','重庆'),(15,10000,'四川店',59,1456945383,'0284787537','成都'),(16,10000,'贵州店',63,1456945383,'08515878926','贵阳'),(17,10000,'云南店',67,1456945383,'08719758685','昆明'),(18,10000,'甘肃店',71,1456945383,'09377685478','酒泉'),(19,10000,'青海店',75,1456945383,'09718363527','西宁'),(20,10000,'河南店',79,1456945383,'03717284624','郑州'),(21,10000,'河北店',83,1456945383,'03354187485','秦皇岛'),(22,10000,'海南店',87,1456945383,'08984567547','海南');

#
# Source for table "jjrxt_chengjiao"
#

CREATE TABLE `jjrxt_chengjiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `bianhao` varchar(255) DEFAULT NULL,
  `fybianhao` int(11) DEFAULT NULL,
  `kybianhao` varchar(100) DEFAULT NULL,
  `shijian` int(11) DEFAULT NULL,
  `lurusj` int(11) DEFAULT NULL,
  `qzuid` int(11) DEFAULT NULL,
  `cjjiage` decimal(10,2) DEFAULT NULL,
  `tudizheng` varchar(255) DEFAULT NULL,
  `cqzhenghao` varchar(255) DEFAULT NULL,
  `beizhu` text,
  `leixing` int(11) DEFAULT NULL,
  `zhuangtai` smallint(6) DEFAULT NULL,
  `guohu` smallint(6) DEFAULT NULL,
  `fencheng` smallint(6) DEFAULT NULL,
  `xiaoqum` varchar(100) DEFAULT NULL,
  `yezhu` varchar(100) DEFAULT NULL,
  `kehu` varchar(100) DEFAULT NULL,
  `mianji` decimal(10,2) DEFAULT NULL,
  `jiean` smallint(4) DEFAULT NULL,
  `zhongjiefei` int(11) DEFAULT NULL,
  `lururen` int(11) DEFAULT NULL,
  `hetong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_chengjiao"
#

INSERT INTO `jjrxt_chengjiao` VALUES (1,12,NULL,'M-10005',10005,'MK1004',1497888000,1497926623,NULL,900.00,NULL,NULL,NULL,1,1,2,1,'八里台',NULL,'周',287.00,NULL,10000,12,'hz10000');

#
# Source for table "jjrxt_fangyuan"
#

CREATE TABLE `jjrxt_fangyuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `leixing` smallint(4) DEFAULT NULL,
  `yongtu` smallint(4) DEFAULT NULL,
  `zhuangtai` smallint(4) DEFAULT NULL,
  `bianhao` int(11) DEFAULT NULL,
  `xingzhengqu` varchar(100) DEFAULT NULL,
  `pianqu` varchar(100) DEFAULT NULL,
  `xiaoqu` int(11) DEFAULT NULL,
  `xiaoqum` varchar(100) DEFAULT NULL,
  `zuodong` varchar(60) DEFAULT NULL,
  `danyuan` varchar(60) DEFAULT NULL,
  `fanghao` varchar(60) DEFAULT NULL,
  `chaoxiang` smallint(4) DEFAULT NULL,
  `louceng` smallint(6) DEFAULT NULL,
  `zlouceng` smallint(6) DEFAULT NULL,
  `zhuangxiu` smallint(4) DEFAULT NULL,
  `mianji` decimal(10,2) DEFAULT NULL,
  `symianji` decimal(10,2) DEFAULT NULL,
  `niandai` int(8) DEFAULT NULL,
  `shoujia` decimal(10,2) DEFAULT NULL,
  `chushoudj` decimal(10,2) DEFAULT NULL,
  `zujia` int(11) DEFAULT NULL,
  `chuzudj` int(11) DEFAULT NULL,
  `zujialx` smallint(6) DEFAULT NULL,
  `dengji` smallint(4) DEFAULT NULL,
  `lurusj` int(11) DEFAULT NULL,
  `xiugaisj` int(11) DEFAULT NULL,
  `qyzhgenjin` int(11) DEFAULT NULL,
  `whrzhgenjin` int(11) DEFAULT NULL,
  `weihuren` varchar(30) DEFAULT NULL,
  `weihurenid` int(11) DEFAULT NULL,
  `beizhu` text,
  `weituobianhao` varchar(255) DEFAULT NULL,
  `bumen` varchar(50) DEFAULT NULL,
  `peitao` varchar(100) DEFAULT NULL,
  `xianzhuang` smallint(4) DEFAULT NULL,
  `fwleixing` smallint(6) DEFAULT NULL,
  `jiegou` smallint(6) DEFAULT NULL,
  `cqnianxian` int(5) DEFAULT NULL,
  `cqxingzhi` smallint(6) DEFAULT NULL,
  `czriqi` varchar(11) DEFAULT NULL,
  `tjbiaoqian` varchar(50) DEFAULT NULL,
  `fybiaoti` varchar(255) DEFAULT NULL,
  `waiwangtb` smallint(2) DEFAULT '0',
  `fyshuifei` float DEFAULT NULL,
  `laiyuan` smallint(6) DEFAULT NULL,
  `djbianhao` int(11) DEFAULT NULL,
  `kanfangfs` smallint(6) DEFAULT NULL,
  `dujiaren` varchar(50) DEFAULT NULL,
  `yaoshibh` varchar(50) DEFAULT NULL,
  `yaoshisj` varchar(50) DEFAULT NULL,
  `yaoshidian` varchar(50) DEFAULT NULL,
  `yezhu` varchar(50) DEFAULT NULL,
  `yezhulx` smallint(6) DEFAULT NULL,
  `yezhugx` smallint(6) DEFAULT NULL,
  `yezhudianhua` varchar(20) DEFAULT NULL,
  `yezhudianhua2` varchar(20) DEFAULT NULL,
  `yezhudianhua3` varchar(20) DEFAULT NULL,
  `tupian` smallint(2) DEFAULT '0',
  `jishou` smallint(2) DEFAULT '0',
  `xuequ` smallint(2) DEFAULT '0',
  `shi` smallint(6) DEFAULT NULL,
  `ting` smallint(6) DEFAULT NULL,
  `wei` smallint(6) DEFAULT NULL,
  `chu` smallint(6) DEFAULT NULL,
  `yangtai` smallint(6) DEFAULT NULL,
  `vr_url` varchar(255) DEFAULT NULL,
  `man2` smallint(2) DEFAULT '0',
  `weiyi` smallint(2) DEFAULT '0',
  `quankuan` smallint(2) DEFAULT '0',
  `lrshijian` int(11) DEFAULT NULL,
  `ti` smallint(6) DEFAULT NULL,
  `hu` smallint(6) DEFAULT NULL,
  `fukuanfs` smallint(6) DEFAULT NULL,
  `danjia` decimal(10,2) DEFAULT NULL,
  `youdaikuan` smallint(6) DEFAULT NULL,
  `xinzheng` smallint(6) DEFAULT NULL,
  `shouyaobm` int(11) DEFAULT NULL,
  `shouyaoren` varchar(255) DEFAULT NULL,
  `shangturen` int(11) DEFAULT NULL,
  `bzrq` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bianhao_2` (`bianhao`),
  KEY `bianhao` (`bianhao`),
  KEY `bianhao_3` (`bianhao`),
  KEY `bianhao_4` (`bianhao`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_fangyuan"
#

INSERT INTO `jjrxt_fangyuan` VALUES (1,10000,1,1,1,10000,'1','1',1,'光明楼','2','2','3',10,7,7,6,139.00,0.00,2010,1600.00,1600.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,'',8,'住宅产权，面积适中，7米超大面宽，全景落地窗，东览国贸，西望西山 德系精工，国际私人化豪宅精装',NULL,'2','2,3,4,5,6,7,8,9',1,9,NULL,0,1,'1466438400',NULL,'东城CBD 工体北门 跃金之宅 精研之所 悦享繁华 豪装大宅',1,NULL,8,NULL,2,NULL,NULL,NULL,'','孙',1,NULL,'15967899548',NULL,NULL,1,0,0,1,1,1,1,1,'https://720yun.com/t/3b0jk5evOu6?pano_id=3706559',1,0,1,NULL,1,2,1,115107.91,0,1,2,'7',NULL,NULL),(2,10000,1,1,1,10001,'1','1',1,'光明楼','3','2','2',9,16,16,5,72.00,0.00,2001,900.00,900.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,8,'房东诚心出售此房，价格可以再谈，欢迎看房。',NULL,'2','2,3,4,5,6,7,8,14',2,9,NULL,0,3,'1466438500',NULL,'东二环 培新街 东西通透两居 不临街 地铁三线交汇处',1,NULL,6,NULL,1,NULL,NULL,NULL,'','齐',2,NULL,'15855784784',NULL,NULL,1,0,0,3,2,1,1,1,'https://720yun.com/t/0b2jk5mwvn3?pano_id=3702728',0,1,0,NULL,2,3,2,125000.00,1,0,2,'7',NULL,NULL),(3,10000,1,1,1,10002,'1','1',2,'龙潭湖','3','2','1',10,3,3,2,300.00,0.00,2016,2000.00,2000.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,8,'坐落在21000亩湖面  岛屿独栋别墅  一湖一世界一岛一传奇  一墅一风景一户一人生  双拼300平米赠送223平米花园  独栋388平米赠送356平米花园  独栋499平米赠送900平米花元',NULL,'2','2,3,4,5,6,7,9,14',1,12,NULL,0,3,'1466438600',NULL,'迁安西班牙庄园 湖岛别墅 送超大花园 私人码头停机场 大产权',1,NULL,2,NULL,1,NULL,NULL,NULL,'','陆',1,NULL,'13663947687',NULL,NULL,1,1,1,4,2,2,2,2,'https://720yun.com/t/f77jk5uk5u3?pano_id=3678975',0,0,1,NULL,3,4,3,66666.67,0,0,2,'8',NULL,NULL),(4,10000,1,1,1,10003,'1','1',3,'永定门','1','1','1',10,6,6,6,239.00,0.00,2010,3400.00,3400.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,8,'朱雀门，耕天下    二环内护城河边上，南城标杆    闹中取静，环境宜人，  生活便利舒适  239.22平米，南北通透三居室    前后不临街，动静分离    满足您对房子的各种需求    欢迎您随时预约看\r\n该业主换房，业主本人热衷书画等文学类的东西    屋子里面充满了文学气息    房子保养得也非常好    静等有缘人',NULL,'2','2,3,4,7,8,9,14',1,9,NULL,0,3,'1466438700',NULL,'一瓶+朱雀门+耕天下+二环内+户型方正+南北通透+看房随时',1,NULL,4,NULL,1,NULL,NULL,NULL,'','乐',1,NULL,'13575478386',NULL,NULL,1,0,0,3,2,2,2,1,'https://720yun.com/t/b4e2dczvacw?pano_id=1224054',1,1,0,NULL,4,5,4,142259.41,0,1,2,'7',NULL,NULL),(5,10000,1,1,1,10004,'1','1',3,'永定门','3','3','3',10,6,6,5,239.00,0.00,2005,3100.00,3100.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,8,'业主是一位姓张的女士，我们认识一年时间，房源是我亲自精根，业主卖这房是为了变现，房子是业主刚刚开盘的时候买的，不是买的二手房，也是因为资金周转，所以才忍痛割爱出售此房，3400万是业主的报价，业主说客户看好房，可以见面聊。',NULL,'2','2,3,4,5,6,7',1,9,NULL,0,3,'1466438800',NULL,'陶然亭+朱雀门+一瓶+耕天下南北三居+户型方正+不临街',1,NULL,8,NULL,2,NULL,NULL,NULL,'','言',1,NULL,'13275567368',NULL,NULL,1,0,1,3,3,2,2,2,'https://720yun.com/t/83cjk54u5k6?pano_id=3751772',0,0,1,NULL,5,3,1,129707.11,0,0,2,'8',NULL,NULL),(6,10000,1,1,4,10005,'2','8',24,'八里台','2','2','2',10,3,3,3,287.00,0.00,2002,900.00,900.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,12,'环境优美 适宜居住 人文素质高 物业管理完善  配套齐全 生活所需一应齐全 便利的生活触手可及  客厅挑高、宽敞舒适、阳光非常充足',NULL,'3','2,3,4,5,14',2,12,NULL,0,1,'1466438900',NULL,'水上北路，长实别墅银角边户150平大院，单价只有3万1',1,NULL,6,NULL,3,NULL,NULL,NULL,NULL,'洛',2,NULL,'18964467655',NULL,NULL,1,1,0,6,3,5,1,3,'https://720yun.com/t/971jk5kyuO3?pano_id=1997422',0,0,0,NULL,4,4,4,31358.00,0,0,3,'11',NULL,NULL),(7,10000,1,1,1,10006,'5','17',49,'平江','3','2','3',10,2,2,6,1400.00,0.00,2014,12000.00,12000.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,24,'房源稀有，新房买卖， 诚心出售 ，非诚勿扰！',NULL,'5','2,3,4,5,6,7,8',2,12,NULL,0,3,'1466439000',NULL,'四大园林之首，苏州园林风格，古代豪门，假山庭院',1,NULL,3,NULL,2,NULL,NULL,NULL,'','秦',2,NULL,'17745543633',NULL,NULL,1,0,0,8,4,8,4,6,'',1,0,0,NULL,3,5,3,85714.29,0,1,6,'23',NULL,NULL),(8,10000,1,1,1,10007,'5','17',50,'园区','1','2','3',10,3,3,2,950.00,0.00,2016,5900.00,5900.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,24,'真正的“人物”出场，总是自带闪光灯！绿城地产项目开发由融创地产项目接手建设运营，融创中式园林景观工程别墅，大宅小院、花街柳巷、小桥流水、身临其境其中别样一番洞天景象……穿越时空——活春宫、美如画，看到的人好像是天仙一样！惟大英雄能本色、是真名士自风流',NULL,'5','2,3,9,14',2,12,NULL,0,3,'1466439100',NULL,'苏州桃花源 中式园林景观 临湖景观此一席',1,NULL,4,NULL,2,NULL,NULL,NULL,'','李',1,NULL,'15234567865',NULL,NULL,1,0,1,5,3,6,1,2,'',0,1,0,NULL,2,1,2,62105.26,0,0,6,'24',NULL,NULL),(9,10000,1,1,1,10008,'6','18',51,'萧山','2','3','3',2,3,3,2,1234.00,0.00,2014,8888.00,8888.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,28,'世界湖居的东方明珠-湘湖传世奢华独栋别墅  欢迎品鉴！  建筑面积约800-1500方  坐落于八千年历史积淀，吴越争霸之地-五A级景区湘湖核心内  15席传世庄园  一桩一湖山  美国BLA建筑设计公司打造  2500年前，越王封疆，驰得江山; 2500年后，卧湖藏珑，隐得湖山  万人向往，十五位珍藏 还剩13位有缘的业主！  国家旅游度假区  杭州湘湖景区核心内  背山面湖，湖面是游艇码头   私家庭院约400-2000㎡左右  个别地下室最大可扩建1700㎡  西式宫廷的威严+东方古典完-美结合  每户都有室内游泳池，有电梯  靠山临湖，享受8000年风-水福地',NULL,'6','6,7,8,9,14',2,12,NULL,0,3,'1466439200',NULL,'樾珑台，湘湖景区内山体别墅，限购条件下的奢享新选择~预约看房',1,NULL,6,NULL,1,NULL,NULL,NULL,'','王',1,NULL,'13865435788',NULL,NULL,1,0,0,6,4,8,2,1,'https://720yun.com/t/c252fjr8u1r?pano_id=212032',1,0,1,NULL,1,4,1,72025.93,0,0,7,'28',NULL,NULL),(10,10000,1,1,1,10009,'6','18',52,'拱墅','1','2','3',10,30,30,2,560.00,0.00,2015,5300.00,5300.00,0,0,NULL,NULL,1488760862,NULL,NULL,NULL,NULL,28,'武林壹号，项目坐落武林广场北侧，坐拥武林商务圈、西湖文化广场，以及京杭大运河水景资源。 项目占地面积107945平方，总建筑面积约46万平方，建筑高度111米，项目由9幢豪华全装修住宅、3幢高端写字楼组成 。',NULL,'6','2,3,4,5,6,7,8,9,14',1,9,NULL,0,1,'1466439300',NULL,'坐落武林广场北侧 武林商圈 西湖文化广场 高端住宅 跃层式！',1,NULL,7,NULL,1,NULL,NULL,NULL,'','张',1,NULL,'13765745676','','',1,1,0,5,2,5,1,1,'https://720yun.com/t/483jk5mv5y0',0,1,0,NULL,1,2,4,94642.86,0,0,7,'27',NULL,NULL);

#
# Source for table "jjrxt_fybianhao"
#

CREATE TABLE `jjrxt_fybianhao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `bianhao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_fybianhao"
#

INSERT INTO `jjrxt_fybianhao` VALUES (1,10000,10010);

#
# Source for table "jjrxt_fygenjin"
#

CREATE TABLE `jjrxt_fygenjin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `fybh` varchar(100) DEFAULT NULL,
  `fyid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `genjinfs` smallint(6) DEFAULT NULL,
  `neirong` text,
  `shijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "jjrxt_fygenjin"
#


#
# Source for table "jjrxt_fyxgjilu"
#

CREATE TABLE `jjrxt_fyxgjilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `fyid` int(11) DEFAULT NULL,
  `fybianhao` varchar(100) DEFAULT NULL,
  `ziduan` varchar(50) DEFAULT NULL,
  `yuanzhi` varchar(100) DEFAULT NULL,
  `xiugaiwei` varchar(100) DEFAULT NULL,
  `shijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_fyxgjilu"
#

INSERT INTO `jjrxt_fyxgjilu` VALUES (1,1,10,'10009','danjia','94642.00','94642.86',1498040854),(2,1,10,'10009','cqxingzhi',NULL,'1',1498040854),(3,1,10,'10009','chu',NULL,'1',1498040854),(4,1,10,'10009','yangtai',NULL,'1',1498040854),(5,1,10,'10009','jishou','0','1',1498040854),(6,1,9,'10008','danjia','72025.00','72025.93',1498041155),(7,1,9,'10008','cqxingzhi',NULL,'3',1498041155),(8,1,9,'10008','chu',NULL,'2',1498041155),(9,1,9,'10008','yangtai',NULL,'1',1498041155),(10,1,9,'10008','man2','0','1',1498041155),(11,1,8,'10007','danjia','62105.00','62105.26',1498041183),(12,1,8,'10007','cqxingzhi',NULL,'3',1498041183),(13,1,8,'10007','chu',NULL,'1',1498041183),(14,1,8,'10007','yangtai',NULL,'2',1498041183),(15,1,8,'10007','weiyi','0','1',1498041183),(16,1,7,'10006','danjia','85714.00','85714.29',1498041214),(17,1,7,'10006','cqxingzhi',NULL,'3',1498041214),(18,1,7,'10006','chu',NULL,'4',1498041214),(19,1,7,'10006','yangtai',NULL,'6',1498041214),(20,1,7,'10006','xinzheng',NULL,'1',1498041214),(21,1,5,'10004','danjia','129587.00','129707.11',1498041245),(22,1,5,'10004','cqxingzhi',NULL,'3',1498041245),(23,1,5,'10004','chu',NULL,'2',1498041245),(24,1,5,'10004','yangtai',NULL,'2',1498041245),(25,1,5,'10004','xuequ','0','1',1498041245),(26,1,1,'10000','danjia','115107.00','115107.91',1498041283),(27,1,1,'10000','cqxingzhi',NULL,'1',1498041283),(28,1,1,'10000','chu',NULL,'1',1498041283),(29,1,1,'10000','yangtai',NULL,'1',1498041283),(30,1,1,'10000','quankuan','0','1',1498041283),(31,1,2,'10001','cqxingzhi',NULL,'3',1498041297),(32,1,2,'10001','chu',NULL,'1',1498041297),(33,1,2,'10001','yangtai',NULL,'1',1498041297),(34,1,2,'10001','youdaikuan',NULL,'1',1498041297),(35,1,3,'10002','danjia','66666.00','66666.67',1498041315),(36,1,3,'10002','cqxingzhi',NULL,'3',1498041315),(37,1,3,'10002','chu',NULL,'2',1498041315),(38,1,3,'10002','yangtai',NULL,'2',1498041315),(39,1,3,'10002','jishou','0','1',1498041315),(40,1,3,'10002','xuequ','0','1',1498041315),(41,1,4,'10003','danjia','142259.00','142259.41',1498041334),(42,1,4,'10003','cqxingzhi',NULL,'3',1498041334),(43,1,4,'10003','chu',NULL,'2',1498041334),(44,1,4,'10003','yangtai',NULL,'1',1498041334),(45,1,4,'10003','beizhu','朱雀门，耕天下    二环内护城河边上，南城标杆    闹中取静，环境宜人，  生活便利舒适  239.22平米，南北通透三居室    前后不临街，动静分离    满足您对房子的各种需求    欢迎您','朱雀门，耕天下    二环内护城河边上，南城标杆    闹中取静，环境宜人，  生活便利舒适  239.22平米，南北通透三居室    前后不临街，动静分离    满足您对房子的各种需求    欢迎您',1498041334),(46,1,4,'10003','weiyi','0','1',1498041334),(47,1,4,'10003','man2','0','1',1498041334),(48,1,4,'10003','xinzheng',NULL,'1',1498041334),(49,2,10,'10009','shouyaobm',NULL,'7',1498133324),(50,2,10,'10009','shouyaoren',NULL,'2',1498133324),(51,2,10,'10009','zujia','0','',1498133324),(52,2,10,'10009','yezhulx',NULL,'1',1498133324),(53,2,10,'10009','peitao',NULL,'2,3,4,5,6,7,8,9,14',1498133324),(54,2,10,'10009','xianzhuang',NULL,'1',1498133324),(55,2,10,'10009','kanfangfs',NULL,'1',1498133324),(56,2,10,'10009','laiyuan',NULL,'7',1498133324),(57,2,10,'10009','ti','0','1',1498133324),(58,2,10,'10009','hu','0','2',1498133324),(59,2,10,'10009','chuzudj','0','',1498133324),(60,2,10,'10009','czriqi','','1498060800',1498133324),(61,2,10,'10009','fukuanfs',NULL,'4',1498133324),(62,2,10,'10009','zujia','0','',1498133544),(63,2,10,'10009','chuzudj','0','',1498133544),(64,2,10,'10009','zujia','0','',1498133565),(65,2,10,'10009','chuzudj','0','',1498133565),(66,2,10,'10009','czriqi','1498060800','1466438400',1498133565);

#
# Source for table "jjrxt_fyxiugai"
#

CREATE TABLE `jjrxt_fyxiugai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fybianhao` int(11) unsigned DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `xiugaiqian` varchar(255) DEFAULT NULL,
  `xiugaihou` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_fyxiugai"
#

INSERT INTO `jjrxt_fyxiugai` VALUES (1,10009,2,1498115361,'业主：。电话：;;。座栋：。单元：。房号：','业主：张。电话：13765745676;;。座栋：1。单元：2。房号：3');

#
# Source for table "jjrxt_fyziduan"
#

CREATE TABLE `jjrxt_fyziduan` (
  `ziduanm` varchar(100) DEFAULT NULL,
  `beizhu` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_fyziduan"
#

INSERT INTO `jjrxt_fyziduan` VALUES ('leixing','类型'),('yongtu','用途'),('zhuangtai','状态'),('xiaoqu','小区id'),('xiaoqum','小区名'),('chaoxiang','朝向'),('louceng','楼层'),('zlouceng','总楼层'),('zhuangxiu','装修'),('mianji','面积'),('symianji','使用面积'),('niandai','建筑年代'),('shoujia','售价'),('chushoudj','出售底价'),('zujia','租价'),('chuzudj','出租底价'),('zujialx','租价类型'),('beizhu','备注'),('peitao','配套'),('xianzhuang','现状'),('fwleixing','房屋类型'),('jiegou','结构'),('cqnianxian','产权年限'),('cqxingzhi','产权性质'),('czriqi','产证日期'),('fybiaoti','房源标题'),('waiwangtb','外网同步'),('laiyuan','来源'),('kanfangfs','看房方式'),('yezhu','业主'),('yezhulx','业主类型'),('yezhugx','业主关系'),('tupian','是否有图片'),('jishou','是否急售'),('xuequ','是否学区'),('shi','室'),('ting','厅'),('wei','卫'),('chu','厨'),('yangtai','阳台'),('man2','满2年'),('weiyi','唯一住房'),('quankuan','是否全款'),('fukuanfs','付款方式'),('hu','户'),('ti','梯'),('youdaikuan','是否有贷款'),('xinzheng','是否新证'),('shouyaobm','收钥部门');

#
# Source for table "jjrxt_gsgonggao"
#

CREATE TABLE `jjrxt_gsgonggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) NOT NULL DEFAULT '0',
  `ggbiaoti` varchar(255) DEFAULT NULL,
  `ggleibie` smallint(6) DEFAULT NULL,
  `ggren` smallint(6) DEFAULT NULL,
  `ggneirong` text,
  `ggfujian` varchar(255) DEFAULT NULL,
  `ggshijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_gsgonggao"
#

INSERT INTO `jjrxt_gsgonggao` VALUES (1,10000,'123',1,3,'&lt;p&gt;vahjstjrryd&lt;/p&gt;',NULL,1497855909),(2,10000,'234',2,3,'谁发个歌',NULL,1497855909),(3,10000,'345',3,3,'给他任何然后是',NULL,1497855909),(4,10000,'456',4,3,'浩如烟海认为',NULL,1497855909);

#
# Source for table "jjrxt_guohu"
#

CREATE TABLE `jjrxt_guohu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhuangtai` smallint(4) DEFAULT NULL,
  `jindum` varchar(255) DEFAULT NULL,
  `yjsj` int(11) DEFAULT NULL,
  `wcsj` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `czsj` int(11) DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  `cjbh` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_guohu"
#


#
# Source for table "jjrxt_keyuan"
#

CREATE TABLE `jjrxt_keyuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) NOT NULL DEFAULT '0',
  `xqbianhao` varchar(50) DEFAULT NULL,
  `zhuangtai` smallint(4) DEFAULT NULL,
  `xqyongtu` smallint(6) DEFAULT NULL,
  `khxingming` varchar(50) DEFAULT NULL,
  `khlaiyuan` smallint(6) DEFAULT NULL,
  `xqquyu` varchar(255) DEFAULT NULL,
  `xqxiaoqu` varchar(255) DEFAULT NULL,
  `xqmianji1` int(11) DEFAULT NULL,
  `xqmianji2` int(11) DEFAULT NULL,
  `xqjiage1` int(11) DEFAULT NULL,
  `xqjiage2` int(11) DEFAULT NULL,
  `xqhuxing1` smallint(6) DEFAULT NULL,
  `xqhuxing2` smallint(6) DEFAULT NULL,
  `gtjieduan` smallint(6) DEFAULT NULL,
  `beizhu` text,
  `kydengji` varchar(7) DEFAULT NULL,
  `lurusj` int(11) DEFAULT NULL,
  `qyzhgenjin` int(11) DEFAULT NULL,
  `zhdkshijian` int(11) DEFAULT NULL,
  `whrzhgenjin` int(11) DEFAULT NULL,
  `lururenid` smallint(6) DEFAULT NULL,
  `weihurenid` int(11) DEFAULT NULL,
  `weihuren` varchar(255) DEFAULT NULL,
  `fengpanrenid` smallint(6) DEFAULT NULL,
  `louceng1` smallint(6) DEFAULT NULL,
  `louceng2` smallint(6) DEFAULT NULL,
  `fangling1` int(11) DEFAULT NULL,
  `fangling2` int(11) DEFAULT NULL,
  `fukuan` smallint(6) DEFAULT NULL,
  `peitao` varchar(255) DEFAULT NULL,
  `zhuangxiu` varchar(255) DEFAULT NULL,
  `chaoxiang` varchar(255) DEFAULT NULL,
  `xqyuanyin` text,
  `dianhua` bigint(20) DEFAULT NULL,
  `jiqie` smallint(2) DEFAULT NULL,
  `daikan` smallint(2) DEFAULT NULL,
  `fengpan` smallint(2) DEFAULT NULL,
  `sfzheng` varchar(60) DEFAULT NULL,
  `qqhao` varchar(30) DEFAULT NULL,
  `youxiang` varchar(30) DEFAULT NULL,
  `weixin` varchar(30) DEFAULT NULL,
  `chexing` varchar(30) DEFAULT NULL,
  `jtgongju` varchar(30) DEFAULT NULL,
  `kehulx` smallint(6) DEFAULT NULL,
  `leixing` smallint(6) DEFAULT NULL,
  `guoji` smallint(6) DEFAULT NULL,
  `minzu` smallint(6) DEFAULT NULL,
  `xflinian` smallint(6) DEFAULT NULL,
  `mmzl` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "jjrxt_keyuan"
#

INSERT INTO `jjrxt_keyuan` VALUES (1,10000,'MK1000',1,1,'赵',11,'光明楼附近','1',100,200,100,200,1,NULL,1,NULL,NULL,1488760862,NULL,NULL,NULL,7,7,'周凯歌',NULL,NULL,10,NULL,NULL,NULL,'1','2','10',NULL,13894493759,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(2,10000,'MK1001',1,1,'钱',3,'龙潭湖周围','2',100,NULL,200,400,2,NULL,1,NULL,NULL,1488760862,NULL,NULL,NULL,7,7,'周凯歌',NULL,NULL,9,NULL,NULL,NULL,'1','3','10',NULL,13947593659,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(3,10000,'MK1002',1,1,'孙',11,'永定门','3',300,NULL,300,600,NULL,3,1,NULL,NULL,1488760862,NULL,NULL,NULL,11,11,'冯言阙',NULL,NULL,9,NULL,NULL,NULL,'1','4','10',NULL,15649539539,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(4,10000,'MK1003',1,1,'李',16,'宣武门','4',NULL,1000,400,800,2,NULL,1,NULL,NULL,1488760862,NULL,NULL,NULL,11,11,'冯言阙',NULL,2,NULL,NULL,NULL,NULL,'2','5','10',NULL,18754842784,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(5,10000,'MK1004',2,1,'周',18,'大观园附近','5',200,NULL,500,1000,1,NULL,8,NULL,NULL,1488760862,NULL,NULL,NULL,7,7,'周凯歌',NULL,3,NULL,NULL,NULL,NULL,'3','6','10',NULL,15793248472,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,1,1,1,1),(6,10000,'ZK1005',1,1,'吴',19,'陶然亭附近','6',500,NULL,1200,NULL,1,NULL,2,NULL,NULL,1488760862,NULL,NULL,NULL,23,23,'何泓涵',NULL,4,NULL,NULL,NULL,NULL,'4','6','10',NULL,15824897893,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,1,1,3,2),(7,10000,'MK1006',4,1,'郑',20,'亦庄附近','7',NULL,900,100,150,NULL,3,1,NULL,NULL,1488760862,NULL,NULL,NULL,27,27,'孔景铄',NULL,5,10,NULL,NULL,NULL,'5','5','10',NULL,15824789789,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(8,10000,'ZK1007',1,1,'王',12,'黄村','8',1000,NULL,1000,1500,1,NULL,2,NULL,NULL,1488760862,NULL,NULL,NULL,23,23,'何泓涵',NULL,6,10,NULL,NULL,NULL,'6','4','10',NULL,15995498833,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,3,2),(9,10000,'ZK1008',1,1,'冯',12,'西红门附近','9',100,NULL,700,1500,1,NULL,2,NULL,NULL,1488760862,NULL,NULL,NULL,23,23,'何泓涵',23,7,12,NULL,NULL,NULL,'7','3','10',NULL,13857346635,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,3,2),(10,10000,'ZK1009',0,1,'陈',20,'八达岭附近','10',NULL,100,NULL,1500,NULL,4,1,NULL,NULL,1488760862,NULL,NULL,NULL,23,23,'何泓涵',NULL,8,15,NULL,NULL,NULL,'8','2','10',NULL,18885983970,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,2),(11,10000,'ZK1010',1,1,'褚',20,'大榆树附近','11',50,100,1000,1200,4,NULL,1,NULL,NULL,1488760862,NULL,NULL,NULL,27,27,'孔景铄',NULL,9,18,NULL,NULL,NULL,'1','2','10',NULL,18048997834,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,3,2),(12,10000,'MK1011',1,1,'卫',18,'康庄','12',70,100,900,1200,4,NULL,2,NULL,NULL,1488760862,NULL,NULL,NULL,27,27,'孔景铄',NULL,10,30,NULL,NULL,NULL,'1','3','10',NULL,18058937852,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(13,10000,'MK1012',1,1,'蒋',18,'石景山附近','13',NULL,200,1000,2000,NULL,5,2,NULL,NULL,1488760862,NULL,NULL,NULL,11,11,'冯言阙',11,9,NULL,NULL,NULL,NULL,'1','4','10',NULL,18789577284,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,3,1),(14,10000,'MK1013',1,1,'沈',19,'苏州','14',NULL,300,10000,NULL,1,NULL,2,NULL,'1',1488760862,NULL,NULL,NULL,7,7,'周凯歌',NULL,8,NULL,NULL,NULL,NULL,'1','5','10',NULL,15653907893,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,1,1,3,1),(15,10000,'MK1014',1,1,'韩',4,'苏州','15',NULL,500,5000,10000,2,NULL,3,NULL,'1',1488760862,NULL,NULL,NULL,15,15,'蒋悠然',NULL,NULL,21,NULL,NULL,NULL,'17','5','10',NULL,13648996356,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,1,1,2,1),(16,10000,'ZK1015',1,1,'杨',16,'杭州','16',700,NULL,NULL,1000,NULL,6,1,NULL,NULL,1488760862,NULL,NULL,NULL,15,15,'蒋悠然',NULL,6,NULL,NULL,NULL,NULL,'14','6','10',NULL,13957948957,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,2),(17,10000,'ZK1016',1,1,'朱',16,'向阳街','17',500,NULL,1000,NULL,2,NULL,1,NULL,NULL,1488760862,NULL,NULL,NULL,19,19,'朱志行',NULL,5,NULL,NULL,NULL,NULL,'14','4','10',NULL,15985967329,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,2,2),(18,10000,'MK1017',1,1,'秦',11,'杭州','18',100,NULL,3000,NULL,1,NULL,1,NULL,NULL,1488760862,NULL,NULL,NULL,19,19,'朱志行',NULL,20,30,NULL,NULL,NULL,'19','3','10',NULL,15825685656,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,2,1),(19,10000,'MK1018',1,1,'尤',11,'南营门','19',50,150,NULL,3000,1,3,2,NULL,NULL,1488760862,NULL,NULL,NULL,3,3,'赵澜清',NULL,3,NULL,NULL,NULL,NULL,'1','2','10',NULL,15758937956,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(20,10000,'MK1019',0,1,'许',3,'体育馆附近','20',70,120,NULL,800,4,5,2,NULL,NULL,1488760862,NULL,NULL,NULL,3,3,'赵澜清',3,2,NULL,NULL,NULL,NULL,'1','4','10',NULL,18678394652,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,1,1,1,1),(21,10000,'ZK1020',1,1,'何',3,'南市','21',120,NULL,500,1000,1,6,2,NULL,NULL,1488760862,NULL,NULL,NULL,3,3,'赵澜清',NULL,NULL,30,NULL,NULL,NULL,'1','4','10',NULL,17765927895,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,2),(22,10000,'MK1021',0,1,'吕',11,'嘉陵道','22',NULL,720,500,NULL,2,3,2,NULL,NULL,1488760862,NULL,NULL,NULL,3,3,'赵澜清',NULL,5,NULL,NULL,NULL,NULL,'2','5','10',NULL,15590369662,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,1),(23,10000,'ZK1022',1,1,'施',8,'华苑周围','23',NULL,300,700,1000,2,5,2,NULL,NULL,1488760862,NULL,NULL,NULL,15,15,'蒋悠然',NULL,5,NULL,NULL,NULL,NULL,'3','3','10',NULL,18968937876,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,1,1,1,2),(24,10000,'MK1023',1,1,'张',8,'八里台','24',200,300,10000,15000,3,6,4,NULL,'1',1488760862,NULL,NULL,NULL,19,19,'朱志行',NULL,4,NULL,NULL,NULL,NULL,'4','5','10',NULL,15857629572,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,1,1,3,1);

#
# Source for table "jjrxt_kybianhao"
#

CREATE TABLE `jjrxt_kybianhao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `bianhao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

#
# Data for table "jjrxt_kybianhao"
#

INSERT INTO `jjrxt_kybianhao` VALUES (1,10000,1024);

#
# Source for table "jjrxt_kydaikan"
#

CREATE TABLE `jjrxt_kydaikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `kybh` varchar(100) DEFAULT NULL,
  `kyid` int(11) DEFAULT NULL,
  `dkuid` int(11) DEFAULT NULL,
  `daipanl` varchar(255) DEFAULT NULL,
  `dkfangyuan` varchar(255) DEFAULT NULL,
  `kehupj` varchar(255) DEFAULT NULL,
  `dkshijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_kydaikan"
#

INSERT INTO `jjrxt_kydaikan` VALUES (1,10000,'mk1023',24,20,NULL,'10006','多福多寿',1497926268),(2,10000,'mk1023',24,20,NULL,'10006','翻到',1497926289),(3,10000,'mk1014',15,16,NULL,'10008','安分',1497926289);

#
# Source for table "jjrxt_kygenjin"
#

CREATE TABLE `jjrxt_kygenjin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `kybh` varchar(100) DEFAULT NULL,
  `kyid` int(11) DEFAULT NULL,
  `gjuid` int(11) DEFAULT NULL,
  `genjinfs` smallint(6) DEFAULT NULL,
  `gjneirong` varchar(255) DEFAULT NULL,
  `gjshijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_kygenjin"
#


#
# Source for table "jjrxt_kytixing"
#

CREATE TABLE `jjrxt_kytixing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `kybh` varchar(100) DEFAULT NULL,
  `kyid` int(11) DEFAULT NULL,
  `txuid` int(11) DEFAULT NULL,
  `txneirong` varchar(255) DEFAULT NULL,
  `txshijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_kytixing"
#


#
# Source for table "jjrxt_mac"
#

CREATE TABLE `jjrxt_mac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `macid` char(18) DEFAULT NULL,
  `keyid` varchar(32) DEFAULT NULL,
  `xm` varchar(20) DEFAULT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `bm` varchar(20) DEFAULT NULL,
  `dnbh` varchar(10) DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  `tjsj` int(11) DEFAULT NULL,
  `shenhe` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_mac"
#


#
# Source for table "jjrxt_node"
#

CREATE TABLE `jjrxt_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(5) unsigned DEFAULT NULL,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_node"
#

INSERT INTO `jjrxt_node` VALUES (14,'Home','首页应用',1,NULL,1,0,1),(16,'Rbac','Rbac权限控制',1,NULL,1,14,2),(17,'index','rbac首页',1,NULL,1,16,3),(18,'Role','角色列表',1,NULL,1,16,3),(36,'delRole','删除角色',1,NULL,1,16,3),(40,'Fangyuan','房源列表',1,NULL,1,14,2),(41,'Esfy','房源列表',1,NULL,1,40,3),(42,'addEsfy','添加房源',1,NULL,1,40,3),(43,'fysousuo','房源搜索',1,NULL,1,14,2),(44,'index','搜索',1,NULL,1,43,3),(45,'addEsfyHandle','添加表单处理',1,NULL,1,40,3),(46,'neirong','内容页',1,NULL,1,40,3),(47,'get_district','获取小区',1,NULL,1,40,3),(48,'get_citys','获取片区',1,NULL,1,40,3),(49,'get_fy_img','异步返回图片列表',1,NULL,1,40,3),(50,'fy_pic_del','异步删除图片',1,NULL,1,40,3),(51,'cfyanzheng','房源重复异步验证',1,NULL,1,40,3),(52,'Fangyuanimg','图片处理',1,NULL,1,14,2),(54,'ajax_upload','异步上传图片',1,NULL,1,52,3),(55,'Fyneirong','房源内容',1,NULL,1,14,2),(56,'xiugai','房源修改',1,NULL,1,55,3),(57,'xiugaiHandle','修改表单处理',1,NULL,1,55,3),(58,'diaoqu','调取',1,NULL,1,55,3),(59,'sipanHandle','转私盘处理',1,NULL,1,55,3),(60,'gongpanHandle','转公盘处理',1,NULL,1,55,3),(61,'genjin','跟进',1,NULL,1,55,3),(62,'genjinHandle','写跟进表单处理',1,NULL,1,55,3),(63,'Keyuan1','客源列表',1,NULL,1,14,2),(64,'get_citys','获取片区',1,NULL,1,63,3),(65,'get_district','获取小区',1,NULL,1,63,3),(66,'index','买卖客源',1,NULL,1,63,3),(67,'index2','租赁客源',1,NULL,1,63,3),(68,'addKeyuan','添加买卖客源',1,NULL,1,63,3),(69,'addKeyuanHandle','添加买卖客源表单处理',1,NULL,1,63,3),(70,'add','上传图片页',1,NULL,1,52,3),(71,'addKeyuan2','添加租赁客源页',1,NULL,1,63,3),(72,'addKeyuan2Handle','添加租赁客源表单处理',1,NULL,1,63,3),(73,'Keyuan1list','买卖客源列表',1,NULL,1,63,3),(74,'Keyuan2list','租赁客源列表',1,NULL,1,63,3),(75,'neirong1','内容页',1,NULL,1,63,3),(76,'quanjingHandle','全景表单处理',1,NULL,1,55,3),(78,'get_citys','获取片区',1,NULL,1,164,3),(79,'editKeyuan','修改买卖客源页',1,NULL,1,164,3),(80,'editKeyuanHandle','修改买卖客源表单处理',1,NULL,1,164,3),(81,'editKeyuan2','修改租赁客源页',1,NULL,1,164,3),(82,'editKeyuan2Handle','修改租赁客源表单处理',1,NULL,1,164,3),(83,'sikeHandle','转私客表单处理',1,NULL,1,164,3),(84,'gongkeHandle','转公客表单处理',1,NULL,1,164,3),(85,'genjin','写跟进页',1,NULL,1,164,3),(86,'genjinHandle','跟进表单处理',1,NULL,1,164,3),(87,'daikan','写带看页',1,NULL,1,164,3),(88,'daikanHandle','带看表单处理',1,NULL,1,164,3),(89,'bgwhr','变更维护人页',1,NULL,1,164,3),(90,'bgwhrHandle','变更维护人表单处理',1,NULL,1,164,3),(91,'Peizhi','配置设置',1,NULL,1,14,2),(92,'Peizhi','配置列表',1,NULL,1,91,3),(93,'addPeizhi','添加配置页',1,NULL,1,91,3),(94,'addPeizhiHandle','添加配置表单处理',1,NULL,1,91,3),(95,'editPeizhi','更改配置页',1,NULL,1,91,3),(96,'editPeizhiHandle','更改配置表单处理',1,NULL,1,91,3),(97,'delPeizhi','删除配置',1,NULL,1,91,3),(98,'Node','节点列表',1,NULL,1,16,3),(99,'addRole','添加角色页',1,NULL,1,16,3),(100,'addRoleHandle','添加角色表单处理',1,NULL,1,16,3),(101,'editRole','更新角色页',1,NULL,1,16,3),(102,'editRoleHandle','更新角色表单处理',1,NULL,1,16,3),(103,'delRole','角色删除',1,NULL,1,16,3),(104,'addUser','添加用户页',1,NULL,1,16,3),(105,'addUserHandle','添加用户表单处理',1,NULL,1,16,3),(106,'editUser','更改用户页',1,NULL,1,16,3),(107,'editUserHandle','更改用户表单处理',1,NULL,1,16,3),(108,'delUser','删除用户',1,NULL,1,16,3),(109,'addNodeHandle','添加节点表单处理',1,NULL,1,16,3),(110,'editNode','更新节点页',1,NULL,1,16,3),(111,'editNodeHandle','更新节点表单处理',1,NULL,1,16,3),(112,'delNode','删除节点',1,NULL,1,16,3),(113,'access','配置权限页',1,NULL,1,16,3),(114,'setAccess','修改权限页',1,NULL,1,16,3),(115,'Bumen','部门列表页',1,NULL,1,16,3),(116,'addBumen','添加部门页',1,NULL,1,16,3),(117,'addBumenHandle','添加部门表单处理',1,NULL,1,16,3),(118,'editBumen','更改部门页',1,NULL,1,16,3),(119,'editBumenHandle','更改部门表单处理',1,NULL,1,16,3),(120,'delBumen','删除部门',1,NULL,1,16,3),(122,'Ziyuan','资源',1,NULL,1,14,2),(123,'Pianqu','片区列表',1,NULL,1,122,3),(124,'addPianqu','添加片区页',1,NULL,1,122,3),(125,'addPianquHandle','添加片区表单处理',1,NULL,1,122,3),(126,'editPianqu','更新片区页',1,NULL,1,122,3),(127,'editPianquHandle','更新片区表单处理',1,NULL,1,122,3),(128,'delPianqu','删除片区',1,NULL,1,122,3),(129,'Xiaoqu','小区列表',1,NULL,1,122,3),(130,'addXiaoqu','添加小区页',1,NULL,1,122,3),(131,'addXiaoquHandle','添加小区表单处理',1,NULL,1,122,3),(132,'editXiaoqu','更改小区页',1,NULL,1,122,3),(133,'editXiaoquHandle','更改小区表单处理',1,NULL,1,122,3),(134,'delXiaoqu','删除小区',1,NULL,1,122,3),(135,'Xuequ','学区列表',1,NULL,1,122,3),(136,'addXuequ','添加学区页',1,NULL,1,122,3),(137,'addXuequHandle','添加学区表单处理',1,NULL,1,122,3),(138,'editXuequ','更改学区页',1,NULL,1,122,3),(139,'editXuequHandle','更改学区表单处理',1,NULL,1,122,3),(140,'delXuequ','删除学区',1,NULL,1,122,3),(141,'get_xiaoqu','搜索框异步小区',1,NULL,1,43,3),(142,'Gongsi','公司',1,NULL,1,14,2),(143,'Gonggao','公告列表',1,NULL,1,142,3),(144,'addgonggao','添加公告页',1,NULL,1,142,3),(145,'addgonggaoHandle','添加公告表单处理',1,NULL,1,142,3),(146,'editgonggao','编辑公告页',1,NULL,1,142,3),(147,'editgonggaoHandle','编辑公告表单处理',1,NULL,1,142,3),(148,'delGonggao','删除公告',1,NULL,1,142,3),(149,'ggxiangxi','公告详细页',1,NULL,1,142,3),(150,'xgzuodong','修改门牌号',1,NULL,1,55,3),(151,'xgzuodongHandle','修改门牌号表单处理',1,NULL,1,55,3),(152,'tixing','写提醒页',1,NULL,1,77,3),(153,'tixingHandle','写提醒表单处理',1,NULL,1,77,3),(154,'Keyuan1list','买卖客源列表',1,NULL,1,63,3),(155,'Keyuan2list','租赁客源列表',1,NULL,1,63,3),(156,'get_citys','异步获取片区',1,NULL,1,122,3),(157,'get_district','异步获取小区',1,NULL,1,122,3),(158,'get_xuequ','异步获取学区',1,NULL,1,122,3),(159,'Baobiao','报表',1,NULL,1,14,2),(160,'index','报表页',1,NULL,1,159,3),(161,'get_yuangong','异步获取员工',1,NULL,1,159,3),(162,'get_xiaoqu','异步获取小区',1,NULL,1,63,3),(163,'neirong2','客源内容2',1,NULL,1,63,3),(164,'Kyneirong','客源内容控制器',1,NULL,1,14,2),(165,'get_bianhao','客源带看获取房源编号',1,NULL,1,164,3),(166,'get_xiaoqu','资源异步获取小区',1,NULL,1,122,3),(167,'get_pianqu','资源异步获取片区',1,NULL,1,122,3),(168,'get_citys','客源异步获取片区',1,NULL,1,164,3),(169,'get_district','客源异步获取小区',1,NULL,1,164,3),(170,'get_xiaoqu','异步获取小区',1,NULL,1,164,3),(171,'fengpan','封盘',1,NULL,1,164,3),(172,'fengpanHandle','封盘表单处理',1,NULL,1,164,3),(173,'kaipan','开盘',1,NULL,1,164,3),(174,'kaipanHandle','开盘表单处理',1,NULL,1,164,3),(175,'xiaoqurr','小区内容页',1,NULL,1,122,3),(176,'xiugaixiaoqu','修改小区',1,NULL,1,122,3),(177,'xiugaixiaoquHandle','修改小区表单处理',1,NULL,1,122,3),(178,'editjw','片区编辑经纬度',1,NULL,1,122,3),(179,'editzb','小区编辑坐标',1,NULL,1,122,3),(180,'tzdtzb','小区内容调整坐标',1,NULL,1,122,3),(181,'tzdtzbHandle','小区内容调整坐标表单处理',1,NULL,1,122,3),(182,'get_pianqxsj','片区新数据',1,NULL,1,122,3),(183,'get_xiaoqxsj','小区新数据',1,NULL,1,122,3),(184,'get_xueqxsj','学区新数据',1,NULL,1,122,3),(185,'scxqtp','上传小区图片',1,NULL,1,122,3),(186,'ajax_upload','上传图片位置',1,NULL,1,122,3),(187,'get_xq_img','异步返回图片',1,NULL,1,122,3),(188,'xq_pic_del','异步删除图片',1,NULL,1,122,3),(190,'stopUser','禁用用户',1,NULL,1,16,3),(192,'startUser','启用用户',1,NULL,1,16,3),(196,'Chengjiao','成交',1,NULL,1,14,2),(198,'index','添加成交',1,NULL,1,196,3),(199,'chengjiaoHandle','添加成交表单处理',1,NULL,1,196,3),(200,'get_keyuan','添加页异步获取客源',1,NULL,1,196,3),(201,'cjlist','用户成交列表',1,NULL,1,196,3),(202,'neirong','成交内容页',1,NULL,1,196,3),(203,'addyongjin','添加佣金页',1,NULL,1,196,3),(204,'addyongjinHandle','添加佣金表单处理',1,NULL,1,196,3),(205,'addguohu','添加过户进度',1,NULL,1,196,3),(206,'addguohuHandle','添加过户表单处理',1,NULL,1,196,3),(207,'editguohu','编辑过户进度页',1,NULL,1,196,3),(208,'editguohuHandle','编辑过户进度表单处理',1,NULL,1,196,3),(209,'xxlb','报表详细列表',1,NULL,1,159,3);

#
# Source for table "jjrxt_peizhi"
#

CREATE TABLE `jjrxt_peizhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pzming` varchar(30) NOT NULL DEFAULT '',
  `zhushi` varchar(20) NOT NULL DEFAULT '',
  `lxid` smallint(6) NOT NULL DEFAULT '0',
  `lxming` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_peizhi"
#

INSERT INTO `jjrxt_peizhi` VALUES (1,'guoji','国籍',1,'中国'),(2,'minzu','民族',1,'汉'),(3,'zhuangtai','状态',1,'委托中'),(4,'zhuangtai','状态',2,'无效委托'),(5,'zhuangtai','状态',3,'其他成交'),(6,'zhuangtai','状态',4,'本司成交'),(7,'zhuangtai','状态',5,'暂停委托'),(8,'zhuangtai','状态',6,'重复房源'),(9,'biaoqian','标签',1,'免税'),(10,'biaoqian','标签',2,'独家'),(11,'biaoqian','标签',3,'钥匙'),(12,'biaoqian','标签',4,'学区房'),(13,'biaoqian','标签',5,'地铁房'),(14,'biaoqian','标签',6,'采光好'),(15,'biaoqian','标签',7,'环境好'),(16,'biaoqian','标签',8,'交通便利'),(17,'biaoqian','标签',9,'满二唯一'),(18,'biaoqian','标签',10,'优质房源'),(19,'biaoqian','标签',11,'配套设施齐全'),(20,'chaoxiang','朝向',1,'东'),(21,'chaoxiang','朝向',2,'南'),(22,'chaoxiang','朝向',3,'西'),(23,'chaoxiang','朝向',4,'北'),(24,'chaoxiang','朝向',5,'金角'),(25,'chaoxiang','朝向',6,'银角'),(26,'chaoxiang','朝向',7,'铜角'),(27,'chaoxiang','朝向',8,'铁角'),(28,'chaoxiang','朝向',9,'东西'),(29,'chaoxiang','朝向',10,'南北'),(30,'zhuangxiu','装修',1,'无装'),(31,'zhuangxiu','装修',2,'毛坯'),(32,'zhuangxiu','装修',3,'简装'),(33,'zhuangxiu','装修',4,'普装'),(34,'zhuangxiu','装修',5,'精装'),(35,'zhuangxiu','装修',6,'豪装'),(36,'peitao','配套',1,'无'),(37,'peitao','配套',2,'床'),(38,'peitao','配套',3,'衣柜'),(39,'peitao','配套',4,'书桌'),(40,'peitao','配套',5,'空调'),(41,'peitao','配套',6,'冰箱'),(42,'peitao','配套',7,'电视'),(43,'peitao','配套',8,'宽带'),(44,'peitao','配套',9,'WIFI'),(45,'peitao','配套',10,'灶具'),(46,'peitao','配套',11,'有线'),(47,'peitao','配套',12,'电话'),(48,'peitao','配套',13,'橱柜'),(49,'peitao','配套',14,'沙发'),(50,'peitao','配套',15,'挂空'),(51,'peitao','配套',16,'柜空'),(52,'peitao','配套',17,'窗空'),(53,'peitao','配套',18,'封阳'),(54,'peitao','配套',19,'电梯'),(55,'peitao','配套',20,'洗衣机'),(56,'peitao','配套',21,'油烟机'),(57,'peitao','配套',22,'热水器'),(58,'peitao','配套',23,'管道气'),(59,'peitao','配套',24,'煤气罐'),(60,'peitao','配套',25,'电淋浴'),(61,'peitao','配套',26,'燃气淋浴'),(62,'peitao','配套',27,'太阳能淋浴'),(63,'xianzhuang','现状',1,'空关'),(64,'xianzhuang','现状',2,'住内'),(65,'xianzhuang','现状',3,'出租'),(66,'laiyuan','来源',1,'58'),(67,'laiyuan','来源',2,'赶集'),(68,'laiyuan','来源',3,'上门'),(69,'laiyuan','来源',4,'电话'),(70,'laiyuan','来源',5,'陌拜'),(71,'laiyuan','来源',6,'驻守'),(72,'laiyuan','来源',7,'搜房'),(73,'laiyuan','来源',8,'派单'),(74,'laiyuan','来源',9,'微博'),(75,'laiyuan','来源',10,'微店'),(76,'laiyuan','来源',11,'网络'),(77,'laiyuan','来源',12,'老客户'),(78,'laiyuan','来源',13,'窗体广告'),(79,'laiyuan','来源',14,'新浪乐居'),(80,'laiyuan','来源',15,'公司网站'),(81,'laiyuan','来源',16,'朋友介绍'),(82,'laiyuan','来源',17,'微信公众号'),(83,'laiyuan','来源',18,'已成交客户推荐'),(84,'laiyuan','来源',19,'未成交客户推荐'),(85,'laiyuan','来源',20,'其它'),(86,'fukuan','付款',1,'全款'),(87,'fukuan','付款',2,'贷款'),(88,'fukuan','付款',3,'年付'),(89,'fukuan','付款',4,'面议'),(90,'fukuan','付款',5,'季度付'),(91,'fukuan','付款',6,'半年付'),(92,'fukuan','付款',7,'押一付三'),(93,'yongtu','用途',1,'住宅'),(94,'yongtu','用途',2,'别墅'),(95,'yongtu','用途',3,'商铺'),(96,'yongtu','用途',4,'仓库'),(97,'yongtu','用途',5,'厂房'),(98,'yongtu','用途',6,'土地'),(99,'yongtu','用途',7,'车库'),(100,'yongtu','用途',8,'写字楼'),(101,'leixing','交易类型',1,'出售'),(102,'leixing','交易类型',2,'出租'),(103,'leixing','交易类型',3,'租售'),(104,'yezhulx','业主类型',1,'先生'),(105,'yezhulx','业主类型',2,'女士'),(106,'yezhulx','业主类型',3,'公司'),(107,'yezhugx','业主关系',1,'本人'),(108,'yezhugx','业主关系',2,'配偶'),(109,'yezhugx','业主关系',3,'亲戚'),(110,'yezhugx','业主关系',4,'朋友'),(111,'yezhugx','业主关系',5,'授权委托人'),(112,'yezhugx','业主关系',6,'其他'),(113,'zujialx','租价类型',1,'元/日'),(114,'zujialx','租价类型',2,'元/月'),(115,'zujialx','租价类型',3,'元/季度'),(116,'zujialx','租价类型',4,'元/半年'),(117,'zujialx','租价类型',5,'元/年'),(118,'zujialx','租价类型',6,'元/平米/天'),(119,'zujialx','租价类型',7,'热毯'),(120,'fwleixing','房屋类型',1,'低层'),(121,'fwleixing','房屋类型',2,'多层'),(122,'fwleixing','房屋类型',3,'小高层'),(123,'fwleixing','房屋类型',4,'高层'),(124,'fwleixing','房屋类型',5,'洋房'),(125,'fwleixing','房屋类型',6,'跃层式住宅'),(126,'fwleixing','房屋类型',7,'复式住宅'),(127,'fwleixing','房屋类型',8,'公寓式住宅'),(128,'fwleixing','房屋类型',9,'普通住宅'),(129,'fwleixing','房屋类型',10,'高档住宅'),(130,'fwleixing','房屋类型',11,'LOFT'),(131,'fwleixing','房屋类型',12,'别墅'),(132,'fwleixing','房屋类型',13,'老式里弄'),(133,'fwleixing','房屋类型',14,'老式花园住宅'),(134,'fwleixing','房屋类型',15,'老式公寓'),(135,'fwleixing','房屋类型',16,'平房'),(136,'fwleixing','房屋类型',17,'其他'),(137,'jiegou','建筑结构',1,'砖木结构'),(138,'jiegou','建筑结构',2,'砖混结构'),(139,'jiegou','建筑结构',3,'钢筋混凝土'),(140,'jiegou','建筑结构',4,'钢结构'),(141,'chanquan','产权性质',1,'商品房'),(142,'chanquan','产权性质',2,'公产房'),(143,'chanquan','产权性质',3,'私产房'),(144,'chanquan','产权性质',4,'房改房'),(145,'chanquan','产权性质',5,'经适房'),(146,'chanquan','产权性质',6,'企业房'),(147,'chanquan','产权性质',7,'军产房'),(148,'chanquan','产权性质',8,'安置房'),(149,'chanquan','产权性质',9,'小产房'),(150,'chanquan','产权性质',10,'商铺'),(151,'cqnianxian','产权年限',1,'40'),(152,'cqnianxian','产权年限',2,'50'),(153,'cqnianxian','产权年限',3,'70'),(154,'fyshuifei','房源税费',1,'契税'),(155,'fyshuifei','房源税费',2,'营业税'),(156,'fyshuifei','房源税费',3,'印花税'),(157,'fyshuifei','房源税费',4,'城建税'),(158,'fyshuifei','房源税费',5,'个人所得税'),(159,'fyshuifei','房源税费',6,'土地增值税'),(160,'fyshuifei','房源税费',7,'教育附加税'),(161,'fyshuifei','房源税费',8,'地方附加税'),(162,'kanfangfs','看房方式',1,'提前预约'),(163,'kanfangfs','看房方式',2,'直接带看'),(164,'kanfangfs','看房方式',3,'借钥匙带看'),(165,'genjinfs','跟进方式',1,'短信'),(166,'genjinfs','跟进方式',2,'接待'),(167,'genjinfs','跟进方式',3,'调查'),(168,'genjinfs','跟进方式',4,'电话'),(169,'genjinfs','跟进方式',5,'拜访'),(170,'genjinfs','跟进方式',6,'其他'),(171,'genjinfs','跟进方式',7,'一手带看'),(172,'genjinfs','跟进方式',8,'无法接通'),(173,'genjinfs','跟进方式',9,'客服部回访'),(174,'gtjieduan','沟通阶段',1,'客户接待'),(175,'gtjieduan','沟通阶段',2,'信息匹配'),(176,'gtjieduan','沟通阶段',3,'首次带看'),(177,'gtjieduan','沟通阶段',4,'二次带看'),(178,'gtjieduan','沟通阶段',5,'守价阶段'),(179,'gtjieduan','沟通阶段',6,'杀价阶段'),(180,'gtjieduan','沟通阶段',7,'逼定阶段'),(181,'gtjieduan','沟通阶段',8,'签订合同'),(182,'xflinian','消费理念',1,'生存型消费'),(183,'xflinian','消费理念',2,'发展型消费'),(184,'xflinian','消费理念',3,'享受型消费'),(185,'kydengji','客源等级',1,'A类客源'),(186,'kydengji','客源等级',2,'B类客源'),(187,'kydengji','客源等级',3,'C类客源'),(188,'kydengji','客源等级',4,'D类客源'),(189,'jtgongju','交通工具',1,'自行车'),(190,'jtgongju','交通工具',2,'电动车'),(191,'jtgongju','交通工具',3,'汽车'),(192,'jtgongju','交通工具',4,'步行'),(193,'mmzl','买卖租赁',1,'买卖客源'),(194,'mmzl','买卖租赁',2,'租赁客源'),(195,'jubaolx','举报类型',1,'照片错误'),(196,'jubaolx','举报类型',2,'信息失效'),(197,'jubaolx','举报类型',3,'重复信息'),(198,'jubaolx','举报类型',4,'地址错误'),(199,'jubaolx','举报类型',5,'电话错误'),(200,'jubaolx','举报类型',6,'非法开盘'),(201,'jubaolx','举报类型',7,'与事实不符'),(202,'ggleibie','公告类别',1,'通知'),(203,'ggleibie','公告类别',2,'广告'),(204,'ggleibie','公告类别',3,'使用帮助'),(205,'ggleibie','公告类别',4,'业务培训'),(206,'ggleibie','公告类别',5,'公司文件'),(207,'ggleibie','公告类别',6,'公司公告'),(208,'wuyelx','物业类型',1,'居住物业'),(209,'wuyelx','物业类型',2,'商业物业'),(210,'wuyelx','物业类型',3,'工业物业'),(211,'wuyelx','物业类型',4,'其他用途物业'),(212,'khzhuangtai','客户状态',0,'公客'),(213,'khzhuangtai','客户状态',1,'私客'),(214,'khzhuangtai','客户状态',2,'成交'),(215,'khzhuangtai','客户状态',3,'他人成交'),(216,'khzhuangtai','客户状态',4,'暂缓委托'),(217,'yongjinxm','佣金项目',1,'中介费');

#
# Source for table "jjrxt_photo"
#

CREATE TABLE `jjrxt_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `gongsiid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `fybh` varchar(20) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_photo"
#

INSERT INTO `jjrxt_photo` VALUES (1,'594872724131e.jpg',10000,28,'10009',1497920114),(2,'59487273426e0.jpg',10000,28,'10009',1497920115),(3,'5948727420fe9.jpg',10000,28,'10009',1497920116),(4,'5948727518380.jpg',10000,28,'10009',1497920117),(5,'59487276252c4.jpg',10000,28,'10009',1497920118),(6,'594872772b88f.jpg',10000,28,'10009',1497920119),(7,'594872787836a.jpg',10000,28,'10009',1497920120),(8,'5948727984ade.jpg',10000,28,'10009',1497920121),(9,'5948727a539e4.jpg',10000,28,'10009',1497920122),(10,'5948727bd0652.jpg',10000,28,'10009',1497920123),(11,'594873e473787.jpg',10000,28,'10008',1497920484),(12,'594873e579582.jpg',10000,28,'10008',1497920485),(13,'594873e6bd3bb.jpg',10000,28,'10008',1497920486),(14,'594873e7e73de.jpg',10000,28,'10008',1497920488),(15,'594873e91d5a9.jpg',10000,28,'10008',1497920489),(16,'59487479e8ff2.jpg',10000,25,'10007',1497920634),(17,'5948747b04406.jpg',10000,25,'10007',1497920635),(18,'5948747bcbb9d.jpg',10000,25,'10007',1497920635),(19,'5948747cd8ae1.jpg',10000,25,'10007',1497920636),(20,'5948747daacb0.jpg',10000,25,'10007',1497920637),(21,'5948747eb4543.jpg',10000,25,'10007',1497920638),(22,'5948747fc08cf.jpg',10000,25,'10007',1497920639),(23,'594874808b184.jpg',10000,25,'10007',1497920640),(24,'59487502e8d88.jpg',10000,24,'10006',1497920771),(25,'59487503b2a84.jpg',10000,24,'10006',1497920771),(26,'594875045c7c1.jpg',10000,24,'10006',1497920772),(27,'594875056d586.jpg',10000,24,'10006',1497920773),(28,'594875060edf1.jpg',10000,24,'10006',1497920774),(29,'59487507153bc.jpg',10000,24,'10006',1497920775),(30,'5948792953990.jpg',10000,12,'10005',1497921833),(31,'5948792a46ea6.jpg',10000,12,'10005',1497921834),(32,'5948792b2d0c9.jpg',10000,12,'10005',1497921835),(33,'5948792c4bd39.jpg',10000,12,'10005',1497921836),(34,'5948792d30bd4.jpg',10000,12,'10005',1497921837),(35,'5948792e2eccd.jpg',10000,12,'10005',1497921838),(36,'5948792f517be.jpg',10000,12,'10005',1497921839),(37,'59487930304b0.jpg',10000,12,'10005',1497921840),(38,'594879f9488fe.jpg',10000,10,'10004',1497922041),(39,'594879fa6bbbf.jpg',10000,10,'10004',1497922042),(40,'594879fb69cb8.jpg',10000,10,'10004',1497922043),(41,'594879fc93cdb.jpg',10000,10,'10004',1497922044),(42,'594879fd96bf5.jpg',10000,10,'10004',1497922045),(43,'594879fe91a25.jpg',10000,10,'10004',1497922046),(44,'594879ffd0a3d.jpg',10000,10,'10004',1497922047),(45,'59487a00b2227.jpg',10000,10,'10004',1497922048),(46,'59487a5739da4.jpg',10000,9,'10003',1497922135),(47,'59487a585ad3d.jpg',10000,9,'10003',1497922136),(48,'59487a59528a4.jpg',10000,9,'10003',1497922137),(49,'59487a5a8f594.jpg',10000,9,'10003',1497922138),(50,'59487aad7dd11.jpg',10000,8,'10002',1497922221),(51,'59487aae7dd4b.jpg',10000,8,'10002',1497922222),(52,'59487aaf8a0d7.jpg',10000,8,'10002',1497922223),(53,'59487ab0977eb.jpg',10000,8,'10002',1497922224),(54,'59487b3a29ecc.jpg',10000,8,'10001',1497922362),(55,'59487b3b229d4.jpg',10000,8,'10001',1497922363),(56,'59487b3c35ac1.jpg',10000,8,'10001',1497922364),(57,'59487b3d87f76.jpg',10000,8,'10001',1497922365),(58,'59487b3e77223.jpg',10000,8,'10001',1497922366),(59,'59487b3f7dfbe.jpg',10000,8,'10001',1497922367),(60,'59487b40b377b.jpg',10000,8,'10001',1497922368),(61,'59487b9bee05e.jpg',10000,7,'10000',1497922460),(62,'59487b9cadd30.jpg',10000,7,'10000',1497922460),(63,'59487b9da356f.jpg',10000,7,'10000',1497922461),(64,'59487b9eba0f5.jpg',10000,7,'10000',1497922462),(65,'59487b9fa978b.jpg',10000,7,'10000',1497922463),(66,'59487ba0ac2bd.jpg',10000,7,'10000',1497922464),(67,'59487ba19fbbb.jpg',10000,7,'10000',1497922465),(68,'59487ba23ba4d.jpg',10000,7,'10000',1497922466),(69,'59487ba3164d5.jpg',10000,7,'10000',1497922467);

#
# Source for table "jjrxt_pianqu"
#

CREATE TABLE `jjrxt_pianqu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pianqum` varchar(50) DEFAULT NULL,
  `pinyinjs` varchar(255) DEFAULT NULL,
  `ssxzq` int(11) DEFAULT NULL,
  `jingdu` varchar(50) DEFAULT NULL,
  `weidu` varchar(50) DEFAULT NULL,
  `shijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_pianqu"
#

INSERT INTO `jjrxt_pianqu` VALUES (1,'崇文','chongwen',1,'116.426921','39.903043',NULL),(2,'宣武','xuanwu',1,'116.381338','39.902239',NULL),(3,'大兴','daxing',1,'116.349738','39.731018',NULL),(4,'延庆','yanqing',1,'115.983517','40.461319',NULL),(5,'石景山','shijingshan',1,'116.233605','39.909242',NULL),(6,'塘沽','tanggu',2,'117.646156','39.032413',NULL),(7,'和平','heping',2,'117.221724','39.122712',NULL),(8,'南开','nankai',2,'117.155321','39.143534',NULL),(9,'晋中','jinzhong',3,'112.760812','37.691843',NULL),(10,'太原','taiyuan',3,'112.562234','37.875974',NULL),(11,'朔州','shuozhou',3,'112.439621','39.336104',NULL),(12,'松江','songjiang',4,'121.237335','31.038132',NULL),(13,'嘉定','jiading',4,'121.272693','31.379462',NULL),(14,'黄浦','huangpu',4,'121.491592','31.236058',NULL),(15,'奉贤','fengxian',4,'121.490586','30.918606',NULL),(16,'崇明','chongming',4,'121.403281','31.62769',NULL),(17,'苏州','suzhou',5,'120.595937','31.298642',NULL),(18,'杭州','hangzhou',6,'120.163418','30.277065',NULL);

#
# Source for table "jjrxt_qtjjr"
#

CREATE TABLE `jjrxt_qtjjr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xm` varchar(20) DEFAULT NULL,
  `sjh` char(11) DEFAULT NULL,
  `gs` varchar(20) DEFAULT NULL,
  `tjsj` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_qtjjr"
#


#
# Source for table "jjrxt_role"
#

CREATE TABLE `jjrxt_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `gongsiid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_role"
#

INSERT INTO `jjrxt_role` VALUES (1,'admin',NULL,1,'管理员',10000),(2,'zongjingli',NULL,1,'总经理',10000),(3,'quyujingli',NULL,1,'区域经理',10000),(4,'caiwubu',NULL,1,'财务部',10000),(5,'xinxibu',NULL,1,'信息部',10000),(6,'xuanchuanyxbu',NULL,1,'宣传营销部',10000),(7,'Manager',NULL,1,'店长',10000),(8,'jingjiren',NULL,1,'经纪人',10000),(9,'infouser',NULL,1,'信息管理员',10000),(10,'chankanfy',NULL,1,'广告员',10000),(11,'jiamengjingjiren',NULL,1,'加盟经纪人',10000);

#
# Source for table "jjrxt_role_user"
#

CREATE TABLE `jjrxt_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_role_user"
#

INSERT INTO `jjrxt_role_user` VALUES (8,'4'),(9,'5'),(10,'6'),(10,'34'),(9,'33'),(8,'32'),(7,'31'),(10,'30'),(9,'29'),(8,'28'),(7,'27'),(10,'26'),(9,'25'),(8,'24'),(7,'23'),(10,'22'),(9,'21'),(8,'20'),(7,'19'),(10,'18'),(9,'17'),(8,'16'),(7,'15'),(10,'14'),(9,'13'),(8,'12'),(7,'11'),(10,'10'),(9,'9'),(8,'8'),(7,'7'),(7,'35'),(8,'36'),(9,'37'),(10,'38'),(7,'39'),(8,'40'),(9,'41'),(10,'42'),(7,'43'),(8,'44'),(9,'45'),(10,'46'),(7,'47'),(8,'48'),(9,'49'),(10,'50'),(7,'51'),(8,'52'),(9,'53'),(10,'54'),(7,'55'),(8,'56'),(9,'57'),(10,'58'),(7,'59'),(8,'60'),(9,'61'),(10,'62'),(7,'63'),(8,'64'),(9,'65'),(10,'66'),(7,'67'),(8,'68'),(9,'69'),(10,'70'),(7,'71'),(8,'72'),(9,'73'),(10,'74'),(10,'78'),(9,'77'),(8,'76'),(7,'75'),(7,'79'),(8,'80'),(9,'81'),(10,'82'),(7,'83'),(8,'84'),(9,'85'),(10,'86'),(7,'87'),(8,'88'),(9,'89'),(10,'90'),(7,'3'),(1,'2');

#
# Source for table "jjrxt_shoucang"
#

CREATE TABLE `jjrxt_shoucang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `fyid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_shoucang"
#


#
# Source for table "jjrxt_xianzhi"
#

CREATE TABLE `jjrxt_xianzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fyid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `time` varchar(11) DEFAULT NULL,
  `shijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_xianzhi"
#


#
# Source for table "jjrxt_xiaoqu"
#

CREATE TABLE `jjrxt_xiaoqu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `xiaoqum` varchar(50) DEFAULT NULL,
  `pinyinjs` varchar(50) DEFAULT NULL,
  `sspianqu` int(11) DEFAULT NULL,
  `ssxzq` int(11) DEFAULT NULL,
  `csjunjia` int(11) DEFAULT NULL,
  `zdguize` varchar(50) DEFAULT NULL,
  `dituzb` varchar(50) DEFAULT NULL,
  `xiaoqudz` varchar(50) DEFAULT NULL,
  `ssxuexiao` varchar(255) DEFAULT NULL,
  `shijian` int(11) DEFAULT NULL,
  `fangwuzts` int(11) DEFAULT NULL,
  `loudongzs` int(11) DEFAULT NULL,
  `jianzaond` int(11) DEFAULT NULL,
  `chanquan` int(11) DEFAULT NULL,
  `rongjilv` int(11) DEFAULT NULL,
  `lvhualv` int(11) DEFAULT NULL,
  `zhuzhailx` varchar(255) DEFAULT NULL,
  `zhandimj` int(11) DEFAULT NULL,
  `jianzhumj` int(11) DEFAULT NULL,
  `ranqi` varchar(255) DEFAULT NULL,
  `diantifuwu` varchar(255) DEFAULT NULL,
  `gongshui` varchar(255) DEFAULT NULL,
  `gongnuan` varchar(255) DEFAULT NULL,
  `gongdian` varchar(255) DEFAULT NULL,
  `dshangtcwsl` int(11) DEFAULT NULL,
  `dshangtcwzl` int(11) DEFAULT NULL,
  `dshangtcwsj` int(11) DEFAULT NULL,
  `dxiatcwsl` int(11) DEFAULT NULL,
  `dxiatcwzl` int(11) DEFAULT NULL,
  `dxiatcwsj` int(11) DEFAULT NULL,
  `jiedao` varchar(255) DEFAULT NULL,
  `wuyefei` decimal(10,2) DEFAULT NULL,
  `wuyelx` varchar(255) DEFAULT NULL,
  `wuyedh` varchar(20) DEFAULT NULL,
  `wuyemc` varchar(255) DEFAULT NULL,
  `wuyedz` varchar(255) DEFAULT NULL,
  `jianjie` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_xiaoqu"
#

INSERT INTO `jjrxt_xiaoqu` VALUES (1,10000,'光明楼','guangminglou',1,1,6000,NULL,'116.444758,39.890455','东城光明桥西200米路北','光明小学；工业大学；',NULL,65,35,1988,NULL,56,30,'9',10000,1785,'市政','所有','市政','集中供暖','市政',60,9000,600,81,12150,810,'幸福大街',892.50,'1','0107856785','',NULL,'光明楼物业类型是住宅，建筑类别是板楼'),(2,10000,'龙潭湖','longtanhu',1,1,3000,NULL,'116.444635,39.887515',NULL,NULL,NULL,26,12,2014,NULL,41,59,NULL,5600,2800,'21','26','26','21','26',61,366,610,82,492,820,NULL,1400.00,'1','0107356757','',NULL,NULL),(3,10000,'永定门','yongdingmen',1,1,5000,NULL,'116.426526,39.903143',NULL,NULL,NULL,86,53,2004,NULL,42,58,NULL,5800,2900,'76','86','86','75','86',62,372,620,83,498,830,NULL,1450.00,'1','0107574656','',NULL,NULL),(4,10000,'宣武门','xuanwumen',2,1,4000,NULL,'116.380999,39.905894',NULL,NULL,NULL,68,34,2010,NULL,43,57,NULL,6000,3000,'54','68','68','56','68',63,378,630,84,504,940,NULL,1500.00,'1','0106475637','',NULL,NULL),(5,10000,'大观园','daguanyuan',2,1,7000,NULL,'116.36483,39.901085',NULL,NULL,NULL,25,12,2010,NULL,44,56,NULL,6200,3100,'13','25','25','22','25',64,384,640,85,510,850,NULL,1550.00,'1','0107376566','',NULL,NULL),(6,10000,'陶然亭','taoranting',2,1,9000,NULL,'116.389982,39.879072',NULL,NULL,NULL,67,23,2010,NULL,45,55,NULL,6400,3200,'56','67','67','66','67',65,390,650,86,516,860,NULL,1600.00,'1','0107547265','',NULL,NULL),(7,10000,'亦庄','yizhuang',3,1,1000,NULL,'116.435401,39.763749',NULL,NULL,NULL,34,23,2010,NULL,46,54,NULL,6600,3300,'32','34','34','32','34',66,396,660,87,522,870,NULL,1650.00,'1','0105326545','',NULL,NULL),(8,10000,'黄村','huangcun',3,1,2000,NULL,'116.341115,39.752212',NULL,NULL,NULL,67,54,2010,NULL,47,53,NULL,6800,3400,'46','67','67','67','67',67,402,670,88,528,880,NULL,1700.00,'1','0105643635','',NULL,NULL),(9,10000,'西红门','xihongmen',3,1,8000,NULL,'116.355056,39.795523',NULL,NULL,NULL,63,35,2010,NULL,48,52,NULL,7000,3500,'56','63','63','56','63',68,408,680,89,534,890,NULL,1750.00,'1','0105646436','',NULL,NULL),(10,10000,'八达岭','badaling',4,1,2222,NULL,'115.984667,40.365956',NULL,NULL,NULL,63,23,2010,NULL,49,51,NULL,7200,3600,'54','63','63','54','63',69,414,690,90,540,900,NULL,1800.00,'1','0106547466','',NULL,NULL),(11,10000,'大榆树','dayushu',4,1,3333,NULL,'116.036409,40.441115',NULL,NULL,NULL,85,34,2010,NULL,50,50,NULL,7400,3700,'78','85','85','78','85',70,420,700,91,546,910,NULL,1850.00,'1','0105543536','',NULL,NULL),(12,10000,'康庄','kangzhuang',4,1,1111,NULL,'115.906479,40.387502',NULL,NULL,NULL,27,13,2010,NULL,49,51,NULL,7600,3800,'21','27','27','21','27',71,426,710,92,552,920,NULL,1900.00,'1','0106763653','',NULL,NULL),(13,10000,'石景山','shijingshan',5,1,5555,NULL,'116.229006,39.911068',NULL,NULL,NULL,54,36,2010,NULL,48,52,NULL,7800,3900,'51','54','54','51','54',72,432,720,93,558,930,NULL,1950.00,'1','0105752353','',NULL,NULL),(14,10000,'老古城','laogucheng',5,1,4444,NULL,'116.195805,39.916713',NULL,NULL,NULL,46,34,2010,NULL,47,53,NULL,8000,4000,'23','46','46','24','46',73,438,730,94,564,940,NULL,2000.00,'1','0105634535','',NULL,NULL),(15,10000,'八宝山','babaoshan',5,1,8888,NULL,'116.247978,39.915108',NULL,NULL,NULL,64,35,2010,NULL,46,54,NULL,8200,4100,'24','64','64','24','64',74,444,740,95,570,950,NULL,2050.00,'1','0102456435','',NULL,NULL),(16,10000,'三魁路','sankuilu',6,2,7777,NULL,'117.709684,39.049507',NULL,NULL,NULL,22,12,2010,NULL,45,55,NULL,8400,4200,'12','22','22','12','22',75,450,750,96,576,960,NULL,2100.00,'1','0224636573','',NULL,NULL),(17,10000,'向阳街','xiangyangjie',6,2,9999,NULL,'117.689131,39.024621',NULL,NULL,NULL,77,43,2010,NULL,44,56,NULL,8600,4300,'66','77','77','66','77',74,444,740,95,570,950,NULL,2150.00,'1','0228568747','',NULL,NULL),(18,10000,'北塘','beitang',6,2,6666,NULL,'117.726644,39.103844',NULL,NULL,NULL,57,23,2010,NULL,43,57,NULL,8800,4400,'54','57','57','54','57',73,438,730,94,564,940,NULL,2200.00,'1','0226852367','',NULL,NULL),(19,10000,'南营门','nanyingmen',7,2,1234,NULL,'117.223179,39.116603',NULL,NULL,NULL,37,23,2010,NULL,42,58,NULL,9000,4500,'31','37','37','32','37',72,432,720,93,558,930,NULL,2250.00,'1','0228563879','',NULL,NULL),(20,10000,'体育馆街','tiyuguanjie',7,2,9876,NULL,'117.200165,39.114763',NULL,NULL,NULL,23,12,2010,NULL,41,59,NULL,9200,4600,'12','23','23','12','23',71,426,710,92,552,920,NULL,2300.00,'1','0227574846','',NULL,NULL),(21,10000,'南市','nanshi',7,2,2345,NULL,'117.190679,39.138777',NULL,NULL,NULL,85,75,2010,NULL,40,60,NULL,9400,4700,'78','85','85','77','85',70,420,700,91,546,910,NULL,2350.00,'1','0226754638','',NULL,NULL),(22,10000,'嘉陵道','jialingdao',8,2,8765,NULL,'117.148566,39.13262',NULL,NULL,NULL,89,35,2010,NULL,41,59,NULL,9600,4800,'65','89','89','65','89',69,414,690,90,540,900,NULL,2400.00,'1','0225463486','',NULL,NULL),(23,10000,'华苑','huayuan',8,2,3456,NULL,'117.14023,39.145297',NULL,NULL,NULL,53,23,2010,NULL,42,58,NULL,9400,4700,'26','53','53','24','53',68,408,680,89,534,890,NULL,2350.00,'1','0227874585','',NULL,NULL),(24,10000,'八里台','balitai',8,2,7654,NULL,'117.190032,39.116582',NULL,NULL,NULL,85,54,2000,NULL,43,57,NULL,9200,4600,'34','85','85','23','85',67,402,670,88,528,880,NULL,2300.00,'1','0225475667','',NULL,NULL),(25,10000,'开发区','kaifaqu',9,3,4567,NULL,'112.717877,37.703278',NULL,NULL,NULL,34,24,2010,NULL,44,56,NULL,9000,4500,'32','34','34','23','34',66,396,660,87,522,870,NULL,2250.00,'1','03504575767','',NULL,NULL),(26,10000,'祁县','qixian',9,3,6543,NULL,'112.344286,37.361926',NULL,NULL,NULL,97,23,2010,NULL,45,55,NULL,8800,4400,'86','97','97','86','97',65,390,650,86,516,860,NULL,2200.00,'1','03505365776','',NULL,NULL),(27,10000,'寿阳','shouyang',9,3,5678,NULL,'113.186394,37.899486',NULL,NULL,NULL,34,32,2010,NULL,46,54,NULL,8600,4300,'15','34','34','15','34',64,384,640,85,510,850,NULL,2150.00,'1','03503465787','',NULL,NULL),(28,10000,'杏花岭','xinghualing',10,3,5432,NULL,'112.577757,37.901034',NULL,NULL,NULL,83,34,2010,NULL,47,53,NULL,8400,4200,'68','83','83','65','83',63,378,630,84,504,840,NULL,2100.00,'1','03527385648','',NULL,NULL),(29,10000,'万柏林','wanbailin',10,3,6789,NULL,'112.52314,37.864351',NULL,NULL,NULL,86,76,2010,NULL,48,52,NULL,8200,4100,'67','86','86','67','86',62,372,620,83,498,830,NULL,2050.00,'1','03517856348','',NULL,NULL),(30,10000,'尖草坪','jiancaoping',10,3,4321,NULL,'112.494394,37.946009',NULL,NULL,NULL,24,14,2010,NULL,49,51,NULL,8000,4000,'12','24','24','12','24',61,366,610,82,492,820,NULL,2000.00,'1','03519837495','',NULL,NULL),(31,10000,'朔城','shuocheng',11,3,1122,NULL,'112.453994,39.321927',NULL,NULL,NULL,87,13,2010,NULL,50,50,NULL,7800,3900,'67','87','87','52','87',60,360,600,81,486,810,NULL,1950.00,'1','03496784564','',NULL,NULL),(32,10000,'山阴','shanyin',11,3,9988,NULL,'112.416337,39.331416',NULL,NULL,NULL,45,32,2010,NULL,49,51,NULL,7600,3800,'24','45','45','24','45',61,366,610,82,492,820,NULL,1900.00,'1','03497456843','',NULL,NULL),(33,10000,'怀仁','huairen',11,3,2233,NULL,'112.494598,39.336076',NULL,NULL,NULL,67,16,2010,NULL,48,52,NULL,7400,3700,'35','67','67','35','67',62,372,620,83,498,830,NULL,1850.00,'1','03497825825','',NULL,NULL),(34,10000,'洞泾','dongjing',12,4,8877,NULL,'121.241072,31.090207',NULL,NULL,NULL,24,15,2010,NULL,47,53,NULL,7200,3600,'12','24','24','14','24',63,378,630,84,504,840,NULL,1800.00,'1','0216546745','',NULL,NULL),(35,10000,'九亭','jiuting',12,4,3344,NULL,'121.335071,31.134605',NULL,NULL,NULL,68,43,2010,NULL,46,54,NULL,7000,3500,'22','68','68','23','68',64,384,640,85,510,850,NULL,1750.00,'1','0214575645','',NULL,NULL),(36,10000,'小昆山','xiaokunshan',12,4,7766,NULL,'121.147936,31.03725',NULL,NULL,NULL,57,26,2010,NULL,45,55,NULL,6800,3400,'34','57','57','23','57',65,390,650,86,516,860,NULL,1700.00,'1','0217675465','',NULL,NULL),(37,10000,'安亭','anting',13,4,4455,NULL,'121.296408,31.432164',NULL,NULL,NULL,35,11,2010,NULL,44,56,NULL,6600,3300,'12','35','35','12','35',66,396,660,87,522,870,NULL,1650.00,'1','0215465465','',NULL,NULL),(38,10000,'嘉定新城','jiadingxincheng',13,4,6655,NULL,'121.223825,31.379708',NULL,NULL,NULL,86,67,2010,NULL,43,57,NULL,6400,3200,'35','86','86','14','86',67,402,670,88,528,880,NULL,1600.00,'1','0217568547','',NULL,NULL),(39,10000,'江桥新城','jiangqiaoxincheng',13,4,5566,NULL,'121.27068,31.289768',NULL,NULL,NULL,45,44,2010,NULL,42,58,NULL,6200,3100,'35','45','45','12','45',68,408,680,89,534,890,NULL,1550.00,'1','0214675477','',NULL,NULL),(40,10000,'蓬莱公园','penglaigongyuan',14,4,5544,NULL,'121.479518,31.237772',NULL,NULL,NULL,66,55,2010,NULL,41,59,NULL,6000,3000,'66','66','66','66','66',69,414,690,90,540,900,NULL,1500.00,'1','0214689545','',NULL,NULL),(41,10000,'人民广场','renminguangchang',14,4,6677,NULL,'121.482034,31.238744',NULL,NULL,NULL,35,23,2010,NULL,40,60,NULL,5800,2900,'35','35','35','35','35',70,420,700,91,546,910,NULL,1450.00,'1','0217563547','',NULL,NULL),(42,10000,'豫园','yuyuan',14,4,4433,NULL,'121.493819,31.233989',NULL,NULL,NULL,67,26,2010,NULL,41,59,NULL,5600,2800,'67','67','67','68','67',71,426,710,92,552,920,NULL,1400.00,'1','0216487563','',NULL,NULL),(43,10000,'奉城','fengcheng',15,4,7788,NULL,'121.473194,30.911139',NULL,NULL,NULL,34,33,2010,NULL,42,58,NULL,5400,2700,'23','34','34','24','34',72,432,720,93,558,930,NULL,1350.00,'1','0216745857','',NULL,NULL),(44,10000,'海湾','haiwan',15,4,3322,NULL,'121.553826,30.8658',NULL,NULL,NULL,67,55,2010,NULL,43,57,NULL,5600,2800,'54','67','67','55','67',73,438,730,94,564,940,NULL,1400.00,'1','0218645537','',NULL,NULL),(45,10000,'南桥','nanqiao',15,4,8899,NULL,'121.460546,30.925979',NULL,NULL,NULL,34,23,2010,NULL,44,56,NULL,5800,2900,'24','34','34','24','34',74,444,740,95,570,950,NULL,1450.00,'1','0215853769','',NULL,NULL),(46,10000,'堡镇','baozhen',16,4,2211,NULL,'121.623966,31.543327',NULL,NULL,NULL,68,33,2010,NULL,45,55,NULL,6000,3000,'53','68','68','53','68',75,450,750,96,576,960,NULL,1500.00,'1','0218346695','',NULL,NULL),(47,10000,'崇明新城','chongmingxincheng',16,4,1928,NULL,'121.403486,31.62878',NULL,NULL,NULL,54,22,2010,NULL,46,54,NULL,6200,3100,'45','54','54','46','54',74,444,740,95,570,950,NULL,1550.00,'1','0216734867','',NULL,NULL),(48,10000,'长兴岛','changxingdao',16,4,2837,NULL,'121.470571,31.637204',NULL,NULL,NULL,77,44,2010,NULL,47,53,NULL,6400,3200,'57','77','77','55','77',73,438,730,94,564,940,NULL,1600.00,'1','0213545764','',NULL,NULL),(49,10000,'平江','pingjiang',17,5,3746,NULL,'120.616922,31.335045',NULL,NULL,NULL,64,33,2012,NULL,48,52,NULL,20000,10000,'35','64','64','35','64',72,432,720,93,558,930,NULL,5000.00,'1','05205746524','',NULL,NULL),(50,10000,'园区','yuanqu',17,5,4655,NULL,'120.59335,31.303579',NULL,NULL,NULL,35,23,2014,NULL,49,51,NULL,12000,6000,'24','35','35','24','35',71,426,710,92,552,920,NULL,3000.00,'1','05205436455','',NULL,NULL),(51,10000,'萧山','xiaoshan',18,6,2333,NULL,'120.274376,30.186701',NULL,NULL,NULL,76,43,2012,NULL,50,50,NULL,15000,7500,'56','76','76','56','76',70,420,700,91,546,910,NULL,3750.00,'1','05717456577','',NULL,NULL),(52,10000,'拱墅','gongshu',18,6,5222,'','120.151344,30.32446','杭州市中北部','浙江大学城市学院；浙江树人大学；',NULL,65,56,2012,NULL,49,51,'9,12',10000,5000,'市政','所有','市政','统一供暖','市政',69,10350,690,90,13500,900,'拱宸桥街道',2500.00,'1','05719764868','',NULL,'拱墅区 ，位于京杭大运河的最南端，是杭州中心城区之一，杭州市委、市政府所在地。因旧时境内以最古老的拱桥拱宸桥和最繁华的湖墅地区而各取一字得区名');

#
# Source for table "jjrxt_xingzhengqu"
#

CREATE TABLE `jjrxt_xingzhengqu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xzqming` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_xingzhengqu"
#

INSERT INTO `jjrxt_xingzhengqu` VALUES (1,'北京'),(2,'天津'),(3,'山西'),(4,'上海'),(5,'江苏'),(6,'浙江'),(7,'安徽'),(8,'江西'),(9,'山东'),(10,'湖北'),(11,'湖南'),(12,'广东'),(13,'重庆'),(14,'四川'),(15,'贵州'),(16,'云南'),(17,'甘肃'),(18,'青海'),(19,'河南'),(20,'河北'),(21,'海南');

#
# Source for table "jjrxt_xqphoto"
#

CREATE TABLE `jjrxt_xqphoto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `gongsiid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `xqid` varchar(20) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_xqphoto"
#


#
# Source for table "jjrxt_xuequ"
#

CREATE TABLE `jjrxt_xuequ` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `xuexiaom` varchar(50) DEFAULT NULL,
  `pinyinjs` varchar(50) DEFAULT NULL,
  `xuexiaodz` varchar(50) DEFAULT NULL,
  `duikou` varchar(255) DEFAULT NULL,
  `shijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_xuequ"
#

INSERT INTO `jjrxt_xuequ` VALUES (1,'光明小学','guangmingxiaoxue','光明楼','',1498037117),(2,'工业大学','gongyedaxue','光明楼',NULL,1498037117),(3,'浙江大学城市学院','zhejiangdaxuechengshixueyuan','拱墅',NULL,1498037117),(4,'浙江树人大学','zhejiangshurendaxue','拱墅',NULL,1498037117),(5,'北京大学','beijingdaxue','北京',NULL,1498037117),(6,'清华大学','qinghuadaxue','北京',NULL,1498037117);

#
# Source for table "jjrxt_yeji"
#

CREATE TABLE `jjrxt_yeji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `leibie` int(11) DEFAULT NULL,
  `zhongjiefei` int(11) DEFAULT NULL,
  `fcbl` int(11) DEFAULT NULL,
  `fcyj` decimal(10,2) DEFAULT NULL,
  `cjbianhao` varchar(255) DEFAULT NULL,
  `shijian1` int(11) DEFAULT NULL,
  `zhuangtai` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_yeji"
#

INSERT INTO `jjrxt_yeji` VALUES (1,12,1,10000,96,9600.00,'M-10005',1497926623,1),(2,12,2,10000,2,200.00,'M-10005',1497926623,1),(3,12,3,10000,2,200.00,'M-10005',1497926623,1);

#
# Source for table "jjrxt_yonghu"
#

CREATE TABLE `jjrxt_yonghu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongsiid` int(11) DEFAULT NULL,
  `zhuangtai` smallint(4) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `ygmingcheng` varchar(20) DEFAULT NULL,
  `bumen` int(6) DEFAULT NULL,
  `xingbie` bit(1) DEFAULT NULL,
  `yhjuese` int(11) DEFAULT NULL,
  `chushengrq` varchar(50) DEFAULT NULL,
  `ygbianhao` varchar(50) DEFAULT NULL,
  `dianhua` varchar(20) DEFAULT NULL,
  `waiwangtb` bit(1) DEFAULT NULL,
  `mima` varchar(32) DEFAULT NULL,
  `zhanghao` varchar(25) DEFAULT NULL,
  `logintime` int(10) DEFAULT NULL,
  `loginip` char(20) DEFAULT NULL,
  `lock` smallint(2) NOT NULL DEFAULT '0',
  `xzchakan` int(11) DEFAULT NULL,
  `keyid` char(32) DEFAULT NULL,
  `touxiang` tinyint(1) DEFAULT NULL,
  `zhiwu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_yonghu"
#

INSERT INTO `jjrxt_yonghu` VALUES (2,10000,NULL,NULL,'管理员',1,b'1',NULL,NULL,NULL,'admin',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1498176966,'127.0.0.1',0,0,NULL,NULL,NULL),(3,10000,NULL,NULL,'赵澜清',1,b'1',NULL,NULL,NULL,'13809472034',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497931488,'127.0.0.1',0,30,'',NULL,NULL),(4,10000,NULL,NULL,'钱丹茜',1,b'0',NULL,NULL,NULL,'13884625628',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,'',NULL,NULL),(5,10000,NULL,NULL,'孙鹏煊',1,b'1',NULL,NULL,NULL,'13884789426',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,'',NULL,NULL),(6,10000,NULL,NULL,'李樱瞳',1,b'0',NULL,NULL,NULL,'13836846946',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,'',NULL,NULL),(7,10000,NULL,NULL,'周凯歌',2,b'1',NULL,NULL,NULL,'13957565755',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(8,10000,NULL,NULL,'吴梓萌',2,b'0',NULL,NULL,NULL,'13968627457',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(9,10000,NULL,NULL,'郑孔阳',2,b'1',NULL,NULL,NULL,'13945767369',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(10,10000,NULL,NULL,'王璇颖',2,b'0',NULL,NULL,NULL,'13946838798',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(11,10000,NULL,NULL,'冯言阙',3,b'1',NULL,NULL,NULL,'15834376567',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(12,10000,NULL,NULL,'陈漪凝',3,b'0',NULL,NULL,NULL,'15834674374',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(13,10000,NULL,NULL,'褚楷瑞',3,b'1',NULL,NULL,NULL,'15837984575',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(14,10000,NULL,NULL,'卫启晗',3,b'0',NULL,NULL,NULL,'15837863765',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(15,10000,NULL,NULL,'蒋悠然',4,b'1',NULL,NULL,NULL,'15934776557',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(16,10000,NULL,NULL,'沈筱蕾',4,b'0',NULL,NULL,NULL,'15973577547',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(17,10000,NULL,NULL,'韩腾扬',4,b'1',NULL,NULL,NULL,'15968498436',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(18,10000,NULL,NULL,'杨雪慧',4,b'0',NULL,NULL,NULL,'15973467346',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(19,10000,NULL,NULL,'朱志行',5,b'1',NULL,NULL,NULL,'18057837865',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(20,10000,NULL,NULL,'秦淑颖',5,b'0',NULL,NULL,NULL,'18087535786',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(21,10000,NULL,NULL,'尤君昊',5,b'1',NULL,NULL,NULL,'18057834667',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(22,10000,NULL,NULL,'许瑾萱',5,b'0',NULL,NULL,NULL,'18036672355',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(23,10000,NULL,NULL,'何泓涵',6,b'1',NULL,NULL,NULL,'18965245467',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(24,10000,NULL,NULL,'吕钰彤',6,b'0',NULL,NULL,NULL,'18925667854',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(25,10000,NULL,NULL,'施景睿',6,b'1',NULL,NULL,NULL,'18926456543',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(26,10000,NULL,NULL,'张璟雯',6,b'0',NULL,NULL,NULL,'18946757257',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(27,10000,NULL,NULL,'孔景铄',7,b'1',NULL,NULL,NULL,'13667868935',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(28,10000,NULL,NULL,'曹天瑜',7,b'0',NULL,NULL,NULL,'13678945686',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(29,10000,NULL,NULL,'严凯泽',7,b'1',NULL,NULL,NULL,'13668735656',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(30,10000,NULL,NULL,'华婧琪',7,b'0',NULL,NULL,NULL,'13689567834',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(31,10000,NULL,NULL,'金腾起',8,b'1',NULL,NULL,NULL,'18757843667',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(32,10000,NULL,NULL,'魏彤萱',8,b'0',NULL,NULL,NULL,'18745678943',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(33,10000,NULL,NULL,'陶晋鹏',8,b'1',NULL,NULL,NULL,'18767834686',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(34,10000,NULL,NULL,'姜玥婷',8,b'0',NULL,NULL,NULL,'18745676893',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(35,10000,NULL,NULL,'戚震烨',9,b'1',NULL,NULL,NULL,'15156789783',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(36,10000,NULL,NULL,'谢媛馨',9,b'0',NULL,NULL,NULL,'15145778934',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(37,10000,NULL,NULL,'邹伯懿',9,b'1',NULL,NULL,NULL,'15156786345',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(38,10000,NULL,NULL,'喻慧妍',9,b'0',NULL,NULL,NULL,'15145678345',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(39,10000,NULL,NULL,'柏雅厚',10,b'1',NULL,NULL,NULL,'18678945678',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(40,10000,NULL,NULL,'水婧琪',10,b'0',NULL,NULL,NULL,'18678934565',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(41,10000,NULL,NULL,'窦昊祯',10,b'1',NULL,NULL,NULL,'18645675345',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(42,10000,NULL,NULL,'章梦婷',10,b'0',NULL,NULL,NULL,'18645667562',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(43,10000,NULL,NULL,'云明杰',11,b'1',NULL,NULL,NULL,'13056768945',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(44,10000,NULL,NULL,'苏雪怡',11,b'0',NULL,NULL,NULL,'13057887945',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(45,10000,NULL,NULL,'潘懿美',11,b'1',NULL,NULL,NULL,'13079089456',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(46,10000,NULL,NULL,'葛彦歆',11,b'0',NULL,NULL,NULL,'13097065387',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(47,10000,NULL,NULL,'奚鸿涛',12,b'1',NULL,NULL,NULL,'15345778944',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(48,10000,NULL,NULL,'范芮涵',12,b'0',NULL,NULL,NULL,'15377884674',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(49,10000,NULL,NULL,'彭鹤轩',12,b'1',NULL,NULL,NULL,'15367345784',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(50,10000,NULL,NULL,'郎笑薇',12,b'0',NULL,NULL,NULL,'15388435755',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(51,10000,NULL,NULL,'鲁和畅',13,b'1',NULL,NULL,NULL,'13287933456',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(52,10000,NULL,NULL,'韦婧涵',13,b'0',NULL,NULL,NULL,'13272325743',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(53,10000,NULL,NULL,'昌方旭',13,b'1',NULL,NULL,NULL,'13212467485',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(54,10000,NULL,NULL,'马鑫蕾',13,b'0',NULL,NULL,NULL,'13253357677',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(55,10000,NULL,NULL,'苗浩宇',14,b'1',NULL,NULL,NULL,'15744799345',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(56,10000,NULL,NULL,'凤茹雪',14,b'0',NULL,NULL,NULL,'15736907580',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(57,10000,NULL,NULL,'花飞轩',14,b'1',NULL,NULL,NULL,'15732679545',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(58,10000,NULL,NULL,'方欢馨',14,b'0',NULL,NULL,NULL,'15779477855',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(59,10000,NULL,NULL,'俞德辉',15,b'1',NULL,NULL,NULL,'18288657955',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(60,10000,NULL,NULL,'任优璇',15,b'0',NULL,NULL,NULL,'18254758748',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(61,10000,NULL,NULL,'袁澹雅',15,b'1',NULL,NULL,NULL,'18256556766',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(62,10000,NULL,NULL,'柳雨嘉',15,b'0',NULL,NULL,NULL,'18278685856',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(63,10000,NULL,NULL,'酆浩然',16,b'1',NULL,NULL,NULL,'18834667583',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(64,10000,NULL,NULL,'鲍娅楠',16,b'0',NULL,NULL,NULL,'18876846889',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(65,10000,NULL,NULL,'史熠彤',16,b'1',NULL,NULL,NULL,'18845584689',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(66,10000,NULL,NULL,'唐明美',16,b'0',NULL,NULL,NULL,'18887979756',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(67,10000,NULL,NULL,'费熠然',17,b'1',NULL,NULL,NULL,'13589645795',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(68,10000,NULL,NULL,'廉可馨',17,b'0',NULL,NULL,NULL,'13582436944',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(69,10000,NULL,NULL,'岑志鹏',17,b'1',NULL,NULL,NULL,'13598425963',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(70,10000,NULL,NULL,'薛梦洁',17,b'0',NULL,NULL,NULL,'13584432358',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(71,10000,NULL,NULL,'雷子烨',18,b'1',NULL,NULL,NULL,'17732873455',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(72,10000,NULL,NULL,'贺漫妮',18,b'0',NULL,NULL,NULL,'17723565554',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(73,10000,NULL,NULL,'倪伟泽',18,b'1',NULL,NULL,NULL,'17785378835',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(74,10000,NULL,NULL,'汤香茹',18,b'0',NULL,NULL,NULL,'17783469555',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(75,10000,NULL,NULL,'腾建辉',19,b'1',NULL,NULL,NULL,'15093447879',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(76,10000,NULL,NULL,'殷月婵',19,b'0',NULL,NULL,NULL,'15035676437',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(77,10000,NULL,NULL,'罗子轩',19,b'1',NULL,NULL,NULL,'15023655633',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(78,10000,NULL,NULL,'毕美莲',19,b'0',NULL,NULL,NULL,'15057684344',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(79,10000,NULL,NULL,'郝祾祯',20,b'1',NULL,NULL,NULL,'18368433676',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(80,10000,NULL,NULL,'邬倩雪',20,b'0',NULL,NULL,NULL,'18389634656',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(81,10000,NULL,NULL,'安韫玉',20,b'1',NULL,NULL,NULL,'18323554745',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(82,10000,NULL,NULL,'常玉珍',20,b'0',NULL,NULL,NULL,'18324353466',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(83,10000,NULL,NULL,'乐承德',21,b'1',NULL,NULL,NULL,'15523545252',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(84,10000,NULL,NULL,'于茹雪',21,b'0',NULL,NULL,NULL,'15567834654',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(85,10000,NULL,NULL,'时得韬',21,b'1',NULL,NULL,NULL,'15546779763',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(86,10000,NULL,NULL,'傅羽馨',21,b'0',NULL,NULL,NULL,'15556525532',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(87,10000,NULL,NULL,'皮伟祺',22,b'1',NULL,NULL,NULL,'17665835463',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(88,10000,NULL,NULL,'卞煜婷',22,b'0',NULL,NULL,NULL,'17678986457',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(89,10000,NULL,NULL,'齐涵畅',22,b'1',NULL,NULL,NULL,'17645778376',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL),(90,10000,NULL,NULL,'康雨嘉',22,b'0',NULL,NULL,'','17674547346',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,1497855909,'127.0.0.1',0,30,NULL,NULL,NULL);

#
# Source for table "jjrxt_yongjin"
#

CREATE TABLE `jjrxt_yongjin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhuangtai` int(11) DEFAULT NULL,
  `piaoju` varchar(100) DEFAULT NULL,
  `feiyongxm` int(11) DEFAULT NULL,
  `jine` int(11) DEFAULT NULL,
  `jiaofeiren` int(11) DEFAULT NULL,
  `jihuasj` int(11) DEFAULT NULL,
  `shouqusj` int(11) DEFAULT NULL,
  `shouquren` int(11) DEFAULT NULL,
  `beizhu` text,
  `cjbianhao` varchar(255) DEFAULT NULL,
  `leixing` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "jjrxt_yongjin"
#


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
