# :briefcase: InʼNʼOut — Sistema de Controle de Ponto

## :globe_with_meridians: Visão Geral  
Este repositório reúne o projeto final do curso **PHP 7 Completo – Curso do Desenvolvedor Web 2021 + Projetos** (Udemy). Nele, apliquei conceitos de PHP, HTML, CSS, JavaScript, banco de dados e o padrão de projeto MVC para construir o **InʼNʼOut**, um sistema de controle de ponto que permite:

- Gerenciar colaboradores (criar, editar e excluir usuários)  
- Registrar batidas de ponto (entrada e saída)  
- Gerar relatórios mensais individuais de cada colaborador  
- Emitir relatórios gerenciais consolidados

---

## :rocket: Funcionalidades

1. **Cadastro de Usuários**  
   - Inclusão, edição e remoção de colaboradores  
2. **Registro de Ponto**  
   - Marcação de entrada e saída com timestamp  
3. **Relatórios Mensais**  
   - Visão detalhada das horas trabalhadas por colaborador  
4. **Relatório Gerencial**  
   - Consolidação de dados para análise de desempenho  

---

## :hammer_and_wrench: Tecnologias e Ferramentas

- **Linguagens & Frameworks**  
  - PHP 7 (puro)  
  - HTML5, CSS3, JavaScript  
  - Padrão MVC  

- **Banco de Dados**  
  - MySQL  

- **IDE & Extensões**  
  - Visual Studio Code  
    - Code Runner  
    - Material Icon Theme  
    - Format HTML in PHP  
    - PHP Intelephense  

- **Ambiente Local**  
  - Laragon  
  - MySQL Workbench  

---

## 🛠️ Como Executar o Projeto

1. Clone este repositório na sua pasta de desenvolvimento (ex.: `www`, `htdocs`).  
2. Crie um banco de dados MySQL com o nome `innout`.  
3. Importe o script SQL (`innout.sql`) para popular as tabelas iniciais.  
4. Ajuste as credenciais no arquivo `config/db.php`.  
5. Aponte o document root do servidor para a pasta `public`.  
6. Acesse `http://localhost/innout` e comece a usar!

---

## 📚 Referência do Curso

Este projeto foi desenvolvido como parte prática do módulo final do curso **PHP 7 Completo – Curso do Desenvolvedor Web 2021 + Projetos** em [Udemy](https://www.udemy.com/course/php-7-completo/).
