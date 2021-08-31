$('document').ready(function(){
  
      var $file = $('#file'),
          $label = $file.next('label'),
          $labelText = $label.find('span'),
          // $labelRemove = $('i.remove'),
          labelDefault = $labelText.text();
      
          
          $file.on('change', function(event){
            var fileName = $file.val().split( '\\' ).pop();
            if( fileName ){
              console.log($file)
              $labelText.text(fileName);
              
            }else{
              $labelText.text(labelDefault);
              
            }
          });
        })