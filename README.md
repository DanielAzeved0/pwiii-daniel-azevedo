# pwiii-daniel-azevedo
Aulas de Programação Web III com o professor João Siles


 ### **Aulas de Programação Web III dia 11/08/2025

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

 
 ### **Aulas de Programação Web III dia 18/08/2025

    Na aula de hoje, tivemos uma introdução ao Tailwind, um framework CSS para agilizar a criação de interfaces de usuário.