<html ng-app="myApp">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SapientNitro</title>

    <base href="/">
<!--  LIBS -->




<link rel="stylesheet"  href="assets/css/bootstrap.css"/>   
<link rel="stylesheet"  href="assets/css/bootstrap-select.css"/>
<link rel="stylesheet"  href="assets/css/ng-table.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css">
<link rel="stylesheet" href="assets/css/angular-material.css"/>

<link rel="stylesheet" href="assets/css/glass_loader.css"/>
<link rel="stylesheet" href="assets/css/style.css"/>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
<!-- <link rel="stylesheet" href="assets/css/form.css"/>
<link rel="stylesheet" href="assets/css/login.css"/> -->

    
<script type="text/javascript" src="assets/js/angular.js"></script>
 <script type="text/javascript" src="assets/js/angular-ui-router.min.js"></script>

<script type="text/javascript" src="assets/js/ng-table.js"></script>
<script type="text/javascript" src="assets/js/angular-animate.js"></script>
 <script type="text/javascript" src="assets/js/angular-aria.js"></script>  
<script type="text/javascript" src="assets/js/angular-messages.js"></script>
 <script type="text/javascript" src="assets/js/angular-material.js"></script> 
 <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script> 
 <script src="http://pc035860.github.io/angular-highlightjs/angular-highlightjs.min.js"></script>

<!--APPLICATION--> 
    
    
<!-- <script type="text/javascript" src="app/app.routes.js"></script> -->
<script type="text/javascript" src="app.js"></script>    
    
    
<!--CONTROLLERS-->    
    


<script type="text/javascript" src="app/components/Main/mainController.js"></script>




   
    
    
<!--SERVICES-->
<script type="text/javascript" src="app/components/Main/mainService.js"></script>
    

<!-- DIRECTIVES -->
<script type="text/javascript" src="app/shared/shared.directive.js"></script>


<!-- DATA FACTORY-->
<script type="text/javascript" src="app/shared/shared.data.factory.js"></script>
<script type="text/javascript" src="app/shared/shared.service.factory.js"></script>



</head>



    <body class="bg-images" ng-controller="MainController as main">
  <header>
<!-- Here the Main Heading along with Other Details will Come-->
<img class="img-responsive" src="assets/image/sapient_nitro.jpg" alt="Sapient Nitro" height="200px" width="200px" style="display:inline-block;"/>
<span class="">--an Ecom Hub</span>

  </header>
  <main class="container">

  <!-- In this We will load the UI for the all the language Search -->
  <!-- There has to  be a sideBar Component that will show all the statistic Analysis by storing it in IndexDB-->
   <div ui-view>
     Loading all the latest products..
   </div>
</main>
        
   
        
       

  <div class='loader'>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--text'></div>
  </div>

             
            </body>
    
</html>
