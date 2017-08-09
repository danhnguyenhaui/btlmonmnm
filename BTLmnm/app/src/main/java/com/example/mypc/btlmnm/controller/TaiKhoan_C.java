package com.example.mypc.btlmnm.controller;

import com.example.mypc.btlmnm.entries.LopHoc;
import com.example.mypc.btlmnm.entries.TaiKhoan;

import java.util.ArrayList;

/**
 * Created by thandieuhaui on 09-Aug-17.
 */

public abstract class TaiKhoan_C {
    public TaiKhoan dangNhap(){
        return null;
    }

    public boolean doiMatKhau(){
        return false;
    }

    public boolean dangXuat(){
        return false;
    }


    public ArrayList<LopHoc> getDSLopHoc(){
        return null;
    }


}
