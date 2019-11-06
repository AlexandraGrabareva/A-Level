### Level 1

*Посчитать количество встречаемых слов Harry, Lord, Hogwarts в [статье](https://en.wikipedia.org/wiki/Harry_Potter)*

```
$ curl -O https://en.wikipedia.org/wiki/Harry_Potter
```
```
$ grep -o "\<Harry\>" Harry_Potter | wc -l
$ grep -o "\<Lord\>" Harry_Potter | wc -l
$ grep -o "\<Hogwarts\>" Harry_Potter | wc -l
```

### Level 2

*Сделать файл с количеством встречаемых слов Harry, Lord, Hogwarts из [статьи](https://en.wikipedia.org/wiki/Harry_Potter) и указать строчки где встречаются эти слова*

```
#!/bin/bash

word=$1
file=$2
output=$3

if [ ! -f "$file" ]; then
	echo "File $file doesn't exist"
	exit 1
fi

if [ ! -f "$output" ]; then
	echo "File $output doesn't exist"
	exit 1
fi

WORDS_NUMBER=`grep -o "\<$word\>" "$file" | wc -l`
LINES_NUMBER=`grep -n "\<$word\>" "$file" | cut -f1 -d: | awk '{printf("%s", NR == 1 ? $0 : ", "$0);} END {printf("\n");}'`

echo "$word: $WORDS_NUMBER [$LINES_NUMBER]" >> $output

exit 0
```
```
$ chmod +x ex2.sh
$ ./ex2.sh Harry Harry_Potter output.txt
```

### Level 3

*Написать скрипт который будет принимать параметром url и сможет посчитать количество строк с любым указаным словом с возможностью вывода в файл и с возможностью вывода на STDOUT*

```
#!/bin/bash

url=$1
word=$2
file=$3

if [ ! -f "$file" ]; then
	echo "File $file doesn't exist"
	exit 1
fi

curl ${url} > outfile

WORDS_NUMBER=`grep -o "\<$word\>" outfile | wc -l`
LINES_NUMBER=`grep -n "\<$word\>" outfile | cut -f1 -d: | awk '{printf("%s", NR == 1 ? $0 : ", "$0);} END {printf("\n");}'`

echo "$word: $WORDS_NUMBER [$LINES_NUMBER]" | tee $file

exit 0
```
```
$ chmod +x ex3.sh
$ ./ex3.sh https://en.wikipedia.org/wiki/Harry_Potter Harry file.txt
```