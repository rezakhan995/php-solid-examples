<?php

interface Xpeed_Worker_Activities {
    public function take_lunch();
    public function get_paid();
}

interface Xpeed_Developer {
  public function code();
}

interface Xpeed_Management {
  public function call_to_client();
  public function arrange_meetings();
}

interface Xpeed_Office_Management {
  public function cook();
  public function daily_shopping();
}



class Developer implements Xpeed_Worker_Activities, Xpeed_Developer {
    public function take_lunch() {
      echo "Developer will have lunch.";
    }
    public function get_paid() {
      echo "Developer will get paid.";
    }
    public function code() {
      echo "Developer will write code.";
    }
}


class HR implements Xpeed_Worker_Activities, Xpeed_Management {
    public function take_lunch() {
      echo "HR will have lunch.";
    }
    public function get_paid() {
      echo "HR will get paid.";
    }
    public function call_to_client() {
        echo "HR will call client.";
    }
    public function arrange_meetings() {
        echo "HR will arrange meeting.";
    }
}


class Office_Assistant implements Xpeed_Worker_Activities, Xpeed_Office_Management {
    public function take_lunch() {
      echo "Office Assistant will have lunch.";
    }
    public function get_paid() {
      echo "Office Assistant get paid.";
    }
    public function cook() {
        echo "Office Assistant will cook the food.";
    }
    public function daily_shopping() {
        echo "Office Assistant will do the daily shopping.";
    }
}