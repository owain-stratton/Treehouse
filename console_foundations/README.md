#### Change file permissions

The first argument represents either **user | group | other** then **+ | -** to add or remove a permission and followed by which type of permission with **read | write | execute**  
* `chmod (u|g|o) (+|-) (r|w|x) arguments`




### Decimal and Octal Numericals
#### Decimal
```
0  1  2  3  4  5  6  7  8  9
10 11 12 13 14 15 16 17 18 19
```

#### Octal
```
0  1  2  3  4  5  6  7
10 11 12 13 14 15 16 17
```

#### Permissions
```
r = 4, w = 2, x = 1

rwx = 7,
r-- = 4,
rw- = 6

$ chmod 777 hello.txt
- gives the user, group and other read, write and execute permissions
```
