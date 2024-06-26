<?php


$color=["Black","Green","Yellow"];

print_r($color);

?>

<br><br>
<?php
$user= array("Alex","Peter","Ann");

print $user[2];
?>

<pre>
    <?php print_r($user); ?>
    </pre>

    <?php
    //Associative arrays
    $user_data=[
        "fullname" =>"Alex Okama",
        "email"=>"AOkama@yahoo.com",
        "phone"=> "+2548458996"
    ];
    
   print $user_data["email"];
    ?>
    <pre>
        <?php print_r($user_data);?>
</pre>
<?php
$user_details=[
    "Secretary"=> array( "fullname" =>"Alex Okama",
    "address"=>"Mada",
    "email"=>"AOkama@yahoo.com",
    "phone"=> [ 
        "Home" =>"+2548458996",
        "Work"=> "+254091664",
        "Mobile"=> "+254887907",
        ]
    ),
];

print $user_details["Secretary"]["email"]["phone"];
?>
<pre>
    <?php print_r($user_details);?>
</pre>