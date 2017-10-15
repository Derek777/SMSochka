<?php

namespace App\Models;

use  PDO;

class Sms extends \Core\Model
{
    public static function getAll()
    {
//        $host = 'localhost';
//        $dbname = 'mvc';
//        $username = 'root';
//        $password = '';

        try {
//            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $db = static::getDB();

            $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public static function getLast()
    {
        try {
            $db = static::getDB();

            $stmt = $db->query('SELECT sms_text FROM sms ORDER BY sms_id DESC LIMIT 6');

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $mass = [];

            foreach ($results as $key => $value){
                array_push($mass, $value['sms_text']);
            }
//                        dd($mass);
            return $mass;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public static function getCategory($category)
    {
        try {
            $db = static::getDB();

            $stmt = $db->query("SELECT c_category FROM category WHERE c_id=$category");

            $results = $stmt->fetch();
//            dd(time());
//dd(date("d.m.Y", time()));
            return $results[0];

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}