## Walkthrough :
> Following the video from intra **FIND this first file who can only be runed as flag00...**


&emsp;&emsp;```Command :```  
&emsp;&emsp;&emsp; ```- find / -type f -user flag00 2>/dev/null```  
&emsp;&emsp;  
&emsp;&emsp; >&emsp;**/** : specify the path where to search.  
&emsp;&emsp; >&emsp;**-type** : look for files only.
&emsp;&emsp; >&emsp;**-user** : specifiy the owner of the file  
&emsp;&emsp; >&emsp;**2>/dev/null** : redirect errors to /dev/null  

> + The output is two files with same content (/usr/sbin/john, and /rofs/usr/sbin/john) [cdiiddwpgswtgt]  
> + first i tried the password , didn't work , so i thought of using dcode to identifiy the encryption.  
> + It turn out it uses cesar cipher .

## Ressources :
> - [Find manual](https://man7.org/linux/man-pages/man1/find.1.html)
> - [Encryption identification](https://www.dcode.fr/identification-chiffrement)
