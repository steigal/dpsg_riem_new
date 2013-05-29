<!--
       $(document).ready(function () {

                         $('.notice').remove();
                         $('#diaschau').append('<div id="textzeile"><p align="left" style="padding:0;margin:0;margin-top:0px;height:20px;" class="zurueck"></p><p align="center" style="padding:0;margin:0;margin-top:-20px;height:20px;"><a href="#" class="grossansicht">Groﬂansicht</a></p><p align="right" style="padding:0;margin:0;margin-top:-20px;height:20px;"><a href="#" class="uebersicht">‹bersicht</a><a href="#" class="normalansicht">Normalansicht</a></p></div><div id="zurueck"><p style="padding:0;margin:0;font-size:50px;margin-top:146px;color:black;font-weight:bolder">&lt;</p></div><div id ="anzeige"></div><div id="vor"><p style="padding:0;margin:0;font-size:50px;margin-top:146px;color:black;font-weight:bolder">&gt;</p></div><div id="bilderleiste"></div>');


                         anzahl++;
                         $('#anzeige').append('<img src="' + teil + '001.jpg" class="anzeige">');
                         var jahr = teil.substr(0, 2);
                         $('.zurueck').append('<a href="../content_20' + jahr + '.html">zur&uuml;ck</a>');
                         $('#zurueck').css({'opacity':'0.25'});
                         $('#vor').css({'opacity':'0.25'});
                         $('.normalansicht').hide(0);
                         var zahl;
                         var bild;
                         var zaehler = 1;
                         while (zaehler < anzahl)
                         {
                                 if(zaehler > 0)
                                 {
                                         bild = teil + "00" + zaehler + ".jpg";
                                 }
                                 if(zaehler > 9)
                                 {
                                         bild = teil + "0" + zaehler + ".jpg";
                                 }
                                 if(zaehler > 99)
                                 {
                                         bild = teil + zaehler + ".jpg";
                                 }
                                 $('#bilderleiste').append('<img src="' + bild + '" class="bild">');
                                 zaehler++;
                         }

                         $('.bild').click( function ()
                                 {
                                         $('.anzeige').attr('src', $(this).attr('src'));
                                 });

                         $('#zurueck').click(function ()
                                 {
                                         var laenge = $('.anzeige').attr('src').length - 7;
                                         zahl = parseInt($('.anzeige').attr('src').substr(laenge , 3), 10);
                                         zahl --;
                                         if(zahl == 0)
                                         {
                                                 if(anzahl > 0)
                                                 {
                                                         bild = teil + "00" + (anzahl-1) + ".jpg";
                                                 }
                                                 if(anzahl > 9)
                                                 {
                                                         bild = teil + "0" + (anzahl-1) + ".jpg";
                                                 }
                                                 if(anzahl > 99)
                                                 {
                                                         bild = teil + (anzahl-1) + ".jpg";
                                                 }
                                         }
                                         if(zahl > 0)
                                         {
                                                 bild = teil + "00" + zahl + ".jpg";
                                         }
                                         if(zahl > 9)
                                         {
                                                 bild = teil + "0" + zahl + ".jpg";
                                         }
                                         if(zahl > 99)
                                         {
                                                 bild = teil + zahl + ".jpg";
                                         }
                                         $('.anzeige').attr('src', bild);
                         });

                         $('#vor').click(function ()
                                 {
                                         var laenge = $('.anzeige').attr('src').length - 7;
                                         zahl = parseInt($('.anzeige').attr('src').substr(laenge , 3), 10);
                                         zahl ++;
                                         if(zahl > 0)
                                         {
                                                 bild = teil + "00" + zahl + ".jpg";
                                         }
                                         if(zahl > 9)
                                         {
                                                 bild = teil + "0" + zahl + ".jpg";
                                         }
                                         if(zahl > 99)
                                         {
                                                 bild = teil + zahl + ".jpg";
                                         }
                                         if(zahl == anzahl)
                                         {
                                                 bild = teil + "001.jpg";
                                         }
                                         $('.anzeige').attr('src', bild);
                                 });

                         $('.uebersicht').click(function ()
                                 {
                                         $('#anzeige').stop().animate({'opacity':'0'}, 600);
                                         $('#bilderleiste').animate({'width': '100%'}, 600).css({'overflow':'auto'});
                                         $('.uebersicht').hide(600);
                                         $('.normalansicht').show(600);
                                         $('.grossansicht').hide(600);
                                         $('#zurueck').hide(600);
                                         $('#vor').hide(600);
                                 });

                         $('.normalansicht').click( function()
                                 {
                                         $('#anzeige').stop().animate({'width': '390px','margin-left': '106px','opacity': '1'}, 600);
                                         $('#anzeige img').animate({'width': '390px'}, 600);
                                         $('#bilderleiste').stop().animate({'width': '218px','opacity': '1'}, 600).css({'overflow':'auto'});
                                         $('.uebersicht').show(600);
                                         $('.normalansicht').hide(600);
                                         $('.grossansicht').show(600);
                                         $('#zurueck').show(600);
                                         $('#vor').show(600);
                                 });

                         $('.grossansicht').click( function()
                                 {
                                         $('#bilderleiste').stop().animate({'opacity':'0'}, 600);
                                         $('#anzeige').animate({'width': '600px','margin-left': '110px'}, 600);
                                         $('.uebersicht').hide(600);
                                         $('.normalansicht').show(600);
                                         $('.grossansicht').hide(600);
                                         $('#anzeige img').animate({'width': '600px'}, 600);
                                         $('#zurueck').hide(600);
                                         $('#vor').hide(600);
                                 });

                         $('#zurueck').mouseover( function ()
                                 {
                                         $('#zurueck').stop().animate({'opacity': '1'}, 200);
                                 });

                         $('#zurueck').mouseout( function ()
                                 {
                                         $('#zurueck').stop().animate({'opacity': '0.25'}, 200);
                                 });

                         $('#vor').mouseover( function ()
                                 {
                                         $('#vor').stop().animate({'opacity': '1'}, 200);
                                 });

                         $('#vor').mouseout( function ()
                                 {
                                         $('#vor').stop().animate({'opacity': '0.25'}, 200);
                                 });


                         });

   -->