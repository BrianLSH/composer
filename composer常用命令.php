
composer 创建项目
命令          创建项目           优先下载压缩            软件包名称          项目名称   版本号
composer     create-project       --prefer-dist         laravel/laravel      test     5.5.*

composer            表示执行composer程序
create-project     通过composer去创建项目
laravel/laravel    需要创建的项目名称
--prefer-dist      优先下载压缩包方式，而不是直接从github上下载源码

composer常用命令
安装指定的包  composer require
如果手动更新了composer.json需要更新autoload，composer dump-autoload  或    composer dump
软件更新有时候软件安装好后，没过多久官方就进行了软件的更新，所以这个时候，我们不用卸装重新安装，而是可以通过命令来进行线上更新到最新的版本。 composer self-update
更新成功，如果你要回退可以使用，如下命令退出到更新之前的版本     composer self-update --rollback



版本号说明
laravel 版本为例
1.0.2         # 明确版本
>1.0.2        # 大于1.0.2
>=1.0.2       # 大于等于1.0.2
<1.1|>=1.2   # 小于1.1  或  大于等于1.2
1.0.*         # 执行1.0.的最高版本，与<1.1等效
>1.0,<2.0    # 大于1.0 并且 小于2.0
~1.2          # >=1.2,<2.0
~1.2.3        # >=1.2.3,<1.3
^1.2          # >=1.2,<2.0
^2.3          # >=2.3,<3.0
^3.4.6        # >=3.4.6,<4.0.0
~3.4.6        # >=3.4.6,<3.5.0
",逗号"代表and并且关系
"|竖杠"代表or或的关系
^:大版限制(封顶到当前版本顶级)
~:小版限制(封顶到当前版本的次版顶级)

版本问题：
一般的软件版本有3个位数，例如2.1.4，从左到右分为1位/2位/3位
3位：小bug调试
2位：功能更新
1位：大版本更新，兼容不好
