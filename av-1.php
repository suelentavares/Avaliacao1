<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avaliacao1</title>
</head>
<body>
    <?php 
    
    class Carro {
        public $marca;
        public $modelo;
        public $ano;
        public $cor;
        public $velocidade =0;


        public function  acelerar () {
            $this->velocidade += 10;
            echo "o carro acelerou. velocidade: " . $this->velocidade . " km/h<br>";
          
           
        }

        public function frear() {
            $this->velocidade >= 10;
            if ($this->velocidade >= 0) {
                $this->velocidade -= 0;
            }
            echo "o carro freou. velocidade: " . $this->velocidade . " km/h<br>";

           
        }

    } 
    //objetos
    $meuCarro = new Carro(); 
    //metodos  

    $meuCarro -> acelerar();
    $meuCarro -> acelerar();
    $meuCarro -> frear();

    ?>
</body>
</html>
