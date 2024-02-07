<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='./css/editProfile.css' rel='stylesheet'/>
    <link href="./css/reset.css" rel="stylesheet"/>

</head>

<body class='displayColumn'>

    <div id='mainBox'>

        <h1>Editar perfil</h1>

        <form>


            <section class='displayRow'>

                <div>

                    <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABXgA1N3R-hZOO_Hb5n-ClQ9HBOtV6Btr3Pof7UAFYcgn9n9q74Ft0dkW-z4KtsyyiUs49wOwFDO8l16UkszgQowacjg2szSPkHAT.png?r=936' id='perfil' name='perfil' alt='perfil'/>    

                </div>

                <div id='partOfSelect' class='displayColumn'>

                    <input type='text' id='userName'/>

                    <label for="country">Idioma:</label>

                    <select id="country" name="pais">

                        <option value="Brasil" selected>Brasil</option>
                        <option value="Alemanha">Alemanha</option>
                        <option value="Agentina">Agentina</option>
                        <option value="Espanha">Espanha</option>
                        <option value="Marrocos">Marrocos</option>

                    </select>
        
                </div>

            </section>
            <section class='displayRow' id='ageSetting'>

                <h2>Configurações de classificação etária:</h2>

                <div id='ageChange' class='displayColumn'>

                    <div id='internalAgeChange'>

                        <div class='classification'>Infantil</div>
                        <div class='classification'>A10, 10</div>

                    </div>

                    <span>Mostrar apenas títulos com classificação A10, 10 e abaixo para este perfil</span>

                    <button class='generalStyleButton' id='editButton'>Edital</button>

                </div>

            </section>

            <section class='displayRow' id='areaPermissions'>

                <div id='permissions'>

                    <h2>Controles de início automático</h2>
                    <input class='check' type="checkbox"/><span> Iniciar automaticamente o próximo episódio de uma série em todos os aparelhos.</span></br>
                    <input class='check' type="checkbox"/><span> Reproduzir automaticamente as prévias ao navegar em todos os aparelhos.</span>

                </div>
        
            </section>

            <section class='displayRow' id='buttonBox'>

                <input type="submit" class='generalStyleButton' value='Salvar'>
                <input type='button' class='generalStyleButton' value='Cancelar'>
                <input type='button' class='generalStyleButton' value='Excluir perfil' style=' width: 12vw;' >

            </section>

        </form>

    </div>
    <script>

        //Botão cancelar
        document.querySelector('input[value="Cancelar"]').addEventListener('click', e=>{

            window.location.href = './usuario.php';

        })

        //Botão excluir
        document.querySelector('input[value="Salvar"]').addEventListener('click', e=>{
            
            e.preventDefault()
            window.location.href = './usuario.php';

        })



    </script>
    
</body>
</html>