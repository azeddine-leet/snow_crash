test the exec with some random args 
notice that it change each character based on its location in the string 
do a program in c to reverse the operation :
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
+ passing the token file to that program give's this token gives:
```
f3iji1ju5yuevaus41q1afiuq
```
+ log in to flag09 with the token, launch getflag command .
