# Desenvolvedor Web PHP - Inaldo Monteiro - inaldomonteiroti@gmail.com
# Documetação - Desenvovedores

Tecnologias Utilizadas: HTML, PHP, CSS, MySQL, Bootstrap.

Esta aplicação foi desenvolvida , seguindo o padrão MVC.

No diretório raiz da aplicação existe um arquivo de conexão (conexao.php) onde devem ser configurados os dados de conexão conforme a utilização.

Antes de utilizar a aplicação, você deve criar o banco de dados em seu MySQL. Podendo se utilizar de um arquivo na raiz desse projeto (vendas.sql)

# Um breve resumo de como está organizado esta aplicação.

Ao entrar na aplicação o arquivo chamado é o index.php. Dentro desse arquivo existe um swich que indentifica a pagina de navegação do projeto. Funciona como se fosse um arquivo de rotas, caso estivessemos usando um framework. Identificado a pagina é chamado uma função que retorna a pagina preferida. Esses Métodos estão dentro da Controller. Após o fluxo chegar no Controoler (controller/HomeController.php) é chamado as views.

......................................................................................................................................
# Desafio Desenvolvedor Web PHP
A idéia deste desafio é nos permitir avaliar melhor as habilidades de candidatos à vagas de Desenvolvedor Web, de vários níveis.

Este desafio deve ser feito por você em sua casa. Com tempo estipulado na sua entrevista, porém normalmente você não deve precisar de mais do que algumas horas.

## Instruções de entrega do desafio
1. Primeiro, faça um fork deste projeto para sua conta no Github (crie uma se você não possuir).
2. Em seguida, implemente o projeto tal qual descrito abaixo, em seu próprio fork.
3. Crie as instruções de instalação e execução do aplicativo em seu readme.md
4. Por fim, envie o link do seu repositorio para avaliarmos seu código


## Descrição do projeto
Você recebeu um arquivo de texto com os dados de vendas da empresa. Precisamos criar uma maneira para que estes dados sejam importados para um banco de dados.

Sua tarefa é criar uma interface web que aceite upload de arquivos, normalize os dados e armazene-os no banco de dados.

Sua aplicação web DEVE:

1. Aceitar (via um formulário) o upload de arquivos text, com dados separados por TAB testar o aplicativo usando o arquivo fornecido. A primeira linha do arquivo tem o nome das colunas. Você pode assumir que as colunas estarão sempre nesta ordem, e que sempre haverá uma linha de cabeçalho. Um arquivo de exemplo chamado 'dados.txt' está incluído neste repositório;
2. Interpretar ("parsear") o arquivo recebido, normalizar os dados, e salvar corretamente a informação em um banco de dados relacional;
3. Exibir todos os registros importados, bem como a receita bruta total dos registros contidos no arquivo enviado após o upload + parser;
4. Se sua vaga é para PHP, deve ser escrita obrigatoriamente em: PHP 7.4 ou superior(sem frameworks) e MySQL;
5. Ser simples de configurar e rodar a partir das instruções fornecidas;
7. Funcionando em ambiente Linux ou Windows. Ela deve utilizar apenas linguagens e bibliotecas livres ou gratuitas;
9. Ter uma boa aparecia e ser fácil de usar;

Pontos positvos para o uso das tecnologias: Docker, Bootstrap, MVC e Dotenv.

## Avaliação
Seu projeto será avaliado de acordo com os seguintes critérios:

1. Sua aplicação atende funcionalmente o que foi pedido;
2. Você documentou a maneira de configurar o ambiente e rodar sua aplicação na maquina do avaliador;
3. Você seguiu as instruções enviadas;
4. Voce segue as boas práticas de programação e entrega para o Cliente;
5. O código escrito é facil de entender e manter;
6. Você se preocupa com o uso do aplicativo pelo Usuário.

Adicionalmente, tentaremos verificar a sua familiarização com as bibliotecas padrões (standard libs), bem como sua experiência com programação orientada a objetos a partir da estrutura de seu projeto, preucupação com o objetivo da aplicação e do seu uso pelo usuário, suporte e manutenção do código por outros desenvolvdores.

### Referência

Este desafio foi baseado neste outro desafio: https://github.com/taxweb/avaliacao_desenvolvedor
