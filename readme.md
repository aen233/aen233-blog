<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## note

- use [laragon](https://forum.laragon.org/topic/473/download-laragon)
- wamp : Apache 2.4, Nginx 1.12, MySQL 5.7, PHP 7.1.7, Node.js 6.11, yarn 0.25.2 + ngrok, git, ...
- (laragon panel) click 'Menu'→quick create→laravel→Project Name(aen233-blog)
- (laragon panel) click 'Menu'→www->aen233-blog (http://aen233-blog.dev/).you can see beautifull 'laravel'.
- (laragon panel) click 'Terminal'.Open cmd.
- (cmd) git init,git add,git remote,git commit,git push.
- (cmd) php aritisan make:auth. you can see LOGIN and REGISTER on welcome page.
- open project with Phpstorm.
- (phpstorm) .env→DB_DATABASE,DB_USERNAME,DB_PASSWORD.
- (laragon panel) rightClick→MYSQL→Change root password
- (cmd) php artisan migrate.you can register success and see Dashboard,you are logged in!
- time 2017/8/13 0:59  laragon is awesome.
- (cmd) php artisan make:controller PostController --resource
- (cmd) php artisan make:model Post -m
- (phpstorm) migration post up()
- (phpstorm) Route::resource('posts', 'PostController');

![posts.index](http://osp85cwvh.bkt.clouddn.com/17-8-14/29970009.jpg)

目标是先完成文章的增删改查（只一个控制器，一个模型），然后是文章和评论的一对多关系，再然后是文章对标签的多对多关系，还有无处不在的用户关系。
先只用ORM，解决基本逻辑关系，然后添加功能找合适的包，用IOC。
今天本来是想折腾select2，弄tag好看一点的，笔记本里没有现成的博客系统，新下了laragon，真的好棒啊laragon
一边写代码一边记笔记，好像很慢的样子。。。。记下来防忘记哈，也查漏补缺。
删除和修改
删除和修改的权限

嗯基本的CURD

新get了一个很棒的东西，极简图床，截图后拖到极简图床，自动上传到七牛云，返回markdown格式，直接复制粘贴就好啦

phpstorm很好用的两个快捷键，ctrl+R，批量替换，replace all，还有ctrl+alt+L，自动格式化代码

很基础很小白的博客文章CURD完成啦。2017/8/14 00:51
## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
"# aen233-blog" 
