(function () {

  angular.module('app.services', [])
  /**************************************************
               Companies
  **************************************************/
    .factory('companiesService', ['$http', '$q', '$window', function ($http, $q, $window) {

      function listCompanies(){
        var deferred = $q.defer();
        $http.get('/get_companies')
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response, data, status){
            console.log(response)
            console.log(data);
            switch(status){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500"; */
            }
          });
        return deferred.promise;
      };
      function addCompany(formData){
        var deferred = $q.defer();
        $http.post('/companies',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };
      
      return {
        listCompanies: listCompanies,
        addCompany: addCompany,
      };
    }])


  /**************************************************
               Employees
  **************************************************/
    .factory('employeesService', ['$http', '$q', '$window', function ($http, $q, $window) {

      function getEmployees(){
        var deferred = $q.defer();
        $http.get('/get_employees')
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response, data, status){
            console.log(response)
            console.log(data);
            switch(status){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500"; */
            }
          });
        return deferred.promise;
      };

      function addEmployee(formData){
        var deferred = $q.defer();
        $http.post('/employees',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };

      function updateEmployee(formData){
        var deferred = $q.defer();
        $http.patch('/employees',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };

      function deleteEmployee(id){
        var deferred = $q.defer();
        $http.delete('/employees/'+id)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };
      
      return {
        updateEmployee: updateEmployee,
        addEmployee: addEmployee,
        deleteEmployee: deleteEmployee,
        getEmployees: getEmployees
      };
    }]) 
    
    /**************************************************
               Job positions
  **************************************************/
    .factory('jobPositionsService', ['$http', '$q', '$window', function ($http, $q, $window) {

      function getJobPositions(){
        var deferred = $q.defer();
        $http.get('/get_job_positions')
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response, data, status){
            console.log(response)
            console.log(data);
            switch(status){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500"; */
            }
          });
        return deferred.promise;
      };

      function addJobPosition(formData){
        var deferred = $q.defer();
        $http.post('/job_positions',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };

      function updateJobPosition(formData){
        var deferred = $q.defer();
        $http.patch('/job_positions',formData)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };

      function deleteJobPosition(id){
        var deferred = $q.defer();
        $http.delete('/job_positions/'+id)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };

      function showJobPosition(id){
        var deferred = $q.defer();
        $http.get('/job_positions/'+id)
          .success(function (data) {
            deferred.resolve(data);
          })
          .error(function(response,data, status){
            console.log(response);
            switch(data){
            /*case 500: $window.location.href="/500"; break;
            case 400: $window.location.href="/400";break;
            default: $window.location.href="/500";*/
            }
          });
        return deferred.promise;
      };
      
      return {
        getJobPositions: getJobPositions,
        addJobPosition: addJobPosition,
        updateJobPosition: updateJobPosition,
        deleteJobPosition: deleteJobPosition,
        showJobPosition: showJobPosition
      };
    }]) 

    /**********************************************************
        Request 
    ***********************************************************/
    .factory('requestsServices',['$http','$q','$window',function($http,$q,$window){

      function getRequests(){
        var deferred= $q.defer();
        $http.get('/get_requests')
        .success(function(data){
          deferred.resolve(data);
        })
        .error(function(response,data,status){
          console.log(response);
          console.log(data);
          switch(status){
            /*
            case 500:$window.location.href = "/500";break;
            case 400; $window.location.href = '/400';break;
            default: $windos.location.href= "/500";
            */
          }
        });
        return deferred.promise;
      };

      function addRequest(formData){
        var deferred= $q.defer();
        $http.post('/requests',formData)
          .success(function(data){
            deferred.resolve(data);
          })
          .error(function(response,data,status){
            console.log(response);
            switch(data){
              /*
              case 500: $window.location.href="/500";break;
              case 400: $window.location.href="/400";break;
              default: $windo.location.href="/500";
              */
            }
          });
          return deferred.promise;
      };

      return {
        getRequests:getRequests,
        addRequest:addRequest
      };
    }])
    /*************************************************************
      Status 
    **************************************************************/
    .factory('statusRequestsServices',['$http','$q','$window', function($http,$q,$window){

      function getStatusRequests(){
        var deferred = $q.defer();
        $http.get('/get_status_requests')
          .success(function(data){
            deferred.resolve(data);
          })
          .error(function(response,data,status){
            //console.log(response);
            console.log(data);
            switch(status){
             /*
             case 500: $window.location.href="/500";break;
             case 400: $window.location.href="/400";break;
             default: $window.location.href="/500";
             */
            }
          })
        return deferred.promise;
      };

      return {
         getStatusRequests:getStatusRequests
      };

    }])




})();