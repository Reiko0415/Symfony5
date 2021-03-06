# Symfony5
「PHPフレームワーク　Symfony4入門」を読みながらSymfony5環境でやってみた

実行環境）
-------------------- ---------------------------------
  Symfony
 -------------------- ---------------------------------
  Version              5.2.4
  Long-Term Support    No
  End of maintenance   07/2021 (in +147 days)
  End of life          07/2021 (in +147 days)
 -------------------- ---------------------------------
  Kernel
 -------------------- ---------------------------------
  Type                 App\Kernel
  Environment          dev
  Debug                true
  Charset              UTF-8
  Cache directory      ./var/cache/dev (6.3 MiB)
  Build directory      ./var/cache/dev (6.3 MiB)
  Log directory        ./var/log (17 KiB)
 -------------------- ---------------------------------
  PHP
 -------------------- ---------------------------------
  Version              8.0.3
  Architecture         64 bits
  Intl locale          n/a
  Timezone             UTC (2021-03-06T05:48:37+00:00)
  OPcache              false
  APCu                 false
  Xdebug               false
 -------------------- ---------------------------------

うまくいかなかった点）
1.コマンドライン
　　　 php bin/console:run
 と入力すると
　Command "server:run" is not defined.
  Did you mean one of these?
      dbal:run-sql
      server:dump
      server:log
  となる

2.コマンドライン
　　composer require symfony/web-server-bundle --dev
  と入力すると
   [InvalidArgumentException]
  Could not find package symfony/web-server-bundle in a version matching 5.2.*
  となる。
  そのため
  php -S localhost:8001 -t public
  とする。
  
  



