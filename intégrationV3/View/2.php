<HTML>
<SCRIPT LANGUAGE=JAVASCRIPT>
var d= new Date(),
jour= (d.getDate()<10) ? "0" + d.getDate() : d.getDate(),
mois= (d.getMonth()<9) ? "0" + (d.getMonth()+1) : (d.getMonth()+1),
an=(d.getYear()<1900) ? d.getYear()+1900 : d.getYear(); 
annee= (an<10) ? "0" + an.toString() : an.toString(); 
location="agenda/" + jour + "-" + mois + "-" + annee + ".htm" ;
</SCRIPT>
</HTML>