## 输出重定向

* command > file 2>&1 标准输出，错误输出写入文件file
* command 2> file 错误数据写入文件file

## uname

* uname -m 打印机器硬件名称 例：x86_64
* uname -s 打印操作系统名称 例：Darwin

## printf

* printf  format-string  [arguments...]
* printf "%-10s %-8s %-4s\n"  姓名  性别  体重kg

## 输出控制 \033

* \033 esc 转移字符 0m: 闭所有属性, 1m: 设置高亮度 4m: 下划线
* 字体颜色 30:黑 31:红 32:绿 33:黄 34:蓝 35:紫 36:深绿 37:白色
* 背景颜色 40:黑 41:红 42:绿 43:黄 44:蓝 45:紫 46:深绿 47:白色
* 例：printf("\033[31m This text is red \033[0m This text has default color\n")
*         printf("\033[31;43m This text is red with rellow background \033[0mThis text has default color \n")
