-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-09 13:04:49
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

-- --------------------------------------------------------

--
-- 表的结构 `w3c_opensource`
--

CREATE TABLE IF NOT EXISTS `w3c_opensource` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `opensource_category_id` int(11) unsigned NOT NULL COMMENT '教程分类',
  `slug` varchar(255) NOT NULL COMMENT '别名',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `description` varchar(600) NOT NULL COMMENT '描述',
  `img` varchar(255) NOT NULL COMMENT '图片',
  `img_path` varchar(255) NOT NULL,
  `content` text NOT NULL COMMENT '内容',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COMMENT='教程表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_opensource_category`
--

CREATE TABLE IF NOT EXISTS `w3c_opensource_category` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `name` varchar(200) NOT NULL COMMENT '名字',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='教程分类表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_opensource_doc`
--

CREATE TABLE IF NOT EXISTS `w3c_opensource_doc` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `opensource_id` int(11) unsigned NOT NULL COMMENT '所属教程',
  `is_menu` tinyint(1) NOT NULL COMMENT '是否菜单',
  `slug` varchar(100) NOT NULL COMMENT '别名',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `description` varchar(600) NOT NULL COMMENT '描述',
  `content` text COMMENT '内容',
  `tag` varchar(255) DEFAULT NULL COMMENT '文章标签',
  `position` int(11) NOT NULL COMMENT '排序',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `tutorial` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2055 DEFAULT CHARSET=utf8 COMMENT='教程文章表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial`
--

CREATE TABLE IF NOT EXISTS `w3c_tutorial` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `tutorial_category_id` int(11) unsigned NOT NULL COMMENT '教程分类',
  `slug` varchar(255) NOT NULL COMMENT '别名',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `description` varchar(600) NOT NULL COMMENT '描述',
  `img` varchar(255) NOT NULL COMMENT '图片',
  `img_path` varchar(255) NOT NULL,
  `content` text NOT NULL COMMENT '内容',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COMMENT='教程表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial_category`
--

CREATE TABLE IF NOT EXISTS `w3c_tutorial_category` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `name` varchar(200) NOT NULL COMMENT '名字',
  `position` tinyint(4) NOT NULL COMMENT '排序'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='教程分类表';

-- --------------------------------------------------------

--
-- 表的结构 `w3c_tutorial_doc`
--

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
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `tutorial` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2615 DEFAULT CHARSET=utf8 COMMENT='教程文章表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `w3c_opensource`
--
ALTER TABLE `w3c_opensource`
  ADD PRIMARY KEY (`id`), ADD KEY `tutorial_category_id` (`opensource_category_id`), ADD KEY `tutorial_category_id_2` (`opensource_category_id`), ADD KEY `opensource_category_id` (`opensource_category_id`);

--
-- Indexes for table `w3c_opensource_category`
--
ALTER TABLE `w3c_opensource_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3c_opensource_doc`
--
ALTER TABLE `w3c_opensource_doc`
  ADD PRIMARY KEY (`id`), ADD KEY `tutorial_id` (`opensource_id`), ADD KEY `tutorial_id_2` (`opensource_id`), ADD KEY `tutorial_id_3` (`opensource_id`), ADD KEY `tutorial_id_4` (`opensource_id`);

--
-- Indexes for table `w3c_tutorial`
--
ALTER TABLE `w3c_tutorial`
  ADD PRIMARY KEY (`id`), ADD KEY `tutorial_category_id` (`tutorial_category_id`), ADD KEY `tutorial_category_id_2` (`tutorial_category_id`);

--
-- Indexes for table `w3c_tutorial_category`
--
ALTER TABLE `w3c_tutorial_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3c_tutorial_doc`
--
ALTER TABLE `w3c_tutorial_doc`
  ADD PRIMARY KEY (`id`), ADD KEY `tutorial_id` (`tutorial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `w3c_opensource`
--
ALTER TABLE `w3c_opensource`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `w3c_opensource_category`
--
ALTER TABLE `w3c_opensource_category`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `w3c_opensource_doc`
--
ALTER TABLE `w3c_opensource_doc`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=2055;
--
-- AUTO_INCREMENT for table `w3c_tutorial`
--
ALTER TABLE `w3c_tutorial`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `w3c_tutorial_category`
--
ALTER TABLE `w3c_tutorial_category`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `w3c_tutorial_doc`
--
ALTER TABLE `w3c_tutorial_doc`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=2615;
--
-- 限制导出的表
--

--
-- 限制表 `w3c_opensource`
--
alter table w3c_opensource drop foreign key `w3c_opensource_ibfk_1`;
alter table w3c_opensource_doc drop foreign key `w3c_opensource_doc_ibfk_1`;
alter table w3c_tutorial drop foreign key `w3c_tutorial_ibfk_1`;
alter table w3c_tutorial_doc drop foreign key `w3c_tutorial_doc_ibfk_1`;


ALTER TABLE `w3c_opensource`
ADD CONSTRAINT `w3c_opensource_ibfk_1` FOREIGN KEY (`opensource_category_id`) REFERENCES `w3c_opensource_category` (`id`)  on delete set null on update no action;

--
-- 限制表 `w3c_opensource_doc`
--
ALTER TABLE `w3c_opensource_doc`
ADD CONSTRAINT `w3c_opensource_doc_ibfk_1` FOREIGN KEY (`opensource_id`) REFERENCES `w3c_opensource` (`id`)  on delete set null on update no action;;

--
-- 限制表 `w3c_tutorial`
--
ALTER TABLE `w3c_tutorial`
ADD CONSTRAINT `w3c_tutorial_ibfk_1` FOREIGN KEY (`tutorial_category_id`) REFERENCES `w3c_tutorial_category` (`id`)  on delete set null on update no action;;

--
-- 限制表 `w3c_tutorial_doc`
--
ALTER TABLE `w3c_tutorial_doc`
ADD CONSTRAINT `w3c_tutorial_doc_ibfk_1` FOREIGN KEY (`tutorial_id`) REFERENCES `w3c_tutorial` (`id`)  on delete set null on update no action;;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
