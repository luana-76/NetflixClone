<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>início - Netflix</title>
    <link href='css/reset.css' rel='stylesheet'/>
    <link href='css/navigationBar.css' rel='stylesheet'/>
    <link href='css/filmShowing.css' rel='stylesheet'/>
    <link href='css/mainSeries.css' rel='stylesheet'/>
    <link href='css/responsivo.css/navigationBarResponsive.css' rel='stylesheet'/>
    <link href='css/responsivo.css/responsiveSeriesOfThemoment.css' rel='stylesheet'/>
    
</head>
<body>

    <header> 

        <!--- Video de fundo -->
        <div id='video'>

            <video id='tagVideo' controls autoplay muted>

                <source src="arquivos/HemlockGrove.mp4"/>

            </video>

        </div>
        
        <nav class='mainNavigation'>
            <nav id='navigation'>

                <div id='firstBox'>

                    <a href='' target="_self" role="logo">
                        <img src="https://img.icons8.com/ios-filled/90/e50914/netflix--v1.png" id='logoNetflix' alt='Netflix'/>
                    </a>
                    
                    <ul id='firstList'>

                        <li id='liResponsive'>Navegação
                        <img src='https://img.icons8.com/fluency-systems-filled/10/ffffff/triangle.png' alt="arrow"/><li><!--A junção de lista está incorreta-->
                        
                        <ul id='responsiveNone'>

                            <li><a href='' style="color:#fff;" class='responsivNone__selected' target="_self">Início</a></li>
                            <li><a href='' target="_self">Séries</a></li>
                            <li><a href='' target="_self">Filmes</a></li>
                            <li><a href='' target="_self">Bombando</a></li>
                            <li><a href='' target="_self">Minha lista</a></li>
                            <li><a href='' target="_self">Navegar por idiomas</a></li>

                        </ul>

                    </ul>
            
                </div>

            </nav>

            <div id='secondBox'>
                <div id='rightBox'>
        
                    <!-- caixa de pesquisa -->
                    <!-- O id search e searchtBoxInt estão sendo usados no js -->
                    <div id='search'><!-- Caixa que segurará a caixa do input -->
                        <div>
                            <div id='searchtBoxInt'><!-- Vamos imaginar que esse div é um button -->
                                <button id="searchBut">
                                    <img src="https://img.icons8.com/ios-filled/25/ffffff/search--v1.png" id='searchtBoxInt__visibility' alt='search'/>
                                </button>
                                <input id="searchtBoxInt__pesq" class='leftSpacing' type='search' placeholder='Títulos, gente e gênero' maxlength='100'/>
                            </div>
                        </div>
                    </div>

                    <!-- Botão infantil -->
                    <div id="childrensButton">
                        <a href="childrensPage.php" target="_self">infantil</a>
                    </div>

                    <div id="notification">

                        <div id="alertNotification">1</div>
                        <img src="https://img.icons8.com/material/25/ffffff/bell--v2.png" alt='Bell'/>
                        <div id='openNotificationBox'>

                            <div id='notificationBox'>
    
                                <img src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABSiDGIWAUn5bLUZGhvThDPuYbaaDpxN0hb1nCgzzG7-BZgFBOB6UnlfXyEC60Le4T1PZo6VvFdscqsAkjQKGfboOw1Czqo-fRx7l1gBn14lTgs4RVuJ-bLlksPUloCfmOObVXayaSRClO_l_ZDIuPfhkNwYpa6VpwCqgLX8f8VvSeu1T8i0khpOLWcqAFJwLaoZ729uzRJszYksBzvBa6nQzV_0enM_Dc91XTb3AKRiEuNUgqqfL-BvmXBn4VKndqAs4Dq5VKBce3zLcskFo_hNGIBkQfN0Bb06nSg6dMO8ZBgFnbCItg9Bccu9YswpOrGkAh1LZlODZCY28IqmNPfaekorJMBSsdxzvrEgFZnU.jpg?r=651" alt="serie"/>
    
                                <div>
    
                                    <h2>Estreia em 3 de janeiro</h2>
                                    <h2>Temos novidades para você.</h2>
                                    <span>há 3 dias</span>
    
                                </div>
    
                            </div>
                            <div id='notificationBox'>
    
                                <img src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABSiDGIWAUn5bLUZGhvThDPuYbaaDpxN0hb1nCgzzG7-BZgFBOB6UnlfXyEC60Le4T1PZo6VvFdscqsAkjQKGfboOw1Czqo-fRx7l1gBn14lTgs4RVuJ-bLlksPUloCfmOObVXayaSRClO_l_ZDIuPfhkNwYpa6VpwCqgLX8f8VvSeu1T8i0khpOLWcqAFJwLaoZ729uzRJszYksBzvBa6nQzV_0enM_Dc91XTb3AKRiEuNUgqqfL-BvmXBn4VKndqAs4Dq5VKBce3zLcskFo_hNGIBkQfN0Bb06nSg6dMO8ZBgFnbCItg9Bccu9YswpOrGkAh1LZlODZCY28IqmNPfaekorJMBSsdxzvrEgFZnU.jpg?r=651" alt="serie"/>
    
                                <div>
    
                                    <h2>Estreia em 3 de janeiro</h2>
                                    <h2>Temos novidades para você.</h2>
                                    <span>há 3 dias</span>
    
                                </div>
    
                            </div>
    
                        </div>
                    </div>

                    

                    <!--Parte do usuário e configurações-->
                    <ul id='user_list'>

                        <!--Parte visível-->
                        <li id='listTwo'>
                            <img id="profile-icon" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABXgA1N3R-hZOO_Hb5n-ClQ9HBOtV6Btr3Pof7UAFYcgn9n9q74Ft0dkW-z4KtsyyiUs49wOwFDO8l16UkszgQowacjg2szSPkHAT.png?r=936" alt="perfil"/>
                            <img id='arrow' alt='arrow' src="https://img.icons8.com/fluency-systems-filled/10/ffffff/triangle.png"/>
                        </li>

                        <!--Caixa que aparecerá quando o usuário passar o mouse em cima do botão-->
                        <ul id='subListTwo'>

                            <li class="listTwo__li">
                                <a href='./usuario.php' target="_self">
                                    <img id="profile-icon" src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABXgA1N3R-hZOO_Hb5n-ClQ9HBOtV6Btr3Pof7UAFYcgn9n9q74Ft0dkW-z4KtsyyiUs49wOwFDO8l16UkszgQowacjg2szSPkHAT.png?r=936' alt="perfil"/>Lua
                                </a>
                            </li>
                            <li class="listTwo__li">
                                <a href='./userTwo.php' target="_self">
                                    <img id="profile-icon" src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/vN7bi_My87NPKvsBoib006Llxzg/AAAABRZTyekrojJuCDNoX1H3L2x-2xf7fN6zW6dCk7VlJpe4gFmpM6otBAq5qo7-4lXJdZjJ77SoTFH8x_dwWM4VZUEQdKcSCzTFSYJ-.png?r=3fc' alt="perfil"/>Sol
                                </a>
                            </li>
                            <li class="listTwo__li">
                                <a href='./childrensPage.php' target="_self">
                                    <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/K6hjPJd6cR6FpVELC5Pd6ovHRSk/AAAABYh5hkXId5o_KJ5wCel_N8WJBVvymdS8CZKNFAEaGe4-xhjGuEPJoW288Q5YEFYopXfwp2EeqLMpGKbMINPHKZP7mdsHWKsmmn4o0DDeRxyU1qj4asp2eSTw9LoMSFSovfSFrSgjE3mIWg.png?r=080' alt="perfil"/>Desenhos
                                </a>
                            </li>
                            <li class="listTwo__li">
                                <a href='' target="_self">
                                    <img src="https://img.icons8.com/windows/25/ffffff/pencil.png" alt='pencil'/>Gerenciar perfis
                                </a>
                            </li>
                            <li class="listTwo__li">
                                <a href='' target="_self">
                                    <img src="https://img.icons8.com/ios/25/ffffff/gender-neutral-user.png" alt='user'/>Conta
                                </a>
                            </li>
                            <li class="listTwo__li">
                                <a href='' target="_self">
                                    <img src="https://img.icons8.com/material-outlined/25/ffffff/help.png" alt='help'/>Centro de ajuda
                                </a>
                            </li>
                            <li class="listTwo__li">
                                <a href='' target="_self">Sair da Netflix</a>
                            </li>

                        </ul>

                    </ul>
                    
                </div>	
                
            </div>
        </nav>
        
        <div id='seriesOfTheMoment'>

            <div id='internalSeries'>

                <h1>
                    <img title='Hemlock Grove' id='title' src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABXQWRPUlrFXrMlZVfx3gnEg0-cgK_gxk8nB99hEM_xv-jZngA30CFRbhx8OJ3uNhG3c9kig9kzj_2spk2zOHZX6ZRGeV2NE3nCNQzYka358_6-crPOQ4EW4uhrTq_xLBn52i4Wkr87tyqiHSUXA6-X-vhdroIyQMZUU79YYhD9imcDCFtbZObw.webp?r=572' alt="hemlock grove"/>
                </h1>

                <!-- Top serie do momento -->
                <!--<div id='top'>

                    <svg width="24" height="24"viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon-top-10-badge" style="color: rgb(229, 9, 20);"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 2C2.44772 2 2 2.44772 2 3V21C2 21.5523 2.44772 22 3 22H21C21.5523 22 22 21.5523 22 21V3C22 2.44772 21.5523 2 21 2H3ZM17.2299 10.8934C16.6125 10.4971 15.8913 10.2996 15.0673 10.2996C14.2444 10.2996 13.5231 10.4971 12.9056 10.8934C12.2881 11.2905 11.8114 11.8536 11.4762 12.5839C11.1411 13.3149 10.9735 14.1695 10.9735 15.1493C10.9735 16.1383 11.1411 16.9957 11.4762 17.7221C11.8114 18.4478 12.2881 19.0091 12.9056 19.4052C13.5231 19.8014 14.2444 20 15.0673 20C15.8913 20 16.6125 19.8014 17.2299 19.4052C17.8475 19.0091 18.3242 18.4478 18.6594 17.7221C18.9945 16.9957 19.1612 16.1383 19.1612 15.1493C19.1612 14.1695 18.9945 13.3149 18.6594 12.5839C18.3242 11.8536 17.8475 11.2905 17.2299 10.8934ZM9.47922 19.7994V10.3263L4.92658 11.4351V13.2656L7.20991 12.6774V19.7994H9.47922ZM13.7606 12.9513C14.0767 12.4298 14.5117 12.1701 15.0673 12.1701C15.6239 12.1701 16.0589 12.4298 16.3751 12.9513C16.6913 13.4718 16.8489 14.2058 16.8489 15.1493C16.8489 16.0938 16.6913 16.8268 16.3751 17.3473C16.0589 17.8688 15.6239 18.1296 15.0673 18.1296C14.5117 18.1296 14.0767 17.8688 13.7606 17.3473C13.4442 16.8268 13.2868 16.0938 13.2868 15.1493C13.2868 14.2058 13.4442 13.4718 13.7606 12.9513ZM13.0737 4.19939C12.7285 4.06677 12.3485 4 11.9344 4C11.5194 4 11.1405 4.06677 10.7952 4.19939C10.4521 4.33122 10.1518 4.51771 9.89848 4.75622C9.64404 4.99367 9.44963 5.27379 9.312 5.59396C9.17437 5.91504 9.10556 6.26299 9.10556 6.63872C9.10556 7.01446 9.17437 7.36241 9.312 7.68349C9.44963 8.00352 9.64404 8.28286 9.89848 8.52136C10.1518 8.75974 10.4521 8.9453 10.7952 9.07792C11.1405 9.20976 11.5194 9.27745 11.9344 9.27745C12.3485 9.27745 12.7285 9.20976 13.0737 9.07792C13.4168 8.9453 13.7161 8.75974 13.9704 8.52136C14.2239 8.28286 14.4194 8.00352 14.557 7.68349C14.6947 7.36241 14.7635 7.01446 14.7635 6.63872C14.7635 6.26299 14.6947 5.91504 14.557 5.59396C14.4194 5.27379 14.2239 4.99367 13.9704 4.75622C13.7161 4.51771 13.4168 4.33122 13.0737 4.19939ZM8.75526 5.30869V4.12288H4V5.30869H5.63894V9.15457H7.11632V5.30869H8.75526ZM18.9904 4.3469C18.6683 4.19847 18.2893 4.12327 17.8484 4.12327H15.5101V9.15392H16.9855V7.70838H17.8484C18.2893 7.70838 18.6683 7.63318 18.9904 7.48384C19.3117 7.33541 19.5601 7.12483 19.7366 6.85484C19.9132 6.58578 20 6.26931 20 5.90845C20 5.55682 19.9132 5.24587 19.7366 4.97602C19.5601 4.70683 19.3117 4.49624 18.9904 4.3469ZM11.2392 5.39166C11.4387 5.27379 11.6701 5.21545 11.9344 5.21545C12.1988 5.21545 12.4302 5.27379 12.6297 5.39166C12.8292 5.50954 12.9849 5.67653 13.0955 5.89001C13.2072 6.10521 13.2632 6.35386 13.2632 6.63872C13.2632 6.92267 13.2072 7.17224 13.0955 7.38651C12.9849 7.60092 12.8292 7.76791 12.6297 7.88565C12.4302 8.00352 12.1988 8.062 11.9344 8.062C11.6701 8.062 11.4387 8.00352 11.2392 7.88565C11.0397 7.76791 10.8841 7.60092 10.7724 7.38651C10.6617 7.17224 10.6057 6.92267 10.6057 6.63872C10.6057 6.35386 10.6617 6.10521 10.7724 5.89001C10.8841 5.67653 11.0397 5.50954 11.2392 5.39166ZM16.9855 5.27195H17.6149C17.9252 5.27195 18.1515 5.32845 18.2913 5.43895C18.4309 5.54931 18.5017 5.70616 18.5017 5.90845C18.5017 6.11535 18.4309 6.27589 18.2913 6.38902C18.1515 6.50228 17.9252 6.55878 17.6149 6.55878H16.9855V5.27195Z" fill="currentColor"></path></svg>
                    <h2>Top 9 para crianças hoje</h2>

                </div>-->
                
                <p>Segredos são só parte do cotidiano da pequena Hemlock Grove:<br/>
                                            o lado sinistro da cidade se esconde em plena luz do dia.</p>

                <!-- Parte dos botões -->
                <div>
                    <button id='playBut'>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/play--v1.png" alt='play'/>Assistir
                    </button>
                    <button id="information">
                        <img src="https://img.icons8.com/ios/25/ffffff/info--v1.png" alt='alert' />Mais informações
                    </button>

                    <!-- Em revisão -->
                    <div id='soundBox'>
                        
                        <button id='mute'>

                            <img id='muteImg' src="https://img.icons8.com/material-rounded/20/ffffff/no-audio--v1.png"/>

                        </button>

                    </div>
                    
                </div>
                
            </div>

        </div>
    
    </header>
    <main>
        <section class="standardSeriesBox">

            <div class="titleAlignment">
                <div>
                    <h2>Séries européias
                        <span>Ver tudo
                        <img class="arrow" alt='arrow' src='https://img.icons8.com/metro/15/54b9c5/forward.png'/></span>
                    </h2>
                </div>

                <!-- Marcação do rolamento do scroll -->
                <div class="rotation">

                    <div class="currentRotation" style='background: #fff;'></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>

                </div>

            </div>

            <div class="scroll">

                <button class='generalArrowStyle' id="leftArrow">

                    <img class='left' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>

                </button>

                <!--  Parte 1-->
                <img class='imgSerie inicioMortePCarona' id='saiki' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABY6DxnkIgrkMW2PHKu3MQ_incWy222mhVCdbbJxjiQ7B_QPVlnLBh4QKvRoOxq08uAMbtP-KTfP4FgDsorfEl0_At0C6tgXxiWs.webp?r=cc2">
  
                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABfRYTi7CMLqPoaybZuGKI4WHNnHgDEpC0bfA3GC9D9gTtA9eY9E084ij9x9bEfulNAyfW60REPaFwAygmyN9ALkNyz0uR6mPqqMdWm847-z38cVbHGujrp8eJRFXULtWoN-G.jpg?r=e60">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABZMHnapprDrQ7SL0T4FWVp85fVXJ6tIEn46IWhf-K60CSMqtCVADi3Ok7YAHBJ9b_9ot9vnfKyXDS343C4gYUb6vPhqcOfBN7HM.webp?r=168">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABeurdtIdS082k9x6OmwzDMA2FkpMCSW03MHtQSWFQOEr_DGPoaC3gH2vdE3_NNeL1F8pNTcRdyoJkwHdmPTAaZgJYAHPNNdpdrI.webp?r=896">
                    
                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABetYV1PiQgumAG8fxsNLq7w076-NFr8eLpHn0gfFTmKx50vWNVnOETQRXcYxzBHRp-glurGmdafcadBF9y1gvHt4U0bACtRcA2kueNmqUNJKF8YFQg-1JsdjiBdD_HcOfV-o.jpg?r=af4">

                <img class='imgSerie SagaWinxInicio' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABTteEzMAHxGhROiidhuVUTDNpFxf2iavrLiBurcGaY4L1HPTUAY7TihWvp2WSlSVTHI6TD-w3-l-4Fjj2HpqnWohjY92l1uUrnM.webp?r=fe4">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABWpixQr04ybgAnz9PX24nOWfO9kObYLAaW6p6OvIXkM7Q__EQ48mV-Sl-8taSIZVBRPGR6edjC-yk8R51xtO34NoD6QPYZi9XRCkl-QPvJd_CjEI60FCiBKQDus7fFfiNw5P.jpg?r=54a">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABeeFgqmZ9b60DAnLw0JvxxL03WdcZH5T2dtByxSsJ71wDMahlVWM3q7ofPi97OFfVmtcSJ-UBkZ3ofbaHI13sG4Iy_pPFyKLzw9jOwf6qUgVbvYKVZrZmjdWLegbWB67rJ1s.jpg?r=b45">

                <img class='imgSerie SagaWinxFinal' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABSyv3Ze2L4LBP92gA5BWXxqyIFBGZxdhyeCvvHehGtzMsmrZSabLCIeJAERozMv1RL0VAlbwjtEwzSc5d0WmeZbVEVlw-hnEhtQv8WCVl3BU5vthwDvjNd6RlceozbATSmzE.jpg?r=c60">

                <!-- Parte 1 final -->

                <!-- Parte 2 começo -->

                <img class='imgSerie OidnbInicio' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABdRBNmhse8xECkuuGJVGTDOXXLMgGoFwzpg9AtWDLexkMEx2A5_1aBejg4qON3PXRA-TZUTv1J6Lor_MeHyPA9D6GYBcaFwwh0dZ8YTMnlwkxxJTjc7EXYmz9nk-n8HN2ZQ7.jpg?r=6a8">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABe-Bg5SofMUXuo5nR1mMdsYAehxcckvyceCG-i3XVqj_n8XNMNjj7rG7skPnOk5RIMBtTUleHSvkSdWjRrwXyhRMkvNOVZySYg1FvbGnP_bp240av0abprs9czpIcyzUMrQz.jpg?r=7f4">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABW7t9JbB4OPybgZaExCeqIk4ZeUkLQ4XlHabeJ1MTFPoSnt__D4AY7YkeStIVmJlKH68FNmMmzCcojlxdm_4yTrdtA5EddIfjETBy6HQ1ip66aUWqM6B7tuVPgBpyGK8bs2KiayR06F6rAfBk68O9P4XKvcpzZGkySYvro4RAC6QB3t-chjlitb1yCMyhaum15VNt1nxXyvpBouxPbfjZApxWO_PIXeXhrhj1Y2lNBJS9QVV5wmZTpJSMMHSh8rBHNLQ6gtpkAWWcTEVbeTifjAf3maJZENxYkP35MtvuN8azSxFET3I2TB5hx8kl23zN-gd71JG5aO5LtwYGlX9pO9XVWNytjWnZ80_l7olmaC8lXFEUe9wE7_fToDD772_kvt9KOjGzqPmzUMjUoWs1Oe-EseLU_VZg7hiY_xRvfZq89lWTd_H96UdGAUut6id8R40s9d4TzjY6-4.jpg?r=61b">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABaDw_oI9GhHZvcuON3rRwyTT9Gl81pDZjVIWK0_3tNRfhyxdri7vukOME5c7xrepMDBVYYoRZLWhnSsHN5QlGlWNNEOzx6TNhmoFl8XxInUk0YgIZ9FLbBoQ8f5gSSv3CjwA.jpg?r=718">

                <img class='imgSerie OidnbFinal' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABaOpTT9oumFxPJIEt8ZlSOTXEJB54SB0z9tXTaSzVk4RwYWEurdzPRi0SlCmnvxePhd6jt_QHp3ybAfEULSPiwTnILaZYnZ4sVKYAGNy_DILJYJwBKzImRXNizbT6qm7CLQ2.jpg?r=998">

                <!-- Parte 2 final -->

                <!-- Parte 3 inicio -->
                <img class='imgSerie bakiInicio' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABW_sUkXg2pXdKEhj3zvvshfVWBt_jWDbAq9x_rK4v3DkQuKwYgOilSa51tGQc2iB-t3xUYQojabYwIUX9GgiGGyMmgTHv04kLKs.webp?r=abb">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABbgkw3V9yYjy6iXSeuShSrcX5g4JgNdaFaSVicDK9XZTIbHR2GXXbEwQjnDuzDaqqseXswzodq_1Xt2LFQuz9vxyebAKWBlkLQo.webp?r=f42">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABVvGluE0nO-Arwi4qvdwdwOApx7fwGgEJRNquabcbBHd1_ga44IMiRJamuUO-s0VgjTnXlvxzcDp8Eo8eGLFayvGkwNcgb7Fug4i6fmjszJNh22NCXA_cnBJQ2aIIrrdw0g-.jpg?r=d08">

                <img class='imgSerie bakiFinal' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABW6qe_D4QmfOMEuWxwI6OfjYcNNMQ8vulej5vkP-ifl5ccGBidpM-tYeQkIBdvpZSe0W3lwAXUwGjeBaI2t806gNen_9Sl7km5A.webp?r=661">

                <!-- Parte 3 final -->

                <!-- Parte 4 inicio -->

                <img class='imgSerie inicioDahmer' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABYKghHalJ1twgVAlnOmqQlk5aQiIRxy99GTuIU0uLY4S9cvBi0eqah-FqywEGRuhV64pjdGuVnHDtbVtkDSo8crmOFIA-K6bkRCF4XSS40jRHJx3x4eVBJpnRBx71UlVarYH.jpg?r=d3d">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABbdv2imXM3ziqZrdK8A8CNnkJBf3XKRm6z9RZ_gQTOgGY_lFa4m8adOWdnclFSmYfS5b4uMdesFLwp29J4tmeMK-y13v9nBM3WQi5JwF3U1HMpJxMPKJ-jKp_qnYezwiMSBZLiBEdINVKqB1mhUXW9uJLfXTE8cdd-Q.webp?r=2ac">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABZg45vNVMfDcRalKtyezV8xGV9H5Kc3VSYP6jqpNAUPTc2K6hroJJL_thRmFPavoOs2QrjkvL0PcGo-hUor-oLKGgKv1oVuzTJs.webp?r=a52">

                <img class='imgSerie dahmerFinal' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABVnXnDO4uEuE9vzTV1N7k5MkJzDowsv_AYnPk8wLjAeKg0iAh4rNd2JzrPGNnxZAR7aL1Ic8DpPjFLGi3waO5uoigl4XRO_jSvUDwc4NQLxOfOQ40bZ1WUNJWeLbnVLgsFvg.jpg?r=976">

                <!-- Parte 4 final -->

                <!-- Parte 5 inicio -->
                <img class='imgSerie misturaUmInicio' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABYrmlJtniOopiapcDySPUMm-toiDQBexZJbfxSTWxTG2HokciOXdQ1An_xCFr85xVg4tFRpffUWS9LsEk-8hx7AdCkeI09cqSH_Nlb_8UhYchpY0nemj_Eg7QFMeKfjCww8K.jpg?r=7b8">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABeBfKg5Gf81ACbsluoyzRoecmMmZuSa_tuuKclmLvmOjfDPe84fjcrEjRV2SCPFsjIKvqM_8Rw2IvB3vYR-GNnoX7OSQb87rPjQv4avvQ0L1Qo5Ta5_eWc7-XkqtfriK4k8L.jpg?r=8da">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABcziFANePYvTiiI-reCDKlHihwNRAFz190i3IoVrRIE3O4dA5qHZ8WDcT2MSkEfuh5vPejC4XpWvKsX8e9WZKok4vhZKqW7hGnI4JmcnJO1gQ8iv68qcDXzscwDrUB5616K_.jpg?r=a44">

                <img class='imgSerie mistaUmFinal' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABdibMM95c8C5CoZs0TfCaNI8IWzy-QLs-r17K_tYsnrrE8TuYzShxdZJS3V1RE80WLn7IIvB-ZTDxOAOQCxB49it5FSEbNOzHGLobENBMgisxt5HA1ek7q-AhKiSkkAZiv-w.jpg?r=abd">

                <!-- parte 5 final-->

                <!-- parte 6 inicio -->
                <img class='imgSerie misturaDoisInicio' alt="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABb5p9nT_JJUKLuVPrbPDpYcxncfKe91PcqweCHMvNsPjsKdbte6d4vI69Dq-xAxp7X8e27h8V6Ez3_1D5S8DTklJvXwTbtDKKWc.webp?r=f50">

                <img class='imgSerie'  alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABfQy4sbp8fD5ZOeqX4CrFSpAfFnlMI8CchQZ-0vslbVdeokNO-3tGrtBfohfDDRfNh42Er7BZTGPcRJYjNgmt_kZCixJIWh_1jtdsvczZE_Xc8nl8nkjdZJ5oWuDLEMOSs70P2aFPNG4i7FER3AShtt57mdoLfcDhZ_sMwtJCNcplCe0zh-zX42ASI6v2i6g0KIt4sFmcAx8SyIKQ9vsHo9eTL3S04udtQIzpFkl0dZNLAPkmoW0R_Y81Ne5wdz0G9xa_hprQmvCIzlj_dbqOXCvkiLq68A.webp?r=474">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABY6DxnkIgrkMW2PHKu3MQ_incWy222mhVCdbbJxjiQ7B_QPVlnLBh4QKvRoOxq08uAMbtP-KTfP4FgDsorfEl0_At0C6tgXxiWs.webp?r=cc2">

                <img class='imgSerie'  alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABas030ogezDIi5Bjzu9us9dTmmGCksAzjgk7s1p2ZbaiSWSztU4PmkHsz7zmwHe8YhoAwgFhkXrxD7MQ6Sg1XEoF56MGtcYn0Ni82SP0GThVb6TlHbJuzyQv_LvyDcwMe4T78Z7vsr4fXAOR8E0esGttoN_KjQD0nCrUXnM2pBTALL5Q9BzXIZ7uRtLhO6onlQHRhDHqY9l9F9DDIBQgFyyo8quRbNmANkhCw3DX8atZYxvNF-Uf1KESSxi01niOECp5NoPql3RmLDJj7A1XaLeTVxTS.webp?r=65b">

                <img class='imgSerie misturaDoisFinal' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABedQ5kJctNBCtewfu6ARaPUxK4ARIPuAmcPbnjYkZn6cBECv7CiCOrQSOwyYwv9znmU0KSFBen21AlAlbb6WZRzTK4wEO3xc9QI.webp?r=29f">

                <!-- Parte 6 final -->

                <!-- Parte 7 inicio -->

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABYj7eqTstKY274dS1bd6a7KaLHRZMZJYgejFhFbZYHDpx2rn6GCQSnyJRODerUnJ6myPXv0PmnJaPO-sUp5_2A5ejSywufu_ndsLF3eqKdsoP-urR_zR1zaDTfG4REXBqM50.jpg?r=b1a">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABWveHKe7KlCsk5R0az4P-B7HGUUkaagqnW70WQ1Q56StRizMlQOsSi6ZzVbTjZcrTnFLLZ-szeO9DrpEQsWqXPtdy6Rcv5zeFj3E_oeWW0db2BbWy57tR1B33FjP0j285pei.jpg?r=fbe">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABWfK9ozh8fOL_vE2AmzRXV-t2tGnx5RrdJa57E2YdLXzV45buUbG-T988-lnUrCGInvf0XBwYZGUOZ4QB18V3m-LM2mSRF_p4C27Sk3Wnh77PrPaers0cmkzqoutdJraPGPr.jpg?r=359">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABTHeA8cCmUi_s8Bec1gEQMAZf7rfDpSvlt7LrttSg9p7Ztc7odczjnFZQrOBXgoBtnveCYT5bM0f43Salc4N3kSGLBJZop6ZorT4KDXt03ZJzeVkPcewCsnme3cWoTtHtKjR.jpg?r=f67">

                <img class='imgSerie misturaTresFinal' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABR1_fa02OAXJ1P1OJL3ncrpPlIfSluPKZbbVZ3ZbBj3aw_zXJ82rFaWOC-UPcuT8aT7Piy2xeJDijQ7fNmv9cp3AreH4Nad6whzi4szEAupoQR1jaPLyPY1i7APSAXigQeEfEOoehGFKkPGTazWi4a2p9zpJRYdb2F_Ke0CEhkYV-27JwzYQuDKjPuYoihlapTvob2neloGREPs_rfRpkhzy7tzz90IxN8ppBtTl9gtNICuiSRO8pVXGeI6POZSiRvqdnbrHS8_wShWIz6K4zM4ued3cZNOU6rgEAGSgq3Q7jQtxsfQRT9xyYzWrBKD45Xpx1nBXIKl_XZD1VQZGRODMXgAM42EffXSODad2-hemaIZODeGxwJhnyuplVxH7Oc1PCmrvc6ZyDUlinMCUGCGJPCLNClPW8MlrLsSp29wAOtbF_gp2C0oOMgFGI8CdnqCN_Gw9Wgv6CqQ.jpg?r=ce6">

                <!-- Parte 7 final -->
                <button class='generalArrowStyle' id="rightArrow">

                    <img class='right' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>

                </button>
                
            </div>

        </section>

        <section class="standardSeriesBox" id="topdez">
                <div class="titleAlignment">
                    <div>
                        <h2>Brasil: top 10 em filmes hoje
                            <span>Ver tudo
                            <img class="arrow" alt='arrow' src='https://img.icons8.com/metro/15/54b9c5/forward.png'/></span>
                        </h2>
                    </div>
                    <div class="rotation">

                        <div class="currentRotation" style='background: #fff;'></div>
                        <div class="currentRotation"></div>

                    </div>
                </div>
                <div id="topicsOfTheMonth">
                    <div id="inicio">
                        <button class='generalArrowStyle' id="leftArrow">

                            <img class='left' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>
        
                        </button>

                        <svg viewBox="-20 0 70 154" class="svg-icon svg-icon-rank-1 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M35.377 152H72V2.538L2 19.362v30.341l33.377-8.459V152z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABSMk-2Ma4a9mBapZogoIpS7ouCo04nAKf0O_2UcxSV2dI8bGpZIvywe0K1I0IbFUFTbxPTE0cS8iEtWlRYS4oDBgGLQyFBKCaMhvosyK0bj2yzDW_P44vMiMXPpUdbr0KE7Vxc7oy7AuhO54TMK8Ax56dUA77bBtZUloCWfDU1lsTKvMYA2PxHhpMAdSaxe-QZ5-tcO_jGjsRltY4LiIHefO406SeLz1c8KTTplokzAQ7QVFbbVjpvdnAo4_XRO2tMvCYBvQP_7tXIyF1OoacQ.webp?r=6f2' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-2" viewBox="0 0 80 154" class="svg-icon svg-icon-rank-2 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M3.72 152H113v-30.174H50.484l4.355-3.55 29.453-24.012c5.088-4.124 9.748-8.459 13.983-13.004 4.16-4.464 7.481-9.339 9.972-14.629 2.449-5.203 3.678-11.113 3.678-17.749 0-9.428-2.294-17.627-6.875-24.645-4.597-7.042-10.941-12.494-19.07-16.376C77.803 3.957 68.496 2 58.036 2 47.591 2 38.37 4.023 30.347 8.06c-8.015 4.032-14.457 9.578-19.352 16.654-4.492 6.493-7.389 13.803-8.693 21.952h34.055c1.236-3.52 3.398-6.52 6.459-8.97 3.54-2.834 8.277-4.224 14.147-4.224 5.93 0 10.552 1.537 13.76 4.681 3.181 3.12 4.791 7.024 4.791 11.594 0 4.151-1.16 7.934-3.468 11.298-2.192 3.194-5.987 7.124-11.405 11.84L3.72 122.465V152z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABY1y8bY9tmFi4ailwY8dNyRIuPkpFXCRxT89ovcY3o9LXd1xzzEl6zXSSmULqKH0karqCnp3XW7mhKS11zQnawIy7rnqpdis2PGu-z7qPMUcxrNAQ4G2gQAS1H5yGwBNPy7NMp8qHWQx0Y0uGX52SQLDJEzdC7N9v6GaLQzjIymtX6muO-QPwg6xB6fChi_RRgA9z95KYEM83cxFxgaU4c7Rg0HGOjFR4j2tl7NA0JpNU7DYK3EjnoUkW8NGy8O25pl7OifXZuyfyqAb9u6sXijZKwX_haa28FvayieQhijq8Buyzw.jpg?r=a32' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-3" viewBox="0 0 80 154" class="svg-icon svg-icon-rank-3 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M3.809 41.577h33.243c1.3-2.702 3.545-4.947 6.674-6.72 3.554-2.015 7.83-3.01 12.798-3.01 5.555 0 10.14 1.11 13.723 3.376 3.839 2.427 5.782 6.283 5.782 11.315 0 4.553-1.853 8.395-5.473 11.38-3.547 2.926-8.18 4.37-13.821 4.37H41.44v28.366h16.77c5.572 0 10.275 1.227 14.068 3.711 4.02 2.633 6.071 6.581 6.071 11.616 0 5.705-1.943 9.975-5.853 12.562-3.658 2.42-8.292 3.61-13.863 3.61-5.205 0-9.82-.94-13.827-2.836-3.698-1.75-6.32-4.272-7.785-7.529H2.33c2.096 12.089 7.761 21.65 17.028 28.78C29.242 148.175 42.594 152 59.476 152c10.706 0 20.175-1.783 28.42-5.337 8.185-3.528 14.575-8.486 19.208-14.884 4.595-6.346 6.896-13.938 6.896-22.837 0-6.952-1.93-13.494-5.81-19.666-3.815-6.07-9.68-10.367-17.683-12.908l-5.46-1.735 5.353-2.04c6.659-2.538 11.667-6.338 15.083-11.412 3.431-5.096 5.142-10.806 5.142-17.181 0-8.471-2.262-15.778-6.787-21.985-4.574-6.275-10.7-11.17-18.408-14.696C77.683 3.775 69.109 2 59.687 2 44.084 2 31.515 5.816 21.91 13.415c-9 7.119-15.025 16.486-18.101 28.162z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABTC8Tm7zb0AxvGX-rc6a_2FIbkK1W8HQie4gQ4H5imjLamr5s778RwGOiGvOXA33uG0hxG49R1KJs3eZLlZTXNa9vVkYZS7-220rF2bD8qayzz6CAlF-nRYEMPfSlXYTVv4XwKtG4Mrt55U2GgmSSGidoMzPSHQ67hHGPU9S7v302uGYMw8Zemc8Ura_2f1KtE0aCXNjTB4P8sBU5cF6jUJgrfdBTxeyHN9HofbITMlM_m42ynSnzizo8Fxm_p0ITj_wwZeCtJgAeFPlXZir6g.webp?r=68f' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-4"  viewBox="0 0 81 154" class="svg-icon svg-icon-rank-4 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M72 152h35.333v-30.977H128V92.497h-20.667V2H69.89L2 92.712v28.311h70V152zM36.202 92.188l35.93-47.998v47.998h-35.93z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABeICWIKj4isCdf3XcweeYNs1bhG9BdCrOMpNNMhJ0TLYCSB3b883bo5b99DrRSD1NzXBcSyX79oqn23NFFTzpK9IXgHeL8yLKTwPjhd3L43f9NjUkVWLDSmlPknho4PMVsakwmeRuN-pIPcIGyZHsl3YZiM3gLBcvK5Q40UzChVjAbp_At2DnZ6UIcjrFh1lCwgGylbdlcHLbo8u0F1vAqgqfrEjTrfByQNKxlQpci89ppQQw8TZXKbtIiYZdF3Jaa7N490Q0rojNGIXY8jgtwWX7CHxuOMcH_yYAbM7Ds0-rDj8VQ.jpg?r=acf' alt=""/>

                    </div>
                    <div>

                        <svg id="rank-5" viewBox="0 0 81 154" class="svg-icon svg-icon-rank-5 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M105.588 32.174V2H13.534l-8.3 88.357h32.463c2.145-2.362 4.866-4.254 8.143-5.675 3.585-1.554 7.543-2.328 11.859-2.328 6.247 0 11.418 1.745 15.418 5.255 4.061 3.564 6.104 8.37 6.104 14.265 0 6.041-2.044 10.89-6.121 14.387-3.999 3.43-9.162 5.132-15.401 5.132-4.299 0-8.17-.694-11.601-2.095-3.11-1.268-5.577-2.946-7.368-5.042H2.592c3.308 11.593 9.782 20.623 19.46 27.164C32.472 148.464 45.64 152 61.602 152c10.12 0 19.294-1.99 27.548-5.966 8.198-3.949 14.711-9.718 19.572-17.335 4.844-7.59 7.278-16.95 7.278-28.123 0-9.182-2.013-17.314-6.032-24.431-4.02-7.118-9.514-12.7-16.51-16.775-6.99-4.072-14.849-6.109-23.612-6.109-11.06 0-20.099 3.483-27.234 10.461l-3.892 3.806 3.273-35.354h63.595z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABcZJP_VTXGKs8H76kgqI7wq__t-KbVS6kDt5ME-Q-U8wJPmePmzoNhlz5b85vVNIFLlvLmjQZNgybrNUBviI8pIABC4QF4A1SYmpI0Rm3qpdrL6CJO_rXg0PQR1D8hoxZW0_PbUI_ce5i8hxKwB1hP-O4PVAmd_ux1uDY7Jg3dM85ZxAxAAyAoyMPYR3exyVzCSmjRk.jpg?r=b76' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-6" viewBox="0 0 81 154" class="svg-icon svg-icon-rank-6 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M79.482 38.192h35.551c-3.284-10.945-8.963-19.573-17.048-25.938C89.323 5.434 77.531 2 62.545 2 50.756 2 40.35 4.86 31.277 10.577c-9.064 5.712-16.198 14.09-21.412 25.178C4.63 46.893 2 60.425 2 76.365c0 14.416 2.356 27.344 7.059 38.798 4.667 11.368 11.573 20.34 20.734 26.956C38.904 148.7 50.225 152 63.816 152a61.513 61.513 0 0019.922-3.278 53.546 53.546 0 0017.378-9.792c5.154-4.33 9.255-9.64 12.314-15.947 3.042-6.273 4.57-13.556 4.57-21.868 0-8.812-2.062-16.636-6.182-23.51-4.134-6.897-9.643-12.293-16.55-16.212-6.905-3.917-14.48-5.874-22.76-5.874-14.546 0-25.34 4.55-32.569 13.63l-4.003 5.03.443-6.413c.874-12.636 3.56-21.85 8.168-27.654 4.69-5.907 10.885-8.9 18.421-8.9 4.26 0 7.826.734 10.685 2.24 2.445 1.287 4.396 2.867 5.829 4.74zM62.605 123c-5.825 0-10.902-1.894-15.136-5.655C43.173 113.528 41 108.603 41 102.71c0-5.881 2.164-10.864 6.44-14.818C51.674 83.975 56.762 82 62.604 82c5.847 0 10.906 1.98 15.074 5.905C81.878 91.859 84 96.837 84 102.71c0 5.885-2.131 10.805-6.35 14.622-4.167 3.77-9.214 5.668-15.045 5.668z"></path></svg>


                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABRn374dPuNsdOZjhnIXJVBF-fk3s5a2p2s0B6x6IsRqbk8uLr96xodXnme5593-7pflUc0zZDQtgS9p-KovnBqE9PpcKoo0NqY-HgVMagQCBbd3leYKCiYPyTzK7o3WnDFtA5nVB1q6ulLaGFrwlhAVo02B4IOnVuSRZZD7_33JnU_kiP1GBCuYpE30SJdU-JvdKzlQCl4tYNHKn0e-XeJmhlCOwe0UPniApsQEmEfh3YXZwGuRLVyy6nMcnEQmJhxl7CJYJwRplyasSiIXwJg.webp?r=dec' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-7" viewBox="0 0 78 154" class="svg-icon svg-icon-rank-7 top-10-rank"><path stroke="#595959" stroke-width="4" d="M113,2 L2,2 L2,33.4022989 L75.9665929,33.4022989 L21.22571,152 L60.28102,152 L113,32.7672283 L113,2 Z" stroke-linejoin="square"></path></svg>


                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABWlmeIFlzoHbCLE260FUu_QIOUKXWMJHTnog9Ot7s10IocEyJT8VRcIb-1ae3HAFX11ByJ9SDBVimkPShZI2l0PJ0q6E3t_RVv6N4JcA6ee-kLbf2itrvhzvPBFXh-lzS9qAgCAKl3WvnhCJjuaXQYaD0FkQ3be2gcUU1r3zg6rHHL6Cey6WCC0B1dePEEGgwBtuQPIjK66SaKXxMiBVMUBOQXwWCEJ0kLOJPZpR_iIshucnhvTrnSSS8WwPNZIWLyyC53sUwNf6j8UMNk_ZmQ.webp?r=da0' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-8"  viewBox="0 0 77 154" class="svg-icon svg-icon-rank-8 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M59.5 152c11.335 0 21.358-1.72 30.077-5.15 8.637-3.397 15.361-8.258 20.213-14.586 4.805-6.267 7.21-13.876 7.21-22.899 0-7.326-2.261-14.07-6.813-20.29-4.548-6.214-10.837-10.658-18.922-13.35l-5.4-1.799 5.338-1.975c7.238-2.678 12.572-6.683 16.066-12.018 3.53-5.388 5.284-11.178 5.284-17.414 0-7.912-2.133-14.839-6.405-20.84-4.3-6.042-10.403-10.825-18.345-14.351C79.816 3.78 70.386 2 59.5 2S39.184 3.781 31.197 7.328c-7.942 3.526-14.044 8.309-18.345 14.351-4.272 6.001-6.405 12.928-6.405 20.84 0 6.236 1.755 12.026 5.284 17.414 3.494 5.335 8.828 9.34 16.066 12.018l5.338 1.975-5.4 1.798c-8.085 2.693-14.374 7.137-18.922 13.351C4.261 95.295 2 102.04 2 109.365c0 9.023 2.405 16.632 7.21 22.899 4.852 6.328 11.576 11.19 20.213 14.586 8.72 3.43 18.742 5.15 30.077 5.15zm.5-89c-5.6 0-10.334-1.515-14.125-4.56C41.985 55.313 40 51.183 40 46.21c0-5.244 1.976-9.518 5.875-12.65C49.666 30.515 54.4 29 60 29s10.334 1.515 14.125 4.56C78.025 36.694 80 40.968 80 46.212c0 4.973-1.985 9.103-5.875 12.228C70.334 61.485 65.6 63 60 63zm-.5 62c-6.255 0-11.556-1.613-15.836-4.856-4.41-3.343-6.664-7.816-6.664-13.25 0-5.298 2.258-9.698 6.664-13.038C47.944 90.613 53.245 89 59.5 89c6.255 0 11.556 1.613 15.836 4.856 4.406 3.34 6.664 7.74 6.664 13.038 0 5.434-2.254 9.907-6.664 13.25C71.056 123.387 65.755 125 59.5 125z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABSN9wXjxfyDYZgxS9RXbHHlVkU6HpszPA9WKsyHLjpQE0YIIGVdSiXUher2a-Y3DcJ7o4G_UjltfNrexx8SD61oESzGbrQRnLkEU.webp?r=43b' alt=""/>

                    </div>

                    <div>

                        <svg id="rank-9" viewBox="0 0 71 154" width="100%" height="100%" class="svg-icon svg-icon-rank-9 top-10-rank"><path stroke="#595959" stroke-width="4" d="M40.0597376,115.807692 L4.47328474,115.807692 C7.45109332,126.586242 13.4362856,135.15497 22.4670906,141.582071 C32.2129251,148.518048 44.5640134,152 59.5759717,152 C78.2141671,152 92.5105725,145.697944 102.6454,133.074799 C112.853557,120.360322 118,101.543854 118,76.5769231 C118,62.1603327 115.678843,49.3016297 111.046669,37.9886125 C106.453069,26.7698049 99.6241767,17.9802976 90.5435117,11.5767831 C81.5017862,5.20072813 70.1375399,2 56.3957597,2 C49.4158116,2 42.68229,3.15952329 36.1849549,5.47966815 C29.7045526,7.79376647 23.8782903,11.1932931 18.6948526,15.6846002 C13.5316746,20.1583529 9.45923583,25.508367 6.46782377,31.7491046 C3.4928156,37.95562 2,45.0644366 2,53.0961538 C2,61.9117395 4.02797967,69.7019439 8.0788911,76.5056791 C12.1434539,83.3323424 17.5832537,88.6925139 24.4218542,92.6108203 C31.2518358,96.5241882 38.8590885,98.4807692 47.2791519,98.4807692 C55.0853554,98.4807692 61.6095996,97.3619306 66.8547126,95.1478231 C72.0569983,92.9517941 76.4513169,89.5970183 80.0605818,85.0622151 L84.0584687,80.039134 L83.6207883,86.4440446 C82.74746,99.2241219 80.0984349,108.438199 75.5533003,114.10687 C70.9310132,119.871766 64.7726909,122.788462 57.2438163,122.788462 C52.8691399,122.788462 49.1904302,122.100251 46.212535,120.692834 C43.5930338,119.454801 41.5307848,117.825945 40.0597376,115.807692 Z M57.5,31 C63.3657106,31 68.4419893,32.9364861 72.6299874,36.7826253 C76.8609583,40.6682294 79,45.6186068 79,51.5 C79,57.3813932 76.8609583,62.3317706 72.6299874,66.2173747 C68.4419893,70.0635139 63.3657106,72 57.5,72 C51.6342894,72 46.5580107,70.0635139 42.3700126,66.2173747 C38.1390417,62.3317706 36,57.3813932 36,51.5 C36,45.6186068 38.1390417,40.6682294 42.3700126,36.7826253 C46.5580107,32.9364861 51.6342894,31 57.5,31 Z" stroke-linejoin="square"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABa3KZRrUJqmnlWpNvlkqfeiDljpMR9lqmqMvnMSoXiQxJ-vvQeagvzjcR6eT_c8Y3O52u8dyH9u9wulmMcbLxmELooM800qWmL0au10l_cBQTSq4wLmd8FUNihp6yE6K47CQemjHne6_3WYZUNduztz3wuaCcEqbI8J2IEqiO0cySIineI3O5fd-9yq8KlsNCXX8mJP4Mk_5ZTQYh-aUOa3z-rRmgmfRSk2tIv7c6n54-q8iBidu8bWM3jR0XtbNbE_JT5o73bKsDY3BZGui6w.webp?r=b47' alt=""/>

                    </div>

                    <div id="fim">

                        <svg id="rank-10"  viewBox="0 0 140 154" class="svg-icon svg-icon-rank-10 top-10-rank"><path stroke="#595959" stroke-linejoin="square" stroke-width="4" d="M34.757 151.55h35.869V2.976L2 19.687v30.14l32.757-8.41v110.132zm105.53 3.45c12.394 0 23.097-3.12 32.163-9.353 9.093-6.25 16.11-15.047 21.066-26.43C198.5 107.766 201 94.196 201 78.5c0-15.698-2.5-29.266-7.484-40.716-4.955-11.384-11.973-20.18-21.066-26.431C163.384 5.119 152.681 2 140.287 2c-12.393 0-23.096 3.12-32.162 9.353-9.093 6.25-16.11 15.047-21.066 26.43-4.984 11.45-7.484 25.02-7.484 40.717 0 15.698 2.5 29.266 7.484 40.716 4.955 11.384 11.973 20.18 21.066 26.431 9.066 6.234 19.769 9.353 32.162 9.353zm0-31.368c-7.827 0-13.942-4.147-18.15-12.178-4.053-7.736-6.047-18.713-6.047-32.954s1.994-25.218 6.047-32.954c4.208-8.03 10.323-12.178 18.15-12.178 7.827 0 13.943 4.147 18.15 12.178 4.053 7.736 6.048 18.713 6.048 32.954s-1.995 25.218-6.047 32.954c-4.208 8.03-10.324 12.178-18.15 12.178z"></path></svg>

                        <img src='https://occ-0-933-420.1.nflxso.net/dnm/api/v6/WNk1mr9x_Cd_2itp6pUM7-lXMJg/AAAABUDdFKXzE6F97h7irfAEdEY6MDFwKseYddw7-oV1Tv6LXVBACJzz5V8vUereg-xKpNYx-v57lasb6kXLSsRh-vuhTh5favOf6iuLVYobmJ8VCbpIyY67l9N4jZmj0XIRoyzE-NxnjuaTOpxsEHCJNxKyDKbYQK30TfvxX3A5ZBGOFw88aaA4Uh0BWiGehPCoc0VeSgpGsJBj8cHg_Hm5HhnzIssmfOjEP8I5a-9Y6FIf9hQsahrGFT2xWW_ljYzDnFT-zv5phcRjnKnISsl6P-_UEhgIkvNC2YialnIj7Rd6m3ZLsw.jpg?r=2d6' alt=""/>

                    </div>

                    <button class='generalArrowStyle' id="rightArrow">

                        <img class='right' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>
    
                    </button>
                </div>
            


        </section>

        <section class="standardSeriesBox">

            <div class="titleAlignment">
                <div>
                    <h2>Séries européias
                        <span>Ver tudo
                        <img class="arrow" alt='arrow' src='https://img.icons8.com/metro/15/54b9c5/forward.png'/></span>
                    </h2>
                </div>

                <!-- Marcação do rolamento do scroll -->
                <div class="rotation">

                    <div class="currentRotation" style='background: #fff;'></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>

                </div>

            </div>

            <div class="scroll">

                <button class='generalArrowStyle' id="leftArrow">

                    <img class='left' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>

                </button>

                <!--  Parte 1-->
                <img class='imgSerie inicioMortePCarona' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABTJMQutOfyflOqE8XeGVkm4NsbM-06LfiRxmCSHEU7tfsTzAiO-I64GLUR9EvCwf1i_Z6gzPgiXmqCnw3lIWwSoopRsONypyXM3-1cUR6ml8_Db2EF85KgLMU1SoyF0Z2KVE.jpg?r=52b">
  
                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABUW5K8GAzCbUv1zlD19FxLgVPs9a8C1MFEJ97sCB3xKMaBvJAoSsqEg6o5EskHesalAJp23voayrk_DKI8jWqY7jVOuwVEqeJw4.webp?r=485">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABQm2Ori-4a3JFtQg3eNUdDQkN5V--HNUDfSKNmwIpmBvfWHwdWXTD_Q5-mlWFnR-THWGvDsdjigNdRrWA_5kRV7gvtsn8SQ_J_A_BugtftnsWO7LJX4FjhkQkeks_ZvFoPcc.jpg?r=985">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABci3LZ_6FmMkBVI2zOAZuTx6xyvBuZe6TxtoZyfbieKMrr4QEHBjGQayl4KzsCMlbSZCsR4K_Rygs0Sv5U47ts1F9CDVW5ruY91eT3y5TsG6KfbQnFnEWHGviJdqacx5jIPb.jpg?r=401">
                    
                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/rkETp35xJVj-6WaffQsS77awykM/AAAABVHnhy-JuKSNEZZrAoQeM45znfnateMkJvoTHKFeFiD1AUuzDzPRTNb-GkNqJ9rLQh3TFA5N6R0CTpjDVXph7Lpq14sopD9oWmkmPFeJI1ofXfT20jLDbags_Oj-R_mHDu5W.jpg?r=a4c">

                <img class='imgSerie SagaWinxInicio' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie SagaWinxFinal' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <!-- Parte 1 final -->

                <!-- Parte 2 começo -->

                <img class='imgSerie OidnbInicio' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie OidnbFinal' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <!-- Parte 2 final -->

                <!-- Parte 3 inicio -->
                <img class='imgSerie bakiInicio' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie bakiFinal' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <!-- Parte 3 final -->

                <!-- Parte 4 inicio -->

                <img class='imgSerie inicioDahmer' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie dahmerFinal' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <!-- Parte 4 final -->

                <!-- Parte 5 inicio -->
                <img class='imgSerie misturaUmInicio' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie mistaUmFinal' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <!-- parte 5 final-->

                <!-- parte 6 inicio -->
                <img class='imgSerie misturaDoisInicio' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie'  alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie'  alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie misturaDoisFinal' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <!-- Parte 6 final -->

                <!-- Parte 7 inicio -->

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie misturaTresFinal' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <!-- Parte 7 final -->
                <button class='generalArrowStyle' id="rightArrow">

                    <img class='right' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>

                </button>
                
            </div>

        </section>

        <section class="standardSeriesBox">

            <div class="titleAlignment">
                <div>
                    <h2>Séries européias
                        <span>Ver tudo
                        <img class="arrow" alt='arrow' src='https://img.icons8.com/metro/15/54b9c5/forward.png'/></span>
                    </h2>
                </div>

                <!-- Marcação do rolamento do scroll -->
                <div class="rotation">

                    <div class="currentRotation" style='background: #fff;'></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>
                    <div class="currentRotation"></div>

                </div>

            </div>

            <div class="scroll">

                <button class='generalArrowStyle' id="leftArrow">

                    <img class='left' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>

                </button>

                <!--  Parte 1-->
                <img class='imgSerie inicioMortePCarona' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">
  
                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">
                    
                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie SagaWinxInicio' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie SagaWinxFinal' alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <!-- Parte 1 final -->

                <!-- Parte 2 começo -->

                <img class='imgSerie OidnbInicio' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <img class='imgSerie OidnbFinal' alt="Oidnb" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcvkb8R1RJahSIhq69_b-RH1rd4jGmRfY_3VZSHo8f9BkfSAptu0TGd4UX1SUkB11e5ezesfEaZ0jthh_EPNEF16rQucqT1epNG5UeS-jUNe_vbxTq_e1JZYUdP3-pLtKYHz.jpg?r=feb">

                <!-- Parte 2 final -->

                <!-- Parte 3 inicio -->
                <img class='imgSerie bakiInicio' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie bakiFinal' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <!-- Parte 3 final -->

                <!-- Parte 4 inicio -->

                <img class='imgSerie inicioDahmer' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie dahmerFinal' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <!-- Parte 4 final -->

                <!-- Parte 5 inicio -->
                <img class='imgSerie misturaUmInicio' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie mistaUmFinal' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <!-- parte 5 final-->

                <!-- parte 6 inicio -->
                <img class='imgSerie misturaDoisInicio' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie'  alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <img class='imgSerie'  alt="Fate: A saga winx" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYCBNyKU2N6zXaoepQAyELmMySCiQpCeXSWRc6Kc0PIOhYYH5iRH8deEwQYtDShQUnwWEswBBQPwa2rGiXq9Dssi7B0RSHNfeS8YpzMaCEpf2sewJ_e7jNvSSmX8vTnW0MmzNKfyQsQccdpqUfwx5PBpMZ9-oRbhKbtEVHDvnkUL1b70692wKThoS0JqhqGse6OObAH89zb_aapX0y7YiUpGx4498GXf8ZcWOW3iLUFaVyTNVgnNumQTRpe6qOEjoHsqWSqF6g6z3upLvwBcSVN_dOMBfVVI17P9HLTDhtBisE1MZKrvoNWkojXm9MS2__9GwKhUlKVyTCnUmX8Q_S1W.jpg?r=129">

                <img class='imgSerie misturaDoisFinal' alt="A morte pede carona" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS25tFDY_Cij0mgEldWnkl1pOq8qtROREaX873sEWo43DIHyX52P4qoB0BUGTWfRMSS7uiChSKqdtbAx4P6FkPXNZ3VRr3dZsfs.webp?r=0f1">

                <!-- Parte 6 final -->

                <!-- Parte 7 inicio -->

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <img class='imgSerie' alt="Dahmer" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIkwRUMnIajdlpYq4tG9xz28GkE_GbEgDcQukdv2ypmnOdTnVYZETlumpla580F5y_CIvnYHewjauf9-Bpl0RK3jzEL-VRH-L-OjbimiX2O-FU40CJRlV5NfOZruluIghbhTXVmsmDYD6DCjYcajonkPD5khNv3zeUp0Lllb9brwMVxiyD1xEGmyWj2dVI.jpg?r=e31">

                <img class='imgSerie misturaTresFinal' alt="Baki" src="https://occ-0-933-420.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTLoOfuQ4p3M08VAVGCiw16b5zjFOOoNxm4rkmjsIyQTzAEODt75ufbEAQwxFdb2JYWt_xxxsofPH1oCkGekxPaswrnzGBdpC2asvABQd8Xh6VMu10bWBz62VZ3neBPDTkJF.jpg?r=d38">

                <!-- Parte 7 final -->
                <button class='generalArrowStyle' id="rightArrow">

                    <img class='right' alt='arrow' src='https://img.icons8.com/metro/35/ffffff/forward.png'/>

                </button>
                
            </div>

        </section>

    </main>
    <script src="js/index.js">

        //Botão do video

        
        //let imagem = document.querySelector('#mute')
        document.querySelector('video').onplay = e=>{
            document.querySelector('#mute').addEventListener('click', event=>{
            

                if(document.querySelector('#muteImg').src != "https://img.icons8.com/ios-filled/20/null/room-sound.png"){

                    document.querySelector('#muteImg').src="https://img.icons8.com/ios-filled/20/null/room-sound.png";
                    document.querySelector('video').muted = false
                    boleano = false

                }else{

                    document.querySelector('#muteImg').src="https://img.icons8.com/material-rounded/20/ffffff/no-audio--v1.png"
                    document.querySelector('video').muted = true
                    boleano = false
                }

            })
            
        }

        //Fundo de tela

        let header = document.querySelector('header')
        let video = document.querySelector('#video')
        let boleano = false
        video.style.display = 'none';


        document.querySelector("#tagVideo").onended = ()=>{
            
            
            
            //imagem botão
            document.querySelector('#muteImg').addEventListener('click', event=>{

                video.style.display = 'block';
                header.style.background='transparent'
                document.querySelector('video').play()
                console.log('ok')

                document.querySelector('#muteImg').src="https://img.icons8.com/ios-glyphs/20/null/recurring-appointment.png"

                document.querySelector('video').onplay = e=>{
                    document.querySelector('#mute').addEventListener('click', event=>{
                
                        if(document.querySelector('#muteImg').src != "https://img.icons8.com/ios-filled/20/null/room-sound.png"){

                            document.querySelector('#muteImg').src="https://img.icons8.com/ios-filled/20/null/room-sound.png";
                            document.querySelector('video').muted = false
                            boleano = false

                        }else{

                            document.querySelector('#muteImg').src="https://img.icons8.com/material-rounded/20/ffffff/no-audio--v1.png"
                            document.querySelector('video').muted = true
                            boleano = false
                        }

                    })
            
        }

            })
        }
        /*document.querySelector('#muteImg').src="https://img.icons8.com/ios-glyphs/20/null/recurring-appointment.png"

        document.querySelector('video').onplay = e=>{
                document.querySelector('#mute').addEventListener('click', event=>{
            
                    if(document.querySelector('#muteImg').src != "https://img.icons8.com/ios-filled/20/null/room-sound.png"){

                        document.querySelector('#muteImg').src="https://img.icons8.com/ios-filled/20/null/room-sound.png";
                        document.querySelector('video').muted = false
                        boleano = false

                    }else{

                        document.querySelector('#muteImg').src="https://img.icons8.com/material-rounded/20/ffffff/no-audio--v1.png"
                        document.querySelector('video').muted = true
                        boleano = false
                    }

                })
            
        }*/
            /*document.querySelector('#mute').addEventListener('click', event=>{

                if(ocument.querySelector('video').muted == false){

                    document.querySelector('#muteImg').src="https://img.icons8.com/ios-filled/20/null/room-sound.png"
                    document.querySelector('video').muted = false

                }else{

                    document.querySelector('#muteImg').src="https://img.icons8.com/material-rounded/20/ffffff/no-audio--v1.png";
                    document.querySelector('video').muted = true

                }

            })*/

        
    </script>
    
</body>
</html>