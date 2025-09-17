CC=gcc

CFLAGS= -c -Wall


all: prog

prog: main.o isOdd.o isEven.o
	$(CC) main.o isOdd.o isEven.o -o prog

main.o: main.c
	$(CC) $(CFLAGS) main.c
	
isOdd.o: isOdd.c
	$(CC) $(CFLAGS) isOdd.c

isEven.o: isEven.c
	$(CC) $(CFLAGS) isEven.c
	
clean:
	rm -rf *.o