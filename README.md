## SSPanel-Metron主题，目前由@BobS9维护开发中。

[使用文档](https://wiki.sspanel.org) | [配套XrayR后端](https://github.com/xocoder/XrayR) | [API 文档](https://marcosteam.gitbook.io/sspanel-api/)
#### 1.连接 SSH 安装宝塔面板

#### 2.宝塔面板安装环境, 推荐使用 PHP 7.2、MySQL 5.6、Nginx 1.16

#### 3.宝塔面板创建网站, 域名等信息自行填写

#### 4.连接 SSH 下载源码

`cd /www/wwwroot/你的网站文件夹名`

#### 5.使用composer安装依赖


```shell
wget https://getcomposer.org/installer -O composer.phar && php composer.phar && php composer.phar install
```


#### 6.复制配置文件

```shell

cp config/.config.example.php config/.config.php

cp config/.metron_setting.example.php config/.metron_setting.php

cp config/appprofile.example.php config/appprofile.php
```

.config.php设置后执行`php xcat Tool initQQWry` 下载IP解析库

#### 8.网站设置

打开 宝塔面版 > 网站 > 你的网站


    在 网站目录 里取消勾选 防跨站攻击，运行目录里面选择 /public，点击保存。

在 伪静态 中填入下面内容，然后保存


```shell
location / {
try_files $uri /index.php$is_args$args;
}
```

#### 9.在SSH里的网站目录下执行，给网站文件755权限

```shell
cd ../
chmod -R 755 你的文件夹名/
chown -R www:www 你的文件夹名/
```

#### 10.数据库操作

首次迁移: 导入网站目录下的`sql/glzjin_all.sql` 文件

将数据库user表里的全部用户的theme列改为metron，使用phpmyadmin执行这条sql语句:
```sql
UPDATE user SET theme='metron'
```


###定时任务(注意更换你的网站目录)
```
crontab -l > crontab.list

echo "*/1 * * * * /usr/bin/php /home/wwwroot/tabler/xcat Job SendMail
*/1 * * * * /usr/bin/php /home/wwwroot/tabler/xcat Job CheckJob
0 */1 * * * /usr/bin/php /home/wwwroot/tabler/xcat Job UserJob
59 23 * * * /usr/bin/php /home/wwwroot/tabler/xcat Statistics CheckIn
30 23 * * * /usr/bin/php /home/wwwroot/tabler/xcat SendDiaryMail
0 0 * * * /usr/bin/php /home/wwwroot/tabler/xcat Statistics Another
0 0 * * * /usr/bin/php -n /home/wwwroot/tabler/xcat Job DailyJob" >> crontab.list

crontab crontab.list
rm crontab.list
```
###可选定时任务
```
5 0 * * * /usr/bin/php /home/wwwroot/tabler/xcat FinanceMail day 
6 0 * * 0 /usr/bin/php /home/wwwroot/tabler/xcat FinanceMail week
7 0 1 * * /usr/bin/php /home/wwwroot/tabler/xcat FinanceMail month
```