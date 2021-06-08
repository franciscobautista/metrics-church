
(function () {
  angular.module('app.directives', [])

    .directive('uploaderModel', ["$parse", function ($parse) {
      return {
        restrict: 'A',
        link: function (scope, iElement, iAttrs)
        {
          iElement.on("change", function(e)
                      {
                        $parse(iAttrs.uploaderModel).assign(scope, iElement[0].files[0]);
                      });
        }
      };
    }])

    .directive('vectorMap', [function () {

      
      return {
        restrict: 'A',
        link: function (scope, element, attrs) {
          scope.$watch("mdata", function (mdata) {
          setTimeout( function(){ 
          try {
              $(element).vectorMap('get', 'mapObject').remove();
          } catch (error) {}
            $(element).vectorMap({
                map: 'world_mill_en',
                  backgroundColor: "transparent",
                  regionStyle: {
                    initial: {
                      fill: '#e4e4e4',
                      stroke: 'none',
                      height:600,
                      "stroke-width": 0,
                      "stroke-opacity": 0
                    }
                  },
                series: {
                    regions:[
                        {
                          values: scope.mdata,
                          scale: ["#C8EEFF", "#0071A4"],
                          normalizeFunction: 'polynomial'
                        }
                    ]
                },
                onRegionTipShow: function(e, el, code){
                    $mostrar = false;
                    for (let index = 0; index < scope.usuariosPais.length; ++index) {
                        if(scope.usuariosPais[index].clave == code){
                          $mostrar = true;
                            el.html(el.html()+'<br>'+'<span class="label label-round label-dark" ><i class="fa fa-user" aria-hidden="true"></i>'+'</span>'+' N. Usuarios: '+scope.usuariosPais[index].usuarios); 
                        }
                    }
                }
            });
            }, 1000);
        });
      }
    }   


  }])


  

})();