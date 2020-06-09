## sort
- -u --unique 输出去重
- -r --reverse 排序结果倒序
- -o --output 排序结果输出到文件
- -n --numeric-sort 根据字符串数值比较
- -t --field-separator 指定列分隔符
- -k [FStart[.CStart]][Modifier][,[FEnd[.CEnd]][Modifier]] 指定列排序

## 基础数据 test.txt
- google 110 5000
- baidu  120 5000
- ali    50  6000
- qq     60  8000

## example
- sort -t '' -k 1 test.txt
- sort -n -t '' -k 2 test.txt
- sort -n -t '' -k 2 -k 3 test.txt
- sort -n -t '' -k 3r -k 2 test.txt
- sort -t '' -k 3nr -k 2n test.txt
- ps aux | sort -k4,4nr | head -n 10 //查看占用内存最大的10个进程
