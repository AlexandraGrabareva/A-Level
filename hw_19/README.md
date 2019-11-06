### Level 1

*Сделать скрипт который принимает параметром хост сервера и файл который следует скопировать на сервер под вашего юзера в его домашнюю папку*

__lvl1.sh__

```
$ chmod +x lvl1.sh
$ ./lvl1.sh alexandragaag@students.a-level.com.ua linux.md
```

### Level 2

*Сделать скрипт который будет делать скриншот рабочего стола, отправлять его на сервер и отдавать ссылку обратно в буфер*

__lvl2.sh__

```
$ chmod +x lvl2.sh
$ ./lvl2.sh alexandragaag@students.a-level.com.ua
```

### Level 3

*Написать скрипт который будет раз в 5 минут делать бэкап на сервер*

__lvl3.sh__

```
$ crontab -e
```
```
*/5 * * * * /home/Desktop/A-Level/lesson_19/lvl3.sh
```
```
$ chmod +x lvl3.sh
$ ./lvl3.sh BackUp
```