package com.example.thehunger;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ImageView;

import com.bumptech.glide.Glide;

public class SuccessActivity extends AppCompatActivity {

    ImageView successImg;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_success);

        successImg = findViewById(R.id.successImg);

        Glide.with(SuccessActivity.this)
                .load("https://innovativesecurities.com/images/icons/success-2-once.gif")
                .into(new GifDrawableImageViewTarget(successImg, 1));
    }
}