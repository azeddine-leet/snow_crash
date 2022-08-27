## Walkthrough:
+ In this stage i found a php script and executable
+ the program expect two arguments (it ignore the second), the first arguments should be a file.
+ next the program gets the content of the file 
+ using preg_replace, the program search for a pattern an executes the second parametter of 
```
[x {${system(getflag)}}]
```

## Ressources :
+ [e modifier in regex](https://stackoverflow.com/questions/2082207/calling-function-inside-preg-replace-thats-inside-a-function)