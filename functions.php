<?php
    // funções escritas

    // função para LOGIN
    function login($usuario, $senha) {

        include('../conexao.php');

        // conferindo se algum input está vazio
        if(empty($usuario) || empty($senha)) echo "Preencha os dois campos";

        // se nao estiver vazio, fazer isto
        else {
            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
            $resultado = mysqli_query($conexao, $sql);

            // conferindo se existe o usuario no banco de dados
            if(mysqli_num_rows($resultado) > 0){
                $senhaCrip = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senhaCrip'";
                $resultado = mysqli_query($conexao, $sql);

                // conferindo se o usuario e senha conferem
                if (mysqli_num_rows($resultado) == 1){
                    $dados = mysqli_fetch_array($resultado);

                    $_SESSION['logado'] = true;
                    $_SESSION['carrinho'] = array();

                    $_SESSION['usuario'] = $dados['usuario'];
                    $_SESSION['id_usuario'] = $dados['id_usuario'];

                    echo "LOGADO";
                    mysqli_close($conexao);
                    header('Location: ../home.php');
                }

                else{
                    echo "Usuario ou senha não conferem";
                }
            }

            else{
                echo "Usuario ou senha não conferem";
            }

            echo "<br> Os dois foram preenchidos";
        }

        echo "<br> deu certo";
    }

    // função para CRIAR PRODUTO
    function criarProduto($produto, $valor) {
        include('../conexao.php');
    
        $sqlBusca = "SELECT * FROM produtos WHERE nome_produto='$produto'";
        $resultado = mysqli_query($conexao, $sqlBusca);
    
        if(mysqli_num_rows($resultado) > 0) echo "Produto existente, digite outro";
    
        else {
            $sqlInsere = "INSERT INTO produtos (nome_produto, valor_produto) VALUES ('$produto', '$valor')";
            $resultado = mysqli_query($conexao, $sqlInsere);
    
            echo "Produto cadastrado com sucesso";
        }
    }


    class Cliente {
        
        // função para CRIAR CLIENTE
        public function criarCliente($nome, $contato, $email, $sexo, $rua, $numero, $bairro, $cidade) {
            include('conexao.php');
        
            $search = "SELECT * FROM clientes WHERE nome_cliente='$nome'";
            $resultado = mysqli_query($conexao, $search);
        
            if(mysqli_num_rows($resultado) > 0) echo "Cliente existente, digite outro";
        
            else {
                $insert = "INSERT INTO clientes (nome_cliente, contato_cliente, email_cliente, sexo_cliente, rua_cliente, numero_cliente, bairro_cliente, cidade_cliente)
                                VALUES ('$nome', '$contato', '$email', '$sexo', '$rua', '$numero', '$bairro', '$cidade')";
                mysqli_query($conexao, $insert);
                
                echo '<script type="text/JavaScript"> location.reload(); </script>';
            }
        }

        // função para EDITAR CLIENTE
        public function editarCliente($id_cliente, $nome, $contato, $email, $rua, $numero, $bairro, $cidade) {
            include('conexao.php');
            $update = "UPDATE clientes SET
                nome_cliente='$nome',
                contato_cliente='$contato',
                email_cliente='$email',
                rua_cliente='$rua',
                numero_cliente='$numero',
                bairro_cliente='$bairro',
                cidade_cliente='$cidade'
            WHERE id_cliente='$id_cliente'";
            
            mysqli_query($conexao, $update);
            
            echo "<script> window.location.href = 'http://localhost/projetos/gestao/clientes.php' </script>";
        }
    }

    class Usuario {
        public function criarUsuario($nome, $usuario, $senha, $contato, $email, $rua, $numero, $bairro, $cidade) {
            include('conexao.php');

            $insert = "INSERT INTO usuarios (nome_usuario, usuario, senha, contato_usuario, email_usuario, rua_usuario, numero_usuario, bairro_usuario, cidade_usuario)
                            VALUES ('$nome', '$usuario', '$senha', '$contato', '$email', '$rua', '$numero', '$bairro', '$cidade')";
            mysqli_query($conexao, $insert);

            echo '<script type="text/JavaScript"> location.reload(); </script>';
        }
    }
?>