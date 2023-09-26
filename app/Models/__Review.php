<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class review extends Model
// {
//     use HasFactory;
// }

class Review
{
    static $reviews = [
        [
            "img" => "member-item-01.jpg",
            "nama" => "Ethan Anderson",
            "review" => "An incredible massage experience! The therapist's skilled hands worked magic, relieving every knot and tension. The serene ambiance and attentive service made it an absolute rejuvenating escape. Highly recommended",
            "status" => true
        ],
        [
            "img" => "member-item-02.jpg",
            "nama" => "Benjamin Parker",
            "review" => "Absolutely incredible experience! The massage was expertly done, easing away all my stress and tension. The therapist's skill and soothing ambiance created pure relaxation. Highly recommended for rejuvenation",
            "status" => true
        ],
        [
            "img" => "member-item-03.jpg",
            "nama" => "Lucas Bennett",
            "review" => "Exquisite Balinese massage! The rhythmic techniques melted away every ounce of stress. Tranquil atmosphere, skilled therapist, and aromatic oils transported me to serenity. A blissful escape!",
            "status" => true
        ],
        [
            "img" => "member-item-04.jpg",
            "nama" => "Olivia Mitchell",
            "review" => "Exquisite Balinese Massage! Tranquil ambiance, skilled therapist. Deeply relaxing techniques eased every muscle. A rejuvenating escape for body and mind.",
            "status" => true
        ],
        [
            "img" => "member-item-05.jpg",
            "nama" => "Sophia Carter",
            "review" => "Exquisite Balinese massage! The skilled therapist combined with their warm service created a perfect escape. A wonderful blend of relaxation and professionalism. Highly pleased!",
            "status" => true
        ]
    ];

    public static function all()
    {
        return collect(self::$reviews);
    }

    public static function find()
    {
        $all_review = static::all();
        $show = $all_review->where('status' ,'show');
        return $show;
    }
}