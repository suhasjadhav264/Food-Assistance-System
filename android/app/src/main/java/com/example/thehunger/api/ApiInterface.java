package com.example.thehunger.api;

import com.example.thehunger.Response.LoginResponse;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;
import retrofit2.http.Query;

public interface ApiInterface {

    @FormUrlEncoded
    @POST("login")
    Call<LoginResponse> userLogin (@Field("username") String username,
                                   @Field("password") String password);

}
