function searchByReference(){

    let search = $( "#searchFilter" );
    let url ;
    console.log(search.val());
    if (search.val()){
         url = 'http://127.0.0.1:8000/filterRef/'+search.val();
    } else {
         url = 'http://127.0.0.1:8000/';
    }

    $.ajax({
        
        url: url,

        cache: false,
        success: function(data) {
         // optionally check if the response is what you wanted
         //if (data.response == 'deleted') {
            $("table").html($(data).find("table"))
            
         //}
     }
    })

}

function searchByPrice() {
    
    let minPrice = $( "#searchMinPrice" ).val();
    let maxPrice = $( "#searchMaxPrice" ).val();
    let url;
    if (parseInt(minPrice) > parseInt(maxPrice)) {

        $(".price").append("<span class='error'>Le prix minimum est supérieur au prix max !</span>")
        throw new Error('Le prix minimum est supérieur au prix max !');
    }

    
    if (minPrice && maxPrice){
        url = 'http://127.0.0.1:8000/filter/'+minPrice + '/'+ maxPrice;
   } else {
        url = 'http://127.0.0.1:8000/';
   }

   $.ajax({
       
       url: url,

       cache: false,
       success: function(data) {
        $("table").html($(data).find("table"))
        $(".price span").remove();
    }
   })
}