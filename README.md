## 关于本项目
开发此分支专门为解决PHP处理数组问题提供解决思路，为大家在日常开发中提供一些更广阔的解决思路。

案例包含以下三方面的：

  1、原生的数组相关函数；
  
  2、对PHP数组函数的封装；
  
  3、自己自定义封装；
  
  
 ## 书写样例：

```
// +----------------------------------------------------------------------
// | 多字段二维数组，根据某字段进行排序
// +----------------------------------------------------------------------

/**
 * 多字段二维数组，根据某字段进行排序
 * @param arr $data 要排序的数组（必填）
 * @param str $field 要排序的字段（必填）
 * @param str $sort 排序规则：SORT_DESC、SORT_ASC（必填）
 * @return arr
 * @author Tom
 * @Time 2019/7/7 23:00
 * */
function array_sort($data, $field, $sort){
  $fields = array_column($data, $field);
  array_multisort($fields, $sort, $data);
  return $data; 
}
```
  

