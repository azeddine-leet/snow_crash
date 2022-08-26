## Walkthrought :

- First i strted searching for any files or programs. user home is empty.
- i got the idea of searching for anything reversable, runned the script bellow to find the binary wich is not stripped (possible to debug)
```
echo $PATH | tr ":" "\n"
```
```
ls -1 /bin | while read -r line; do file $(which $line) | grep 'not stripped' >/dev/null; if [ $? -eq 0 ]; then echo $line; fi; done
```
+  ##### note :
    - note the script is looking for any program 'not stripped' in /bin path (i tried all paths in $PATH)