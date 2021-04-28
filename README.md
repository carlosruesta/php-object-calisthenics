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

### Sobre herança
Herança é um ótimo recurso da programação orientada a objetos, mas deve ser usado com parcimônia.
Neste link há um exemplo de usos incorretos deste princípio: https://blog.caelum.com.br/como-nao-aprender-orientacao-a-objetos-heranca/amp/
Nós não queremos expor todas as funcionalidades de um mapa através de nossa classe WatchedVideos. Queremos apenas adicionar vídeos e pegar a data do mais antigo. Sendo assim, nossa classe deve TER um mapa, e não SER um.

## Aula 04

### Apenas um operador de acesso por instrução. Apenas uma setinha.
* Com isso aqui vamos favorecer o encapsulamento.
* Lei de Demeter: não fale com estranhos. Só falar com nossos atributos. 
* Exceção à regra: Interface fluente. Aquela que permite chamar os métodos da classe encadeados.
	Mas o método encadeado da classe tem que ser um método que faz sentido chamar de forma encadeada. 

### Não abrevie nunca os nomes
* Motivos para abreviar:
	+ classe/método/variável/atributo/objeto muito usado em vários lugares
	+ o conteúdo faz muita coisa e preciso dar um nome composto

* Reforçamos, novamente, o princípio Tell, Don’t Ask
* Conhecemos a lei de Demeter
* Vimos que dar nomes pode ser uma tarefa difícil
* Aprendemos 2 regras de Object Calisthenics
	+ Tenha apenas 1 ponto (operador de acesso de objetos) por linha (instrução)
	+ Não abrevie (nunca)
	
## Aula 05

### Reduza o número de propriedades por método

