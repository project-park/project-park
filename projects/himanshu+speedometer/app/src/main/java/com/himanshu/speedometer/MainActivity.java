package com.himanshu.speedometer;

import android.Manifest;
import android.app.Activity;
import android.content.Context;
import android.content.pm.PackageManager;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.media.MediaPlayer;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.RequiresApi;
import androidx.core.content.ContextCompat;

public class MainActivity extends Activity implements SensorEventListener {

    SensorManager sensorManager;
    float startingSteps = 0f, currentSteps = 0f, diffInSteps = 0f, speedHuman=0f, time = 0f;
    int playing = -1;
    boolean running = false;
    MediaPlayer goodPlayer, badPlayer;
    Button btnStart,btnStop;
    TextView tvTimeCount,tvStepCount;
    float inputStep;
    EditText etInput;
    @RequiresApi(api = Build.VERSION_CODES.M)
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        if(ContextCompat.checkSelfPermission(this, Manifest.permission.ACTIVITY_RECOGNITION) == PackageManager.PERMISSION_DENIED) {
            if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.Q) {
                requestPermissions(new String[]{Manifest.permission.ACTIVITY_RECOGNITION}, 10);
            }
        }
        btnStart = findViewById(R.id.btnStart);
        btnStop = findViewById(R.id.btnStop);
        tvTimeCount = findViewById(R.id.tvTimeCount);
        tvStepCount = findViewById(R.id.tvStepCount);
        etInput = findViewById(R.id.etInput);
        btnStop.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(playing!=-1) {
                    if(playing==1) {
                        goodPlayer.stop();
                    } else {
                        badPlayer.stop();
                    }
                }
                finish();
            }
        });
        btnStart.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String input = etInput.getText().toString();
                if(input.isEmpty()) {
                    Toast.makeText(MainActivity.this,"Enter the steps/minute above",Toast.LENGTH_SHORT).show();
                    return;
                }
                btnStart.setClickable(false);
                playBadSong();
                Sensor countSensor = sensorManager.getDefaultSensor(Sensor.TYPE_STEP_COUNTER);
                if(countSensor!=null) {
                    sensorManager.registerListener(MainActivity.this,countSensor,SensorManager.SENSOR_DELAY_UI);
                } else {
                    Toast.makeText(MainActivity.this, "Sensor not found", Toast.LENGTH_SHORT).show();
                }
                inputStep = Float.parseFloat(input);
                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        time++;
                        tvTimeCount.setText((int)time + " sec");
                        new Handler().postDelayed(this,1000);
                    }
                },1000);
            }
        });
        sensorManager = (SensorManager) getSystemService(Context.SENSOR_SERVICE);
    }

    @Override
    protected void onResume() {
        super.onResume();
        running = true;
    }

    @Override
    protected void onPause() {
        super.onPause();
        running = false;
    }

    @Override
    public void onSensorChanged(SensorEvent event) {
        if(running) {
            if(startingSteps == 0) {
                startingSteps = event.values[0];
            }
            currentSteps = event.values[0];
            diffInSteps = currentSteps - startingSteps;
            tvStepCount.setText((int) diffInSteps + " steps");
            if((diffInSteps < 5) || (time < 3)) {
                playBadSong();
            } else {
                if(diffInSteps/time < (inputStep/60)) {
                    playBadSong();
                } else {
                    playGoodSong();
                }
            }
        }
    }

    private void playBadSong() {
        if(playing==-1 || playing==1) {
            if(playing==1){
                goodPlayer.stop();
            }
            playing = 0;
            badPlayer = MediaPlayer.create(MainActivity.this, R.raw.bad_song);
            badPlayer.start();
        }
    }

    private void playGoodSong() {
        if(playing==-1 || playing==0) {
            if(playing==0){
                badPlayer.stop();
            }
            playing = 1;
            goodPlayer = MediaPlayer.create(MainActivity.this, R.raw.good_song);
            goodPlayer.start();
        }
    }

    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {}
}
