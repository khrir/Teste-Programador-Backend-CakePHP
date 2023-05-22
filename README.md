# Teste Programador Backend CakePHP
![Desafio](/Desafio.md)

---
## :rocket: Tecnologias
* Php 7.4
* MySQL 5.7.42
* CakePHP 2.10.24
* ![Pdf plugin](https://github.com/aelian-repo/Pdf/tree/Novo-Make-Pdf)

---
Para poder executar o projeto, faz-se necessário subir os containers docker.
```
sudo docker run --name cake-api -v $PWD:/app -p 8089:80 -it -d webdevops/php-apache:7.4
```
```
sudo docker run --name mysql -e MYSQL_ROOT_PASSWORD=root -d mysql:5.7.42
```
A partir disso, o arquivo ```/app/Config/database.php``` deve ser modificado, 
informando o endereço IP do container ```mysql```. Para ter acesso a essa informação, 
basta inspecionar o container com o comando ```sudo docker inspect mysql```.

Após estabelecer a conexão entre aplicação e container mysql, deve-se criar o database.
O arquivo ```/app/Config/Schema/metadata.sql``` apresenta a estrutura usada no projeto,
basta copiar e executar os comandos dentro do container mysql.

Para acessar o container mysql, basta executar os comandos:
```
sudo docker exec -it mysql bash
```
```
mysql -u root -p
password: root
```
Assim, é só executar os comandos sql, bloco por bloco, presentes no arquivo supracitado.


Com isso, é possível acessar o servidor tanto pelo endereço ip do container cake-api, 
quanto pelo localhost na porta definida: ```localhost:8089```.

---
Para conseguir utilizar a função de imprimir prestadores, deve-se clonar o projeto 
![Pdf Plugin](https://github.com/aelian-repo/Pdf/tree/Novo-Make-Pdf) dentro da pasta de Plugins
do Cake. Não possível subir a aplicação já com o plugin. Após clonar o projeto,
basta acessar a pasta e executar o comando ```composer update``` para instalar as dependências da lib.
Quando executada, a função gera um PDF e o armazena no diretório ```/app/webroot ```.
