<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "lua56sol2003";
    $dbname = "novo_usuarionetflix";

    $conn = new mysqli($servername, $username, $password, $dbname);

    /* Pegando usuario adicionado */

    $add = 'SELECT nome FROM novo_usuarionetflix.usuarios WHERE id = 1';

    // Executando a query e armazenando o resultado em $result
    $result = $conn->query($add);

    // Verificando se a query retornou algum resultado
    if ($result->num_rows > 0) {
        // Iterando sobre os resultados
        while($row = $result->fetch_assoc()) {
            $nome = $row["nome"];
        }
    }

    /*Pegando valor do checkbox */

    $check = 'SELECT pagina_infantil FROM novo_usuarionetflix.usuarios WHERE id = 1';

    // Executando a query e armazenando o resultado em $result
    $result = $conn->query($check);

    // Verificando se a query retornou algum resultado
    if ($result->num_rows > 0) {
        // Iterando sobre os resultados
        while($row = $result->fetch_assoc()) {
            $checkbox = $row["pagina_infantil"];
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1.0, initial-scale=1.0">
    <title>Netflix</title>
    <link href="./css/login.css" rel="stylesheet"/>
    <link href="./css/reset.css" rel="stylesheet"/>
    
</head>
<body>

    <section>

        <h1>Quem está assistindo?</h1>

        <div id="alignment">
            
            <div class="littleBox" style="margin-left: 0;">

                <a href='./userOne.php'>

                    <div class='managementActive'>

                        <img src="https://img.icons8.com/glyph-neue/64/ffffff/pencil--v1.png" alt="pencil--v1" class='pencilImage'/>


                        <img class='imghover' src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABXgA1N3R-hZOO_Hb5n-ClQ9HBOtV6Btr3Pof7UAFYcgn9n9q74Ft0dkW-z4KtsyyiUs49wOwFDO8l16UkszgQowacjg2szSPkHAT.png?r=936" alt="sonic"/>

                    </div>

                    <span>Lua</span>

                </a>
            </div>
            
            <div class="littleBox ">

                <a href="./userTwo.php">

                    <div class='managementActive'>

                        <img src="https://img.icons8.com/glyph-neue/64/ffffff/pencil--v1.png" alt="pencil--v1" class='pencilImage'/>


                        <img class='imghover' src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABRZTyekrojJuCDNoX1H3L2x-2xf7fN6zW6dCk7VlJpe4gFmpM6otBAq5qo7-4lXJdZjJ77SoTFH8x_dwWM4VZUEQdKcSCzTFSYJ-.png?r=3fc" alt="zoro"/>

                    </div>

                    <span>Sol</span>
                    
                </a>

            </div>

            <?php 

                

            ?>

            <div class="littleBox">

                <a href='./childrensPage.php'>

                    <div class='managementActive'>

                        <img src="https://img.icons8.com/glyph-neue/64/ffffff/pencil--v1.png" alt="pencil--v1" class='pencilImage'/>

                        <img class='imghover'src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABdiGkq3FmwTq4bNTgfw9eRzaWaNhZ-BYb825e2fmRUorGOHApE6PBVsNIznkUP8vXnRWIFfbabrCXHbUy3S5wDUJRDNzJTxB1UjtG35giJFxeVfE0DRvgfJieudISqDy6L_bkEUwx0Da2Tk5uT8.png?r=080" alt="infantil"/>

                    </div>

                    <span>Desenhos e animes</span>

                </a>

            </div>

            <div class="littleBox">

                <a href="./addNewUser.php">

                    <img src="https://img.icons8.com/glyph-neue/64/808080/add--v1.png" id='addPattern' alt="add--v1"/>
                    <span style='margin-top: 27px;'>Adicionar perfil</span>

                </a>

            </div>

        </div>
        
        <div id="button">

            <button>Gerenciar perfis</button>

        </div>

    </section>
    <script>

        //Detectando se o botão de envio de formulário foi acionado
        let nome = '<?php echo $nome; ?>';
        let checkbox = '<?php echo $checkbox; ?>';

        //Selecionando posição
        let mainTag = document.querySelector("#alignment");
        let existing = mainTag.children[mainTag.children.length - 2];

        //Removendo botão de add
        mainTag.children[mainTag.children.length - 1].remove();

        //criando nova caixa 
        let newElement = document.createElement("div");
        newElement.setAttribute("class", "littleBox new");

        //Adicionando na posição desejada
        mainTag.insertBefore(newElement, existing); 

        if(checkbox == 'on'){

            document.querySelector(".new").innerHTML += `
                            <a href="./newUser.php">

                                <img src="https://img.icons8.com/glyph-neue/64/ffffff/pencil--v1.png" alt="pencil--v1" class='pencilImage'/>

                                <div class='managementActive'>
                                    <img class='imghover' src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABf6GUSnvBO1uYnVHaVs0_GNszJNpsh5IzPcyP3P9rrUDaBWv-0YzDDZ_rvFiXWAvPTKuQETsa-2VgDvaoUgW8NMqGfbBXY_10r_RCQbfASyfFlJ7ejeGf7ixFiCtZ0889d56Wz6BwELypnPXW_c.png?r=229"/>
                                    <span>${nome}</span>
                                </div>
                            </a>`;
            
        }else{

            document.querySelector(".new").innerHTML += `
                        <a href="./newUser.php">
                            <div class='managementActive'>

                                <img src="https://img.icons8.com/glyph-neue/64/ffffff/pencil--v1.png" alt="pencil--v1" class='pencilImage'/>

                                <img class='imghover' src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABfjwXqIYd3kCEU6KWsiHSHvkft8VhZg0yyD50a_pHXku4dz9VgxWwfA2ontwogStpj1NE9NJMt7sCpSKFEY2zmgqqQfcw1FMWwB9.png?r=229"/>
                                <span>${nome}</span>
                                
                            </div>
                        </a>`;


            };
            

            //Ações do botão gerênciar

            let buttonChange = document.querySelector("#button button");
            let activeAndDeactivate = 1;

            buttonChange.addEventListener('click', e=>{

                let findingBoxes = document.querySelector("#alignment").children;

                if(activeAndDeactivate == 1){
                    
                    for(let cont = 0; cont <= findingBoxes.length - 2; cont++){

                        document.querySelector("#alignment").children[cont].querySelector('.managementActive .imghover').style.zIndex = '-1';

                        buttonChange.innerHTML = 'Concluído';
                        buttonChange.setAttribute('id', "concluido");

                    }

                    //Cuidando dos links de cada janela

                    for(let cont = 0; cont <= findingBoxes.length - 2; cont++){

                        let link = document.querySelector("#alignment").children[cont].querySelector('a');

                        switch(cont){

                            case 0:

                                //Coloque a url que deseja aqui
                                link.href = "./editProfile.php"
                                
                                break;
                            
                            case 1:

                                //Coloque a url que deseja aqui
                                link.href = "./editProfile.php"
                                break;
                            
                            case 2:

                                //Coloque a url que deseja aqui
                                link.href = "./editProfile.php"
                                break;

                        }
                    
                    }

                    activeAndDeactivate--;

                }else{
                    
                    for(let cont = 0; cont <= findingBoxes.length - 2; cont++){

                        document.querySelector("#alignment").children[cont].querySelector('.managementActive .imghover').style.zIndex = '0';
                        buttonChange.innerHTML = 'Gerenciar perfis';
                        buttonChange.removeAttribute("id");
                        
                        let link = document.querySelector("#alignment").children[cont].querySelector('a');

                        //Cuidando dos links de cada janela
                        switch(cont){

                            case 0:

                                //Coloque a url que deseja aqui
                                link.href = "./index.php"
                                
                                break;
                            
                            case 1:

                                //Coloque a url que deseja aqui
                                link.href = "./index.php"
                                break;
                            
                            case 2:

                                //Coloque a url que deseja aqui
                                link.href = "./index.php"
                                break;

                        }

                    }

                    activeAndDeactivate++;

                }

            })
        

    </script>
    
</body>
</html>