/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.flos.veicolimavenproject.form;

import java.sql.Date;

/**
 *
 * @author Francesco
 */
class Auto {

     private String targa;
    private String modello;
    private String marca;
    private Date dataRevisone;
    private Date dataAcquisto;
    private String img;
    private String status;
    
    public Auto(String targa, String modello, String marca, Date dataRevisone, Date dataAcquisto, String img, String status) {
        this.targa = targa;
        this.modello = modello;
        this.marca = marca;
        this.dataRevisone = dataRevisone;
        this.dataAcquisto = dataAcquisto;
        this.img = img;
        this.status = status;
    }
   
    
    public String getTarga() {
        return targa;
    }

    public void setTarga(String targa) {
        this.targa = targa;
    }

    public String getModello() {
        return modello;
    }

    public void setModello(String modello) {
        this.modello = modello;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    public Date getDataRevisone() {
        return dataRevisone;
    }

    public void setDataRevisone(Date dataRevisone) {
        this.dataRevisone = dataRevisone;
    }

    public Date getDataAcquisto() {
        return dataAcquisto;
    }

    public void setDataAcquisto(Date dataAcquisto) {
        this.dataAcquisto = dataAcquisto;
    }

    public String getImg() {
        return img;
    }

    public void setImg(String img) {
        this.img = img;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public Auto() {
        this.targa = "";
        this.modello = "";
        this.marca = "";
        this.dataRevisone = null;
        this.dataAcquisto = null;
        this.img = "";
        this.status = "";
    }
   
}
