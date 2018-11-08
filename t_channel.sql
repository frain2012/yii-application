CREATE DATABASE moive;
use moive;


SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_channel
-- ----------------------------
DROP TABLE IF EXISTS `t_channel`;
CREATE TABLE `t_channel` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  `key` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of t_channel
-- ----------------------------
INSERT INTO `t_channel` VALUES ('1', '下载', ' 推荐极速下载线路');
INSERT INTO `t_channel` VALUES ('2', '爱奇艺', '高速播放');

-- ----------------------------
-- Table structure for t_config
-- ----------------------------
DROP TABLE IF EXISTS `t_config`;
CREATE TABLE `t_config` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of t_config
-- ----------------------------
INSERT INTO `t_config` VALUES ('1', '#-电影电视手机网看片-手机电影电视在线看片-电影电视网', '电影网手机看片每天提供2018最新福利电影视频在线观看，电视剧大全，好看的电影，搞笑电视剧，电影大全，韩国电视剧、香港TVB电视剧、国产电视剧、动漫、台湾剧等在线观看和火热剧集站交流，让您躺在被窝感受不一样的体验。', '手机看片,手机电影在线看,爱电影网');

-- ----------------------------
-- Table structure for t_film
-- ----------------------------
DROP TABLE IF EXISTS `t_film`;
CREATE TABLE `t_film` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '封面',
  `staring` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '主演',
  `director` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '导演',
  `type` tinyint(4) DEFAULT NULL COMMENT '类型(1-电影，2->电视剧，3->动漫，4->综艺)',
  `sub_type` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  `area` varchar(16) COLLATE utf8mb4_bin DEFAULT NULL,
  `year` int(10) DEFAULT NULL COMMENT '年份',
  `introduce` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '简介',
  `tip` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `quality` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of t_film
-- ----------------------------
INSERT INTO `t_film` VALUES ('1', '猛虫过江', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fsczxj3hg8j307i0ahwf4.jpg', '小沈阳 潘斌龙 宋芸桦 金士杰', 'director', '1', null, null, null, '《小羊肖恩大电影》是由马克·伯顿导演，贾斯汀·弗莱彻、约翰·斯帕克斯、欧米德·吉亚李利、理查德·韦伯、Kate Harbour主演的电影。影片剧情简介：厌倦了每天千篇一律的枯燥生活，小羊肖恩决定做些改变。他煽动同伴们参与了他的计划，引开狗狗比泽尔的同时，将农夫催眠。可是他们的快乐假日还没开始，意外突然发生。关着农夫的拖车厢失去控制，一路向市中心冲去', null, null, '2018-11-05 16:21:40');
INSERT INTO `t_film` VALUES ('2', '摩天营救', 'https://ww1.sinaimg.cn/large/006MBSBsgy1ft85y1wa9bj307i0aimxp.jpg', '道恩·强森 , 内芙·坎贝尔 , 黄经汉 , 罗兰·默勒 , 麦肯纳·罗伯茨', 'director', '1', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:22:05');
INSERT INTO `t_film` VALUES ('3', '古剑奇谭之流月昭明', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fvuugsrij7j307i0an74w.jpg', '王力宏 宋茜 高以翔 高圣远 吴千语 张智霖 柳岩 李媛 伍嘉成 那威 纪焕博', null, '1', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:23:08');
INSERT INTO `t_film` VALUES ('4', '西虹市首富', 'https://ww1.sinaimg.cn/large/006MBSBsgy1ftpvj7u97aj307i0ahdgd.jpg', '沈腾 宋芸桦 张一鸣 张晨光 常远 魏翔 李立群 赵自强 九孔 王成思 徐冬冬 艾伦 杨皓宇 王力宏 黄才伦 包贝尔 张绍刚 郎咸平', null, '1', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:27:10');
INSERT INTO `t_film` VALUES ('5', '你迟到的许多年', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fvo71i5owyj30u0160zw0.jpg', '黄晓明 殷桃 秦海璐 曹炳琨', null, '2', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:34:10');
INSERT INTO `t_film` VALUES ('6', '创业时代', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fvzr9957nsj307i0azq4s.jpg', '黄轩 杨颖 周一围 宋轶 啜妮 代旭 印小天 代乐乐 张晓谦 王耀庆 王学圻 李建义 韩童生', null, '2', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:34:52');
INSERT INTO `t_film` VALUES ('7', '毛丫丫被婚记/最好的遇见', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fvvumy2lrkj307i0b70t4.jpg', '明道 颖儿 马天宇 恬妞 张曦文 曾江 马歌 王宣予 梁丽 郝平 李菁 何云伟', null, '2', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:35:27');
INSERT INTO `t_film` VALUES ('8', '双世宠妃2', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fwh8f1u892j30780a474s.jpg', '邢昭林 梁洁 王瑞昌 钟祺 孙艺宁 陈宥维 Youwei Chen 王浩歌 Haoge Wang 胡春勇 Chunyong Hu 廖慧佳', null, '2', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:36:23');
INSERT INTO `t_film` VALUES ('9', '行尸走肉第九季', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fw0yp8nyltj307i0b4jrq.jpg', '克里斯蒂·瑟拉图斯 瑞恩·赫斯特 丹娜·奎里拉 扎克·麦克格温 萨曼', null, '2', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:37:10');
INSERT INTO `t_film` VALUES ('10', '妖神记3：影妖篇', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fvpfwhxhf5j307i0b9dg8.jpg', '冷泉夜月 苏尚卿', null, '3', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:41:43');
INSERT INTO `t_film` VALUES ('11', '海贼王', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fqa8gv0w81j308c0bddij.jpg', '田中真弓 冈村明美 中井和哉 平田广明 山口胜平 山口由里子 大谷育江 土井美加 古川登志夫 草尾毅 大场真人', null, '3', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 16:42:17');
INSERT INTO `t_film` VALUES ('12', '这！就是歌唱·对唱季', 'https://ww1.sinaimg.cn/large/006MBSBsly1ftosiolszdj307i0b9gm0.jpg', '鹿晗 罗志祥 李荣浩', null, '4', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 17:25:41');
INSERT INTO `t_film` VALUES ('13', '跨界歌王第三季', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fr1hh73kzwj307i0b9aan.jpg', '吴秀波 徐静蕾 刘恺威 陈学冬', null, '4', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 17:26:47');
INSERT INTO `t_film` VALUES ('14', '奔跑吧第二季', 'https://ww1.sinaimg.cn/large/006MBSBsgy1fqbwcv9iuqj307i0b9t9d.jpg', '邓超 李晨 陈赫 郑恺', null, '4', null, null, null, '失去控制，一路向市中', null, null, '2018-11-05 17:27:49');

-- ----------------------------
-- Table structure for t_film_detail
-- ----------------------------
DROP TABLE IF EXISTS `t_film_detail`;
CREATE TABLE `t_film_detail` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) DEFAULT NULL COMMENT 'film中的id',
  `type` int(11) DEFAULT '1' COMMENT '渠道',
  `key` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '名称',
  `value` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '地址',
  `create_at` datetime DEFAULT NULL,
  `sort_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of t_film_detail
-- ----------------------------
INSERT INTO `t_film_detail` VALUES ('1', '2', '1', '1', 'http://chimee.org/vod/1.mp4', '2018-11-07 11:04:37', '0');
INSERT INTO `t_film_detail` VALUES ('2', '2', '1', '2', 'http://chimee.org/vod/1.mp4', '2018-11-07 11:05:16', '0');
INSERT INTO `t_film_detail` VALUES ('3', '2', '2', 'BD高清', 'http://chimee.org/vod/1.mp4', '2018-11-07 11:06:27', '0');

-- ----------------------------
-- Table structure for t_link
-- ----------------------------
DROP TABLE IF EXISTS `t_link`;
CREATE TABLE `t_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '名称',
  `value` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '值',
  `image` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '图片',
  `link` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL COMMENT '排序Id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of t_link
-- ----------------------------
INSERT INTO `t_link` VALUES ('1', '1', '爱电影网', '爱电影网', null, 'http://www.baidu.com', '0');
INSERT INTO `t_link` VALUES ('2', '1', '爱电影网1', '爱电影网', null, 'http://www.baidu.com', '1');

-- ----------------------------
-- Table structure for t_type
-- ----------------------------
DROP TABLE IF EXISTS `t_type`;
CREATE TABLE `t_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT NULL,
  `name` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of t_type
-- ----------------------------
INSERT INTO `t_type` VALUES ('1', '1', '电影', null, '0');
INSERT INTO `t_type` VALUES ('2', '1', '电视剧', null, '1');
INSERT INTO `t_type` VALUES ('3', '1', '动漫', null, '2');
INSERT INTO `t_type` VALUES ('4', '1', '综艺', null, '3');
INSERT INTO `t_type` VALUES ('5', '2', '动作片', '1', '0');
INSERT INTO `t_type` VALUES ('6', '2', '喜剧片', '1', '1');
INSERT INTO `t_type` VALUES ('7', '2', '爱情片', '1', '2');
INSERT INTO `t_type` VALUES ('8', '2', '科幻片', '1', '3');
INSERT INTO `t_type` VALUES ('9', '2', '战争片', '1', '4');
INSERT INTO `t_type` VALUES ('10', '2', '恐怖片', '1', '5');
INSERT INTO `t_type` VALUES ('11', '2', '剧情片', '1', '6');
INSERT INTO `t_type` VALUES ('12', '2', '动画片', '1', '7');
INSERT INTO `t_type` VALUES ('13', '2', '国产剧', '2', '8');
INSERT INTO `t_type` VALUES ('14', '2', '台湾剧', '2', '0');
INSERT INTO `t_type` VALUES ('15', '2', '香港剧', '2', '0');
INSERT INTO `t_type` VALUES ('16', '2', '欧美剧', '2', '0');
INSERT INTO `t_type` VALUES ('17', '2', '福利', '2', '0');
INSERT INTO `t_type` VALUES ('18', '2', '海外剧', '2', '0');
INSERT INTO `t_type` VALUES ('19', '2', '韩剧', '2', '0');
INSERT INTO `t_type` VALUES ('20', '2', '日剧', '2', '0');
