## 编译

```
    gcc -c main.c ==== 编译不链接，生成.o目标文件
    gcc -E main.c ==== 预处理 
    gcc -S main.c ==== 只编译不汇编
    gcc -g main.c -o main_d ==== 可进行gdb调试
    gcc -Dname='xinzhu' === 定义宏 define name 'xinzhu'

    gcc main.c -o main -I../path
    gcc main.c -o main -I../path -L../path

    gcc -I [大写字母i]寻找头文件目录 /usr/local/include 
    gcc -L [大写字母l]寻找库文件 /usr/local/lib
    gcc -l word [小写字母l], 寻找动态链接库文件libword.so
```

## 静态库 动态库