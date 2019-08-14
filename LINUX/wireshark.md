### 配置SSL解密
1. cd ~ && make tls && cd tls && touch sslkeylog.log
2. launchctl setenv SSLKEYLOGFILE ~/tls/sslkeylog.log 设置启动的应用读取环境变量
3. Preferences -> Protocols -> SSl -> (Pre)-Master-Secret 添加sslkeylog文件