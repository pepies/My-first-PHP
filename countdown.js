/* 
----------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------

									Copyright www.odpocitej.cz 2009

----------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------
*/
function zpracuj()
{
/* tady je zadefinovany aktualni datum k odpocitani*/
  dnes=new Date();
  sekund=dnes.getSeconds();
  minut=dnes.getMinutes();
  hodin=dnes.getHours();
  dni=dnes.getDate();  
  mesicu=dnes.getMonth();
  roku=dnes.getFullYear();
  	/*o?et?ení odpo?ítávání dn? v p?íslu?ném m?síci + p?estupný roky*/
if (mesicu==0 || mesicu==2 || mesicu==4 || mesicu==6 || mesicu==7 || mesicu==9 || mesicu==11)
	odecetdnu=31;  
if (mesicu==3 || mesicu==5 || mesicu==8 || mesicu==10)
	odecetdnu=30;
if (mesicu==1 && (roku==2008 || roku==2012	|| roku==2016	|| roku==2020	|| roku==2024	|| roku==2028	|| roku==2032	|| roku==2036	|| roku==2040	|| roku==2044	|| roku==2048	|| roku==2052	|| roku==2056	|| roku==2060	|| roku==2064	|| roku==2068	|| roku==2072	|| roku==2076	|| roku==2080	|| roku==2084	|| roku==2088	|| roku==2092	|| roku==2096	|| roku==2100		))
	odecetdnu=29;
if (mesicu==1) 
	odecetdnu=28;
	
				/*zbyva_neco se vypisuje do innerHMTL*/
    zbyva_sekund=zadany_sekundy-sekund;
		if (zadany_sekundy<sekund)/* podminka o?et?uje aby hodnota nebyla zaporna*/
			zbyva_sekund=(59-sekund)*1+(zadany_sekundy)*1+1;/*kdyz je zaporna napise se zbytek do cely + zadanou hodnotu + 1 protoze zacina nova nap? "hodina" krom? dne protoze se jako jedinej pocita od 1*/
	zbyva_minut=zadany_minuty-minut;
		if (zadany_minuty<minut)
			zbyva_minut=(59-minut)*1+(zadany_minuty)*1+1;
  	zbyva_hodin=zadany_hodiny-hodin;
		if (zadany_hodiny<hodin)
			zbyva_hodin=(23-hodin)*1+(zadany_hodiny)*1+1;
  	zbyva_dni=zadany_den-dni;
		if (zadany_den<dni)
			zbyva_dni=(odecetdnu-dni)*1+(zadany_den)*1;
 	zbyva_mesicu=zadany_mesic-mesicu;
		if (zadany_mesic<mesicu)
			zbyva_mesicu=(11-mesicu)*1+(zadany_mesic)*1+1;
  	zbyva_roku=zadany_rok-roku;										
									
	
					if (zadany_mesic<mesicu) /*definice ze rok se pro tento odpocet láme prave tuto chvíli a ka?dou sekundou se m?ní*/
						zbyva_roku=(zbyva_roku)*1-(1)*1;

					if (zadany_den<dni)
						zbyva_mesicu=(zbyva_mesicu)*1-(1)*1;

					if (zadany_hodiny<hodin)
						zbyva_dni=(zbyva_dni)*1-(1)*1;

					if (zadany_minuty<minut)
						zbyva_hodin=(zbyva_hodin)*1-(1)*1;

					if (zadany_sekundy<sekund)
						zbyva_minut=(zbyva_minut)*1-(1)*1;
						/*konec osetreni pro lamani roku na prave tuto chvili.*/
						
						/*za?átek o?et?ení aby zadna hodnota krome roku nebyla -1*/

			if (zbyva_sekund==(-1))
				{zbyva_sekund=59;
				zbyva_minut=zbyva_minut-1;}

			if (zbyva_minut==(-1))
				{zbyva_minut=59;
				zbyva_hodin=zbyva_hodin-1;}

			if (zbyva_hodin==(-1))
				{zbyva_hodin=23;
				zbyva_dni=zbyva_dni-1;}

			if (zbyva_dni==(-1))
				{zbyva_dni=odecetdnu;
				zbyva_mesicu=zbyva_mesicu-1;}

			if (zbyva_mesicu==(-1))
				{zbyva_mesicu=11;
				zbyva_roku=zbyva_roku-1;}
						/*konec o?et?ení aby zadna hodnota krome roku nebyla -1*/
						/*vypis textu kdy? je datum zaporný nebo kdy? akce zrovna nastala, akce zrovna za?ala se zorbrazuje hodinu, pak se zmeni na 
						zadejte datum v budoucnosti*/
						/*zmeny vypisu textu ve specialnich okamzicich

			if (zbyva_roku==-1)
				text='<p style="color:#FF0000 ">Tato akce za?ala p?ed:</p>';
			if (zbyva_roku==-1 && zbyva_mesicu==11 && zbyva_dni==(odecetdnu)*(1) && zbyva_hodin==23)
				text='<p style="color:#009900 ">U? to za?alo :))</p>';

			if (zadany_den>30 && zadany_mesic==3)
				text='<p style="color:#FF0000 ">CHYBA!<br>Neumí? kalendá?? Tento m?síc má men?í po?et dn?!!</p>';
			if (zadany_den>30 && zadany_mesic==5)
				text='<p style="color:#FF0000 ">CHYBA!<br>Neumí? kalendá?? Tento m?síc má men?í po?et dn?!!</p>';
			if (zadany_den>30 && zadany_mesic==8)
				text='<p style="color:#FF0000 ">CHYBA!<br>Neumí? kalendá?? Tento m?síc má men?í po?et dn?!!</p>';
			if (zadany_den>30 && zadany_mesic==10)
				text='<p style="color:#FF0000 ">CHYBA!<br>Neumí? kalendá?? Tento m?síc má men?í po?et dn?!!</p>';
			if (zadany_mesic==1 && zadany_den>29)
				text='<p style="color:#FF0000 ">CHYBA!<br>Neumí? kalendá?? Tento m?síc má men?í po?et dn?!!</p>';
 */
 
/*vypis hodnot do divu*/
vejit=1;

if (zbyva_roku>0)
{
document.getElementById('sem').innerHTML=""+zbyva_roku+ " rok? "+ zbyva_mesicu+ " m?síc? "
+ zbyva_dni+ " dn? "+ zbyva_hodin + " hodin "+ zbyva_minut+ " minut "+zbyva_sekund+ " sekund ";
vejit=0;
}
if (zbyva_roku<0)
{
document.getElementById('sem').innerHTML="Tato událost už nastala";
vejit=0;
}
if (zbyva_roku==0 && zbyva_mesicu!=0)
{
document.getElementById('sem').innerHTML=""+zbyva_mesicu+ " m?síc? "
+ zbyva_dni+ " dn? "+ zbyva_hodin + " hodin "+ zbyva_minut+ " minut "+zbyva_sekund+ " sekund ";
vejit=0;
}
if (zbyva_roku==0 && zbyva_mesicu==0 )
{
document.getElementById('sem').innerHTML=""+ zbyva_dni+ " dn? "+ zbyva_hodin + " hodin "+ zbyva_minut+ " minut "+zbyva_sekund+ " sekund ";
vejit=0;
}
if (vejit==1)
{
document.getElementById('sem').innerHTML=""+ zbyva_dni+ " dn? "+ zbyva_hodin + " hodin "+ zbyva_minut+ " minut "+zbyva_sekund+ " sekund ";
}
  setTimeout("zpracuj()",1000);
}
 