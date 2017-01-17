import java.util.Set;
import java.util.HashSet;

/**
 * Below is a Shell.java program that is designed to handle programs sent to 
 * ThreadOS. It takes in multiple commands that are in one line and send them
 * to the system to execute. This program uses threads to run multiple processes
 * as their own. It can run threads simultaneously using the '&' or run sequentially 
 * using ';'. 
 *
 * @author Dwina Solihin
 */
public class Shell extends Thread{
    private int commandCount = 1; 
    
    public Shell(){
        
    } //default constructor
    public Shell(String args[]){
    
    } //copy constructor
    
    /*
    Below is a run function that takes in input through StringBuffer. It then 
    sets that input into a String. It does checks to see if it is an exit
    statment or an empty line. 
    If it is not an empty line, it then splits the command at the ';' if it is 
    there and then goes to the checkLine(). 
    */
    public void run(){
        
        while(true){
            
            //StringBuffer, similar to a string but can be modified and is safe
            //to use with multiple threads. 
            StringBuffer buffer = new StringBuffer(); 
            
            SysLib.cin(buffer); //takes in the StringBuffer from above
            SysLib.cout("Shell[" + commandCount + "]%");
            
            String input = new String(buffer); //buffer to string for later use
            
            //check for an exit command
            if (input.compareTo("exit") == 0){
                break;
            }
            
            //checks if there is no empty line
            if (!input.isEmpty()){
                commandCount++; //adds to commandCount
                
                //For-each loop that splits a String command at a semicolon
                //For each split it does, it runs it string through the
                //checkLine function below.
                for (String commands: input.split(";")){
                    checkLine(commands);
                }
            } 
        }
        
        SysLib.exit(); //while loop is broken and program ends
    }
    
    /*
    Below is a function let us run commands concurrently. The program sets up a 
    HashTable to save the split commands and keep track of threads currently 
    active. This function checks and splits commands separated by "&". 
    */
    public void checkLine(String input){
        int tid = 0; //Thread ID
        Set<Integer> threads = new HashSet<Integer>(); //HashTable of active  tids
        
        for (String current: input.split("&")){ //splits at "&"
            String[] list = SysLib.stringToArgs(current); // adds string to list array
            
            if (list.length == 0){ //checks if the array is empty
                continue;
            } else {
                //Adds tids to the HashTable if they have been successfully executed
                    if ((tid = SysLib.exec(list)) > -1){ 
                        threads.add(tid); //adds thread to the set
                    }
            }
        }
        
        //makes sure that the Hashtable is not empty. Goes through while there 
        //are still threads being performed. 
        while(!threads.isEmpty()){
            tid = SysLib.join(); //called to wait for the child thread to be terminated
            
            if (threads.contains(tid)){
                threads.remove(tid); 
                //remove tids from set as the threads are running
            }
        }
    }  
}