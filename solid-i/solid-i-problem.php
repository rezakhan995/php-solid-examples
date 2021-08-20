<?php
/**
 * Theory:
 * 
 * A client should never be forced to implement an interface that it doesn’t use
 * 
 * clients shouldn’t be forced to depend on methods they do not use.
 * 
 * many client-specific interfaces are better than one general-purpose interface. 
 * 
 */

interface Xpeed_Worker_Activities {
    public function take_lunch();
    public function daily_shopping();
    public function get_paid();
    public function code();
    public function cook();
    public function call_to_client();
    public function arrange_meetings();
}

class Developer implements Xpeed_Worker_Activities {
    public function take_lunch() {
      echo "Developer will have lunch.";
    }
    public function daily_shopping() {
      echo "HR will do the daily shopping.";
    }
    public function get_paid() {
      echo "Developer will get paid.";
    }
    public function code() {
      echo "Developer will write code.";
    }
    public function cook() {
    }
    public function call_to_client() {
    }
    public function arrange_meetings() {
    }
}


class HR implements Xpeed_Worker_Activities {
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
    public function daily_shopping() {
      echo "HR will do the daily shopping.";
    }
    public function code() {
    }
    public function cook() {
    }
}


class Office_Assistant implements Xpeed_Worker_Activities {
    public function take_lunch() {
      echo "Office Assistant will have lunch.";
    }
    public function get_paid() {
      echo "Office Assistant get paid.";
    }
    public function cook() {
        echo "Office Assistant will call client.";
    }
    public function daily_shopping() {
      echo "Office Assistant will do the daily shopping.";
    }
    
    public function call_to_client() {
    }
    public function arrange_meetings() {
    }
    public function code() {
    }
}