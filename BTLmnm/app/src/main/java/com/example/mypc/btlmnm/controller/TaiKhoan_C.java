package com.example.mypc.btlmnm.controller;

import android.content.Context;
import android.util.Log;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.Volley;
import com.example.mypc.btlmnm.entries.Config;
import com.example.mypc.btlmnm.entries.GiaoVien;
import com.example.mypc.btlmnm.entries.HocSinh;
import com.example.mypc.btlmnm.entries.LopHoc;
import com.example.mypc.btlmnm.entries.TaiKhoan;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;

/**
 * Created by thandieuhaui on 09-Aug-17.
 */

public abstract class TaiKhoan_C {
    private final String URL_LOGIN = Config.HOST_NAME + "view/v_login.php";
    private TaiKhoan taiKhoan;
    private RequestQueue requestQueue;
    //private Context context;

    public TaiKhoan_C(Context context) {
        this.requestQueue = Volley.newRequestQueue(context);
        //this.context = context;
    }

    public TaiKhoan dangNhap(final String username, final String password){
        taiKhoan = null;
        final JsonObjectRequest request = new JsonObjectRequest(Request.Method.POST,
                URL_LOGIN, null, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {

                try {
                    String quyen = response.getString("quyen");
                    if("1".equals(quyen)){
                        taiKhoan = new GiaoVien(
                            response.getString("iD"), response.getString("userName")
                                , response.getString("passWord"), response.getString("ho")
                                , response.getString("ten"), response.getString("ngaysinh")
                                , response.getString("que"), quyen

                        );

                    }else{
                        taiKhoan = new HocSinh(
                                response.getString("iD"), response.getString("userName")
                                , response.getString("passWord"), response.getString("ho")
                                , response.getString("ten"), response.getString("ngaysinh")
                                , response.getString("que"), quyen

                        );
                    }
                } catch (JSONException e) {
                    taiKhoan = null;
                    e.printStackTrace();

                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                taiKhoan = null;
                error.printStackTrace();
            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map pas = new HashMap();
                pas.put("username", username);
                pas.put("password", password);
                return super.getParams();
            }
        };
        this.requestQueue.add(request);
        return taiKhoan;
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
