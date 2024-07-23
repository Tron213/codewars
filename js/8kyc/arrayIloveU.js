function howMuchILoveYou(nbPetals) {
    let fruits = ["I love you", 
                  "a little", 
                  "a lot",
                  "passionately",
                  "madly",
                  "not at all"];
let key=0;
let word ="";
for(let i=0;i<nbPetals;i++){
  if(key>5){
    key=0;
  }
  word = fruits[key];
  key+=1
}
return word;  
}
