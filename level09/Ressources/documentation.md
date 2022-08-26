## Walkthrough :
+ Trying some random strings as parameters to executable found in the home .
+ I notice that it change each character based on its location in the string.
+ i decided to make this simple program to get the origin token:
```
#include <fcntl.h>
#include <sys/types.h>
#include <sys/uio.h>
#include <unistd.h>
#include <string.h>

int main(int ac, char **av)
{
        int fd;
        char buff[100];
        int read_ret = 0;

        if (ac == 2) {
                memset(buff, '\0', 100);
                fd = open(av[1], O_RDONLY);
                read_ret = read(fd, buff, 30);
                int len = strlen(buff);
                for (int i = 0; i < len; i++) {
                        buff[i] -= i;
                }

                printf("the string is :{%s}\n", buff);
        }
        return (0);
}
```
+ passing the token file to that program gives:
```
f3iji1ju5yuevaus41q1afiuq
```
+ log in to flag09 with the token, launch getflag command .
