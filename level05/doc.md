- didn't find anything the previous day
-than when i connected today using ssh to level05 
i noticed i have a new mail
i checked /var/mail and found cron job that run every 2 minutes run a command which loop throught all file , exucute them , and remove them.
now its obvious i created a file , put getflag inside of it and redirect the output to /var/tmp
waited two minutes and i got the flag yay!
