## Walkthrought :

- first i runned the script bellow to find the binary wich is not stripped (possible to debug)
```
ls -1 /bin | while read -r line; do file $(which $line) | grep 'not stripped' >/dev/null; if [ $? -eq 0 ]; then echo $line; fi; done
```
- 
    - test test 
    - test test