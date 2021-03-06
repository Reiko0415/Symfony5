# Symfony5
「PHPフレームワーク　Symfony4入門」を読みながらSymfony5環境でやってみた

<h1>実行環境）</h1>
<h2>Symfony</h2>
<p>Version              5.2.4</p>
<h2>PHP</h2>
<p>Version              8.0.3</p>

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
  
  



