package com.example.mypc.btlmnm.entries;

/**
 * Created by thandieuhaui on 09-Aug-17.
 */

public class LopHoc {
    private String idLop = "";
    private String tenLop = "";
    private String soTinChi = "0";
    private String ketThucHocPhan = "";
    private String idGiaoVien = "";



    public String getIdLop() {
        return idLop;
    }

    public void setIdLop(String idLop) {
        this.idLop = idLop;
    }

    public String getTenLop() {
        return tenLop;
    }

    public void setTenLop(String tenLop) {
        this.tenLop = tenLop;
    }

    public String getSoTinChi() {
        return soTinChi;
    }

    public void setSoTinChi(String soTinChi) {
        this.soTinChi = soTinChi;
    }

    public String getKetThucHocPhan() {
        return ketThucHocPhan;
    }

    public void setKetThucHocPhan(String ketThucHocPhan) {
        this.ketThucHocPhan = ketThucHocPhan;
    }

    public String getIdGiaoVien() {
        return idGiaoVien;
    }

    public void setIdGiaoVien(String idGiaoVien) {
        this.idGiaoVien = idGiaoVien;
    }

    public LopHoc() {
    }

    public LopHoc(String idLop, String tenLop, String soTinChi, String ketThucHocPhan, String idGiaoVien) {
        this.idLop = idLop;
        this.tenLop = tenLop;
        this.soTinChi = soTinChi;
        this.ketThucHocPhan = ketThucHocPhan;
        this.idGiaoVien = idGiaoVien;
    }
}
