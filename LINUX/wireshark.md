### 配置SSL解密
1. cd ~ && make tls && cd tls && touch sslkeylog.log
2. launchctl setenv SSLKEYLOGFILE ~/tls/sslkeylog.log 设置启动的应用读取环境变量
3. Preferences -> Protocols -> SSl -> (Pre)-Master-Secret 添加sslkeylog文件

### 语法说明
- 类型 host net port
- 方向 src dst
- 协议 ether ip tcp http ftp
- 协议->方向->类型

### capture filter
- [not] primitive [and|or [not] primitive ...]
- host 172.18.5.4 //捕获[源/目的]IP地址
- net 192.168.0.0/24 //IP范围192.168.0.1-192.168.0.255
- net 192.168.0.0 mask 255.255.255.0 //IP范围192.168.0.1-192.168.0.255
- src net 192.168.0.0/24 //源IP范围192.168.0.1-192.168.0.255
- src net 192.168.0.0 mask 255.255.255.0 //源IP范围192.168.0.1-192.168.0.255
- dst net 192.168.0.0/24 //目的IP范围192.168.0.1-192.168.0.255
- host www.example.com and not (port 80 or port 25) //非http和非smtp
- host www.example.com and not port 80 and not port 25
- tcp port 23 and host 10.0.0.5 //使用tcp协议, 端口号23, [源/目的]IP地址
- tcp port 23 and not src host 10.0.0.5 
- src host 192.168.1.1 && dst port 80 抓取源地址为192.168.1.1，目的端口为80