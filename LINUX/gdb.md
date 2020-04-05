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
* break fuctionname 在函数名为 functionname 的入口处添加一个断点
* break lineNo 在当前文件行号为 LineNo 处添加一个断点
* break filename:lineNo 在 filename 文件行号为 LineNo 处添加一个断点
* breaktrace 查看当前堆栈
* frame 切换到当前调用线程的指定堆栈，具体堆栈通过堆栈序号指定
* print 表达式
* display 表达式
* delete 删除断点
* disassemble 查看汇编代码
* ptype 查看变量类型
* list 查看源码
* info break 查看断点
* info thread 查看当前进程有哪些线程
* disable 1 禁用断点1
* thread 1 切换到线程1
* info args 查看函数参数值
* condition 1 表达式 设置条件断点
