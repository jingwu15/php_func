### 通用函数

### 1. 介绍
```
为减少重复的代码， 将常用的业务无关的代码提炼为函数，方便使用
```


#### 2. 配置

##### 2.1 版本及依赖
-----------------------
0.1.1, PHP >=5.4.0 (in progress)

##### 2.2 使用composer
-----
添加依赖 ``jingwu/php_func`` 到项目的 ``composer.json`` 文件:
```json
    {
        "require": {
            "jingwu/php_func": "0.1.0"
        }
    }
```

```
require "vendor/autoload.php";

use Jingwu\Func as F;

$data = [
    ["id" => 1, "email" => "ldq@qq.com",  "name"  => "tester",   "title" => "title"   ],
    ["id" => 2, "email" => "ldq2@qq.com", "name"  => "zhongguo", "title" => "title222"],
];
var_dump(F\arrColumns($data, 'email'));
var_dump(F\arrColumns($data, 'email', 'name'));
var_dump(F\arrColumns($data, ['email', 'title']));
var_dump(F\arrColumns($data, ['email', 'title'], 'name'));
var_dump(F\arrColumns($data, ['email', 'title', 'code']));

$data = ["id" => 2, "email" => "ldq2@qq.com", "name"  => "zhongguo", "title" => "title222"];
var_dump(F\arrKeysPart($data, ['id', 'email']));
```

