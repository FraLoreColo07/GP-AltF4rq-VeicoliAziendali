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
    private Date data;
    private Time oraIn;
    private Time oraOut;
    private String IDUtente;
    private String Targa;

    public Utilizzo() {
        this.ID = "";
        this.data = null;
        this.oraIn = null;
        this.oraOut = null;
        this.IDUtente = "";
        this.Targa = "";
    }
    
    public Utilizzo(String ID, Date data, Time oraIn, Time oraOut, String IDUtente, String Targa) {
        this.ID = ID;
        this.data = data;
        this.oraIn = oraIn;
        this.oraOut = oraOut;
        this.IDUtente = IDUtente;
        this.Targa = Targa;
    }

    public String getID() {
        return ID;
    }

    public void setID(String ID) {
        this.ID = ID;
    }

    public Date getData() {
        return data;
    }

    public void setData(Date data) {
        this.data = data;
    }

    public Time getOraIn() {
        return oraIn;
    }

    public void setOraIn(Time oraIn) {
        this.oraIn = oraIn;
    }

    public Time getOraOut() {
        return oraOut;
    }

    public void setOraOut(Time oraOut) {
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
