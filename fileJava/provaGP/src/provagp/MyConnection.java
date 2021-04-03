/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package provagp;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 *
 * @author Francesco
 */
public class MyConnection {
    
    //private String url;
    private String filename;
    private boolean saved = false;
    
    public MyConnection(String url,String method){
    
        URL server;
        HttpURLConnection service;
        BufferedReader input;
        BufferedWriter output;
        int status;
        String line;
        
        try{
        
            //url = prefix + URLEncoder.encode(address,"UTF-8");
            String prefix = url;
            server = new URL(prefix);
            service = (HttpURLConnection)server.openConnection();
            
            service.setDoOutput(true); 
            service.setInstanceFollowRedirects(false); 
            service.setRequestMethod(method); 
            service.setRequestProperty("Content-Type", "text/plain"); 
            service.setRequestProperty("charset", "utf-8");
            service.connect();

            status = service.getResponseCode();
            if(status != 200){
            
                return;
            }
            
            input = new BufferedReader(new InputStreamReader(service.getInputStream()));
            output = new BufferedWriter(new FileWriter("salva.xml"));
            String returns = "";
            
            while((line = input.readLine())!= null){
            
                returns+= line;
                output.write(line);
                output.newLine();
            }
            
            input.close();
            output.close();
            saved = true;
            
        }
        catch(IOException exception){      
        }
    }
    public boolean isSaved(){
    
        return saved;
    }
}
