<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
   
<body>

        <div class="corpo">

        <form  action="processar.php" method="post"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br><br>

        <label for="cpf">CPF ou RG:</label>
        <input type="text" name="cpf" required><br><br>
        
      
        <div class="genero">
         <label>Gênero:</label>
        <input type="radio" name="genero" value="Masculino" required> Masculino
        <input type="radio" name="genero" value="Feminino" required> Feminino
</div>
        

        <div class="personal">
        <label for="personal">personal:</label>
    
        <button>sim</button> <button>não</button>
        </div>

       <div class=pagamento>
        <label for="pagamento">Forma de Pagamento:</label>
            <select name="pagamento" required>
            <option value="Cartão de Crédito">Pix</option>
            <option value="Cartão de Crédito">Cartão de Débito</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Boleto Bancário">Boleto Bancário</option>
            <option value="Transferência Bancária">Transferência Bancária</option>
        </select><br><br><br>
         </div>


         <div class= "aulas">
        <label for="email">Aulas:</label>
        <input type="text" name="aulas" required><br>
       </div>


        <div class= "cadastro">
        <button> Cadastrar </button>
        </div>
        </form>
        
       
        </div>
         <div id="lateral">
          <img src="5.png" alt="">
           <img src="4.png" alt="">
        </div>
     
</body>
</html>

