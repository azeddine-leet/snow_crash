## Walkthrough :
- inside the home directory, i found a .pcap file.(file contain packet data of a network).
- used the command below to copy it to my kali linux machine
#### Command:
```
scp -P 4242 level02@IP:~/level02.pcap ~/Desktop
```
- open the file using wireshark .
- go to > analyze > follow > follow stream .
- client msg in red, server in red
- i got **ft_waNDReL0L**
- log in to flag02 with the password, and don't forget to launch getflag

## Ressources :
[wireshark tutorial](https://resources.infosecinstitute.com/topic/pcap-analysis-basics-with-wireshark/)`