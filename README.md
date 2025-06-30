# 📰 Portal de Notícias

Sistema web desenvolvido como projeto final do curso técnico em informática.  
Permite o cadastro, visualização, edição e exclusão de notícias.  
Desenvolvido com **PHP**, **MySQL** e **Bootstrap 5**.

---

## 📌 Funcionalidades
- ✅ Cadastro de notícias (título, conteúdo, imagem e categoria)
- ✅ Listagem paginada com ordenação por data
- ✅ Edição e exclusão de publicações
- ✅ Upload e exibição de imagens
- ✅ Filtro por categoria
- ✅ Sistema de login e autenticação de administrador

---

## 🧪 Tecnologias Utilizadas

- 💻 **Linguagem:** PHP 8.0
- 🗃️ **Banco de Dados:** MySQL 5.7
- 🎨 **Estilo e Layout:** Bootstrap 5, CSS3
- 🔐 **Login Seguro:** PHP + Hash de Senhas
- 🌐 **Servidor:** Apache (XAMPP)

---

## 🛠️ Instalação Local

1. Clone o repositório:
```bash
git clone https://github.com/jefersonFLeon/portalDeNoticias.git
Importe o banco de dados:

Abra o phpMyAdmin

Crie o banco portal_noticias

Importe o arquivo banco.sql que está na pasta database/

Configure o acesso ao banco:

No arquivo config/db.php, altere o usuário/senha se necessário.

Inicie o servidor local:

Use o XAMPP, WAMP ou Laragon

Coloque o projeto dentro da pasta htdocs

Acesse via navegador:


http://localhost/portalDeNoticias

📁 Estrutura de Pastas
portal-noticias/
│
├── config/         # Arquivos de conexão com o banco
├── database/       # SQL do banco de dados
├── img/            # Imagens das notícias
├── pages/          # Páginas de CRUD (create, edit, delete, list)
├── templates/      # Cabeçalho, rodapé, etc.
├── css/            # Estilos personalizados
├── index.php       # Página inicial
└── login.php       # Tela de login
🧑‍💻 Autor
Jeferson Leon
Técnico em Informática | GitHub: jefersonFLeon
Email: jefersonleonblue@gmail.com

📷 Prints
Página Inicial:

Cadastro de Notícia:

📃 Licença
Este projeto está sob a licença MIT.
Sinta-se livre para estudar, modificar e usar este sistema para fins educativos.

⭐ Se este projeto foi útil pra você, deixe uma estrela no repositório!
