## 0-01
有时候我们想清除某个数组中的空值比如：null、false、0、0.0、[]空数组、''空字符串、'0'字符串0 ，这时 array_filter 函数便能帮上大忙。代码如下：

```
<?php
$input = ['foo', false, -1, null, '', []];
var_dump(array_filter($input));
// 结果 [0 => 'foo', 2 => -1]
```
array_filter 的作用其实是「用回调函数过滤数组中的单元」，它的第二个参数其实是个回调函数，向数组的每个成员都执行这个回调函数，若回调函数的返回值为 true 便保留这个成员，为 false 则忽略。这个函数还有一个特性就是：

如果没有提供 callback 函数， 将删除 array 中所有等值为 FALSE 的条目。

等值为 false 就是转换为 bool 类型后值为 false 的意思。[转换成布尔类型](https://php.net/manual/zh/language.types.boolean.php#language.types.boolean.casting)
注意：如果不填写 callback 函数，0、0.0、'0'字符串0 这些可能有意义的值会被删除。所以如果清除的规则有所不同还需要自行编写 callback 函数。