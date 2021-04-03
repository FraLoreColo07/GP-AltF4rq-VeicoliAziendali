/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package provagp;

import java.util.Scanner;

/**
 *
 * @author Francesco
 */
public class ProvaGP {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
         Scanner scan = new Scanner(System.in);
         
         System.out.println("1-Inserisci");
         System.out.println("2-Prendi");
         
         String val = scan.nextLine();
         
         if("1".equals(val)){
         
         
             String url = "http://altf4rq.altervista.org/insert.php?table=altf4_utilizzo&data=2021-04-06&oraIn=13:00:00&oraOut=14:00:00&idUtente=1&targaAuto=EC134VB";
             MyConnection conn = new MyConnection(url,"GET");
             
            if (conn.isSaved()) {
                System.out.println("Risposta servizio salvata nel file XML.");
            } else {
                System.err.println("Errore interrogazione servizio.");
            }
         }else if("2".equals(val)){
             
             String url = "http://altf4rq.altervista.org/get.php?tab=altf4_utilizzo&param=*";
             MyConnection conn = new MyConnection(url,"GET");
             
            if (conn.isSaved()) {
                System.out.println("Risposta servizio salvata nel file XML.");
            } else {
                System.err.println("Errore interrogazione servizio.");
            }
             
         }

    }
}
    

