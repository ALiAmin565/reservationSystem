   <!-- Modal -->
   <script src="Scripts/jquery-ui.min.js"></script>
   <script src="Scripts/datepicker-ar.js"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="../../cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
   <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="bundles/jqueryval7f57?v=ScCYLI_3Kkd-CWu1XD60vVoVic7EGpTnj6H9K97Rzcw1"></script>

   <script src="bundles/bootstrapec98?v=xDbNpd8D_BC7zxwBF1_KHdyoVX6_xPCb_Qt5OI07ynU1"></script>

   <script src="Scripts/fakeLoader.js"></script>
   <script src="Scripts/js/select2.min.js"></script>
   <script src="Scripts/js/custom2.js"></script>
   <script src="Scripts/js/jquery.scrollbar.js"></script>
   <script src="Scripts/js/fileinput.js" type="text/javascript"></script>
   <script src="Scripts/fileinput-local-ar.js"></script>
   <script src="Scripts/Site.js"></script>
   <script src="Scripts/sweetalert2.js"></script>
   <script src="Scripts/js/ticker.js"></script>




   <script src="../Areas/CRM/Scripts/accountPreventAutoFill.html"></script>


   <script>
       //$(function () {
       //    $('.menu-tooltip').tooltip({
       //        template: '<div class="tooltip tooltip-in-menu" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
       //    })
       //    function OpenPage(event, Link) {
       //        debugger;
       //        alert('hi');
       //        event.stopPropagation();
       //        location.href = Link;
       //    }
       //})

       $(document).ready(function() {
           // Add smooth scrolling to all links
           $(".footer-links a").on('click', function(event) {

               if (this.hash !== "") {
                   var hash = this.hash;
                   $('html, body').animate({
                       scrollTop: $(hash).offset().top
                   }, 2000, function() {
                       window.location.hash = hash;
                   });
                   return false;
               } // End if
           });

           $('.whatsappShareButton').on('click', function() {
               debugger;
               let button = $(this);
               let url = button.data('url');
               let fullURL = encodeURIComponent(url);
               window.open('https://wa.me/?text=' + fullURL + '', '_blank');


           });
       });
   </script>