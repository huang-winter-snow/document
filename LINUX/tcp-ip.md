## tcp/ip 报文
![tcp-ip](/IMAGE/tcp-ip.gif)

## tcp报文
![tcp-header](/IMAGE/tcp-header.gif)

## tcp头部
- TCP是用于提供可靠的全双工连接的主要传输协议, 头部长度(20bytes), 可选数据段长度(40bytes)
- source port/destination port: 源端口/目的端口, 每个端口长度(2bytes/16bits)
- sequence number: 序列号, 长度(4bytes/32bits)
- acknowledgement number: 确人序列号, 长度(4bytes/32bits)
- Hlen: 数据段开始位置, 长度(4bits)
- reserved: 长度(3bits)
- flag: 长度(9bits)
- window: 标识所能接收的数据大小, 长度(2bytes/16bits)
- checksum: 长度(2bytes/16bits)
- urgent pointer: 长度(2bytes/16bits)
#### 名词解释
- maximum segment size(MSS) //TCP数据报的最大字节数，即从TCP头部开始直到报文末尾的字节数

## tcp状态
1. SYN_SEND
2. SYN_RCVD
3. ESTABLISHED
4. FIN_WAIT_1
5. CLOSE_WAIT
6. FIN_WAIT_2
7. LAST_ACK
8. TIME_WAIT
9. CLOSED

## 大端,小端字节序
- 大端: 高位字节在前，低位字节在后
- 小端: 低位字节在前，高位字节在后
![tcp-header](/IMAGE/big_endian.gif)