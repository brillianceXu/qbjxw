var maotai= new Array();   
 maotai= hq_str_sh600519.split(","); 
 maotaizdf= hq_str_s_sh600519.split(","); 
var cjl=maotaizdf[4]/10000;
var cje=maotaizdf[5]/10000;
 
toDecimal2(cje);
/*函数开始*/
function toDecimal2(x) {              
   var f = parseFloat(x);              
   if (isNaN(f)) {   
     return false;              
   }              
   var f = Math.round(x*10000)/10000;              
   var s = f.toString();              
   var rs = s.indexOf('.');              
    if (rs < 0) {   
                rs = s.length;                  
　　　　　　s += '.';   
            }              
   while (s.length <= rs + 4) {   
                s += '0';              
    }              
    return s;   
}
 /*函数结束*/ 
 
document.writeln("<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
document.writeln("  <tr>");
document.writeln("    <td style=\"height:80px; overflow:hidden; border:1px solid #cccccc;\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
document.writeln("  <tr>");
document.writeln("    <td width=\"130\" style=\"height:80px; border-right:1px solid #cccccc;\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >");
document.writeln("  <tr>");
document.writeln("    <td valign=\"middle\" style=\"text-align:center; \">贵州茅台<br/>(600519)</td>");
document.writeln("  </tr>");
document.writeln("      <tr>");
document.writeln("        <td valign=\"bottom\" style=\"text-align:center;color:#acacac;padding-top:10px;\">"+maotai[30]+"&nbsp;"+maotai[31]+"</td>");
document.writeln("      </tr>");
document.writeln("</table>");
document.writeln("</td>");
document.writeln("    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
document.writeln("  <tr>");
document.writeln("    <td ></td>");
document.writeln("    <td width=\"42%\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >");
document.writeln("  <tr>");
document.writeln("    <td valign=\"middle\" style=\"text-align:center; \"><span style=\"color:#ff0000; font-weight:bold;line-height:30px; font-size:24px;float:left;\">&nbsp;"+maotai[3]+"&nbsp;</span></td>");
document.writeln("    <td valign=\"middle\" style=\"text-align:center;\"><div style=\" padding-left:5px;float:left;margin-right:5px;line-height:30px;\" id=\"sj\"></div></td>");
document.writeln("    <td valign=\"middle\" style=\"text-align:center; \"><span style=\"color:#ff0000;  font-size:18px;line-height:30px;float:left; \">"+maotaizdf[2]+"<span style=\"color:#333333;  font-size:18px;line-height:30px; \">(</span>"+maotaizdf[3]+"%<span style=\"color:#333333;  font-size:18px;line-height:30px; \">)</span>&nbsp;</span></td>");
document.writeln("  </tr>");
document.writeln("</table>");
document.writeln("</td>");
document.writeln("    <td ></td>");
document.writeln("    <td width=\"58%\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
document.writeln("      <tr>");
document.writeln("        <td width=\"20%\">今开<span style=\"color:#009A00;line-height:20px;\">&nbsp;"+maotai[1]+"&nbsp;</span></td>");
document.writeln("        <td width=\"20%\">最高<span style=\"color:#fe0000;line-height:20px;\">&nbsp;"+maotai[4]+"&nbsp;</span></td>");
document.writeln("        <td width=\"20%\">成交量&nbsp;"+toDecimal2(cjl)+"&nbsp;万手</td>");
document.writeln("      </tr>");
document.writeln("      <tr>");
document.writeln("        <td width=\"20%\">昨收&nbsp;"+maotai[2]+"&nbsp;</td>");
document.writeln("        <td width=\"20%\">最低<span style=\"color:#009A00;line-height:20px;\">&nbsp;"+maotai[5]+"&nbsp;</span></td>");
document.writeln("        <td width=\"20%\">成交额&nbsp;"+toDecimal2(cje)+"&nbsp;亿元</td>");
document.writeln("      </tr>");
document.writeln("    </table></td>");
document.writeln("  </tr>");
document.writeln("</table></td>");
document.writeln("  </tr>");
document.writeln("</table>");
document.writeln("</td>");
document.writeln("  </tr>");
document.writeln("</table>");
if(maotaizdf[2]>0){
$("#sj").html("<img src=\"/Portals/1/image/z-1.gif\"/>");
}
else if(maotaizdf[2]<0){
$("#sj").html("<img src=\"/Portals/1/image/d-2.gif\"/>");

}
else{
$("#sj").html("<img src=\"/Portals/1/image/q-0.gif\"/>");
}

