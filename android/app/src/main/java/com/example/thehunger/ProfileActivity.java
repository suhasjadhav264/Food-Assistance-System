package com.example.thehunger;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

import com.bumptech.glide.Glide;

public class ProfileActivity extends AppCompatActivity {

    ImageView s;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_profile);

        s = findViewById(R.id.profile_photo);

        findViewById(R.id.GiveFoodBtn).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(ProfileActivity.this, SuccessActivity.class));
            }
        });

//        Glide.with(ProfileActivity.this)
//                .load(getResources().getDrawable(R.drawable.animation_success))
//                .into(s);

    }
}