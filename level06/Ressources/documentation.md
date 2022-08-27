## Walkthrough:
+ In this stage i found a php script and executable
+ the program expect two arguments (it ignore the second), the first arguments should be a file.
+ next the program gets the content of the file 
+ using preg_replace, the program search for a pattern and treat the second parameter as PHP code since it uses **e** modifier 

```
chmod 777 . && echo [x {${system(getflag)}}] > script && chmod 777 script
```
+ passes the script to executable and got the flag !


## Ressources :
+ [e modifier in regex](https://stackoverflow.com/questions/2082207/calling-function-inside-preg-replace-thats-inside-a-function)