function validation()
{
 var result=true;
 var i=document.getElementsByTagName("input");
 if(i[0].value.length==0)
   { 
     alert("Please , fill all information");
     return(false);
   }
 return(result);
 }