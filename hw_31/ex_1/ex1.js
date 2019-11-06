`use strict`

let weight = prompt('What is your weight in kg?', ''); // получение данных от пользователя о весе
let height = prompt('What is your height in cm?', ''); // получение данных от пользователя о росте

height /= 100; // перевод сантиметров в метры

let bmi = weight / (height * height); // формула подсчета индекса массы тела (ИМТ)

if (bmi < 16){ // условие
	alert(`Your BMI is ${bmi.toFixed(2)} - Severely underweight!`); // вывод результата рассчетов об ИМТ
}
else if (bmi >= 16 && bmi < 18.5){
	alert(`Your BMI is ${bmi.toFixed(2)} - Underweight!`);
}
else if (bmi >= 18.5 && bmi < 25){
    alert(`Your BMI is ${bmi.toFixed(2)} - Normal!`);
}
else if (bmi >= 25 && bmi < 30){
	alert(`Your BMI is ${bmi.toFixed(2)} - Overweight!`);
}
else if (bmi >= 30 && bmi < 35){
	alert(`Your BMI is ${bmi.toFixed(2)} - Moderately Obese!`);
}
else if (bmi >= 35 && bmi < 40){
	alert(`Your BMI is ${bmi.toFixed(2)} - Severely obese!`);
}
else {
	alert(`Your BMI is ${bmi.toFixed(2)} - Very severely obese!`);
}