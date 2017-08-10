package com.example.mypc.btlmnm.entries;

import java.util.ArrayList;

/**
 * Created by thandieuhaui on 09-Aug-17.
 */

public abstract   class TaiKhoan {
    private String idUser = "";
    private String userName = "";
    private String matKhau = "";
    private String hoDem = "";
    private String ten ="";
    private String ngaySinh ="";
    private String queQuan="";
    private String quyen = "";

    public TaiKhoan() {
    }


    public TaiKhoan(String idUser, String userName, String matKhau, String hoDem, String ten, String ngaySinh, String queQuan, String quyen) {
        this.idUser = idUser;
        this.userName = userName;
        this.matKhau = matKhau;
        this.hoDem = hoDem;
        this.ten = ten;
        this.ngaySinh = ngaySinh;
        this.queQuan = queQuan;
        this.quyen = quyen;
    }

    public String getIdUser() {
        return idUser;
    }

    public void setIdUser(String idUser) {
        this.idUser = idUser;
    }

    public String getUserName() {
        return userName;
    }

    public void setUserName(String userName) {
        this.userName = userName;
    }

    public String getMatKhau() {
        return matKhau;
    }

    public void setMatKhau(String matKhau) {
        this.matKhau = matKhau;
    }

    public String getHoDem() {
        return hoDem;
    }

    public void setHoDem(String hoDem) {
        this.hoDem = hoDem;
    }

    public String getTen() {
        return ten;
    }

    public void setTen(String ten) {
        this.ten = ten;
    }

    public String getNgaySinh() {
        return ngaySinh;
    }

    public void setNgaySinh(String ngaySinh) {
        this.ngaySinh = ngaySinh;
    }

    public String getQueQuan() {
        return queQuan;
    }

    public void setQueQuan(String queQuan) {
        this.queQuan = queQuan;
    }

    public String getQuyen() {
        return quyen;
    }

    public void setQuyen(String quyen) {
        this.quyen = quyen;
    }

    @Override
    public String toString() {
        return "TaiKhoan{" +
                "idUser='" + idUser + '\'' +
                ", userName='" + userName + '\'' +
                ", matKhau='" + matKhau + '\'' +
                ", hoDem='" + hoDem + '\'' +
                ", ten='" + ten + '\'' +
                ", ngaySinh='" + ngaySinh + '\'' +
                ", queQuan='" + queQuan + '\'' +
                ", quyen='" + quyen + '\'' +
                '}';
    }
}
