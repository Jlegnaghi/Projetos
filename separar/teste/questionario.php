<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/questionario.css">
    <title>Questionário</title>
    <style>
        .pergunta {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Questionário</h1>
    <form action="processa_questionario.php" method="post" id="questionario-form">

        <!-- Pergunta 1 -->
        <div class="pergunta" id="pergunta1">
            <label>1. Qual seu local de residência permanente?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
            
            <br>
            <label for="estado">Estado (se aplicável):</label>
            <input type="text" name="estado" id="estado">
        </div>


        <!-- Pergunta 2 -->
        <div class="pergunta" id="pergunta2">
            <label for="resposta2">2. Se é de outra cidade ou país, você se hospedou na região?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 3 -->
        <div class="pergunta" id="pergunta3">
            <label for="resposta3">3. Se sim, em qual cidade? Total de pernoites?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 4 -->
        <div class="pergunta" id="pergunta4">
            <label for="resposta4">4. Se não, quantas horas passou no Paraguai?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 5 -->
        <div class="pergunta" id="pergunta5">
            <label for="resposta5">5. Sexo?</label>
            <br>
            <input type="checkbox" name="resposta1" value="masculino" id="masculino">
            <label for="masculino">Masculino</label>
            
            <input type="checkbox" name="resposta1" value="feminino" id="feminino">
            <label for="feminino">Feminino</label>
        </div>

        <!-- Pergunta 6 -->
        <div class="pergunta" id="pergunta6">
            <label for="resposta6">6. Qual sua idade?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 7 -->
        <div class="pergunta" id="pergunta7">
            <label for="resposta7">7. Qual seu grau de escolaridade?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 8 -->
        <div class="pergunta" id="pergunta8">
            <label for="resposta8">8. Qual sua forma de trabalho?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 9 -->
        <div class="pergunta" id="pergunta9">
            <label for="resposta9">9. Qual sua renda bruta mensal familiar?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 10 -->
        <div class="pergunta" id="pergunta10">
            <label for="resposta10">10. Quantas pessoas são incluídas nessa renda?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 11 -->
        <div class="pergunta" id="pergunta11">
            <label for="resposta11">11. Quais localidades visitou nessa viagem? Quantas vezes?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 12 -->
        <div class="pergunta" id="pergunta12">
            <label for="resposta12">12. Qual motivo da viagem para a região?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 13 -->
        <div class="pergunta" id="pergunta13">
            <label for="resposta13">13. Qual motivo da viagem para o Paraguai?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 14 -->
        <div class="pergunta" id="pergunta14">
            <label for="resposta14">14. Qual o meio de transporte utilizado para chegar a Foz do Iguaçu?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 15 -->
        <div class="pergunta" id="pergunta15">
            <label for="resposta15">15. Forma de viagem?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 16 -->
        <div class="pergunta" id="pergunta16">
            <label for="resposta16">16. Qual a sua estimativa total de gastos em Foz do Iguaçu com essa viagem?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 17 -->
        <div class="pergunta" id="pergunta17">
            <label for="resposta17">17. Quantas pessoas estão incluídas nesse gasto?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 18 -->
        <div class="pergunta" id="pergunta18">
            <label for="resposta18">18. Visitou atrativos turísticos em Foz do Iguaçu e região?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 19 -->
        <div class="pergunta" id="pergunta19">
            <label for="resposta19">19. Se sim, quais? Em uma escala de 1 a 5, sendo 1 péssimo e 5 excelente, como você classifica os atrativos visitados?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 20 -->
        <div class="pergunta" id="pergunta20">
            <label for="resposta20">20. Pretende retornar a Foz do Iguaçu?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 21 -->
        <div class="pergunta" id="pergunta21">
            <label for="resposta21">21. Quanto gastou com compras no Paraguai nesta visita?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 22 -->
        <div class="pergunta" id="pergunta22">
            <label for="resposta22">22. Este gasto inclui quantas pessoas?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 23 -->
        <div class="pergunta" id="pergunta23">
            <label for="resposta23">23. As compras são para?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 24 -->
        <div class="pergunta" id="pergunta24">
            <label for="resposta24">24. Você considera a ponte uma atração turística?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 25 -->
        <div class="pergunta" id="pergunta25">
            <label for="resposta25">25. Você considera a ponte limpa?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 26 -->
        <div class="pergunta" id="pergunta26">
            <label for="resposta26">26. Você se sente seguro na região da ponte?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 27 -->
        <div class="pergunta" id="pergunta27">
            <label for="resposta27">27. Você conhece o mirante da ponte?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 28 -->
        <div class="pergunta" id="pergunta28">
            <label for="resposta28">28. Quais serviços você gostaria de encontrar no mirante?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 29 -->
        <div class="pergunta" id="pergunta29">
            <label for="resposta29">29. Se ocorreu algum contato, como foi o atendimento na aduana brasileira?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 30 -->
        <div class="pergunta" id="pergunta30">
            <label for="resposta30">30. Você acredita que as pessoas que praticam contrabando/descaminho deveriam sofrer condenação penal?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 31 -->
        <div class="pergunta" id="pergunta31">
            <label for="resposta31">31. Em relação à fiscalização realizada na aduana brasileira, qual sua opinião?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 32 -->
        <div class="pergunta" id="pergunta32">
            <label for="resposta32">32. Com que frequência faz compras no Paraguai?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Pergunta 33 -->
        <div class="pergunta" id="pergunta33">
            <label for="resposta33">33. Você costuma abastecer nos postos de combustíveis no Paraguai?</label>
            <br>
            <input type="checkbox" name="resposta1" value="Foz do Iguaçu" id="foz_do_iguacu">
            <label for="foz_do_iguacu">Foz do Iguaçu</label>
            
            <input type="checkbox" name="resposta1" value="Outras cidades" id="outras_cidades">
            <label for="outras_cidades">Outras cidades</label>
            
            <input type="checkbox" name="resposta1" value="Outro país" id="outro_pais">
            <label for="outro_pais">Outro país</label>
        </div>

        <!-- Botão de envio (visível apenas na última pergunta) -->
        <input type="submit" value="Enviar" id="enviar" style="display: none;">

        <!-- Botão de navegação -->
        <button type="button" id="anterior" onclick="navegarPergunta(-1)">Anterior</button>
        <button type="button" id="proximo" onclick="navegarPergunta(1)">Próximo</button>
    </form>

    <script>
        let perguntaAtual = 1;
        const totalPerguntas = 33;

        function navegarPergunta(passo) {
            const perguntaAtualElement = document.getElementById('pergunta' + perguntaAtual);
            perguntaAtualElement.style.display = 'none';
            perguntaAtual += passo;
            const proximaPerguntaElement = document.getElementById('pergunta' + perguntaAtual);
            proximaPerguntaElement.style.display = 'block';

            const anteriorBotao = document.getElementById('anterior');
            const proximoBotao = document.getElementById('proximo');
            const enviarBotao = document.getElementById('enviar');

            anteriorBotao.disabled = perguntaAtual === 1;
            proximoBotao.disabled = perguntaAtual === totalPerguntas;
            enviarBotao.style.display = perguntaAtual === totalPerguntas ? 'block' : 'none';
        }

        // Mostrar a primeira pergunta inicialmente
        document.getElementById('pergunta1').style.display = 'block';
    </script>
</body>
</html>