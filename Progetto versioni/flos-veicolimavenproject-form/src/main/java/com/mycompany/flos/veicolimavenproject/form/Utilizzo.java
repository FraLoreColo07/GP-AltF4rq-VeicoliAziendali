/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.flos.veicolimavenproject.form;

import java.sql.Date;
import java.sql.Time;

/**
 *
 * @author Francesco
 */
public class Utilizzo {

    private String ID;
    private String data;
    private String oraIn;
    private String oraOut;
    private String IDUtente;
    private String Targa;
    private String Destinazione;
    private String motivo;

    public Utilizzo() {
        this.ID = "";
        this.data = null;
        this.oraIn = null;
        this.oraOut = null;
        this.IDUtente = "";
        this.Targa = "";
        this.Destinazione = "";
    }

    public Utilizzo(String ID, String data, String oraIn, String oraOut, String IDUtente, String Targa) {
        this.ID = ID;
        this.data = data;
        this.oraIn = oraIn;
        this.oraOut = oraOut;
        this.IDUtente = IDUtente;
        this.Targa = Targa;
   
    }
    public Utilizzo(String ID, String data, String oraIn, String oraOut, String IDUtente, String Targa, String Destinazione,String motivo) {
        this.ID = ID;
        this.data = data;
        this.oraIn = oraIn;
        this.oraOut = oraOut;
        this.IDUtente = IDUtente;
        this.Targa = Targa;
        this.Destinazione = Destinazione;
        this.motivo=motivo;
    }

    public String getID() {
        return ID;
    }

    public String getDestinazione() {
        return Destinazione;
    }

    public void setID(String ID) {
        this.ID = ID;
    }

    public String getData() {
        return data;
    }

    public void setData(String data) {
        this.data = data;
    }

    public String getOraIn() {
        return oraIn;
    }

    public void setOraIn(String oraIn) {
        this.oraIn = oraIn;
    }

    public String getOraOut() {
        return oraOut;
    }

    public void setOraOut(String oraOut) {
        this.oraOut = oraOut;
    }

    public String getIDUtente() {
        return IDUtente;
    }

    public void setIDUtente(String IDUtente) {
        this.IDUtente = IDUtente;
    }

    public String getTarga() {
        return Targa;
    }

    public void setTarga(String Targa) {
        this.Targa = Targa;
    }

}
