function problem(x){
    let type = typeof x;
     if(type == "number" ){
       let ret = (x*50)+6;
       return ret;
       
       
     }
     else{
       return "Error";
       
     }
   }