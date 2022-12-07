package com.example.thehunger;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.example.thehunger.Response.LoginResponse;
import com.example.thehunger.api.ApiClient;
import com.example.thehunger.api.ApiInterface;
import com.google.gson.Gson;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class MainActivity extends AppCompatActivity {

    Button Login;
    EditText username, password;
    ProgressBar progressBar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        username = findViewById(R.id.editTextUsername);
        password = findViewById(R.id.editTextPassword);

        Login = findViewById(R.id.login_btn);

        progressBar = findViewById(R.id.Progressbar);

        Login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                LoginUser();
//                startActivity(new Intent(MainActivity.this, HomeActivity.class));
            }
        });
    }

    private void LoginUser() {
        progressBar.setVisibility(View.VISIBLE);
        ApiInterface services = ApiClient.getClient().create(ApiInterface.class);
        Call<LoginResponse> call = services.userLogin(
                username.getText().toString(),
                password.getText().toString());
        call.enqueue(new Callback<LoginResponse>() {
            @Override
            public void onResponse(Call<LoginResponse> call, Response<LoginResponse> response) {
                progressBar.setVisibility(View.GONE);
                if (response.isSuccessful()) {

                    if (response.body().error.equalsIgnoreCase("0")) {

                        startActivity(new Intent(MainActivity.this, HomeActivity.class));
                        finishAffinity();
                    } else {

                        Toast.makeText(MainActivity.this, response.body().message, Toast.LENGTH_LONG).show();
                    }
                }
            }

            @Override
            public void onFailure(Call<LoginResponse> call, Throwable t) {
                Log.d("Error",t.getMessage());

                progressBar.setVisibility(View.GONE);
                Toast.makeText(MainActivity.this,"Something went wrong",Toast.LENGTH_LONG).show();
            }
        });
    }
}