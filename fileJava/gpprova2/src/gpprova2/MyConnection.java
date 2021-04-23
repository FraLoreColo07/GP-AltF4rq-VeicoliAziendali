/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gpprova2;

import java.net.URI;
import java.net.URLEncoder;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import java.nio.charset.StandardCharsets;
import java.util.Map;

/**
 *
 * @author Fabio
 */
public class MyConnection {
    private final HttpClient httpClient = HttpClient.newBuilder()
            .version(HttpClient.Version.HTTP_2)
            .build();
    
    public String sendGet(String uriToSend, String agentToSend) throws Exception {

        HttpRequest request = HttpRequest.newBuilder()
                .GET()
                .uri(URI.create(uriToSend))
                .setHeader("User-Agent", agentToSend)
                .build();

        HttpResponse<String> response = httpClient.send(request, HttpResponse.BodyHandlers.ofString());

        Integer result = response.statusCode();
        // print status code
        String ris = result.toString() +"|";

        String body = response.body();
        // print response body
        ris += body;
        return ris;
    }
    
    public String sendPost(String uriToSend, String agentToSend, Map<Object, Object>data) throws Exception {
        HttpRequest.BodyPublisher postData = buildFormDataFromMap(data);

        HttpRequest request = HttpRequest.newBuilder()
                .POST(postData)
                .uri(URI.create(uriToSend))
                .setHeader("User-Agent", agentToSend) // add request header
                .header("Content-Type", "application/x-www-form-urlencoded")
                .build();

        HttpResponse<String> response = httpClient.send(request, HttpResponse.BodyHandlers.ofString());

        Integer result = response.statusCode();
        // print status code
        String ris = result.toString() +"|";

        String body = response.body();
        // print response body
        ris += body;
        return ris;

    }

    public static HttpRequest.BodyPublisher buildFormDataFromMap(Map<Object, Object> data) {
        var builder = new StringBuilder();
        for (Map.Entry<Object, Object> entry : data.entrySet()) {
            if (builder.length() > 0) {
                builder.append("&");
            }
            builder.append(URLEncoder.encode(entry.getKey().toString(), StandardCharsets.UTF_8));
            builder.append("=");
            builder.append(URLEncoder.encode(entry.getValue().toString(), StandardCharsets.UTF_8));
        }
        System.out.println("\nRETUN HttpRequest.BodyPublisher buildFormDataFromMap(Map<Object, Object> data)\n-----------------");
        System.out.println(builder.toString());
        System.out.println("-----------------");
        return HttpRequest.BodyPublishers.ofString(builder.toString());
    }
}
