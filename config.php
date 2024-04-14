<?php
$c=mysqli_connect("localhost","root","","ims");
mysqli_query($c,"create database if not exists ims");
$tb="purchase";
$tr="distributor";
$cl="client"; 

mysqli_query($c,"create table $tb (id int not null AUTO_INCREMENT primary key,p_name varchar(20),p_desc varchar(50),type varchar(20),manufeture varchar//(20),price bigint(20),selsprice bigint(100),p_qty varchar(10),p_date date,image  varchar(50))");
mysqli_query($c,"create table sales(s_id int not null AUTO_INCREMENT primary key,p_id int(5),c_id int(5),p_name varchar(20),c_name varchar(20),s_price int(5),s_qty varchar(10),s_date date)")	;
$ab=mysqli_query($c,"create table $tr(m_id int not null AUTO_INCREMENT primary key,c_name varchar(20),p_type varchar(20),address varchar(20),contect1 bigint(20),contect2 bigint(20),email varchar(20),website varchar(20))");
mysqli_query($c,"create table $cl(d_id int not null AUTO_INCREMENT primary key,dis_name varchar(20),company_name varchar(20),address varchar(20),email varchar(20),mobile bigint(12))"); 
mysqli_query($c,"create table adminreg(a_id int not null AUTO_INCREMENT primary key,username varchar(20),password varchar(20),key2 varchar(50),email varchar(50),regdate date)");
	
?>
