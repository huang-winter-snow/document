## 执行流程
- 1.读入主Makefile (主Makefile中可以引用其他Makefile)
- 2.读入被include的其他Makefile
- 2.初始化文件中的变量
- 4.推导隐晦规则, 并分析所有规则
- 5.为所有的目标文件创建依赖关系链
- 6.根据依赖关系, 决定哪些目标要重新生成
- 7.执行生成命令

## = ?= :=
* var1 = value1 最基本的赋值, $(var1)是value5
* var2 := value2 会覆盖之前的值, 这里 $(var2)是value2
* var3 ?= value3 只有在该变量为空时才设置值
* var4 += value4 将值追加到变量的尾端
* var1 = value5
* var2 := value6 会覆盖之前的值, 这里 $(var2)是value6

## @ - 
* 不用前缀, 输出执行的命令以及命令执行的结果, 出错的话停止执行
* 前缀 @, 只输出命令执行的结果, 出错的话停止执行
* 前缀 -, 命令执行有错的话, 忽略错误, 继续执行 例: @echo $(name)


## findstring
    $(findstring <find>,<in>) 

    #在字串<in>中查找<find>字串
    ##返回：如果找到，那么返回<find>，否则返回空字符串。

## filter 
    $(filter pattern…,text)

    #返回匹配pattern的文本

