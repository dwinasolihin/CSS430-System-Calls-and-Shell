# CSS430-System-Calls-and-Shell
# Part 1 – Processes.cpp
The program is designed to emulate how the Linux shell executes processes. How the program is designed that the parent process with fork a child process, which then forks a grandchild process which then forks a great grandchild process.
The great grandchild is set up so that it reads from the pipe and uses the execlp() on ps -A. The grandchild is set up so that it reads from the first pipe and write to the second pipe, then uses the execlp() on grep argv[1]. The child is able to read from the first pipe and uses execlp() on wc –l.

# Part 2 – Shell.java
The program is designed to handle programs sent to ThreadOS. It takes in a command from the keyboard. It first splits the command based on ‘;’ (sequential command) and then it splits the commands based on ‘&’ (concurrent command). This then executes each command at the same time and adding their tid to the HashTable that holds the set of threads we are creating. As threads are being created and added to the HashTable, the tid calls the system call join() because the parent threads must wait for its child to be terminated in order to finish.
To run this program, you must load Shell.java from ThreadOS and execute commands from PingPong calls, concurrent, sequential, and dummy calls for checks. For example, some of the commands that you can input into your Shell.java are:
 PingPong abc 10000 & PingPong xyz 10000 & PingPong 123 10000 &
 PingPong a 25 & PingPong b 7; PingPong c 10
