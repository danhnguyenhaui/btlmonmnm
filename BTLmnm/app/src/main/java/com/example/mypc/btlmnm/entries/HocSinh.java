package com.example.mypc.btlmnm.entries;

import java.util.ArrayList;

/**
 * Created by thandieuhaui on 09-Aug-17.
 */

public class HocSinh extends TaiKhoan {
    private String id_hs = "";
    private String id_user = "";
    private String id_lop = "";

    public String getId_hs() {
        return id_hs;
    }

    public void setId_hs(String id_hs) {
        this.id_hs = id_hs;
    }

    public String getId_user() {
        return id_user;
    }

    public void setId_user(String id_user) {
        this.id_user = id_user;
    }

    public String getId_lop() {
        return id_lop;
    }

    public void setId_lop(String id_lop) {
        this.id_lop = id_lop;
    }

    public HocSinh(String id_hs, String id_user, String id_lop) {
        this.id_hs = id_hs;
        this.id_user = id_user;
        this.id_lop = id_lop;
    }

    public HocSinh(String idUser, String userName, String matKhau, String hoDem, String ten, String ngaySinh, String queQuan, String quyen) {
        super(idUser, userName, matKhau, hoDem, ten, ngaySinh, queQuan, quyen);
    }

    public HocSinh(String idUser, String userName, String matKhau, String hoDem, String ten, String ngaySinh, String queQuan, String quyen, String id_hs, String id_user, String id_lop) {
        super(idUser, userName, matKhau, hoDem, ten, ngaySinh, queQuan, quyen);
        this.id_hs = id_hs;
        this.id_user = id_user;
        this.id_lop = id_lop;
    }
}
