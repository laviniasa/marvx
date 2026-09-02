# Marvix Advisory & Perícia

Website institucional desenvolvido para a **Marvix Advisory & Perícia**, com foco em apresentação de serviços, posicionamento profissional e geração de contatos comerciais.

O projeto reúne uma interface responsiva em HTML/CSS/JavaScript e um formulário de contato integrado a um backend PHP para envio das mensagens por e-mail.

## 🎯 Objetivo

Criar uma presença digital profissional para uma empresa de consultoria contábil, financeira e pericial, apresentando seus serviços e facilitando o contato com potenciais clientes.

## ✨ Funcionalidades

- Landing page institucional
- Seção de apresentação da empresa
- Apresentação de serviços
- Navegação por seções
- Design responsivo
- Identidade visual personalizada
- Formulário de contato
- Envio das informações do formulário por e-mail
- Página de confirmação após o envio
- Organização de imagens e arquivos estáticos

A página principal apresenta seções como Home, Quem Somos, Serviços e Contato, além de uma chamada para agendamento de diagnóstico estratégico. fileciteturn15file0

## 🛠️ Tecnologias

| Tecnologia | Utilização |
|---|---|
| HTML5 | Estrutura da página |
| CSS3 | Layout, responsividade e identidade visual |
| JavaScript | Interações da interface |
| PHP | Processamento do formulário de contato |
| E-mail/SMTP do servidor | Entrega das mensagens do formulário |
| Git/GitHub | Versionamento |

## 🏗️ Estrutura do projeto

```text
marvx/
├── index.html
├── obrigado.html
├── style.css
├── script.js
├── enviar.php
└── dados/
    └── imagens e recursos visuais
```

## 🔄 Fluxo do formulário

```text
Usuário
   │
   ▼
Formulário de contato
   │
   ▼
POST / enviar.php
   │
   ├── Nome
   ├── E-mail
   ├── Telefone
   ├── Empresa
   └── Mensagem
   │
   ▼
Processamento em PHP
   │
   ▼
Envio por e-mail
   │
   ▼
Página de confirmação
```

O backend PHP recebe os campos do formulário, monta a mensagem e utiliza a função `mail()` para encaminhá-la ao endereço configurado. Após o envio bem-sucedido, o usuário é direcionado para `obrigado.html`. fileciteturn16file0

## 🚀 Como executar

### Opção 1 — Servidor web

Como o projeto utiliza PHP no formulário, recomenda-se executá-lo em um servidor com suporte a PHP.

Exemplo com servidor PHP local:

```bash
php -S localhost:8000
```

Depois acesse:

```text
http://localhost:8000
```

### Opção 2 — Hospedagem

O projeto pode ser publicado em uma hospedagem tradicional com suporte a HTML, CSS, JavaScript e PHP.

Para que o formulário funcione corretamente, o servidor também precisa permitir o envio de e-mails utilizado pelo `enviar.php`.

## 💼 O que este projeto demonstra

Este projeto demonstra experiência prática em:

- Desenvolvimento de páginas web institucionais
- HTML5 e CSS3
- JavaScript para interação no frontend
- Desenvolvimento de formulários
- Integração entre frontend e backend
- Processamento de requisições POST com PHP
- Integração com serviço de e-mail do servidor
- Organização de assets e estrutura de um site
- Desenvolvimento orientado a uma necessidade real de negócio

## 🔐 Considerações de segurança

Antes de utilizar o formulário em produção, recomenda-se adicionar:

- validação e sanitização dos campos recebidos
- proteção contra spam e bots
- CAPTCHA ou mecanismo equivalente
- validação rigorosa do endereço de e-mail
- proteção contra injeção de cabeçalhos de e-mail
- armazenamento seguro de configurações sensíveis
- HTTPS

## 📌 Próximas melhorias

- [ ] Adicionar validação completa do formulário
- [ ] Implementar proteção anti-spam
- [ ] Melhorar acessibilidade (WCAG)
- [ ] Adicionar SEO técnico e Open Graph
- [ ] Otimizar imagens e performance
- [ ] Criar testes para o formulário
- [ ] Migrar o envio de e-mails para uma API de e-mail transacional
- [ ] Adicionar métricas de conversão

## 👩‍💻 Autora

**Lavínia**

Desenvolvedora responsável pela implementação técnica do projeto, incluindo interface web, estilos, interações e integração do formulário de contato.

---

⭐ Projeto desenvolvido para demonstrar desenvolvimento web aplicado a uma necessidade real de negócio.