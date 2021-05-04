/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.flos.veicolimavenproject.form;

import java.io.IOException;
import java.nio.charset.Charset;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Paths;
import org.json.JSONArray;
import org.json.JSONObject;

/**
 *
 * @author colombo_francesco
 */
class JSONfileParser {
    public void parse(String inputFile) throws IOException {
        
        String allInputFile = this.readFile(inputFile,
                StandardCharsets.UTF_8);
        JSONObject obj = new JSONObject(allInputFile);
        if (obj != null) {
            JSONArray dataset = obj.optJSONArray("items");
            if (dataset != null) {
                for (int i = 0; i < dataset.length(); i++) {
                    JSONObject current = dataset.optJSONObject(i);

                    //flat objects
                    if (current.get("kind") != null) {
                        System.out.println(current.get("kind").toString());
                    }
                    //sub-objects
                    JSONObject subObject;
                    if (current.get("pagemap") != null) {
                        subObject = current.optJSONObject("pagemap");
                        if (subObject.get("citation_title") != null) {
                            System.out.println(subObject.get("citation_title").toString());
                        }
                    }
                }
            }
        }
    }

    private String readFile(String path, Charset encoding)
            throws IOException {
        byte[] encoded = Files.readAllBytes(Paths.get(path));
        return new String(encoded, encoding);
    }
}
