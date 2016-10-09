angular.module('mainController',[])

.controller('MainController',function($rootScope,$state,$location,CommonDataFactory,$mdDialog, $mdMedia,SharedServiceFactory,callService)
           {
    
	 var vm=this;
	
	  vm.query = {};
    vm.queryBy = 'tags';
	 vm.results=callService.doServiceCall(callback);
	

	 function callback(data){
	 	//Callback called when we get the Main Data containing code and everything
	 	console.log("Data is "+data.deals);
	 	CommonDataFactory.setActualData(data.deals);
	 	vm.results=data;
	 	vm.deals=data.deals;


	 	


	 }




  
  	
    
    
    
      
    

  
   
  
    
    
   
    
    
})

















