## = ?= :=
var1 = value1 最基本的赋值, $(var1)是value5
var2 := value2 会覆盖之前的值, 这里 $(var2)是value2
var3 ?= value3 只有在该变量为空时才设置值
var4 += value4 将值追加到变量的尾端
var1 = value5
var2 := value6 会覆盖之前的值, 这里 $(var2)是value6