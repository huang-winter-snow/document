## 输出重定向

* command > file 2>&1 标准输出，错误输出写入文件file
* command 2> file 错误数据写入文件file

## uname

* uname -m 打印机器硬件名称 例：x86_64
* uname -s 打印操作系统名称 例：Darwin
* uname -n 显示网络主机名称

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
    printf "\033[31m This text is red \033[0m This text has default color\n"
    printf "\033[31;43m This text is red with rellow background \033[0mThis text has default color \n"
```

## head tail wc
- head -n 1 1.txt 查看文件第一行
- head -c 1 1.txt 查看文件第一个字节 注：不是字符
- wc -l 1.txt 显示文本行数
- wc -w 1.txt 显示文本单词个数
- wc -c 1.txt 显示文本字节数

## $@ $$ $? $n 
- $0 当前脚本名称
- $n 传递给脚本或函数的参数。n 是一个数字，表示第几个参数。例如，第一个参数是$1，第二个参数是$2
- $# 参数个数
- $@ 传递给脚本或函数的所有参数
- $* 传递给脚本或函数的所有参数
- $? 上个命令的退出状态，或函数的返回值
- $\$ 当前Shell进程ID

## ldd 查看文件依赖的共享库
```
    ldd /bin/ls

    linux-vdso.so.1 (0x00007ffcc3563000)
    libselinux.so.1 => /lib64/libselinux.so.1 (0x00007f87e5459000)
    libcap.so.2 => /lib64/libcap.so.2 (0x00007f87e5254000)
```

## 变量
```
    name="test.gif"
    echo ${name%.*} #输出test
    echo ${name#*.} #输出gif

    name="prefix.test.gif"
    echo ${name%%.*} #输出prefix
    echo ${name##*.} #输出gif
```
