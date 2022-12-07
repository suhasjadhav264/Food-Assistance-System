package com.example.thehunger.Response;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class LoginResponse {

    @SerializedName("error")
    @Expose
    public String error;
    @SerializedName("message")
    @Expose
    public String message;
    @SerializedName("user")
    @Expose
    public User user;

    public class User {

        @SerializedName("id")
        @Expose
        public Integer id;
        @SerializedName("username")
        @Expose
        public String username;
        @SerializedName("email")
        @Expose
        public String email;
        @SerializedName("mobile")
        @Expose
        public String mobile;

    }

}
