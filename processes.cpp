//
//  Processes.cpp
//  This Processes program will emulate the Linux command,
//  '$ ps -A | grep argv[1] | wc -l' by using pipe, fork, exec, and dup2.
//
//  Created by Dwina Solihin on 10/6/16.
//  Copyright © 2016 Dwina Solihin. All rights reserved.
//

#include <stdio.h> // for perror
#include <iostream> // for file I/O, cerr and cout
#include <stdlib.h> // for exit
#include <unistd.h> // for fork, pipe
#include <sys/wait.h> // for wait
using namespace std;

int main(int argc, const char * argv[]) {
    
    pid_t pid;
    //int n;
    int fd1[2]; // pipe1, between ps -A and grep argv[1]
    int fd2[2]; // pipe2, between grep argv[1] and wc -l
    const int read = 0, write = 1;
    
    //checks if the arguments are less than 2
//    if (argc < 2){
//        perror("Error!");
//        return 0;
//    }
    
    //checks the value of pipe 1
    if (pipe(fd1) < 0){
        perror("ERROR. Not able to read or write");
    }
    //checks the value of pipe 2
    if (pipe(fd2) < 0){
        perror("ERROR. Not able to read or write");
    }
    
    /*
     NOTE:
     For the various if and else if statments, I used the call 
     'pid = fork() < 0' or 'pid = fork() == 0' because I was searching on how
     to call the fork in the if statement. As I searched online I saw many 
     different wants to call the fork in the if statements. I decided to use
     'pid = fork()' because it made sense in my head as I was designing and
     coding this program.
    */
    
    //Start of the creation of parent, child, grandchild, and
    //great-grandchild process.
    
    /*
     Below is the code where the program forks and creates the children 
     from the parent processes. There will be 2 pipes created (1st between great 
     grandchild and grandchild, 2nd between grandchild and child) and from there,
     the program is designed so that it will have the path where the great 
     grandchild can only write to the pipe, the grandchild can read from the 1st
     pipe and write to the 2nd pipe and then the child can only read from the
     2nd pipe.
     */
    if ((pid = fork()) < 0){ //checks the first fork process (child)
        perror("Fork error");
        exit(EXIT_FAILURE);
    } else if ((pid = fork()) == 0){ //creates child process
        if ((pid = fork()) < 0){ //creates grandchild process
            perror("Fork error");
            exit (EXIT_FAILURE);
        } else if ((pid = fork()) == 0){
            if ((pid = fork()) < 0){ //creates great grandchild process
                perror("Fork error");
                exit (EXIT_FAILURE);
            
            } else if ((pid = fork()) == 0){
                //Below are system calls that basically open and close
                //the pipe connections
                dup2(fd1[write], write);
                close(fd2[read]);
                close(fd1[read]);
                close(fd2[write]);
                
                
                execlp("ps", "ps", "-A", NULL);
            }
        else { //the grandchild process calls on the pipe
            //Below are system calls that basically open and close
            //the pipe connections
            dup2(fd1[read], read);
            close(fd1[write]);
            dup2(fd2[write], write);
            close(fd2[read]);
                
            execlp("grep", "grep", "argv[1]", NULL);
        }
        
    } else { //the child process calls on the pipe
        //Below are system calls that basically open and close
        //the pipe connections
        dup2(fd2[read], read);
        close(fd1[write]);
        close(fd1[read]);
        close(fd2[write]);
                
        execlp("wc", "wc", "-l", NULL);
    
      }
    } else { //parent process calls
        close(fd1[0]);
        close(fd1[1]);
        close(fd2[0]);
        close(fd2[1]);
        
        wait(NULL); //parent waits for child to end
    }
    return 0;
}
