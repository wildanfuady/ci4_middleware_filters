<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Auth_model extends Model{
 
    protected $table = "users";
    protected $primaryKey = "id";
 
    public function getLogin($username, $password)
    {
        return $this->db->table($this->table)->where(['username' => $username, 'password' => $password])->get()->getRowArray();
    }
 
}