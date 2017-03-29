1. controller 可以添加
2. service
3. 页面元素自定义
4. 添加 form/html

#### controller 变量：
- page_title: 页面标题

### 安装
 `composer require arvin/adminlte-for-laravel`
### 配置
1. 添加 `Arvin\Admin\Providers\ArvinServiceProvider::class,` 到 `config/app.php`的`providers`

2. `php artisan vendor:publish`

3. `.env` 配置

| 参数 | 说明 |
|:---|:---|
|SITE_TITLE|网站标题|
 
 
