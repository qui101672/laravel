<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tai_khoan extends Eloquent implements UserInterface, RemindableInterface {

    protected $guarded = array();
    public static $rules = array(
        'username' => 'required',
        'password' => 'required',
        'PhanQuyen_Id' => 'required',
        'doi_tuong' => 'required'
    );
    protected $table = 'tai_khoans';
    protected $hidden = array('password');
    protected $fillable = array('username', 'password', 'PhanQuyen_Id', 'doi_tuong');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier() {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword() {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

    public function get_username($id) {
        $results = DB::table('tai_khoans')->where('id', '=', $id)->pluck('username');
        return $results;
    }

    public function check_ad($user) {
//        $ldap_usr_dom = "@ctu.edu.vn";
//        // connect to ldap server
//        $ldapconn = ldap_connect("172.18.27.5") or die("Could not connect to LDAP server.</br>");
//        if ($ldapconn) {
//            // binding to ldap server
//            $ldapbind = @ldap_bind($ldapconn, $user['username'] . $ldap_usr_dom, $user['password']);
//            // verify binding
//            if ($ldapbind) {
//                return 1;
//            } else {
//                return 0;
//            }
//        }
        return 1;
    }

}
