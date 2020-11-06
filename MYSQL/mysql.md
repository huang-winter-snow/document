## show processlist
![](/IMAGE/show-processlist.jpg)

## kill pthread

- kill 1; #杀掉ID为1的线程, 关闭连接
- kill query 1; #杀掉正在执行的ID为1的线程, 不关闭连接

- select concat('kill ', id, ';') from information_schema.processlist where time > 10 #查询出时间大于10的线程, 复制查询结果，批量执行


## order by 优化
- 使用group by 聚合数据，对结果集不需要排序的，可以加上 order by null, 这样会减少filesort

## lock
- show variables like ‘innodb_print_all_deadlocks’ ##查看死锁日志是否打开
- SET GLOBAL innodb_print_all_deadlocks = 1; ##打开死锁日志
