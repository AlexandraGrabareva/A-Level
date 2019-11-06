`use strict`

let numberOfFlat = prompt('What\'s the number of flat?', ''); // получение данных о номере квартиры
let floorsInHouse = prompt('How many floors in the house?', ''); // получение данных о кол-ве этажей
let flatsOnFloor = prompt('How many flats on the one floor?', ''); // получение данных о кол-ве квартир на этаже

let numberOfEntrance = Math.floor( (numberOfFlat - 1) / (floorsInHouse * flatsOnFloor) + 1 ); // формула для получения номера подъезда
let numberOfFloor = Math.floor( ((numberOfFlat - (numberOfEntrance - 1) * floorsInHouse * flatsOnFloor) - 1) / flatsOnFloor + 1);  // формула для получения номера этажа

function getOrdinalNumber(n) { // функция для получения порядкового числа (окончание слова)
    var s = ["th","st","nd","rd"],
    v = n % 100;
    return n + (s [(v - 20) % 10] || s[v] || s[0]);
}

alert(`The flat №${getOrdinalNumber(numberOfFlat)} is at the ${getOrdinalNumber(numberOfEntrance)} entrance and on the ${getOrdinalNumber(numberOfFloor)} floor`);