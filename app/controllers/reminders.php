<?php

class Reminders extends Controller {

    public function index() {
      $R = $this->model('Reminder');
      $list_of_reminders = $R->get_all_reminders();
      print_r($list_of_reminders);
      die;
      $this->view('reminders/index', ['reminders' => $list_of_reminders]);
    }

    public function create() {
      $R = $this->model('Reminder');
      $this->view('reminders/create');
    }
}
