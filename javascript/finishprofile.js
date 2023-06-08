   
   document.addEventListener('DOMContentLoaded', function(event)
   {
      var DropdownMenu1_dropdownToggle = document.querySelectorAll('#DropdownMenu1 .dropdown-toggle');
      DropdownMenu1_dropdownToggle.forEach(item => 
      {
         var dropdown = new bootstrap.Dropdown(item, {popperConfig:{placement:item.getAttribute('data-bs-placement')}});
      });
      var DropdownMenu1_dropdown = document.querySelectorAll('#DropdownMenu1 .dropdown');
      DropdownMenu1_dropdown.forEach(item => 
      {
         item.addEventListener('shown.bs.dropdown', function(e)
         {
            e.currentTarget.classList.add('show');
         });
         item.addEventListener('hidden.bs.dropdown', function(e)
         {
            e.currentTarget.classList.remove('show');
         });
      });
      $("#wb_DropdownMenu1").affix({offset:{top: $("#wb_DropdownMenu1").offset().top}});
   });
   
   $(document).ready(function()
   {
      $('#wb_popup').addClass('visibility-hidden');
      $('#wb_errorMessage').addClass('visibility-hidden');
      $('#wb_close').addClass('visibility-hidden');
      $("#profilePic :file").on('change', function()
      {
         var input = $(this).parents('.input-group').find(':text');
         input.val($(this).val());
      });
      function onScrollpopup()
      {
         var $obj = $("#wb_popup");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_popup', 'slide-right-in', 0, 1250);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('wb_popup', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#wb_popup').inViewPort(true))
      {
         $('#wb_popup').addClass("in-viewport");
      }
      onScrollpopup();
      $(window).scroll(function(event)
      {
         onScrollpopup();
      });
      function onScrollerrorMessage()
      {
         var $obj = $("#wb_errorMessage");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_errorMessage', 'slide-right-in', 0, 1250);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('wb_errorMessage', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#wb_errorMessage').inViewPort(true))
      {
         $('#wb_errorMessage').addClass("in-viewport");
      }
      onScrollerrorMessage();
      $(window).scroll(function(event)
      {
         onScrollerrorMessage();
      });
      function onScrollclose()
      {
         var $obj = $("#wb_close");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_close', 'slide-right-in', 0, 1250);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('wb_close', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#wb_close').inViewPort(true))
      {
         $('#wb_close').addClass("in-viewport");
      }
      onScrollclose();
      $(window).scroll(function(event)
      {
         onScrollclose();
      });
      $("#wb_DropdownMenu1").affix({offset:{top: $("#wb_DropdownMenu1").offset().top}});
   });
