create table student (
	student_id int unsigned not null auto_increment,
	student_name varchar(32) not null default '',-- 真实姓名
	phone_number varchar(16) not null default '', -- 电话号码
	email varchar(64) not null default '',-- 邮箱地址
	qq varchar(16) not null default '',-- QQ
	gender_id int not null default 1, -- 性别, 3保密
	course_id int not null default 1, -- 意向课程
	progress_id int not null default 1, -- 进度
	education_id int not null default 1, -- 学历
	status_id int not null default 1, -- 目前状态
	school varchar(32) not null default '', -- 学校
	subject varchar(32) not null default '', -- 专业
	referer_id int not null default 1, -- 了解渠道
	introduction varchar(255) not null default '', -- 自我介绍
	is_delete int not null default 0, -- 是否被删除
	add_time int not null default 0, -- 添加时间
	primary key (student_id),
	unique index (student_name, phone_number),
	unique index (student_name, email),
	unique index (student_name, qq)
) charset=utf8;


drop table if exists gender;
create table gender (
	gender_id int unsigned not null auto_increment,
	gender_title varchar(16) not null default '',
	primary key (gender_id)
) charset=utf8;
insert into gender values
	(1, '男'), (2, '女'), (3, '保密');

drop table if exists course;
create table course (
	course_id int unsigned not null auto_increment,
	course_title varchar(16) not null default '',
	primary key (course_id)
) charset=utf8;
insert into course values
	(1, 'PHP'), (2, '前端');

drop table if exists education;
create table education (
	education_id int unsigned not null auto_increment,
	education_title varchar(16) not null default '', -- 学历
	primary key (education_id)
) charset=utf8;
insert into education values
	(1, '高中'), (2, '中专'), (3, '大专'), (4, '本科'), (5, '研究生'), (6, '其他');

drop table if exists status;
create table status (
	status_id int unsigned not null auto_increment,
	status_title varchar(32) not null default '',
	primary key (status_id)
) charset=utf8;
insert into status values
	(1, '大一'), (2, '大二'), (3, '大三'), (4, '大四'), (5, '研究生'), (6, '在职'), (7, '待业') ;

drop table if exists referer;
create table referer (
	referer_id int unsigned not null auto_increment,
	referer_title varchar(16) not null default '',
	primary key (referer_id)
) charset=utf8;
insert into referer values
	(1, '网络搜索'), (2, '他人推荐'), (3, '视频教程'), (4, '电子邮件'), (5, '其他');


-- 进度表
drop table if exists progress;
create table progress (
	progress_id int not null auto_increment,
	progress_title varchar(32) not null default '',-- 流程表
	primary key (progress_id)
) charset=utf8;
insert into progress values
	(1, '信息提交/等待确认'), (2, '确认完毕/等待测试'), (3, '测试完成/等待面试'), (4, '面试完成/等待入学'), (5, '完成入学');

-- 用户进度日志表
drop table if exists student_progress;
create table student_progress (
	sp_id int not null auto_increment,
	student_id int not null default 0,
	progress_id int not null default 0,
	do_time int not null default 0, -- 操作时间
	do_admin_id int not null default 0, -- 操作管理员ID
	primary key (sp_id)
) charset=utf8;

drop table if exists admin;
create table admin (
	admin_id int unsigned not null auto_increment,
	admin_name varchar(32) not null default '',
	admin_password varchar(32) not null default '',
	primary key (admin_id)
) charset=utf8;
insert into admin values
	(23, 'kang', md5('hellokang')),
	(null, '薛鹏', md5('xuepeng')),
	(null, '李海秀', md5('lihaixiu'));