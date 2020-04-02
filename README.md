# 概要

PHPプログラムを実行するためのシンプルなDocker定義です。
下記２つの環境用のDockerを提供します。

* コマンドラインでPHPを実行するためのDocker
* Web経由でPHPを実行するためのDocker

# コマンドライン用
**cli** ディレクトリにDocker定義ファイルを置いています。

## プログラムの作成方法
**cli/src** ディレクトリにコマンドライン経由で実行したいPHPプログラムを作成してください。
サンプルとして、```helloworld.php```と足し算を行う ```sum.php```を置いています。

## 実行方法
作成したプログラムを実行する場合は以下のコマンドを実行するだけOKです。
```
>cd cli
>docker-compose run php sum.php 1 2
>3
```

# Web用
**web** ディレクトリにDocker定義ファイルを置いています。

## プログラムの作成方法
**web/src** ディレクトリにWeb経由で実行したいPHPプログラムを作成してください。
サンプルとして、```helloworld.php```と足し算を行う ```sum.php```を置いています。

## 実行方法
まずはWebサーバとしてPHPコンテナを起動します。以下のコマンドを実行すればOK。
```
>cd web
>docker-compose up -d
```
コンテナが立ち上がれば、ブラウザで以下のようにPHPを呼び出してみましょう。
```
http://localhost:8080/sum.php
```

