function bmi($weight, $height) {
  $bmi=$weight/$height**2;
switch($bmi){
    
    case $bmi <= 18.5:
      return "Underweight";
        break;
    case $bmi <=  25:
      return "Normal";
        break;
    case $bmi <=  30:
      return "Overweight";
        break;
    case $bmi > 30:
      return "Obese";
        break;
    
    
    
    
    
}
}