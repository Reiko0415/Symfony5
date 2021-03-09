# Symfony5
「PHPフレームワーク　Symfony4入門」を読みながらSymfony5環境でやってみた

## 実行環境
<p>Symfony 5.2.4</p>
<p>PHP  8.0.3</p>


## 環境設定の注意点
<ol>
 <li> php bin/console:run</li>
　Command "server:run" is not defined.
  Did you mean one of these?
      dbal:run-sql
      server:dump
      server:log
  となる
  
　<li>composer require symfony/web-server-bundle --dev</li>
  
   [InvalidArgumentException]
  Could not find package symfony/web-server-bundle in a version matching 5.2.*
  となる。
  そのため
  php -S localhost:8001 -t public
  とする。
 </ol>



