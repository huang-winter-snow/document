## 输出重定向

* command > file 2>&1 标准输出，错误输出写入文件file
* command 2> file 错误数据写入文件file

## uname

* uname -m 打印机器硬件名称 例：x86_64
* uname -s 打印操作系统名称 例：Darwin

## printf

* printf  format-string  [arguments...]

* 使用%s时，在格式指示符中的转义字符能够被解析，而参数列表中的转义字符则不会被解析，但是若使用%b指示符，printf会解析格式指示符和参数列表中的转义字符,其后的参数列表需要用双引号

* printf "%-10s %-8s %-4s\n"  姓名  性别  体重kg

* printf "%b" "hello\tworld"  hello world·

## 输出控制 \033

- \033 esc 转移字符 0m: 闭所有属性, 1m: 设置高亮度 4m: 下划线
- 字体颜色 30:黑 31:红 32:绿 33:黄 34:蓝 35:紫 36:深绿 37:白色
- 背景颜色 40:黑 41:红 42:绿 43:黄 44:蓝 45:紫 46:深绿 47:白色

```
例：
    printf("\033[31m This text is red \033[0m This text has default color\n")
    printf("\033[31;43m This text is red with rellow background \033[0mThis text has default color \n")
```

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
