						# SISTEMA DE RECLAMAÇÕES #
	

## Playlist curso sistema de reclamações:
https://youtube.com/playlist?list=PLXik_5Br-zO9M5RNsN9-KuWy_iQi7Px3j&si=zDgZq-Oe2PwWD8NK


## 1. Introdução
O sistema vai permitir que um cliente (mesmo desconhecido) possa apresentar uma reclamação sobre um produto ou serviço.

O cliente entra numa página web e preenche um formulário com os seguintes campos:

- Email * (obrigatório);
- Nome * (facultativo);
- Selecionar a área de reclamação * (obrigatório) - select de html com opções;
- Área de texto para a reclamação * (obrigatório);
- Upload de ficheiros (max 3) (facultativo);
- Enviar (Botão);

## back-end
- O back-end deve receber os dados do formulário e guardar numa base de dados
- Ao submeter o formulário, vai ser enviado um email para o cliente, contendo a sua reclamação e um número de referência e um link com um purl (personal purl) para que o cliente possa consultar o estado da sua reclamação.

Paralelamente, o sistema vai ter um conjunto de usuários com diferentes perfis:
- Administrador - Pode consultar todas as reclamações e alterar o estado de cada uma e tem a possibilidade de responder ao cliente e fazer a gestão da plataforma:

  - Gestão de utilizadores
  - Eliminar reclamações
  - Atribuir reclamações a outros utilizadores
  - Etc.

## Fluxo
- O cliente submete a reclamação.
 
  - Se o email não existe na base de dados, é criado um novo registro de cliente.
 
  - Vai permitir ter dados de clientes desconhecidos.
  - Vai permitir fazer o restreio de reclamações por cliente.
  
## Banco de dados
- clientes
   - id (pk)
   - email (varchar 100)
   - nome (varchar 100) / NULL
   - created_at (datetime)

- reclamações
   - id(pk)
   - cliente_id(fk)
   - area (varchar 100)
   - message (text 3000)
   - anexos (varchar 1000)
   - status (varchar 50)
   - created_at (datetime)
   - updated_at (datetime) / NULL
   - deleted_at (datetime) / NULL

- usuarios
   - id (pk)
   - email / username (varchar 100)
   - password (varchar 200)
   - role (varchar 50)
   - created_at (datetime)
   - updated_at (datetime) / NULL
   - deleted_at (datetime) / NULL

- usuarios_reclamações
   - id (pk)
   - usuario_id (fk)
   - reclamações_id (fk)]
   - created_at (datetime)
   - updated_at (datetime) / NULL
   - deleted_at (datetime) / NULL

## Atenção
- A reclamação, após ser submetida, não vai poder ser editada.
- As respostas dos colaboradores vão poder ser editadas até que a reclamação seja fechada.
- São os colaboradores que tem a responsabilidade de dechar as reclamações e de sair alterando o estado das mesmas.
- Sempre que acontecer uma alteração no estado da reclamação o cliente vai receber u email com a atualização, Nesse email, vai um purl (personal url) para que o cliente possa consultar o estaod da sua reclamação.
- Ao visualizar a reclamação, e as respostas subsequentes, o cliente vai poder ver o estado da reclamação e as respostar dos colaboradores. Vai ver o processo em modo de forum.