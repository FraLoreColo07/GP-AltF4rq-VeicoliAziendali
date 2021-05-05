/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.flos.veicolimavenproject.form;

/**
 *
 * @author colombo_francesco
 */
class Prenotazione {
    
    private String ID;
    private String data;
    private String oraIn;
    private String IDUtente;
    private String Targa;
    private String Destinazione;
    
    public Prenotazione(String ID, String IDUtente,String Targa,String data, String oraIn, String Destinazione) {
        this.ID = ID;
        this.data = data;
        this.oraIn = oraIn;
        this.IDUtente = IDUtente;
        this.Targa = Targa;
        this.Destinazione = Destinazione;
    }
    
    public String getID() {
        return ID;
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

    public String getDestinazione() {
        return Destinazione;
    }

    public void setDestinazione(String Destinazione) {
        this.Destinazione = Destinazione;
    }
    
   
}
