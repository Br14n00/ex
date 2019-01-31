
import java.net.*;
import java.io.*;



public class Client {
    public static void main(String[] args) throws IOException {
        try{
            Socket socket = new Socket("localhost", 25000);
            System.out.println("Connesione al socket "+socket+" effetuata:");
            BufferedReader in = new BufferedReader(
                    new InputStreamReader(socket.getInputStream()));
            PrintWriter out = new PrintWriter(
                    new BufferedWriter(
                            new OutputStreamWriter(socket.getOutputStream())),true) ;
            BufferedReader tastiera ;
            do {
                tastiera = new BufferedReader(new InputStreamReader (System.in));
                out.println(tastiera.readLine());
                String str =  in.readLine();
                System.out.println(str);
            }while (!tastiera.readLine().equals("exit"));
            System.out.println("Connesione chiusa ..");
            socket.close();
        }catch (IOException e){
            System.out.println("Errore di conessione ..");
        }
    }
}
