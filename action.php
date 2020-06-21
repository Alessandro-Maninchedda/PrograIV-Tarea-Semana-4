<?php
   //class siempre mayuscula
   class Action{
      //Nivel de privacidad //Atributos
      public $name;
      public $email;
      public $comment;

      //Metodos
      //Constructor //Polimorfismo diferentes formas de hacer lo mismo
      //Todo comentario tiene un estandar. Tambien mantienen el lenguage de las variables
      /**
       * Metodo consctructor
       * @param String $pname nombre digitado
       * @param String $pemail correo de la persona
       * @param String $pcomment comentario sobre la pagina
       */
      public function _construct($pname, $pemail, $pcomment){
         $this->name = $pname; 
         $this->email = $pemail;
         $this->comment = $pcomment;
      }
      
      /**
       * Ordena los datos bajo formato de correo
       * @return string texto ordenado
       */
      private function generar(){
         return "Hola, ".$this->name." ha realizado un comentario.<br>Correo: ".$this->email."<br>Descripcion: <br>".$this->comment;
      }

      /**
       * Envia correo electronico
       * @return bool verdadero si se envia correctamente
       */
      public function enviar(){
         //mail para enviar correo
         return mail($this->email, 'Comentario sobre sitio web.', $this->generar());
      }
   }

   // if(($_GET['nombre'])){}

   if($_GET){
      $submit = new Action(isset($_GET['name']), isset($_GET['email']), isset($_GET['comment']));
      //Cada if requiere un comentario
      //If mail has been sent
      if($submit->Enviar()){
         echo "Correo enviado";
      } else {
         echo "Error, correo no enviado";
      }
   }

?>