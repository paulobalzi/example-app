# LARAVEL

## ADMINLTE

Implantando a biblioteca AdminLTE na aplicação

É possível fazer a integração através de pacotes:

- [www.aldohadinata.com](https://www.aldohadinata.com/how-to-integrate-adminlte-with-laravel/)
- [jeroennoten](https://github.com/jeroennoten/Laravel-AdminLTE)

ou via composer (método utilizaod)

~~~bash
composer require "almasaeed2010/adminlte=~3.2"
~~~

fonte: <https://adminlte.io/docs/3.2/>

Após a execução do comando acima, os arquivos serão copiados para a pasta `/home/vagrant/estudo/laravel/example-app/vendor/almasaeed2010`

## COMPILANDO ASSETS

### INSTALANDO NODE

Usar o pacote NVM (node version manager), basta executar o comando abaixo

~~~bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
~~~

Depois atualizar o shell. No meu caso executei o comando abaixo

~~~bash
source ~/.zshrc
~~~

> Fonte: <https://www.freecodecamp.org/news/node-version-manager-nvm-install-guide/>

Comando para instalação do node

- nvm install latest
- nvm install vX.Y.Z
instalando uma versão específica
- nvm alias default vX.Y.Z
para tornar essa versão a padrão do SO

~~~bash
nvm install v18.12.1
~~~

Saida

~~~bash
Downloading and installing node v18.12.1...
Downloading https://nodejs.org/dist/v18.12.1/node-v18.12.1-linux-x64.tar.xz...
**************************************************************************************************************** 100.0%
Computing checksum with sha256sum
Checksums matched!
Now using node v18.12.1 (npm v8.19.2)
Creating default alias: default -> v18.12.1
~~~


