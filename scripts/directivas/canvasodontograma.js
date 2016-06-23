app.directive('canvasodontograma', function() { 
  return { 
    restrict: 'E', 
    scope: { 
      info:"=",
    }, 
    templateUrl: 'canvas_odontograma.html' 
  }; 
});