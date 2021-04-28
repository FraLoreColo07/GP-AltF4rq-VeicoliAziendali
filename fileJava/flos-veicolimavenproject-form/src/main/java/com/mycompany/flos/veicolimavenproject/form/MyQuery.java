/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.flos.veicolimavenproject.form;

import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.HashMap;
import java.util.Map;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Francesco
 */
public class MyQuery {
    
    private MyConnection conn;
    
    public MyQuery(){
    
        conn = new MyConnection();
    }
    public String getData(String val,String table){
        
        String url = "http://altf4rq.altervista.org/get.php?tab="+table+"&param=*&where="+val;
        String data = null;
        try {
            data = conn.sendGet(url, "ricevimento");
        } catch (Exception ex) {
            Logger.getLogger(MyQuery.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        return data;
    }
    
    public String chkLogin(String username,String password,String combo){
        
        Map<Object, Object> data = new HashMap<>();

        if("Utente".equals(combo))
            data.put("tab","altf4_utenti");
        else if("Amministratore".equals(combo))
             data.put("tab","altf4_admin");
        data.put("username", username);

        MessageDigest md = null;
        
        try {
            md = MessageDigest.getInstance("MD5");
        } catch (NoSuchAlgorithmException ex) {
            Logger.getLogger(MyQuery.class.getName()).log(Level.SEVERE, null, ex);
        }
      
            byte[] messageDigest = md.digest(password.getBytes());
            BigInteger no = new BigInteger(1, messageDigest);

            // Convert message digest into hex value
            String hashtext = no.toString(16);
            while (hashtext.length() < 32) {
                hashtext = "0" + hashtext;
            }

            data.put("password", hashtext);

            String url = "http://altf4rq.altervista.org/chkLogin.php";

            String msg = "";
       
        try {
            msg = conn.sendPost(url, "ricevimento", data);
        } catch (Exception ex) {
            Logger.getLogger(MyQuery.class.getName()).log(Level.SEVERE, null, ex);
        }
       
        return msg;
    }
    
}
