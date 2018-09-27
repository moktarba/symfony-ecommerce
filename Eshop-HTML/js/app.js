$(function(){

    // add one in cart page 
    $('.addOne').on('click',function(e){

        e.preventDefault();

        $(this).prop('disabled',true);
        var button = $(this);
        var id = $(this).data('input');

        var input = $('#input-'+id);

        var valeur = parseInt(input.val());
        valeur +=1 ;

        $(input).val(valeur );

        $.ajax({
          method: "GET",
          url: 'panier/addOne/'+id,
          data: { }
        })
          .done(function( reponse ) {
            $('#total-'+reponse.id).find('span').text(Math.round(reponse.prix*100)/100);
            $('#totalht').find('span').text(reponse.totalht);
            $('#tax').find('span').text(reponse.tax);
            $('#total').find('span').text(reponse.total);
            
            button.prop('disabled',false);

            /*$('.panier').html(reponse.body);*/
          });
    });

    // substract one in cart page 
    // 
    $('.subOne').on('click',function(e){

        e.preventDefault();
        $(this).prop('disabled',true);
        var button = $(this);
        var id = $(this).data('input');

        var input = $('#input-'+id);

        var valeur = parseInt(input.val());

        if( valeur > 1){ 
          valeur -=1 ;

          $(input).val(valeur );

          $.ajax({
            method: "GET",
            url: 'panier/subOne/'+id,
            data: { }
          })
          .done(function( reponse ) {
            console.log(reponse);

            $('#total-'+reponse.id).find('span').text(Math.round(reponse.prix*100)/100);
            $('#totalht').find('span').text(reponse.totalht);
            $('#tax').find('span').text(reponse.tax);
            $('#total').find('span').text(reponse.total);
            
            button.prop('disabled',false);

            /*$('.panier').html(reponse.body);*/
          });

        }else{
          button.prop('disabled',false);
        }

    });

    // visuel produit 
    
    $('.thumb-visuel').on('click',function(e){

      e.preventDefault();
      var elem = $(this);
      var image = elem.attr('src');

      $('#visuel').attr('src',image);
    });

    // add one in product page 
    
    $('.addOneProduct').on('click',function(e){

        e.preventDefault();

        $(this).prop('disabled',true);
        var button = $(this);
        var id = $(this).data('input');

        var input = $('#input-'+id);

        var valeur = parseInt(input.val());
        valeur +=1 ;

        $(input).val(valeur );

        button.prop('disabled',false);
    });

    // substract one in product page
    $('.subOneProduct').on('click',function(e){

        e.preventDefault();

        $(this).prop('disabled',true);
        var button = $(this);
        var id = $(this).data('input');

        var input = $('#input-'+id);

        var valeur = parseInt(input.val());
        if (valeur > 1)
           valeur -=1 ;

        $(input).val(valeur );

        button.prop('disabled',false);
    });


    // Like 
    // 
     $('.like').on('click',function(e){

        e.preventDefault();
        var elem = $(this);
        elem.prop('disabled',true);
        var id = elem.data('id');

        $.ajax({
            method: "GET",
            url: '/user/like/'+id,
            data: { }
          })
          .done(function( reponse ) {
            if(reponse.error)
              alert(reponse.message);
            else
                elem.toggleClass('btn-neutre');
                 
            elem.prop('disabled',false);
            
          })
         
     });
});
