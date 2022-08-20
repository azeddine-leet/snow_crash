
$output =  ls -1 $1
while read -r  line
do
    # echo $line;
    file $(which $line) | grep 'not stripped'
    if [ $? eq 0 ]
        echo $line
done


ls -1 /bin | while read -r line; do file $(which $line) | grep 'not stripped'; if [ $? -eq 0 ]; then echo $line; fi; done