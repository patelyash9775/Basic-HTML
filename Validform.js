function validation()
{
 var result=true;
 var i=document.getElementsByTagName("input");

 if(i[0].value.length==0 || i[1].value.length==0 || i[2].value.length==0 || i[3].value.length==0 || i[4].value.length==0)
    {
     alert("Please ,fill the all the information");
     return(false);
     }
 return(result);
 }