package eserciziosocchet1;
import java.net.*;
import java.io.*;


public class Server {
    public static void main(String[] args) throws Exception {

        try {
            ServerSocket connesioneServer = new ServerSocket(25000);
            System.out.println("In attesa di un client ..");
            Socket socket = connesioneServer.accept();
            System.out.println("Connesione effettauata sul" + socket);
            BufferedReader in = new BufferedReader(
                                new InputStreamReader(socket.getInputStream()));
            PrintWriter out = new PrintWriter(
                              new BufferedWriter(
                              new OutputStreamWriter(socket.getOutputStream())),true) ;
            String str ;
            do {
                str = in.readLine();
                System.out.println("Il messagiio ricevuto è:"+str);
                out.println("Il messagiio ricevuto è:"+str);
            }while(str!= null);
            System.out.println("Connesione caduta ..");
            socket.close();

        }catch (IOException e){
            System.out.println("Errore");

        }
    }
}



