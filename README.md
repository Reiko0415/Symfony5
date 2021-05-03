# Symfony5
「PHPフレームワーク　Symfony4入門」を読みながらSymfony5環境でやってみた

## 実行環境
<p>Symfony 5.2.4</p>
<p>PHP  8.0.3</p>


## 注意点
<ol>
 <li> php bin/console:run</li>
 <p>Command "server:run" is not defined. 
 Did you mean one of these?
      dbal:run-sql
      server:dump
      server:log
  となる</p>
  
　<li>composer require symfony/web-server-bundle --dev</li>
  
  <p> [InvalidArgumentException]
  Could not find package symfony/web-server-bundle in a version matching 5.2.*
  となる。</p>
  <p>そのため
  php -S localhost:8001 -t public
  とする。</p>
  
   <li>マイグレーションの実行　php bin/console make:migration</li>
   <p>In AbstractSQLiteDriver.php line 86:　An exception occurred in driver: could not find driver　</p>
   <p>In Exception.php line 18:     could not find driver</p>
   <p>In PDOConnection.php line 38:     could not find driver となる</p>
   <p>そのためphp.iniファイルのextension=pdo_sqliteの先頭の;を削除する</p> 
   
   <li>フラッシュメッセージを利用する</li>
   <p>HomeController.phpに</p>
   <p>use App\Form\HelloType;を追加</p>
   <p>※　Could not load type "App\Controller\HelloType": class does not exist.となるため</p>

   <li>登録用RegisterControllerの作成</li>
   <p>services.ymlに下記の３行を追加</p>
   <p>security:</p>
   <p>encoders:</p>
   <p>App\Entity\User: bcrypt</p>
   <p>※No encoder has been configured for account "App\Entity\User"と表示されるため</p>
</ol>




