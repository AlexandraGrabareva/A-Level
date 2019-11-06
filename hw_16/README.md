### Модуль. Запросы к базе данных
 
*Запрос №1*

```
SELECT CONCAT('This is ', name, ', ' , IF(gender = 'm', 'he', 'she'),' has email ', email) AS `info` 
FROM people;
```

*Запрос №2*

```
SELECT CONCAT('We have ', COUNT(gender), IF(gender = 'm',' boys!',' girls!')) AS `Gender information:` 
FROM people 
GROUP BY gender;
```