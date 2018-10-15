0:
select pro_no '产品编号',sales '销售额', sales*0.1 '增长额' from pro_sal;
1:
select saler_name '销售商名称', area '地区' from saler where area in ('华中', '华北', '华南');
2:
select saler_name '销售商名称' from saler where saler_name like '_建_';
3:
select saler_no '经销商编号',saler_name '销售商名称', area '地区', head '经销商负责人',phone_num '经销商手机号码' from saler where phone_num is not null;
4:
select pro_no '产品编号', pro_date '销售日期' from pro_sal where sales between 2000 and 5000 and count > 100;
5:
select count(saler_no) '销售商总数'from pro_sal;
6:
select avg(sales) '平均销售额',max(sales) '最高销售额', min(sales) '最低销售额' from pro_sal;
7:
select saler_no '销售商编号', count(pro_no) '种类数' from pro_sal group by saler_no having count(pro_no) > 2 order by count(pro_no) desc;
8:
select saler.saler_no '销售商编号', saler_name '销售商名称', pro_no '商品编号', count '数量' from saler,pro_sal where saler.saler_no = pro_sal.saler_no;
9:
select saler_no '销售商编号', count(pro_no) '购买次数' from pro_sal where pro_no='0001' group by saler_no having count(pro_no) >= 1 order by count(pro_no);
10:
select saler_name '销售商名称', area '地区', head '负责人' from saler where area in (select area from saler where saler_name='喜田有限公司');
11:
select saler.saler_no '销售商编号', saler_name '销售商名称', pro_no '产品编号', pro_date '销售日期' from pro_sal, saler where pro_sal.saler_no=saler.saler_no;
12:
select pro_no '产品编号', name '产品名称', price '价格', sales '销售额' from pros, pro_sal where pros.id = pro_sal.pro_no group by pro_no having sales < avg(sales);
13:
select * from pros where id not in(select pro_no from pro_sal);
14:
select saler_no '销售商编号', pro_no '产品编号' from pro_sal where saler_no like '0001' and saler_no not like '0002' group by saler_no;

alter table saler alter column area set default '华中';

INSERT INTO pros VALUES('0006','节能灯',5,100);关键字冲撞

update pros set price=price + 2 where name='节能灯';#节能灯这个产品不存在