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

- started a debugging session, and got **you should not reverse this binary**
```
   0x08048989 <+67>:	call   0x8048540 <ptrace@plt>
   0x0804898e <+72>:	test   %eax,%eax
   0x08048990 <+74>:	jns    0x80489a8 <main+98>
```
- changed the value $eax from -1 to 1, the program continue excuting normaly 
- following program call getuid, based on the uid the program print a string after sending it to a function **ft_des**
- immediately i changed the getuid return to flag14 uid and got the flag 

## Ressources
- [ptrace](https://man7.org/linux/man-pages/man2/ptrace.2.html#RETURN_VALUE)