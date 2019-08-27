MySQL杀掉线程命令

kill 1; #杀掉ID为1的线程, 关闭连接
kill query 1; #杀掉正在执行的ID为1的线程, 不关闭连接

select concat('kill ', id, ';') from information_schema.processlist where time > 10 #查询出时间大于10的线程, 复制查询结果，批量执行

