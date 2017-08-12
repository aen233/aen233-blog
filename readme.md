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

- (phpstorm)将welcome视图中，指向home的一行修改为指向Post控制器的index


     @if (Auth::check())
         {{--<a href="{{ url('/home') }}">Home</a>--}}
         <a href="{{ route('posts.index') }}">Articles</a>
     @else
               
- (cmd) php artisan make:seeder PostTableSeeder
- (phpstorm) 修改PostTableSeeder中的run()


    public function run()
        {
            DB::table('posts')->delete();
            
            for ($i = 0; $i < 10; $i++) {
                Post::create([
                    'title' => 'Title ' . $i,
                    'body' => 'Body ' . $i,
                    'user_id' => 1,
                ]);
            }
        }

- (phpstorm) DatabaseSeeder


    public function run()
        {
            // $this->call(UsersTableSeeder::class);
             $this->call(PostTableSeeder::class);
        }

- (cmd) composer dump-autoload
- (cmd) php artisan migrate:refresh --seed 
- (phpstrom) create views.resources/views,New→PHP File(posts/index.blade)
- (phpstorm) PostController


     public function index()
        {
            return view('posts.index')->withPosts(Post::all());
        }
- (phpstorm) posts/index.blade.php
     
复制home.blade.php，粘贴到posts/index.blade.php。
将

    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
    
        <div class="panel-body">
            You are logged in!
        </div>
    </div>
  
替换为：

     <ul>
         @foreach ($posts as $post)
             <li style="margin: 50px 0;">
                 <div class="title">
                     <a href="{{ route('posts.show',$post->id) }}">
                         <h4>{{ $post->title }}</h4>
                     </a>
                 </div>
                 <div class="body">
                     <p>{{ $post->body }}</p>
                 </div>
             </li>
         @endforeach
     </ul>
                
- (phpstorm)create new views：posts目录下新建create,update,show.blade.php.

目标是先完成文章的增删改查（只一个控制器，一个模型），然后是文章和评论的一对多关系，再然后是文章对标签的多对多关系，还有无处不在的用户关系。
先只用ORM，解决基本逻辑关系，然后添加功能找合适的包，用IOC。
今天本来是想折腾select2，弄tag好看一点的，笔记本里没有现成的博客系统，新下了laragon，真的好棒啊laragon
一边写代码一边记笔记，好像很慢的样子。。。。记下来防忘记哈，也查漏补缺。
删除和修改
删除和修改的权限



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
