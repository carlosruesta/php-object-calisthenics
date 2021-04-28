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

## Aula 02

### 2.- Nunca use ELSE
### 2.1	Early return
### 2.2 Fail fast

Existe uma métrica muito famosa para saber quão complexo nosso código está. O nome desta métrica é Complexidade Ciclomática.

O cálculo dessa métrica é relativamente complexo, mas basicamente, quanto mais ifs e elses, mais complexo nosso método. Esse cálculo nos diz quantos possíveis caminhos nosso código pode percorrer.

Ao evitar o uso de else, nós escrevemos códigos com uma Complexidade Ciclomática menor.

## Aula 03

### Envolva seus tipos primitivos, caso eles tenham comportamento 

# Sobre herança
Herança é um ótimo recurso da programação orientada a objetos, mas deve ser usado com parcimônia.
Neste link há um exemplo de usos incorretos deste princípio: https://blog.caelum.com.br/como-nao-aprender-orientacao-a-objetos-heranca/amp/
Nós não queremos expor todas as funcionalidades de um mapa através de nossa classe WatchedVideos. Queremos apenas adicionar vídeos e pegar a data do mais antigo. Sendo assim, nossa classe deve TER um mapa, e não SER um.