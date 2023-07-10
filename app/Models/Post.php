<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post -> posts
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'prefecture',
        'gender',
        'employmentstatus',
        'company',
        'jyob',
        'stay',
        'affiliation',
        'postion',
        'annual',
        'lastyear',
    ];
    
    public function scopeSearch($query) {
    $request = request();

    $query->when($request->id, function($q, $id) {
        $q->where('id', 'LIKE', '%' . $id . '%');
    })

    ->when($request->name, function($q, $name) {
        $q->where('name', 'LIKE', '%' . $name . '%');
    })
    ->when($request->prefecture, function($q, $prefecture) {
        $q->where('prefecture', 'LIKE', '%' . $prefecture . '%');
    })
    ->when($request->gender, function($q, $gender) {
        $q->where('gender', 'LIKE', '%' . $gender . '%');
    })
    ->when($request->employmentstatus, function($q, $employmentstatus) {
        $q->where('employmentstatus', 'LIKE', '%' . $employmentstatus . '%');
    })
    ->when($request->company, function($q, $company) {
        $q->where('company', 'LIKE', '%' . $company . '%');
    })
    ->when($request->jyob, function($q, $jyob) {
        $q->where('jyob', 'LIKE', '%' . $jyob . '%');
    })
    ->when($request->stay, function($q, $stay) {
        $q->where('stay', 'LIKE', '%' . $stay . '%');
    })
     ->when($request->affiliation, function($q, $affiliation) {
        $q->where('affiliation', 'LIKE', '%' . $affiliation . '%');
    })
    ->when($request->postion, function($q, $postion) {
        $q->where('postion', 'LIKE', '%' . $postion . '%');
    })
    ->when($request->annual, function($q, $annual) {
        $q->where('annual', 'LIKE', '%' . $annual . '%');
    })
    ->when($request->lastyear, function($q, $lastyear) {
        $q->where('lastyear', 'LIKE', '%' . $lastyear . '%');
    });
  }
}

