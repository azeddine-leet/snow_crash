## Walkthrough:
- while i was discovering the machine .
- i thought of looking into /etc/passwd file
- surprisely i found a clear text passwd for flag01
- using **john the ripper** tool, installed by default in kali linux 
##### command :
```
john --wordlist=/usr/share/john/password.lst pass
```
- **pass**: is the file contain the password.
- i got **abcdefg**, login to flag01, and launch **getflag**.
