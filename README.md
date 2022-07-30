# sin143-projeto-final
Projeto final da disciplina SIN143 (Laboratorio de Programacao)
---
2732 - Erik Rocha - erik.rocha@ufv.br<br>
3687 - Paulo Gomes - pgpgomes7@gmail.com

---
<h3>O projeto final do curso terá o tema "rede social legal".</h3>

Será uma rede social de notícias, onde cada pessoa (repórter) recebe um crédito positivo ou negativo dos outros repórteres dependendo de como a notícia é vista (positiva, negativa ou falsa) <br>

* O projeto deverá ser implementado com PHP, MySQL, HTML, Javascript e CSS. (Não vou avaliar os trabalhos em relação à design ou qualidade gráfica, mas sim em usabilidade. Estou mais preocupado com o backend)<br>

* A base de dados a ser utilizada está anexada neste projeto, o banco a ser utilizado é o <strong>SIN143Final</strong>. Os nomes das tabelas não devem ser alterados para que eu possa corrigir todos os trabalhos mais facilmente, no entanto é necessário adicionar um campo "senha" na tabela usuário (faltou no banco de dados) e criar uma tabela de ligação entre as tabelas Usuários e Notícias, que servirá para verificar se cada usuário deu <strong>like/dislike/fake</strong> em uma notícia <strong>apenas uma vez</strong>. Utilizem um arquivo externo para conexão à base de dados (connect.inc.php)<br>

* A entrega deverá ser feita em arquivo ZIP pelo PVANet até <strong>31/07/2022</strong>, sem possibilidade de extensão (agora é sério... ;-D). 
* O projeto deverá ter 8 etapas, cada um delas valendo 5 pontos da nota do projeto:

  1. <strong>Sobre:</strong> Deverá conter a matrícula, nome e e-mail dos integrantes do grupo (no máximo 3 por grupo)
  
  2. <strong>Cadastro de usuários:</strong> Para utilizar o sistema, cada usuário deverá criar uma conta, que fará a associação entre as notícias publicadas por cada usuário. Cada usuário começa com 0 pontos de "índice de confiança" (ranking).

  3. <strong>Edição de usuários:</strong> Nesta página, os dados dos usuários podem ser alterados, com excessão dos pontos que não podem ser alterados.

  4. <strong>Cadastro de notícias:</strong> Cadastro do texto e imagens das notícias (uma imagem por notícia).

  5. <strong>Edição de notícias:</strong> Nesta página os dados das notícias podem ser alterados. Se uma nova imagem não for enviada, a imagem anterior deve permanecer na base de dados.

  6. <strong>Página principal:</strong> Página principal (após login do usuário) para exibição das notícias com uma pequena imagem à esquerda e texto (parcial) à direita, com nome do autor (usuário) abaixo do texto, seguido de sua pontuação (ranking). Esta página deve ter paginação de 10 notícias por página, ordenado pelas notícias mais novas primeiro. As notícias devem ter um link para o texto completo das mesmas, onde três botões principais devem aparecer, positivo, negativo e fake. Escolham ícones que representem bem esses três botões para uso no sistema. Ao clicar em positivo a pontuação de cada repórter (usuário) é acrescida de 1 ponto, ao clicar em negativo, o repórter perde 2 pontos, e ao clicar em fake news o repórter perde 4 pontos.

  7. <strong>Ranking:</strong> Esta página deverá mostrar o ranking dos usuários que postam notícias (pontuação), com paginação de 30 usuários por página.

  8. <strong>Listagem (relatórios):</strong>
      * Listagem dos usuários: Relatório de todos os usuários do sistema.
      * Listagem das notícias: Relatório de todas as notícias do sistema.
      * Listagem dos rankings: Relatório do ranking de todos os usuários do sistema.
      * Listagem de fake news: Relatório de todas as notícias que receberam uma classificação de "fake news".

