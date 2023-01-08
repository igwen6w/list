List extension for laravel-admin
======

这个包是基于`Encore\Admin\Form\Field\ListField`，增加了可拖拽排序的功能。


## 安装

```bash
composer require igwen6w/list
```

然后
```bash
php artisan vendor:publish --tag=igwen6w-list-sortable
```

## 配置

在`config/admin.php`文件的`extensions`配置部分，加上属于这个扩展的配置
```php

    'extensions' => [

        'listSortable' => [
        
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
        ]
    ]

```

## 使用

### 表单中使用

```php

$form->listSortable();
```

License
------------
Licensed under [The MIT License (MIT)](LICENSE).