package com.example.mypc.btlmnm.controller;

import android.content.Context;
import android.util.Log;
import android.widget.Toast;

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
    //private final String URL_LOGIN = Config.URL;
    private TaiKhoan taiKhoan;
    private RequestQueue requestQueue;
    private Context context;

    public TaiKhoan_C(Context context) {
        this.requestQueue = Volley.newRequestQueue(context);
        this.context = context;
    }

    public TaiKhoan dangNhap(final String username, final String password){
        taiKhoan = null;
        JsonObjectRequest request = new JsonObjectRequest(Request.Method.POST,
                Config.URL, null, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {

                try {
                    JSONObject obj = response.get
                    Toast.makeText(context, obj.toString(), Toast.LENGTH_LONG).show();
                    String quyen = obj.getString("quyen");
                    Log.e("data", obj.toString());
                    if("1".equals(quyen)){
                        taiKhoan = new GiaoVien(
                            obj.getString("iD"), obj.getString("userName")
                                , obj.getString("passWord"), obj.getString("ho")
                                , obj.getString("ten"), obj.getString("ngaysinh")
                                , obj.getString("que"), quyen

                        );

                    }else{
                        taiKhoan = new HocSinh(
                                obj.getString("iD"), obj.getString("userName")
                                , obj.getString("passWord"), obj.getString("ho")
                                , obj.getString("ten"), obj.getString("ngaysinh")
                                , obj.getString("que"), quyen

                        );
                    }
                } catch (JSONException e) {
                    taiKhoan = null;
                    Log.e("Error", "onErrorResponse: " + e.getMessage());

                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                taiKhoan = null;
                Log.e("Error", "onErrorResponse: " + error.getMessage());
            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map pas = new HashMap();
                pas.put("username", username);
                pas.put("password", password);
                pas.put("request", "login");
                return super.getParams();
            }
        };
        this.requestQueue.add(request);
        //Toast.makeText(context, taiKhoan.toString(), Toast.LENGTH_LONG).show();
        return taiKhoan;
    }



    public boolean doiMatKhau(){
        return false;
    }

    public boolean dangXuat(){
        return false;
    }

    public ArrayList<TaiKhoan> getDSHocSinh(){
        return  null;
    }

    public ArrayList<TaiKhoan> getDSLopHoc(){
        return null;
    }

    public RequestQueue getRequestQueue() {
        return requestQueue;
    }



    public Context getContext() {
        return context;
    }

    public void setContext(Context context) {
        this.context = context;
    }
}
