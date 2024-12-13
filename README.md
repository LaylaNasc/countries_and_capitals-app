<h1>Projeto Quiz Países e Capitais</h1>

## Sobre

Este é um aplicativo de perguntas e respostas desenvolvido no curso de Laravel do professor João Ribeiro. O jogo testa seus conhecimentos sobre países e suas capitais.

## Funcionalidades

- Escolha o número de perguntas entre 3 e 30.

- Perguntas geradas aleatoriamente.

- Correção automática de respostas.

- Resultado final com porcentagem de acertos.

## Tecnologias Utilizadas

- PHP 8.2
- Laravel 11
- Docker (como servidor de aplicação)

## Estrutura Principal do Código

- startGame(): Exibe a página inicial.
- prepareGame(): Valida o número de perguntas e prepara o jogo.
- game(): Exibe a pergunta atual.
- answer(): Verifica a resposta do usuário.
- nextQuestion(): Avança para a próxima pergunta ou exibe o resultado.
- showResults(): Mostra o desempenho final do usuário.

## Função Importante

- ajustarPreposicao(): Ajusta automaticamente as preposições antes dos nomes dos países conforme as regras da língua portuguesa.

## Como Configurar o Projeto

### Clone o repositório:
- git clone https://github.com/LaylaNasc/countries_and_capitals-app.git
cd countries_and_capitals-app

### Instale as dependências:
- composer install

### Configure o ambiente:
Copie o arquivo .env.example para .env:
- cp .env.example .env
Configure seu banco de dados no arquivo .env.

### Gere a chave da aplicação:
- php artisan key:generate

### Inicie o ambiente com Docker:
- docker-compose up -d

Acesse o aplicativo em http://localhost:8000.

## Imagens do Projeto

<img src="https://github.com/user-attachments/assets/ea644329-9320-4a27-8c5d-0704161b8f17" alt="telaDeLogin" width="300" heihth="200"> <br>
<img src="https://github.com/user-attachments/assets/3c4da7a9-d5a0-48ee-8605-a747961092c7" alt="telaDeLogin" width="300" heihth="200"> <br>
<img src="https://github.com/user-attachments/assets/b1841515-fe90-4bc0-aa67-f62a7d7cc10e" alt="telaDeLogin" width="300" heihth="200"> <br>
<img src="https://github.com/user-attachments/assets/1ef6c202-7f23-4b55-9497-a726b6f8b7a8" alt="telaDeLogin" width="300" heihth="200"> <br>
  
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
