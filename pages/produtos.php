<?php
    if($_GET["interesse"] == 'l') {
       $interest_title = 'Logística'; 
    }
    if($_GET["interesse"] == 'm') {
        $interest_title = 'Manufatura'; 
     }
     if($_GET["interesse"] == 'd') {
        $interest_title = 'Manufatura'; 
     }
     if($_GET["interesse"] == 'p') {
        $interest_title = 'Prestadores de Serviço'; 
     }
     if($_GET["interesse"] == 'f') {
        $interest_title = 'Financeiro'; 
     }
     if($_GET["interesse"] == 'v') {
        $interest_title = 'Varejo'; 
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtendTI | Nossos Serviços</title>
    <link rel="stylesheet" href="../styles/interest/interest-products.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
<body>
    <div class="wrapper">
        <header class="nav-header">
            <nav class="home-back">
                <a href="index.html"><img class="nav-icon" src="../img/home.svg" alt="Home"></a>
                <a href="interesses.php"><img class="nav-icon" src="../img/back.svg" alt="Voltar"></a>
            </nav>
        </header>

        <section class="ours-services-container">
            <h1 class="ours-services-title">Produtos de <?php echo $interest_title; ?></h1>
        </section>

        <section class="cards-container">
        <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">
                    <img src="../img/totvs.png" alt="Totvs">
                    <div class="service-info">
                        <h2 class="service-title">ACURACIDADE</h2>
                        <p class="service-description">
                            Relatório de acuracidade traz com exatidão todos os valores x quantidades de produtos em estoque


                        </p>
                    </div>
                </div>
        <?php } ?>
            
            <?php 
                if(
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/reimplantacao.png" alt="Reimplantação">
                <div class="service-info">
                    <h2 class="service-title">ANALISE CARTEIRA DE PEDIDOS</h2>
                    <p class="service-description">
                        Relatório onde se informa de forma detalhada todas as vendas por período

                    </p>
                </div>
            </div>
            <?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/customizacao.png" alt="Customização">
                <div class="service-info">
                    <h2 class="service-title">ANALISE CENTRO DE CUSTO</h2>
                    <p class="service-description">
                        Centro de custo é uma forma de cálculo que separa o que é gasto e o que é ganho pela empresa, fazendo um balanço de cada produto ou projeto, é possivel  saber qual investimento ou produto traz resultados mais positivos


                    </p>
                </div>
            </div>
<?php } ?>
            
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/acompanhamento.png" alt="Acompanhamento de Implantação">
                <div class="service-info">
                    <h2 class="service-title">ANÁLISE EXPLOSÃO DE ESTRUTURAS</h2>
                    <p class="service-description">
						

                    </p>
                </div>
            </div>
            <?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/auditoria_de_aderencia.png" alt="Auditoria de Aderência">
                <div class="service-info">
                    <h2 class="service-title">APONTAMENTO DESCENTRALIZADO</h2>
                    <p class="service-description">
                        Produto permite que os apontamentos de produção sejam efetuados pelos proprios operadores, em ilhas espalhadas dentro da fabrica, propiciando a exibição on line em telões de gestão a vista,que facilitam a tomada de decisões e ações para contornar falhas e atrasos,esse produto torna extremamente visual o que acontece dentro da fabrica

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/help-desk.png" alt="Help Desk">
                <div class="service-info">
                    <h2 class="service-title">APROVAÇÃO DE HORA EXTRA</h2>
                    <p class="service-description">
                        Sistema de aprovação das  horas extras previamente solcitada diminuindo burocracias na empresa

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/documentacao.png" alt="Documentação">
                <div class="service-info">
                    <h2 class="service-title">ATENDIMENTO NO PRAZO</h2>
                    <p class="service-description">
                        Relatório  que verifica todas as ordens de serviço e faz um calculo baseada na data de solicitação e o prazo de entrega,informando quais os que estão em atraso ou não,fazendo com que o pos-venda possa ter esse controle diminuindo os atrasos

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-emergencial.png" alt="Suporte Emergencial">
                <div class="service-info">
                    <h2 class="service-title">AUDITÓRIA DE CAIXAS</h2>
                    <p class="service-description">
                        Relatório que traz de forma analítica todos os processos desde abertura do caixa ate o seu encerramento,valores,repasses e ajustes.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CADASTRO DE PRODUTO WEB</h2>
                    <p class="service-description">
                        Sistema que cadastra qualquer tipo de produto podendo deixa lo bloqueado ou não, com a possibilidade de visualizar uma foto ou imagem do item.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL  MAPA SEPARAÇAO</h2>
                    <p class="service-description">
                    Sistema de solicitação de mercadoria diretamente do centro de distribuição para a loja solicitante
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL DASHBOARD</h2>
                    <p class="service-description">
                        Relatório analítico onde podera ser informado varios indicadores, tais como rankings,valores totalizados,poderndo haver graficos e planilhas
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL DE CARTõES</h2>
                    <p class="service-description">
                    Sistema completo de baixa e relatoria sobre recebimento de cartões de credito x debito
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL DE HORAS EXTRAS</h2>
                    <p class="service-description">
                    Sistema responsável direto que auxilia ao setor pessoal para controle de horas extras
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL DE IMPORTAÇÃO</h2>
                    <p class="service-description">
                    Todos os processos de importação ,rapporto,invoices,richiesta, embarque etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
					$_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL DE PRECIFICAÇÃO</h2>
                    <p class="service-description">
                    A mais importante forma de cálculo de preço numa empresa seja varejo ou atacado,o sistema faz todo o cálculo baseado em impostos,variação atualizando o preço de uma mercadoria de uma forma onde não existam falhas
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CENTRAL XML</h2>
                    <p class="service-description">
                    Sistema que gera a chave de nota fiscal para envio ao cliente por email etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">COCKPIT VENDEDOR</h2>
                    <p class="service-description">
                    Relatório de vendas individual por vendedor (somente visivel para quem esta logado no sistema)
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">COMISSÂO</h2>
                    <p class="service-description">
                    Sistema que controla todo o comissionamento dos vendedores de uma empresa 
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CONFERÊNCIA PEDIDO DE COMPRA</h2>
                    <p class="service-description">
                    Produto que gera um relatório em pdf para conferência dos itens de uma compra já efetivada
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CONSULTA ESTOQUE WEB</h2>
                    <p class="service-description">
                    Sistema que tem como principal função ter um total controle de estoque de uma empresa
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CONSUMO MATÉRIA-PRIMA</h2>
                    <p class="service-description">
                    Sistema que informa de forma detalhada todos os itens de matéria-prima de um equipamento
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CONTAGEM DE INVENTÁRIO</h2>
                    <p class="service-description">
                    Toda empresa precisa de um controle de estoque, afim de evitar perdas, e ate mesmo o  inconveniente de vender uma mercadoria que não tem no estoque, esse produto ajuda a ter total dominio de toda movimentação desde  a entrada ate a saida de uma mercadoria.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">COPIA DE ESTRUTURA DE PRODUTOS INTELIGENTE</h2>
                    <p class="service-description">
                    
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">COTAÇÃO</h2>
                    <p class="service-description">
                    Sistema criado para fazer comparativo de solicitações e determinar quem é  o ganhador de acordo com as condições apresentadas
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">CURVA ABC FORNECEDORES E PRODUTOS</h2>
                    <p class="service-description">
                    Sistema onde classifica  as informações para que se separem os itens de maior relevância ou impacto com os de menor importância
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">DASHBOARD  SIMPLES</h2>
                    <p class="service-description">
                    Relatório sintético de produtos, recebimentos, vendas pode ser usando para qualquer aréa e afins
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">DESPESAS POR CENTRO DE CUSTO</h2>
                    <p class="service-description">
                    Criado para que se tenha um controle total das despesas de uma empresa por centro de custo
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">DIAS SEM VENDA-PRODUTO</h2>
                    <p class="service-description">
                    Ferramenta alertar sobre os produtos de menor saida afim de evitar a perdar ou a compra desnecessária de uma mercadoria
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">E-COMMERCE</h2>
                    <p class="service-description">
                    Sistema completo de vendas via web
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">EFICIÊNCIA</h2>
                    <p class="service-description">
                    Relatório atraves de planilhas e gráficos onde se discrimina cada detalhe de materiais usados  na produção em um determinado período.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">EMBARQUE NACIONAL</h2>
                    <p class="service-description">
                    Sistema de importação onde é criado um documento que organiza todos os volumes facilitando tanto o embarque quanto desembarque,o sistema faz um controle total de todos os itens.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' 
				) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">ESTOQUE DISPONÍVEL CD</h2>
                    <p class="service-description">
                    Criado especialmente para filíais de uma empresa, esse produto gera um relátorio quantitativo de todo estoque existente no centro de distribuição assim como seu preço de varejo,atacado e cod de barras
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">ESTOQUE MOBILE</h2>
                    <p class="service-description">
                        
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'd' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">EXTRATO DE MERCADORIA</h2>
                    <p class="service-description">
                    Relatorio que informa de forma detalhada todo os caminhos percorridos por uma mercadoria na empresa desde a sua chegada ate a saida
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">FATURAMENTO DE DEPARTAMENTOS</h2>
                    <p class="service-description">
                    Relatório totalizador que traz de forma sintetica por departamento ou setor valores recebidos
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">FATURAMENTO DIARIO</h2>
                    <p class="service-description">
                    Sistema totalizador que relaciona de forma diaria todos os recebimentos
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                  
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">FATURAMENTO POR CATEGORIA</h2>
                    <p class="service-description">
                    Sistema totalizador por categoria de mercadoria
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">FATURAMENTO POR FILIAL</h2>
                    <p class="service-description">
                    Sistema totalizador por filial
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">FOLLOW UP</h2>
                    <p class="service-description">
                    Ferramenta permite o total acompanhamento dos pedidos de compra.data de entrega flutuante,data de entrega original,contatos estabelecidos,registro de acordos e informações,aviso de embarque etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">GEOMAPA DE VENDAS</h2>
                    <p class="service-description">
                    Sistema criado para vendas ecommerce onde informa os locais onde tem a maior quantidade de vendas
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">GERAR SOLICITAÇÃO PADRÃO</h2>
                    <p class="service-description">
                    
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">HELP DESK</h2>
                    <p class="service-description">
                    Pensando em ter um sistema simples e facil de usar, a atendti criou seu proprio sistema de helpdesk-hda pudendo a ferramenta ser usada em qualquer ambiente seja ele desktop ou mobile
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">INCLUSÃO DE DESPESA WEB</h2>
                    <p class="service-description">
                    Ferramenta que proporciona a inclusõo de uma despesa, não importando a natureza da mesma
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">IQF</h2>
                    <p class="service-description">
                    Indice de qualificaçao de fornecedores usado para verifica e garantir que sua empresa tenha sempre os melhores fornecedores
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'                     
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">ITENS DA ESTRUTURA DE PEDIDOS</h2>
                    <p class="service-description">
                    Ferramenta usada para detalhar os itens obrigatórios de um peça vendida
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">LISTA BASICA POR EMPENHO</h2>
                    <p class="service-description">
                    
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">LISTA DE SEPARAÇÂO</h2>
                    <p class="service-description">
                    
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">LISTAGEM DE PEDIDOS</h2>
                    <p class="service-description">
                    Sistema de relatória que informa todos os pedidos de um determinado cliente por periodo
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">LUCRO LIQUIDO POR CLIENTE</h2>
                    <p class="service-description">
                    
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">M.R.P</h2>
                    <p class="service-description">
                    Produto calcula os estoque e define momentos em que é necessario comprar cada item de uma mercadoria, com base nas suas necessidade e estrutura de fabrica,seu objetivo é manter a estrutura funcionando sem excessos ou falta de material
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">MARGEM BRUTA</h2>
                    <p class="service-description">
                    Lucro direto que uma empresa Obtém por um bem ou serviço.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">MARGEM BRUTA DATA WAREHOUSE</h2>
                    <p class="service-description">
                    Sistema que contabiliza valores sobre uma banco de dados de acordo com a data, sempre usada  ate o dia anterior
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">NF ENTRADA</h2>
                    <p class="service-description">
                    Entrada, retorno ou devolução de mercadoria o sistema gera uma nota fiscal de entrada formalizando o ingresso da mercadoria na empresa
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
					$_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">NF ENTRADA CANCELADA</h2>
                    <p class="service-description">
                    Produto gera um relatório informando todas as notas fiscais de entrada que foram canceladas trazendo detalhes do produto como seu nome. valor, quantidade etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">M.R.P</h2>
                    <p class="service-description">
                    Produto calcula os estoque e define momentos em que é necessario comprar cada item de uma mercadoria, com base nas suas necessidade e estrutura de fabrica,seu objetivo é manter a estrutura funcionando sem excessos ou falta de material
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'             
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">NF SAIDA</h2>
                    <p class="service-description">
                    Produto traz um relatório de forma analitica todas as notas fiscal de saida trazendo detalhes do produto como seu nome. valor, quantidade etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
					$_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">NF SAIDA CANCELADA</h2>
                    <p class="service-description">
                    Produto gera um relatorio informando todas as notas fiscais de saida que foram canceladas trazendo detalhes do produto como seu nome. valor, quantidade etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">ORÇAMENTO</h2>
                    <p class="service-description">
                    sistema que gera orçamento após pedido de venda seja ela local ou via web
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(		
					$_GET["interesse"] == 'm' || 
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'                     

                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">ORDEM DE SERVIÇOS</h2>
                    <p class="service-description">
                    Processo onde é gerada ordem de serviço para diversos, exemplo troca de refletores area externa, compra garrafao de agua etc
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PEDIDO LOJA CD</h2>
                    <p class="service-description">

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PEDIDOS DE COMPRAS EM ABERTO</h2>
                    <p class="service-description">
                    Relatório que informa todos os pedidos  de compras interno que estao em aberto aguardando as aprovaçoes
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PEDIDOS EM ABERTO</h2>
                    <p class="service-description">
                    Relatório que informa todos os pedidos que estao em aberto aguardando confirmação de pagamento
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PEDIDOS X PROPOSTAS</h2>
                    <p class="service-description">
                    Relatório sintetico que traz todos as vendas e propostas por vendendor através de um ranking mostrado em gráficos e planilhas detalhando valores e metas 
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PERFIL DE PRODUTOS</h2>
                    <p class="service-description">

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">POSIÇÃO DE ESTOQUE NO FECHAMENTO</h2>
                    <p class="service-description">
                    Sistema que cria uma tabela de quantidade em estoque por período
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'                    

                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PRÉ-PEDIDOS</h2>
                    <p class="service-description">

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PRECIFICAÇÂO</h2>
                    <p class="service-description">
                    Ferramenta prever tudo o que pode ser necessário para a precificação.considera importação,exportação,imposto,custos indiretos,custos diretos,rateios. enviar workflow para variação de custo para o  standard cadastrado conforme percentual paramêtrizado. ferramenta muito util para empresas que possuem dificuldade em precificar seu produto
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PRODUTOS EM ELABORAÇÂO</h2>
                    <p class="service-description">
                    Produto traz todos os itens e materiais necessarios para criaçâo de uma mercadoria final, nome do cliente,ordem de produçâo,emissão,custo total e quantidade etc.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'                     

                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PRODUTOS X PEDIDOS</h2>
                    <p class="service-description">

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
					$_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">PROPOSTA COMERCIAL</h2>
                    <p class="service-description">
                    Produto facilita o gestor no ato de aprovar uma proposta comercial, ou seja caso uma venda seja com um valor bem abaixo da tabela o responsavel pelo processo de liberaçao tem a prerrogativa de aprovar ou não a venda.
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RAIO X DO PRODUTO</h2>
                    <p class="service-description">
                    Tendo em vista que a maioria dos sistemas de mercado não possuem um gerenciamento completo e eficaz da ordem de produção, a atendti optou por desenvolver um produto, capaz de renderizar todo o processo de forma rapida e simples,o sistema ira apresentar em paginas web todos os detalhes da op, trazendo informaçoes e graficos modernos,informações como produtos nos ultimos 12 meses,estrutura,empenhos com saldo dos componentes, quantidades de horas apontadas,horas media, historico,tempo padrão,onde esta a op. por onde se passou a op e muito mais
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">REGISTRO DE ATIVIDADE</h2>
                    <p class="service-description">
                    Registra todas as atividades relacionadas ao login no sistema
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RELAÇÃO DE NFs</h2>
                    <p class="service-description">
                    Produto que informa todas as notas fiscais geradas independente do status
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
					$_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RELATÒRIO DE DESPESAS</h2>
                    <p class="service-description">
                    Sistema que proporciona um controle de todas as despesas de uma empresa
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RELATÒRIO DE PERDA</h2>
                    <p class="service-description">
                    Produto destinado a empresas que usam materia prima terceirizada, o sistema gera um relatÒrio de toda a perda que uma maquina faz durante um ciclo de atividade
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(

                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RELATÒRIO META</h2>
                    <p class="service-description">
                    Relatòrio que traz de forma analitica sobre valores, meta, restante, o que falta ou quanto já ultrapassou a meta
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(

                    $_GET["interesse"] == 'l' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RELATÒRIO VENDAS</h2>
                    <p class="service-description">
                    Relatório sintetico relacionada a vendas, quantidade vendida, produto mais vendido etc
                    </p>
                </div>
            </div>			
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RENDIMENTO</h2>
                    <p class="service-description">
                    Gerado um relatório analitico de todos os rendimentos(lucros) de uma empresa mostrado atraves de graficos,e extrato , podendo ser gerado por dia/mês/ano
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' 
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">REQUISIÇÂO</h2>
                    <p class="service-description">
                    Sistema de solicitacâo de materiais para escritorio ou diversos de acordo com a filial
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">REQUISIÇÂO ARMAZEM</h2>
                    <p class="service-description">
                    Sistema que gera um romaneio em pdf das solicitações de materiais em estoque
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RESERVA MAPA WEB</h2>
                    <p class="service-description">
                    Sistema que faz a reserva de mercadoria pelo centro de distribuiçao conforme pedido da filial.garantindo o estoque necessario
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RESUMO DE EMPENHO</h2>
                    <p class="service-description">
                    Relatório que exibe todas as ocorrências de forma organizada e simples, atrasos, faltas, abonos, motivo do abono, saidas antecipadas, atestados etc. é uma ferramenta que facilita a gestão de pessoas com base a congregação de varios tipos de ocorrências
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
					
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">RPVAL</h2>
                    <p class="service-description">
                    Sistema que efetua a precificação em massa no setor varejístico
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">SAIDA EXPEDIÇÃO</h2>
                    <p class="service-description">
                    Criado para que não haja falhas no momento da separação de mercadorias,o produto saida expedição calcula o estoque atual com o que esta sendo dado baixa atualizando sempre seu saldo, evitando que o estoque tenha erros de contagem
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">SISTEMA DE AVARIAS</h2>
                    <p class="service-description">
                    Sistema que grava todas as avarias para que não seja computada com estoque,eliminando as chances de vender algo com defeito
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">TABELA DE PREÇO</h2>
                    <p class="service-description">
                    Traz todos os produtos com seus respectivos preços, podendo haver um filtro por valor ou quantidade em estoque
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">TABELA DE PREÇO PRODUTO</h2>
                    <p class="service-description">
                    Somente um produto individual assim como seu preço e quantidade disponivel em estoque
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">VENDA EXTERNA</h2>
                    <p class="service-description">

                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f' || 
                    $_GET["interesse"] == 'v'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">VENDA FATOR</h2>
                    <p class="service-description">
                    Sistema que calcula os valores fiscais de uma mercadoria no ato da sua venda
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">VENDA POR FAMILIA</h2>
                    <p class="service-description">
                    Produto que possibilita a venda de varios itens de acordo com a familia
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(

                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">WFLW APROVAÇÃO DE SOLICITAÇÕES/h2>
                    <p class="service-description">
                    Produto visa facilitar a aprovação de solicitações e pedidos,sistema totalmente web, responsivo,que permite a aprovação anywhere
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(

                    $_GET["interesse"] == 'p' || 
                    $_GET["interesse"] == 'f'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">WFLW APROVAÇÃO DE SOLICITAÇÔES DE SERVICO</h2>
                    <p class="service-description">
                    Sistema de analise para ordens de serviços eventuais onde podera ser feito a aprovação ou não do serviço
                    </p>
                </div>
            </div>
<?php } ?>
            <?php 
                if(
                    $_GET["interesse"] == 'l' ||
                    $_GET["interesse"] == 'm' ||
                    $_GET["interesse"] == 'd' || 
                    $_GET["interesse"] == 'p'
                    
                ) { ?>

                <div class="service-card">

                <img src="../img/suporte-mensal.png" alt="Suporte Mensal">
                <div class="service-info">
                    <h2 class="service-title">WLFW APROVAÇÃO DE ORDEM DE SERVIÇO</h2>
                    <p class="service-description">
                    Sistema que possibilita a aprovação de ordens de serviço mediante autorização
                    </p>
                </div>
            </div>
<?php } ?>
        </section>

    </div>
</body>
</html>