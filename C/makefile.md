## 执行流程

- 1.读入主Makefile (主Makefile中可以引用其他Makefile)
- 2.读入被include的其他Makefile
- 2.初始化文件中的变量
- 4.推导隐晦规则, 并分析所有规则
- 5.为所有的目标文件创建依赖关系链
- 6.根据依赖关系, 决定哪些目标要重新生成
- 7.执行生成命令

## 变量

* MAKECMDGOALS  变量记录了命令行参数指定的终极目标列表
* 例: make hello world  $(MAKECMDGOALS) = hello world
* \$\${VAR} 展开对应shell变量${VAR}

## = ?= :=

* var1 = value1 最基本的赋值, 不立即展示变量
* var2 := $(value2 )立即展开变量,  := 只能使用前面定义好的变量, = 可以使用后面定义的变量
* var3 ?= value3 只有在该变量为空时才设置值
* var4 += value4 将值追加到变量的尾端

## 错误抑制符 @ -

* 不用前缀, 输出执行的命令以及命令执行的结果, 出错的话停止执行
* 前缀 @, 只输出命令执行的结果, 出错的话停止执行
* 前缀 -, 命令执行有错的话, 忽略错误, 继续执行 例: @echo $(name)

## $@ $^ $< $?

* $@ 表示目標文件
* $^ 表示所有依赖文件
* $+ 表示所有依赖(文件包含重复)
* $< 表示第一个依赖文件
* $? 表示比目标还要新的依赖文件列表

## wildcard pattern placeholder
```
    src := a.c b.c 

    $(wildcard *.c) 匹配所有后缀.c文件
    $(src: .c=.c) 替换文件后缀.c为.o

    模式佔位符匹配规则: 目标和依赖文件名必须一样, 即a.c, a.c
    %.o : %.c
        $(CC) -c $< -o $@
```

## .PHONY 伪目标
```
    .PHONY: clean
    clean: 
        rm -rf *
```

## findstring

    $(findstring <find>,<in>) 
    
    #函数功能: 在字符串<in>中查找<find>字符串
    #返回：如果找到，那么返回<find>，否则返回空字符串。

## filter

    $(filter pattern…,text)
    
    #函数功能: 过滤掉字串"TEXT"中所有不符合模式“PATTERN”的单词, 保留所有符合此模式的单词. 可以使用多个模式, 模式中一般需要包含模式字符"%"
    #返回值: "TEXT"字串中所有符合模式"PATTERN"的字串

## words

    $(words <text>)
    #函數功能: 统计中字符串中的单词个数
    #返回值: 返回中的单词数

## strip

    $(strip <string>)
    功能：去掉<string>字串中开头和结尾的空字符。
    返回：返回被去掉空格的字符串值

## subst

    $(subst search, replace, text)
    功能: 查找text里的search, 用replace替换
    返回: 替换后的字符串