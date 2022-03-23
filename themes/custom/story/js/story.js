// Drupal behavior D8 & D9
(function($) {
    Drupal.behaviors.story = {
      attach: function(context, settings) {
        var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
        console.log(width);
        if(width > 1024){
          $('.card-img-top').click(function () {              
              let max = $("#story-size").val();
              let next = Math.floor(Math.random() * (max)) ;
              let image = $("#story-"+next).find(".card-img-top").attr('src');
              $(this).attr('src',image);       
          });
          $(document).on("click", '.card-text', function(){              
            let row_id = $(this).parent().parent().parent().attr('data-row');      
            let id = $(this).parent().parent().parent().attr('data-number');  
            let el = [] ;
            let i = 0 ;
            $(".row-"+row_id).each(function( index ) {
                let num =  $(this).attr('data-number');
                if(num !== id){
                  el[i] = num ;
                  i++ ;
                }      
            }); 
            let html_0 = $("#story-"+el[0]).find('.card').html();
            let html_1 = $("#story-"+el[1]).find('.card').html();
            $("#story-"+el[0]).find('.card').html(html_1);
            $("#story-"+el[1]).find('.card').html(html_0);
          });
        }
      }
    };
  })(jQuery);