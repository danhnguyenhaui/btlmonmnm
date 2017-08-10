package com.example.mypc.btlmnm.entries;

import java.util.ArrayList;

/**
 * Created by thandieuhaui on 09-Aug-17.
 */

public class GiaoVien extends TaiKhoan {
    private String is_gv = "";
    private String is_user = "";

    public String getIs_gv() {
        return is_gv;
    }

    public void setIs_gv(String is_gv) {
        this.is_gv = is_gv;
    }

    public String getIs_user() {
        return is_user;
    }

    public void setIs_user(String is_user) {
        this.is_user = is_user;
    }

    public GiaoVien(String is_gv, String is_user) {
        this.is_gv = is_gv;
        this.is_user = is_user;
    }

    public GiaoVien(String idUser, String userName, String matKhau, String hoDem, String ten, String ngaySinh, String queQuan, String quyen) {
        super(idUser, userName, matKhau, hoDem, ten, ngaySinh, queQuan, quyen);
    }

    public GiaoVien(String idUser, String userName, String matKhau, String hoDem, String ten, String ngaySinh, String queQuan, String quyen, String is_gv, String is_user) {
        super(idUser, userName, matKhau, hoDem, ten, ngaySinh, queQuan, quyen);
        this.is_gv = is_gv;
        this.is_user = is_user;
    }
}
