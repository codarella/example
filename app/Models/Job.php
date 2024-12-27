<?php
 
 namespace App\Models;
 use Arr;
 use Illuminate\Contracts\Database\ModelIdentifier;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Job extends Model {
    use HasFactory;
    protected $table = "job_listings";
    protected $fillable = ['Title','Salary','employer_id'];
    
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags()
    { 
        return $this->belongsToMany(Tag::class,foreignPivotKey:"job_listing_id");
    }

    
    

    
}
 