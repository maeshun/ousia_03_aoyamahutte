# bauenz


## 

## docker 
ビルドして実行
docker compose up --build

## ビルド後に実行
ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load
ln -s /etc/apache2/mods-available/headers.load /etc/apache2/mods-enabled/header.load
apt install -y vim