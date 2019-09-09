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

## grep [-abcEFGhHilLnqrsvVwxy][范本样式][文件或目录...]
- -A<显示行数> 除了显示符合范本样式的那一列之外，并显示该行之后的内容
- -B<显示行数> 除了显示符合样式的那一行之外，并显示该行之前的内容
- -C<显示行数> 除了显示符合样式的那一行之外，并显示该行之前后的内容
- -e<范本样式> 指定字符串做为查找文件内容的样式
- -f<规则文件> 指定规则文件，其内容含有一个或多个规则样式，让grep查找符合规则条件的文件内容，格式为每行一个规则样式
- -i 忽略字符大小写的差别
- -l 列出文件内容符合指定的样式的文件名称
- -r递归搜索
- -v 显示不包含匹配文本的所有行
- -n 在显示符合样式的那一行之前，标示出该行的列数编号
```
    #在/etc/passwd文件中查找单词“linuxtechi
    grep linuxtechi /etc/passwd 

    #在多个文件中查找模式
    grep linuxtechi /etc/passwd /etc/shadow /etc/gshadow

    #使用-l参数列出包含指定模式的文件的文件名  
    grep -l linuxtechi /etc/passwd /etc/shadow /etc/fstab /etc/mtab

    #使用-n参数，在文件中查找指定模式并显示匹配行的行号
    grep -n linuxtechi /etc/passwd

    #使用-v参数输出不包含指定模式的行
    grep -v linuxtechi /etc/passwd

    #使用 ^ 符号输出所有以某指定模式开头的行
    grep ^root /etc/passwd

    #使用 $ 符号输出所有以指定模式结尾的行
    grep bash$ /etc/passwd

    #使用 -r 参数递归地查找特定模式
    grep -r linuxtechi /etc/

    #使用 grep 查找文件中所有的空行
    grep ^$ /etc/shadow

    #使用 -i 参数查找模式
    grep -i LinuxTechi /etc/passwd

    #使用 -e 参数查找多个模式
    grep -e "linuxtechi" -e "root" /etc/passwd

    #使用 -f 用文件指定待查找的模式
    grep -f grep_pattern /etc/passwd

    # 使用 -c 参数计算模式匹配到的数量
    grep -c -f grep_pattern /etc/passwd

    #使用-B参数输出匹配行的前4行
    grep -B 4 "games" /etc/passwd

    #使用-A参数输出匹配行的后4行
    grep -A 4 "games" /etc/passwd

    #使用-C参数输出匹配行的前后各4行
    grep -C 4 "games" /etc/passwd
```
