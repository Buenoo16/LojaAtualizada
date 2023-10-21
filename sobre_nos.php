<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sobre nós</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<style>
    *{
    
    padding: 0;
    font-size: 20px;
      font-family: 'Assistant', sans-serif;
      
      margin: 0;

  } 
   
  h1{
      margin-top: 10px;
      color: #104A80;
      font-size: 35px;
  }
  .sobre{
      width: 45%;
      
      margin-left: 20px;
      text-align: justify;
  }
  .center{
      display:flex;
      justify-content: space-between;
      
      
  }
  
  .valores, .visao{
      margin-left: 75px;
      
  }
  .final{
      display: flex;
  }
  h2{
      font-size: 26px;
      color: #104A80;
  }
  .dev img{
      width: 150px;
      border: solid 5px #104A80;
      border-radius: 50%;
      box-shadow: 4px 11px 10px rgba(0, 0, 0, 0.5);
     
  }
 
    
</style>
<body>
        <?php require "header.php" ?>
    <div class="sobre">
    <h1>Sobre a loja</h1>
    <p>Na bueno D!scs!, nossa missão é proporcionar aos amantes da música uma seleção diversificada de discos de vinil, tanto clássicos atemporais quanto lançamentos contemporâneos. Nosso catálogo abrange uma ampla variedade de gêneros musicais, desde o rock n' roll enérgico até o jazz suave, passando pelo funk, soul, reggae e muito mais. Trabalhamos com os melhores fornecedores e artistas para garantir a qualidade e autenticidade de cada disco que oferecemos.</p>
    <br>
    <div class="center">
        <div class="missao">
        <h1>Missão</h1>
        <p>A missão da Bueno D!scs vai além de ser apenas uma loja online de discos de vinil. Nós nos dedicamos a promover e preservar a cultura musical, resgatando a autenticidade e a essência dos vinis em um mundo cada vez mais digital.</p>
        </div>
       
        
        <div class="valores">
            <h1>Valores</h1>
            <p>Na Bueno D!scs, nossos valores fundamentais são a paixão pela música, a autenticidade dos discos de vinil, a excelência no atendimento ao cliente, a integridade e transparência, a sustentabilidade e a valorização da cultura musical. Esses valores são essenciais para fornecer uma experiência única e autêntica aos nossos clientes.
</p>
        </div>
        <div class="visao">
            <h1>Visão</h1>
            <p>A visão da Bueno D!scs é ser a referência no mercado de discos de vinil online, proporcionando uma experiência excepcional aos clientes, preservando a autenticidade dos vinis e promovendo a paixão pela música em sua forma mais genuína. Buscamos ser reconhecidos como uma plataforma confiável, inovadora e culturalmente relevante, atendendo às necessidades dos amantes da música em todo o mundo.</p>
            
            </div>
        
    </div>
    <div class="final">
    <div class="dev">
        <h1>Desenvolvimento</h1>
        <br>
        <img src="https://i.ibb.co/D7m2pfM/images-87.jpg" alt="dev" border="0">
        <h2>Dev Mateus Bueno</h2>
        <p>Html, css, deploy</p>
        
    </div>
    </div>
    
    </div>
    <?php require "footer.php" ?>
    
</body>
</html>
