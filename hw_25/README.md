### Exercise 1

Написать класс, который может создать объект только один раз. При последующих вызовах getInstance() будет возвращать один и тот же объект

__ex_1.php__

Вывод:         
*int(4)*      
*int(8)*      
*int(16)*   

-----

### Exercise 2

Сделать класс с магическими сеттерами и геттерами

__ex_2.php__

Вывод:  
*string(5) "green"*   
*NULL*   
*bool(true)*   
*bool(false)*   
*Array*   
*(*   
*[Color] => green*   
*[Weight] => 10*   
*)*  

-----

### Exercise 3

Написать автолоадер, который будет подгружать класс из определенной папки в зависимости от неймспейса класса. Например: 
* класс \Libs\Counter будет искать в classes/Libs/Counter.php
* класс \Libs\Namespace1\Namespace2\Counter будет искать в classes/Libs/Namespace1/Namespace2/Counter.php

__ex_3 [ex_3.php + classes/]__

Вывод:   
*class classes\Libs\Counter#1 (0) {*   
*}*   
*class classes\Libs\Namespace1\Namespace2\Counter#2 (0) {*   
*}*   