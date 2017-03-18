-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-14 17:36:39
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
  `content` text NOT NULL COMMENT '内容',
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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
