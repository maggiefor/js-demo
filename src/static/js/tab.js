$(document).ready(function(){
    var urlstr = location.href;
    var urlstatus=false;
    $("#tab a").each(function () {
      if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
          $(this).addClass('active'); urlstatus = true;
      } else {
          $(this).removeClass('active');
      }
    });

    if (!urlstatus) {
      $("#tab a").eq(0).addClass('active');
    }
});
