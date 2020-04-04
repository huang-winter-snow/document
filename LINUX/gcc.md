## 编译

```
    gcc -c main.c ==== 只编译不链接，生成.o目标文件
    gcc -E main.c ==== 预处理 
    gcc -S main.c ==== 只编译不汇编
    gcc -g main.c -o main_d ==== 可进行gdb调试
    gcc -Dname='xinzhu' === 定义宏 define name 'xinzhu'

    gcc main.c -o main -I../path
    gcc main.c -o main -I../path -L../path

    gcc -Wall 显示所有警告信息
    gcc -Werror 警告作为错误处理

    gcc -I [大写字母i]寻找头文件目录 /usr/local/include 
    gcc -L [大写字母l]寻找库文件 /usr/local/lib
    gcc -l word [小写字母l], 寻找动态链接库文件libword.so
```

## 静态库 .a结尾
```
    # 创建.o目标文件
    gcc -c test.c -o libtest.o
    #创建libtest.a静态库
    ar rcs libtest.a libtest.o
    #链接静态库
    gcc -o test main.c -ltest
```

## 动态库 .so结尾
```
    # 使用位置无关代码创建目标文件
    gcc -c -fPIC test.c -o test.o
    # 创建共享库libtest.so
    gcc -shared -o libtest.so test.o
    # 链接静态库
    gcc -o test main.c -ltest
```