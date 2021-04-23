/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gpprova2;

import java.math.BigInteger;
import java.security.MessageDigest;
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

/**
 *
 * @author Francesco
 */
public class Gpprova2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {
        Scanner scan = new Scanner(System.in);
        MyConnection conn = new MyConnection();
        System.out.println("1-Inserisci");
        System.out.println("2-Prendi");

        String val = scan.nextLine();

        if("1".equals(val)){


           String url = "http://altf4rq.altervista.org/insert.php?table=altf4_utilizzo&data=2021-04-06&oraIn=13:00:00&oraOut=14:00:00&idUtente=1&targaAuto=EC834VB";
           //String url = "http://altf4rq.altervista.org/insert.php?table=altf4_admin&username=prova&password=prova";

            System.out.println(conn.sendGet(url, "pippo"));
        }else if("2".equals(val)){

            String url = "http://altf4rq.altervista.org/get.php?tab=altf4_utilizzo&param=*";
            System.out.println(conn.sendGet(url, "pippo"));
        }else if("3".equals(val)){
            Map<Object, Object> data = new HashMap<>();
            data.put("table", "altf4_admin");
            data.put("username", "admin");

            MessageDigest md = MessageDigest.getInstance("MD5");
            byte[] messageDigest = md.digest("pippo".getBytes());
            BigInteger no = new BigInteger(1, messageDigest);

            // Convert message digest into hex value
            String hashtext = no.toString(16);
            while (hashtext.length() < 32) {
                hashtext = "0" + hashtext;
            }

            data.put("password", hashtext);
            
            String url = "http://altf4rq.altervista.org/insert.php";
            System.out.println(conn.sendPost(url, "inserimento", data));
            
        }
    
    }
    
}
