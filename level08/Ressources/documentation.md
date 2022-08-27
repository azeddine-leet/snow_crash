## Walkthrough :
+ on this level i found two files executable and token
+ the program try to read from a file and print the content.
+ tryed it with token and got **no access**
+ using gdb i found that it look if the name of the file contain the string *token*
+ so i changed the name and got the flag ):