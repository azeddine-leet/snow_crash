## Walkthrough :
- i runned the ./level13 executable, the output is :
```
UID 2013 started us but we we expect 4242
```
- disassembling the function with gdb, i found 
```
   0x08048595 <+9>:	call   0x8048380 <getuid@plt>
   0x0804859a <+14>:	cmp    $0x1092,%eax
```
- change the $eax register to 4242 instead of 2013, resume the execution and you will passwd of level14.