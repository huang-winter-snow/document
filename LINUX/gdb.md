## 启动 
* gdb filename 调试目标程序
* gdb attach pid 附加进程
* gdb filename corename 调试core文件


## 命令
* run 运行一个程序
* continue 让暂停的程序继续运行
* step 运行下一行，进入函数
* next 运行下一行，不进入函数
* until 运行到指定行停下来
* finish 结束当前调用函数，到上一层函数调用处
* return 结束当前调用函数并返回指定值，到上一层函数调用处
* jump 将当前程序执行流跳转到指定行或地址
* break 添加断点
* breaktrace 查看当前堆栈
* frame 切换到当前调用线程的指定堆栈，具体堆栈通过堆栈序号指定
* print 表达式
* display 表达式
* delete 删除断点
* disassemble 查看汇编代码
* ptype 查看变量类型
* list 查看源码
* info 查看断点 / 线程等信息
* thread 切换到指定线程
