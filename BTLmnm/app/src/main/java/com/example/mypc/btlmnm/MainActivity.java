package com.example.mypc.btlmnm;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import com.example.mypc.btlmnm.controller.HocSinh_C;
import com.example.mypc.btlmnm.controller.TaiKhoan_C;
import com.example.mypc.btlmnm.entries.TaiKhoan;

public class MainActivity extends AppCompatActivity {
    TaiKhoan_C taiKhoan = null;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        taiKhoan = new HocSinh_C(getApplicationContext());
        taiKhoan.dangNhap("tuannguyen", "1");
    }
}
