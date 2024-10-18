function openNav() {
    document.getElementById("mySidenav").style.width = "80%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  $(function () { 
    var header = $(".classinitial"); 
    $(window).scroll(function () { 
        var scroll = $(window).scrollTop(); 

        if (scroll >= 200) { 
            header.removeClass('classinitial') 
                    .addClass("classfinal"); 
        } else { 
            header.removeClass("classfinal") 
                    .addClass('classinitial'); 
        } 
    }); 
}); 