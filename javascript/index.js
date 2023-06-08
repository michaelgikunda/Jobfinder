   
   document.addEventListener('DOMContentLoaded', function(event)
   {
      var shapePath = document.querySelector('#MorphingIcon1-shape');
      var paths = ["M52 441 C-14 356, -18 260, 47 174 C71 142, 130 107, 214 115 C334 120, 437 167, 563 156 C693 138, 769 83, 868 43 C924 16, 1015 -12, 1098 6 C1209 32, 1264 88, 1308 138 C1393 244, 1370 363, 1261 465 C1191 534, 1062 599, 889 612 C686 629, 484 592, 299 560 C196 541, 111 505, 71 460 C62 454, 56 447, 52 441"];
      var interpolator = [];
      interpolator[0] = polymorph.interpolate([paths[0], paths[0]]);
      let progress = { prop: 0 };
      var pathIndex = 0;
      anime({
         targets: progress,
         prop: 1,
         delay: 0,
         duration: 2000,
         easing: 'linear',
         loop: true,
         direction: 'normal',
         update(anim) 
         {
            shapePath.setAttribute('d', interpolator[pathIndex](progress.prop));
            if (anim.progress == 100)
            {
               pathIndex++;
               if (pathIndex > 0)
                  pathIndex = 0;
            }
         }
      });
   });
   
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
      $("#wb_DropdownMenu1").affix({offset:{top: $("#wb_DropdownMenu1").offset().top}});
   });
