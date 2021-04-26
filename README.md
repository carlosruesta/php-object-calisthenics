# php-object-calisthenics

## Setup do projeto

* Precisei rodar o composer update
* Precisei ativar o PECL dentro do PHP Storm
* Precisei baixar a DLL da extensão DS na versão 1.3.1 própria para o PHP 7.4
* Adicionei a DLL na pasta [ext] da instalação do PHP 7.4
* Adicionei no php.ini a extensão: extension=ds
	* https://github.com/php-ds/ext-ds
	*  A extensão serve para ampliar as capacidades do PHP com estruturas de dados mais modernas como Map;


## Aula 01

### 1.- Não use getters e setters
###	1.1- Tell, don't ask

Utilizar métodos de acesso a nossas propriedades faz sentido, desde que nós não utilizemos o retorno para tomar decisões que poderiam estar encapsuladas na classe.

Evite usar setters sempre que possível. Dessa forma você terá **OBJETOS IMUTÁVEIS**, ou seja, que não sofrem alteração. 

Esta técnica ajuda bastante na previsibilidade de seu código.

Com isso aprendemos a primeira regra deste treinamento: Nunca use (ou pelo menos evite) getters e setters.



	