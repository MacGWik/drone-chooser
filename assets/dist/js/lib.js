jQuery.displayConfirm = function(message,okfunc,nofunc){
    $("#confirmMsg").html(message);
    $("#confirmPanel").fadeIn(function(){
        $("#confirmContent").css("left",(($(window).width()-$("#confirmContent").outerWidth(true))/2));
        $("#confirmContent").css("top",(($(window).height()-$("#confirmContent").outerHeight(true))/2)-50);
        $("#confirmContent").show();
        $("#btnYesConfirm").focus();
        $("#btnYesConfirm").prop('disabled',false);
        $("#btnYesConfirm").unbind( "click");
        $("#btnYesConfirm").click(function(){
            $("#confirmPanel").fadeOut(okfunc);
            $("#btnYesConfirm").prop('disabled',true);
        });
        $("#btnNoConfirm").unbind( "click" );
        $("#btnNoConfirm").click(function(){
            $("#confirmPanel").fadeOut(nofunc);
        });
    });
}

jQuery.displayInfo = function(message, okfunc){
    $("#infoMsg").html(message);
    $("#infoPanel").fadeIn(function(){
        $("#infoContent").css("left",(($(window).width()-$("#infoContent").outerWidth(true))/2));
        $("#infoContent").css("top",(($(window).height()-$("#infoContent").outerHeight(true))/2)-50);
        $("#infoContent").show();
        $("#btnOkInfo").focus();
        $("#btnOkInfo").unbind("click" );
        $("#btnOkInfo").click(function(){
            if(okfunc != undefined)
                $("#infoPanel").fadeOut(okfunc);
            else
                $("#infoPanel").fadeOut();
        });
    });
};


jQuery.displayError = function(message, okfunc){
    $("#errorMsg").html(message);
    $("#errorPanel").fadeIn(function(){
        $("#errorContent").css("left",(($(window).width()-$("#errorContent").outerWidth(true))/2));
        $("#errorContent").css("top",(($(window).height()-$("#errorContent").outerHeight(true))/2)-50);
        $("#errorContent").show();
        $("#btnOkError").unbind( "click" );
        $("#btnOkError").focus();
        
        $("#btnOkError").click(function(){
            $("#errorContent").hide();
            if(okfunc != undefined)
                $("#errorPanel").fadeOut(okfunc);
            else
                $("#errorPanel").fadeOut();
        });        
    });
};

$.fn.dataTableExt.oApi.fnStandingRedraw = function(oSettings) {
    if(oSettings.oFeatures.bServerSide === false){
        var before = oSettings._iDisplayStart;
        oSettings.oApi._fnReDraw(oSettings);
        // iDisplayStart has been reset to zero - so lets change it back
        oSettings._iDisplayStart = before;
        oSettings.oApi._fnCalculateEnd(oSettings);
    }
    // draw the 'current' page
    oSettings.oApi._fnDraw(oSettings);
};

function number_format (number, decimals, dec_point, thousands_sep) {
  // http://kevin.vanzonneveld.net
  // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +     bugfix by: Michael White (http://getsprink.com)
  // +     bugfix by: Benjamin Lupton
  // +     bugfix by: Allan Jensen (http://www.winternet.no)
  // +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
  // +     bugfix by: Howard Yeend
  // +    revised by: Luke Smith (http://lucassmith.name)
  // +     bugfix by: Diogo Resende
  // +     bugfix by: Rival
  // +      input by: Kheang Hok Chin (http://www.distantia.ca/)
  // +   improved by: davook
  // +   improved by: Brett Zamir (http://brett-zamir.me)
  // +      input by: Jay Klehr
  // +   improved by: Brett Zamir (http://brett-zamir.me)
  // +      input by: Amir Habibi (http://www.residence-mixte.com/)
  // +     bugfix by: Brett Zamir (http://brett-zamir.me)
  // +   improved by: Theriault
  // +      input by: Amirouche
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // *     example 1: number_format(1234.56);
  // *     returns 1: '1,235'
  // *     example 2: number_format(1234.56, 2, ',', ' ');
  // *     returns 2: '1 234,56'
  // *     example 3: number_format(1234.5678, 2, '.', '');
  // *     returns 3: '1234.57'
  // *     example 4: number_format(67, 2, ',', '.');
  // *     returns 4: '67,00'
  // *     example 5: number_format(1000);
  // *     returns 5: '1,000'
  // *     example 6: number_format(67.311, 2);
  // *     returns 6: '67.31'
  // *     example 7: number_format(1000.55, 1);
  // *     returns 7: '1,000.6'
  // *     example 8: number_format(67000, 5, ',', '.');
  // *     returns 8: '67.000,00000'
  // *     example 9: number_format(0.9, 0);
  // *     returns 9: '1'
  // *    example 10: number_format('1.20', 2);
  // *    returns 10: '1.20'
  // *    example 11: number_format('1.20', 4);
  // *    returns 11: '1.2000'
  // *    example 12: number_format('1.2000', 3);
  // *    returns 12: '1.200'
  // *    example 13: number_format('1 000,50', 2, '.', ' ');
  // *    returns 13: '100 050.00'
  // Strip all characters but numerical ones.
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

$("#logout").unbind();
  $("#logout").click(function(){
      $.displayConfirm("Yakin Ingin Logout ?",function(){
          window.location.href = site_url+class_user+"/login/logout";
      })
  })