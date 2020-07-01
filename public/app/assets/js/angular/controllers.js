(function () {

  angular.module('app.controllers', [])


  /*************************************************
       Companies
  **************************************************/
    .controller('companiesController', [
      '$scope',
      '$controller',
      'companiesService',
      '$window',
      function ($scope,$controller, companiesService, $window) {

        $scope.listCompanies = function(){
          $scope.loading=true;
          companiesService.listCompanies().then(function(data){
            console.log(data);
            $scope.companies = data.companies;
            $scope.loading=false;
          });
        }
        $scope.addCompany = function(){
          $scope.loading=true;
          companiesService.addCompany($scope.formData).then(function(data){
            console.log(data);
            $scope.listCompanies();
            $scope.loading=false;

            $controller('mainController',{$scope : $scope });
            $scope.closeModal('create-company-modal');
            
          });
        }

    }])

  /*************************************************
       Employees
  **************************************************/
    .controller('employeesController', [
      '$scope',
      '$controller',
      'employeesService',
      '$window',
      function ($scope,$controller, employeesService, $window) {

        $scope.getEmployees = function(){
          $scope.loading=true;
          employeesService.getEmployees().then(function(data){
            console.log(data);
            $scope.employees = data.employees;
            $scope.loading=false;
          });
        }
        $scope.addEmployee = function(){
          $scope.loading=true;
          employeesService.addEmployee($scope.formData).then(function(data){
            console.log(data);
            $scope.getEmployees();
            $scope.loading=false;

            $controller('mainController',{$scope : $scope });
            $scope.closeModal('create-employee-modal');
            
          });
        }

        $scope.updateEmployee = function(){
          $scope.loading=true;
          employeesService.updateEmployee($scope.formData).then(function(data){
            console.log(data);
            $scope.getEmployees();
            $scope.loading=false;
            $controller('mainController',{$scope : $scope });
            $scope.closeModal('create-employee-modal');
            
          });
        }

        $scope.deleteEmployee = function(id){
          $scope.loading=true;
          employeesService.deleteEmployee(id).then(function(data){
            console.log(data);
            $scope.getEmployees();
            $scope.loading=false;
          });
        }

    }])
    

  /*************************************************
       Job Positions
  **************************************************/
    .controller('jobPositionsController', [
      '$scope',
      '$controller',
      'jobPositionsService',
      '$window',
      function ($scope,$controller, jobPositionsService, $window) {

        $scope.getJobPositions = function(){
          $scope.loading=true;
          jobPositionsService.getJobPositions().then(function(data){
            console.log(data);
            $scope.jobPositions = data.jobPositions;
            $scope.loading=false;
          });
        }

        $scope.addJobPosition = function(){
          $scope.loading=true;
          jobPositionsService.addJobPosition($scope.formData).then(function(data){
            console.log(data);
            $scope.getJobPositions();
            $scope.loading=false;
          });
        }

        $scope.updateJobPosition = function(){
          $scope.loading=true;
          jobPositionsService.updateJobPosition($scope.formData).then(function(data){
            console.log(data);
            $scope.getJobPositions();
            $scope.loading=false;
          });
        }

        $scope.deleteJobPosition = function(id){
          $scope.loading=true;
          jobPositionsService.deleteJobPosition(id).then(function(data){
            console.log(data);
            $scope.getJobPositions();
            $scope.loading=false;
          });
        }

        $scope.showJobPosition = function(id){
          $scope.loading=true;
          jobPositionsService.showJobPosition(id).then(function(data){
            console.log(data);
            $scope.jobPosition = data.jobPosition;
            $scope.loading=false;
          });
        }

    }])

  /*************************************************
       Main
  **************************************************/
    .controller('mainController', [
      '$scope',
      function ($scope) {

        $scope.closeModal = function(modalID)
        {
          $('#' + modalID + ' .modal-background').toggleClass('scaleInCircle');
          $('#' + modalID + ' .modal-content').toggleClass('scaleIn');
          $('#' + modalID + ' .modal-close').toggleClass('is-hidden');
          //Restore native body scroll
          if ($('.dashboard-wrapper').length) {
              $('body').removeClass('is-fixed');
          }
          setTimeout(function () {
              $('.modal.is-active').removeClass('is-active');
              //Restore sticky nav and backktotop
              $('#scrollnav, #backtotop').toggleClass('is-hidden');

          }, 500);

        }

    }])

    /******************************************************
      Request controller
    ********************************************************/
    .controller('requestsController',[
      '$scope',
      '$controller',
      'requestsServices',
      'statusRequestsServices',
      function($scope,$controller,requestsServices,statusRequestsServices){

        $scope.getRequests = function(){
           requestsServices.getRequests().then(function(data){
             $scope.loading = true;
             console.log(data);
             $scope.requests = data.requests;
             $scope.loading = false;
           });
        }

        $scope.getStatusRequests = function(){
          statusRequestsServices.getStatusRequests().then(function(data){
            console.log(data);
            $scope.status_requests = data.status_requests;
          });
        }

        $scope.addRequest = function(){
          $scope.loading = true;
          requestsServices.addRequest($scope.formData).then(function(data){
            console.log(data);
            $scope.getRequests();
            $controller('mainController',{$scope : $scope });
            $scope.closeModal('create-employee-modal');
          });
          $scope.loading = false;
        }

      }
    ])
  
    /***********************************************************
        Status Request
    **************************************************************/
    .controller('statusRequestsController',[
      '$scope',
      '$controller',
      'statusRequestsServices',
      function($scope,$controller,statusRequestsServices){
        $scope.getStatusRequests = function(){
          statusRequestsServices.getStatusRequests().then(function(data){
            //$scope.loading = true;
            console.log(data);
            $scope.status_requests = data.status_requests;
            //$scope.loadind = false;
          });
        }
      }
    ])


})();