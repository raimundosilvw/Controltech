<?php   require_once "validador_acesso.php" ?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte - Controltech</title>
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./styles/formulario.css">
     
    <!----===== Icons CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" href="./assets/fotos/iconp.png">


</head>
<body>

    <button class="button">

        <span>
            <a class="nav-link" href="logoff.php">SAIR</a>
        </span>
    </button>

    <div class="container">
        <header>Solitação de Suporte</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Dados da Empresa</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nome</label>
                            <input type="text" placeholder="Informe o nome" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Email" required>
                        </div>

                        <div class="input-field">
                            <label>CPF/CNPJ</label>
                            <input type="number" placeholder="CPF/CNPJ" required>
                        </div>

                        <div class="input-field">
                            <label>CEP</label>
                            <input type="number" placeholder="CEP" required>
                        </div>

                        <div class="input-field">
                            <label>Cidade</label>
                            <input type="text" placeholder="Cidade" required>    
                        </div>

                        <div class="input-field">
                            <label>Estado/UF</label>
                            <input type="text" placeholder="Estado" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Dados Técnicos</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Tipo de Suporte</label>
                            <select required>
                                <option disabled selected>Selecione o Sporte</option>
                                <option>Servidor</option>
                                <option>Hadwares</option>
                                <option>Software</option>
                                <option>Outro</option>
                            </select>
                           
                        </div>

                        <div class="input-field">
                            <label for="">Urgência</label>
                            <select required>
                                <option disabled selected>Selecione a Urgência</option>
                                <option>Baixa</option>
                                <option>Média</option>
                                <option>Alta</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Status</label>
                            <select required>
                                <option disabled selected>Selecione o Status</option>
                                <option>Novo</option>
                                <option>Existente</option>
                            </select>
                        </div>



                        <div class="input-field">
                            <label>Data de Abertura</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
               
                        <div class="input-field photo" id="view_photo">
                            <label for="Envie Imagem">Envie uma Imagem</label>
                            <input type="file" name="files">
                        </div>

                        <div class="input-field control">
                            <label for="Descreva o Problema">Descreva o Problema</label>
                             <textarea class="textarea is-hovered" placeholder="Descreva o Problema"></textarea>
                              
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                      
                        <button class="sumbit">
                            <span class="btnText">
                                <a href="/formulario.php">
                                    Enviar
                                </a>
                                
                            </span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="/js/form.js"></script>
</body>
</html>
