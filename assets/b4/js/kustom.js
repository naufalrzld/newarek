function menu(){
   var cururl = window.location.pathname;
      var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
      console.log(curpage);

      if(curpage == "Home"){
         $('#Home').addClass('active');
         $('.home').toggleClass('home_active');;  
      }
      $('#menu > ul.navbar-nav li a').click(function(e) {
          var $this = $(this);
          $this.parent().siblings().removeClass('active').end().addClass('active');
          // e.preventDefault();
      });
}