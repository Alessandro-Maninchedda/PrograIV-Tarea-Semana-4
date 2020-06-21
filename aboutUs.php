<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Alessandro Maninchedda Tarea - Progra IV</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="index.html">
            <img src="images/time_manager-512.png" width="40px" height="auto" alt="Logo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
             </li>
             <!-- <li class="nav-item">
               <a class="nav-link" href="aboutUs.php">About Us</a>
             </li> -->
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 Services
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="calculadora.html">Calculadora - Semana 3</a>
                 <a class="dropdown-item" href="#">Time Manager</a>
                 <a class="dropdown-item" href="#">ToDo list</a>
                 <a class="dropdown-item" href="#">Goal Tracker</a>
                 <a class="dropdown-item" href="#">Scheduler</a>
                 <a class="dropdown-item" href="#">Everyday's</a>
                 <a class="dropdown-item" href="#">Expense Tracker</a>
                 <a class="dropdown-item" href="#">Budget App</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="aboutUs.php">Give Us Feedback!</a>
               </div>
             </li>
             <!-- <li class="nav-item">
               <a class="nav-link" href="#"></a>
             </li> -->
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
       </nav>
   </header>

   <!-- About Us -->
   <div class="container-about-us">
      <h1>About Us!</h1>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, laborum exercitationem necessitatibus cupiditate labore tempore harum facilis! Expedita, voluptatibus! Natus assumenda repellendus ipsum nihil quaerat dolorum repellat et explicabo voluptas, tempore quidem ipsam, sapiente rerum quos aliquam placeat? Qui nobis, dolore labore beatae dolorem laborum ab earum illo blanditiis obcaecati?</p>
      <br>
      <img src="images/timeManage.jpg" alt="foto" width="500px" height="300px">
      <br><br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi quis cum voluptates ducimus, praesentium reiciendis odio illo fugiat numquam, officia esse sed repudiandae dolore voluptate rem qui mollitia atque soluta. Perspiciatis, sint fuga sunt sit iusto a est ex praesentium. Sit, veritatis nam! Nihil suscipit ipsa saepe pariatur delectus provident iusto totam expedita eligendi magnam omnis exercitationem maiores, vitae reprehenderit vero harum quis ullam nobis tempore? Nihil dignissimos hic cum minima voluptatem voluptatibus, consequuntur molestias at rem exercitationem vero aut pariatur placeat. Assumenda reiciendis vero debitis sequi ipsa, voluptas eum minima sed dicta distinctio officia impedit praesentium mollitia perspiciatis.</p>
   </div>

   <!-- Formulario de Contactenos -->
   <section id="Formulario">
      <div>
         <div class="container-form">
            <div class="row">
               <div class="col-lg-10 mx-auto">
               <h3 class="ConUs ConUsMain">Contact us!</h3>
               </div>
               <div class="col-lg-8 mx-auto">
               <h2  class="mb-5 ConUs">Want to give us feedback about our site?</h2>
               </div>
            </div>
         </div>
         <form class="forms" action="action.php" style="color: white">
            <label class="form" for="name"><h4>First Name</h4></label>
            <input class="form" type="text" id="name" name="name" placeholder="Your name..">

            <label class="form" for="Email"><h4>Email</h4></label>
            <input class="form" type="email" id="email" name="email" placeholder="Your email..">

            <label class="form" for="comment"><h4>Comment</h4></label>
            <textarea class="form" name="comment" id="comment" cols="30" rows="2"></textarea>

            <br>
            <input id="form-submit" type="submit" value="Submit">
         </form>
      </div>
   </section>
   

<footer class="page-footer font-small blue pt-4">
   <div class="footer-copyright text-center py-3">© 2020 Copyright:
     <a href="#"> Alessandro Maninchedda</a>
   </div>
</footer>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
