## grep [-abcEFGhHilLnqrsvVwxy][范本样式][文件或目录...]
- -A<显示行数> 除了显示符合范本样式的那一列之外，并显示该行之后的内容
- -B<显示行数> 除了显示符合样式的那一行之外，并显示该行之前的内容
- -C<显示行数> 除了显示符合样式的那一行之外，并显示该行之前后的内容
- -e<范本样式> 指定字符串做为查找文件内容的样式
- -f<规则文件> 指定规则文件，其内容含有一个或多个规则样式
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