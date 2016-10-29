/*
 * Creative Coding
 * Week 3, 04 - spinning top: curved motion with sin() and cos()
 * by Indae Hwang and Jon McCormack
 * Updated 2016
 * Copyright (c) 2014-2016 Monash University
 *
 * This sketch is the first cut at translating the motion of a spinning top
 * to trace a drawing path. This sketch traces a path using sin() and cos()
 *
 */

int     num;     // the number of items in the array
float[] x;  // current drawing position
float[] y;      // current drawing position
float[] dx;
float[] dy;    // change in position at each frame
float[] rad;       // for updating the angle of rotation each frame
float[] bx;
float[] by;

float max = 1;   // setting a boundary for spinning top to draw within
float min = 0.5;

int distanceMargin;


void setup() {
  size(1500, 250);
   
   num=9;
   distanceMargin = 4;
   
  x = new float[num];
  y = new float[num];
  dx = new float[num];
  dy = new float[num];
  rad = new float[num];
  bx = new float[num];
  by = new float[num];
   
  
  for(int i=0; i<num; i++){
      // initial position in the centre of the screen
      
      if(i%2==0){
         x[i] = 150 * (i+1);
          y[i] = random(50, 175);
        }
        else{
         x[i] = 150 * (i+1);
         y[i] = height/2;
       }
        
     
    
      // dx and dy are the small change in position each frame
      dx[i] = random(-1, 1);//representing the instantaneous velocity of the top
      dy[i] = random(-1, 1);//representing the instantaneous velocity of the top
  }
  background(0);
}


void draw() {
  // blend the old frames into the background
   //blendMode(BLEND);
  
    fill(1, 0);//alpha channel
    rect(0, 0, width, height);
    for(int i =0; i<num;i++){
      rad[i] = radians(frameCount);

        // calculate new position
          x[i] += dx[i];
          y[i] += dy[i];
      
        //When the shape hits the edge of the window, it reverses its direction and changes velocity
        if (x[i] > width-70 || x[i] < 100) {
            dx[i] = dx[i] > 0 ? -random(min, max) : random(min, max);//result = test ? expression1 : expression2;   if (test) {    result = expression1; } else {     result = expression2  }  
        }
      
        if (y[i] > height-100 || y[i] < 100) {
          dy[i] = dy[i] > 0 ? -random(min, max) : random(min, max);
        }
        
        
               
      fill(180);
     
      if(i%2==1){
          //offset hand from the centre
          float bx = x[i] + 50 * cos(rad[i]);
          float by = y[i] + 50 * sin(rad[i]); 
          
          float radius = 50 * sin(rad[i]*0.1);//distance from the length of the ‘hand’ oscillate slowly
          float handX = bx + radius * cos(rad[i]*3);
          float handY = by + radius * sin(rad[i]*3);
          stroke(255, 30, 0, 30);
         line(bx, by, handX, handY);
        }
        
        else{//whites
            //offset hand from the centre
          float bx = x[i] + 75* sin(rad[i]);
          float by = y[i] + 75 * cos(rad[i]); 
          
          float radius = 75 * sin(rad[i]*0.1);//distance from the length of the ‘hand’ oscillate slowly
          float handX = bx + radius * sin(rad[i]*4);
          float handY = by + radius * cos(rad[i]*4);
           stroke(250, 40);
           //strokeWeight(2);
          line(bx, by, handX, handY);
         
         }
        
//ellipse(handX, handY, 2, 2);
      //ellipse(x,y, 3,3); to draw the position of the top (x, y) 
    }
   // saveFrame("line-####.jpg"); 
 
}