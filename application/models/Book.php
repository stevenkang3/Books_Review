<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Model {

  public function register($info)
  {
    $register_query = "INSERT into users (name, alias, email, password, created_at, updated_at)
                        VALUES (?,?,?,?,NOW(), NOW())";
    $this->db->query($register_query, array($info['name'], $info['alias'], $info['email'], $info['password']));
    return $this->db->insert_id();
  }
  public function login($user_info)
  {
    $login_query = "SELECT * FROM users WHERE users.email = ? AND users.password = ?";
    return $this->db->query($login_query, array($user_info['email'], $user_info['password']))->row_array();
  }

  public function all_data()
  {
    $query = $this->db->query("SELECT ratings, comments, reviews.created_at, author, title, users.name
                              FROM reviews LEFT JOIN users ON reviews.book_user_id = users.id
                              LEFT JOIN books ON books.user_id = users.id ORDER BY created_at DESC");
    return $query->result_array();
  }
}
