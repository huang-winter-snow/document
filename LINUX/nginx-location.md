## location

#### 上下文位置
- server location
#### 语法 
- location [ = | ~ | ~* | ^~ ] uri { ... }
- location @name { ... }
```
    location = /demo  完全匹配
    location ^~ /demo  前缀匹配
    location ~ /demo  正则匹配
    location ~* /DEMO  正则匹配，不区分大小写
    location /  通用匹配
```
#### 匹配优先级
- 完全匹配 > 前缀匹配 > 正则匹配 > 正常匹配(不区分大小写) > 通用匹配
