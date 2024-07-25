function solution(nums){
    if(nums != null){
      
    let a = nums;
    let c = [];
    for (; a.length;)  { c.push(a.splice(a.indexOf(Math.min(...a)),1)[0])}
    return c;
      
    }
      else{   
    return [];
      }
    }