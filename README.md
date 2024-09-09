
# Desafio - Aplicações PHP e MySQL com Docker

## Descrição

Este projeto contém duas aplicações PHP, cada uma com seu próprio banco de dados MySQL, configuradas para rodar em contêineres Docker. As aplicações são acessíveis nas seguintes portas:

- **App1**: `http://localhost:8081`
- **App2**: `http://localhost:8082`

Cada aplicação exibe uma tabela de frutas, que é gerenciada em seus respectivos bancos de dados MySQL.

## Estrutura do Projeto

```
Desafio/
│
├── docker-compose.yml
├── app1/
│   ├── Dockerfile
│   ├── index.php
│   └── mysql_data/  # Pasta para armazenar dados do banco de dados da app1
├── app2/
│   ├── Dockerfile
│   ├── index.php
│   └── mysql_data/  # Pasta para armazenar dados do banco de dados da app2
```

## Pré-requisitos

- Docker
- Docker Compose

## Como Rodar a Aplicação

1. **Clone o Repositório:**

   ```bash
   git clone <URL-DO-REPOSITORIO>
   cd Desafio
   ```

2. **Construir e Iniciar os Contêineres:**

   ```bash
   docker-compose up --build
   ```

3. **Acessar as Aplicações:**

   - App1: `http://localhost:8081`
   - App2: `http://localhost:8082`

## Configuração dos Bancos de Dados

Cada banco de dados MySQL possui uma tabela `frutas` com 5 frutas cadastradas:

- Maçã
- Banana
- Laranja
- Uva
- Morango

Os dados são persistidos nas pastas `mysql_data` dentro das pastas `app1` e `app2`.

