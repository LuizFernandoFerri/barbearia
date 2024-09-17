# Sistema de Gestão para Barbearias e Salões de Beleza

Esse é um projeto voltado para um **Sistema de Gestão para Barbearias, Salões de Beleza, Esmalterias e Estéticas**. Este projeto tem como objetivo a criação de uma plataforma completa para gerenciar qualquer tipo de salão, seja masculino ou feminino, com diversas funcionalidades essenciais para o dia a dia do seu negócio.

## Funcionalidades Principais
- **Cadastro de usuários, funcionários e clientes**: Mantenha o controle sobre todos os perfis e informações necessárias.
- **Gerenciamento de produtos e estoque**: Controle os itens disponíveis e as movimentações de estoque.
- **Controle de vendas**: Gestão de comissões e despesas, além de relatórios detalhados de lucros.
- **Gestão de acesso por usuários**: Controle de permissões e níveis de acesso dentro do sistema.
- **Agendamento de serviços**: Sistema de agendamento integrado para otimizar o fluxo de trabalho.
- **Alertas para clientes**: Notificações automáticas para retornos de clientes e outros eventos importantes.
- **Abertura de comandas e controle de fluxo de caixa**: Organize e facilite a gestão financeira do seu negócio.
- **Integração com API do WhatsApp**: Notifique clientes sobre agendamentos e envios automáticos de mensagens de marketing.
- **Integração com Mercado Pago**: Pagamento direto no momento do agendamento.
- **Marketing via WhatsApp**: Sistema de disparo automatizado para campanhas de marketing.
- **Planos de assinaturas mensais**: Gerencie os serviços e pacotes oferecidos de forma recorrente.

## Tecnologias Utilizadas
- **PHP (PDO)**: Utilizado para a lógica de negócios e a manipulação de dados.
- **MySQL**: Banco de dados relacional para armazenar todas as informações do sistema.
- **JavaScript, HTML e CSS**: Para o desenvolvimento da interface de usuário.
- **API do WhatsApp**: Integração para envio de mensagens automatizadas.
- **Mercado Pago**: Para a integração com métodos de pagamento online.

## Estrutura do Projeto
- `src/`: Contém o código-fonte do sistema.
- `db/`: Scripts para a criação do banco de dados e tabelas.
- `public/`: Arquivos públicos acessíveis, como imagens e arquivos de estilos.
- `docs/`: Documentação do projeto.

## Requisitos
- Servidor Web (Apache ou Nginx)
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Composer (para gerenciamento de dependências)
- API do WhatsApp e credenciais do Mercado Pago

## Instalação
1. Clone o repositório:
   ```bash
   git clone https://github.com/LuizFernandoFerri/barbearia.git

2. Instale as dependências via Composer:
     composer install


3. Configure o banco de dados no arquivo .env:
   DB_HOST=localhost
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario
   DB_PASSWORD=senha


4. Execute as migrações para criar as tabelas no banco de dados:
   php artisan migrate

5. Inicie o servidor:
php -S localhost:8000 -t public/


## Uso
Depois de seguir os passos de instalação, você poderá acessar o sistema através de [http://localhost:8000](http://localhost:8000) no seu navegador.

### Exemplos de Configuração:
- **Integração com o WhatsApp**: Para usar a API do WhatsApp, será necessário fornecer suas credenciais e token de acesso. Siga a documentação oficial [aqui](https://developers.facebook.com/docs/whatsapp).
- **Integração com Mercado Pago**: O sistema está preparado para integração com o Mercado Pago, onde os clientes podem realizar pagamentos diretos no momento do agendamento. Configure suas credenciais na aba de configurações.

## Licença
Este projeto está licenciado sob a [MIT License](LICENSE).

---

Esse conteúdo está em formato Markdown (`.md`), o que significa que ele será renderizado corretamente no GitHub. Você pode ajustar o tamanho das fontes ou estilos usando os títulos (`#` para H1, `##` para H2, etc.) ou adicionar negrito e itálico com `**negrito**` e `_itálico_`, conforme necessário.
