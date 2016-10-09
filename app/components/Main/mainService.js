angular.module('mainService',[])

.factory('callService',function($http,$q,SharedServiceFactory)
        {
   
    var authFactory={};

    authFactory.doServiceCall=function(callback){


        $http.post("https://hackerearth.0x10.info/api/nitro_deals?type=json&query=list_deals")
        .success(function(data){

                console.table(data);
                callback(data);
                return data;

        })
        .error(function(data){
            console.log('Error in Calling Service'+data);
        })
    }



    
    
   
    
    
  
    
    
       
   
    
    return authFactory;
})





    










