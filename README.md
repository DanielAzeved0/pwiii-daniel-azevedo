# pwiii-daniel-azevedo
Aulas de Programação Web II com o professor João Siles


 ###Aulas de Programação Web III dia 11/08/2025

### **Instalação e Configuração do Laravel**

Este guia detalha o processo de instalação e a configuração inicial de um projeto Laravel. Siga os passos abaixo para começar.

#### **Pré-requisitos**

Antes de iniciar, certifique-se de que seu ambiente de desenvolvimento atende aos seguintes requisitos:

-   **PHP**: Versão 8.2 ou superior.
    
-   **Composer**: Gerenciador de dependências do PHP. Você pode baixá-lo em [getcomposer.org](https://getcomposer.org/).
    
### **Opção 1: Clonar um projeto existente do GitHub**

Se você já tem um projeto Laravel em um repositório, siga estes passos para configurá-lo em sua máquina local.

1.  **Inicie o XAMPP**
    
    Abra o **XAMPP Control Panel** e clique nos botões **Start** para os módulos **Apache** e **MySQL**. Eles ficarão verdes, indicando que os serviços estão rodando.
    
2.  **Clone o repositório na pasta `htdocs`**
    
    Abra seu terminal (**CMD** ou **PowerShell**) e navegue até a pasta `htdocs` do XAMPP, que geralmente está em `C:\xampp\htdocs`.
    
    Bash
    
    ```
    cd C:\xampp\htdocs
    
    ```
    
    Em seguida, clone o seu repositório do GitHub, substituindo a URL abaixo pela URL do seu projeto:
    
    Bash
    
    ```
    git clone https://github.com/usuario/repositorio.git
    
    ```

#### **Passo 2: Instalação do Laravel**

Existem duas formas de criar um novo projeto Laravel. Os comandos abaixo devem ser executados no seu **terminal**, **CMD** ou **PowerShell**. No Windows, é altamente recomendado que você **execute o PowerShell como administrador** para evitar problemas de permissão.

**Opção A: Usando o Composer**

Este é o método mais comum e direto. Ele cria um novo projeto e instala todas as dependências necessárias.

1.  Abra seu **terminal** e execute o comando, substituindo `nome-do-projeto` pelo nome desejado para a sua aplicação:
    
    Bash
    
    ```
    composer create-project laravel/laravel nome-do-projeto
    
    ```
    

**Opção B: Usando o Laravel Installer**

Se você planeja criar muitos projetos Laravel, instalar o Laravel Installer globalmente pode simplificar o processo.

1.  Abra seu **terminal** e instale o installer com o Composer:
    
    Bash
    
    ```
    composer global require laravel/installer
    
    ```
    
2.  Crie um novo projeto usando o comando `laravel new`:
    
    Bash
    
    ```
    laravel new nome-do-projeto
    
    ```
    

----------

### **2. Instalação e Iniciação de Projeto Laravel **

Depois que o aplicativo for criado, você pode iniciar o servidor de desenvolvimento local do Laravel, o queue worker e o servidor de desenvolvimento do Vite usando o `dev` script do Composer.

1.  **Navegue até o diretório do projeto**
    
    Entre na pasta do projeto que você acabou de criar. Execute o comando no seu terminal:
    
    Bash
    
    ```
    cd nome-do-projeto
    
    ```
    
  
2.  **Instale as dependências e inicie o servidor**
    
    Crie o arquivo de ambiente, gere a chave da aplicação, instale as dependências do Node.js e compile os assets do projeto. Por fim, inicie o servidor de desenvolvimento, o queue worker e o Vite:
    
    Bash
    
    ```
    npm install 
    npm run build
        
    ```

    
3.  **Instale as dependências do Composer:**
    
    bash
    
    ```
    composer install
    
    ```
    
    Se não tiver o Composer,  [instale aqui](https://getcomposer.org/).
    
4.  **Copie o arquivo de configuração de ambiente:**
    
    bash
    
    ```
    cp .env.example .env
    
    ```
    
5.  **Configure o arquivo  `.env`:**
    
    -   Abra o arquivo  `.env`  e ajuste as configurações de banco de dados, cache, etc., conforme necessário.
6.  **Gere a chave da aplicação:**
    
    bash
    
    ```
    php artisan key:generate
    
    ```
    
7.  **Rode as migrations do banco de dados (se necessário):**
    
    bash
    
    ```
    php artisan migrate
    
    ```

8.  **Por ultimo rode esse comando para iniciar o projeto:**

	bash 

	````
    composer run dev

	````
 Sua aplicação estará acessível no seu navegador em **http://localhost:8000**.

 
 ### Aulas de Programação Web III - 18/08/2025

#### Introdução ao Tailwind e Configuração com SQLite

Na aula de hoje, tivemos uma introdução ao Tailwind, um framework CSS que nos ajuda a agilizar a criação de interfaces de usuário. Além disso, aprendemos a usar o **SQLite** no nosso projeto Laravel, uma ótima opção para desenvolvimento local por ser um banco de dados leve e que armazena tudo em um único arquivo.

 ### Aulas de Programação Web III - 25/08/2025

#### Configuração do SQLite no Laravel

Para usar o SQLite, siga estes passos para configurar seu projeto:

1.  **Crie o arquivo do banco de dados** No seu terminal, dentro do diretório do projeto, use o comando `touch` para criar um arquivo vazio que servirá como seu banco de dados.
    
    Bash
    
    ```
    touch database/database.sqlite
    
    ```
    
2.  **Configure o arquivo `.env`** Abra o arquivo `.env` e altere a configuração do banco de dados para usar o SQLite. Você pode comentar ou remover as linhas de configuração do MySQL (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) e deixar apenas as configurações do SQLite.
    
    Ini, TOML
    
    ```
    DB_CONNECTION=sqlite
    DB_DATABASE=/caminho/completo/do/seu/projeto/database/database.sqlite
    
    ```
    
    **Nota:** Substitua `/caminho/completo/do/seu/projeto/` pelo caminho real da pasta do seu projeto. Uma alternativa mais simples é usar a função `database_path` no arquivo `config/database.php` para se referir ao arquivo `.sqlite`, mas alterar o `.env` é o método mais comum e direto.
    
3.  **Rode as Migrations** Com a configuração feita, execute as migrations para criar as tabelas no seu banco de dados SQLite.
    
    Bash
    
    ```
    php artisan migrate
    
    ```
    

#### Usando o SQLite Viewer

Para visualizar e gerenciar o banco de dados SQLite, você pode usar uma extensão no VS Code, como o **SQLite Viewer**. Isso permite que você abra o arquivo `database.sqlite` diretamente no editor e execute queries.

#### Queries e Comandos Úteis

No Laravel, você pode usar o **`php artisan tinker`** para interagir com seu banco de dados e modelos diretamente no terminal. É uma ótima ferramenta para testar queries rápidas sem a necessidade de criar rotas ou controllers.

1.  **Acessar o Tinker**
    
    Bash
    
    ```
    php artisan tinker
    
    ```
    
2.  **Consultar todos os usuários** Dentro do `tinker`, você pode usar o modelo `User` para buscar todos os registros.
    
    PHP
    
    ```
    App\Models\User::all();
    
    ```
    
3.  **Encontrar um usuário por ID** Busca um usuário específico com base no seu ID.
    
    PHP
    
    ```
    App\Models\User::find(1);
    
    ```
    
4.  **Criar um novo usuário** Adiciona um novo registro na tabela `users`.
    
    PHP
    
    ```
    $user = App\Models\User::create([
        'name' => 'João',
        'email' => 'joao@example.com',
        'password' => bcrypt('senha123')
    ]);
    
    ```
    
5.  **Atualizar um registro** Encontra um usuário e altera suas informações.
    
    PHP
    
    ```
    $user = App\Models\User::find(1);
    $user->name = 'João Siles';
    $user->save();
    
    ```
    
6.  **Deletar um registro** Remove um usuário da tabela.
    
    PHP
    
    ```
    $user = App\Models\User::find(1);
    $user->delete();
    
    ```
    
7.  **Sair do Tinker**
    
    PHP
    
    ```
    exit
    ```
    Na aula de hoje, tivemos uma introdução ao Tailwind, um framework CSS para agilizar a criação de interfaces de usuário.

	# Aula 03 

 ### Aulas de Programação Web III - 15/09/2025

1. **Criação do Controller**
   - Criamos o [`App\Http\Controllers\ClienteController`](app/Http/Controllers/ClienteController.php) com os métodos `index` (para listar clientes) e `store` (para cadastrar novos clientes).

2. **Configuração das Rotas**
   - Adicionamos as rotas no arquivo [`routes/web.php`](routes/web.php):
     - `GET /cliente` chama o método `index` para visualizar os clientes.
     - `POST /cliente` chama o método `store` para cadastrar um novo cliente.

3. **Criação da View**
   - Implementamos a view [`resources/views/cliente.blade.php`](resources/views/cliente.blade.php) para exibir o formulário de cadastro e a tabela de clientes cadastrados.

4. **Integração com o Model**
   - Utilizamos o model [`App\Models\Cliente`](app/Models/Cliente.php) para manipular os dados dos clientes.

5. **Testes de Cadastro e Listagem**
   - Testamos o cadastro de clientes via formulário e verificamos a listagem dos dados na tabela.

## Exemplo de uso

- Acesse `/cliente` para visualizar e cadastrar clientes.
- Preencha o formulário e clique em "Salvar" para adicionar um novo cliente.

---

Essas foram as principais atividades desenvolvidas na aula de hoje.

# Aula 04 

 ### Aulas de Programação Web III - 06/10/2025

#### Instalação e Configuração do Next.js (App Router)

Este documento resume os passos para iniciar e configurar um projeto Next.js utilizando o **App Router**, a abordagem recomendada pela documentação oficial.

---

## 📋 Requisitos do Sistema

- **Node.js**: Versão **18.18** ou superior.
- **Sistema Operacional**: Funciona em **macOS**, **Windows** (incluindo WSL) ou **Linux**.

---

## ⚙️ Instalação

Existem duas formas principais de iniciar o seu projeto:

### 1. Instalação Automática (Recomendada)

Use o `create-next-app` para configurar o ambiente, dependências e estrutura de forma automática.

```bash
npx create-next-app@latest
```

**Durante a execução, você será guiado por perguntas para configurar o projeto, como:**

-   Nome do projeto?

-   Usar TypeScript?

-   Usar ESLint?

-   Usar Tailwind CSS?

-   Usar App Router?

-   Usar Turbopack?

**Rodando o Servidor de Desenvolvimento**

Após a instalação, execute o seguinte comando:

```
npm run dev
# ou use o comando de sua escolha: yarn dev, pnpm dev, etc.
```

Acesse `http://localhost:3000` no seu navegador. Edite `app/page.tsx` e veja as mudanças instantaneamente.