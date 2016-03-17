<?php
if ($_SERVER['PHP_SELF'] == '/blog.php') {
add_to_head('
<script type="text/javascript" src="'.INFUSIONS.'projects_panel/js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var carousel = $("#carousel").waterwheelCarousel({
      // include options like this:
      // (use quotes only for string values, and no trailing comma after last option)
      // option: value,
      // option: value
    });
    $("#prev").bind("click", function () {
          carousel.prev();
          return false;
    });

    $("#next").bind("click", function () {
          carousel.next();
          return false;
    });
  });
</script>
<style type="text/css">
    #carousel {
        width:600px;
        height:200px;
        position:relative;
        clear:both;
        overflow:hidden;
      }
      #carousel img {
        visibility:hidden; /* hide images until carousel can handle them */
        cursor:pointer; /* otherwise its not as obvious items can be clicked */
      }
</style>
        ');
}
else 
{
    add_to_head('<!-- ' . $_SERVER['PHP_SELF'] . ' -->');
}

/* End of projects_panel_header.php */
