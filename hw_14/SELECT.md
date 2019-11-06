### Запросы к базе данных 'films'
 
*1. Выборка всей информации о каждом фильме*

```
SELECT film_name AS `Film`, series_name AS `Series`, person_name AS `Film crew and cast`, post AS `Post` 
FROM films 
INNER JOIN film_series fs ON (films.id = fs.film_id) 
INNER JOIN series ON (fs.part_id = series.id) 
INNER JOIN film_person fp ON (films.id = fp.film_id) 
INNER JOIN persons ON (fp.person_id = persons.id) 
ORDER BY film_name, series_name;
```

*2. Вывод информации о количестве фильмов в серии, отсортированная по убыванию*

```
SELECT series_name AS `Series`, COUNT(*) AS `Number of episodes` 
FROM films 
INNER JOIN film_series fs ON (films.id = fs.film_id) 
INNER JOIN series s ON (fs.part_id = s.id) 
GROUP BY `Series` 
ORDER BY `Number of episodes` DESC;
```