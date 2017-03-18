-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-18 04:59:11
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `w3c`
--
CREATE DATABASE IF NOT EXISTS `w3c` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `w3c`;

-- --------------------------------------------------------

--
-- 表的结构 `w3c_migration`
--

DROP TABLE IF EXISTS `w3c_migration`;
CREATE TABLE IF NOT EXISTS `w3c_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w3c_migration`
--

INSERT INTO `w3c_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1489806783),
('m140209_132017_init', 1489806788),
('m140403_174025_create_account_table', 1489806790),
('m140504_113157_update_tables', 1489806796),
('m140504_130429_create_token_table', 1489806798),
('m140830_171933_fix_ip_field', 1489806800),
('m140830_172703_change_account_table_name', 1489806800),
('m141222_110026_update_ip_field', 1489806801),
('m141222_135246_alter_username_length', 1489806802),
('m150614_103145_update_social_account_table', 1489806805),
('m150623_212711_fix_username_notnull', 1489806805),
('m151218_234654_add_timezone_to_profile', 1489806806),
('m160929_103127_add_last_login_at_to_user_table', 1489806806);

-- --------------------------------------------------------

--
-- 表的结构 `w3c_profile`
--

DROP TABLE IF EXISTS `w3c_profile`;
CREATE TABLE IF NOT EXISTS `w3c_profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `w3c_profile`
--

INSERT INTO `w3c_profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `w3c_social_account`
--

DROP TABLE IF EXISTS `w3c_social_account`;
CREATE TABLE IF NOT EXISTS `w3c_social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `w3c_token`
--

DROP TABLE IF EXISTS `w3c_token`;
CREATE TABLE IF NOT EXISTS `w3c_token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `w3c_token`
--

INSERT INTO `w3c_token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'AnnB4N7A_B8P3OJgvU7cCOolfc-Hb8Tc', 1489807002, 0);

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial`
--

DROP TABLE IF EXISTS `w3c_tutorial`;
CREATE TABLE IF NOT EXISTS `w3c_tutorial` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `tutorial_category_id` int(11) unsigned NOT NULL COMMENT '教程分类',
  `slug` varchar(255) NOT NULL COMMENT '别名',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `description` varchar(600) NOT NULL COMMENT '描述',
  `img` varchar(255) NOT NULL COMMENT '图片',
  `content` text NOT NULL COMMENT '内容',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='教程表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial_category`
--

DROP TABLE IF EXISTS `w3c_tutorial_category`;
CREATE TABLE IF NOT EXISTS `w3c_tutorial_category` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `name` varchar(200) NOT NULL COMMENT '名字',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='教程分类表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial_doc`
--

DROP TABLE IF EXISTS `w3c_tutorial_doc`;
CREATE TABLE IF NOT EXISTS `w3c_tutorial_doc` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `tutorial_id` int(11) unsigned NOT NULL COMMENT '所属教程',
  `is_menu` tinyint(1) NOT NULL COMMENT '是否菜单',
  `slug` varchar(100) NOT NULL COMMENT '别名',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `description` varchar(600) NOT NULL COMMENT '描述',
  `content` text COMMENT '内容',
  `tag` varchar(255) DEFAULT NULL COMMENT '文章标签',
  `position` tinyint(4) NOT NULL COMMENT '排序',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='教程文章表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial_doc_menu`
--

DROP TABLE IF EXISTS `w3c_tutorial_doc_menu`;
CREATE TABLE IF NOT EXISTS `w3c_tutorial_doc_menu` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `tutorial_id` int(11) unsigned NOT NULL COMMENT '所属教程',
  `slug` varchar(50) NOT NULL COMMENT '别名',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='教程菜单';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_user`
--

DROP TABLE IF EXISTS `w3c_user`;
CREATE TABLE IF NOT EXISTS `w3c_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `w3c_user`
--

INSERT INTO `w3c_user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'admin', '1@qq.com', '$2y$12$FKcQgpSwDzzut6XP2.mEfOrVmWOMdYbo9inOii1irzLfnjUZywmJi', 'EBZ5EO8J-yyMly7R0NaCW5HKXGfLuVVW', 1489807012, NULL, NULL, '127.0.0.1', 1489807001, 1489807001, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `w3c_migration`
--
ALTER TABLE `w3c_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `w3c_profile`
--
ALTER TABLE `w3c_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `w3c_social_account`
--
ALTER TABLE `w3c_social_account`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `w3c_account_unique` (`provider`,`client_id`), ADD UNIQUE KEY `w3c_account_unique_code` (`code`), ADD KEY `w3c_fk_user_account` (`user_id`);

--
-- Indexes for table `w3c_token`
--
ALTER TABLE `w3c_token`
  ADD UNIQUE KEY `w3c_token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `w3c_tutorial`
--
ALTER TABLE `w3c_tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3c_tutorial_category`
--
ALTER TABLE `w3c_tutorial_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3c_tutorial_doc`
--
ALTER TABLE `w3c_tutorial_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3c_tutorial_doc_menu`
--
ALTER TABLE `w3c_tutorial_doc_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3c_user`
--
ALTER TABLE `w3c_user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `w3c_user_unique_username` (`username`), ADD UNIQUE KEY `w3c_user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `w3c_social_account`
--
ALTER TABLE `w3c_social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `w3c_tutorial`
--
ALTER TABLE `w3c_tutorial`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `w3c_tutorial_category`
--
ALTER TABLE `w3c_tutorial_category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `w3c_tutorial_doc`
--
ALTER TABLE `w3c_tutorial_doc`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `w3c_tutorial_doc_menu`
--
ALTER TABLE `w3c_tutorial_doc_menu`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `w3c_user`
--
ALTER TABLE `w3c_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 限制导出的表
--

--
-- 限制表 `w3c_profile`
--
ALTER TABLE `w3c_profile`
ADD CONSTRAINT `w3c_fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `w3c_user` (`id`) ON DELETE CASCADE;

--
-- 限制表 `w3c_social_account`
--
ALTER TABLE `w3c_social_account`
ADD CONSTRAINT `w3c_fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `w3c_user` (`id`) ON DELETE CASCADE;

--
-- 限制表 `w3c_token`
--
ALTER TABLE `w3c_token`
ADD CONSTRAINT `w3c_fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `w3c_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
