DROP DATABASE IF EXISTS product;
CREATE DATABASE product character set utf8;
use product;
DROP TABLE IF EXISTS pros;
CREATE TABLE pros(
	id varchar(20) primary key not null,
	name varchar(50) not null,
	price decimal(10,2) not null,
	stock int(11) default null
)ENGINE=MYISAM DEFAULT CHARSET=UTF8;

INSERT INTO pros VALUES('0001', '风筝', '18.80','1024');
INSERT INTO pros VALUES('0002', '杯子', '9.90','800');
INSERT INTO pros VALUES('0003', '帽子', '19.80','980');
INSERT INTO pros VALUES('0004', '项链', '9868.99','266');
INSERT INTO pros VALUES('0005', '钻戒', '18999.68','520');
INSERT INTO pros VALUES('0006', '洗发露', '20.59','420');
INSERT INTO pros VALUES('0007', '毛巾', '6.50', '210');
INSERT INTO pros VALUES('0008', '棉被', '200.86', '300');
INSERT INTO pros VALUES('0009', '墨水', '5.50', '800');
INSERT INTO pros VALUES('0010', '钢笔', '86.99', '128');
INSERT INTO pros VALUES('0011', '毛笔', '35.48', '480');
INSERT INTO pros VALUES('0012', '枕头', '63.68', '520');

DROP TABLE IF EXISTS saler;
CREATE TABLE saler(
	saler_no varchar(20) primary key,
	saler_name varchar(50) not null,
	area varchar(10) not null,
	head varchar(10) default NULL comment'负责人',
	phone_num varchar(20) default null
)ENGINE=MYISAM DEFAULT CHARSET=UTF8;

INSERT INTO saler VALUES ('000061', '山东大德日用', '华中', '刘威华', '18703993634');
INSERT INTO saler VALUES ('000145', '北京天成', '华北', '刘茂', '15896245683');
INSERT INTO saler VALUES ('000165', '喜田有限公司', '华北', '王总', '03254898684');
INSERT INTO saler VALUES ('001547', '丹尼斯', '华南', '胡总', '15649554544');
INSERT INTO saler VALUES ('037102', '天景商贸', '华北', '王磊', '13598745611');
INSERT INTO saler VALUES ('059741', '成建股份有限公司', '华中', '徐总', '02568941565');
INSERT INTO saler VALUES ('087412', '沐阳集团', '西部', '鲁宣', '15036985412');
INSERT INTO saler VALUES ('089412', '新建德', '华南', '赵总', '40025684562');

DROP TABLE IF EXISTS pro_sal;
CREATE TABLE pro_sal(
	pro_date date not null,
	pro_no varchar(20),
	saler_no varchar(20),
	count int(11) not null,
	sales decimal(10,0) not null,
	primary key(pro_date,pro_no),
	key saler_no(saler_no),
	CONSTRAINT saler_no FOREIGN KEY(saler_no) REFERENCES saler,
	CONSTRAINT pro_no FOREIGN KEY(pro_no) REFERENCES pros
)ENGINE=MYISAM DEFAULT CHARSET=UTF8;
INSERT INTO pro_sal VALUES ('2013-02-06', '0112358', '000061', '120', '5890');
INSERT INTO pro_sal VALUES ('2013-02-18', '0112690', '037102', '50', '9853');
INSERT INTO pro_sal VALUES ('2013-02-04', '0112691', '087412', '15', '1421');